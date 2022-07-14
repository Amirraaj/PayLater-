<body class="main-layout">
	<!-- header section start -->


    <div class="header_section header_main">
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
	</div>


 <!-- new collection section start -->
 <div class="collection_text">Collection</div>
 <div class="layout_padding collection_section">
     <div class="container">

         <h1 class="new_text"><strong>{{ !empty($collection)?$collection->title1:null}} </strong></h1>
         <p class="consectetur_text">{{ !empty($collection)?$collection->description:null }}</p>
         <div class="collection_section_2">
             <div class="row">
                 <div class="col-md-6">
                     <div class="about-img">
                         <button class="new_bt">New</button>
                         <div class="shoes-img"><img src="{{asset('resources/Admin/layouts/images/'. $collection->image1) }}"></div>
                         <p class="sport_text">{{ !empty($collection)?$collection->name1:null}}</p>
                         <div class="dolar_text">Rs <strong style="color: #16f04c;">{{ !empty($collection)?$collection->price1:null}}</strong> </div>
                         <div class="star_icon">
                             <ul>
                                <li><a href="#"><img src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                             </ul>
                         </div>
                     </div>
                     <button class="seemore_bt">Buy Now</button>
                 </div>
                 <div class="col-md-6">
                     <div class="about-img2">
                        <div class="shoes-img"><img src="{{asset('resources/Admin/layouts/images/'. $collection->image2) }}"></div>
                        <p class="sport_text">{{ !empty($collection)?$collection->name2:null}}</p>
                        <div class="dolar_text">Rs <strong style="color: #16f04c;">{{ !empty($collection)?$collection->price2:null}}</strong> </div>
                        <div class="star_icon">
                             <ul>
                                <li><a href="#"><img src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                                <li><a href="#"><img src=" {{asset('resources/Admin/layouts/images/star-icon.png')}}"></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- new collection section end -->
