<div class="container1">
<title>Mis Cuentas - BancoXYZ</title>
<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<br> 
<div class="container animate__animated animate__fadeIn">
    <h1 class="cuentas">Mis Cuentas</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nombre de la Cuenta</th>
                    <th>Tipo de Cuenta</th>
                    <th>Saldo</th>
                    <th>Moneda</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($cuentas)) {
                    foreach($cuentas as $cuenta) { ?>
                        <tr>
                            <td><?php echo $cuenta['nombreCuenta']; ?></td>
                            <td><?php echo $cuenta['tipo_cuenta']; ?></td>
                            <td><?php echo number_format($cuenta['saldo'], 2); ?></td>
                            <td><?php echo $cuenta['moneda']; ?></td>
                            <td>
                            <div class="button-container">
                            <button onclick="redirigirAInicio(<?php echo $cuenta['id_cuenta']; ?>)" class="button button-use">
                            <svg viewBox="0 0 576 512" class="svgIcon">
                                <path d="M528 32H48C21.49 32 0 53.49 0 80V432C0 458.5 21.49 480 48 480H528C554.5 480 576 458.5 576 432V80C576 53.49 554.5 32 528 32zM528 432H48V240H528V432zM528 160H48V80H528V160z"></path>
                            </svg>
                            </button>
                            <button onclick="eliminar(<?php echo $cuenta['id_cuenta']; ?>, '<?php echo $cuenta['nombreCuenta']; ?>')" class="button button-delete">
                            <svg viewBox="0 0 448 512" class="svgIcon">
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path>
                            </svg>
                            </button>
                            </div>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="4" style="text-align: center;">No tienes cuentas registradas.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<script>
  function redirigirAInicio(id_cuenta) {
    window.location.href = 'http://localhost/Banco?C=cuentaController&M=inicio&id_cuenta=' + id_cuenta;
  }
  function eliminar(id_cuenta,nombreCuenta){
      if(confirm("¿Está seguro de que desea eliminar la cuenta '" + nombreCuenta + "'? Esta acción no se puede deshacer.")){
          window.location.href="http://localhost/Banco?C=cuentaController&M=eliminarCuenta&id_cuenta="+id_cuenta;
      }
  }
</script>

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


.container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .container:hover {
            transform: scale(1.01);
        }

        @font-face {
       font-family: 'Travel Sunday';
       src: url('App/Fonts/TravelSunday.ttf') format('truetype');
}
@font-face {
    font-family: 'Dacherry';
    src: url('App/Fonts/Dacherry.otf') format('truetype');
}
@font-face {
    font-family: 'CAMIO';
    src: url('App/Fonts/CamionetaDEMO-Regular.otf') format('truetype');
}
@font-face {
    font-family: 'This Cafe';
    src: url('App/Fonts/This Cafe.ttf') format('truetype');
}

        .cuentas{
            text-align: center;
            color: #289a6a;
            animation: fadeInDown 1s ease-in-out;
            font-family: 'This Cafe';
        }

        .table-container {
            margin-top: 30px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        thead {
          font-family: 'Dacherry';
            background-color:  #289a6a ;
            color: #fff;
            text-transform: uppercase;
        }
        

        thead th {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 2px solid  #289a6a ;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        td{
          font-size: 20px;
          font-family: 'CAMIO';
        }

      
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color:  #289a6a ;
            color: #fff;
            transform: scale(1.02);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .highlight {
            background-color: #029e91 !important;
            animation: pulse 1s infinite;
        }
        .button {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #029e91;
            border: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
            cursor: pointer;
            transition-duration: .3s;
            overflow: hidden;
            position: relative;
            margin: 0 15px; 
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

.button-delete {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: #029e91; 
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
  cursor: pointer;
  transition-duration: .3s;
  overflow: hidden;
  position: relative;
}

.button-delete .svgIcon {
  width: 12px;
  transition-duration: .3s;
}

.button-delete .svgIcon path {
  fill: white;
}

.button-delete:hover {
  width: 140px;
  border-radius: 50px;
  transition-duration: .3s;
  background-color: rgb(255, 69, 69);
  align-items: center;
}

.button-delete:hover .svgIcon {
  width: 50px;
  transition-duration: .3s;
  transform: translateY(60%);
}

.button-delete::before {
  position: absolute;
  top: -20px;
  content: "Eliminar";
  color: white;
  transition-duration: .3s;
  font-size: 2px;
}

.button-delete:hover::before {
  font-size: 13px;
  opacity: 1;
  transform: translateY(30px);
  transition-duration: .3s;
}

.button-use {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: #029e91;
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
  cursor: pointer;
  transition-duration: .3s;
  overflow: hidden;
  position: relative;
}

.button-use .svgIcon {
  width: 12px;
  transition-duration: .3s;
}

.button-use .svgIcon path {
  fill: white;
}

.button-use:hover {
  width: 140px;
  border-radius: 50px;
  transition-duration: .3s;
  background-color: #4CAF50; 
  align-items: center;
}

.button-use:hover .svgIcon {
  width: 50px;
  transition-duration: .3s;
  transform: translateY(60%);
}

.button-use::before {
  position: absolute;
  top: -20px;
  content: "Usar";
  color: white;
  transition-duration: .3s;
  font-size: 2px;
}

.button-use:hover::before {
  font-size: 13px;
  opacity: 1;
  transform: translateY(30px);
  transition-duration: .3s;
}

</style>