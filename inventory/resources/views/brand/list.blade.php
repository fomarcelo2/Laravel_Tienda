@extends('layout')
@section('content')

<div class="row">
    <div class="col-sm-10">
        <div class="col-sm-2">
            <a href="{{ route('brand.form') }}" class="btn btn-primary">Nuevo Marca</a>
        </div>
    </div>
</div>

@if(Session::has('message'))
    <p class="alert alert-success">
        {{ Session::get('message') }}
    </p>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Name</th>
            
        </tr>
    </thead>
    <tbody>
        <!-- creo un ciclo para visualizar los resultados -->
        @foreach($miListaMarcas as $brand)
            <tr>
                <td>{{ $brand->name }}</td>
                <td>
                    <a href="{{ route('brand.form',['id'=>$brand->id])}}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('brand.delete',['id'=>$brand->id])}}" class="btn btn-danger">Borrar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection