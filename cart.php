<?php
include 'db_connection.php'; // Include your database connection file
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit;
}

// Get the user ID from the session
$user_id = $_SESSION['userid'];

// Retrieve items from the cart for the logged-in user
$stmt = $pdo->prepare("SELECT * FROM bookings WHERE user_id = ? ORDER BY item_type");
$stmt->execute([$user_id]);
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الحجوزات</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="m-3">
    <?php if (count($items) > 0): ?>
        <div class="card p-0">
            <div class="card-header">
                <h2 class="text-center"> الحجوزات</h2>
            </div>

            <div class=" card-body p-0">
                <?php foreach ($items as $item): 
                   if($item['item_type']=='farm'){
                    $stmt = $pdo->prepare("SELECT * FROM farms WHERE id = ?");
                    $stmt->execute([$item['item_id']]);
                    $farms = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    echo '<div class="row m-0 ">';
                     foreach ($farms as $farm): ?>


                    <div class="p-0 mb-1 col-md-4 m-0">
                        <div class="card m-0">
                           
                            <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title"><?= $farm['title'] ?></h5>
                            <span><?php $item['date'] ?></span>
                        </div>
                            <div class="card-body p-1">
                                <img class="w-100 img" src="<?= $farm['image_url'] ?>">
                                <p class="card-text"><strong>الوصف:</strong> <?= $farm['description'] ?></p>
                                <span class="card-text"><strong>العنوان:</strong> <?= $farm['location'] ?> </span>
                                <p class="card-text "><strong>الخصائص:</strong> <?= $farm['features'] ?></p>
                                <p class="card-text"><strong>المساحة:</strong> <?= $farm['area'] ?> </p>
                            </div>
                        </div>
                    </div>
                    <?php  endforeach;
                 echo '</div>';

                    ?>
            </div>
                <?php
            } elseif($item['item_type']=='chalets') {
                $stmt = $pdo->prepare("SELECT * FROM chalets WHERE id = ?");
                $stmt->execute([$item['item_id']]);
                $chalets = $stmt->fetchAll(PDO::FETCH_ASSOC);
                echo '<div class="row m-0  P-0">';

                foreach ($chalets as $chalet): ?>
                    <div class="p-0 mb-1 col-md-4">
                    <div class="card m-0">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title"><?= $chalet['title'] ?></h5>
                        </div>
                        <div class="card-body p-1">
                            <img class="w-100 img" src="<?= $chalet['image_url'] ?>">
                            <p class="card-text"><strong>الوصف:</strong> <?= $chalet['description'] ?></p>
                            <span class="card-text"><strong>السعر:</strong> <?= $chalet['price'] ?> ريال</span>
                            <p class="card-text"><strong>العنوان:</strong> <?= $chalet['location'] ?> </p>
                            <span class="card-text "><strong>نوع الإقامة:</strong> <?= $chalet['accommodation_type'] ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach;
              echo '</div>';

            }
            elseif($item['item_type']=='resorts') {
                $stmt = $pdo->prepare("SELECT * FROM resorts WHERE id = ?");
                $stmt->execute([$item['item_id']]);
                $resorts = $stmt->fetchAll(PDO::FETCH_ASSOC);
                echo '<div class="row">';

                foreach ($resorts as $resort): ?>

                
                <div class="p-0 mb-1 col-md-4">
                    <div class="card m-0">
                        <div class="card-header">
                            <h5 class="card-title"><?= $resort['title'] ?></h5>
                        </div>
                        <div class="card-body p-1">
                            <img class="w-100 img" src="<?= $resort['image_url'] ?>">
                            <p class="card-text"><strong>الوصف:</strong> <?= $resort['description'] ?></p>
                            <span class="card-text"><strong>العنوان:</strong> <?= $resort['location'] ?> </span>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            <?php
           echo '</div>';

            }
            endforeach; ?>
            </div>
        </div>
        </div>

    <?php else: ?>
        <h3 class="text-center">قائمة الحجوزات فارغة</h3>
    <?php endif; ?>
</div>

</body>
</html>
