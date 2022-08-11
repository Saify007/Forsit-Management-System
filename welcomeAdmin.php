<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Admin</title>
    
</head>
<body>
    <div class="container">
        <fieldset>
            <legend style="text-align:center;">
            <h1 >Admin Dashboard</h1>
            </legend>
            <div style="font-size:20px; text-align:center; font-weight:bold; margin-top: 30px;">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $userName = $_POST['userName'];   
                        echo  "Welcome ".$userName;
                    }
                ?>
            </div>
        </fieldset>
    </div>

    
  
</body>
</html>