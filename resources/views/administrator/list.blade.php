@extends('layouts.app')
@section('title')
Encuestas 
@endsection
@section('main-content')

<style type="text/css">
#lista5 {
    counter-reset: li; 
    list-style: none; 
    *list-style: decimal; 
    font: 15px 'trebuchet MS', 'lucida sans';
    padding: 0;
    margin-bottom: 4em;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
}

#lista5 ol {
    margin: 0 0 0 2em; 
}

#lista5 {
    list-style-type: none;
    list-style-type: decimal !ie; /*IE 7- hack*/
     
    margin: 0;
    margin-left: 1em;
    padding: 0;
     
    counter-reset: li-counter;
}

#lista5 > li{
    position: relative;
    margin-bottom: 1.5em;
    padding: 1.5em;
    background-color: #eaeaea;
}

#lista5 > li:before {
    position: absolute;
    top: -0.3em;
    left: -0.5em;
    width: 1.8em;
    height: 1.2em;
     
    font-size: 2em;
    line-height: 1.2;
    font-weight: bold;
    text-align: center;
    color: #464646;
    background-color: #d0d0d0;
     
    transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    -webkit-transform: rotate(-20deg);
    z-index: 99;
    overflow: hidden;
     
    content: counter(li-counter);
    counter-increment: li-counter;
}

</style>
<div class="col col-lg-4"></div>


 <a href="/list-impr" class="btn btn-primary">Imprimir</a>
<ol id="lista5">

    	<?php 
    	foreach ($survs as $surv ) {
 
    	 	echo "    <li>";
	echo $surv->name."</br>";
	echo $surv->sector."</br>";
	echo $surv->address."</br>";
	echo $surv->phone."</br>";
	echo $surv->director."</br>";
	echo $surv->contact."</br>";
	echo $surv->email."</br>";
	echo "</li>";
	  	    	}
    	 ?>
   
</ol>






@endsection