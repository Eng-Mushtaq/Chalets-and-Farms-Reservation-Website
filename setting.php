<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تهيئة الموقع</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

   <div class="m-2">
   <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"> إضافة  الشاليهات</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">إضافة المزارع</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">  إضافةالمنتجعات</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="m-2 border rounded p-0 bg-light" >
    <div class="bg-primary p-3 m-0 mb-3">
        <h4 class="text-white text-center fw-bold">بيانات الشالية</h4>
    </div>
    <form method="post" action="saveChalet.php" enctype="multipart/form-data" class="m-1 ">
        <div class="row m-0 mb-3 ">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">الاسم:</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="أدخل اسم الشالية" required>
                </div>
                <div class="form-group">
                    <label for="description">الوصف:</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="أدخل وصف الشالية" required></textarea>
                </div>
                <div class="form-group">
                    <label for="price">السعر:</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="أدخل السعر" required min="0">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="location">الموقع:</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="أدخل موقع الشالية" required>
                </div>
                <div class="form-group">
                    <label for="unit_area">المساحة:</label>
                    <input type="text" class="form-control" name="unit_area" id="unit_area" placeholder="أدخل مساحة الشالية" required>
                </div>
                <div class="form-group">
                    <label for="accommodation_type">نوع الإقامة:</label>
                    <input type="text" class="form-control" name="accommodation_type" id="accommodation_type" placeholder="نوع الإقامة - شبابية -رجال- عائلية" required>
                </div>
                <div class="form-group">
                    <label for="image_url">الصورة:</label>
                    <input type="file" accept="image/*" class="form-control" name="image_url" id="image_url" required>
                </div>
            </div>
        </div>
        <div class="text-center mb-3">
            <button type="submit" class="btn btn-success">حفظ</button>
        </div>
    </form>
</div>


  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <div class="m-2 border rounded p-0 bg-light">
  <div class="bg-primary p-3 m-0 mb-3">
        <h4 class="text-white text-center fw-bold">بيانات المزرعة</h4>
    </div>
    <form method="post" action="saveFarms.php" enctype="multipart/form-data" class="m-1">
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">اسم المزرعة:</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="أدخل اسم المزرعة" required>
                </div>
            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="description">الوصف:</label>
                    <input class="form-control" name="description" id="description" rows="3" placeholder="أدخل وصف وتفاصيل عن المزرعة" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="location">الموقع:</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="أدخل موقع المزرعة" required>
                </div>
                </div>
                <div class="col-md-6">

                <div class="form-group">
                    <label for="unit_area">المساحة:</label>
                    <input type="text" class="form-control" name="area" id="unit_area" placeholder="مساحة المزرعة 20 *20" required>
                </div>
                </div>
                <div class=" col-md-6">

                <div class="form-group">
                    <label for="accommodation_type">خصائص المزرعة:</label>
                    <input class="form-control" name="features" id="features" rows="3" placeholder="أدخل  خصائص المزرعة" required>
                </div>
                </div>
        <div class=" col-md-6 mb-3 text-center">
            <label for="image_url">الصورة:</label>
            <input type="file" accept="image/*" class="form-control" name="image_url" id="image_url" required>
        </div>
        </div>

        <div class="text-center mb-3">
            <button type="submit" class="btn btn-success">حفظ</button>
        </div>
    </form>
</div>

  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

  <div class="m-2 border rounded p-0 bg-light">
  <div class="bg-primary p-3 m-0 mb-3">
        <h4 class="text-white text-center fw-bold">بيانات المنتجع</h4>
    </div>
    <form method="post" action="saveResorts.php" enctype="multipart/form-data" class="m-1">
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">الاسم:</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="أدخل اسم المنتجع" required>
                </div>
             
            </div>
            <div class="col-md-6">

            <div class="form-group">
                    <label for="description">الوصف:</label>
                    <input class="form-control" name="description" id="description" rows="3" placeholder="أدخل وصف المنتجع" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="location">الموقع:</label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="أدخل موقع المنتجع" required>
                </div>
            </div>
        <div class="col-md-6 ">
        <div class="form-group">

            <label for="image_url">الصورة:</label>
            <input type="file" accept="image/*" class="form-control" name="image_url" id="image_url" required>
        </div>
        </div>
        </div>
        <div class="text-center mb-3">
            <button type="submit" class="btn btn-success">حفظ</button>
        </div>
    </form>
</div>


  </div>
</div>



   </div>
   </div>
</body>

</html>
