<div>
    <div class="pagetitle">
        <h1>Setting</h1>
        <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item">Setting</li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </nav>
      </div>
      <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Setting List</h5>
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    {{-- <th>No.</th> --}}
                                    <th>Item</th>
                                    <th>Element</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- SCHEME --}}
                                @for ($i = 0; $i < $settingSchemeModels->count(); $i++)
                                <tr>
                                    {{-- <th>{{$i+1}}</th> --}}
                                    <td>
                                        <b>Scheme</b>
                                    </td>
                                    <td>{{$settingSchemeModels[$i]->name}}</td>
                                    <td>
                                        {{-- <form method="POST" action="{{route('setting.scheme.destroy', $settingSchemeModels[$i]->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are you sure want to delete?')" wire:click="deleteItem({{$settingSchemeModels[$i]->id}})" class="btn btn-danger">Delete</button>
                                        </form> --}}
                                          <button wire:click="destroy({{$settingSchemeModels[$i]->id}})" onclick="return confirm('Are you sure want to delete?')" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endfor
                                {{-- PREMISE TYPE --}}
                                @for ($i = 0; $i < $settingPremiseTypeModels->count(); $i++)
                                <tr>
                                    {{-- <th>{{$i+1}}</th> --}}
                                    <td>
                                        <b>Premise Type</b>
                                    </td>
                                    <td>{{$settingPremiseTypeModels[$i]->name}}</td>
                                    <td>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endfor
                                {{-- STATE --}}
                                @for ($i = 0; $i < $settingNegeriModels->count(); $i++)
                                <tr>
                                    {{-- <th>{{$i+1}}</th> --}}
                                    <td>
                                        <b>State</b>
                                    </td>
                                    <td>{{$settingNegeriModels[$i]->name}}</td>
                                    <td>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endfor
                                {{-- RECIPIENT --}}
                                @for ($i = 0; $i < $settingRecipientModels->count(); $i++)
                                <tr>
                                    {{-- <th>{{$i+1}}</th> --}}
                                    <td>
                                        <b>Recipient</b>
                                    </td>
                                    <td>{{$settingRecipientModels[$i]->name}}</td>
                                    <td>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endfor
                                {{-- CITIZEN --}}
                                @for ($i = 0; $i < $settingCitizenModels->count(); $i++)
                                <tr>
                                    {{-- <th>{{$i+1}}</th> --}}
                                    <td>
                                        <b>Citizen</b>
                                    </td>
                                    <td>{{$settingCitizenModels[$i]->name}}</td>
                                    <td>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endfor
                                {{-- APPLICATION CATEGORY --}}
                                @for ($i = 0; $i < $settingApplicationCategoryModels->count(); $i++)
                                <tr>
                                    {{-- <th>{{$i+1}}</th> --}}
                                    <td>
                                        <b>Application Category</b>
                                    </td>
                                    <td>{{$settingApplicationCategoryModels[$i]->name}}</td>
                                    <td>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endfor
                                {{-- BIN TYPE --}}
                                @for ($i = 0; $i < $settingBinTypes->count(); $i++)
                                <tr>
                                    {{-- <th>{{$i+1}}</th> --}}
                                    <td>
                                        <b>Bin Type</b>
                                    </td>
                                    <td>{{$settingBinTypes[$i]->name}}</td>
                                    <td>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endfor
                                {{-- BIN ACCEPTANCE CATEGORY --}}
                                @for ($i = 0; $i < $settingBinAcceptanceCategoryModels->count(); $i++)
                                <tr>
                                    {{-- <th>{{$i+1}}</th> --}}
                                    <td>
                                        <b>Bin Acceptance Category</b>
                                    </td>
                                    <td>{{$settingBinAcceptanceCategoryModels[$i]->name}}</td>
                                    <td>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endfor 
                                {{-- BIN DELIVERY --}}
                                @for ($i = 0; $i < $settingBinDeliveryModels->count(); $i++)
                                <tr>
                                    {{-- <th>{{$i+1}}</th> --}}
                                    <td>
                                        <b>Bin Delivery</b>
                                    </td>
                                    <td>{{$settingBinDeliveryModels[$i]->name}}</td>
                                    <td>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @endfor
                                {{-- APPLICATION STATUS --}}
                                @for ($i = 0; $i < $settingApplicationStatusModel->count(); $i++)
                                <tr>
                                    {{-- <th>{{$i+1}}</th> --}}
                                    <td>
                                        <b>Application Status</b>
                                    </td>
                                    <td>{{$settingApplicationStatusModel[$i]->name}}</td>
                                    <td>
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
