<?php
include('p-checker.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="styles.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="../js/script.js" defer></script>

    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="../img/logo_MV.png">

    <title>MATHVENTURES | Homepage</title>
    <style>
 .calendar-week {
    background-color: #3F0071;
    padding: 10px;
    border-radius: 20px;
    text-align: center;
    margin: 0 auto;
}

.header-week {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
    font-size: 20px;
    font-weight: bold;
}

.nav-arrow-week {
    background-color: transparent;
    border: none;
    font-size: 20px;
    color: white;
    cursor: pointer;
}

.days-week {
    display: flex;
    justify-content: space-evenly;
    margin-top: 20px;
}

.day-week {
    background-color: white;
    border-radius: 25px;
    width: 40px;
    margin: 0 0.6rem;
    height: 80px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: black;
}

.active-week {
    background-color: black;
    color: white;
}

.active-week .date-week {
    background-color: green;
    padding: 5px;
    border-radius: 50%;
    color: white;
}

.date-week {
    margin-top: 5px;
}
.day-design {
  background-color: #03D388; 
  border-radius: 50%; 
  padding: 0.4rem 0.8rem;
}
.day-design-not {
  background-color: transparent; 
  border-radius: 50%; 
  padding: 0.4rem 0.8rem;
}
    </style>
  </head>

  <body>
    <?php 
        include('include/nav.php');
        // include('include/sidebar.php');
    ?>
   <div class="container-fluid">
      <div class="row">
        <?php
          $side_nav = 'index';
          include 'include/sidebar.php';
        ?>
          <!-- Main Content (Placeholder) -->
          <div class="col-md-8 ps-4">
            <div class="row">
              <div class="col-md-8">
                <h1 class="fw-bold">WELCOME STUDENTS</h1>
                <img src="../img/user/home-chapter1.png" alt="Homepage Chapter 1" style="width: 100%;">
              </div>
              <div class="col-md-4">
                <div class="wrapper">
                    <header>
                        <p class="current-date"></p>
                        <div class="icons">
                        <span id="prev" class="material-symbols-rounded">chevron_left</span>
                        <span id="next" class="material-symbols-rounded">chevron_right</span>
                        </div>
                    </header>
                    <div class="calendar">
                        <ul class="weeks">
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                        </ul>
                        <ul class="days"></ul>
                    </div>
                  </div>
                  <div class="card card-week">
                    <span class="text-center">
                      SCHEDULE
                    </span>
                    <!--  -->
                    <div class="calendar-week">
        <div class="header-week">
            <button id="prevWeek" class="nav-arrow-week">◀</button>
            <span id="monthYear">JUNE 2024</span>
            <button id="nextWeek" class="nav-arrow-week">▶</button>
        </div>
        <div class="days-week">
            <div class="day-week">
                <span>M</span>
                <span class="date-week day-design-not">10</span>
            </div>
            <div class="day-week" style="background-color: black; color: white;">
                <span>T</span>
                <span class="date-week day-design">11</span>
            </div>
            <div class="day-week">
                <span>W</span>
                <span class="date-week day-design-not">12</span>
            </div>
            <div class="day-week" style="background-color: black; color: white;">
                <span>TH</span>
                <span class="date-week day-design">13</span>
            </div>
            <div class="day-week">
                <span>F</span>
                <span class="date-week day-design-not">14</span>
            </div>
        </div>
    </div>
<!-- </div> -->
                    <!--  -->
                  </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-4">
                <img src="../img/user/chapter2.png" alt="" style="width: 90%;">
              </div>
              <div class="col-md-4">
                <img src="../img/user/chapter3.png" alt="" style="width: 90%;">
              </div>
              <div class="col-md-4">
                <img src="../img/user/chapter4.png" alt="" style="width: 90%;">
              </div>
            </div>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
<script>
  // Get HTML elements
const monthYearDisplay = document.getElementById("monthYear");
const prevWeekBtn = document.getElementById("prevWeek");
const nextWeekBtn = document.getElementById("nextWeek");

// Array of monthsWeek to map month numbers to month names
const monthsWeek = [
    "January", "February", "March", "April", "May", "June", 
    "July", "August", "September", "October", "November", "December"
];

// Array for the day names
const daysOfWeek = ["M", "T", "W", "TH", "F"];

// Create a Date object to get the current date, month, and year
let currentDateWeek = new Date();

// Function to update the displayed month and year
function updateMonthYearWeek() {
    const currentMonth = monthsWeek[currentDateWeek.getMonth()];
    const currentYear = currentDateWeek.getFullYear();
    monthYearDisplay.textContent = `${currentMonth} ${currentYear}`;
}

// Function to calculate the start of the current week (Monday)
function getStartOfWeek(date) {
    const dayOfWeek = date.getDay(); // 0 is Sunday, 1 is Monday, etc.
    const distanceToMonday = dayOfWeek === 0 ? 6 : dayOfWeek - 1; // Calculate how far Monday is
    const mondayDate = new Date(date); // Copy the current date
    mondayDate.setDate(date.getDate() - distanceToMonday); // Adjust to get Monday's date
    return mondayDate;
}

// Function to update the days for the current week
function updateCalendarWeek() {
    const startOfWeek = getStartOfWeek(currentDateWeek); // Get the Monday of the current week
    const days = document.querySelectorAll('.day-week .date-week');
    
    days.forEach((dayElement, index) => {
        const currentDay = new Date(startOfWeek); // Copy the start date
        currentDay.setDate(startOfWeek.getDate() + index); // Increment for each day (Monday -> Friday)
        dayElement.textContent = currentDay.getDate(); // Set the date in the HTML
    });
}

// Navigate to previous week
prevWeekBtn.addEventListener("click", function () {
    // Move the date back by 7 days (one week)
    currentDateWeek.setDate(currentDateWeek.getDate() - 7);
    updateMonthYearWeek(); // Update displayed month and year
    updateCalendarWeek();  // Update displayed week
});

// Navigate to next week
nextWeekBtn.addEventListener("click", function () {
    // Move the date forward by 7 days (one week)
    currentDateWeek.setDate(currentDateWeek.getDate() + 7);
    updateMonthYearWeek(); // Update displayed month and year
    updateCalendarWeek();  // Update displayed week
});

// Initial load
updateMonthYearWeek();  // Set the current month and year
updateCalendarWeek();   // Set the initial week dates
</script>
