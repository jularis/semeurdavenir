@if(!isset($innerLoop))
<ul class="menu">
@else
<ul class="">
@endif

@php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

@endphp

@foreach ($items as $item)

    @php

        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $submenu = 'nav-item';
        $submenuToogle='nav-item-link';
        $submenuchildren=null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
            $linkAttributes =  'data-toggle="dropdown"';
            $caret = ''; 
            $submenu='';
            $submenuchildren = 'dropdown-menu';
            $submenuToogle='';
         
        }
        
        if(url($item->link()) == url()->current()){
                $listItemClass = 'active';
            }else{
                $listItemClass = '';
            }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }
         
    @endphp
    
    <li class="{{ $submenu }}">
        <a class="{{ $submenuToogle }} {{ $listItemClass }}" href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}" {!! $linkAttributes ?? '' !!}>
            {!! $icon !!}
           {{ $item->title }} {!! $caret !!}
        </a>
       
        @if(!$originalItem->children->isEmpty()) 
        <ul class="{{ $submenuchildren }}">
                @foreach($originalItem->children as $items)
                @php
 
                if (Voyager::translatable($items)) {
                    $items = $items->translate($options->locale);
                }
                @endphp
                    <li class="nav-item"><a class="nav-item-link" href="{{ url($items->link()) }}">{{$items->title}} </a> </li> 
                @endforeach
        </ul> 
        @endif
    </li>
@endforeach

</ul>
