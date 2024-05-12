<!doctype html>
<html lang="en">
    <head>
        <title>Registrate</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="icon" href="images/PurpleBadgeAcademyLogo.png">
    </head>


    <body>
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <form action="{{route('register')}}" method="post">
            @csrf
              <h2 class="fw-bold mb-2 text-uppercase">Registro</h2>
              <p class="text-white-50 mb-5">Ingresa tus datos </p>


              <div class="row roww1">
                  <div class="col-md-6 mb-4 ">
                  <div data-mdb-input-init class="form-outline form-white mb-4">
                <label class="form-label" for="form2Example11">Nombre</label>
                <input name="name" type="text" class="form-control form-control-user @error('name')is-invalid @enderror" id="exampleInputName" placeholder="Nombre">
                  @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>
                  </div>
                  <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline form-white mb-4">
                <label class="form-label" for="form2Example11">Apellido</label>
                <input name="lastname" type="text" class="form-control form-control-user @error('lastname')is-invalid @enderror" id="exampleInputName" placeholder="Apellido">
                  @error('lastname')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>
                  </div>
                </div>



              <div data-mdb-input-init class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Correo</label>
                <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail" placeholder="Correo">
                  @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
            </div>

            <div  class="row">
                  <div class="col-md-6 mb-4 ">
                  <div data-mdb-input-init class="form-outline form-white mb-4">
               <label class="form-label" for="typePasswordX">Contraseña</label>
               <input name="password" type="password" class="form-control form-control-user @error('password')is-invalid @enderror" id="exampleInputPassword" placeholder="Contrase;a ">
                    @error('password')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
              </div>

                  </div>
                  <div class="col-md-6 mb-4 ">
                  <div data-mdb-input-init class="form-outline form-white mb-4">
               <label class="form-label" for="typePasswordX">Confirmar contraseña</label>
               <input name="password_confirmation" type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror" id="exampleRepeatPassword" placeholder="Repetir Contrase;a ">
                    @error('password_confirmation')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror 
                  </div>
                  </div>
                </div>

             

              <button data-mdb-button-init data-mdb-ripple-init id="simonsytopro" class="btn btn-outline-light btn-lg px-5" type="submit">Crear Cuenta</button>
              

            <div>
              <p class="mb-0">Ya estas registrado? <a href="{{route('login')}}" class="text-white-50 fw-bold">Login</a>
              </p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


              