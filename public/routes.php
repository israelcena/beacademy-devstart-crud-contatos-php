<?php
$url = explode("?", $_SERVER['REQUEST_URI']);
include "./actions.php";

match ($url[0]) {
  "/" => home(),
  default => notFound(),
};
