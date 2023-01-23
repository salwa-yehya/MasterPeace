<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Customize</title>
    <style>



    </style>
</head>

<body>
    <?php include('./component/header.php') ?>
    <div class="Customize-title">
        <h1> Customize</h1>
    </div>
    <section id="Customize-page" class="section-p1">
        <div class="Customize-detiles">
            <p class="req">After the Selections, Check Below for the Calculated Price.</p>

            <div class="shape">
                <h2>Shape</h2>
                <p>(choose shape you like)</p>
                <br>
                <div class="shape-img">
                    <img src="./img/cp1.jpeg" alt="" width="250px">
                    <img src="./img/cp2.jpeg" alt="" width="250px">
                    <img src="./img/cp333.jpeg" alt="" width="250px">
                    <img src="./img/cp4.jpeg" alt="" width="250px">
                </div>
            </div>
            <!-- <br><br>
            <div class="sec-flex">
                <div class="color">
                    <h2>Frame Color</h2>
                    <p>(Choose a mirror color we like)</p>
                    <select>
                        <option value="0">Select Frame Color</option>
                        <option value="1"> Gold</option>
                        <option value="2"> Black</option>
                    </select>
                </div>



                <div class="led">
                    <h2>Led</h2>
                    <p>(Do you like to have a led behind your mirror?)</p>

                    <input type="checkbox"> Led
                </div>

                <div class="size">
                    <h2>Size</h2>
                    <p>(Choose a mirror size we like)</p>
                    <label for="">width:</label><br>
                    <input type="number"><br>
                    <label for="">height:</label><br>
                    <input type="number">
                </div>
            </div>
            <div class="third-flex">
            <h2>price:70jd</h2>
            <input type="submit" value="add to cart" name="addTOcart">
            </div>
        </div> -->

                <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="./img/cp333.jpeg" alt="" width="100%">
            </div>

            <div class="single-pro-details">
                <!-- <h4 class="titles"> Circle Mirror</h4> -->
                <div class="size">
                    <h2>Size</h2>
                    <p>(Choose a mirror size we like)</p>
                    <label for="">width:</label>
                    <input type="number">
                    <label for="">height:</label>
                    <input type="number">
                </div>
                <br>
                <div class="color">
                    <h2>Frame Color</h2>
                    <p>(Choose a mirror color we like)</p>
                    <select>
                        <option value="0">Select Frame Color</option>
                        <option value="1"> Gold</option>
                        <option value="2"> Black</option>
                    </select>
                </div>
                <br>
                <div class="led">
                    <h2>Led</h2>
                    <p>(Do you like to have a led behind your mirror?)</p>
                    <select>
                        <option value="0">Led </option>
                        <option value="1">With Led</option>
                        <option value="2">WithOut Led</option>
                    </select>
                </div>
                <br>
                <h2>50 jd</h2>
                <input type="number" value="1">
                <button class="normal">Add To Cart</button>
                <!-- <h4>Product Details :</h4>
                <pre> - Gold Frame
        - Handcrafted and finished
        - Wall mount in portrait position only
        
        </pre> -->
        </div>

  </section>

    </section>



    <?php include('./component/footer.php') ?>

</body>

</html>