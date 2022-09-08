<?php

session_start();
require_once ('db_config.php');

if(isset($_GET['optionUser'])){
    include_once ('logout.php');
}



if(isset($_GET['updateId'])){

    if(isset($_POST['update'])){

        $title=$_POST['title1'];
        $type=$_POST['type'];
        $day=$_POST['day'];
        $exercise=$_POST['exercise'];
        $sets=$_POST['sets'];
        $reps=$_POST['reps'];
        $link=$_POST['link'];

        $query = "UPDATE training SET
                                     type=?,
                                     title=?,
                                     day=?,
                                     exercise=?,
                                     sets=?,
                                     reps=?,
                                     link=? WHERE id=?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$type,$title,$day,$exercise,$sets,$reps,$link,$_GET['updateId']]);
        header('Location:index.php');
    }

    if(isset($_POST['cancel'])){
        header('Location:index.php');
    }

}


if(isset($_SESSION['id'])) {

    include_once ('insert.php');

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Page Title</title>
        <link type="text/css" rel="stylesheet" href="headerUser.css">
        <link type="text/css" rel="stylesheet" href="indexAccount2.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link type="text/css" rel="stylesheet" href="header.css">
    </head>
    <body>

    <?php

    $stmt = $conn->prepare("SELECT user_type FROM users WHERE id=?");
    $stmt->execute([$_SESSION['id']]);

    while ($user = $stmt->fetch()){

        if($user['user_type']==='user'){
            include_once ('headerUser2.php');
            ?>
                <script>

                    let button1 = document.getElementById('button-home');
                    button1.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                        include_once ('home2.php');
                        ?>`;
                    });

                    let button22 = document.getElementById('button-all');
                    button22.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                        include_once ('workoutUser.php');
                        ?>`;
                    });

                    let button2 = document.getElementById('button-muscle');
                    button2.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                        include_once ('workoutUser2.php');
                        ?>`;
                      });

                    let button3 = document.getElementById('button-fat');
                    button3.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                         include_once ('workoutUser3.php');
                        ?>`;
                    });

                    let button4 = document.getElementById('button-sport');
                    button4.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                        include_once ('workoutUser4.php');
                        ?>`;
                    });

                    let button5 = document.getElementById('button-profile2');
                    button5.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                        include_once('profileUser.php');
                        ?>`;

                        let button6 = document.getElementById('profile2');
                        button6.addEventListener('click', () => {

                            let box = document.getElementById('box');
                            box.innerHTML = `
                             <?php
                                include_once ('profileUserEdit.php')
                               ?>`;
                        });
                    });

                    let button7 = document.getElementById('button-coaches2');
                    button7.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                            include_once ('home.php');
                        ?>`;
                    });


                </script>

            <?php
        }elseif ($user['user_type']==='trainer'){
            include_once ('headerTrainer.php');
            ?>
            <script>


                let button1 = document.getElementById('button-home');
                button1.addEventListener('click', () => {

                    let box = document.getElementById('box');
                    box.innerHTML = `
                    <?php
                      include_once ('home2.php');
                    ?>`;
                });

                let button2 = document.getElementById('button-my-workout');
                button2.addEventListener('click', () => {

                    let box = document.getElementById('box');
                    box.innerHTML = `
                    <?php
                      include_once('workout.php');
                    ?>`;
                });

                let button3=document.getElementById('button-add-workout');
                button3.addEventListener('click',()=>{

                    let box=document.getElementById('box');
                    box.innerHTML=`
                    <?php
                      include_once('workoutAdd.php');
                    ?>`;
                });

                let button4=document.getElementById('button-change-workout');
                button4.addEventListener('click',()=>{

                    let box=document.getElementById('box');
                    box.innerHTML=`
                    <?php
                      include_once('workoutUpdateDelete.php');
                    ?>`;
                });

                let button5 = document.getElementById('button-profile');
                button5.addEventListener('click', () => {

                    let box = document.getElementById('box');
                    box.innerHTML = `
                    <?php
                      include_once('profileTrainer.php');
                    ?>`;

                    let button6 = document.getElementById('profile');
                    button6.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                                <?php
                                   include_once('profileTrainerEdit.php');
                                 ?>`;
                    });
                });

            </script>
             <?php

        }else{
            include_once ('headerAdmin.php');

            ?>
                <script>

                    let button1 = document.getElementById('button-home');
                    button1.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                        include_once ('home2.php');
                        ?>`;
                    });

                    let button22 = document.getElementById('button-all');
                    button22.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                        include_once ('workoutUser.php');
                        ?>`;
                    });

                    let button2 = document.getElementById('button-muscle');
                    button2.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                        include_once ('workoutUser2.php');
                        ?>`;
                    });

                    let button3 = document.getElementById('button-fat');
                    button3.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                        include_once ('workoutUser3.php');
                        ?>`;
                    });

                    let button4 = document.getElementById('button-sport');
                    button4.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                        include_once ('workoutUser4.php');
                        ?>`;
                    });

                    let button5 = document.getElementById('button-admin');
                    button5.addEventListener('click', () => {

                        let box = document.getElementById('box');
                        box.innerHTML = `
                        <?php
                        include_once ('admin.php');
                        ?>`;
                    });


                </script>
            <?php


        }

    }

    ?>

    <div id="box"></div>

    <?php
      include_once('footer.php');
    ?>

    <script>

        window.addEventListener('load',()=>{

            let box = document.getElementById('box');
            box.innerHTML = `
            <?php
              include_once ('home.php');
            ?>`;

            let box2=document.getElementById('box');
            box2.innerHTML=`
                    <?php
            include_once ('updateDelete.php');
            ?>`;
        });

        let buttonAbout = document.getElementById('about-us');
        buttonAbout.addEventListener('click', () => {

            let box = document.getElementById('box');
            box.innerHTML = `
            <?php
            include_once ('about.php');
            ?>`;
        });

    </script>

<?php

}else{
?>

<!DOCTYPE html>
<html>
<head>
        <title>Page Title</title>
        <link type="text/css" rel="stylesheet" href="indexGuest2.css">
        <link type="text/css" rel="stylesheet" href="home.css">
</head>
<body>

    <?php
      include_once ('headerGuest.php');
    ?>

    <div id="box"></div>

        <?php
         include_once ('footer.php');
        ?>

</body>
</html>

<script>

    window.addEventListener('load', () => {

        let box = document.getElementById('box');
        box.innerHTML = `
        <?php
          include_once ('home.php');
        ?>`;

        let button1 = document.getElementById('button-home');
        button1.addEventListener('click', () => {

            let box = document.getElementById('box');
            box.innerHTML = `
            <?php
              include_once ('home2.php');
            ?>`;
        });

        let button2 = document.getElementById('button-sign-in');
        button2.addEventListener('click', () => {

            let box = document.getElementById('box');
            box.innerHTML = `
            <?php
              include_once('formLogin.php');
            ?>`;

            let form = document.getElementById('form');
            let username = document.getElementById('username');
            let password = document.getElementById('password');
            let error = document.getElementById('error');

            function func() {

                let data = new FormData();
                data.append("username", username.value);
                data.append("password", password.value);
                fetch('login.php', {
                    method: 'POST',
                    body: data
                }).then(Response => Response.json())
                    .then(({success}) => {
                        if (success === 1) {
                            location.href = 'index.php';
                        } else {
                            func2();
                        }
                    });
            }

            function func2() {
                error.innerHTML = `
          <div class="msg">
            An error has occurred. User not found or password is incorrect.
          </div>`;
            }

            form.addEventListener('submit', (e) => {
                e.preventDefault();
                func();
            });

        });

        let button3=document.getElementById('button-sign-up');
        button3.addEventListener('click',()=>{

            let box = document.getElementById('box');
            box.innerHTML = `
            <?php
                include_once('formRegister.php');
            ?>`;

            let checkbox=document.getElementById('checkbox');
            checkbox.addEventListener('click',()=>{

                    let text=document.getElementById('text');
                    if(checkbox.checked==true){
                        text.innerHTML=`
                      <label for="cv">CV:</label><br>
                      <textarea id="cv"></textarea><br>`;
                    }else{
                        text.innerHTML="";
                    }

            });

            document.querySelector('#form').addEventListener('submit',e=>{

                e.preventDefault();
                let form=document.querySelector('#form');
                const data=new URLSearchParams();
                for(const p of new FormData(form)){
                    data.append(p[0],p[1]);
                }

                fetch('register.php',{
                    method: 'POST',
                    body: data,
                }).then(response=>response.text()).
                then(response=>{
                    if(response==="We have sent a verification email to your email address to complete the registration"){
                        document.querySelector('#msg').innerHTML= `
                        <div>
                          ${response}
                        </div>`;
                        document.getElementById('msg').style.backgroundColor="#c6dbb4";
                        document.getElementById('msg').style.border="1px solid #446e20";
                        document.getElementById('msg').style.color="#446e20"
                    }else{
                        document.querySelector('#msg').innerHTML= `
                        <div>
                          ${response}
                        </div>`;
                        document.getElementById('msg').style.backgroundColor="#ebbcc0";
                        document.getElementById('msg').style.border="1px solid #940000";
                        document.getElementById('msg').style.color="#940000";
                    }
                }).catch(error=>console.log(error));
            });
        });

        let buttonAbout = document.getElementById('about-us');
        buttonAbout.addEventListener('click', () => {

            let box = document.getElementById('box');
            box.innerHTML = `
            <?php
            include_once ('about.php');
            ?>`;
        });

    });

</script>

<?php
}