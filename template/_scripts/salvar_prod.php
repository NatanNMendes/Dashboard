<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <?php
        include "config.php";

        $produto = $_POST['produto'];
        $valor = $_POST['valor'];
        $fornecedor = $_POST['fornecedor'];
        $funcionario_cadastrou = $_POST['funcionario_cadastrou'];
        $codigo_barras = $_POST['codigo_barras'];

        $sql = "INSERT INTO cad_produto (nome,data_cadastro, valor, fornecedor, funcionario_cadastrou, codigo_barras) VALUES ('$produto',CURRENT_DATE,'$valor','$fornecedor','$funcionario_cadastrou','$codigo_barras')";

        $query = $mysqli->query($sql);

        if($query){ ?>
            <script language="javascript">
            Swal.fire({
            title: 'Salvo',
            text: 'Produto Adicionado com Sucesso',
            icon: 'success',
            confirmButtonText: 'Ok',
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                location.href="../dash.php?r=cadastrar_prod";
            } 
            })
            </script>
        <?php }else{ ?>
            <script language="javascript">
            Swal.fire({
            title: 'Ops :/',
            text: 'Algo  de errado não está errado',
            icon: 'error',
            confirmButtonText: 'Ok',
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                location.href="../dash.php?r=cadastrar_prod";
            } 
            })
            </script>
        <?php  } ?>

    </body>
</html>