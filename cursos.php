<?php
include('cabecera.php');
?>
				<div class="clearfix"></div>
			</div>
			<div class="banner-main">
				<div class="container">	
					<div class="banner-top bnr-top">
						<h1>"TE AYUDAMOS A ENCONTRAR LA FORMACION IDEAL"</h1>
					</div>
				</div>
			</div>
		</div>	
	<!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(" ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->	
	<!--end-banner-->
	<!--start-carrer-->
	<div class="carrer">
		<div class="container">
			<div class="carrer-top">
				<h3>Cursos Y Talleres</h3><br>
				<select id="lista_cursos" style="width: 50%;" onchange="mostrarCurso();"></select>
			</div>
			<div class="tabs-box">
			<!--<ul class="tabs-menu" id="lista_cursos">
				<li><a href="#"onclick="mostrar()"><span> </span>Senior webdesigner</a></li>
				<li><a href="#"onclick="mostrar()"><span> </span>Project manager</a></li>
				<li><a href="#"onclick="mostrar()"><span> </span>Front-end developer</a></li>
			</ul>!-->

			<div class="clearfix"> </div>
			<div class="services-main">
				<div id="tab1" class="tab-grid">

					<div class="tb-one">
						<h3 id="titulo"></h3>
						<div class="tb-one" id="descripcion"></div>
					</div>

					<div class="tb-one">
					    <br>
						<h3>Estoy intersado en esto:</h3>
							<div class="tb-two">
								<input type="text" id="nombres" name="nombres" placeholder="Nombres" />
								<input type="text" id="apellidos" name="apellidos" placeholder="Apellidos"/>
								<input type="text" id="correo" name="correo" placeholder="Email"/>
						        <input type="text" id="telefonos" name="telefonos" placeholder="Telefonos"/>
						        <select id="nivel"></select>
						        <select id="profesion"></select>
						        <select id="ocupacion"></select>
						        <input type="text" id="cedula" name="cedula" placeholder="CEDULA"/>
								<textarea placeholder="Observaciones..." id="observacion"></textarea>
									<div class="t-btn">
										<form onsubmit="return guardar();" action="#">
											<input type="submit" value="Enviar">
								    	</form>
								    </div>
						    </div>				
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!--start-carrer-->
	<!----- Comman-js-files ----->
	    <script type="text/javascript" src="js/curso.js"></script>
		<script>
			$(document).ready(function() {
				cursos();
				nivel();
				ocupa();
				profe();
			});
		</script>
		<!----- Comman-js-files ----->
<?php
include('pie.php');
?>