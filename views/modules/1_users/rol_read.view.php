            <section class="borde">
                <h3>Tabla de Roles</h3>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($roles as $rol) : ?>
                        <tr>
                            <td><?php echo $rol->getRolCodigo(); ?></td>
                            <td><?php echo $rol->getRolNombre(); ?></td>
                            <td>
                                <a href="">Actualizar</a>
                                <a href="">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>