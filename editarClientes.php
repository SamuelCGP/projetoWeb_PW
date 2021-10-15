<?php
require_once("controller/ControllerCadastro.php");
?>
<!DOCTYPE html>
<html style="padding-left: 300px; padding-right: 300px;">
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
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
                <a class="nav-item nav-link active" href="index.php">Cadastro</a>
                <a class="nav-item nav-link active" href="consulta.php">Consulta</a>
                <a class="nav-item nav-link disabled" href="#">Editar Clientes<span class="sr-only">(aqui)</span></a>
              </div>
            </div>
        </nav>
    </head>
    <body>
        <section class="content">
            <h5 class="text-black h4 title-cadastro">Edição de Clientes</h5>
            <p class="p-cadastro">Sistema utilizado para editar dados de clientes.</p>
            <!-- FORM -->
            <?php
							$controller = new ControllerCadastro();
							$resultado = $controller->listar($_GET['id']);
							//print_r($resultado);
						?>
            <form method="post" action="controller/ControllerCadastro.php?funcao=editar&id=<?php echo $resultado[0]['id']; ?>" id="form" name="form">
							<div class="form-group">
								<label for="exampleFormControlInput1">Nome:</label>
								<input type="text" class="form-control" name="txtNome" required id="txtNome" value="<?php echo $resultado[0]['nome']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Telefone:</label>
								<input type="tel" class="form-control" required name="txtTelefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx" value="<?php echo $resultado[0]['telefone']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Origem:</label>
								<select class="form-control" required name="txtOrigem" id="txtOrigem">
									<option <?php if($resultado[0]['origem'] == "Celular"){ echo "selected"; } ?>>Celular</option>
									<option <?php if($resultado[0]['origem'] == "Fixo"){ echo "selected"; } ?>>Fixo</option>
									<option <?php if($resultado[0]['origem'] == "Whatsapp"){ echo "selected"; } ?>>Whatsapp</option>
									<option <?php if($resultado[0]['origem'] == "Facebook"){ echo "selected"; } ?>>Facebook</option>
									<option <?php if($resultado[0]['origem'] == "Instagram"){ echo "selected"; } ?>>Instagram</option>
									<option <?php if($resultado[0]['origem'] == "Google Meu Negocio"){ echo "selected"; } ?>>Google Meu Negocio</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Data do Contato:</label>
								<input type="date" class="form-control" required name="txtDataContato" id="txtDataContato" value="<?php echo $resultado[0]['data_contato']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Observação</label>
								<textarea class="form-control" name="txtObservacao" id="txtObservacao" rows="3"><?php echo $resultado[0]['observacao']; ?></textarea>
							</div>
							<button type="submit" id="btnInserir" class="btn btn-primary">Editar</button>
						</form>
        </section>
        <script src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>