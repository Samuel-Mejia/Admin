@extends('layouts.app')
  
@section('title', 'Edit empleados')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('empleados.update', $empleados->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="name" class="form-control" placeholder="Title" value="{{ $empleados->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="lastname" class="form-control" placeholder="Price" value="{{ $empleados->lastname }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="email" class="form-control" placeholder="Product Code" value="{{ $empleados->email }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="salario" placeholder="Descriptoin" >{{ $empleados->salario }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection