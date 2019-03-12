@extends('layouts.master')
@section('title')
INICIO
@endsection
@section('content')
<aside id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(images/img_bg_5.jpeg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">
                                <h1> Seguimiento a Egresados y Educación Continua.</h1>
                                <h2>Entérate de nuestros eventos, cursos, talleres, conferencias y más.</h2>
                                <p><a class="btn btn-primary btn-lg" href="{{ url('register') }}">Comienza hoy!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/img_bg_6.jpeg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">
                                <h1>Desarrollo Profesional y Vinculación Laboral</h1>
                                <h2>¡Regístrate y aprovecha las vacantes en nuestra bolsa de trabajo!</h2>
                                <p><a class="btn btn-primary btn-lg btn-learn" href="{{ url('register') }}">Comienza hoy!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/img_bg_7.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">
                                <h1>Proyectos Vinculados y Banco de Proyectos</h1>
                                <h2>Espacio de ideas y expresiones tecnologicas.</h2>
                                <p><a class="btn btn-primary btn-lg btn-learn" href="{{ url('register') }}">Comienza hoy!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>           
        </ul>
    </div>
</aside>

<div id="fh5co-course-categories">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Nuestros servicios</h2>
                <p>Diversas experiencias educativas y servicios que ponemos a tú dispocición.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-code"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">Educación Continua</a></h3>
                        <p>Seguimos preparando a nuestros egresados y alumnos ofreciendo cursos, conferencias, diplomados, talleres. Desarrollando diversas habilidades y extendiendo su conocimiento para un mejor posicionamiento en el sector laboral.
</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-lab2"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">Seguimiento de Egresados</a></h3>
                        <p>El seguimiento de egresados es un servicio que obtiene información oportuna sobre el proceso de inserción laboral de los egresados, opiniones y sugerencias sobre la calidad de educación recibida y las nuevas demandas de los mercados que pueden conducir al direccionamiento de la institución. </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-news"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">Banco de proyectos</a></h3>
                        <p>Servicio que se les ofrece a nuestros estudiantes para el desempeño de servicio social, residencia profesional, haciéndolos adentrarse al mundo laboral de una manera práctica. 
</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-briefcase"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">Bolsa de Trabajo</a></h3>
                        <p>Espacio donde las empresas o la misma institución pueden publicar sus vacantes, en el cual se inscriben los candidatos para ejercer un determinado puesto siempre y cuando cubra los requisitos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    @php

                    $empresas=\App\Models\Company::count();
                    $graduate=\App\Models\Graduate::count();
                    $vacancies=\App\Models\Vacancy::count();
                    $bank=\App\Models\Residents::count();
                    
                    
                    @endphp


                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-world"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="{{$empresas}}" ></span>
                        <span class="fh5co-counter-label">Empresas registradas</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-study"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to=" {{$graduate}} "></span>
                        <span class="fh5co-counter-label">Egresados registrados</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-head"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to=" {{$vacancies}} "></span>
                        <span class="fh5co-counter-label">Vacantes disponibles</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-bulb"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to=" {{$bank}} "></span>
                        <span class="fh5co-counter-label">Banco de proyectos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-course">
    <div class="container">

        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Empresas Ofreciendo Vacantes de Empleo</h2>
                <p>Te ayudamos a encontrar un trabajo mejor
                    enterate de las vacantes disponibles en nuestra bolsa de trabajo.</p>
                </div>
            </div>
            @php
            $vacancy = App\Models\Vacancy::all();
            $vacancyAdmins = App\Models\VacancyAdmin::all();
            @endphp
            <div class="row ">
                @if($vacancy->isEmpty())
                <div class="well text-center">No se encontraron solicitudes de vacantes.</div>
                @else
                @foreach ($vacancy as $element)
                <div class="col-md-6 animate-box">
                    <div class="course">

                        <a href="#" class="course-img" style="background-image: url(uploads/avatars/default.jpg);">
                        </a>
                        <div class="desc">

                            <!--<h1> {{ $element->company->name}}</h1>-->

                            <h3><a href="#">{{ $element->position}}</a></h3>
                            <p>{{$element->task}}</p>
                            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#exampleModalLong{{$element->id}}">Ver más</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong{{$element->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{ $element->position}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                 <strong>Tareas a Realizar: </strong>{{$element->task}} <br>
                                 <strong>Habilidades:</strong> {{$element->abilities}} <br>
                                 <strong>Área de trabajo: </strong>{{ $element->area}} <br>
                                 <strong>Salario:</strong> ${{$element->salary}} <br>
                                 <strong>Nombre del contacto:</strong> {{$element->contact}} <br>
                                 <strong>Teléfono del contacto:</strong> {{$element->phone}} <br>
                                 <strong>Email del contacto:</strong> {{$element->email}} <br>
                                 <strong>Periodo de la Vacante: </strong> {{$element->period}}
                             </div>
                             <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

       </div>
   </div>
   @endforeach
   @endif
   @foreach ($vacancyAdmins as $vacancyAdmin)
   <div class="col-md-6 animate-box">
        <div class="course">

         <a href="#" class="course-img" style="background-image: url(uploads/avatars/default.jpg);">
         </a>
         <div class="desc">

            <!--<h1> {{ $element->company->name}}</h1>-->

            <h3><a href="#">{{ $vacancyAdmin->position}}</a></h3>
            <p>{{$vacancyAdmin->task}}</p>
            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#exampleModalLong{{$vacancyAdmin->id}}">Ver más</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong{{$vacancyAdmin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ $vacancyAdmin->position}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <strong>Tareas a Realizar: </strong>{{$vacancyAdmin->task}} <br>
                  
                  <strong>Habilidades:</strong> {{$vacancyAdmin->abilities}} <br>
                  <strong>Área de trabajo: </strong>{{ $vacancyAdmin->area}} <br>
                  <strong>Salario:</strong> ${{$vacancyAdmin->salary}} <br>
                  <strong>Nombre del contacto:</strong> {{$vacancyAdmin->contact}} <br>
                  <strong>Teléfono del contacto:</strong> {{$vacancyAdmin->phone}} <br>
                  <strong>Email del contacto:</strong> {{$vacancyAdmin->email}} <br>
                  <strong>Periodo de la Vacante: </strong> {{$vacancyAdmin->period}}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
         </div>
         </div>
    </div>
</div>

</div>
</div>
@endforeach
</div>
</div>
</div>



















<!--
<div id="fh5co-blog">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Catalogo de Educación Continua</h2>
                <p>Enterate de los eventos más recientes.</p>
            </div>
        </div>
       
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(images/post_1.jpg);"></a>
                    <div class="blog-text">
                        <h3><a href="#">Hackaton Chiapas 2017</a></h3>
                        <span class="posted_on">March. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(images/post_2.png);"></a>
                    <div class="blog-text">
                        <h3><a href="#">Introducción a Xamarin</a></h3>
                        <span class="posted_on">March. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(images/post_3.jpeg);"></a>
                    <div class="blog-text">
                        <h3><a href="#">Campus Party 2017</a></h3>
                        <span class="posted_on">March. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>-->

<div id="fh5co-gallery" class="fh5co-bg-section">
    <div class="row text-center">
        <h2><span>Galeria de Instagram</span></h2>
    </div>
    <div class="row">
        <div class="col-md-3 col-padded">
            <a target="_blank" href="https://www.instagram.com/p/BR6ksxUB3eF/?taken-by=tectuxtla" class="gallery" style="background-image: url(images/img_i.jpg);"></a>
        </div>
        <div class="col-md-3 col-padded">
            <a target="_blank" href="https://www.instagram.com/p/BRv7UZ5hLjT/?taken-by=tectuxtla" class="gallery" style="background-image: url(images/img_i2.jpg);"></a>
        </div>
        <div class="col-md-3 col-padded">
            <a target="_blank" href="https://www.instagram.com/p/BR8tCWCh0Mc/?taken-by=tectuxtla" class="gallery" style="background-image: url(images/img_i_3.jpg);"></a>
        </div>
        <div class="col-md-3 col-padded">
            <a  target="_blank" href="https://www.instagram.com/p/BRvgkl8h5yB/?taken-by=tectuxtla" class="gallery" style="background-image: url(images/img_i_4.jpg);"></a>
        </div>
    </div>
</div>
@endsection
