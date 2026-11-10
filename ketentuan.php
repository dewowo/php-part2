<?php

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
        <section style="display: flex; justify-content: center; align-items: center; margin: 200px 0;">
            <div class="card" style="width: 32rem;" data-bs-theme="light">
                <div class="card-header" style="text-align: center; padding: 1rem; font-size: 20px;">
                    <strong>
                    Ketentuan Kuis
                    </strong>
                </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" style="padding: 0.6rem;">Ketentuan Untuk Mengerjakan Kuis:</li>
    <li class="list-group-item" style="padding: 0.6rem;">Kuis terdiri dari 5 pertanyaan,</li>
    <li class="list-group-item" style="padding: 0.6rem;">Setiap pertanyaan memiliki 4 pilihan jawaban,</li>
    <li class="list-group-item" style="padding: 0.6rem;">Pilihlah satu jawaban yang menurut Pengguna benar,</li>
    <li class="list-group-item" style="padding: 0.6rem;">Setiap jawaban benar akan mendapatkan 20 poin,</li>
    <li class="list-group-item" style="padding: 0.6rem;">Jawaban yang salah tidak akan mendapatkan poin, dan</li>
    <li class="list-group-item" style="padding: 0.6rem;">
Pengguna dapat melihat skor akhir setelah menyelesaikan kuis.
    </li>
  </ul>
  <a href="/part2/kuis.php">
            <button type="button" class="btn-solid theme-info" style="width: 220px; margin-left: 270px; margin-bottom: 20px; margin-top: 20px;">Mulai Mengerjakan Kuis!</button>
  </a>
            </div>
        </section>
    </main>
        <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>