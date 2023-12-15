@extends('dashboard.admins.layouts.admin-dashboard')
@section('title', 'Tambah Kegiatan')
@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="flex-grow-1">
                                <h3 class="card-title">Form Penambahan Kegiatan Baru</h3>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <form action="{{ route('admin.storekegiatan') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="judul" class="form-label">1. Nama Kegiatan</label>
                                    <p>Contoh: Survei Angkatan Kerja Nasional Februari</p>
                                    <input list="judulList" type="text"
                                        class="form-control @error('judul') is-invalid @enderror" id="judul"
                                        name="judul" required value="{{ old('judul') }}">
                                    @error('judul')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <datalist id="judulList">
                                        @foreach ($unique_judul as $judul)
                                            <option value="{{ $judul }}">
                                        @endforeach
                                    </datalist>

                                </div>
                                <hr class="my-4">
                                <div class="mb-3">
                                    <label for="tahun" class="form-label">2. Tahun Pelaksanaan</label>

                                    <input list="tahunList" type="text"
                                        class="form-control @error('tahun') is-invalid @enderror" id="tahun"
                                        name="tahun" required value="{{ old('tahun') }}">
                                    @error('tahun')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <datalist id="tahunList">
                                        @foreach ($datakegiatan as $allItemss)
                                            <option value="{{ $allItemss->tahun }}">
                                        @endforeach
                                    </datalist>
                                </div>
                                <hr class="my-4">
                                <div class="mb-3">
                                    <label for="template_file" class="form-label">3. Template Excel</label>
                                    <div class="form-group"><input type="file" name="template_file" id="template_file">
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="mb-3">
                                    <label for="responden" class="form-label">3. Responden Kegiatan</label>
                                    <p>*Nama lengkap instansi bisa dilihat di tabel <a href="#tabel-instansi">berikut.</a>
                                    </p>
                                </div>
                                <hr class="my-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="select-all">
                                    <label class="form-check-label" for="select-all">
                                        Semua Instansi
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="search">Search:</label>
                                    <input type="text" id="instansi-filter" class="form-control"
                                        placeholder="Filter by singkatan..." onkeyup="filterInstansi()">
                                </div>
                                {{-- <div class="row"> --}}
                                <div class="row" id="instansi-checkboxes">
                                    @foreach ($data as $allItemss)
                                        <div class="col-sm-3 col-md-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="responden[]"
                                                    value="{{ $allItemss->kodeinstansi }}"
                                                    id="{{ $allItemss->kodeinstansi }}"
                                                    data-singkatan="{{ $allItemss->singkatan }}"
                                                    @if (in_array($allItemss->kodeinstansi, json_decode($data['responden'] ?? '[]', true))) checked @endif>
                                                <label class="form-check-label" for="{{ $allItemss->kodeinstansi }}">
                                                    {{ $allItemss->singkatan }}
                                                </label>
                                            </div>

                                        </div>
                                    @endforeach
                                </div>
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <div class="flex-grow-1">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary"> <i
                                                class="nav-icon fas fa-plus "></i> Tambah
                                            Kegiatan</button>
                                        <a class="btn btn-info"href="{{ route('admin.daftarkegiatan') }}"
                                            role="button">Batal</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="flex-grow-1">
                                <h3 class="card-title" id="tabel-instansi">Daftar Semua Instansi</h3>
                            </div>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div style="height: 300px; overflow-y: scroll;">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Instansi</th>
                                            <th>Singkatan</th>
                                            <th>Kode Instansi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $allItemss)
                                            <tr>
                                                <td>{{ $allItemss->namainstansi }}</td>
                                                <td>{{ $allItemss->singkatan }} </td>
                                                <td>{{ $allItemss->kodeinstansi }} </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <script>
            function filterInstansi() {
                var input, filter, checkboxes, checkbox, singkatan;
                input = document.getElementById("instansi-filter");
                filter = input.value.toUpperCase();
                checkboxes = document.querySelectorAll("input[name='responden[]']");
                for (var i = 0; i < checkboxes.length; i++) {
                    checkbox = checkboxes[i];
                    singkatan = checkbox.getAttribute("data-singkatan").toUpperCase();
                    if (singkatan.indexOf(filter) > -1) {
                        checkbox.parentNode.parentNode.style.display = "";
                    } else {
                        checkbox.parentNode.parentNode.style.display = "none";
                    }
                }
            }
        </script>
        <script>
            document.getElementById('select-all').addEventListener('click', function() {
                const checkboxes = document.getElementsByName('responden[]');
                for (let i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].checked = this.checked;
                }
            });

            document.getElementById('responden-form').addEventListener('submit', function(event) {
                event.preventDefault();
                const form = event.target;
                const formData = new FormData(form);
                console.log(formData.getAll('responden[]'));
                // Submit the form or do other things with the form data
            });
        </script>

        <!-- Bootstrap JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <!-- Custom JavaScript -->
        <script>
            // add event listener for "Select All" checkbox
            document.getElementById("select-all").addEventListener("click", function() {
                var checkboxes = document.querySelectorAll("input[type=checkbox]");
                for (var i = 0; i < checkboxes.length; i++) {
                    checkboxes[i].checked = this.checked;
                }
            });
        </script>

    </section>
    <!-- /.content -->
@endsection
@section('script')
    <!-- DataTables  & Plugins -->

    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/plugins/jszip/jszip.min.js"></script>
    <script src="/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- Page specific script -->

    <script>
        $('#example1').DataTable({
            searching: true, // Disable search functionality
            paging: true, // Enable pagination
            ordering: true, // Enable sorting
            responsive: true, // Make the table responsive
            pagingType: "full_numbers", // Use the "full_numbers" pagination control style
            dom: "lfrtip", // Display the pagination control at the bottom of the table
            initComplete: true, // Disable filter functionality
        });
    </script>

@endsection
