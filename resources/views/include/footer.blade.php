<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-left nav-links font-neue">
                <a href="{{ route('actionMainContact') }}">{{ trans('site.contact') }}</a>
                <a href="{{ route('actionMainPrivacy') }}">{{ trans('site.privacy') }}</a>
                <a href="{{ route('actionMainAbout') }}">{{ trans('site.about_us') }}</a>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">
            <div class="footer-left">
                <a href="{{ route('actionMainIndex') }}">
                    <img src="{{ url('assets/images/logo-white.png') }}" class="logo-footer" style="padding-right: 0 !important;" alt="turbo pc" title="{{ $seo['title'] }}" width="180" height="46">
                </a>
                <div class="social-icons">
                    <a href="{{ $parametersArray['facebook'] }}" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                    <a href="{{ $parametersArray['instagram'] }}" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                </div>
            </div>
            <img src="{{ url('assets/images/payments_long.png') }}" alt="payment_image" title="შეიძინე ჩვენთან" width="180" height="28">
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container justify-content-bettween font-neue">
            <p>Crafted with ❤️ By <a href="#">Mito Chikhladze</a></p>
            <p>{{ trans('site.copyright') }}</p>
        </div>
    </div>
</footer>
