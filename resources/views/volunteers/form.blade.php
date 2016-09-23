@extends('layouts.master')

@section('title', 'Form Volunteers')

@section('container')
      <div>
        <form action="{{ route('volunteer.send') }}" method="POST">
        {!! csrf_field() !!}
        <div class="form-group">
          <label for="Nome">Nome</label>  
          <input name="nome" type="text" placeholder="Nome" class="form-control">
        </div>
        <div class="form-group">
          <label for="phone">Email</label>  
          <input name="phone" type="phone" placeholder="Telefone" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Mensagem</label>  
          <input name="email" type="email" placeholder="E-mail" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
        </form>
      </div>
@endsection