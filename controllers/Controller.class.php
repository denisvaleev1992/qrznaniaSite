<?php
abstract class Controller
{
    
        

    public function __construct()
    {
        
    }

    public function callAction()
    {
        
        
            $a=$this->action_index();
            return $a;

        
    }

   

  

}
?>