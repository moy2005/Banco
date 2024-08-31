<div class="container">
<div class="deposito-container">
    <div class="saldo-info">
        <h2>Saldo Disponible</h2>
        <p class="saldo-valor"><?php echo number_format($cuentas['saldo'], 2); ?></p>
    </div>
    <form action="http://localhost/Banco?C=transaccionController&M=realizarDeposito" method="POST" class="deposito-form">
        <input type="hidden" name="id_cuenta" value="<?php echo $cuentas['id_cuenta']; ?>">
        <div class="form-group">
            <label for="monto">Monto a Depositar</label>
            <input type="text" name="monto" placeholder="Ingresa el monto" required>
        </div>
        <button type="submit" class="submit-button">Realizar Depósito</button>
        <?php if(isset($mensaje)) { echo "<p>$mensaje</p>"; } ?>
    </form>
</div>
</div>

<style>
body {
    font-family: cursive;
}
.container {
  width: 100%;
  height: 100%;
  --s: 150px; /* control the size */
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


    .deposito-container {
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        text-align: center;
    }

    .saldo-info {
        margin-bottom: 30px;
    }

    .saldo-info h2 {
        font-size: 22px;
        color: #029e91;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .saldo-valor {
        font-size: 28px;
        font-weight: bold;
        color: #029e91;
    }

    .deposito-form {
        margin-top: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 18px;
        color: #333;
        display: block;
        margin-bottom: 8px;
    }

    .form-group input[type="text"] {
        width: 100%;
        padding: 10px;
        border-radius: 10px;
        border: 1px solid #ccc;
        font-size: 16px;
    }

    .submit-button {
        display: inline-block;
        padding: 12px 25px;
        background-color: #029e91;
        color: #ffffff;
        text-transform: uppercase;
        font-weight: bold;
        border-radius: 10px;
        cursor: pointer;
        border: none;
        transition: background-color 0.3s ease;
    }

    .submit-button:hover {
        background-color: #026f6a;
    }
</style>
