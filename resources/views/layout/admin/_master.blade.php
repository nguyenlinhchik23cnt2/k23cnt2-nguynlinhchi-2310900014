<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
    
</head>
<style>
    body {
        background-color: #f4f4f9;
        font-family: Arial, sans-serif;
    }
    .sideBar {
        width: 250px;
        min-height: 100vh;
        background: #343a40;
        color: white;
        position: fixed;
    }
    .sideBar a {
        color: white;
        text-decoration: none;
        padding: 10px;
        display: block;
        transition: background 0.3s;
    }
    .sideBar a:hover {
        background: #495057;
    }
    .wrapper {
        margin-left: 250px;
        padding: 20px;
        width: calc(100% - 250px);
        
        min-height: 100vh;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .content-body {
        margin-top: 20px;
        padding: 20px;
      z
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>
<body>
    
    <div class="d-flex">
        <!---Side--->
        <nav class="sideBar">
            @include('layout.admin._menu')
        </nav>
        <!--main--->
        <div class="wrapper">
            <!---header-->
            <header>
                @include('layout.admin.headertitle')
            </header>
            <!--content body-->
            <section class="content_body">
                @yield('content-body')
            </section>

        
        </div>
        <header class="banner">
            @include('layout.admin.header')
          </header>
          <article>
            @include('layout.admin.article')
          </article>
          <footer>
            @include('layout.admin.footer')
          </footer>
    
    </div>
    
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</body>
</html>