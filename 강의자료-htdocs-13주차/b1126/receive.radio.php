<?php
    $subject = $_POST['subject']; // web, java, db

    //if($subject == 'web') echo 'checked="checked"';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/assets/bootstrap-4.5.3/css/bootstrap.min.css">
<title>Document</title>
<style>
fieldset {
    border: 1px solid #999;
    border-radius:5px;
    padding:10px;
}    
legend {
    border: 1px solid #999;
    width:auto;
}
</style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <fieldset>
                <legend>로그인</legend>
                <form action="receive.php" method="get">
                    <div class="form-group">
                        <label for="userid">아이디</label>
                        <input type="text" class="form-control" name="userid" id="userid" placeholder="아이디 입력">
                    </div>
                    <div class="form-group">
                        <label for="passwd">패스워드</label>
                        <input type="password" class="form-control" name="passwd" id="passwd" placeholder="비밀번호 입력">
                    </div>
                    <div class="form-group float-right">
                        <input type="submit" class="btn btn-primary" value="확인">
                    </div>
                </form>
            </fieldset>
        </div>
        <div class="col">
            <form action="receive.radio.php" method="post">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="subject" id="subject1" value="web" <?php if($subject == 'web') echo 'checked="checked"'; ?>>
                    <label class="form-check-label" for="subject1">웹프로그래밍</label>
                </div>
                <div class="form-check">
                    <label><input class="form-check-input" type="radio" name="subject" value="java" <?php if($subject == 'java') echo 'checked="checked"'; ?>> 자바</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="subject" id="subject2" value="db" <?php if($subject == 'db') echo 'checked="checked"'; ?>>
                    <label class="form-check-label" for="subject2">데이터베이스</label>
                </div>
                <div class="form-check">
                    <button type="submit" class="btn btn-success btn-block">라디오 전송</button>
                </div>
            </form>
        </div>
        <div class="col">
            
        </div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
</div>
</body>
</html>