@extends('layouts.admin')
@section('content')
    @include('alerts.request')

    {!!Form::model($usuario,['route'=> ['usuario.update',$usuario->id],'method'=>'PUT'])!!}
    <h1 id="cabeza">{{ $usuario->nombres }}</h1>
    <div class="form-group">
        {!! Form::label('Carnet:') !!}
        {!! Form::number('cedulaidentidad',null,['class'=>'form-control','placeholder'=>'ingresa el carnet de identidad']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nombre:') !!}
        {!! Form::number('nombres',null,['class'=>'form-control','placeholder'=>'ingresa el nombre']) !!}
    </div>
    {!! Form::submit('Registrar' , ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
