<!DOCTYPE html>
<html lang="en">
<head>
    <title>Firebase Phone Number Auth</title>
</head>
<body>
<form>
    <input type="text" id="verificationcode" value="enter verification">
    <input type="button" value="Submit" onclick="myFunction()">
</form>
<div id="recaptcha-container"></div>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>

<script type="text/javascript">
    var firebaseConfig = {
        apiKey: "AIzaSyD3OmIzSvr0GSmenffr4Qo5moBDERGrKcs",
        authDomain: "take-me-route.firebaseapp.com",
        databaseURL: "https://take-me-route.firebaseio.com",
        projectId: "take-me-route",
        storageBucket: "take-me-route.appspot.com",
        messagingSenderId: "130660238072",
        appId: "1:130660238072:web:4c165b27736f1481"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);


    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('sign- in-button', {
    'size': 'invisible',
        'callback': function(response) {
        // reCAPTCHA solved, allow signInWithPhoneNumber.
        onSignInSubmit();
    }
    });
</script>
<script type="text/javascript">
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    firebase.auth().signInWithPhoneNumber("+", window.recaptchaVerifier)
        .then(function(confirmationResult) {
            window.confirmationResult = confirmationResult;
            console.log(confirmationResult);
        });
    var myFunction = function() {
        window.confirmationResult.confirm(document.getElementById("verificationcode").value)
            .then(function(result) {
                console.log(result);
            }).catch(function(error) {
            console.log(error);
        });
    };
</script>
</body>
</html>