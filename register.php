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

  <body class="flex justify-center">

    <h1 class="text-3xl text-center">Register</h1>


    <form class="mt-20 text-center w-1/2 p-5 mt-20 bg-white rounded overflow-hidden shadow-md relative" action="">
        <h2>Name</h2>
        <input class="border-solid border-2 border-blue-500 rounded-full" type="text">
        <br><br>
        <h2>Phone Number</h2>
        <input class="border-solid border-2 border-blue-500 rounded-full" type="text">
        <br><br>
        <h2>Profile Picture</h2>
        <input class="border-solid border-2 border-blue-500 rounded-full" type="file">
        <br><br>
        <h2>Email address</h2>
        <input class="border-solid border-2 border-blue-500 rounded-full" type="text">
        <br><br>
        <h2>Password</h2>
        <input class="border-solid border-2 border-blue-500 rounded-full" type="text">
        <br><br>

        <input class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="submit" name="REGISTER">
    </form>

  </body>
</html>