@include('dashboard.includes.header-include')

    @include('dashboard.includes.menu')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    @if (auth()->user()->is_activated)
                         @include('dashboard.pages.user-activated')
                    @else
                        @include('dashboard.pages.user-not-activated')
                    @endif
                </div>
            </div>

            <!-- End Page-content -->
                
@include('dashboard.includes.footer-include')
              