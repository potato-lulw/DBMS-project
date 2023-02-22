<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartsMarket</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css">

    <script src="js."></script>
</head>

<body>

    <!-- First Child -->
    <div class="header">
        <div class="menu-bar">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="Images/LogoNew.png" alt="Logo" width="100px"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="searchBar d-flex m-auto" role="search">
                            <input class="form-control me-2" type="search" placeholder="Looking for something specific?" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        <ul class="navbar-nav ml-auto">


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Products
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Brands
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup> 1</sup></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Total Price: 100/-</a>
                            </li>


                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>


    <!-- Second child  -->
    <div class="menubar d-flex justify-content-between px-5">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Welcome, Guest</a>
            </li>
        </ul>
        <ul class="nav justify-content-center">

            <li class="nav-item">
                <a class="nav-link" href="#">Log In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sign Up</a>
            </li>

        </ul>
    </div>



    <!-- Third child -->

    <div class="body-start p-3" style="color: black">

        <div class="product-category">
            <p class="product-route">Home/product-name</p>
            <h1 class="product-title m-4">PRODUCT NAME</h1>
            <p class="product-route">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati cumque tempora natus nobis autem illo ipsum laborum. Officia, vero voluptates.</p>
        </div>

        <div class="row gallery d-flex">
            <!-- Sidebar -->
            <div class="col-md-2">
                <div class="flex-shrink-0 p-3 bg-grey">
                    <a href="#" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                        <img src="Images/logo.png" alt="logo" class="logo-sidebar">
                        <span class="sidebar-title fs-5 fw-semibold">Quick Access</span>
                    </a>
                    <ul class="list-unstyled ps-0">
                        
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                Products
                            </button>
                            <div class="collapse show" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">Overview</a></li>
                                    <li><a href="#" class="link-dark rounded">Weekly</a></li>
                                    <li><a href="#" class="link-dark rounded">Monthly</a></li>
                                    <li><a href="#" class="link-dark rounded">Annually</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                                Brands
                            </button>
                            <div class="collapse show" id="orders-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">New</a></li>
                                    <li><a href="#" class="link-dark rounded">Processed</a></li>
                                    <li><a href="#" class="link-dark rounded">Shipped</a></li>
                                    <li><a href="#" class="link-dark rounded">Returned</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                                Dashboard
                            </button>
                            <div class="collapse" id="account-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#" class="link-dark rounded">New...</a></li>
                                    <li><a href="#" class="link-dark rounded">Profile</a></li>
                                    <li><a href="#" class="link-dark rounded">Settings</a></li>
                                    <li><a href="#" class="link-dark rounded">Sign out</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- cards -->
            <div class="col-md-10">

                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <div class="imgback">
                                <img src="Images/dummy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="price-details d-flex">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <p class="price">1,000</p>
                                </div>
                                <div class="order ">
                                    <button class="decrease">
                                        <i class="fa-solid fa-circle-minus"></i>
                                    </button>
                                    <input type="..." class="order-size form-control" placeholder="1">
                                    <button class="increase">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </button>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <div class="imgback">
                                <img src="Images/dummy2.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="price-details d-flex">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <p class="price">1,000</p>
                                </div>
                                <div class="order ">
                                    <button class="decrease">
                                        <i class="fa-solid fa-circle-minus"></i>
                                    </button>
                                    <input type="..." class="order-size form-control">
                                    <button class="increase">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </button>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">

                            <div class="imgback">
                                <img src="Images/dummy.jpg" class="card-img-top" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="price-details d-flex">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <p class="price">1,000</p>
                                </div>
                                <div class="order ">
                                    <button class="decrease">
                                        <i class="fa-solid fa-circle-minus"></i>
                                    </button>
                                    <input type="..." class="order-size form-control">
                                    <button class="increase">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </button>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <div class="imgback">
                                <img src="Images/dummy2.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="price-details d-flex">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <p class="price">1,000</p>
                                </div>
                                <div class="order ">
                                    <button class="decrease">
                                        <i class="fa-solid fa-circle-minus"></i>
                                    </button>
                                    <input type="..." class="order-size form-control">
                                    <button class="increase">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </button>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <div class="imgback">
                                <img src="Images/dummy2.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="price-details d-flex">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <p class="price">1,000</p>
                                </div>


                                <div class="order ">
                                    <button class="decrease">
                                        <i class="fa-solid fa-circle-minus"></i>
                                    </button>
                                    <input type="..." class="order-size form-control">
                                    <button class="increase">
                                        <i class="fa-solid fa-circle-plus"></i>
                                    </button>
                                    <a href="#" class="btn btn-primary">Add to Cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>






        </div>


    </div>


    <!-- Last Child -->
    <footer class="menu-bar p-1  stick-bottom d-flex justify-content-center">
        <p class="copyright">All rights reserved </p><i class="fa-regular fa-copyright px-2"></i>
        <p class="copyright"> 2023</p>
    </footer>



    <!-- JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>