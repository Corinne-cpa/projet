<?php

require_once 'Framework/Model.php';

/**
 * 
 * 
 * 
 */
class Enfants extends Model {

    /**
     * ajout un enfant
     */
    public function addEnfant($nom, $prenom, $dn, $parent) {
        $sql = 'insert into t_enfant(ENFANT_NOM, ENFANT_PRENOM, ENFANT_DN, ENFANT_PARENT)'
                . ' values(?, ?, ?, ?)';

        $this->executeRequest($sql, array($nom, $prenom, $dn, $parent));
    }

    /**
     * suprime un enfant
     */
    public function deleteEnfant($id_enfant) {
        $sql = 'delete from t_enfant where ENFANT_ID=?';
        $this->executeRequest($sql, array($id_enfant));
    }

    /**
     * Renvoie le nombre total des enfants d un parent
     */
    public function getEnfantsParent($parent) {
        $sql = 'select ENFANT_ID as id, ENFANT_NOM as nom, '
                . 'ENFANT_PRENOM as prenom, ENFANT_DN as dn from t_enfant'
                . ' where ENFANT_PARENT=?';
        ;
        $enfants = $this->executeRequest($sql, array($parent));
        return $enfants;
    }

    /**
     * Renvoie le nombre total des enfants
     */
    
     public function getEnfants() {
        $sql = 'select ENFANT_ID, ENFANT_NOM, ENFANT_PRENOM, ENFANT_PARENT  from T_ENFANT';
        $enfant = $this->executeRequest($sql);
        return $enfant;
    }
    
}
