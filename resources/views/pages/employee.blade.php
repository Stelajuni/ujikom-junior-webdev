@extends('layouts.dashboard')

@section('content')
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between align-items-center">
            <div class="iq-header-title">
                <h4 class="card-title">Detail Kurir</h4>
            </div>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addModal">
                <i class="las la-plus"></i>Tambah
            </button>
        </div>
        <div class="iq-card-body">
            <div class="table-responsive">
                <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid"
                    aria-describedby="user-list-page-info">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Tanggal Bergabung</th>
                            <th>Sunting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->name }}</td>
                                <td>
                                    @if ($employee->phone_number == null)
                                        <span class="badge badge-secondary">Belum Diisi</span>
                                    @else
                                        {{ $employee->phone_number }}
                                    @endif
                                </td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->alamat }}</td>
                                <td>{{ $employee->created_at->format('d M Y, H:i:s') }}</td>
                                <td>
                                    <div class="flex align-items-center list-user-action">
                                        <a onclick="openEditModal('{{ $employee->id }}')" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="Edit" href="#">
                                            <i class="ri-pencil-line"></i></a>

                                        <a onclick="deleteEmployee('{{ $employee->id }}')" data-toggle="tooltip"
                                            data-placement="top" title="" data-original-title="Delete" href="#">
                                            <i class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Pengguna -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Data Kurir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addForm">
                        <div class="form-group">
                            <label for="addName">Nama</label>
                            <input required type="text" class="form-control" id="addName" name="name">
                        </div>

                        <div class="form-group">
                            <label for="addEmail">Email</label>
                            <input required type="email" class="form-control" id="addEmail" name="email">
                        </div>

                        <div class="form-group">
                            <label for="addPhoneNumber">Nomor Telepon</label>
                            <input required type="text" class="form-control" id="addPhoneNumber" name="phone_number">
                        </div>

                        <div class="form-group">
                            <label for="addAlamat">Alamat</label>
                            <input required type="alamat" class="form-control" id="addAlamat" name="alamat">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" onclick="createEmployee()">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ubah Pengguna -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Ubah Data Kurir</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="form-group">
                            <label for="editName">Nama</label>
                            <input required type="text" class="form-control" id="editName" name="name">
                        </div>

                        <div class="form-group">
                            <label for="editEmail">Email</label>
                            <input required type="email" class="form-control" id="editEmail" name="email">
                        </div>

                        <div class="form-group">
                            <label for="editPhoneNumber">Nomor Telepon</label>
                            <input required type="text" class="form-control" id="editPhoneNumber"
                                name="phone_number">
                        </div>

                        <div class="form-group">
                            <label for="editAlamat">Alamat</label>
                            <input required type="alamat" class="form-control" id="editAlamat" name="alamat">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" onclick="editEmployee()">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        let employeeId = null;

        // saat buka modal addModal kosongkan form, hapus class is-invalid dan invalid-feedback
        $('#addModal').on('show.bs.modal', function(e) {
            $('#addForm').trigger('reset');
            $('#addPhoneNumber').val(),
                $('#addForm input').removeClass('is-invalid');
            $('#addForm .invalid-feedback').remove();
        })

        $('#addModal').on('show.bs.modal', function(e) {
            $('#editForm input').removeClass('is-invalid');
            $('#addPhoneNumber').val(),
                $('#editForm .invalid-feedback').remove();
        })

        function createEmployee() {
            const url = "{{ route('api.employees.store') }}";

            // ambil form data
            let data = {
                name: $('#addName').val(),
                phone_number: $('#addPhoneNumber').val(),
                email: $('#addEmail').val(),
                alamat: $('#addAlamat').val(),
            }

            // kirim data ke server POST /employees
            $.post(url, data)
                .done((response) => {
                    // tampilkan pesan sukses
                    toastr.success(response.message, 'Sukses')

                    // reload halaman setelah 3 detik
                    setTimeout(() => {
                        location.reload()
                    }, 3000);
                })
                .fail((error) => {
                    // ambil response error
                    let response = error.responseJSON

                    // tampilkan pesan error
                    toastr.error(response.message, 'Error')

                    // tampilkan error validation
                    if (response.errors) {
                        // loop object errors
                        for (const error in response.errors) {
                            // cari input name yang error pada #addForm
                            let input = $(`#addForm input[name="${error}"]`)

                            // tambahkan class is-invalid pada input
                            input.addClass('is-invalid');

                            // buat elemen class="invalid-feedback"
                            let feedbackElement = `<div class="invalid-feedback">`
                            feedbackElement += `<ul class="list-unstyled">`
                            response.errors[error].forEach((message) => {
                                feedbackElement += `<li>${message}</li>`
                            })
                            feedbackElement += `</ul>`
                            feedbackElement += `</div>`

                            // tambahkan class invalid-feedback setelah input
                            input.after(feedbackElement)
                        }
                    }
                })
        }

        function editEmployee() {
            let url = "{{ route('api.employees.update', ':employeeId') }}";
            url = url.replace(':employeeId', employeeId);

            // ambil form data
            let data = {
                name: $('#editName').val(),
                phone_number: $('#editPhoneNumber').val(),
                email: $('#editEmail').val(),
                alamat: $('#editAlamat').val(),
                // role: $('#editRole').val(),
                _method: 'PUT'
            }

            // kirim data ke server POST /employees
            $.post(url, data)
                .done((response) => {
                    // tampilkan pesan sukses
                    toastr.success(response.message, 'Sukses')

                    // reload halaman setelah 3 detik
                    setTimeout(() => {
                        location.reload()
                    }, 3000);
                })
                .fail((error) => {
                    // ambil response error
                    let response = error.responseJSON

                    // tampilkan pesan error
                    toastr.error(response.message, 'Error')

                    // tampilkan error validation
                    if (response.errors) {
                        // loop object errors
                        for (const error in response.errors) {
                            // cari input name yang error pada #editForm
                            let input = $(`#editForm input[name="${error}"]`)

                            // tambahkan class is-invalid pada input
                            input.addClass('is-invalid');

                            // buat elemen class="invalid-feedback"
                            let feedbackElement = `<div class="invalid-feedback">`
                            feedbackElement += `<ul class="list-unstyled">`
                            response.errors[error].forEach((message) => {
                                feedbackElement += `<li>${message}</li>`
                            })
                            feedbackElement += `</ul>`
                            feedbackElement += `</div>`

                            // tambahkan class invalid-feedback setelah input
                            input.after(feedbackElement)
                        }
                    }
                })

        }

        function deleteEmployee(employeeId) {
            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: 'Kurir akan dihapus, kamu tidak bisa mengembalikannya lagi!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    let url = "{{ route('api.employees.destroy', ':employeeId') }}";
                    url = url.replace(':employeeId', employeeId);
                    $.post(url, {
                            _method: 'DELETE'
                        })
                        .done((response) => {
                            toastr.success(response.message, 'Sukses')
                            setTimeout(() => {
                                location.reload()
                            }, 1000);
                        })
                        .fail((error) => {
                            toastr.error('Gagal menghapus kurir', 'Error')
                        })
                }
            })
        }

        function openEditModal(id) {
            // mengisi variabel employeeId dengan id yang dikirim dari tombol edit
            employeeId = id;

            // ambil data employee dari server
            let url = `{{ route('api.employees.show', ':employeeId') }}`;
            url = url.replace(':employeeId', employeeId);

            // ambil data employee
            $.get(url)
                .done((response) => {
                    // isi form editModal dengan data employee
                    $('#editName').val(response.data.name);
                    $('#editPhoneNumber').val(response.data.phone_number);
                    $('#editEmail').val(response.data.email);
                    $('#editAlamat').val(response.data.alamat);

                    // tampilkan modal editModal
                    $('#editModal').modal('show');
                })
                .fail((error) => {
                    // tampilkan pesan error
                    toastr.error('Gagal mengambil data kurir', 'Error')
                })

        }
    </script>
@endpush
