

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        Dear Admin,
    </p>


    <p>
        {{ $name }} wants a call. Please review the details below.
    </p>



    User details: <br><br>

    Name:  {{ $name }}<br>
    Email:  {{ $email }}<br>
    Country Code: {{  $country_code }}<br>
    Phone: {{ $phone }}<br>
    Via: {{ $via }}<br>
    {{-- Message:  {{ $message }}<br><br> --}}

    Thanks
    s
</body>
</html>





