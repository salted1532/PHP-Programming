<?php
    $qrcode = $_POST['qrcode']; // ex. 대한민국
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/assets/bootstrap-4.5.3/css/bootstrap.min.css">
<title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=<?php echo $qrcode ?>&choe=UTF-8" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="qrgen.html" class="btn btn-primary">qrcode 생성하기</a>
                </div>
            </div>
        </div>
        <div class="col-8"></div>
    </div>
</div>
</body>
</html>