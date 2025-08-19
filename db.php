<?php
define('DB_HOST', "127.0.0.1");
define('DB_NAME', "cadastro");
define('DB_USER', "ROOT");
define('DB_PASS', "");

TRY {
  $PDO=NEW PDO(
    "mysql:host=".DB_HOST. ";dbname=" .DB_NAME. ";charset=utf8mb4",
    DB_USER, DB_PASS,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
}catch (PDOExeption $e){
  die("Erro de conexão:" . $e->getMessage());
}
  >
