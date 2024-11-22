<?php
    $success = false;
    $error = "";
    $correct = array();
    $correct["web"] = "php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $input_username = $_POST['username'] ?? "";
        $input_passcode = $_POST['passcode'] ?? "";

        if (isset($correct[$input_username]) && $correct[$input_username] === $input_passcode){
            $success = True;
        } else {
            $error = "Incorrect passcode";
        }
    }
?>
<!--http://localhost/self_introduction/index.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400&display=swap" rel="stylesheet">

        <title>Bo Rong</title>
        <link href="css-s/style.css" rel="stylesheet">
        <link href="css-s/style_darkMode.css" rel="stylesheet">

        <!-- https://fonts.googleapis.com/css?family=Lato -->
        <link href='font/css.css' rel='stylesheet'>
        
        <!-- JQuery -->
        <script src="js-s/jquery-3.6.0.min.js"></script>
        <!-- JQuery UI -->
        <link rel="stylesheet" href="css-s/jquery-ui.css">
        <script src="js-s/jquery-ui.min.js"></script>

        <script src="js-s/change.js"></script>
    </head>

    <body>
        <button id = "myButton">Dark Mode</button>

        <div id="visitor-counter">
            <?php
                $file = "store.txt";
                if (!file_exists($file)){
                    file_put_contents($file, 0);
                }

                $count = (int)file_get_contents($file);
                $count++;
                file_put_contents($file, $count);
                echo "visited: {$count} Times";
            ?>
        </div>

        <div class="login-box">
            <?php if ($success): ?>
                <p> web logged in </p>
            <?php else: ?>
                <?php if ($error): ?>
                    <p class="error"><?= $error?></p>
                <?php endif; ?>
                <form method="POST">
                    <label>
                        Username: <input type="text" name="username" value=""/>
                    </label><br/>
                    <label>
                        Passcode:
                        <input type="radio" name="passcode" value="html"/>HTML
                        <input type="radio" name="passcode" value="php"/>PHP
                        <input type="radio" name="passcode" value="css"/>CSS
                    </label><br/>
                    <input type="submit" value="Submit"/>
                </form>

            <?php endif; ?>
        </div>

        <h1 id="name">Bo Rong, Chen</h1>
        <img id="myPhoto" src="IMG_20240909_183102.jpg" alt="Bo Rong's Photo">
        <hr>
        
        <!--個人照片和標題-->

        <p id="introduction">I am a student at <i>Computer Engineering Department</i> of 
            <a href=" https://www.nsysu.edu.tw" 
            class="university-link">
            National Sun Yat-sen University</a> in Taiwan
        </p>   

        <div id="accordion" class="flex-container">
            
            <h3>Expertise</h3>  
            <div class="ol-container">
                <ol>         
                    <li>C++</li>
                    <li>Calculus</li>
                    <li>Discrete Math</li>
                    <li>Python</li>
                </ol>
            </div>

            <h3>Projects</h3>
            <div class="table-container">
                <table>
                    <tr>
                        <th></th>
                        <th><strong>Year</strong></th>
                        <th><strong>Project</strong></th>
                    </tr>
                    <tr>
                        <td rowspan="2" style="background-color: orange;"></td>
                        <td>2024</td>
                        <td>Enrolled in Yi-Han's class</td> 
                    </tr>
                    <tr>
                        <td>2024</td>
                        <td>Create Self-Introduction Website</td>  
                    </tr>
                </table>
            </div>

        </div>

    </body>
</html>