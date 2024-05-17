<main role="main" >

    <div class="container" style="margin-top: 150px">

        <h2 style="text-align: center;">OUR SECTIONS</h2>
        <table class="table container" style="margin-top: 50px">
            <div class="container d-flex justify-content-center">
                <tr>
                    <th>SECTION ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>CREATION DATE</th>
                    <th>LINK</th>



                </tr>
                <?php

                foreach ($resultado as $section) {
                ?>
                                <tr>
                                    <td><?php echo $section['id']; ?></td>
                                    <td><?php echo $section['name']; ?></td>
                                    <td><?php echo $section['description']; ?></td>
                                    <td><?php echo $section['creation_date']; ?></td>

                                    <?php
                                    if ($section['avaliable'] == 1) { ?>
                                        <td>
                                            <button type="submit" class="btn btn-primary btn-sm my-2">GO</button>
                                        </td>
                                    <?php } ?>
                                    <?php
                                    if ($section['avaliable'] == 0) { ?>
                                        <td>
                                            NO AVALIABLE
                                        </td>
                                    <?php } ?>
                                </tr>
                    <?php
                }
                ?>

            </div>

        </table>

    </div>

    <div class="d-flex justify-content-center">
        <a href="../../public/index.php" class="btn btn-primary my-2">Volver a inicio</a>
    </div>

</main>

