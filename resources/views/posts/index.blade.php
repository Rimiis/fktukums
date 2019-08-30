@extends('templates.layout')
@section('content')
<h3 class="display-4 text-center"> Jaunumi</h3>
@if(count($posts)>0)

 
        
        @foreach ($posts->chunk(4) as $chunk)
        
        
            <div class="card-deck text-center justify-content-center"  id="News">
            @foreach ($chunk as $post)
            <div class="card border-success shadow m-1 news_card" >
                    <img class="card-img-top image-fluid latest_news p-1"  src="{{$post->img_url}}" alt="">
                      <div class="card-body">
                      <h4 class="card-title"> <a href="/posts/{{$post->id}}">{{$post->title}}</a> </h4>
                                      
                        
                      </div>
                      <div class="card-footer">
                            <small class="text-muted">Posted: {{$post->created_at}}</small>
                    </div>
                    </div>
            @endforeach
            
            </div>
            @endforeach
      
        
    @else
    <p>No posts found</p>

    @endif

    @endsection
