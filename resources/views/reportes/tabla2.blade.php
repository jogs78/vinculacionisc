    <table id="tabla-direc2" >
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

   