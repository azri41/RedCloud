<?php
  require "header_admin.php";
  include "db-handler.php";
  $eventid = $_GET["id"];

  $fetch_event = "SELECT eventName, eventName, eventStart, eventEnd, eventType, requirement, status, quota FROM event WHERE eventId = '$eventid'";
  
  $event = mysqli_query($conn,$fetch_event);
  $collect_event = mysqli_fetch_array($event);
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
              Update Event Form
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
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Event Name</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" value="<?php echo $collect_event['eventName']; ?>"/>
              </label>
              <div class="mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Event Type
                </span>
                <div class="mt-2">
                  <label
                    class="inline-flex items-center text-gray-600 dark:text-gray-400">
                    <input
                      type="radio"
                      class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                      name="eventType"
                      value="social"
                    <? if ($eventtype['eventType']="Social") echo selected ?> 
                    <span class="ml-2">Social</span>
                  </label>
                  <label
                    class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">
                    <input
                      type="radio"
                      class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                      name="eventType"
                      value="volunteer"
                      <? if ($eventtype['eventType']="Volunteer") echo selected ?>
                    <span class="ml-2">Volunteer</span>
                  </label>
                  <label
                    class="inline-flex items-center text-gray-600 dark:text-gray-400"
                  >
                    <input
                      type="radio"
                      class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                      name="eventType"
                      value="training"
                      <? if ($eventtype['eventType']="Training") echo selected ?>
                    <span class="ml-2">Training</span>
                  </label>
                </div>
              </div>

              <span class="ml-2">Start Date: </span>
              <input type="date" name="eventDateStart" value="<?echo$eventName['eventName']; ?>" required>
              <br>
              <span class="ml-2">End Date: </span>
              <input type="date" name="eventDateEnd" value="<?echo$eventName['eventName']; ?>" required>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Quota
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >
                  <option <? if ($eventtype['quota']=200) echo selected ?>> 200</option>
                  <option <? if ($eventtype['quota']=500) echo selected ?> >500</option>
                  <option <? if ($eventtype['quota']=1000) echo selected ?> >1000</option>
                  <option <? if ($eventtype['quota']=1) echo selected ?> >5000</option>
                </select>
              </label>
              <br>
              <button name="add-task-submit" value="Submit" class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                >
                <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                  <span>Update Event</span>
                </button></form>

            </div>

        
          
          </div>
        </main>
      </div>
    </div>
  </body>
</html>