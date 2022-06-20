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
    {{-- <header class="menu">
        <a href="#" class="logo">M <span style="color: #601cfc;">M</span> S</a>
        <nav class="navigation">

            <a href="#projects">كتاباتي</a>
            <a href="#services">مهاراتي</a>
            <a href="#projects">نبذة مختضرة</a>
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
    </section> --}}

    <section id="testimonial">
        <div class="title-text">
            <h2 class="title">كتاباتي</h2>
            <hr class="ss-hr">

        </div>
        <div class="testimonial-row">

            @foreach ($articles as $article)
                <div class="testimonial-col">
                    <div class="user">
                        <img src="img/photo_2022-06-16_13-42-18.jpg" alt="">
                        <div class="user-info">
                            <h4>Mohammed Munner<i class="fa-brands fa-instagram"></i></h4>
                            <small>{{ $article->title }}</small>
                        </div>
                    </div>
                    <p>
                    <p>{{ $article->article }}</p>
                    </p>
                </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center">
            {!! $articles->links() !!}
        </div>



    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>


</body>



</html>
