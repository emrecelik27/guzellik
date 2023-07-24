@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">Alt Eğitimler</h4>
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
                    <a class="btn btn-primary" style="float: right;" href="{{ route('createAltEducationScreen') }}">+
                        Yeni</a>
            </div>
            </h4>
            <div id="altEducationGrid" class="ag-theme-balham mt-3" style="height: 500px">
            </div>
        </div>



    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        //Ag Grid başlangıcı:
        let altEducationGrid;
        var rowData = [];

        @foreach ($altEducations as $item)
            var row = {
                code: "{{ $item->code }}",
                education: "{{ $item->education }}",
                title: "{{ $item->title }}",
                mini_description: "{{ $item->mini_description }}",
                description: "{{ $item->description }}",
                main_image_url: "{{ $item->main_image_url }}",
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
                                            <a href="{{ route('createAltEducation') }}?code=` + params.data.code + `" class="btn btn-warning">Düzenle</a>
                                            <a href="{{ route('deleteAltEducation') }}?code=` + params.data.code + `" class="btn btn-danger">Sil</a>
                                        </div>`;
                        return settings;
                    }
                },

                //Id
                {
                    headerName: "#",
                    field: "code",
                },

                //Eğitim
                {
                    headerName: "Üst Eğitim",
                    field: "education",
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

            let eGridDiv = document.getElementById('altEducationGrid');
            altEducationGrid = new agGrid.Grid(eGridDiv, gridOptions);
        });


        function onServiceChanged() {

        }
    </script>
@endsection
