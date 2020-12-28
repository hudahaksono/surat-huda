<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <title>Nur Hudha Haksono</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="{{ asset('assets/js/require.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet" />

    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <link href="{{ asset('assets/plugins/charts-c3/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/plugins/charts-c3/plugin.js') }}"></script>
    <link href="{{ asset('assets/plugins/maps-google/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/plugins/maps-google/plugin.js') }}"></script>
    <script src="{{ asset('assets/plugins/input-mask/plugin.js') }}"></script>
</head>

<body class="">
    <div class="page">
        <div class="page-main">
            <div class="header py-4">
                <div class="container">
                    <div class="d-flex">
                        <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                            <span class="header-toggler-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <form id="simpan-surat" class="card">
                                <div class="card-header">
                                    <h2 class="card-title">KIRIM</h2>
                                </div>
                                <!-- <input type="text" class="form-control" name="example-text-input" placeholder="Text.."> -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="text-align:right;color:blue" class="form-label">Unit Kerja <span style="color:red">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <div class="input-icon mb-3">
                                                    <select class="form-control" name="unit_kerja" id="unit_kerja">
                                                        <option value="">-- Pilih Unit Kerja --</option>
                                                        @foreach ($unit_kerja as $unit)
                                                        <option value="{{ $unit->nama_unit }}">{{ $unit->nama_unit }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="text-align:right;color:blue" class="form-label">Jabatan <span style="color:red">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input class="form-control" placeholder="Jabatan" readonly>
                                                    <span class="input-group-append">
                                                        <button type="button" data-toggle="modal" data-target="#modaljabatan" class="btn btn-secondary"><i class="fe fe-search"></i></button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="text-align:right;color:blue" class="form-label">Pegawai <span style="color:red">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <select class="form-control" name="pegawai" id="pegawai">
                                                    <option value="">-- Pilih Pegawai --</option>
                                                    @foreach ($pegawai as $peg)
                                                    <option value="{{ $peg->id }}">{{ $peg->nama_pegawai }}</option>
                                                    @endforeach
                                                </select>
                                                <!-- <div class="input-group">
                                                    <input class="form-control" placeholder="Pegawai" readonly>
                                                    <span class="input-group-append">
                                                        <button class="btn btn-secondary" type="button"><i class="fe fe-search"></i></button>
                                                    </span>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label style="text-align:right;color:blue" class="form-label">Redaksi <span style="color:red">*</span></label>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <select class="form-control" name="unit-kerja">
                                                    <option value="asli">Asli</option>
                                                    <option value="tembusan">Tembusan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button id="simpan-data" class="btn btn-primary" type="button">Simpan</button>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="table-responsive">
                                                    <table id="data-surat" width="100%" class="table table-bordered">
                                                        <thead style="color:white;text-align:center;background:#219af4">
                                                            <tr>
                                                                <td>
                                                                    #
                                                                </td>
                                                                <td>
                                                                    Jabatan
                                                                </td>
                                                                <td>
                                                                    Pegawai
                                                                </td>
                                                                <td>
                                                                    Redaksi
                                                                </td>
                                                                <td>
                                                                    Hapus
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <form action="" method="post" class="card">
                                <div class="card-header">
                                    <h2 class="card-title">FILE SURAT</h2>
                                </div>
                                <!-- <input type="text" class="form-control" name="example-text-input" placeholder="Text.."> -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="fileUpload btn btn-primary">
                                                    <span><i class="fa fa-pdf"></i> Pilih File</span>
                                                    <input type="file" class="upload" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <table width="100%" class="table table-bordered">
                                                    <thead style="color:white;text-align:center;background:#219af4">
                                                        <tr>
                                                            <td>
                                                                #
                                                            </td>
                                                            <td style="width: 60%;">
                                                                File
                                                            </td>
                                                            <td>
                                                                Lihat
                                                            </td>
                                                            <td>
                                                                Hapus
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Modals -->
                        <div id="modaljabatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                            <div role="document" class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id="modal_header" class="modal-title">Pilih Jabatan</h5>
                                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <button type="button" name="update_btn" class="btn btn-primary">Select</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="text-align:right" class="col-12">
                            <div class="form-group">
                                <button class="btn btn-success">Kirim</button>
                                <button class="btn btn-warning">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                        Copyright © 2020 <a target="_blank" href="huda.scriptproject.web.id">Nur Hudha Haksono</a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#simpan-data').on("click", function(e) {
                $.ajax({
                    type: "post",
                    url: "/store",
                    data: $("#simpan-surat").serialize(),
                    success: function(response) {
                        for (var key in response) {
                            var success = response["success"];
                        }

                        if ($.trim(success) == "true") {
                            var oTableHarga = $("#data-surat").dataTable();
                            oTableHarga.fnDraw(false);

                        } else {

                        }
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = xhr.status + ": " + xhr.statusText;
                    },
                });
            });

            $("#unit_kerja").change(function() {
                var unit_kerja = $("#unit_kerja").val();
                $.ajax({
                    type: 'POST',
                    url: "/data-unit",
                    data: {
                        unit_kerja: unit_kerja
                    },
                    cache: false,
                    success: function(msg) {
                        $("#jabatan").html(msg);
                    }
                });
            });

            // $('#unit_kerja').on('change', function() {
            //     var id = $(this).val();
            //     $.ajax({
            //         url: '/data-jabatan',
            //         method: 'POST',
            //         data: {
            //             id: id
            //         },
            //         async: true,
            //         dataType: 'json',
            //         success: function(data) {
            //             $('#city').empty();
            //             $.each(response, function(id, name) {
            //                 $('#city').append(new Option(name, id))
            //             })
            //         }
            //     })
            // });
            $("#jabatan").DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "/data-jabatan",
                    type: "GET",
                },
                columns: [{
                        "data": "id",
                        visible: false
                    },
                    {
                        "data": "jabatan"
                    },
                ],
                //      aligment left, right, center row dan coloumn
                order: [
                    ["0", "asc"]
                ],
                columnDefs: [{
                        className: "text-left",
                        targets: [0, 1]
                    },
                    {
                        width: "15%",
                        targets: 1
                    },
                ],
                autoWidth: false,
                responsive: true,
            });
        });
    </script>
</body>

</html>