@extends('Admin.layouts.main')
@section('admin_main_body')
    <div class="page-title-box">
        <div class="row align-items-center ">
            <div class="col-md-8">
                <div class="page-title-box">
                    <h4 class="page-title">İletişim Verileri</h4>
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
            <div class="col-lg-12">

                <div class="m-3">
                    <div>
                        <button class="btn btn-primary" onclick="addEmailInput()">Yeni E-mail Ekle</button>
                    </div>
                    <div id="emailsDiv" class="">
                        @foreach ($emails as $item)
                            <div class="row" id="emailDiv{{ $loop->iteration }}">
                                <input type="email" value="{{ $item->value }}" id="email{{ $loop->iteration }}"
                                    class="form-control emails m-3 col-lg-4" placeholder="E-mail Giriniz">
                                <button class="btn btn-danger" style="height: 35px; margin-top:20px;"
                                    onclick="deleteEmailInput({{ $loop->iteration }})">Sil</button>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="m-3">
                    <div>
                        <button class="btn btn-primary" onclick="addPhonesInput()">Yeni Telefon Numarası Ekle</button>
                    </div>
                    <div id="phonesDiv">
                        @foreach ($phones as $item)
                            <div class="row" id="phoneDiv{{ $loop->iteration }}">
                                <input type="text" value="{{ $item->value }}" id="phone{{ $loop->iteration }}"
                                    class="form-control phones m-3 col-lg-4" placeholder="Telefon Numarası Giriniz">
                                <button class="btn btn-danger" style="height: 35px; margin-top:20px;"
                                    onclick="deletePhoneInput({{ $loop->iteration }})">Sil</button>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="m-3">
                    <div>
                        <button class="btn btn-primary" onclick="addAddressesInput()">Yeni Adres Ekle</button>
                    </div>
                    <div id="addressesDiv">
                        @foreach ($address as $item)
                            <div class="row" id="addressDiv{{ $loop->iteration }}">
                                <input type="text" value="{{ $item->value }}" id="address{{ $loop->iteration }}"
                                    class="form-control addresses m-3 col-lg-4">
                                <button class="btn btn-danger" style="height: 35px; margin-top:20px;"
                                    onclick="deleteAddressInput({{ $loop->iteration }})">Sil</button>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="m-3" style="float: right;">
                    <button type="button" class="btn btn-success" style="" onclick="submitFunciton()">Kaydet</button>
                </div>
            </div>
        </div>
    </div>

    <div hidden>
        <form action="{{ route('contactDataUpdate') }}" id="contactDataForm" method="POST">
            @csrf
            <select name="emails[]" id="emailsSelect" multiple>

            </select>

            <select name="phones[]" id="phonesSelect" multiple>

            </select>

            <select name="addresses[]" id="addressesSelect" multiple>

            </select>
        </form>
    </div>

    <script>
        var emailSayac = {{ count($emails) }}
        var phoneSayac = {{ count($phones) }}
        var addressSayac = {{ count($address) }}

        function addEmailInput() {
            emailSayac++;

            let kod =
                ` <div class="row" id="emailDiv` + emailSayac + `">
                    <input type="email" value="" id="email` + emailSayac + `" class="form-control emails m-3 col-lg-4" placeholder="E-mail Giriniz">
                    <button class="btn btn-danger" style="height: 35px; margin-top:20px;" onclick="deleteEmailInput(` +
                emailSayac + `)">Sil</button>
                </div>`
            var div = document.getElementById("emailsDiv");

            div.innerHTML += kod;

        }

        function deleteEmailInput(id) {
            document.getElementById("emailDiv" + id).remove();
        }

        function addPhonesInput() {
            phoneSayac++;

            let kod =
                ` <div class="row" id="phoneDiv` + phoneSayac + `">
                    <input type="text" value="" id="phone` + phoneSayac + `" class="form-control phones m-3 col-lg-4" placeholder="Telefon Numarası Giriniz">
                    <button class="btn btn-danger" style="height: 35px; margin-top:20px;" onclick="deletePhoneInput(` +
                phoneSayac + `)">Sil</button>
                </div>`
            var div = document.getElementById("phonesDiv");

            div.innerHTML += kod;

        }

        function deletePhoneInput(id) {
            document.getElementById("phoneDiv" + id).remove();
        }

        function addAddressesInput() {
            addressSayac++;

            let kod =
                ` <div class="row" id="addressDiv` + addressSayac + `">
                    <input type="text" value="" id="address` + addressSayac +
                `" class="form-control addresses m-3 col-lg-4" placeholder="Adres Giriniz">
                    <button class="btn btn-danger" style="height: 35px; margin-top:20px;" onclick="deleteAddressInput(` +
                addressSayac + `)">Sil</button>
                </div>`
            var div = document.getElementById("addressesDiv");

            div.innerHTML += kod;

        }

        function deleteAddressInput(id) {
            document.getElementById("addressDiv" + id).remove();
        }

        function submitFunciton() {
            var emails = document.getElementsByClassName("emails");
            var phones = document.getElementsByClassName("phones");
            var addresses = document.getElementsByClassName("addresses");

            for (let i = 0; i < emails.length; i++) {
                let kod = `<option value="` + emails[i].value + `" selected>` + emails[i].value + `</option>`
                document.getElementById('emailsSelect').innerHTML += kod;
            }

            for (let i = 0; i < phones.length; i++) {
                let kod = `<option value="` + phones[i].value + `" selected>` + phones[i].value + `</option>`
                document.getElementById('phonesSelect').innerHTML += kod;
            }

            for (let i = 0; i < addresses.length; i++) {
                let kod = `<option value="` + addresses[i].value + `" selected>` + addresses[i].value + `</option>`
                document.getElementById('addressesSelect').innerHTML += kod;
            }

            document.getElementById("contactDataForm").submit();
        }
    </script>
@endsection
