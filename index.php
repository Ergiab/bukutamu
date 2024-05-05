<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Bebas+Neue&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap"
      rel="stylesheet"
    />
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
        background-position: center;
      }
      main {
        color: aliceblue;
        background-color: rgba(0, 0, 0, 0.6);
        margin: 11vh auto 0;
        display: flex;
        flex-direction: column;
        max-width: 400px;
        border-radius: 30px;
        padding: 40px;
        padding-bottom: 40px;
        box-shadow: 20px 15px 20px rgb(19, 1, 31);
        overflow: hidden;
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
        text-align: center;
        color: rgb(231, 216, 241);
        font-size: 50px;
        font-family: "Bebas Neue", sans-serif;
        font-weight: 500;
      }
      h3 {
        margin: 0px 0;
        text-align: center;
        color: rgb(199, 138, 240);
        font-size: 30px;
        font-family: "Bebas Neue", sans-serif;
        font-weight: 100;
      }
      label{
        margin-top: 30px;
        margin-bottom: 10px;
      }
      input{
        background-color: white;
        width: 100%;
        height: 30px;
        border-radius: 10px;
        background-color: rgb(231, 216, 241);
  
    }
      textarea{
        width: 100%;
        border-radius: 10px;
        background-color: rgb(231, 216, 241);

      }
      .button{
        padding: 30px 0 25px;
        display: flex;
        justify-content: space-between;
      }
      .button button{
        background-color: rgb(187, 101, 236);
        width: 140px;
        border-radius: 4px;
        height: 34px;
        transition: .5s;
      }      
      .button button:hover{
        color: aliceblue;
        background-color: purple;
        width: 140px;
        border-radius: 4px;
        height: 34px;
      }

    </style>
  </head>
  <body>
    <main>
      <h1>GUEST BOOK</h1>
      <h3>Write Your Name And Massage Here</h3>
      <label for="">Enter Your Name :</label>
      <input type="text" />
      <label for="">Enter Your Coment :</label>
      <textarea name="" id="" cols="30" rows="6"></textarea>
        <div class="button">
            <a href="history.php"><button type="submit">History</button></a>
            <button type="submit">Send</button>
        </div>
    </main>
  </body>
</html>
