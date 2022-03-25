<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-left nav-links">
                <a href="{{ route('actionMainContact') }}">{{ trans('site.contact') }}</a>
                <a href="{{ route('actionMainPrivacy') }}">{{ trans('site.privacy') }}</a>
                <a href="{{ route('actionMainAbout') }}">{{ trans('site.about_us') }}</a>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">
            <div class="footer-left">
                <a href="demo31.html">
                    <img src="assets/images/logo-white.png" class="logo-footer" alt="logo image" width="110" height="46">
                </a>
                <div class="social-icons">
                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                    <a href="#" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                </div>
            </div>
            <img src="assets/images/payments_long.png" alt="payment_image" width="180" height="28">
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container justify-content-bettween">
            <p>Crafted with ❤️ By <a href="#">Mito Chikhladze</a></p>
            <p>{{ trans('site.copyright') }}</p>
        </div>
    </div>
</footer>