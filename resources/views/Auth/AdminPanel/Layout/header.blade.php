<body>

	<div class="menu">
            <div class="logo">


                  <img src="{{asset('resources/Admin/layouts/images/1.png')}}" class="img">
            </div>
		@include('Auth\AdminPanel\Layout\Nav')
	</div>

	<div class="container">
        <h1>Home Page</h1>
        <div class="Section-Divider">
            <h2>First Section</h2>
            <form action="{{ route('Homefirst-store') }}" method="POST">
                @csrf()
                <div class="form-group">

                    <input type="Text" class="form-control" id="exampleFormControlInput1" placeholder="Title1" name="Title1">
                        @if($errors->has('Title1'))
                        <br><span class="text-danger">{{ $errors->first('Title1') }}</span>
                    @endif

                    </div><br>
                    <div class="form-group">
                        <input type="Text" class="form-control" id="exampleFormControlInput1" placeholder="Title2" name="Title2">
                            @if($errors->has('Title2'))
                        <br><span class="text-danger">{{ $errors->first('Title2') }}</span>
                        @endif

                    </div><br>

                    <div class="form-group">

                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" name="Description" ></textarea>
                        @if($errors->has('Description'))
                        <br> <span class="text-danger">{{ $errors->first('Description') }}</span>
                        @endif
                        </span>
                    </div><br>

                    <span>
                        <input type="file" class="email-bt" name="Image" size="40">
                        @if($errors->has('Image'))
                        <br><span class="text-danger">{{ $errors->first('Image') }}</span>
                    @endif
                        </span>
                    </span><br><br>
                    <span>
                <input type="submit" class="update-bt" value="Update">
                    </span>


            </form>
        </div><br>
        <div class="Section-Divider">
            <h2>Second Section</h2>

        </div>
	</div>


</body>
</html>
