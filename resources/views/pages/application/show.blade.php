@extends('layouts.main')
@section('content')
<div>
    <div class="pagetitle">
        <h1>Application</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Application</li>
            <li class="breadcrumb-item">List</li>
            <li class="breadcrumb-item active">View</li>
          </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Application Number : {{$application->application_number}}</h5>
                </div>
                <div class="card-body p-3">
                    <div class="d-flex justify-content-center mb-4">
                        <div class="border border-dark">
                            <img src="{{asset('storage/'. $application->ic_front)}}" alt="" style="max-height: 200px">
                        </div>
                    </div>
                    <table class="table">
                        <tbody>
                          <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td>{{$application->full_name}}</td>
                          </tr>
                          <tr>
                            <td>IC Number</td>
                            <td>:</td>
                            <td>{{$application->ic_number}}</td>
                          </tr>
                          <tr>
                            <td>Phone Number</td>
                            <td>:</td>
                            <td>{{$application->phone_number}}</td>
                          </tr>
                          <tr>
                            <td>Bin Type</td>
                            <td>:</td>
                            <td>{{$application->bin_type}}</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Dokumen Pemohon</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-center">
                            <img src="https://image.isu.pub/200714015233-6f831bc02530234c7728f16d77c1ef5d/jpg/page_1.jpg" alt="" style="max-height:400px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h5 class="card-title">QR Code</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="{{asset('image/qrcode_sample.png')}}" alt="" style="max-height:400px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection