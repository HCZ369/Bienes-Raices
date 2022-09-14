<?php 
     // BASE DE DATOS
     include '../../includes/config/database.php';
     $db = conectarDB();

     // Arreglo con mensajes de errores
     $errores = [];

     $titulo = '';
     $precio = '';
     $descripcion = '';
     $habitaciones = '';
     $wc = '';
     $estacionamiento = '';

     //ejecutar el codigo cuando el usuario envia el formulario
     if ($_SERVER['REQUEST_METHOD'] === 'POST'){
          // echo "<pre>";
          // var_dump($_POST);
          // echo "</pre>";

          $titulo = $_POST['titulo'];
          $precio = $_POST['precio'];
          $descripcion = $_POST['descripcion'];
          $habitaciones = $_POST['habitaciones'];
          $wc = $_POST['wc'];
          $estacionamiento = $_POST['estacionamiento'];

          if(!$titulo){
               $errores[] = "Debes añadir un titulo";
          }
          if(!$precio){
               $errores[] = "Debes añadir un precio";
          }
          }if( strlen($descripcion) < 20 ){
               $errores[] = "Debes añadir una descripcion con un minimo de 20 caracteres";
          }
          if(!$habitaciones){
               $errores[] = "Debes añadir la cantidad de habitaciones";
          }
          if(!$wc){
               $errores[] = "Debes añadir la cantidad de baños";
          }
          if(!$estacionamiento){
               $errores[] = "Debes añadir los estacionamientos";
          }

          //Revisar que el array de errores eeste vacio
          if(empty($errores)){
               // Insertar en la base de datos
               $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento) VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento' ) ";
               // echo $query;
               
               $resultado = mysqli_query($db, $query);
               if($resultado){
               echo "Insertado Correctamente";
          }          
     }
     //var_dump($db);
	include "../../includes/templates/header.php"; 
?>
     <main class="contenedor seccion">
		<h1>Crear</h1>



          <a href="/admin" class="boton boton-verde">Volver</a>

          <?php foreach($errores as $error): ?>
               <div class="alerta error">
                    <?php echo $error; ?>
               </div>
          <?php endforeach; ?>
          <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
               <fieldset>
                    <legend>Informacion General</legend>
                    <label for="titulo">Titulo</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Titulo de la Propiedad" value="<?php echo $titulo; ?>">
                    
                    <label for="precio">Precio:</label>
                    <input type="numbre" id="precio" name="precio" placeholder="Precio de la propiedad" value="<?php echo $precio; ?>">

                    <label for="imagen">Imagen:</label>
                    <input type="file" id="imagen" accept="image/jpeg, image/png">

                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion"></textarea>
               </fieldset>

               <fieldset>
                    <legend>Informacion de la Propiedad</legend>

                    <label for="habitaciones">Habitaciones:</label>
                    <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

                    
                    <label for="baños">Baños:</label>
                    <input type="number" id="baños" name="baños" placeholder="Ej: 3" min="1" max="9" value="<?php echo $baños; ?>">
                    
                    <label for="estacionamiento">Estacionamiento:</label>
                    <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">

               </fieldset>
                    
               <input type="submit" value="Crear Propiedad" class="boton boton-verde">
          </form>
     </main>
     <?php 
	     include "../../includes/templates/footer.php"; 
     ?>