<body class="main-layout">
<!-- header section start -->

<div class="header_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo"><a href="#"><img src="{{asset('resources/Admin/layouts/images/logo.png')}}"></a></div>
            </div>
            <div class="col-sm-9">
                @include('Admin.layout.Nav')
            </div>
        </div>
    </div>


    <div class="banner_section">
        <div class="container-fluid">
            <section class="slide-wrapper">
                <div class="container-fluid">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-2 padding_0">
                                        <p class="mens_taital">Men Shoes</p>
                                        <div class="page_no">0/2</div>
                                        <p class="mens_taital_2">Men Shoes</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="banner_taital">

                                            <h1 class="banner_text"> {{ !empty($home)?$home->Title1:null}} </h1>
                                            <h1 class="mens_text"><strong>{{ !empty($home)?$home->Title2:null}}</strong>
                                            </h1>
                                            <p class="lorem_text">{{ !empty($home)?$home->Description:null }}</p>
                                            <a href="{{ route('Shoes.display') }}">
                                                <button class="buy_bt">Buy Now</button>
                                            </a>
                                            <a href="{{ route('Collectionindex.display') }}">
                                                <button class="more_bt">See More</button>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        @if(!empty($home))
                                            <div class="shoes_img"><img
                                                    src="{{asset('resources/Admin/layouts/images/'. $home->Image) }}">
                                            </div>
                                        @endif

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</div>
<!-- header section end -->
<!-- new collection section start -->
<div class="layout_padding collection_section">
    <div class="container">
        <h1 class="new_text"><strong>{{ !empty($collection)?$collection->title1:null}} </strong></h1>
        <p class="consectetur_text">{{ !empty($collection)?$collection->description:null }}</p>
        <div class="collection_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">
                        <button class="new_bt">New</button>
                        @if(!empty($collection->image1))
                            <div class="shoes-img"><img
                                    src="{{asset('resources/Admin/layouts/images/'. $collection->image1) }}"></div>
                        @endif
                        <p class="sport_text">{{ !empty($collection)?$collection->name1:null}}</p>
                        <div class="dolar_text">Rs <strong
                                style="color: #16f04c;">{{ !empty($collection)?$collection->price1:null}}</strong></div>
                        <div class="star_icon">
                            <ul>
                                <li><a href="#"><img
                                            src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img
                                            src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img
                                            src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img
                                            src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img
                                            src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>

                            </ul>
                        </div>
                    </div>
                    <a href="{{ route('Collectionindex.display') }}">
                        <button class="seemore">See More</button>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="about-img2">
                        @if(!empty($collection->image2))
                            <div class="shoes-img"><img
                                    src="{{asset('resources/Admin/layouts/images/'. $collection->image2) }}"></div>
                        @endif
                        <p class="sport_text">{{ !empty($collection)?$collection->name2:null}}</p>
                        <div class="dolar_text">Rs <strong
                                style="color: #16f04c;">{{ !empty($collection)?$collection->price2:null}}</strong></div>
                        <div class="star_icon">
                            <ul>
                                <li><a href="#"><img
                                            src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img
                                            src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img
                                            src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img
                                            src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img
                                            src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="about_main layout_padding">
    <div class="collection_section">
        <div class="container">
            <h1 class="new_text"><strong>{{ !empty($racingboot)?$racingboot->title:null}}</strong></h1>
            <p class="consectetur_text">{{ !empty($racingboot)?$racingboot->description:null}}</p>
        </div>
    </div>
    <div class="collectipn_section_3 layout_padding">
        <div class="container">
            <div class="racing_shoes">
                <div class="row">
                    <div class="col-md-8">
                        @if(!empty($racingboot))
                        <div class="shoes-img3"><img
                                src="{{asset('resources/Admin/layouts/images/'. $racingboot->image) }}"></div>
                            @endif
                    </div>
                    <div class="col-md-4">
                        <div class="sale_text"><strong>{{ !empty($racingboot)?$racingboot->name:null}}</strong></div>
                        <div class="number_text">&nbspRs <strong
                                style="color: #16f04c;">{{ !empty($racingboot)?$racingboot->price:null}}</strong></div>
                        &nbsp&nbsp&nbsp&nbsp&nbsp<a href="{{ route('Racingboot.display') }}">
                            <button class="seemore">See More</button>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="collection_section layout_padding">
        <div class="container">
            <h1 class="new_text"><strong>New Arrivals Products</strong></h1>
            <p class="consectetur_text">Our new collection has arrived and it’s better than ever. We’ve taken some
                inspiration from the key global trends and put our own stamp on them. By focusing on subtle and chic
                looks, we’ve produced relaxed designs that are as stylish as they are comfortable.</p>
        </div>
    </div>
    <!-- new collection section end -->
    <!-- New Arrivals section start -->

    <div class="container">
        <div class="row" style="margin-bottom:1px;">
            <div class="col-md-12">
                {{-- {{ $user->ShoesName}} --}}
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->

                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        @foreach($shoes->chunk(4) as $i=> $shoe)
                            <div class="carousel-item {{$i==0?'active':null}}">
                                <div class="row">
                                    @foreach($shoe as $item)
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    @if(!empty($item))
                                                        <img
                                                            src="{{asset('resources/Admin/layouts/images/'. $item->Image) }}"
                                                            style="width: 150px; height:150px;">
                                                    @endif

                                                </div>
                                                <div class="thumb-content">
                                                    <h4>{{ !empty($item)?$item->ShoesName:null}}</h4>
                                                    <p class="item-price">
                                                        <span>Rs {{ !empty($item)?$item->Price:null}}</span></p>
                                                    <div class="star-rating">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div>
                                    <a href="{{ route('Shoes.display') }}">
                                        <button class="seemore_bt" style="width: 20%;">See More</button>
                                    </a>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    {{-- <!-- Carousel controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>


    <!-- New Arrivals section end -->
    <!-- contact section start -->
    <div class="layout_padding contact_section">
        <div class="container">
            <h1 class="new_text"><strong>Contact Now</strong></h1>
        </div>

        <div class="container-fluid ram">
            <div class="row">
                <div class="col-md-6">
                    <div class="email_box">
                        <div class="input_main">
                            <div class="container">
                                <form action="{{ route('contact-store') }}" method="POST">
                                    @csrf()
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Name" name="name">
                                        @if($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="email-bt" placeholder="Phone Number" name="number">
                                        @if($errors->has('number'))
                                            <span class="text-danger">{{ $errors->first('number') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="email-bt" placeholder="Email" name="email">
                                        @if($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <textarea class="massage-bt" placeholder="Message" rows="5" id="comment"
                                                  name="message"></textarea>
                                        @if($errors->has('message'))
                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                        @endif
                                    </div>

                            </div>
                            <div class="send_btn">
                                <button class="main_bt" type="submit">Send</button>
                            </div>

                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop_banner">
                        <div class="our_shop">
                            <button class="out_shop_bt">Our Shop</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->


{{-- <div class="container-fluid ram">
    <div class="row">
        <div class="col-md-6">
            <div class="email_box">
            <div class="input_main">
               <div class="container">
                  <form action="/action_page.php">
                    <div class="form-group">
                      <input type="text" class="email-bt" placeholder="Name" name="Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="email-bt" placeholder="Phone Numbar" name="Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="email-bt" placeholder="Email" name="Email">
                    </div>

                    <div class="form-group">
                        <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                    </div>
                  </form>
               </div>
               <div class="send_btn">
                <button class="main_bt">Send</button>
               </div>
            </div>
    </div>
        </div>
        <div class="col-md-6">
            <div class="shop_banner">
                <div class="our_shop">
                    <button class="out_shop_bt">Our Shop</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- contact section end --> --}}
