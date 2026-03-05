<?php
$nome;
$id;
$cpf;

$usuario = $nome ?? $id ?? $cpf ?? "Um cara aí";

echo $usuario;