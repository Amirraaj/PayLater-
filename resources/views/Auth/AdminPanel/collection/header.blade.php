<body>

	<div class="menu">
            <div class="logo">


                  <img src="{{asset('resources/Admin/layouts/images/1.png')}}" class="img">
            </div>
		@include('Auth\AdminPanel\Layout\Nav')
	</div>

	<div class="container">
        <h1>Collection Page</h1>
        <div class="Section-Divider">
            <h2>Description Section</h2>
            <form action="{{ Route('Collection-store') }}" method="POST">
                @csrf()
                <div class="form-group">
                    <input type="Text" class="form-control" id="exampleFormControlInput1" placeholder="Title1" name="title1">
                        @if($errors->has('title1'))
                        <br><span class="text-danger">{{ $errors->first('title1') }}</span>
                        @endif
                </div><br>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" name="description" ></textarea>
                    @if($errors->has('description'))
                    <br><span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div><br>
                <div class="Section-Divider">
                    <h2> Shoes Section</h2>
                      <div style="padding:5%;">
                            <div>

                                  <input type="text" placeholder="Shoes name" name="name1">
                                  @if($errors->has('name1'))
                                  <br><span class="text-danger">{{ $errors->first('name1') }}</span><br>
                                  @endif

                                  <input type="text" placeholder="price" name="price1">
                                  @if($errors->has('price1'))
                                  <br><span class="text-danger">{{ $errors->first('price1') }}</span><br>
                                  @endif

                                  <input type="file" class="email-bt" name="image1" size="40">
                                  @if($errors->has('image1'))
                                  <br><span class="text-danger">{{ $errors->first('image1') }}</span><br>
                                  @endif

                            </div>
                            <div>

                                <input type="text" placeholder="Shoes name" name="name2">
                                @if($errors->has('name2'))
                                <br><span class="text-danger">{{ $errors->first('name2') }}</span><br>
                                @endif

                                <input type="text" placeholder="price" name="price2">
                                @if($errors->has('price2'))
                                <br><span class="text-danger">{{ $errors->first('price2') }}</span><br>
                                @endif

                                <input type="file" class="email-bt" name="image2" size="40">
                                @if($errors->has('image2'))
                                <br><span class="text-danger">{{ $errors->first('image2') }}</span><br>
                                @endif

                            </div>
                        </div>
                    </div>
                    <span><br><br>
                        <input type="submit" class="update-bt" value="Update">
                            </span>

                </div>



            </form>
        </div><br>

        </div>
	</div>


</body>
</html>
