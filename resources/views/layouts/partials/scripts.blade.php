<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap Form Helpers -->
    <script src="{{ asset('/form-helpers/js/bootstrap-formhelpers.min.js') }}"></script>


<script src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>

<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

<<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>

<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>

<script>
  $(document).ready(function(){
    $('#myTable').DataTable({
      responsive: true,

      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
      'excel',  'print',
      
      
       {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: [ 0, 1, 2,3,4, 5,6,7,8,9,10,11,12,13,14,15 ]
                }

            }
      ]


    });
  });
</script>


<script>
  $(document).ready(function(){
    $('#allDepis').DataTable({
      responsive: true,

      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
      'excel',  'print',
      {
                extend: 'pdfHtml5',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: [ 0, 1, 2,3,4, 5,6,7,8,9,10,11,12,13,14,15,16 ]
                }

            }
      ]


    });
  });
</script>


<script>
  $(document).ready(function(){
    $('#vacancies').DataTable({
      responsive: true,

      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
      'excel',  'print',
      {
                extend: 'pdfHtml5',
                orientation: 'portrait',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: [ 0, 1, 2,3,4, 5,6,7,8]
                }

            }
      ]


    });
  });
</script>

<script>
  $(document).ready(function(){
    $('#residencia').DataTable({
      responsive: true,

      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
      'excel',  'print',
      {
                extend: 'pdfHtml5',
                orientation: 'portrait',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: [ 0, 1, 2,3,4,5,6,7,8,9,10,11]
                }

            }
      ]


    });
  });
</script>


<script>
  $(document).ready(function(){
    $('#allservice').DataTable({
      responsive: true,

      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
      'excel',  'print',
      {
                extend: 'pdfHtml5',
                orientation: 'portrait',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: [ 0, 1, 2,3]
                }

            }
      ]


    });
  });
</script>

<script>
  $(document).ready(function(){
    $('#allresident').DataTable({
      responsive: true,

      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
      'excel',  'print',
      {
                extend: 'pdfHtml5',
                orientation: 'portrait',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: [ 0, 1, 2,3,4,5,6,7,8,9,10,11]
                }

            }
      ]


    });
  });
</script>


<script>
  $(document).ready(function(){
    $('#allgraduate').DataTable({
      responsive: true,

      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
      'excel',  'print',
      {
                extend: 'pdfHtml5',
                orientation: 'portrait',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: [ 0, 1, 2,3,4,5,6,7]
                }

            }
      ]


    });
  });
</script>

<script>
  $(document).ready(function(){
    $('#allcompany').DataTable({
      responsive: true,

      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
      'excel',  'print',
      {
                extend: 'pdfHtml5',
                orientation: 'portrait',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: [ 0, 1, 2,3,4]
                }

            }
      ]


    });
  });
</script>











<script>
  $(document).ready(function(){
    $('#period').DataTable({
      responsive: true,
      'oLanguage': {
      'sSearch': "<span>INGRESA PERIODO A FILTRAR:</span> _INPUT_" //search
      },
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
      'excel', 'pdf', 'print'
      ]

    });
  });
</script>

<script>
  $(document).ready(function(){
    $('#company').DataTable({
      responsive: true,
      'oLanguage': {
      'sSearch': "<span>INGRESA EL SECTOR A FILTRAR:</span> _INPUT_" //search
      },
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
      },
      dom: 'Bfrtip',
      buttons: [
      'excel', 'pdf', 'print'
      ]

    });
  });
</script>

<script>
  $(document).ready(function(){
    $('#events').DataTable({
      responsive: true,
      'oLanguage': {
      'sSearch': "<span>Buscar:</span> _INPUT_" //search
      },
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"
      },
      
      dom: 'Bfrtip',
      buttons: [
      'excel', 'pdf', 'print'
      ]

    });
  });
</script>


<script>
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy",
        language: "es",
        autoclose: true
    });
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->