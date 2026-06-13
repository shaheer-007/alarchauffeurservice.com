@extends('main')
@section('meta_title', 'Limo Service In New Jersey | Alar Chauffeur Service')
@section('meta_description', 'Premium limo service in New Jersey by ALAR Chauffeur Service. Luxury SUVs, sedans, and
party buses for airport transfers, events, and group travel. ')

@push('schema')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@graph": [
        {
            "@@type": "LimousineBusiness",
            "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization",
            "name": "Alar Chauffeur Service",
            "url": "{{ rtrim(config('app.url'), '/') }}",
            "description": "Premium limousine and luxury chauffeur services in New Jersey, New York, and select U.S. markets. Airport transfers, corporate travel, weddings, events, and group transportation.",
            "image": "{{ asset('assets/img/logo/logo.png') }}",
            "logo": "{{ asset('assets/img/logo/logo.png') }}",
            "telephone": "{{ config('contact.phone_tel') }}",
            "email": "{{ config('contact.email') }}",
            "priceRange": "$$$",
            "foundingDate": "2012",
            "openingHours": "Mo-Su 00:00-23:59",
            "address": {
                "@@type": "PostalAddress",
                "addressLocality": "Jersey City",
                "addressRegion": "NJ",
                "addressCountry": "US"
            },
            "geo": {
                "@@type": "GeoCoordinates",
                "latitude": "40.7178",
                "longitude": "-74.0431"
            },
            "areaServed": [
                { "@@type": "State", "name": "New Jersey" },
                { "@@type": "State", "name": "New York" },
                { "@@type": "City", "name": "Jersey City" },
                { "@@type": "City", "name": "Newark" },
                { "@@type": "City", "name": "New York City" }
            ],
            "sameAs": [
                "https://www.facebook.com/profile.php?id=61581788001748",
                "https://x.com/Alar_chauffeur",
                "https://www.instagram.com/alar_chauffeur_service/",
                "https://www.linkedin.com/in/alar-chauffeur-services-415862383",
                "https://www.scoop.it/u/alar-chauffeur-service"
            ]
        },
        {
            "@@type": "WebSite",
            "@@id": "{{ rtrim(config('app.url'), '/') }}/#website",
            "url": "{{ rtrim(config('app.url'), '/') }}",
            "name": "Alar Chauffeur Service",
            "description": "Premium limousine and luxury chauffeur services in New Jersey, New York, and select U.S. markets.",
            "publisher": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" },
            "inLanguage": "en-US"
        },
        {
            "@@type": "WebPage",
            "@@id": "{{ rtrim(config('app.url'), '/') }}/#webpage",
            "url": "{{ rtrim(config('app.url'), '/') }}",
            "name": "Limo Service In New Jersey | Alar Chauffeur Service",
            "description": "Premium limo service in New Jersey by ALAR Chauffeur Service. Luxury SUVs, sedans, and party buses for airport transfers, events, and group travel.",
            "isPartOf": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#website" },
            "about": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" },
            "primaryImageOfPage": {
                "@@type": "ImageObject",
                "url": "{{ asset('assets/img/logo/logo.png') }}"
            },
            "inLanguage": "en-US"
        },
        {
            "@@type": "OfferCatalog",
            "@@id": "{{ rtrim(config('app.url'), '/') }}/#services",
            "name": "Luxury Transportation Services",
            "url": "{{ route('our-services') }}",
            "itemListElement": [
                {
                    "@@type": "ListItem",
                    "position": 1,
                    "item": {
                        "@@type": "Service",
                        "name": "Airport Transportation",
                        "url": "{{ route('services.airport-transportation') }}",
                        "provider": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" }
                    }
                },
                {
                    "@@type": "ListItem",
                    "position": 2,
                    "item": {
                        "@@type": "Service",
                        "name": "Corporate Transportation",
                        "url": "{{ route('services.corporate-transportation') }}",
                        "provider": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" }
                    }
                },
                {
                    "@@type": "ListItem",
                    "position": 3,
                    "item": {
                        "@@type": "Service",
                        "name": "Wedding Limo Service",
                        "url": "{{ route('services.wedding-limo') }}",
                        "provider": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" }
                    }
                },
                {
                    "@@type": "ListItem",
                    "position": 4,
                    "item": {
                        "@@type": "Service",
                        "name": "Prom Limo Service",
                        "url": "{{ route('services.prom-limo') }}",
                        "provider": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" }
                    }
                },
                {
                    "@@type": "ListItem",
                    "position": 5,
                    "item": {
                        "@@type": "Service",
                        "name": "Hourly Limo Service",
                        "url": "{{ route('services.hourly-limo') }}",
                        "provider": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" }
                    }
                },
                {
                    "@@type": "ListItem",
                    "position": 6,
                    "item": {
                        "@@type": "Service",
                        "name": "Group Transportation",
                        "url": "{{ route('services.group-transportation') }}",
                        "provider": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" }
                    }
                },
                {
                    "@@type": "ListItem",
                    "position": 7,
                    "item": {
                        "@@type": "Service",
                        "name": "Party Bus Rental",
                        "url": "{{ route('services.party-bus') }}",
                        "provider": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" }
                    }
                },
                {
                    "@@type": "ListItem",
                    "position": 8,
                    "item": {
                        "@@type": "Service",
                        "name": "Sporting Event Transportation",
                        "url": "{{ route('services.sporting-events') }}",
                        "provider": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" }
                    }
                },
                {
                    "@@type": "ListItem",
                    "position": 9,
                    "item": {
                        "@@type": "Service",
                        "name": "Concert & Festival Transportation",
                        "url": "{{ route('services.concert-festival') }}",
                        "provider": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" }
                    }
                },
                {
                    "@@type": "ListItem",
                    "position": 10,
                    "item": {
                        "@@type": "Service",
                        "name": "Cruise Port Transfers",
                        "url": "{{ route('services.cruise-port-transfers') }}",
                        "provider": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" }
                    }
                },
                {
                    "@@type": "ListItem",
                    "position": 11,
                    "item": {
                        "@@type": "Service",
                        "name": "Chauffeured Service",
                        "url": "{{ route('services.chauffeured-service') }}",
                        "provider": { "@@id": "{{ rtrim(config('app.url'), '/') }}/#organization" }
                    }
                }
            ]
        }
    ]
}
</script>
@endpush

@section('content')

<!-- ===== HERO: Split layout — left text, right image panel ===== -->
<section class="ve-hero">
    <!-- Left Panel -->
    <div class="ve-hero-left">
        <h1>WELCOME TO <span class="ve-highlight">ALAR CHAUFFEUR SERVICE</span><br> WITH WORLD-CLASS FLEETS</h1>
        <p>For over three years, Alar Chauffeur Service has been a trusted choice for premium chauffeur and luxury
            transportation services. We proudly serve clients across <a href="{{ route('service-area.new-jersey') }}"
                style="color: var(--ve-gold);"><b>New Jersey</b></a>, <a href="{{ route('service-area.new-york') }}"
                style="color: var(--ve-gold);"><b>New York</b></a>, <a href="{{ route('service-area.san-francisco') }}"
                style="color: var(--ve-gold);"><b>San Francisco</b></a>, and <a
                href="{{ route('service-area.san-francisco') }}" style="color: var(--ve-gold);"><b>Nevada</b></a>,
            delivering reliable, high-quality rides for every occasion. Whether you’re planning a wedding, corporate
            event, <a href="{{ route('services.airport-transportation') }}" style="color: var(--ve-gold);"><b>airport
                    transfer</b></a>, or a night out, our team ensures every detail is handled with precision, care, and
            a level of service that reflects our growing reputation.</p>
        <p>Every vehicle in <a href="{{ route('our-fleet') }}" style="color: var(--ve-gold);"><b>our fleet</b></a> is
            carefully inspected before each booking and professionally detailed on the day of service.Getting started is
            quick and convenient. <a href="{{ route('book-online') }}" style="color: var(--ve-gold);"><b>Request a quote
                    online</b></a> in justminutes, and our team will assist you with vehicle selection, transparent
            pricing, availability, and enjoy 10% off.</p>
        <div class="ve-hero-btns">
            <a href="{{ route('book-online') }}" class="ve-btn-primary">Book Online</a>
            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost">Call Now</a>
        </div>
    </div>
    <!-- Right Panel: overlapping image cards -->
    <div class="ve-hero-right">
        <div class="ve-hero-img-main bg-img" style="background-image:url(../assets/img/slider/slider-1.webp);">
        </div>
        <div class="ve-hero-img-accent bg-img" style="background-image:url(../assets/img/slider/slider-2.webp);">
        </div>
        <!-- Floating card -->

    </div>
</section>

<section class="ve-section ve-whyus-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image Side -->
            <div class="col-12 col-lg-5 order-md-2 order-2 order-lg-0">
                <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-whyus-img-main bg-img"
                        style="background-image:url(../assets/img/about-us/excellence-and-discretion-2.webp);">
                    </div>
                    <div class="ve-whyus-badge">
                        <strong>3+</strong>
                        <span>Years of Excellence</span>
                    </div>
                </div>
            </div>
            <!-- Content Side -->
            <div class="col-12 col-lg-7 order-md-1 order-1 mb-5 order-lg-0 wow fadeInRight" data-wow-delay="200ms">
                <div class="ve-whyus-content">
                    <span class="ve-section-tag">About Us</span>
                    <h2>Premium Limousine Services & Party Bus Rentals for Weddings, Proms, and Special Events <span>in
                            New Jersey</span></h2>
                    <p>Alar Chauffeur Service delivers a smarter way to travel in luxury by combining premium vehicles
                        with highly trained professional chauffeurs for a smooth, stylish, and reliable experience.
                        Serving <a href="{{ route('service-area.new-jersey') }}" style="color: var(--ve-dark);"><b>New
                                Jersey</b></a>, New York, California, San Francisco, Nevada, Seattle, and
                        Kansas City, we provide airport transfers, corporate travel, <a
                            href="{{ route('services.wedding-limo') }}"
                            style="color: var(--ve-dark);"><b>weddings</b></a>, proms, and
                        event transportation designed with comfort, punctuality, and elegance in mind. Every ride
                        reflects our commitment to high-end service and consistent quality..</p>
                    <div class="ve-fleet-btns mt-4" style="display: flex; gap: 10px; flex-wrap: wrap;">
                        <a href="{{ route('book-online') }}" class="ve-btn-primary"
                            style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                        <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                            style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== MAJOR AIRPORTS GRID ===== -->
<section class="ve-airport-grid-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">National Coverage</span>
            <h2>Major Airports <span>We Serve</span></h2>
            <p>We provide premium chauffeur services to and from the most significant travel hubs across the country.
            </p>
        </div>

        <div class="row g-4 gy-5">
            <!-- Row 1 -->
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-airport-card-text">
                    <h4>JFK Airport Limo Service NYC</h4>
                    <p>John F. Kennedy International Airport is our specialty. We provide professional car and limo
                        services to JFK from all five boroughs and beyond.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/jfk.webp') }});"></div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-airport-card-text">
                    <h4>LGA Limo Service LaGuardia</h4>
                    <p>Experience seamless transfers to and from LaGuardia Airport. Our chauffeurs ensure you never miss
                        a flight or a critical business meeting.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/lga.webp') }});"></div>
            </div>

            <!-- Row 2 -->
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/ewr.webp') }});"></div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-airport-card-text">
                    <h4>Newark Airport Limo Service EWR</h4>
                    <p>Whether you are a corporate executive or a family traveler, we have the perfect vehicle for your
                        Newark Liberty International trip.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/sfo.webp') }});"></div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-airport-card-text">
                    <h4>San Francisco International SFO</h4>
                    <p>Arrive in the Bay Area with absolute confidence. Our SFO chauffeur service provides premium
                        transportation to San Francisco and Silicon Valley.</p>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-airport-card-text">
                    <h4>Harry Reid International LAS</h4>
                    <p>Experience the excitement of Las Vegas from the moment you land. We provide seamless, high class
                        transfers from Harry Reid Airport to the Strip.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/las.webp') }});"></div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-airport-card-text">
                    <h4>Seattle-Tacoma International SEA</h4>
                    <p>Reliable airport transfers in the Pacific Northwest. We serve Sea-Tac with the same commitment to
                        excellence and absolute punctuality for every traveler.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/sea.webp') }});">
                </div>
            </div>

            <!-- Row 4 -->
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/mci.webp') }});"></div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-airport-card-text">
                    <h4>Kansas City International MCI</h4>
                    <p>Your local partner for professional travel. We provide premium chauffeur services to and from
                        MCI, ensuring a smooth start to your journey from home.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-airport-card-img"
                    style="background-image:url({{ asset('assets/img/airports/lax.webp') }});"></div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-airport-card-text">
                    <h4>Los Angeles International LAX</h4>
                    <p>Navigate the West Coast with ease. Our LAX airport service provides a stress free alternative to
                        the famous Southern California traffic.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SERVICES GRID (new card layout) ===== -->
<section class="ve-section ve-services-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Alar Choice</span>
            <h2>Our <span>Features</span></h2>
            <p>Discover the premium amenities and standards that set Alar Chauffeur Service apart.</p>
        </div>
        <div class="ve-services-grid">
            <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-service-icon"><i class="fa fa-plane"></i></div>
                <h4>Airport Transfers</h4>
                <p>Reliable and punctual pickups from all major airports. Your chauffeur awaits you at the terminal.</p>
            </div>
            <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-service-icon"><i class="fa fa-briefcase"></i></div>
                <h4>Corporate Travel</h4>
                <p>Impress your business partners with our executive class service and quiet, comfortable interiors.</p>
            </div>
            <div class="ve-service-card wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-service-icon"><i class="fa fa-heart"></i></div>
                <h4>Wedding Limousine</h4>
                <p>Make your special day unforgettable with our beautifully decorated wedding limousines.</p>
            </div>
            <div class="ve-service-card wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-service-icon"><i class="fa fa-glass"></i></div>
                <h4>Night Out Service</h4>
                <p>Celebrate in style without worrying about traffic or parking. Luxury travel for your party night.</p>
            </div>
            <div class="ve-service-card wow fadeInUp" data-wow-delay="500ms">
                <div class="ve-service-icon"><i class="fa fa-star"></i></div>
                <h4>Special Events</h4>
                <p>From proms to anniversaries, we add a touch of class to every celebratory occasion you host.</p>
            </div>
            <div class="ve-service-card wow fadeInUp" data-wow-delay="600ms">
                <div class="ve-service-icon"><i class="fa fa-car"></i></div>
                <h4>Our Fleet</h4>
                <p>Explore our range of late model sedans, SUVs, and stretch limousines for your next trip.</p>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SPLIT -->
<section class="ve-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                <div>
                    <span class="ve-section-tag">Why Choose Us</span>
                    <h2>The Alar Standard in <span>Luxury Travel</span></h2>
                    <p class="ve-lead">We are a team of professional transportation specialists dedicated to providing
                        more than just a ride, we provide a premium travel experience.</p>
                    <p>Founded in 2023, our service was built on a single mission: to redefine luxury transportation
                        through punctuality, safety, and unparalleled comfort. Today, we operate a world class fleet
                        serving thousands of satisfied clients.</p>
                    <div class="ve-about-features">
                        <div class="ve-af-item"><i class="fa fa-badge"></i><span>Certified Professional
                                Chauffeurs</span></div>
                        <div class="ve-af-item"><i class="fa fa-shield"></i><span>Fully Insured and Licensed
                                Fleet</span>
                        </div>
                        <div class="ve-af-item"><i class="fa fa-clock-o"></i><span>Guaranteed On Time Arrival</span>
                        </div>
                        <div class="ve-af-item"><i class="fa fa-star"></i><span>5 Star Premium Amenities</span></div>
                        <div class="ve-fleet-btns mt-4" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="#" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book
                                Online</a>
                            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                style="padding: 10px 18px; font-size: 13px;">Call
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 wow fadeInLeft " data-wow-delay="100ms">
                <div class="ve-about-text">
                    <div class="ve-about-img-1 bg-img"
                        style="background-image:url({{ asset('assets/img/about-us/excellence-and-discretion-1.webp') }});">
                    </div>
                    <div class="ve-about-img-2 bg-img"
                        style="background-image:url({{ asset('assets/img/about-us/excellence-in-luxury-1.webp') }});">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== COUNTERS ===== -->
<section class="ve-counter-section">
    <div class="container">
        <div class="ve-counter-grid">
            <div class="ve-counter-item wow fadeInUp" data-wow-delay="100ms">
                <i class="fa fa-users"></i>
                <strong class="counter" data-count="2000">0</strong><span>+</span>
                <p>Happy Passengers</p>
            </div>
            <div class="ve-counter-item wow fadeInUp" data-wow-delay="200ms">
                <i class="fa fa-car"></i>
                <strong class="counter" data-count="50">0</strong><span>+</span>
                <p>Luxury Vehicles</p>
            </div>
            <div class="ve-counter-item wow fadeInUp" data-wow-delay="300ms">
                <i class="fa fa-map-marker"></i>
                <strong class="counter" data-count="10">0</strong><span>+</span>
                <p>Cities Covered</p>
            </div>
            <div class="ve-counter-item wow fadeInUp" data-wow-delay="400ms">
                <i class="fa fa-star"></i>
                <strong class="counter" data-count="3">0</strong><span>+</span>
                <p>Years of Excellence</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== SUPERIOR AMENITIES (Icon Highlights) ===== -->
<section class="ve-section ve-home-amenities">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Luxury Standard</span>
            <h2>Superior <span>On Board Amenities</span></h2>
            <p>We provide more than just a ride; we provide an environment of absolute comfort and sophistication.</p>
        </div>
        <div class="ve-amenities-grid">
            <div class="ve-amenity-item wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-amenity-icon"><i class="fa fa-diamond"></i></div>
                <h5>First Class Seating</h5>
                <p>Meticulously crafted leather interiors designed for ultimate relaxation.</p>
            </div>
            <div class="ve-amenity-item wow fadeInUp" data-wow-delay="200ms">
                <div class="ve-amenity-icon"><i class="fa fa-thermometer-half"></i></div>
                <h5>Climate Control</h5>
                <p>Individualized temperature zones to suit your personal preference.</p>
            </div>
            <div class="ve-amenity-item wow fadeInUp" data-wow-delay="300ms">
                <div class="ve-amenity-icon"><i class="fa fa-music"></i></div>
                <h5>Entertainment</h5>
                <p>High-fidelity audio systems and seamless multi media connectivity.</p>
            </div>
            <div class="ve-amenity-item wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-amenity-icon"><i class="fa fa-lock"></i></div>
                <h5>Absolute Privacy</h5>
                <p>Advanced privacy partitions and tinted windows for total discretion.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== OUR SERVICES (Image Cards) ===== -->
<section class="ve-section ve-services-visual-section" style="background-color: var(--ve-light);">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Premium Experience</span>
            <h2>Our Best <span>Services</span></h2>
            <p>We provide professionally chauffeured luxury transportation services for all your special needs.</p>
        </div>
        <div class="row gy-5">
            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-insight-card">
                    <div class="ve-insight-img bg-img"
                        style="background-image:url({{ asset('assets/img/our-services/aiport-transfer.webp') }});">
                    </div>
                    <div class="ve-insight-body">
                        <h5>Airport Transportation</h5>
                        <p>Reliable and luxurious transportation to and from all major airports with professional
                            chauffeurs.</p>
                        <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="{{ route('services.airport-transportation') }}" class="ve-btn-ghost-dark"
                                style="padding: 10px 18px; font-size: 13px;">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="250ms">
                <div class="ve-insight-card">
                    <div class="ve-insight-img bg-img"
                        style="background-image:url({{ asset('assets/img/our-services/wedding-transportation.webp') }});">
                    </div>
                    <div class="ve-insight-body">
                        <h5>Wedding Limo</h5>
                        <p>Make your wedding day unforgettable with our elegant and beautifully decorated stretch
                            limousines.</p>
                        <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="{{ route('services.wedding-limo') }}" class="ve-btn-ghost-dark"
                                style="padding: 10px 18px; font-size: 13px;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-insight-card">
                    <div class="ve-insight-img bg-img"
                        style="background-image:url({{ asset('assets/img/our-services/corporate-limo.webp') }});"></div>
                    <div class="ve-insight-body">
                        <h5>Corporate Transportation</h5>
                        <p>Sophisticated transportation solutions for executives and business events with premium
                            comfort.</p>
                        <div class="ve-services-btns mt-35" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="{{ route('services.corporate-transportation') }}" class="ve-btn-ghost-dark"
                                style="padding: 10px 18px; font-size: 13px;">Read More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5 text-center wow fadeInUp" data-wow-delay="500ms">
                <a href="{{ route('our-services') }}" class="ve-btn-primary">View More Services</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== OUR FLEET ===== -->
<section class="ve-section ve-fleet-section">
    <div class="container">
        <div class="ve-section-header text-center">
            <span class="ve-section-tag">Luxury Fleet</span>
            <h2>Experience Our <span>Premium Vehicles</span></h2>
            <p>Choose from our diverse collection of late model, meticulously maintained luxury vehicles.</p>
        </div>
        <div class="row gy-5">
            <!-- Fleet 1 -->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="ve-insight-card">
                    <div class="ve-insight-img bg-img"
                        style="background-image:url({{ asset('assets/img/fleet/mercedes-s550.webp') }});">
                    </div>
                    <div class="ve-insight-body">
                        <h5>Mercedes Benz S550</h5>
                        <p>The pinnacle of luxury sedans, perfect for executive travel and airport transfers.</p>
                        <div class="ve-insight-meta">
                            <span><i class="fa fa-user"></i> 3 Passengers</span>
                            <span><i class="fa fa-briefcase"></i> 3 Bags</span>
                        </div>
                        <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fleet 2 -->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="250ms">
                <div class="ve-insight-card">
                    <div class="ve-insight-img bg-img"
                        style="background-image:url({{ asset('assets/img/fleet/cadillac-escalade.webp') }});">
                    </div>
                    <div class="ve-insight-body">
                        <h5>Cadillac Escalade</h5>
                        <p>Spacious, powerful, and iconic. The ideal choice for groups and long distance travel.</p>
                        <div class="ve-insight-meta">
                            <span><i class="fa fa-user"></i> 6 Passengers</span>
                            <span><i class="fa fa-briefcase"></i> 6 Bags</span>
                        </div>
                        <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fleet 3 -->
            <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="400ms">
                <div class="ve-insight-card">
                    <div class="ve-insight-img bg-img"
                        style="background-image:url({{ asset('assets/img/fleet/escalade-limo.webp') }});">
                    </div>
                    <div class="ve-insight-body">
                        <h5>Escalade Stretch Limo</h5>
                        <p>Ultimate luxury for your special events, weddings, and party nights with premium lighting.
                        </p>
                        <div class="ve-insight-meta">
                            <span><i class="fa fa-user"></i> 14 Passengers</span>
                            <span><i class="fa fa-glass"></i> Mini Bar</span>
                        </div>
                        <div class="ve-fleet-btns mt-3" style="display: flex; gap: 10px; flex-wrap: wrap;">
                            <a href="{{ route('book-online') }}" class="ve-btn-primary"
                                style="padding: 10px 18px; font-size: 13px; color: #fff;">Book Online</a>
                            <a href="tel:{{ config('contact.phone_tel') }}" class="ve-btn-ghost-dark"
                                style="padding: 10px 18px; font-size: 13px;">Call Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5 text-center wow fadeInUp" data-wow-delay="500ms">
                <a href="{{ route('our-fleet') }}" class="ve-btn-primary">View All Fleet</a>
            </div>
        </div>
    </div>
</section>

@include('components.google-reviews', [
    'reviews' => $reviews,
    'googleReviewsUrl' => $googleReviewsUrl,
    'googleWriteUrl' => $googleWriteUrl,
])

@include('components.cta')
@endsection
