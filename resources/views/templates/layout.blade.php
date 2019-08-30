<!doctype html>
<html lang="en">

<head>
    <title>FKTukums2000</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
 
    @yield('stili')
    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<header>


        @include('partials.menu')


    </header>

<body>
   
   
    <div class="container-fluid  " style="padding:0 !important;">
        
        <div class="row-fluid">
                
            @yield('carousel')
        </div>

    </div>
   
    <div class="d-flex lightgreen-bg" >
            @yield('latest_news')
    </div>
    
    

    
   

    

   

    
        <div class="row ">
               
            <div class="col-12 pb-3 lightgreen-bg ">
                    @yield('content')
            </div>
            
            

        </div>
    
</div>




    <div class="container-fluid lightgreen-bg d-none d-xl-block d-lg-block">

            <div class="row  pb-3">
    
                <div class="  col-12 mb-3 text-center">
                    <h3 class="text-center display-4">Video</h3>
                    <iframe width="350" class="video" height="315" class="mr-1"
                        src="https://www.youtube.com/embed/JgpYgR8CwzQ" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <iframe width="350" class="video" height="315" src="https://www.youtube.com/embed/imOLzR3Jego"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        class="mr-1" allowfullscreen></iframe>
                    <iframe width="350" class="video" height="315" src="https://www.youtube.com/embed/2aGXCwUcqJE"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
    </div>


   










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    
 
 
    <!-- Scripts -->
   

    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/db50904272.js"></script>
    <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('ckeditor');

    </script>

      @yield('skripti')
</body>

<footer>
        <div class="container-fluid lightgreen-bg ">
            <div class="container">
                <div class="row text-center p-3">

                        <div class="col-12 mb-3 ">
                                <h3 class="display-4 pb-1">Partneri</h3>
                        </div>
                        <div class="col-12 d-flex justify-content-center ">
                                
                                <ul class="list-group list-group-horizontal">
                                    <li class="list-inline-item ">
                                        <a href="https://www.tukums.lv/lv/"> <img src="/img/dome.png" alt="Tukuma Novada Dome"
                                                class="w-25 "></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="http://www.mezadarzatehnika.lv/"> <img src="/img/herkules.png" alt="Herkuless"
                                                class="w-50"></a>
                                    </li>
                                   
                                    <li class="list-inline-item">
                                        <a href="http://www.tukumasportaskola.lv/"> <img src="/img/sporta-skola.png"
                                                alt="Tukuma Sporta Skola" class="w-50"></a>
                                    </li>
                                    
                
                                </ul>
                
                            </div>
                    
                </div>
               

            </div>



        </div>
        <div class=" d-flex justify-content-end bg-secondary ">
                <div class="row ">
                    <div class="col-12">
                            <p class="p-3 text-white"> Created by R. Zeilis &copy;</p>
                    </div>
                        
                    </div>
        </div>

    </footer>

</html>
