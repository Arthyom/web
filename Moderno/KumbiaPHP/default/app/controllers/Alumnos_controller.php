<?php
class AlumnosController extends RestController {

    function getAll()   {
            $this->data = (new Alumno)->find();
        
    }

    function Post()   {
        
        
        $this->data =  json_decode( file_get_contents('php://input') );
    
}

    // function index() {
    // }

    // function create() {
        
    // }

}