<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hidden-sm " href="{{ route('home') }}"><img src="{{ asset('/images/logo32.png') }}" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ route('home') }}">{{ trans('messages.menu_home') }}</a></li>
                <li><a href="{{ route('products') }}">{{ trans('messages.menu_products') }}</a></li>
                <li><a href="{{ route('shops') }}">{{ trans('messages.menu_shops') }}</a></li>
                <li><a href="{{ route('museum') }}">{{ trans('messages.menu_museum') }}</a></li>
                <li><a href="{{ route('easter') }}">{{ trans('messages.menu_easter') }}</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form action="{{ route('order') }}">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-shopping-cart"></i> {{ trans('messages.menu_cart') }}
                        </button>
                    </form>
                </li>
                <li><a target="_blank" href="https://www.facebook.com/ChocolatierDefroidmont/"><i class="fa fa-facebook-official"></i> </a></li>
                <li><a href="#" style="pointer-events: none; cursor: default; "><strong> <i class="icon-phone"></i> 086 21 84 40</strong></a></li>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li><a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}"><img src="{{ asset('/images/flags/'.$localeCode.'.png') }}" alt="{{ $localeCode }}"></a></li>
                @endforeach
            </ul>
        </div>
    </div>
</header>