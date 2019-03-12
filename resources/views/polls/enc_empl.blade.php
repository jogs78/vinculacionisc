@extends('layouts.app')
@section('contentheader_title')
Encuesta de Seguimiento
@endsection
@section('main-content')
<style media="screen">
  #texto
  {
    width: 700px;
    text-align: justify;
    font-size: 18px;
    margin-left: 200px;
  }
  #formulario
  { font-size: 20px;
width: 700px;
margin-left: 200px;
  }
  #p1
  {
    margin-left: 0;
        color:   #FF5733 ;
  }
  #p1a
  {
    margin-left: 200px;
color:   #FF5733 ;
  }
  #comentario
  {
    width: 800px;
  }
  #btn-env
  {
    margin-top: 20px;
    margin-left: 700px;

  }

</style>

<div class="container">
<h1 id="p1a"> Cuestionario de seguimiento para empleadores. </h1>
<div id="texto">
  <p>
  Por favor lea cuidadosamente el siguiente cuestionario y
  conteste con total honestidad. La información que nos proporcione será
  estrictamente confidencial y con fines únicamente estadísticos.
  </p>
</div>
<div id="formulario">
  <form action="/save" method="post">
    {{ csrf_field() }}
  <h3 id="p1"> 1.- Su empresa u organismo es: </h3>
  <input  type="radio" name="p1" value="Pública" id="p1" checked/> Pública
  <input  type="radio" name="p1" value="Privada"id="p1a"/> Privada
  <input  type="radio" name="p1" value="Social" id="p1a"/> Social
<hr >
<h3 id="p1">2.- El tamaño de su empresa es u organismo </h3>
        <input  type="radio" name="p2" value="Microempresa" id="p1" checked/> Microempresa (De 1 a 5) <br />
        <input  type="radio" name="p2" value="Pequeña" id="p1"/> Pequeña (De 5 a 10) <br />
        <input  type="radio" name="p2" value="Mediana" id="p1"/> Mediana (de 10 a 30)<br />
        <input  type="radio" name="p2" value="Grande" id="p1"/> Grande (Más de 30)<br />
<hr >
<h3 id="p1"> 3.- Actividad económica de su empresa </h3>


<input  type="radio" name="p3" value="Agro-industrial" id="p1" checked/> Agro-industrial  <br />
<input  type="radio" name="p3" value="Silvicultura" id="p1"/> Silvicultura  <br />
<input  type="radio" name="p3" value="Pesca y acuacultura" id="p1"/> Pesca y acuacultura  <br />
<input  type="radio" name="p3" value="Alimentos, bebidas y tabaco" id="p1"/> Alimentos, bebidas y tabaco  <br />
<input  type="radio" name="p3" value="Textiles, Vestido y Cuero" id="p1"/> Textiles, Vestido y Cuero  <br />
<input  type="radio" name="p3" value="Madera y sus Productos" id="p1"/> Madera y sus Productos  <br />
<input  type="radio" name="p3" value="Papel Imprenta y editoriales" id="p1"/> Papel Imprenta y editoriales  <br />
<input  type="radio" name="p3" value="Caucho y plástico" id="p1"/> Caucho y plástico  <br />
<input  type="radio" name="p3" value="Minerales no metálicos" id="p1"/>  Minerales no metálicos <br />
<input  type="radio" name="p3" value="Productos metálicos, Maquinaria y Equipo" id="p1"/>  Productos metálicos, Maquinaria y Equipo <br />
<input  type="radio" name="p3" value="Construcción" id="p1"/> Construcción  <br />
<input  type="radio" name="p3" value="Electricidad, Agua y Gas" id="p1"/> Electricidad, Agua y Gas  <br />
<input  type="radio" name="p3" value="Comercio y Turismo" id="p1"/>  Comercio y Turismo <br />
<input  type="radio" name="p3" value="Transporte, Almacenaje y Comunicaciones" id="p1"/> Transporte, Almacenaje y Comunicaciones   <br />
<input  type="radio" name="p3" value="Servicios Financieros, Seguros, actividades, Inmobiliarias
 y de alquiler" id="p1"/>
 Servicios Financieros, Seguros, actividades, Inmobiliarias
 y de alquiler  <br />
<input  type="radio" name="p3" value="Educación" id="p1"/> Educación  <br />
<hr >

<h3 id="p1"> 4. Numero de profesionistas que laboran en su empresa u organismo  </h3>
<input  type="radio" name="p4" value="1" id="p1" checked/> 1  <br />
<input  type="radio" name="p4" value="De 2 a 5" id="p1"/>De 2 a 5 <br />
<input  type="radio" name="p4" value="De 6 a 8" id="p1"/>De 6 a 8  <br />
<input  type="radio" name="p4" value="De 9 a 10" id="p1"/>De 9 a 10  <br />
<input  type="radio" name="p4" value="Mas de 10" id="p1"/>Mas de 10 <br />

<hr >
<h3 id="p1"> 5.- Congruencia entre perfil profesional y función que desarrollan los
  egresados del Instituto Tecnológico de Tuxtla Gutiérrez en su empresa u organización. </h3>

<input  type="radio" name="p5" value="Completamente" id="p1" checked/> Completamente  <br />
<input  type="radio" name="p5" value="Medianamente" id="p1"/> Medianamente  <br />
<input  type="radio" name="p5" value="Ligeramente" id="p1"/> Ligeramente  <br />
<input  type="radio" name="p5" value="Ninguna Relación" id="p1"/> Ninguna Relación  <br />

<hr >
<h3 id="p1"> 6.- Requisitos que establece su empresa u organización para
  la contratación de personal con nivel de licenciatura. </h3>

<input  type="checkbox" name="p6[]" value="Área o campo de estudio" id="p1" checked/>
Área o campo de estudio  <br />

<input  type="checkbox" name="p6[]" value="Titulación" id="p1"/>
Titulación <br />

<input  type="checkbox" name="p6[]" value="Experiencia laboral / Práctica (antes de egresar)" id="p1"/>
Experiencia laboral / Práctica (antes de egresar)  <br />

<input  type="checkbox" name="p6[]" value="Posicionamiento de la Institución de egreso" id="p1"/>
Posicionamiento de la Institución de egreso <br />

<input  type="checkbox" name="p6[]" value="Conocimiento de idiomas extranjeros" id="p1"/>
Conocimiento de idiomas extranjeros   <br />

<input  type="checkbox" name="p6[]" value="Recomendaciones/referencias" id="p1"/>
Recomendaciones/referencias  <br />

<input  type="checkbox" name="p6[]" value="Personalidad/Actitudes" id="p1"/>
Personalidad/Actitudes
 <br />
<input  type="checkbox" name="p6[]" value="Capacidad de liderazgo" id="p1"/>
Capacidad de liderazgo
<br />
<hr >

<h3 id="p1"> 7.-Carreras que demanda preferentemente su empresa u organismo </h3>

<input  type="checkbox" name="p7[]" value="Ingeniería Mecánica" id="p1" checked/>
Ingeniería Mecánica<br />

<input  type="checkbox" name="p7[]" value="Ingeniería en Sistemas Computacionales" id="p1"/>
Ingeniería en sistemas Computacionales<br />

<input  type="checkbox" name="p7[]" value="Ingeniería Industrial" id="p1"/>
Ingeniería Industrial<br />

<input  type="checkbox" name="p7[]" value="Ingeniería Electrónica" id="p1"/>
Ingeniería Electrónica<br />

<input  type="checkbox" name="p7[]" value="Ingeniería Eléctrica" id="p1"/>
Ingeniería Eléctrica<br />

<input  type="checkbox" name="p7[]" value="Ingeniería Bioquímica" id="p1"/>
Ingeniería bioquímica<br />

<input  type="checkbox" name="p7[]" value="Ingeniería Química" id="p1"/>
Ingeniería Química<br />

<input  type="checkbox" name="p7[]" value="Ingeniería en Gestión empresarial" id="p1"/>
Ingeniería en Gestión empresarial<br />

<input  type="checkbox" name="p7[]" value="Ingeniería en Logística" id="p1"/>
Ingeniería en logística<br />

<hr >
<h3 id="p1"> 8.-En su opinión Que competencias deben desarrollar los egresados del
  Instituto Tecnológico de Tuxtla Gutiérrez para desempeñarse
  eficientemente en sus actividades laborales. </h3>
    <input  type="checkbox" name="p8[]" value="Habilidad para resolver conflictos" id="p1" checked/>
    Habilidad para resolver conflictos<br />
    <input  type="checkbox" name="p8[]" value="Trabajo en equipo" id="p1" checked/>
     Trabajo en equipo <br />
    <input  type="checkbox" name="p8[]" value="Gestión de proyectos" id="p1"/>
     Gestión de proyectos <br />
    <input  type="checkbox" name="p8[]" value="Puntualidad y asistencia" id="p1"/>
     Puntualidad y asistencia <br />
    <input  type="checkbox" name="p8[]" value="Cumplimiento de las normas" id="p1"/>
     Cumplimiento de las normas <br />
    <input  type="checkbox" name="p8[]" value="Creatividad e innovación" id="p1"/>
     Creatividad e innovación <br />
    <input  type="checkbox" name="p8[]" value="Capacidad de negociación" id="p1"/>
     Capacidad de negociación <br />
     <input  type="checkbox" name="p8[]" value="Capacidad de abstracción, análisis y síntesis" id="p1"/>
      Capacidad de abstracción, análisis y síntesis <br />
    <input  type="checkbox" name="p8[]" value="Liderazgo y toma de decisiones" id="p1"/>
     Liderazgo y toma de decisiones. <br />
     <input  type="checkbox" name="p8[]" value="Ortografía y redacción de documentos" id="p1"/>
      Ortografía y redacción de documentos <br />

<hr >
<h3 id="p1">9.-  Con base al desempeño laboral, así como a las actividades laborales que
  realiza el egresado ¿Cómo considera su desempeño laboral respecto a su formación académica?  </h3>

<input  type="radio" name="p9" value="Excelente" id="p1" checked/>Excelente <br />
<input  type="radio" name="p9" value="Muy bueno" id="p1"/>Muy bueno<br />
<input  type="radio" name="p9" value="Bueno" id="p1"/>Bueno <br />
<input  type="radio" name="p9" value="Regular" id="p1"/>Regular  <br />
<input  type="radio" name="p9" value="Malo" id="p1"/>Malo <br />

<hr >
<h3 id="p1">Comentarios y sugerencias </h3>

<input type="text" name="Comentarios" placeholder="Comentario" id="comentario">



<div id="btn-env">
  <input type="submit" value="Guardar" />
</div>


  </form>
</div>



</div>
@endsection
