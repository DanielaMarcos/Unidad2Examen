@extends('layout.layout')
@section('title', 'Agregar Empleados')

@section('content')

    <h1 class="bg-primary text-white text-center">Agregar empleados</h1>

    <div class="row">

        <div class="col"><a class="btn-primay" href="{{url("empleados")}}">Regresar</a></div>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("empleados")}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1"> Nombre Empleado</label>

                    <input type="text" class="form-control" name="nombre_em" placeholder="empleado">

                    <label for="exampleInputPassword1"> Apellido</label>
                    <input type="text" class="form-control" name="apellido_em" placeholder="empleado">

                    <label for="exampleInputPassword1"> Direccion</label>
                    <input type="text" class="form-control" name="direccion_em" placeholder="empleado">

                    <label for="exampleInputPassword1"> Codigo Postal</label>
                    <input type="text" class="form-control" name="codigo_postal_em" placeholder="empleado">

                    <label for="exampleInputPassword1"> Telefono</label>
                    <input type="text" class="form-control" name="telefono_em" placeholder="empleado">

                    <label for="exampleInputPassword1"> Empresa</label>
                    <input type="text" class="form-control" name="empresa_em" placeholder="empleado">

                </div>
                <button type="submit" class="btn-primary"> Aceptar</button>

            </form>
        </div>

    </div>



@endsection
