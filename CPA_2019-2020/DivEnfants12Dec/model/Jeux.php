<?php

require_once 'Framework/Model.php';

/**
 * 
 * 
 * 
 */
class Jeux extends Model {

    /**
     * ajout un jeu
     */
    public function addJeux($nomJeu, $agemin, $agemax) {
        $sql = 'insert into t_jeux(JEUX_NOM, JEUX_AGE_MIN, JEUX_AGE_MAX)'
                . ' values(?, ?, ?)';

        $this->executeRequest($sql, array($nomJeu, $agemin, $agemax));
    }

    /**
     * Renvoie la liste des jeux
     * 
     * @return type
     
    public function getJeux() {
        $sql = 'select * from t_jeux';
        $jeux = $this->executeRequest($sql);
        return $jeux;
    }
    **/
    
    public function getJeux() {
        $sql = 'select JEUX_ID, JEUX_NOM  from T_JEUX';
        $jeux = $this->executeRequest($sql);
        return $jeux;
    }

    /** Renvoie les informations sur un jeu
     * 
     * @param int $id L'identifiant du jeu
     * @return array le jeu
     * @throws Exception Si l'identifiant du jeu est inconnu
     */
    public function getJeu($idjeu) {
        $sql = 'select JEUX_ID as id, JEUX_NOM as jeux_nom,'
                . ' JEUX_AGE_MIN as jeux_age_min, JEUX_AGE_MAX as jeux_age_max from T_JEUX'
                . ' where JEUX_ID=?';
        $jeu = $this->executeRequest($sql, array($idjeu));
        if ($jeu->rowCount() > 0)
            return $jeu->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun jeu ne correspond à l'identifiant '$idjeu'");
    }

    /**
     * suprime un jeu
     */
    public function deleteJeu($id_jeu) {
        $sql = 'delete from T_JEUX where JEUX_ID=?';
        $this->executeRequest($sql, array($id_jeu));
    }
    
    /**
     * Modifie un jeu
     */
    public function updateJeu($ageMin, $ageMax, $idJeu){
        $sql = 'update t_jeux set JEUX_AGE_MIN = :ageMin, JEUX_AGE_MAX = :ageMax where JEUX_ID = :idJeu';
        $this->executeRequest($sql, array('ageMin' => $ageMin, 'ageMax' => $ageMax, 'idJeu' => $idJeu));
    }

}
