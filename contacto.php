<?php include "includes/templates/header.php"; ?>
		<main class="contenedor">
			<h1>Contacto</h1>
			<picture>
				<source srcset="build/img/destacada3.webp" type="image/webp" />
				<source srcset="build/img/destacada3.webp" type="image/webp" />
				<img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen Contacto" />
			</picture>
			<h2>Llene el formulario de Contacto</h2>
			<form class="formulario">
				<fieldset>
					<legend for="nombre">Nombre</legend>
					<input type="text" placeholder="Tu Nombre" id="nombre" />

					<legend for="email">E-mail</legend>
					<input type="email" placeholder="correo@ejemplo.com" id="email" />

					<legend for="telefono">Telefono</legend>
					<input type="tel" placeholder="Tu Telefono" id="telefono" />

					<legend for="telefono">Mensaje:</legend>
					<textarea id="mensaje"></textarea>
				</fieldset>

				<fieldset>
					<legend>Informacion Sobre La Propiedad</legend>
					<legend for="opciones">Vende o Compra:</legend>
					<select id="opciones">
						<option values="" disable selcted>-- Seleccione --</option>
						<option value="Compra">Compra</option>
						<option value="Vende">Vende</option>
					</select>
					<label for="presupuesto">Precio o Presupuesto</label>
					<input type="number" placeholder="Cual es tu presupuesto?" id="presupuesto" />
				</fieldset>
				<fieldset>
					<legend>Como desea ser contactado?</legend>
					<div class="forma-contacto">
						<label for="contactar-telefono">Telefono</label>
						<input name="contacto" type="radio" value="telefono" id="contactar-telefono" />

						<label for="contactar-telefono">E-mail</label>
						<input name="contacto" type="radio" value="email" id="contactar-email" />
					</div>
				</fieldset>
			</form>

			<input type="submit" value="Enviar" class="boton-verde" />
		</main>
<?php 
include "includes/templates/footer.php"; 
?>
