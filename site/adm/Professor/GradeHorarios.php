<?php 
	include("Seguranca.php");
?>
 	<link rel="stylesheet" href="professor/css/Aulas.css" />
    <link rel="stylesheet" href="../css/shadowbox.css" />
    <link rel="stylesheet" href="professor/css/grades.css" />
    <link rel="stylesheet" href="professor/css/jquery-ui-cadastroAulas.css" />
	<script src="../js/shadowbox.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		Shadowbox.init
		({
			language: 'pt',
			player: ['img', 'html', 'swf']
		});	
	});
    </script>
	
	<script>

  </script>	

	<!--conteudo-->
    
    	<div class="principal">	
			<div id="datasemana">
				<br>
				<p>Agende os dias e horários disponíveis para a próxima semana:</p><br>
			</div>
			<div class="todasemana">
			<div id="dom" name="domingo"  class="dsemana">
				<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=1" id="domingo" class="semana">Domingo</a>
			</div>
			
			<div id="seg" name="segunda-feira" class="dsemana">
				<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=2" id="segunda" class="semana">Segunda-feira</a><br>
			</div>
			
			<div id="ter" name="terça-feira" class="dsemana">
				<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=3" id="terca" class="semana">Terça-feira</a><br>
			</div>
			
			<div id="qua" name="quarta-feira" class="dsemana">
				<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=4" id="quarta" class="semana">Quarta-feira</a><br>
			</div>
			
			<div id="qui" name="quinta-feira" class="dsemana">
				<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=5" id="quinta" class="semana">Quinta-feira</a><br>
			</div>
			
			<div id="sex" name="sexta-feira" class="dsemana">
				<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=6" id="sexta" class="semana">Sexta-feira</a><br>
			</div>
			
			<div id="sab" name="s�bado" class="dsemana">
				<a rel="shadowbox;height=520;width=520" href="professor/CadastroHorario.php?dia=7" id="sabado" class="semana">Sábado</a><br>
			</div>
			<!--  
			<div id="gradesalva" class="gradesalva">
  			<p id="gradesalva">Adicione aqui a grades que deseja salvar</p>
  			<ul id="carrinho-produtos" class="ui-droppable">
  				
  			</ul>
			</div>
			
			<div id="lixeira" class="lixeira">
  			<a  class='lixo' title='Lixeira'><img src='../imagens/lixeira.png'/></a>
			</div>
			-->
			</div>
		</div>
    
    <!--/conteudo-->