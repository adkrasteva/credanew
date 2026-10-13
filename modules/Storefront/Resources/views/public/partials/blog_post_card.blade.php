<div class="blog-post-card">
    <div class="blog-post">
        <a
            href="{{ route('blog_posts.show', $blogPost->slug) }}"
            class="blog-post-featured-image overflow-hidden"
        >
            @if ($blogPost->featured_image->path)
                <img src="{{ $blogPost->featured_image->path }}" alt="Featured image" loading="lazy" />
            @else
                <div class="image-placeholder">
                    <img src="{{ asset('build/assets/image-placeholder.png') }}" alt="Featured image" loading="lazy" />
                </div>
            @endif
        </a>

        <div class="blog-post-body">
            <ul class="list-inline blog-post-meta">
                
                
            </ul>

            <h4 class="blog-post-title" >
                <a href="{{ route('blog_posts.show', $blogPost->slug) }}" style="white-space: normal !important;">
                    {{ $blogPost->title }}
                </a>
            </h4>

            <p class="blog-post-short-description">
                {{ $blogPost->short_description }}
            </p>

        </div>
    </div>
</div>