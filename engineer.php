<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Engineer Panel</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="admin.css" />
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E9679N0H6C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E9679N0H6C');
</script>
    </head>
    <body>
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/admin.html">Wahane.net Engineer</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/"
                                >Home</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Main page content -->
        <br />

        <div class="container">
            <div class="row">
                <div class="col" id="ticket-col">
                    <h2>New Tickets</h2>
                    
                    <div class="container" id="request-list">
                    <?php 

                    /* Card Template

                    <div class="card">
                            <div class="card-header">
                                #Number - Message Subject
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Name of the user</h4>
                                <p class="card-text">
                                    Message content with the problem the user
                                    has
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                                <div
                                    class="btn-group"
                                    role="group"
                                    aria-label="Basic mixed styles example"
                                >
                                    <a href="/sendEmail.php" type="button" class="btn btn-link">
                                        Send Email
                                    </a>
                                    <a href="/updateComplaint.php" type="button" class="btn btn-link">
                                        Mark as Completed
                                    </a>
                                    <a href="/deleteComplaint.php" type="button" class="btn btn-link">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>

                    */

                    // Get all the tickets from the database where completed = 0 and display them as cards
                    $servername = "localhost";
                    $username = "wahanene_admin";
                    $password = "f,N}{FOuvs,t";
                    $database = "wahanene_wahane.net";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $database);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM complaint WHERE e_stat = 1 AND e_comp = 0";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='card'>
                            <div class='card-header'>
                                #".$row["Complaint_ID"]." - ".$row["Subject"]."
                            </div>
                            <div class='card-body'>
                                <h4 class='card-title '>".$row["Customer_name"]."</h4>
                                <p class='card-text'>
                                    ".$row["Message"]."
                                </p>
                            </div>
                            <div class='card-footer text-muted'>
                                <div
                                    class='btn-group'
                                    role='group'
                                    aria-label='Basic mixed styles example'
                                >   

                                    <a href='mailto:".$row["Customer_email"]."' type='button' class='btn btn-link'>
                                        Email Customer
                                    </a>
                                    <a href='/eupdateComplaint.php?id=".$row["Complaint_ID"]."' type='button' class='btn btn-link'>
                                        Mark as Completed
                                    </a>
                                    <a href='/deleteComplaint.php?id=".$row["Complaint_ID"]."' type='button' class='btn btn-link'>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                    </div>
                </div>
                <div class="col" id="ticket-col">
                    <h2>Completed Tickets</h2>
                    <div class="container" id="request-list">
                        <?php
                        /* Card Template
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Ticket #Number - Message Subject
                                </h5>
                                <p class="card-text">
                                    Message content with the problem the user
                                    has
                                </p>
                            </div>
                        </div>
                        */

                        $servername = "localhost";
                        $username = "wahanene_admin";
                        $password = "f,N}{FOuvs,t";
                        $database = "wahanene_wahane.net";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $database);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM complaint WHERE e_comp = 1";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='card'>
                            <div class='card-body'>
                                <h5 class='card-title '>
                                    Ticket #".$row["Complaint_ID"]." - ".$row["Subject"]." 
                                </h5>
                                <p class='card-text'>
                                    ".$row["Message"]."     
                                </p>
                            </div>
                        </div>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
