<!doctype html>
<html class="no-js" lang="fr">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <style>
        h2 {
            margin-left: 36px;
        }

        h4 {
            display: inline-block;
            padding-left: 40px;
        }


        h6 {
            margin-left: 60px;
        }


        .row p {
            border: solid 2px black;
            max-width: 40px;
            text-align: center;


        }


        .image {
            text-align: center;
        }

    </style>



    <div class="container">
        <div class="row">
            <div class="col-8 offset-1">
                <h2>
                    <?php echo 'Basket';?>
                </h2>
            </div>
            <div class="col-4 offset-1">
                <h4>
                    <?php echo 'Price: €50.99';?>
                </h4>
            </div>
                <div class="col-4 offset-1">
                <h4>
                    <?php echo 'Stock';?>
                </h4>
            </div>
        </div>
    </div>


    <div class="image">
        <img src="img/img/1.jpg" width="280" href="product.php" action="post">
    </div>

    <div class="container">
        <div class="row offset-2">
            <div class="col-8">
                <h5>
                    <?php
        echo'Size:'?>
                </h5>
            </div>
            <div class="col-5">
                <p>
                    <?php
                echo'40';
                    ?>
                </p>
            </div>
            <div class="col-5">
                <p>
                    <?php
                    echo'41';
                    ?>
                </p>
            </div>
            <div class="col-5">
                <p>
                    <?php
                    echo'42';
                   ?>
                </p>
            </div>
            <div class="col-5">
                <p>
                    <?php
                echo'43';
                   ?>
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="img/img/2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-4">
                <img src="img/img/images.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-4">
                <img src="img/img/2.jpg" class="img-fluid" alt="">
            </div>

        </div>
    </div>



</body>

</html>
