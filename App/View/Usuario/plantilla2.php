<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
<header class="header">
        <div class="logo">BancoXYZ</div>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Ayuda</a></li>
                <li><a href="#">Salir</a></li>
            </ul>
        </nav>
    </header>
    <?php 
        include_once($vista);
    ?>
    <footer class="footer">
        <p>&copy; 2024 BancoXYZ. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

<style>
    body {
    font-family: cursive;
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

.header {
    font-family:cursive;
    background-color: #029e91;
    color: #fff;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header .logo {
    font-size: 24px;
    font-weight: bold;
}

.header .nav-links {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: 15px;
}

.header .nav-links li {
    display: inline;
}

.header .nav-links a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
}

.footer {
    background-color: #029e91;
    color: #fff;
    text-align: center;
    padding: 20px;
    bottom: 0;
    width: 100%;
}
</style>