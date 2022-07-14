
<body>

	<div class="menu">
            <div class="logo">


                  <img src="{{asset('resources/Admin/layouts/images/1.png')}}" class="img">
            </div>
		@include('Auth\AdminPanel\Layout\Nav')
	</div>

	<div class="container">
		  <!-- /.box-header -->



          <div class="box-body">
              <h1>Users Feedback</h1>
            <table class="table-bordered">
                <tr>

                    <th>Name</th>
                    <th>Number</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Delete</th>

                </tr>
                @foreach ($users as $i => $user)
                    <tr>

                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['number'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['message'] }}</td>

                        <td>
                            <a href="{{route('contact.delete', $user['id'])}}">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

	</div>

</body>
</html>
