@extends('adminlte::page')

{{-- @section('title', 'AdminLTE') --}}

@section('content_header')
    <h1 class="m-0 text-dark">Registro de Eventos</h1>
@stop

@section('content')
    <div>
        <div class="row">
            <x-adminlte-input name="name" label="Nombre" placeholder="Ingrese el nombre de evento."
                fgroup-class="col-md-6"/>
        </div>
        <div class="row">
            <x-adminlte-textarea name="descripcion" label="Descripcion" placeholder="Descripcion del evento" fgroup-class="col-md-6">
                
            </x-adminlte-textarea>
        </div>
        <div class="row">
            <x-adminlte-select name="status" label="Estado" label-class="text-lightblue" fgroup-class="col-md-6"
                igroup-size="lg">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-building"></i>
                    </div>
                </x-slot>
                <option>Seleccione una opcion</option>
                <option>Borrador</option>
                <option>Publicado</option>
            </x-adminlte-select>
        </div>
        <div class="row">
            <x-adminlte-select2 name="type" label="Tipo" label-class="text-lightblue"
                igroup-size="lg" data-placeholder="Seleccione una opcion..." fgroup-class="col-md-6">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-building"></i>
                    </div>
                </x-slot>
                <option/>
                <option>Cursos</option>
                <option>Talleres</option>
                <option>Capacitaciones</option>
                <option>Clases</option>
            </x-adminlte-select2>
        </div>

        <div class="row">
            @php
                $config = ['format' => 'YYYY-MM-DD'];
            @endphp
            <x-adminlte-input-date name="date" :config="$config" placeholder="Seleccionar fecha" label="Fecha" fgroup-class="col-md-6">
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-info">
                        <i class="fas fa-clock"></i>
                    </div>
                </x-slot>
            </x-adminlte-input-date>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <x-adminlte-button label="Registrar" theme="info" icon="fas fa-save"/>
            </div>
        </div>
    </div>
@stop
