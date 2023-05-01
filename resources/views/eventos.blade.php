@extends('adminlte::page')

{{-- @section('title', 'AdminLTE') --}}

@section('content_header')
    <h1 class="m-0 text-dark">Listado de Eventos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <x-adminlte-datatable id="table1" :heads="$heads" stripe head-theme="dark" with-buttons>
                @foreach($eventos as $evento)
                    <tr>
                        <td>{{ $evento->id }}</td>
                        <td>{{ $evento->name }}</td>
                        <td>{{ $evento->description }}</td>
                        <td>{{ $evento->status }}</td>
                        <td>{{ $evento->type }}</td>
                        <td>{{ $evento->date }}</td>
                    </tr>
                @endforeach
            </x-adminlte-datatable>
        </div>
    </div>
@stop
