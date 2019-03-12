<html>
<head>
  <link rel="stylesheet" href="./css/styles.css" />
<body>
  <header>
<img src="./img/header.jpg" width="100%" />

    <h1>Directorio Empresarial</h1>
	<h1>Agosto-Diciembre 2017</h1>
  </header>


  <footer>
    <img src="./img/footer.jpg" width="100%" />

  </footer>


<img src="./img/content.jpg" id="imagen"/>

  <div id="content">

    <table id="tabla" class="table table-striped">
      <tr>
      <td><B>Empresa</B></td>
      <td><B>Sector</B></td>
      <td><B>Dirección</B></td>
      <td><B>Telefono</B></td>
      <td><B>Director</B></td>
      <td><B>Contacto</B></td>
      <td><B>E-mail</B></td>
      </tr>


    <?php
      foreach ($companies as $comapny){
        echo "<tr>";
      echo "<td>".$comapny->name."</td>";
      echo "<td>".$comapny->sector."</td>";
      echo "<td>".$comapny->address."</td>";
      echo "<td>".$comapny->phone."</td>";
      echo "<td>".$comapny->director."</td>";
      echo "<td>".$comapny->contact."</td>";
      echo "<td>".$comapny->email."</td>";
      echo "</tr>";
    }

    ?>

    </table>



  </div>

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




</body>
</html>
