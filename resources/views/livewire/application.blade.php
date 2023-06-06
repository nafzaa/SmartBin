<div>
  <div class="pagetitle">
    <h1>Application List</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Application</li>
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
            {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> --}}

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Application Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">IC Number</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Bin Type</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @for($i=0; $i<$applicationModel->count(); $i++)
                  <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$applicationModel[$i]->application_number}}</td>
                    <td>{{$applicationModel[$i]->full_name}}</td>
                    <td>{{$applicationModel[$i]->ic_number}}</td>
                    <td>{{$applicationModel[$i]->phone_number}}</td>
                    <td>{{$applicationModel[$i]->bin_type}}</td>
                    <td>
                      <a class="btn btn-primary" href="{{route('application.view', $applicationModel[$i]->id)}}">View</a>
                      {{-- <form method="POST" action="{{route('application.destroy', $applicationModel[$i]->id)}}">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure want to delete?')" wire:click="deleteItem({{$applicationModel[$i]->id}})" class="btn btn-danger">Delete</button>
                      </form> --}}
                      <button wire:click="destroy({{$applicationModel[$i]->id}})" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger">Delete</button>
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