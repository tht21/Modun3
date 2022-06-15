@extends('frontEnd.layouts.app')

@section('content')
    <div class="navbar-inner">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="agileits-navi_search">
                    <form action="#" method="post">
                        <select id="agileinfo-nav_search" name="district_id" class="border  select_id" required="">
                            <option value="">All Categories</option>


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
                                                    <a href="product.html">All Mobile Phones</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">All Mobile Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Cases & Covers</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Screen Protectors</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Power Banks</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">All Certified Refurbished</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Tablets</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Wearable Devices</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Smart Home</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="product.html">Laptops</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Drives & Storage</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Printers & Ink</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Networking Devices</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Computer Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Game Zone</a>
                                                </li>
                                                <li>
                                                    <a href="product.html">Software</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Appliances
                            </a>
                            <div class="dropdown-menu">
                                <div class="agile_inner_drop_nav_info p-4">
                                    <h5 class="mb-3">TV, Appliances, Electronics</h5>
                                    <div class="row">
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="product2.html">Televisions</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Home Entertainment Systems</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Headphones</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Speakers</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">MP3, Media Players & Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Audio & Video Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Cameras</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">DSLR Cameras</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Camera Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="product2.html">Musical Instruments</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Gaming Consoles</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">All Electronics</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Air Conditioners</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Refrigerators</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Washing Machines</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Kitchen & Home Appliances</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">Heating & Cooling Appliances</a>
                                                </li>
                                                <li>
                                                    <a href="product2.html">All Appliances</a>
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
                        <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link" href="product.html">New Arrivals</a>
                        </li>
                        <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="product.html">Product 1</a>
                                <a class="dropdown-item" href="product2.html">Product 2</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
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
    <div class="ads-grid py-sm-5 py-4">
        <div class="container py-xl-4 py-lg-2">
            <!-- tittle heading -->
            <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">

                <span>M</span>obiles
                <span>&</span>
                <span>C</span>omputers</h3>
            <!-- //tittle heading -->
            <div class="row">
                <!-- product left -->
                <div class="agileinfo-ads-display col-lg-9">
                    <div class="wrapper">
                        <!-- first section -->
                        <div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col-md-4 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item text-center">
                                                <img src="{{$product->image_path}}" alt="" width="180px" height="200px">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="single.html" class="link-product-add-cart">Quick
                                                            View</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-info-product text-center border-top mt-4">
                                                <h4 class="pt-1">
                                                    <a href="single.html">{{ $product->name }}</a>
                                                </h4>
                                                <div class="info-product-price my-2">
                                                    <span class="item_price">$200.00</span>
                                                    <del>$280.00</del>
                                                </div>
                                                <div
                                                    class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart"/>
                                                            <input type="hidden" name="add" value="1"/>
                                                            <input type="hidden" name="business" value=" "/>
                                                            <input type="hidden" name="item_name"
                                                                   value="Samsung Galaxy J7"/>
                                                            <input type="hidden" name="amount" value="200.00"/>
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
                    </div>
                </div>
                <!-- //product left -->
                <!-- product right -->
                <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
                    <div class="side-bar p-sm-4 p-3">
                        <div class="search-hotel border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Brand</h3>
                            <form action="#" method="post">
                                <input type="search" placeholder="Search Brand..." name="search" required="">
                                <input type="submit" value=" ">
                            </form>
                            <div class="left-side py-2">
                                <ul>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Samsung</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Red Mi</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Apple</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Nexus</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Motorola</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Micromax</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Lenovo</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Oppo</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">Sony</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">LG</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" class="checked">
                                        <span class="span">One Plus</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- ram -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Ram</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Less than 512 MB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">512 MB - 1 GB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">1 GB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">2 GB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">3 GB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">5 GB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">6 GB</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">6 GB & Above</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //ram -->
                        <!-- price -->
                        <div class="range border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Price</h3>
                            <div class="w3l-range">
                                <ul>
                                    <li>
                                        <a href="#">Under $1,000</a>
                                    </li>
                                    <li class="my-1">
                                        <a href="#">$1,000 - $5,000</a>
                                    </li>
                                    <li>
                                        <a href="#">$5,000 - $10,000</a>
                                    </li>
                                    <li class="my-1">
                                        <a href="#">$10,000 - $20,000</a>
                                    </li>
                                    <li>
                                        <a href="#">$20,000 $30,000</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">Over $30,000</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- //price -->
                        <!-- discounts -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Discount</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">5% or More</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">10% or More</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">20% or More</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">30% or More</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">50% or More</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">60% or More</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //discounts -->
                        <!-- offers -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Offers</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Exchange Offer</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">No Cost EMI</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Special Price</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //offers -->
                        <!-- delivery -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">Cash On Delivery</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Eligible for Cash On Delivery</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //delivery -->
                        <!-- arrivals -->
                        <div class="left-side border-bottom py-2">
                            <h3 class="agileits-sear-head mb-3">New Arrivals</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Last 30 days</span>
                                </li>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Last 90 days</span>
                                </li>
                            </ul>
                        </div>
                        <div class="left-side py-2">
                            <h3 class="agileits-sear-head mb-3">Availability</h3>
                            <ul>
                                <li>
                                    <input type="checkbox" class="checked">
                                    <span class="span">Exclude Out of Stock</span>
                                </li>
                            </ul>
                        </div>
                        <!-- //arrivals -->
                    </div>
                    <!-- //product right -->
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        jQuery(document).ready(function () {
            jQuery('.select_id').on('change', function () {
                var select_id = jQuery(this).val();

                $.ajax({
                    url: "route('home')",
                    type: "GET",

                    success: function (data) {
                        console.log(data)
                        var districts_html = '<option value="">Vui lòng chọn</option>';
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
