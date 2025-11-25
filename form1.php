<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2 align="center">FORM INPUT DATA</h2>
<div class="container">
        <form>
            <div class="row">
                <div class="col-25">
                    <label>Nama</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nama">
            </div>
    </div>

    <div class="row">
        <div class="col-25">
            <label>Jenis kelamin</label>
        </div>
        <div class="col-75">
            <input type="radio" name="jk" value="laki laki" required> laki laki
            <input type="radio" name="jk" value="perempuan" required> perempuan
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label> Program keahlian </label>
        </div>
        <div class="col-75">
            <select name="prodi">
                <option value="RPL">RPL</option>
                <option value="DKV">DKV</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-25">
            <label>Alamat</label>
        </div>
        <div class="col-75">
            <textarea name="Alamat"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="foto">Foto</label>
        </div>
        <div class="col-75">
            <input type="file" name="gambar" accept="image/*" value ">
    </div>
    </div>

    <br>
    <div class =" row">
            <input type="submit" class="tombol" value="SIMPAN" name="btnSimpan">
            <input type="reset" value="reset">
        </div>
        </form>
</div>
</body>

</html>