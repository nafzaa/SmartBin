@extends('layouts.main')
@section('content')
<div>
    <div class="pagetitle">
        <h1>Applicant</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Applicant</li>
            <li class="breadcrumb-item">List</li>
            <li class="breadcrumb-item active">View</li>
          </ol>
        </nav>
    </div>
    <section>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Applicant : {{$applicant->ic}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection