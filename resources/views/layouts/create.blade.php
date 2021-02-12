	<span class="option">Create Contact</span>
	<br><br>
	<form method="post" action="{{route('create')}}" >
	@csrf
  	<label for="name"><span class="field">Name:</span></label><br>
  	<input type="text" id="name" name="name" required><br><br>
  	<label for="email"><span class="field">Email:</span></label><br>
  	<input type="email" id="email" name="email" required><br><br>
  	<input type="submit" value="Create">
</form> 