<?php

function home(): void
{
  include "./components/main.php";
}

function notFound(): void
{
  include "./components/404.php";
}

function listAll(): void
{
  include "./components/list.php";
}

function register(): void
{
  if ($_POST) {
    $file = fopen('./data/data.csv', 'a+');
    fwrite($file, "{$_POST["name"]},{$_POST["email"]},{$_POST["phone"]}" . PHP_EOL);
    fclose($file);
    $message = "Contato registrado com sucesso!";
    include "./components/message.php";
    include "./components/list.php";
  } else {
    include "./components/register.php";
  }
}

function search(): void
{
  include "./components/search.php";
}
