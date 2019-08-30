@extends('templates.layout')

@section('carousel')

<div id="carouselExampleFade" class="carousel slide carousel-fade   " data-ride="carousel">
    <div class="carousel-inner" role="listbox" style=" width:100% !important; max-height:600px !important;">
        <div class="carousel-item active">
            <img src="https://picsum.photos/1204/600" class="d-block w-100 image-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/1203/600   " class="d-block w-100 image-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/1201/600" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://picsum.photos/1202/600" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
@endsection

@section('latest_news')




<div class="container ">
<div class="d-flex justify-content-center text-center   p-2 ">
    <div class="row ">
        <div class="col-12 mb-3     ">


            <h4 class="display-4">
                Jaunumi
            </h4>
            @foreach ($posts->chunk(4) as $chunk)

            
            <div class="card-deck  pb-3 flex-lg-row flex-sm-column " id="latestNews">



                @foreach ($chunk as $post)


                <div class="card shadow m-3 border-success news_card" class="">


                    <div class="card-img-top "><img src="{{$post->img_url}}" class="  latest_news " alt="">
                    </div>

                    <div class="card-body border " id="cardBody">

                        <h5 class="card-title"> <a href="/posts/{{$post->id}}" class="">{{$post->title}}</a> </h5>
                        

                    </div>
                    <div class="card-footer ">
                        <small class="text-muted">Posted: {{$post->created_at}}</small>
                    </div>
                </div>

                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>









@endsection

@section('content')

@include('partials.messages')



<div class="d-flex justify-content-around     ">
    <div class="row">


        <div class="col-6">
                
                    
                
                        <table class="table table-hover border border-success  text-center">
                                <h4 class="display-4 text-center">Rezultatīvākie spēlētāji</h4>
                         <thead>
                                
                             <tr class="table-success">
                                 <th scope="col">NR.</th>
                                 <th scope="col">Vārds</th>
                                 <th scope="col">Uzvārds</th>
                                 <th scope="col">Spēles</th>
                                 <th scope="col">Punkti</th>
             
                             </tr>
                         </thead>
                         <tbody> 
                             
                                 @foreach ($speletaji as $speletajs)
                                 <tr class="table-secondary">
                                 <td>{{$speletajs->nr}}</td>
                                 <td>{{$speletajs->vards}}</td>
                                 <td>{{$speletajs->uzvards}}</td>
                                 <td>{{$speletajs->speles}}</td>
                                 <td> {{$speletajs->punkti}}</td>
                                </tr>
             
                                 @endforeach
                         
                             
                         </tbody>
                        </table>
                        
                 
        </div>


        <div class="col-6 col-lg-6 ">
          
            <h3 class="display-4 text-center">
                Turnīra tabula
            </h3>
            <div class="mr-3">
            <table class="table table-hover border border-success text-center">
                <thead>
                    <tr class="table-success">
                        <th scope="col">NR.</th>
                        <th scope="col">Komanda</th>
                        <th scope="col">Spēles</th>
                        <th scope="col">Punkti</th>
                        <th scope="col">Uzvaras</th>
                        <th scope="col">Zaudējumi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-secondary">
                        <th scope="row">1</th>
                        <td>FK Tukums</td>
                        <td>21</td>
                        <td>50</td>

                        <td>9</td>
                        <td>5</td>



                    </tr>
                    <tr class="table-success">
                        <th scope="row">2</th>
                        <td>Balvu Sporta Centrs</td>
                        <td>21</td>
                        <td>50</td>
                        <td>9</td>
                        <td>5</td>


                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">3</th>
                        <td>FC New Project</td>
                        <td>21</td>
                        <td>50</td>
                        <td>9</td>
                        <td>5</td>


                    </tr>
                    <tr class="table-success">
                        <th scope="row">4</th>
                        <td>Grobiņas SC</td>
                        <td>21</td>
                        <td>50</td>
                        <td>9</td>
                        <td>5</td>


                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">5 </th>
                        <td>Rēzeknes FA/BJSS</td>
                        <td>21</td>
                        <td>50</td>
                        <td>9</td>
                        <td>5</td>


                    </tr>
                    <tr class="table-success">
                        <th scope="row">6</th>
                        <td>JDGS Alberts</td>
                        <td>21</td>
                        <td>50</td>
                        <td>9</td>
                        <td>5</td>


                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">7</th>
                        <td>FK Auda</td>
                        <td>21</td>
                        <td>50</td>
                        <td>9</td>
                        <td>5</td>


                    </tr>
                    <tr class="table-success">
                        <th scope="row">8</th>
                        <td>FK Super Nova</td>
                        <td>21</td>
                        <td>50</td>
                        <td>9</td>
                        <td>5</td>


                    </tr>
                    <tr class="table-secondary">
                        <th scope="row">9</th>
                        <td>FK Smiltene/BJSS </td>
                        <td>21</td>
                        <td>50</td>
                        <td>9</td>
                        <td>5</td>


                    </tr>
                </tbody>
            </table>
        </div>


        </div>


    </div>

</div>
@endsection








