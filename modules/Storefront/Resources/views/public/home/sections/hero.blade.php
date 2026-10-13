<style>
    .full-screen-slider,
.full-screen-slider .home-slider-wrap,
.full-screen-slider .home-slider,
.full-screen-slider .swiper-wrapper,
.full-screen-slider .swiper-slide,
.full-screen-slider .slider-bg-image {
    width: 100vw;
    height: 100vh;
    margin: 0;
    padding: 0;
}

.full-screen-slider .slider-bg-image {
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

    </style>

<section x-data="Hero" class="home-section-wrap full-screen-slider">
    <div class="home-slider-wrap">
        <div
            class="home-slider overflow-hidden swiper"
            data-speed="{{ $slider->speed }}"
            data-autoplay="{{ $slider->autoplay ? 'true' : 'false' }}"
            data-autoplay-speed="{{ $slider->autoplay_speed }}"
            data-dots="{{ $slider->dots ? 'true' : 'false' }}"
            data-arrows="{{ $slider->arrows ? 'true' : 'false' }}"
        >
            <div class="swiper-wrapper">
                @foreach ($slider->slides as $slide)
                    <div class="swiper-slide">
                        <div
                            class="slider-bg-image"
                            style="background-image: url('{{ $slide->file->path }}')"
                        ></div>
                    </div>
                @endforeach
            </div>

            @if ($slider->dots)
                <div class="swiper-pagination"></div>
            @endif

            @if ($slider->arrows)
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            @endif
        </div>
    </div>
</section>
