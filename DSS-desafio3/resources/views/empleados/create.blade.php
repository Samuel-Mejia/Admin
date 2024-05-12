@extends('layouts.app')
  
@section('title', 'Create empleado')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
            <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Nombre">
            </div>
            <div class="col">
            <label class="form-label">Apellido</label>
                <input type="text" name="lastname" class="form-control" placeholder="lastname">
            </div>
            <div class="col">
            <label class="form-label">Cargo</label>
                <input type="text" name="cargo" class="form-control" placeholder="cargo">
            </div>
            <div class="col">
            <label class="form-label">Salario</label>
                <input type="text" name="salario" class="form-control" placeholder="salario">
            </div>
            <div class="col">
            <label class="form-label">Correo Electronico</label>
                <input type="text" name="email" class="form-control" placeholder="email">
            </div>
            <div class="col">
            <label class="form-label">Contrase;a</label>
                <input type="text" name="password" class="form-control" placeholder="password">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Submit</button>
            </div>
        </div>
    </form>
@endsection