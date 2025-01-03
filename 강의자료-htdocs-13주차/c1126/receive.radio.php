<?php
    $subject = $_POST['subject'];

    //if($subject == 'java') echo 'checked="checked"'
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/assets/bootstrap-4.5.3/css/bootstrap.min.css">
<style>
fieldset {
    border: 1px solid #999;
    border-radius: 5px;
    padding:10px;
}    
legend {
    border: 1px solid #999;
    width:auto;
}
</style>
<title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <fieldset>
                <legend>로그인</legend>
                <form action="receive.php" method="get">
                    <div class="form-group">
                        <label for="userid">아이디</label>
                        <input type="text" class="form-control" name="userid" id="userid" placeholder="아이디 입력">
                    </div>
                    <div class="form-group">
                        <label for="passwd">비밀번호</label>
                        <input type="password" class="form-control" name="passwd" id="passwd" placeholder="비밀번호 입력">
                    </div>
                    <div class="form-group float-right">
                        <input type="submit" class="btn btn-primary" value="전송">
                    </div>
                </form>
            </fieldset>
        </div>
        <div class="col-4">
            <form action="receive.radio.php" method="post">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="subject" id="subject" value="web" <?php if($subject == 'web') echo 'checked="checked"'; ?>>
                    <label class="form-check-label" for="subject">웹프로그래밍</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="subject" id="subject2" value="java" <?php if($subject == 'java') echo 'checked="checked"'; ?>>
                    <label class="form-check-label" for="subject2">자바</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="subject" id="subject3" value="mysql" <?php if($subject == 'mysql') echo 'checked="checked"'; ?>>
                    <label class="form-check-label" for="subject3">데이터베이스</label>
                </div>
                <div class="form-check">
                    <button type="submit" class="btn btn-success btn-block">전송</button>
                </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4"></div>
        <div class="col-4"></div>
    </div>
</div>
</body>
</html>