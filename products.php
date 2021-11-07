<?php

include_once "head.php";
include_once "cake.php";

$cake1 = new cake();

      $q =$cake1->get_all_cake();
?>


<?php

include_once "nav.php";

?>
    <!-------------------------------------------------- Header Section End --------------------------------------------------------------->

    <!-------------------------------------------------- hero Section starts --------------------------------------------------------------->
    <div class="hero-container">
  <div class="hero"></div>
  <div class="hero-stuff ">
      <h1>Who hates cakes made with love</h1>
      <button class="custom-btn btn-6"><span>Send Message</span></button>
  </div>
</div>

    <!-------------------------------------------------- hero Section End --------------------------------------------------------------->

<!-- Shop Section Begin -->
<section class="shop spad">
        <div class="container">
            <div class="shop__option">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                    
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="shop__option__right">
                        <select name="cake_cat" class="form-control" id="cat_drop">

<option value="1">  1</option>
<option value="2">  2</option>
<option value="3">  3</option>
<option value="5">  4</option>





</select>
                           
                        </div>
                    </div>
                </div>
            </div>

<div  id="cakeliist">
            <div class="row" >
            <?php foreach($q as $item):  ?>

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
  
                <?php endforeach ;  ?>
             
            </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
    <img
    src="assets/images/wave-haikei.svg"
    alt="triangle with all three sides equal"
    style="height: auto; width: 100%; margin-top:-50%;"
    />
    <!-------------------------------------------------- Contact Section End --------------------------------------------------------------->
<?php

include_once "foot.php";

?>



<script>



$("#cat_drop").change(function()
    {
        var cat_id=$("#cat_drop").val();
        console.log(cat_id);
        

        $.get("ajax.php?type=check_cake_cat",{cat:cat_id},function(data)
        {

          console.log(data);


          $("#cakeliist").html("");
            var txt='';
            console.log(data);
            var i_data = JSON.parse(data);
            $.each(i_data,function(i,x)
            {

                txt=



'<div class="col-lg-3 col-md-6 col-sm-6">'+
                    '<div class="product__item">'+
                        '<div class="product__item__pic set-bg" >'+
                        
                         ' <div class="product__label">'+
                                '<span>Cupcake</span>'+
                            '</div>'+
                        '</div>'+
                        '<div class="product__item__text">'+
                            '<h6><a href="#">'+i_data[i].cake_name+'</a></h6>'
                            '<div class="product__item__price">$32.00</div>'+
                            '<div class="cart_add">'+
                                '<a href="#">Add to cart</a>'+
                            '</div>'+
                       ' </div>'+
                   ' </div>'+
               ' </div>'+
              
                $("#cakeliist").append(txt);
            

            })



        });
    
    });


</script>