<?php

require_once 'framework/Controller.php';
require_once 'model/Orgjeux.php';
require_once 'model/Jeux.php';

class ControllerOrgjeux extends Controller {

    private $orgjeux;
    
    /**
     * Constructeur 
     */
    public function __construct() {
        $this->orgjeux = new Orgjeux();
        
    }

    /**
     * 
     * @throws Exception
     * 
     */
 public function ConfirmOrg(){
        $this->generateView();
 }
 public function inscrire()
    {
        if ($this->request->existingParameter("inputJeux") && $this->request->existingParameter("inputDate")
                ) {
     
            $jeux = $this->request->getParameter("inputJeux");
            $date = $this->request->getParameter("inputDate");
            
            $this->orgjeux->addOrg($jeux, $date);
            $this->redirect("Orgjeux/ConfirmOrg");
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
    public function addOrg(){
        $this->generateView();
    }
    
    public function liste() {
         $orgjeux = $this->orgjeux->getOrg();
        $this->generateView(array('orgjeux' => $orgjeux));
       
    }
    
    public function getOrg (){
         $this->generateView();
    
        
    }
}