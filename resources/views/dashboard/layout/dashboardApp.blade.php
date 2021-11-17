@include('dashboard.includes.header-include')

    @include('dashboard.includes.menu')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                   
                    @yield('content')

                </div>
                
            </div>

            <!-- End Page-content -->
                
@include('dashboard.includes.footer-include')
              