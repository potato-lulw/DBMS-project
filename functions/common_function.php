<?php
    include ('./includes/connect.php');


    function getproducts(){
        global $con;

        if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
                $select_query = "Select * from products order by rand()";
                $result_query = mysqli_query($con, $select_query);
                while ($row = mysqli_fetch_assoc($result_query)) {
                    $product_id = $row["product_id"];
                    $product_name = $row["product_name"];
                    $product_price = $row["product_price"];
                    $product_desc = $row["product_desc"];
                    $product_image = $row["product_image"];
                    $category_id = $row["category_id"];
                    $brand_id = $row["brand_id"];
                    echo "<div class='col-md-4 mb-2'>
                    <div class='card'>
                        <div class='imgback'>
                            <img src='./ADMIN/product_images/$product_image' class='card-img-top' alt='...'>
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_name</h5>
                            <p class='card-text'>$product_desc</p>
                            <div class='price-details d-flex'>
                                <i class='fa-solid fa-indian-rupee-sign'></i>
                                <p class='price'>$product_price</p>
                            </div>
                            <div class='order '>
                                <button class='decrease'>
                                    <i class='fa-solid fa-circle-minus'></i>
                                </button>
                                <input type='...' class='order-size form-control' placeholder='1'>
                                <button class='increase'>
                                    <i class='fa-solid fa-circle-plus'></i>
                                </button>
                                <a href='#' class='btn btn-primary'>Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>";
        }
            }
        }
        
    }

    function getcategoriesdd(){
        global $con;
        $select_category = "SELECT * FROM categories";
        $result_category = mysqli_query($con, $select_category);
        while ($row_data = mysqli_fetch_array($result_category)) {
            $category_name = $row_data['category_name'];
            $category_id = $row_data['category_id'];
            echo "<li><a class='dropdown-item' href='index.php?category=$category_id'>$category_name</a></li>";
        }
    }
    function getcategories(){
        global $con;
        $select_category = "SELECT * FROM categories";
        $result_category = mysqli_query($con, $select_category);
        while ($row_data = mysqli_fetch_array($result_category)) {
            $category_name = $row_data['category_name'];
            $category_id = $row_data['category_id'];
            echo "<li><a href=\"index.php?category=$category_id\" class=\"link-dark rounded\">$category_name</a></li>";
        }
    }

    function getbrands(){
        global $con;
        $select_brands = "SELECT * FROM brands";
        $result_brands = mysqli_query($con, $select_brands);
        // echo $row_data['brand_name'];
        while ($row_data = mysqli_fetch_assoc($result_brands)) {
            $brand_name = $row_data['brand_name'];
            $brand_id = $row_data['brand_id'];
            echo "<li><a class='dropdown-item' href='index.php?brand=$brand_id'>$brand_name</a></li>";
        }
    }
    function getbrandsdd(){
        global $con;
        $select_brands = "SELECT * FROM brands";
        $result_brands = mysqli_query($con, $select_brands);
        // echo $row_data['brand_name'];
        while ($row_data = mysqli_fetch_assoc($result_brands)) {
            $brand_name = $row_data['brand_name'];
            $brand_id = $row_data['brand_id'];
            echo "<li><a class='dropdown-item' href='#'>$brand_name</a></li>";
        }
    }



    function get_item_by_category(){
        global $con;
        
        if(isset($_GET['category'])){
           
            $category_id = $_GET['category'];
            $select_query = "Select * from products where category_id = $category_id";
                $result_query = mysqli_query($con, $select_query);
                $num_of_rows = mysqli_num_rows($result_query);
                if($num_of_rows == 0){
                    echo "<h3 class='text-center m-5 text-danger'>No stock for this category<h2>";
                }
                while ($row = mysqli_fetch_assoc($result_query)) {
                    $product_id = $row["product_id"];
                    $product_name = $row["product_name"];
                    $product_price = $row["product_price"];
                    $product_desc = $row["product_desc"];
                    $product_image = $row["product_image"];
                    $category_id = $row["category_id"];
                    $brand_id = $row["brand_id"];
                    echo "<div class='col-md-4 mb-2'>
                    <div class='card'>
                        <div class='imgback'>
                            <img src='./ADMIN/product_images/$product_image' class='card-img-top' alt='...'>
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_name</h5>
                            <p class='card-text'>$product_desc</p>
                            <div class='price-details d-flex'>
                                <i class='fa-solid fa-indian-rupee-sign'></i>
                                <p class='price'>$product_price</p>
                            </div>
                            <div class='order '>
                                <button class='decrease'>
                                    <i class='fa-solid fa-circle-minus'></i>
                                </button>
                                <input type='...' class='order-size form-control' placeholder='1'>
                                <button class='increase'>
                                    <i class='fa-solid fa-circle-plus'></i>
                                </button>
                                <a href='#' class='btn btn-primary'>Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>";
                }
        }
    }
    function get_item_by_brand(){
        global $con;
        
        if(isset($_GET['brand'])){
           
            $brand_id = $_GET['brand'];
            $select_query = "Select * from products where brand_id = $brand_id";
                $result_query = mysqli_query($con, $select_query);
                $num_of_rows = mysqli_num_rows($result_query);
                if($num_of_rows == 0){
                    echo "<h3 class='text-center m-5 text-danger'>No stock for this brand<h2>";
                }
                while ($row = mysqli_fetch_assoc($result_query)) {
                    $product_id = $row["product_id"];
                    $product_name = $row["product_name"];
                    $product_price = $row["product_price"];
                    $product_desc = $row["product_desc"];
                    $product_image = $row["product_image"];
                    $category_id = $row["category_id"];
                    $brand_id = $row["brand_id"];
                    echo "<div class='col-md-4 mb-2'>
                    <div class='card'>
                        <div class='imgback'>
                            <img src='./ADMIN/product_images/$product_image' class='card-img-top' alt='...'>
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_name</h5>
                            <p class='card-text'>$product_desc</p>
                            <div class='price-details d-flex'>
                                <i class='fa-solid fa-indian-rupee-sign'></i>
                                <p class='price'>$product_price</p>
                            </div>
                            <div class='order '>
                                <button class='decrease'>
                                    <i class='fa-solid fa-circle-minus'></i>
                                </button>
                                <input type='...' class='order-size form-control' placeholder='1'>
                                <button class='increase'>
                                    <i class='fa-solid fa-circle-plus'></i>
                                </button>
                                <a href='#' class='btn btn-primary'>Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>";
                }
        }
    }
?>