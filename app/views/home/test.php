<!DOCTYPE html>
<html>

<head>
    <style>
        .brand {
            position: relative;
            width: 100%;
            max-width: 800px; /* Adjust as needed */
            margin: 0 auto;
            overflow: hidden;
        }

        .row {
            display: flex;
            transition: transform 0.5s ease;
        }

        .box {
            flex: 0 0 auto;
            width: 20%; /* Display five items at a time, adjust as needed */
            text-align: center;
            padding: 0 10px;
        }

       .box img {
            width: 100%;
            height: auto;
        }

        button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px;
            z-index: 1;
        }

        .prev {
            left: 0;
        }

        .next {
            right: 0;
        }

    </style>
</head>

<body>


<div class="brand mb-4 mt-4 ">

    <div class="row flex-sm-shrink-1 flex-row justify-content-center ">
        <div class="box rounded-4">
            <img src="imgs/ABB.jpg" class="img-fluid">
        </div>
        <div class="box rounded-4">
            <img src="brands/schneider.png" class="img-fluid">
        </div>
        <div class="box rounded-4">
            <img src="brands/chint.jpg" class="img-fluid">
        </div>
        <div class="box rounded-4">
            <img src="brands/osram.png" class="img-fluid">
        </div>
        <div class="box rounded-4">
            <img src="brands/Philips.png" class="img-fluid">
        </div>
        <div class="box rounded-4">
            <img src="brands/Bosch.png" class="img-fluid">
        </div>
    </div>
</div>
        <!-- Add more slides as needed -->

    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>
</div>

<script>
    let slideIndex = 0;

    function moveSlide(n) {
        const slides = document.querySelectorAll('.box');
        const totalSlides = slides.length;

        const visibleSlides = 5; // Number of visible slides
        const slidesToScroll = 5; // Number of slides to scroll

        slideIndex = (slideIndex + n + totalSlides) % totalSlides;

        const slideWidth = slides[0].offsetWidth * slidesToScroll;
        document.querySelector('.row').style.transform = `translateX(-${slideWidth * slideIndex}px)`;

        // Disable next button when at last set of slides
        document.querySelector('.next').disabled = slideIndex >= totalSlides - visibleSlides;

        // Disable prev button when at first set of slides
        document.querySelector('.prev').disabled = slideIndex === 0;
    }

</script>

</body>

</html>
