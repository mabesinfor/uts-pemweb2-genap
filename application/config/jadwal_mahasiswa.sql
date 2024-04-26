CREATE DATABASE IF NOT EXISTS jadwal_mahasiswa;
USE jadwal_mahasiswa;

CREATE TABLE `matakuliah` (
    `id_matakuliah` int NOT NULL AUTO_INCREMENT,
    `nama_matakuliah` varchar(100) NOT NULL,
    PRIMARY KEY (`id_matakuliah`)
);

CREATE TABLE `users` (
    `id_user` int NOT NULL AUTO_INCREMENT,
    `username` varchar(100) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id_user`)
);

CREATE TABLE `jadwal` (
    `id_jadwal` int NOT NULL AUTO_INCREMENT,
    `id_matakuliah` int NOT NULL,
    `jam_mulai` time NOT NULL,
    `jam_selesai` time NOT NULL,
    `nama_ruang` varchar(100) NOT NULL,
    `id_user` int NOT NULL,
    PRIMARY KEY (`id_jadwal`),
    FOREIGN KEY (`id_matakuliah`) REFERENCES `matakuliah`(`id_matakuliah`),
    FOREIGN KEY (`id_user`) REFERENCES `users`(`id_user`)
);

CREATE TABLE `jadwal_mahasiswa` (
    `id_jadwal_mahasiswa` int NOT NULL AUTO_INCREMENT,
    `id_jadwal` int NOT NULL,
    `nim` varchar(10) NOT NULL,
    PRIMARY KEY (`id_jadwal_mahasiswa`)
);

CREATE TABLE `mahasiswa` (
    `nim` varchar(10) NOT NULL,
    `nama` varchar(100) NOT NULL,
    `tanggal_lahir` date NOT NULL,
    `alamat` varchar(100) NOT NULL,
    `id_user` int NOT NULL,
    PRIMARY KEY (`nim`),
    FOREIGN KEY (`id_user`) REFERENCES `users`(`id_user`)
);

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '123');