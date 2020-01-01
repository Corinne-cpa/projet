<?php

require_once 'Framework/Model.php';

/**
 * 
 * 
 * 
 */
class Admin extends Model {

    /**
     * Connexion de l administrateur
     * 
     * @return type
     */
    public function connect($login, $pwd) {
        $sql = "select ADMIN_ID from T_ADMIN where ADMIN_LOGIN=? and ADMIN_PWD=?";
        $admin = $this->executeRequest($sql, array($login, $pwd));
        return ($admin->rowCount() == 1);
    }
    
    public function profileAdmin($idAdmin){
        $sql = "select ADMIN_LOGIN from t_admin where ADMIN_ID=?";
        $admin = $this->executeRequest($sql, array($idAdmin));
        return($admin);
    }
    
    public function updateAdmin($login, $password, $id){
        $sql = "update set ADMIN_LOGIN = :login, ADMIN_PWD = :password where ADMIN_ID = :id";
        $this->executeRequest($sql, array('login' => $login, 'password' => $password, 'id' => $id));
    }
    
}    
