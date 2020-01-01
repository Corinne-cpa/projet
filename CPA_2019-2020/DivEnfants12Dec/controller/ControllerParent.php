<?php

require_once 'framework/Controller.php';
require_once 'model/Parents.php';
require_once 'model/Enfants.php';

/**
 * Contrôleur des actions liées aux parents
 *
 */
class ControllerParent extends Controller {

    private $parent;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->parent = new Parents();
    }

    // 
    public function index() {
        $this->generateView();
    }
    
    public function liste() {
         $parent = $this->parent->getParents();
        $this->generateView(array('parent' => $parent));
       
    }
    
    public function getParents (){
         $this->generateView();
    
        
    }
    /**
     * Ajouter un enfant
     *
    public function addEnfant(){
        $this->generateView();
    }
    
    **/
    

    
}

