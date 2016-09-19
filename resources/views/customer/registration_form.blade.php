<div align="center">
	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	<form action="{{route('customer_registration_post')}}" method="post">
	 {!! csrf_field() !!}
	
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" id="name"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" id="email"></td>
			</tr>
			<tr>
				<td>Skype Id:</td>
				<td><input type="text" name="skypeId" id="skypeId"></td>
			</tr>
			<tr>
				<td>Phone no:</td>
				<td><input type="text" name="phone" id="phone"></td>
			</tr>
		</table>
		<input type="submit" name="submit" id="submit" value="Submit">
	</form>
</div>