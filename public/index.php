<?php




require('../includes/header.php');
require('../resources/db/connect-db.php');

?>
    <main role="main" style="background-color: lightgray">



        <div class="container marketing" style="padding-top: 20px; padding-bottom: 10px">


            <div class="row justify-content-center" style="text-align: center; margin-top: 150px; margin-bottom: 30px">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="../resources/images/tiendas.webp" alt="Generic placeholder image" width="140" height="140">
                    <h2>SHOPS</h2>
                    <p style="min-height: 90px">Find our shop next to you</p>
                    <p><a class="btn btn-lg btn-primary" href="../app/Controllers/client_controller.php?action=list_all" role="button">ENTER &raquo;</a></p>

                </div>
                <div class="col-lg-4">
                    <img class="rounded-circle" src="../resources/images/ropa.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>PRODUCTS</h2>
                    <p style="min-height: 90px">Discover our fantastic products</p>
                    <p><a class="btn btn-lg btn-primary" href="../app/Controllers/product_controller.php?action=list_all" role="button">ENTER &raquo;</a></p>
                </div >

                <?php
                if(isset($_SESSION['usuario_logado'])) { ?>

                    <div class="col-lg-4">
                        <img class="rounded-circle" src="../resources/images/compras.png" alt="Generic placeholder image" width="140" height="140">
                        <h2>COMPRAS</h2>
                        <p style="min-height: 90px">Entra para registrar una compra nueva, editar o borrar una existente, listarlas todas o buscar una.</p>

                        <p><a class="btn btn-secondary" href="../app/Controllers/buy_controller.php?action=list_all" role="button">ENTRAR &raquo;</a></p>

                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>

<?php
include("../includes/footer.php");
?>

