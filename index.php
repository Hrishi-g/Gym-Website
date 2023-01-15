<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MFitness - place for your fitness goals</title>
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
    <link rel="stylesheet" href="css/style.css" media="screen" />
</head>

<body>
    <!-- HEADER -->
    <header class="header" id="home">
        <div class="container">
            <nav class="header-navigation" aria-label="navigation">
                <div class="logo"><span class="yellow">B</span>Fit</div>

                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#courses">Courses</a>
                    </li>
                    <li>
                        <a href="#trainers">Trainers</a>
                    </li>
                    <li>
                        <a href="#footer">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <!-- HERO SECTION -->
        <section class="section-hero">
            <div class="container hero-box">
                <div class="hero-content margin-bottom">
                    <h1 class="heading heading--1 margin-bottom">
                        A place for your fitness goals
                    </h1>
                    <p class="description">
                        We Offer Functional Training, Plyometric Boxes,
                        Aerobics classes, TRX And Much More
                    </p>
                </div>
                <div class="btn-group">
                    <button class="btn btn__primary margin-right margin-bottom">
                        <a href="./login.php" class="link-button" id="log_btn">
                            Login</a>
                    </button>
                    <button class="btn btn__secondary"><a href="./register.php" class="link-button" id="join_btn">
                            Join Us</a></button>
                </div>
            </div>
        </section>

        <!-- SECTION ABOUT -->
        <section class="section-about" id="about">
            <div class="about-box container">
                <div class="about-box__content" data-aos="fade-up">
                    <h2 class="heading heading--2">
                        About <span class="yellow">B</span>Fit
                    </h2>
                    <p id="note">
                        we make group workouts fun, daily food healthy &
                        tasty, mental fitness easy with yoga & meditation,
                        and medical & lifestyle care hassle-free.
                        <br />
                        <br />
                        We provide different workout plan for all members
                        personalized on thier demand from our certified and
                        professional trainers.
                    </p>
                </div>
                <figure class="about-box__image" data-aos="fade-up">
                    <img src="img/about-img-1.jpg" alt="about-image-one" width="350" height="233" />
                    <img src="img/about-img-2.jpg" alt="about-image-twwo" width="350" height="233" />
                    <img src="img/about-img-3.jpg" alt="about-image-three" width="420" height="280" />
                </figure>
            </div>
        </section>

        <!-- SECTION COURSES -->
        <section class="section-courses" id="courses">
            <div class="container courses-box" data-aos="fade-up">
                <header class="courses-heading">
                    <h2 class="heading heading--2 underline">
                        Our Courses
                    </h2>
                    <p>Different courses personalized according to need</p>
                </header>

                <article class="courses-content">
                    <div class="class-card">
                        <img class="class-card__img" src="./img/courses-bodybuilding.jpg" alt="body building course"
                            width="550" height="550" />

                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Bodybuilding is the use of progressive
                                    resistance exercise to control and
                                    develop one's muscles by muscle
                                    hypertrophy for aesthetic purposes.
                                </p>

                                <a href="./login.php" class="link-button">Login &rarr;</a>
                            </div>
                        </div>

                        <div class="class-card__title">Body Building</div>
                    </div>

                    <div class="class-card">
                        <img class="class-card__img" src="./img/courses-crossfit.jpg" alt="cross fit course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Cardio is a branded fitness regimen that
                                    involves constantly varied functional
                                    movements performed at high intensity.
                                </p>

                                <a href="./login.php" class="link-button">Login &rarr;</a>
                            </div>
                        </div>
                        <div class="class-card__title">Cardio Workout</div>
                    </div>

                    <div class="class-card">
                        <img class="class-card__img" src="./img/courses-gymnastic.jpg" alt="gymnastic course"
                            width="550" height="550" />

                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Gymnastics is a sport that includes
                                    physical exercises requiring balance,
                                    strength, flexibility, agility,
                                    coordination, dedication and endurance.
                                </p>

                                <a href="./login.php" class="link-button">Login &rarr;</a>
                            </div>
                        </div>

                        <div class="class-card__title">Gymnastic</div>
                    </div>

                    <div class="class-card">
                        <img class="class-card__img" src="./img/courses-fitness.jpg" alt="fitness course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Fitness is a state of health and
                                    well-being and, more specifically, the
                                    ability to perform aspects of sports,
                                    occupations and daily activities.
                                </p>

                                <a href="./login.php" class="link-button">Login &rarr;</a>
                            </div>
                        </div>
                        <div class="class-card__title">Fitness</div>
                    </div>

                    <div class="class-card">
                        <img class="class-card__img" src="./img/courses-TRX.jpg" alt="fitness course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    The TRX System, also known as Total
                                    Resistance Exercises, refers to a
                                    specialized form of suspension training
                                    that utilizes equipment
                                </p>

                                <a href="./login.php" class="link-button">Login &rarr;</a>
                            </div>
                        </div>
                        <div class="class-card__title">TRX</div>
                    </div>

                    <div class="class-card">
                        <img class="class-card__img" src="./img/courses-boxing.jpg" alt="fitness course" width="550"
                            height="550" />
                        <div class="class-card__overlay">
                            <div class="text">
                                <p>
                                    Boxing is a combat sport in which two
                                    people, usually wearing protective
                                    gloves and other protective equipment
                                </p>

                                <a href="./login.php" class="link-button">Login &rarr;</a>
                            </div>
                        </div>
                        <div class="class-card__title">Boxing</div>
                    </div>
                </article>
            </div>
        </section>

        <!-- SECTION OFFER -->
        <section class="section-offer" id="offer">
            <div class="offer-box">
                <div class="offer" data-aos="fade-up">
                    <h2 class="heading heading--2 margin-bottom">
                        Special offer this summer get full Benefits for year
                        with 20% discount.
                    </h2>
                    <button class="btn btn__primary">
                        <a href="./register.php" class="link-button" style="color: black">
                            Become a member</a>
                    </button>
                </div>
                <div class="offer-img"></div>
            </div>
        </section>

        <!-- SECTION COACHES -->
        <section class="section-coaches" id="trainers">
            <div class="container coaches-box" data-aos="fade-up">
                <header class="coache-heading">
                    <h2 class="heading heading--2 underline margin-bottom">
                        OUR FITNESS COACHES
                    </h2>
                    <p>
                        Team of Certified and Professional Coaches
                    </p>
                </header>

                <article class="coache-content">
                    <div class="c-card">
                        <img src="img/coache-1.jpg" alt="coache one" class="c-card__img" width="550" height="550" />

                        <div class="overlay">
                            <a href="https://www.whatsapp.com/" target="_blank">
                                <img src="./img/logo-whatsapp.svg" alt="whatsapp-icon" width="30" height="30" /></a>

                            <a href="https://www.facebook.com/" target="_blank"><img src="./img/logo-facebook.svg"
                                    alt="facebook-icon" width="30" height="30" /></a>

                            <a href="https://www.instagram.com/" target="_blank"><img src="./img/logo-instagram.svg"
                                    alt="instagram-icon" width="30" height="30" /></a>

                            <a href="https://twitter.com/" target="_blank">
                                <img src="./img/logo-twitter.svg" alt="twitter-icon" width="30" height="30" /></a>


                        </div>
                        <div class="c-card__content">
                            <p class="c-name">Jhon Cena</p>
                            <p class="c-title">Body Building</p>
                        </div>
                    </div>

                    <div class="c-card">
                        <img src="./img/coache-2.jpg" alt="coache one" class="c-card__img" width="550" height="550" />

                        <div class="overlay">
                            <a href="https://www.whatsapp.com/" target="_blank">
                                <img src="./img/logo-whatsapp.svg" alt="whatsapp-icon" width="30" height="30" /></a>

                            <a href="https://www.facebook.com/" target="_blank"><img src="./img/logo-facebook.svg"
                                    alt="facebook-icon" width="30" height="30" /></a>

                            <a href="https://www.instagram.com/" target="_blank"><img src="./img/logo-instagram.svg"
                                    alt="instagram-icon" width="30" height="30" /></a>

                            <a href="https://twitter.com/" target="_blank">
                                <img src="./img/logo-twitter.svg" alt="twitter-icon" width="30" height="30" /></a>


                        </div>

                        <div class="c-card__content">
                            <p class="c-name">Brock Lesnar</p>
                            <p class="c-title">Cardio Expert</p>
                        </div>
                    </div>

                    <div class="c-card">
                        <img src="img/coache-3.jpg" alt="coache three" class="c-card__img" width="550" height="550" />
                        <div class="overlay">
                            <a href="https://www.whatsapp.com/" target="_blank">
                                <img src="./img/logo-whatsapp.svg" alt="whatsapp-icon" width="30" height="30" /></a>

                            <a href="https://www.facebook.com/" target="_blank"><img src="./img/logo-facebook.svg"
                                    alt="facebook-icon" width="30" height="30" /></a>

                            <a href="https://www.instagram.com/" target="_blank"><img src="./img/logo-instagram.svg"
                                    alt="instagram-icon" width="30" height="30" /></a>

                            <a href="https://twitter.com/" target="_blank">
                                <img src="./img/logo-twitter.svg" alt="twitter-icon" width="30" height="30" /></a>
                        </div>

                        <div class="c-card__content">
                            <p class="c-name">Randy Orton</p>
                            <p class="c-title">Fitness Coach</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>


        <!-- SECTION REVIEW -->
        <section class="section-review" id="review">
            <div class="review-box container" data-aos="fade-up">
                <h2 class="heading heading--2 underline margin-bottom grid-center">
                    what people say
                </h2>

                <div class="review-card">
                    <img src="img/review-img-1.jpg" alt="user" class="review-card__image" width="100" height="100" />
                    <blockquote class="review-card__content">
                        <p class="text">
                            Their trainers are exceptional, the overall vibe is great and I have had nothing but good
                            experiences. I definitely recommend them to my friends and family.
                        </p>

                        <div class="name">Cesar Rincon</div>
                    </blockquote>
                </div>

                <div class="review-card">
                    <img src="img/review-img-2.jpg" alt="user" class="review-card__image" width="100" height="100" />
                    <blockquote class="review-card__content">
                        <p class="text">
                            Hands down, best choice I’ve made training at BFit. VERY friendly team who make me actually
                            want to go train. I look forward to walking through the doors and always feel amazing when I
                            leave.
                        </p>
                        <div class="name">Mathilde Langevin</div>
                    </blockquote>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="section-footer" id="footer">
        <div class="footer-box container">
            <div class="contact-details">
                <h2 class="margin-bottom">
                    <span class="yellow">B</span>Fit
                </h2>

                <ul class="contact-data">
                    <li class="location">BFit Complex,Colaba,Mumbai-400 045</li>
                    <li class="phone">+00 000 000 00</li>
                    <li class="email">BFit@domin.com</li>
                    <li class="social">
                        <img src="./img/logo-whatsapp.svg" alt="whatsapp icon" width="35" height="35" />

                        <img src="./img/logo-facebook.svg" alt="facebook icon" width="35" height="35" />

                        <img src="./img/logo-instagram.svg" alt="instagram icon" width="35" height="35" />

                        <img src="./img/logo-twitter.svg" alt="twitter icon" width="35" height="35" />
                    </li>
                </ul>
            </div>

            <nav class="footer-nav" aria-label="navigation">
                <div class="nav-name">Quick Links</div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#trainers">Trainers</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
            </nav>
        </div>
    </footer>
    <style>
    #log_btn {
        color: black;
    }

    #join_btn:hover {
        color: black;
        font-style: normal;
        font-family: Arial;
        text-decoration: none;
    }

    .footer-nav {
        margin-left: 100%;
        width: 30%;
    }

    .overlay a {
        margin-top: 50px;
    }
    </style>
</body>

</html>