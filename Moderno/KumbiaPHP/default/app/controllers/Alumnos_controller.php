<?php
class AlumnosController extends RestController {

    function getAll()   {
            $this->data = (new Alumno)->find();
        
    }

    function Post()   {
        $this->data = "se ejecuto post";
    
}

    // function index() {
    // }

    // function create() {
        
    // }

}