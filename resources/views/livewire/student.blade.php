<div class="row">
    <div class="col">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5>Daftar Mahasiswa</h5>
            <a href="{{ route('student.create') }}" wire:navigate class="btn btn-primary">
                Tambah Mahasiswa
            </a>
        </div>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $key => $student)
                    <tr>
                        <td>{{ $students->firstItem() + $key }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->nim }}</td>
                        <td>{{ $student->study_program }}</td>
                        <td>
                            <a href="{{ route('student.edit', $student->id) }}" wire:navigate class="btn btn-warning">
                                Edit
                            </a>
                            <button type="button" class="btn btn-danger" 
                                wire:click="delete({{ $student->id }})" 
                                wire:confirm="Apakah Anda yakin ingin menghapus data ini?"
                            >
                                Hapus
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak Ada Data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>