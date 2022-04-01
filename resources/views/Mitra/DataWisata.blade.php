<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Halaman Data Wisata</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                <a class="navbar-brand" href="#">TelusurTasik</a>
                <a class="navbar-brand" href="#" style="color:#0000ff;" ><img src="img/{{ $image }}" width="30">Logout</a>
                </div>
            </nav>
        </div>
        
        <ul class="nav flex-column">
            <img src="img/{{ $image }}" alt="{{ $name }}" width="80">
            <h3 style="color: #ffffff;">{{ $name }}</h3> 
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color: #ffffff;">Data Wisata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #ffffff;">Data Ulasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #ffffff;">Customer Service</a>
            </li>

        </ul>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
