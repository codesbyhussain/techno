<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TechnoSearch</title>
        @viteReactRefresh
        @vite('resources/css/app.css')

        
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body id='page'>

    @include('navbar')
    @yield('navbar')

<div class="AllClubs">
    
<h1 class=" text-2xl text-lg font-bold text-gray-700 px-40 py-5">
        Clubs
      </h1>
    
      <div class="row px-40 mx-auto">

<?php 
foreach ($clubs as $club) {?>
  <div class="card my-2 mx-2" style="width: 15rem;">
  <a href="/detail/clubs/{{$club->id}}">
  <img class="card-img-top" src="{{$club->image}}" alt="Card image cap" style="height:200px;">
  <div class="card-body">
    <h5 class="card-title">{{$club->club_name}}</h5>
</a>
    <p class="card-text">{{$club->description}}</p>
    <!-- <strong>Price: KD {{$club->description}}</strong> 
    <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{$club->description}}>
                    <button> Add to cart </button>
</form>-->
  </div>
</div>

<?php  } ?>
</div>
</div>

</div>

@include('footer')
    @yield('footer')

<!--JS SCRIPTS-->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

<style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;
* {
  margin: 0%;
  padding: 0%;
  box-sizing: border-box;
}
    </style>
</html>
