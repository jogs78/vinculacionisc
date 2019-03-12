<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateGraduateAdminRequest;
use App\Http\Requests\CreateCompanyAdminRequest;
use App\Http\Requests\CreateTeacherRequest;
use App\Http\Requests;
use App\Models\Graduate;
use App\Models\Period;
use App\Models\Depi;
use App\Models\Company;
use App\Models\Service;
use App\Models\Residents;
use App\Models\Vacancy;
use App\Models\Teacher;
use App\User;
use App\Role;
use Hash;   
use Alert;
use Mail;
use Auth;
use DB;

class AdminController extends Controller
{
    public function graduates() 
    {
    	//$graduates = Graduate::all();


        $graduates=DB::table('graduates','periods')
                              ->select('graduates.id','graduates.name','graduates.last_name','graduates.curp','graduates.sex','graduates.birthday','graduates.address','graduates.phone','periods.description')
                              ->join('periods','periods.id','=','graduates.id_egreso')
                              ->get();
                               // var_dump($graduates);
        if($graduates>0)                     

    	return view ('administrator.graduates')
    	->with('graduates', $graduates); 

        else
            $graduates=0;
            return view ('administrator.graduates')
        ->with('graduates', $graduates); 
    }

    

    public function createGraduate()
    {
        $periodos=Period::lists('description','id');
    	return view('administrator.create-graduate',compact('periodos'));
        

    }

    public function storeGraduate(CreateGraduateAdminRequest $request)
    {
        $input = $request->all();
        //var_dump($input);


        $password_random = 'secret';
        /*==== Create User for Graduate ====*/
        $role = Role::where('name', 'graduate')->first();
        $data['name'] = $request->input('name').' '.$request->input('last_name');
        $data['email'] = $request->input('email');
        $data['password'] = Hash::make($password_random);
        $usercreate = User::create($data);
        
        $datamail['name'] = $request->input('name');
        $datamail['pass'] = $password_random;
        $datamail['email'] = $request->input('email');
        $datamail['rol'] = $role->display_name;



        Mail::send('mailer.register', ['datamail' => $datamail], function($mail) use($datamail){
            $mail->subject('Te proporcionamos las credenciales de acceso al sistema'.' '.$datamail['rol']);
            $mail->to($datamail['email'], $datamail['name'], $datamail['pass']);




        });

        $id = $usercreate->id;
        $user = User::find($id);
        $user->attachRole($role);
        $input['user_id'] = $id;
        /*==== End Create User for Graduate ====*/
        $graduate = Graduate::create($input);

        Alert::success('Has dado de alta a un Egresado exitosamente.');

        return redirect(url('allgraduates'));

    }

    public function companies() 
    {
        $companies = Company::all();
        return view ('administrator.companies')
        ->with('companies', $companies); 
    }

    public function createCompany()
    {
        return view('administrator.create-company');
    }

    public function storeCompany(CreateCompanyAdminRequest $request)
    {
        $input = $request->all();
        $password_random = 'secret';
        /*==== Create User for Graduate ====*/
        $role = Role::where('name', 'company')->first();
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['password'] = Hash::make($request->input('password'));
        $usercreate = User::create($data);
        $id = $usercreate->id;
        $user = User::find($id);

        $datamail['name'] = $request->input('name');
        $datamail['pass'] = $password_random;
        $datamail['email'] = $request->input('email');


        Mail::send('mailer.register', ['datamail' => $datamail], function($mail) use($datamail){
            $mail->subject('Te proporcionamos las credenciales de acceso al sistema');
            $mail->to($datamail['email'], $datamail['name'], $datamail['pass']);
        });

        $email = $user->email;
        $password = $user->password;
        $user->attachRole($role);
        $input['user_id'] = $id;
        /*==== End Create User for Graduate ====*/
        $company = Company::create($input);  

        Auth::login($user);
        return redirect('/home');
    }  
  public function createTeacher()
    {
        return view('teachers.create');
    }
     public function teacher(CreateTeacherRequest $request)
    {
        $input = $request->all();
        $password_random = 'secret';
        /*==== Create User for Teacher ====*/
        $role = Role::where('name', 'teacher')->first();
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['password'] = Hash::make($request->input('password'));
        $usercreate = User::create($data);
        $id = $usercreate->id;
        $user = User::find($id);

        $datamail['name'] = $request->input('name');
        $datamail['pass'] = $password_random;
        $datamail['email'] = $request->input('email');


      

        $email = $user->email;
        $password = $user->password;
        $user->attachRole($role);
        $input['user_id'] = $id;
        /*==== End Create User for Teacher ====*/
        $teacher = Teacher::create($input);  

          Mail::send('mailer.register', ['datamail' => $datamail], function($mail) use($datamail){
            $mail->subject('Te proporcionamos las credenciales de acceso al sistema');
            $mail->to($datamail['email'], $datamail['name'], $datamail['pass']);
        });

        //Auth::login($user);
        Alert::success('Has dado de alta a un Teacher exitosamente.');
        return redirect('/teachers');
    }  

    public function services() 
    {
        $services = Service::
        join('companies','services.company_id','=','companies.id')
        ->select('services.*','companies.name')
        ->orderBy('id','desc')->get();
        
        return view ('administrator.services')
        ->with('services', $services); 
    }
    public function residents() 
    {
        $residents = Residents::all();
        return view ('administrator.residents')
        ->with('residents', $residents); 
    }
    public function vacancies() 
    {
        $periodos = Period::lists('description','id');
        $vacancies = Vacancy::all();
        return view ('administrator.vacancies')
        ->with('vacancies', $vacancies)
        ->with('periodos',$periodos);
    }

    public function depis(){
       $alldepis=Depi::AllDepis();
      
       return view('administrator.depis')
       ->with('depis',$alldepis);
    }

   
}
