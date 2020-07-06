{{--Form Inputs--}}
    @if(isset($tag))
        <x-text :name="'title'" :locale="$locale" :oldValue="$tag->translate($locale) ? $tag->translate($locale)->title : ''"></x-text>
        @if($locale == 'en')
            <x-text :name="'slug'" :locale="''" :oldValue="$tag->slug ?? ''"></x-text>
        @endif
        @method('PUT')
    @else
        <x-text :name="'title'" :locale="$locale"></x-text>
        @if($locale == 'en')
            <x-text :name="'slug'" :locale="''"></x-text>
        @endif
    @endif
{{--End Form Inputs--}}
