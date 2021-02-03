<?php
  require "header_admin.php";
?>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Event - Forms</title>
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
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Add Event Form
            </h2>
 
            <!-- General elements -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              Details
            </h4>
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Event Name</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe"
                />
              </label>

              <div class="mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Event Type
                </span>
                <div class="mt-2">
                  <label
                    class="inline-flex items-center text-gray-600 dark:text-gray-400"
                  >
                    <input
                      type="radio"
                      class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                      name="eventType"
                      value="social"
                    />
                    <span class="ml-2">Social</span>
                  </label>
                  <label
                    class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400"
                  >
                    <input
                      type="radio"
                      class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                      name="eventType"
                      value="volunteer"
                    />
                    <span class="ml-2">Volunteer</span>
                  </label>
                  <label
                    class="inline-flex items-center text-gray-600 dark:text-gray-400"
                  >
                    <input
                      type="radio"
                      class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                      name="trainingType"
                      value="training"
                    />
                    <span class="ml-2">Training</span>
                  </label>
                </div>
              </div>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Quota
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
                  <option>200</option>
                  <option>500</option>
                  <option>1000</option>
                  <option>5000</option>
                </select>
              </label>

            </div>

        
          
          </div>
        </main>
      </div>
    </div>
  </body>
</html>