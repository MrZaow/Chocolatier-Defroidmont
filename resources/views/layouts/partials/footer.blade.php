<section id="bottom" class="wet-asphalt">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <h4>Chocolaterie Defroidmont</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="{{ route('home') }}">{{ trans('messages.menu_home') }}</a></li>
                        <li><a href="{{ route('products') }}">{{ trans('messages.menu_products') }}</a></li>
                        <li><a href="{{ route('order') }}">{{ trans('messages.menu_order') }}</a></li>
                        <li><a href="{{ route('shops') }}">{{ trans('messages.menu_shops') }}</a></li>
                        <li><a href="{{ route('museum') }}">{{ trans('messages.menu_museum') }}</a></li>
                        <li><a href="{{ route('easter') }}">{{ trans('messages.menu_easter') }}</a></li>
                        <li><a href="{{ route('infos') }}">{{ trans('messages.menu_infos') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <h4>{{ trans('messages.address') }}</h4>
                <address>
                    <p>Chocolaterie Defroidmont</p>
                    <p>Briscol 19a, 6997 Érezée</p>
                </address>
            </div> <!--/.col-md-3-->
            <div class="col-md-3 col-sm-3">
                <h4>{{ trans('messages.contact') }}</h4>
                <address>
                    <p>{{ trans('messages.phone') }} : {{ trans('messages.phone_number_footer') }}</p>
                    <p>Mail : <a href="mailto:contact@chocolatier-defroidmont.be">contact@chocolatier-defroidmont.be</a></p>
                    <p>TVA : BE 0833.318.585 </p>
                </address>
            </div> <!--/.col-md-3-->

            <div class="col-md-3 col-sm-3">
                <h4>{{ trans('messages.social_network') }}</h4>
                <a target=_blank href="https://www.facebook.com/ChocolatierDefroidmont/?fref=ts"><p><i class="fa fa-facebook-official"></i> Facebook</p></a>
                <a target=_blank href="https://fr.tripadvisor.be/Attraction_Review-g1045391-d2332063-Reviews-Chocolaterie_Defroidmont-Erezee_Luxembourg_Province_The_Ardennes_Wallonia.html"><p><i class="fa fa-tripadvisor"></i> TripAdvisor</p></a>
            </div> <!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                {{ trans('messages.realised_by') }} : <a target="_blank" href="https://arpiro.com/" title="Conception de sites web">Arpiro</a>.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i> {{ trans('messages.go_top') }}</a></li><!--#gototop-->
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->