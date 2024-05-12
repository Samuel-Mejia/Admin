@extends('layouts.app')
  
@section('title', 'Create empleado')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="col">
                <input type="text" name="lastname" class="form-control" placeholder="lastname">
            </div>
            <div class="col">
                <input type="text" name="cargo" class="form-control" placeholder="lastname">
            </div>
            <div class="col">
                <input type="text" name="salario" class="form-control" placeholder="lastname">
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="lastname">
            </div>
            <div class="col">
                <input type="text" name="password" class="form-control" placeholder="lastname">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection