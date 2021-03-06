@extends('frontEnd.layouts.app')

@section('content')
    <div class="navbar-inner">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="agileits-navi_search">
                    <form action="#" method="post">
                        <select id="agileinfo-nav_search" name="district_id" class="border  select_id" required="">
                            <option value="">All Categories</option>
                            @foreach($category as $categories)
                                <option value="{{$categories->id}}" >{{$categories->name}}</option>
                                @foreach($categories->sub_categories as $sub_categories)
                                    <option  value="{{$sub_categories->id}}">
                                        &emsp;&emsp;{{$sub_categories->name}}</option>
                                @endforeach
                            @endforeach

                        </select>
                    </form>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto text-center mr-xl-5">
                        <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link" href="">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Electronics
                            </a>
                            <div class="dropdown-menu">
                                <div class="agile_inner_drop_nav_info p-4">
                                    <h5 class="mb-3">Mobiles, Computers</h5>
                                    <div class="row">

                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="product.html">Laptops</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Drives & Storage</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="contact.blade.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- //navigation -->

    <!-- banner -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <!-- Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item item1 active">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                            <p>Get flat
                                <span>10%</span> Cashback</p>
                            <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
                                <span>Big</span>
                                Sale
                            </h3>
                            <a class="button2" href="product.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item2">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                            <p>advanced
                                <span>Wireless</span> earbuds</p>
                            <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best
                                <span>Headphone</span>
                            </h3>
                            <a class="button2" href="product.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item3">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                            <p>Get flat
                                <span>10%</span> Cashback</p>
                            <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">New
                                <span>Standard</span>
                            </h3>
                            <a class="button2" href="product.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item4">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                            <p>Get Now
                                <span>40%</span> Discount</p>
                            <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Today
                                <span>Discount</span>
                            </h3>
                            <a class="button2" href="product.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- //banner -->

    <!-- top Products -->
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                <span>O</span>ur
                <span>N</span>ew
                <span>P</span>roducts</h3>
            <!-- //tittle heading -->
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-9">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <h3 class="heading-tittle text-center font-italic">New Brand Mobiles</h3>
                            <div class="row">
                                @foreach($product as $products)
                                    <div class="col-md-4 product-men mt-5">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item text-center">
                                                <img src="{{$products->image_path}}" alt="" width="180px" height="200px">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="single.html" class="link-product-add-cart">Quick
                                                            View</a>
                                                    </div>
                                                </div>
                                                <span class="product-new-top">New</span>

                                            </div>
                                            <div class="item-info-product text-center border-top mt-4">
                                                <h4 class="pt-1">
                                                    <a href="single.html">Apple iPhone X</a>
                                                </h4>
                                                <div class="info-product-price my-2">
                                                    <span class="item_price">$280.00</span>
                                                    <del>$300.00</del>
                                                </div>
                                                <div
                                                    class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart"/>
                                                            <input type="hidden" name="add" value="1"/>
                                                            <input type="hidden" name="business" value=" "/>
                                                            <input type="hidden" name="item_name"
                                                                   value="Apple iPhone X"/>
                                                            <input type="hidden" name="amount" value="280.00"/>
                                                            <input type="hidden" name="discount_amount" value="1.00"/>
                                                            <input type="hidden" name="currency_code" value="USD"/>
                                                            <input type="hidden" name="return" value=" "/>
                                                            <input type="hidden" name="cancel_return" value=" "/>
                                                            <input type="submit" name="submit" value="Add to cart"
                                                                   class="button btn"/>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- //first section -->
                        <!-- second section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <h3 class="heading-tittle text-center font-italic">Tv & Audio</h3>
                            <div class="row">
                                <div class="col-md-4 product-men mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="images/m4.jpg" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single.html">Sony 80 cm (32 inches)</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">$320.00</span>
                                                <del>$340.00</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart"/>
                                                        <input type="hidden" name="add" value="1"/>
                                                        <input type="hidden" name="business" value=" "/>
                                                        <input type="hidden" name="item_name"
                                                               value="Sony 80 cm (32 inches)"/>
                                                        <input type="hidden" name="amount" value="320.00"/>
                                                        <input type="hidden" name="discount_amount" value="1.00"/>
                                                        <input type="hidden" name="currency_code" value="USD"/>
                                                        <input type="hidden" name="return" value=" "/>
                                                        <input type="hidden" name="cancel_return" value=" "/>
                                                        <input type="submit" name="submit" value="Add to cart"
                                                               class="button btn"/>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-men mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="images/m5.jpg" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                            <span class="product-new-top">New</span>

                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single.html">Artis Speaker</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">$349.00</span>
                                                <del>$399.00</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart"/>
                                                        <input type="hidden" name="add" value="1"/>
                                                        <input type="hidden" name="business" value=" "/>
                                                        <input type="hidden" name="item_name" value="Artis Speaker"/>
                                                        <input type="hidden" name="amount" value="349.00"/>
                                                        <input type="hidden" name="discount_amount" value="1.00"/>
                                                        <input type="hidden" name="currency_code" value="USD"/>
                                                        <input type="hidden" name="return" value=" "/>
                                                        <input type="hidden" name="cancel_return" value=" "/>
                                                        <input type="submit" name="submit" value="Add to cart"
                                                               class="button btn"/>
                                                    </fieldset>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-men mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="images/m6.jpg" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single.html">Philips Speakers</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">$249.00</span>
                                                <del>$300.00</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart"/>
                                                        <input type="hidden" name="add" value="1"/>
                                                        <input type="hidden" name="business" value=" "/>
                                                        <input type="hidden" name="item_name" value="Philips Speakers"/>
                                                        <input type="hidden" name="amount" value="249.00"/>
                                                        <input type="hidden" name="discount_amount" value="1.00"/>
                                                        <input type="hidden" name="currency_code" value="USD"/>
                                                        <input type="hidden" name="return" value=" "/>
                                                        <input type="hidden" name="cancel_return" value=" "/>
                                                        <input type="submit" name="submit" value="Add to cart"
                                                               class="button btn"/>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //second section -->
                        <!-- third section -->
                        <div class="product-sec1 product-sec2 px-sm-5 px-3">
                            <div class="row">
                                <h3 class="col-md-4 effect-bg">Summer Carnival</h3>
                                <p class="w3l-nut-middle">Get Extra 10% Off</p>
                                <div class="col-md-8 bg-right-nut">
                                    <img src="images/image1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- //third section -->
                        <!-- fourth section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
                            <h3 class="heading-tittle text-center font-italic">Large Appliances</h3>
                            <div class="row">
                                <div class="col-md-4 product-men mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="images/m7.jpg" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="product-new-top">New</span>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single.html">Whirlpool 245</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">$230.00</span>
                                                <del>$280.00</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart"/>
                                                        <input type="hidden" name="add" value="1"/>
                                                        <input type="hidden" name="business" value=" "/>
                                                        <input type="hidden" name="item_name" value="Whirlpool 245"/>
                                                        <input type="hidden" name="amount" value="230.00"/>
                                                        <input type="hidden" name="discount_amount" value="1.00"/>
                                                        <input type="hidden" name="currency_code" value="USD"/>
                                                        <input type="hidden" name="return" value=" "/>
                                                        <input type="hidden" name="cancel_return" value=" "/>
                                                        <input type="submit" name="submit" value="Add to cart"
                                                               class="button btn"/>
                                                    </fieldset>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-men mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="images/m8.jpg" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single.html">BPL Washing Machine</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">$180.00</span>
                                                <del>$200.00</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart"/>
                                                        <input type="hidden" name="add" value="1"/>
                                                        <input type="hidden" name="business" value=" "/>
                                                        <input type="hidden" name="item_name"
                                                               value="BPL Washing Machine"/>
                                                        <input type="hidden" name="amount" value="180.00"/>
                                                        <input type="hidden" name="discount_amount" value="1.00"/>
                                                        <input type="hidden" name="currency_code" value="USD"/>
                                                        <input type="hidden" name="return" value=" "/>
                                                        <input type="hidden" name="cancel_return" value=" "/>
                                                        <input type="submit" name="submit" value="Add to cart"
                                                               class="button btn"/>
                                                    </fieldset>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 product-men mt-5">
                                    <div class="men-pro-item simpleCart_shelfItem">
                                        <div class="men-thumb-item text-center">
                                            <img src="images/m9.jpg" alt="">
                                            <div class="men-cart-pro">
                                                <div class="inner-men-cart-pro">
                                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-info-product text-center border-top mt-4">
                                            <h4 class="pt-1">
                                                <a href="single.html">Microwave Oven</a>
                                            </h4>
                                            <div class="info-product-price my-2">
                                                <span class="item_price">$199.00</span>
                                                <del>$299.00</del>
                                            </div>
                                            <div
                                                class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart"/>
                                                        <input type="hidden" name="add" value="1"/>
                                                        <input type="hidden" name="business" value=" "/>
                                                        <input type="hidden" name="item_name" value="Microwave Oven"/>
                                                        <input type="hidden" name="amount" value="199.00"/>
                                                        <input type="hidden" name="discount_amount" value="1.00"/>
                                                        <input type="hidden" name="currency_code" value="USD"/>
                                                        <input type="hidden" name="return" value=" "/>
                                                        <input type="hidden" name="cancel_return" value=" "/>
                                                        <input type="submit" name="submit" value="Add to cart"
                                                               class="button btn"/>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- //fourth section -->
                    </div>
                </div>
                <!-- //product left -->

                <!-- product right -->
               @include('frontend/productRight')
                <!-- product right -->
            </div>
        </div>
    </div>
    <!-- //top products -->

    <!-- middle section -->
    <div class="join-w3l1 py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="join-agile text-left p-4">
                        <div class="row">
                            <div class="col-sm-7 offer-name">
                                <h6>Smooth, Rich & Loud Audio</h6>
                                <h4 class="mt-2 mb-3">Branded Headphones</h4>
                                <p>Sale up to 25% off all in store</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="images/off1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="join-agile text-left p-4">
                        <div class="row ">
                            <div class="col-sm-7 offer-name">
                                <h6>A Bigger Phone</h6>
                                <h4 class="mt-2 mb-3">Smart Phones 5</h4>
                                <p>Free shipping order over $100</p>
                            </div>
                            <div class="col-sm-5 offerimg-w3l">
                                <img src="images/off2.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- //navigation -->

    <!-- banner -->

@endsection
@section('js')
    <script>
        jQuery(document).ready(function() {
            jQuery('.select_id').on('change', function() {
                var select_id = jQuery(this).val();

                $.ajax({
                    url: "route('home')",
                    type: "GET",

                    success: function(data) {
                      console.log(data)
                        var districts_html = '<option value="">Vui l??ng ch???n</option>';
                        for (const district of data) {
                            districts_html += '<option value="' + district.id + '">' +
                                district.name + '</option>';
                        }
                        jQuery('.district_id').html(districts_html);
                    }
                });

            });
        });
    </script>

@endsection
