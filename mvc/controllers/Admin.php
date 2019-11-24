<?php

// http://localhost/live/Home/Show/1/2

class Admin extends Controller{

    // Must have SayHi()
    function SayHi(){
        
        $this->view("MasterAdmin1", [
            "Mau"=>"red"
        ]);

    }

    function Show(){        
        // Call Models
        

        // Call Views
        $this->view("MasterAdmin1", [
            "Mau"=>"red"
        ]);
    }
    
}
?>