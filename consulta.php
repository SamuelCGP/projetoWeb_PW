<?php
require_once("controller/ControllerCadastro.php")
?>
<!DOCTYPE html>
<html style="padding-left: 300px; padding-right: 300px;">
    <head>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">
        <script>
		function confirmDelete(delUrl) {
  			if (confirm("Deseja apagar o registro?")) {
   				document.location = delUrl;
   				//var url_string = "http://localhost/agendamento-mysql/" + delUrl;
				//var url = new URL(url_string);
				//var data = url.searchParams.get("id"); //pega o value
	        }  
		}
	    </script>
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
                <a class="nav-item nav-link disabled" href="#">Consulta <span class="sr-only">(aqui)</span></a>
              </div>
            </div>
        </nav>
    </head>
    <body>
        <!--TABELA CONSULTA-->
        <section class="content">
            <h5 class="text-black h4 title-cadastro">Consultar - Contatos Agendados</h5>
            <table class="table table-responsive table-hover table-consulta">
                <thead class="table">
                    <tr>
                        <th scope="col" id="consulta-item">Nome</th>
                        <th scope="col" id="consulta-item">Telefone</th>
                        <th scope="col" id="consulta-item">Origem</th>
                        <th scope="col" id="consulta-item">Contato</th>
                        <th scope="col" id="consulta-item">Observação</th>
                        <th scope="col" id="consulta-item">Ação</th>
                    </tr>
                </thead>
                <tbody id="TableData">
                    <?php
                        $controller = new ControllerCadastro();
                        $resultado = $controller->listar(0);

                        for($i=0;$i<count($resultado);$i++){
                    ?>
                    <tr>
                        <td scope="col"><?php echo $resultado[$i]['nome']; ?></td>
                        <td scope="col"><?php echo $resultado[$i]['telefone']; ?></td>
                        <td scope="col"><?php echo $resultado[$i]['origem']; ?></td>
                        <td scope="col"><?php echo $resultado[$i]['data_contato']; ?></td>
                        <td scope="col"><?php echo $resultado[$i]['observacao']; ?></td>
                        <td scope="col">
                            <button type="button" class="btn btn-outline-primary" onclick="location.href='editarClientes.php?id=<?php echo $resultado[$i]['id']; ?>'" style="width: 72px;">Editar</button>
							<button type="button" class="btn btn-outline-primary" onclick="javascript:
								confirmDelete('excluirClientes.php?id=<?php echo $resultado[$i]['id']; ?>')" style
							="width: 72px;">Excluir</button>
                        </td>
					</tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </section>

        <script src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>