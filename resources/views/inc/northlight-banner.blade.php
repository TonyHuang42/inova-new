<style>
    .northlight-banner-container {
        position: relative;
        width: 100%;
        padding-bottom: 50%;
        height: 100vh;
        overflow: hidden;
        /* min-height: 900px; */
    }

    .phone-banner {
        width: 100%;
        height: 100vh;
        /* min-height: 900px; */
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
    }

    .phone-banner-phone {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        max-width: 100%;
        min-height: 900px;
        object-fit: cover;
    }

    .phone-banner-features {
        position: absolute;
        transform: translate(-50%, -50%);
        max-height: 70px;
    }

    .phone-banner-northlight {
        width: 100%;
        height: auto;
        min-height: 350px;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
    }

    .phone-banner-slogan {
        width: 100%;
        height: auto;
        min-height: 420px;
        object-fit: cover;
        position: absolute;
        top: 0;
        left: 0;
    }

    .highlight-wrap {
        display: flex;
        flex-direction: column;
        align-items: center;
        pointer-events: none;
    }

    @media only screen and (max-width: 1199px) {
        .phone-banner-features {
            max-height: 60px;
        }
    }

    @media only screen and (max-width: 991px) {
        .phone-banner-features {
            max-height: 45px;
        }
    }

    @media only screen and (max-width: 167) {
        .phone-banner-features {
            max-height: 50px;
        }
    }
</style>

<div class="northlight-banner-container">
    <img src="{{ asset('img/northlight/banner/BG.jpg') }}" alt="banner" class="phone-banner">
    <img src="{{ asset('img/northlight/banner/phone.png') }}" alt="phone" class="phone-banner-phone">
    <img src="{{ asset('img/northlight/banner/northlight.png') }}" alt="northlight" class="phone-banner-northlight">
    <img src="{{ asset('img/northlight/banner/slogan.png') }}" alt="slogan" class="phone-banner-slogan">

    <div class="d-none d-xl-flex">
        <a class="highlight-wrap" data-target="camera" href="/northlight#engineering-drawing-section">
            <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_camera.png') }}" alt="features" class="phone-banner-features" style="top: 42%; left: 19%;">
        </a>

        <a class="highlight-wrap" data-target="display" href="/northlight#engineering-drawing-section">
            <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_screen.png') }}" alt="features" class="phone-banner-features" style="top: 42%; left: 77%;">
        </a>

        <a class="highlight-wrap" data-target="battery" href="/northlight#engineering-drawing-section">
            <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_battery.png') }}" alt="features" class="phone-banner-features" style="top: 64%; left: 15%;">
        </a>

        <a class="highlight-wrap" data-target="sim-card" href="/northlight#engineering-drawing-section">
            <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_SIMs.png') }}" alt="features" class="phone-banner-features" style="top: 64%; left: 85%;">
        </a>

        <a class="highlight-wrap" data-target="chip" href="/northlight#engineering-drawing-section">
            <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_chip.png') }}" alt="features" class="phone-banner-features" style="top: 86%; left: 20%;">
        </a>

        <a class="highlight-wrap" data-target="microSD" href="/northlight#engineering-drawing-section">
            <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_SDCard.png') }}" alt="features" class="phone-banner-features" style="top: 86%; left: 82%;">
        </a>
    </div>

    <div class="d-xl-none d-md-flex d-none">
        <a class="highlight-wrap" data-target="camera-mobile" href="/northlight#engineering-drawing-section-mobile">
            <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_camera.png') }}" alt="features" class="phone-banner-features" style="top: 42%; left: 19%;">
        </a>

        <a class="highlight-wrap" data-target="display-mobile" href="/northlight#engineering-drawing-section-mobile">
            <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_screen.png') }}" alt="features" class="phone-banner-features" style="top: 42%; left: 77%;">
        </a>

        <a class="highlight-wrap" data-target="battery-mobile" href="/northlight#engineering-drawing-section-mobile">
            <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_battery.png') }}" alt="features" class="phone-banner-features" style="top: 64%; left: 15%;">
        </a>

        <a class="highlight-wrap" data-target="sim-card-mobile" href="/northlight#engineering-drawing-section-mobile">
            <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_SIMs.png') }}" alt="features" class="phone-banner-features" style="top: 64%; left: 85%;">
        </a>

        <a class="highlight-wrap" data-target="chip-mobile" href="/northlight#engineering-drawing-section-mobile">
            <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_chip.png') }}" alt="features" class="phone-banner-features" style="top: 86%; left: 20%;">
        </a>

        <a class="highlight-wrap" data-target="microSD-mobile" href="/northlight#engineering-drawing-section-mobile">
            <img src="{{ asset('img/northlight/banner/desktop_bubbles/bubble_SDCard.png') }}" alt="features" class="phone-banner-features" style="top: 86%; left: 82%;">
        </a>
    </div>

    <div class="d-md-none">
        <a class="highlight-wrap" data-target="camera-mobile" href="/northlight#engineering-drawing-section-mobile">
            <img src="{{ asset('img/northlight/banner/mobile_bubbles/bubble_camera.png') }}" alt="features" class="phone-banner-features" style="top: 27%; left: 25%;">
        </a>

        <a class="highlight-wrap" data-target="display-mobile" href="/northlight#engineering-drawing-section-mobile">
            <img src="{{ asset('img/northlight/banner/mobile_bubbles/bubble_screen.png') }}" alt="features" class="phone-banner-features" style="top: 27%; left: 50%;">
        </a>

        <a class="highlight-wrap" data-target="battery-mobile" href="/northlight#engineering-drawing-section-mobile">
            <img src="{{ asset('img/northlight/banner/mobile_bubbles/bubble_battery.png') }}" alt="features" class="phone-banner-features" style="top: 27%; left: 75%;">
        </a>

        <a class="highlight-wrap" data-target="sim-card-mobile" href="/northlight#engineering-drawing-section-mobile">
            <img src="{{ asset('img/northlight/banner/mobile_bubbles/bubble_SIMs.png') }}" alt="features" class="phone-banner-features" style="top: 37%; left: 25%;">
        </a>

        <a class="highlight-wrap" data-target="chip-mobile" href="/northlight#engineering-drawing-section-mobile">
            <img src="{{ asset('img/northlight/banner/mobile_bubbles/bubble_chip.png') }}" alt="features" class="phone-banner-features" style="top: 37%; left: 50%;">
        </a>

        <a class="highlight-wrap" data-target="microSD-mobile" href="/northlight#engineering-drawing-section-mobile">
            <img src="{{ asset('img/northlight/banner/mobile_bubbles/bubble_SDCard.png') }}" alt="features" class="phone-banner-features" style="top: 37%; left: 75%;">
        </a>
    </div>
</div>
