<?php
// Session starten
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


?>


<html lang="en">

<head>
<link rel="stylesheet" href="res/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="overview.php">Overview</a>
            </li>
        </ul>
    </nav>
    <!-- Main Content -->
    <main class="container mt-5">
        <h1>User Overview</h1>
        <p>Total Users: [UserCount]</p>

        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


</table>
      
      
    
</body>

</html>