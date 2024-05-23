<?php var_dump($_COOKIE) ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="resp.css">
        <script src="https://kit.fontawesome.com/18fbdd2877.js" crossorigin="anonymous"></script>

        <title>test</title>

    </head>
    <body>
        <div class="container">
            <div class="bg"></div>
            <section class="content-wrap">
                <section class="left">
                    <main>
                        <header>
                            <h1 class="page-title title">get in touch</h1>
                            <small>feel free to contact us about your concern</small>
                        </header>
                        <form action="" method="post" class="form" id="formEmail" name="contact-us">
                            <div class="input-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="" placeholder="M"></div>
                            <div class="input-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="" placeholder="M"></div>
                            <div class="input-group">
                                <label for="body">Message</label>
                                <textarea name="body" id="body-email" rows="5" placeholder="Masdasda"></textarea>
                            </div>
                            <div class="form-submit">
                                <input type="submit" name="formEmail" id="submitEmail" value="Send">
                            </div>
                        </form>
                    </main>
                </section>
                <section class="right">
                    <aside>
                        <header>
                            <h5 class="title">more about us!</h5>
                        </header>
                        <main class="contact-detail">
                            <p id="email-detail">
                                <i class="fa-solid fa-envelope"></i>exponent@domain.com</p>
                            <p id="phone-number">
                                <i class="fa-solid fa-phone"></i>+62 203941</p>
                            <p id="location">
                                <i class="fa-solid fa-city"></i>based in Denpasar, Bali</p>
                            <p id="worktime">
                                <i class="fa-solid fa-business-time"></i>17.00 - 01.00</p>
                        </main>
                    </aside>
                </section>
            </section>
        </div>

        <div id="customAlert">
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