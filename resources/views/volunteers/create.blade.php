@extends('layouts.master')

@section('title', 'Form Volunteers')

@section('container')
<a href="{{ route('volunteer.index') }}"><button type="button" class="btn btn-default" style="margin-top: 50px;margin-bottom:20px;">Voltar</button></a>
      <div>
        <form action="{{ route('volunteer.store') }}" method="POST">
        {!! csrf_field() !!}
        <div class="form-group">
          <label for="Nome">Nome</label>
          <input name="name" type="text" placeholder="Nome" class="form-control">
        </div>
        <div class="form-group">
          <label for="phone">Telefone</label>
          <input name="phone" type="phone" placeholder="Telefone" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input name="email" type="email" placeholder="E-mail" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
        </form>
      </div>
@endsection