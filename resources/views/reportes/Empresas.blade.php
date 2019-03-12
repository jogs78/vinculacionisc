@extends('layouts.app')

@section('main-content')
@section('title')
Directorio Empresas
@endsection

    <div class="container">
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
            //var x= document.getElementById("Sector").value;
            var combo=document.getElementById("Sector");
            var sector = combo.options[combo.selectedIndex].text;
            xmlhttp.open("GET","ConsultaAjax2?value="+sector,true);
            xmlhttp.send();
        }

        function Enviar()
        {
          // var x= document.getElementById("Sector").value;
           var combo=document.getElementById("Sector");
           var sector = combo.options[combo.selectedIndex].text;
           window.location.href = 'imprimir2?value='+sector;
        }
    </script>
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

  <b>Sector</b>
<select id="Sector" onchange="busca()">
<option value="1">Agropecuario</option>
<option value="2">Gobierno</option>
<option value="3">Salud</option>
<option value="4">Comercio</option>
<option value="5">Transporte</option>
<option value="6">Educación</option>
<option value="7">Turismo</option>
<option value="8">Construcción</option>
<option value="9">Humanidades</option>
<option value="0">Todos</option>
</select>

<div id="display">

</div>
<input type="button" name="Descargar" onclick="Enviar()" value="Descargar" class="btn btn-primary btn-lg"/>
  </center>

</div>
  @endsection
