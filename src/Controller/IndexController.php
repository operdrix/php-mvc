<?php

namespace App\Controller;

class IndexController extends AbstractController
{

  public function home()
  {
    echo $this->twig->render("index.html.twig");
  }
}
