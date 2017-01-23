<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/jobboard.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return
        "<!DOCTYPE html>
        <html>
          <head>
            <meta charset='utf-8'>
            <title>Job Posting Board</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          </head>

          <body>
            <div class='container'>
              <h1>Job Posting Board</h1>

              <form action='jobs'>
                <div class='form-group'>
                  <label for='job'>Enter Job Title</label>
                  <input type='text' name='job' id='job'>
                </div>

                <div class='form-group'>
                  <label for='description'>Enter Job Description</label>
                  <input type='text' name='description' id='description'>
                </div>

                <div class='form-group'>
                  <label for='contact_info'>Enter Contact Info</label>
                  <input type='text' name='contact_info' id='contact_info'>
                </div>

                <button type='submit' class='btn btn-sm btn-info'>Submit Job</button>

              </form>
            </div>
          </body>
        </html>";
    });

    $app->get("/jobs", function() {
        $job = new JobOpening($_GET["job"], $_GET["description"]);

        return
        "<!DOCTYPE html>
        <html>
          <head>
            <meta charset='utf-8'>
            <title>Available Jobs</title>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          </head>

          <body>
            <div class='container'>
              <div class='row'>
                <div class='col-md-4'>
                  <h1>Available Jobs</h1>
                  <hr>
                  <h2>Job Title: " . $job->getTitle() . "</h2>
                  <p><b>Job Description:</b> " . $job->getDescription() . "</p>

                </div>
              </div>
            </div>
          </body>
        </html>";

    });

    return $app;
?>
