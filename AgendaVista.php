
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
        <h1 class="titulo">Información</h1>
</body>
</html>
<?php

class AgendaView {
    public function mostrarAgenda($Agenda) {
        echo "<table border='1'>";
        echo "<tr><th>Teléfono</th><th>Nombre</th><th>Relación</th></tr>";
        foreach ($Agenda as $telefono => $contacto) {
            echo "<tr>";
            echo "<td>$telefono</td>";
            echo "<td>{$contacto['nombre']}</td>";
            echo "<td>{$contacto['relacion']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
