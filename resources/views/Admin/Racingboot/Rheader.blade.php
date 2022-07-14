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
  <div class="collection_text">Racing Boots</div>
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
    					<div class="shoes-img3"><img src="{{asset('resources/Admin/layouts/images/'. $racingboot->image) }}"></div>
    				</div>
    				<div class="col-md-4">
                        <div class="sale_text"><strong>{{ !empty($racingboot)?$racingboot->name:null}}</strong></div>
                        <div class="number_text">&nbspRs <strong style="color: #16f04c;">{{ !empty($racingboot)?$racingboot->price:null}}</strong> </div>
                    	&nbsp&nbsp&nbsp&nbsp&nbsp<button class="seemore">Buy Now</button>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    </div>
	<!-- new collection section end -->
