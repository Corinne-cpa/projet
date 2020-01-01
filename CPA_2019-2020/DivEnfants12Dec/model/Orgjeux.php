 <?php

require_once 'Framework/Model.php';

/**
 * 
 * 
 * 
 */
class Orgjeux extends Model {
	
	/**
     * ajout une organisation à un jeu
     */
    public function addOrg($jeux, $date) {
        $sql = 'insert into t_orgjeux(ORGJEUX_JEUX, ORGJEUX_DATE) values(?, ?)';

        $this->executeRequest($sql, array($jeux, $date));
        
        
    }

    public function getOrg() {
        $sql = 'select ORGJEUX_ID, ORGJEUX_JEUX, ORGJEUX_DATE  from T_ORGJEUX';
        $orgjeux = $this->executeRequest($sql);
        return $orgjeux;
    }
	/**
     * modifie date organisation d un jeu
     */
	
	public function modifieOrgJeux($date_orgjeux){
        $sql = 'update T_ORGJEUX set ORGJEUX_DATE = :date';
        
        $this->executeRequest($sql, array('date' => $date_orgjeux));
    }
    
    /**
     * Supprime l'organisation d'un jeu
     */
    public function deleteOrgJeux($idOrgJeu){
        $sql = 'delete from t_orgjeux where ORGJEUX_ID =?';
        $this->executeRequest($sql, array($idOrgJeu));
    }

	
}