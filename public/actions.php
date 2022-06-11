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
  include "./components/register.php";
}

function search(): void
{
  include "./components/search.php";
}
