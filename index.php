<?php 

# echo 'Hi there!' . $_GET['name'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Login Form</title>
 <style>
    form{
        width: 500px;
        margin: auto;
        padding: 100px;
        font-size: 20px;
        background: lightblue;
        color: blue;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    form .button{
    height: 45px;
    margin: 45px 0;
    
}
form .button input{
    height: 130%;
    width: 130%;
    outline: none;
    color: green;
    background: rgba(3, 169, 244, 0.7);
    border: none;
    font-size: 25px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 10px;
}

form .button input:hover{
    background: lightgreen;
}
  </style> 
</head>
<body>
<form action="login.php" method="post">
    <div class="container">
        <div class="title">Azubi Docker Form</div> <br>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Username" required>
                </div> <br>
      <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" placeholder="Enter Password" required>
                </div>
      <!--<div class="button">
                            <p>
                                <input type="submit" value="submit" name="">
                                
                            </p>
                        </div>-->
                        <div class="button">
                           <input type="submit">
                        </div>
    </form>
</body>