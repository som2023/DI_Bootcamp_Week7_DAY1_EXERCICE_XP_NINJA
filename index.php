<?php
class User
{
  public $firstname;
  
  public function __construct($fname)
  {
    $this->firstname= $fname;
  }
   
  public function hello()
  {

    echo "Hello, ". $this->firstname;
    return $this;
  }

  public function register()
  {

    echo ">> registered";
    return $this;
  }
  public function mail()
  {
    echo" email sent \n";
     
  }
  
}
 

 function test()
{

  $user1 = new User("Jane");
  
  $user1->hello()->register()->mail();
    
}
test();
?>