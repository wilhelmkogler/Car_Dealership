CREATE DATABASE IF NOT EXISTS `cars` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cars`;


DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `Id` int(20) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Year` int(20) NOT NULL,
  `Fuel` varchar(50) NOT NULL,
  `Engine` int(20) NOT NULL,
  `Horsepower` int(20) NOT NULL,
  `Mileage` int(20) NOT NULL,
  `Body` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Transmission` varchar(50) NOT NULL,
  `Price` int(20) NOT NULL,
  `Pic1` varchar(50) NOT NULL,
  `Pic2` varchar(50) NOT NULL,
  `Pic3` varchar(50) NOT NULL,
  `Pic4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `cars`
--

INSERT INTO `cars` (`Id`, `Brand`, `Type`, `Year`, `Fuel`, `Engine`, `Horsepower`, `Mileage`, `Body`, `Status`, `Transmission`, `Price`, `Pic1`, `Pic2`, `Pic3`, `Pic4`) VALUES
(1, 'Audi', 'A3', 2014, 'Benzin', 2000, 310, 132000, 'Sedan', 'Használt', 'Automata 8-sebesség', 6300000, 'img/cars/1_1.webp', 'img/cars/1_2.webp', 'img/cars/1_3.webp', 'img/cars/1_4.webp'),
(2, 'Audi', 'Q3', 2013, 'Dízel', 3000, 240, 198000, 'Suv', 'Használt', 'Automata 6-sebesség', 5400000, 'img/cars/2_1.webp', 'img/cars/2_2.webp', 'img/cars/2_3.webp', 'img/cars/2_4.webp'),
(3, 'Audi', 'S5', 2015, 'Benzin', 3000, 400, 58000, 'Sedan', 'Használt', 'Automata 7-sebesség', 13000000, 'img/cars/3_1.webp', 'img/cars/3_2.webp', 'img/cars/3_3.webp', 'img/cars/3_4.webp'),
(4, 'Audi', 'RSQ8', 2019, 'Benzin', 4000, 550, 32000, 'Suv', 'Használt', 'Automata 8-sebesség', 39000000, 'img/cars/4_1.webp', 'img/cars/4_2.webp', 'img/cars/4_3.webp', 'img/cars/4_4.webp'),
(5, 'Audi', 'A6', 2011, 'Dízel', 2000, 140, 260000, 'Sedan', 'Használt', 'Manuális 6-sebesség', 3900000, 'img/cars/5_1.webp', 'img/cars/5_2.webp', 'img/cars/5_3.webp', 'img/cars/5_4.webp'),
(6, 'Audi', 'RS7', 2023, 'Benzin', 4000, 630, 0, 'Sedan', 'Új', 'Automata 8-sebesség', 89000000, 'img/cars/6_1.webp', 'img/cars/6_2.webp', 'img/cars/6_3.webp', 'img/cars/6_4.webp'),
(7, 'Tesla', 'Model S', 2018, 'Elektromos', 0, 480, 0, 'Sedan', 'Használt', 'Automata 2-sebesség', 36000000, 'img/cars/7_1.webp', 'img/cars/7_2.webp', 'img/cars/7_3.webp', 'img/cars/7_4.webp'),
(8, 'Tesla', 'Model X', 2022, 'Elektromos', 0, 640, 0, 'Suv', 'Új', 'Automata 2-sebesség', 63000000, 'img/cars/8_1.webp', 'img/cars/8_2.webp', 'img/cars/8_3.webp', 'img/cars/8_4.webp'),
(9, 'Ferrari', '488', 2018, 'Benzin', 4000, 640, 58000, 'Coupe', 'Használt', 'Automata 8-sebesség', 55000000, 'img/cars/9_1.webp', 'img/cars/9_2.webp', 'img/cars/9_3.webp', 'img/cars/9_4.webp'),
(10, 'Mclaren', '720S', 2023, 'Benzin', 4000, 720, 0, 'Coupe', 'Új', 'Automata 7-sebesség', 72000000, 'img/cars/10_1.webp', 'img/cars/10_2.webp', 'img/cars/10_3.webp', 'img/cars/10_4.webp'),
(11, 'Mclaren', '570S', 2017, 'Benzin', 4000, 570, 76000, 'Coupe', 'Használt', 'Automata 7-sebesség', 38000000, 'img/cars/11_1.webp', 'img/cars/11_2.webp', 'img/cars/11_3.webp', 'img/cars/11_4.webp'),
(12, 'Bmw', 'M340i', 2022, 'Benzin', 3000, 380, 0, 'Sedan', 'Új', 'Automata 8-sebesség', 41000000, 'img/cars/12_1.webp', 'img/cars/12_2.webp', 'img/cars/12_3.webp', 'img/cars/12_4.webp'),
(13, 'Bmw', 'M8 ', 2023, 'Benzin', 4400, 625, 0, 'Sedan', 'Új', 'Automata 8-sebesség', 56000000, 'img/cars/13_1.webp', 'img/cars/13_2.webp', 'img/cars/13_3.webp', 'img/cars/13_4.webp'),
(14, 'Bmw', '535d', 2006, 'Dízel', 3000, 272, 280000, 'Sedan', 'Használt', 'Automata 7-sebesség', 2900000, 'img/cars/14_1.webp', 'img/cars/14_2.webp', 'img/cars/14_3.webp', 'img/cars/14_4.webp'),
(15, 'Bmw', '330i', 2003, 'Benzin', 2500, 300, 125000, 'Sedan', 'Használt', 'Automata 7-sebesség', 4400000, 'img/cars/15_1.webp', 'img/cars/15_2.webp', 'img/cars/15_3.webp', 'img/cars/15_4.webp'),
(16, 'Bmw', '440i', 2016, 'Benzin', 3000, 450, 98000, 'Sedan', 'Használt', 'Manuális 6-sebesség', 8700000, 'img/cars/16_1.webp', 'img/cars/16_2.webp', 'img/cars/16_3.webp', 'img/cars/16_4.webp'),
(17, 'Bmw', '740d', 2007, 'Dízel', 3500, 320, 54000, 'Sedan', 'Használt', 'Automata 7-sebesség', 1900000, 'img/cars/17_1.webp', 'img/cars/17_2.webp', 'img/cars/17_3.webp', 'img/cars/17_4.webp'),
(18, 'Bmw', 'M4', 2016, 'Benzin', 3000, 510, 110000, 'Coupe', 'Használt', 'Automata 7-sebesség', 19000000, 'img/cars/18_1.webp', 'img/cars/18_2.webp', 'img/cars/18_3.webp', 'img/cars/18_4.webp'),
(19, 'Bmw', 'M3', 2014, 'Benzin', 3000, 470, 130000, 'Coupe', 'Használt', 'Automata 7-sebesség', 17500000, 'img/cars/19_1.webp', 'img/cars/19_2.webp', 'img/cars/19_3.webp', 'img/cars/19_4.webp'),
(20, 'Bmw', '328xi', 2012, 'Benzin', 2000, 218, 170000, 'Sedan', 'Használt', 'Manuális 6-sebesség', 4600000, 'img/cars/20_1.webp', 'img/cars/20_2.webp', 'img/cars/20_3.webp', 'img/cars/20_4.webp'),
(21, 'Bmw', '540i', 2019, 'Benzin', 4000, 430, 52000, 'Sedan', 'Használt', 'Automata 7-sebesség', 28000000, 'img/cars/21_1.webp', 'img/cars/21_2.webp', 'img/cars/21_3.webp', 'img/cars/21_4.webp'),
(22, 'Bmw', 'I8', 2016, 'Elektromos', 0, 330, 88000, 'Coupe', 'Használt', 'Automata 7-sebesség', 43000000, 'img/cars/22_1.webp', 'img/cars/22_2.webp', 'img/cars/22_3.webp', 'img/cars/22_4.webp'),
(23, 'Mercedes', 'E63', 2015, 'Benzin', 4000, 600, 130000, 'Sedan', 'Használt', 'Automata 7-sebesség', 44000000, 'img/cars/23_1.webp', 'img/cars/23_2.webp', 'img/cars/23_3.webp', 'img/cars/23_4.webp'),
(24, 'Mercedes', 'EQS', 2023, 'Elektromos', 0, 430, 0, 'Sedan', 'Új', 'Automata 7-sebesség', 77000000, 'img/cars/24_1.webp', 'img/cars/24_2.webp', 'img/cars/24_3.webp', 'img/cars/24_4.webp'),
(25, 'Mercedes', 'C43', 2017, 'Benzin', 3000, 380, 140000, 'Sedan', 'Használt', 'Automata 7-sebesség', 23000000, 'img/cars/25_1.webp', 'img/cars/25_2.webp', 'img/cars/25_3.webp', 'img/cars/25_4.webp'),
(26, 'Mercedes', 'GLC300d', 2022, 'Dízel', 3000, 260, 0, 'Suv', 'Új', 'Automata 7-sebesség', 50000000, 'img/cars/26_1.webp', 'img/cars/26_2.webp', 'img/cars/26_3.webp', 'img/cars/26_4.webp'),
(27, 'Mercedes', 'CLA45', 2018, 'Benzin', 2000, 300, 110000, 'Hatchback', 'Használt', 'Automata 7-sebesség', 28000000, 'img/cars/27_1.webp', 'img/cars/27_2.webp', 'img/cars/27_3.webp', 'img/cars/27_4.webp'),
(28, 'Mercedes', 'E63S', 2018, 'Benzin', 4000, 639, 63000, 'Sedan', 'Használt', 'Automata 7-sebesség', 45000000, 'img/cars/28_1.webp', 'img/cars/28_2.webp', 'img/cars/28_3.webp', 'img/cars/28_4.webp'),
(29, 'Mercedes', 'C200d', 2016, 'Dízel', 1800, 180, 260000, 'Sedan', 'Használt', 'Manuális 6-sebesség', 7300000, 'img/cars/29_1.webp', 'img/cars/29_2.webp', 'img/cars/29_3.webp', 'img/cars/29_4.webp'),
(30, 'Mercedes', 'GLE350d', 2016, 'Dízel', 3500, 210, 178000, 'Suv', 'Használt', 'Automata 7-sebesség', 6800000, 'img/cars/30_1.webp', 'img/cars/30_2.webp', 'img/cars/30_3.webp', 'img/cars/30_4.webp'),
(31, 'Mercedes', 'CLA45s', 2022, 'Benzin', 2000, 390, 0, 'Sedan', 'Új', 'Automata 7-sebesség', 53000000, 'img/cars/31_1.webp', 'img/cars/31_2.webp', 'img/cars/31_3.webp', 'img/cars/31_4.webp'),
(32, 'Mercedes', 'G63', 2017, 'Benzin', 4000, 420, 145000, 'Suv', 'Használt', 'Automata 7-sebesség', 64500000, 'img/cars/32_1.webp', 'img/cars/32_2.webp', 'img/cars/32_3.webp', 'img/cars/32_4.webp'),
(33, 'Mercedes', 'G65', 2015, 'Benzin', 4000, 380, 166000, 'Suv', 'Használt', 'Automata 7-sebesség', 46000000, 'img/cars/33_1.webp', 'img/cars/33_2.webp', 'img/cars/33_3.webp', 'img/cars/33_4.webp'),
(34, 'Ford', 'Mustang', 2014, 'Benzin', 5000, 380, 145000, 'Coupe', 'Használt', 'Automata 7-sebesség', 6600000, 'img/cars/34_1.webp', 'img/cars/34_2.webp', 'img/cars/34_3.webp', 'img/cars/34_4.webp'),
(35, 'Ford', 'Shelby', 2016, 'Benzin', 5000, 375, 160000, 'Coupe', 'Használt', 'Automata 7-sebesség', 7000000, 'img/cars/35_1.webp', 'img/cars/35_2.webp', 'img/cars/35_3.webp', 'img/cars/35_4.webp'),
(36, 'Ford', 'Mustang Mach-E', 2021, 'Elektromos', 0, 430, 42000, 'Suv', 'Használt', 'Automata 7-sebesség', 66000000, 'img/cars/36_1.webp', 'img/cars/36_2.webp', 'img/cars/36_3.webp', 'img/cars/36_4.webp'),
(37, 'Honda', 'Civic', 2002, 'Benzin', 1600, 110, 360000, 'Hatchback', 'Használt', 'Manuális 6-sebesség', 800000, 'img/cars/37_1.webp', 'img/cars/37_2.webp', 'img/cars/37_3.webp', 'img/cars/37_4.webp'),
(38, 'Honda', 'Accord', 2006, 'Benzin', 2000, 155, 192000, 'Sedan', 'Használt', 'Manuális 6-sebesség', 2800000, 'img/cars/38_1.webp', 'img/cars/38_2.webp', 'img/cars/38_3.webp', 'img/cars/38_4.webp'),
(39, 'Honda', 'Civic', 1999, 'Benzin', 1800, 120, 440000, 'Hatchback', 'Használt', 'Manuális 6-sebesség', 650000, 'img/cars/39_1.webp', 'img/cars/39_2.webp', 'img/cars/39_3.webp', 'img/cars/39_4.webp'),
(40, 'Honda', 'Accord', 2010, 'Dízel', 2200, 145, 220000, 'Sedan', 'Használt', 'Manuális 6-sebesség', 2100000, 'img/cars/40_1.webp', 'img/cars/40_2.webp', 'img/cars/40_3.webp', 'img/cars/40_4.webp'),
(41, 'Honda', 'Civic', 2005, 'Benzin', 1600, 110, 260000, 'Hatchback', 'Használt', 'Manuális 6-sebesség', 1100000, 'img/cars/41_1.webp', 'img/cars/41_2.webp', 'img/cars/41_3.webp', 'img/cars/41_4.webp'),
(42, 'Lamborghini', 'Aventador', 2020, 'Benzin', 6500, 690, 0, 'Hyper', 'Új', 'Automata 7-sebesség', 136000000, 'img/cars/42_1.webp', 'img/cars/42_2.webp', 'img/cars/42_3.webp', 'img/cars/42_4.webp'),
(43, 'Lamborghini', 'Urus', 2021, 'Benzin', 4000, 640, 0, 'Suv', 'Új', 'Automata 7-sebesség', 105000000, 'img/cars/43_1.webp', 'img/cars/43_2.webp', 'img/cars/43_3.webp', 'img/cars/43_4.webp'),
(44, 'Lexus', 'IS220d', 2006, 'Dízel', 2200, 170, 230000, 'Sedan', 'Használt', 'Manuális 6-sebesség', 2500000, 'img/cars/44_1.webp', 'img/cars/44_2.webp', 'img/cars/44_3.webp', 'img/cars/44_4.webp'),
(45, 'Lexus', 'RC F', 2018, 'Benzin', 3500, 400, 55000, 'Coupe', 'Használt', 'Automata 7-sebesség', 37000000, 'img/cars/45_1.webp', 'img/cars/45_2.webp', 'img/cars/45_3.webp', 'img/cars/45_4.webp'),
(46, 'Lexus', 'LS450h', 2014, 'Hybrid', 2500, 260, 175000, 'Sedan', 'Használt', 'Automata 7-sebesség', 6500000, 'img/cars/46_1.webp', 'img/cars/46_2.webp', 'img/cars/46_3.webp', 'img/cars/46_4.webp'),
(47, 'Lexus', 'GS300', 2015, 'Benzin', 2800, 290, 95000, 'Sedan', 'Használt', 'Automata 7-sebesség', 3900000, 'img/cars/47_1.webp', 'img/cars/47_2.webp', 'img/cars/47_3.webp', 'img/cars/47_4.webp');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `garage`
--

DROP TABLE IF EXISTS `garage`;
CREATE TABLE `garage` (
  `Id` int(20) NOT NULL,
  `car_id` int(20) NOT NULL,
  `car_year` int(20) NOT NULL,
  `car_brand` varchar(50) NOT NULL,
  `car_type` varchar(50) NOT NULL,
  `car_price` int(20) NOT NULL,
  `car_pic` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `garage`
--

INSERT INTO `garage` (`Id`, `car_id`, `car_year`, `car_brand`, `car_type`, `car_price`, `car_pic`, `user_email`) VALUES
(10, 13, 2004, 'Fordinho', 'Focus', 3590, 'img/cars/juuj.jpeg', 'kov.peter@mailbox.unideb.hu'),
(29, 38, 2006, 'Honda', 'Accord', 2800000, 'img/cars/38_1.webp', 'kov.peter@mailbox.unideb.hu'),
(30, 9, 2018, 'Ferrari', '488', 55000000, 'img/cars/9_1.webp', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `Id` int(20) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password_length` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`Id`, `firstName`, `lastName`, `email`, `password`, `password_length`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 5),
(2, 'Kovács', 'Péter', 'kov.peter@mailbox.unideb.hu', 'd2f70f16a91d14711415fb0af8e4b90c', 11),
(3, 'dsfds', 'dsfsf', 'sdfsd@sdfsdf', 'bff149a0b87f5b0e00d9dd364e9ddaa0', 8),
(4, 'fghfg', 'fghfgh', 'valaki@gmail.com', 'bd1b786f53d29148a06d253f07842e3e', 6);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`Id`);

--
-- A tábla indexei `garage`
--
ALTER TABLE `garage`
  ADD PRIMARY KEY (`Id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `cars`
--
ALTER TABLE `cars`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT a táblához `garage`
--
ALTER TABLE `garage`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;


https://drive.google.com/file/d/12ZWDN6zUUZKV7R342TPzE9owAuriN1EZ/view?usp=sharing