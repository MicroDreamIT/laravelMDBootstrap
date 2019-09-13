<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="flexible-content">
        <!--Navbar-->
        <mdb-navbar class="flexible-navbar white" light position="top" scrolling>
            <mdb-navbar-brand href="https://mdbootstrap.com/docs/vue/" target="_blank">MDB</mdb-navbar-brand>
            <mdb-navbar-toggler>
                <mdb-navbar-nav left>
                    <mdb-nav-item to="/" waves-fixed active class="active">Home</mdb-nav-item>
                    <mdb-nav-item href="https://mdbootstrap.com/docs/vue/getting-started/quick-start/" waves-fixed>About
                        MDB
                    </mdb-nav-item>
                    <mdb-nav-item href="https://mdbootstrap.com/docs/vue/getting-started/download/" waves-fixed>Free
                        download
                    </mdb-nav-item>
                    <mdb-nav-item href="https://mdbootstrap.com/education/bootstrap/" waves-fixed>Free tutorials
                    </mdb-nav-item>
                </mdb-navbar-nav>
                <mdb-navbar-nav right>
                    <mdb-nav-item href="#!" waves-fixed>
                        <mdb-icon fab class="text-black" icon="facebook-square"/>
                    </mdb-nav-item>
                    <mdb-nav-item href="#!" waves-fixed>
                        <mdb-icon fab icon="twitter"/>
                    </mdb-nav-item>
                    <mdb-nav-item href="https://github.com/mdbootstrap/bootstrap-material-design" waves-fixed
                                  class="border border-light rounded mr-1" target="_blank">
                        <mdb-icon fab icon="github" class="mr-2"/>
                        MDB GitHub
                    </mdb-nav-item>
                    <mdb-nav-item href="https://mdbootstrap.com/products/vue-ui-kit/" waves-fixed
                                  class="border border-light rounded" target="_blank">
                        <mdb-icon icon="gem" far class="mr-2"/>
                        Go Pro
                    </mdb-nav-item>
                </mdb-navbar-nav>
            </mdb-navbar-toggler>
        </mdb-navbar>
        <!--/.Navbar-->
        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">
            <a class="logo-wrapper"><img alt="" class="img-fluid" src="/images/assets/logo-mdb-vue-small.png"/></a>
            <mdb-list-group class="list-group-flush">
                <router-link to="/dashboard" @click.native="activeItem = 1">
                    <mdb-list-group-item :action="true" :class="activeItem === 1 && 'active'">
                        <mdb-icon icon="chart-pie" class="mr-3">Dashboard</mdb-icon>
                    </mdb-list-group-item>
                </router-link>
                <router-link to="/" @click.native="activeItem = 2">
                    <mdb-list-group-item :action="true" :class="activeItem === 2 && 'active'">
                        <mdb-icon icon="chart-pie" class="mr-3"/>
                        Dashboard
                    </mdb-list-group-item>
                </router-link>
                <router-link to="/" @click.native="activeItem = 3">
                    <mdb-list-group-item :action="true" :class="activeItem === 3 && 'active'">
                        <mdb-icon icon="chart-pie" class="mr-3"/>
                        Dashboard
                    </mdb-list-group-item>
                </router-link>
            </mdb-list-group>
        </div>
        <!-- /Sidebar  -->
        <main>
            <div class="mt-5 p-5">

                <router-view></router-view>
            </div>
            <ftr color="primary-color-dark" class="text-center font-small darken-2">
                <div class="pt-4">
                    <mdb-btn outline="white" tag="a" href="https://mdbootstrap.com/docs/vue/getting-started/download/"
                             target="_blank">Download MDB
                        <mdb-icon icon="download" class="ml-2"/>
                    </mdb-btn>
                    <mdb-btn outline="white" tag="a" href="https://mdbootstrap.com/education/bootstrap/"
                             target="_blank">Start free tutorial
                        <mdb-icon icon="graduation-cap" class="ml-2"/>
                    </mdb-btn>
                </div>
                <hr class="my4"/>
                <div class="pb-4">
                    <a href="#">
                        <mdb-icon fab icon="facebook-square" class="mr-3"/>
                    </a>
                    <a href="#">
                        <mdb-icon fab icon="twitter" class="mr-3"/>
                    </a>
                    <a href="#">
                        <mdb-icon fab icon="youtube" class="mr-3"/>
                    </a>
                    <a href="#">
                        <mdb-icon fab icon="google-plus" class="mr-3"/>
                    </a>
                    <a href="#">
                        <mdb-icon fab icon="dribbble" class="mr-3"/>
                    </a>
                    <a href="#">
                        <mdb-icon fab icon="pinterest" class="mr-3"/>
                    </a>
                    <a href="#">
                        <mdb-icon fab icon="github" class="mr-3"/>
                    </a>
                    <a href="#">
                        <mdb-icon fab icon="codepen" class="mr-3"/>
                    </a>
                </div>
                <p class="footer-copyright mb-0 py-3 text-center">

                </p>
            </ftr>
        </main>
    </div>
</div>
</body>
</html>
