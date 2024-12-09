
    <!-- Contenido principal -->
    <section class="container mt-5 listado">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Listado de Productos</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de producto -->
                        <tr>
                            <td>001</td>
                            <td>Producto 1</td>
                            <td>50</td>
                            <td>$100.00</td>
                            <td>
                                <a href="editar_producto.php?id=1" class="btn btn-warning btn-sm">Editar</a>
                                <a href="eliminar_producto.php?id=1" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                        <!-- Aquí puedes agregar más productos dinámicamente -->
                    </tbody>
                </table>
            </div>
        </div>
</section>
