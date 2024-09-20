<br>
        <h1>Usuarios</h1>
        <br>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>usuarios</td>
                        <td>Jhojan Lopez</td>
                        <td>
                            <a href=""><img style="width: 2.5vh;" src="../assets/icons/delete.png" alt=""></a>
                            <a href=""><img style="width: 2.5vh;" src="../assets/icons/edit.png" alt=""></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <h1>Agregar usuarios</h1>
        <br>
        <div class="container">
            <form>
                <div class="mb-3">
                    <label for="inputState" class="form-label">Rol</label>
                    <select id="inputState" class="form-select">
                        <option value="user" selected>Usuario</option>
                        <option value="admin">Administrador</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
        <br>
        <br>
        <h1>Editar usuarios</h1>
        <br>
        <div class="container">
            <form>
                <div class="mb-3">
                    <label for="inputState" class="form-label">Rol</label>
                    <select id="inputState" class="form-select">
                        <option value="user" selected>Usuario</option>
                        <option value="admin">Administrador</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
        <br>