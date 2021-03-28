<!DOCTYPE html>
<html lang="en">
<head>
<link href="mailer.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Barlow:600|Rasa:300,500" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<div id="options">
        <span class="sections" id="s1"><a href="index.html">Home</a></span>
        <span class="sections" id="s2"><a href="home.html">About</a></span>
        <span class="sections" id="s4"><a href="works.html">Works</a></span>
        <span class="sections" id="s3"><a href="mailer.php">Contact</a></span>
    </div>
    <img src="3.jpg" id="firstimg">
    <div id="overlay"></div>
    <div id="design"></div>
    <form id="myform">
    <label>Name:</label>
    <input type="text" id="name" name="name" placeholder="Name"><br/><br/>
    <label>Email:</label>
    <input type="email" id="email" name="email" placeholder="Email"><br/><br/>
    <label>Subject:</label>
    <input type="subject" id="subject" name="subject" placeholder="Subject"><br/><br/>
    <label>Message:</label>
    <textarea  id="body" rows="10" cols="40" placeholder="Your Message"></textarea><br/><br/>
    <button type="button" onclick="sendEmail()" value="Send an Email">Submit</button>
</form>
<h4 class="sent-notification"></h4>
<h1 id="sech">Connect Me here:</h1>
<div class="icons">
<a href="https://www.facebook.com/hariharan.amutha" class="fa fa-facebook"></a>
<a href="https://twitter.com/Balahari123451?s=08" class="fa fa-twitter"></a>
<a href="https://www.linkedin.com/in/hariharan-balakrishnan-0a70a2205/" class="fa fa-linkedin"></a>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
function sendEmail(){
    var name = $("#name");
    var email  = $("#email");
    var subject = $("#subject");
    var body = $("#body");
    
    if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
        $.ajax({
            url: 'sendEmail.php',
            method:'POST',
            datatype:'json',
            data:{
                name: name.val(),
                email: email.val(),
                subject: subject.val(),
                body: body.val()
            },success: function(response){
                $('#myform')[0].reset();
                $('.sent-notification').text("Message Sent");
            }
        });
    }
}
function isNotEmpty(caller){
    if(caller.val()==""){
        caller.css('border','1px solid red');
        return false;
    }
    else{
        caller.css('border','');
        return true;
    }
}
</script>
</body>
</html>