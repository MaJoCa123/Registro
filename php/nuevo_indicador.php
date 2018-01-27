<?php 
	session_start();
	if (!isset($_SESSION['user'])) {
		header('location:index.php');
	}
	include'head.php';
	#incluyo el archivo donde esta la consulta sql 
	include'../consultas/sector.php';
	require_once'header.php';
 ?>


	<section>
		<article>

					<h1>Indicador</h1>

					<form action="recibir_indicador.php" method="post" name="indicador nuevo">

						<label for="NUMERO">N°: </label>
						<input type="text" id="NUMERO" name="NUMERO"><br><br>


						<label for="SICE">SICE N°: </label>
						<input type="text" id="SICE" name="SICE"><br><br>


						<label for="DGCC">DGCC N°: </label>
						<input type="text" id="DGCC" name="DGCC"><br><br>


						<label for="DUUR">DUUR: </label><select  name="DUURR" required><br><br>
						<option value="DUURR-1">DUURR-1</option> 
   						<option value="DUURR-2">DUURR-2</option> 
   						<option value="DUURR-3">DUURR-3</option>
   						<option value="DUURR-4">DUURR-4</option> 
  						<option value="DUURR-5">DUURR-5</option> 
   						<option value="DUURR-6">DUURR-6</option> 
   						<option value="SUB JEFATURA">SUB JEFATURA</option> 
   						<option value="SECRETARIA">SECRETARIA</option> 
   						<option value="INSTITUCIONALES">INSTITUCIONALES</option>
   						<option value="SEGURIDAD">SEGURIDAD</option> 
  						<option value="INVESTIGACIONES">INVESTIGACIONES</option>  
  						<option value="DROGAS">DROGAS</option> 
   						<option value="EDUCACION">EDUCACION</option> 
   						<option value="ESTRATEGIAS">ESTRATEGIAS</option>
   						<option value="RRHH">RRHH</option> 
  						<option value="ADMINISTRACION">ADMINISTRACION</option> 
   						<option value="TECNOLOGIA">TECNOLOGIA</option> 
   						<option value="JURIDICO">JURIDICO</option>
  						</select>

							
						<label for="ZONA">ZONA: </label>
						<input type="text" id="ZONA" name="ZONA"><br><br>


						<label for="SECTOR">SECTOR: </label>
		
						<!-- itero la variable sector -->				
						<select  name="SECTOR" required><br><br>
							<?php while($fila=mysqli_fetch_array($sector)): ?>
								<option value="<?=$fila['id_sector']?>"><?=$fila['sector']?></option>
							<?php endwhile; ?>
						</select>
							<!--
							<option value="SECTOR-1A">SECTOR-1A</option>
							<option value="SECTOR-1B">SECTOR-1B</option>  
							<option value="SECTOR-2">SECTOR-2</option> 
							<option value="SECTOR-3A">SECTOR-3A</option>
							<option value="SECTOR-3B">SECTOR-3B</option> 
							<option value="SECTOR-4">SECTOR-4</option> 
							<option value="SECTOR-5">SECTOR-5</option>
							<option value="SECTOR-6">SECTOR-6</option>   
							<option value="SECTOR-7A">SECTOR-7A</option> 
							<option value="SECTOR-7B">SECTOR-7B</option>
							<option value="SECTOR-8">SECTOR-8</option> 
							<option value="SECTOR-71">SECTOR-71</option>
							<option value="SECTOR-72">SECTOR-72</option>
							<option value="SECTOR-80">SECTOR-80</option>
							<option value="SECTOR-81">SECTOR-81</option>
							<option value="SECTOR-82">SECTOR-82</option> 
							<option value="SECTOR 83">SECTOR-82</option>
							<option value="SECTOR-84">SECTOR-81</option>  
							--> 
						 


						<label for="DEPENDENCIA">DEPENDENCIA: </label>
						<select  name="DEPENDENCIA" required><br><br>
						<optgroup label="UNIDAD REGIONAL N° 1">
						
						<option value="DIVISION PROTECCION AL MENOR Y LA FAMILIA-UR1" label="1-DIVISION PROTECCION AL MENOR Y LA FAMILIA-UR1">  
						<option value="BASE OPERATIVA B° ESCALABRINI ORTIZ" label= "2-BASE OPERATIVA B° ESCALABRINI ORTIZ"> 
						<option value="SECTOR-1A" label="3-SECTOR-1A">
						<option value="SECTOR-1B" label="4-SECTOR-1B"> 
						<option value="SECTOR-2A" label="5-SECTOR-2A"> 
						<option value="SECTOR-3A" label="6-SECTOR-3A">
						<option value="SECTOR-3B" label="7-SECTOR-3B">   
						<option value="SECTOR-4" label="8-SECTOR-4"> 
						<option value="SECTOR-5A" label="9-SECTOR-5A">
						<option value="SECTOR-6A" label="10-SECTOR-6A"> 
						<option value="SECTOR-6B" label="11-SECTOR-6B">
						<option value="SECTOR-7A" label="12-SECTOR-7A">
						<option value="SECTOR-7B" label="13-SECTOR-7B">
						<option value="SECTOR-8A" label="14-SECTOR-8A">
						<option value="SECTOR 71" label="15-SECTOR-71">
						<option value="SECTOR 72" label="16-SECTOR-72">
						<option value="SECTOR-81A" label="17-SECTOR-81A">
						<option value="SECTOR 81B" label="18-SECTOR-81B">    
						<option value="SECTOR-82A" label="19-SECTOR-82A">
						<option value="SECTOR-82B" label="20-SECTOR-82B">
						<option value="SECTOR 83A" label="21-SECTOR-83A">
						<option value="SECTOR-84B" label="22-SECTOR-84B">
						<option value="COMISARIA N°1-UR1-" label="23-COMISARIA N°1-UR1-">
						<option value="COMISARIA N°2-UR1-" label="24-COMISARIA N°2-UR1-">
						<option value="COMISARIA N°3-UR1-" label="25-COMISARIA N°3-UR1-">
						<option value="COMISARIA N°4-UR1-" label="26-COMISARIA N°4-UR1-">
						<option value="COMISARIA N°5-UR1-" label="27-COMISARIA N°5-UR1-">
						<option value="COMISARIA N°6-UR1-" label="28-COMISARIA N°6-UR1-">
						<option value="COMISARIA N°7-UR1-" label="29-COMISARIA N°7-UR1-">
						<option value="COMISARIA N°8-UR1-" label="30-COMISARIA N°8-UR1-">
						<option value="COMISARIA N°9-UR1-" label="31-COMISARIA N°9-UR1-"">
						<option value="COMISARIA N°10-UR1-" label="32-COMISARIA N°10-UR1-">
						<option value="COMISARIA N°11-UR1-GRAL. GUEMES" label="33-COMISARIA N°11-UR1-GRAL. GUEMES">
						<option value="COMISARIA N°12-UR1- SANTA ANA" label="34-COMISARIA N°12-UR1- SANTA ANA">
						<option value="COMISARIA N°13-UR1- CERRILLOS" label="35-COMISARIA N°13-UR1- CERRILLOS">
						<option value="COMISARIA N°14-UR1- ROSARIO DE LERMA" label="36-COMISARIA N°14-UR1- ROSARIO DE LERMA">
						<option value="COMISARIA N°15-UR1- SAN REMO" label="37-COMISARIA N°15-UR1- SAN REMO">
						<option value="COMISARIA N°16-UR1- CAMPO SANTO" label="38-COMISARIA N°16-UR1- CAMPO SANTO">
						<option value="COMISARIA N°17-UR1- SOLIDARIDAD" label="39-COMISARIA N°17-UR1- SOLIDARIDAD">
						<option value="COMISARIA N°18-UR1-CHICOANA" label="40-COMISARIA N°18-UR1-CHICOANA">
						<option value="COMISARIA N°19-UR1-CARRIL" label="41-COMISARIA N°19-UR1-CARRIL">
						<option value="COMISARIA N°100-UR1- SAN LORENZO" label="42-COMISARIA N°100-UR1- SAN LORENZO">
						<option value="COMISARIA N°101-UR1-LA BANDA - GRAL. GUEMES" label="43-COMISARIA N°101-UR1-LA BANDA - GRAL. GUEMES">
						<option value="COMISARIA N°102-UR1- LA LONJA" label="44-COMISARIA N°102-UR1- LA LONJA">
						<option value="COMISARIA N°103-UR1-" label="45-COMISARIA N°103-UR1-">
						<option value="COMISARIA N°104-UR1-PALERMO" label="46-COMISARIA N°104-UR1-PALERMO">
						<option value="COMISARIA N°105-UR1- LA MERCED" label="47-COMISARIA N°105-UR1- LA MERCED">
						<option value="COMISARIA N°106-UR1- B° LIMACHE" label="48-COMISARIA N°106-UR1- B° LIMACHE">
						<option value="SUBCOMISARIA SAN LUIS-UR1-" label="49-SUBCOMISARIA SAN LUIS-UR1">
						<option value="SUBCOMISARIA GUACHIPAS-UR1-" label="50-SUBCOMISARIA GUACHIPAS-UR1">
						<option value="SUBCOMISARIA LA MERCED-UR1-" label="51-SUBCOMISARIA LA MERCED-UR1">
						<option value="SUBCOMISARIA LA VIÑA-UR1-" label="52-SUBCOMISARIA LA VIÑA-UR1">
						<option value="SUBCOMISARIA LA CALDERA-UR1-" label="53-SUBCOMISARIA LA CALDERA-UR1">
						<option value="SUBCOMISARIA CORONEL MOLDES-UR1-" label="54-SUBCOMISARIA CORONEL MOLDES-UR1">
						<option value="SUBCOMISARIA SANTA VICTORIA OESTE-UR1-" label="55-SUBCOMISARIA SANTA VICTORIA OESTE-UR1">
						<option value="SUBCOMISARIA VILLAA LAVALLE-UR1-" label="56-SUBCOMISARIA VILLAA LAVALLE-UR1">
						<option value="SUBCOMISARIA B° EL AUTODROMO-UR1-" label="57-SUBCOMISARIA B° EL AUTODROMO-UR1">
						<option value="SUBCOMISARIA V° ASUNCION-UR1-" label="58-SUBCOMISARIA V° ASUNCION-UR1">
						<option value="SUBCOMISARIA LAS COSTAS-UR1-" label="59-SUBCOMISARIA LAS COSTAS-UR1">
						<option value="SUBCOMISARIA CAMPO CASTAÑARES-UR1-" label="60-SUBCOMISARIA CAMPO CASTAÑARES-UR1">
						<option value="SUBCOMISARIA GRAND BOURG-UR1-" label="61-SUBCOMISARIA GRAND BOURG-UR1">
						<option value="SUBCOMISARIA EL BRODO-UR1-" label="62-SUBCOMISARIA EL BRODO-UR1">
						<option value="SUBCOMISARIA V° EL SOL-UR1-" label="63-SUBCOMISARIA V° EL SOL-UR1">
						<option value="SUBCOMISARIA LOS PINARES-UR1-" label="64-SUBCOMISARIA LOS PINARES-UR1">
						<option value="SUBCOMISARIA VAQUEROS-UR1-" label="65-SUBCOMISARIA VAQUEROS-UR1">
						<option value="SUBCOMISARIA LOLA MORA-UR1-" label="66-SUBCOMISARIA LOLA MORA-UR1">
						<option value="SUBCOMISARIA SAN JORGE-UR1-" label="67-SUBCOMISARIA SAN JORGE-UR1">
						<option value="SUBCOMISARIA B° SAN CARLOS-UR1-" label="68-SUBCOMISARIA B° SAN CARLOS-UR1">
						<option value="DESTACAMENTO COBOS-UR1-" label="69-DESTACAMENTO COBOS-UR1">
						<option value="DESTACAMENTO GUARDIA DE TRIBUNALES-UR1-" label="70-DESTACAMENTO GUARDIA DE TRIBUNALES-UR1">
						<option value="DESTACAMENTO SAN AGUSTIN-UR1-" label="71-DESTACAMENTO SAN AGUSTIN-UR1">
						<option value="DESTACAMENTO LA SILLETA-UR1-" label="72-DESTACAMENTO LA SILLETA-UR1">
						<option value="DESTACAMENTO ATOCHA-UR1-" label="73-DESTACAMENTO ATOCHA-UR1">
						<option value="DESTACAMENTO BETANIA-UR1-" label="74-DESTACAMENTO BETANIA-UR1">
						<option value="DESTACAMENTO SAN BERNARDO-UR1-" label="75-DESTACAMENTO SAN BERNARDO-UR1">
						<option value="DESTACAMENTO OLACAPATO-UR1-" label="76-DESTACAMENTO OLACAPATO-UR1">
						<option value="DESTACAMENTO NAZARENO-UR1-" label="77-DESTACAMENTO NAZARENO-UR1">
						<option value="DESTACAMENTO IRUYA-UR1-" label="78-DESTACAMENTO IRUYA-UR1">
						<option value="DESTACAMENTO TOLAR GRANDE-UR1-" label="79-DESTACAMENTO TOLAR GRANDE-UR1">
						<option value="DESTACAMENTO SAN IGNACIO-UR1-" label="80-DESTACAMENTO SAN IGNACIO-UR1">
						<option value="DESTACAMENTO DELMI-UR1-" label="81-DESTACAMENTO DELMI-UR1">
						<option value="DESTACAMENTO LOS COBRES-UR1-" label="82-DESTACAMENTO LOS COBRES-UR1">
						<option value="DESTACAMENTO B° DOCENTE-UR1-" label="83-DESTACAMENTO B° DOCENTE-UR1">
						<option value="DESTACAMENTO V° PALACIOS-UR1-" label="84-DESTACAMENTO V° PALACIOS-UR1">
						<option value="DESTACAMENTO LOS ALAMOS-UR1-" label="85-DESTACAMENTO LOS ALAMOS-UR1">
						<option value="DESTACAMENTO PARQUE INDUSTRIAL-UR1-" label="86-DESTACAMENTO PARQUE INDUSTRIAL-UR1">
						<option value="DESTACAMENTO CERRO 20 DE FEBRERO-UR1-" label="87-DESTACAMENTO CERRO 20 DE FEBRERO-UR1">
						<option value="DESTACAMENTO V° LOLA-UR1-" label="88-DESTACAMENTO V° LOLA-UR1">
						<option value="DESTACAMENTO SAN ANTONIO-UR1-" label="89-DESTACAMENTO SAN ANTONIO-UR1">
						<option value="DESTACAMENTO LA ISLA-UR1-" label="90-DESTACAMENTO LA ISLA-UR1">
						<option value="PUESTO UNIVERSITARIO CATOLICA-UR1-" label="91-PUESTO UNIVERSITARIO CATOLICA-UR1">
						<option value="PUESTO POLICIAL B° UNION-UR1-" label="92-PUESTO POLICIAL B° UNION-UR1">
						<option value="PUESTO PUENTE BLANCO-UR1-" label="93-PUESTO PUENTE BLANCO-UR1">
						<option value="PUESTO BALNEARIO CARLOS XAMENA-UR1-" label="94-PUESTO BALNEARIO CARLOS XAMENA-UR1">
						<option value="PUESTO POLICIAL CO.FRUT.TOS-UR1-" label="95-PUESTO POLICIAL CO.FRUT.TOS-UR1">
						<option value="PUESTO POLICIAL EL GALLINATO-UR1-" label="96-PUESTO POLICIAL EL GALLINATO-UR1">
						<option value="PUESTO POLICIAL BICENTENARIO-UR1-" label="97-PUESTO POLICIAL BICENTENARIO-UR1">
						</optgroup>

						
      					<optgroup label="UNIDAD REGIONAL N° 2-UR2-">
						<option value="DIVISION PERSONAL-UR2-" label="98- DIVISION PERSONAL-UR2-">
						<option value="DIVISION OPERACIONES-UR2-" label="99-DIVISION OPERACIONES-UR2-">
						<option value="DIVISION LOGISTICA-UR2-" label= "100-DIVISION LOGISTICA-UR2-">
						<option value="DIVISION JUDICIAL-UR2-" label="101-DIVISION JUDICIAL-UR2-">
						<option value="DIVISION BINESTAR POLICIAL-UR2-" label="102-DIVISION BINESTAR POLICIAL-UR2-">
						<option value="UNIDAD PROTECCION AL MENOR-UR2-" label="103-UNIDAD PROTECCION AL MENOR-UR2-">
						<option value="SECCION PREVENCION COMUNITARIA-UR2-" label="104-SECCION PREVENCION COMUNITARIA-UR2-">
						<option value="DIVISION SANIDAD-UR2-" label="105-DIVISION SANIDAD-UR2-">
						<option value="DIVISION FLUVIAL RIO BERMEJO-DB-UR2-" label="106-DIVISION FLUVIAL RIO BERMEJO-DB-UR2-">
						<option value="DIVISION CUERPO POLICIA FEMENINO-UR2-" label="107-DIVISION CUERPO POLICIA FEMENINO-UR2-">
						<option value="COMISARIA N° 20 ORAN-UR2-" label= "108-COMISARIA N° 20 ORAN-UR2-">
						<option value="COMISARIA N° 21 PICHANAL-UR2-" label="109-COMISARIA N° 21 PICHANAL-UR2-">
						<option value="COMISARIA N° 22 YRIGOYEN-UR2-" label="110-COMISARIA N° 22 YRIGOYEN-UR2-">
						<option value="COMISARIA N° 23 COLONIA SANTA ROSA-UR2-" label="111-COMISARIA N° 23 COLONIA SANTA ROSA-UR2-">
						<option value="COMISARIA N° 24 B° DOCENTE-UR2-" label="112-COMISARIA N° 24 B° DOCENTE-UR2-">
						<option value="COMISARIA N° 25 B° AEROPARQUE-UR2-" label="113-COMISARIA N° 25 B° AEROPARQUE-UR2-">
						<option value="SUBCOMISARIA AGUAS BLANCAS-UR2-" label="114-SUBCOMISARIA AGUAS BLANCAS-UR2-">
						<option value="SUBCOMISARIA 9 DE JULIO-UR2-" label="115-SUBCOMISARIA 9 DE JULIO-UR2-" >
						<option value="SUBCOMISARIA LAS PALEMRAS-UR2-" label="116-SUBCOMISARIA LAS PALEMRAS-UR2-">
						<option value="DESTACAMENTO URUNDEL-UR2-" label="117-DESTACAMENTO URUNDEL-UR2-">
						<option value="DESTACAMENTO LOS TOLDOS-UR2-" label="118-DESTACAMENTO LOS TOLDOS-UR2-">
						<option value="DESTACAMENTO LA UNION-UR2-" label="119-DESTACAMENTO LA UNION-UR2-" >
						<option value="DESTACAMENTO RIVADAVIA BANDA SUR-UR2-" label="120-DESTACAMENTO RIVADAVIA BANDA SUR-UR2-">
						<option value="DESTACAMENTO ISLA DE CAÑAS-UR2-" label="121-DESTACAMENTO ISLA DE CAÑAS-UR2-">
						<option value="DESTACAMENTO EL TABACAL-UR2-" label="122-DESTACAMENTO EL TABACAL-UR2-">
						<option value="DESTACAMENTO ABRAHAM BALUT-UR2-" label="123-DESTACAMENTO ABRAHAM BALUT-UR2-">
						<option value="DESTACAMENTO LOS NARANJOS-UR2-" label="124-DESTACAMENTO LOS NARANJOS-UR2-">
						<option value="PUESTO B° ESTACION-UR2-" label="125-PUESTO B° ESTACION-UR2-">
						<option value="PUESTO SAN VICENTE DE PAUL-UR2-" label="126-PUESTO SAN VICENTE DE PAUL-UR2-">
						<option value="PUESTO B° SAN CAYETANO-UR2-" label="127-PUESTO B° SAN CAYETANO-UR2-">
						<option value="PUESTO B° SANTA ROSA-UR2-" label="128-PUESTO B° SANTA ROSA-UR2-">
						</optgroup>


						<optgroup label="UNIDAD REGIONAL N° 3-UR3-">
						<option value="DIVISION PERSONAL-UR3-" label="129-DIVISION PERSONAL-UR3-">
						<option value="DIVISION OPERACIONES-UR3-" label="130-DIVISION OPERACIONES-UR3-">
						<option value="DIVISION LOGISTICA-UR3-" label="131-DIVISION LOGISTICA-UR3-">
						<option value="DIVISION JUDICIAL-UR3-" label="132-DIVISION JUDICIAL-UR3-">
						<option value="SECCION FINANZAS-UR3-" label="133-SECCION FINANZAS-UR3-">
						<option value="SECCION PREVENCION COMUNITARIA-UR3-" label="134-SECCION PREVENCION COMUNITARIA-UR3-">
						<option value="DIVISION SANIDAD-UR3-" label="135-DIVISION SANIDAD-UR3-">
						<option value="DIVISION CUERPO POLICIA FEMENINO-UR3-" label="136-DIVISION CUERPO POLICIA FEMENINO-UR3-">
						<option value="COMISARIA N° 30 METAN-UR3-" label="137-COMISARIA N° 30 METAN-UR3-">
						<option value="COMISARIA N° 31 ROSARIO DE LA FRONTERA-UR3-" label="138-COMISARIA N° 31 ROSARIO DE LA FRONTERA-UR3-">
						<option value="SUBCOMISARIA EL GALPON-UR3-" label="139-SUBCOMISARIA EL GALPON-UR3-">
						<option value="SUBCOMISARIA EL TALA-UR3-" label="140-SUBCOMISARIA EL TALA-UR3-">
						<option value="SUBCOMISARIA EL MIRADOR-UR3-" label="141-SUBCOMISARIA EL MIRADOR-UR3-">
						<option value="DESTACAMENTO LUMBRERAS-UR3-" label="142-DESTACAMENTO LUMBRERAS-UR3-">
						<option value="DESTACAMENTO RIO PIEDRAS-UR3-" label="143-DESTACAMENTO RIO PIEDRAS-UR3-">
						<option value="DESTACAMENTO LA CANDELARIA-UR3-" label="144-DESTACAMENTO LA CANDELARIA-UR3-">
						<option value="DESTACAMENTO EL JARDIN-UR3-" label="145-DESTACAMENTO EL JARDIN-UR3-">
						<option value="DESTACAMENTO EL POTRERO-UR3-" label="146-DESTACAMENTO EL POTRERO-UR3-">
						<option value="DESTACAMENTO ANTILLAS-UR3-" label="147-DESTACAMENTO ANTILLAS-UR3-">
						<option value="DESTACAMENTO SAN FELIPE-UR3-" label="148-DESTACAMENTO SAN FELIPE-UR3-">
						<option value="DESTACAMENTO EL NARANJO-UR3-" label="149-DESTACAMENTO EL NARANJO-UR3-">
						</optgroup>

						<optgroup label="UNIDAD REGIONAL N° 4-UR4-">
						<option value="DIVISION PERSONAL-UR4-" label="150-DIVISION PERSONAL-UR4-">
						<option value="DIVISION OPERACIONES-UR4-" label="151-DIVISION OPERACIONES-UR4-">
						<option value="DIVISION LOGISTICA-UR4-" label="152-DIVISION LOGISTICA-UR4-">
						<option value="DIVISION JUDICIAL-UR4-" label="153-DIVISION JUDICIAL-UR4-">
						<option value="SECCION FINANZAS-UR4-" label="154-SECCION FINANZAS-UR4-">
						<option value="SECCION PREVENCION COMUNITARIA-UR4-" label="155-SECCION PREVENCION COMUNITARIA-UR4-">
						<option value="DIVISION SANIDAD-UR4-" label="156-DIVISION SANIDAD-UR4-">
						<option value="DIVISION CUERPO POLICIA FEMENINO-UR4-" label="157-DIVISION CUERPO POLICIA FEMENINO-UR4-">
						<option value="OFICINA PRENSA Y DIFUSION-UR4-" label="158-OFICINA PRENSA Y DIFUSION-UR4-">
						<option value="COMISARIA N° 40 SALVADOR MAZZA-UR4-" label="159-COMISARIA N° 40 SALVADOR MAZZA-UR4-">
						<option value="COMISARIA N° 41 MOSCONI-UR4-" label="160-COMISARIA N° 41 MOSCONI-UR4-">
						<option value="COMISARIA N° 42 TARTAGAL-UR4-" label="161-COMISARIA N° 42 TARTAGAL-UR4-">
						<option value="COMISARIA N° 43 EMBARCACION-UR4-" label="162-COMISARIA N° 43 EMBARCACION-UR4-">
						<option value="COMISARIA N° 44 CNEL. JUAN SOLA-UR4-" label="163-COMISARIA N° 44 CNEL. JUAN SOLA-UR4-">
						<option value="COMISARIA N°45-UR4-" label="164-COMISARIA N°45-UR4-">
						<option value="SUBCOMISARIA AGUARAY-UR4-" label="165-SUBCOMISARIA AGUARAY-UR4-">
						<option value="SUBCOMISARIA VESPUCIO-UR4-" label="166-SUBCOMISARIA VESPUCIO-UR4-">
						<option value="SUBCOMISARIA SANTA VICTORIA ESTE-UR4-" label="167-SUBCOMISARIA SANTA VICTORIA ESTE-UR4-">
						<option value="DESTACAMENTO V° GUEMES-UR4-" label="168-DESTACAMENTO V° GUEMES-UR4-">
						<option value="DESTACAMENTO ACAMBUCO-UR4-" label="169-DESTACAMENTO ACAMBUCO-UR4-">
						<option value="DESTACAMENTO HICKMAN-UR4-" label="170-DESTACAMENTO HICKMAN-UR4-">
						<option value="DESTACAMENTO DRAGONES-UR4-" label="171-DESTACAMENTO DRAGONES-UR4-">
						<option value="DESTACAMENTO LOS BLANCOS-UR4-" label="172-DESTACAMENTO LOS BLANCOS-UR4-">
						<option value="DESTACAMENTO ALTO LA SIERRA-UR4-" label="173-DESTACAMENTO ALTO LA SIERRA-UR4-">
						<option value="DESTACAMENTO CORONEL CORNEJO-UR4-" label="174-DESTACAMENTO CORONEL CORNEJO-UR4-">
						<option value="DESTACAMENTO BALLIVIAN-UR4-" label="175-DESTACAMENTO BALLIVIAN-UR4-">
						<option value="DESTACAMENTO ALTO VERDE-UR4-" label="176-DESTACAMENTO ALTO VERDE-UR4-">
						<option value="DESTACAMENTO PADRE LOZANO-UR4-" label="177-DESTACAMENTO PADRE LOZANO-UR4-">
						<option value="DESTACAMENTO AEROPUERTO-UR4-" label="178-DESTACAMENTO AEROPUERTO-UR4-">
						<option value="PUESTO POLICIAL PLUMA DE PATO-UR4-" label="179-PUESTO POLICIAL PLUMA DE PATO-UR4-">
						</optgroup>
						

						<optgroup label="UNIDAD REGIONAL N° 5-UR5-">
						<option value="DIVISION PERSONAL-UR5-" label="180-DIVISION PERSONAL-UR5-">
						<option value="DIVISION OPERACIONES-UR5-" label="181-DIVISION OPERACIONES-UR5-">SECTOR-82</option>
						<option value="DIVISION LOGISTICA-UR5-" label="182-DIVISION LOGISTICA-UR5-">
						<option value="DIVISION JUDICIAL-UR5-" label="183-DIVISION JUDICIAL-UR5-">
						<option value="SECCION FINANZAS-UR5-" label="184-SECCION FINANZAS-UR5-">
						<option value="DIVISION SANIDAD-UR5-" label="185-DIVISION SANIDAD-UR5-">
						<option value="POLICIA INFANTIL ECOLOGICA JV GONZALEZ-UR5-" label="186-POLICIA INFANTIL ECOLOGICA JV GONZALEZ-UR5-">
						<option value="COMISARIA N° 50 J.V. GONZALEZ-UR5-" label="187-COMISARIA N° 50 J.V. GONZALEZ-UR5-">
						<option value="COMISARIA N° 51 LAS LAJITAS-UR5-" label="188-COMISARIA N° 51 LAS LAJITAS-UR5-">
						<option value="SUBCOMISARIA EL DORADO-UR5-" label="189-SUBCOMISARIA EL DORADO-UR5-">
						<option value="SUBCOMISARIA EL QUEBRACHAL-UR5-" label="190-SUBCOMISARIA EL QUEBRACHAL-UR5-">
						<option value="DESTACAMENTO GAONA-UR5-" label="191-DESTACAMENTO GAONA-UR5-">
						<option value="DESTACAMENTO RIO DEL VALLE-UR5-" label="192-DESTACAMENTO RIO DEL VALLE-UR5-">
						<option value="DESTACAMENTO NUESTRA SEÑORA DE TALAVERA-UR5-" label="193-DESTACAMENTO NUESTRA SEÑORA DE TALAVERA-UR5-">
						<option value="DESTACAMENTO 25 DE JUNIO-UR5-" label="194-DESTACAMENTO 25 DE JUNIO-UR5-">
						<option value="DESTACAMENTO SAN JOSE DE ORQUERA-UR5-" label="195-DESTACAMENTO SAN JOSE DE ORQUERA-UR5-">
						<option value="DESTACAMENTO LOS ROSALES-UR5-" label="196-DESTACAMENTO LOS ROSALES-UR5-">
						<option value="DESTACAMENTO CORONEL MOLLINERO-UR5-" label="197-DESTACAMENTO CORONEL MOLLINERO-UR5-">
						<option value="DESTACAMENTO TOLLOCHE-UR5-" label="198-DESTACAMENTO TOLLOCHE-UR5-">
						<option value="DESTACAMENTO PIQUETE CABAO-UR5-" label="199-DESTACAMENTO PIQUETE CABAO-UR5-">
						<option value="DESTACAMENTO GENERAL PIZARRO-UR5-" label="200-DESTACAMENTO GENERAL PIZARRO-UR5-">
						</optgroup>		



						<optgroup label="UNIDAD REGIONAL N° 6-UR6-">				
						<option value="AYUDANTIA UNIDAD REGIONAL N° 6-UR6-" label="201-AYUDANTIA UNIDAD REGIONAL N° 6-UR6-">
						<option value="DIVISION PERSONAL-UR6-" label="202-DIVISION PERSONAL-UR6-">
						<option value="DIVISION OPERACIONES-UR6-" label="203-DIVISION OPERACIONES-UR6-">
						<option value="DIVISION SEGURIDAD Y ORIENTACION AL TURISTA-UR6-" label="204-DIVISION SEGURIDAD Y ORIENTACION AL TURISTA-UR6-">
						<option value="DIVISION JUDICIAL-UR6-" label="205-DIVISION JUDICIAL-UR6-">
						<option value="SECCION FINANZAS-UR6-" label="206-SECCION FINANZAS-UR6-">
						<option value="DIVISION COMUNITARIA-UR6-" label="207-DIVISION COMUNITARIA-UR6-">
						<option value="COMISARIA N° 60 CAFAYATE-UR6-" label="208-COMISARIA N° 60 CAFAYATE-UR6-">
						<option value="COMISARIA N° 61 CACHI-UR6-" label="209-COMISARIA N° 61 CACHI-UR6-">
						<option value="SUBCOMISARIA SAN CARLOS-UR6-" label="210-SUBCOMISARIA SAN CARLOS-UR6-">
						<option value="SUBCOMISARIA MOLINOS-UR6-" label="211-SUBCOMISARIA MOLINOS-UR6-">
						<option value="DESTACAMENTO ANIMANA-UR6-" label="212-DESTACAMENTO ANIMANA-UR6-">
						<option value="DESTACAMENTO ANGASTACO-UR6-" label="213-DESTACAMENTO ANGASTACO-UR6-">
						<option value="DESTACAMENTO LA POMA-UR6-" label="214-DESTACAMENTO LA POMA-UR6-">
						<option value="DESTACAMENTO PAYOGASTA-UR6-" label="215-DESTACAMENTO PAYOGASTA-UR6-">
						<option value="DESTACAMENTO SECLANTAS-UR6-" label="216-DESTACAMENTO SECLANTAS-UR6-">
						<option value="DESTACAMENTO PALERMO OESTE-UR6-" label="217-DESTACAMENTO PALERMO OESTE-UR6-">
						<option value="DESTACAMENTO LURACATAO-UR6-" label="218-DESTACAMENTO LURACATAO-UR6-">
						</optgroup>


						<option value="SUB JEFATURA"><b> SUB JEFATURA</b></option>
						<option value="DIRECCION CENTRO DE COORDINACION OPERATIVA-">SECTOR-82</option>
						<option value="DESTACAMENTO ANIMANA-UR6-">SECTOR-82</option>
						<option value="DESTACAMENTO ANGASTACO-UR6-">SECTOR-82</option>
						<option value="DESTACAMENTO LA POMA-UR6-">SECTOR-82</option>
						<option value="DESTACAMENTO PAYOGASTA-UR6-">SECTOR-82</option>
						<option value="DESTACAMENTO SECLANTAS-UR6-">SECTOR-82</option>
						<option value="DESTACAMENTO PALERMO OESTE-UR6-">SECTOR-82</option>
						<option value="DESTACAMENTO LURACATAO-UR6-">SECTOR-82</option>


						
						
						











					</select>  
























						
						<label for="ACCIONAR">ACCIONAR: </label>
					<select  name="ACCIONAR" required><br><br>
						<option value="ACCIONAR DE MEJORA">ACCIONAR DE MEJORA</option>
						<option value="ACCIONAR COMUNITARIO">ACCIONAR COMUNITARIO</option>  
						<option value="ACCIONAR EDUCATIVO">ACCIONAR EDUCATIVO</option> 
						<option value="ACCIONAR POLICIAL">ACCIONAR POLICIAL</option>
						<option value="AGRADECIMIENTO">AGRADECIMIENTO</option> 
						
					</select><br><br>
		 


						<label for="FECHA">Fecha: </label>
						<input type="date" id="FECHA" name="FECHA"><br><br>

						<label for="DETALLE">DETALLE:</label>
 						<textarea name="DETALLE" id="DETALLE" cols="70" rows="10" required></textarea><br><br>


						<label for="CANTIDAD DE BENEFCIARIOS">CANTIDAD DE BENEFICIARIOS: </label>
						<input type="text" id="CANT_BENEF" name="CANT_BENEF"><br><br>

						<label for="DEPENDENCIA QUE INTERVIENE EN EL ACCIONAR">DEPENDENCIA QUE INTERVIENE EN EL ACCIONAR: </label>
						<input type="text" id="DEPEND_INTERV" name="DEPEND_INTERV"><br><br>


						<label for="FECHACARGA">FECHA DE CARGA: </label>
						<input type="date" id="FECHARCARGA" name="FECHACARGA"><br><br>

						<label for="PERSONAL">PERSONAL: </label>
						<input type="text" id="PERSONAL" name="PERSONAL"><br><br>

						<input type="submit" value="Guardar">
						<input type="reset" value="Reestablecer">
					</form>
		</article>
	</section>

<?php
	
	include'footer.php';

/*}else{
	echo "debe iniciar sesion";

}*/

?>