<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['id_cuenta'])) {
    echo "ID de cuenta almacenado en sesión: " . $_SESSION['id_cuenta'];
} else {
    echo "Error: `id_cuenta` no está definido en la sesión.";
}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
    <section class="hero">
        <div class="hero-content">
            <h1>Bienvenido a BancoXYZ</h1>
            <p>Gestione todas sus transacciones de manera rápida y segura.</p>
            <div class="modules">
                <div class="module" id="deposito" data-aos="fade-up">
                    <div class="module-image">
                        <img src="App/Img/Deposito.jpg" alt="Hacer Depósito">
                    </div>
                    <div class="module-content">
                        <h2>Hacer Depósito</h2>
                        <p>Deposita dinero en tu cuenta de forma segura.</p>
                        <button onclick="depositar(<?php echo $_SESSION['id_cuenta']; ?>)" class="submit-button">Ir a Depósito</button>
                    </div>
                </div>
                <div class="module" id="retiro" data-aos="fade-up">
                    <div class="module-image">
                        <img src="App/Img/Retiro.jpg" alt="Hacer Retiro">
                    </div>
                    <div class="module-content">
                        <h2>Hacer Retiro</h2>
                        <p>Retira dinero de tu cuenta en cualquier momento.</p>
                        <a href="#" class="submit-button">Ir a Retiro</a>
                    </div>
                </div>
                <div class="module" id="transferencia" data-aos="fade-up">
                    <div class="module-image">
                        <img src="App/Img/Transferencia.jpg" alt="Transferencia Bancaria">
                    </div>
                    <div class="module-content">
                        <h2>Transferencia Bancaria</h2>
                        <p>Transfiere fondos a otras cuentas bancarias.</p>
                        <a href="#" class="submit-button">Ir a Transferencia</a>
                    </div>
                </div>
                <div class="module" id="historial" data-aos="fade-up">
                    <div class="module-image">
                        <img src="img/historial.jpg" alt="Ver Historial">
                    </div>
                    <div class="module-content">
                        <h2>Ver Historial</h2>
                        <p>Consulta todos tus depósitos y retiros.</p>
                        <a href="#" class="submit-button">Ver Historial</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <script>
    function depositar(id_cuenta){
        window.location.href="http://localhost/Banco?C=transaccionController&M=deposito&id_cuenta="+id_cuenta;
    }
</script>

<style>
.hero {
    background: white;
    color: #029e91;
    padding: 50px 20px;
    text-align: center;
    animation: fadeIn 2s ease-in;
}

.hero-content h1 {
    font-size: 48px;
    margin-bottom: 20px;
    animation: slideInFromLeft 1s ease-in-out;
}

.hero-content p {
    font-size: 20px;
    margin-bottom: 40px;
    animation: slideInFromRight 1s ease-in-out;
}

.modules {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-top: 20px;
}

.module {
    background: #029e91;
    color: white;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.module:hover {
    transform: translateY(-5px);
}

.module-image img {
    width: 100%;
    height: auto;
    display: block;
    border-bottom: 1px solid white;
}

.module-content {
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}

.module-content h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.module-content p {
    font-size: 16px;
    margin-bottom: 20px;
}

.submit-button {
    padding: 10px;
    border-radius: 10px;
    background-color: #fff;
    color: #029e91;
    font-size: medium;
    font-weight: bold;
    transition: background-color 0.3s, color 0.3s;
    cursor: pointer;
    border: none;
    box-shadow: 2px 3px rgba(0, 0, 0, 0.3);
    transition: all 0.2s ease-in-out;
    text-decoration: none;
}

.submit-button:hover {
    background-color: #029e91;
    color: #fff;
    transform: scale(1.03);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
}

.submit-button:active {
  transform: scale(0.95);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideInFromLeft {
    from {
        transform: translateX(-100%);
    }
    to {
        transform: translateX(0);
    }
}

@keyframes slideInFromRight {
    from {
        transform: translateX(100%);
    }
    to {
        transform: translateX(0);
    }
}
</style>
<!-- Añadir la librería AOS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        duration: 1200, // Duración de la animación
    });
</script>