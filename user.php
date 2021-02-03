<?php
  session_start();
  include "db-handler.php";
  require "header_user.php";
?>

<html>
<main class="px-16 py-6 bg-gray-100 col-span-2">
    <div id="root">
      <div class="relative md:ml-64 bg-gray-100">
        <nav class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4">
          <div class="w-full mx-auto items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4">
            <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="/">User Dashboard</a>
            <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
              <a class="text-gray-600 block" href="" onclick="openDropdown(event,'user-dropdown')"> <!--profile picture-->
                <div class="items-center flex">
                  <span class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full">
                    <img src="img/Dell_Black.jpg" alt="profile_pic" class="w-full rounded-full align-middle border-none shadow-lg"></span>
                </div>
              </a> <!--end profile pic-->
              <!--drop down menu in profile pic-->
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="user-dropdown">
                <a href="" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">Participant</a>
                <div class="h-0 my-2 border border-solid border-gray-200"></div>
                <a href="" class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800">View Profile</a>
              </div>
              <!--end dropdown menu-->
            </ul>
          </div>
        </nav>
        <!-- Header -->
        <div class="relative md:pt-32 pb-32 pt-12" style="background-color: #007CBA;">
          <div class="px-4 md:px-10 mx-auto w-full">
            <div>
              <!-- Card stats -->
              <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 xl:w-4/12 px-4"> <!--social card-->
                  <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4" style="background-image: url('img/social.jpg');">
                      <p class="text-sm text-white mt-4">
                        <span class="whitespace-no-wrap">
                          Featured Social Event
                        </span>
                      </p>
                    </div>
                  </div>
                </div> <!--end social card-->
                
                <div class="w-full lg:w-6/12 xl:w-4/12 px-4"> <!--training card-->
                  <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4" style="background-image: url('img/training.jpg');">
                      <p class="text-sm text-white mt-4">
                        <span class="whitespace-no-wrap">
                          Featured Training Event
                        </span>
                      </p>
                    </div>
                  </div>
                </div> <!--end training card-->

                <div class="w-full lg:w-6/12 xl:w-4/12 px-4"> <!--Volunteer card-->
                  <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                    <div class="flex-auto p-4" style="background-image: url('img/volunteer.jpeg');">
                      <p class="text-sm text-white mt-4">
                        <span class="whitespace-no-wrap">
                          Featured Volunteer Event
                        </span>
                      </p>
                    </div>
                  </div>
                </div> <!--end Volunteer card-->

              </div>
            </div>
          </div>
        </div>

        <div class="px-4 md:px-10 mx-auto w-full -m-24">
          <div class="flex flex-wrap">            
          <div class="w-full mb-12 xl:mb-0 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-gray-800"
              >
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full max-w-full flex-grow flex-1">
                      <h6
                        class="uppercase text-gray-200 mb-1 text-xs font-semibold"
                      >
                        Overview
                      </h6>
                      <h2 class="text-white text-xl font-semibold">
                        Progress
                      </h2>
                    </div>
                  </div>
                </div>
                <div class="p-4 flex-auto">
                  <!-- Chart -->
                  <div class="relative h-350-px">
                    <canvas id="line-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>

          <div class="relative w-full max-w-full flex-grow flex-1"> <!--Participants-->
            <div class="w-full mb-12 xl:mb-0 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                      <h3 class="font-semibold text-base text-gray-800">
                        Available Events
                      </h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                      <button
                        class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button"
                      >
                        See all
                      </button>
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">
                  <!-- Participants table -->
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                      <tr>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 
                        border-r-0 whitespace-no-wrap font-semibold text-left">
                          Events
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 
                        border-r-0 whitespace-no-wrap font-semibold text-left">
                          Start Date
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 
                        border-r-0 whitespace-no-wrap font-semibold text-left">
                          End Date
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 
                        border-r-0 whitespace-no-wrap font-semibold text-left">
                          Status
                        </th>
                        <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 
                        border-r-0 whitespace-no-wrap font-semibold text-left">
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $userType = 'Participant';
                        $query = "SELECT * from user WHERE userType=?";
                        $stmt = mysqli_stmt_init($conn);
                        mysqli_stmt_prepare($stmt, $query);
                        mysqli_stmt_bind_param($stmt, "s", $userType);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while($row = mysqli_fetch_array($result)) {
                          $enrolment = 'Enrolled';
                          $status = 'Attended';
                          $queryEventAttended = "SELECT count(email) AS events_attended FROM eventuser WHERE email=? AND enrolment=? AND status=?";
                          $stmtEventAttended = mysqli_stmt_init($conn);
                          mysqli_stmt_prepare($stmtEventAttended, $queryEventAttended);
                          mysqli_stmt_bind_param($stmtEventAttended, "sss", $row['email'], $enrolment, $status);
                          mysqli_stmt_execute($stmtEventAttended);
                          $resultEventAttended = mysqli_stmt_get_result($stmtEventAttended);
                          $rowEventAttended = mysqli_fetch_array($resultEventAttended);
                          
                          $statusUnattended = 'Unattended';
                          $queryEventUnattended = "SELECT count(email) as events_unattended FROM eventuser WHERE email=? AND status=?";
                          $stmtEventUnattended = mysqli_stmt_init($conn);
                          mysqli_stmt_prepare($stmtEventUnattended, $queryEventUnattended);
                          mysqli_stmt_bind_param($stmtEventUnattended, "ss", $row['email'], $statusUnattended);
                          mysqli_stmt_execute($stmtEventUnattended);
                          $resultEventUnattended = mysqli_stmt_get_result($stmtEventUnattended);
                          $rowEventUnattended = mysqli_fetch_array($resultEventUnattended);
                          
                          $queryUserProgress = "SELECT totalProgress FROM user WHERE email=?";
                          $stmtUserProgress = mysqli_stmt_init($conn);
                          mysqli_stmt_prepare($stmtUserProgress, $queryUserProgress);
                          mysqli_stmt_bind_param($stmtUserProgress, "s", $row['email']);
                          mysqli_stmt_execute($stmtUserProgress);
                          $resultUserProgress = mysqli_stmt_get_result($stmtUserProgress);
                          $rowUserProgress = mysqli_fetch_array($resultUserProgress);

                          echo '
                          <tr>
                          <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                            '.$row['name'].'
                          </th>
                          <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                            '.$rowEventAttended['events_attended'].'
                          </td>
                          <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                            '.$rowEventUnattended['events_unattended'].'
                          </td>
                          <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                            <i class="fas fa-star text-yellow-400 mr-4"></i>
                            '.$rowUserProgress['totalProgress'].'%
                          </td>
                          <td class="px-4 py-3 text-sm text-green-500 font-semibold">
                          <a href="" class="btn">Enroll</a>
                        </td>
                        </tr>
                          ';
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="relative w-full max-w-full flex-grow flex-1">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
              >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1"
                    >
                      <h3 class="font-semibold text-base text-gray-800">
                        Enrolled Events
                      </h3>
                    </div>
                    <div
                      class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                    >
                      <button
                        class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button"
                      >
                        See all
                      </button>
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">
                  <!-- Projects table -->
                  <table
                    class="items-center w-full bg-transparent border-collapse"
                  >
                    <thead class="thead-light">
                      <tr>
                        <th
                          class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                        >
                          Events
                        </th>
                        <th
                          class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                        >
                          Date Start
                        </th>
                        
                        <th
                          class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                        >
                          Date End
                        </th>
                        <th
                          class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left min-w-140-px"
                        >
                          Status
                        </th>
                        <th
                          class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left min-w-140-px"
                        >
                          Action
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $queryEvents = "SELECT eventName, DATE(eventStart) as dateStart, DATE(eventEnd) as dateEnd, eventType, status FROM event";
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
                      <td class="px-4 py-3 text-sm text-green-500 font-semibold">
                      <a href="" class="btn">Attend</a>
                    </td>
                        </tr>
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
                        </tr>
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

                        </tr>
                          ';
                      }}
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <footer class="block py-4">
            <div class="container mx-auto px-4">
              <hr class="mb-4 border-b-1 border-gray-300" />
              <div
                class="flex flex-wrap items-center md:justify-between justify-center"
              >
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      charset="utf-8"
    ></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
      /* Make dynamic date appear */
      (function () {
        if (document.getElementById("get-current-year")) {
          document.getElementById(
            "get-current-year"
          ).innerHTML = new Date().getFullYear();
        }
      })();
      /* Sidebar - Side navigation menu on mobile/responsive mode */
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
      }
      /* Function for dropdowns */
      function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
          element = element.parentNode;
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: "bottom-start",
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }

      (function () {
        /* Chart initialisations */
        /* Line chart */
        var config = {
          type: "line",
          data: {
            labels: [
              "January",
              "February",
              "March",
              "April",
              "May",
              "June",
              "July",
              "August",
              "September",
              "October",
              "November",
              "December",
            ],
            datasets: [
              {
                label: "Social Event",
                backgroundColor: "#ed64a6",
                borderColor: "#ed64a6",
                data: [230, 378, 516, 234, 100, 245, 153, 243, 170, 212, 380, 440],
                fill: false,
                barThickness: 8,
              },
              {
                label: "Training",
                fill: false,
                backgroundColor: "#4c51bf",
                borderColor: "#4c51bf",
                data: [320, 230, 206, 174, 310, 444, 187, 113, 140, 152, 260, 310],
                barThickness: 8,
              },
              {
                label: "Volunteering",
                fill: false,
                backgroundColor: "#10B981",
                borderColor: "#10B981",
                data: [241, 348, 196, 114, 120, 224, 187, 153, 120, 212, 311, 325],
                barThickness: 8,
              },
            ],
          },
          options: {
            maintainAspectRatio: false,
            responsive: true,
            title: {
              display: false,
              text: "Sales Charts",
              fontColor: "white",
            },
            legend: {
              labels: {
                fontColor: "white",
              },
              align: "end",
              position: "bottom",
            },
            tooltips: {
              mode: "index",
              intersect: false,
            },
            hover: {
              mode: "nearest",
              intersect: true,
            },
            scales: {
              xAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)",
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Month",
                    fontColor: "white",
                  },
                  gridLines: {
                    display: false,
                    borderDash: [2],
                    borderDashOffset: [2],
                    color: "rgba(33, 37, 41, 0.3)",
                    zeroLineColor: "rgba(0, 0, 0, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
              yAxes: [
                {
                  ticks: {
                    fontColor: "rgba(255,255,255,.7)",
                  },
                  display: true,
                  scaleLabel: {
                    display: false,
                    labelString: "Value",
                    fontColor: "white",
                  },
                  gridLines: {
                    borderDash: [3],
                    borderDashOffset: [3],
                    drawBorder: false,
                    color: "rgba(255, 255, 255, 0.15)",
                    zeroLineColor: "rgba(33, 37, 41, 0)",
                    zeroLineBorderDash: [2],
                    zeroLineBorderDashOffset: [2],
                  },
                },
              ],
            },
          },
        };
        var ctx = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(ctx, config);


      })();
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</main>
</html>