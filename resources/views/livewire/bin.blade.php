<div>
    <div class="pagetitle">
        <h1>Bin List</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Bin</li>
            <li class="breadcrumb-item active">List</li>
          </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">List</h5>      
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                      <a class="btn btn-success" href="{{route('bin.create')}}">Add</a>
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Skim</th>
                          <th scope="col">Jenis Premis</th>
                          <th scope="col">Lokasi</th>
                          <th scope="col">Jalan</th>
                          <th scope="col">Taman</th>
                          <th scope="col">Poskod</th>
                        </tr>
                      </thead>
                      <tbody>
                        @for($i=0; $i<$bins->count(); $i++)
                        <tr>
                          <th scope="row">{{$i+1}}</th>
                          <td>{{$bins[$i]->skim}}</td>
                          <td>{{$bins[$i]->jenispremis}}</td>
                          <td>{{$bins[$i]->lokasi_nomborpremis_namaprogram}}</td>
                          <td>{{$bins[$i]->namajalan}}</td>
                          <td>{{$bins[$i]->namataman}}</td>
                          <td>
                            <a class="btn btn-primary" href="{{route('application.view', $bins[$i]->id)}}">View</a>
                            <button wire:click="destroy({{$bins[$i]->id}})" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                        @endfor
                      </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                  
                </div>
              </div>
            </div>
          </div>
    </section>
</div>
