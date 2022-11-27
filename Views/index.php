<?php
     require_once('nav.php');
?>
<main>
     <div class="content">
          <header class="text-center">
               <h2></h2>
          </header>

          <div class="divcenter">
               <div class="divtext">
                    <p>Programador y desarrollador Full Stack, multiples conocimientos en la IT, flexibilidad horaria,
                    leemos lo que tu mente piensa. Llevamos a cabo ese proyecto que tanto deseas, para levantar
                    tu negocio y llevar al maximo tu rubro.

                    </p>
               </div>
               <div style="margin-left: 50px;">
                    <img id="imgperfil" src="<?php echo IMG_PATH?>perfil.jpg" alt="perfil">
               </div>
          </div>


          <div class="divicons">
               <div class="divcenter">
                    <h1 style="color: white;">Tecnologies</h1>
               </div>
               <ul class="ulicons">
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>html-5.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>css-3.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>php.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" style="border-radius: 50%;" src="<?php echo IMG_PATH?>js.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>mysql.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>letra-c.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>java.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>visual-studio.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>android.png" alt=""></li>
                    <li class="liicons"><img id="imgicons" src="<?php echo IMG_PATH?>github.png" alt=""></li>
               </ul>
          </div>

          <div class="divcenter"><h1>Contact</h1></div>
          <div class="divcenter">
               <form  method="post">
                    <input type="text" id="form-content" placeholder="Nombre"><br>
                    <input type="email" id="form-content" placeholder="Email"><br>
                    <textarea name="text-area" class="form-menssage" id="" cols="30" rows="10" placeholder="Mensaje" maxlength="500"></textarea><br>
                    
                    <button type="submit" class="form-submit btn">Enviar</button>
               </form>
          </div>

          
     </div>
</main>