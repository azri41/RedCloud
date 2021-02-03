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

    <h1 class="mt-20 text-3xl text-white font-bold text-center">Login</h1>
    <br>

    <form class="ml-auto mr-auto text-center w-1/2 p-5 mt-20 bg-white rounded-xl overflow-hidden shadow-lg bg-gradient-to-br from-white to-purple-400 " action="">
        <table class="flex justify-center table-auto">
            <tbody>
              <tr>
                <td class="font-bold text-xl">Email</td>
                <td><input class="w-full ml-20 border-solid border-2 border-purple-800 rounded-full" type="text"></td>
              </tr>
              <tr>
                <td class="font-bold text-xl">Password</td>
                <td><input class="w-full ml-20 border-solid border-2 border-purple-800 rounded-full" type="text"></td>
              </tr>
            </tbody>
          </table>
        <input class="mt-10 bg-purple-500 hover:bg-purple-400 text-white font-bold py-2 px-4 border-b-4 border-purple-700 hover:border-purple-500 rounded" type="submit" name="LOGIN"> 
        <div class="card-footer">
          &nbsp; &nbsp;
          Don't have an account? <a href="register.html" class="text-primary">Create</a>
        </div>
    </form>

    <br><br><br>

    

  </body>
</html>