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
    <div class="container-fluid">

        <a href="{{ url('product') }}" class="btn btn-danger float-right"><i class="fas fa-window-close"></i> Cancelar</a>

        <!-- Encabezado de página -->
        <h1 class="h3 mb-4 text-gray-800">Agregar un Producto</h1>

        <form action="{{url('product')}}" method="POST" class="user">
            @csrf

            <!-- Fila de columna -->
            <div class="col-lg-6 mb-4">

                <!-- Formulario -->
                <div class="card shadow mb-4" style="width: 60rem;">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary text-center">Formulario para Productos</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input name="nomproduct" type="text" class="form-control form-control-user" id="ejemploNom" placeholder="Nombre del producto*" autofocus>
                            </div>
                            <div class="col-sm-8">
                                <input name="description" type="text" class="form-control form-control-user" id="ejemploDescription" placeholder="Descripción...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <input name="stockmin" type="number" class="form-control form-control-user" id="ejemploStockmin" placeholder="Stock mínimo*">
                            </div>
                            <div class="col-sm-4">
                                <input name="pricein" type="number" class="form-control form-control-user" id="ejemploPricein" placeholder="Precio de entrada*">

                            </div>
                            <div class="col-sm-4">
                                <input name="quantity" type="number" class="form-control form-control-user" id="ejemploCant" placeholder="Cantidad*">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input name="priceout" type="number" class="form-control form-control-user" id="ejemploPriceout" placeholder="Precio de salida*">
                            </div>
                            <div class="col-sm-4">
                                <select name="unit_id" class="form-control form-select-user text-gray-600" id="ejemploUnitid" required>
                                    <option>Seleccione Tipo De Unidad*</option>
                                    @foreach ($datosu as $datou)
                                    <option value="{{$datou->idunit}}">{{ $datou->nomunit }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <select name="category_id" class="form-control form-select-user text-gray-600" id="ejemploCategory">
                                    <option>Seleccione Categoría*</option>
                                    @foreach ($datos as $dato)
                                    <option value="{{$dato->idcategory}}">{{ $dato->nomcategory }}</option>
                                    @endforeach
                                </select>

                            </div><br><br><br>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="submit" name="" value="Crear Producto" class="btn btn-primary btn-user btn-block"></input>
                            </div>
                        </div>

        </form>
    </div>

</body>
@stop

</html>