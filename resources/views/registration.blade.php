<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Application Registration</h1>
            <br>Login ID <button>Menu</button><button>Logout</button><hr>
            
            <div class="form-group">
            <h4>Application Information</h4>
                <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label>Name</label>
                    <input type="text" name="name" id="name">
                    <label>Address</label>
                    <input type="text" name="address" id="address">
            <h4>Upload Identification Paper</h4>
                    <input type="file" name="file" id="file">
            <h4>Upload Application Paper</h4>
                    <input type="file" name="file1" id="file1">
            <h4>Upload Other Paper</h4>
                    <input type="file" name="file2" id="file2">
                    <br><input type="submit" value="Confirm" name="confirm">

                </form>
            </div>

        </div>
    </body>
</html>