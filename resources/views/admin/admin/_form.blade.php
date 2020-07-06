{{--Form Inputs--}}
    @if(isset($admin))
        @if($locale == 'en')
            <x-text :name="'name'" :locale="$locale" :oldValue="$admin->name"></x-text>
            <x-text :name="'username'" :locale="$locale" :oldValue="$admin->username"></x-text>
            <x-email :name="'email'" :locale="$locale" :oldValue="$admin->email ?? ''"></x-email>
            <x-password :name="'password'" :locale="$locale"></x-password>
            <x-image :name="'avatar'" :locale="$locale" :oldValue="$admin->avatar"></x-image>
            @method('PUT')
        @endif
    @else
        @if($locale == 'en')
            <x-text :name="'name'" :locale="$locale"></x-text>
            <x-text :name="'username'" :locale="$locale"></x-text>
            <x-email :name="'email'" :locale="$locale"></x-email>
            <x-password :name="'password'" :locale="$locale"></x-password>
            <x-image :name="'avatar'" :locale="$locale"></x-image>
        @endif
    @endif
{{--End Form Inputs--}}
