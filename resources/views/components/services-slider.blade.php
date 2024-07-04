<style>
    .custom-carousel {
        height: 80vh;
        margin-top: -50px;
        width: 100vw;
        overflow: hidden;
        position: relative;
    }

    .custom-carousel .custom-list .custom-item {
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0 0 0 0;
    }

    .custom-carousel .custom-list .custom-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .custom-carousel .custom-list .custom-item .content {
        position: absolute;
        top: 25%;
        width: 100%;
        max-width: 40%;
        left: 25%;
        transform: translateX(-50%);
        padding: 30px;
        box-sizing: border-box;
        color: #fff;
        text-shadow: 0 5px 10px #0004;
        justify-content: space-between;
        display: flex;
        flex-direction: column;
        height: 450px;
    }

    .custom-carousel .custom-list .custom-item .author {
        font-weight: bold;
        letter-spacing: 10px;
    }

    .custom-carousel .custom-list .custom-item .title,
    .custom-carousel .custom-list .custom-item .topic {
        font-size: 4.5em;
        font-weight: bold;
        line-height: 1.3em;
    }

    .custom-carousel .custom-list .custom-item .topic {
        color: #f1683a;
    }

    .custom-carousel .custom-list .custom-item .buttons {
        display: grid;
        grid-template-columns: repeat(2, 130px);
        grid-template-rows: 40px;
        gap: 5px;
        margin-top: 20px;
    }

    .custom-carousel .custom-list .custom-item .buttons button {
        border: none;
        background-color: #eee;
        letter-spacing: 3px;
        font-family: Poppins;
        font-weight: 500;
    }

    .custom-carousel .custom-list .custom-item .buttons button:nth-child(2) {
        background-color: transparent;
        border: 1px solid #fff;
        color: #eee;
    }

    /* thumbail */
    .custom-thumbnails {
        position: absolute;
        bottom: 50px;
        left: 50%;
        width: max-content;
        z-index: 100;
        display: flex;
        gap: 20px;
    }

    .custom-thumbnails .custom-item {
        width: 150px;
        height: 220px;
        flex-shrink: 0;
        position: relative;
    }

    .custom-thumbnails .custom-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 20px;
    }

    .custom-thumbnails .custom-item .content {
        color: #fff;
        position: absolute;
        bottom: 10px;
        left: 10px;
        right: 10px;
    }

    .custom-thumbnails .custom-item .content .title {
        font-weight: 500;
    }

    .custom-thumbnails .custom-item .content .description {
        font-weight: 300;
    }

    /* arrows */
    .arrows {
        position: absolute;
        top: 80%;
        right: 52%;
        z-index: 100;
        width: 300px;
        max-width: 30%;
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .arrows button {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #eee4;
        border: none;
        color: #fff;
        font-family: monospace;
        font-weight: bold;
        transition: .5s;
    }

    .arrows button:hover {
        background-color: #fff;
        color: #000;
    }

    /* animation */
    .custom-carousel .custom-list .custom-item:nth-child(1) {
        z-index: 1;
    }

    /* animation text in first item */

    .custom-carousel .custom-list .custom-item:nth-child(1) .content .author,
    .custom-carousel .custom-list .custom-item:nth-child(1) .content .title,
    .custom-carousel .custom-list .custom-item:nth-child(1) .content .topic,
    .custom-carousel .custom-list .custom-item:nth-child(1) .content .des,
    .custom-carousel .custom-list .custom-item:nth-child(1) .content .buttons {
        transform: translateY(50px);
        filter: blur(20px);
        opacity: 0;
        animation: showContent .5s 1s linear 1 forwards;
    }

    @keyframes showContent {
        to {
            transform: translateY(0px);
            filter: blur(0px);
            opacity: 1;
        }
    }

    .custom-carousel .custom-list .custom-item:nth-child(1) .content .title {
        animation-delay: 1.2s !important;
    }

    .custom-carousel .custom-list .custom-item:nth-child(1) .content .topic {
        animation-delay: 1.4s !important;
    }

    .custom-carousel .custom-list .custom-item:nth-child(1) .content .des {
        animation-delay: 1.6s !important;
    }

    .custom-carousel .custom-list .custom-item:nth-child(1) .content .buttons {
        animation-delay: 1.8s !important;
    }

    /* create animation when next click */
    .custom-carousel.next .custom-list .custom-item:nth-child(1) img {
        width: 150px;
        height: 220px;
        position: absolute;
        bottom: 50px;
        left: 50%;
        border-radius: 30px;
        animation: showImage .5s linear 1 forwards;
    }

    @keyframes showImage {
        to {
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 0;
        }
    }

    .custom-carousel.next .custom-thumbnails .custom-item:nth-last-child(1) {
        overflow: hidden;
        animation: showThumbnail .5s linear 1 forwards;
    }

    .custom-carousel.prev .custom-list .custom-item img {
        z-index: 100;
    }

    @keyframes showThumbnail {
        from {
            width: 0;
            opacity: 0;
        }
    }

    .custom-carousel.next .custom-thumbnails {
        animation: effectNext .5s linear 1 forwards;
    }

    @keyframes effectNext {
        from {
            transform: translateX(150px);
        }
    }

    /* running time */

    .custom-carousel .time {
        position: absolute;
        z-index: 1000;
        width: 0%;
        height: 3px;
        background-color: #f1683a;
        left: 0;
        top: 0;
    }

    .custom-carousel.next .time,
    .custom-carousel.prev .time {
        animation: runningTime 3s linear 1 forwards;
    }

    @keyframes runningTime {
        from {
            width: 100%
        }

        to {
            width: 0
        }
    }


    /* prev click */

    .custom-carousel.prev .custom-list .custom-item:nth-child(2) {
        z-index: 2;
    }

    .custom-carousel.prev .custom-list .custom-item:nth-child(2) img {
        animation: outFrame 0.5s linear 1 forwards;
        position: absolute;
        bottom: 0;
        left: 0;
    }

    @keyframes outFrame {
        to {
            width: 150px;
            height: 220px;
            bottom: 50px;
            left: 50%;
            border-radius: 20px;
        }
    }

    .custom-carousel.prev .custom-thumbnails .custom-item:nth-child(1) {
        overflow: hidden;
        opacity: 0;
        animation: showThumbnail .5s linear 1 forwards;
    }

    .custom-carousel.next .arrows button,
    .custom-carousel.prev .arrows button {
        pointer-events: none;
    }

    .custom-carousel.prev .custom-list .custom-item:nth-child(2) .content .author,
    .custom-carousel.prev .custom-list .custom-item:nth-child(2) .content .title,
    .custom-carousel.prev .custom-list .custom-item:nth-child(2) .content .topic,
    .custom-carousel.prev .custom-list .custom-item:nth-child(2) .content .des,
    .custom-carousel.prev .custom-list .custom-item:nth-child(2) .content .buttons {
        animation: contentOut 1.5s linear 1 forwards !important;
    }

    @keyframes contentOut {
        to {
            transform: translateY(-150px);
            filter: blur(20px);
            opacity: 0;
        }
    }

    @media screen and (max-width: 678px) {
        .custom-carousel .custom-list .custom-item .content {
            padding-right: 0;
        }

        .custom-carousel .custom-list .custom-item .content .title {
            font-size: 30px;
        }
    }
</style>

<div class="container">
<section class=" bg-transparent pb-0">
    <div class="custom-carousel">
        <div class="custom-list">
            <div class="custom-item">
                <img src="{{ asset('frontend/assets/imgs/portfolio/2/1.jpg') }}">
                <div class="content">
                    <h2 class="title">Web Development</h2>
                    <p class="des">
                        We specialize in creating robust and scalable web applications tailored to meet your specific
                        business needs.
                        Our team ensures high-quality code, responsive design, and seamless integration with third-party
                        services.
                    </p>
                    <div class="butn">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>

            <div class="custom-item">
                <img src="{{ asset('frontend/assets/imgs/portfolio/2/2.jpg') }}">
                <div class="content">
                    <h2 class="title">Custom Software Development</h2>
                    <p class="des">
                        Our custom software solutions are designed to streamline your business operations and enhance
                        productivity.
                        From initial concept to final deployment, we ensure that your software aligns perfectly with
                        your goals.
                    </p>
                    <div class="butn">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>

            <div class="custom-item">
                <img src="{{ asset('frontend/assets/imgs/portfolio/2/3.jpg') }}">
                <div class="content">
                    <h2 class="title">WordPress Web Development</h2>
                    <p class="des">
                        As experts in WordPress development, we create stunning websites that are user-friendly and
                        easily manageable.
                        Whether you need an e-commerce platform or a blog, we deliver customized solutions using
                        WordPress best practices.
                    </p>
                    <div class="butn">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>

            <div class="custom-item">
                <img src="{{ asset('frontend/assets/imgs/portfolio/2/4.jpg') }}">
                <div class="content">
                    <h2 class="title">Website Revamping & Bug Fixes</h2>
                    <p class="des">Enhance your online presence with our expert website revamping and bug fix services.
                         We specialize in refining interfaces, resolving glitches, and optimizing functionality for
                         seamless user experiences.</p>
                    <div class="butn">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>

        </div>
        <!-- custom-list thumbnail -->
        <div class="custom-thumbnails">
            <div class="custom-item">
                <img src="{{ asset('frontend/assets/imgs/portfolio/2/1.jpg') }}">
            </div>
            <div class="custom-item">
                <img src="{{ asset('frontend/assets/imgs/portfolio/2/2.jpg') }}">
            </div>
            <div class="custom-item">
                <img src="{{ asset('frontend/assets/imgs/portfolio/2/3.jpg') }}">
            </div>
            <div class="custom-item">
                <img src="{{ asset('frontend/assets/imgs/portfolio/2/4.jpg') }}">
            </div>
        </div>
        <!-- next prev -->
        <div class="custom-arrows">
            <button id="prev">&lt;</button>
            <button id="next">&gt;</button>
        </div>
        <!-- custom-time running -->
        <div class="custom-time"></div>
    </div>
</section>
@section('scripts')
    <script>
        //step 1: get DOM
        let nextDom = document.getElementById('next');
        let prevDom = document.getElementById('prev');

        let carouselDom = document.querySelector('.custom-carousel');
        let SliderDom = carouselDom.querySelector('.custom-list');
        let thumbnailBorderDom = document.querySelector('.custom-thumbnails');
        let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll('.custom-item');
        let timeDom = document.querySelector('.custom-carousel .custom-time');

        thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
        let timeRunning = 3000;
        // let timeAutoNext = 7000;

        nextDom.onclick = function() {
            showSlider('next');
            console.log(' slides loaded on click ' + nextDom.className);
        }

        prevDom.onclick = function() {
            showSlider('prev');
            console.log('slides loaded on click' + prevDom.className);
        }
        let runTimeOut;
        // let runNextAuto = setTimeout(() => {
        //     next.click();
        // }, timeAutoNext)

        function showSlider(type) {
            let SliderItemsDom = SliderDom.querySelectorAll('.custom-carousel .custom-list .custom-item');
            let thumbnailItemsDom = document.querySelectorAll('.custom-carousel .custom-thumbnails .custom-item');

            if (type === 'next') {
                SliderDom.appendChild(SliderItemsDom[0]);
                thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
                carouselDom.classList.add('next');
            } else {
                SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
                thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
                carouselDom.classList.add('prev');
            }
            clearTimeout(runTimeOut);
            runTimeOut = setTimeout(() => {
                carouselDom.classList.remove('next');
                carouselDom.classList.remove('prev');
            }, timeRunning);

            // clearTimeout(runNextAuto);
            // runNextAuto = setTimeout(() => {
            //     next.click();
            // }, timeAutoNext)
        }

        // document.addEventListener("DOMContentLoaded", function() {
        //     const nextButton = document.getElementById('next');
        //     const prevButton = document.getElementById('prev');
        //     const carousel = document.querySelector('.custom-carousel');
        //     const slider = carousel.querySelector('.custom-list');
        //     const thumbnailsBorder = carousel.querySelector('.custom-thumbnails');
        //     const thumbnailItems = thumbnailsBorder.querySelectorAll('.custom-item');

        //     nextButton.addEventListener('click', () => {
        //         showSlider('next');
        //     });

        //     prevButton.addEventListener('click', () => {
        //         showSlider('prev');
        //     });

        //     function showSlider(type) {
        //         const currentSlide = slider.querySelector('.custom-item');
        //         let nextSlide;

        //         if (type === 'next') {
        //             nextSlide = currentSlide.nextElementSibling || slider.firstElementChild;
        //         } else {
        //             nextSlide = currentSlide.previousElementSibling || slider.lastElementChild;
        //         }

        //         // // Ensure the new active slide has the appropriate classes
        //         // currentSlide.classList.remove('active');
        //         // nextSlide.classList.add('active');

        //         // Move thumbnails accordingly
        //         const currentThumbnail = thumbnailsBorder.querySelector('.custom-item');
        //         thumbnailsBorder.appendChild(currentThumbnail);

        //         carousel.classList.add(type);

        //         // Ensure the timeout matches your animation duration
        //         setTimeout(() => {
        //             carousel.classList.remove(type);
        //         }, 500);
        //     }
        // });
    </script>
@endsection
