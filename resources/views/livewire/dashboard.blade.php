<div>
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></li>
          </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        @include('components.Dashboard.Section.services')
    </section>
</div>