<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>
    <!-- Preparar el formulario para enviar archivos -->
    <form action="./utilities/procesar.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name" require>
        </div>

        <div>
            <label for="name">Edad:</label>
            <input type="number" name="edad" id="edad" min="4" max="120" require>
        </div>

        <div>
            Sexo
            <div>
                <label>
                    <input type="radio" name="sexo" value="masculino">
                    Masculino:
                </label>

                <label>
                    <input type="radio" name="sexo" value="femenino">
                    Femenino:
                </label>
            </div>
        </div>

        <div>
            Roles
            <div>
                <label>
                    <input type="checkbox" name="roles[]" value="administrador">
                    Administrador:
                </label>

                <label>
                    <input type="checkbox" name="roles[]" value="moderador">
                    Moderador:
                </label>

                <label>
                    <input type="checkbox" name="roles[]" value="editor">
                    Editor:
                </label>
            </div>
        </div>

        <div>
            <label>
                Imagen: <br>
                <input type="file" name="imagen">
            </label>
        </div>

        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>