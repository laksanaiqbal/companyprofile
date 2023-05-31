<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.header')
</head>

<body class="hold-transition sidebar-mini dark-mode">

    <div class="wrapper">

        @include('admin.navbar')


        @include('admin.sidebar')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Kelola Slider</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-tools">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                                <i class="fa fa-plus-circle" aria-hidden="true">Tambah SLider</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped">

                    <tr class="text-center">
                        <th>No.</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($kelolaslider as $item)
                    <tr align=center>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ url('assets/slider') }}/{{ $item->gambar }}" class="img-fluid" width="80"></td>
                        <td>
                            @if($item->status == 0)
                            <span style="color:white" class="badge bg-danger"><i class="fas fa-times"></i> Inactive</span>
                            @else
                            <span style="color:white" class="badge bg-success"><i class="fas fa-check"></i> Active</span>
                            @endif
                        </td>
                        <th>
                            &nbsp; | &nbsp;
                            <a href="{{ url('hapusslider', $item->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt" style="color:currentColor"></i></a>
                        </th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <footer class="main-footer">
            @include('admin.footer')
        </footer>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

        <div class="modal fade" id="modal-info">
            <div class="modal-dialog">
                <form action="{{ route('tambahslider') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-content bg-info">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Slider</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <input type="file" id="gambar" name="gambar">
                            </div>
                            <div class="form-group">
                                <select name="status" class="custom-select">
                                    <option value="1">Active</option>
                                    <option value="0">inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-light">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>


    @include('admin.script')
</body>

</html>