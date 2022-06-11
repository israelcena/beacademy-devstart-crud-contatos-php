<?php
$url = explode("?", $_SERVER['REQUEST_URI']);
include "./actions.php";

match ($url[0]) {
  "/" => home(),
  "/listar" => listAll(),
  "/cadastrar" => register(),
  "/buscar" => search(),
  "/edit" => search(),
  "/delete" => delete(),
  default => notFound(),
};
