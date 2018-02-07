<!-- @extends('layout.layouts')

<!–– HEAD ––> 
@section('title','Omkarananda Ashram')

 <!–– BODY ––> 
@section('content')
	<div class="container">
		<div class="row">
			<h4> Fullname: </h4> 
		</div>
		<div class="row">
			<div class="container">
				{!! Form::open(['url' => '/submitted','method' => 'POST', 'class' => 'form-horizontal']) !!}
				{!! Form::token() !!}
				
				<div class="row">
					<div class="col-sm-2 center-block">
						{!! Form::label('text','insert your text',['class' => 'control-label pull-right']) !!}
					</div>
					<div class="col-sm-4 center-block">
						{!! Form::text('text','',['class' => 'form-control pull-left']) !!}
					</div>
					<div class="col-sm-6 center-block">						
					</div>
				</div>
				<div class="row">
					&nbsp;
				</div>

				<div class="row">
					<div class="col-sm-6 center-block">
						{!! Form::submit('Submit the input',['id' => 'btn-sbmt','class' => 'btn btn-info pull-right']) !!}
					</div>
					<div class="col-sm-6 center-block">						
					</div>
				</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection

<!–– SCRIPT ––> 
@push('scripts')
	{!! Html::script('js/javascript.js') !!}
@endpush -->


@extends('main')

@section("title","| Contact")


@section("stylesheets")

@endsection

@section('content')

		<div class="row">
			<div class="col-md-12">
			  <h1>Contact</h1>
			  <hr>
			  <form>
			  	<div class="form-group">
			  		<label name="email">Email: </label>
			  		<input id="email" name="email" class="form-control">
			  	</div>

			  	<div class="form-group">
			  		<label name="subject">Sublject: </label>
			  		<input id="subject" name="subject" class="form-control">
			  	</div>

			  	<div class="form-group">
			  		<label name="message">Message: </label>
			  		<textarea id="message" name="message" class="form-control"> type ypur message </textarea>
			  	</div>

			  	<input type="submit" value="Send message" class="btn btn-success">

			  </form>			  
		</div>
@endsection