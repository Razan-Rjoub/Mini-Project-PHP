<?php session_start() ?>
<!doctype html>
<html lang="en">

<head>
    <title>Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/viewProducts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<?php include 'navBar.php' ?>
<div class="container " >   <div class="row">
    <?php if (isset($_SESSION['productarr'])) {
        foreach ($_SESSION['productarr'] as $products) { ?>
        
         

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="img-fluid" src=" <?php echo $products['image']; ?>" alt="">
                        <div class="product-details">
                            <h6>
                                <?php echo $products['name']; ?>
                            </h6>
                            <h6>
                                <?php echo $products['description']; ?>
                            </h6>
                            <div class="price">
                                <?php echo $products['price']; ?>

                            </div>
                            <div class="prd-bottom">

                                <a href="" class="social-info">
                                    <i class="bi bi-heart"></i>
                                    <p class="hover-text">add to bag</p>
                                </a>
                                <a href="" class="social-info">
                                    <i class="bi bi-heart"></i>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <i class="bi bi-heart"></i>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            
        <?php }
    } ?></div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
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