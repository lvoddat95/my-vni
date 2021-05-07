<ul class="nav nav-group-sub" scrollbar data-submenu-title="{{ $item->name }}">
    @foreach ($item->menuChildren as $item_child)
        <li class="nav-item {{ $item_child->menuChildren->count() > 0 ? 'nav-item-submenu' : '' }}">
            <a href="" class="nav-link">
                <span class="menu-title">{{ $item_child->name }}</span>
            </a>
            @if ($item_child->menuChildren->count())
                @include('frontend.layouts.partials.child-menu', ['item'=> $item_child])
            @endif
        </li>
    @endforeach
</ul>