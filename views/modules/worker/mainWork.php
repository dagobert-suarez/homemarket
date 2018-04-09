<h3>Dashboard</h3>
<div class="wrap-info">

     <!-- <div class="wrap-cont-info">
         <header>
             <h3> las cosas</h3>
         </header>
         <p>17</p>
     </div> -->
     <div class="wrap-cont-info">
         <header>
             <h3>Categorías</h3>
         </header>
         <p>Cantidad: <?php echo $this-> selectCates(); ?> </p>

     </div> <div class="wrap-cont-info">
          <header>
              <h3>Productos</h3>
          </header>
          <p>Cantidad: <?php echo $this-> selectProdu(); ?></p>

      </div> <div class="wrap-cont-info">
           <header>
               <h3> Proveedores</h3>
           </header>
           <p>Cantidad: <?php echo  $this->prove(); ?> </p>
       </div>

   </div>
