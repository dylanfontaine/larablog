@extends ('layouts.page')

@section  ('content')
    <div class="blog-post">
        <h2 class="blog-post-title">
            {{ $post->title }}
        </h2>
        <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }}</p>

        <p>
            {{$post->body}}
        </p>
    </div><!-- /.blog-post -->
@endsection