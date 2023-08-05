$name = $_POST ['name'];
$email =$_POST ['email'];
$photo= $_POST ['phone'];
$website = $_POST['$website'];
$message = $_POST['message'];


if (!empty($email) && !empty ($message)){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $receiver = "codin@gmail.com";
        $subject = "From $name <$email>";

        $body = "Name: $name\nEmail: $email\nPhone: $phone \nWebsit: $wedsite\n\nMessage: $message\n\nRegards, \n$name ";
        $sender = "From: $email";
        if (mail ($receiver, $subject, $body,$sender)){

        }else{
            echo "Sorry , failed to send your message !";
        }
    }else{
        echo "Enter a valid email address!";
    }
}else{
    echo "Email and password file is required!";
}