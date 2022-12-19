<?php
    require_once "config.php";

    if (!isset($_SESSION['username'])) {
        header('location: login_admin.php');
        $_SESSION['error'] = "You must log in first";
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login-user.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <style><?php include 'home.css'?></style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }

.carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
    min-height:200px;
}

/* Hide the carousel text when the screen is less than 600 pixels wide */
@media (max-width: 600px) {
  .carousel-caption {
    display: none;
  }
}
</style>
<body>
<?php include 'nav.php'?>
<!-------------------------------------------------------------------------------------------------------------->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="product/banner.png" alt="Image">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="product/howtorent.png" alt="Image">
        <div class="carousel-caption">
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<!-------------------------------------------------------------------------------------------------------------->
<section id="gallery">
  <div class="container mt-4">
    <div class="row text-center">
      <h2>WHY IS CAR<span>ENTER</span></h2>
    </div>
    <div class="row">
    <div class="col-lg-4 mb-4 mx-auto">
    <div class="card text-center">
      <img src="icon/easy-use.png" style="width:50%" alt="" class="img-fluid">
      <div class="card-body">
        <h3 class="card-title"><b>Easy</b></h3>
        <p class="card-text">Car Rental just on your fingertip <br>.
Create account and rent now</p>
      </div>
     </div>
    </div>
  <div class="col-lg-4 mb-4">
  <div class="card text-center">
  <img src="icon/friends.png" style="width:50%" alt="" class="img-fluid">
      <div class="card-body">
        <h3 class="card-title"><b>Friendly</b></h3>
        <p class="card-text">Carenter vision is to get close <br>and get in touch with customers</p>
      </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
    <div class="card text-center">
    <img src="icon/clipboard.png" style="width:50%" alt="" class="img-fluid">
      <div class="card-body">
        <h3 class="card-title"><b>Best Conditoon </b></h3>
        <p class="card-text">Carenter provides Very Good Condition <br>of car such as Proton, Perodua and Honda</p>
      </div>
     </div>
    </div>
  </div>
</div>
</section><br><hr>


<!-------------------------------------------------------------------------------------------------------------->
<div class="container" id="here">
<div class="row text-center">
    <h2>SELECT YOUR <span>CAR</span></h2>
</div>
    <div class="row">
        <div class="col-md-4" style="padding:15px;">
            <div style="display:inline-block; border:solid 1px #808080; padding:15px">
                <div>
                    <img class="img-responsive" alt="eCommerce Product List" src="car/crv.jpg" />
                    <br />
                    <h2><a href="#">HONDA CRV</a></h2>
                    <br />
                    <p class="text-justify">Quantity : </p>
                </div>
                <br />
                <div class="btn-ground text-center" style="padding-bottom: 30px">
                <a href=<?php echo "form-user.php?vehicleID=V01"?> class="btn btn-primary"><i class="fa fa-shopping-cart"></i> RENT</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productmodal1"><i class="fa fa-info"></i> Info</button>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="padding:15px;">
            <div style="display:inline-block; border:solid 1px #808080; padding:15px">
                <div>
                    <img class="img-responsive" alt="Bootstrap template" src="car/civic.jpg" />
                    <br />
                    <h2><a href="#">HONDA CIVIC</a></h2>
                    <br />
                    <p class="text-justify">Quantity : </p>
                </div>
                <br />
                <div class="btn-ground text-center" style="padding-bottom: 30px">
                <a href=<?php echo "form-user.php?vehicleID=V02"?> class="btn btn-primary"><i class="fa fa-shopping-cart"></i> RENT</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productmodal2"><i class="fa fa-info"></i> Info</button>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="padding:15px;">
            <div style="display:inline-block; border:solid 1px #808080; padding:15px">
                <div>
                    <img class="img-responsive" alt="Bootstrap template" src="car/myvi.jpg" />
                    <br />
                    <h2><a href="#">PERODUA MYVI</a></h2>
                    <br />
                    <p class="text-justify">Quantity : </p>
                </div>
                <br />

                <div class="btn-ground text-center" style="padding-bottom: 30px">
                <a href=<?php echo "form-user.php?vehicleID=V03"?> class="btn btn-primary"><i class="fa fa-shopping-cart"></i> RENT</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productmodal3"><i class="fa fa-info"></i> Info</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="padding:15px;">
            <div style="display:inline-block; border:solid 1px #808080; padding:15px">
                <div>
                    <img class="img-responsive" alt="eCommerce Product List" src="car/alza.jpg" />
                    <br />
                    <h2><a href="#">PERODUA ALZA</a></h2>
                    <br />
                    <p class="text-justify">Quantity : </p>

                </div>
                <br />

                <div class="btn-ground text-center" style="padding-bottom: 30px">
                <a href=<?php echo "form-user.php?vehicleID=V04"?> class="btn btn-primary"><i class="fa fa-shopping-cart"></i> RENT</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productmodal1"><i class="fa fa-info"></i> Info</button>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="padding:15px;">
            <div style="display:inline-block; border:solid 1px #808080; padding:15px">
                <div>
                    <img class="img-responsive" alt="Bootstrap template" src="car/iriz.jpg" />
                    <br />
                    <h2><a href="#">PROTON IRIZ</a></h2>
                    <br />
                    <p class="text-justify">Quantity : </p>
                </div>
                <br />

                <div class="btn-ground text-center" style="padding-bottom: 30px">
                <a href=<?php echo "form-user.php?vehicleID=V05"?> class="btn btn-primary"><i class="fa fa-shopping-cart"></i> RENT</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productmodal2"><i class="fa fa-info"></i> Info</button>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="padding:15px;">
            <div style="display:inline-block; border:solid 1px #808080; padding:15px">
                <div>
                    <img class="img-responsive" alt="Bootstrap template" src="car/saga.jpg" />
                    <br />
                    <h2><a href="#">PROTON SAGA</a></h2>
                    <br />
                    <p class="text-justify">Quantity : </p>
                </div>
                <br />

                <div class="btn-ground text-center" style="padding-bottom: 30px">
                    <a href=<?php echo "form-user.php?vehicleID=V06"?> class="btn btn-primary"><i class="fa fa-shopping-cart"></i> RENT</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productmodal3"><i class="fa fa-info"></i> Info</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------------MODAL-------------------------------------------------------------------------------------------->
<div class="modal fade" id="productmodal1" tabindex="-1" role="dialog" aria-labelledby="productmodal1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">HONDA CRV</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" alt="Bootstrap template" src="car/crv.jpg" />
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>ID: <span>185</span></h4>
                        <br />
                        <ul>
                                            <li>Seat : 5</li>
                                            <li>Tank Capacity : 58 liters</li>
                                            <li>Transmission: Automatic</li>
                    </ul>                        <br />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productmodal2" tabindex="-1" role="dialog" aria-labelledby="productmodal2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">HONDA CIVIC</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" alt="Bootstrap template" src="car/civic.jpg" />
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>ID: <span>65</span></h4>
                        <br />
                        <ul>
                                            <li>Seat : 5</li>
                                            <li>Tank Capacity : 47 liters</li>
                                            <li>Transmission: Automatic</li>
                    </ul>                        <br />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="productmodal3" tabindex="-1" role="dialog" aria-labelledby="productmodal3">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">PERODUA MYVI</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" alt="Bootstrap template" src="car/myvi.jpg" />
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>ID: <span>569</span></h4>
                        <br />
                        <ul>
                                            <li>Seat : 5</li>
                                            <li>Tank Capacity : 36 liters</li>
                                            <li>Transmission: Automatic</li>
                    </ul>                        <br />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="productmodal4" tabindex="-1" role="dialog" aria-labelledby="productmodal4">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">PERODUA ALZA</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" alt="Bootstrap template" src="car/alza.jpg" />
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>ID: <span>185</span></h4>
                        <br />
                        <ul>
                                            <li>Seat : 7</li>
                                            <li>Tank Capacity : 42 liters</li>
                                            <li>Transmission: Automatic</li>
                    </ul>                        <br />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="productmodal5" tabindex="-1" role="dialog" aria-labelledby="productmodal5">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">PROTON IRIZ</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" alt="Bootstrap template" src="car/iriz.jpg" />
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>ID: 65</h4>
                        <br />
                        <ul>
                                            <li>Seat : 5</li>
                                            <li>Tank Capacity : 40 liters</li>
                                            <li>Transmission: Automatic</li>
                    </ul>                        <br />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="productmodal6" tabindex="-1" role="dialog" aria-labelledby="productmodal6">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">PROTON SAGA</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" alt="Bootstrap template" src="car/saga.jpg" />
                    </div>
                    <div class="col-md-6 product_content">
                        <h4>ID: <span>569</span></h4>
                        <br />
                        <ul>
                                            <li>Seat : 5</li>
                                            <li>Tank Capacity : 40 liters</li>
                                            <li>Transmission: Automatic</li>
                    </ul>                        <br />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'?>
</body>
</html>
