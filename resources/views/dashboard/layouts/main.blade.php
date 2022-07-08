<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Norma Diagnostika Indonesia | Dashboard</title>

    <!-- Bootstrap Core Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- Custom Style for this template --}}
    <link rel="stylesheet" href="/css/dashboard.css">

    @yield("head_scripts")

</head>
<body>

    @include("dashboard.layouts.header")

    <div class="container-fluid">
        <div class="row">
            @include("dashboard.layouts.sidebar")

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield("container")
            </main>
        </div>
    </div>

    @include("dashboard.layouts.footer")
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- Feather icons --}}
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="/js/dashboard.js"></script>
    @yield("scripts")
</body>
</html>