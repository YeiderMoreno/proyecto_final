<?php 
    include_once("../../config/Config.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-xl-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        Creación de Materia
                        <a href="<?= ROOT ?>modulos/materias/materias.php" class="btn btn-primary">Regresar</a>
                    </div>
                    <div class="card-body">
                        <form action="add.php" method="POST" name="formateria">
                            <div id='mensaje'> </div>
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="horario">Horario</label>
                                <input type="text" class="form-control" id="horario" name="horario" required>
                            </div>
                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <input type="text" class="form-control" id="tipo" name="tipo" required>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <input type="text" class="form-control" id="categoria" name="categoria" required>
                            </div>
                            
                            <input type="button" class="btn btn-primary" onclick="ValidarMaterias()" value='Crear'>
                        </form>     
                    </div>
                </div>
            </div>
        </div>
    <div>

    <script src="../../js/javascript.js" ></script>
    <script src="../../js/validaciones.js" ></script>
    <script src="../../bootstrap/js/bootstrap.bundle.min.js" ></script>
</body>
</html>