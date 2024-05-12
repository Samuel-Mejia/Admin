    @extends('layouts.app')

    @section('title', 'Perfil')

    @section('contents')
        {{-- <h1 class="mb-0">Profile</h1>
        <hr /> --}}

        <form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="">
            <div class="row">
                <div class="col-md-12 border-right">
                    <div class="p-3 py-5">
                        {{-- <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Perfil</h4>
                        </div> --}}
                        <div class="row" id="res"></div>
                        <div class="row mt-2">

                            <div class="col-md-6">
                                <label class="labels">Nombre</label>
                                <input type="text" name="name" class="form-control" placeholder="Nombre"
                                    value="{{ auth()->user()->name }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Apellido</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Apellido"
                                    value="{{ auth()->user()->lastname }}" readonly>
                            </div>

                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Email</label>
                                <input type="text" name="email" disabled class="form-control"
                                    value="{{ auth()->user()->email }}" placeholder="Email" readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Cargo</label>
                                <input type="text" name="cargo" class="form-control"
                                    value="{{ auth()->user()->cargo }}" placeholder="Cargo" readonly>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Salario</label>
                                <input type="text" name="salario" class="form-control" placeholder="$"
                                    value="${{ auth()->user()->salario }}" readonly>
                            </div>
                        </div>
                        <div class="mt-5 text-center"> <a href="{{ route('logout', auth()->user()->id)}}" type="button" class="btn btn-danger m-0">Salir</a></div>
                    </div>
                </div>

            </div>

        </form>
    @endsection
