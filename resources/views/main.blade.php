<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>

    <div class="wrapper">

        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Blog Project</h3>
            </div>
            <ul class="list-unstyled-conponents">

                <li class="active"><a href="">Dashboard</a></li>

                <li><a href="">Categories</a></li>
                <li><a href="">Sub-Categories</a></li>
            </ul>
        </nav>



        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info button1"><i
                            class="fa fa-align-justify" aria-hidden="true"></i>
                    </button>


                </div>

            </nav>
            {{-- <div class="container">
                <br><br>
                <h2>collapse Sidebar using toggle</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam provident rerum, deserunt nisi, iusto
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam provident rerum, deserunt nisi, iusto
                    blanditiis vero temporibus velit quasi cum impedit expedita et eveniet incidunt ea, corporis commodi
                    nesciunt voluptas!</p>
                <div class="line"></div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam provident rerum, deserunt nisi, iusto
                    blanditiis vero temporibus velit quasi cum impedit expedita et eveniet incidunt ea, corporis commodi
                    nesciunt voluptas!</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam provident rerum, deserunt nisi, iusto
                    blanditiis vero temporibus velit quasi cum impedit expedita et eveniet incidunt ea, corporis commodi
                    nesciunt voluptas!</p>
            </div> --}}
            @yield('content')
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
