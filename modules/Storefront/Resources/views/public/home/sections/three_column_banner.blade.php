<style>
    .collection-card {
    position: relative;
    display: block;
    overflow: hidden;
    border-radius: 8px;
    transition: transform 0.3s ease;
    color: inherit;
}

.collection-card:hover {
    transform: scale(1.02);
}

.content-over-media {
    position: relative;
    width: 100%;
    height: 100%;
}

.zoom-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.collection-card:hover .zoom-image {
    transform: scale(1.05);
}

.collection-card__content-wrapper {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    z-index: 2;
    text-align: center;
    max-width: 80%;
}

.collection-card__content .h6 {
    font-size: 1.2rem;
    font-weight: bold;
    margin: 0 0 0.5rem 0;
}

.icon.icon-circle-button-right-clipped {
    color: #fff;
}

/* Responsive */
@media (max-width: 992px) {
    .collection-list a {
        flex: 0 1 100%;
        max-width: 100%;
    }
}

</style>
<section class="section section-blends section-full" style="margin-top:5%;">
    <div class="section-stack">
        <div class="floating-controls-container">
            <div class="scroll-area bleed">
                <div class="collection-list d-flex flex-wrap justify-content-center gap-4">
                    @foreach (['banner_1', 'banner_2', 'banner_3'] as $bannerKey)
                        @php
                            $banner = $threeColumnBanners[$bannerKey];
                        @endphp

                        <a href="{{ $banner->call_to_action_url }}"
                           class="collection-card shadow"
                           target="{{ $banner->open_in_new_window ? '_blank' : '_self' }}"
                           style="flex: 0 1 calc(33.333% - 1.5rem); max-width: calc(33.333% - 1.5rem); text-decoration: none;">
                            <div class="content-over-media group rounded-sm" style="--content-over-media-overlay: 0 0 0 / 0.0;">
                                <img
                                    src="{{ asset($banner->image->path) }}"
                                    alt="{{ $banner->image->alt ?? 'Banner' }}"
                                    class="zoom-image w-100"
                                    loading="lazy"
                                    style="aspect-ratio: 4/5; object-fit: cover;"
                                >
                                <div class="collection-card__content-wrapper text-custom place-self-center text-center p-3" style="--text-color: 255 255 255; opacity: 1;">
                                    <div class="collection-card__content prose">
                                        <p class="h6">{{ $banner->title ?? '' }}</p>
                                    </div>
                                    <svg role="presentation" focusable="false" width="40" height="40" class="icon icon-circle-button-right-clipped" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24c6.627 0 12-5.373 12-12S18.627 0 12 0 0 5.373 0 12s5.373 12 12 12ZM10.47 9.53 12.94 12l-2.47 2.47 1.06 1.06 3-3 .53-.53-.53-.53-3-3-1.06 1.06Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
