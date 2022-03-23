<?php

namespace TanzilalGummilang\PZN\PHP\MVC\Middleware;


class AuthMiddleware implements Middleware
{
  function before(): void
  {
    session_start();
    if(!isset($_SESSION['login'])){
      header('location: /login');
      exit();
    }
  }
}