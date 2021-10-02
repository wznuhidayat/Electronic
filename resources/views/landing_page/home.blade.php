@extends('template_home')

@section('content')
<section class="home">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-7">
                <div class="hero-text">
                    <h1>Custom jumbotron</h1>
                    <p>Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                    <button class="btn shadow-sm btn-md " type="button">Go now</button>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="hero-img">
                    <img src="{{ asset('images/landingpage/hero.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feature">
    <div class="container">
        <h2 class="text-center">Feature</h2>
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="box-feature shadow-lg">
                    <h3>Best Price</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, eveniet culpa, explicabo ut necessitatibus deserunt.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="box-feature shadow-lg">
                    <h3>Support E-Commerce</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint itaque voluptate vel provident iusto ab dolorum expedita ex,</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-6 col-md-6">
                <div class="box-feature shadow-lg">
                    <h3>Special Product</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="box-feature shadow-lg">
                    <h3>Negotiation</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo at aliquid hic sit repellat deserunt illo sed autem adipisci. </p>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="location">
    <img class="hero-bg" src="{{ asset('images/landingpage/background-1.jpg') }}" alt="">
    <div class="container">
        <h2 class="text-center">Location</h2>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="mapouter">
                    <div class="gmap_canvas shadow-lg"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123 movies</a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 600px;
                            }
                        </style><a href="https://www.embedgooglemap.net">google maps embed zoom</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                                width: 600px;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-8">
                <h3>Nama Seller</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis hic nemo in modi, recusandae qui quibusdam soluta tempora eaque nisi itaque. Est eos animi sit error at impedit assumenda ea.</p>
            </div>
        </div>
    </div>
</section>
<section class="contact">
    <div class="container">
        <h2 class="text-center">Contact</h2>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Your name</label>
                    <input type="text" class="form-control rounded-0" placeholder="Your name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control rounded-0" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
                <div class="text-center contact-btn mt-5">
                    <button class="btn btn-md rounded-0" type="button">Contact</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <h4>Sales</h4>
                <li>Wisnu Hidayat</li>
                <li>Wisnu Hidayat</li>
                <li>Wisnu Hidayat</li>
                <li>Wisnu Hidayat</li>
            </div>
            <div class="col-sm-3 col-md-3">
                <h4>Sales</h4>
                <li>Wisnu Hidayat</li>
                <li>Wisnu Hidayat</li>
                <li>Wisnu Hidayat</li>
                <li>Wisnu Hidayat</li>
            </div>
            <div class="col-sm-3 col-md-3">
                <h4>Sales</h4>
                <li>Wisnu Hidayat</li>
                <li>Wisnu Hidayat</li>
                <li>Wisnu Hidayat</li>
                <li>Wisnu Hidayat</li>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="mb-3">
                    <h4>Subscribe </h4>
                    <p>Subscribe for get update lasted</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control rounded-0" placeholder="name@example.com" aria-label="name@example.com" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary rounded-0 " type="button">Sub</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer>
        <div class="text-center">2021 @ Muhammad Wisnu Hidayat</div>
    </footer>
</section>

@endsection