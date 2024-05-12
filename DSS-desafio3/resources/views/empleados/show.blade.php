@extends('layouts.app')

  
@section('contents')
    <h1 class="mb-0">Detalle Empleados</h1>

    
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" placeholder="" value="{{ $empleados->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Apellido</label>
            <input type="text" name="lastname" class="form-control" placeholder="" value="{{ $empleados->lastname }}" readonly>
        </div>
        
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Correo Electronico</label>
            <input type="text" name="email" class="form-control" placeholder="" value="{{ $empleados->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Cargo</label>
            <input type="text" name="cargo" class="form-control" placeholder="" value="{{ $empleados->cargo }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Salario</label>
            <input class="form-control" name="salario" placeholder="$"  value="$ {{ $empleados->salario }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $empleados->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $empleados->updated_at }}" readonly>
        </div>
    </div>
@endsection