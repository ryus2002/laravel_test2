<!DOCTYPE html>
<html lang="zh-tw">
    <head>
        @include('includes.head')
    </head>
    <body>
        <header>
            @include('includes.header')
        </header>
        <div class="f-mainContents u-container">
        @yield('content')
        @include('includes.searchdiv')
        </div>
        <footer class="f-footer">
            @include('includes.footer')
        </footer>
    </body>
</html>