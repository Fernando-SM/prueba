@extends('layout.app')
@section('content')

<div class="container">
    <a href="{{route('create.tareas')}}">Crear Lista</a>
    <table>
        <thead>
        <tr>

            <th>
                Id
            </th>
            <th>
                Nomnbre
            </th>
            <th>
                Descripcion
            </th>
            <th>
                Editar
            </th>
            <th>
                Eliminar
            </th>
        </tr>

        </thead>
        <tbody>
        @foreach($tareas as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <th scope="row">{{$item->nombre}}</th>
                <th scope="row">{{$item->descripcion}}</th>
                <th scope="row">
                    <a href="/lista-tareas/edit/{{$item->id}}">Editar</a>
                </th>
                <th scope="row">
                    <a href="/lista-tareas/eliminar/{{$item->id}}">Eliminar</a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
