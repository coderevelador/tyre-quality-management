@include('partials.header')

<div id="main-wrapper">

    <!--**********************************
       navigation start
    ***********************************-->
    @include('partials.nav')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        @yield('content')
    </div>

    <!--**********************************
            Content body end
        ***********************************-->
    @include('partials.footer')
