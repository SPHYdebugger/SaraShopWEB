<main role="main">

    <div class="d-flex justify-content-center" style="margin-top: 100px">
        <a href="../../app/Controllers/product_controller.php?action=add_one" class="btn btn-primary my-2">Insert new product</a>
    </div>

    <div class="container" style="margin-top: 20px">
        <h2 style="text-align: center;">SHOP PRODUCTS</h2>
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card" >


                        <div class="card-body">
                            <h5 class="card-title">NAME: <?php echo $product->getName();?></h5>
                            <p class="card-text" style="min-height: 50px;">DESCRIPTION: <?php echo $product->getDescription(); ?></p>
                            <p class="card-text" style="display:block; text-align: right;">PRICE:  <?php echo $product->getPrice(); ?></p>
                            <p class="card-text" style="display:block; text-align: right;">CREATE DATE:  <?php echo $product->getCreationDate(); ?></p>

                            <div style="display: ruby-text;">
                                <form method="post" action="">
                                    <input type="hidden" name="deleteProduct" value="<?php echo $product->getId(); ?>">
                                    <button type="submit" class="btn btn-primary btn-sm my-2" >DELETE</button>
                                </form>


                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>



    <div class="d-flex justify-content-center">
        <a href="../../public/index.php" class="btn btn-primary my-2">MAIN</a>
    </div>
</main>
