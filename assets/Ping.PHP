 <?php
include "./assets/IP.PHP";

 // GEBA IP
 $servidor_GEBA = 'aldao.mooo.com';
 $estado_servidor_GEBA  = 'desconocido'; 
 // GER IP
 $servidor_GER = 'cleversoft-102.homeip.net';
 $estado_servidor_GER  = 'desconocido'; 
 // Ciudad IP
 $servidor_Ciudad = 'ccba.dyndns.org';
 $estado_servidor_Ciudad  = 'desconocido'; 
 // Macabi IP
 $servidor_Macabi = '181.117.247.64';
 $estado_servidor_Macabi = 'desconocido'; 
 // MAS_VIDA IP
 $servidor_VIDA = '1.1.8.11';
 $estado_servidor_VIDA = 'desconocido'; 
 // SIC IP
 $servidor_SIC = '190.2.13.177';
 $estado_servidor_SIC = 'desconocido'; 
 // LH IP
 $servidor_LH = 'LH.homeip.net';
 $estado_servidor_LH = 'desconocido'; 
 // IDEA IP
 $servidor_IDEA = 'idea-caba-rgnhhjckcn.dynamic-m.com';
 $estado_servidor_IDEA = 'desconocido'; 
 // CGLMN IP
 $servidor_CGLMN = '574105c93820.sn.mynetname.net';
 $estado_servidor_CGLMN = 'desconocido'; 
 // Temperley IP
 $servidor_Temperley = 'clubtemperley.homeip.net';
 $estado_servidor_Temperley = 'desconocido'; 
 // Platense IP
 $servidor_Platense = 'clubplatense.homeip.net';
 $estado_servidor_Platense = 'desconocido'; 
 // Lanus IP
 $servidor_Lanus = '190.194.74.227';
 $estado_servidor_Lanus= 'desconocido'; 
 // DyJ IP
 $servidor_DyJ = '';
 $estado_servidor_DyJ= 'desconocido'; 
 // Vaiter IP
 $servidor_Vaiter = 'ctdatacenter.sytes.net';
 $estado_servidor_Vaiter= 'desconocido'; 
 // MARTORANI Protocolo  PPTP (Point-to-Point Tunneling Protocol) --> puerto: TCP 1723
 $vpn_martorani = 'b8e30b705a13.sn.mynetname.net';
 $vpnPort_martorani = '1723';
 $estado_vpn_martorani = 'desconocido'; 
 // SmartMailBox IP
 $servidor_SmartMailBox = 'smartmailbox.homeip.net';
 $estado_servidor_SmartMailBox= 'desconocido'; 
 // ReSaltar IP
 $servidor_ReSaltar = '192.168.1.188';
 $estado_servidor_ReSaltar= 'desconocido'; 
 // VELEZ IP
 $servidor_velez = '200.89.140.114';
 $estado_servidor_velez= 'desconocido'; 
 // CASLA IP
 $servidor_casla = 'casla2022.hopto.org';
 $estado_servidor_casla = 'desconocido'; 
 // CARC IP
 $servidor_carc = '181.30.58.12';
 $estado_servidor_carc = 'desconocido';
  // CARRASCO
  $servidor_carrasco = 'clubcarrasco.homeip.net';
  $estado_servidor_carrasco = 'desconocido';
  
 
 //* VERIFICAION ESTADO SERVIDORES *//
     // GEBA
 $conexion_GEBA  = fsockopen($servidor_GEBA , 12320, $errno, $errstr, 5);
 if (!$conexion_GEBA ) {
     // El servidor está apagado
     $estado_servidor_GEBA  = 'apagado';
     $clase_servidor_GEBA  = 'error';
     $status_GEBA = 'Error';

 } else {
     // El servidor está prendido
     $estado_servidor_GEBA  = 'prendido';
     $clase_servidor_GEBA  = 'estado';
     $status_GEBA = 'OK';
     fclose($conexion_GEBA );

  }
     // GER
 $conexion_GER  = fsockopen($servidor_GER , 80, $errno, $errstr, 5);
 if (!$conexion_GER) {
     // El servidor está apagado
     $estado_servidor_GER  = 'apagado';
     $clase_servidor_GER  = 'error';
     $status_GER = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_GER  = 'prendido';
     $clase_servidor_GER  = 'estado';
     $status_GER = 'OK';
     fclose($conexion_GER );
 }
 // Ciudad
 $conexion_Ciudad  = fsockopen($servidor_Ciudad , 3388, $errno, $errstr, 5);
 if (!$conexion_Ciudad) {
     // El servidor está apagado
     $estado_servidor_Ciudad  = 'apagado';
     $clase_servidor_Ciudad  = 'error';
     $status_Ciudad = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_Ciudad  = 'prendido';
     $clase_servidor_Ciudad = 'estado';
     $status_Ciudad = 'OK';
     fclose($conexion_Ciudad );
 }
 // Macabi
 $conexion_Macabi  = fsockopen($servidor_Macabi , 10880, $errno, $errstr, 5);
 if (!$conexion_Macabi) {
     // El servidor está apagado
     $estado_servidor_Macabi  = 'apagado';
     $clase_servidor_Macabi = 'error';
     $status_Macabi = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_Macabi  = 'prendido';
     $clase_servidor_Macabi  = 'estado';
     $status_Macabi = 'OK';
     fclose($conexion_Macabi );
 }
 // MAS_VIDA
 $conexion_VIDA  = fsockopen($servidor_VIDA , 1688, $errno, $errstr, 5);
 if (!$conexion_VIDA) {
     // El servidor está apagado
     $estado_servidor_VIDA  = 'apagado';
     $clase_servidor_VIDA  = 'error';
     $status_VIDA = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_VIDA  = 'prendido';
     $clase_servidor_VIDA = 'estado';
     $status_VIDA = 'OK';
     fclose($conexion_VIDA );
 }
 // SIC
 $conexion_SIC  = fsockopen($servidor_SIC , 10880, $errno, $errstr, 5);
 if (!$conexion_SIC) {
     // El servidor está apagado
     $estado_servidor_SIC  = 'apagado';
     $clase_servidor_SIC  = 'error';
     $status_SIC = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_SIC  = 'prendido';
     $clase_servidor_SIC  = 'estado';
     $status_SIC = 'OK';
     fclose($conexion_SIC );
 }
 // LH
 $conexion_LH  = fsockopen($servidor_LH , 21, $errno, $errstr, 5);
 if (!$conexion_LH) {
     // El servidor está apagado
     $estado_servidor_LH  = 'apagado';
     $clase_servidor_LH  = 'error';
     $status_LH = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_LH  = 'prendido';
     $clase_servidor_LH  = 'estado';
     $status_LH = 'OK';
     fclose($conexion_LH );
 }
 // IDEA
 $conexion_IDEA  = fsockopen($servidor_IDEA , 80, $errno, $errstr, 5);
 if (!$conexion_IDEA) {
     // El servidor está apagado
     $estado_servidor_IDEA  = 'apagado';
     $clase_servidor_IDEA = 'error';
     $status_IDEA = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_IDEA  = 'prendido';
     $clase_servidor_IDEA = 'estado';
     $status_IDEA = 'OK';
     fclose($conexion_IDEA );
 }
 // CGLMN
 $conexion_CGLNM = fsockopen($servidor_CGLMN , 10880, $errno, $errstr, 5);
 if (!$conexion_CGLNM) {
     // El servidor está apagado
     $estado_servidor_CGLNM  = 'apagado';
     $clase_servidor_CGLNM = 'error';
     $status_cglmn = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_CGLNM  = 'prendido';
     $clase_servidor_CGLNM = 'estado';
     $status_cglmn = 'OK';
     fclose($conexion_CGLNM );
 }


 // Temperley
 $conexion_Temperley = fsockopen($servidor_Temperley , 10880, $errno, $errstr, 5);
 if (!$conexion_Temperley) {
     // El servidor está apagado
     $estado_servidor_Temperley  = 'apagado';
     $clase_servidor_Temperley = 'error';
     $status_Temperley = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_Temperley  = 'prendido';
     $clase_servidor_Temperley = 'estado';
     $status_Temperley = 'OK';
     fclose($conexion_Temperley );
 }
 
 // Platense
 $conexion_Platense = fsockopen($servidor_Platense , 65533, $errno, $errstr, 5);
 if (!$conexion_Platense) {
     // El servidor está apagado
     $estado_servidor_Platense = 'apagado';
     $clase_servidor_Platense = 'error';
     $status_Platense = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_Platense = 'prendido';
     $clase_servidor_Platense = 'estado';
     $status_Platense = 'OK';
     fclose($conexion_Platense );
 }

 // Lanus
 $conexion_Lanus = fsockopen($servidor_Lanus , 6651, $errno, $errstr, 5);
 if (!$conexion_Lanus) {
     // El servidor está apagado
     $estado_servidor_Lanus = 'apagado';
     $clase_servidor_Lanus = 'error';
     $status_Lanus = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_Lanus  = 'prendido';
     $clase_servidor_Lanus = 'estado';
     $status_Lanus = 'OK';
     fclose($conexion_Lanus );
 }

 // DyJ
 $conexion_DyJ = fsockopen($servidor_DyJ , 80, $errno, $errstr, 5);
 if (!$conexion_DyJ) {
     // El servidor está apagado
     $estado_servidor_DyJ  = 'apagado';
     $clase_servidor_DyJ  = 'error';
     $status_DyJ = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_DyJ  = 'prendido';
     $clase_servidor_DyJ  = 'estado';
     $status_DyJ = 'OK';
     fclose($conexion_DyJ );
 }

 // Vaiter
 $conexion_Vaiter = fsockopen($servidor_Vaiter , 13500, $errno, $errstr, 5);
 if (!$conexion_Vaiter) {
     // El servidor está apagado
     $estado_servidor_Vaiter  = 'apagado';
     $clase_servidor_Vaiter = 'error';
     $status_Vaiter = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_Vaiter  = 'prendido';
     $clase_servidor_Vaiter = 'estado';
     $status_Vaiter = 'OK';
     fclose($conexion_Vaiter );
 }

 // Martorani
 function checkVpnConnection($vpn_martorani, $vpnPort_martorani) {
     $vpnConnection_martorani = @fsockopen($vpn_martorani, $vpnPort_martorani, $errno, $errstr, 5);
     if ( $vpnConnection_martorani) {
         fclose( $vpnConnection_martorani);
         return true; // La conexión VPN está activa
     } else {
         return false; // La conexión VPN no está activa
     }
 }
 if (checkVpnConnection($vpn_martorani, $vpnPort_martorani)) {
     $estado_vpn_martorani  = 'prendido';
     $clase_vpn_martorani = 'estado';
     $status_Martorani = 'OK';
 } else {
     $estado_vpn_martorani  = 'apagado';
     $clase_vpn_martorani = 'error';
     $status_Martorani = 'OK';
 }

 // SmartMailBox
 $conexion_SmartMailBox  = fsockopen($servidor_SmartMailBox, 80, $errno, $errstr, 5);
 if (!$conexion_SmartMailBox) {
     // El servidor está apagado
     $estado_servidor_SmartMailBox  = 'apagado';
     $clase_servidor_SmartMailBox = 'error';
     $status_SmartMailBox = 'Error'; 
 } else {
     // El servidor está prendido
     $estado_servidor_SmartMailBox = 'prendido';
     $clase_servidor_SmartMailBox = 'estado';
     $status_SmartMailBox = 'OK';
     fclose($conexion_SmartMailBox );
 }
 // ReSaltar
 $conexion_ReSaltar  = fsockopen($servidor_ReSaltar, 80, $errno, $errstr, 5);
 if (!$conexion_ReSaltar) {
     // El servidor está apagado
     $estado_servidor_ReSaltar  = 'apagado';
     $clase_servidor_ReSaltar = 'error';
     $status_ReSaltar = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_ReSaltar = 'prendido';
     $clase_servidor_ReSaltar = 'estado';
     $status_ReSaltar = 'OK';
     fclose($conexion_SmartMailBox );
 }
 // VELEZ
 $conexion_velez  = fsockopen($servidor_velez , 10880, $errno, $errstr, 5);
 if (!$conexion_velez) {
     // El servidor está apagado
     $estado_servidor_velez  = 'apagado';
     $clase_servidor_velez = 'error';
     $status_VELEZ = 'Error';
 } else {
     // El servidor está prendido
     $estado_servidor_velez  = 'prendido';
     $clase_servidor_velez = 'estado';
     $status_VELEZ = 'OK';
     fclose($conexion_velez );
 }
 // CASLA
 $conexion_casla  = fsockopen($servidor_casla , 3395, $errno, $errstr, 5);
 if (!$conexion_casla) {
     $estado_servidor_casla  = 'apagado';
     $clase_servidor_casla = 'error';
     $status_CASLA = 'Error';
 } else {
     $estado_servidor_casla  = 'prendido';
     $clase_servidor_casla = 'estado';
     $status_CASLA = 'OK';
     fclose($conexion_casla );
 }
 // CARC
 $conexion_carc  = fsockopen($servidor_carc , 80, $errno, $errstr, 5);
 if (!$conexion_carc) {
     $estado_servidor_carc  = 'apagado';
     $clase_servidor_carc = 'error';
     $status = "Inactivo";
     $status_CARC = 'Error';
 } else {
     $estado_servidor_carc  = 'prendido';
     $clase_servidor_carc = 'estado';
     fclose($conexion_carc );
     $status = "Activo";
     $status_CARC = 'OK';
 }

  // CARRASCO

  $conexion_carrasco  = fsockopen($servidor_carrasco, 33897, $errno, $errstr, 5);
  if (!$conexion_carrasco) {
      $estado_servidor_carrasco  = 'apagado';
      $clase_servidor_carrasco = 'error';
      $status = "Inactivo";
      $status_carrasco = 'Error';
  } else {
      $estado_servidor_carrasco  = 'prendido';
      $clase_servidor_carrasco = 'estado';
      fclose($conexion_carrasco );
      $status = "Activo";
      $status_carrasco = 'OK';
  }



// 201
/*
$conexion_201  = fsockopen($ping_201, 80, $errno, $errstr, 5);
if (!$conexion_201) {
    $estado_servidor_201  = 'apagado';
    $status_201 = 'Error';
    
} else {
    $estado_servidor_201  = 'prendido';
    $status_201 = 'OK';
    fclose($conexion_201 );
    
}*/

?>

<script>
	// Reload the page every 2.5 minutes (150000 ms)
	setTimeout(function() {
	location.reload();
	}, 150000);

    var statusElement = document.getElementById("status");
		if (statusElement.innerHTML == "Activo") {
			statusElement.classList.add("OK");
		} else {
			statusElement.classList.add("ERROR");
		}

</script>