<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="POST">
            <label for="username">Usuario:</label>
            <input type="text" name="username" required><br><br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" required><br><br>

            <input type="submit" value="Iniciar Sesión">
        </form>
        <p><?php if(isset($_GET['error'])) { echo "Usuario o contraseña incorrectos."; } ?></p>
    </div>
</body>
</html>
