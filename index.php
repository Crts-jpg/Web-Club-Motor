<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOTOR CLUB</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* design untuk slide gambarnya */
        body {
            padding-top: 56px;
        }
        .carousel-item img {
            max-height: 500px;
            object-fit: cover;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <!-- isi main websitenya -->
    <h1 class="text-center">MOTOR CLUB</h1>
    <div>
        <header>
            <?php include 'layout/header.php' ?>
        </header>
        <sidebar>
            <?php include 'layout/sidebarMain.php' ?>
        </sidebar>
        </div>
<?php include 'layout/footer.php' ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>