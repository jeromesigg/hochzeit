<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anmeldung</title>
</head>
<body>
    <h1>Anmeldung</h1>
    <table class="table">
        <tbody>
            <tr>
                <th scope="row" style="text-align:left">Name</th>
                <td>{{$name}}</td>
            </tr>
            <tr>
                <th scope="row" style="text-align:left">Vorname</th>
                <td>{{$firstname}}</td>
            </tr>
            <tr>
                <th scope="row" style="text-align:left">E-Mail</th>
                <td>{{$email}}</td>
            </tr>
            <tr>
                <th scope="row" style="text-align:left">Antwort</th>
                <td>{{$response}}</td>
            </tr>
            <tr>
                <th scope="row" style="text-align:left">Anzahl Personen</th>
                <td>{{$amount}}</td>
            </tr>
            <tr>
                <th scope="row" style="text-align:left">Bemerkungen</th>
                <td>{{$content}}</td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>