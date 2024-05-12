@extends('layouts.app')
  
@section('title', 'Show Product')
  
@section('contents')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="name" class="form-control" placeholder="Title" value="{{ $empleados->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="lastname" class="form-control" placeholder="Price" value="{{ $empleados->lastname }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">product_code</label>
            <input type="text" name="email" class="form-control" placeholder="Product Code" value="{{ $empleados->email }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="salario" placeholder="Descriptoin" readonly>{{ $empleados->salario }}</textarea>
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