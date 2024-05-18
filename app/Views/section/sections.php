<main role="main">

    <div class="container" style="margin-top: 150px">
        <div class="d-flex justify-content-center" style="margin-top: 100px">
            <a href="../../app/Controllers/section_controller.php?action=add_one" class="btn btn-primary my-2">Insert new section</a>
        </div>

        <h2 style="text-align: center;">OUR SECTIONS</h2>
        <table class="table container" style="margin-top: 50px">
            <thead>
            <tr>
                <th>SECTION ID</th>
                <th>NAME</th>
                <th>DESCRIPTION</th>
                <th>CREATION DATE</th>
                <th>LINK</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($resultado as $section) { ?>
                <tr>
                    <td><?php echo $section['id']; ?></td>
                    <td><?php echo $section['name']; ?></td>
                    <td><?php echo $section['description']; ?></td>
                    <td><?php echo $section['creation_date']; ?></td>
                    <td>
                        <?php if ($section['available'] == 1) { ?>
                            <form method="post" action="../../app/Controllers/product_controller.php?action=list_section_products">
                                <input type="hidden" name="section_id" value="<?php echo $section['id']; ?>">
                                <button type="submit" class="btn btn-primary btn-sm my-2">PRODUCTS</button>
                            </form>
                        <?php } else { ?>
                            NO AVAILABLE
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </div>

    <div class="d-flex justify-content-center">
        <a href="../../public/index.php" class="btn btn-primary my-2">Volver a inicio</a>
    </div>

</main>
