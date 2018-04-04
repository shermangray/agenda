<html>
    <head>
        <script language="JavaScript" type="text/javascript" src="../js/jquery.js"></script>
        <meta charset="utf-8"/>
    </head>
    <style>
    {literal}
        .moldura{
            display: inline-block;
        }
    {/literal}
    </style>
<html>
    <body style="background:#dbd3ce">
        <div class="moldura">
            <fieldset><legend>Novo Contato</legend>
                <form id="form_agenda" action="armazenacontato.php" method="post"><br/><br/>
                    Nome: <input type="text" placeholder="Nome" name="nome" required/><br/><br/>
                    Email: <input type="text" placeholder="Email" name="email"/><br/><br/>
                    Celular: <input type="text" placeholder="Celular" name="celular" required/><br/><br/>
                    Nascimento: <input type="date" placeholder="Data de Nascimento" name="nascimento"/><br/><br/>
                    Filho: <input type="number" placeholder="Número de Filhos" name="filho" min='0'/><br/><br/>
                    <a href="index.php" class="botao" value="voltar">Voltar</a>
                    <input type="submit" style="background-color:#979797;" value="Salvar">
                </form>
        </fieldset>
        </div>
    </body>
</html>