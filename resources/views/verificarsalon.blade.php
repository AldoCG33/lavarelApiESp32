<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Estado del Salón</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  #info_salón {
    padding: 20px;
    margin: 10px 0;
    border-radius: 5px;
    color: white;
  }
  .libre {
    background-color: green;
  }
  .ocupado {
    background-color: red;
  }
</style>
</head>
<body>

<!-- Elemento donde se mostrarán los datos -->
<div id="info_salón">
  <h2>Información del Salón</h2>
  <p id="datos_salón">Esperando datos...</p>
</div>

<script src="{{asset('js/ValidacionSalones.js')}}"></script>
</body>
</html>
