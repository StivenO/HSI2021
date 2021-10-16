<!DOCTYPE html>
<html>
  <head>
    <tittle></tittle>
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    </head>
<body>
    <div class="container">    
    <center>
        <a href="{{ url('product') }}" class="btn btn-secondary float-end mt-2"> Volver </a>
    <h1>Editar Producto</h1>
    <hr>
    <form action="{{url('product/edit/'.$data->idproduct)}}" method="POST">
        @csrf
        <input name="nomproduct" type="text" class="form-control form-control-user" placeholder="Nombre del producto*" value="{{ $data->nomproduct }}" autofocus>
        <input name="description" type="text" class="form-control form-control-user" placeholder="Descripción..." value="{{ $data->description }}">
        <input name="stockmin" type="number" class="form-control form-control-user" placeholder="Stock mínimo*" value="{{ $data->stockmin }}">
        <input name="pricein" type="number" class="form-control form-control-user" placeholder="Precio de entrada*" value="{{ $data->pricein }}">
        <input name="quantity" type="number" class="form-control form-control-user" placeholder="Cantidad*" value="{{ $data->quantity }}">
        <input name="priceout" type="number" class="form-control form-control-user" placeholder="Precio de salida*" value="{{ $data->priceout }}">
        <select name="unit_id" class="form-control" required>
            <option >Seleccione Tipo De Unidad*</option>
            @foreach ($unidades as $unidad)
                @if(($unidad->idunit) == ($data->unit_id))
                    <option value="{{$unidad->idunit}}" selected>{{ $unidad->nomunit }}</option>
                    @else
                    <option value="{{$unidad->idunit}}">{{ $unidad->nomunit }}</option>
                @endif
            @endforeach
        </select>
        <select name="category_id" class="form-control" required>
            <option >Seleccione Categoría*</option>
            @foreach ($categorias as $categoria)
                @if(($categoria->idcategory) == ($data->category_id))
                    <option value="{{$categoria->idcategory}}" selected>{{ $categoria->nomcategory }}</option>
                    @else
                    <option value="{{$categoria->idcategory}}">{{ $categoria->nomcategory }}</option>
                @endif
            @endforeach
        </select>
        <br>
        <input type="submit" class="btn btn-success" >
    </form>
    </center>
    </div>
</body>
</html>