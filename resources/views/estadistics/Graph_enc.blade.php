@extends('layouts.app')

@section('main-content')
@section('title')
Graficas generales
@endsection

<script type="text/javascript">

function imprimir() {

     location.href ="/pr_enc";

}
function recargar() {

     location.href ="/grafAnio";

}
</script>

<script src="js/code/highcharts.js"></script>
<script src="js/code/modules/exporting.js"></script>



<div class="text-center" >


<h5> Seleccione Año de visualizacion: </h5>
{!!Form::open(['url'=>'grafAnio','method'=>'GET','role'=>'search'])!!}

<select name="Saño" id="anio" onchange="this.form.submit()">
          <option>Seleccione una opcion</option>
          <option value="Generales">Graficas Generales</option>
    <?php
		$year=date("Y");
		$an=(int)$year-1;
		for ($i=$ayear[0]->year; $i <= $year; $i++) {?>
    				<option value='{{$i}}'>{{$i}}</option>
<?php }
				?>
			</select>
{!!Form::close()!!}

<h5> Actualmente Viendo: {{$enviar}}</h5>
      </div>


<br />

{!!Form::open(['url'=>'pr_enc','method'=>'GET','role'=>'search'])!!}
  <input type="hidden" name="Sanio" value="{{$enviar}}">
  <input type="submit" value="imprimir">
{!!Form::close()!!}
<br />

<div class="box box-primary">
  <div class="box-header">
  </div>

  <div class="box-body" id="container">
  </div>

    <div class="box-footer">
  </div>
</div>

<div class="box box-primary">
  <div class="box-header">
  </div>

  <div class="box-body" id="container2">
  </div>

    <div class="box-footer">
  </div>
</div>

<div class="box box-primary">
  <div class="box-header">
  </div>

  <div class="box-body" id="container3">
  </div>

    <div class="box-footer">
  </div>
</div>

<div class="box box-primary">
  <div class="box-header">
  </div>

  <div class="box-body" id="container4">
  </div>

    <div class="box-footer">
  </div>
</div>

<div class="box box-primary">
  <div class="box-header">
  </div>

  <div class="box-body" id="container5">
  </div>

    <div class="box-footer">
  </div>
</div>

<div class="box box-primary">
  <div class="box-header">
  </div>

  <div class="box-body" id="container6">
  </div>

    <div class="box-footer">
  </div>
</div>

<div class="box box-primary">
  <div class="box-header">
  </div>

  <div class="box-body" id="container7">
  </div>

    <div class="box-footer">
  </div>
</div>

<div class="box box-primary">
  <div class="box-header">
  </div>

  <div class="box-body" id="container8">
  </div>

    <div class="box-footer">
  </div>
</div>

<div class="box box-primary">
  <div class="box-header">
  </div>

  <div class="box-body" id="container9">
  </div>

    <div class="box-footer">
  </div>
</div>







<script type="text/javascript">
Highcharts.chart('container', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: null,
    type: 'pie'
},
title: {
    text: 'Tipos de empresas'
},
tooltip: {
    pointFormat: '{series.name}: <b>{point.y:.0f} Empleadores </b>'
},
plotOptions: {
    pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }

        },
        showInLegend: true
    }
},
series: [{
    name: 'Cantidad:',
    colorByPoint: true,
    data: [{
        name: 'Pública',
        y: {{$q1a}}
    }, {
        name: 'Privada',
        y: {{$q1b}}
    }, {
        name: 'Social',
        y: {{$q1c}}
    }

  ]
}]
});

Highcharts.chart('container2', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: null,
    type: 'pie'
},
title: {
    text: 'Tamaño de la empresa'
},
tooltip: {
    pointFormat: '{series.name}: <b>{point.y:.0f} Empleadores </b>'
},
plotOptions: {
    pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }

        },
        showInLegend: true
    }
},
series: [{
    name: 'Cantidad:',
    colorByPoint: true,
    data: [{
        name: 'Microempresa (De 1 a 30)',
        y: {{$q2a}}
    }, {
        name: 'Pequeña (De 31 a 100)',
        y: {{$q2b}}
    }, {
        name: 'Mediana (de 101 a 500)',
        y: {{$q2c}}
    }, {
        name: 'Grande (Más de 500)',
        y: {{$q2d}}
    }

  ]
}]
});

Highcharts.chart('container3', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: null,
    type: 'pie'
},
title: {
    text: 'Actividades económicas'
},
tooltip: {
    pointFormat: '{series.name}: <b>{point.y:.0f} Empleadores </b>'
},
plotOptions: {
    pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }

        },
        showInLegend: true
    }
},
series: [{
    name: 'Cantidad:',
    colorByPoint: true,
    data: [  {
        name: 'Agro-industrial',
        y: {{$q3a}}
    }, {
        name: 'Silvicultura',
        y: {{$q3b}}
    }, {
        name: 'Pesca y acuacultura',
        y: {{$q3c}}
    }, {
        name: 'Alimentos, bebidas y tabaco',
        y: {{$q3d}}
    }, {
        name: 'Textiles, Vestido y Cuero',
        y: {{$q3e}}
    }, {
        name: 'Madera y sus Productos',
        y: {{$q3f}}
    }, {
        name: 'Papel Imprenta y editoriales',
        y: {{$q3g}}
    }, {
        name: 'Caucho y plástico',
        y: {{$q3h}}
    }, {
        name: 'Minerales no metálicos',
        y: {{$q3i}}
    }, {
        name: 'Productos metálicos, Maquinaria y Equipo',
        y: {{$q3j}}
    }, {
        name: 'Construcción',
        y: {{$q3k}}
    }, {
        name: 'Electricidad, Agua y Gas',
        y: {{$q3l}}
    }, {
        name: 'Comercio y Turismo',
        y: {{$q3m}}
    }, {
        name: 'Transporte, Almacenaje y Comunicaciones',
        y: {{$q3n}}
    }, {
        name: 'Servicios Financieros, Seguros, actividades, Inmobiliarias y de alquiler',
        y: {{$q3o}}
    }, {
        name: 'Educación',
        y: {{$q3p}}
    },

  ]
}]
});

Highcharts.chart('container4', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: null,
    type: 'pie'
},
title: {
    text: 'Cantidad de profesionistas que laboran en la empresa'
},
tooltip: {
    pointFormat: '{series.name}: <b>{point.y:.0f} Empleadores </b>'
},
plotOptions: {
    pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }

        },
        showInLegend: true
    }
},
series: [{
    name: 'Cantidad:',
    colorByPoint: true,
    data: [{
        name: '1',
        y: {{$q4a}}
    }, {
        name: 'De 2 a 5',
        y: {{$q4b}}
    }, {
        name: 'De 6 a 8',
        y: {{$q4c}}
    }, {
        name: 'De 9 a 10',
        y: {{$q4d}}
    }, {
        name: 'Mas de 10',
        y: {{$q4e}}
    }

  ]
}]
});

Highcharts.chart('container5', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: null,
    type: 'pie'
},
title: {
    text: 'Congruencia entre perfil profesional y puesto que desempeña en la empresa'
},
tooltip: {
    pointFormat: '{series.name}: <b>{point.y:.0f} Empleadores </b>'
},
plotOptions: {
    pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }

        },
        showInLegend: true
    }
},
series: [{
    name: 'Cantidad:',
    colorByPoint: true,
    data: [{
        name: 'Completamente',
        y: {{$q5a}}
    }, {
        name: 'Medianamente',
        y: {{$q5b}}
    }, {
        name: 'Ligeramente',
        y: {{$q5c}}
    }, {
        name: 'Ninguna Relación',
        y: {{$q5d}}
    }

  ]
}]
});


Highcharts.chart('container6', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: null,
    type: 'pie'
},
title: {
    text: 'Requisitos para la contratación de personal'
},
tooltip: {
    pointFormat: '{series.name}: <b>{point.y:.0f} puntos </b>'
},
plotOptions: {
    pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }

        },
        showInLegend: true
    }
},
series: [{
    name: 'Cantidad:',
    colorByPoint: true,
    data: [{
        name: 'Área o campo de estudio',
        y: {{$q6a}}
    }, {
        name: 'Titulación',
        y: {{$q6b}}
    }, {
        name: 'Experiencia laboral / Práctica (antes de egresar)',
        y: {{$q6c}}
    }, {
        name: 'Posicionamiento de la Institución de egreso',
        y: {{$q6d}}
    }, {
        name: 'Conocimiento de idiomas extranjeros',
        y: {{$q6e}}
    }, {
        name: 'Recomendaciones/referencias',
        y: {{$q6f}}
    }, {
        name: 'Personalidad/Actitudes',
        y: {{$q6g}}
    }, {
        name: 'Capacidad de liderazgo',
        y: {{$q6h}}
    }

  ]
}]
});

Highcharts.chart('container7', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: null,
    type: 'pie'
},
title: {
    text: 'Carreras mas demandadas'
},
tooltip: {
    pointFormat: '{series.name}: <b>{point.y:.0f} puntos </b>'
},
plotOptions: {
    pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }

        },
        showInLegend: true
    }
},
series: [{
    name: 'Cantidad:',
    colorByPoint: true,
    data: [{
        name: 'Ingeniería Mecánica',
        y: {{$q7a}}
    }, {
        name: 'Ingeniería en sistemas Computacionales',
        y: {{$q7b}}
    }, {
        name: 'Ingeniería Industrial',
        y: {{$q7c}}
    }, {
        name: 'Ingeniería Electrónica',
        y: {{$q7d}}
    }, {
        name: 'Ingeniería Eléctrica',
        y: {{$q7e}}
    }, {
        name: 'Ingeniería bioquímica',
        y: {{$q7f}}
    }, {
        name: 'Ingeniería Química',
        y: {{$q7g}}
    }, {
        name: 'Ingeniería en Gestión empresarial',
        y: {{$q7h}}
    }, {
        name: 'Ingeniería en logística',
        y: {{$q7i}}
    }

  ]
}]
});


Highcharts.chart('container8', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: null,
    type: 'pie'
},
title: {
    text: 'Competencias a desarrollar'
},
tooltip: {
    pointFormat: '{series.name}: <b>{point.y:.0f} puntos </b>'
},
plotOptions: {
    pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }

        },
        showInLegend: true
    }
},
series: [{
    name: 'Cantidad:',
    colorByPoint: true,
    data: [{
        name: 'Habilidad para resolver conflictos',
        y: {{$q8a}}
    }, {
        name: 'Trabajo en equipo',
        y: {{$q8b}}
    }, {
        name: 'Gestión de proyectos',
        y: {{$q8c}}
    }, {
        name: 'Puntualidad y asistencia',
        y: {{$q8d}}
    }, {
        name: 'Cumplimiento de las normas',
        y: {{$q8e}}
    }, {
        name: 'Creatividad e innovación',
        y: {{$q8f}}
    }, {
        name: 'Capacidad de negociación',
        y: {{$q8g}}
    }, {
        name: 'Capacidad de abstracción, análisis y síntesis',
        y: {{$q8h}}
    }, {
        name: 'Liderazgo y toma de decisiones',
        y: {{$q8i}}
    }, {
        name: 'Ortografía y redacción de documentos',
        y: {{$q8j}}
    }

  ]
}]
});

Highcharts.chart('container9', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: null,
    type: 'pie'
},
title: {
    text: 'Desempeño laboral'
},
tooltip: {
    pointFormat: '{series.name}: <b>{point.y:.0f} puntos </b>'
},
plotOptions: {
    pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
            style: {
                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }

        },
        showInLegend: true
    }
},
series: [{
    name: 'Cantidad:',
    colorByPoint: true,
    data: [{
        name: 'Excelente',
        y: {{$q9a}}
    }, {
        name: 'Muy bueno',
        y: {{$q9b}}
    }, {
        name: 'Bueno',
        y: {{$q9c}}
    }, {
        name: 'Regular',
        y: {{$q9d}}
    }, {
        name: 'Malo',
        y: {{$q9e}}
    }

  ]
}]
});

  </script>

@endsection
