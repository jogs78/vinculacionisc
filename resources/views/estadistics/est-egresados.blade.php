@extends('layouts.app')

@section('main-content')
@section('title')


Estadisticas Egresados
@endsection
<div class="container">

    @include('sweet::alert')

    <div class="row">
        <h1 class="pull-left">Estadisticas Egresados</h1>
    </div>

    <div class="row">
     
  
       
	<!--<a href="" onclick="javascript:printDiv2('imprimir')" class="btn btn-info" role="button">Imprimir Gráficas</a>-->
	<button id="btnimprimir" onclick="javascript:imprimirTodo('imprimir','graficas2','tabla')"  class="btn btn-info" >Imprimir Gráficas</button>


<div class="form-group col-sm-6 col-lg-4">
	<label for="question">Periodos Registrados por los egresados: </label>
	
	
		<select name="periodo" id="periodo" class="form-control">
					@foreach ($periodos_question5  as $key=>$question)
					<option value="{{$key+1}}">{{$question->description}}</option>
			@endforeach
		</select>
	
</div>
 </div>
 
 
<div id="imprimir">
				<div class="container">

					 		<div class="row" id="escondido2" >

								<div class="col-md-4 pull-left">
									<img src="img/tec2.png">
								</div>
								<div class="col-md-4 col-md-offset-4 pull-right">
									<img src="img/tecn.png">
								</div>
							<br>
							<br/><br/><br/><br/><br/><br/>
							<div class="row">
								<div class="col-md-4">
								<center><h1>Gráficas de encuestas a egresados</h1>
								</center>
								</div>
							</div>

						</div>
					 	</div>		

			<div style="display: none;" id="cargar_graficas" align="center">
				
			</div>
		

		<div  class="row" >
		
			<div class="box box-primary">
				<div class="box-header">
				</div>
				<center><FONT FACE="times new roman" size="4">Egresados Titulados</FONT></center>
				<div id="totaltitulados"></div>
				<div class="box-body" id="div_grafica_pie1">

				</div>

			    <div class="box-footer">
				</div>
			</div>


		</div>

		<div  class="row" >
		
			<div class="box box-primary">
				<div class="box-header">
				</div>
				<center><FONT FACE="times new roman" size="4">¿Cuánto tiempo tardó en encontrar su primer empleo después de egresar?</FONT></center>
				<div id="total2"></div>
				<div class="box-body" id="div_grafica_pie2">
				</div>

			    <div class="box-footer">
				</div>
			</div>
		</div>
		<br/><br/><br/><br/><br/><br/>







		<div  class="row" id="escondido2" >
								<div class="col-md-4 pull-left">
									<img src="img/tec2.png">
								</div>
								<div class="col-md-4 col-md-offset-4 pull-right">
									<img src="img/tecn.png">
								</div>
							<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				
		
		
			<div class="box box-primary">

				<div class="box-header">
					<center><FONT FACE="times new roman" size="4">La formación obtenida en el instituto le permitió responder a las demandas de:</FONT></center>
				</div>
				<div id="total3"></div>
				<div class="box-body" id="div_grafica_pie3">
				</div>

			    <div class="box-footer">
				</div>
			</div>

		</div>

		<div  class="row" id="escondido2" style="font-size: 08px;">
		

			<div class="box box-primary">
				<div class="box-header">
				</div>
				<center><FONT FACE="times new roman" size="4">En qué área te desempeñas actualmente:</FONT></center>
				<div id="total4"></div>
				<div class="box-body" id="div_grafica_pie4">
				</div>
			    <div class="box-footer">
				</div>
			</div>
		</div>
		</div>
		


		
<div id="imprimirtabla" >
<div id="graficas2">
		<div  class="row" id="escondido2" >
				<div class="col-md-4 pull-left">
					<img src="img/tec2.png">
				</div>
				<div class="col-md-4 col-md-offset-4 pull-right">
					<img src="img/tecn.png">
				</div>
				<br>
				<br/><br/><br/><br/><br/><br/><br/><br/>
		
			<div class="box box-primary">
				<div class="box-header">
				</div>
				<center><FONT FACE="times new roman" size="4">Mencione el sector económico al que pertenece la empresa u organización en la que labora:</FONT></center>
				<div id="total5"></div>
				<div class="box-body" id="div_grafica_pie5">
				</div>

			    <div class="box-footer">
				</div>
			</div>


		</div>



		<div  class="row" >
		<br/><br/>
			
			<div class="box box-primary">
				<div class="box-header">
				</div>
<center><FONT FACE="times new roman" size="4">Tipo de institución en la que labora:</FONT></center>	

		<div id="total6"></div>
				<div class="box-body" id="div_grafica_pie6">
				</div>

			    <div class="box-footer">
				</div>
			</div>

 
		</div>

			<div  class="row" id="escondido2" >
			<br/><br/><br/><br/><br/>
				<div class="col-md-4 pull-left">
					<img src="img/tec2.png">
				</div>
				<div class="col-md-4 col-md-offset-4 pull-right">
					<img src="img/tecn.png">
				</div>
				<br/><br/><br/><br/><br/><br/><br/><br/>
			
		
			<br/><br/><br/><br/>
			<div class="box box-primary">
				<div class="box-header">
				</div>
				<center><FONT FACE="times new roman" size="4">¿Qué tan relacionado con sus estudios de licenciatura está el trabajo que actualmente desempeña?</FONT></center>
		<div id="total7"></div>
				<div class="box-body" id="div_grafica_pie7">
				</div>

			    <div class="box-footer">
				</div>
			</div>


		</div>

</div>


<div id="tabla">

	<div  class="row" >

		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/>


				<div class="box ">

				<div class="container">	
				</br>
					
				</div>
				 	
					 	<div class="container">
					 		<div class="row" id="escondido" >

							<div class="col-md-4 pull-left">
								<img src="img/tec2.png">
							</div>
							<div class="col-md-4 col-md-offset-4 pull-right">
								<img src="img/tecn.png">
							</div>
						</div>
					 	</div>
					<div class="box-header">
									 	<center><h1>Reporte por Sectores</h1></center>


					<div class="box-body" id="vtable">
					</div>

				    <div class="box-footer">
					</div>
				</div>

                

				</div>

			</div>

     </div>  
   
</div>
</div>
<script language="Javascript">


	function imprSelec(nombre) {
	  var ficha = document.getElementById(nombre);
	  var ventimp = window.open(' ', 'popimpr');
	  ventimp.document.write( ficha.innerHTML );
	  ventimp.document.close();
	  ventimp.print( );
	  ventimp.close();
	}
	</script>


	<script language="Javascript">
	function imprimir(nombre) {
	  var ficha = document.getElementById(nombre);
	  var ventimp = window.open(' ', 'popimpr');
	  ventimp.document.write( ficha.innerHTML );
	  ventimp.document.close();
	  ventimp.print( );
	  ventimp.close();
	}

function printDiv(nombreDiv) {

		$("#escondido").show();
		$("#escondido3").hide();
     var contenido= document.getElementById(nombreDiv).innerHTML;
     var contenidoOriginal= document.body.innerHTML;

     document.body.innerHTML = contenido;
    
     window.print();

     document.body.innerHTML = contenidoOriginal;
     window.close();

     $("#escondido").hide();
     $("#escondido3").show();
}
function printDiv2(nombreDiv) {

		$("#escondido2").show();
     var contenido= document.getElementById(nombreDiv).innerHTML;
     var contenidoOriginal= document.body.innerHTML;

     document.body.innerHTML = contenido;
    
     window.print();

     document.body.innerHTML = contenidoOriginal;
     window.close();

     $("#escondido2").hide();
}

function imprimirTodo(nombreDiv,div2,div3) {
	$("#escondido").show();
	$("#escondido2").show();
$("#escondido3").hide();
	var graficas=document.getElementById(nombreDiv).innerHTML;

	var tabla=document.getElementById(div2).innerHTML;

	var graficas2=document.getElementById(div3).innerHTML;

     var contenido= graficas+"</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>"+tabla+graficas2;

   
     var contenidoOriginal= document.body.innerHTML;

     document.body.innerHTML = contenido ;

    
     window.print();

     document.body.innerHTML = contenidoOriginal;
     window.close();
      location.reload();
     $("#escondido2").hide();
     $("#escondido3").show();
     $("#escondido").hide();
}
/*
	function printDiv(nombreDiv) {

		$("#escondido").show();
     var contenido= document.getElementById(nombreDiv).innerHTML;
     var contenidoOriginal= document.body.innerHTML;

     document.body.innerHTML = contenido;
     window.open('','popimpr');
     window.print();

     document.body.innerHTML = contenidoOriginal;
     window.close();

     $("#escondido").hide();
}*/
	</script>

@endsection