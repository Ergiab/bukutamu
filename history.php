<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Bebas+Neue&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap"rel="stylesheet"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        margin: 0;
        background-color: rgb(54, 25, 63);
        background-image: url(bg2.jpg);
        background-size: cover;
        background-repeat: no-repeat;
      }
      main {
        height: 70vh;
        color: aliceblue;
        background-color: rgba(0, 0, 0, 0.6);
        margin: 9vh auto 0;
        display: flex;
        flex-direction: column;
        width: 70%;
        border-radius: 30px;
        padding: 20px;
        padding-bottom: 40px;
        box-shadow: 20px 15px 20px rgb(19, 1, 31);
        overflow: auto;
        animation: melayang 8s infinite;

      }
      @keyframes melayang{
          0%{
              transform: translate(4px, 4px);
          }30%{
              transform: translate(0px, 0px);
              opacity: 0.9;

          }60%{
              transform: translate(-2px, 2px);
              opacity: 0.8;
          }80%{
              transform: translate(2px, -4px);
          }100%{
              transform: translate(4px, 4px);
          }
        }
      h1 {
        margin: 0px;
        margin-bottom: 30px;
        text-align: center;
        color: rgb(199, 138, 240);
        font-size: 50px;
        font-family: "Bebas Neue", sans-serif;
        font-weight: 500;
        border-bottom: solid;
        position: relative;
      }
      h1 a{
        position: absolute;
        left: 0;
        top: -15px;
      }
      h1 a button {
        padding: 5px;
        background-color: transparent;
        border: solid 1px rgb(199, 138, 240);
        border-radius: 5px;
        color: rgb(199, 138, 240);
        width: 100px;
      }
      h1 a button:hover{
        color: aliceblue;
        background-color: purple;

      }

      .container{
        margin: 0 auto;
        width:90%;
        background-color: rgba(211, 200, 219, .8);
        border-radius: 10px;
        color: rgb(199, 138, 240,);
        height: auto;
        padding: 10px 30px;
        box-sizing: border-box;
      }
      .container figure{
        display: flex;
        align-items: end;
        margin: 0;
        align-items: center;
        position: relative;
      }
      .container img{
        margin: 0 10px 0 0;
        width: 30px;
      }      
      .container figure h3{
        margin: 0;
      }.container figure p{
        position: absolute;
        right: 0;
      }
      
    </style>
  </head>
  <body>
    <main>
      <h1>
        <a href="index.php"><button>Back</button></a>
        GUEST BOOK
      </h1>
      <?php while($note = mysqli_fetch_assoc($query)):?>
      <div class="container">
        <figure>
          <img src="user.png" alt="">
          <h3><?php echo $note["username"];?></h3>
          <p><?php echo $note["tanggal"];?></p>
        </figure>
          <p><?php echo $note["massage"];?></p>
      </div>
      <?php endwhile;?>
    </main>
  </body>
</html>
