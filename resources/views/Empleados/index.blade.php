
@extends ('layout.layout')
@section('title', 'Empleados')
@section('content')

    <h1 clas="bg-primary text-white text-center">Empleados</h1>


    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("empleados/create")}}">Agregar empleados</a></div>
    </div>

    <div class=="row">

        <div clas="col">
            <table class="table">
                <thead>
                <th>Id Empleado</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Codigo Postal</th>
                <th>Telefono</th>
                <th>Empresa</th>
                </thead>
                <tbdoy>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->id_empleado}}</td>
                            <td>{{$empleado->nombre}}</td>
                            <td>{{$empleado->apellido}}</td>
                            <td>{{$empleado->direccion}}</td>
                            <td>{{$empleado->codigo_postal}}</td>
                            <td>{{$empleado->telefono}}</td>
                            <td>{{$empleado->empresa}}</td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>


@endsection