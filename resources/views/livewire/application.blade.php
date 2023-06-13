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
                <a class="btn btn-success" href="{{route('application.create')}}">Add</a>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th>Timestamp</th>
                    <th scope="col">Scheme</th>
                    <th scope="col">Premise Type</th>
                    <th scope="col">Location/Premise/Program</th>
                    {{-- <th scope="col">Street</th> --}}
                    {{-- <th scope="col">Park</th> --}}
                    {{-- <th scope="col">Zip Code</th> --}}
                    {{-- <th scope="col">State</th> --}}
                    <th scope="col">Serial No.</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @for($i=0; $i<$applicationModel->count(); $i++)
                  <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>{{$applicationModel[$i]->created_at->format('m/d/Y H:i:s')}}</td>
                    <td>
                      @if (isset($applicationModel[$i]->belongsToScheme))
                        {{$applicationModel[$i]->belongsToScheme->name}}
                      @else
                      @endif
                    </td>
                    <td>{{$applicationModel[$i]->belongsToPremiseType->name}}</td>
                    <td>
                      {{$applicationModel[$i]->location_premise_program}},<br>
                      {{$applicationModel[$i]->street_name}},<br>
                      {{$applicationModel[$i]->park_name}},<br>
                      {{$applicationModel[$i]->zip_code}}<br>
                      {{-- {{$applicationModel[$i]->belongsToState->name}} --}}
                    </td>
                    {{-- <td>{{$applicationModel[$i]->street_name}}</td> --}}
                    {{-- <td>{{$applicationModel[$i]->park_name}}</td> --}}
                    {{-- <td>{{$applicationModel[$i]->zip_code}}</td> --}}
                    {{-- <td>{{$applicationModel[$i]->belongsToState->name}}</td> --}}
                    <td>{{$applicationModel[$i]->bin_serial_number}}</td>
                    <td>
                      @if (isset($applicationModel[$i]->belongsToApplicationStatus))
                      {{$applicationModel[$i]->belongsToApplicationStatus->name}}
                      @else
                      Tiada Status
                      @endif
                    </td>
                    <td>
                      <div class="row">
                        <div class="col-md-6">
                          <a class="btn btn-primary" href="{{route('application.view', $applicationModel[$i]->id)}}">View</a>
                        </div>
                        <div class="col-md-6">
                          <form method="POST" action="{{route('application.destroy', $applicationModel[$i]->id)}}">
                            @csrf
                            @method('DELETE')
                            {{-- <button onclick="return confirm('Are you sure want to delete?')" wire:click="deleteItem({{$applicationModel[$i]->id}})" class="btn btn-danger">Delete</button> --}}
                          </form>
                          <button wire:click="destroy({{$applicationModel[$i]->id}})" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger">Delete</button>
                        </div>
                      </div>
                    </td>

                  </tr>
                  @endfor

                  {{-- @foreach ($applicationModel as $key=>$item)
                      <tr>
                        <th>{{$key+1}}</th>
                        <td>{{$item->created_at->format('m/d/Y H:i:s')}}</td>
                        <td>{{$item->belongsToScheme->name}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                  @endforeach --}}

                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            
          </div>
        </div>
      </div>
    </div>
  </section>
</div>