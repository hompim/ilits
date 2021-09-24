<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('ilits22.ico') }}">
    <title>Link Shortener</title>
</head>
<body>
    <div class="w-100 d-flex justify-content-center align-items-center">
        <h1 class="py-4">Link Shortener ILITS</h1>
    </div>
    @if($errors->any())
            <div class="error">
                <h3>{{$errors->first()}}</h3>
            </div>
    @endif
    
    <div class="container">
        <form action="{{ route('link.store') }}" class="my-4" method="POST">
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
    </div>
    
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Url</th>
                            <th scope="col">Redirect To</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($link_all as $i)
                            <tr>
                                <td><a href="//{{ Request::getHost().'/'.$i->slug }}">{{ Request::getHost().'/'.$i->slug }}</a></td>
                                <td><a href="{{ $i->link }}">{{ $i->link }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>