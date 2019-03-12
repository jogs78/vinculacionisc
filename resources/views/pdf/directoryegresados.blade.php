<style>
@font-face {
  font-family: SourceSansPro;
  src: url(SourceSansPro-Regular.ttf);
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #0087C3;
  text-decoration: none;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #555555;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 14px; 
  font-family: SourceSansPro;
}

header {
  padding: 10px 0;
  margin-bottom: 20px;
  border-bottom: 1px solid #AAAAAA;
}

#logo {
  float: left;
  margin-top: 8px;
}

#logo img {
  height: 70px;
}

#company {
  float: right;
  text-align: right;
}


#details {
  margin-bottom: 50px;
}

#client {
  padding-left: 6px;
  border-left: 6px solid #0087C3;
  float: left;
}

#client .to {
  color: #777777;
}

h2.name {
  font-size: 1.4em;
  font-weight: normal;
  margin: 0;
}

#invoice {
  float: right;
  text-align: right;
}

#invoice h1 {
  color: #0087C3;
  font-size: 2.4em;
  line-height: 1em;
  font-weight: normal;
  margin: 0  0 10px 0;
}

#invoice .date {
  font-size: 1.1em;
  color: #777777;
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 20px;
  background: #EEEEEE;
  text-align: center;
  border-bottom: 1px solid #FFFFFF;
}

table th {
  white-space: nowrap;        
  font-weight: normal;
}

table td {
  text-align: right;
}

table td h3{
  color: #57B223;
  font-size: 1.2em;
  font-weight: normal;
  margin: 0 0 0.2em 0;
}

table .no {
  color: #FFFFFF;
  font-size: 1.6em;
  background: #57B223;
}

table .desc {
  text-align: left;
}

table .unit {
  background: #DDDDDD;
}

table .qty {
}

table .total {
  background: #57B223;
  color: #FFFFFF;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table tbody tr:last-child td {
  border: none;
}

table tfoot td {
  padding: 10px 20px;
  background: #FFFFFF;
  border-bottom: none;
  font-size: 1.2em;
  white-space: nowrap; 
  border-top: 1px solid #AAAAAA; 
}

table tfoot tr:first-child td {
  border-top: none; 
}

table tfoot tr:last-child td {
  color: #57B223;
  font-size: 1.4em;
  border-top: 1px solid #57B223; 

}

table tfoot tr td:first-child {
  border: none;
}

#thanks{
  font-size: 2em;
  margin-bottom: 50px;
}

#notices{
  padding-left: 6px;
  border-left: 6px solid #0087C3;  
}

#notices .notice {
  font-size: 1.2em;
}

footer {
  color: #777777;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #AAAAAA;
  padding: 8px 0;
  text-align: center;
}
</style>


<!DOCTYPE html>



<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Directorio de Egresados</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="/public/images/tec.jpg">
         <h4>Instituto Tecnológico de Tuxtla Gutiérrez</h4>
          <h4>Directorio de Egresados</h4>
      </div>   
      <div id="company">
        <div id="logo">
        <img src="/public/images/tecn.jpg">
      </div>
      </div>
      </div>
    </header>
    <main>
      <div class="row">
            @if($graduates->isEmpty())
            <div class="well text-center">No Graduates found.</div>
            @else
            <table class="table table-hover" id="period">
                <thead>
                    <th>Nombre(s)</th>
                    <th>Apellidos</th>
                    <th>Dirección</th>
                    <th>Telefóno</th>
                    <th>Correo</th>
                    <th>Periodo de Egreso</th>
                    <th>Empresa donde labora</th>
                </thead>
                <tbody>

                    @foreach($graduates as $graduate)
                    @php
                    $poll = $graduate->poll;
                    @endphp
                    <tr class="success">
                     <td>{!! $graduate->name !!}</td>
                     <td>{!! $graduate->last_name !!}</td>
                     <td>{!! $graduate->address !!}</td>
                     <td>{!! $graduate->phone !!}</td>
                     <td>{!! $graduate->user->email !!}</td>
                     @if (is_null($poll))
                     <td>No se ha registrado periodo</td>
                     <td>No se ha registrado empresa</td>
                     @else
                     <td>{!! $poll->question_5 !!}</td>
                     <td>{!! $poll->question_9 !!}</td>
                    @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
        
  </body>
</html>