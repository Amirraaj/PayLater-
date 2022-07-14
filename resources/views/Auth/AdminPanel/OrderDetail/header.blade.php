<body>

	<div class="menu">
            <div class="logo">


                  <img src="{{asset('resources/Admin/layouts/images/1.png')}}" class="img">
            </div>
		@include('Auth\AdminPanel\Layout\Nav')
	</div>

	<div class="container">
        <h1>Order details</h1>
        <div class="Section-Divider">
            <h1> Oder List</h1>

              <table class="table-bordered">
                  <tr>

                      <th>Shoe Id</th>
                      <th>Shoes Name</th>
                      <th>Price</th>
                      <th>Size</th>
                      <th>Number</th>
                      <th>Address</th>
                      <th>Email</th>




                  </tr>
                  @foreach ($users as $i => $user)
                      <tr>

                          <td>{{ $user['Shoeid'] }}</td>
                          <td>{{ $user['ShoesName'] }}</td>
                          <td>{{ $user['Price'] }}</td>
                          <td>{{ $user['Size'] }}</td>
                          <td>{{ $user['Number'] }}</td>
                          <td>{{ $user['Address'] }}</td>
                          <td>{{ $user['Email'] }}</td>


                      </tr>
                  @endforeach
              </table>
          </div>

      </div>

  </body>
  </html>

