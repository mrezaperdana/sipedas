@extends('dashboard.users.layouts.user-dashboard')
@section('title', 'Daftar Tabel')
@section('head')
    <!-- DataTables -->
    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}

        </div>
    @endif

    <script>
        // Automatically dismiss alerts after 5 seconds
        setTimeout(function() {
            $('.alert-dismissible').alert('close');
        }, 5000);
    </script>

    <!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Tabel yang sudah dan belum diisi.</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- Add a dropdown menu with the options for filtering -->
                        <div class="card-body">
                            <label for="filter">Filter Tahun:</label>
                            <div class="form-group form-inline">
                                <div class="row-md-2">
                                    <label for="filter">Awal</label>
                                    <select class="form-control" id="filter-start">
                                        <option value="">Semua</option>
                                        @foreach ($listtahun as $tahun)
                                            <option value="{{ $tahun }}">{{ $tahun }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <p>-</p>
                                <div class="row-md-2">
                                    <label for="filter">Akhir</label>
                                    <select class="form-control" id="filter-end">
                                        <option value="">Semua</option>
                                        @foreach ($listtahun as $tahun)
                                            <option value="{{ $tahun }}">{{ $tahun }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="overlay hidden">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Judul</th>
                                        <th>Tahun</th>
                                        <th>Kodetabel</th>
                                        <th>Status</th>
                                        <th>Template</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body">
                                    @foreach ($datakegiatan as $allItemss)
                                        <tr>
                                            <td></td>
                                            <td>{{ $allItemss->judul }}</td>
                                            <td>{{ $allItemss->tahun }}</td>
                                            <td>{{ $allItemss->kodetabel }}</td>
                                            <td>
                                                @if ($allItemss->status_entri == 1)
                                                    File Terunggah.
                                                @else
                                                    Belum Unggah.
                                                @endif
                                            </td>
                                            <td>
                                                @if ($allItemss->templatename)
                                                    <a href="{{ route('downloadEntriExcel', $allItemss->kodetabel) }}">Download
                                                        File</a>
                                                @else
                                                    Belum tersedia
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#uploadModal{{ $allItemss->id }}">Upload</button>
                                            </td>
                                        </tr>

                                        <!-- Upload Modal -->
                                        <div class="modal fade" id="uploadModal{{ $allItemss->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="{{ route('UserUploadEntriexcel', $allItemss->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="uploadModalLabel">Upload File</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="hidden" name="kodetabel"
                                                                value="{{ $allItemss->kodetabel }}">
                                                            <div class="form-group">
                                                                <label for="file">Select file:</label>
                                                                <input type="file" name="file"
                                                                    class="form-control-file" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Upload</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
