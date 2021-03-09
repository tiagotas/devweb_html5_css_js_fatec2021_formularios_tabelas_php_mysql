<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Comentário: notar a identação -->
    <title>Contato</title>
    <meta charset="utf-8" />
    <link href="estilos/estilos_site.css" rel="stylesheet" type="text/css" />
    <link href="estilos/estilos_formulario.css" rel="stylesheet" type="text/css" />
    
    
    <!-- <script src="js/comportamentos.js" type="text/javascript"></script> -->
</head>

<body>
    <header>
        <nav id="menu-cabecalho">
            <ul>
                <li> <a href="index.php">Inicial</a> </li>
                <li> <a href="sobre.php">Sobre</a> </li>
                <li> <a href="produtos-servicos.php">Produtos Serviços</a> </li>
                <li> <a href="contato.php">Contato</a> </li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="corpo-formulario">
            <fieldset>
                <legend>Formulário de contato</legend>

                <form action="/acao" method="get">

                    <label>
                        Nome:
                        <input name="nome" type="text" required placeholder="Informe seu nome aqui:" autocomplete="off" />
                    </label>

                    <label>
                        E-mail:
                        <input name="email" type="email" placeholder="Seu melhor e-mail:" required />
                    </label>

                    <label>
                        Mensagem:
                        <textarea name="msg" placeholder="O que vc acha dos nossos produtos?" required></textarea>
                    </label>

                    <p>
                        <button type="submit">Enviar</button>
                    </p>

                    

                </form>
            </fieldset>
        </div>
    </main>
    <footer>
        rodapé.
    </footer>

    <!-- <p>
            <h1>Nome</h1>
            Meu nome é Tiago    
        </p>
        <p>
            <h2>Faculdade</h2>
            Estudo Web na Fatec
        </p> -->
</body>

</html>