<div class="row flex-nowrap justify-content-between align-items-center">
	<div class="col-4">
		<img src="../../../assets/img/icons/logo-1.png"alt="phoenix" width="27">
		Girald-Games
	</div>
	<div class="col-4 text-center">
		<h2>Captain One's Last Voyage</h2>
	</div>
	<div class="col-4 d-flex justify-content-end align-items-center">
		<a id="MDHelpSE2" class="btn btn-sm btn-outline-secondary" >❔</a>
	</div>
</div>

<!-- Modal -->
<div id="ModalHelp" class="modal">
		<!-- Contenido del modal -->
		<div class="modal-content">
				<span class="close" id="cerrarModalh">&times;</span>
				<p>aqui va el texto del modal 3</p>
				<!-- Aquí puedes incluir contenido PHP según tus necesidades -->
		</div>
</div>	

<script>
	// JavaScript para controlar el modal
	document.getElementById('MDHelpSE2').addEventListener('click', function() 
	{
		document.getElementById('ModalHelp').style.display = 'block';
	});
	document.getElementById('cerrarModalh').addEventListener('click', function() 
	{
		document.getElementById('ModalHelp').style.display = 'none';
	});

	window.onclick = function(event) 
	{
		if (event.target == document.getElementById('ModalHelp'))
		{
			document.getElementById('ModalHelp').style.display = 'none';
		}
	}
</script>