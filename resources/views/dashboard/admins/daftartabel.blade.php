@extends('dashboard.admins.layouts.admin-dashboard')
@section('title', 'Daftar Tabel')
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
                        <div class="card-header">
                            <h3 class="card-title">Daftar Tabel Seluruh Instansi</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Instansi</th>
                                        <th>Kode Tabel</th>
                                        <th>No. Tabel</th>
                                        <th>Judul</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $allItemss)
                                        <tr>
                                            <td>{{ $allItemss->kodeinstansi }}</td>
                                            <td>{{ $allItemss->tipetabel }} </td>
                                            <td>{{ $allItemss->notabel }}</td>
                                            <td>{{ $allItemss->judultabel }}</td>
                                            <td>
                                                <a href="view/{{ $allItemss->tipetabel }}" class="badge bg-info"><span
                                                        data-feather="eye">View</span>
                                                </a>
                                                {{-- <a href="/dashboard/tables/{{ $allItemss->id }}/edit"
                                                class="badge bg-warning"><span data-feather="edit">Edit</span>
                                            </a> --}}
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
