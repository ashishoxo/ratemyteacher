
@extends('admin.layouts.app')
@section('content')
<!-- Banner
================================================== -->
<div class="main-search-container" data-background-image="{{asset('images/main-search-background-01.jpg')}}">
    <div class="main-search-inner">

        <div class="container">
            
        </div>

    </div>
</div>


<!-- Content
================================================== -->
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h3 class="headline centered margin-top-75">
                Popular Categories
                <span>Browse <i>the most desirable</i> categories</span>
            </h3>
        </div>

    </div>
</div>


<!-- Categories Carousel -->
<div class="fullwidth-carousel-container margin-top-25">
    <div class="fullwidth-slick-carousel category-carousel">

        <!-- Item -->
        <div class="fw-carousel-item">

            <!-- this (first) box will be hidden under 1680px resolution -->
            <div class="category-box-container half">
                <a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="{{asset('images/category-box-01.jpg')}}">
                    <div class="category-box-content">
                        <h3>Hotels</h3>
                        <span>64 listings</span>
                    </div>
                    <span class="category-box-btn">Browse</span>
                </a>
            </div>

            <div class="category-box-container half">
                <a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="{{asset('images/category-box-02.jpg')}}">
                    <div class="category-box-content">
                        <h3>Shops</h3>
                        <span>14 listings</span>
                    </div>
                    <span class="category-box-btn">Browse</span>
                </a>
            </div>
        </div>

        <!-- Item -->
        <div class="fw-carousel-item">
            <div class="category-box-container">
                <a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="{{asset('images/category-box-03.jpg')}}">
                    <div class="category-box-content">
                        <h3>Events</h3>
                        <span>67 listings</span>
                    </div>
                    <span class="category-box-btn">Browse</span>
                </a>
            </div>
        </div>

        <!-- Item -->
        <div class="fw-carousel-item">
            <div class="category-box-container">
                <a href="listings-half-screen-map-grid-1.html" class="category-box" data-background-image="{{asset('images/category-box-04.jpg')}}">
                    <div class="category-box-content">
                        <h3>Fitness</h3>
                        <span>27 listings</span>
                    </div>
                    <span class="category-box-btn">Browse</span>
                </a>
            </div>
        </div>

        <!-- Item -->
        <div class="fw-carousel-item">
            <div class="category-box-container">
                <a href="listings-half-screen-map-list.html" class="category-box" data-background-image="{{asset('images/category-box-05.jpg')}}">
                    <div class="category-box-content">
                        <h3>Nightlife</h3>
                        <span>22 listings</span>
                    </div>
                    <span class="category-box-btn">Browse</span>
                </a>
            </div>
        </div>

        <!-- Item -->
        <div class="fw-carousel-item">
            <div class="category-box-container">
                <a href="listings-half-screen-map-list.html" class="category-box" data-background-image="{{asset('images/category-box-06.jpg')}}">
                    <div class="category-box-content">
                        <h3>Eat & Drink</h3>
                        <span>130 listings</span>
                    </div>
                    <span class="category-box-btn">Browse</span>
                </a>
            </div>
        </div>

    </div>
</div>
<!-- Categories Carousel / End -->



<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3 class="headline centered margin-bottom-45">
                    Most Visited Places
                    <span>Discover top-rated local businesses</span>
                </h3>
            </div>

            <div class="col-md-12">
                <div class="simple-slick-carousel dots-nav">

                <!-- Listing Item -->
                <div class="carousel-item">
                    <a href="listings-single-page.html" class="listing-item-container">
                        <div class="listing-item">
                            <img src="{{asset('images/listing-item-01.jpg')}}" alt="">

                            <div class="listing-badge now-open">Now Open</div>
                            
                            <div class="listing-item-content">
                                <span class="tag">Eat & Drink</span>
                                <h3>Tom's Restaurant <i class="verified-icon"></i></h3>
                                <span>964 School Street, New York</span>
                            </div>
                            <span class="like-icon"></span>
                        </div>
                        <div class="star-rating" data-rating="3.5">
                            <div class="rating-counter">(12 reviews)</div>
                        </div>
                    </a>
                </div>
                <!-- Listing Item / End -->

                <!-- Listing Item -->
                <div class="carousel-item">
                    <a href="listings-single-page.html" class="listing-item-container">
                        <div class="listing-item">
                            <img src="{{asset('images/listing-item-02.jpg')}}" alt="">
                            <div class="listing-item-details">
                                <ul>
                                    <li>Friday, August 10</li>
                                </ul>
                            </div>
                            <div class="listing-item-content">
                                <span class="tag">Events</span>
                                <h3>Sticky Band</h3>
                                <span>Bishop Avenue, New York</span>
                            </div>
                            <span class="like-icon"></span>
                        </div>
                        <div class="star-rating" data-rating="5.0">
                            <div class="rating-counter">(23 reviews)</div>
                        </div>
                    </a>
                </div>
                <!-- Listing Item / End -->     

                <!-- Listing Item -->
                <div class="carousel-item">
                    <a href="listings-single-page.html" class="listing-item-container">
                        <div class="listing-item">
                            <img src="{{asset('images/listing-item-03.jpg')}}" alt="">
                            <div class="listing-item-details">
                                <ul>
                                    <li>Starting from $59 per night</li>
                                </ul>
                            </div>
                            <div class="listing-item-content">
                                <span class="tag">Hotels</span>
                                <h3>Hotel Govendor</h3>
                                <span>778 Country Street, New York</span>
                            </div>
                            <span class="like-icon"></span>
                        </div>
                        <div class="star-rating" data-rating="2.0">
                            <div class="rating-counter">(17 reviews)</div>
                        </div>
                    </a>
                </div>
                <!-- Listing Item / End -->

                <!-- Listing Item -->
                <div class="carousel-item">
                    <a href="listings-single-page.html" class="listing-item-container">
                        <div class="listing-item">
                            <img src="{{asset('images/listing-item-04.jpg')}}" alt="">

                            <div class="listing-badge now-open">Now Open</div>

                            <div class="listing-item-content">
                                <span class="tag">Eat & Drink</span>
                                <h3>Burger House <i class="verified-icon"></i></h3>
                                <span>2726 Shinn Street, New York</span>
                            </div>
                            <span class="like-icon"></span>
                        </div>
                        <div class="star-rating" data-rating="5.0">
                            <div class="rating-counter">(31 reviews)</div>
                        </div>
                    </a>
                </div>
                <!-- Listing Item / End -->

                <!-- Listing Item -->
                <div class="carousel-item">
                    <a href="listings-single-page.html" class="listing-item-container">
                        <div class="listing-item">
                            <img src="{{asset('images/listing-item-05.jpg')}}" alt="">
                            <div class="listing-item-content">
                                <span class="tag">Other</span>
                                <h3>Airport</h3>
                                <span>1512 Duncan Avenue, New York</span>
                            </div>
                            <span class="like-icon"></span>
                        </div>
                        <div class="star-rating" data-rating="3.5">
                            <div class="rating-counter">(46 reviews)</div>
                        </div>
                    </a>
                </div>
                <!-- Listing Item / End -->

                <!-- Listing Item -->
                <div class="carousel-item">
                    <a href="listings-single-page.html" class="listing-item-container">
                        <div class="listing-item">
                            <img src="{{asset('images/listing-item-06.jpg')}}" alt="">

                            <div class="listing-badge now-closed">Now Closed</div>

                            <div class="listing-item-content">
                                <span class="tag">Eat & Drink</span>
                                <h3>Think Coffee</h3>
                                <span>215 Terry Lane, New York</span>
                            </div>
                            <span class="like-icon"></span>
                        </div>
                        <div class="star-rating" data-rating="4.5">
                            <div class="rating-counter">(15 reviews)</div>
                        </div>
                    </a>
                </div>
                <!-- Listing Item / End -->
                </div>
                
            </div>

        </div>
    </div>

</section>
<!-- Fullwidth Section / End -->


<!-- Info Section -->
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="headline centered margin-top-80">
                Plan The Vacation of Your Dreams 
                <span class="margin-top-25">Explore some of the best tips from around the world from our partners and friends.  Discover some of the most popular listings in Sydney.</span>
            </h2>
        </div>
    </div>

    <div class="row icons-container">
        <!-- Stage -->
        <div class="col-md-4">
            <div class="icon-box-2 with-line">
                <i class="im im-icon-Map2"></i>
                <h3>Find Interesting Place</h3>
                <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin turpis.</p>
            </div>
        </div>

        <!-- Stage -->
        <div class="col-md-4">
            <div class="icon-box-2 with-line">
                <i class="im im-icon-Mail-withAtSign"></i>
                <h3>Contact a Few Owners</h3>
                <p>Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum metus nullam viverra porta purus.</p>
            </div>
        </div>

        <!-- Stage -->
        <div class="col-md-4">
            <div class="icon-box-2">
                <i class="im im-icon-Checked-User"></i>
                <h3>Make a Reservation</h3>
                <p>Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin feugiat pharetra consectetur.</p>
            </div>
        </div>
    </div>

</div>
<!-- Info Section / End -->


<!-- Recent Blog Posts -->
<section class="fullwidth border-top margin-top-70 padding-top-75 padding-bottom-75" data-background-color="#fff">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h3 class="headline centered margin-bottom-45">
                    From The Blog
                </h3>
            </div>
        </div>

        <div class="row">
            <!-- Blog Post Item -->
            <div class="col-md-4">
                <a href="pages-blog-post.html" class="blog-compact-item-container">
                    <div class="blog-compact-item">
                        <img src="{{asset('images/blog-compact')}}-post-01.jpg" alt="">
                        <span class="blog-item-tag">Tips</span>
                        <div class="blog-compact-item-content">
                            <ul class="blog-post-tags">
                                <li>22 August 2017</li>
                            </ul>
                            <h3>Hotels for All Budgets</h3>
                            <p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Blog post Item / End -->

            <!-- Blog Post Item -->
            <div class="col-md-4">
                <a href="pages-blog-post.html" class="blog-compact-item-container">
                    <div class="blog-compact-item">
                        <img src="{{asset('images/blog-compact')}}-post-02.jpg" alt="">
                        <span class="blog-item-tag">Tips</span>
                        <div class="blog-compact-item-content">
                            <ul class="blog-post-tags">
                                <li>18 August 2017</li>
                            </ul>
                            <h3>The 50 Greatest Street Arts In London</h3>
                            <p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Blog post Item / End -->

            <!-- Blog Post Item -->
            <div class="col-md-4">
                <a href="pages-blog-post.html" class="blog-compact-item-container">
                    <div class="blog-compact-item">
                        <img src="{{asset('images/blog-compact')}}-post-03.jpg" alt="">
                        <span class="blog-item-tag">Tips</span>
                        <div class="blog-compact-item-content">
                            <ul class="blog-post-tags">
                                <li>10 August 2017</li>
                            </ul>
                            <h3>The Best Cofee Shops In Sydney Neighborhoods</h3>
                            <p>Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Blog post Item / End -->

            <div class="col-md-12 centered-content">
                <a href="pages-blog.html" class="button border margin-top-10">View Blog</a>
            </div>

        </div>

    </div>
</section>
<!-- Recent Blog Posts / End -->

@endsection
