@section('navbar')
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

<body>

    <!-- NavBar -->
    <div id='nav'>

<nav class="w-full text-lg  bg-white shadow">
      
      <div class="justify-between px-4 mx-auto lg:max-w-7xl md:items-center md:flex md:px-8">
        <div>
          <div class="flex items-center justify-between py-3 md:py-5 md:block">
            <a href="/">
              <img src="/images/manit.jpg" style="height:50px;" class="text-2xl font-bold text-lg text-gray-700"/>
            </a>
            <div class="md:hidden">
              <button
                class="p-2 text-gray-700 rounded-md outline-none focus:border-gray-400 focus:border"
                onClick={() => setNavbar(!navbar)}
              >
                {navbar ? (
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6 text-gray-700"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fillRule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clipRule="evenodd"
                    />
                  </svg>
                ) : (
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6 text-gray-700"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    strokeWidth={2}
                  >
                    <path
                      strokeLinecap="round"
                      strokeLinejoin="round"
                      d="M4 6h16M4 12h16M4 18h16"
                    />
                  </svg>
                )}
              </button>
            </div>
          </div>
        </div>
        <div>
          <div
            class={`flex-1 justify-self-center pb-3 mt-8 md:block md:pb-0 md:mt-0 ${
              navbar ? "block" : "hidden"
            }`}
          >
            <ul class="items-center justify-center space-y-8 md:flex md:space-x-6 md:space-y-0">
              <li class="nav-item">
                <a href="/" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="/clubs" class="nav-link">Clubs</a>
              </li>
              <li class="nav-item">
                <a href="/events" class="nav-link">Events</a>
              </li>
              <li class="nav-item">
                <a href="/about" class="nav-link">About Us</a>
              </li>
            </ul>
<!-- 
            <div class="mt-3 space-y-2 lg:hidden md:inline-block">
              <a
                href="/login"
                class="nav-item inline-block w-full px-4 py-2 text-center text-white bg-gray-600 rounded-md shadow hover:bg-gray-800"
              >
                Sign in
              </a>
              <a
                href="/register"
                class="nav-item inline-block w-full px-4 py-2 text-center text-gray-800 bg-white rounded-md shadow hover:bg-gray-100"
              >
                Sign up
              </a>
              <a
                href="/register"
                class="nav-item inline-block w-full px-4 py-2 text-center text-gray-800 bg-white rounded-md shadow hover:bg-gray-100"
              >
                Logout
              </a>
            </div> -->
          </div>
        </div>

        <div class="hidden space-x-2 md:inline-block">
        <?php if(!Session::has('user')){ ?>
          <a
            href="/login"
            class="px-4 py-2 text-white bg-gray-600 rounded-md shadow hover:bg-gray-800"
          >
            Sign in
          </a>
          <a
            href="/register"
            class="px-4 py-2 text-gray-800 bg-white rounded-md shadow hover:bg-gray-100"
          >
            Sign up
          </a>
          <?php }else{?>
            <a
            href="/enrolled"
            class="px-4 py-2 text-white bg-gray-600 rounded-md shadow hover:bg-gray-800"
          >
          <?= Session::get('user')['name']?>
          </a>
          <a
            href="/logout"
            class="px-4 py-2 text-gray-800 bg-white rounded-md shadow hover:bg-gray-100"
          >
            Logout
          </a>
          <?php }?>
        </div>
      </div>
    </nav>
</div>
<!-- /Navbar -->

</body>

@endsection