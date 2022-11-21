<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar cerveza</h2>
               <form class="bg-light-alpha p-5">
                    <div class="row">                         
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Tipo</label>
                                   <select class="form-control">
                                   
                                   </select>                                   
                              </div>
                         </div>
                         <div class="col-lg-5">
                              <div class="form-group">
                                   <label for="">Nombre</label>
                                   <input type="text" value="" class="form-control">
                              </div>
                         </div>                         
                         <div class="col-lg-2">
                              <div class="form-group">
                                   <label for="">IBU</label>
                                   <input type="number" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-2">
                              <div class="form-group">
                                   <label for="">Precio</label>
                                   <input type="number" value="" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>