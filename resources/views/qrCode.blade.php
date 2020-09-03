<!DOCTYPE html>
<html>
<head>
    <title>Generate Qr</title>
</head>
<body>
<div class="visible-print text-center">
    <h1>QR Code Generator Example</h1>
    {!! QrCode::size(200)->generate('abbymercados.com'); !!}
    <p>example by abbymercados.com</p>
</div>
</body>
</html>
