<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form method="POST">
    <table style="border:1px solid purple">
        <tr>
            <th>Qty</th>
            <th>Price</th>
            <th>Total</th>
        </tr>

        <tr id="test">
            <td><input class="qty" type="text" name="qty[]"></td>
            <td><input class="price" type="text" name="price[]"></td>
            <td><input type="text" class="output" name="output[]"></td>
        </tr>
        <tr id="test">
            <td><input class="qty" type="text" name="qty[]"></td>
            <td><input class="price" type="text" name="price[]"></td>
            <td><input type="text" class="output" name="output[]"></td>
        </tr>
        <tr id="test">
            <td><input class="qty" type="text" name="qty[]"></td>
            <td><input class="price" type="text" name="price[]"></td>
            <td><input type="text" class="output" name="output[]"></td>
        </tr>
    </table>
    <div id="grand">
        Grand Total:<input type="text" name="gran" id="gran">
    </div>
</form>



</body>
</html>