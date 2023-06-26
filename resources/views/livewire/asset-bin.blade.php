<div>
    <div class="pagetitle">
        <h1>Asset</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('asset')}}">Asset</a></li>
            <li class="breadcrumb-item active">Bin</li>
          </ol>
        </nav>
    </div>
    <section>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Asset - Bin - List</h5>
                        <table class="table datatable">
                            <a class="btn btn-success" href="#">Add</a>
                            <thead>
                                <tr>
                                    <th>Bil</th>
                                    <th>M</th>
                                    <th>S</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < $assetBinModel->count(); $i++)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    {{-- <td>{{$assetBinModel[$i]->belongsToAsset->name}}</td> --}}
                                    <td>abc</td>
                                    <td>{{$assetBinModel[$i]->s}}</td>
                                    <td>{{$assetBinModel[$i]->status}}</td>
                                    <td>
                                        <button class="btn btn-primary">View</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
