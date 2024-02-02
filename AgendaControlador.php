<?php
require_once 'AgendaModelo.php';
require_once 'AgendaVista.php';
class AgendaController {
    private $Modelo;
    private $Vista;

    public function __construct(AgendaModel $Modelo, AgendaView $Vista) {
        $this->Modelo = $Modelo;
        $this->Vista = $Vista;
    }
    public function mostrarAgenda() {
        $Agenda = $this->Modelo->getAgenda();
        $this->Vista->mostrarAgenda($Agenda);
    }
    public function agregarContacto($telefono, $nombre, $relacion) {
        $this->Modelo->agregarContacto($telefono, $nombre, $relacion);
    }
}
