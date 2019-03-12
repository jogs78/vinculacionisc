<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Events;
use Session;
use Redirect;
use DB;
use Illuminate\Routing\Route;
class EventsController extends Controller
{
    public function __construct(){

    }


    public function index(){
    
    $eventos=Events::Eventos();
    return view('eventos.index',compact('eventos'));

    
    } 

    public function create(){
    return view('eventos.create');
    }

    

    public function store(Request $request){

        Events::create($request->all());
        //$eventos=Events::Talleres();
        //$eventos->save();
        return Redirect::to('/eventos');
        }
    




    public function edit($id)
{
           
               
           return view('eventos.edit',['event'=>events::findOrFail($id)]);



}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Events::find($id);
        $event->fill($request->all());
        $event->save();

        Session::flash('message','Eveento editado correctamente');
        return Redirect::to('/eventos');

    
    }
        
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Events::find($id);
        $event -> delete();
        return Redirect::to('/eventos');
    }


}
