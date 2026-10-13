<style>
.two-banners-section {
    padding: 4rem 0;
    background: #fff;
}

.two-banners-container {
    display: flex;
    gap: 2rem;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
}

.collection-card {
    flex: 1 1 50%;
    height: 600px;
    border-radius: 8px;
    overflow: hidden;
    position: relative;
    text-decoration: none;
    color: #fff;
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
}

.collection-card:hover {
    transform: scale(1.02);
}

.content-over-media {
    width: 100%;
    height: 100%;
    position: relative;
}

.banner-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.collection-card:hover .banner-image {
    transform: scale(1.05);
}

.collection-card__content-wrapper {
    position: absolute;
    bottom: 2rem;
    left: 2rem;
    color: #fff;
    z-index: 2;
}

.collection-card__content .subheading {
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 0 0 0.5rem 0;
}

.collection-card__content .h2 {
    font-size: 2.5rem;
    font-weight: bold;
    margin: 0;
}

.icon.icon-circle-button-right-clipped {
    margin-bottom: 1rem;
    color: #fff;
}

@media (max-width: 991px) {
    .two-banners-container {
        flex-direction: column;
    }

    .collection-card {
        height: 400px;
    }
}


    </style>
<section class="two-banners-section">
    <div class="two-banners-container">
        @foreach (['banner_1', 'banner_2'] as $bannerKey)
            @php
                $banner = $twoColumnBanners[$bannerKey];
            @endphp

            <a href="{{ $banner->call_to_action_url }}"
               class="collection-card"
               target="{{ $banner->open_in_new_window ? '_blank' : '_self' }}">
                <div class="content-over-media">
                    <img
                        src="{{ asset($banner->image->path) }}"
                        alt="{{ $banner->image->alt ?? 'Banner' }}"
                        class="banner-image"
                        loading="lazy"
                    >
                    <div class="collection-card__content-wrapper">
                        <svg role="presentation" focusable="false" width="40" height="40" class="icon icon-circle-button-right-clipped" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12ZM10.47 9.53 12.94 12l-2.47 2.47 1.06 1.06 3-3 .53-.53-.53-.53-3-3-1.06 1.06Z" fill="currentColor"></path>
                        </svg>
                        <div class="collection-card__content prose">
                            <p class="subheading">{{ $banner->subtitle ?? '' }}</p>
                            <p class="h2">{{ $banner->title ?? '' }}</p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</section>
