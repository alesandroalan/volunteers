@extends('layouts.master')

@section('title', 'Form Volunteers')

@section('container')
<!-- Standard button -->
<a href="{{ route('volunteer.index') }}"><button type="button" class="btn btn-default" style="margin-top: 50px;">Voltar</button></a>
<br>
<h1>Voluntários</h1>
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead><tr><th>ID</th><th>Nome</th><th>E-mail</th><th>Telefone</th></tr></thead>
    <tbody>
      <tr>
        <td>{{$volunteer->id}}</td>
        <td>{{$volunteer->name}}</td>
        <td>{{$volunteer->email}}</td>
        <td>{{$volunteer->phone}}</td>
      </tr>
    </tbody>
  </table>
  <a href="{{ route('volunteer.index') }}"><button type="button" class="btn btn-default" style="margin-top: 10px;">Voltar</button></a>

</div>
@endsection