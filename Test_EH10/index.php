<?php
// Session starten
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


//User mit uniqid
$array = [
    'User 1' => [
        'Id' =>uniqid(),
        'name' => 'Anh',
        'nachname' => 'Bui',
        'email' => 'admin@example.com',
        
    ],
    'User 2' => [
        'Id' =>uniqid(),
        'name' => 'Amelie',
        'nachname' => 'Kern',
        'email' => 'admin@example.com',
        
    ]
];










?>

<html lang="en">

<head>
<?php include("includes/pagehead.php"); ?>
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
    <main class="container mt-5">
        <h1 class="text-primary">New User Entry</h1>

        

    </main>

    <form method="POST" action="" novalidate onsubmit="return validateForm();"> 
            

            <div class="form-group">
                <label for="vorname">Vorname</label>
                <input type="text" name="vorname" id="vorname" required>
            </div>

            <div class="form-group">
                <label for="nachname">Nachname</label>
                <input type="text" name="nachname" id="nachname" required>
            </div>

            <div class="form-group">
                <label for="e-mail">E-Mail</label>
                <input type="email" name="e-mail" id="e-mail" required>
            </div>

        

            <div id="error-message" class="error-message"></div>

            <div>
                <button type="submit" class="button" style="background-color: #f3d8e0;">Senden</button>
            </div>
        </form>

    <br><br>
        
        <!--JAVASCRIPT input von Formular wird herangezogen und überprüft-->
        <script> 
            function validateForm() {
                const errorMessages = [];
                const errorMessageContainer = document.getElementById("error-message");
                errorMessageContainer.innerHTML = "";

                const anrede = document.getElementById("anrede").value;
                const vorname = document.getElementById("vorname").value;
                const email = document.getElementById("e-mail").value;
                

                // Client-seitige Validierung. Das sind die Msg die der User sehen wird!
                if (!anrede) errorMessages.push("Bitte wählen Sie eine Anrede aus.");
                if (!vorname) errorMessages.push("Bitte geben Sie Ihren Vornamen ein.");
                if (!validateEmail(email)) errorMessages.push("Bitte geben Sie eine gültige E-Mail-Adresse ein.");

                
                if (errorMessages.length > 0) {
                    errorMessages.forEach(msg => {
                        const errorItem = document.createElement("div");
                        errorItem.textContent = msg;
                        errorMessageContainer.appendChild(errorItem);
                    });
                    return false; // Verhindert das Absenden des Formulars
                }
                return true;
            }

            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; //Regex Email 
                return re.test(email);
            }
        </script>    


        <!--Validierung bei server wird nach den abschicken der Formular überprüft-->
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                
            
                $email = $_POST["e-mail"] ?? '';
                
                $errors = [];

                // Server-seitige Validierung
                
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Die E-Mail-Adresse ist ungültig.";
                

                if (!empty($errors)) {
                    echo "<script>
                        const errorMessageContainer = document.getElementById('error-message');
                        errorMessageContainer.innerHTML = '';
                    </script>";
                    foreach ($errors as $error) {
                        echo "<script>
                            const errorItem = document.createElement('div');
                            errorItem.textContent = '$error';
                            document.getElementById('error-message').appendChild(errorItem);
                        </script>";
                    }
                } else {
                    header("Location: success.php");
                    exit();
                }
            }
        ?>
    
    
</body>

<footer>
<?php include("includes/footer.php"); ?>
</footer>

</html>