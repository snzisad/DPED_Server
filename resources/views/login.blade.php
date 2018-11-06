@extends('model.model')

@section('title',"DPED Moblie Application")

@section('body')

	<form method="POST" action="{{ route('login') }}">
	{{ csrf_field() }}
	<div class="logincontainer">
		<div class="section"> 
			<div class="block">
				{!!Html::image('images/sir.png','Education Specialist',array('class'=>'icon','height'=>'100px','width'=>'100px'))!!}
			</div>
			<div class="block">
				@if ($errors->any())
        			<div class="message"><font color="red">Sorry, You've typped a wrong secret number.</font></div>
				@else
					<div class="message">Dear Specialist, Please enter your secret number.</div>
				@endif
			</div>
		</div>
		<input type="hidden" name="email" value="snzisad@gmail.com">
		{!! Form::password('password',array('class'=>'edittext','id'=>'	password','required autofocus',"placeholder"=>"Enter Secret Number"))!!}

		{!! Form::submit('Login',$attributes=array('class'=>'loginbutton')) !!}
	</div>
	</form>
@endsection