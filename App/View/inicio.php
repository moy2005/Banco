<main>
    <section id="hero">
        <div class="hero-content">
            <h2>Tu Banco, Tu Futuro</h2>
            <p>Gestiona tus finanzas con facilidad y seguridad.</p>
            <a href="#features" class="cta-button">Descubre más</a>
        </div>
    </section> 

    <section id="features">
        <div class="feature hidden">
            <div class="feature-image" id="deposit-image"></div>
            <div class="feature-content">
                <h3>Depósitos Seguros</h3>
                <p>Realiza depósitos de manera rápida y confiable desde cualquier lugar y a cualquier hora.</p>
            </div>
        </div>
        <div class="feature hidden">
            <div class="feature-image" id="withdrawal-image"></div>
            <div class="feature-content">
                <h3>Retiros Sin Complicaciones</h3>
                <p>Accede a tu dinero de forma sencilla y segura, estés donde estés.</p>
            </div>
        </div>
        <div class="feature hidden">
            <div class="feature-image" id="transfer-image"></div>
            <div class="feature-content">
                <h3>Transferencias Instantáneas</h3>
                <p>Envía dinero a tus contactos al instante, con total seguridad y sin costos ocultos.</p>
            </div>
        </div>
    </section>

    <section id="security" class="hidden">
        <h2>Seguridad de Nivel Bancario</h2>
        <p>Protegemos tu dinero con la más avanzada tecnología en seguridad digital.</p>
        <div class="security-details">
            <div class="security-item">
                <h3>Cifrado Avanzado</h3>
                <p>Tus transacciones están protegidas con un cifrado de nivel militar.</p>
            </div>
            <div class="security-item">
                <h3>Autenticación Multifactor</h3>
                <p>Accede a tu cuenta de manera segura con múltiples capas de autenticación.</p>
            </div>
            <div class="security-item">
                <h3>Monitoreo 24/7</h3>
                <p>Nuestro equipo de seguridad monitorea constantemente tu cuenta para prevenir fraudes.</p>
            </div>
        </div>
    </section>

    <section id="cta" class="hidden">
        <h2>Empieza a Gestionar tu Dinero Hoy</h2>
        <p>Únete a miles de usuarios que confían en nosotros para manejar sus finanzas.</p>
        <a href="#login" class="cta-button">Accede a tu Cuenta</a>
    </section>
</main>


<style>
@font-face {
    font-family: 'This Cafe';
    src: url('App/Fonts/This Cafe.ttf') format('truetype');
}

main {
    padding: 0;
    margin: 0;
    font-family: Arial, sans-serif;
    color: #333;
}

#hero {
    background: url('App/Img/b.jpg') no-repeat center center/cover;
    color: #fff;
    text-align: center;
    padding: 100px 20px;
    position: relative;
    height: 80vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

#hero::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    z-index: 1;
}

#hero .hero-content {
    position: relative;
    z-index: 2;
    animation: fadeInUp 2s ease-out;
}

#hero h2 {
    font-family: 'This Cafe';
    font-size: 48px;
    margin: 0;
    animation: textGlow 1.5s infinite alternate;
}

#hero p {
    font-size: 22px;
    margin: 20px 0;
}

.cta-button {
    display: inline-block;
    padding: 15px 30px;
    font-size: 18px;
    background-color: #e84a5f;
    color: #fff;
    border-radius: 30px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #ff847c;
}

#features {
    padding: 80px 20px;
    background-color: #f7f7f7;
}

.feature {
    display: flex;
    align-items: center;
    margin-bottom: 50px;
}

.feature-image {
    flex: 1;
    background-size: cover;
    height: 200px;
    border-radius: 15px;
    transition: transform 0.3s ease-in-out;
}

.feature-image:hover {
    transform: scale(1.05);
}

#deposit-image {
    background-image: url('App/Img/deposit.jpg');
}

#withdrawal-image {
    background-image: url('App/Img/withdrawal.jpg');
}

#transfer-image {
    background-image: url('App/Img/transfer.jpg');
}

.feature-content {
    flex: 1;
    padding: 20px;
}

.feature-content h3 {
    font-size: 28px;
    margin-bottom: 10px;
}

#security {
    padding: 80px 20px;
    text-align: center;
    background-color: #99b898;
    color: #fff;
}

#security h2 {
    font-size: 36px;
    margin-bottom: 30px;
}

.security-details {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.security-item {
    flex: 1;
    max-width: 300px;
    margin: 10px;
}

.security-item h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

#cta {
    background-color: #e84a5f;
    color: #fff;
    text-align: center;
    padding: 60px 20px;
}

#cta h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

#cta p {
    font-size: 22px;
    margin-bottom: 30px;
}

#cta .cta-button {
    background-color: #fff;
    color: #e84a5f;
    font-weight: bold;
    transition: transform 0.3s ease;
}

#cta .cta-button:hover {
    transform: scale(1.05);
}

/* Animations */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes textGlow {
    0% {
        text-shadow: 0 0 10px #e84a5f;
    }
    100% {
        text-shadow: 0 0 20px #e84a5f;
    }
}
.hidden {
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 1s ease-out, transform 1s ease-out;
}

.show {
    opacity: 1;
    transform: translateY(0);
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.hidden');

    function checkVisibility() {
        elements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                element.classList.add('show');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    checkVisibility(); // Para verificar la visibilidad inmediatamente al cargar la página
});

</script>