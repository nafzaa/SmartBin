<div>
    {{-- PAGE TITLE --}}
    <div class="pagetitle">
        <h1>Asset Form</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('asset')}}">Asset</a></li>
            <li class="breadcrumb-item active">Add</li>
          </ol>
        </nav>
      </div>
      <!-- End PAGE TITLE -->
      <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form</h5>
                        <form class="row g-3" method="POST">
                            <div class="row">
                                <div class="col-2">
                                    <label for="asset_id" class="form-label">ID</label>
                                    <input type="text" class="form-control" id="asset_id" wire:model='asset_id'>
                                </div>
                                <div class="col-2">
                                    <label for="asset_no" class="form-label">No</label>
                                    <input type="text" class="form-control" id="asset_no" wire:model='asset_no'>
                                </div>
                                <div class="col-4">
                                    <label for="asset_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="asset_name" wire:model='asset_name'>
                                </div>
                                <div class="col-4">
                                    <label for="asset_type" class="form-label">Type</label>
                                    <input type="text" class="form-control" id="asset_type" wire:model='asset_type'>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mt-2 col-6">
                                    @if ($asset_id || $asset_no || $asset_name || $asset_type)
                                        <label for="asset_id" class="form-label">
                                            ID: {{$asset_id}}
                                        </label>
                                        <br>
                                        <label for="asset_id" class="form-label">
                                            No: {{$asset_no}}
                                        </label>
                                        <br>
                                        <label for="asset_id" class="form-label">
                                            Name: {{$asset_name}}
                                        </label>
                                        <br>
                                        <label for="asset_id" class="form-label">
                                            Type: {{$asset_type}}
                                        </label>
                                    @endif
                                </div>
                                @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{session('message')}}
                                    <br>
                                    <a href="{{route('asset')}}">
                                        <label for="goToAsset">
                                            Click to see Asset list
                                        </label>
                                    </a>
                                </div>
                                @endif
                                <div class="mt-2">
                                    <button type="button" wire:click="store" class="btn btn-primary">Submit</button>
                                    {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </section>
</div>
