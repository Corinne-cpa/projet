<?php

require_once 'framework/Controller.php';
require_once 'model/Enfants.php';
require_once 'model/Parents.php';

class ControllerEnfants extends Controller {

    private $enfant;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->enfant = new Enfants();
    }

    /**
     * 
     * @throws Exception
     * 
     */
 public function confirmEnrg(){
        $this->generateView();
 }
 public function inscrire()
    {
        if ($this->request->existingParameter("inputNom") && $this->request->existingParameter("inputPrenom") &&
                $this->request->existingParameter("inputDn") && $this->request->existingParameter("inputParent")) {
     
            $nom = $this->request->getParameter("inputNom");
            $prenom = $this->request->getParameter("inputPrenom");
            $dn = $this->request->getParameter("inputDn");
            $parent = $this->request->getParameter("inputParent");
           
            $this->enfant->addEnfant($nom, $prenom, $dn, $parent);
            $this->redirect("Enfants/confirmEnrg");
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

    // 
    public function index() {
        $this->generateView();
    }
    
    /**
     * Lister tous les enfants
     */
    public function getEnfants(){
        $this->generateView();
    }
    
    public function liste() {
         $enfant = $this->enfant->getEnfants();
        $this->generateView(array('enfant' => $enfant));
       
    }
    
    /**
     * Lister les enfants d'un parent
     
    public function getEnfantsParent($parent){
        $this->generateView();
    }
    
     *
     */
    
    /**
     * Ajouter un enfant
     */
    public function addEnfant(){
        $this->generateView();
    }
    
    
    
        
    }
