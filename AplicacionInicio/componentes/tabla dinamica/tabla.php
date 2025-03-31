<div>
<h2 class="mb-4">Tabla Dinámica con JavaScript</h2>

    <!--formulario para datitos-->
    <div class="mb-3">
        <input type="text" id="nombre" class="form-control mb-2" placeholder="Nombre">
        <input type="text" id="edad" class="form-control mb-2" placeholder="Edad">
        <button class="btn btn-success" onclick="agregarFila()">Agregar</button>
    </div>
    <!-- Busqueda dinamica -->
    <div>
        <input type="text" id="inputBuscarNombre" class="form-control mb-2" placeholder="Buscar por Nombre">
        <input type="text" id="inputBuscarEdad" class="form-control mb-2" placeholder="Buscar por Edad">
    </div>

    <table class="table table-bordered" id="tabla">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="tablaBody">
            <!--aca van las filas-->
        </tbody>
    </table>
</div>
<script src="/static/js/tabla.js"></script>