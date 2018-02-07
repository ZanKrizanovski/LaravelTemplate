@extends('main')

@section("title","| Homepage")


@section("stylesheets")

@endsection

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h1 class="display-4">Omkarananda Ashram</h1>
				<p class="lead">Thank you for visiting!</p>							
				<p>
				<a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a>
				</p>
			</div>		
		</div>
	</div>


	<div class="row">
		<div class="col-md-8">

			@foreach($posts as $post)


				<div class="post">
					<h3>{{ $post->title }}</h3>
					<p>	{{ substr($post->body,0,300) }} {{ strlen($post->body) > 300 ? "..." : "" }}</p>
					<a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">read more</a>
				</div>

				<hr>
				

			@endforeach

		</div>
	
	

		<div class="col-md-3 col-md-offset-1">
			<h2>
				Side bar
			</h2>

		</div>
	</div>
@endsection

@section("scripts")
<script src="js.scripts.js"></script>		
@endsection