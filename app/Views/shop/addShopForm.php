
<main>

    <!-- Mostrar mensaje de error si existe -->
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger" style="margin-top: 100px; margin-bottom: -100px" role="alert">
            <?php echo $_SESSION['error']; ?>
        </div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>

    <hr class="featurette-divider" style="margin-top: 150px">
    <h2 style="text-align: center;">NEW SHOP FORM</h2>


    <div class="container col-6">
        <form action="../../app/Controllers/shop_controller.php?action=add_shop" method="post" enctype= "multipart/form-data">

            <div class="mb-3">
                <label for="NAME" class="form-label">NAME</label>
                <input type="text" class="form-control" id="NAME" name="NAME">
            </div>
            <div class="mb-3">
                <label for="ADDRESS" class="form-label">ADDRESS</label>
                <input type="text" class="form-control" id="ADDRESS" name="ADDRESS">
            </div>
            <div class="mb-3">
                <label for="PHONE" class="form-label">PHONE</label>
                <input type="text" class="form-control" id="PHONE" name="PHONE">
            </div>
            <div class="mb-3">
                <label for="cliente" class="form-label">IS OPEN</label>
                <select class="form-control" id="OPEN" name="OPEN">
                    <option value="">Choose one option</option>
                    <option value="1">True</option>
                    <option value="0">False</option>
                </select>
            </div>


            <div class="container  d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Insert SHOP</button>
            </div>
        </form>

        <div class="container  d-flex justify-content-center">
            <a href="../../app/Controllers/client_controller.php" type="button" class="btn btn-primary col-4" style="margin-top: 20px;">Volver a la lista de clientes</a>
        </div>
    </div>
</main>





