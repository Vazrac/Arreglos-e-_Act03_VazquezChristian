<?php

class AgendaModel {
    private $Agenda;

    public function __construct() {
        $this->Agenda = array(
            '4775123648' => ['nombre' => 'Miguel', 'relacion' => 'Amante'],
            '4774569823' => ['nombre' => 'Juan', 'relacion' => 'Trabajo'],
            '4775136489' => ['nombre' => 'Luis', 'relacion' => 'Familia'],
            '4771234567' => ['nombre' => 'Laura', 'relacion' => 'Familia'],
            '4774139158' => ['nombre' => 'Deborah', 'relacion' => 'Esposa'],
        );
    }
    public function getAgenda() {
        return $this->Agenda;
    }
    public function agregarContacto($telefono, $nombre, $relacion) {
        $this->Agenda[$telefono] = ['nombre' => $nombre, 'relacion' => $relacion];
    }
}
