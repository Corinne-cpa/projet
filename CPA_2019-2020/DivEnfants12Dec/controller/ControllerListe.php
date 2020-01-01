<?php

require_once 'framework/Controller.php';
require_once 'model/Jeux.php';

/**

  //Contrôleur des actions liées aux jeux
 
 **/

class ControllerListe extends Controller



{

     private $jeux;

    /**
     * Constructeur 
     * 
     */
     
    public function __construct() {
        $this->jeux = new Jeux();
    }

     public function index() {
         $jeux = $this->jeux->getJeux();
        $this->generateView(array('jeux' => $jeux));
       
    }
    public function getJeux (){
         $this->generateView();
       
    }
    
  

    
    
      
    
}
?>
   




