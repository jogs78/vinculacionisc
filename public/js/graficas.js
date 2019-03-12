  var periodo;
  $(document).ready(function() {
      // $("#btnimprimir").attr("onclick", "imprimirTodo()");

      $("#escondido").hide();
      $("#escondido2").hide();
      periodo = $("#periodo option:selected").text();

      tablaresultados(periodo);
      cargar_grafica_pie1(periodo);
      cargar_grafica_pie2(periodo);
      cargar_grafica_pie3(periodo);
      cargar_grafica_pie4(periodo);
      cargar_grafica_pie5(periodo);
      cargar_grafica_pie6(periodo);
      cargar_grafica_pie7(periodo);

      $("#periodo").change(function() {
          periodo = $("#periodo option:selected").text();

          tablaresultados(periodo);
          cargar_grafica_pie1(periodo);
          cargar_grafica_pie2(periodo);
          cargar_grafica_pie3(periodo);
          cargar_grafica_pie4(periodo);
          cargar_grafica_pie5(periodo);
          cargar_grafica_pie5(periodo);
          cargar_grafica_pie6(periodo);
          cargar_grafica_pie7(periodo);
      });
  });

  function imprimirTodo() {
      $("#escondido").show();
      $("#escondido2").show();
      $("#escondido3").hide();
      var graficas = document.getElementById("imprimir").innerHTML;

      var tabla = document.getElementById("tabla").innerHTML;

      var graficas2 = document.getElementById("graficas2").innerHTML;

      var contenido = graficas + "</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>" + tabla + graficas2;


      var contenidoOriginal = document.body.innerHTML;

      document.body.innerHTML = contenido;


      window.print();

      document.body.innerHTML = contenidoOriginal;
      window.close();

      $("#escondido2").hide();
      $("#escondido3").show();
      $("#escondido").hide();
  }


  function tablaresultados(periodo) {

      var url = "tablaresultados/" + periodo;


      $.get(url, function(resul) {

          var datos = jQuery.parseJSON(resul);
          fillTable(datos);


      })

  }

  function fillTable(datos) {
      var contador1 = 0,
          contador2 = 0,
          contador3 = 0,
          contador4 = 0,
          contador5 = 0,
          contador6 = 0,
          contador7 = 0,
          contador8 = 0,
          contador9 = 0,
          contador10 = 0,
          contador11 = 0,
          contador12 = 0
      contador13 = 0;

      var vhtml = '<div class=""> <h2 style="text-align:center;">Periodo: ' + datos.periodo + '</h2>';
      vhtml += '<table  class="table-bordered" style="border: 1px solid black!important;" >';

      vhtml += '<colgroup span="1" style="background: rgb(192,192,192) ; border: 1px solid rgba(0, 5, 0, 0.3);"></colgroup> ';

      vhtml += '<colgroup span="5" style="background: rgba(128, 255, 0, 0.3); border: 1px solid rgba(0, 5, 0, 0.3);"></colgroup> ';

      vhtml += '<colgroup span="4" style="background: rgba(255, 128, 0, 0.3); border: 1px solid rgba(0, 5, 0, 0.3);"></colgroup>';
      vhtml += '<colgroup span="4" style="background: rgba(255, 150, 0, 0.3); border: 1px solid rgba(, 5, 0, 0.3);"></colgroup>';

      vhtml += '<tr>';
      vhtml += '<th style="text-align:center;" colspan="1">Nombre</th>';
      vhtml += '<th style="text-align:center;" colspan="5">Sector</th>';
      vhtml += ' <th style="text-align:center;" colspan="4">institución</th>';
      vhtml += ' <th style="text-align:center;" colspan="4">A su Perfil</th>';

      vhtml += '</tr>';
      vhtml += ' <tr>';
      vhtml += ' <th style="text-align:center;"></th>';
      vhtml += ' <th style="text-align:center;">Educativo</th>';
      vhtml += ' <th style="text-align:center;">Primario</th>';
      vhtml += ' <th style="text-align:center;">Secundario</th>';
      vhtml += ' <th style="text-align:center;">Terciario</th>';
      vhtml += ' <th style="text-align:center;">No labora</th>';

      vhtml += ' <th style="text-align:center;">Publica</th>';
      vhtml += '<th style="text-align:center;">Privada</th>';
      vhtml += '<th style="text-align:center;">No labora</th>';
      vhtml += '<th style="text-align:center;">Propia</th>';



      vhtml += '<th style="text-align:center;">Muy relacionado</th>';
      vhtml += '<th style="text-align:center;">Poco relacionado</th>';
      vhtml += '<th style="text-align:center;">Parcialmente</th>';
      vhtml += '<th style="text-align:center;">No trabajo</th>';

      vhtml += '</tr>';
      for (vi = 0; vi < datos.resultados.length; vi++) {

          vhtml += '<tr>';
          vhtml += '<th>' + datos.resultados[vi].question_1 + '</th>';
          if (datos.resultados[vi].question_11 == "Educativo") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador1++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }
          if (datos.resultados[vi].question_11 == "Primario") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador2++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }
          if (datos.resultados[vi].question_11 == "Secundario") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador3++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }
          if (datos.resultados[vi].question_11 == "Terciario") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador4++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }


          if (datos.resultados[vi].question_11 == "No laboro") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador5++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }


          if (datos.resultados[vi].question_10 == "Publica") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador6++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }
          if (datos.resultados[vi].question_10 == "Privada") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador7++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }
          if (datos.resultados[vi].question_10 == "No laboro") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador8++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }
          if (datos.resultados[vi].question_10 == "Propia") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador13++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }



          if (datos.resultados[vi].question_12 == "Muy relacionado") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador9++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }
          if (datos.resultados[vi].question_12 == "Poco relacionado") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador10++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }
          if (datos.resultados[vi].question_12 == "Parcialmente") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador11++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }
          if (datos.resultados[vi].question_12 == "No trabajo") {
              vhtml += ' <td style="text-align:center;">si</th>';
              contador12++;
          } else {
              vhtml += ' <td style="text-align:center;"></th>';

          }





      }
      vhtml += '</tr>';
      vhtml += '<tr>';
      vhtml += '<td style="font-weight: bold;">Total</td>';
      vhtml += '<td style="text-align:center;">' + contador1 + '</td> ';
      vhtml += '<td style="text-align:center;">' + contador2 + '</td> ';
      vhtml += '<td style="text-align:center;">' + contador3 + '</td> ';
      vhtml += '<td style="text-align:center;">' + contador4 + '</td> ';
      vhtml += '<td style="text-align:center;">' + contador5 + '</td> ';
      vhtml += '<td style="text-align:center;">' + contador6 + '</td> ';
      vhtml += '<td style="text-align:center;">' + contador7 + '</td> ';
      vhtml += '<td style="text-align:center;">' + contador8 + '</td> ';
      vhtml += '<td style="text-align:center;">' + contador13 + '</td> ';
      vhtml += '<td style="text-align:center;">' + contador9 + '</td> ';
      vhtml += '<td style="text-align:center;">' + contador10 + '</td> ';
      vhtml += '<td style="text-align:center;">' + contador11 + '</td> ';
      vhtml += '<td style="text-align:center;">' + contador12 + '</td> ';
      vhtml += '</tr>';
      vhtml += '</table>';

      vhtml += '</div>';
      $("#vtable").html(vhtml);


  }
  /*

  function cargar_grafica_lineas(anio,mes){

  var options={
       chart: {
              renderTo: 'div_grafica_lineas',
             
          },
            title: {
              text: 'Numero de Registros en el Mes',
              x: -20 //center
          },
          subtitle: {
              text: 'Source: Plusis.net',
              x: -20
          },
          xAxis: {
              categories: []
          },
          yAxis: {
              title: {
                  text: 'REGISTROS POR DIA'
              },
              plotLines: [{
                  value: 0,
                  width: 1,
                  color: '#808080'
              }]
          },
          tooltip: {
              valueSuffix: ' registros'
          },
          legend: {
              layout: 'vertical',
              align: 'right',
              verticalAlign: 'middle',
              borderWidth: 0
          },
          series: [{
              name: 'registros',
              data: []
          }]
  }

  $("#div_grafica_lineas").html( $("#cargador_empresa").html() );
  var url = "grafica_registros/"+anio+"/"+mes+"";
  $.get(url,function(resul){
  var datos= jQuery.parseJSON(resul);
  var totaldias=datos.totaldias;
  var registrosdia=datos.registrosdia;
  var i=0;
      for(i=1;i<=totaldias;i++){
      
      options.series[0].data.push( registrosdia[i] );
      options.xAxis.categories.push(i);


      }
   //options.title.text="aqui e podria cambiar el titulo dinamicamente";
   chart = new Highcharts.Chart(options);

  })


  }*/

  function cargar_grafica_pie1(periodo) {

      var options = {
          // Build the chart

          chart: {
              renderTo: 'div_grafica_pie1',
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
          },
          title: {
              text: 'Grafica publicaciones'
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                      format: '<b>{point.name}</b>: {point.percentage:.1f}%',
                      style: {
                          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                      }
                  },
                  showInLegend: true
              }
          },
          series: [{
              name: 'Brands',
              colorByPoint: true,
              data: []
          }]

      }

      $("#div_grafica_pie1").html($("#cargador_empresa").html());

      var url = "grafica_registros/" + periodo;


      $.get(url, function(resul) {

          var datos = jQuery.parseJSON(resul);
          var questionNo = datos.questionNo * 100 / datos.totaltitulados;
          var questionSi = datos.questionSi * 100 / datos.totaltitulados;
          var questionEn_proceso = datos.questionEn_proceso * 100 / datos.totaltitulados;


          // for(i=0;i<=totattipos-1;i++){  
          //  var idTP=parseInt(tipos[i].id);
          var objeto1 = { name: "No", y: questionNo };
          var objeto2 = { name: "Si", y: questionSi };
          var objeto3 = { name: "En Proceso", y: questionEn_proceso };

          options.series[0].data.push(objeto1, objeto2, objeto3);
          //  }
          //options.title.text="aqui e podria cambiar el titulo dinamicamente";

          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3>";
          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3>";

          var vhtml = "<div class='col-md-6'><label>Total de Egresados :" + datos.totaltitulados + "</label></div>";
          $('#totaltitulados').html(vhtml);

          chart = new Highcharts.Chart(options);

      })


  }


  function cargar_grafica_pie2(periodo) {

      var options = {
          // Build the chart

          chart: {
              renderTo: 'div_grafica_pie2',
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
          },
          title: {
              text: 'Grafica publicaciones'
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                      format: '<b>{point.name}</b>: {point.percentage:.1f}%',
                      style: {
                          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                      }
                  },
                  showInLegend: true
              }
          },
          series: [{
              name: 'Brands',
              colorByPoint: true,
              data: []
          }]

      }

      $("#div_grafica_pie2").html($("#cargador_empresa").html());

      var url = "grafica_tiempoempleo/" + periodo;



      $.get(url, function(resul) {

          var datos = jQuery.parseJSON(resul);





          var Menosdeuno = datos.Menosdeuno * 100 / datos.total;
          var de1a3 = datos.de1a3 * 100 / datos.total;
          var de3a5 = datos.de3a5 * 100 / datos.total;
          var AunNotrabajo = datos.AunNotrabaja * 100 / datos.total;


          // for(i=0;i<=totattipos-1;i++){  
          //  var idTP=parseInt(tipos[i].id);
          var objeto1 = { name: "Menos de uno", y: Menosdeuno };
          var objeto2 = { name: "De 1 a 3 años", y: de1a3 };
          var objeto3 = { name: "De 3 a 5 años", y: de3a5 };
          var objeto4 = { name: "Aún No trabaja", y: AunNotrabajo };
          options.series[0].data.push(objeto1, objeto2, objeto3, objeto4);
          //  }
          //options.title.text="aqui e podria cambiar el titulo dinamicamente";

          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3>";
          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3>";
          var vhtml = "<div class='col-md-6'><label>Total de Egresados :" + datos.total + "</label></div>";
          $('#total2').html(vhtml);
          chart = new Highcharts.Chart(options);

      })


  }


  function cargar_grafica_pie3(periodo) {

      var options = {
          // Build the chart

          chart: {
              renderTo: 'div_grafica_pie3',
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
          },
          title: {
              text: 'Grafica publicaciones'
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                      format: '<b>{point.name}</b>: {point.percentage:.1f}%',
                      style: {
                          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                      }
                  },
                  showInLegend: true
              }
          },
          series: [{
              name: 'Brands',
              colorByPoint: true,
              data: []
          }]

      }

      $("#div_grafica_pie3").html($("#cargador_empresa").html());

      var url = "grafica_formacionobtenida/" + periodo;



      $.get(url, function(resul) {

          var datos = jQuery.parseJSON(resul);




          var Trabajo = datos.Trabajo * 100 / datos.total;
          var Vinculacion = datos.Vinculacion * 100 / datos.total;
          var TomaDecisiones = datos.TomaDecisiones * 100 / datos.total;
          var Operacionales = datos.Operacionales * 100 / datos.total;
          var Investigacion = datos.Investigacion * 100 / datos.total;
          var Otros = datos.Otros * 100 / datos.total;


          // for(i=0;i<=totattipos-1;i++){  
          //  var idTP=parseInt(tipos[i].id);
          var objeto1 = { name: "Trabajo", y: Trabajo };
          var objeto2 = { name: "Vinculación", y: Vinculacion };
          var objeto3 = { name: "Toma de decisiones", y: TomaDecisiones };
          var objeto4 = { name: "Operacionales", y: Operacionales };
          var objeto5 = { name: "Investigación", y: Investigacion };
          var objeto6 = { name: "Otros", y: Otros };
          options.series[0].data.push(objeto1, objeto2, objeto3, objeto4, objeto5, objeto6);
          //  }
          //options.title.text="aqui e podria cambiar el titulo dinamicamente";

          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3>";
          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3></br> ";
          var vhtml = "<div class='col-md-6'><label>Total de Egresados :" + datos.total + "</label></div>";
          $('#total3').html(vhtml);
          chart = new Highcharts.Chart(options);

      })


  }





  function cargar_grafica_pie4(periodo) {

      var options = {
          // Build the chart

          chart: {
              renderTo: 'div_grafica_pie4',
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
          },
          title: {
              text: 'Grafica publicaciones'
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                      format: '<b>{point.name}</b>: {point.percentage:.1f}%',
                      style: {
                          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                      }
                  },
                  showInLegend: true
              }
          },
          series: [{
              name: 'Brands',
              colorByPoint: true,
              data: []
          }]

      }

      $("#div_grafica_pie4").html($("#cargador_empresa").html());

      var url = "grafica_area_desem/" + periodo;



      $.get(url, function(resul) {

          var datos = jQuery.parseJSON(resul);


          var Desarrollosoftware = datos.Desarrollosoftware * 100 / datos.total;
          var Basededatos = datos.Basededatos * 100 / datos.total;
          var Redes = datos.Redes * 100 / datos.total;
          var AplicacionesMoviles = datos.AplicacionesMoviles * 100 / datos.total;
          var Arquitectura = datos.Arquitectura * 100 / datos.total;
          var Negocios = datos.Negocios * 100 / datos.total;
          var Otros = datos.Otros * 100 / datos.total;


          // for(i=0;i<=totattipos-1;i++){  
          //  var idTP=parseInt(tipos[i].id);
          var objeto1 = { name: "Desarrollo de software", y: Desarrollosoftware };
          var objeto2 = { name: "Base de datos", y: Basededatos };
          var objeto3 = { name: "Redes", y: Redes };
          var objeto4 = { name: "Aplicaciones Moviles", y: AplicacionesMoviles };
          var objeto5 = { name: "Arquitectura de computadoras", y: Arquitectura };
          var objeto6 = { name: "Negocios", y: Negocios };
          var objeto7 = { name: "Otros", y: Otros };
          options.series[0].data.push(objeto1, objeto2, objeto3, objeto4, objeto5, objeto6, objeto7);
          //  }
          //options.title.text="aqui e podria cambiar el titulo dinamicamente";

          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3>";
          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3></br>  ";
          var vhtml = "<div class='col-md-6'><label>Total de Egresados :" + datos.total + "</label></div>";
          $('#total4').html(vhtml);
          chart = new Highcharts.Chart(options);

      })


  }



  function cargar_grafica_pie5(periodo) {

      var options = {
          // Build the chart

          chart: {
              renderTo: 'div_grafica_pie5',
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
          },
          title: {
              text: 'Grafica publicaciones'
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                      format: '<b>{point.name}</b>: {point.percentage:.1f}%',
                      style: {
                          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                      }
                  },
                  showInLegend: true
              }
          },
          series: [{
              name: 'Brands',
              colorByPoint: true,
              data: []
          }]

      }

      $("#div_grafica_pie5").html($("#cargador_empresa").html());

      var url = "grafica_sectoreconomico/" + periodo;



      $.get(url, function(resul) {

          var datos = jQuery.parseJSON(resul);


          var Primario = datos.Primario * 100 / datos.total;
          var Secundario = datos.Secundario * 100 / datos.total;
          var Terciario = datos.Terciario * 100 / datos.total;
          var Educativo = datos.Educativo * 100 / datos.total;
          var Nolaboro = datos.Nolaboro * 100 / datos.total;



          // for(i=0;i<=totattipos-1;i++){  
          //  var idTP=parseInt(tipos[i].id);
          var objeto1 = { name: "Primario", y: Primario };
          var objeto2 = { name: "Secundario", y: Secundario };
          var objeto3 = { name: "Terciario", y: Terciario };
          var objeto4 = { name: "Educativo", y: Educativo };
          var objeto5 = { name: "No labora", y: Nolaboro };

          options.series[0].data.push(objeto1, objeto2, objeto3, objeto4, objeto5);
          //  }
          //options.title.text="aqui e podria cambiar el titulo dinamicamente";

          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3>";
          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3></br>  ";
          var vhtml = "<div class='col-md-6'><label>Total de Egresados :" + datos.total + "</label></div>";
          $('#total5').html(vhtml);
          chart = new Highcharts.Chart(options);

      })


  }



  function cargar_grafica_pie6(periodo) {

      var options = {
          // Build the chart

          chart: {
              renderTo: 'div_grafica_pie6',
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
          },
          title: {
              text: 'Grafica publicaciones'
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                      format: '<b>{point.name}</b>: {point.percentage:.1f}%',
                      style: {
                          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                      }
                  },
                  showInLegend: true
              }
          },
          series: [{
              name: 'Brands',
              colorByPoint: true,
              data: []
          }]

      }

      $("#div_grafica_pie6").html($("#cargador_empresa").html());

      var url = "grafica_institucion/" + periodo;


      $.get(url, function(resul) {

          var datos = jQuery.parseJSON(resul);


          var Publica = datos.Publica * 100 / datos.total;
          var Privada = datos.Privada * 100 / datos.total;
          var Propia = datos.Propia * 100 / datos.total;
          var Nolaboro = datos.Nolaboro * 100 / datos.total;



          // for(i=0;i<=totattipos-1;i++){  
          //  var idTP=parseInt(tipos[i].id);
          var objeto1 = { name: "Publica", y: Publica };
          var objeto2 = { name: "Privada", y: Privada };
          var objeto3 = { name: "Propia", y: Propia };
          var objeto4 = { name: "No labora", y: Nolaboro };

          options.series[0].data.push(objeto1, objeto2, objeto3, objeto4);
          //  }
          //options.title.text="aqui e podria cambiar el titulo dinamicamente";


          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3></br>  ";
          var vhtml = "<div class='col-md-6'><label>Total de Egresados :" + datos.total + "</label></div>";
          $('#total6').html(vhtml);
          chart = new Highcharts.Chart(options);

      })


  }



  function cargar_grafica_pie7(periodo) {

      var options = {
          // Build the chart

          chart: {
              renderTo: 'div_grafica_pie7',
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
          },
          title: {
              text: 'Grafica publicaciones'
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                      format: '<b>{point.name}</b>: {point.percentage:.1f}%',
                      style: {
                          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                      }
                  },
                  showInLegend: true
              }
          },
          series: [{
              name: 'Brands',
              colorByPoint: true,
              data: []
          }]

      }

      $("#div_grafica_pie7").html($("#cargador_empresa").html());

      var url = "grafica_relacionado/" + periodo;


      $.get(url, function(resul) {
          var datos = jQuery.parseJSON(resul);
          var muyrelacionado = datos.Muyrelacionado * 100 / datos.total;
          var pocorelacionado = datos.Pocorelacionado * 100 / datos.total;
          var parcialmente = datos.Parcialmente * 100 / datos.total;
          var notrabajo = datos.Notrabajo * 100 / datos.total;

          // for(i=0;i<=totattipos-1;i++){  
          //  var idTP=parseInt(tipos[i].id);
          var objeto1 = { name: "Muy relacionado", y: muyrelacionado };
          var objeto2 = { name: "Poco relacionado", y: pocorelacionado };
          var objeto3 = { name: "Parcialmente", y: parcialmente };
          var objeto4 = { name: "No Trabajo", y: notrabajo };

          options.series[0].data.push(objeto1, objeto2, objeto3, objeto4);
          //  }
          //options.title.text="aqui e podria cambiar el titulo dinamicamente";

          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3>";
          options.title.text = "<h3>Periodo: " + datos.periodo + "</h3></br>";
          var vhtml = "<div class='col-md-6'><label>Total de Egresados :" + datos.total + "</label></div>";
          $('#total7').html(vhtml);
          chart = new Highcharts.Chart(options);

      })


  }

  function imprimirTabla() {

      alert("hola");
  }