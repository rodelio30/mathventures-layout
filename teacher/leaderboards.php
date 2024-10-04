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

    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="../img/logo_MV.png">

    <title>MATHVENTURES | Homepage</title>
    <style>
      /* Podium Section */
      .podium-container {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            margin-bottom: 20px;
        }
        .podium {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: #1f1f1f;
            position: relative;
            color: white;
            margin-top: 3rem;
        }
        .podium-large {
            width: 180px;
            height: 250px;
            font-size: 1.2rem;
            padding-top: 4rem;
            background-color: #2E3034;
        }
        .podium-small {
            width: 150px;
            height: 180px;
            font-size: 1rem;
            padding-top: 3rem;
        }
        .podium-number {
            font-size: 2.5rem;
            background-color: transparent;
            color: white;
            padding: 5px 10px;
            border-radius: 50%;
            position: absolute;
            top: -75px;
            left: 50%;
            transform: translateX(-50%);
        }
        .grade {
            margin-top: 10px;
            font-size: 1.2rem;
        }

        /* Player List Section */
        .player-list {
            background-color: #333333;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }
        .player-list .player-rank {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
        }
        .player-list .grade-status {
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }
        .up {
            color: #28a745; /* Green arrow for up */
        }
        .down {
            color: #dc3545; /* Red arrow for down */
        }
    </style>
  </head>
  <body>
    <?php 
        $nav_active = 'index';
        include('include/nav.php');
        // include('include/sidebar.php');
    ?>
   <div class="container-fluid">
      <div class="row">
        <?php
          $side_nav = 'leader';
        include 'include/sidebar.php';
        ?>
          <!-- Main Content (Placeholder) -->
          <div class="col-md-8 leaderboards-content p-4 pt-3">
              <!-- Your main content goes here -->
               <h1 class="leader-head">
                LEADERBOARDS
               </h1>
              <!-- <h2>Select Section</h2> -->
              <select class="form-select" aria-label="Default select example" style="width: 25%;">
                <option value="Grade 5 Acacia" selected>Grade 5 Acacia</option>
                <option value="Grade 5 Narra">Grade 5 Narra</option>
                <option value="Grade 5 Yakal">Grade 5 Yakal</option>
                <option value="Grade 5 Ipil-Ipil">Grade 5 Ipil-Ipil</option>
              </select>
              <div class="card leaderboards-content-inside" style="padding: 2.5rem 1rem;">

              <!-- Podium Section -->
            <div class="podium-container">
                <!-- Second Place -->
                <div class="podium podium-small">
                    <div class="podium-number">
                      <img src="../img/user/top2.png" alt="Top 2 Image">
                    </div>
                    <div>Player 2</div>
                    <div class="grade" style="color: #AE48FF">Grade A</div>
                </div>

                <!-- First Place -->
                <div class="podium podium-large">
                    <div class="podium-number">
                      <img src="../img/user/top1.png" alt="Top 1 Image">
                    </div>
                    <div>
                      Player 1
                    </div>
                    <div class="grade" style="color: #FFE602;">Grade S</div>
                </div>

                <!-- Third Place -->
                <div class="podium podium-small">
                    <div class="podium-number">
                      <img src="../img/user/top3.png" alt="Top 3 Image">
                    </div>
                    <div>Player 3</div>
                    <div class="grade" style="color: #289800">Grade B</div>
                </div>
            </div>

            <!-- Other Players List -->
            <div class="player-list">
                <div class="player-rank">
                    <img src="../img/user/user_blank.png" alt="Player" width="40" height="40" class="me-3">
                    Player 4
                </div>
                <div class="grade-status">
                  <span style="color: #076AFF; margin-right: 1rem;">
                    Grade C
                  </span>
                    <span class="up">▲</span>
                </div>
            </div>

            <div class="player-list">
                <div class="player-rank">
                    <img src="../img/user/user_blank.png" alt="Player" width="40" height="40" class="me-3">
                    Player 5
                </div>
                <div class="grade-status">
                    <span style="color: #FD0000; margin-right: 1rem;">
                      Grade C
                    </span>
                    <span class="down">▼</span>
                </div>
            </div>

              <!-- <div class="player-list">
                  <div class="player-rank">
                      <img src="../img/user/user_blank.png" alt="Player" width="40" height="40" class="me-3">
                      Player 6
                  </div>
                  <div class="grade-status">
                      <span style="color: #FD0000; margin-right: 1rem;">
                        Grade D
                      </span>
                      <span class="up">▲</span>
                  </div>
              </div> -->
              </div>
          </div> <!-- End of Content -->
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>