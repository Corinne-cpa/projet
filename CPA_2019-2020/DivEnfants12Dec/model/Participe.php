<?php

require_once 'Framework/Model.php';

/**
 * 
 * 
 * 
 */
class PARTICIPE extends Model {
    /**
     * Sélectionne les participants d'un jeu
     */
    public function getParticipant($idJeuOrganise){
        $sql = 'select PARTICIPE_ENF from t_participe where PARTICIPE_ORG =?';
        $Participants = $this->executeRequest($sql, array($idJeuOrganise));
        return $Participants;
    }

    /**
     * Lister tous les participants des jeux
     */
    public function getParticipants(){
        $sql = 'select PARTICIPE_ENF from t_participe where PARTICIPE_ORG =?';
        $Participants = $this->executeRequest($sql);
        return $Participants;
    }
    
    
    /**
     * Ajoute un participant à un jeu organisé
     */
    public function addParticipant($idenf, $idOrgjeu){
        $sql = 'insert into t_participe(PARTICIPE_ENF, PARTICIPE_ORG) values(?, ?)';
        $this->executeRequest($sql, array($idenf, $idOrgjeu));
    }
    
    /**
     * Modifie un participant à un jeu organisé
     */
    public function updateParticipantJeuOrganise($idParticipant, $idParticipe){
        $sql = 'update t_participe set PARTICIPE_ENF = :idParticipant where PARTICIPE_ID = :idParticipe';
        $this->executeRequete($sql, array('idParticipant' => $idParticipant, 'idParticipe' => $idParticipe));
    }
    
    /**
     * Modifier le jeu organisé des participants
     */
    public function updateJeuOrganiseParticipant($idJeuOrganise, $idParticipe){
         $sql = 'update t_participe set PARTICIPE_ORG = :idJeuOrganise where PARTICIPE_ID = :idParticipe';
        $this->executeRequete($sql, array('idJeuOrganise' => $idJeuOrganise, 'idParticipe' => $idParticipe));
    }
    
    /**
     * Supprime participant
     */
    public function deleteParticipant($idParticipant, $idParticipe){
        $sql = 'delete from t_participe where PARTICIPE_ENF =? AND PARTICIPE_ID =?';
        $this->executeRequete($sql, array($idParticipant, $idParticipe));
    }
}

