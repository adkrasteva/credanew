
<style>
    .wishlist-wrapper {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
}

.wishlist-title {
    color: #e63946; /* красив червен нюанс */
    font-size: 16px;
    margin: 0;
    font-weight: 600;
}

.wishlist-icon svg {
    transition: transform 0.3s ease, stroke 0.3s ease;
}

.wishlist-icon svg:hover {
    transform: scale(1.2);
    stroke: #e63946;
}
    </style>
<div class="product-details-info position-relative flex-grow-1"> 
    <div class="details-info-top">
        <h1 class="product-name">{{ $product->name }}</h1>

        @if (setting('reviews_enabled'))
            @include('storefront::public.partials.product_rating')
        @endif

        <template x-cloak x-if="isInStock">
            <div>
                <!-- <template x-if="doesManageStock">
                    <div
                        class="availability in-stock"
                        x-text="trans('storefront::product.left_in_stock', { count: item.qty })"
                    >
                    </div>
                </template> -->
                
                <!-- <template x-if="!doesManageStock">
                    <div class="availability in-stock">
                        {{ trans('storefront::product.in_stock') }}
                    </div>
                </template> -->
            </div>
        </template>
        
        <template x-if="!isInStock">
            <div class="availability out-of-stock">
                {{ trans('storefront::product.out_of_stock') }}
            </div>
        </template>

        <div class="brief-description">
            {!! $product->short_description !!}
        </div>

        <div class="details-info-top-actions">
            <button
                class="btn btn-wishlist"
                :class="{ 'added': inWishlist }"
                @click="syncWishlist"
            >
                <template x-if="inWishlist">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M16.44 3.1001C14.63 3.1001 13.01 3.9801 12 5.3301C10.99 3.9801 9.37 3.1001 7.56 3.1001C4.49 3.1001 2 5.6001 2 8.6901C2 9.8801 2.19 10.9801 2.52 12.0001C4.1 17.0001 8.97 19.9901 11.38 20.8101C11.72 20.9301 12.28 20.9301 12.62 20.8101C15.03 19.9901 19.9 17.0001 21.48 12.0001C21.81 10.9801 22 9.8801 22 8.6901C22 5.6001 19.51 3.1001 16.44 3.1001Z" fill="#292D32"/>
                    </svg>
                </template>
                <div class="wishlist-wrapper">
                    <h5 class="wishlist-title">Добави в любими</h5>

                    <template x-if="!inWishlist">
                        <div class="wishlist-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12.62 20.81C12.28 20.93 11.72 20.93 11.38 20.81C8.48 19.82 2 15.69 2 8.68998C2 5.59998 4.49 3.09998 7.56 3.09998C9.38 3.09998 10.99 3.97998 12 5.33998C13.01 3.97998 14.63 3.09998 16.44 3.09998C19.51 3.09998 22 5.59998 22 8.68998C22 15.69 15.52 19.82 12.62 20.81Z" 
                                    stroke="#292D32" 
                                    stroke-width="1.5" 
                                    stroke-linecap="round" 
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </template>
                </div>

                {{ trans('storefront::product.wishlist') }}
            </button>

            <!-- <button
                class="btn btn-compare"
                :class="{ 'added': inCompareList }"
                @click="syncCompareList"
            >
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M3.58008 5.15991H17.4201C19.0801 5.15991 20.4201 6.49991 20.4201 8.15991V11.4799" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6.74008 2L3.58008 5.15997L6.74008 8.32001" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M20.4201 18.84H6.58008C4.92008 18.84 3.58008 17.5 3.58008 15.84V12.52" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17.26 21.9999L20.42 18.84L17.26 15.6799" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                
                {{ trans('storefront::product.compare') }}
            </button> -->
        </div>
    </div>

    {{-- Цвят и Колекции --}}
    @if ($product->hasAnyAttribute())
        @foreach ($product->attributeSets as $attributeSet => $attributes)
            @if($attributes[0]->attribute->id == 56)
                @foreach ($attributes as $attribute)
                    <div class="specification-row mt-3">
                        @php
                            $data = [
                                'cherven' => 'червен',
                                'zelen' => 'зелен',
                                'sin' => 'син',
                                'cheren' => 'черен',
                                'bql' => 'бял',
                                'jult' => 'жълт',
                                'oranjev' => 'оранжев',
                                'rozov' => 'розов',
                                'ciklama' => 'циклама',
                                'bejov' => 'бежов',
                                'nude' => 'нюд',
                                'lilav' => 'лилав',
                                'zlaten' => 'златен',
                                'sreburen' => 'сребърен',
                                'mnogocveten' => 'многоцветен',
                                'praskova' => 'праскова',
                                'siv' => 'сив',
                                'limegreen' => 'лайм',
                                'bordeaux' => 'бордо'
                            ];
                        @endphp
                        <ul class="list-inline additional-info">
                            @foreach ($attribute->values as $value)
                                <li>
                                    <span>Цвят:
                                        <a href="{{ url('/products?attribute[cvetove][0]=' . $value->value) }}"
                                        style="color: var(--color-primary); font-size: 17px;">
                                            &nbsp;{{ $data[$value->value] ?? $value->value }}
                                        </a>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            @endif
        @endforeach

        @foreach ($product->attributeSets as $attributeSet => $attributes)
            @if($attributes[0]->attribute->id == 57)
                @foreach ($attributes as $attribute)
                    <div class="specification-row mt-3">
                        @php
                            $data = [
                                'denim' => 'Denim',
                                'flowers' => 'Flowers',
                                'boho' => 'Boho',
                                'pearls' => 'Pearls',
                                'christmas' => 'Коледа',
                                'disko' => 'Диско',
                                'leather' => 'Кожа'
                            ];
                        @endphp
                        <ul class="list-inline additional-info">
                            @foreach ($attribute->values as $value)
                                <li>
                                    <span>Колекция:
                                        <a href="{{ url('/products?attribute[kolekciq][0]=' . $value->value) }}"
                                        style="color: var(--color-primary); font-size: 17px;">
                                            &nbsp;{{ $data[$value->value] ?? $value->value }}
                                        </a>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            @endif
        @endforeach
    @endif

    <div class="details-info-middle">
        @if ($product->variant)
            <template x-if="isActiveItem">
                <div class="product-price">
                    <template x-if="hasSpecialPrice">
                        <span class="special-price" x-text="formatCurrency(specialPrice)"></span>
                    </template>

                    <span class="previous-price" x-text="formatCurrency(regularPrice)">
                        {!! $item->is_active ? $item->hasSpecialPrice() ? $item->special_price->format() : $item->price->format() : '' !!}
                    </span>
                </div>
            </template>
        @else
            <div class="product-price">
                <template x-if="hasSpecialPrice">
                    <span class="special-price" x-text="formatCurrency(specialPrice)"></span>
                </template>

                <span class="previous-price" x-text="formatCurrency(regularPrice)">
                    {{ $item->hasSpecialPrice() ? $item->special_price->format() : $item->price->format() }}
                </span>
            </div>
        @endif

        <form
            @input="errors.clear($event.target.name)"
            @submit.prevent="addToCart"
        >
            @if ($product->variant)
                <div class="product-variants">
                    @include('storefront::public.products.show.variations')
                </div>
            @endif
            
            @if ($product->options->isNotEmpty())
                <div class="product-variants">
                    @foreach ($product->options as $option)
                        @includeIf("storefront::public.products.show.custom_options.{$option->type}")
                    @endforeach
                </div>
            @endif

            <div class="details-info-middle-actions">
                <div class="number-picker-lg">
                    <label for="qty">{{ trans('storefront::product.quantity') }}</label>

                    <div class="input-group-quantity">
                        <input
                            x-ref="inputQuantity"
                            type="text"
                            :value="cartItemForm.qty"
                            min="1"
                            :max="maxQuantity"
                            id="qty"
                            class="form-control input-number input-quantity"
                            :disabled="isAddToCartDisabled"
                            @focus="$event.target.select()"
                            @input="updateQuantity(Number($event.target.value))"
                            @keydown.up="updateQuantity(cartItemForm.qty + 1)"
                            @keydown.down="updateQuantity(cartItemForm.qty - 1)"
                        >

                        <span class="btn-wrapper">
                            <button
                                type="button"
                                aria-label="quantity"
                                class="btn btn-number btn-plus"
                                :disabled="isQtyIncreaseDisabled"
                                @click="updateQuantity(cartItemForm.qty + 1)"
                            >
                                +
                            </button>

                            <button
                                type="button"
                                aria-label="quantity"
                                class="btn btn-number btn-minus"
                                :disabled="isQtyDecreaseDisabled"
                                @click="updateQuantity(cartItemForm.qty - 1)"
                            >
                                -
                            </button>
                        </span>
                    </div>
                </div>

                <button
                    type="submit"
                    class="btn btn-primary btn-add-to-cart"
                    :class="{'btn-loading': addingToCart }"
                    :disabled="isAddToCartDisabled"
                    x-text="isActiveItem ? '{{ trans('storefront::product.add_to_cart') }}' : '{{ trans('storefront::product.unavailable') }}'"
                >
                    {{ trans($item->is_active ? 'storefront::product.add_to_cart' : 'storefront::product.unavailable') }}
                </button>
                
                <!-- <button
                    type="button"
                    class="btn btn-primary btn-add-to-wishlist"
                    @click="toggleWishlist"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" style="margin-right: 6px;">
                        <path d="M12.62 20.81C12.28 20.93 11.72 20.93 11.38 20.81C8.48 19.82 2 15.69 2 8.68998C2 5.59998 4.49 3.09998 7.56 3.09998C9.38 3.09998 10.99 3.97998 12 5.33998C13.01 3.97998 14.63 3.09998 16.44 3.09998C19.51 3.09998 22 5.59998 22 8.68998C22 15.69 15.52 19.82 12.62 20.81Z"
                            stroke="#ffffff"
                            stroke-width="1.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    Добави в любими
                </button> -->
            </div>
        </form>
    </div>

    <div class="details-info-bottom">
        <ul class="list-inline additional-info">
            <template x-cloak x-if="item.sku">
                <li class="sku">
                    <label>{{ trans('storefront::product.sku') }}</label>
                    
                    <span x-text="item.sku">{{ $item->sku }}</span>
                </li>
            </template>

            @if ($product->categories->isNotEmpty())
                <li>
                    <label>{{ trans('storefront::product.categories') }}</label>

                    @foreach ($product->categories as $category)
                        <a href="{{ $category->url() }}">{{ $category->name }}</a>{{ $loop->last ? '' : ',' }}
                    @endforeach
                </li>
            @endif

            @if ($product->tags->isNotEmpty())
                <li>
                    <label>{{ trans('storefront::product.tags') }}</label>

                    @foreach ($product->tags as $tag)
                        <a href="{{ $tag->url() }}">{{ $tag->name }}</a>{{ $loop->last ? '' : ',' }}
                    @endforeach
                </li>
            @endif
        </ul>

        @include('storefront::public.products.show.social_share')
    </div>
</div>
