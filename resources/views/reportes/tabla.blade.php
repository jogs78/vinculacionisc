<table id="tabla-direc2">
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
