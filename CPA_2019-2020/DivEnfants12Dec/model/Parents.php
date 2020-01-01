<?php

require_once 'Framework/Model.php';

/**
 * 
 * 
 * 
 */
class Parents extends Model {

    /**
     * Connexion des parents
     * 
     * @return type
     */
    public function connect($email, $mdp) {
        $sql = "select PARENT_ID from T_PARENT where PARENT_EMAIL=? and PARENT_MDP=?";
        $parent = $this->executeRequest($sql, array($email, $mdp));
        return ($parent->rowCount() == 1);
    }
    
    public function getParent($email, $mdp) {
        $sql = "select * from t_parent where PARENT_EMAIL=? and PARENT_MDP=?";
        $parent = $this->executeRequest($sql, array($email, $mdp));
        if ($parent->rowCount() == 1){
            return $parent->fetch();  // Accès à la première ligne de résultat
        }
        else{
            throw new Exception("Aucun parent ne correspond aux identifiants fournis");
        }
    }

    /**
     * Renvoie la liste des parents
     * 
     * @return type
     */
    public function getParents() {
        $sql = 'select PARENT_ID, PARENT_NOM, PARENT_PRENOM from T_PARENT';
        $parent = $this->executeRequest($sql);
        return $parent;
    }

    /**
     * Renvoie un parent
     *
     * @return type
     * @throws Exception
     */
    public function profileParent($id_parent) {
        $sql = "select PARENT_NOM as nom_parent, PARENT_PRENOM as prenom_parent, PARENT_ADRESSE as adresse_parent, PARENT_TEL as tel_parent, 
                PARENT_EMAIL as email_parent from T_PARENT where PARENT_ID=?";
        $parent = $this->executeRequest($sql, array($id_parent));
        if ($parent->rowCount() == 1) {
            return $parent->fetch();  // Accès à la première ligne de résultat
        } else {
            throw new Exception("Aucun parent ne correspond à l'identifiant '$id_parent'");
        }
    }

    /**
     * Renvoie le nombre total de parents
     */
    public function getNombreParents() {
        $sql = 'select count(*) as nbParents from T_PARENT';
        $resultat = $this->executeRequest($sql);
        $ligne = $resultat->fetch();  // Le résultat comporte toujours 1 ligne
        return $ligne['nbParents'];
    }

    /**
     * ajoute un parent
     */
    public function ajoutParent($nom, $prenom, $adresse, $telephone, $email, $password) {
        $sql = 'insert into T_PARENT(PARENT_NOM, PARENT_PRENOM, PARENT_ADRESSE, PARENT_TEL, PARENT_EMAIL, PARENT_MDP)'
                . ' values(?, ?, ?, ?, ?, ?)';

        $this->executeRequest($sql, array($nom, $prenom, $adresse, $telephone, $email, $password));
    }

    /**
     * modifie un parent
     */
    public function modifieParent($adresse_parent, $tel_parent, $email_parent) {
        $sql = 'update T_PARENT set PARENT_ADRESSE = :adresse, PARENT_TEL = :telephone, PARENT_EMAIL = :email';

        $this->executerRequete($sql, array('adresse' => $adresse_parent, 'telephone' => $tel_parent, 'email' => $email_parent));
    }

    /**
     * suprime un parent
     */
    public function supprimeParent($id_parent) {
        $sql = 'delete from T_PARENT where PARENT_ID=?';
        $this->executeRequest($sql, array($id_parent));
    }

}
