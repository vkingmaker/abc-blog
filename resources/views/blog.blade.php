@extends('layouts.app')

@section('content')
    <div class="container d-flex">
        <div class="col-md-8 mt-5">
            @if ($blogPost->count() > 0)
                <h2 class="text-muted">Latest Blogs</h2>
                @foreach ($blogPost as $post)
                    <div class="card my-3">
                        <div class="card-header d-flex">
                            <div class="mr-auto">
                                <span class="lead">{{ $post->title }}</span>
                            </div>
                            <div class="d-inline-flex align-items-center">
                                @can('create', \App\Blog::class)
                                <form method="GET" action="/blog/{{$post->id}}" class="mx-2">
                                    <button type="submit" class="border-0 bg-muted">
                                        <i class="fa fa-pen text-primary cursor-pointer btn" type="submit"></i>
                                    </button>

                                </form>
                                <form action="/blog/{{$post->id}}" method="POST" class="mx-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-muted">
                                        <i class="fa fa-trash text-danger cursor-pointer"></i>
                                    </button>
                                </form>
                                @endcan
                                <span>Posted {{ $post->updated_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>{{ $post->body }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">No comments Yet!!</p>
            @endif
        </div>

        @if (\Gate::allows('create', \App\Blog::class))
            @if(! isset($blogToUpdate))
                @include('layouts.create-blog-form')
            @else
                @include('layouts.update-blog-form')
            @endif
        @else
            <p class="text-muted text-center mt-4">You must be a logged in Admin to be able to post a blog</p>
        @endif
    </div>
@endsection
