<body>

	<div class="menu">
            <div class="logo">


                  <img src="{{asset('resources/Admin/layouts/images/1.png')}}" class="img">
            </div>
		@include('Auth\AdminPanel\Layout\Nav')
	</div>

	<div class="container">
        <h1>Racing Boot Page</h1>
        <div class="Section-Divider">
            <h2>Description Section</h2>
            <form action="{{ Route('Racingboot-store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="Text" class="form-control" id="exampleFormControlInput1" placeholder="Title1" name="title">
                    @if($errors->has('title'))
                    <br><span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div><br>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" name="description" ></textarea>
                    @if($errors->has('description'))
                    <br><span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div><br>
                <div class="form-group">
                     <input type="text" placeholder=" Shoes name" name="name">
                     @if($errors->has('name'))
                     <br><span class="text-danger">{{ $errors->first('name') }}</span>
                     @endif
                </div><br>
                <div class="form-group">
                    <input type="text" placeholder=" Price" name="price">
                    @if($errors->has('price'))
                    <br><span class="text-danger">{{ $errors->first('price') }}</span>
                    @endif
               </div><br>
               <div class="form-group">
                <input type="file" class="email-bt" name="image" size="40">
                @if($errors->has('image'))
                <br><span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
               </div><br>
               <span>
                <input type="submit" class="update-bt" value="Update">
                    </span>

            </form>
        </div>
    </div>


</body>
</html>
