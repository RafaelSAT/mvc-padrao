<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema Dirol</title>
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
        <script src="<?php echo BASE_URL; ?>assets/js/"></script>
        <base href="<?php echo BASE_URL;?>"/>
    </head>
    <body>
        <div>
            <h1>Topo</h1>
            <a href="<?php echo BASE_URL;?>">Cadastro</a>
        </div>
        <?php $this->loadViewInTemplate($viewName);?>
        <div><h1>Final</h1></div>
    </body>
</html>