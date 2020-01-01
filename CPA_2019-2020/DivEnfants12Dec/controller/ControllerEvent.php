<?php

require_once 'framework/Controller.php';
require_once 'model/Event.php';

/**
 * Contrôleur des actions liées aux billets
 *
 */
class ControllerEvent extends Controller {

    private $event;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->event = new Event();
    }

    // Affiche les détails sur un billet
    public function index() {
        $events = $this->event->getEvents();
        
        $this->generateView(array('events' => $events));
    }

    
}

