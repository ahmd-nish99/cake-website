<?php

include_once("head.php");
include_once "cake.php";

$cake1 = new cake();

      $q =$cake1->get_all_cake();

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
<!-- --------------------------------------------------------------------------------------------------------- -->




<div class="container-fluid my-5">
<label class="form-label">  catergoty</label>
<select name="cake_cat" id="cat_drop">
<option value="-1"> - 1</option>
<option value="1">  1</option>
<option value="2">  2</option>
<option value="3">  3</option>
<option value="5">  4</option>





</select>
<div class="row">






  <div class="col-lg" id="cakeliist">
  <?php foreach($q as $item):  ?>


<div class="col-sm-3 mx-5 my-2 d-flex justify-content-between" style="float:left;">
<div class="card text-center  "   >
  <img class="card-img-top" src="assets/images/xyz.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?=$item->cake_name ?></h5>
    <p class="card-text"><?=$item->cake_discription ?></p>
   
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

</div>
</div>




</div>

<?php endforeach ;  ?>


  </div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<!-- ----------------------------------------------------------------------------------------------------------------- -->
<?php

include_once("foot.php");
?>


<script>

$("#cat_drop").change(function()
    {
        var cat_id=$("#cat_drop").val();
        console.log(cat_id);
        if( cat_id ==-1){

            $.get("ajax.php?type=getallcake",function(data)
        {

          console.log(data);


          $("#cakeliist").html("");
            var txt='';
            console.log(data);
            var i_data = JSON.parse(data);
            $.each(i_data,function(i,x)
            {

                txt=
'<div class="col-sm-3 mx-5 my-2 d-flex justify-content-between" style="float:left;">'+
'<div class="card text-center  "   >'+
  '<img class="card-img-top" src="cake_image/'+i_data[i].cake_id+'.jpg" alt="Card image cap">'+
 ' <div class="card-body">'+
    '<h5 class="card-title">'+i_data[i].cake_name+'</h5>'+
    '<p class="card-text">'+i_data[i].cake_discription+'</p>'+
   
    '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">'+
  'Launch demo modal'+
'</button>'+

'</div>'+
'</div>'+

'</div>';
              
                $("#cakeliist").append(txt);
            

            })



        });

        }
        else{
            
        

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
'<div class="col-sm-3 mx-5 my-2 d-flex justify-content-between" style="float:left;">'+
'<div class="card text-center  "   >'+
  '<img class="card-img-top" src="cake_image/'+i_data[i].cake_id+'.jpg" alt="Card image cap">'+
 ' <div class="card-body">'+
    '<h5 class="card-title">'+i_data[i].cake_name+'</h5>'+
    '<p class="card-text">'+i_data[i].cake_discription+'</p>'+
   
    '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">'+
  'Launch demo modal'+
'</button>'+

'</div>'+
'</div>'+

'</div>';
              
                $("#cakeliist").append(txt);
            

            })



        });
        }
    });
    

</script>