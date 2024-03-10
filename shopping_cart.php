
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الحجوزات</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <script src="assets/bootstrap-5.3.3/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="m-3">
        <?php
        // Include your database connection file
        include 'db_connection.php'; // Change 'db_connection.php' to the actual name of your database connection script
        $table = $_GET['table'];

        // Check if product ID is provided in the URL
        if(isset($_GET['product_id'])) {
            // Retrieve the product details from the database based on the provided ID
            $product_id = $_GET['product_id'];
            if($table=='chalets'){
                $stmt = $pdo->prepare("SELECT * FROM chalets WHERE id = ?");
                $stmt->execute([$product_id]);
                $product = $stmt->fetch(PDO::FETCH_ASSOC);
            }
            elseif($table=='farm'){
                $stmt = $pdo->prepare("SELECT * FROM farms WHERE id = ?");
                $stmt->execute([$product_id]);
                $product = $stmt->fetch(PDO::FETCH_ASSOC);
            }
         elseif($table=='resorts'){
            $stmt = $pdo->prepare("SELECT * FROM resorts WHERE id = ?");
            $stmt->execute([$product_id]);
            $product = $stmt->fetch(PDO::FETCH_ASSOC);
         }


            if($product) {
                // Product details found, display them
                ?>
                <div class="card card-shadow">
<div class="card-header">
<h1 class="text-center my-2">إضافة إلى الحجوزات</h1>

                </div>
<div class="row p-2 card-body">

<div class="col-md-6">
    <div class="vertical d-none d-md-block mx-1"></div>
        <img class="w-100 details-img" src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['title']; ?>">
        <div class="horizontal d-block d-md-none mx-1"></div>

    </div>


    <div class="col-md-6 mt-2 m-md-0">
    <form class="w-100 d-flex align-items-center flex-column" method="post" action="addToCart.php">
    <h2><?php echo $product['title']; ?></h2>
    <p><strong>الوصف:</strong> <?php echo $product['description']; ?></p>
    <?php
    if(isset($product['price'])) {
        echo '<p><strong>السعر:</strong> <span id="price">' . $product['price'] . ' ريال</span></p>';
    }
?>

    <p><strong>العنوان:</strong> <span id="totalprice"><?php echo $product['location']; ?> </span></p>
    <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
    <input type="hidden" name="type" value="<?php echo $table; ?>">

  
    <button type="submit" class="btn btn-success"> <i class="fas fa-shopping-cart"></i> إضافة  الحجز</button>
</form>
    </div>
   
  
</div>

</div>
                <?php
            } else {
                // Product not found
                echo "<p>المنتج غير موجود</p>";
            }
        } else {
            // Product ID not provided in the URL
            echo "<p>رقم المنتج غير محدد</p>";
        }
        ?>
    </div>
</body>



</html>
