@extends('layouts.app')
  

  
@section('contents')
    <h1 class="mb-0">Editar Empleados</h1>
    <hr />
    <form action="{{ route('empleados.update', $empleados->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="" value="{{ $empleados->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Apellido</label>
                <input type="text" name="lastname" class="form-control" placeholder="" value="{{ $empleados->lastname }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Correo Electronico</label>
                <input type="text" name="email" class="form-control" placeholder="" value="{{ $empleados->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Cargo</label>
                <input type="text" name="cargo" class="form-control" placeholder="" value="{{ $empleados->cargo }}" >

            </div>
            <div class="col mb-3">
                <label class="form-label">Salario</label>
                <input type="text" name="salario" class="form-control" placeholder="$" value=" {{ $empleados->salario }}" >
         
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </form>
@endsection