<?php
     require_once('nav.php');
?>


<main>
     <div class="content">
          <header class="text-center">
               <h2></h2>
          </header>

          <div class="divpresent">
               <div class="divtext">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dicta maxime enim,
                    vitae necessitatibus tempora, impedit quisquam eos debitis, esse similique maiores unde ratione laborum 
                    ipsum consectetur sed quibusdam. Aliquam?</p>
               </div>
               <div class="divimagen">
                    <img class="imgperfil" src="<?php echo IMG_PATH?>perfil.jpg" alt="">
               </div>
          </div>


          <div class="divicons">
               <ul class="ulicons">
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>html-5.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>css-3.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>php.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>js.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>mysql.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>letra-c.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>java.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>visual-studio.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>android.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>github.png" alt=""></li>
               </ul>
          </div>



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
     </div>
</main>