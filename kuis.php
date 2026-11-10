<?php
include("./database.php");
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
        <section style="display: flex; justify-content: center; align-items: center; margin: 100px 0;">
            <div style="background-color: white; display: flex; justify-content: center; flex-direction: column; padding: 15px 30px;">
                <form action="hasil.php" method="POST">

    <ol style="color: black;">
<?php
$soal = mysqli_query($conn, "SELECT * FROM soal");

while($row = mysqli_fetch_array($soal)){
?>
<div>
<li><?=$row['pertanyaan']?></li>
<input type="radio" name="<?=$row['id']?>" id="<?=$row['id']?>" value="a" required>
<label for="jawaban"><?=$row['opsi_a']?></label><br>
<input type="radio" name="<?=$row['id']?>" id="<?=$row['id']?>" value="b" required>
<label for="jawaban"><?=$row['opsi_b']?></label><br>
<input type="radio" name="<?=$row['id']?>" id="<?=$row['id']?>" value="c" required>
<label for="jawaban"><?=$row['opsi_c']?></label><br>
<input type="radio" name="<?=$row['id']?>" id="<?=$row['id']?>" value="d" required>
<label for="jawaban"><?=$row['opsi_d']?></label><br>
</div>
<?php
}
?>
    </ol>
            <a href="/part2/hasil.php">
            <button type="submit" class="btn-solid theme-info" style="width: 120px; margin-left: 240px; margin-bottom: 20px;">Kirim Jawaban</button>
            </a>
            </div>
                </form>
        </section>
    </main>
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>