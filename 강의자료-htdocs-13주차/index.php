<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/bootstrap-4.5.3/css/bootstrap.min.css">
<title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-3">
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
        <div class="col-9">
            <div class="alert alert-primary" role="alert">
            <?php
                echo '이것은 php가 만든 구문입니다.';
            ?>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/bootstrap-4.5.3/js/bootstrap.min.js"></script>
</body>
</html>