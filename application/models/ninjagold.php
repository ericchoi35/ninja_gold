<?php 

class NinjaGold extends CI_Model {

    function bank($location){
       
        if($location == 'farm')
        {    
            $gold = rand(10,20);  
        }
        else if($location == 'cave')
        {
            $gold = rand(5,10);
        }
        else if($location == 'house')
        {
            $gold = rand(2,5);
        }
        else if($location == 'casino')
        {
            $gold = rand(-50,50);
        }

        //setting new total gold
        $this->session->set_userdata('totalGold', $this->session->userdata('totalGold') + $gold);

        //setting activity log
        date_default_timezone_set('UTC');
        $time = date('(Y/n/t h:i A)', time());

        if($gold >=0)
        {
            $msg = "<p class='green'>Earned " . $gold . " golds from the " . $location . "! " . $time . "</p>";
        }
        else
        {
            $msg = "<p class='red'>Entered a casino and lost " . $gold . " golds... ouch.. " . $time . "</p>";
        }
        $append = $msg . $this->session->userdata('activities');
        $this->session->set_userdata('activities', $append);
    }
}

?>