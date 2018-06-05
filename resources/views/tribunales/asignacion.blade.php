@extends('layouts.app')
@section('content')
{{ csrf_field() }}
<h1 class="text-center">Tribunales - Asignacion</h1>

<div class="row z-depth-1-half">
    <div class="col-sm-5">
        <p class="lead"><b>Estudiantes:</b><br>
        @foreach($proyecto->proyecto_estudiante as $estudiantes)
            {{ $estudiantes->estudiante->nombreEst . ' ' . $estudiantes->estudiante->apellidoEst }}<br>
        @endforeach
        </p>
    </div>
    <div class="col-sm-7">
        <p class="lead"><b>Proyecto:</b> {{ $proyecto->titulo }}</p>
    </div>
</div>
<br>
<h2>Recomendados</h2>
    <div class="md-form input-group mb-3">
    <input type="text" class="form-control pl-0 rounded-0" id="search_docente" type="text" placeholder="Buscar Docentes/Profesionales...">
    </div>
</div>
<h2 class="text-center">Tutores Asignados</h2>
<div class="row">
    <table class="table table-bordered table-striped table-sm tablaScroll5">
        <thead>
            <tr>
                <th style="width: 20%" ><font size="3">Docente </font></th>
                <th style="width: 50%" ><font size="3">Areas</font></th>
                <th style="width: 5%" class="text-center" ><font size="3">Trib</font></th>
                <th style="width: 5%" class="text-center" ><font size="3">Tut</font></th>
                <th style="width: 10%" class="text-center" ><font size="3">Asignar</font></th>
            </tr>
        </thead>
        <tbody id="table2">
        @foreach($docentes as $docente)
            <tr>
                <td style="width: 20%" >{{ $docente->apePaternoDoc .' '. $docente->apeMaternoDoc .' '. $docente->nombreDoc }}</td>
                <td style="width: 50%" >
                @foreach($docente->tiene as $pha)
                    {{ $pha->area->nombreArea }}, 
                @endforeach 
                </td>

                <td style="width: 5%" class="text-center">{{ $docente->cantTrib }}</td>
                <td style="width: 5%" class="text-center">{{ $docente->cantTut }}</td>

                <td style="width: 10%" class="text-center" >
                    @if(!$docente->tribunal)
                    <a href="/estudiante/proyecto/{{$proyecto->idProyecto}}/{{$docente->idDoc}}/asignacion" class="btn-floating btn-sm btn-light-green" onClick="alert('Se asignara el tribunal a este proyecto!')" data-toggle="tooltip" data-placement="top" title="Asignar"><i class="fas fa-plus-circle mt-1 ml-1 fa-2x"></i></i></a>
                    @else
                    <span class="badge badge-success">asignado</span>
                    <a data-id="{{$docente->idDoc}}" class="btn-floating btn-sm btn-danger btn-modal-renuncia" data-toggle="tooltip" data-placement="top" title="Renuncia"><i class="fa fa-times mt-2 ml-2 fa-lg"></i></a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
</div>
<h2 class="text-center">Tutores</h2>
<div class="row">
    <table class="table table-striped table-sm tablaScroll4">
        <thead>
            <tr>
                <th style="width: 20%" ><font size="3">Docente </font></th>
                <th style="width: 50%" ><font size="3">Areas</font></th>
                <th style="width: 5%" class="text-center" ><font size="3">Trib</font></th>
                <th style="width: 5%" class="text-center" ><font size="3">Tut</font></th>
                <th style="width: 10%" class="text-center" ><font size="3">Asignar</font></th>
            </tr>
        </thead>
        <tbody id="table2">
        @foreach($docentes as $docente)
            <tr>
                <td style="width: 20%" >{{ $docente->apePaternoDoc .' '. $docente->apeMaternoDoc .' '. $docente->nombreDoc }}</td>
                <td style="width: 50%" >
                @foreach($docente->tiene as $pha)
                    {{ $pha->area->nombreArea }}, 
                @endforeach 
                </td>

                <td style="width: 5%" class="text-center">{{ $docente->cantTrib }}</td>
                <td style="width: 5%" class="text-center">{{ $docente->cantTut }}</td>

                <td style="width: 10%" class="text-center" >
                    @if(!$docente->tribunal)
                    <a href="/estudiante/proyecto/{{$proyecto->idProyecto}}/{{$docente->idDoc}}/asignacion" class="btn-floating btn-sm btn-light-green" onClick="alert('Se asignara el tribunal a este proyecto!')" data-toggle="tooltip" data-placement="top" title="Asignar"><i class="fas fa-plus-circle mt-1 ml-1 fa-2x"></i></i></a>
                    @else
                    <span class="badge badge-success">asignado</span>
                    <a data-id="{{$docente->idDoc}}" class="btn-floating btn-sm btn-danger btn-modal-renuncia" data-toggle="tooltip" data-placement="top" title="Renuncia"><i class="fa fa-times mt-2 ml-2 fa-lg"></i></a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<br>
<h2>Otros</h2>
<div class="row">
    <table class="table table-striped table-sm tablaScroll4">
        <thead>
            <tr>
                <th style="width: 20%" ><font size="3">Docente </font></th>
                <th style="width: 50%" ><font size="3">Areas</font></th>
                <th style="width: 5%" class="text-center" ><font size="3">Trib</font></th>
                <th style="width: 5%" class="text-center" ><font size="3">Tut</font></th>
                <th style="width: 10%" class="text-center" ><font size="3">Asignar</font></th>
            </tr>
        </thead>
        <tbody id="table2">
        @foreach($extras as $docente)
            <tr>
                <td style="width: 20%" >{{ $docente->apePaternoDoc .' '. $docente->apeMaternoDoc .' '. $docente->nombreDoc }}</td>
                <td style="width: 50%" >
                @foreach($docente->tiene as $pha)
                    {{ $pha->area->nombreArea }}, 
                @endforeach 
                </td>

                <td style="width: 5%" class="text-center">{{ $docente->cantTrib }}</td>
                <td style="width: 5%" class="text-center">{{ $docente->cantTut }}</td>

                <td style="width: 10%" class="text-center" >
                    @if(!$docente->tribunal)
                    <a href="/estudiante/proyecto/{{$proyecto->idProyecto}}/{{$docente->idDoc}}/asignacion" class="btn-floating btn-sm btn-light-green" onClick="alert('Se asignara el tribunal a este proyecto!')" data-toggle="tooltip" data-placement="top" title="Asignar"><i class="fas fa-plus-circle mt-1 ml-1 fa-2x"></i></i></a>
                    @else
                    <span class="badge badge-success">asignado</span>
                    <a data-id="{{$docente->idDoc}}" class="btn-floating btn-sm btn-danger btn-modal-renuncia" data-toggle="tooltip" data-placement="top" title="Renuncia"><i class="fa fa-times mt-2 ml-2 fa-lg"></i></a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<!-- Modal renuncia renuncia -->
<div class="modal fade" id="modal-renuncia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-danger modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Renuncia de Tribunal</p>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
                <!-- Grid row -->
                <div class="form-row">
                    <div class="col-md-12">
                        <!--Blue select-->
                        
                        <label>Motivo de Renuncia</label>
                        <!--/Blue select-->
                    </div>
                    <div class="col-md-12">
                        <div class="md-form form-group">
                            <textarea type="text" id="motivo" class="form-control md-textarea" rows="3"></textarea>
                        </div>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-12">
                        <!-- Material input -->
                        <div class="md-form form-group">
                            <input placeholder="Selected date" type="text" id="date-picker-renuncia" class="form-control datepicker">
                            <label for="date-picker-renuncia">Fecha de Renuncia</label>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->              
            </div>
            
            <!--Footer-->
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-indigo" id="modal-guardar-btn">Guardar</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal renuncia estudiante -->

@endsection
@section('script')
<script>
    $(document).ready(function(){
		  $("#search_docente").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#table2 tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
    // SCRIPT PARA LA RENUNCIA DE TRIBUNAL
    var idDoc = null;
    $(document).on('click', '.btn-modal-renuncia', function() {
        $('#motivo').val('');
        $('#date-picker-renuncia').val('');
        idDoc = $(this).data('id');
        $('#modal-renuncia').modal('show');
    });
    $(document).on('click', '#modal-guardar-btn', function(e) {
        e.preventDefault();
        var motivo = null;
        if ($('#motivo_select').val() != null) {
            if ($('#motivo_select').val() == "otro") {
                if ($('#motivo').val()=="") {
                    toastr.error('describir un motivo!');
                } else {
                    motivo = $('#motivo').val();
                }
            } else {
                motivo = $('#motivo_select').val();
            }
        } else {
            toastr.error('seleccionar un motivo!');
        }
        if (motivo != null) {
            $.ajax({
                type: 'POST',
                url: '/estudiante/proyecto/renuncia',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'idProyecto': {{$proyecto->idProyecto}},
                    'idDoc': idDoc,
                    'motivo': motivo,
                    'fecha': $('#date-picker-renuncia').val(),
                },
                success : function(data) {
                    idDoc = null;
                    location.reload();
                },
            });
        }
    });
</script>
@endsection