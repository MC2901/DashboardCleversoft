<!DOCTYPE html>
<html ><head>
<title>DASHBOARD</title>
<meta charset="UTF-8">
<link rel="stylesheet"  href="css/cuadros.css" />
<link rel="stylesheet"  href="css/buttons.css" />
<link rel="stylesheet"  href="css/estado.css" />

<head class="header">
	<h1></h1>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="contenedor patterns  pt1" >
<?php 
	include './PHP/PING.PHP'; 
	include './PHP/FTP.PHP';
	include './PHP/APACHE.PHP';
	include './PHP/MySQL.PHP';
	include './PHP/dns.php';
	include './PHP/consulta_BU_302.php';
	include './PHP/Hestia.php';
	include './PHP/GIT.PHP';
	include './PHP/reiniciar_apache.php';
	include './PHP/SSH.PHP';
	include './PHP/IP.PHP'
?>
		<div class="sv-status">
			<div class="container">
			<!-- <img  class="<?php echo $status_201 == 'OK' ? 'invisible' : 'warning-201' ?>" src="./css/img/WARNING.png" alt="img" > -->
			
				<div class="box docientos-uno">
					<div class="status-201">
					<p class="name">201</p>
					<img class="<?php echo $status_201 == 'OK' ? '.ok-201' : 'invisible' ?>" src="./css/img/cheque.png" alt="img">
					</div>
					<div class="sub-box <?php echo $status_201 == 'Error' ? 'blur' : '' ?>">
						<h2>CLEVER</h2>
						<ul class="list">
							<div>
								<p>LIC</p>
								<p>30/01/2023</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>FRONT</p>
								<p>999</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
								<div>
									<P>QUEUE</P>
									<p>999</p>
									<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
								</div>
						</ul>
						<hr>
						<ul class="servicios">
							<div>
								<p>Apache</p>
								<p <?php echo $ip_Dobby?><span class="<?php echo $estado_apache_Dobby == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_apache_Dobby == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
								<button class="boton" onclick="location.href='reiniciar_apache.php'"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>MySQL</p>
								<p <?php echo $ip_201 ?><span class="<?php echo $estado_Mysql_201 == 'prendido' ? 'estado' : 'error' ?>"><?php echo $estado_Mysql_201== 'prendido' ? 'WORK' : 'ERROR' ?></span></p> 
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>FTP</p>
								<p <?php echo $ip_201 ?><span class="<?php echo $estado_FTP_201 == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_FTP_201 == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<P>GIT</P>
								<p <?php echo $ip_203?><span class="<?php echo $estado_git_203== 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_git_203 == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>SSH</p>
								<p <?php echo $ip_201 ?><span class="<?php echo $estado_ssh_201 == 'prendido' ? 'estado' : 'error' ?>"></span>ESTADO</p> 
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
						</ul>

					</div>

				</div>

								
				
				 <div class="Sv-Clientes">
					<p class="name">Servidores Clientes</p>
					<div class="Sub-Sv-Clientes">
						<ul class="list clientes list-cli-sv">
							<div class="cliente-estado">
								<P>GEBA</P> 
								 <p <?php echo $servidor_GEBA ?><span class="<?php echo $estado_servidor_GEBA == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_GEBA == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<P>GER</P>
								<p <?php echo $servidor_GER?><span class="<?php echo $estado_servidor_GER == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_GER == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<P>Ciudad</P>
								<p <?php echo $servidor_Ciudad?><span class="<?php echo $estado_servidor_Ciudad == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_Ciudad == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<p>Macabi</p>
								<p <?php echo $servidor_Macabi?><span class="<?php echo $estado_servidor_Macabi == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_Macabi == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<p>+Vida</p>
								<p <?php echo $servidor_VIDA?><span class="<?php echo $estado_servidor_VIDA == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_VIDA == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<p>SIC</p>
								<p <?php echo $servidor_SIC?><span class="<?php echo $estado_servidor_SIC == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_SIC == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<P>LH</P>
								<p <?php echo $servidor_LH?><span class="<?php echo $estado_servidor_LH == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_LH == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<p>IDEA</p>
								<p <?php echo $servidor_IDEA?><span class="<?php echo $estado_servidor_IDEA == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_IDEA == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<p>CGLNM</p>
								<p <?php echo $servidor_CGLMN?><span class="<?php echo $estado_servidor_CGLMN == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_CGLMN == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<p>Temperley</p>
								<p <?php echo $servidor_Temperley?><span class="<?php echo $estado_servidor_Temperley == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_Temperley == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<p>Platense</p>
								<p <?php echo $servidor_Platense?><span class="<?php echo $estado_servidor_Platense == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_Platense == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<p>Lanus</p>
								<p <?php echo $servidor_Lanus?><span class="<?php echo $estado_servidor_Lanus == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_Lanus == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<p>DyJ</p>
								<p class="estado">WORK</p>
							</div>
							<div class="cliente-estado">
								<p>Vaiter</p>
								<p <?php echo $servidor_Vaiter?><span class="<?php echo $estado_servidor_Vaiter == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_Vaiter == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<P>Martorani</P>
								<p <?php echo $vpn_martorani?><span class="<?php echo $estado_vpn_martorani == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_vpn_martorani == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<p>SmartMailBox</p>
								<p <?php echo $servidor_SmartMailBox?><span class="<?php echo $estado_servidor_SmartMailBox == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_servidor_SmartMailBox == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
							</div>
							<div class="cliente-estado">
								<p>ReSaltar</p>
								<p class="estado">WORK</p>
							</div>
						</ul>
						
					</div>
					
				</div>
				 
				
				<div class="box docientos-dos">
					<p class="name">202</p>
					<div class="sub-box">
						<h2>CLEVER</h2>
						<ul class="list">
							<div>
								<p>LIC</p>
								<p>30/01/2023</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
								
							</div>
							<div>
								<p>FRONT</p>
								<p>999</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
								<div>
									<P>QUEUE</P>
									<p>999</p>
									<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
								</div>
						</ul>
						<hr>
						<ul class="servicios">
							<div>
								<p>DNS</p>									
								<p <?php echo $ip_202?><span class="<?php echo $estado_dns_202 == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_dns_202 == 'prendido' ? 'WORK' : 'ERROR' ?></p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button> 
							</div>
							<div>
								<P>Hestia</P>
								<p <?php echo $ip_202?><span class="<?php echo $estado_hestia_202 == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_hestia_202 == 'prendido' ? 'WORK' : 'ERROR' ?></p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>Apache</p>
								<p <?php echo $ip_202?><span class="<?php echo $estado_apache_202 == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_apache_202 == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
								<button class="boton" onclick="location.href='reiniciar_apache.php'"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<P>MySQL</P>
								<p class="">ESTADO</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>FTP</p>
								<p <?php echo $ip_202?><span class="<?php echo $estado_FTP_202 == 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_FTP_202 == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>SSH</p>
								<p <?php echo $ip_202?><span class="<?php echo $estado_ssh_202 == 'prendido' ? 'estado' : 'error' ?>"></span>ESTADO</p> 
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>GIT</p>
								<p <?php echo $ip_203?><span class="<?php echo $estado_git_203== 'prendido' ? 'estado' : 'error' ?>"></span><?php echo $estado_git_203 == 'prendido' ? 'WORK' : 'ERROR' ?></p> 
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>	
						</ul>
						<hr>
						<ul class="clientes">
							<h2>CLIENTES</h2>
							<div>
								<p>VELEZ</p>
								<p <?php echo $servidor_velez?><span class="<?php echo $estado_servidor_velez == 'prendido' ? 'estado' : 'error' ?>"></span> ESTADO </p> 
							</div>
							<div>	
								<p>CASLA</p>
								<p <?php echo $servidor_casla?><span class="<?php echo $estado_servidor_casla == 'prendido' ? 'estado' : 'error' ?>"></span> ESTADO </p> 
							</div>
							<div>
								<p>CARC</p>
								<p <?php echo $servidor_carc?><span class="<?php echo $estado_servidor_carc == 'prendido' ? 'estado' : 'error' ?>"></span> ESTADO </p> 
							</div>
							
						</ul>
					</div>
				</div>
				
				<div class="box docientos-tres">
					<p class="name">203</p>
					<div class="sub-box">
						<h2>CLEVER</h2>
						<ul class="list">
							<div>
								<p>LIC</p>
								<p>30/01/2023</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>FRONT</p>
								<p>999</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
								<div>
									<P>QUEUE</P>
									<p>999</p>
									<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
								</div>
						</ul>
						<hr>
						<ul class="dns">
							<div>
								<p>DNS</p>
								<P class="">ESTADO</P>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							
						</ul>
						<hr>
						<h2>CLIENTES</h2>
						<ul class="clientes">
							<div>
								<p>Club.Ciudad</p>	
								<p <?php echo $servidor_Ciudad?><span class="<?php echo $estado_servidor_Ciudad == 'prendido' ? 'estado' : 'error' ?>"></span> ESTADO </p> 	
							</div>
							<div>
								<p>Carrasco</p> 
								<p <?php echo $servidor_carrasco?><span class="<?php echo $estado_servidor_carrasco == 'prendido' ? 'estado' : 'error' ?>"></span> ESTADO </p> 
							</div>
						</ul>
					</div>
				</div>

				<div class="box trecientos-uno">
					<p class="name">301</p>
					<div class="sub-box">
						<h2>CLEVER</h2>
						<ul class="list">
							<div>
								<P>Ticket</P>
								<p class="">ESTADO</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							
						</ul>
						<hr>
						<ul class="servicios">
							<div>
								<p>MySQL</p>
								<p class="">ESTADO</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>OSTicket</p>
								<p class="">ESTADO</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>Apache</p>
								<p class="">ESTADO</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
						
						</ul>
					</div>
				</div>
				
				<div class="box usa">
					<p class="name">USA</p>
					<div class="sub-box">
						<h2>CLEVER</h2>
						<ul class="list">
							<div class="dns">
								<p>DNS.Madre</p>
								<p class="">ESTADO</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
						</ul>
						<hr>
						<h2>Dominio</h2>
						<ul class="dominio">
							<div>
								<p>CS.Solutions</p>
								<p>2027/09/03</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>CleverPago</p>
								<p>30/01/2023</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div>
								<p>MiClub.info</p>
								<p>2030/11/24</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							
						</ul>
					</div>
					
				</div>
				
				<div class="box trecientos-dos">
					<p class="name ">302 BuckUp</p>
					<div class="sub-box bu ">
						<h2>CLEVER</h2>
						<ul class="list sv-bu flex-container">
							<DIV >
								<P>302</P>
								<p>30/01/2023</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</DIV>
							<div >
								<P>301</P>
								<p>30/01/2023</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
							<div >	
								<p>201</p>
								<p>30/01/2023</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
						</ul>
						<hr>
						<ul class="servicios">
							<DIV>	
								<p>FTP</p>
								<p <?php echo $ip_302?><span class="<?php echo $estado_FTP_302 == 'prendido' ? 'estado' : 'error' ?>"></span> ESTADO </p> 
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</DIV>
							<div>
								<P>GITLAB</P>
								<p class="">ESTADO</p>
								<button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button>
							</div>
						</ul>
						<hr>
						<H2>Backups</H2>
							<table class="clientes tabla">
								<tr>
									<th>Clientes</th>
									<th>Master</th>
									<th>Produccion</th>
								</tr>
								<tr>
									<td>Velez</td>
									<td>X/X/X</td>
									<td>X/X/X</td>
								</tr>
								<tr>
									<td>CARC</td>
									<td><?php echo $Carc_Master?></td>
									<td><?php echo $Carc_Produ?></td>
								</tr>
								<tr>
									<td>GER</td>
									<td><?php echo $GER_Master?></td>
									<td><?php echo $GER_Produ?></td>
								</tr>
								<tr>
									<td>CASLA</td>
									<td>30/01/2023</td>
									<td>30/01/2023</td>
								</tr>
								<tr>
									<td>GEBA</td>
									<td><?php echo $GEBA_Produ?></td>
									<td><?php echo "X/X/X"?></td>
								</tr>
								<tr>
									<td>Macabi</td>
									<td><?php echo $MACABI_MASTER?></td>
									<td><?php echo "X/X/X"?></td>
								</tr>
								<tr>
									<td>SmartMailBox</td>
									<td><?php echo $SMB_Produ?></td>
									<td><?php echo $SMB_Master?></td>
								</tr>
							</table>
					</div>
				</div>

				<div class="lic" >
					<h2>LIC 2</h2>
					<div class="sub-lic">
						<table class="tabla">
							<tr>
								<th>LICENCIA</th>
								<th>ULT. Fecha Sinc.</th>
								<th>Reinicar</th>
								
							</tr>
	
							<tr>
									<td>LIC2</td>
									<td>HORA: 00:00</td>
									<td><button class="boton"><img src="./css/img/Refresh.webp" alt="Reset"></button></td>
							</tr>
	
						</table>
	
					</div>
				</div>

				<div class="queque" >
					<h2>QUEUE</h2>
					<div class="sub-queque">
						<table class="tabla">
							<tr>
								<th>Cliente</th>
								<th>En Cola</th>
								<th>ULT. HORA</th>
								<th>Reiniciar</th>
							</tr>
	
							<tr>
									<td>VELEZ</td>
									<TD>cant</TD>
									<TD>00:00</TD>
									<td><button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button></td>
							</tr>
							
							<tr>
								<td>CASLA</td>
								<td> cant </td>
								<td>00:00</td>
								<td><button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button></td>
							</tr>
							<tr>
								<td>CARC</td>
								<td> cant </td>
								<td>00:00</td>
								<td><button class="boton"><img src="./css/img/Refresh.webp" alt="img"></button></td>
							</tr>

						</table>
	
					</div>
				</div>


</body>

</html>
