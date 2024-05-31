<?php

	$url = "localhost/000servicios/014/servidor/index.php/usuario";
	
	$url = str_replace(' ', '%20', $url);
	$data = array(
		'nombre' => 'Manuel',
		'apellidos' => 'Campillo Mesas',
		'telefono' => '666554433',
		'email' => 'erewrwe@ddsjj.es',
		'direccion' => 'Orujo 12',
		'localidad' => 'Alcobendas',
		'user' => 'campillo',
		'password' => 'zzz',
		'perfil' => '2'	
	);
	$payload = json_encode(array("datos" => $data));
	
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);	
	curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HEADER, false);
	$data = curl_exec($curl);
	$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);
	
	if ($httpcode == 200){echo "Registro insertado.";}
	if ($httpcode == 500){echo "Error 500. Internal server error";}
	if ($httpcode == 404){echo "Error 404. Page not found";}
	
?>







