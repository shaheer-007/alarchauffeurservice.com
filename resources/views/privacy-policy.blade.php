@extends('main')
@section('meta_title', 'Privacy Policy | Alar Chauffeur Service')
@section('meta_description', 'Privacy Policy for Alar Chauffeur Service. Learn how we collect, use, and protect your personal information and our SMS terms of service.')
@section('content')
<style>
    .ve-privacy-content a {
        color: var(--ve-gold);
        font-weight: 600;
        text-decoration: none;
        transition: var(--ve-trans);
    }
    .ve-privacy-content a:hover {
        text-decoration: underline;
    }
    
    
</style>

<!-- ===== PAGE HERO ===== -->
<section class="ve-page-hero" style="background-image:url({{ asset('assets/img/banner/about-us.webp') }});">
    <div class="ve-page-hero-overlay"></div>
    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Trust & Security</span>
        <h1>Privacy <span>Policy</span></h1>
        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Privacy Policy</li>
            </ol>
        </nav>
    </div>
</section>

<!-- ===== PRIVACY CONTENT ===== -->
<section class="ve-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="ve-privacy-content" style="color: var(--ve-dark); line-height: 1.8;">
                    <h2 class="mb-4">Privacy <span>Policy</span></h2>
                    <p>At Alar Chauffeur Service, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy outlines how we collect, use, and safeguard the data you provide to us through our website and services.</p>

                    <h4 class="mt-5 mb-3">1. Information We Collect</h4>
                    <p>We may collect the following types of personal information when you use our website or book our services:</p>
                    <ul>
                        <li><strong>Contact Information:</strong> Name, email address, phone number, and physical address.</li>
                        <li><strong>Booking Details:</strong> Pickup and drop-off locations, dates, times, vehicle preferences, and special requests.</li>
                        <li><strong>Payment Information:</strong> Credit card details and billing address (processed securely via our payment partners).</li>
                        <li><strong>Usage Data:</strong> Information about how you interact with our website, including IP address, browser type, and pages visited.</li>
                    </ul>

                    <h4 class="mt-5 mb-3">2. How We Use Your Information</h4>
                    <p>We use the collected information for the following purposes:</p>
                    <ul>
                        <li>To process and manage your bookings and provide chauffeur services.</li>
                        <li>To communicate with you regarding your reservations, updates, and support.</li>
                        <li>To process payments and prevent fraudulent transactions.</li>
                        <li>To improve our website, services, and customer experience.</li>
                        <li>To send promotional offers or newsletters, provided you have opted in to receive them.</li>
                    </ul>

                    <h4 class="mt-5 mb-3">3. SMS Terms & Conditions</h4>
                    <p>If you consent to receive conversational, informational, and promotional SMS from Alar Chauffeur Service, you agree to receive SMS from us. The following terms apply:</p>
                    <ul>
                        <li><strong>Types of Messages:</strong> You may receive conversational, informational, or promotional SMS regarding your bookings, service updates, or special offers.</li>
                        <li><strong>Opt-in:</strong> By providing your phone number and checking the consent box on our forms, you agree to receive SMS from us.</li>
                        <li><strong>Opt-out:</strong> You can cancel the SMS service at any time. Just text "STOP" to our number. After you send the SMS message "STOP" to us, we will send you an SMS message to confirm that you have been unsubscribed. After this, you will no longer receive SMS messages from us.</li>
                        <li><strong>Support:</strong> If you are experiencing issues with the messaging program you can reply with the keyword "HELP" for more assistance, or you can get help directly at <a href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a>.</li>
                        <li><strong>Disclosures:</strong> Carriers are not liable for delayed or undelivered messages. Message and data rates may apply for any messages sent to you from us and to us from you. Message frequency may vary.</li>
                    </ul>

                    <h4 class="mt-5 mb-3">4. Information Sharing & Disclosure</h4>
                    <p>We do not sell, trade, or otherwise transfer your personal information to outside parties except as described below:</p>
                    <ul>
                        <li><strong>Service Providers:</strong> We may share data with trusted third-party partners who assist us in operating our website and conducting our business, so long as those parties agree to keep this information confidential.</li>
                        <li><strong>Legal Requirements:</strong> We may release information when its release is appropriate to comply with the law, enforce our site policies, or protect ours or others' rights, property, or safety.</li>
                        <li><strong>SMS Opt-in Privacy:</strong> <span style="background-color: #fff9e6; padding: 2px 5px; border-radius: 4px; font-weight: 600;">No mobile opt-in or text message consent will be shared with third parties or affiliates.</span></li>
                    </ul>

                    <h4 class="mt-5 mb-3">5. Data Security</h4>
                    <p>We implement a variety of security measures to maintain the safety of your personal information. Your personal data is contained behind secured networks and is only accessible by a limited number of persons who have special access rights to such systems.</p>

                    <h4 class="mt-5 mb-3">6. Changes to This Policy</h4>
                    <p>Alar Chauffeur Service reserves the right to update this Privacy Policy at any time. We will notify you of any changes by posting the new policy on this page.</p>

                    <h4 class="mt-5 mb-3">7. Contact Us</h4>
                    <p>If you have any questions regarding this Privacy Policy, you may contact us using the information below:</p>
                    <p>
                        <strong>Alar Chauffeur Service</strong><br>
                        Email: <a href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a><br>
                        Phone: {{ config('contact.phone_display') }}<br>
                        Address: {{ config('contact.location') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.cta')

@endsection
