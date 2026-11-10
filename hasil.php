<?php
include("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Cerdas, Kuasai Dunia!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        th, td {
            padding: 4px;
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body style="background-color: lightblue;height: 100vh;">
    <header>
        <nav style="height: 72px; width: 100%; background-color: darkcyan; ">
            <a href="/part2" style="display: flex; align-items: center; text-decoration: none;">
                <img src="./assets/logo.png" alt="Logo" height="64px">
                <h1 style="padding: 0px 0px 0px 12px; color: black">Learnify</h1>
                <p style="color: black;">: Belajar Cerdas, Kuasai Dunia!</p>
            </a>
        </nav>
    </header>
    <main style="">
        <section style="display: flex; justify-content: center; align-items: center; margin: 300px 0;">
            <div style=" background-color: white; display: flex; justify-content: center; flex-direction: column; color: black; padding: 15px 30px;">
                <h2>Hasil Kuis</h2>
                <?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $kunci = mysqli_query($conn, "SELECT * FROM soal");
    $arr = ["1", "2", "3", "4", "5"];
    $total = 0;

    for($i = 0; $i < count($arr); $i++){
        $row = mysqli_fetch_array($kunci);
        $jawaban = $_POST[$arr[$i]];
        $yangbenar = "opsi_" . $row['jawaban'];

        if($row['jawaban'] == $jawaban){
            $total++;
        ?>
        <p>Pertanyaan <?=$row['id']?>: <span style="color: green; padding: 6px 0;">Jawaban Anda benar!</span></p>
        <?php
        } else {
        ?>
        <p>Pertanyaan <?=$row['id']?>: <span style="color: red; padding: 6px 0;">Jawaban Anda salah! Jawaban benar: <?= $row['jawaban']?>. <?= $row[$yangbenar]?></span></p>
        <?php
        }
    }
} else {
    header("location: /part2/kuis.php");
}
?>
                <p>Skor Pengguna: <?php if(isset($total)) echo $total ?> / 5</p>
                <p>Presentase Nilai: <?php if(isset($total)) echo $total / 5 * 100 ?>%</p>
            <a href="/part2">
            <button type="button" class="btn-solid theme-info" style="padding: 0 8px; margin-left: 240px; margin-bottom: 20px;">Kembali ke Halaman Utama</button>
            </a>
            </div>
        </section>
    </main>
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>