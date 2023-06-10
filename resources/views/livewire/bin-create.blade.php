<div>
    {{-- PAGE TITLE --}}
    <div class="pagetitle">
      <h1>Bin Form</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Bin</li>
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
                  <form class="row g-3" wire:submit.prevent='store' method="POST">
                    <div class="col-2">
                        <label for="inputSkim" class="form-label">Skim</label>
                        <input type="text" class="form-control" id="inputSkim" wire:model='binSkim'>
                    </div>
                    <div class="col-4">
                        <label for="binJenisPremis" class="form-label">Jenis Premis</label>
                        <input type="text" class="form-control" id="binJenisPremis" wire:model='binJenisPremis'>
                    </div>
                    <div class="col-6">
                        <label for="binLokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="binLokasi" wire:model='binLokasi'>
                    </div>
                    <div class="col-5">
                        <label for="binNamaJalan" class="form-label">Nama Jalan</label>
                        <input type="text" class="form-control" id="binNamaJalan" wire:model='binNamaJalan'>
                    </div>
                    <div class="col-5">
                        <label for="binNamaTaman" class="form-label">Nama Taman</label>
                        <input type="text" class="form-control" id="binNamaTaman" wire:model='binNamaTaman'>
                    </div>
                    <div class="col-2">
                        <label for="binPoskod" class="form-label">Poskod</label>
                        <input type="text" class="form-control" id="binPoskod" wire:model='binPoskod'>
                    </div>
                    <div class="col-2">
                        <label for="binNegeri" class="form-label">Negeri</label>
                        <input type="text" class="form-control" id="binNegeri" wire:model='binNegeri'>
                    </div>
                    <div class="col-2">
                        <label for="binStatusPenerima" class="form-label">Status Penerima</label>
                        <input type="text" class="form-control" id="binStatusPenerima" wire:model='binStatusPenerima'>
                    </div>
                    <div class="col-6">
                        <label for="binNamaPenerima" class="form-label">Nama Penerima</label>
                        <input type="text" class="form-control" id="binNamaPenerima" wire:model='binNamaPenerima'>
                    </div>
                    <div class="col-2">
                        <label for="kpPassportPenerima" class="form-label">KP/Passport Penerima</label>
                        <input type="text" class="form-control" id="kpPassportPenerima" wire:model='kpPassportPenerima'>
                    </div>
                    <div class="col-2">
                        <label for="noTelPenerima" class="form-label">No. Telefon Penerima</label>
                        <input type="text" class="form-control" id="noTelPenerima" wire:model='noTelPenerima'>
                    </div>
                    <div class="col-4">
                        <label for="emelPenerima" class="form-label">Emel</label>
                        <input type="text" class="form-control" id="emelPenerima" wire:model='emelPenerima'>
                    </div>
                    <div class="col-2">
                        <label for="wargaNegaraPenerima" class="form-label">Warganegara Penerima</label>
                        <input type="text" class="form-control" id="wargaNegaraPenerima" wire:model='wargaNegaraPenerima'>
                    </div>
                    <div class="col-4">
                        <label for="kategoriPermohonan" class="form-label">Kategori Permohonan</label>
                        <input type="text" class="form-control" id="kategoriPermohonan" wire:model='kategoriPermohonan'>
                    </div>
                    <div class="col-2">
                        <label for="jumlahTong" class="form-label">Jumlah Tong</label>
                        <input type="text" class="form-control" id="jumlahTong" wire:model='jumlahTong'>
                    </div>
                    <div class="col-2">
                        <label for="noSiriTong" class="form-label">No. Siri Tong</label>
                        <input type="text" class="form-control" id="noSiriTong" wire:model='noSiriTong'>
                    </div>
                    <div class="col-2">
                        <label for="noSiriTongLama" class="form-label">No. Siri Tong (Lama)</label>
                        <input type="text" class="form-control" id="noSiriTongLama" wire:model='noSiriTongLama'>
                    </div>
                    <div class="col-2">
                        <label for="kategoriPenerimaanTong" class="form-label">Kategori Penerimaan Tong</label>
                        <input type="text" class="form-control" id="kategoriPenerimaanTong" wire:model='kategoriPenerimaanTong'>
                    </div>
                    <div class="col-4">
                        <label for="catatan" class="form-label">Catatan</label>
                        <input type="text" class="form-control" id="catatan" wire:model='catatan'>
                    </div>
                    <div class="col-8">
                        <label for="perakuanPenerima" class="form-label">Perakuan Penerima</label>
                        <input type="text" class="form-control" id="perakuanPenerima" wire:model='perakuanPenerima'>
                    </div>
                    <div class="col-4">
                        <label for="gambarPenghantaranTong" class="form-label">Gambar Penghantaran Tong</label>
                        <input type="text" class="form-control" id="gambarPenghantaranTong" wire:model='gambarPenghantaranTong'>
                    </div>
                    <div class="col-4">
                        <label for="namaPekerja" class="form-label">Nama Pekerja</label>
                        <input type="text" class="form-control" id="namaPekerja" wire:model='namaPekerja'>
                    </div>
                    <div class="col-2">
                        <label for="noPekerja" class="form-label">No. Pekerja</label>
                        <input type="text" class="form-control" id="noPekerja" wire:model='noPekerja'>
                    </div>
                    <div class="col-2">
                        <label for="noLori" class="form-label">No. Lori</label>
                        <input type="text" class="form-control" id="noLori" wire:model='noLori'>
                    </div>
                    <div class="col-4">
                        <label for="penghantaranTong" class="form-label">Penghantaran Tong</label>
                        <input type="text" class="form-control" id="penghantaranTong" wire:model='penghantaranTong'>
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
