<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
    <?php
        require_once "App/Email.php";
        if(isset($_POST['formEmail'])) {
            $Email->sendEmail($_POST);
        }
    ?>
</head>
<body>
    <div class="container">
        <section class="left">
            <form action="" method="post" class="form">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="">
                </div>
                <!-- <div class="input-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="">
                </div> -->
                <div class="input-group">
                    <label for="body">Body</label>
                    <!-- <input type="text" name="body" id=""> -->
                    <textarea name="body" id="body-email" rows="5"></textarea>
                </div>
                <div class="form-submit">
                    <input type="submit" name="formEmail" id="">
                </div>
            </form>
        </section>
        <section class="right">
            <p>test</p>
        </section>
    </div>
</body>
</html>