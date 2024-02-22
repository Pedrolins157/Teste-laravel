<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Laravel</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content" class="">

                @include('layout.topbar')

                <div class="container-fluid mb-5">
               

                    @yield('content')

                </div>
            </div>

           
            @include('layout.footer')
            @include('layout.modal.modal')

        </div>

    </div>


</body>


</html>