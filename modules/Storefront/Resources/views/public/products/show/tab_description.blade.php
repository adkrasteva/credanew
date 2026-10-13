<div id="description" class="tab-pane description custom-page-content active">
    <div
        x-ref="descriptionContent" 
        class="content"
        :class="{ 
            active: showDescriptionContent,
            'less-content': !showMore }
        "
    >
        {!! $product->description !!}
    </div>

    <button
        x-cloak
        type="button"
        class="btn btn-default btn-show-more"
        :class="{ 'show': showMore }"
        @click="toggleDescriptionContent"
        x-text="
            showDescriptionContent ?
            '{{ trans('storefront::product.show_less') }}' :
            '{{ trans('storefront::product.show_more') }}'
        "
    >
    </button>
</div>
<!-- <style>
    #product-details .accordion-button i {
        margin-left: 10px;
        transition: transform 0.2s ease;
    }

    #product-details .accordion-button.collapsed i {
        transform: rotate(0);
    }

    #product-details .accordion-button:not(.collapsed) i {
        transform: rotate(180deg);
    }
</style>

<div id="product-details" class="accordion" style="margin-top: 30px;">
    {{-- Описание --}}
    <div class="accordion-item">
        <h5 class="accordion-header" id="description-heading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#description-collapse" aria-expanded="false" aria-controls="description-collapse">
                Описание <i class="las la-angle-down"></i>
            </button>
        </h5>
        <div id="description-collapse" class="accordion-collapse collapse" aria-labelledby="description-heading">
            <div class="accordion-body">
                {!! $product->description !!}
            </div>
        </div>
    </div>

    {{-- Доставка --}}
    <div class="accordion-item">
        <h5 class="accordion-header" id="details-heading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#details-collapse" aria-expanded="false" aria-controls="details-collapse">
                Доставка <i class="las la-angle-down"></i>
            </button>
        </h5>
        <div id="details-collapse" class="accordion-collapse collapse" aria-labelledby="details-heading">
            <div class="accordion-body">
                <span>За ръчно изработените аксесоари срокът за изработка е 3 работни дни, а доставката се извършва според условията на избрания куриер 1-2 дни.</span>
            </div>
        </div>
    </div>
</div> -->
