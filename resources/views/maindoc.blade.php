@extends('DocLayouts.layout1')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class='container'>
	<h1>Docentes & Profesionales</h1>
	<div class="container">
		<h2>Docentes</h2>
		<input class="form-control" id="Search1" type="text" placeholder="Search..">
		<table class="table table-bordered table-striped">
		  <thead>
		    <tr>
		      <th><font size="3">Codigo Docente</font></th>
		      <th><font size="3">Nombre Docente</font></th>
		      <th><font size="3">Proyactos Asignados</font></th>
		    </tr>
		  </thead>
		  <tbody id="table1">
		    <tr>
		      <th>1</th>
		      <td>Mark</td>
		      <td><button type="button">Mostrar</button></td>
		    </tr>
		    <tr>
		      <th >2</th>
		      <td>Jacob</td>
		      <td><button type="button">Mostrar</button></td>
		    </tr>
		    <tr>
		      <th>3</th>
		      <td>Larry the Bird</td>
		      <td><button type="button">Mostrar</button></td>
		    </tr>
		  </tbody>
		</table>
	</div>
	
	<div class="container">
		<h2>Profesionales</h2>
		<input class="form-control" id="Search2" type="text" placeholder="Search..">
		<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th><font size="3">Codigo Profesional</font></th>
		      <th><font size="3">Nombre Profesional</font></th>
		      <th><font size="3">Proyactos Asignados</font></th>
		    </tr>
		  </thead>
		  <tbody id="tabla2">
		    <tr>
		      <th>1</th>
		      <td>Mark</td>
		      <td><button type="button">Mostrar</button></td>
		    </tr>
		    <tr>
		      <th >2</th>
		      <td>Jacob</td>
		      <td><button type="button">Mostrar</button></td>
		    </tr>
		    <tr>
		      <th>3</th>
		      <td>Larry the Bird</td>
		      <td><button type="button">Mostrar</button></td>
		    </tr>
		  </tbody>
		</table>
	</div>
</div>
	<script>
		$(document).ready(function(){
		  $("#Search1").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#table1 tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>
	<script>
		$(document).ready(function(){
		  $("#Search2").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#tabla2 tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>
@endsection

</body>
</html>