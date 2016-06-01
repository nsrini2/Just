<?php
class UserPersonalDetails extends DB\SQL\Mapper
{

    public function __construct(DB\SQL $db)
    {
      parent::__construct($db, 'user_personal_details_m');
    }

    public function all()
    {
      $this->load();
      return $this->query;
    }

    public function add()
    {
      $this->copyFrom('POST');
      $this->save();
    }

    public function getById($id)
    {
      $this->load(array('User_ID=?',$id));
      $this->copyTo('POST');
    }

   public function edit($id)
   {
     $this->load(array('User_ID=?',$id));
     $this->copyFrom('POST');
     $this->save();
   }

   public function delete($id)
   {
     $this->load(array('User_ID=?',$id));
     $this->erase();
   }

   public function getUserIdByAccount($account)
   {
     $this->load(array('Login=?',$account));
     return $this->User_ID;
   }

   public function getUserIdByEmail($email)
   {
     $this->load(array('Email=?', $email));
     return $this->User_ID;
   }

}
