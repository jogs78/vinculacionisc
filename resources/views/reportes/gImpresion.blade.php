<!DOCTYPE html>
<html>
<head>


<style type="text/css">
#container,
#container2,
#container4, #container5,
#container7,
#container8, #container9
  {
    width: 100%;
    margin-left: 0px;
margin-bottom: 80px;
  }

</style>

<style>
		/* cuando vayamos a imprimir ... */
		@media print{
			/* indicamos el salto de pagina */
			.saltoDePagina{
				display:block;
				page-break-before:always;
			}
		}
	</style>
<script src="js/code/highcharts.js"></script>
<script src="js/code/modules/exporting.js"></script>
<script type="text/javascript">
function imprimir() {
	location.href ="g1e1";
	setTimeout(1000);
   print();

}

</script>


</head>

<body >
<img src="./img/header.jpg" width="100%" />
	<center>
	<h3>Enero-Junio 2017</h3></center>
<div id="container1">

  </div>

  <div id="container2" style="padding-top: 150px; padding-bottom: 150px;">';
    </div>


    <div class="saltoDePagina"></div>
<img src="./img/header.jpg"  width="100%"/>
<center>
	<h3>Enero-Junio 2017</h3></center>

    <div id="container3" >
    </div>

    <div style=" height: 120px; margin-top: 20px;"></div>

<div style=" height: 100px; margin-top: 20px;"></div>
    <div id="container4">
    </div>

<div class="saltoDePagina"></div>
<img src="./img/header.jpg" width="100%" />
<center>
	<h3>Enero-Junio 2017</h3></center>
    <div id="container5" >
    </div>



    <div id="container6" >
    </div>
<div class="saltoDePagina"></div>

<img src="./img/header.jpg" width="100%" style="padding-top: 60px;" />
<center>
	<h3>Enero-Junio 2017</h3></center>
    <div id="container7">
    </div>
    <div id="container8">
    </div>


<script type="text/javascript">
setTimeout("imprimir()", 2000);// se ejecuta después de 10 segundos.
</script>


<script type="text/javascript">

Highcharts.chart('container1', {
chart: {
    plotBackgroundColor: null,
    plotBorderWidth: null,
    plotShadow: null,
    type: 'pie'
},
title: {
    text: 'Carreras más demandadas por los empleadores'
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
    name: '',
    colorByPoint: true,
    data: [{
        name: 'Administracion',
        y: {{$q1a}}
    }, {
        name: 'Contaduria',
        y: {{$q1b}}
    }, {
        name: 'Derecho',
        y: {{$q1c}}
    }, {
        name: 'Ingenieria en Sistemas',
        y: {{$q1d}}
    }, {
        name: 'Ingenieria Industrial',
        y: {{$q1e}}
    }, {
        name: 'Ingenieria Mecanica',
        y: {{$q1f}}
    }, {
        name: 'Ingenieria en Electrica',
        y: {{$q1g}}
    }, {
        name: 'Ingenieria Electronica',
        y: {{$q1h}}
    }, {
        name: 'Ingenieria Quimica',
        y: {{$q1i}}
    }, {
        name: 'Ingenieria bioquimica',
        y: {{$q1j}}
    }, {
        name: 'Ingenieria en Gestion Empresarial',
        y: {{$q1k}}
    }, {
        name: 'Otras',
        y: {{$q1l}}
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
    text: 'Opinión de los empleadores sobre la formación profesional de los egresados.'
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
    name: '',
    colorByPoint: true,
    data: [{
        name: 'Excelente formacion',
        y: {{$q2a}}
    }, {
        name: 'Buena formacion',
        y: {{$q2b}}
    }, {
        name: 'Regular formacion',
        y: {{$q2c}}
    }, {
        name: 'Insatisfactoria formacion',
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
    text: 'Opinión de los empleadores sobre el desempeño laboral de los egresados.'
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
    name: '',
    colorByPoint: true,
    data: [{
        name: 'Excelente',
        y: {{$q3a}}
    }, {
        name: 'Bueno',
        y: {{$q3b}}
    }, {
        name: 'Regular',
        y: {{$q3c}}
    }, {
        name: 'Insatisfactorio',
        y: {{$q3d}}
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
    text: 'Importancia que le otorgan los empleadores al título profesional como requisito para contratar a egresados.'
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
    name: '',
    colorByPoint: true,
    data: [{
        name: 'Muy importante',
        y: {{$q4a}}
    }, {
        name: 'Medianamente importante',
        y: {{$q4b}}
    }, {
        name: 'Poco importante',
        y: {{$q4c}}
    }, {
        name: 'No es importante',
        y: {{$q4d}}
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
    text: 'Importancia de la experiencia laboral para contratar a un profesionista.'
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
    name: '',
    colorByPoint: true,
    data: [{
        name: 'Muy importante',
        y: {{$q5a}}
    }, {
        name: 'Medianamente importante',
        y: {{$q5b}}
    }, {
        name: 'Poco importante',
        y: {{$q5c}}
    }, {
        name: 'No es importante',
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
    text: 'Importa la imagen del Tecnológico para contratar a un egresado de éste'
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
    name: '',
    colorByPoint: true,
    data: [{
        name: 'Muy importante',
        y: {{$q6a}}
    }, {
        name: 'Medianamente importante',
        y: {{$q6b}}
    }, {
        name: 'Poco importante',
        y: {{$q6c}}
    }, {
        name: 'No es importante',
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
    text: 'Confianza de los empleadores para la contratación de egresados del Instituto Tecnológico de Tuxtla Gutiérrez'
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
    name: '',
    colorByPoint: true,
    data: [{
        name: 'Que tienen previsto continuar<br /> contratando profesionistas del Tecnológico',
        y: {{$q7a}}
    }, {
        name: 'Que prefieren contratar <br /> profesionistas de otras universidades:',
        y: {{$q7b}}
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
    text: 'Importancia del dominio de una lengua extranjera'
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
    name: '',
    colorByPoint: true,
    data: [{
        name: 'Muy importante',
        y: {{$q8a}}
    }, {
        name: 'Medianamente importante',
        y: {{$q8b}}
    }, {
        name: 'Poco importante',
        y: {{$q8c}}
    }, {
        name: 'No es importante',
        y: {{$q8d}}
    }

  ]
}]
});

</script>

</body>
</html>
