<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- First Child -->
    <div class="header">
        <div class="menu-bar">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid mx-3">
                    <a class="navbar-brand" href="../index.php"><img src="../Images/LogoNew.png" alt="Logo" width="100px"></a>

                    <nav class="nav-item"><a href="#" class="nav-link"><i class="fa-solid fa-gear fa-xl"></i></a></nav>
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


    <!-- Third Child -->
    <div class="body-start">
        <div class="product-category">
            <p class="product-route">Home/admin-dashboard</p>
            <h1 class="product-title m-4">MANGAGE PRODUCTS</h1>
            <p class="product-route">An admin dashboard allows sellers to manage an e-commerce site by adding or removing products from the store's inventory.</p>
        </div>

        <div class="button-catelog">
            
                <button class="btn text-dark"><a href="#" class="nav-link my-1">Insert Products</a></button>
                <button class="btn text-dark"><a href="#" class="nav-link my-1">View Products</a></button>
                <button class="btn text-dark"><a href="index.php?insert_category" class="nav-link my-1">Insert Category</a></button>
                <button class="btn text-dark"><a href="#" class="nav-link my-1">View Category</a></button>
                <button class="btn text-dark"><a href="index.php?insert_brand" class="nav-link my-1">Insert Brands</a></button>
                <button class="btn text-dark"><a href="#" class="nav-link my-1">View Brands</a></button>
                <button class="btn text-dark"><a href="#" class="nav-link my-1">All Orders</a></button>
                <button class="btn text-dark"><a href="#" class="nav-link my-1">All Payments</a></button>
                <button class="btn text-dark"><a href="#" class="nav-link my-1">User List</a></button>
                <button class="btn text-dark"><a href="#" class="nav-link my-1">Log Out</a></button>
                
            
        </div>
    </div>

    <div class="container">
        <?php 
        if(isset($_GET['insert_brand'])){
            include('insert_brand.php');
        }

        if(isset($_GET['insert_category'])){
            include('insert_category.php');
        }
        ?>
        
    
    </div>




    <!-- JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>