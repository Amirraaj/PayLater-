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

	<!-- New Arrivals section start -->
  <div class="collection_text">Shoes</div>
    <div class="collection_section layout_padding">
    	<div class="container">
    		<h1 class="new_text"><strong>New Arrivals Products</strong></h1>
    	    <p class="consectetur_text">Our new collection has arrived and it’s better than ever. We’ve taken some inspiration from the key global trends and put our own stamp on them. By focusing on subtle and chic looks, we’ve produced relaxed designs that are as stylish as they are comfortable.</p>
    	</div>
    </div>
   <div class="container" >
	<div class="row" style="margin-bottom:60px;">
		<div class="col-md-12">
            {{-- {{ $user->ShoesName}} --}}
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				@foreach($shoes->chunk(4) as $i=> $shoe)
				<div class="carousel-item {{$i==0?'active':null}}">
					<div class="row">
						@foreach($shoe as $item)
						<div class="col-sm-3">
							<div class="thumb-wrapper" >
								<div class="img-box">
									@if(!empty($item))
									<img src="{{asset('resources/Admin/layouts/images/'. $item->Image) }}" style="width: 150px; height:150px;">
									@endif

								</div>
								<div class="thumb-content">
									<h4>{{ !empty($item)?$item->ShoesName:null}}</h4>
									<p class="item-price"> <span>Rs {{ !empty($item)?$item->Price:null}}</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a  class="btn btn-primary"  onclick="popup('{{$item->id}}')" >Buy Now</a>
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>
				@endforeach



			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Product Detail</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
				 <form action="{{ Route('oderdetail-store') }}" id="formid" method="POST" style="align-items: center; margin-left:30%;">
                    @csrf
                     <br>
                     <div class="form-group" >
                         <input type="hidden" id="soesid" name="Shoeid" placeholder="ID" >
                     </div>
                     <div class="form-group">
                         <input type="text" id="soesname"  name="ShoesName" placeholder="Shoes Name" ><br>
                     </div>
                     <div class="form-group">
                        <input type="text" id="soesprice"  name="Price" placeholder="Shoes Price" ><br>
                     </div>
                     <div class="form-group">
                        <input type="text"  name="Size" placeholder=" Size" >
                    </div>
                    <div class="form-group">
                        <input type="text"  name="Number" placeholder=" Number" >

                    </div>
                    <div class="form-group">
                        <input type="text"  name="Address" placeholder=" Address" >

                    </div>
                    <div class="form-group">
                        <input type="text"  name="Email" placeholder=" Email" >
                    </div>
                    <div class="send_btn">
                        <button class="btn btn-primary" type= "submit">Send Oder</button>
                       </div>
                 </form>
                  <div class="modal-body" >

                </div>
            </div>
        </div>
    </div>

    <script>
        function popup(){
            $('#myModal').modal('toggle');
        }
    </script>
