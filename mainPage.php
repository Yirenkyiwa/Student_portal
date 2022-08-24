<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Portal</title>

    <link rel="stylesheet" href="mainPage.css">
</head>
<body>
    <div class="side-bar">
        <ul>
            <!-- <li><a href="">Student Id</a></li> -->
            <li><a href="" id="std_id">
                <?php
                    echo $_SESSION['student_id'];
                ?>
            </a></li>
            <li><a href="">Service Information</a></li>
            <li><a href="">Personal Detaials</a></li>
            <li><a href="">Verify Details</a></li>
            <li><a href="">Past Questions (Manual)</a></li>
            <li><a href="">Statement of Results</a></li>
            <li><a href="">Survey</a></li>
            <li><a href="">Registeration</a></li>
            <li><a href="">Fees</a></li>
            <li><a href="">Exam TimeTable</a></li>
            <li><a href="">FAQ</a></li>
            <li><a href="">Reset Password</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </div>

    <main>
        <h2>SCHOLARSHIP OPPORTUNITY FOR BRILLIANT BUT NEEDY STUDENTS</h2>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eaque totam vitae quis, repellendus quo, mollitia modi 
            perferendis veritatis autem molestias distinctio expedita 
            placeat dolor pariatur incidunt aliquam? Adipisci, officiis illum!
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eaque totam vitae quis, repellendus quo, mollitia modi 
            perferendis veritatis autem molestias distinctio expedita 
            placeat dolor pariatur incidunt aliquam? Adipisci, officiis illum!
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eaque totam vitae quis, repellendus quo, mollitia modi 
            perferendis veritatis autem molestias distinctio expedita 
            placeat dolor pariatur incidunt aliquam? Adipisci, officiis illum!
            <a href="#">Read More...</a>
        </p>

        <h2>UPCOMING SRC/JCR ELECTIONS</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eaque totam vitae quis, repellendus quo, mollitia modi 
            perferendis veritatis autem molestias distinctio expedita 
            placeat dolor pariatur incidunt aliquam? Adipisci, officiis illum!
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eaque totam vitae quis, repellendus quo, mollitia modi 
            perferendis veritatis autem molestias distinctio expedita 
            placeat dolor pariatur incidunt aliquam? Adipisci, officiis illum!
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eaque totam vitae quis, repellendus quo, mollitia modi 
            perferendis veritatis autem molestias distinctio expedita 
            placeat dolor pariatur incidunt aliquam? Adipisci, officiis illum!
            <a href="#">Read More...</a>
        </p>

        <h2>BUSINESS IDEA CHALLENGE</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eaque totam vitae quis, repellendus quo, mollitia modi 
            perferendis veritatis autem molestias distinctio expedita 
            placeat dolor pariatur incidunt aliquam? Adipisci, officiis illum!
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eaque totam vitae quis, repellendus quo, mollitia modi 
            perferendis veritatis autem molestias distinctio expedita 
            placeat dolor pariatur incidunt aliquam? Adipisci, officiis illum!
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Eaque totam vitae quis, repellendus quo, mollitia modi 
            perferendis veritatis autem molestias distinctio expedita 
            placeat dolor pariatur incidunt aliquam? Adipisci, officiis illum!
            <a href="#">Read More...</a>
        </p>

    </main>
</body>
</html>

<?php
    session_destroy()

?>

