<?php
try
{
	$db = new PDO('mysql:host=127.0.0.1;dbname=listoftext;charset=utf8', 'root', '223556Rr&');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>