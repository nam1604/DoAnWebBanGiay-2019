<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    // Must have SayHi()
    function SayHi(){
        echo " da fix htacass";

    }

    function Show(){        
        // Call Models

        // Call Views
        $this->view("MasterPage1", [
            "Page"=>"ss",
            "Mau"=>"red",   
        ]);
    }
}
?>