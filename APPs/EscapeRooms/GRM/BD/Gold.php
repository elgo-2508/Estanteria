<!-- Contenido de la sección izquierda -->
<h2>Goals</h2>
<button id="MDTSE1" class="btn btn-secondary">Top Secret E1</button>
<button id="MDTSE2"class="btn btn-secondary">Top Secret E2</button>
<button id="MDTSE3"class="btn btn-secondary">Top Secret E3</button>     
<!-- Modal -->
<div id="ModalTSE1" class="modal">
		<!-- Contenido del modal -->
		<div class="modal-content">
				<span class="close" id="cerrarModal1">&times;</span>
				<h1>Top Secret E1</h1>
				<p>You need to find the clues that will lead you to victory! I will reveal a crucial hint. Take a close look at the central image, there you will find several links. Each of them will activate different elements. One of these links holds the key you need to unlock this 'Top Secret' of Scenario 1. Explore carefully and solve the riddles!</p>
				<!-- Aquí puedes incluir contenido PHP según tus necesidades -->
		</div>
</div>	

<!-- Modal -->
<div id="ModalTSE2" class="modal">
		<!-- Contenido del modal -->
		<div class="modal-content">
				<span class="close" id="cerrarModal2">&times;</span>
				<p>aqui va el texto del modal 2</p>
				<!-- Aquí puedes incluir contenido PHP según tus necesidades -->
		</div>
</div>	

<!-- Modal -->
<div id="ModalTSE3" class="modal">
		<!-- Contenido del modal -->
		<div class="modal-content">
				<span class="close" id="cerrarModal3">&times;</span>
				<p>aqui va el texto del modal 3</p>
				<!-- Aquí puedes incluir contenido PHP según tus necesidades -->
		</div>
</div>	

<script>
	// JavaScript para controlar el modal
	document.getElementById('MDTSE1').addEventListener('click', function() 
	{
		document.getElementById('ModalTSE1').style.display = 'block';
	});
	document.getElementById('cerrarModal1').addEventListener('click', function() 
	{
		document.getElementById('ModalTSE1').style.display = 'none';
	});

	window.onclick = function(event) 
	{
		if (event.target == document.getElementById('ModalTSE1'))
		{
			document.getElementById('ModalTSE1').style.display = 'none';
		}
	}
</script>

<script>
	// JavaScript para controlar el modal
	document.getElementById('MDTSE2').addEventListener('click', function() 
	{
		document.getElementById('ModalTSE2').style.display = 'block';
	});
	document.getElementById('cerrarModal2').addEventListener('click', function() 
	{
		document.getElementById('ModalTSE2').style.display = 'none';
	});

	window.onclick = function(event) 
	{
		if (event.target == document.getElementById('ModalTSE2'))
		{
			document.getElementById('ModalTSE2').style.display = 'none';
		}
	}
</script>

<script>
	// JavaScript para controlar el modal
	document.getElementById('MDTSE3').addEventListener('click', function() 
	{
		document.getElementById('ModalTSE3').style.display = 'block';
	});
	document.getElementById('cerrarModal3').addEventListener('click', function() 
	{
		document.getElementById('ModalTSE3').style.display = 'none';
	});

	window.onclick = function(event) 
	{
		if (event.target == document.getElementById('ModalTSE3'))
		{
			document.getElementById('ModalTSE3').style.display = 'none';
		}
	}
</script>