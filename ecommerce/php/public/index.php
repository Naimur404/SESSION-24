<!doctype html>
<html lang="en">
<?php
include_once('../views/elements/head.php');
?>
<body>

<!--Markup for Header-->
<header>
    <div class="header-container">
       
        <div class="container">
            <div class="d-none d-sm-none d-md-block">
                <div class="row">
                    <div class="col-sm-3">
                        <a class="navbar-brand" href="index.html">
                            <img src="img/logo.png" alt="Logo Icon">
                        </a>
                    </div>
                    <div class="col-sm-7 offset-2">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">DELIVERY INFORMATION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PRIVACY POLICY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon2">
                                        <i class="fas fa-search"></i>
                                    </span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <button type="button" class="btn btn-danger">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span class="cart-count"> 0</span>
                                        <span class="price"> Cart / &dollar;0.00</span>
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-block d-md-none">
                <div class="row">
                    <div class="col-sm-3 offset-4">
                        <a class="navbar-brand" href="index.html">
                            <img src="img/logo.png" alt="Logo Icon">
                        </a>
                    </div>
                    <!--<div class="col-sm-7 offset-2">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">DELIVERY INFORMATION</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PRIVACY POLICY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon2">
                                        <i class="fas fa-search"></i>
                                    </span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <button type="button" class="btn btn-danger">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span class="cart-count"> 0</span>
                                        <span class="price"> Cart / &dollar;0.00</span>
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="myNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.html">LIVING ROOM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">DINING & BAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BEDROOM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">KITCHEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME IMPROVEMENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CUSTOM</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</header>

<!--Markup for Carousel-->
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>

    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/slide-11-1920x600.jpg" class="d-block w-100" alt="Slider Image">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/slide-22-1920x600.jpg" class="d-block w-100" alt="Slider Image">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/slide-33-1920x600.jpg" class="d-block w-100" alt="Slider Image">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/slide-44-1920x600.jpg" class="d-block w-100" alt="Slider Image">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!--Markup for BEST SELLERS-->
<section id="best-sellers" class="mt-2">
    <div class="container">
        <div class="d-flex justify-content-between best-seller">
            <h1>BEST <span>SELLERS</span></h1>
            <div>
                <button type="button" class="btn btn-light"><i class="fas fa-angle-left"></i></button>
                <button type="button" class="btn btn-light"><i class="fas fa-angle-right"></i></button>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-4 g-4 text-center">
            <div class="col">
                <div class="card">
                    <a href="product-detail.html"><img src="img/product12-700x850.jpg" class="card-img-top" alt="BEST SELLERS Image" title="Grandpa Rocking Chair"></a>
                    <div class="card-body">
                        <h5 class="card-title" title="Grandpa Rocking Chair"> <a href="product-detail.html">Grandpa Rocking Chair</a></h5>
                        <p class="card-text"><i class="fas fa-star  fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i></p>
                        <p>&dollar;100</p>
                        <p><button type="button" class="btn btn-danger">Add to cart</button></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="#"><img src="img/product16-700x850.jpg" class="card-img-top" alt="BEST SELLERS Image" title="Nitraa Lydon Dining Table Set with Chair"></a>
                    <div class="card-body">
                        <h5 class="card-title" title="Nitraa Lydon Dining Table Set with Chair"><a href="#">Nitraa Lydon Dining Table ......</a></h5>
                        <p class="card-text"><i class="fas fa-star  fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i></p>
                        <p>&dollar;100</p>
                        <p><button type="button" class="btn btn-danger">Add to cart</button></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="#"><img src="img/product24-700x850.jpg" class="card-img-top" alt="BEST SELLERS Image" title="Table Lamp In Steam Beach Wood"></a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Table Lamp In Steam Beach ....</a></h5>
                        <p class="card-text"><i class="fas fa-star  fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i></p>
                        <p>&dollar;100</p>
                        <p><button type="button" class="btn btn-danger">Add to cart</button></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="#"><img src="img/product6-700x850.jpg" class="card-img-top" alt="BEST SELLERS Image" title="DecorNation Floating Wall Shelf"></a>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">DecorNation Floating Wall ....</a></h5>
                        <p class="card-text"><i class="fas fa-star  fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i></p>
                        <p>&dollar;80</p>
                        <p><button type="button" class="btn btn-danger">Add to cart</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Markup for SPECIAL PRODUCTS-->
<section id="special-products" class="mt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex justify-content-between best-seller">
                    <h1>SPECIAL <span>PRODUCTS</span></h1>
                    <div>
                        <button type="button" class="btn btn-light"><i class="fas fa-angle-left"></i></button>
                        <button type="button" class="btn btn-light"><i class="fas fa-angle-right"></i></button>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-2 g-4 text-center">
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/product6-700x850.jpg" class="card-img-top" alt="BEST SELLERS Image" title="Grandpa Rocking Chair"></a>
                            <div class="card-body">
                                <h5 class="card-title" title="Grandpa Rocking Chair"> <a href="#">Grandpa Rocking Chair</a></h5>
                                <p class="card-text"><i class="fas fa-star  fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i></p>
                                <p><del>&dollar;100</del>&nbsp;  &dollar;80</p>
                                <p><button type="button" class="btn btn-danger">Add to cart</button></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#"><img src="img/product15-700x850.jpg" class="card-img-top" alt="BEST SELLERS Image" title="Nitraa Lydon Dining Table Set with Chair"></a>
                            <div class="card-body">
                                <h5 class="card-title" title="Nitraa Lydon Dining Table Set with Chair"><a href="#">Nitraa Lydon Dining Table ......</a></h5>
                                <p class="card-text"><i class="fas fa-star  fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i> <i class="fas fa-star fa-xs"></i></p>
                                <p><del>&dollar;100</del>&nbsp; &dollar;90</p>
                                <p><button type="button" class="btn btn-danger">Add to cart</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="countdown"> 
                   
                    <div class="box-timer">
                        <h2 >Deals of the day</h2>
                        <div class="starseparator"></div>
                        <p><strong>Sterling Side Mounted wardrobe pullout: HTC Touch - in High Definition. Watch music videos and streaming content in a..</strong></p>
                        <div class="timer-grid">
                        <div class="day box-time-date"><span class="number"> </span>days</div>
                         <div class="hour box-time-date"><span class="number"></span>Hrs</div>
                         <div class="min box-time-date"><span class="number"></span> MINs</div>
                          <div class="sec box-time-date"><span class="number"></span>SEC</div></div>
                          <button type="button" class="btn btn-danger"><span>Shop Now</span><i class="fas fa-caret-right"></i></button>
                       </div>

                </div>
            </div>
        </div>

    </div>
</section>





<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>

<script>
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 1400,
        wrap: true
    })

    //countdown timer
    $(".box-timer")
  .countdown("2022/01/01", function(event) {
    $('.day .number').text(
      event.strftime('%D ')
    );
    $('.hour .number').text(
      event.strftime(' %H')
    );
    $('.min .number').text(
      event.strftime(' %M')
    );
    $('.sec .number').text(
      event.strftime('%S')
    );
  });
</script>
</body>
</html>