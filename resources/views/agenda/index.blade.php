@extends('plantilla.plantilla')

@section('titulo', 'Index')

este es el index

@section('contenido')



<div class="container-fluid registerinicio">
                <div class="row">
                    <div class="col-md-6 register-left register-left1">
                        <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
                    </div>    
                    <div class="col-md-6 register-left">
                        
                        <h3>Bienvenid@</h3>
                        <p>Por favor llena los datos correctamente en el sistema!</p>
                        
                    </div>    
                </div>
</div>



<div class="container-fluid ">

@if ( session('datos') )

<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('datos')}}
  <button type="button" class="close" data-dismiss="alert" arial-label="Close">
    <span arial-hidden="true">&times;</span>
  </button>
</div>

@endif

@if ( session('cancelar') )

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{session('cancelar')}}
  <button type="button" class="close" data-dismiss="alert" arial-label="Close">
    <span arial-hidden="true">&times;</span>
  </button>
</div>

@endif

 <br>
<nav class="navbar navbar-light">
  <a class="navbar-brand"><img id="icono" class="img-responsive" 
    src="https://imge.apk.tools/300/d/3/1/com.widesoft.guiatelefonica.png"></a>

  <ul class="nav flex-column text-center">
  <li class="nav-item">
    <span class="nav-link active">Bienvenido Jhonatan</span>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Cerrar sesión</a>
  </li>
</ul>

</nav>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>

   <br>
      <h1 class="text-center">Datos personales</h1>

      <br>
<div class="row float-right">
    <a href="{{route('agenda.create')}}" class="btn btn-info btncolorblanco"><i class="fas fa-user-plus"></i> Agregar un nuevo Registro</a>
</div>
   <br>
<table class="table-responsive table text-center">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Nombres y apellidos</th>
                                                  <th scope="col">Telefono</th>
                                                  <th scope="col">Celular</th>
                                                  <th scope="col">Sexo</th>
                                                  <th scope="col">Email</th>
                                                  <th scope="col">Posición</th>
                                                  <th scope="col">Departamento</th>
                                                  <th scope="col">Salario</th>
                                                  <th scope="col">Fecha de nacimiento</th>
                                                  <th scope="col">Acción</th>
                                              
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <th scope="row">1</th>
                                                  <td>Jhonatan David Fernandez Rosa</td>
                                                  <td>18499188421</td>
                                                  <td>18499188421</td>
                                                  <td>Masculino</td>
                                                  <td>Jeremiselxi@gmail.com</td>
                                                  <td>Auditor TI</td>
                                                  <td>Auditoria</td>
                                                  <td>66500.00</td>
                                                  <td>09/08/1987</td>
                                                  <td><a class="btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>

                                                      <a class="btn btn-danger btncolorblanco">
                                                        <i class="fa fa-trash-alt"></i> Eliminar 
                                                      </a>
                                                  </td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">2</th>
                                                  <td>Jhonatan David Fernandez Rosa</td>
                                                  <td>18499188421</td>
                                                  <td>18499188421</td>
                                                  <td>Masculino</td>
                                                  <td>Jeremiselxi@gmail.com</td>
                                                  <td>Auditor TI</td>
                                                  <td>Auditoria</td>
                                                  <td>66500.00</td>
                                                  <td>09/08/1987</td>
                                                    <td><a class="btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>

                                                      <a class="btn btn-danger btncolorblanco">
                                                        <i class="fa fa-trash-alt"></i> Eliminar 
                                                      </a>
                                                  </td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">3</th>
                                                  <td>Jhonatan David Fernandez Rosa</td>
                                                  <td>18499188421</td>
                                                  <td>18499188421</td>
                                                  <td>Masculino</td>
                                                  <td>Jeremiselxi@gmail.com</td>
                                                  <td>Auditor TI</td>
                                                  <td>Auditoria</td>
                                                  <td>66500.00</td>
                                                  <td>09/08/1987</td>
                                                    <td><a class="btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>

                                                      <a class="btn btn-danger btncolorblanco">
                                                        <i class="fa fa-trash-alt"></i> Eliminar 
                                                      </a>
                                                  </td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">4</th>
                                                  <td>Jhonatan David Fernandez Rosa</td>
                                                  <td>18499188421</td>
                                                  <td>18499188421</td>
                                                  <td>Masculino</td>
                                                  <td>Jeremiselxi@gmail.com</td>
                                                  <td>Auditor TI</td>
                                                  <td>Auditoria</td>
                                                  <td>66500.00</td>
                                                  <td>09/08/1987</td>
                                                    <td><a class="btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>

                                                      <a class="btn btn-danger btncolorblanco">
                                                        <i class="fa fa-trash-alt"></i> Eliminar 
                                                      </a>
                                                  </td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">5</th>
                                                  <td>Jhonatan David Fernandez Rosa</td>
                                                  <td>18499188421</td>
                                                  <td>18499188421</td>
                                                  <td>Masculino</td>
                                                  <td>Jeremiselxi@gmail.com</td>
                                                  <td>Auditor TI</td>
                                                  <td>Auditoria</td>
                                                  <td>66500.00</td>
                                                  <td>09/08/1987</td>
                                                    <td><a class="btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>

                                                      <a class="btn btn-danger btncolorblanco">
                                                        <i class="fa fa-trash-alt"></i> Eliminar 
                                                      </a>
                                                  </td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">6</th>
                                                  <td>Jhonatan David Fernandez Rosa</td>
                                                  <td>18499188421</td>
                                                  <td>18499188421</td>
                                                  <td>Masculino</td>
                                                  <td>Jeremiselxi@gmail.com</td>
                                                  <td>Auditor TI</td>
                                                  <td>Auditoria</td>
                                                  <td>66500.00</td>
                                                  <td>09/08/1987</td>
                                                    <td><a class="btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>

                                                      <a class="btn btn-danger btncolorblanco">
                                                        <i class="fa fa-trash-alt"></i> Eliminar 
                                                      </a>
                                                  </td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">7</th>
                                                  <td>Jhonatan David Fernandez Rosa</td>
                                                  <td>18499188421</td>
                                                  <td>18499188421</td>
                                                  <td>Masculino</td>
                                                  <td>Jeremiselxi@gmail.com</td>
                                                  <td>Auditor TI</td>
                                                  <td>Auditoria</td>
                                                  <td>66500.00</td>
                                                  <td>09/08/1987</td>
                                                    <td><a class="btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>

                                                      <a class="btn btn-danger btncolorblanco">
                                                        <i class="fa fa-trash-alt"></i> Eliminar 
                                                      </a>
                                                  </td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">8</th>
                                                  <td>Jhonatan David Fernandez Rosa</td>
                                                  <td>18499188421</td>
                                                  <td>18499188421</td>
                                                  <td>Masculino</td>
                                                  <td>Jeremiselxi@gmail.com</td>
                                                  <td>Auditor TI</td>
                                                  <td>Auditoria</td>
                                                  <td>66500.00</td>
                                                  <td>09/08/1987</td>
                                                    <td><a class="btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>

                                                      <a class="btn btn-danger btncolorblanco">
                                                        <i class="fa fa-trash-alt"></i> Eliminar 
                                                      </a>
                                                  </td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">9</th>
                                                  <td>Jhonatan David Fernandez Rosa</td>
                                                  <td>18499188421</td>
                                                  <td>18499188421</td>
                                                  <td>Masculino</td>
                                                  <td>Jeremiselxi@gmail.com</td>
                                                  <td>Auditor TI</td>
                                                  <td>Auditoria</td>
                                                  <td>66500.00</td>
                                                  <td>09/08/1987</td>
                                                    <td><a class="btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>

                                                      <a class="btn btn-danger btncolorblanco">
                                                        <i class="fa fa-trash-alt"></i> Eliminar 
                                                      </a>
                                                  </td>
                                                  
                                                </tr>
                                                <tr>
                                                  <th scope="row">10</th>
                                                  <td>Jhonatan David Fernandez Rosa</td>
                                                  <td>18499188421</td>
                                                  <td>18499188421</td>
                                                  <td>Masculino</td>
                                                  <td>Jeremiselxi@gmail.com</td>
                                                  <td>Auditor TI</td>
                                                  <td>Auditoria</td>
                                                  <td>66500.00</td>
                                                  <td>09/08/1987</td>
                                                    <td><a class="btn btn-success btncolorblanco">
                                                        <i class="fa fa-edit"></i> Editar 
                                                      </a>

                                                      <a class="btn btn-danger btncolorblanco">
                                                        <i class="fa fa-trash-alt"></i> Eliminar 
                                                      </a>
                                                  </td>
                                                  
                                                </tr>

                                              </tbody>
                                            </table>


</div>


@include('plantilla.footer', ['container'=>'container-fluid'])

@endsection