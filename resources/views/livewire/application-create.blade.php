<div>
    {{-- PAGE TITLE --}}
    <div class="pagetitle">
      <h1>Application Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Application</li>
          <li class="breadcrumb-item active">Apply</li>
        </ol>
      </nav>
    </div>
    <!-- End PAGE TITLE -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Form</h2>
              <!-- APPLICATION FORM -->
              <form class="row g-3" wire:submit.prevent='store' method="POST">
                <div class="row mt-4">
                  <h2>Application</h2>
                  {{-- Scheme --}}
                  <div class="col-3">
                    <label for="scheme" class="form-label">Scheme (For AFSB Use)</label>
                    {{-- <input type="text" class="form-control" id="scheme" wire:model='scheme'> --}}
                    <select class="form-select" id="scheme" wire:model='scheme'>
                      <option selected>Select Scheme</option>
                      @for ($i = 0; $i < $settingSchemeModels->count(); $i++)
                      <option value="{{$settingSchemeModels[$i]->id}}">{{$settingSchemeModels[$i]->name}}</option>
                      @endfor
                    </select>
                    @error('scheme') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  {{-- Premise --}}
                  <div class="col-3">
                    <label for="premise" class="form-label">Premise Type</label>
                    <select class="form-select" id="premise" wire:model='premise'>
                      <option selected>Select Premise Type</option>
                      @for ($i = 0; $i < $settingPremiseTypeModels->count(); $i++)
                      <option value="{{$settingPremiseTypeModels[$i]->id}}">{{$settingPremiseTypeModels[$i]->name}}</option>
                      @endfor
                    </select>
                    @error('premise') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  {{-- Application Category --}}
                  <div class="col-3">
                    <label for="application_category" class="form-label">Application Category</label>
                    {{-- <input type="text" class="form-control" id="application_category" wire:model='application_category'> --}}
                    <select class="form-select" id="application_category" wire:model='application_category'>
                      <option selected>Select Application Category</option>
                      @for ($i = 0; $i < $settingApplicationCategoryModels->count(); $i++)
                      <option value="{{$settingApplicationCategoryModels[$i]->id}}">{{$settingApplicationCategoryModels[$i]->name}}</option>
                      @endfor
                    </select>
                    @error('application_category') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-3">
                    {{-- <h2>Application</h2> --}}
                    <label for="application_type" class="form-label">Type</label>
                    <select class="form-select" id="application_type" wire:model='application_type'>
                      <option selected>Select Application Type</option>
                      @for ($i = 0; $i < $settingBinDeliveryModel->count(); $i++)
                      <option value="{{$settingBinDeliveryModel[$i]->id}}">{{$settingBinDeliveryModel[$i]->name}}</option>
                      @endfor                      
                    </select>
                    @error('application_type') <span class="error">{{ $message }}</span> @enderror
                  </div>
                </div>

                <div class="row mt-4">
                  <h2>Address</h2>
                  <div class="col-4">
                    <label for="location_premise_program" class="form-label">Location/Premise No/Program</label>
                    <input type="text" class="form-control" id="location_premise_program" wire:model='location_premise_program'>
                    @error('location_premise_program') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-4">
                    <label for="street_name" class="form-label">Street Name</label>
                    <input type="text" class="form-control" id="street_name" wire:model='street_name'>
                    @error('street_name') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-4">
                    <label for="park_name" class="form-label">Park Name</label>
                    <input type="text" class="form-control" id="park_name" wire:model='park_name'>
                    @error('park_name') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-4">
                    <label for="zip_code" class="form-label">Zip Code</label>
                    <input type="text" class="form-control" id="zip_code" wire:model='zip_code'>
                    @error('zip_code') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-4">
                    <label for="state" class="form-label">State</label>
                    {{-- <input type="text" class="form-control" id="state" wire:model='state'> --}}
                    <select class="form-control" id="state" wire:model='state'>
                      <option selected>Select State</option>
                      @for ($i = 0; $i < $settingNegeriModel->count(); $i++)
                        <option value="{{$settingNegeriModel[$i]->id}}">{{$settingNegeriModel[$i]->name}}</option>
                      @endfor
                    </select>
                    @error('state') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-4">
                    <label for="billInput" class="form-label">Bill Utility (Water/Electric/dll...)</label>
                    {{-- @if($bill_utility)
                      <div class="border text-center">
                        <img class="m-2" src="{{$bill_utility->temporaryUrl()}}" alt="Image Preview" style="max-width: 500px; max-height:600px">
                      </div>
                    @endif --}}
                    <input class="form-control" type="file" id="billInput" wire:model="bill_utility">
                    @error('bill_utility')<div class="text-red-500">{{$message}}</div>@enderror
                  </div>
                  <div class="col-12 mt-4">
                    {{-- <label for="pointLocation" class="form-label">Point Location</label> --}}
                    <h2>Point Location</h2>
                    <div id="applicationFormMap" style="width: 100%; height: 500px" wire:ignore></div>
                  </div>
                </div>

                <div class="row mt-4">
                  <h2>Recipient</h2>
                  <div class="col-4">
                    <label for="recipient_full_name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="recipient_full_name" wire:model='recipient_full_name'>
                    @error('recipient_full_name') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-4">
                    <label for="recipient_status" class="form-label">Status</label>
                    <select class="form-control" id="recipient_status" wire:model='recipient_status'>
                      <option selected>Select Status</option>
                      @for ($i = 0; $i < $settingRecipientModel->count(); $i++)
                        <option value="{{$settingRecipientModel[$i]->id}}">{{$settingRecipientModel[$i]->name}}</option>
                      @endfor
                    </select>
                    @error('recipient_status') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-4">
                    <label for="recipient_ic_number" class="form-label">IC No.</label>
                    <input type="text" class="form-control" id="recipient_ic_number" wire:model='recipient_ic_number'>
                    @error('recipient_ic_number') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-4">
                    <label for="recipient_phone_number" class="form-label">Phone No.</label>
                    <input type="text" class="form-control" id="recipient_phone_number" wire:model='recipient_phone_number'>
                  </div>
                  <div class="col-4">
                    <label for="recipient_email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="recipient_email" wire:model='recipient_email'>
                  </div>
                  <div class="col-4">
                    <label for="recipient_nationality" class="form-label">Nationality</label>
                    {{-- <input type="text" class="form-control" id="recipient_nationality" wire:model='recipient_nationality'> --}}
                    <select class="form-control" id="recipient_nationality" wire:model='recipient_nationality'>
                      <option selected>Select Nationality</option>
                      @for ($i = 0; $i < $settingCitizenModel->count(); $i++)
                        <option value="{{$settingCitizenModel[$i]->id}}">{{$settingCitizenModel[$i]->name}}</option>
                      @endfor
                    </select>
                  </div>
                  {{-- IDENTIFICATION CARD PROOF start --}}
                {{-- <div class="col-12">
                  <div class="row"> --}}
                    <div class="col-4">
                      <label for="icFront" class="form-label">IC (Front)</label>
                      {{-- @if ($ic_front)
                          <div class="border text-center">
                            <img class="m-2" src="{{ $ic_front->temporaryUrl() }}" alt="Photo Preview" style="max-width: 500px; max-height:600px">
                          </div>
                      @endif --}}
                      <input class="form-control" type="file" id="icFront" wire:model='ic_front'>
                      @error('ic_front')<div class="text-red-500">{{ $message }}</div>@enderror
                      {{-- @error('icFront') <span class="error">{{ $message }}</span> @enderror --}}
                    </div>
                    <div class="col-4">
                      <label for="icBack" class="form-label">IC (Back)</label>
                      {{-- @if($ic_back)
                        <div class="border text-center">
                            <img class="m-2" src="{{$ic_back->temporaryUrl()}}" alt="Image Preview" style="max-width: 500px; max-height:600px">
                        </div>
                      @endif --}}
                      @error('ic_back')<div class="text-red-500">{{ $message }}</div>@enderror
                      <input class="form-control" type="file" id="icBack" wire:model='ic_back'>
                    </div>
                  {{-- </div>
                </div> --}}
                {{-- IDENTIFICATION CARD PROOF end --}}
                </div>

                <div class="row mt-4">
                  <h2>Bin</h2>
                  <div class="col-3">
                    <label for="bin_type" class="form-label">Type</label>
                    <select id="inputBinType" wire:model='bin_type' class="form-control">
                      <option selected>Select Type</option>
                      {{-- @for ($i = 0; $i < $settingBinTypeModel->count(); $i++)
                        <option value="{{$settingBinTypeModel[$i]->id}}">{{$settingBinTypeModel[$i]->hasManyAssetBin}}</option>
                      @endfor --}}
                      @for ($i = 0; $i < $assetBinModel->count(); $i++)
                        <option value="{{$assetBinModel[$i]->id}}">{{$assetBinModel[$i]->belongsToBinType->name}} ({{$assetBinModel[$i]->s}})</option>
                      @endfor
                    </select>
                  </div>
                  <div class="col-2">
                    <label for="bin_amount" class="form-label">Amount</label>
                    <input type="text" class="form-control" id="bin_amount" wire:model='bin_amount'>
                  </div>
                  <div class="col-3">
                    <label for="bin_serial_number" class="form-label">Serial No.</label>
                    <input type="text" class="form-control" id="bin_serial_number" wire:model='bin_serial_number'>
                  </div>
                  <div class="col-3">
                    <label for="bin_serial_number_old" class="form-label">Serial No. (Old)</label>
                    <input type="text" class="form-control" id="bin_serial_number_old" wire:model='bin_serial_number_old'>
                  </div>
                </div>

                <div class="row mt-4">
                  <h2>Bin Acceptance</h2>
                  <div class="col-2">
                    <label for="bin_acceptance_category" class="form-label">Category</label>
                    {{-- <input type="text" class="form-control" id="bin_acceptance_category" wire:model='bin_acceptance_category'> --}}
                    <select class="form-control" id="bin_acceptance_category" wire:model='bin_acceptance_category'>
                      <option selected>Select Category</option>
                      @for ($i = 0; $i < $settingBinAcceptanceCategoryModel->count(); $i++)
                        <option value="{{$settingBinAcceptanceCategoryModel[$i]->id}}">{{$settingBinAcceptanceCategoryModel[$i]->name}}</option>
                      @endfor
                    </select>
                  </div>
                  <div class="col-12">
                    <label for="bin_acceptance_notes" class="form-label">Notes</label>
                    <textarea type="text" class="form-control" id="bin_acceptance_notes" wire:model='bin_acceptance_notes'></textarea>
                  </div>
                </div>

                <div class="row mt-4">
                  <h2>Acceptance Agreement</h2>
                  <p>SAYA SETUJU DENGAN TERMA DAN SYARAT-SYARAT YANG DINYATAKAN</p>
                </div>

                {{-- <div class="row mt-4">
                  <h2>Delivery</h2>
                  <div class="col-4">
                    <label for="bin_picture_delivered" class="form-label">Bin Delivered (Picture)</label>
                    <input type="text" class="form-control" id="bin_picture_delivered" wire:model='bin_picture_delivered'>
                  </div>
                  <div class="col-4">
                    <label for="worker_name" class="form-label">Worker Name</label>
                    <input type="text" class="form-control" id="worker_name" wire:model='worker_name'>
                  </div>
                  <div class="col-4">
                    <label for="worker_number" class="form-label">Worker No.</label>
                    <input type="text" class="form-control" id="worker_number" wire:model='worker_number'>
                  </div>
                  <div class="col-4">
                    <label for="lorry_number" class="form-label">Lorry No.</label>
                    <input type="text" class="form-control" id="lorry_number" wire:model='lorry_number'>
                  </div>
                </div> --}}
  
                {{-- <div class="col-12">
                    <label for="address">Address</label>
                </div>
                <div class="col-12">
                  <label for="pointLocation" class="form-label">Point Location</label>
                  <div id="applicationFormMap" style="width: 100%; height: 500px" wire:ignore></div>
                </div> --}}
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="button" wire:click="store" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                  {{session('message')}}
                </div>
                @endif
              </form>
  
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  @push('js')
  {{-- MAP --}}
  <script>
    // Initialize the map and assign it to a variable for later use
    // there's a few ways to declare a VARIABLE in javascript.
    // you might also see people declaring variables using `const` and `let`
    var map = L.map('applicationFormMap', {
        // Set latitude and longitude of the map center (required)
        center: [2.9474456729481906, 101.7231898563517],
        // Set the initial zoom level, values 0-18, where 0 is most zoomed-out (required)
        zoom: 11
    });
    
    var marker = L.marker(
      [2.9474456729481906, 101.7231898563517],
      { 
        draggable: true,
        title: "",
        opacity: 0.75
      });
  
      var tiles = new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',}).addTo(map);
    
    var marker = L.marker(
      [2.9474456729481906, 101.7231898563517],
      {
        draggable: true,
        title: "",
        opacity: 0.75
      });
      
      marker.addTo(map).bindPopup("<p1><b>Alam Flora Sdn Bhd</b><br>Presint 15, 51A, 51B & 51C, Jln Diplomatik, 62050 Putrajaya.</p1>") .openPopup();
  </script>
  @endpush