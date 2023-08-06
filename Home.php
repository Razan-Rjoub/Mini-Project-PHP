<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <title>Add Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/addProduct.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="color">
    <?php include 'navBar.php' ?>
    <section class="sectionone">
        <div class="row">
            <div class="col-6">
                <img src="./images/shoes.png" alt="" class="imagemain">
            </div>
            <div class="col-6">
                <h1 class="walk">Walk, <br> With Pride & Freedom </h1>
                <h4 class="shop">Shop the brand that you wish for and Customize Products <br> to your liking. Buy
                    Footwears at ease.</h4>

                <button class="button btn1"><a href="#addproduct">Add Product</a></button>
                <button class="button btn2"><a href="viewProducts.php">View Products</a></button>

                <div class="row">

                    <div class="icon-text">
                        <i class="bi bi-credit-card"></i>
                        <p class="Txt">Secured Payment</p>
                    </div>
                    <div class="icon-text">
                        <i class="bi bi-clock-history"></i>
                        <p class="Txt">24/7 Customer Care</p>
                    </div>
                    <div class="icon-text">
                        <i class="bi bi-truck"></i>
                        <p class="Txt">24/7 Customer Care</p>
                    </div>
                </div>
                <br>

            </div>
        </div>
    </section>

    <div class="container" id="addproduct">
        <form action="form.php" method="POST">
            <div class="row">
                <div class="col-3">
                    <label for="cname">Product Name:</label>
                </div>
                <div class="col-9">
                    <input type="text" id="cname" name="name" placeholder="Enter Product Name ..." Required>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <label for="price">Price :</label>
                </div>
                <div class="col-9">
                    <input type="text" id="price" name="price" placeholder="Enter the  Price ..." Required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="details">Details :</label>
                </div>
                <div class="col-9">
                    <input type="text" id="details" name="details" placeholder="More details ..." Required>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="canimg">Image :</label>
                </div>
                <div class="col-9">
                    <input type="text" id="canimg" name="image" placeholder="Enter Image Link ...">
                </div>

            </div>
            <br>

            <button type="submit" class="addbtn" name='submit'>Add to Products</button>

        </form>
    </div>
    <table>
        <?php include 'tableProd.php' ?>
    </table>
    </div>
    <?php include 'Footer.php' ?>
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>