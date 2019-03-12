<!-- Left side column. contains the logo and sidebar -->

@php
$respuestas=\App\Pollscompany::all();
@endphp


<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{Auth::user()->avatar}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
            </div>
        </div>
        @endif


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menú</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            @role('coordinador')
            <li class="treeview">
                <a href="#"><i class='fa fa-users'></i> <span>Usuarios Existentes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('allgraduates') }}">Egresados</a></li>
                    <li><a href="{{ url('allcompanies') }}">Empresas</a></li>
                    <li><a href="{{ url('teachers') }}">Docentes</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-building-o'></i> <span>Solicitudes de Empresas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('allvacancies')}}">Solicitud de Vacantes</a></li>
                    <li><a href="{{ url('allresidents')}}">Solicitud de Residentes</a></li>
                    <li><a href="{{ url('allservices') }}">Solicitud de Servicio Social</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-book'></i> <span>Mis Solicitudes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('vacancyAdmins')}}">Solicitud de Vacantes</a></li>
                    <li><a href="{{ url('residentAdmins')}}">Solicitud de Residentes</a></li>
                    <li><a href="{{ url('serviceAdmins') }}">Solicitud de Servicio Social</a></li>
                </ul>
            </li>
                    
            <li class="treeview">
                <a href="#"><i class='fa fa-archive'></i> <span>Proyectos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('alldepis')}}">Todos los Proyectos</a></li>
                    </ul>
                </li>
               
               
               <li class="treeview">
                                       
                    <a href="#"><i class='fa fa-bar-chart-o'></i> <span>Estadísticas</span> <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li class="active"><a href="{{ url('estadistics-egresados')}}"><i class="fa fa.circle-o"></i> 
                        Egresados</a></li>
                        
                        <li class="active"><a href="{{ url('GraficasGenerales')}}"><i class="fa fa.circle-o"></i>
                        Graficas Generales</a></li>
                        <li class="active"><a href="{{ url('graficas2')}}"><i class="fa fa.circle-o"></i>
                        Graficas Empleadores</a></li>
                        <li class="active"><a href="{{ url('g1e1')}}"><i class="fa fa.circle-o"></i>
                        Graficas Encuesta a Empresas</a></li>
                        <li class="active"><a href="{{ url('list')}}"><i class="fa fa.circle-o"></i>
                        Listado Empresas</a></li>
                    <!--    
                        <li><a href="#">Empresas</a></li>
                        <li><a href="#">Proyectos Vinculados</a></li>
                    -->
                    </ul>
                </li>


                <li class="treeview">
                    <a href="#"><i class='fa fa-bank'></i> <span>Banco de Proyectos</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('residentAdmins')}}">Registrar</a></li>
                        <li><a href="{{url('residents')}}">Empresas</a></li>
                    </ul>
                </li>
                
            <li class="treeview">
                    <a href="#"><i class='fa fa-book'></i> <span>Educación continua</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{!! route('eventos.create') !!}">Registrar nuevo</a></li>
                        <li><a href="{!! route('eventos.index') !!} ">Eventos</a></li>
                      
                      
                       <!--  <li><a href="{!! route('eventos.index') !!} ">Eventos</a></li>
                      
                        <li><a href="#">Talleres</a></li>
                        <li><a href="#">Conferencias</a></li>
                        <li><a href="#">Eventos</a></li>-->
                    </ul>
                </li>

                
                <li><a href="{{ url('chatgraduates') }}"><i class='fa fa-comment'></i> <span>Chat</span></a></li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-cog'></i> <span>Utilerías</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('surveys') }}">Encuesta Egresados</a></li>
                        <li><a href="{{ url('surveyscom') }}">Encuesta Empresas</a></li>
                        <li><a href="{{ url('ReporteEgresado') }}">Directorio egresados con formato</a></li>
                        <li><a href="{{ url('ReporteEmpresa') }}">Directorio empresas con formato</a></li>
                        <li><a href="{{ url('periods') }}">Periodos</a></li>
                        <li><a href="{{ url('directory') }}">Directorio de egresados</a></li>
                        <li><a href="{{ url('directoryem') }}">Directorio de empresas</a></li>

                        <li><a href="{{ url('shippings') }}">Correos Masivos</a></li>
                    </ul>
                </li>
                
                @endrole





                @role('company') 
                @php
                $company = Auth::user()->company;
                $polls = \App\Pollscompany::where('company_id',$company->id)->get();
                @endphp
                @if($polls->count()== 0)
                @else
                <li class="active"><a href="{{url('viewcompanys')}}/{{Auth::user()->id}}"><i class='fa fa-building-o '></i> <span>Mi Perfil</span></a></li>
                <li class="active"><a href="{{url('vacancies1')}}/{{Auth::user()->id}}"><i class='fa fa-code '></i> <span>Solicitud de Vacantes</span></a></li>
                <li class="active"><a href="{{ url('residents1') }}/{{Auth::user()->id}}"><i class='fa fa-laptop '></i> <span>Solicitud de residentes</span></a></li>
                <li class="active"><a href="{{ url('services1') }}/{{Auth::user()->id}}"><i class='fa fa-book'></i> <span>Solicitud de Servicio Social</span></a></li> 
                <li class="treeview">
                        <a href="#"><i class='fa fa-book'></i> <span>Encuestas</span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('upscompany.create')}}">Encuesta para Empresas</a></li>
                            <li><a href="{!! route('upscompany2.edit', [Auth::user()->id]) !!} ">Encuesta para Empleadores</a></li>


                           <!--  <li><a href="{!! route('eventos.index') !!} ">Eventos</a></li>

                            <li><a href="#">Talleres</a></li>
                            <li><a href="#">Conferencias</a></li>
                            <li><a href="#">Eventos</a></li>-->
                        </ul>
                    </li>

                @endrole 
                @endif


                @role('graduate')
                @php
                $graduate = Auth::user()->graduate;
                $poll     = $graduate->poll;
                @endphp
                @if (is_null($poll))
                @else
                <li class="treeview">
                    <a href="#"><i class='fa fa-database'></i> <span>Mis datos</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{ url('viewdata') }}/{{ Auth::user()->id }}">Ver mis Datos</a></li>
                    </ul>
                </li>


                <li><a href="{!! route('polls.create') !!}"><i class='fa fa-line-chart'></i> <span>Encuesta de seguimiento</span></a></li>
                <li><a href="{{ url('adminchat') }}"><i class='fa fa-comment'></i> <span>Iniciar Chat</span></a></li>
                <li><a href="{{ url('viewvacancies') }}"><i class='fa fa-briefcase'></i> <span>Bolsa de trabajo</span></a></li>
		 <li><a href="{{ url('reviewgraduate') }}"><i class='fa fa-briefcase'></i> <span>Eventos y más</span></a></li>
               <!-- <li><a href="{{ url('updatesurvey') }}{{Auth::user()->id}}"><i class='fa fa-briefcase'></i> <span>Actualizar Encuesta</span></a></li>-->

                @endif



                @endrole
                
                @role('teacher')
                <li><a href="{{ url('viewdatateacher') }}/{{ Auth::user()->id }}">Ver mis Datos</a></li>
                <li><a href="{{ url('depisdocent') }}/{{Auth::user()->id}}"><i class='fa fa-codepen'></i> <span>Proyectos Depis</span></a></li>
                <li><a href="{{ url('allresidents')}}"><i class='fa fa-codepen'></i> <span>Banco de proyectos disponibles</span></a></li>
                @endrole
            </ul><!-- /.sidebar-menu -->
    

    <script> src=('js/highcharts.js')</script>
    <script> src=('js/graficas.js') </script>
        
        
        </section>


       
    </aside>

