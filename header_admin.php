<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/styles.css"/>

    <title>IT Development Program</title>
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
            <ul class="md:hidden items-center flex flex-wrap list-none">
              <li class="inline-block relative">
                <a
                  class="text-gray-600 block py-1 px-3"
                  href=""
                  onclick="openDropdown(event,'notification-dropdown')"
                  ><i class="fas fa-bell"></i
                ></a>
                <div
                  class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                  id="notification-dropdown"
                >
                  <a
                    href=""
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Action</a
                  ><a
                    href=""
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Another action</a
                  ><a
                    href=""
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Something else here</a
                  >
                  <div class="h-0 my-2 border border-solid border-gray-200"></div>
                  <a
                    href=""
                    class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Seprated link</a
                  >
                </div>
              </li>
            </ul>
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
                    href="admin.html"
                    class="text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600"
                  >
                    <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                    Dashboard
                  </a>
                </li>
  
                <li class="items-center">
                  <a
                    href="admin_event.php"
                    class="text-xs uppercase py-3 font-bold block text-gray-800 hover:text-gray-600"
                  >
                    <i class="fas fa-tools mr-2 text-sm text-gray-400"></i>
                    Events
                  </a>
                </li>
  
                <li class="items-center">
                  <a
                    href="admin_participants.php"
                    class="text-xs uppercase py-3 font-bold block text-gray-800 hover:text-gray-600"
                  >
                    <i class="fas fa-table mr-2 text-sm text-gray-400"></i>
                    Participants
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
                    href="../auth/login.html"
                    class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                  >
                    <i class="fas fa-fingerprint text-gray-400 mr-2 text-sm"></i>
                    View Profile
                  </a>
                </li>

                <li class="items-center">
                  <a
                    href="../auth/login.html"
                    class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                  >
                    <i class="fas fa-fingerprint text-gray-400 mr-2 text-sm"></i>
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