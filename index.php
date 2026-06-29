<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro de Pacientes</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>

  <header>
    <p class="eyebrow">Sistema de gestión</p>
    <h1>Pacientes de la clinica</h1>
    <p>Registrá un nuevo paciente o buscá por número de DNI</p>
  </header>

  <div class="layout">
  
    <!-- ── Formulario 1: Registro ── -->
    <div class="card">
      <div class="card-header">
        <div class="icon icon-reg">🗂</div>
        <div>
          <h2>Registrar paciente</h2>
          <p>Completá todos los campos</p>
        </div>
      </div>
      <div class="card-body">
        <form id="formRegistro" 
        action="registrar.php" method="POST">

          <div class="row-2">
            <div class="field">
              <label for="apellido">Apellido</label>
              <input type="text" id="apellido" name="apellido"
                     placeholder="García" required />
            </div>
            <div class="field">
              <label for="nombre">Nombre</label>
              <input type="text" id="nombre" name="nombre"
                     placeholder="María" required />
            </div>
          </div>

          <div class="field">
            <label for="dni">DNI</label>
            <input type="text" id="dni" name="dni"
                   placeholder="30 000 000" inputmode="numeric"
                   maxlength="10" required />
          </div>

          <div class="field">
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono"
                   placeholder="+54 11 1234-5678" />
          </div>

          <div class="field">
            <label for="mail">Correo electrónico</label>
            <input type="email" id="mail" name="mail"
                   placeholder="paciente@ejemplo.com" />
          </div>

          <div class="field">
            <label for="diagnostico">Diagnóstico</label>
            <textarea id="diagnostico" name="diagnostico"
                      placeholder="Descripción del diagnóstico principal…"></textarea>
          </div>

          <input type="submit" >

        </form>
      </div>
    </div>

    <!-- ── Formulario 2: Búsqueda ── -->
    <div class="card">
      <div class="card-header">
        <div class="icon icon-search">🔍</div>
        <div>
          <h2>Buscar paciente</h2>
          <p>Ingresá el DNI para encontrarlo</p>
        </div>
      </div>
      <div class="card-body">
          <?php
        if (isset($_GET['encontrado'])) {
          echo "<h1>PACIENTE EN BASE DE DATOS</h1>";

        }
        if(isset($_GET['noencontrado'])){
          echo "<h1> EL PACIENTE CON ESE DNI NO ESTA REGISTRADO";
        }


        ?>

      <form id="formBusqueda" method="POST" action="buscar.php" novalidate>

          <div class="field">
            <label for="dniBusqueda">DNI del paciente</label>
            <input type="text" id="dniBusqueda" name="dniBusqueda"
                   placeholder="30 000 000" inputmode="numeric"
                   maxlength="10" required />
          </div>

          <button type="submit" class="btn btn-search">
            Buscar
          </button>

          <div class="result-box" id="resultBox">


          </div>

        </form>
      </div>
    </div>

  </div>
</body>
</html>
