<?php
// Session starten
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include("includes/pagehead.php"); ?>
<link rel="stylesheet" href="res/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="container mt-5">
            <h1 class="mb-4">About</h1>
            <h4>Company</h4>
            <p>Webtech Company</p>
            <h4>UID number</h4>
            <p>UID number: ATU2024-2187</p>
            <h4>Company book number</h4>
            <p>YT-1300</p>
            <h4>Visit us</h4>
            <p>Hoechstaedtplatz 6 | 1200 Vienna | Austria</p>
            <h4>Phone</h4>
            <p><a href="tel:+43155571139">+43 1 555 711 40</a> </p>
            <h4>E-Mail</h4>
            <p><a href="mailto:office@webtechcompany.dev">office@webtechcompany.dev</a></p>

        </div>
    </main>
</body>

<footer>
<?php include("includes/footer.php"); ?>
</footer>

</html>