<?php
  require "header_admin.php";
  include "db-handler.php";

  if (isset($_POST['deleteEventId'])) {
    $event_id = $_POST['deleteEventId'];
    $sql = "DELETE FROM event WHERE eventId = $event_id";
    $result = mysqli_query($conn, $sql) or die ("Bad Query: $sql");
  }
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
              View Participants
            </h2>

            <!-- With actions -->
            <h4
              class="mb-4 text-lg font-semibold text-white"
            >
              Edit Participants
            </h4>
            <div class="w-full overflow-hidden rounded-lg shadow-lg mb-20">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b bg-gray-500"
                    >
                      <th class="px-4 py-3">Name</th>
                      <th class="px-4 py-3">Attended Events</th>
                      <th class="px-4 py-3">Unattended Events</th>
                      <th class="px-4 py-3">Progress</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  <?php
                        $queryEvents = "SELECT eventId, eventName, DATE(eventStart) as dateStart, DATE(eventEnd) as dateEnd, eventType, status FROM event";
                        $resultEvents = mysqli_query($conn, $queryEvents);
                        while($rowEvents = mysqli_fetch_array($resultEvents)) {
                        echo '
                        <tr>
                        <th
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left"
                        >
                          '.$rowEvents['eventName'].'
                        </th>
                        <td
                          class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                        >
                          '.$rowEvents['dateStart'].'
                        </td>
                        <td
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                      >
                        '.$rowEvents['dateEnd'].'
                      </td>
                      <td
                      class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4"
                    >
                      <div class="flex items-center">';
                      if ($rowEvents['status']=='Ongoing') {
                        echo '<span
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                      >
                      '.$rowEvents['status'].'
                      </span>
  
                        </div>
                      </td>
                          ';
                      }
                      else if($rowEvents['status']=='Upcoming') {
                        echo '<span
                        class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:bg-orange-700 dark:text-orange-100"
                      >
                      '.$rowEvents['status'].'
                      </span>
  
                        </div>
                      </td>
                          ';
                      }
                      else if($rowEvents['status']=='Finished') {
                        echo '<span
                        class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-100"
                      >
                      '.$rowEvents['status'].'
                      </span>
  
                        </div>
                      </td>
                          ';
                      }
                      echo '                      <td class="px-4 py-3">
                      <div class="flex items-center space-x-4 text-sm">
                        <button
                          class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                          aria-label="Edit"
                        >
                          <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                            ></path>
                          </svg>
                        </button>
                        <form onsubmit="confirmDelete()" action="'.htmlspecialchars($_SERVER['PHP_SELF']).'" method="post" id="delete-event"><input type="hidden" name="deleteEventId" value="'.$rowEvents['eventId'].'">
                        <button
                           class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                          aria-label="Delete"
                        >
                          <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                          >
                            <path
                              fill-rule="evenodd"
                              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                              clip-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                        </form>
                      </div>
                    </td></tr>';
                    }
                      ?>
                  </tbody>
                </table>

              </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>