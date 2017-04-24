<!DOCTYPE html>
<html lang="fr">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

@section('scripts')
    @include('layouts.partials.scripts')
@show

<body>

@include('layouts.partials.mainheader')

<!-- @include('layouts.partials.promo')-->

@yield('content-header')

@yield('main-content')

@include('layouts.partials.footer')

</body>
</html>