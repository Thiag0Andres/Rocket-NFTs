<?php

$conn = mysqli_connect("localhost", "root", "Thiago@99");

$db = mysqli_select_db($conn, "meuSite");

/*
if ($conn) {
  echo "Conexão estabelecida com sucesso";
} else {
  echo "Erro na conexão com banco de dados.";
}
*/