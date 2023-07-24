@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Kullanıcılar</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">
                        </li>
                    </ol>
                </div>
            </div>

        </div>
    </div>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    <a class="btn btn-primary" style="float: right;" href="{{ route('createUserScreen') }}">+ Yeni</a>
            </div>
            </h4>
            <div id="userGrid" class="ag-theme-balham mt-3" style="height: 500px">
            </div>
        </div>



    </div>

    <div id="hiddenDiv" hidden>



    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        //Ag Grid başlangıcı:
        let userGrid;
        var rowData = [];

        @foreach ($users as $item)
            var row = {
                code: "{{ $item['code'] }}",
                name: "{{ $item['name'] }}",
                email: "{{ $item['email'] }}",
                active: "{{ $item['active'] }}",
            }

            rowData.push(row);
        @endforeach


        $(document).ready(function() {
            let columnDefs = [

                //Menü
                {
                    headerName: "Menü",
                    field: "detail",
                    width: 270,
                    cellRenderer: function(params) {
                        let settings = ` <div>
                                            <a href="{{ route('createUser') }}?code=` + params.data.code + `" class="btn btn-warning">Düzenle</a>
                                            <a href="{{ route('deleteUser') }}?code=` + params.data.code + `" class="btn btn-danger">Sil</a>
                                            <button onclick="changePassword(` + params.data.code + `)" class="btn btn-secondary">Şifre Değiştir</button>
                                        </div>`;
                        return settings;
                    }
                },

                //Id
                {
                    headerName: "#",
                    field: "code",
                },

                //Name
                {
                    headerName: "İsim",
                    field: "name",
                },

                //E-mail
                {
                    headerName: "E-mail",
                    field: "email",
                },
                //E-mail
                {
                    headerName: "Aktif",
                    width: 200,
                    cellRenderer: function(params) {
                        let settings = ``;
                        if (params.data.active == 1) settings =
                            ` <span class="badge badge-success">Aktif</span>`;
                        else settings = ` <span class="badge badge-danger">Pasif</span>`;
                        return settings;
                    }
                },

            ];

            let gridOptions = {
                defaultColDef: {
                    width: 150,
                    sortable: true,
                    resizable: true,
                },
                columnDefs: columnDefs,
                rowSelection: 'single',
                rowData: rowData,
                rowHeight: 50,
                localeText: agGridTR,
                onSelectionChanged: onServiceChanged,
                pagination: true,
                paginationPageSize: 100,
            };

            let eGridDiv = document.getElementById('userGrid');
            userGrid = new agGrid.Grid(eGridDiv, gridOptions);
        });


        function onServiceChanged() {

        }

        function changePassword(code) {
            Swal.fire({
                title: 'Şifre Değiştir',
                icon: 'warning',
                html: ` <div>
                    <p>Şifresi değiştirilecek Kullanıcının Kodu: ` + code + `</p>
                <div>
                    <label for="">Şifre:</label>
                    <input type="password" id="password" class="swal2-input">
                </div>
                <div>
                    <label for="">Şifre Tekrarı:</label>
                    <input type="password" id="password_repeat" class="swal2-input">
                </div>
            </div>`,
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: 'Değiştir',
                cancelButtonText: 'Vazgeç',
                preConfirm: function() {
                    var password = document.getElementById('password').value;
                    var password2 = document.getElementById('password_repeat').value;
                    if (password == password2) {
                        var code2 = ` <form action="{{ route('changePassword') }}" method="POST" id="changePasswordForm">
                                        @csrf
                                        <input type="text" name="code" value="` + code + `">
                                        <input type="password" name="password"  value="` + password + `">
                                    </form>`
                        document.getElementById('hiddenDiv').innerHTML = code2;
                        document.getElementById('changePasswordForm').submit();
                    } else {
                        swal.close();
                        Swal.fire({
                            icon: 'error',
                            title: 'Hata',
                            text: 'Şifre ile şifre tekrarı uyuşmamaktadır.',
                            confirmButtonText: 'Tamam',
                            showCloseButton: true,
                            preConfirm: function() {
                                swal.close();
                                changePassword(code);
                            }
                        })
                    }
                },
            })
            /*Swal.fire({
                title: 'Multiple inputs',
                html: '<input id="swal-input1" class="swal2-input">' +
                    '<input id="swal-input2" class="swal2-input">',
                preConfirm: function() {
                    return new Promise(function(resolve) {
                        resolve([
                            $('#swal-input1').val(),
                            $('#swal-input2').val()
                        ])
                    })
                },
                onOpen: function() {
                    $('#swal-input1').focus()
                }
            }).then(function(result) {
                swal(JSON.stringify(result))
            }).catch(swal.noop)*/
        }
    </script>
@endsection
