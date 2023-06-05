<div>
  {{-- PAGE TITLE --}}
  <div class="pagetitle">
    <h1>Application Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Application</li>
      </ol>
    </nav>
  </div>
  <!-- End PAGE TITLE -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Application Form</h5>
            @if(session()->has('message'))
            <div class="alert alert-success">
              {{session('message')}}
            </div>
            @endif
            <!-- APPLICATION FORM -->
            <form class="row g-3" wire:submit.prevent='store' method="POST">
              <div class="col-8">
                <label for="inputNanme4" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="inputfullname" wire:model='full_name'>
                @error('full_name') <span class="error">{{ $message }}</span> @enderror
              </div>
              <div class="col-4">
                <label for="inputNanme4" class="form-label">IC Number</label>
                <input type="text" class="form-control" id="inputICnumber" wire:model='ic_number'>
                @error('ic_number') <span class="error">{{ $message }}</span> @enderror
              </div>
              <div class="col-4">
                <label for="inputNanme4" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="inputPhoneNumber" wire:model='phone_number'>
              </div>
              <div class="col-8">
                <label for="inputNanme4" class="form-label">Bin Type</label>
                <input type="text" class="form-control" id="inputBinType" wire:model='bin_type'>
              </div>
              <div class="col-12">
                <label for="applicationType" class="form-label">Application Type</label>
                <select class="form-select" name="" id="applicationType" wire:model='application_type'>
                  <option value="penggantian">Penggantian Tong Hilang</option>
                  <option value="baru">Baru</option>
                </select>
              </div>

              {{-- IDENTIFICATION CARD PROOF start --}}
              <div class="col-12">
                <div class="row">
                  <div class="col-6">
                    <label for="icFront" class="form-label">IC (Front)</label>
                    @if ($ic_front)
                        <div class="border text-center">
                          <img class="m-2" src="{{ $ic_front->temporaryUrl() }}" alt="Photo Preview" style="max-width: 500px; max-height:600px">
                        </div>
                    @endif
                    @error('ic_front')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="file" id="icFront" wire:model='ic_front'>
                    @error('icFront') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="col-6">
                    <label for="icBack" class="form-label">IC (Back)</label>
                    @if($ic_back)
                      <div class="border text-center">
                          <img class="m-2" src="{{$ic_back->temporaryUrl()}}" alt="Image Preview" style="max-width: 500px; max-height:600px">
                      </div>
                    @endif
                    @error('ic_back')
                      <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    <input class="form-control" type="file" id="icBack" wire:model='ic_back'>
                  </div>
                </div>
              </div>
              {{-- IDENTIFICATION CARD PROOF end --}}

              <div class="col-6">
                <label for="billInput" class="form-label">Bill Utility (Water/Electric/dll...)</label>
                @if($bill_utility)
                  <div class="border text-center">
                    <img class="m-2" src="{{$bill_utility->temporaryUrl()}}" alt="Image Preview" style="max-width: 500px; max-height:600px">
                  </div>
                @endif
                @error('bill_utility')
                  <div class="text-red-500">{{$message}}</div>
                @enderror
                <input class="form-control" type="file" id="billInput" wire:model="bill_utility">
              </div>
              <div class="col-12">
                <label for="pointLocation" class="form-label">Point Location</label>
                <div id="applicationFormMap" style="width: 100%; height: 500px" wire:ignore></div>
              </div>
              <div class="text-center">
                <button type="button" wire:click="store" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
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