<?php
include __DIR__ . '/database.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Php-oop-2</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h2>Boolshop</h2>
            </a>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h4>I nostri prodotti</h4>
            </div>
        </div>
        <div class="row">
            <?php foreach ($arrayproducts as $product) { ?>
                <div class="col-4">
                    <div class="card m-2" style="width: 20rem;">
                        <div class="card-body">
                            <?php echo '<img src="' . $product->image . '" class="img-fluid"' ?>
                            <h5 class="card-title"><?php echo $product->title ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo setTypology($product->category->typology);
                                                                        echo $product->category->typology ?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $product->price ?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $product->title_1  ?></h6>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $product->title_2  ?></h6>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>