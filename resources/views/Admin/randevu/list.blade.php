@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">İletişim</h4>
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
            <div id="RandevuGrid" class="ag-theme-balham mt-3" style="height: 500px">
            </div>
        </div>



    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        //Ag Grid başlangıcı:
        let RandevuGrid;
        var rowData = [];

        @foreach ($randevu as $item)
            var row = {
                code: "{{ $item['code'] }}",
                name: "{{ $item['name'] }}",
                email: "{{ $item['email'] }}",
                phone: "{{ $item['email'] }}",
                description: "{{ $item['description'] }}",
                date: "{{ $item['date'] }}",
            }

            rowData.push(row);
        @endforeach


        $(document).ready(function() {
            let columnDefs = [

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
                    headerName: "Telefon",
                    field: "phone",
                },

                //Açıklama
                {
                    headerName: "Açıklama",
                    field: "description",
                },

                //E-mail
                {
                    headerName: "Tarih",
                    field: "date",
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

            let eGridDiv = document.getElementById('RandevuGrid');
            RandevuGrid = new agGrid.Grid(eGridDiv, gridOptions);
        });


        function onServiceChanged() {

        }
    </script>
@endsection
