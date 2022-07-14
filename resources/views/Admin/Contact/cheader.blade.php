
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
   	<!-- contact section start -->
    <div class="collection_text">Contact Us</div>
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
                                <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message"></textarea>
								@if($errors->has('message'))
								<span class="text-danger">{{ $errors->first('message') }}</span>
								@endif
                            </div>

                        </div>
                        <div class="send_btn">
                         <button class="main_bt" type= "submit">Send</button>
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
