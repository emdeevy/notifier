<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Natural HR Notifier</title>

        <meta charset="utf-8">

        <script crossorigin src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
        <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

        <script type="text/babel" src="js/react/out/Card.js"></script>

        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

    </head>

    <body>

        <div id="login-register"></div>

        <script type="text/babel">
            
            ReactDOM.render(
                <Card />,
                document.getElementById('login-register')
            );

        </script>
    </body>

</html>