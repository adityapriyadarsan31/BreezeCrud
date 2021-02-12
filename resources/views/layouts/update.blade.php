<span class="option">Update Contact</span>
	<br><br>
	<form action="{{route('update')}}" method="post">
	@csrf
  	<label for="name"><span class="field">Name:</span></label><br>
  	<input type="text" id="name" name="name" value="{{$name}}"><br><br>
  	<label for="email"><span class="field">Email:</span></label><br>
  	<input type="email" id="email" name="email" value="{{$email}}"><br><br>
  	<input type="hidden" name="id" value="{{$id}}">
  	<input type="submit" value="Update">
</form> 
