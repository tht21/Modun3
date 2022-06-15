@extends('frontEnd.layouts.app')

@section('content')
<div class="navbar-inner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="agileits-navi_search">
                <form action="#" method="post">
                    <select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
                        <option value="">All Categories</option>
                        <option value="Televisions">Televisions</option>
                        <option value="Headphones">Headphones</option>
                        <option value="Computers">Computers</option>
                        <option value="Appliances">Appliances</option>
                        <option value="Mobiles">Mobiles</option>
                        <option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
                        <option value="iPad & Tablets">iPad & Tablets</option>
                        <option value="Cameras & Camcorders">Cameras & Camcorders</option>
                        <option value="Home Audio & Theater">Home Audio & Theater</option>
                    </select>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center mr-xl-5">
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="index.html">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="product.html">Product 1</a>
                            <a class="dropdown-item" href="product2.html">Product 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="single.html">Single Product 1</a>
                            <a class="dropdown-item" href="single2.html">Single Product 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="checkout.html">Checkout Page</a>
                            <a class="dropdown-item" href="payment.html">Payment Page</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->

<!-- banner-2 -->
<div class="page-head_agile_info_w3l">

</div>
<!-- //banner-2 -->
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.html">Home</a>
                    <i>|</i>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

<!-- contact -->
<div class="contact py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>C</span>ontact
            <span>U</span>s
        </h3>
        <!-- //tittle heading -->
        <div class="row contact-grids agile-1 mb-5">
            <div class="col-sm-4 contact-grid agileinfo-6 mt-sm-0 mt-2">
                <div class="contact-grid1 text-center">
                    <div class="con-ic">
                        <i class="fas fa-map-marker-alt rounded-circle"></i>
                    </div>
                    <h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Address</h4>
                    <p>1PO Box 8568954 Melbourne
                        <label>Australia.</label>
                    </p>
                </div>
            </div>
            <div class="col-sm-4 contact-grid agileinfo-6 my-sm-0 my-4">
                <div class="contact-grid1 text-center">
                    <div class="con-ic">
                        <i class="fas fa-phone rounded-circle"></i>
                    </div>
                    <h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Call Us</h4>
                    <p>+(0121) 121 121
                        <label>+(0121) 121 122</label>
                    </p>
                </div>
            </div>
            <div class="col-sm-4 contact-grid agileinfo-6">
                <div class="contact-grid1 text-center">
                    <div class="con-ic">
                        <i class="fas fa-envelope-open rounded-circle"></i>
                    </div>
                    <h4 class="font-weight-bold mt-sm-4 mt-3 mb-3">Email</h4>
                    <p>
                        <a href="mailto:info@example.com">info@example1.com</a>
                        <label>
                            <a href="mailto:info@example.com">info@example2.com</a>
                        </label>
                    </p>
                </div>
            </div>
        </div>
        <!-- form -->
        <form action="#" method="post">
            <div class="contact-grids1 w3agile-6">
                <div class="row">
                    <div class="col-md-6 col-sm-6 contact-form1 form-group">
                        <label class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="Name" placeholder="" required="">
                    </div>
                    <div class="col-md-6 col-sm-6 contact-form1 form-group">
                        <label class="col-form-label">E-mail</label>
                        <input type="email" class="form-control" name="Email" placeholder="" required="">
                    </div>
                </div>
                <div class="contact-me animated wow slideInUp form-group">
                    <label class="col-form-label">Message</label>
                    <textarea name="Message" class="form-control" placeholder="" required=""> </textarea>
                </div>
                <div class="contact-form">
                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>
        <!-- //form -->
    </div>
</div>
<!-- //contact -->

<!-- map -->
<div class="map mt-sm-0 mt-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805196.5077734194!2d144.49270863101745!3d-37.97015423820711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sin!4v1474020956974"
            allowfullscreen></iframe>
</div>
<!-- //map -->

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
