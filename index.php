<?php
require_once 'AgendaControlador.php';

$Modelo = new AgendaModel();
$Vista = new AgendaView();
$Controlador = new AgendaController($Modelo, $Vista);

// Mostrar la agenda actual
$Controlador->mostrarAgenda();

// Agregar un nuevo contacto
$Controlador->agregarContacto('4778523619', 'NuevoUsuario', 'Trabajo');

// Mostrar la agenda después de agregar el nuevo contacto
$Controlador->mostrarAgenda();

