<?php namespace App\Http\Controllers;

use DB;
use Mail;
use App\Http\Requests;
use App\Http\Requests\CreateGraduateRequest;
use App\Models\Graduate;
use App\Models\Teacher;
use App\Models\Company;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use App\Models\Shipping;
use App\Models\poll;
use Response;
use Flash;
use Schema;
use App\User;
use App\Role;
use Alert;
use Hash;
use Illuminate\Support\Facades\Input;
use Auth;

class GraduateController extends AppBaseController
{	

	/**
	 * Display a listing of the Post.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$query = Graduate::query();
		$columns = Schema::getColumnListing('$TABLE_NAME$');
		$attributes = array();

		foreach($columns as $attribute){
			if($request[$attribute] == true)
			{
				$query->where($attribute, $request[$attribute]);
				$attributes[$attribute] =  $request[$attribute];
			}else{
				$attributes[$attribute] =  null;
			}
		};

		$graduates = $query->get();

		return view('graduates.index')
		->with('graduates', $graduates)
		->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Graduate.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('graduates.create');
	}

	/**
	 * Store a newly created Graduate in storage.
	 *
	 * @param CreateGraduateRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateGraduateRequest $request)
	{
		$input = $request->all();
		/*==== Create User for Graduate ====*/
		$role = Role::where('name', 'graduate')->first();
		$data['name'] = $request->input('name').' '.$request->input('last_name');
		$data['email'] = $request->input('email');
		$data['password'] = Hash::make($request->input('password'));
		$usercreate = User::create($data);
		$id = $usercreate->id;
		$user = User::find($id);
		$email = $user->email;
		$password = $user->password;
		$user->attachRole($role);
		$input['user_id'] = $id;
		/*==== End Create User for Graduate ====*/
		$graduate = Graduate::create($input);

		Auth::login($user);
		return redirect('/home');

		
	}

	/**
	 * Display the specified Graduate.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$graduate = Graduate::find($id);
		$labor = $graduate->labor;

		if(empty($graduate))
		{
			Flash::error('Graduate not found');
			return redirect(route('graduates.index'));
		}

		return view('graduates.show')
		->with('graduate', $graduate)
		->with('labor', $labor);
	}

	/**
	 * Show the form for editing the specified Graduate.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$graduate = Graduate::find($id);

		if(empty($graduate))
		{
			Flash::error('Graduate not found');
			return redirect(route('graduates.index'));
		}

		return view('graduates.edit')->with('graduate', $graduate);
	}

	/**
	 * Update the specified Graduate in storage.
	 *
	 * @param  int    $id
	 * @param CreateGraduateRequest $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		/** @var Graduate $graduate */
		$graduate = Graduate::find($id);

		if(empty($graduate))
		{
			Flash::error('Graduate not found');
			return redirect(route('graduates.index'));
		}

		$graduate->fill($request->all());
		$graduate->save();

		Alert::success('Datos actualizados exitosamente.');

		return view('graduates.show')->with('graduate', $graduate);
	}

	/**
	 * Remove the specified Graduate from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Graduate $graduate */
		$graduate = Graduate::find($id);
		$usuario =  User::find($graduate->user_id);
		$encuestas = DB::table('polls')->where('graduate_id',$id)->delete();

		if(empty($graduate))
		{
			Flash::error('Graduate not found');
			return redirect(route('graduates.index'));
		}

			

		$graduate->delete();
		$usuario->delete();
		
		

		Flash::message('Graduate deleted successfully.');

		return redirect(url('allgraduates'));
	}

	public function data($id)
	{
		$user = User::find($id);
		$graduate = $user->graduate;
		$labor = $graduate->labor;
		return view('graduates.show')
		->with('graduate', $graduate)
		->with('labor', $labor);
	}

	
	public function enviarcorreos($id){

ini_set('max_execution_time', 300);
$shipping = Shipping::find($id);

if($shipping->tipocorreo==1){
   $users=DB::table('graduates')
    ->join('users','graduates.user_id','=','users.id')
  ->select('graduates.name','graduates.last_name','users.email')->get();
  if(empty($shipping->file)){
                                     $archivo='0';

  }else{
  $archivo=public_path('imgcorreo')."/".$shipping->file; 
}

if($archivo=='0')
  {
  
  foreach ($users as $user) {
  
$data= array('message' =>$shipping->body,'email'=>$user->email,'name'=>$user->name,'title'=>$shipping->title);
  
  $envio=Mail::send('emails', ['data' => $data], function($mail) use ($data)
       {
          $mail->from('vinculacionsistec@gmail.com','VINCULACION');
          $mail->to($data['email']);
          $mail->subject('Tenemos nuevas cosas para ti '. $data['name']);
       });

}
  }
  else{
  // echo "hola";
  //var_dump($archivo);


  foreach ($users as $user) {
  
 $data= array('message' =>$shipping->body,'email'=>$user->email,'name'=>$user->name,'title'=>$shipping->title,'archivo'=>$archivo);
  $envio=Mail::send('emails', ['data' => $data], function($mail) use ($data,$archivo)
       {
          $mail->from('vinculacionsistec@gmail.com','VINCULACION');
          $mail->to($data['email']);
          $mail->subject('Tenemos nuevas cosas para ti '. $data['name']);
         $mail->attach($archivo);
       });
  }

  }

  if($envio){
Alert::success('Mensaje Enviado Exitosamente.');
   return redirect(route('shippings.index'));
}else{
Alert::error('Mensaje No enviado.');
   return redirect(route('shippings.index'));

}


}


if($shipping->tipocorreo==2){
   $users=DB::table('teachers')
    ->join('users','teachers.user_id','=','users.id')
  ->select('teachers.name','teachers.last_name','users.email')->get();
  

  if(empty($shipping->file)){
                                     $archivo='0';

  }else{
  $archivo=public_path('imgcorreo')."/".$shipping->file; 
}



//echo $data['message']."";

if($archivo=='0')
  {
  
//var_dump($archivo);
  foreach ($users as $user) {
  
$data= array('message' =>$shipping->body,'email'=>$user->email,'name'=>$user->name,'title'=>$shipping->title);
  
  $envio=Mail::send('emails', ['data' => $data], function($mail) use ($data)
       {
          $mail->from('vinculacionsistec@gmail.com','VINCULACION');
          $mail->to($data['email']);
          $mail->subject('Tenemos nuevas cosas para ti '. $data['name']);
       });

}
  }
  else{
  
  //var_dump($archivo);


  foreach ($users as $user) {
  
 $data= array('message' =>$shipping->body,'email'=>$user->email,'name'=>$user->name,'title'=>$shipping->title,'archivo'=>$archivo);
  $envio=Mail::send('emails', ['data' => $data], function($mail) use ($data,$archivo)
       {
          $mail->from('vinculacionsistec@gmail.com','VINCULACION');
          $mail->to($data['email']);
          $mail->subject('Tenemos nuevas cosas para ti '. $data['name']);
         $mail->attach($archivo);
       });
  }

  }

  if($envio){
Alert::success('Mensaje Enviado Exitosamente.');
   return redirect(route('shippings.index'));
}else{
Alert::error('Mensaje No enviado.');
   return redirect(route('shippings.index'));

}
  }


 if($shipping->tipocorreo==3){
  $users=DB::table('companies')
    ->join('users','companies.user_id','=','users.id')
  ->select('companies.name','companies.contact','users.email')->get();

  if(empty($shipping->file)){
                                     $archivo='0';

  }else{
  $archivo=public_path('imgcorreo')."/".$shipping->file; 
}

if($archivo=='0')
  {
  
  foreach ($users as $user) {
  
$data= array('message' =>$shipping->body,'email'=>$user->email,'name'=>$user->name,'title'=>$shipping->title);
  
  $envio=Mail::send('emails', ['data' => $data], function($mail) use ($data)
       {
          $mail->from('vinculacionsistec@gmail.com','VINCULACION');
          $mail->to($data['email']);
          $mail->subject('Tenemos nuevas cosas para ti '. $data['name']);
       });

}
  }
  else{
  // echo "hola";
  //var_dump($archivo);


  foreach ($users as $user) {
  
 $data= array('message' =>$shipping->body,'email'=>$user->email,'name'=>$user->name,'title'=>$shipping->title,'archivo'=>$archivo);
  $envio=Mail::send('emails', ['data' => $data], function($mail) use ($data,$archivo)
       {
          $mail->from('vinculacionsistec@gmail.com','VINCULACION');
          $mail->to($data['email']);
          $mail->subject('Tenemos nuevas cosas para ti '. $data['name']);
         $mail->attach($archivo);
       });
  }

  }

  if($envio){
Alert::success('Mensaje Enviado Exitosamente.');
   return redirect(route('shippings.index'));
}else{
Alert::error('Mensaje No enviado.');
   return redirect(route('shippings.index'));

}


  }

  


}




}
