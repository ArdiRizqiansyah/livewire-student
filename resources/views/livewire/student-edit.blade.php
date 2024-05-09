<div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit Mahasiswa</h5>
        <a href="{{ route('student.index') }}" wire:navigate class="btn btn-secondary ms-auto">
            Kembali
        </a>
    </div>
    <div class="card-body">
        <form wire:submit="update">
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <x-form.input type="text" name="name" id="name" :value="old('name')" :class="$errors->first('name') ? 'is-invalid' : ''" wire:model="name" placeholder="Masukkan nama mahasiswa" />
                    <x-form.input-error name="name" />
                </div>
                <div class="col-12 mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <x-form.input type="text" name="nim" id="nim" :value="old('nim')" :class="$errors->first('nim') ? 'is-invalid' : ''" wire:model="nim" placeholder="Masukkan NIM mahasiswa" />
                    <x-form.input-error name="nim" />
                </div>
                <div class="col-12 mb-3">
                    <label for="study_program" class="form-label">Jurusan</label>
                    <x-form.input type="text" name="study_program" id="study_program" :value="old('study_program')" :class="$errors->first('study_program') ? 'is-invalid' : ''" wire:model="study_program" placeholder="Masukkan jurusan mahasiswa" />
                    <x-form.input-error name="study_program" />
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>