<?php

if(isset($_POST['email']) AND $_POST['email'] != '') {
    
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Hackers Poulette</title>
</head>
<body color="info">
    <div class="container">
    <form  action="#" method="POST" class="form">
    <img src="./assets/img/hackers.png" id="logo">     
            <div class="form-group">
                <label for="name">Last name :</label>
                <input type="text" name="lastname" class="form-control"placeholder="Type your last name" required>
             </div>
                
            <div class="form-group">
                <label for="first-name">First name :</label>
                <input type="text" name="firstname" class="form-control" placeholder="Type your first name" required>
            </div>
                            
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="example@email.com" required >
            </div>

            <div class="form-group">
                <label for="country">Country :</label>
                <input type="text" id="country" name="country" class="form-control" placeholder="Type your country" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label><br>
                <input type="radio" name="gender" value="male" alt="male"> Male
                <input type="radio" name="gender" value="female" alt="female"> Female
            </div>
                                                    
            <div class="form-group">                          
                <label for="subject">Subject :</label>
                <select name="subject" required alt="What is the subject?" >
                <option value="Other" alt="other">Other</option>
                <option value="Order" alt="order">Order</option>
                <option value="Claim" alt="claim">Claim</option>
            </div>
                
                                                                                
            <div class="form-group">
                <label for="message">Message</label>
                <textarea type="text" id="comment" name="comment" class="form-control" placeholder="Type your message here" required></textarea>
            </div> 
            <div class="form-group center">
                <input type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" value="Send">
            </div>
                                
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
