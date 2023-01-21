<?php
     require_once('nav.php');
?>
<main id="all-body">
     <div class="container">
          <div class="row divcenter">
               <div class="col-sm-12 col-md-10 col-lg-8 col-xl-8" style="margin-top: 150px;">
                    <div class="divcenter">
                         <img class="imgperfil" src="<?php echo IMG_PATH?>perfil.jpg" alt="perfil">
                    </div>
               </div>
               <div class="col-sm-12 col-md-8 col-lg-8 col-xl-12">
                    
                    <div class="" style="margin-top: 100px;">
                         <div class="">
                              <div class="mx-auto text-center" style="width: 60%;">
                                   <h1 class="text-center">Web Developer</h1>
                                   <p class="mt-5">-Programador y desarrollador Full Stack, multiples conocimientos en la IT,
                                   domino varios leguanjes de programacion. Dispuesto a cumplir cada reto que se me proponga.<br>
                                   <p>-Llevo a cabo ese proyecto que tanto deseas, para levantar 
                                   tu negocio y llevar al maximo tu rubro.</p>
                                   <p>-Con la facilidad de crear una aplicacion tanto a nivel Web Site 
                                   o como Software.</p>
                                   
                                   Para mas info <a href="">Mi Bio</a>

                                   </p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <div class="divicons" style="margin-top: 150px;">
               <div class="divcenter">
                    <h1 style="color: white;">Tecnologias</h1>
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

          <div class="row divcenter">
               <div class="col-sm-12 col-md-10 col-lg-8 col-xl-8">
                    <div class="divcenter" style="margin-top: 100px;"><h1>Contacto</h1></div>
                    <div class="divcenter">
                         <form action="<?php echo FRONT_ROOT?>Home/sendMail" method="post">
                              <input name="name" type="text" id="form-content" placeholder="Nombre"><br>
                              <input name="email" type="email" id="form-content" placeholder="Email"><br>
                              <textarea name="textarea" class="form-menssage" cols="30" rows="10" placeholder="Mensaje" maxlength="500"></textarea><br>
                              
                              <button type="submit" class="form-submit btn">Enviar</button>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</main>