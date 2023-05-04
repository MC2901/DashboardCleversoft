<?php

// GEBA IP
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
$conexion_GEBA  = fsockopen($servidor_GEBA, 12320, $errno, $errstr, 5);
if (!$conexion_GEBA) {
    // El servidor está apagado
    $estado_servidor_GEBA  = 'apagado';
    $clase_servidor_GEBA  = 'error';
    $status_GEBA = 'Error';
} else {
    // El servidor está prendido
    $estado_servidor_GEBA  = 'prendido';
    $clase_servidor_GEBA  = 'estado';
    $status_GEBA = 'OK';
    fclose($conexion_GEBA);
}

?>