<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
	<div id="content">
		<form method="POST" action="Controller/UplodeImage.php" enctype="multipart/form-data">
			<div class="form-group">
				<input type="file" name="uploadfile" value="" />
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	</div>

	<section class="py-2">
        <div class="container-fluid px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                    include "controller/ShowImages.php";
                ?>
            </div>
        </div>
    </section>

</body>

</html>
