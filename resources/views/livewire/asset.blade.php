<div>
    <div class="pagetitle">
        <h1>Asset</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('asset')}}">Asset</a></li>
            {{-- <li class="breadcrumb-item active">List</li> --}}
          </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Asset List</h5>
                        <table class="table datatable">
                            <a class="btn btn-success" href="{{route('asset.create')}}">Add</a>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Asset Id</th>
                                    <th>Asset No</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < $assets->count(); $i++)
                                <tr>
                                    <td>{{$i+1}}</td>
                                    <td>{{$assets[$i]->asset_id}}</td>
                                    <td>{{$assets[$i]->asset_no}}</td>
                                    <td>{{$assets[$i]->name}}</td>
                                    <td>{{$assets[$i]->type}}</td>
                                    <td>{{$assets[$i]->created_at}}</td>
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
