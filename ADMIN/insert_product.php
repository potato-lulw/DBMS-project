<?php
include '../includes/connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PartsMarket - Insert Product</title>

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
</head>

<body class="form-bg" enctype="multipart/form-data" style="overflow-y: hidden">

    <div class="container m-auto w-50">
        <h1 class="text-center mt-3">Insert Products</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" class="form-control" id="product_title" name="product_title" placeholder="Enter product title" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Decsription</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter product description" autocomplete="off" required rows="3"></textarea>

            </div>

            <div class="mb-3">
                <label for="product_keywords" class="form-label">Keywords </label>
                <input type="text" class="form-control" id="product_keywords" name="product_keywords" placeholder="Enter keywords" autocomplete="off" required>
            </div>
            <div class="mb-3">

                <select class="form-select product_category" name="product_category">
                    <option selected>Select a product</option>

                    <?php
                    $select_category = "SELECT * FROM categories";
                    $result_category = mysqli_query($con, $select_category);

                    while ($row_data = mysqli_fetch_assoc($result_category)) {
                        $category_name = $row_data['category_name'];
                        $category_id = $row_data['category_id'];

                        echo "<option value=\"$category_id\">$category_name</option>";
                    }
                    ?>

                </select>
            </div>
            <div class="mb-3">

                <select class="form-select product_brand" name="product_brand">
                    <option selected>Select a brand</option>

                    <?php
                    $select_brand = "SELECT * FROM brands";
                    $result_brand = mysqli_query($con, $select_brand);

                    while ($row_data = mysqli_fetch_assoc($result_brand)) {
                        $brand_name = $row_data['brand_name'];
                        $brand_id = $row_data['brand_id'];

                        echo "<option value=\"$brand_id\">$brand_name</option>";
                    }
                    ?>

                </select>
            </div>

            <div class="mb-3">
                <label for="product_image" class="form-label">Product image</label>
                <input type="file" class="form-control" id="product_image" name="product_image" placeholder="Select product image" autocomplete="off" required accept="image/png, image/gif, image/jpeg">
            </div>

            <div class="mb-3">
                <label for="prodcut_price" class="form-label">Product price</label>
                <input type="number" class="form-control" id="prodcut_price" name="prodcut_price" placeholder="Enter product price" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-outline-success w-100" type="submit" name="insert_product">Sumbit</button>
            </div>

        </form>
    </div>



    <!-- JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>