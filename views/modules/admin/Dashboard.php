<!-- la Dashboard -->
<div class="wrap--in">
       <header>
           <h1>Hola Supermercado</h1>
           <p> Este el el inico del administrador donde puede reslizar  las tareas </p>
       </header>
       <div class="wrap-in-text">
           <p>
               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
           </p>
       </div>
</div>
<div class="wrap-info">

     <div class="wrap-cont-info">
         <header>
             <h3>Supermercados</h3>
         </header>
         <p>Cantidad: <?php echo $this->readTodos(); ?></p>
     </div>
     <div class="wrap-cont-info">
         <header>
             <h3> Proveedores</h3>
         </header>
         <p>Cantidad: <?php echo  $this->prove(); ?> </p>
     </div> <div class="wrap-cont-info">
          <header>
              <h3>Categorías</h3>
          </header>
          <p>Cantidad: <?php echo $this-> selectCates(); ?> </p>
      </div> <div class="wrap-cont-info">
           <header>
               <h3>Empleados</h3>
           </header>
           <p>Cantidad de Empleados</p>
       </div>

   </div>
</div>
<!-- termina dashboard -->
