<?php
// Include database configuration
include 'db_connection.php'; // This should contain your database connection code using PDO

// Query to fetch chalet records from the database
$chalets_sql = "SELECT * FROM chalets";
$chalets_stmt = $pdo->query($chalets_sql);
$chalets = $chalets_stmt->fetchAll(PDO::FETCH_ASSOC);

$farms_sql = "SELECT * FROM farms";
$farms_stmt = $pdo->query($farms_sql);
$farms = $farms_stmt->fetchAll(PDO::FETCH_ASSOC);


$resorts_sql = "SELECT * FROM resorts";
$resorts_stmt = $pdo->query($resorts_sql);
$resorts = $resorts_stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<html lang="ar" dir="rtl">

</html>

<head>
  <meta charset="UTF-8">
  <title>Chalets and Farms Reservation</title>
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="javascript/bootstrap.bundle.min.js"></script>
</head>

<body>
 <?php

 include('navbar.php');
 ?>
  <!-- Carousel -->
  <div id="demo" class="carousel slide " data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="images/bg.png" alt="alt" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>ساحليه</h3>
          <p>وجهات سياحية على البحر</p>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="images/bg2.jpg" alt="Chicago" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>على الشاطئ</h3>
          <p>استراحات على الشواطئ</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/bg3.jpg" alt="New York" class="d-block" style="width:100%">
        <div class="carousel-caption">
          <h3>شاليهات</h3>
          <p>شاليهات راقية ومريحة بكل الخدمات </p>
        </div>
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <div class="container-fluid mt-3">
    <h3>افضل الوجهات السياحية</h3>
    <p>لا تفوت اجازة نهاية الاسبوع بالحجز معنا في افضل الشاليهات والاستراحات الراقية </p>
  </div>

  <section class="Chalets-Section section_gap" >
    <div class="section_title text-center">
      <h2 class="title_color">الشاليهات</h2>
      <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
  </div>
    <div class="container-fluid">
    <div class="card-group row m-0 ">
    <?php foreach ($chalets as $chalet): ?>
      <div class="col-lg-4 col-md-6 p-0 my-1">
    <div class="card m-1">
        <img src="<?php echo $chalet['image_url']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $chalet['title']; ?></h5>
            <p class="card-text"><?php echo $chalet['description']; ?></p>
            <p class="card-text"><small class="text-muted">إجمالي ليلة واحدة <?php echo $chalet['price']; ?> ر.س</small></p>
            <div class="card-footer row">
                <div class="col-4"><small class="text-muted"><?php echo $chalet['location']; ?></small></div>
                <div class="col-4"><small class="text-muted">مساحة الوحدة <?php echo $chalet['unit_area']; ?> م²</small></div>
                <div class="col-4"><small class="text-muted">مخصص ل <?php echo $chalet['accommodation_type']; ?></small></div>
            </div>
        </div>
        <div class="card-footer text-center">
    <a href="shopping_cart.php?product_id=<?php echo $chalet['id']; ?>&table=chalets" class="btn btn-primary">احجز الآن</a>
</div>

    </div>
</div>
    <?php endforeach; ?>
</div>
      <!-- Use card-group to create a group of cards -->
     
    </div>
  </section>

  <section class="about_history_area section_gap">
    <div class="container">
      <div class="section_title text-center">
        <h2 class="title_color">المزارع</h2>
        <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
    </div>
    <div class="row p-4 ">
    <?php foreach ($farms as $index => $farm): ?>
        <?php if ($index % 2 == 0): ?> <!-- Check if the index is even -->
            <div class="col-md-6 my-3">
                <img class="img-fluid" src="<?php echo $farm['image_url']; ?>" alt="img">
            </div>
            <div class="col-md-6  my-3">
                <div class="about_content ">
                    <h2 class="title title_color"><?php echo $farm['title']; ?></h2>
                    <h4 class="title title_color"><?php echo $farm['description']; ?></h4>
                    <p><?php echo $farm['features']; ?></p>
                    <a href="#" class="button_hover theme_btn_two">Request Custom Price</a>
                </div>
                <div class="card-footer row my-3">
                    <div class="col-6"><small class="text-muted"><?php echo $farm['location']; ?></small></div>
                    <div class="col-6"><small class="text-muted">مساحة الوحدة <?php echo $farm['area']; ?> م²</small></div>
                </div>
                <a href="shopping_cart.php?product_id=<?php echo $farm['id']; ?>&table=farm" class="btn btn-primary">احجز الآن</a>

            </div>
        <?php else: ?>
            <div class="col-md-6  my-3">
                <div class="about_content ">
                    <h2 class="title title_color"><?php echo $farm['title']; ?></h2>
                    <h4 class="title title_color"><?php echo $farm['description']; ?></h4>
                    <p><?php echo $farm['features']; ?></p>
                    <a href="#" class="button_hover theme_btn_two">Request Custom Price</a>
                </div>
                <div class="card-footer row my-3">
                    <div class="col-6"><small class="text-muted"><?php echo $farm['location']; ?></small></div>
                    <div class="col-6"><small class="text-muted">مساحة الوحدة <?php echo $farm['area']; ?> م²</small></div>
                </div>
                <a href="shopping_cart.php?product_id=<?php echo $farm['id']; ?>&table=farm" class="btn btn-primary">احجز الآن</a>

            </div>
            <div class="col-md-6 my-3">
                <img class="img-fluid" src="<?php echo $farm['image_url']; ?>" alt="img">
            </div>
        <?php endif; ?>
        <hr class="border-2 border-dark ">

    <?php endforeach; ?>
</div>


    
    </div>
  </section>

  <section class="latest_blog_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_color">المنتجعات</h2>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
        </div>

        <div class="row">
    <?php foreach ($resorts as $resort): ?>
        <div class="col-lg-4 col-md-6 ةلا-2">
            <div class="single-recent-blog-post">
                <div class="thumb">
                    <img class="img-fluid" src="<?php echo $resort['image_url']; ?>" alt="post">
                </div>
                <div class="details">
                    <div class="tags">
                        <span  class="button_hover tag_btn text-primary"><?php echo $resort['location']; ?></span>
                    </div>
                    <a href="#"><h4 class="sec_h4"><?php echo $resort['title']; ?></h4></a>
                    <p><?php echo $resort['description']; ?></p>
                    <h6 class="date title_color"><?php echo $resort['date_added']; ?></h6>
                </div>	
            </div>
            <a href="shopping_cart.php?product_id=<?php echo $resort['id']; ?>&table=resorts" class="btn btn-primary text-center">احجز الآن</a>

        </div>
    <?php endforeach; ?>
</div>


    </div>
</section>



</body>
<script src="javascript/jquery-3.7.1.min.js">

</script>
<script>
    function openBookingModal() {
        $('#bookingModal').modal('show');
    }
</script>
</html>