<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylesheet/performance_overview.css">
  <title>Chemistry Quiz 1</title>
</head>
<body>
  <div class="container">
            <div class="quiz-wrapper">
                <!-- <div class="image-container">
                    <img src="media/chemistry_quiz.svg" alt="Quiz" class="quiz-image">
                </div> -->
                <div class="details-wrapper">
                    <h2 class="quiz-title">Chemistry Quiz 1</h2>
                    <hr>
                    <div class="date-wrapper">
                        <img src="media/calendar.svg" alt="Calendar Icon" class="image icon">
                        <p class="due-date">Due Date: Sept 20 1:00 PM</p>
                    </div>
                    <p class="course-code">Section: BSCH2002</p>
                </div>
            </div>

    <div class="performance-overview">
    <div class="image-wrapper">
        <img src="media/performance.svg" alt="Performance Overview" class="performance-icon">
        <h2>Performance Overview</h2>
        </div>
      <div class="chart">
        <canvas id="performanceChart" width="600" height="400"></canvas>
      </div>
    </div>

    <div class="student-list">
      <h2>List of Students</h2>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Submitted</th>
            <th>Score</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Swift</td>
            <td>Yes</td>
            <td>85</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Carpenter</td>
            <td>Yes</td>
            <td>92</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Rodrigo</td>
            <td>Yes</td>
            <td>78</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Zefanya</td>
            <td>Yes</td>
            <td>88</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Kim</td>
            <td>Yes</td>
            <td>91</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Vergara</td>
            <td>Yes</td>
            <td>95</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Grande</td>
            <td>Yes</td>
            <td>83</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Roan</td>
            <td>Yes</td>
            <td>100</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="student-summary">
      <p><span class="bold">Assigned: </span> 8 students</p>
      <p><span class="bold">Turned-in: </span> 8 students</p>
      <p><span class="bold">Missed: </span> 0 students</p>
    </div>
  </div>

  <script src="scripts/performance_chart.js"></script>
</body>
</html>
