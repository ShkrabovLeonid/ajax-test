<?php ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, minimum-scale=1.0, user-scalable=0, viewport-fit=cover"
          id="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax test</title>
    <meta name="description" content="Test work">
    <link rel="stylesheet" href="./assets/dist/core/css/style.css">
    <link rel="stylesheet" href="./assets/dist/front_page/css/style.css">
</head>
<body>
<main>
    <section class="start_block">
        <div class="start_block__full-bg-img">
            <picture>
                <source media="(max-width: 1216px) and (min-width: 769px)" type="image/webp"
                        srcset="./assets/dist/img/keyvisual_start_block_tablet_2x.webp 2x">
                <source media="(max-width: 1216px) and (min-width: 769px)" type="image/webp"
                        srcset="./assets/dist/img/keyvisual_start_block_tablet_1x.webp">
                <source media="(max-width: 1216px) and (min-width: 769px)"
                        srcset="./assets/dist/img/keyvisual_start_block_tablet@2x.jpg 2x">
                <source media="(max-width: 1216px) and (min-width: 769px)"
                        srcset="./assets/dist/img/keyvisual_start_block_tablet@1x.jpg">
                <source media="(max-width: 768px) and (min-width: 337px)" type="image/webp"
                        srcset="./assets/dist/img/keyvisual_start_block_tablet_2x.webp 2x">
                <source media="(max-width: 768px) and (min-width: 337px)" type="image/webp"
                        srcset="./assets/dist/img/keyvisual_start_block_tablet_1x.webp">
                <source media="(max-width: 768px) and (min-width: 337px)"
                        srcset="./assets/dist/img/keyvisual_start_block_tablet@2x.jpg 2x">
                <source media="(max-width: 768px) and (min-width: 337px)"
                        srcset="./assets/dist/img/keyvisual_start_block_tablet@1x.jpg">
                <source media="(max-width: 336px)" type="image/webp"
                        srcset="./assets/dist/img/keyvisual_start_block_mobile_2x.webp 2x">
                <source media="(max-width: 336px)" type="image/webp"
                        srcset="./assets/dist/img/keyvisual_start_block_mobile_1x.webp">
                <source media="(max-width: 336px)" srcset="./assets/dist/img/keyvisual_start_block_mobile@2x.jpg 2x">
                <source media="(max-width: 336px)" srcset="./assets/dist/img/keyvisual_start_block_mobile@1x.jpg">
                <source type="image/webp" srcset="./assets/dist/img/keyvisual_start_block_full_2x.webp 2x">
                <source type="image/webp" srcset="./assets/dist/img/keyvisual_start_block_full_1x.webp">
                <source srcset="./assets/dist/img/keyvisual_start_block_full@2x.jpg 2x">
                <img src="./assets/dist/img/keyvisual_start_block_full@1x.jpg" alt="">
            </picture>
        </div>
        <div class="container start_block__container">
            <div class="start_block__content">
                <div class="start_block__logos">
                    <div class="logo">
                        <img src="./assets/dist/img/logo_1@1x.svg" alt="Logo 1">
                    </div>
                    <div class="logo">
                        <img src="./assets/dist/img/logo_2@1x.svg" alt="Logo 2">
                    </div>
                </div>
                <div class="start_block__text">
                    <hgroup>
                        <h1>Save 10%</h1>
                        <h2>on a security system and services</h2>
                    </hgroup>
                    <p>Become a Corpo Vigili Giuarati client to get an Ajax system starter kit with a 10% discount and
                        pay 10% less for security services. It is a perfect combination of best-in-class equipment and
                        professional alarm monitoring.</p>
                    <p>Moreover, by purchasing a security system, you can get a tax credit of 50% of the purchase.</p>
                </div>
            </div>
            <form class="start_block__form form_order_now">
                <div class="start_block__form-body">
                    <p class="start_block__form-title">Order now</p>
                    <p class="start_block__form-desc">Leave your phone number and email for our experts to contact you
                        shortly.</p>
                    <input type="tel" name="tel" placeholder="Phone" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="triangle"></div>
                <div class="start_block__terms">
                    <label class="checkbox">
                        <input type="checkbox" name="terms" required>
                        <span></span>
                    </label>
                    <p>I agree that Ajax Systems and its authorized partners can contact me via email
                        or phone to purchase a security system. The information provided will not be used for other
                        commercial purposes.</p>
                </div>
                <div class="triangle"></div>
                <button class="btn start_block__btn">Order</button>
            </form>
        </div>
    </section>
    <section class="slider_block">
        <h2>The impulse for smart security</h2>
        <div class="swiper mySwiper">
            <div class="swiper-panel">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_1_s@2x.jpg 2x">
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_1_s@1x.jpg">
                        <source srcset="./assets/dist/img/slider/ws_1_xl@2x.jpg 2x">
                        <img src="./assets/dist/img/slider/ws_1_xl@1x.jpg" alt="">
                    </picture>
                    <div class="swiper-slide-text">
                        <h3>Flood-prevention system 1</h3>
                        <p>Set the automatic water shut off in case the washing machine breaks or a pipe bursts. Control
                            the water supply at the facility remotely or set up a schedule.</p>
                        <a class="line" href="#">How to connect</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_2_s@2x.jpg 2x">
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_2_s@1x.jpg">
                        <source srcset="./assets/dist/img/slider/ws_2_xl@2x.jpg 2x">
                        <img src="./assets/dist/img/slider/ws_2_xl@1x.jpg" alt="">
                    </picture>
                    <div class="swiper-slide-text">
                        <h3>Flood-prevention system 2</h3>
                        <p>Set the automatic water shut off in case the washing machine breaks or a pipe bursts. Control
                            the water supply at the facility remotely or set up a schedule.</p>
                        <a class="line" href="#">How to connect</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_3_s@2x.jpg 2x">
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_3_s@1x.jpg">
                        <source srcset="./assets/dist/img/slider/ws_3_xl@2x.jpg 2x">
                        <img src="./assets/dist/img/slider/ws_3_xl@1x.jpg" alt="">
                    </picture>
                    <div class="swiper-slide-text">
                        <h3>Flood-prevention system 3</h3>
                        <p>Set the automatic water shut off in case the washing machine breaks or a pipe bursts. Control
                            the water supply at the facility remotely or set up a schedule.</p>
                        <a class="line" href="#">How to connect</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_4_s@2x.jpg 2x">
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_4_s@1x.jpg">
                        <source srcset="./assets/dist/img/slider/ws_4_xl@2x.jpg 2x">
                        <img src="./assets/dist/img/slider/ws_4_xl@1x.jpg" alt="">
                    </picture>
                    <div class="swiper-slide-text">
                        <h3>Flood-prevention system 4</h3>
                        <p>Set the automatic water shut off in case the washing machine breaks or a pipe bursts. Control
                            the water supply at the facility remotely or set up a schedule.</p>
                        <a class="line" href="#">How to connect</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_5_s@2x.jpg 2x">
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_5_s@1x.jpg">
                        <source srcset="./assets/dist/img/slider/ws_5_xl@2x.jpg 2x">
                        <img src="./assets/dist/img/slider/ws_5_xl@1x.jpg" alt="">
                    </picture>
                    <div class="swiper-slide-text">
                        <h3>Flood-prevention system 5</h3>
                        <p>Set the automatic water shut off in case the washing machine breaks or a pipe bursts. Control
                            the water supply at the facility remotely or set up a schedule.</p>
                        <a class="line" href="#">How to connect</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_6_s@2x.jpg 2x">
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_6_s@1x.jpg">
                        <source srcset="./assets/dist/img/slider/ws_6_xl@2x.jpg 2x">
                        <img src="./assets/dist/img/slider/ws_6_xl@1x.jpg" alt="">
                    </picture>
                    <div class="swiper-slide-text">
                        <h3>Flood-prevention system 6</h3>
                        <p>Set the automatic water shut off in case the washing machine breaks or a pipe bursts. Control
                            the water supply at the facility remotely or set up a schedule.</p>
                        <a class="line" href="#">How to connect</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_7_s@2x.jpg 2x">
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_7_s@1x.jpg">
                        <source srcset="./assets/dist/img/slider/ws_7_xl@2x.jpg 2x">
                        <img src="./assets/dist/img/slider/ws_7_xl@1x.jpg" alt="">
                    </picture>
                    <div class="swiper-slide-text">
                        <h3>Flood-prevention system 7</h3>
                        <p>Set the automatic water shut off in case the washing machine breaks or a pipe bursts. Control
                            the water supply at the facility remotely or set up a schedule.</p>
                        <a class="line" href="#">How to connect</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_8_s@2x.jpg 2x">
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_8_s@1x.jpg">
                        <source srcset="./assets/dist/img/slider/ws_8_xl@2x.jpg 2x">
                        <img src="./assets/dist/img/slider/ws_8_xl@1x.jpg" alt="">
                    </picture>
                    <div class="swiper-slide-text">
                        <h3>Flood-prevention system 8</h3>
                        <p>Set the automatic water shut off in case the washing machine breaks or a pipe bursts. Control
                            the water supply at the facility remotely or set up a schedule.</p>
                        <a class="line" href="#">How to connect</a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_9_s@2x.jpg 2x">
                        <source media="(max-width: 700px)" srcset="./assets/dist/img/slider/ws_9_s@1x.jpg">
                        <source srcset="./assets/dist/img/slider/ws_9_xl@2x.jpg 2x">
                        <img src="./assets/dist/img/slider/ws_9_xl@1x.jpg" alt="">
                    </picture>
                    <div class="swiper-slide-text">
                        <h3>Flood-prevention system 9</h3>
                        <p>Set the automatic water shut off in case the washing machine breaks or a pipe bursts. Control
                            the water supply at the facility remotely or set up a schedule.</p>
                        <a class="line" href="#">How to connect</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <script src="assets/dist/core/js/script.js"></script>
    <script src="assets/dist/front_page/js/script.js"></script>
</footer>
</body>
</html>
