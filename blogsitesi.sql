-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Tem 2022, 15:26:26
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blogsitesi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

CREATE TABLE `anasayfa` (
  `id` int(11) NOT NULL,
  `Anasayfa_baslik` varchar(255) NOT NULL,
  `Anasayfa_yazi1` varchar(255) NOT NULL,
  `Anasayfa_yazi2` varchar(255) NOT NULL,
  `Anasayfa_resim` varchar(255) NOT NULL,
  `Anasayfa_cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`id`, `Anasayfa_baslik`, `Anasayfa_yazi1`, `Anasayfa_yazi2`, `Anasayfa_resim`, `Anasayfa_cv`) VALUES
(1, 'log', 'Merhaba Ben,', 'Nihat Baran', 'a', 'Cv');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim`
--

CREATE TABLE `egitim` (
  `id` int(11) NOT NULL,
  `okul_adi` varchar(255) NOT NULL,
  `okul_degeri` varchar(255) NOT NULL,
  `okul_tarih` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `egitim`
--

INSERT INTO `egitim` (`id`, `okul_adi`, `okul_degeri`, `okul_tarih`) VALUES
(1, 'Necip Fazıl Kısakürek Anadolu Lisesi', 'Anadolu Lisesi', '2015-2018'),
(2, 'Muğla Sıtkı Koçman Universitesi- Dış ticaret Bölümü', 'Üniversite', '2019-Devam'),
(3, 'Ağrı İbrahim çeçen Üniversitesi - Bilgisayar Programcılığı\r\n', 'Üniversite', '2020-2022');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda`
--

CREATE TABLE `hakkimda` (
  `id` int(11) NOT NULL,
  `hakkimda_alan` varchar(255) NOT NULL,
  `hakkimda_deger` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hakkimda`
--

INSERT INTO `hakkimda` (`id`, `hakkimda_alan`, `hakkimda_deger`) VALUES
(1, 'Doğum Tarih', '11.02.2000'),
(2, 'Alanlar', 'Back-end, Network'),
(3, 'Telefon', '-'),
(4, 'E-posta', 'nihatbaran@protonmail.com'),
(5, 'Adres', 'Kayapınar/DİYARBAKIR');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda_alanlar`
--

CREATE TABLE `hakkimda_alanlar` (
  `id` int(11) NOT NULL,
  `hakkimda_alan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hakkimda_alanlar`
--

INSERT INTO `hakkimda_alanlar` (`id`, `hakkimda_alan`) VALUES
(1, 'Hakkımda'),
(2, 'Yetenekler'),
(3, 'Eğitim'),
(4, 'Hizmetler');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `iletisimIsim` text NOT NULL,
  `iletisimMail` text NOT NULL,
  `iletisimKonu` text NOT NULL,
  `iletisimMesaj` text NOT NULL,
  `iletisimTarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `iletisimIsim`, `iletisimMail`, `iletisimKonu`, `iletisimMesaj`, `iletisimTarih`) VALUES
(2, 'ad', 'asd@gmail.com', 'asd', 'asd', '0000-00-00 00:00:00'),
(3, 'ad', 'asasd@gmal.com', 'asd', 'asd', '0000-00-00 00:00:00'),
(4, 'nihat', 'n@gmail.com', 'deneme', 'deneme mesajıdır', '0000-00-00 00:00:00'),
(5, 'sdf', 'nasd@gmail.com', 'mail', 'asdasda', '0000-00-00 00:00:00'),
(6, 'sdf', 'asdsa@gmail.com', 'asd', 'gasd', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `kadi` varchar(50) NOT NULL,
  `psswd` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kadi`, `psswd`) VALUES
(1, 'nihat', 1111);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menuler`
--

CREATE TABLE `menuler` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `menu_yonlendirme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `menuler`
--

INSERT INTO `menuler` (`id`, `menu`, `menu_yonlendirme`) VALUES
(1, 'Anasayfa', 'index.php'),
(2, 'İletişim', '#iletisim'),
(3, 'Hakkımda', '#hakkimda');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siteayarlari`
--

CREATE TABLE `siteayarlari` (
  `id` int(11) NOT NULL,
  `Site_baslik` varchar(255) NOT NULL,
  `Site_desc` varchar(255) NOT NULL,
  `Site_footer` varchar(255) NOT NULL,
  `Site_footer_tasarimYazi1` varchar(255) NOT NULL,
  `Site_footer_tasarimYazi2` varchar(255) NOT NULL,
  `Site_footer_URL` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `siteayarlari`
--

INSERT INTO `siteayarlari` (`id`, `Site_baslik`, `Site_desc`, `Site_footer`, `Site_footer_tasarimYazi1`, `Site_footer_tasarimYazi2`, `Site_footer_URL`) VALUES
(1, 'Nihat Baran | Personel Site', 'asda', 'Copyright 2022 Tüm hakları Saklıdır | ', 'Tasarım | ', 'Nihat baran', 'asd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetenekler`
--

CREATE TABLE `yetenekler` (
  `id` int(11) NOT NULL,
  `yetenek_adi` varchar(255) NOT NULL,
  `yetenek_deger` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yetenekler`
--

INSERT INTO `yetenekler` (`id`, `yetenek_adi`, `yetenek_deger`) VALUES
(1, 'Java', '70%'),
(2, 'PHP', '75%'),
(3, 'C#', '65%'),
(4, 'SQL', '85%'),
(5, 'HTML', '85%'),
(6, 'Css', '70%'),
(7, 'sdf', 'asd');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anasayfa`
--
ALTER TABLE `anasayfa`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `egitim`
--
ALTER TABLE `egitim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimda`
--
ALTER TABLE `hakkimda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimda_alanlar`
--
ALTER TABLE `hakkimda_alanlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menuler`
--
ALTER TABLE `menuler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siteayarlari`
--
ALTER TABLE `siteayarlari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yetenekler`
--
ALTER TABLE `yetenekler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anasayfa`
--
ALTER TABLE `anasayfa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `egitim`
--
ALTER TABLE `egitim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimda`
--
ALTER TABLE `hakkimda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimda_alanlar`
--
ALTER TABLE `hakkimda_alanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `menuler`
--
ALTER TABLE `menuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `siteayarlari`
--
ALTER TABLE `siteayarlari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yetenekler`
--
ALTER TABLE `yetenekler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
