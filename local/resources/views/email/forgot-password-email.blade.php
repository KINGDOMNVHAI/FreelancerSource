<!doctype html>
<html lang="en">

<head>
    <title>Send Email Forgot Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
                <h3> Send Email Forgot Password </h3>
                <p> Hello, {{ $fullname }}</p>
                <p> Welcome to BookStore </p>
                <p> Your new password is: {{ $password }}</p>
                <br />
                <br />
                <p> Best Regards</p>
                <p> BookStore </p>
            </div>
        </div>
    </div>
</body>

</html>
