@extends('layaut')
<!DOCTYPE html>
<html>

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
    <title>HSI - Nuevo Producto</title>
</head>
@section('content')

<body>
    <div class="container">

        <a href="{{ url('product') }}" class="btn btn-danger float-right"><i class="fas fa-window-close"></i> Cancelar</a>

        <!-- Encabezado de página -->
        <h1 class="h3 mb-4 text-gray-800">Agregar un Producto</h1>

        <form action="{{url('product')}}" method="POST" class="user">
            @csrf
            <!-- Fila -->
            <div class="row">

                <!-- Columna -->
                <div class="col-md-12 col-sm-12 col-xs-10 col-auto">
                    <div class="p-3 py-3">

                        <!-- Formulario -->
                        <div class="card shadow col-md-12 col-sm-12 col-xs-10 col-auto" style="width: 60rem;">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary text-center">Formulario para agregar un Producto</h6>
                            </div>
                            <div class="card-body">
                                <div class="row mt-2">
                                    <div class="col-md-4 col-sm-6">
                                        <label class="labels">Nombre del producto</label>
                                        <input name="nomproduct" type="text" class="form-control form-control-user" id="ejemploNom" placeholder="Nombre del producto" autofocus required>
                                    </div>
                                    <div class="col-md-8 col-sm-6">
                                        <label class="labels">Descripción del producto</label>
                                        <input name="description" type="text" class="form-control form-control-user" id="ejemploDescription" placeholder="Descripción..." required>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-4 col-sm-6">
                                        <label class="labels">Stock mínimo</label>
                                        <input name="stockmin" type="number" class="form-control form-control-user" id="ejemploStockmin" placeholder="Stock mínimo" required>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label class="labels">Precio de entrada</label>
                                        <input name="pricein" type="number" class="form-control form-control-user" id="ejemploPricein" placeholder="Precio de entrada" required>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label class="labels">Cantidad</label>
                                        <input name="quantity" type="number" class="form-control form-control-user" id="ejemploCant" placeholder="Cantidad" required>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-4 col-sm-6">
                                        <label class="labels">Precio de salida</label>
                                        <input name="priceout" type="number" class="form-control form-control-user" id="ejemploPriceout" placeholder="Precio de salida" required>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label class="labels">Tipo de Unidad</label>
                                        <select name="unit_id" class="select-acostica form-control form-select-user text-gray-600" id="ejemploUnitid" required>
                                            <option>Seleccione Tipo de Unidad *</option>
                                            @foreach ($datosu as $datou)
                                            <option value="{{$datou->idunit}}">{{ $datou->nomunit }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label class="labels">Categoría</label>
                                        <select name="category_id" class="select-acostica form-control form-select-user text-gray-600" id="ejemploCategory" required>
                                            <option>Seleccione Categoría *</option>
                                            @foreach ($datos as $dato)
                                            <option value="{{$dato->idcategory}}">{{ $dato->nomcategory }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <label class="labels"></label>
                                        <input type="submit" name="" value="Crear Producto" class="btn btn-success btn-user btn-block"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</body>
@stop

</html>