            <section class="borde">
                <h3>Tabla de Roles</h3>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Codigo Rol</th>
                            <th>Código Usuario</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>                            
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo $user->getRolCode(); ?></td>
                            <td><?php echo $user->getUserCode(); ?></td>
                            <td><?php echo $user->getUserNames(); ?></td>
                            <td><?php echo $user->getUserLastNames(); ?></td>
                            <td><?php echo $user->getUserEmail(); ?></td>
                            <td>
                                <a href="?c=Users&a=updateRol&userCode=<?php echo $user->getUserCode()?>">Actualizar</a>
                                <a href="?c=Users&a=deleteRol&userCode=<?php echo $user->getUserCode()?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>