<?php
  class BaseController{
  protected $f3;
  protected $db;
  protected $logger;

   function beforeroute(){
       $this->f3->set('ERRORMSG','');
    }

    function afterroute(){
       echo Template::instance()->render('layout.html');
    }

    function __construct(){
      $f3=Base::instance();
      $this->f3=$f3;
      $this->logger=new Log('error.log');

      $db = new DB\SQL($f3->get('devdb'), $f3->get('devdbusername'), $f3->get('devdbpassword'),
      array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));

      $this->db=$db;
    }
}
