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
  $contacts = file('./data/data.csv');
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
  } else {
    include "./components/register.php";
  }
}

function search(): void
{
  include "./components/search.php";
}

function delete(): void
{
  $filePath = './data/data.csv';
  $contacts = file($filePath);
  unset($contacts[$_GET['id']]);
  unlink($filePath);

  $newFile = fopen($filePath, "a+");
  foreach ($contacts as $contact) {
    fwrite($newFile, $contact);
  }
  fclose($newFile);

  $message = "Contato excluído com sucesso!";
  include "./components/message.php";
}

function edit(): void
{
  $filePath = './data/data.csv';
  $contacts = file($filePath);
  $contactToEdit = explode(",", $contacts[$_GET['id']]);

  if ($_POST) {
    $contacts[$_GET['id']] = "{$_POST["name"]},{$_POST["email"]},{$_POST["phone"]}" . PHP_EOL;
    unlink($filePath);

    $newFile = fopen($filePath, "a+");
    foreach ($contacts as $contact) {
      fwrite($newFile, $contact);
    }
    fclose($newFile);

    $message = "Contato editado com sucesso!";
    include "./components/message.php";
  } else {
    include "./components/edit.php";
  }
}
