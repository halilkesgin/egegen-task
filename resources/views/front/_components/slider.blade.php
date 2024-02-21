<div id="slider-container">
    <div class="slider">
        <div class="slide">
            <div class="overlay"></div>
            <img src="{{ asset('img/slider-1.svg') }}" alt="Slide 1">
            <div class="slide-title">
                <div class="slider-title">
                    MODERN TASARIM, GÖZ ALICI GÜZELLİK
                </div>
                <div class="slider-description">
                    POSEIDON SERİSİ
                </div>
                <div class="slider-content">
                    Lorem ipsum dolor sit amet consectetur. Nisi sed viverra sem pellentesque in sociis ultrices. Tempor
                    aliquam tincidunt in pretium mattis aliquam sit id at. Congue pellentesque consectetur id sit a
                    malesuada sed. Felis cras aliquam donec egestas.
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="overlay"></div>
            <img src="{{ asset('img/slider-1.svg') }}" alt="Slide 1">
        </div>
        <div class="slide">
            <div class="overlay"></div>
            <img src="{{ asset('img/slider-1.svg') }}" alt="Slide 1">
        </div>
    </div>

    <div class="slider-controls">
        <button class="control-btn" onclick="prevSlide()">
            <img src="{{ asset('img/nav-arrow-left.svg') }}">
        </button>
        <button class="control-btn" onclick="nextSlide()">
            <img src="{{ asset('img/nav-arrow-right.svg') }}">
        </button>
    </div>

    <div class="status-bar" id="status-bar">
    </div>
</div>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const statusBar = document.getElementById('status-bar');

    function showSlide(index) {
        if (index < 0) {
            currentSlide = slides.length - 1;
        } else if (index >= slides.length) {
            currentSlide = 0;
        } else {
            currentSlide = index;
        }

        const translateValue = -currentSlide * 100 + '%';
        document.querySelector('.slider').style.transform = 'translateX(' + translateValue + ')';

        const dots = document.querySelectorAll('.status-dot');
        dots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    setInterval(nextSlide, 3000);

    slides.forEach((slide, index) => {
        const dot = document.createElement('div');
        dot.classList.add('status-dot');
        dot.addEventListener('click', () => showSlide(index));
        statusBar.appendChild(dot);
    });

    const initialDot = document.querySelector('.status-dot');
    initialDot.classList.add('active');
</script>
