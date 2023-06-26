<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="{{ (request()->is('home')) ? 'nav-link' : 'nav-link collapsed' }}" href="{{route('home')}}">
                <i class="bi bi-house-door"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        {{-- ASSET --}}
        {{-- <li class="nav-item">
            <a class="{{ (request()->is('asset*')) ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#asset-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-text"></i><span>Asset</span><i
                    class="bi bi-chevron-down ms-auto">
                </i>
            </a>
            <ul id="asset-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('asset')}}">
                        <i class="bi bi-circle"></i><span>List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('asset.create')}}">
                        <i class="bi bi-circle"></i><span>Create</span>
                    </a>
                </li>
                <li>
                    <a href="forms-layouts.html">
                        <i class="bi bi-circle"></i><span>Update</span>
                    </a>
                </li>
            </ul>
        </li> --}}

        {{-- ASSET - BIN --}}
        <li class="nav-item">
            <a class="{{ (request()->is('asset.bin*')) ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#asset-bin-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-text"></i>
                <span>Asset - Bin</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="asset-bin-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('asset.bin')}}">
                        <i class="bi bi-circle"></i><span>List</span>
                    </a>
                </li>
            </ul>
        </li>

        {{-- APPLICATION --}}
        <li class="nav-item">
            <a class="{{ (request()->is('application*')) ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#application-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-text"></i>
                <span>Application</span>
                <i class="bi bi-chevron-down ms-auto"></i>
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

        {{-- SETTING --}}
        <li class="nav-item">
            <a class="{{ (request()->is('setting*')) ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#setting-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-text"></i>
                <span>Setting</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="setting-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('setting')}}">
                        <i class="bi bi-circle"></i><span>List</span>
                    </a>
                </li>
                <li>
                    {{-- <a href="{{route('setting.scheme')}}"></a> --}}
                </li>
            </ul>
        </li>

        {{-- BIN --}}
        {{-- <li class="nav-item">
            <a class="{{ (request()->is('bin*')) ? 'nav-link' : 'nav-link collapsed' }}" data-bs-target="#bin-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-file-earmark-text"></i><span>Bin</span><i
                    class="bi bi-chevron-down ms-auto">
                </i>
            </a>
            <ul id="bin-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('bin')}}">
                        <i class="bi bi-circle"></i><span>List</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('application.create')}}">
                        <i class="bi bi-circle"></i><span>Add</span>
                    </a>
                </li>
                <li>
                    <a href="forms-layouts.html">
                        <i class="bi bi-circle"></i><span>Update</span>
                    </a>
                </li>
            </ul>
        </li> --}}

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



    </ul>

</aside><!-- End Sidebar-->