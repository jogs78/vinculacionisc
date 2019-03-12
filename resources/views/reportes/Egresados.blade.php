@extends('layouts.app')

@section('main-content')
@section('title')
Directorio Empresas
@endsection
           <script>
               function busca(){
                   var xmlhttp;
                   if (window.XMLHttpRequest){
                       // code for IE7+, Firefox, Chrome, Opera, Safari
                       xmlhttp=new XMLHttpRequest();
                   }else{
                       // code for IE6, IE5
                       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                   }
                   xmlhttp.onreadystatechange=function(){
                       if(xmlhttp.status==404){
                           document.getElementById("display").innerHTML="Page not found";
                       }
                       if (xmlhttp.readyState==4 && xmlhttp.status==200){
                           document.getElementById("display").innerHTML=xmlhttp.responseText;
                       }
                   }
                   //send a request to a server
                   //var valor;
                   var x= document.getElementById("Egresados").value;

                   xmlhttp.open("GET","ConsultaAjax?value="+x,true);
                   xmlhttp.send();
               }

               function Enviar()
               {
                  var x= document.getElementById("Egresados").value;
                  var combo=document.getElementById("Egresados");
                  var periodo = combo.options[combo.selectedIndex].text;
                  window.location.href = 'imprimir?value='+x+ "&periodo="+periodo ;
               }
           </script>
           <style>
           #display
           {
             margin-top: 30px;
           }
           #Egresados
           {
             margin-top: 30px;
           }
           </style>
           <style>
           #display
           {
             margin-top: 30px;
           }
           #Sector
           {
             margin-top: 30px;
           }

           #tabla-direc2
           {
             margin-top: 80px;
             margin-left: 0px;
             margin-bottom: 40px;
           text-align: center;
           table-layout: fixed;
               width: 70%;
               border-collapse: separate;
               border: 2px solid GRAY;
           }
           tr, td {
               border: 2px solid GRAY;
               width: 80px;

               word-wrap: break-word;
           }

           </style>
  </head>
  <body onload="busca()">


    <center>
        Periodo
      <select id="Egresados" onchange="busca()">
@foreach ($periodos as $periodo)
  <option value="{{$periodo->id}}"> {{$periodo->description}}
  </option>
@endforeach
        </select>


<div id="display" name='display'>


</div>
<input type="button" name="Descargar" onclick="Enviar()" value="Descargar" class="btn btn-primary btn-lg"/>

</center>
@endsection
