<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Perfil del Usuario</h1>
    <p>Nombre: {{ $empleado->name }} {{ $empleado->lastname }}</p>
    <p>Email: {{ $empleado->email }}</p>
    <p>Cargo: {{ $empleado->cargo }}</p>
    <p>Salario: {{ $empleado->salario }}</p>
</div>
</body>
</html>

