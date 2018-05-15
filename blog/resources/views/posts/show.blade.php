@extends("layouts.master")

@section("content")
    <div class="col-sm-8 blog-main">
        <h1 class="blog-post-title">
            {{ $post->title }}
        </h1>

        {{ $post->body }}

        <!-- Add a comment -->
        <hr>
        <div class="card">
            <div class="card-block"> 
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here" class="form-control" required></textarea> 
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>

                </form>

                @include("layouts.post_errors")

            </div>
        </div>

        <!-- display comments -->
        <div class="comments">
        	<h5> Comments: </h5>
        	<ul class="list-group">
	        	@foreach ($post->latestComments() as $comment)
	        		<li class="list-group-item">
	        			<strong>
	        				{{ $comment->created_at->diffForHumans()}} : &nbsp;
	        			</strong>

	        			{{ $comment->body }}
	        		</li>
	        	@endforeach
        	</ul>
        </div>
                

    </div><!-- /.blog-main -->
@endsection