<!DOCTYPE html>
<html>
  <head>
    <tittle></tittle>
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    </head>
<body>
    <div class="container">    
    <center>
        <a href="../product" class="btn btn-secondary float-end mt-2"> Volver </a>
    <h1>Agregar Producto</h1>
    <hr>
    <form action="{{url('product')}}" method="POST">
        @csrf
        <input name="nomproduct" type="text" class="form-control form-control-user" placeholder="Nombre del producto*" autofocus>
        <input name="description" type="text" class="form-control form-control-user" placeholder="Descripción...">
        <input name="stockmin" type="number" class="form-control form-control-user" placeholder="Stock mínimo*">
        <input name="pricein" type="number" class="form-control form-control-user" placeholder="Precio de entrada*">
        <input name="quantity" type="number" class="form-control form-control-user" placeholder="Cantidad*">
        <input name="priceout" type="number" class="form-control form-control-user" placeholder="Precio de salida*">
        <select name="unit_id" class="form-control" required>
            <option >Seleccione Tipo De Unidad*</option>
            @foreach ($datosu as $datou)
                    <option value="{{$datou->idunit}}">{{ $datou->nomunit }}</option>
            @endforeach
        </select>
        <select name="category_id" class="form-control">
            <option >Seleccione Categoría*</option>
            @foreach ($datos as $dato)
                <option value="{{$dato->idcategory}}">{{ $dato->nomcategory }}</option>
            @endforeach
        </select>
        <br>
        <input type="submit" class="btn btn-success" >
    </form>
    </center>
    </div>
</body>
</html>