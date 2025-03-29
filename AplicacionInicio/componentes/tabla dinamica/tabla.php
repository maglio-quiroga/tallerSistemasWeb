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
<script>
    async function cargar() {
    const resp = await fetch("https://jsonplaceholder.typicode.com/posts"); // Petición al backend
    const datos = await resp.json(); // Conversión a JSON
    return datos;
}

// Función para llenar la tabla con los datos obtenidos
async function llenarTabla() {
    const datos = await cargar();
    const tablaBody = document.getElementById("tablaBody");

    // Limpiamos el contenido previo por si se vuelve a ejecutar
    tablaBody.innerHTML = "";

    // Iteramos sobre los datos y creamos filas en la tabla
    datos.forEach((item, index) => {
        if (index < 10) { // Mostramos solo los primeros 10 registros
            let fila = document.createElement("tr");
            fila.innerHTML = `
                <td>${item.title}</td>
                <td>${item.id}</td>
                <td>
                    <button class="btn btn-danger" onclick="eliminarFila(this)">Eliminar</button>
                </td>
            `;
            tablaBody.appendChild(fila);
        }
    });
}

// Función para agregar una fila manualmente desde el formulario
function agregarFila() {
    const nombre = document.getElementById("nombre").value;
    const edad = document.getElementById("edad").value;

    if (nombre.trim() === "" || edad.trim() === "") {
        alert("Por favor, completa ambos campos.");
        return;
    }

    const tablaBody = document.getElementById("tablaBody");
    let fila = document.createElement("tr");

    fila.innerHTML = `
        <td>${nombre}</td>
        <td>${edad}</td>
        <td>
            <button class="btn btn-danger" onclick="eliminarFila(this)">Eliminar</button>
        </td>
    `;

    tablaBody.appendChild(fila);

    // Limpiar los campos del formulario después de agregar
    document.getElementById("nombre").value = "";
    document.getElementById("edad").value = "";
}

// Función para eliminar una fila
function eliminarFila(boton) {
    const fila = boton.parentNode.parentNode;
    fila.remove();
}

function buscarTabla() {
    var inputNombre, inputEdad, tabla, tr, iterador;
    inputNombre = document.getElementById("inputBuscarNombre").value.toUpperCase();
    inputEdad = document.getElementById("inputBuscarEdad").value.toUpperCase();
    tabla = document.getElementById("tabla");
    tr = tabla.getElementsByTagName("tr");

    for (iterador = 1; iterador < tr.length; iterador++) { // Empieza en 1 para saltar el encabezado
        var tdNombre = tr[iterador].getElementsByTagName("td")[0];
        var tdEdad = tr[iterador].getElementsByTagName("td")[1];

        if (tdNombre && tdEdad) {
            if (
                (tdNombre.textContent.toUpperCase().indexOf(inputNombre) > -1) &&
                (tdEdad.textContent.toUpperCase().indexOf(inputEdad) > -1)
            ) {
                tr[iterador].style.display = "";
            } else {
                tr[iterador].style.display = "none";
            }
        }
    }
}

// Llamamos a la función para llenar la tabla al cargar la página
document.addEventListener("DOMContentLoaded", llenarTabla);
// Agregar eventos de búsqueda en tiempo real
document.getElementById("inputBuscarNombre").addEventListener("input", buscarTabla);
document.getElementById("inputBuscarEdad").addEventListener("input", buscarTabla);

</script>