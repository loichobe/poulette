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
    <title>Hackers Poulette</title>
</head>
<body>
        <form>
        <label for="firstname">First name :</label>
        <input type="text" name="firstname" required placeholder="Your first name" alt="First name">
        <label for="lastname"> Last name :</label>
        <input type="text" name="lastname" required placeholder="Your last name" alt="Last name"><br><br>
        <label for="gender">Gender</label><br>
        <input type="radio" name="gender" value="male" alt="male"> Male
        <input type="radio" name="gender" value="female" alt="female"> Female<br><br>
        <label for="email">Email adress :</label>
        <input type="email" required name="email" placeholder="exemple@email.com" alt="Email">
        <label for="country">Country</label>
        <input type="text" required name="country" placeholder="Country" alt="Country">
        <label for="subject">Subject :</label>
        <select name="subject" required alt="What is the subject?" >
            <option value="Other" alt="other">Other</option>
            <option value="Order" alt="order">Order</option>
            <option value="Claim" alt="claim">Claim</option>
        </select><br>
        <label for="comment">Message :</label>
        <textarea name="comment" id="comment"></textarea></textarea>
        <input type="submit" value="Confirm" name="confirm" alt="Confirm">

    </form>
</body>
</html>
