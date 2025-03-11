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
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="name">Edad:</label>
            <input type="number" name="edad" id="edad" min="4" max="120" required>
        </div>

        <div>
            Sexo
            <select name="sexo" required>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>
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

        <div>
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
        </div>

        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>