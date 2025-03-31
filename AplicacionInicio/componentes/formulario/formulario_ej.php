
    <div class="container mt-5">
        <form action="" method="POST" class="row g-3 needs-validation" enctype="multipart/form-data" onsubmit="return validar_registro()" novalidate>
            <div>
                <label for="I_nombre">Nombre:</label>
                <input type="text" class="form-control" id="I_nombre">
                <div id="error-nombre" class="text-danger"></div>
            </div>
            <div>
                <label for="I_correo">Correo:</label>
                <input type="email" class="form-control" id="I_correo">
                <div id="error-correo" class="text-danger"></div>
            </div>
            <div>
                <label for="I_telefono">Telefono:</label>
                <input type="tel" class="form-control" id="I_telefono">
                <div id="error-telefono" class="text-danger"></div>
            </div>
            <div>
                <label for="fecha">Fecha de la cita:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
                <div id="error-fecha" class="text-danger"></div>
            </div>
            <div>
                <label for="hora">Hora de la cita:</label>
                <input type="time" class="form-control" id="hora" name="hora" required>
                <div id="error-hora" class="text-danger"></div>
            </div>
            <div>
                <label for="motivo">Motivo de la cita:</label>
                <textarea class="form-control" id="motivo" name="motivo" rows="4" required></textarea>
                <div id="error-motivo" class="text-danger"></div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
<script src="/static/js/formulario.js"></script>