@extends('adminlte::page')

@section('title', 'Cooperativas')

@section('content_header')
    <h1>Lista de Cooperativas</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="d-flex justify-content-end">
        <a href="{{ route('cooperativas.create') }}" class="btn btn-secondary">Agregar Cooperativa</a>
    </div>
    <br>
    <div class="table-responsive">
        <table id="example" class="table table-striped">
            <thead>
                <tr>
                    <th hidden>Registro</th>
                    <th>Registro</th>
                    <th>Denominacion Usual</th>
                    <th>Mora</th>
                    <th>Aciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listCoop as $coop)
                    <tr style="background-color: {{ $coop->mora > 4 ? 'red' : 'inherit' }}">
                        <td hidden>{{ $coop->id }}</td>
                        <td>{{ $coop->registro }}</td>
                        <td>{{ $coop->denominacionUsual }}</td>
                        <td>{{ $coop->mora }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="dataModal" tabindex="-1" role="dialog" aria-labelledby="dataModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dataModalLabel">Detalles Cooperativa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row" id="modalBody">
                            <div class="col-md-6" id="leftColumn"></div>
                            <div class="col-md-6" id="rightColumn"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    @stop

    @section('js')
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    "columnDefs": [{
                        "targets": -1,
                        "data": null,
                        "defaultContent": "<i class='fas fa-eye view-icon' style='cursor: pointer; margin-right: 10px'></i> <i class='fas fa-pencil-alt edit-icon' style='cursor: pointer; margin-right: 10px'></i>"
                    }]
                });

                $('#example tbody').on('click', 'i.view-icon', function() {
                    var data = $('#example').DataTable().row($(this).parents('tr')).data();
                    $.ajax({
                        url: 'cooperativas/ver/' + data[0], // Suponiendo que data[0] es el ID
                        type: 'GET',
                        success: function(response) {
                            var leftColumnContent = '';
                            var rightColumnContent = '';

                            // Datos para la columna izquierda
                            leftColumnContent +=
                                '<p><strong>Autorizacion para Funcionar: </strong>' + response
                                .autorizacionPFuncionar + '</p>';
                            leftColumnContent += '<p><strong>Planes Nacion:</strong> ' + response
                                .planesNacion + '</p>';
                            leftColumnContent += '<p><strong>Registro:</strong> ' + response
                                .registro + '</p>';
                            leftColumnContent += '<p><strong>Cierrre:</strong> ' + response.cierre +
                                '</p>';
                            leftColumnContent += '<p><strong>Denominacion Usual:</strong> ' +
                                response.denominacionUsual + '</p>';
                            leftColumnContent += '<p><strong>Denominacion Registro:</strong> ' +
                                response.denominacionRegistro + '</p>';
                            leftColumnContent += '<p><strong>Domicilio Legal:</strong> ' + response
                                .domicilioLegal + '</p>';
                            leftColumnContent += '<p><strong>Telefono:</strong> ' + response
                                .telefono + '</p>';
                            leftColumnContent += '<p><strong>Mail: </strong> ' + response.mail +
                                '</p>';
                            leftColumnContent += '<p><strong>Sede: </strong> ' + response.sede +
                                '</p>';

                            // Datos para la columna derecha
                            leftColumnContent += '<p><strong>CUIT:</strong> ' + response.cuit +
                                '</p>';
                            rightColumnContent += '<p><strong>Ejercicio Adeudado:</strong> ' +
                                response.ejerciciosAdeudados + '</p>';

                            var moraColor = response.mora > 4 ? 'red' : 'green';
                            rightColumnContent += '<p style="color:' + moraColor +
                                '"<strong>Mora:</strong> ' + response.mora + '</p>';

                            rightColumnContent +=
                                '<p><strong>Retiro Autorizacion para Funcionar:</strong> ' +
                                response.retiroAutorizacionPFuncionar + '</p>';
                            rightColumnContent += '<p><strong>Emplazamiento:</strong> ' + response
                                .emplazamiento + '</p>';
                            rightColumnContent += '<p><strong>Ultimo AGO:</strong> ' + response
                                .ultimaAgo + '</p>';
                            rightColumnContent += '<p><strong>Expediente:</strong> ' + response
                                .expediente + '</p>';
                            rightColumnContent += '<p><strong>Ultimo Balance:</strong> ' + response
                                .ultBalance + '</p>';
                            rightColumnContent += '<p><strong>Observaciones:</strong> ' + response
                                .observaciones + '</p>';
                            rightColumnContent += '<p><strong>Contitucion</strong> ' + response
                                .contitucion + '</p>';
                            rightColumnContent += '<p><strong>Canceladas</strong> ' + response
                                .canceladas + '</p>';

                            $('#leftColumn').html(leftColumnContent);
                            $('#rightColumn').html(rightColumnContent);
                            $('#dataModal').modal('show');

                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                });

                $('#example tbody').on('click', 'i.edit-icon', function() {
                    var data = $('#example').DataTable().row($(this).parents('tr')).data();
                    $.ajax({
                        url: 'cooperativas/editar/' + data[0], // Suponiendo que data[0] es el ID
                        type: 'GET',
                        success: function(response) {
                            window.location.replace('cooperativas/editar/' + data[0]);
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                });
            });
        </script>
    @stop


    @section('plugins.Datatables', true)
