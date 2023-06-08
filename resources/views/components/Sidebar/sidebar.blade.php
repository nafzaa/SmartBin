<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="{{ (request()->is('home')) ? 'nav-link' : 'nav-link collapsed' }}" href="{{route('home')}}">
                <i class="bi bi-house-door"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item">
            <a class="{{ (request()->is('application*')) ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#application-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-text"></i><span>Application</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="application-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('application')}}">
                        <i class="bi bi-circle"></i><span>List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('application.create')}}">
                        <i class="bi bi-circle"></i><span>Apply</span>
                    </a>
                </li>
                <li>
                    <a href="forms-layouts.html">
                        <i class="bi bi-circle"></i><span>Update</span>
                    </a>
                </li>
            </ul>
        </li>
        
        <!-- End application Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#vendor-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-text"></i><span>Vendor</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="vendor-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="forms-layouts.html">
                        <i class="bi bi-circle"></i><span>List</span>
                    </a>
                </li>
            </ul>
        </li> --}}
        <!-- End application Nav -->



    </ul>

</aside><!-- End Sidebar-->