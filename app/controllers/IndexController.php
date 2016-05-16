<?php

class IndexController extends BaseController{

function Home(){
    echo \Template::instance()->render("home.html");
  }

  function AboutUs(){
    echo "Welcome to Ju.St!";
  }

}

?>
