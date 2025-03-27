<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="submit_cita.php" method="post">
        <h2>Solicitud de Cita</h2>
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
        
        <label for="fecha">Fecha de la cita:</label>
        <input type="date" id="fecha" name="fecha" required>
        
        <label for="hora">Hora de la cita:</label>
        <input type="time" id="hora" name="hora" required>
        
        <label for="motivo">Motivo de la cita:</label>
        <textarea id="motivo" name="motivo" rows="4" required></textarea>
        
        <button type="submit">Solicitar Cita</button>
    </form>
</body>
</html>