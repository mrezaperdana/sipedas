@extends('dashboard.admins.layouts.admin-dashboard')
@section('title', 'Daftar Kegiatan')
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
                                <h3 class="card-title">Daftar Seluruh Kegiatan </h3>
                            </div>
                            <div>
                                <a href="{{ route('admin.tambahkegiatan') }}" class="btn btn-primary">
                                    <i class="nav-icon fas fa-plus"></i> Tambah Kegiatan
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>Responden</th>

                                        <th>Judul Kegiatan</th>
                                        <th>Tahun</th>
                                        <th>Results</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datakegiatan as $allItemss)
                                        <tr>

                                            {{-- <td>{{ $allItemss->responden }}</td> --}}
                                            {{-- <td>{{ count($allItemss->responden) }}</td> --}}
                                            {{-- <td>{{ $allItemss->responden ? count($allItemss->responden) : 0 }}</td> --}}
                                            {{-- <td>{{ count(json_decode($allItemss->responden)) }}</td> --}}
                                            {{-- @if ($allItemss->responden)
                                                <td>{{ count($allItemss->responden) }}</td>
                                            @else
                                                <td>0</td>
                                            @endif --}}
                                            <td>{{ is_array(json_decode($allItemss->responden)) ? count(json_decode($allItemss->responden)) : 0 }}
                                                Instansi terpilih
                                            </td>
                                            <td>{{ $allItemss->judul }} </td>
                                            <td>{{ $allItemss->tahun }}</td>
                                            <td><a
                                                    href="{{ route('admin.daftarkegiatan.hasil', ['kodetabel' => $allItemss->kodetabel]) }}">Download
                                                    Responses</a></td>
                                            @switch($allItemss->status)
                                                @case(1)
                                                    <td><span class="badge badge-pill badge-success">Aktif</span></td>
                                                @break

                                                @case(0)
                                                    <td> <span class="badge badge-pill badge-danger">Non-Aktif</span>
                                                    </td>
                                                @break

                                                @default
                                                    <td>Unknown.</td>
                                            @endswitch
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        id="actionsDropdown" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        Actions
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="actionsDropdown">
                                                        <form method="get"
                                                            action="{{ route('admin.edit', ['id' => $allItemss->id]) }}"
                                                            class="dropdown-item">
                                                            @csrf
                                                            <button type="submit" class="btn btn-link">Edit</button>
                                                        </form>

                                                        @if ($allItemss->status == 0)
                                                            <form method="post"
                                                                action="{{ route('admin.update-status', $allItemss->id) }}"
                                                                class="dropdown-item">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="status" value="1">
                                                                <button type="submit"
                                                                    class="btn btn-link">Aktifkan</button>
                                                            </form>
                                                        @elseif($allItemss->status == 1)
                                                            <form method="POST"
                                                                action="{{ route('admin.update-status', $allItemss->id) }}"
                                                                class="dropdown-item">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="status" value="0">
                                                                <button type="submit"
                                                                    class="btn btn-link">Nonaktifkan</button>
                                                            </form>
                                                        @endif

                                                        <form method="POST"
                                                            action="{{ route('admin.destroy', $allItemss->id) }}"
                                                            class="dropdown-item">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-link text-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach

                                    {{-- @foreach ($data as $allItemss)
                                        <tr>
                                            <td>{{ $allItemss->kodeinstansi }}</td>
                                            <td>{{ $allItemss->tipetabel }} </td>
                                            <td>{{ $allItemss->notabel }}</td>
                                            <td>{{ $allItemss->judultabel }}</td>
                                            <td>
                                                <a href="view/{{ $allItemss->tipetabel }}" class="badge bg-info"><span
                                                        data-feather="eye">View</span>
                                                </a>
                                               
                                            </td>
                                        </tr>
                                    @endforeach --}}
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

            // add event listener for "Add List" button
            document.querySelector("button").addEventListener("click", function() {
                // TODO: add functionality to add a new list
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
