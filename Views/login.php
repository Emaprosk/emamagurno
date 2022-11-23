<main>
    <form action="<?php echo FRONT_ROOT ?> User/Login" method="post">
        <div class="form-group">
            <label for="">Email</label>
            <input name="email-field" type="text" class="form-control form-control-lg" placeholder="Ingresar usuario" required>
        </div>
        <div class="form-group">
            <label for="">Contraseña</label>
            <input name="password-field" type="password" class="form-control form-control-lg" placeholder="Ingresar constraseña" required>
        </div>
        <button class="btn btn-primary btn-block btn-lg" type="submit">Iniciar Sesión</button>
    </form>
</main>