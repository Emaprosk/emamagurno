<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de cervezas</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>#</th>
                         <th>Tipo</th>
                         <th>Nombre</th>
                         <th>IBU</th>
                         <th>Precio</th>
                         
                    </thead>
                    <tbody>                         
                         <tr>
                              <td>1</td>
                              <td>Tipo 1</td>
                              <td>Nombre 1</td>
                              <td>IBU 1</td>
                              <td>Precio 1</td>
                         </tr>
                         <tr>
                              <td>2</td>
                              <td>Tipo 2</td>
                              <td>Nombre 2</td>
                              <td>IBU 2</td>
                              <td>Precio 2</td>
                         </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>

<?php
echo $g;

?>

