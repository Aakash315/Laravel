<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Demo</title>
</head>

<body>
    <div>
        <div class="header positioin-absolute bg-info">
            <ul>
                <li class="d-inline">
                    <a class="m-5 p-10 fs-2" style="text-decoration: none;" href="/demohome">Home</a>
                </li>
                <li class="d-inline">
                    <a class="m-5 p-10 fs-2" style="text-decoration: none;" href="/demoabout">About</a>
                </li>
                <li class="d-inline">
                    <a class="m-5 p-10 fs-2" style="text-decoration: none;" href="">login</a>
                </li>
                <li class="d-inline">
                    <a class="m-5 p-10 fs-2" style="text-decoration: none;" href="/democontact">Contact</a>
                </li>
            </ul>
        </div>
        <div>
            <form action="" method="post">
                <div>
                    <input class="form-control" type="text" name="user" placeholder="Enter Your User ID ">
                </div>
                <div class="mt-3">
                    <input class="form-control" type="password" name="password" placeholder="Enter Your Password ">
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div>
            <h1>{{$title}}</h1>
            <h3>{{$subtitle}}</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, mollitia? Incidunt architecto iusto temporibus minus.</p>
        </div>
    </div>
    <div class="footer position-absolute fixed-bottom bg-dark text-white">
        <p class="w-100 p-10 text-center mt-3">Footer Page</p>
    </div>
</body>

</html>