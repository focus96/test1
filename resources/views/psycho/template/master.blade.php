<!DOCTYPE html>
<html lang="en">
    @include('psycho.template.head')
<body>
    @include('psycho.template.header')
    @include('psycho.template.main')
    @yield('registration')
    @include('psycho.template.footer')
    @include('psycho.template.onlineHelp')
</body>
</html>
