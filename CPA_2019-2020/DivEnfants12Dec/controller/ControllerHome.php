<?php

require_once 'framework/Controller.php';
//require_once 'model/Dummy.php';

/**
 * Contrôleur des actions liées aux billet
 *
 */
class ControllerHome extends Controller {

    //private $dummy;

    /**
     * Constructeur 
     */
    public function __construct() {
        //$this->dummy = new Dummy();
    }

    // Affiche les détails 
    public function index() {
        //$texteBienvenue = $this->dummy->getTexteBienvenue();
        
        $this->generateView();
    }
   
}

