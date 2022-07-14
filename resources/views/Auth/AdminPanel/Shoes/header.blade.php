<body>

	<div class="menu">
            <div class="logo">


                  <img src="{{asset('resources/Admin/layouts/images/1.png')}}" class="img">
            </div>
		@include('Auth\AdminPanel\Layout\Nav')
	</div>
    <div class="container">
        <!-- /.box-header -->
        <h1>Shoes Section</h1>
        <div class="ShoeNav">

            <a href="{{ Route('Shoes-Detail-Display') }}" ><button class="Btn-Nav">Show Detail</button></a>
            <a href="{{ Route('Shoes-Admin-Display') }}" ><button class="Btn-Nav">Add Detail</button></a>



        </div>
        <div>
            <div>
                <form action="{{ Route('Shoes-store') }}" method="POST">
                    @csrf()
                    <div class="form-group">
                        <input type="Text" class="form-control" id="exampleFormControlInput1" placeholder="ID" name="id">
                        @if($errors->has('id'))
                        <br><span class="text-danger">{{ $errors->first('id') }}</span>
                      @endif
                    </div><br>
                    <div class="form-group">
                        <input type="Text" class="form-control" id="exampleFormControlInput1" placeholder="ShoesName" name="ShoesName">
                        @if($errors->has('ShoesName'))
                        <br><span class="text-danger">{{ $errors->first('ShoesName') }}</span>
                      @endif
                    </div><br>
                    <div class="form-group">
                        <input type="Text" class="form-control" id="exampleFormControlInput1" placeholder="Color" name="Color">
                        @if($errors->has('Color'))
                        <br><span class="text-danger">{{ $errors->first('Color') }}</span>
                      @endif
                    </div><br>
                    <div class="form-group">
                        <input type="Text" class="form-control" id="exampleFormControlInput1" placeholder="Price" name="Price">
                        @if($errors->has('Price'))
                        <br><span class="text-danger">{{ $errors->first('Price') }}</span>
                      @endif
                    </div><br>
                    <div class="form-group">
                        <input type="file" class="email-bt" name="Image" size="40">
                        @if($errors->has('Image'))
                        <br><span class="text-danger">{{ $errors->first('Image') }}</span>
                      @endif
                    </div><br><br>
                    <span>
                        <input type="submit" class="update-bt" value="Add">
                            </span>

                  </form>

            </div>

        </div>


        </div>
    </div>
</body>
</html>
