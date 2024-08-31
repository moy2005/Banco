<div class="container1"> <br>
<form class="login-form" action="http://localhost/Banco/?C=usuarioController&M=IniciarSesion" method="POST">
    <h2 class="heading">Iniciar Sesión</h2>
    <br>
    <div class="brutalist-container">
        <input id="email" type="email" placeholder="Ingrese su correo electrónico" name="email" class="brutalist-input smooth-type" required>
        <label class="brutalist-label">Correo Electrónico</label>
    </div>
    <br> 
    <div class="brutalist-container">
        <input id="password" type="password" placeholder="Ingrese su contraseña" name="password" class="brutalist-input smooth-type" required>
        <label class="brutalist-label">Contraseña</label>
    </div>
    <br>
    <button type="submit" class="submit-button">Iniciar Sesion</button>
    <?php if (isset($mensaje)): ?>
        <div class="error-message">
            <?php echo $mensaje; ?>
        </div>
    <?php endif; ?>
</form> <br> <br>
</div>

<style>
.container1 {
  width: 100%;
  height: 100%;
  --s: 150px; 
  --c1: #ff847c;
  --c2: #e84a5f;
  --c3: #fecea8;
  --c4: #99b898;

  background: conic-gradient(
      from 45deg at 75% 75%,
      var(--c3) 90deg,
      var(--c1) 0 180deg,
      #0000 0
    ),
    conic-gradient(from -45deg at 25% 25%, var(--c3) 90deg, #0000 0),
    conic-gradient(from -45deg at 50% 100%, #0000 180deg, var(--c3) 0),
    conic-gradient(
      from -45deg,
      var(--c1) 90deg,
      var(--c2) 0 225deg,
      var(--c4) 0
    );
  background-size: var(--s) var(--s);
}


.login-form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    background-color:  #fecea89d; 
    padding: 60px 28px;
    border-radius: 20px;
    box-shadow: 4px 4px rgba(0, 0, 0, 0.5);
    font-family: 'Arial', sans-serif;
    width: 400px;
    margin: auto;
    margin-top: 100px;
}
@font-face {
       font-family: 'Travel Sunday';
       src: url('App/Fonts/TravelSunday.ttf') format('truetype');
}
@font-face {
       font-family: 'ADELIA';
       src: url('App/Fonts/ADELIA.otf') format('truetype');
}

.heading {
  font-family: 'Travel Sunday';
    font-size: 40px;
    text-align: center;
    font-weight: bold;
    color: #c02942; 
}

.forgot,
a {
    font-size: 14px;
    color: #53777a; 
    text-decoration: none;
    margin-bottom: 10px;
    transition: color 0.3s;
}

.forgot,
a:hover {
    color: #c02942; 
}

.submit-button {
  font-family: 'ADELIA';
    padding: 10px;
    border-radius: 10px;
    background-color: #53777a; 
    color: #ecd078; 
    font-size: medium;
    font-weight: bold;
    transition: background-color 0.3s, color 0.3s;
    cursor: pointer;
    border: none;
    box-shadow: 2px 3px rgba(0, 0, 0, 0.3);
    transition: all 0.2s ease-in-out;
    width: 70%;
    margin: auto;
}

.submit-button:hover {
    background-color: #c02942; 
    color: #fff;
    transform: scale(1.03);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 23px 10px -20px;
}


.submit-button:active {
  transform: scale(0.95);
  box-shadow: rgba(133, 189, 215, 0.8784313725) 0px 15px 10px -10px;
}

.brutalist-container {
  position: relative;
  width: 90%;
  font-family: monospace;
}

.brutalist-input {
  width: 100%;
  padding: 15px;
  font-size: 18px;
  font-weight: bold;
  color: #53777a;
  background-color: #fff;
  border: 4px solid #53777a;
  position: relative;
  overflow: hidden;
  border-radius: 0;
  outline: none;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  box-shadow: 5px 5px 0 #53777a, 10px 10px 0 #c02942;
}

.brutalist-input:focus {
  animation: focus-pulse 4s cubic-bezier(0.25, 0.8, 0.25, 1) infinite;
}

.brutalist-input:focus::after {
  content: "";
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  background: white;
  z-index: -1;
}

.brutalist-input:focus::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: black;
  z-index: -2;
  clip-path: inset(0 100% 0 0);
  animation: glitch-slice 4s steps(2, end) infinite;
}

@keyframes glitch-slice {
  0% {
    clip-path: inset(0 100% 0 0);
  }
  10% {
    clip-path: inset(0 5% 0 0);
  }
  20% {
    clip-path: inset(0 80% 0 0);
  }
  30% {
    clip-path: inset(0 10% 0 0);
  }
  40% {
    clip-path: inset(0 50% 0 0);
  }
  50% {
    clip-path: inset(0 30% 0 0);
  }
  60% {
    clip-path: inset(0 70% 0 0);
  }
  70% {
    clip-path: inset(0 15% 0 0);
  }
  80% {
    clip-path: inset(0 90% 0 0);
  }
  90% {
    clip-path: inset(0 5% 0 0);
  }
  100% {
    clip-path: inset(0 100% 0 0);
  }
}

.brutalist-label {
  position: absolute;
  left: -3px;
  top: -25px;
  font-size: 14px;
  font-weight: bold;
  color: #ecd078; 
  background-color: #53777a;
  padding: 5px 10px;
  transform: rotate(-1deg);
  z-index: 1;
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}


.brutalist-input:focus + .brutalist-label {
  transform: rotate(0deg) scale(1.05);
  background-color: #c02942; 
}

.smooth-type {
  position: relative;
  overflow: hidden;
}

.smooth-type::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: linear-gradient(90deg, #fff 0%, rgba(255, 255, 255, 0) 100%);
  z-index: 1;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.smooth-type:focus::before {
  opacity: 1;
  animation: type-gradient 2s linear infinite;
}

@keyframes type-gradient {
  0% {
    background-position: 300px 0;
  }
  100% {
    background-position: 0 0;
  }
}

.brutalist-input::placeholder {
  color: #888;
  transition: color 0.3s ease;
}

.brutalist-input:focus::placeholder {
  color: transparent;
}

@keyframes focus-pulse {
  0%,
  100% {
    border-color: #000;
  }
  50% {
    border-color: #029e91;
  }
}
.error-message {
    margin-top: 20px;
    padding: 10px;
    background-color: rgba(255, 0, 0, 0.1);
    border: 1px solid rgba(255, 0, 0, 0.5);
    color: red;
    font-weight: bold;
    text-align: center;
    border-radius: 5px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.login-form');
    form.style.transform = 'translateY(50px)';
    form.style.opacity = '0';

    setTimeout(() => {
        form.style.transition = 'all 0.8s ease-out';
        form.style.transform = 'translateY(0)';
        form.style.opacity = '1';
        form.style.boxShadow = '0px 20px 30px rgba(0, 0, 0, 0.4)';
    }, 200);
});
</script>