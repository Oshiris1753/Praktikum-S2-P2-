<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid p-5 border border-primary">
        <div class="row">
            <div class="col-md-8">
                <form>
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV">
                                <label for="radio_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="KULKAS">
                                <label for="radio_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="MESIN_CUCI">
                                <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="Jumlah" name="Jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>


            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header bg-primary">
                        Daftar Harga
                    </h5>
                    <div class="card-body">
                        <p>TV : 4.200.000</p>
                        <hr>
                        <p>Kulkas : 3.100.000</p>
                        <hr>
                        <p>Mesin Cuci : 3.800.000</p>
                    </div>
                    <div class="card-footer bg-primary">
                        Harga Dapat Berubah Setiap Saat
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>