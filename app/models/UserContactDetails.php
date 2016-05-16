<?php
class UserContactDetails extends DB\SQL\Mapper{
    public function __construct(DB\SQL $db){
      parent::__construct($db,'user_contact_details');
    }

    public function all(){
      $this->load();
      return $this->query;
    }

    public function add(){
      $this->copyFrom('POST');
      $this->save();
      $this->reset();
    }

    public function getById($id){
      $this->load(array('User_ID=?',$id));
      $this->copyTo('POST');
    }

    public function edit($id){
      $this->load(array('User_ID=?',$id));
      $this->copyFrom('POST');
      $this->update();
      $this->reset();
    }

    public function delete($id){
      $this->load(array('User_ID=?',$id));
      $this->erase();
    }
}
?>
