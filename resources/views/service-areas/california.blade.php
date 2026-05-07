@extends('main')
@section('meta_title', 'Luxury Chauffeur Service in California | Alar Chauffeur Service')
@section('meta_description', 'Discover luxury chauffeur service in California with Alar Chauffeur Service for airport transportation, executive travel, special events, and premium private rides.')
@section('content')

    <!-- ===== PAGE HERO (Sophisticated Text-Only) ===== -->
    <section class="ve-page-hero-simple">
        <div class="container">
            <div class="ve-hero-simple-content">
                <span class="ve-section-tag">Service Areas</span>
                <h1>Luxury Transportation in <span>California</span></h1>
                <p>Elite chauffeur services from the Pacific coast to the heart of the Golden State.</p>
            </div>
        </div>
    </section>

    <!-- ===== DETAIL CONTENT ===== -->
    <section class="ve-section bg-white">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-12 col-lg-8">
                    <div class="ve-service-area-detail">
                        <div class="ve-area-intro mb-50">
                            <h2 class="mb-20">Premium Chauffeur Service <span>California</span></h2>
                            <p class="ve-lead">Spanning the vibrant landscapes of California, our premier chauffeur service offers sophisticated travel solutions for both business and leisure. From Los Angeles to the northern regions, we define the standard of West Coast luxury.</p>
                            
                            <p>California is a state of innovation and prestige. Whether you are navigating the entertainment capital of the world or visiting the tech hubs of the north, Alar Chauffeur Service provides a sanctuary of comfort. Our late model fleet and professionally trained chauffeurs ensure that your California journey is as remarkable as the destination itself.</p>
                        </div>

                        <div class="ve-area-features mb-50">
                            <h3>Our California <span>Expertise</span></h3>
                            <div class="row mt-30">
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-plane"></i>
                                        <h5>LAX & Major Hubs</h5>
                                        <p>Comprehensive airport services for Los Angeles International, Burbank, and other major California terminals.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-star"></i>
                                        <h5>Entertainment Logistics</h5>
                                        <p>Discreet and professional transportation for industry events, awards shows, and private studio transfers.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-briefcase"></i>
                                        <h5>Executive Travel</h5>
                                        <p>Tailored solutions for business meetings and corporate engagements throughout the state's major financial districts.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="ve-feature-text-item">
                                        <i class="fa fa-map-marker"></i>
                                        <h5>Coastal Journeys</h5>
                                        <p>Sophisticated long-distance travel options along the scenic Pacific Coast Highway and beyond.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ve-area-description">
                            <h3>Unrivaled <span>Professionalism</span></h3>
                            <p>At Alar Chauffeur Service, we pride ourselves on our ability to meet the high expectations of our California clientele. Our commitment to safety, discretion, and excellence makes us the first choice for celebrities, executives, and travelers who demand only the best.</p>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-12 col-lg-4 mt-50 mt-lg-0">
                    <x-service-area-sidebar />
                </div>
            </div>
        </div>
    </section>

    @include('components.cta')

@endsection
