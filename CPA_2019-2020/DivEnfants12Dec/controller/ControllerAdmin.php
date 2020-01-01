<?php

require_once 'framework/Controller.php';
require_once 'model/Admin.php';

/**
 * Contrôleur gérant la connexion au site
 *

 */
class ControllerAdmin extends Controller
{
    private $admin;
    

    public function __construct()
    {
        $this->admin = new Admin();
      
    }

    public function index()
    {
        $this->generateView();
    }

     public function confirmConnect(){
        $this->generateView();
    }
    
    public function loginAdmin()
    {
       if ($this->request->existingParameter("inputLogin") && $this->request->existingParameter("inputPassword")) {
            $login = $this->request->getParameter("inputLogin");
            $mdp = $this->request->getParameter("inputPassword");
            if ($this->admin->connect($login, $mdp)) {
                $this->admin->connect($login, $mdp);
                $this->redirect("admin/confirmConnect");
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
    
   
    
     

   

}
