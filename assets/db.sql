-- =========================
-- BUAT DATABASE
-- =========================
CREATE DATABASE kuis_db;
USE kuis_db;

-- =========================
-- TABEL USERS
-- =========================
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    nim VARCHAR(20)
);

-- =========================
-- TABEL SOAL
-- =========================
CREATE TABLE soal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pertanyaan TEXT,
    opsi_a VARCHAR(255),
    opsi_b VARCHAR(255),
    opsi_c VARCHAR(255),
    opsi_d VARCHAR(255),
    jawaban CHAR(1)
);

-- =========================
-- TABEL HASIL
-- =========================
CREATE TABLE hasil (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    skor INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- =========================
-- INSERT DATA SOAL
-- =========================
INSERT INTO soal (pertanyaan, opsi_a, opsi_b, opsi_c, opsi_d, jawaban) VALUES
('Apa kepanjangan dari HTML?',
 'Hyper Text Markup Language',
 'Hyperlinks and Text Markup Language',
 'Home Tool Markup Language',
 'Hyper Tool Multi Language',
 'a'),

('CSS digunakan untuk?',
 'Mengatur tampilan halaman web',
 'Menambahkan fungsi interaktif',
 'Mengolah data',
 'Menyimpan data',
 'a'),

('Tag untuk membuat baris baru adalah?',
 'newline',
 'hr',
 'line',
 'br',
 'd'),

('PHP digunakan untuk?',
 'Frontend',
 'Styling',
 'Backend / server side',
 'Animasi',
 'c'),

('Tag untuk menampilkan gambar?',
 'img src',
 'image src',
 'pic src',
 'photo src',
 'a');