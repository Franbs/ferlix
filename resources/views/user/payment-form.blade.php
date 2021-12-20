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
                        <button type="submit" class="btn btn-primary justify-content-center">Buy</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>