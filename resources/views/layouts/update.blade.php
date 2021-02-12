<h3>Update Contact</h3>
	<br>
	<form action="{{route('update')}}" method="post">
		@csrf
  	<label for="name">Name:</label><br>
  	<input type="text" id="name" name="name" value="{{$name}}"><br>
  	<label for="email">Email:</label><br>
  	<input type="email" id="email" name="email" value="{{$email}}"><br><br>
  	<input type="submit" value="Update">
</form> 
