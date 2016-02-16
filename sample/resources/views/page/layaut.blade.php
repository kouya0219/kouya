<!DOCTYPE html>
<html lang="en">
@include('page.component.head')
<body class="">
<div class="">
    @include('page.component.mainheader')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    @include('page.component.footer')
</div><!-- ./wrapper -->
</body>
</html>
