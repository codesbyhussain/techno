


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TechnoSearch</title>

        @viteReactRefresh
        <!-- @vite('resources/js/components/clubs/Clubs.jsx')
        @vite('resources/js/components/clubs/Club.jsx')
        @vite('resources/js/components/evnts/Events.jsx') -->
        @vite('resources/js/components/navbar/Navbar.jsx')
        <!-- @vite('resources/js/components/home/Home.jsx') -->
        @vite('resources/js/components/footer/Footer.jsx')
        @vite('resources/css/app.css')

        
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body id='page'>

    @include('navbar')
    @yield('navbar')


<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6">
                <img src=<?="/".$event->image?> class="detailimg">
            </div>
            <div class="col-sm-6">
                <strong>Name:</strong> {{$event->club_name}}
</br>
                <strong>Description:</strong> {{$event->description}}
</br>
                </br></br>
                <form action="/add_to_cart"method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{$event['id']}}>
                    <button> Enroll </button>
</form>
                </br></br>
                <a href="/">
                Go back            
</a>
            </div>
        </div>
    </div>

</body>


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


