@extends('layouts.admin')
use Carbon\Carbon;
@section('content')
    @include('alerts.request')
    @include('alerts.existfail')
    <h1 id="cabeza">Formulario Para Registrar Usuario</h1>
    {!! Form::open(['route' => 'usuario.store','method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::label('ID:') !!}
        {!! Form::number('id',null,['class'=>'form-control','placeholder'=>'ingresa el codigo de usuario']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Carnet de identidad:') !!}
        {!! Form::number('ceduladeidentidad',null,['class'=>'form-control','placeholder'=>'ingresa el carnet de identidad']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Fecha de Convercion: ') !!}
        {!! Form::date('fechadeconversion', \Carbon\Carbon::now()) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ID de Ministerio:') !!}
        {!! Form::number('idministerio',null,['class'=>'form-control','placeholder'=>'ingresa el carnet de identidad']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ID de Bautismo:') !!}
        {!! Form::number('idbautismo',null,['class'=>'form-control','placeholder'=>'ingresa el carnet de identidad']) !!}
    </div>

    {!! Form::submit('Registrar' , ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection
