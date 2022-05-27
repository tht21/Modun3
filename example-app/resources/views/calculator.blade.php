<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<body>
<form method="post" action="{{'calculator'}}">
   @csrf
    <div class="login">
        <h2 style="color: green ;">Product Discount Calculator</h2>
        <p style="color: green"><b>Product Description :</b>
            <input type="text" name="Product Description" size="25" style="margin-left: 10px"/></p>
        <p style="color: green"><b>List Price:</b>
            <input type="text" name="Price" size="25" style="margin-left: 105px">
        </p>
        <p style="color: green"><b>Discount Percent :</b>
            <input type="text" name="Discount Percent" size="25" style="margin-left: 30px">
        </p>
        <input type="submit" value="Calculator">
    </div>
</form>
</body>
</html>
