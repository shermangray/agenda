<html>
    <head>
        <script language="JavaScript" type="text/javascript" src="../js/jquery.js"></script>
        <meta charset="utf-8"/>
    </head>
<html>
    <body style="background:#dbd3ce">
        <input style="z-index: 10000; position: fixed; background-color:#979797 ; right: 10.5em" type="button" value="Voltar" onClick="history.go(-1)">
        <input style="z-index: 10000; position: fixed; background-color:#979797 ; right: 5.0em;" type="button" value="Atualizar" onClick="history.go(0)">
        <input style="z-index: 10000; position: fixed; background-color:#979797 ; right: 1.5em;" type="button" value="Topo" onCLick="window.scrollTo(0,0)">
        <input style="z-index: 10000; position: fixed; background-color:#979797 ; right: 14.5em;" type="button" value="Início" onClick="window.location='index.php'">
        <form id="form_agenda" action="index.php" method="get">
            <h1>AGENDA ELETRÔNICA</h1>
            <tr>
                <td><a href="nome_contato.php?id_contato={$contato.id_contato}">{$contato.nome}</a></td>
            </tr>
            <a href="novocontato.php"><h4>Novo contato</h4></a></br>
            Pesquisar contato: <input type="text" name="nome">
            <input type="submit" value="Enviar"></br></br>
            Lista de contatos:
        </form>
        <table bgcolor="#deb887" border="10" >
            <tr>
                <td><h3>Nome</h3></td><td><h3>Email</h3></td><td><h3>Celular</h3></td><td><h3>Nascimento</h3></td><td><h3>Filho</h3></td><td><h3>Ação</h3></td>
            </tr>
            {foreach from=$contatos item=contato}
                <tr>
                    <td><a href="editar.php?id_pessoa={$contato.id}">{$contato.nome}</a></td><td>{$contato.email}</td><td>{$contato.celular}</td><td>{$contato.nascimento}</td><td>{$contato.filho}</td><td><a href="excluir.php?id={$contato.id}">Excluir</a></td>
                </tr>
            {/foreach}
        </table>
        <a href="index.php" class="botao" value="voltar"><h3>Voltar</h3></a>
    </body>
</html>