@extends('layouts.app')

@section('title', 'Visualizar Empleado')

@section('contents')
    {{-- <div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Product</h1>
    <a href="{{ route('empleados.create') }}" class="btn btn-primary">Add Product</a>
</div> --}}
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Salario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if ($empleados->count() > 0)
                @foreach ($empleados as $empleado)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $empleado->name }}</td>
                        <td class="align-middle">{{ $empleado->lastname }}</td>
                        <td class="align-middle">{{ $empleado->email }}</td>
                        <td class="align-middle">{{ $empleado->cargo }}</td>
                        <td class="align-middle">$ {{ $empleado->salario }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example"
                              >
                                <a href="{{ route('empleados.show', $empleado->id) }}" type="button"
                                    class="btn btn-outline-primary">Detalle</a>

                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example"
                               >
                                <a href="{{ route('empleados.edit', $empleado->id) }}" type="button"
                                    class="btn btn-outline-warning">Editar</a>
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example"
                                >
                                <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Eliminar</button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">No employees found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection




