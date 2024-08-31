<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco XYZ - Página de Inicio</title>
</head>
<body>
    <header class="header">
    <div class="logo">BancoXYZ</div>
            <nav>
            <ul class="nav-links">  
                <li><a href="http://localhost/Banco?C=usuarioController&M=Login">Iniciar sesión</a></li>
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
@font-face {
    font-family: 'Super Bubbly';
    src: url('App/Fonts/Super Bubbly.ttf') format('truetype');
}
@font-face {
    font-family: 'Travel Sunday';
    src: url('App/Fonts/TravelSunday.ttf') format('truetype');
}
@font-face {
    font-family: 'ADELIA';
    src: url('App/Fonts/ADELIA.otf') format('truetype');
}
@font-face {
    font-family: 'ROBLOX';
    src: url('App/Fonts/RobloxFont-Regular.ttf') format('truetype');
}
@font-face {
    font-family: 'AGENTO';
    src: url('App/Fonts/AGENTORANGE.TTF') format('truetype');
}
@font-face {
    font-family: 'CAMIO';
    src: url('App/Fonts/CamionetaDEMO-Regular.otf') format('truetype');
}
@font-face {
    font-family: 'Jack';
    src: url('App/Fonts/Jackpot.ttf') format('truetype');
}
@font-face {
    font-family: 'Dacherry';
    src: url('App/Fonts/Dacherry.otf') format('truetype');
}

body {
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.header {
    font-family: 'Jack';
    background-color: #002B5C; 
    color: #FFFFFF;
    padding: 4px 8px; 
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header .logo {
    font-size: 24px;
    font-weight: bold;
}

.nav-links {
    font-family: 'CAMIO';
    display: flex;
}

.nav-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

.nav-links li {
    list-style: none;
    margin: 0 10px;
}

.nav-links a {
    font-size: 20px;
    text-decoration: none;
    color: #fff;
    padding: 8px 16px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.nav-links a:hover {
    color: #c02942;
    background-color: #ecd078;
    border-radius: 5px;
}

.nav-links a.active {
    background-color: #fff;
    color: #333;
    border-radius: 5px;
}

.footer {
    background-color: #002B5C; 
    color: #FFFFFF; 
    text-align: center;
    padding: 20px;
    width: 100%;
    margin-top: auto; 
}

</style>