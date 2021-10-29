@extends('layaut')
<!DOCTYPE html>
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/fc2b074465.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="{{ url('img/icon_principal.png') }}">
    <title>HSI - Perfil Usuario</title>
</head>
@section('content')

<body>
    <div class="container contenedor-perfil rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="imagen-perfil mt-3" src="https://cdn-icons-png.flaticon.com/512/2416/2416668.png"><br><span class="font-weight-bold">{{Auth::user()->rol->nomrol}}</span><span class="text-black-50">{{Auth::user()->email}}</span><span> </span></div>
            </div>
            <div class="col-md-7">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="text-right">Editar Perfil</h3>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                        <select name="typeid_id" class="form-control" required>
                            <option>Seleccione Tipo de Identificacion*</option>
                            <option value="{{Auth::user()->typeid_id}}" selected>{{Auth::user()->typeid->nomtypeid}}</option>
                            @foreach ($identificaciones as $identidicacion)
                            <option value="{{$identidicacion->idtypeid}}">{{ $identidicacion->nomtypeid }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-md-6"><label class="labels">Número de Identificación</label><input type="text" class="form-control" value="{{Auth::user()->numid}}" placeholder="Número de Identificación"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Nombre Completo</label><input type="text" class="form-control" placeholder="Nombre Completo" value="{{Auth::user()->nomuser}}"></div>
                        <div class="col-md-12"><label class="labels">Apellidos</label><input type="text" class="form-control" placeholder="Apellidos" value="{{Auth::user()->apeuser}}"></div>
                        <div class="col-md-12"><label class="labels">Correo Electrónico</label><input type="text" class="form-control" placeholder="Correo Electrónico" value="{{Auth::user()->email}}"></div>
                        <div class="col-md-12"><label class="labels">NickName</label><input type="text" class="form-control" placeholder="NickName" value="{{Auth::user()->nick}}"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Contraseña</label><input type="text" class="form-control" placeholder="Nueva contraseña" value=""></div>
                        <div class="col-md-6"><label class="labels">Confirmar Contraseña</label><input type="text" class="form-control" value="" placeholder="Confirmar contraseña"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary btn-user btn-block" type="button">Guardar Perfil</button></div>
                </div>
            </div>
        </div>
    </div>
</body>
@stop

</html>