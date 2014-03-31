<?php
/*
$con is een variabele en het = teken betekent dat de $con gelijk is
aan wat er achter het = teken komt.

mysqli_connect('localhost', 'root','', film) 
betekent connect met de database film uit localhost en gebruik root als gebruikers naam en '' als wachtwoord.
dus mysqli_connect('localhost', 'username','wachtwoord''database naar keuze')

*/
$con = mysqli_connect('localhost','root','','knowledge_database' );

/*
if betekent als dit aan een bepaalde waarde voldoet dan krijg je dit te zien of dan doet hij dit.
in dit geval zegt hij, geef een mysqli_connect_error (gewoon een error) als ($con) niet werkt 
dus als de connectie met de database niet werkt.

Met echo zeg je dat je dit op je webpagina wilt dus "kan geen connectie maken met de database" komt op je webpagina
(zonder de "") Met echo kan je ook gewoon haakjes als een html gebruiken.
exit(); zegt dat het script stopt  met laden als je een error krijgt (dus dan krijg je de error message)
*/

if (mysqli_connect_error($con)){
	echo "Kan geen connectie maken met de database";
	exit();
}


?>