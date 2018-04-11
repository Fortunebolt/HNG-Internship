<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
        body {
            background-color: orange;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Roboto', Arial, Helvetica, sans-serif;
        }

        #group {
            background-color: white;
            box-shadow: 0px 4px 7px rgba(0, 0, 0, 0.1);
            border: 0px solid transparent;
            border-radius: 5px;
            padding: 26px 32px;
            width: 267px;
        }

        .title {
            font-weight: bold;
            font-size: 20px;
            color: rgba(0, 0, 0, 0.8);
            margin: 0px;
            padding: 0px;
        }

        .answer {
            font-size: 14px;
            color: rgba(0, 0, 0, 0.54);
            margin: 0px;
            padding: 0px;
        }

        p{
            text-align: justify;
        }
    </style>
</head>

<body>
    <div id="group">
        <p class="title">What is the time?</p>
        <p class="answer" style="margin-bottom: 16px;">Time? Time is a created thing. To say 'I don't have time,' is like saying, 'I don't want to’.</p>

        <p class="title">Unless you wanted to know the current time?</p>
        <p class="answer">It's
            <span>
                <?php echo date("h:i A") ?>.
            </span>
        </p>
    </div>
</body>

</html>