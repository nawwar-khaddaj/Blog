{{--Form Inputs--}}
    @if(isset($article))
        <x-text :name="'title'" :locale="$locale" :oldValue="$article->translate($locale) ? $article->translate($locale)->title : ''"></x-text>
        @if($locale == 'en')
            <x-text :name="'slug'" :locale="''" :oldValue="$article->slug ?? ''"></x-text>
            <x-select :multiple="true" :options="$tags" :name="'tags[]'" :selected="$article->tags()->pluck('tags.id')"></x-select>
            <x-checkbox :choices="[ newStd(['name' => 'checked', 'value' => '1']) ]"  :name="'is_published'" :locale="$locale" :required="false" :oldValue="$article->is_published ? $article->is_published : ''"></x-checkbox>
            <x-image-dropify :name="'images'" :locale="$locale" :oldValue="$article->images[0]" :required="false"></x-image-dropify>
        @endif
        <x-rich_text_box :name="'body'" :required="false" :locale="$locale" :oldValue="$article->translate($locale) ? $article->translate($locale)->body : ''"></x-rich_text_box>
        @method('PUT')
    @else
        <x-text :name="'title'" :locale="$locale"></x-text>
        @if($locale == 'en')
            <x-text :name="'slug'" :locale="''"></x-text>
            <x-select :multiple="true" :options="$tags" :name="'tags[]'"></x-select>
            <x-checkbox :choices="[ newStd(['name' => 'checked', 'value' => '1']) ]"  :name="'is_published'" :locale="$locale" :required="false" :oldValue="''"></x-checkbox>
            <x-image-dropify :name="'images'" :locale="$locale" :required="true"></x-image-dropify>
        @endif
        <x-rich_text_box :name="'body'" :required="false" :locale="$locale"></x-rich_text_box>
    @endif
{{--End Form Inputs--}}
