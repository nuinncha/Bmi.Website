<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="test.css">
    <style>
        .text{
            width: 100px;
            height: 100px;
            display: inline-block;
            margin: 2px;
        }
        .right {
        position: absolute;
        right: 0px;
        padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container py-2">
        <b style="font-size: 50px; font:bold; color:#ff69b4" class="text-pink">LOGIN</b><br>
        <p class="text-pink">Login in to NTB.</p>
        <input type="username" placeholder="username"><br>
        <input type="password" placeholder="password"><br>
        <a href="">forgot your password?</a><br>
        <button class="bt">Sign Up</button>
    </div>
    <div style="margin-right: 0; " class="container">
        <b class="light">Get Started</b><br>
        <p style="padding-right:20px">Not registred yet?</p><br>
        <button style="display: inline-block; padding-right:20px" class="bt">Sign Up</button>
    </div>
</body>
</html>
