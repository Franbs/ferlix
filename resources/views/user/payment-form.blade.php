<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment form</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-fluid">
        <a href="/" class="d-flex justify-content-center text-dark text-decoration-none">
            <svg width="173" height="140">
                <text class="text-align-center" x="0" y="100" fill="red" font-weight="bold" font-size="3em">FERLIX</text>
            </svg>
        </a>
    </div>

    <form>
        <div class="container w-25 p-3">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon2">
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
                        <i class="bi bi-calendar mt-1"></i>
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
                        <button type="submit" class="btn btn-primary justify-content-center">Buy</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>