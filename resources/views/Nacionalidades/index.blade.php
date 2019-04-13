
@extends ('layout.layout')
@section('title', 'Nacionalidades')
@section('content')

    <h1 clas="bg-primary text-white text-center">Nacionalidades</h1>

    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("nacionalidades/create")}}">Agregar nacionalidades</a></div>
    </div>

    <div class=="row">

        <div clas="col">
            <table class="table">
                <thead>
                <th>Id Nacionalides</th>
                <th>Descripcion</th>
                </thead>
                <tbdoy>
                    @foreach($nacionalidades as $nacionalidad)
                        <tr>
                            <td>{{$nacionalidad->id_nacionalidad}}</td>
                            <td>{{$nacionalidad->nom_na}}</td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>


@endsection
