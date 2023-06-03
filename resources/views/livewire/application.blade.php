<div>
    <div class="pagetitle">
        <h1>Form Layouts</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Forms</li>
            <li class="breadcrumb-item active">Layouts</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Application Form</h5>
    
                  <!-- Vertical Form -->
                  <form class="row g-3">
                    <div class="col-12">
                      <label for="inputNanme4" class="form-label">Full Name</label>
                      <input type="text" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">IC Number</label>
                        <input type="text" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Bin Type</label>
                        <input type="text" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Photocopy of IC</label>
                        <div class="row">
                            <div class="col-6">
                                <label for="icFront" class="form-label">Front</label>
                                <input class="form-control" type="file" id="icFront">
                            </div>
                            <div class="col-6">
                                <label for="icBack" class="form-label">Back</label>
                                <input class="form-control" type="file" id="icBack">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Bill Image (Water/Electric/dll...)</label>
                        <input class="form-control" type="file" id="bill">
                    </div>
                    <div class="col-12">
                      <label for="applicationType" class="form-label">Application Type</label>
                      <select class="form-select" name="" id="applicationType">
                        <option value="penggantian">Penggantian Tong Hilang</option>
                        <option value="baru">Baru</option>
                      </select>
                    </div>
                    <div class="col-12">
                        <label for="pointLocation" class="form-label">Point Location</label>
                        <div id="applicationFormMap" style="width: 100%; height: 500px"></div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form>
                  <!-- Vertical Form -->
    
                </div>
              </div> 
          </div>
        </div>
      </section>
</div>

@push('js')
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
        

        // Create a Tile Layer and add it to the map
        var tiles = new L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        minZoom: '10'}).addTo(map);

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
