<main role="main">

    <div class="d-flex justify-content-center" style="margin-top: 100px">
        <a href="../../app/Controllers/shop_controller.php?action=add_one" class="btn btn-primary my-2">Insert new shop</a>
    </div>

    <div class="container" style="margin-top: 20px">
        <h2 style="text-align: center;">OUR SHOPS</h2>
        <div class="row">
            <?php foreach ($shops as $shop) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card" >


                        <div class="card-body">
                            <h5 class="card-title">NAME: <?php echo $shop->getName();?></h5>
                            <p class="card-text" style="min-height: 50px;">ADDRESS: <?php echo $shop->getAddress(); ?></p>
                            <p class="card-text" style="display:block; text-align: right;">Phone number <?php echo $shop->getPhone(); ?></p>
                           <?php
                            if($shop->getOpen() == 1){?>
                                <strong class="card-text" style="display:block; text-align: center; background-color: green">Is open </strong>
                            <?php } else {?>

                            <strong class="card-text" style="display:block; text-align: center; background-color: red">Is close </strong>
                            <?php } ?>
                            <div style="display: ruby-text;">
                                <form method="post" action="">
                                    <input type="hidden" name="deleteShop" value="<?php echo $shop->getId(); ?>">
                                    <button type="submit" class="btn btn-primary btn-sm my-2" >DELETE</button>
                                </form>
                                <p><?php echo $shop->getId(); ?></p>
                                <form method="post" action="../../app/Controllers/section_controller.php?action=list_shop_sections">
                                    <input type="hidden" name="shop_id" value="<?php echo $shop->getId(); ?>">
                                    <button type="submit" class="btn btn-primary btn-sm my-2" >SECTIONS</button>
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
