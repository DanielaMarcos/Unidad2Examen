@extends('layout.layout')
@section('title', 'Agregar Nacionalidades')

@section('content')

    <h1 class="bg-primary text-white text-center">Agregar nacionalidades</h1>

    <div class="row">

        <div class="col"><a class="btn-primay" href="{{url("nacionalidades")}}">Regresar</a></div>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("nacionalidades")}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1"> Nombre Nacionalidad</label>
                    <input type="text" class="form-control" name="desc_nacionalidad" placeholder="nacionalidad">
                </div>
                <button type="submit" class="btn-primary"> Aceptar</button>

            </form>
        </div>

    </div>



@endsection