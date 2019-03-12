<html>
<head>
  <link rel="stylesheet" href="./css/styles.css" />
  <style>
  #tabla
  {
    margin-top: 10px;
    margin-left: 0px;
    margin-bottom: 40px;
  text-align: center;
  table-layout: fixed;
      width: 100%;
      border-collapse: separate;
      border: 1px solid GRAY;
  }
  tr, td {
      border: 1px solid GRAY;
      width: 80px;

      word-wrap: break-word;
  }

  </style>
<body>
  <header>
<img src="./img/header.jpg" width="100%" />

    <h1>Directorio de Egresados</h1>
<?php   echo "<h1>".$periodo."</h1>";  ?>
  </header>


  <footer>
    <img src="./img/footer.jpg" width="100%" />

  </footer>


<img src="./img/content.jpg" id="imagen"/>

  <div id="content">

    <table id="tabla" class="table table-striped">
      <tr>
      <td><B>Nombre</B></td>
      <td><B>Apellidos</B></td>
      <td><B>Dirección</B></td>
      <td><B>Telefono</B></td>
      <td><B>Correo</B></td>
      <td><B>Empresa</B></td>
      </tr>


    <?php
      foreach ($Egresados as $Egresado){
        echo "<tr>";
      echo "<td>".$Egresado->name."</td>";
      echo "<td>".$Egresado->last_name."</td>";
      echo "<td>".$Egresado->address."</td>";
      echo "<td>".$Egresado->phone."</td>";
      echo "<td>".$Egresado->question_3."</td>";
      echo "<td>".$Egresado->question_9."</td>";
      echo "</tr>";
    }

    ?>

    </table>



  </div>
</body>
</html>
