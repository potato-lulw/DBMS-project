<form action="" method="post" class="my-5">

    <h1 class="center mb-3">Add a brand</h1>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-city"></i></span>
        <input type="text" class="form-control" placeholder="Brand Name" aria-label="Brand" aria-describedby="basic-addon1" name="brand_title">
        <!-- <button type="button" class="btn btn-success">ADD</button> -->
        <input type="submit" class="form-control w-auto" value="Add Brand" name="insert_brand">
    </div>
    <?php
    include '../includes/connect.php';

    if (isset($_POST['insert_brand'])) {
        $brand_title = $_POST['brand_title'];

        $select_query = "SELECT * FROM brands WHERE brand_name = '$brand_title'";

        $result_select = mysqli_query($con, $select_query);

        if (mysqli_num_rows($result_select) > 0) {
            echo "<script>alert('Brand already exists!')</script>";
        } else if ($brand_title == "") {
            echo "<p style=\"text-align: center;margin-top: 50px;\">Enter a valid brand name</p>";
        } else {
            $insert_query = "INSERT INTO brands (brand_name) VALUES ('$brand_title')";
            $result = mysqli_query($con, $insert_query);

            if ($result) {
                echo "<script>alert('Brand has been inserted!')</script>";
            }
        }
    }
    ?>
</form>


<!-- product title
product desc

select brand
product Image
product price -->