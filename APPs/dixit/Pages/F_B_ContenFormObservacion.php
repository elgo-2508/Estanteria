<?php require_once "BD_B_RetornaDatosF1.php"; ?>
<div class="container mt-2">
	<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">

			<?php
				// Separar la variable en un array usando la coma como delimitador
				$Imagenes = explode(",", $tarjetas_list);
				$Selecionadas = explode(",", $Seleccion_list);
				
				$i=0;
				// Recorrer el array y imprimir cada código
				foreach ($Imagenes as $codigo) {
					$i=$i+1;
					if ($i==1) {
						echo '<div class="carousel-item active">';
					} else {
						echo '<div class="carousel-item">';
					}
					?>
			<div class="d-flex justify-content-center">
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
					<div class="col">
						<div class="card">
							<img src="..\assets\img\originales\<?php echo $codigo;?>.jpg" class="card-img-top"
								style="max-height: 450px; ; width: 300px;" alt="...">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<?php 
												echo '<button type="submit" class="btn btn-sm btn-outline-secondary" name="boton_seleccionado" value="' . $i . '">Select</button>';
												?>

									</div>
									<?php 
													$posicion = array_search( $codigo, $Selecionadas);
														if ($posicion !== false) 
														{
												?>
									<span class="text-susesfull" data-feather="check"
										style="height: 30px; width: 30px;"></span>
									<?php 															
														} 
												?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php		
					}
					?>
	</div>
	<a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</a>
</div>