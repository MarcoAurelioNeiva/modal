<!DOCTYPE html>
<html>
<head>
	<title>MODAL</title>
	<style>
	.modal {
		display: none;
		position: fixed;
		z-index:1;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		overflow: auto;
		background-color: rgb(0,0,0,);
		background-color: rgba(0,0,0,0.4); 
	}
	.modal-content {
		position: relative;
		background-color: #fefefe; 
		margin:15% auto;
		padding: 0px;
		border: 1px solid yellow;
		width: 80%;
	}
	.close{
		color: #aaaaaa;
		font-size:28px;
		font-weight: bold;
	}
	.close:hover,
	.close:focus{
		color:#000;
		text-decoration: none;
		cursor: pointer;
	}
	.modal-header{
		padding: 2px 16px ;
		background-color: black;
		color: white;
		display:flex;
		justify-content:space-between;
		align-items:center;
	}
	.modal-header h2{
		flex-grow:1;
		margin: 0 150px;
	}
	.modal-body{
		padding:2px 16px;
		background-color: rgb(192,192,192);
	}
	.modal-footer{
		padding: 10px 16px;
		background-color:black;
		color: white;
	}

</style>
</head>
<body>

	<button id="mybtn">Abrir</button>

	<div id="mymodal" class="modal">
		<div class="modal-content">
			<div class="modal-header">
				<span class="close">&times;</span>				
				<h2>Jude / Lucy</h2>		
			</div>

			<div class="modal-body">
				<p>Morador(a) da Vila do Sol, não conhece seu passado. O que ele(a) sabe é que em um dia de tempestade, foi abandonado(a) na porta da capela da vila por uma figura misteriosa e foi criado por seus pais adotivos. Treinou a vida inteira para realizar o sonho de entrar no exército e lutar para proteger o reino. Após o saque à Vila do Sol, irá se aventurar ao lado de Walrus, seu(ua) mentor, para encontrar o responsável pelo ataque e descobrir sobre sua descendência e seu estranho poder. Ao longo da história, descobrirá que faz parte de uma antiga profecia que decidirá o destino do mundo.
</p>
				
			</div>
			<div class="modal-footer">
				<h3></h3>
			</div>
		</div>

	</div>

	<script>
		var btn = document.getElementById("mybtn");
		var modal = document.querySelector("#mymodal");
		btn.onclick = function(){modal.style.display = "block";}
		document.documentElement.addEventListener("click",function(event){ 
			var span = document.querySelector(".close");
			if (event.target == span || event.target === modal){
				modal.style.display = "none";
			}
		});

	</script>
</body>
</html>