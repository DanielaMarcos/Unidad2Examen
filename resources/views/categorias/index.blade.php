
@extends ('layout.layout')
@section('title', 'Categorias')
@section('content')

<h1 clas="bg-primary text-white text-center">Categorias</h1>

<div class="row">
    <div class="col"><a class="btn-primary" href="{{url("categorias/create")}}">Agregar categorias</a></div>
</div>

<div class=="row">

    <div clas="col">
        <table class="table">
            <thead>
                <th>Id Categoria</th>
                <th>Descripcion</th>
            </thead>
            <tbdoy>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id_catpreg}}</td>
                        <td>{{$categoria->nom_cat}}</td>
                    </tr>
                @endforeach
            </tbdoy>
        </table>
    </div>
</div>


@endsection