<?php

include_once("head.php");
include_once "cake.php";

$cake1 = new cake();

$q = $cake1->get_all_cake();

$cat_1 = $cake1->get_all_cake_cat_1();
$cat_2 = $cake1->get_all_cake_cat_2();
$cat_3 = $cake1->get_all_cake_cat_3();

// print_r($q);

?>


<?php

include_once "nav.php";
?>

<div class="hero-container">
  <div class="hero"></div>
  <div class="hero-stuff ">
    <h1>Who hates cakes made with love</h1>
    <button class="custom-btn btn-6"><span>Send Message</span></button>
  </div>
</div>

<!-- --------------------------- -->


<div class="container text-center py-5 float-right">
    
            <div class="row float-right">
             
                <div class="col-md-3 col-sm-3 text-center ">
                <div class="feature-name-menue">
                <a href="#cake">   <img src="assets/images/cp.png" class="img-fluid rounded-start " style="width: 50%;" alt="...">
               <h4>Cake</h4>  </a>
                </div>
              
                </div>
                <div class="col-md-3 col-sm-3 text-center ">
                <div class="feature-name-menue">
                <a href="#cupcake">  
                <img src="assets/images/cp.png" class="img-fluid rounded-start " style="width: 50%;" alt="...">
                <h4>Cup Cake</h4>
                </a>
                </div>
                </div>

              
                <div class="col-md-3 col-sm-3 text-center ">
                <div class="feature-name-menue">
                <a href="#eggless"> 
                <img src="assets/images/cp.png" class="img-fluid rounded-start " style="width: 50%;" alt="...">
                <h4>Eggless Cake</h4>
                </a>
                </div>
                </div>

                <div class="col-md-3 col-sm-3 text-center ">
                <div class="feature-name-menue">
                <a href="#cupcake"> 
                <img src="assets/images/cp.png" class="img-fluid rounded-start " style="width: 50%;" alt="...">
                <h4>Eggless Cake</h4>
                </a>
                </div>
                </div>
            </div>
        </div>



  


<!--  ------------------------------------------->

<div class="container" id="cake">
<div class="row">


<h5 class="card-title headings  text-center">Cake</h5>

<?php foreach ($cat_1 as $item) :  ?>


  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg">

                        <img class="card-img-top" src="cake_image/<?=$item->cake_id ?>.jpg" alt="Card image cap">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"><?=$item->cake_name ?></a></h6>
                            <div class="product__item__price">$32.00</div>
                            <div class="cart_add">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>

<?php endforeach;  ?>




</div>





</div>

<!-- ------------ -->







<!--  ------------------------------------------->

<div class="container"  id="cupcake" >
<div class="row">


<h5 class="card-title headings  text-center">Card title</h5>

<?php foreach ($cat_2 as $item) :  ?>


  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg">

                        <img class="card-img-top" src="cake_image/<?=$item->cake_id ?>.jpg" alt="Card image cap">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"><?=$item->cake_name ?></a></h6>
                            <div class="product__item__price">$32.00</div>
                            <div class="cart_add">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>

<?php endforeach;  ?>




</div>





</div>





<!--  ------------------------------------------->

<div class="container" id="eggless">
<div class="row">


<h5 class="card-title headings  text-center">Card title</h5>

<?php foreach ($cat_3 as $item) :  ?>

  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg">

                        <img class="card-img-top" src="cake_image/<?=$item->cake_id ?>.jpg" alt="Card image cap">
                            <div class="product__label">
                                <span>Cupcake</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"><?=$item->cake_name ?></a></h6>
                            <div class="product__item__price">$32.00</div>
                            <div class="cart_add">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>

<?php endforeach;  ?>




</div>





</div>

<?php

include_once("foot.php");
?>