<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="container px-4 mx-auto">
    <h3 class="text-2xl text-gray-700 font-bold mb-6 ml-3">
			Últimas Respostas
		</h3>

		<ol >
		  <li class="border-l-2 border-purple-600">
		    <div class="md:flex flex-start">
		      <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
                @yield('header')
		    </div>
        <div class="content">
            @yield('content')

        </div>
        <footer>
            #default footer
        </footer>
    </section>
</body>
</html>
