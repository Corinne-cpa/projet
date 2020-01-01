<?php

require_once 'framework/Controller.php';
require_once 'model/Jeux.php';

/**

  //Contrôleur des actions liées aux jeux
 
 **/

class ControllerJeux extends Controller



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
        $this->generateView();
    }
    public function addJeux (){
        $this->generateView();
    }
    
public function confirmAjout (){
       $this->generateView();

    }
    
    
            
         public function inscrire()
    {
        if ($this->request->existingParameter("inputNomJeu") && $this->request->existingParameter("inputAgemin") &&
                $this->request->existingParameter("inputAgemax")) {
     
            $nomJeu = $this->request->getParameter("inputNomJeu");
            $agemin = $this->request->getParameter("inputAgemin");
            $agemax = $this->request->getParameter("inputAgemax");
            
           
            $this->jeux->addJeux($nomJeu, $agemin, $agemax);
           
            $this->redirect("Jeux/confirmAjout");
           
           
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }   
    
    
}
?>
   




