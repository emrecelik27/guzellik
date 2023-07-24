@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Hizmetler</h4>
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
                    <a class="btn btn-primary" style="float: right;" href="{{ route('createServiceScreen') }}">+ Yeni</a>
            </div>
            </h4>
            <div id="serviceGrid" class="ag-theme-balham mt-3" style="height: 500px">
            </div>
        </div>



    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        //Ag Grid başlangıcı:
        let serviceGrid;
        var rowData = [];

        @foreach ($services as $item)
            var row = {
                code: "{{ $item['code'] }}",
                title: "{{ $item['title'] }}",
                mini_description: "{{ $item['mini_description'] }}",
                description: "{{ $item['description'] }}",
                image_url: "{{ $item['image_url'] }}",
            }

            rowData.push(row);
        @endforeach


        $(document).ready(function() {
            let columnDefs = [

                //Menü
                {
                    headerName: "Menü",
                    field: "detail",
                    width: 200,
                    cellRenderer: function(params) {
                        let settings = ` <div>
                                            <a href="{{ route('createServiceScreen') }}?code=` + params.data.code + `" class="btn btn-warning">Düzenle</a>
                                            <a href="{{ route('deleteService') }}?code=` + params.data.code + `" class="btn btn-danger">Sil</a>
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
                    headerName: "Başlık",
                    field: "title",
                },

                //E-mail
                {
                    headerName: "Mini Açıklama",
                    field: "mini_description",
                },
                //E-mail
                {
                    headerName: "Açıklama",
                    field: "description",
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

            let eGridDiv = document.getElementById('serviceGrid');
            serviceGrid = new agGrid.Grid(eGridDiv, gridOptions);
        });


        function onServiceChanged() {

        }
    </script>
@endsection
