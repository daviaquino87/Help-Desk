<?php require_once '../../services/usuario/validation.php'?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
<?php include_once '../../partials/navBar.php';?>
    <div class="container text-center mt mt-5">
        <div class='col align-self-cente'>
            <div class="card conteudo">
                <div class="card-head text-start p-2">
                   <h3 style='color:#9400d3'>Actions</h3>
                </div>
                <div class="card-body">
                    <button type="button" class="action-button" onClick={abrirChamado()}>
                        <img src="../images/Frame 3.png" alt="">
                    </button>
                    <button type="button" class="action-button" onClick={consultarChamado()}>
                        <img src="../images/Union.png" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
