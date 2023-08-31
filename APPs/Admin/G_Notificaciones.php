<li class="nav-item dropdown">
	<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
		data-bs-auto-close="outside"><span data-feather="bell" style="height:20px;width:20px;"></span></a>
	<div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret"
		id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
		<div class="card position-relative border-0">
			<div class="card-header p-2">
				<div class="d-flex justify-content-between">
					<h5 class="text-black mb-0">Notificaciones</h5><button class="btn btn-link p-0 fs--1 fw-normal"
						type="button">Marcar todas como leidas</button>
				</div>
			</div>
			<div class="card-body p-0">
				<div class="scrollbar-overlay" style="height: 27rem;">
					<div class="border-300">
						<?php 
							// Obtener el código del juego y el usuario de la sesión
							$IdUsuario = '57';//$_SESSION['usuario'];
							include ($_SERVER['DOCUMENT_ROOT'] . "/Estanteria/APPs/php/conexion_mysql.php");
							$Consulta = "call dx_cargar_Notificaciones (".$IdUsuario.");";
							$ejecutar = $conn_sis->query($Consulta);
							$i=1;
							while($row= $ejecutar->fetch_assoc()) 
							{
									$Leida = "";
									if ($row['leida']==true){$Leida = "un";}
							?>	

								<div
									class="px-2 px-sm-3 py-3 border-300 notification-card position-relative <?php Echo ($Leida);?>read border-bottom">
									<div class="d-flex align-items-center justify-content-between position-relative">
										<div class="d-flex">
											<div class="avatar avatar-m status-online me-3">
												<?php 
													if ($row['IdNotificador'] == 0)
														{
															?>
													<div class="avatar-name rounded-circle"><span>A</span></div>
															<?php 
														}
														else 
														{
															?>
												<img class="rounded-circle" src="/estanteria/assets/img/team/40x40/<?php Echo ($row['IdNotificador']);?>.webp" alt="">															
															<?php 
														}
												;?>

											
											</div>
											<div class="flex-1 me-sm-3">
												<h4 class="fs--1 text-black"><?php Echo ($row['Notificador']);?></h4>
												<p class="fs--1 text-1000 mb-2 mb-sm-3 fw-normal"><span
														class='me-1 fs--2'>
														<?php 
														   switch ($row['Clase']) {
																case 'mensaje': Echo ("💬"); break;
																case 'Calendar': Echo ("📅"); break;
																case 'Like': Echo ("👍"); break;
																case 'People':Echo ("👤");  break;															
																default: Echo ("👤");
															}
														?>
														</span><?php Echo ($row['Texto']);?><span
														class="ms-2 text-400 fw-bold fs--2"><?php Echo ($row['Dias']);?>d</span></p>
												<p class="text-800 fs--1 mb-0"><span class="me-1 fas fa-clock"></span><span
														class="fw-bold"><?php Echo (date('h:i A ', strtotime($row['Hora'])));?></span><?php Echo (date('M d y', strtotime($row['Fecha'])));?></p>
											</div>
										</div>
										<div class="font-sans-serif d-none d-sm-block"><button
												class="btn fs--2 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
												type="button" data-stop-propagation="data-stop-propagation"
												data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
												aria-expanded="false" data-bs-reference="parent"><span
													class="fas fa-ellipsis-h fs--2 text-900"></span></button>
											<div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
													href="#!">Marcar como leido</a></div>
										</div>
									</div>
								</div>
							<?php 					
						$i=$i+1;	
						}
							$conn_sis->close();
						?>

					</div>
				</div>
			</div>
			<div class="card-footer p-0 border-top border-0">
				<div class="my-2 text-center fw-bold fs--2 text-600"><a class="fw-bolder"
						href="notifications.html">historial de Netificaciones</a></div>
			</div>
		</div>
	</div>
</li>