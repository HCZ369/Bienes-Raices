<?php include "includes/templates/header.php"; ?>

		<main class="contenedor seccion contenido-centrado">
			<h1>Ejemplo de Anuncio Detallado</h1>
			<picture>
				<source src="build/img/destacada.webp" type="image/webp" />
				<source src="build/img/destacada.jpg" type="image/jpeg" />
				<img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad" />
			</picture>
			<div class="resumen-propiedad">
				<p class="precio">$ 3.500.000</p>
				<ul class="iconos-caracteristicas">
					<li>
						<img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
						<p>3</p>
					</li>
					<li>
						<img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
						<p>3</p>
					</li>
					<li>
						<img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" />
						<p>4</p>
					</li>
				</ul>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi provident, sed ea ullam quam impedit harum sunt,
					repudiandae hic eius rerum? Ducimus delectus ipsa, sapiente dolor modi distinctio assumenda possimus! Eveniet, quae
					asperiores commodi neque animi iusto adipisci praesentium rem veniam dignissimos facilis repellat magnam sapiente nemo, dolor
					perferendis ullam dolores minus. Corrupti aspernatur optio alias omnis sit ullam minima. Beatae ipsum ratione deserunt
					laborum quidem consectetur eos eveniet alias sint sequi voluptates voluptatum, placeat velit, fugit iste voluptate quas saepe
					ducimus quod assumenda, id cum. Commodi architecto quae neque? Maxime quibusdam eligendi incidunt velit harum dolorum
					asperiores quaerat iusto laborum voluptatem, atque vero corporis error, qui quisquam culpa. Voluptatibus aperiam aliquam
					animi id ad veniam exercitationem hic sapiente nobis. Ad voluptates cupiditate assumenda eligendi neque, sapiente eaque
					commodi sint atque inventore fuga qui consequuntur, omnis natus placeat? Provident dicta veniam eos asperiores voluptatibus
					delectus. Necessitatibus consequuntur temporibus pariatur reiciendis!
				</p>
			</div>
		</main>
<?php 
include "includes/templates/footer.php"; 
?>
