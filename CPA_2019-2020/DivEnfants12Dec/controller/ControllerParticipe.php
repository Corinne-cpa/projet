<?php

require_once 'framework/Controller.php';
require_once 'model/Participe.php';
require_once 'model/Orgjeux.php';
require_once 'model/Enfants.php';

class ControllerParticipe extends Controller {

    private $participe;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->participe = new Participe();
    }

    /**
     * 
     * @throws Exception
     * 
     */
 public function ConfirmPart(){
        $this->generateView();
 }
 public function inscrire()
    {
        if ($this->request->existingParameter("inputIdenf") && $this->request->existingParameter("inputIdOrgjeu")
                ) {
     
            $idenf = $this->request->getParameter("inputIdenf");
            $idOrgjeu = $this->request->getParameter("inputIdOrgjeu");
            
            $this->participe->addParticipant($idenf, $idOrgjeu);
            $this->redirect("Participe/ConfirmPart");
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

    // 
    public function index() {
        $this->generateView();
    }
    
    /**
     * Ajouter un enfant
     */
    public function addParticipant(){
        $this->generateView();
    }
    
    
    
        
    }
