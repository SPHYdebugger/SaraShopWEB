
<main>

    <!-- Mostrar mensaje de error si existe -->
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger" style="margin-top: 100px; margin-bottom: -100px" role="alert">
            <?php echo $_SESSION['error']; ?>
        </div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>


    <hr class="featurette-divider" style="margin-top: 150px">
    <h2 style="text-align: center;">INSERT NEW PRODUCT</h2>


    <div class="container col-6">
        <form action="../../app/Controllers/product_controller.php?action=add_product" method="post" enctype= "multipart/form-data">

            <div class="mb-3">
                <label for="name" class="form-label">NAME</label>
                <input type="text" class="form-control" id="NAME" name="NAME">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">DESCRIPTION</label>
                <input type="text" class="form-control" id="DESCRIPTION" name="DESCRIPTION">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">PRICE</label>
                <input type="number" class="form-control" id="PRICE" name="PRICE">
            </div>
            <div class="mb-3">
                <label for="section" class="form-label">SECTION</label>
                <input type="number" class="form-control" id="SECTION" name="SECTION">
            </div>
            <div class="mb-3">
                <label for="STOCK" class="form-label">STOCK</label>
                <select class="form-control" id="STOCK" name="STOCK">
                    <option value="">Choose one option</option>
                    <option value="1">True</option>
                    <option value="0">False</option>
                </select>
            </div>
            <div class="container  d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">INSERT</button>
            </div>
        </form>

        <div class="container  d-flex justify-content-center">
            <a href="../../app/Controllers/product_controller.php" type="button" class="btn btn-primary col-4" style="margin-top: 20px;">MAIN</a>
        </div>
    </div>


</main>



