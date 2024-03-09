
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
<div class="container mt-5 text-center ">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="alert alert-success" role="alert">
                <?php
                // Check if the success message is set in the URL
                    // Display the success message
                    echo '<h4 class="alert-heading">تمت العملية بنجاح !</h4>';
                    echo '<hr>';
                    echo '<p class="mb-0">شكراَ لك !</p>';
                
                ?>
                 <button class="btn btn-success text-white" onclick="goBack()">موافق</button>
            </div>
        </div>
    </div>
</div>


<script>
    // JavaScript function to navigate back to the previous page
    function goBack() {
        window.history.back();
    }
</script>


</body>
</html>
