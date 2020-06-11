@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Board</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($posts as $post)
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <h5 class="card-title">
                                  カテゴリー:{{ $post->category->category_name }}
                            </h5>
                            <h5 class="card-title">
                                  投稿者:{{ $post->user->name }}
                            </h5>

                            <p class="card-text">{{ $post->content }}</p>
                            <a href="{{ route('posts.show',$post->id) }}" class="btn btn-primary">詳細</a>
                          </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
