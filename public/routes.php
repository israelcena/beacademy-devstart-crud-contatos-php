<?php
$url = explode("?", $_SERVER['REQUEST_URI']);

match ($url[0]) {
  "/" => include "./components/main.php",
  default => include "./components/404.php",
};
