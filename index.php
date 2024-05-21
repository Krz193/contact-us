<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
    <?php
        // require_once "App/Email.php";
        // if(isset($_POST['formEmail'])) {
        //     $Email->sendEmail($_POST);
        // }
    ?>
</head>
<body>
    <div class="container">
        <section class="left">
            <form action="" method="post" class="form" id="formEmail">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="">
                </div>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="">
                </div>
                <div class="input-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body-email" rows="5"></textarea>
                </div>
                <div class="form-submit">
                    <input type="submit" name="formEmail" id="submitEmail">
                </div>
            </form>
        </section>
        <section class="right">
            <p id="statusForm"></p>
        </section>
    </div>
    <div id="customAlert" class="">
        <div class="alertBox">
            <h1 class="alertText">test</h1>
            <div class="loading">
                <div class="loadingio-spinner-ripple-nq4q5u6dq7r">
                    <div class="ldio-x2uulkbinbj">
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="done">
                <img src="Assets/done.png" alt="">
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>
</html>