@extends('adminlte::page')

@section('title', 'Administrador')

@section('content_header')
<h3>Proyectos Actuales</h3>  
@stop

@section('content')
 <!-- Inicio modal-->
<div class="container mt-3">

   
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Agregra proyecto
  </button>
</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Agregue un Proyecto</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <label for="">Nombre Cliente</label>
        <input class="form-control" type="text" name="nombre" id="">
        <br>
        <label for="">Nombre Encargado</label>
        <input class="form-control" type="text" name="nombre" id="">
        <br>
        <label for="">Nombre Proyecto</label>
        <input class="form-control" type="text" name="nombre" id="">
        <br>
        <label for="">Descripción proyecto</label>
        <input class="form-control" type="text" name="nombre" id="">
        <br>
        <label for="">Dirección Proyecto</label>
        <input class="form-control" type="text" name="nombre" id="">
        <br>
        <label for="">Fecha Inicial</label>
        <input class="form-control" type="Date" name="nombre" id="">
        <br>
        <label for="">Fecha Final</label>
        <input class="form-control" type="Date" name="nombre" id="">
        <br>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button  value="Seleccionar" name="accion" 
                                    class="btn btn-primary" data-id="19">
                                    <i class="fa fa-pencil"></i>
                                    Agregar
                                </button>
         <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
      </div>

    </div>
  </div>
</div>
<!-- Fin modal-->



  <div class="container" style="margin-top: 10px;padding: 5px">
     <table id="tablax" class="table   table-bordered table-striped">
          <thead>
            <tr>
            <th><center>Cliente</center></th>
            <th ><center>Encargado</center></th>
            <th><center>Proyecto</center></th>
            </tr>
          </thead>
              <tbody id="myTable">
                 <tr>
                        
                         <td>
                          <table class="table  table-bordered">
                            <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>David</td> 
                            </tr>
                            </table>
                         </td>
                         <td>
                          <table class="table table-bordered">
                            <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>Vanessa</td> 
                            </tr>
                            </table>
                         </td>
                          <td>
                          <table class="table table-bordered">
                            <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Dirección</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha Final</th>                            
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>CASA</td>
                            <td>CASA desc</td>
                            <td>Tatumbla</td>
                            <td>8/01/2022</td>
                            <td>8/07/2022</td>
                            </tr>
                            </table>
                         </td>                       
                 </tr>  
              
                      
               </tbody>        
     </table>
  </div>
 <!-- Fin  de la tabla -->
@stop

@section('css')
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- para modal-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Fin para modal-->
    <!-- BOOTSTRAP Tabla-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- Fin BOOTSTRAP Tabla-->

   
    
@stop

@section('js')
 <!-- inicio script de la tabla, buscador, paginado -->
 <script src="https://code.jquery.com/jquery-3.4.1.js"
         integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" 
         crossorigin="anonymous">
      </script>
     <!-- DATATABLES -->
     <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js">
     </script>
        <!-- BOOTSTRAP -->
          <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js">
          </script>
             <script>
              $(document).ready(function () {
              $('#tablax').DataTable({
                 language: {
                 processing: "Tratamiento en curso...",
                 search: "Buscar&nbsp;:",
                 lengthMenu: "Agrupar de _MENU_ items",
                 info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                 infoEmpty: "No existen datos.",
                 infoFiltered: "(filtrado de _MAX_ elementos en total)",
                 infoPostFix: "",
                 loadingRecords: "Cargando...",
                 zeroRecords: "No se encontraron datos con tu busqueda",
                 emptyTable: "No hay datos disponibles en la tabla.",
                 paginate: {
                                first: "Primero",
                                previous: "Anterior",
                                next: "Siguiente",
                                last: "Ultimo"
                            },
                    aria: {
                            sortAscending: ": active para ordenar la columna en orden ascendente",
                            sortDescending: ": active para ordenar la columna en orden descendente"
                          }
                },
               
                   lengthMenu: [ [10, 25, -1], [10, 25, "All"] ],
              });
              });
          </script>
    
     <!-- Fin inicio script de la tabla, buscador, paginado -->
@stop