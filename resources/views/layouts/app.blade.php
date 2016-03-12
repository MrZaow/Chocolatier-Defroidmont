<!DOCTYPE html>
<html lang="fr">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body>

@include('layouts.partials.mainheader')

@yield('content-header')

@yield('main-content')

@include('layouts.partials.footer')

@section('scripts')
    @include('layouts.partials.scripts')
@show

</body>
</html>