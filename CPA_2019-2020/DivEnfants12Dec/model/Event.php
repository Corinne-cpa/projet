<?php

require_once 'framework/Model.php';

/**
 * Modélise dummy
 *
 */
class Event extends Model {

    public function getEvents() {
        return "Les évenements";
    }

}
