<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai</title>
</head>
<body>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center " style="height: 600px;">
            <form class="form-horizontal" method="POST" action="nilai_siswa.php" class="mt-5 pt-5">
                <div class="form-group row ">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                        <select id="matkul" name="matkul" class="custom-select">
                            <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                            <option value="Basis Data">Basis Data</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                        <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-8">
                        <input id="nilai_uas" name="nilai_uas" placeholder="Nilai_UAS" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label> 
                    <div class="col-8">
        <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
</div> 
<div class="form-group row">
    <div class="offset-4 col-4">
        <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
</form>
        </div>
    </div>
</div>
<?php 
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    echo $nilai_tugas;
    echo $nilai_uas;
    echo $nilai_uts;
    $hasil_uts = $nilai_uts * 0.3;
    $hasil_uas = $nilai_uas * 0.35;
    $hasil_tugas = $nilai_tugas * 0.35;
    echo $hasil_tugas;
    echo "<br/> $hasil_uas";
    echo "<br/> $hasil_uts";
    $nilai_akhir = $hasil_uts + $hasil_tugas + $hasil_uas;
    echo "<br>$nilai_akhir";
    if( $nilai_akhir > 55){
        echo "<h1>LULUS</h1>";
    }else{
        echo "<h1>TIDAK LULUS</h1>";
    }
    $nilai_A = "Grade : A";
    $nilai_B = "Grade : B";
    $nilai_C = "Grade : C";
    $nilai_D = "Grade : D";
    $nilai_E = "Grade : E";
    $nilai_I = "Grade : I";
    if($nilai_akhir >= 85){
        echo $nilai_A;
    }elseif($nilai_akhir >= 70){
        echo $nilai_B;
    }elseif($nilai_akhir >=56 ){
        echo $nilai_C;
    }elseif($nilai_akhir >= 36){
        echo $nilai_D;
    }elseif($nilai_akhir >=0){
        echo $nilai_E;
    }else{
        echo $nilai_I;
    }

    switch(true){
        case ($nilai_akhir >= 85):
            echo "<br/>Sangat Memuaskan";
            break;
        case ($nilai_akhir >= 70):
            echo "<br/>Memuaskan";
            break;
        case ($nilai_akhir >=56):
            echo "<br/>Cukup";
            break;
        case ($nilai_akhir >= 36):
            echo "<br/>Kurang";
            break;
        case ($nilai_akhir >= 0):
            echo "<br/>Sangat Kurang";
            break;
        default:
            echo "<br/>Tidak Ada";
                    
            
    }

?>
</body>
</html>