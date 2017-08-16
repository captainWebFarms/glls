<ul class="dropdown menu" data-dropdown-menu style="position: absolute; z-index: 3; right:0;">
    <li class="has-submenu">
        {{--<img src="{{assert('menu.png')}}"/>--}}
        <a href="#"><img src="{{ asset('menu.png') }}" style="width:70px;height:60px;"/></a>
        <ul class="submenu menu vertical menu_items" data-submenu>
            {{--{{ $menu }}--}}

            @foreach($items as $item)
                <li><a class="menu_Items"  href="{{$item->url}}">{{$item->title}}</a></li>
            @endforeach
        </ul>
    </li>
</ul>
