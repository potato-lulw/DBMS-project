<form action="" method="post" class="my-5">

    <h1 class="center mb-3">Add a category</h1>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-building"></i></span>
        <input type="text" class="form-control" placeholder="Category Name" aria-label="Brand" aria-describedby="basic-addon1" name="cat_title">
        <!-- <button type="button" class="btn btn-success" name="bro">ADD</button> -->
        <input type="submit" class="form-control w-auto" value="Add Category" name="insert_cat">
    </div>
    <?php
    include("../includes/connect.php");


    if (isset($_POST['insert_cat'])) {
        $cate_title = $_POST['cat_title'];

        // select data from database
        $select_query = "select * from categories where category_name='$cate_title'";
        $result_select = mysqli_query($con, $select_query);

        $number = mysqli_num_rows($result_select);
        if ($number > 0) {
            echo "<script>alert('Category already present!')</script>";
        } else if ($cate_title == "") {
            echo "<p style=\"text-align: center;margin-top: 50px;\">Enter a valid category name</p>";
        } else {
            $insert_query = "insert into categories (category_name) values ('$cate_title')";
            
            $result = mysqli_query($con, $insert_query);
            if ($result) {
                // echo "<script>alert('Category has been inserted!')</script>";
            }
        }
    }
    ?>
</form>