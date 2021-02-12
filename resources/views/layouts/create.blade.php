	<h3>Create Contact</h3>
	<br>
	<form method="post" action="{{route('create')}}" >
		@csrf
  	<label for="name">Name:</label><br>
  	<input type="text" id="name" name="name" required><br>
  	<label for="email">Email:</label><br>
  	<input type="email" id="email" name="email" required><br><br>
  	<input type="submit" value="Create">
</form> 