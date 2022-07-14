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

        <div class="box-body">
            <h1>Shoes & Details</h1>
          <table class="table-bordered">
              <tr>

                  <th>Id</th>
                  <th>Shoes NAme</th>
                  <th>Color</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Action</th>


              </tr>
              @foreach ($users as $i => $user)
              <tr>

                  <td>{{ $user['id'] }}</td>
                  <td>{{ $user['ShoesName'] }}</td>
                  <td>{{ $user['Color'] }}</td>
                  <td>{{ $user['Price'] }}</td>

                  <td> <img src="{{asset('resources/Admin/layouts/images/'. $user->Image) }}" style="width: 70px; height:70px;"></td>

                  <td>
                      <a href=" {{route('Shoes-detail-delete', $user['id'])}}">Delete</a>
                  </td>

              </tr>
          @endforeach

          </table>
      </div>

        </div>
    </div>
</body>
</html>
