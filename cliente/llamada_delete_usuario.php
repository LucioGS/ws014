<?php

	$url = "localhost/000servicios/014/servidor/index.php/usuario/24";
	
	$url = str_replace(' ', '%20', $url);
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HEADER, false);
	$data = curl_exec($curl);
	$httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	curl_close($curl);
	
	if ($httpcode == 200){echo "Registro borrado.";}
	if ($httpcode == 500){echo "Error 500. Internal server error";}
	if ($httpcode == 404){echo "Error 404. Page not found";}
	
?>


