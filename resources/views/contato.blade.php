@extends('layouts.master')
@section('title', 'contato')
@section('container')
    <div class="container">
      <div>
        <h1>Contato</h1>
        <form action="{{ route('contato.send') }}" method="POST">
        {!! csrf_field() !!}
        <div class="form-group">
          <label for="Nome">Nome</label>  
          <input name="nome" type="text" placeholder="Nome" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>  
          <input name="email" type="email" placeholder="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="mensagem">Mensagem</label>  
          <textarea name="mesagem" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
        </form>
      </div>
    </div><!-- /.container -->
@endsection