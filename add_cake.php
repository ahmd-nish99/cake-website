

<?php

include_once "cake.php";


include_once "head.php";
$cake1 = new cake();

if(isset($_POST["cake_name"]))
{

    $cake1->cake_name=$_POST["cake_name"];
    $cake1->cake_price=$_POST["cake_price"];
    $cake1->cake_discription=$_POST["cake_dis"];
    $cake1->cake_cat=$_POST["cake_cat"];

    $cake1->insert_cake();



}

?>












    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="dashboard.css" rel="stylesheet">
</head>
<body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
<div class="navbar-nav">
<div class="nav-item text-nowrap">
  <a class="nav-link px-3" href="#">Sign out</a>
</div>
</div>
</header>

<div class="container-fluid">
<div class="row">
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="manage_cake.php">
          <span data-feather="home"></span>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_cake.php">
          <span data-feather="file"></span>
          Add Cake
        </a>
      </li>

      <li class="nav-item">
                            <a class="nav-link" href="add_cake.php">
                                <span data-feather="file"></span>
                                Website
                            </a>
                        </li>
    </ul>


  </div>
</nav>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
   
  </div>
<!-- - -->


<form action="add_cake.php" method="POST" enctype="multipart/form-data">
  <div class="row">
    
    <div class="col">
        name
      <input type="text" name="cake_name" class="form-control" placeholder="cake_name">


      price
      <input type="text" name="cake_price" class="form-control" placeholder="Last name">
    </div>
    

    <div class="col">
        Discription
      <input type="text" name="cake_dis" class="form-control" placeholder="Last name">


      <label class="form-label">  catergoty</label>
<select name="cake_cat" class="form-control">

<option value="1">  Butter</option>
<option value="2">  Butter</option>
<option value="3">  Butter</option>
<option value="5">  Butter</option>





</select>

    </div>

    <div class="col">
        Image
      <input type="file" name="cake_image" id="cake_image" class="form-control" placeholder="cake_image">


    
    </div>

  


  </div>


  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

  <!-- ---------------------------------------------------- -->
  <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->


</main>
</div>
</div>
