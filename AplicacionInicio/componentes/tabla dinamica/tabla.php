<div class="tablefull">
<div class="tablebody"> 
<h1 class="mb-4">Tabla Dinámica con JavaScript</h1>

    <!--formulario para datitos-->
    <div class="inputbox">
        <div class="row1">
            <input type="text" id="nombre" class="form-control mb-2" placeholder="Nombre">
            <input type="text" id="edad" class="form-control mb-2" placeholder="Edad">
            <button class="btn btn-success" onclick="agregarFila()">Agregar</button>
        </div>
        <div class="row1">
            <input type="text" id="inputBuscarNombre" class="form-control mb-2" placeholder="Buscar por Nombre">
            <input type="text" id="inputBuscarEdad" class="form-control mb-2" placeholder="Buscar por Edad">
        </div>
    </div>
    <!-- Busqueda dinamica -->

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
<img src="/static/img/booking.jpg">
</div>
<script src="/static/js/tabla.js"></script>