<?php

require_once 'framework/Controller.php';
require_once 'model/Parents.php';
require_once 'model/Admin.php';

/**
 * Contrôleur gérant la connexion au site
 *

 */
class ControllerLogin extends Controller
{
    private $admin;
    private $parent;

    public function __construct()
    {
        $this->admin = new Admin();
        $this->parent = new Parents();
    }

    public function index()
    {
        $this->generateView();
    }

    public function loginParent()
    {
        if ($this->request->existingParameter("inputEmail") && $this->request->existingParameter("inputPassword")) {
            $email = $this->request->getParameter("inputEmail");
            $mdp = $this->request->getParameter("inputPassword");
            if ($this->parent->connect($email, $mdp)) {
                $this->parent->connect($email, $mdp);
                $this->redirect("parent");
            }
            else
                $this->generateView(array('msgErreur' => 'Parent inconnu'),
                            "index");
        }
        else
            throw new Exception("Action impossible : email ou mot de passe non défini");
    }
    public function loginAdmin()
    {
       if ($this->request->existingParameter("inputLogin") && $this->request->existingParameter("inputPassword")) {
            $login = $this->request->getParameter("inputLogin");
            $mdp = $this->request->getParameter("inputPassword");
            if ($this->admin->connect($login, $mdp)) {
                $this->admin->connect($login, $mdp);
                $this->redirect("login");
            }
            else
                $this->generateView(array('msgErreur' => 'Administrateur inconnu'),
                        "index");
        }
        else
            throw new Exception("Action impossible : login ou mot de passe non défini"); 
    }        
    
    public function deconnecter()
    {
        $this->request->getSession()->destroy();
        $this->redirect("Home");
    }
    
    /**
     * Page d'inscription
     */
    public function register(){
        $this->generateView();
    }
     public function confirmregister(){
        $this->generateView();
    }
    
     public function confirmConnect(){
        $this->generateView();
    }

    public function inscrire()
    {
        if ($this->request->existingParameter("inputNom") && $this->request->existingParameter("inputPrenom") &&
                $this->request->existingParameter("inputEmail") && $this->request->existingParameter("inputPassword") &&
                $this->request->existingParameter("inputAdresse") && $this->request->existingParameter("inputTelephone")) {
            $nom = $this->request->getParameter("inputNom");
            $prenom = $this->request->getParameter("inputPrenom");
            $email = $this->request->getParameter("inputEmail");
            $password = $this->request->getParameter("inputPassword");
            $adresse = $this->request->getParameter("inputAdresse");
            $telephone = $this->request->getParameter("inputTelephone");

            $this->parent->ajoutParent($nom, $prenom,$adresse, $telephone, $email, $password);
            
            $this->redirect("login/confirmregister");
        }
        else
            throw new Exception("Action impossible : tous les paramètres ne sont pas définis");
    }

    /**
     * Enregistre un parent connecté dans la session et redirige vers la page d'accueil
     * 
     * @param type $email
     * @param type $mdp
     */
    private function accueillirParent($email, $mdp)
    {
        $parent = $this->parent->getParent($email, $mdp);
        $this->request->getSession()->setAttribute("parent", $parent);
      /*  $this->redirect("parent/addEnfant");**/
    }

}
