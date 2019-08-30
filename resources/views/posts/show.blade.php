@extends('templates.layout')


@section('content')


    <div class="d-flex justify-content-center m-3">
        <div class="row">
            <div class="col-9 ">
                
                    
                    <div class="">
                            <img src="{{$post->img_url}}" class="w-75 shadow " alt="">
                    </div>
                
                 
                 <blockquote class="blockquote mt-5 w-50 ">
                        <h4 class="">{{$post->title}}</h4>
                        <p class="lead  text-wrap ">
                                {{$post->body}}
                         </p>
                        <footer class="blockquote-footer">{{$post->created_at}}</footer>
                    </blockquote>

                   <a href="/posts" class="btn btn-outline-success">Atpakal</a>
               
                
            </div>
            <div class="col-3">
                <h4></h4>
                <div class="card" style="min-width:300px;">
                <div class="card-header">Jaunākās ziņās</div>
                <ul class="list-group list-group-flush mt-2" >
                    @foreach ($posts as $item)
                    <li class="list-group-item">
                    <a href="/posts/{{$item->id }}">{{$item->title}}</a> 
                    </li>
                        
                    @endforeach
                   
                </ul>
            </div>
            </div>
            
        
        </div>

            
    </div>
        

 
@endsection