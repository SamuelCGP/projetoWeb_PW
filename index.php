<!DOCTYPE html>
<html style="padding-left: 300px; padding-right: 300px;">
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
        <script src="js/jquery.js"></script>
        <!-- STYLE -->
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <title>Cadastro</title>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #147436;">
            <a class="navbar-brand" href="#" style="padding-left: 20px;">Sistema de Cadastro</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link disabled" href="#">Cadastro <span class="sr-only">(aqui)</span></a>
                <a class="nav-item nav-link active" href="consulta.php">Consulta</a>
              </div>
            </div>
        </nav>
    </head>
    <body>
        <section class="content">
            <h5 class="text-black h4 title-cadastro">Cadastrar - Agendamento de Potenciais Clientes</h5>
            <p class="p-cadastro">Sistema utilizado para agendamento de serviços.</p>
            <!-- FORM -->
            <form method="post" action="controller/ControllerCadastro.php?funcao=cadastro" id="form" name="form">
                <!--Nome-->
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nome</label>
                    <input name="txtNome" type="text" class="form-control" id="txtNome" placeholder="Nome Completo">
                </div>
                <!--Telefone-->
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Telefone</label>
                    <input name="txtTelefone" type="text" class="form-control" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
                </div>
                <!--Origem-->
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Origem</label>
                    <select name="txtOrigem" id="txtOrigem" class="form-select">
                        <option selected>Celular</option>
                        <option>Fixo</option>
                        <option>Whatsapp</option>
						<option>Facebook</option>
						<option>Instagram</option>
						<option>Google Meu Negocio</option>
                    </select>
                </div>
                </br>
                <!--Data do Contato-->
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Data do Contato</label>
                    <input name="txtDataContato" type="date" class="form-control" id="txtDataContato">
                </div>
                <!--Observação-->
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Observação</label>
                    <textarea name="txtObservacao" class="form-control" id="txtObservacao"></textarea>
                </div>
                <!--Botão-->
                <button name="btnInserir" type="submit" class="btn btn-success" id="btnInserir">Cadastrar</button>
            </form>
        </section>
        <script src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>
