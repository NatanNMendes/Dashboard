<?php include "head.php";?>

<body class="">
  <div class="wrapper ">
    <div class="main-panel">
    <?php include "menu.php" ;?>
      <!-- Navbar -->
      <?php include "header.php" ;?>
      <!-- End Navbar -->
      <div class="content">
        <!--INSERIR CARDS-->

        <?php
          switch ($_GET['r']) {
            case 'cadastrar_prod':
              include "pag/cad_produto.php";
            break;
            default:
            break;

            case 'list_prod':
              include "pag/list_produto.php";
            break;
          }
        ?>

      </div>
      <?php include "footer.php"; ?>
    </div>
  </div>
  <!--   Core JS Files   -->
<?php include "js.php"; ?>
