<?php

namespace TanzilalGummilang\PZN\PHP\MVC\Middleware;


interface Middleware
{
  function before(): void;
}