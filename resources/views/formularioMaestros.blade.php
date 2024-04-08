<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Maestro</title>
    <!-- CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
    <div class="container mt-5">
        <form method="POST"  action="{{route('guardar')}}">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="app" class="form-label">Apellido Paterno:</label>
                <input type="text" class="form-control" id="app" name="app" required>
            </div>

            <div class="mb-3">
                <label for="apm" class="form-label">Apellido Materno:</label>
                <input type="text" class="form-control" id="apm" name="apm" required>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>

            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" required>
            </div>
            <div class="mb-3">
                <label for="huellaId" class="form-label">Huella Dactilar:</label>
                <input type="text" class="form-control" id="huellaId" name="huellaId"  required  >
                <div id="validationMessage"></div>
            </div>

            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
    <script src="{{asset('js/Validacion.js')}}"></script>
</body>
</html>
