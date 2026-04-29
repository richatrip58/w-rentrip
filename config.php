<?php
/*
  DB config reads from environment variables set by Kubernetes.
  Falls back to localhost defaults for local dev without K8s.
*/
define('DB_SERVER',   getenv('DB_SERVER')   ?: 'localhost');
define('DB_USERNAME', getenv('DB_USERNAME') ?: 'root');
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: '');
define('DB_NAME',     getenv('DB_NAME')     ?: 'w_rentrip');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn == false) {
    die('Error: Cannot connect to database');
}
?>
