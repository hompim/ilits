<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Link Shortener</h1>
    @if($errors->any())
            <div class="error">
                <h3>{{$errors->first()}}</h3>
            </div>
    @endif
    
    <form action="/shortener" method="POST">
        @csrf
        <label>
            inilho.its.ac.id/
            <input type="text" name="slug" required>
        </label>
        <label>
            redirect to
            <input type="url" name="link" required>
        </label>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>