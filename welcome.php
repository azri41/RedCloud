<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="{{ url_for('static', filename='css/style.css') }}"
    />

    <title>IT Development Program</title>
  </head>

  <body class="bg-fixed bg-cover bg-gradient-to-br from-black to-purple-700">

    <div class="flex justify-center md:justify-end mt-20 mr-20">
        <a href="/login" class="btn p-1 font-bold uppercase text-white border-red-200 rounded-full md:border-2 hover:bg-black hover:text-white transition ease-out duration-500">Login</a>
        <a href="/register" class="btn p-1 font-bold uppercase text-white ml-2 border-red-200 rounded-full md:border-2 hover:bg-red-500 hover:text-white transition ease-out duration-500">Sign Up</a>
    </div>


    <div class="flex justify-center mt-40">
        <h1 class="font-bold text-3xl text-white">Welcome to IT Development Program!</h1>
    </div>

    </body>
</html>
