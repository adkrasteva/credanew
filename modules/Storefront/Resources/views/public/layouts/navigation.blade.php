<section class="navigation-wrap" style="background-color:black; position: sticky; top: 0; z-index: 1100;">
    <style>
        .navigation-wrap .header-column-right .icon-wrap > svg circle,
        .navigation-wrap .header-column-right .icon-wrap > svg path {
            stroke: #ffffff !important;
            stroke-width: 2.2px !important;
        }

        /* Кошницата да покрива бутоните в навигацията */
        .sidebar-cart-wrap {
            z-index: 1200 !important;
        }
    </style>
    <div class="container">
        <div class="navigation-inner d-flex justify-content-between align-items-center">
            <!-- Ляво: основно меню -->
            <div class="navigation-left d-flex align-items-center">
                <!-- @include('storefront::public.layouts.navigation.category_menu') -->
                @include('storefront::public.layouts.navigation.primary_menu')
            </div>

            <!-- Дясно: икони -->
            <div x-data class="header-column-right d-flex" style="position: relative; z-index: 999;">
                <a href="javascript:void(0)" class="header-column-right-item header-search-trigger" @click="$dispatch('open-global-search')">
                    <div class="icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22 22L20 20" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </a>
                <a href="{{ route('compare.index') }}" class="header-column-right-item header-compare">
                    <div class="icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M3.58008 5.15991H17.4201C19.0801 5.15991 20.4201 6.49991 20.4201 8.15991V11.4799" stroke="#ffffff" stroke-width="2.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.74008 2L3.58008 5.15997L6.74008 8.32001" stroke="#ffffff" stroke-width="2.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.4201 18.84H6.58008C4.92008 18.84 3.58008 17.5 3.58008 15.84V12.52" stroke="#ffffff" stroke-width="2.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.26 21.9999L20.42 18.84L17.26 15.6799" stroke="#ffffff" stroke-width="2.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="count" x-text="$store.state.compareCount">{{ count($compareList) }}</div>
                    </div>
                </a>

                <a href="{{ route('account.wishlist.index') }}" class="header-column-right-item header-wishlist">
                    <div class="icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12.62 20.81C12.28 20.93 11.72 20.93 11.38 20.81C8.48 19.82 2 15.69 2 8.68998C2 5.59998 4.49 3.09998 7.56 3.09998C9.38 3.09998 10.99 3.97998 12 5.33998C13.01 3.97998 14.63 3.09998 16.44 3.09998C19.51 3.09998 22 5.59998 22 8.68998C22 15.69 15.52 19.82 12.62 20.81Z" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="count" x-text="$store.state.wishlistCount">{{ count($wishlist) }}</div>
                    </div>
                </a>

                <a
                    href="{{ route('cart.index') }}"
                    class="header-column-right-item header-cart"
                    @click="$store.layout.openSidebarCart($event)"
                >
                    <div class="icon-wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M7.5 7.67001V6.70001C7.5 4.45001 9.31 2.24001 11.56 2.03001C14.24 1.77001 16.5 3.88001 16.5 6.51001V7.89001" stroke="#ffffff" stroke-width="2.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.00001 22H15C19.02 22 19.74 20.39 19.95 18.43L20.7 12.43C20.97 9.99 20.27 8 16 8H8.00001C3.73001 8 3.03001 9.99 3.30001 12.43L4.05001 18.43C4.26001 20.39 4.98001 22 9.00001 22Z" stroke="#ffffff" stroke-width="2.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="count" x-text="$store.state.cartQuantity">
                            {{ $cart->toArray()['quantity'] }}
                        </div>
                    </div>
                </a>

                @auth
                    <a href="{{ route('account.dashboard.index') }}" class="header-column-right-item header-account">
                        <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23859 2 7 4.23858 7 7C7 9.76142 9.23859 12 12 12Z" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.58997 20.59C4.53026 17.8584 7.05917 16 10 16H14C16.9408 16 19.4697 17.8584 20.41 20.59C20.5649 21.0416 20.2602 21.5 19.78 21.5H4.21997C3.73976 21.5 3.43507 21.0416 3.58997 20.59Z" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="header-column-right-item header-account">
                        <div class="icon-wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23859 2 7 4.23858 7 7C7 9.76142 9.23859 12 12 12Z" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.58997 20.59C4.53026 17.8584 7.05917 16 10 16H14C16.9408 16 19.4697 17.8584 20.41 20.59C20.5649 21.0416 20.2602 21.5 19.78 21.5H4.21997C3.73976 21.5 3.43507 21.0416 3.58997 20.59Z" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </a>
                @endauth
            </div>
        </div>
    </div>
</section>

@include('storefront::public.layouts.header.header_search')

<!-- @include('storefront::public.layouts.navigation.bottom_navigation_menu') -->
