<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>hello you!</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
  </head>
  <body>
    <header>
      <div class="">
        <button type="button" name="button" href="/"><a >Home</a></button>
      </div>
    </header>
    <h1> Hello {{$name}} !</h1>
  </body>
</html>
