<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Portal From Hardware</title>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Josefin+Sans&display=swap" rel="stylesheet">

     <!--Template based on URL below-->
     <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- Place your stylesheet here-->
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<?php 

    include "inc/header.php"; 
     ?>

<main role="main" class="container">

<div class="text-center mt-5 pt-5">
    <h1>Contato</h1>
    <p class="lead">Entre em contato com a equipe para saber mais sobre os jogos comentados!</p>
</div>
</div>
<form id="contact-form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Nome *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Insira seu nome aqui." required="required" data-error="Seu nome é um requisito.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Sobrenome *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Insira seu sobrenome aqui." required="required" data-error="O sobrenome é um requisito.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Insira seu Email aqui" required="required" data-error="É necessário um email válido.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_need">Qual o motivo do contato? *</label>
                    <select id="form_need" name="need" class="form-control" required="required" data-error="Por favor, escolha uma das opções.">
                        <option value=""></option>
                        <option value="sugestion">Sugestão</option>
                        <option value="pedido">Pedido de Tema a ser falado</option>
                        <option value="duvida">Dúvida</option>
                        <option value="suporte">Suporte</option>
                        <option value="outros">Outros</option>
                    </select>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Mensagem *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="seu texto aqui" rows="4" required="required" data-error="Por favor, envie uma mensagem."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Enviar">
            </div>
        </div>
        </div>
    </div>

</form>


</main>
   
<?php
    include "inc/footer.php";
    ?>
    

  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="/css/stylesheet.css" rel="stylesheet" type="css/text.css">
    <link href="/css/bootstrap.css" rel="stylesheet" type="css/css">
</body>

</html>