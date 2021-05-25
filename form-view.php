<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Order food & drinks</title>
</head>
<body>


<!--Carousel Starts-->

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/burger.jpeg" alt="burger">
            </div>

            <div class="item">
                <img src="img/menu.jpeg" alt="menu">
            </div>

            <div class="item">
                <img src="img/menu1.jpeg" alt="menu1">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!--Carousel Ends-->
<div class="container">
    <h1>Order food in restaurant "the Personal Ham Processors"</h1>
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="?food=1">Order food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?food=0">Order drinks</a>
            </li>
        </ul>
    </nav>

    <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" class="form-control" value="<?php echo $email?>">
            </div>
            <div></div>
        </div>

        <fieldset>
            <legend>Address</legend>
            <p><span class="error">* required field</span></p>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Street: *</label>
                    <input type="text" name="street" id="street" class="form-control"  value="<?php echo $street ?>">
                    <span class="error"><?php echo $streetErr;?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Street number: *</label>
                    <input type="text" id="streetnumber" name="streetnumber" class="form-control" value="<?php echo $streetNumber?>">
                    <span class="error"><?php echo $streetNumErr;?></span>

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City: *</label>
                    <input type="text" id="city" name="city" class="form-control"  value="<?php echo $city?>">
                    <span class="error"> <?php echo $cityErr;?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Zipcode *</label>
                    <input type="text" id="zipcode" name="zipcode" class="form-control" value="<?php echo $zipCode?>">
                    <span class="error"> <?php echo $zipcodeErr;?></span>
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Products</legend>
            <?php foreach ($products AS $i => $product): ?>
                <label>
                    <input type="checkbox"  value= <?php echo $product['price']?> name="products[<?php echo $i ?>]"/> <?php echo $product['name'] ?> -
                    &euro; <?php echo number_format($product['price'], 2) ?></label><br />
            <?php endforeach; ?>


        </fieldset>

        <label>
            <input type="checkbox" name="express_delivery" value="5" />
            Express delivery (+ 5 EUR)
        </label>

        <button type="submit" class="btn btn-primary">Order!</button>
    </form>

    <footer>You already ordered <strong>&euro; <?php echo $totalValue ?></strong> in food and drinks.</footer>
</div>

<style>
    footer {
        text-align: center;
    }
</style>

</body>
</html>
