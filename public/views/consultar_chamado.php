<?php require_once '../../services/usuario/validation.php'?>
<?php
$chamados = [];
if (file_exists('../../temp/chamados.txt')) {
    $file = fopen('../../temp/chamados.txt', 'r');

    while (!feof($file)) {
        $registro = fgets($file);
        $chamados[] = $registro;
    }

    fclose($file);
} else {

}

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link href="../css/style.css" rel="stylesheet" />
      <script src="../js/script.js"></script>
      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
         crossorigin="anonymous"
         />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Consultar Chamados</title>
   </head>
   <body>
      <?php include_once '../../partials/navBar.php';?>
      <div class="container mt mt-5">
         <div class="col align-self-cente">
            <div class="card conteudo">
               <div class="card-head text-start d-flex justify-content-between p-2">
                  <h3 style="color: #9400d3">Chamados</h3>
                  <button class="btn btn-warning" onClick="{voltar()}">Voltar</button>
               </div>
               <div class="card-body">
                  <?php foreach ($chamados as $chamado) {
    $chamado_dados = explode('#', $chamado);

    if (count($chamado_dados) < 3) {
        continue;
    }
    ?>
                  <div class="card mb-3 bg-light">
                     <div class="card-body">
                        <h5 class="card-title"><?php echo $chamado_dados[0] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                           <?php echo $chamado_dados[1] ?>
                        </h6>
                        <p class="card-text"><?php echo $chamado_dados[2] ?></p>
                     </div>
                  </div>
                  <?php }?>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>