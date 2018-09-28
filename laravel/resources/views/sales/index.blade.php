<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sales</title>
</head>
<body>
<form action="/SalesConntroller" method="post">
    {{ csrf_field() }}
    <input type="text" name="offernumber" placeholder="offernumber">
    <input type="number" name="offerstatus" placeholder="offerstatus">
    <input type="text" name="prospect" placeholder="prospect">
    <input type="text" name="dateofaction" placeholder="dateofaction">
    <input type="text" name="lastcontactdata" placeholder="lastcontactdata">
    <input type="text" name="nextaction" placeholder="nextaction">
    <input type="text" name="salepercentage" placeholder="salepercentage">
    <input type="text" name="creditworthy" placeholder="creditworthy">
    <input type="text" name="customernumber" placeholder="customernumber">
    <input type="submit" value="submit">

</form>

</body>
</html>