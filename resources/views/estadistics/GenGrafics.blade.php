@extends('layouts.app')

@section('main-content')
@section('title')
Graficas generales
@endsection
<script type="text/javascript">

function imprimir() {

     location.href ="/printGraf";
}
</script>



<script src="js/code/highcharts.js"></script>
<script src="js/code/modules/exporting.js"></script>

<input type="button" onclick="imprimir()" value="imprimir">

  <div id="container">

  </div>

  <div id="container2" >';
    </div>


    <div id="container3" >
    </div>


    <div id="container4">
    </div>



    <div id="container5" >
    </div>



    <div id="container6" >
    </div>


    <div id="container7" >
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
        text: 'Egresados Titulados '
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
        name: 'Puntos Encuesta',
        colorByPoint: true,
        data: [{
            name: 'Si',
            y: {{$q1a}}
        }, {
            name: 'No',
            y: {{$q1b}}
        }, {
            name: 'En proceso',
            y: {{$q1c}}
        }]
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
        text: '¿Cuánto tiempo tardó en encontrar su primer empleo después de egresar?'
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
        name: 'Puntos Encuesta',
        colorByPoint: true,
        data: [{
            name: 'Menos de un año',
            y: {{$q2a}}
        }, {
            name: '1 a 3 años',
            y: {{$q2b}}
        }, {
            name: ' 3 a 5 años',
            y: {{$q2c}}
        },
        {
            name: 'Aún no trabajo',
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
        text: 'La formación obtenida en el instituto le permitió responder a las demandas de:'
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
        name: 'Puntos Encuesta',
        colorByPoint: true,
        data: [

          {
            name: 'Trabajo',
            y: {{$q3a}}
        },

         {
            name: 'Vinculación',
            y: {{$q3b}}
        },

        {
            name: 'Toma de Decisiones',
            y: {{$q3c}}
        },
        {
            name: 'Operacionales',
            y: {{$q3d}}
        },
        {
            name: 'Investigación',
            y: {{$q3e}}
        },
        {
            name: 'Otro(s)',
            y: {{$q3f}}
        }

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
        text: 'En qué área te desempeñas actualmente: '
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
        name: 'Puntos Encuesta',
        colorByPoint: true,
        data: [{
            name: 'Desarrollo de software',
            y: {{$q4a}}
        }, {
            name: 'Base de datos',
            y: {{$q4b}}
        }, {
            name: 'Redes',
            y: {{$q4c}}
        }
        , {
            name: 'Aplicaciones Móviles',
            y: {{$q4d}}
        }, {
            name: 'Arquitectura de computadoras',
            y: {{$q4e}}
        }, {
            name: 'Negocios',
            y: {{$q4f}}
        }, {
            name: 'Otro(s)',
            y: {{$q4g}}
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
        text: 'Mencione el sector económico al que pertenece la empresa u organización en la que labora: '
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
        name: 'Puntos Encuesta',
        colorByPoint: true,
        data: [{
            name: 'Primario',
            y: {{$q5a}}
        }, {
            name: 'Secundario',
            y: {{$q5b}}
        }, {
            name: 'Terciario',
            y: {{$q5c}}
        },
        {
            name: 'Educativo',
            y: {{$q5d}}
        },
        {
            name: 'No laboro',
            y: {{$q5e}}
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
        text: 'Tipo de institución en la que labora:'
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
        name: 'Puntos Encuesta',
        colorByPoint: true,
        data: [{
            name: 'Publica',
            y: {{$q6a}}
        }, {
            name: 'Privada',
            y: {{$q6b}}
        }, {
            name: 'Propia',
            y: {{$q6c}}
        }
        , {
            name: 'No laboro',
            y: {{$q6d}}
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
        text: '¿Qué tan relacionado con sus estudios de licenciatura está el trabajo que actualmente desempeña? '
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
        name: 'Puntos Encuesta',
        colorByPoint: true,
        data: [{
            name: 'Muy relacionado',
            y: {{$q7a}}
        }, {
            name: 'Poco relacionado',
            y: {{$q7b}}
        }, {
            name: 'Parcialmente',
            y: {{$q7c}}
        },{
            name: 'No trabajo',
            y: {{$q7d}}
        }

      ]
    }]
  });
  </script>

@endsection
