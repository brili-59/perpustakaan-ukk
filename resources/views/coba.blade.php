<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
  {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}
  @foreach ($dataBuku as $buku)
  <div class="card w-96 bg-base-100 shadow-xl">
      <figure><img src="https://i.pinimg.com/564x/7e/8c/bf/7e8cbfddf812554f0534c0d5642234d3.jpg" alt="Shoes" /></figure>
      <div class="card-body">
        <h2 class="card-title">{{ $buku->nama_buku}}</h2>
        <p>{{ $buku->synopsis}}</p>
        {{-- <p>{{ $buku->harga}}</p> --}}
        <p class="badge badge-primary">{{ $buku->genre}}</p>
        <div class="card-actions justify-end">
          <button class="btn btn-active btn-primary">Pinjam</button>
        </div>
      </div>
    </div>
@endforeach
</body>
</html>