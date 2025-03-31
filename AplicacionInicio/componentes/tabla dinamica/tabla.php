<div>
<div class="titulotabla"><h2 >Tabla Dinámica con JavaScript</h2></div>

    <!--formulario para datitos-->
    <div class="input-crear">
        <input type="text" id="nombre" class="form-control mb-2" placeholder="Nombre">
        <input type="text" id="edad" class="form-control mb-2" placeholder="Edad">
        <button class="btn btn-success" onclick="agregarFila()">Agregar</button>
    </div>
    <!-- Busqueda dinamica -->
    <div class="input-buscar">
        <input type="text" id="inputBuscarNombre" class="form-control mb-2" placeholder="Buscar por Nombre">
        <input type="text" id="inputBuscarEdad" class="form-control mb-2" placeholder="Buscar por Edad">
    </div>
    <div class="tabla">
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
</div>
<script src="/static/js/tabla.js"></script>