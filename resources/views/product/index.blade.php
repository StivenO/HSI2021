@extends('layaut')
<!DOCTYPE html>
<html>
  <head>
    <tittle></tittle>
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
@section('content')
    <body>
    <div class="container">    
    <a href="product/new" class="btn btn-primary float-right"><i class="fas fa-plus-circle"></i> Agregar Producto</a>
    <h1 class="h3 mb-0 text-gray-800">Productos</h1>
    <hr>
    <ul class="nav nav-pills float-end mb-3" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Activos</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Papelera</button>
    </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <br>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th style='width:400px'>Descripción</th>
                <th>Stock Mínimo</th>
                <th>Precio De Entrada</th>
                <th>Cantidad</th>
                <th>Precio De Salida</th>
                <th>Tipo De Unidad</th>
                <th>Categoría</th>
                <th style='width:350px'>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{$row->idproduct}}</td>
                    <td>{{$row->nomproduct}}</td>
                    <td>{{$row->description}}</td>
                    <td>{{$row->stockmin}}</td>
                    <td>{{$row->pricein}}</td>
                    <td>{{$row->quantity}}</td>
                    <td>{{$row->priceout}}</td>
                    <td>{{$row->unit->nomunit}}</td>
                    <td>{{$row->category->nomcategory}}</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{ url('product/destroy/'.$row->idproduct) }}" onclick="return confirm('¿desea eliminar el registro?')"><i class='fas fa-trash-alt'></i></a>                        
                        <a class="btn btn-info btn-sm" href="{{ url('product/edit/'.$row->idproduct) }}"><i class='fas fa-edit ' style='size:5x'></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th style='width:400px'>Descripción</th>
                <th>Stock Mínimo</th>
                <th>Precio De Entrada</th>
                <th>Cantidad</th>
                <th>Precio De Salida</th>
                <th>Tipo De Unidad</th>
                <th>Categoría</th>
                <th style='width:350px'>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data2 as $row)
                <tr>
                    <td>{{$row->idproduct}}</td>
                    <td>{{$row->nomproduct}}</td>
                    <td>{{$row->description}}</td>
                    <td>{{$row->stockmin}}</td>
                    <td>{{$row->pricein}}</td>
                    <td>{{$row->quantity}}</td>
                    <td>{{$row->priceout}}</td>
                    <td>{{$row->unit->nomunit}}</td>
                    <td>{{$row->category->nomcategory}}</td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="{{ url('product/delete/'.$row->idproduct) }}" onclick="return confirm('¿desea eliminar definitivamente este registro?')"><i class='fas fa-trash-alt'></i></a>
                        <a class="btn btn-outline-info btn-sm" href="{{ url('product/recovery/'.$row->idproduct) }}"><i class="fas fa-undo"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <center>
        <br>
    <h3>IR A</h3>
    <br><hr>
    <a href="{{ url('category')}}" class="btn btn-outline-success float-center mt-2"> Categorias </a>
    <a href="{{ url('unit')}}" class="btn btn-outline-warning float-center mt-2"> Unidades </a>
    <br><br>
    <a href="{{ url('sell')}}" type="button" class="btn btn-secondary btn-lg ">Crud Anterior</a>
    <br><br>
</center>
</body>
@stop 
</html>