

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{TITLE}}</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        .wrapper {
            width: 80%;
            margin: 0 auto;
        }

        #header {
            display: flex;
            align-items: center;
        }

        a {
            text-decoration: none;
            text-transform: uppercase;
            color: black;
        }
        a:hover {
            font-weight: bold;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-right: 20px;
        }
        .active {
            border-bottom: 1px solid;
            margin-bottom: -1px;
        }
        .text {
           width: 660px;
        }
        {{CALC_2}}

    </style>
</head>
<body>
<div class="wrapper">
    <header id="header">
        <div class="logo">
            <a href="index.php"><img src="{{LOGO}}" width="80%" alt="logo"></a>
        </div>
        <nav class="menu">
            <ul>
                <a class="{{ACTIVE-1}}" href="calc-1.php">
                    <li>Калькулятор - 1</li>
                </a>
                <a class="{{ACTIVE-2}}" href="calc-2.php">
                    <li>Калькулятор - 2</li>
                </a>
            </ul>
        </nav>
    </header>
    <main>
        <h1>{{CALC_NAME}}</h1>
        <section>
            <div class="text">{{CONTENT}}</div>
        </section>


    </main>
</div>

</body>
</html>