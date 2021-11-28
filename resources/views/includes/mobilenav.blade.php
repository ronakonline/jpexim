<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="/" aria-label="logo image"><img
                    src="{{ asset('Frontend/assets/images/resources/mobilemenu_logo.png') }}" width="155"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            @if ($settings->email)
                <li>
                    <i class="icon-letter"></i>
                    <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                </li>
            @endif
            @if ($settings->phone_no)
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="tel:{{ $settings->phone_no }}">{{ $settings->phone_no }}</a>
                </li>
            @endif
            @if ($settings->phone_no1)
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="tel:{{ $settings->phone_no1 }}">{{ $settings->phone_no1 }}</a>
                </li>
            @endif
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                @if ($settings->facebook_url)
                    <a href="{{ $settings->facebook_url }}" target="_blank" class="fab fa-facebook-square"></a>
                @endif
                @if ($settings->instagram_url)
                    <a href="{{ $settings->instagram_url }}" target="_blank" class="fab fa-instagram"></a>
                @endif
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->
    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
