<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ">
            <a class="nav-link" href="{{route('EventMembers')}}">eventMembers <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('ArtCommittee')}}">Art</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('BlenderCommittee')}}">Blender</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('cccCommittee')}}">CCC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('EnglishCommittee')}}">English</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('GameCommittee')}}">Game</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('HRCommittee')}}">HR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('LinuxCommittee')}}">Linux</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('LRCommittee')}}">LR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('ProjectsCommittee')}}">PR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('ProjectsCommittee')}}">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('WebCommittee')}}">Web</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container py-5 text-center">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
