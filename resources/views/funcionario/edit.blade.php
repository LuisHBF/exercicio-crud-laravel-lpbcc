@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Funcionario
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
      <form method="post" action="{{ route('funcionario.update', $funcionario->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome" value="{{$funcionario->nome}}"/>
          </div>
          <div class="form-group">
              <label for="cargo">Cargo:</label>
              <input type="text" class="form-control" name="cargo" value="{{$funcionario->cargo}}"/>
          </div>
          <div class="form-group">
              <label for="data_matricula">Data Matrícula:</label>
              <input type="text" class="form-control" name="data_matricula" value="{{$funcionario->data_matricula}}"/>
          </div>
          <div class="form-group">
              <label for="salario">Salário:</label>
              <input type="text" class="form-control" name="salario" value="{{$funcionario->salario}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Atualizar Funcionário</button>
      </form>
  </div>
</div>
@endsection