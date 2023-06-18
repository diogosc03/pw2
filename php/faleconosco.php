<?php
    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/home.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <title>Fale conosco</title>
    </head>

    <body>
        <header>
            <div class="container">
                <h1><img src="../img/logo_uepa.png" alt="Logo da UEPA"></h1>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="../index.html" class="inicio" target="_self"><img src="../img/inicio.png" alt="Inicio"></a></li>
                    <li><a href="http://ccnt.uepa.br/" target="_blank" rel="external">CCNT UEPA</a></li>
                    <li><a href="../curso.html" target="_self" rel="next">Estrutura do curso</a></li>
                    <li><a href="../avaliacao.html" target="_self" rel="next">Avaliação</a></li>
                    <li><a href="../corpo_docente.html" target="_self" rel="next">Corpo docente</a></li>
                    <li><a href="../infraestrutura.html" target="_self" rel="next">Estrutura do campus</a></li>
                    <li><a href="../colegiado.html" target="_self" rel="next">Colegiado</a></li>
                    <li><a href="../nucleo_docente.html" target="_self" rel="next">Núcleo docente</a></li>
                    <li><a href="../php/faleConosco.php" target="_self" rel="next">Fale conosco</a></li>
                    <li id="login"><a href="../php/login.php" target="_self" rel="next">Login</a></li>
                </ul>
            </nav>
        </header>

        <section class="apresentacao">
            <div class="container">
                <h2>Fale conosco!</h2>
                <p>Nesta aba você pode mandar qualquer dúvida sobre tudo que envolve o curso de Ciência de Dados.</p>
                <h1>Basta preencher os campos abaixo e escrever sua dúvida:</h1>

                <form action="faleConosco.php" method="POST">
                    <div class="row">
                        <fieldset class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Nome completo</label>
                                <input type="text" class="form-control" name="nome" id="nome" autofocus required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email@exemplo.com" required>

                            </div>

                            <div class="form-group">
                                <label for="assunto">Qual o assunto da sua dúvida?
                                    <select name="assunto" id="assunto" class="form-control" required>
                                        <option value="" data-default disabled selected></option>
                                        <option value="curso">Sobre o curso</option>
                                        <option value="avaliacao">Sobre a avaliação</option>
                                        <option value="estrutura">Sobre a estrutura do campus</option>
                                        <option value="docente">Sobre o corpo docente</option>
                                        <option value="Colegiado">Sobre o colegiado</option>
                                        <option value="Colegiado">Sobre o núcleo docente</option>
                                    </select>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="mensagem">Sua dúvida:</label>
                                <textarea class="form-control" name="mensagem" id="mensagem" rows="5" style="resize: none;" required></textarea>
                            </div>
                        </fieldset>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg pull-right" name="enviar" id="enviar"></input>
                </form>
            </div>
        </section>

        <footer>
            <hr>
            <div class="container">
                <p>Universidade do Estado do Pará - UEPA</p>
                <p>Rua do Una, nº 156 - Belém - Pará - Brasil - 66.050-540 - Telégrafo</p>
                <p>Site Oficial: <a href="https://www.uepa.br" target="_blank" rel="external">www.uepa.br</a></p>
                <p>Telefone: (91) 3299-2202</p>
                <p>&copy; Copyright Diogo de Souza Corrêa, Léo Queiroz Pontes</p>

                <ul class="social">
                    <li><a href="https://www.facebook.com/UepaOficial" target="_blank" rel="external"><img src="../img/facebook.png" alt="Facebook" type="image/png"></a></li>
                    <li><a href="https://www.instagram.com/uepaoficial/" target="_blank" rel="external"><img src="../img/instragram.png" alt="Instagram" type="image/png"></a></li>
                    <li><a href="https://twitter.com/Uepaoficial" target="_blank" rel="external"><img src="../img/twitter.png" alt="Twitter" type="image/png"></a></li>
                    <li><a href="https://www.youtube.com/@universidadedoestadodopara3606" target="_blank" rel="external"><img src="../img/youtube.png" alt="Youtube" type="image/png"></a></li>
                    <li><a href="https://www.flickr.com/photos/biuepa/" target="_blank" rel="external"><img src="../img/flickr.png" alt="Flickr" type="image/png"></a></li>
                </ul>
            </div>
        </footer>
        <?php
            $nome;
            $email;
            $assunto;
            $mensagem;
            //error_reporting(0);
            // Verificando se os dados estão sendo enviados  
            // if(isset($_POST['enviar']))
            // {   print_r($_POST['nome']);
            //     print_r($_POST['email']);
            //     print_r($_POST['assunto']);
            //     print_r($_POST['mensagem']);
            // }    
            include_once('conexao.php');
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $assunto = $_POST['assunto'];
            $mensagem = $_POST['mensagem'];

            $result = mysqli_query($conn, "INSERT INTO fale_conosco(nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')");
        ?>
    </body>
</html>