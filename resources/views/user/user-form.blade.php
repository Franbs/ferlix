@extends("layouts.main")

@section("page-title", "User form")

@section("content")

<form>
    <div class="container w-50 p-3">
        <div class="container mb-5 mt-3">
            <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-person-circle col-3" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>

                <div class="col-9">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon2">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon2">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                    </div>
                </div>
            </div>
        </div>

        <h5 class="mb-3">Payment data</h5>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cardholder's Name" aria-label="Cardholder's Name" aria-describedby="basic-addon2">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Card number" aria-label="Card number" aria-describedby="basic-addon2">
        </div>

        <div class="container p-0 mb-3">
            <div class="row">
                <div class="col input-group">
                    <input placeholder="Expiration date" class="textbox-n form-control mr-1" type="text" onfocus="(this.type='date')" id="date">
                </div>

                <div class="col" style="margin-top: 3px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="input-group mb-5">
            <input type="text" class="form-control" placeholder="CVV" aria-label="CVV" aria-describedby="basic-addon2">
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon2">
            <input type="text" class="form-control" placeholder="City" aria-label="City" aria-describedby="basic-addon2">
        </div>

        <div class="input-group mb-5">
            <input type="text" class="form-control" placeholder="Province" aria-label="Province" aria-describedby="basic-addon2">
            <input type="text" class="form-control" placeholder="Postal code" aria-label="Postal code" aria-describedby="basic-addon2">
        </div>

        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary justify-content-center">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection