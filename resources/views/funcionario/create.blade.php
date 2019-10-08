<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Adicionar Funcionario
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('funcionario.store') }}">
          <div class="form-group">
              @csrf
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome"/>
          </div>
          <div class="form-group">
              <label for="cargo">Cargo:</label>
              <input type="text" class="form-control" name="cargo"/>
          </div>
          <div class="form-group">
              <label for="data_matricula">Data matricula :</label>
              <input type="text" class="form-control" name="data_matricula"/>
          </div>
          <div class="form-group">
              <label for="salario">Salario:</label>
              <input type="text" class="form-control" name="salario"/>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar Funcionario</button>
      </form>
  </div>
</div>
@endsection