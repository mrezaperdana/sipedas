@extends('dashboard.admins.layouts.admin-dashboard')
@section('title', 'Daftar Tabel')
@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

@endsection
@if (session('success'))
    <script>
        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}'
        });
    </script>
@endif

@section('content')

    <!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Penambahan Tabel Baru</h2>
                        </div>
                        <div class="card-body">
                            <p>menu ini akan menghapus tabel "tahun" untuk semua SKPD</p>
                            <form action="{{ route('admin.bulkDelete') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-2">
                                        <label>Tahun</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" class="form-control @error('tahun') is-invalid @enderror"
                                            id="tahun" name="tahun" value="{{ old('tahun') }}">
                                        @error('tahun')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-success">Tambah Tabel</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="card-body">
                            <p>menu ini akan menambahkan tabel baru untuk semua SKPD</p>
                            <form action="{{ route('admin.tambahsemua') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-2">
                                        <label>Tahun</label>
                                    </div>
                                    <div class="col-4">
                                        <input type="number" class="form-control @error('tahun') is-invalid @enderror"
                                            id="tahun" name="tahun" value="{{ old('tahun') }}">
                                        @error('tahun')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-success">Tambah Tabel</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    {{-- /.card --}}
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Daftar Tabel Seluruh SKPD</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Judul</th>
                                        <th>Tahun</th>
                                        <th>Kodetabel</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    @foreach ($allitems as $allItem)
                                        <tr>
                                            <td></td>
                                            <td>{{ $allItem['judultabel'] }}, &nbsp; {{ $allItem['item']->tahun }} </td>
                                            <td>{{ $allItem['item']->tahun }}</td>
                                            <td>{{ $allItem['item']->kodetabel }}</td>
                                            @switch($allItem['item']->status)
                                                @case(1)
                                                    <td><span class="badge badge-pill badge-success">Selesai</span></td>
                                                @break

                                                @case(3)
                                                    <td><span class="badge badge-pill badge-warning">Belum Selesai</span></td>
                                                @break

                                                @case(0)
                                                    <td> <span class="badge badge-pill badge-danger">Belum Diisi</span>
                                                    </td>
                                                @break

                                                @default
                                                    <td>Unknown.</td>
                                            @endswitch
                                            <td>
                                                <a href="#" class="badge bg-info"><span data-feather="eye">View</span>
                                                </a>

                                                <a href='edit/{{ $allItem['item']->tipetabel }}/{{ $allItem['item']->kodetabel }}'
                                                    class="badge bg-info"> <i class="fas fa-search"></i>
                                                    Edit</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
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
    </section>
    <!-- /.content -->

    <!-- /.content-wrapper -->

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
        $(document).ready(function() {
            $('.overlay').removeClass('hidden');
            $('#table-body').on('DOMSubtreeModified', function() {
                if ($(this).children().length > 0) {
                    $('.overlay').hide();
                }
            });
            // Initialize the DataTable
            let columnIndex = 3;
            var t = $('#example1').DataTable().order([columnIndex, 'asc']).draw();
            // Filter the table when an option is selected in the dropdown
            $('#filter-start').on('change', function() {
                var startYear = $(this).val();
                var endYear = $('#filter-end').val();

                // Check if both start year and end year are selected
                if (startYear && endYear) {
                    // Create a regular expression that matches the range of years
                    var regex = '^(' + startYear + '|' + endYear + ')';
                    for (var i = startYear; i < endYear; i++) {
                        regex += '|' + i;
                    }
                    regex += '$';

                    // Use the regular expression to filter the table
                    $('#example1').DataTable().column(1).search(regex, true, false).draw();
                }
            });
            t.on('order.dt search.dt', function() {
                let i = 1;

                t.cells(null, 0, {
                    search: 'applied',
                    order: 'applied'
                }).every(function(cell) {
                    this.data(i++);
                });
            }).draw();

            $('#filter-end').on('change', function() {
                // Use the same logic as in the change event for the start year dropdown
                $('#filter-start').trigger('change');
            });
        });
    </script>
@endsection
