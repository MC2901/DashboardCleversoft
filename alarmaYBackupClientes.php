<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
  <link rel="stylesheet" href="./css/alarmaYBackupClientes.css">
</head>
<body>
  <?php
    // Arrays con los detalles de cada cliente
    $nombresClientes = ['CARC', 'CASLA', 'VELEZ', 'MACABI', 'MASVIDA', 'SP', '48MM', 'CDG', 'FERRO', 'TEMPERLEY', 'CIRUGIA', 'IDEA', 'GER', 'GEBA', 'C.D.AMIGOS', 'VERMINAL', 'CIUDAD', 'MARTORANI', 'PLATENSE', 'LANUS', 'BACCI', 'CASIN', 'CIRUGIA', 'CLINICAL TECH', 'LEDESMA', 'DYJ', 'YMCA'];
    $estadosSQL = [true, true, true, false, true, false, true, true, true, true, true, false, true, true, true, true, true, true, true, true, true, true, true, false, true, true, true];
    $estadosServer = [true, false, true, true, false, true, false, true, false, false, true, true, true, true, false, true, true, true, false, true, true, true, false, true, true, false, true];
    $backupStates = [true, true, true, true, false, true, true, true, false, true, true, false, true, true, true, true, true, true, true, false, true, true, true, true, true, true, false];
  ?>
  <!-- Cuadrícula de clientes -->
  <div class="cuadricula">
    <?php for($i = 0; $i <= 26; $i++): ?>
      <div class="cliente-card">
        <div class="cliente-header">
          <div class="cliente-titulo"><?php echo $nombresClientes[$i]; ?></div>
          <div class="backup-indicator <?php echo $backupStates[$i] ? 'up' : 'down'; ?>">
            <i class="fa <?php echo $backupStates[$i] ? 'fa-arrow-up' : 'fa-arrow-down'; ?>"></i>
          </div>
        </div>
        <div class="cliente-body">
          <div class="estado-sql <?php echo $estadosSQL[$i] ? 'activo' : 'inactivo'; ?>">SQL</div>
         
          <div class="estado-server <?php include('./pingservers.php'); echo $estado_servidor_GEBA == 'prendido' ? 'activo' : 'inactivo'; ?>">SERVER</div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</body>
</html>
