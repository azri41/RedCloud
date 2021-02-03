<?php
  require "header_user.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>
  </head>
  <body>
      <div class="flex flex-col flex-1 w-full">

        <main class="h-full pb-16 overflow-y-auto">
          <div class="mt-20 container grid px-6 mx-auto rounded-lg shadow-xl" style="background-color: #007CBA;">
            <h2
              class="my-6 text-2xl font-semibold text-white"
            >
              View Events
            </h2>


            <!-- Table user -->
            <h4
              class="mb-4 text-lg font-semibold text-white"
            >
              Available Events
            </h4>
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b bg-gray-500"
                    >
                      <th class="px-4 py-3">Events</th>
                      <th class="px-4 py-3">Start Date</th>
                      <th class="px-4 py-3">End Date</th>
                      <th class="px-4 py-3">Status</th>
                      <th class="px-4 py-3">Action</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y"
                  >
                    <tr class="text-gray-700">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">

                          <div>
                            <p class="font-semibold">Hack 2 Hire</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        3/2/2021
                      </td>
                      <td class="px-4 py-3 text-sm">
                        4/2/2021
                      </td>
                      <td class="px-4 py-3 text-xs">
                      <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full"
                        >
                          On Going
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm text-green-500 font-semibold">
                        <a href="" class="btn text-white cursor-default">Enroll</a>
                      </td>
                    </tr>

                    <tr class="text-gray-700">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">

                          <div>
                            <p class="font-semibold">Volunteer Event</p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        5/2/2021
                      </td>
                      <td class="px-4 py-3 text-sm">
                        5/2/2021
                      </td>
                      <td class="px-4 py-3 text-xs">
                      <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-orange-100 rounded-full"
                        >
                          Up Coming
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm text-green-500 font-semibold">
                        <a href="" class="btn">Enroll</a>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>