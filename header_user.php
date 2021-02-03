<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/styles.css"/>

    <title>IT Development Program</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>
  <body>
    <div class="">
        <div class="col-span-1 md:flex md:justify-end">
          <nav
          class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
        >
          <div
            class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
          >
            <button
              class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
              type="button"
              onclick="toggleNavbar('example-collapse-sidebar')"
            >
              <i class="fas fa-bars"></i>
            </button>
            <a
              class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
              href="admin.php"
            >
              IT Development Program
            </a>

            <div
              class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
              id="example-collapse-sidebar"
            >

              <!-- Divider -->
              <hr class="my-4 md:min-w-full" />

              <!-- Navigation -->
  
              <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                  <a
                    href="user.php"
                    class="text-xs uppercase py-3 font-bold block hover:text-blue-600"
                  >
                    <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                    Dashboard
                  </a>
                </li>
  
                <li class="items-center">
                  <a
                    href="user_event.php"
                    class="text-xs uppercase py-3 font-bold block hover:text-blue-600"
                  >
                    <i class="fas fa-tools mr-2 text-sm opacity-75"></i>
                    Events
                  </a>
                </li>

  
              </ul>
  
              <!-- Divider -->
              <hr class="my-4 md:min-w-full" />
              <!-- Navigation -->
              <ul
                class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
              >
                <li class="items-center">
                  <a
                    href=""
                    class="text-xs uppercase py-3 font-bold block hover:text-blue-600"
                  >
                    <i class="fas fa-fingerprint mr-2 text-sm opacity-75"></i>
                    View Profile
                  </a>
                </li>

                <li class="items-center">
                  <a
                    href=""
                    class="text-xs uppercase py-3 font-bold block hover:text-blue-600"
                  >
                    <i class="fas fa-question-circle mr-2 text-sm opacity-75"></i>
                    About
                  </a>
                </li>
              </ul>
  
            </div>
          </div>
        </nav>
        </div>
    </div>

    <script> //js for hide and show menu
        const burger = document.querySelector('#burger');
        const menu = document.querySelector('#menu');

        burger.addEventListener('click', () => {
            if(menu.classList.contains('hidden')){
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        })
    </script>

  </body>
</html>