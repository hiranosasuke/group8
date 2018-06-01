<!DOCTYPE html>

<html >
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    text-align: center;

}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
}
    h
    {
        padding-top: 100px;
        padding-bottom: 100px;
        color: white;
    }
    
</style>
<head >    
    
   <meta charset="utf-8">
    <title>Contact Form</title>
     <link href = "https://fonts.googleapis.com/css?family=Roboto+condensed:400,700"rel="stylesheet">
    </head>

<body background = "https://images.pexels.com/photos/36487/above-adventure-aerial-air.jpg?auto=compress&cs=tinysrgb&h=650&w=940">

    <main>
    <h>CONTACT</h>
    <p>SEND E-MAIL</p>
    <form class = "contact-form" action ="contactform.php" method="post">
        
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="mail" placeholder="Your e-mail">
        <input type="text" name="subject" placeholder="Subject">
        <textarea name = "message" placeholder = "Message"></textarea>
        <button type="submit" name="submit">SEND MAIL</button>
        
        </form>
    
    </main>
    
    </body>






</html>