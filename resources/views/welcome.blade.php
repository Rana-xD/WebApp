<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrap.cnd.com/bootstrap/3.3.4/css/bootstrap.min.css">

    </head>
    <body>

            <form method="POST" action="/login">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                ID:
                    <input type="text" name="id">


                    Password:
                    <input type="password" name="password">


                    <input type="submit">

            </form>

    </body>
</html>
