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
<form action="" method="post">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="name">
    <input type="text" name="lastname" placeholder="last name">
    <input type="text" name="address" placeholder="address">
    <input type="number" name="zipcode" placeholder="zipcode">
    <input type="text" name="residence" placeholder="residence">
    <input type="number" name="telnumber" placeholder="telephone">
    <input type="number" name="faxnumber" placeholder="faxnumber">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="company" placeholder="company">
    <input type="number" name="costumernumber" placeholder="costumernumber">
    <input type="submit" value="submit">

</form>

</body>
</html>