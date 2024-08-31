<div class="container1">
<h3>PARA PODER HACER DEPOSITOS, RETIROS Y TRANSFERENCIAS, PRIMERO DEBES CREAR TU CUENTA</h3>
<form class="login-form" action="http://localhost/Banco/?C=cuentaController&M=crearCuenta" method="POST">
    <h2 class="heading">Registrar Nueva Cuenta</h2>
    <br>
    <div class="brutalist-container">
        <input id="nombre_cuenta" type="text" placeholder="Ingrese el nombre de la cuenta" name="nombreCuenta" class="brutalist-input smooth-type" required>
        <label class="brutalist-label">Nombre de la Cuenta</label>
    </div>
    <br>
    <div class="brutalist-container">
        <input id="tipo_cuenta" type="text" placeholder="Ingrese el tipo de cuenta" name="tipo_cuenta" class="brutalist-input smooth-type" required>
        <label class="brutalist-label">Tipo de Cuenta</label>
    </div>
    <br>
    <div class="brutalist-container">
        <select id="moneda" name="moneda" class="brutalist-input smooth-type">
            <option value="MXN">MXN</option>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
        </select>
        <label class="brutalist-label">Moneda</label>
    </div>
    <br>
    <button type="submit" class="submit-button">Registrar  Cuenta</button>
</form> <br> <br>
</div>

<style>
.container1 {
  flex: 1;
  width: 100%;
  height: 100%;
  --s: 30px; 
  --g: 25px; 

  --c1: #c02942;
  --c2: #53777a;

  background: conic-gradient(
        at var(--s) calc(100% - var(--s)),
        #0000 270deg,
        var(--c1) 0
      )
      calc(var(--s) + var(--g)) 0,
    linear-gradient(var(--c2) var(--s), #0000 0) 0 var(--g),
    conic-gradient(
      at var(--s) calc(100% - var(--s)),
      #0000 90deg,
      var(--c2) 0 180deg,
      var(--c1) 0
    ),
    #ecd078;
  background-size: calc(2 * (var(--s) + var(--g)))
    calc(2 * (var(--s) + var(--g)));
}


h3 {
   font-family: 'Travel Sunday';
    color:  #c02942; 
    background: #fff;
    text-align: center;
    margin-bottom: 20px;
    width: 55%;
    position: relative;
    padding: 10px 20px;
    border-radius: 10px;
    overflow: hidden;
    animation: h2SlideIn 1s ease-out forwards;
    margin: 20px auto;
}
@keyframes h2SlideIn {
    0% {
        transform: translateY(-100px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

.login-form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    background-color: #ecd078; 
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
    font-size: 25px;
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