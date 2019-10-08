@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Cargo</td>
          <td>Data Matrícula</td>
          <td>Salário</td>
          <td colspan="2">Ações</td>
        </tr>
    </thead>
    <a href="{{ route('funcionario.create')}}"> <button class="btn btn-success">Novo </button></a>
    <tbody>
        @foreach($funcionarios as $funcionario)
        <tr>
            <td>{{$funcionario->id}}</td>
            <td>{{$funcionario->nome}}</td>
            <td>{{$funcionario->cargo}}</td>
            <td>{{$funcionario->data_matricula}}</td>
            <td>R$ {{$funcionario->salario}}</td>
            <td><a href="{{ route('funcionario.edit',$funcionario->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('funcionario.destroy', $funcionario->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        @endforeach
    </tbody>
  </table>
<div>
@endsection