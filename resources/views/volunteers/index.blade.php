@extends('layouts.master')

@section('title', 'Form Volunteers')

@section('container')
<a href="{{ route('volunteer.create') }}"><button type="button" class="btn btn-default" style="margin-top: 50px;" title="Adicionar voluntário"><span class="glyphicon glyphicon glyphicon-plus"></span></button></a>
<div class="pagination-right">{!! $volunteers->render() !!}</div>
<br>
<h1>Voluntários</h1>

  <table class="table table-bordered table-hover">
    <thead><tr><th>Nome</th><th>E-mail</th><th width="30px;">Detalhes</th><th width="30px;">Editar</th><th width="30px;">Remover</th></tr></thead>
    <tbody>
      @foreach($volunteers as $volunteer)
      <tr>
        <td>{{$volunteer->name}}</td>
        <td>{{$volunteer->email}}</td>
        <td width="30px;"><a href="{{ route('volunteer.show', $volunteer->id) }}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span></button></a></td>
        <td width="30px;"><a href="{{ route('volunteer.edit', $volunteer->id) }}"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
        <td width="30px;"><a href="{{ url('volunteer') }}/{{$volunteer->id}}" data-method="DELETE" ><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
<div class="pagination-right">{!! $volunteers->render() !!}</div>
@endsection