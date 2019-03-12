@extends('layouts.app')

@section('main-content')
@section('title')
Empresas Con Encuesta Contestada
@endsection
<table>


<tr>
<td><B>Empresa</B></td>
<td><B>Numero Tel.</B></td>
</tr>

<?php
  foreach ($Empresas as $empresa){
  echo "<tr>";
  echo "<td>".$empresa->question_1."</td>";
  echo "<td>".$empresa->question_2."</td>";
  echo "</tr>";
}

?>
</table>


  @endsection
