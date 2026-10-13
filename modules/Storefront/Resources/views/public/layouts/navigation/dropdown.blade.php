@if ($subMenus->isNotEmpty())
    <ul class="list-inline sub-menu">
        @foreach ($subMenus as $subMenu)
            <li class="{{ $subMenu->hasItems() ? 'dropdown' : '' }}" style="    font-family: Roboto Flex, sans-serif !important;
    font-weight: 500;
    letter-spacing: 2px;
    font-size: 15px;">
                <a href="{{ $subMenu->url() }}" target="{{ $subMenu->target() }}" title="{{ $subMenu->name() }}">
                    {{ $subMenu->name() }}
                    @if ($subMenu->hasItems())
                        <i class="las la-angle-right"></i>
                    @endif
                </a>

                @if ($subMenu->hasItems())
                    @include('storefront::public.layouts.navigation.dropdown', ['subMenus' => $subMenu->items()])
                @endif
            </li>
        @endforeach
    </ul>
@endif
