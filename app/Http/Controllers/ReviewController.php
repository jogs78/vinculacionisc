<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thumbnail;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ Events;
use Session;
use Redirect;
use DB;
use Illuminate\Routing\Route;
class ReviewController extends Controller
{
    
    public function index(Request $request){
    
    if($request)
    {
        $query=trim($request->get('searchText'));
        $eventos=DB::table('events')->where('type_events','LIKE','%'.$query.'%')
        ->orderBy('id', 'DESC' )
        ->paginate(7);
        return view('viewevents.index',["eventos"=>$eventos,"searchText"=>$query]);
    }



       // $eventos=Events::Eventos();
        //return view('viewevents.review',compact('eventos'));

    



    //$eventos= events::type($request->type_events)->orderBy('id','ASC')->paginate(5);

        // $events = Events::Talleres();
       
       //$type_events=Events::Type($request->get('type_events'))->orderBy('id')->paginate();
       
       // return view('eventos.index');
    } 


 public function view(Request $request){
    
    if($request)
    {
        $query=trim($request->get('searchText'));
        $eventos=DB::table('events')->where('type_events','LIKE','%'.$query.'%')
        ->orderBy('id', 'ASC' )
        ->paginate(7);
        return view('viewevents.eventsgraduate',["eventos"=>$eventos,"searchText"=>$query]);
    }



       // $eventos=Events::Eventos();
        //return view('viewevents.review',compact('eventos'));

    



    //$eventos= events::type($request->type_events)->orderBy('id','ASC')->paginate(5);

        // $events = Events::Talleres();
       
       //$type_events=Events::Type($request->get('type_events'))->orderBy('id')->paginate();
       
       // return view('eventos.index');
    }
}
