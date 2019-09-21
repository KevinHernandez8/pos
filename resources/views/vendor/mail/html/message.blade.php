@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <a class="navbar-brand" href="{{ route('home') }}" title="{{ config('app.name') }}" style="max-width: 30%;">
                <img src="{{ asset('argon') }}/img/brand/blue.png" />
            </a>
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('Todos los derechos reservados.')
        @endcomponent
    @endslot
@endcomponent
