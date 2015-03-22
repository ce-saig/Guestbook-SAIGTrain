<!DOCTYPE html>
<html>
<head>
	<title>HOME USER</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class = "container" >
	<div class = "row">
		<div class="col-md-8 col-md-offset-2 well">
			<div class = "col-md-6">
				<img class="img-responsive" src="http://placehold.it/250x250">
			</div>
			<div class = "col-md-6">
				<table class = "table">
					<tr>
						<td>name</td><td>{{ $name }}</td>
					</tr>
					<tr>
						<td>age</td><td>{{ $age }}</td>
					</tr>
					<tr>
						<td>gender</td><td>{{ $gender }}</td>
					</tr>
				</table>
			</div>
		</div >

		{{--  Comment Form  --}}

		<div class = "col-md-8 col-md-offset-2 panel" >
			<h1> Comment here </h1>
			<form class = "panel"> 
					<table class = "table" method = "POST"  >
						<tr>
							<td>name</td><td><input type = "text" class = "form-control" name = "user_name" /></td>
						</tr>
						<tr>
							<td>comment</td><td><input type = "textarea" class = "form-control" name = "user_name" /></td>
						</tr>
					</table>
					<input class = "text-left btn btn-success" type = "submit" />
				{{-- 
				{{ Form::open(array('url' => '' , 'class'=>'form-control' )) }}
					{{ Form::text('user_name', $value = null , array('class' => 'form-control', 'required' => 'required') )}}
					{{ Form::text('comment', $value =  null , array( 'placeholder' => 'comment here' , 'class' => 'form-control', 'required' => 'required') )}}
					{{ Form::submit('ยืนยัน' , array('class' => 'btn btn-success') ) }}
				{{ From::close() }}
					--}}
			</form>
		</div>
		{{-- Comment Show  --}}
		<div class = "col-md-8 col-md-offset-2">
			มีคนบอกคุณว่า ... <br/>
		</div>
		
		<div class = "col-md-8 col-md-offset-2">
		  @if($isComment == true)
				@foreach($comments as $comment)
					<div class = "panel" >
						<h4>{{ $comment->name }}</h4> <br/>
						{{ $comment->text }}
					</div>
				@endforeach
		  @else
		  		<div class = "panel" >
		  		ไม่มีคอมเม้นเลยล่ะ :)
		  		</div>	
		  @endif
		</div>
	</div>
  </div>
</body>
</html>