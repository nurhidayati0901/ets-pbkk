<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Form Rekam Medis</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <h3 class="card-title text-center mt-5">
                        Form Rekam Medis
                    </h3>
                    <div class="card-body">
                        <form method="POST" action="/input-form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="pasien">Nama Pasien</label>
                                <input type="text" class="form-control @error('pasien') is-invalid @enderror" id="pasien" name="pasien" value="{{ old('pasien') }}">
                                @error('pasien')
                                  <div id="pasienFeedback" class="invalid-feedback">Field pasien harus diisi</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="dokter">Nama Dokter</label>
                                <input type="text" class="form-control @error('dokter') is-invalid @enderror" id="dokter" name="dokter" value="{{ old('dokter') }}">
                                @error('dokter')
                                  <div id="dokterFeedback" class="invalid-feedback">Field dokter harus diisi</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kondisi">Kondisi Kesehatan</label>
                                <input type="text" class="form-control @error('kondisi') is-invalid @enderror" id="kondisi" name="kondisi" value="{{ old('kondisi') }}">
                                @error('kondisi')
                                  <div id="kondisiFeedback" class="invalid-feedback">Field kondisi kesehataan harus diisi</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="suhu">Suhu Tubuh</label>
                                <input type="text" class="form-control @error('suhu') is-invalid @enderror" id="suhu" name="suhu" value="{{ old('suhu') }}">
                                @error('suhu')
                                  <div id="suhuFeedback" class="invalid-feedback">Field suhu harus diisi</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="resep">Pilih Resep</label>
                                <input type="file" class="form-control @error('resep') is-invalid @enderror" id="resep" name="resep">
                                @error('resep')
                                  <div id="resepFeedback" class="invalid-feedback">Hanya dapat mengunggah berkas dengan format jpeg,jpg,png,pdf ukuran maksimum 2 MB</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>