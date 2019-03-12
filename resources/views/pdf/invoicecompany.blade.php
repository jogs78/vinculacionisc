<style>
#AlertDiv {
    position:absolute;
    height: 51px;
    left: 365px;
    top: 198px;
    width: 62px;
    background-color:black;
    color:white;
}

#AlertDiv h1{
    margin:auto;
    vertical-align:middle;
}
</style>

<!DOCTYPE html>
<html>
<head>
	<title>{{$data->name}}| Perfil</title>

	<meta name="viewport" content="width=device-width"/>
	<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
	<meta charset="UTF-8"> 

	<link type="text/css" rel="stylesheet" href="{{ asset('css/pdf/profile/style.css') }}">

<style type="text/css"> 

</style> 
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
           
	<div id="cv" class="instaFade">
		<div class="mainDetails">
			<div id="headshot" class="quickFade">
				<img src="{{ $data->user->avatar }}" alt="Alan Smith" />
			</div>

			<div id="name">
				<h1 class="quickFade delayTwo">{{ $data->name }}</h1>
				<h2 class="quickFade delayThree"></h2>
			</div>

			<div id="contactDetails" class="quickFade delayFour">
				<ul>
					<li>Correo: <a href="#" target="_blank">{{$data->user->email}}</a></li>
					<li>Dirección: <a href="#">{{$data->address}}</a></li>
					<li>CURP: {{$data->curp}}</li>
					<li>Teléfono: {{$data->phone}}</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>

		<div id="mainArea" class="quickFade delayFive">
			<section>
				<div class="sectionTitle">
					<h1>Encuesta de Seguimiento</h1>
				</div>
				@if(is_null($questions))
				<div class="sectionContent">Aún no se han registrado datos de la encuesta.</div>	
				@else
				    <div class="sectionContent">
					    
									@foreach ($questions as $key => $question)
										<label>{{$key + 1}}.- {{ $question->q_text }}</label><br>
										@endforeach
					</div>
				@endif
				<div class="clear"></div>
                <div class="sectionTitle">
					<h1>Respuestas de encuesta</h1>
				</div>
				@if(is_null($polls))
				<div class="sectionContent">Aún no se han registrado datos de la encuesta.</div>	
				@else
				    <div class="sectionContent">
					    
								
								
														@foreach ($polls as $key1 => $poll)
														<label for="question">1.- {{$poll->question_4}}</label><br>
														<label for="question">2.- {{$poll->question_5}}</label><br>
														<label for="question">3.- {{$poll->question_6}}</label><br>
														<label for="question">4.- {{$poll->question_7}}</label><br>
														<label for="question">5.- {{$poll->question_8}}</label><br>
														<label for="question">6.- {{$poll->question_9}}</label><br>
														<label for="question">7.- {{$poll->question_10}}</label><br>
														<label for="question">8.- {{$poll->question_11}}</label><br>
														<label for="question">9.- {{$poll->question_12}}</label><br>
														<label for="question">10.- {{$poll->question_13}}</label><br>

														@endforeach
											






				</div>
				@endif
				<div class="clear"></div>
			</section>
		</div>
	</div>
</body>
</html>