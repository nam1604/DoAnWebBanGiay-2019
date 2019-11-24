<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    // Must have SayHi()
    function SayHi(){
        $this->view("MasterPage1", [
            "Page"=>"ss",
            "Mau"=>"red",   
        ]);

    }

    function Show(){        
        // Call Models

        // Call Views
       
    }
}
?>