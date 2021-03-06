<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bankas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/namu-darbai/objektinis-bankas/css/login.css"> -->
    <!-- <link rel="stylesheet" href="../css/stilius.css"> -->
    <style>
        body {
            margin: 0;
            padding: 0;
            vertical-align: top;
            box-sizing: border-box;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
            word-break: break-all;
            background: #fffae6;
            background: -webkit-linear-gradient(to right, #ffffff, #fffae6);
            background: linear-gradient(to right, #ffffff, #fffae6);
        }

        /* MAIN */

        .logout {
            float: right;
            margin-right: 10px;
            position: relative;
            top: -35px;
            padding: 2px 5px 2px 5px;
            font-weight: bold;
        }

        .formBtnDel {
            display: inline;
        }

        .nav {
            display: inline-block;
            width: 100vw;
        }

        .nav-item {
            display: inline-block;
        }

        .active {
            background-color: #fffdf4 !important;
            color: #0d6efd !important;
        }

        .nav-link {
            color: black;
        }

        .table {
            text-align: center;
            margin: 5vh 5vw 0 5vw;
            width: 90vw;
            border: 1px solid black;
            min-width: 900px;
        }

        .userImg {
            height: 26px;
            width: 26px;
            margin-right: 2px;
            margin-top: -3px;
        }

        .loggedInArea {
            display: inline-block;
            position: relative;
            top: -51px;
            left: 87%;
            width: 200px;
            height: 26px;
            z-index: -1;
        }

        .loggedInAs {
            line-height: 26px;
            display: inline;
            border: none;
            margin-top: 10px;
        }

        .errAlign {
            text-align: center;
        }

        .logo {
            margin-left: 20vw;
            width: 60vw;
            height: 21vh;
        }

        .fillBg {
            background-color: #f3e9f1;
        }

        .navDivSize {
            height: 45px;
        }

        /* Create account */

        .newAccForm {
            padding: 30px 0px;
            width: 40%;
            border: 1px solid black;
            border-radius: 5px;
            margin: 5vh 30% 0 30%;
            min-width: 350px;
        }

        label {
            display: block;
            margin: 15px 0 5px 15%;
        }

        .createAccBtn {
            display: block;
            width: 130px;
            margin: 20px 0 0 calc((100% - 130px) / 2);
        }

        .form-control {
            margin: 0 15% 0 15%;
            width: 70%;
        }

        #iban {
            text-align: center;
            word-spacing: 3px;
            letter-spacing: 0.5px;
        }

        /* Add/Rem funds */

        .addRemDiv {
            border: 1px solid black;
            margin: 50px 0 0 100px;
            width: 20%;
            border-radius: 5px;
            padding: 10px 20px;
        }

        span {
            display: block;
            font-size: 20px;
            border-bottom: 1px solid lightgray;
            margin-top: 15px;
        }

        .accInfo {
            border: none;
            font-size: 18px;
            text-align: center;
            width: 100%;
            background-color: #f3e9f1;
            margin-top: 5px;
        }

        .width {
            width: 250px;
            margin: 30px 0 0 calc((100% - 250px) / 2);
        }
    </style>
</head>

<body>