@extends('main')
@section('meta_title', 'Book Online | Alar Chauffeur Service')
@section('meta_description', 'Reserve your luxury chauffeur service online with Alar Chauffeur Service for airport transportation, executive travel, weddings, group transportation, and more.')
@section('content')
    <!-- ===== PAGE HERO ===== -->
    <section class="ve-page-hero" style="background-image:url({{ asset('assets/img/banner/book-online.webp') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Easy Booking</span>
            <h1>Book Your <span>Ride</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Book Online</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ===== BOOKING FORM ===== -->
    <section class="ve-section ve-booking-section">
        <div class="container">
            <!-- Full Width Iframe Row -->
            <div class="row mb-50">
                <div class="col-12">
                    <div class="ve-booking-sms-optin mb-4 p-4" style="background: #fff; border-radius: 12px; border: 1px solid var(--ve-border);">
                        <h5 style="margin-bottom: 12px; font-size: 16px;">SMS/Text Message Opt-In</h5>
                        <label class="ve-sms-consent-label" style="display: flex; align-items: flex-start; gap: 12px; cursor: pointer; font-weight: 400; color: var(--ve-text); font-size: 14px; line-height: 1.6; margin-bottom: 0;">
                            <input type="checkbox" id="booking-sms-consent" name="booking_sms_consent" value="1" required
                                style="width: 18px; height: 18px; margin-top: 2px; flex-shrink: 0; cursor: pointer; border: 1px solid var(--ve-border); border-radius: 4px;">
                            @include('components.sms-consent-label')
                        </label>
                        <p style="font-size: 12px; color: var(--ve-text); margin: 12px 0 0; opacity: 0.85;">
                            Check this box before completing your booking below. You may also opt in on our
                            <a href="{{ route('contact-us') }}" style="color: var(--ve-gold); font-weight: 600;">contact page</a>.
                        </p>
                    </div>
                    <div class="ve-booking-iframe-wrap"
                        style="background: #fff; border-radius: 20px; overflow: hidden; box-shadow: 0 30px 60px rgba(0,0,0,0.12); border: 1px solid rgba(0,0,0,0.05);">
                        <iframe name="oresframe" marginwidth="0" marginheight="0" height="1200" width="100%"
                            scrolling="yes" border="0" frameborder="0" src="https://book.mylimobiz.com/v4/alarchauffeur"
                            style="display: block; width: 100%;">
                            Your browser does not support inline frames.
                        </iframe>
                    </div>
                    <div class="mt-4 p-4" style="background: rgba(0,0,0,0.03); border-radius: 12px; border-left: 4px solid var(--ve-gold);">
                        <p style="font-size: 13px; color: var(--ve-text); margin-bottom: 0; line-height: 1.5;">
                            <strong>SMS Reminder:</strong> Message frequency varies. Message and data rates may apply.
                            Text STOP to opt out. Text HELP for help. Consent is not a condition of purchase.
                            No mobile opt-in data will be shared with third parties for marketing.
                            <a href="{{ route('privacy-policy') }}" target="_blank" rel="noopener noreferrer" style="color: var(--ve-gold); font-weight: 600; text-decoration: underline;">Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Enhanced Info Section Below Iframe -->
            <div class="row align-items-stretch">
                <!-- Why Us List (Left) -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="ve-booking-why h-100" style="margin-top: 0; padding: 40px; background: var(--ve-dark);">
                        <h5 class="ve-booking-why-title"
                            style="color: #fff; border-bottom: 1px solid rgba(255,255,255,0.1); margin-bottom: 25px; font-size: 20px;">
                            Why Book With Us?</h5>
                        <ul class="ve-booking-why-list">
                            <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span
                                    style="color: rgba(255,255,255,0.85); font-weight: 500;">Professional, licensed
                                    chauffeurs</span></li>
                            <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span
                                    style="color: rgba(255,255,255,0.85); font-weight: 500;">Luxury, well-maintained
                                    fleet</span></li>
                            <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span
                                    style="color: rgba(255,255,255,0.85); font-weight: 500;">Transparent, fixed
                                    pricing</span></li>
                            <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span
                                    style="color: rgba(255,255,255,0.85); font-weight: 500;">Flight tracking
                                    included</span></li>
                            <li><i class="fa fa-check-circle" style="color: var(--ve-gold);"></i> <span
                                    style="color: rgba(255,255,255,0.85); font-weight: 500;">24/7 Dispatch &
                                    Support</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Info Cards (Right) -->
                <div class="col-lg-7">
                    <div class="row h-100">
                        <div class="col-md-12 mb-4">
                            <div class="ve-booking-info-card h-100"
                                style="background: var(--ve-dark); border-color: rgba(255,255,255,0.1); padding: 30px; margin-bottom: 0;">
                                <div class="ve-binfo-icon" style="background: rgba(173, 139, 36, 0.2);"><i
                                        class="fa fa-phone"></i></div>
                                <div style="min-width: 0;">
                                    <h5 style="color: rgba(255,255,255,0.6); font-size: 13px; text-transform: uppercase;">
                                        Call Us Directly</h5>
                                    <a href="tel:{{ config('contact.phone_tel') }}"
                                        style="color: #fff; font-size: 24px; font-weight: 700; display: block;">{{ config('contact.phone_display') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ve-booking-info-card h-100"
                                style="background: var(--ve-dark); border-color: rgba(255,255,255,0.1); padding: 30px; margin-bottom: 0;">
                                <div class="ve-binfo-icon" style="background: rgba(173, 139, 36, 0.2);"><i
                                        class="fa fa-envelope"></i></div>
                                <div style="min-width: 0;">
                                    <h5 style="color: rgba(255,255,255,0.6); font-size: 13px; text-transform: uppercase;">
                                        Email Support</h5>
                                    <a href="mailto:{{ config('contact.email') }}"
                                        style="color: #fff; font-size: 18px; font-weight: 600; display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"
                                        title="{{ config('contact.email') }}">{{ config('contact.email') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')
@endsection
