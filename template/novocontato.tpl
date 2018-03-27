<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
	  xmlns="http://www.w3.org/1999/html">
<head>
	<script language="JavaScript" type="text/javascript" src="../js/jquery.js"></script>
</head>
<html>
	<body style="background:#dbd3ce">
		<input style="z-index: 10000; position: fixed; background-color:#979797 ; right: 14.5em;" type="button" value="Salvar" onClick="window.location='index.php'">
		<form id="form_agenda" action="novo_contato.php" method="get">
			nome: <input type="text" placeholder="nome" name="nome" required/>
			email: <input type="text" placeholder="email" name="email"/>
			celular: <input type="number" placeholder="numero" name="numero" required/>
			nascimento: <input type="number" placeholder="data" name="data"/>
			filho: <input type="number" placeholder="qntd" name="qntd"/>
			<input type="submit" class="botao" value="Envial"/>
		</form>
	</body>
</html>