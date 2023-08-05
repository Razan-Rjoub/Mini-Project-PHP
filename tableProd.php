<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/addProduct.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="mt-4">
        <div class="table-responsive">
            <table class="table table-bordered table-striped custom-table w-100">
                <?php
                if (isset($_SESSION['productarr'])) {
                    ?>
                    <thead>
                        <tr class="text-center">
                            <th>PRODUCT NAME</th>
                            <th>PRODUCT DESCRIPTION</th>
                            <th>PRODUCT PRICE</th>
                            <th>PRODUCT IMAGE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['productarr'] as $products) { ?>
                            <tr class="text-center">
                                <td><img class="image-prod" src="<?php echo $products['image']; ?>" alt="product image"
                                        style=" width:200px ;"></td>
                                <td>
                                    <?php echo $products['name']; ?>
                                </td>
                                <td>
                                    <?php echo $products['description']; ?>
                                </td>
                                <td>
                                    <?php echo $products['price']; ?>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                    <?php
                }

                ?>
            </table>
</body>

</html>