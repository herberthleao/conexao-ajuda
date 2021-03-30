<?php
class database
{
    private static $conn;
    $localhost = "localhost";
    $user = "root";
    $passw = "";
    $banco = "conexao-ajuda";
    public static function getConn()
    $pdo = new PDO("mysql:dbname=" . $banco . "; host=" . $localhost, $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->query("SELECT * FROM voluntario");
$sql->execute();
}