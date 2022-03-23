<?php

namespace TanzilalGummilang\PZN\PHP\MVC\Controller;

class ProductController
{
  function categories(string $productsId, string $categoryId): void
  {
    echo "PRODUCT $productsId CATEGORY $categoryId";
  }
}