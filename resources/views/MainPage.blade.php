<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <link rel="stylesheet" href="style.css">
    <title>MMS</title>
</head>

<body>
    <header class="menu">
        <a href="#" class="logo">M <span style="color: #601cfc;">M</span> S</a>
        <nav class="navigation">

            <a href="#testimonial">كتاباتي</a>
            <a href="#services">مهاراتي</a>
            <a href="#about">نبذة مختضرة</a>
        </nav>
    </header>
    <section class="main">
        <div>
            <h2>مرحباً,انا محمد منير <br><span>صانع محتوى</span> </h2>
            <h3>صانع محتوى توعوي هادف</h3>
            <a href="#projects" class="main-btn">لمشاهدة كتاباتي</a>
            <div class="social-icons">
                <a href="#instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#faceBook"><i class="fa-brands fa-facebook"></i></a>
                <a href="#tiktok"><i class="fa-brands fa-tiktok"></i></a>
                <a href="#twitter"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </section>


    <section id="about">
        <div class="about container">
            <div class="col-left">
                <div class="about-img">
                    <img src="/img/photo_2022-06-16_13-42-18.jpg" alt="img">
                </div>
            </div>
            <div class="col-right">
                <h1 class="section-title">نبذة مختصرة</h1>
                <hr class="ss-hr">

                <h2>كاتب وصانع محتوى تقني </h2>
                <p>مرحباً انا محمد منير صانع محتوى توعوي هادف لمساعدة الناس على تحديد مسارها العلمي والعملي
                    وكذالك مصور فوتوغراف وفيديو ومخرج افلام سينمائية قصيرة
                    بلأضافة الى مصمم وكاتب </p>
            </div>
        </div>
    </section>

    <div class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 session-title">
                    <h2 class="title">مهاراتي</h2>
                    <hr class="ss-hr">
                </div>
                <div class="col-sm-4">
                    <div class="card-services">

                        <div class="icon">
                            <p><i class="fa-solid fa-camera fa-2xl"></i></p>
                        </div>


                        <div class="services-info">
                            <h3 class="serv-name">التصوير</h3>
                            <hr class="serv-hr s-green">
                            </hr>
                            <p class="ssubinfo">Nós alugamos impressoras para sua empresa! para que você consiga
                                imprimir
                                documentos.</p>
                            <a href="#" class="more-servinfo">Mais detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card-services">
                        <div class="icon">
                            <p><i class="fa-solid fa-highlighter fa-2xl"></i>
                            </p>
                        </div>


                        <div class="services-info">
                            <h3 class="serv-name">كاتب</h3>
                            <hr class="serv-hr s-orange">
                            </hr>
                            <p class="ssubinfo">Nós alugamos impressoras para sua empresa! para que você consiga
                                imprimir
                                documentos.</p>
                            <a href="#" class="more-servinfo">Mais detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card-services">
                        <div class="icon">
                            <p><i class="fa-solid fa-video fa-2xl"></i>
                            </p>
                        </div>


                        <div class="services-info">
                            <h3 class="serv-name">مخرج</h3>
                            <hr class="serv-hr s-blue">
                            </hr>
                            <p class="ssubinfo">Nós alugamos impressoras para sua empresa! para que você consiga
                                imprimir
                                documentos.</p>
                            <a href="#" class="more-servinfo">Mais detalhes</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <section id="testimonial">
        <div class="title-text">
            <h2 class="title">كتاباتي</h2>
            <hr class="ss-hr">

        </div>
        <div class="testimonial-row">
            <div class="testimonial-col">
                <div class="user">
                    <img src="img/photo_2022-06-16_13-42-18.jpg" alt="">
                    <div class="user-info">
                        <h4>Mohammed Munner<i class="fa-brands fa-instagram"></i></h4>
                        <small>{{ $articles[0]->title }}</small>
                    </div>
                </div>
                <p>
                <p>{{ $articles[0]->article }}</p>
                </p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="img/photo_2022-06-16_13-42-18.jpg" alt="">
                    <div class="user-info">
                        <h4>Mohammed Munner<i class="fa-brands fa-instagram"></i></h4>
                        <small>{{ $articles[1]->title }}</small>
                    </div>
                </div>
                <p>{{ $articles[1]->article }}</p>
            </div>
            <div class="testimonial-col">
                <div class="user">
                    <img src="img/photo_2022-06-16_13-42-18.jpg" alt="">
                    <div class="user-info">
                        <h4>Mohammed Munner<i class="fa-brands fa-instagram"></i></h4>
                        <small>{{ $articles[2]->title }}</small>
                    </div>
                </div>
                <p>
                <p>{{ $articles[2]->article }}</p>
                </p>
            </div>

        </div>

    </section>


    <footer id="footer">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a href="#"><img src="/public/img/photo_2022-06-16_13-45-39.jpg" alt="scanfcode"></a>
                    </div>
                    <!-- /footer logo -->
                    <!-- footer follow -->
                    <ul class="footer-follow">
                        <li> <a href="#instagram"><i class="fa-brands fa-instagram"></i></a></li>
                        <li> <a href="#faceBook"><i class="fa-brands fa-facebook"></i></a></li>
                        <li> <a href="#tiktok"><i class="fa-brands fa-tiktok"></i></a></li>
                        <li> <a href="#twitter"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                    <!-- /footer follow -->
                    <!-- footer copyright -->
                    <div class="footer-copyright">
                        <p>Copyright © 2022. All Rights Reserved. <a href="http://scanfcode.com/"
                                target="_blank">Scanfcode</a></p>
                    </div>
                    <!-- /footer copyright -->
                </div>
            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>


</body>



</html>
