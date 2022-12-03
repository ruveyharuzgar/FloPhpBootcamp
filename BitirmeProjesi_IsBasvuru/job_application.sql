-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 03 Ara 2022, 10:51:46
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `job_application`
--
CREATE DATABASE IF NOT EXISTS `job_application` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci;
USE `job_application`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `surname` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `birth_place` varchar(200) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `date_of_birth` varchar(200) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `mobile_phone` varchar(11) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `home_phone` varchar(11) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `school_name` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `graduation_year` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `civil_status` varchar(200) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `driving_license` varchar(200) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `soldiering` varchar(200) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `application_date` varchar(200) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `application`
--

INSERT INTO `application` (`id`, `name`, `surname`, `birth_place`, `date_of_birth`, `email`, `mobile_phone`, `home_phone`, `school_name`, `graduation_year`, `address`, `gender`, `civil_status`, `driving_license`, `soldiering`, `application_date`) VALUES
(66, 'Ahmet', 'Yapan', 'Manisa', '2022-11-02', 'fatmam1221@gmail.com', '5523650801', '2120000000', 'Akdeniz', '2021-07-02', 'Gölmarmara', 'Belirtmek İstemiyor', 'Bekar', 'Var', 'Yok', '2022-12-03'),
(4, 'Tuana', 'Rüzgar', 'Anamur', '2022-12-07', 'tr@gmail.com', '5555555555', '555555555', 'abc lisesi', '2022-12-14', 'bozyazı', 'kadın', 'bekar', 'yok', 'yok', '2022-12-03'),
(5, 'Oğulcan', 'Rüzgar', 'İçel', '2022-12-13', '185541066@firat.edu.tr', '5523650801', '03240000000', 'Fırat ', '2022-12-04', 'Mersin', 'Erkek', 'Bekar', 'Var', 'Var', '2022-12-03'),
(8, 'Rüveyha', 'Rüzgar', 'Anamur', '2022-12-02', 'ruveyharuzgar.108@gmail.com', '5523650801', '03240000000', 'Fırat ', '64564', 'Tekeli', '454', 'Bekar', '4554', '4554', '2022-12-01'),
(73, 'Mehmet Selçuk', 'Batal', 'İstanbul', '2022-12-01', 'test@gmail.com', '5523650801', '03240000000', 'Ege', '2022-12-10', 'İstanbul', 'Erkek', 'Bekar', 'Var', 'Var', '2022-12-03'),
(67, 'Zeh', 'dffdf', 'dsdsg', '2022-12-03', 'ruveyharuzgar.108@gmail.com', 'ssdfsdf', '2120000000', 'sdfsdfs', '2022-12-03', 'Ankara', 'Kadın', 'Bekar', 'Var', 'Yok', '2022-12-03'),
(65, 'YETERRRR', 'Rüzgar', 'Anamur', '2022-12-02', 'ruveyharuzgar.108@gmail.com', '5523650801', 'sdfsdf', 'fdsdf', '2022-12-02', 'Mersin', 'Erkek', 'sdfsdfs', '4554', '4554', '2022-12-02'),
(32, 'ruveyharuzgar.108@gmail.com', '', 'Anamur', '2022-12-02', 'fdfdg@sfsdf', 'dfgdf', 'dfgdfg', 'fdgdfg', '555', 'ftyhfh', 'fhfgh', 'fhf', 'fghfg', 'fhfgh', '2022-12-02'),
(33, 'ruveyharuzgar.108@gmail.com', '', 'Anamur', '2022-12-02', 'fdfdg@sfsdf', 'dfgdf', 'dfgdfg', 'fdgdfg', '555', 'ftyhfh', 'fhfgh', 'fhf', 'fghfg', 'fhfgh', '2022-12-02'),
(63, 'Zehra', 'Türedi', 'Antalya', '2022-12-02', '185541066@firat.edu.tr', '5523650801', '03240000000', 'Fırat ', '2023', 'İstanbul', 'Kadın', 'Bekar', 'Var', 'Yok', '2022-12-02'),
(68, 'ruveyharuzgar.108@gmail.com', 'Rüzgar', 'Anamur', '2022-12-03', 'ruveyharuzgar.108@gmail.com', '5523650801', 'dfgdfg', 'Fırat ', '2022-12-03', 'mmmmmmm', 'Kadın', 'Bekar', 'fghfg', 'Yok', '2022-12-02'),
(69, 'ruveyharuzgar.108@gmail.com', 'Rüzgar', 'Anamur', '2022-12-03', 'ruveyharuzgar.108@gmail.com', '5523650801', 'dfgdfg', 'Fırat ', '2022-12-03', 'mmmmmmm', 'Kadın', 'Bekar', 'fghfg', 'Yok', '2022-12-02'),
(70, 'ruveyharuzgar.108@gmail.com', 'Rüzgar', 'Anamur', '2022-12-03', 'ruveyharuzgar.108@gmail.com', '5523650801', 'dfgdfg', 'Fırat ', '2022-12-03', 'mmmmmmm', 'Kadın', 'Bekar', 'fghfg', 'Yok', '2022-12-02'),
(72, 'Mehmet Selçuk', 'Batal', 'İstanbul', '2022-11-17', 'deneme@test.com', '5523650801', '03240000000', 'Ege Üniversitesi', '2022-12-01', 'İstanbul', 'Erkek', 'Bekar', 'Var', 'Var', '2022-12-03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_surname` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `user` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `email` varchar(120) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name_surname`, `user`, `password`, `email`, `date`) VALUES
(1, 'Rüveyha Rüzgar', 'ruveyharuzgar', '1234', 'test@gmail.com', '2022-12-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
