<!DOCTYPE html>
<html>
<head>
	<title> This is a blade</title>
</head>
<body>
	The values is  {{ $values }} 
	{{--  comment --}}

	{{-- This is looping that you can't do like this in HTML --}}
	@foreach($numbers as $number)
		number is {{ $number }} <br/>
	@endforeach 

	check is 
	@if($check == true)
		<span style = "color:green;">TRUE</span>
	@else
		<span style = "color:red;">FALSE</span>
	@endif

</body>
</html>