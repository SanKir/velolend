-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 02 2018 г., 19:41
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Велосипеды'),
(2, 'Аксессуары'),
(3, 'Запчасти'),
(4, 'Экипировка');

-- --------------------------------------------------------

--
-- Структура таблицы `podcategories`
--

CREATE TABLE `podcategories` (
  `id` int(11) NOT NULL,
  `categories` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `podcategories`
--

INSERT INTO `podcategories` (`id`, `categories`, `name`) VALUES
(1, 1, 'Экстремальные'),
(2, 1, 'Детские'),
(3, 1, 'Горные'),
(4, 1, 'Подростковые'),
(5, 1, 'Складные'),
(6, 2, 'Крылья'),
(7, 2, 'Багажники'),
(8, 2, 'Зеркала'),
(9, 3, 'Амортизаторы'),
(10, 3, 'Колеса'),
(11, 3, 'Камеры'),
(12, 3, 'Рамы '),
(13, 3, 'Тормоза'),
(14, 3, 'Педали'),
(15, 3, 'Цепи'),
(16, 4, 'Одежда'),
(17, 4, 'Защита'),
(18, 4, 'Шлемы');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `podcategories` int(11) NOT NULL,
  `price` int(8) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `discription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `podcategories`, `price`, `photo`, `discription`) VALUES
(1, 'Велосипед Stark Madness BMX 1', 1, 14690, 'StarkMadnessBMX1.png', '2017'),
(2, 'Велосипед Stark Madness BMX 2', 1, 14990, 'StarkMadnessBMX2.png', '2017'),
(3, 'Велосипед Giant GFR F/W', 1, 15000, 'GiantGFRFW.png', '2017'),
(4, 'Велосипед Corvus BMX 3.5', 1, 15250, 'CorvusBMX35.png', '2015'),
(5, 'Велосипед Cronus Punky 2.0', 1, 17000, 'CronusPunky20.png', '2017'),
(6, 'Велосипед Stark Shooter 1', 1, 18590, 'StarkShooter1.png', '2016'),
(7, 'Велосипед Merida Hardy 6.300', 1, 19990, 'MeridaHardy6300.png', '2017'),
(8, 'Велосипед Kellys Whip 10', 1, 21590, 'KellysWhip10.png', '2017'),
(9, 'Велосипед Stark Shooter 2 Trail', 1, 24000, 'StarkShooter2Trail.png', '2016'),
(10, 'Велосипед Stels Powerkid Boy 12 ', 2, 2590, 'StelsPowerkidBoy12.png', '2017'),
(11, 'Велосипед Stels Echo 12', 2, 3200, 'StelsEcho12.png', '2016'),
(12, 'Велосипед Stels Pilot 110 12', 2, 3500, 'StelsPilot11012.png', '2015'),
(13, 'Велосипед Stels Wind 14', 2, 4000, 'StelsWind14.png', '2017'),
(14, 'Велосипед Stels Echo 13', 2, 4000, 'StelsEcho13.png', '2015'),
(15, 'Велосипед Forward Leo', 2, 4500, 'ForwardLeo.png', '2017'),
(16, 'Велосипед Forward Altair City 16', 2, 5200, 'ForwardAltairCityBoy16.png', '2017'),
(17, 'Велосипед Schwinn Trooper 12', 2, 5500, 'SchwinnTrooper12.png', '2017'),
(18, 'Велосипед Trek Jet 12', 2, 5990, 'TrekJet12.png', '2017'),
(19, 'Велосипед Stinger Defender 26', 3, 8690, 'StingerDefender26.png', '2017'),
(20, 'Велосипед Stinger Caiman 26', 3, 8990, 'StingerCaiman26.png', '2016'),
(21, 'Велосипед Stels Navigator 530 V', 3, 9200, 'StelsNavigator530V.png', '2017'),
(22, 'Велосипед Black One Onix 26', 3, 9550, 'BlackOneOnix26.png', '2017'),
(23, 'Велосипед Stark Outpost', 3, 10000, 'StarkOutpost.png', '2016'),
(24, 'Велосипед Stark Tank', 3, 10500, 'StarkTank.png', '2017'),
(25, 'Велосипед Stark Slash Disc', 3, 11590, 'StarkSlashDisc.png', '2017'),
(26, 'Велосипед Stark Indy', 3, 12500, 'StarkIndy.png', '2017'),
(27, 'Велосипед Stinger Aragon 26', 3, 14000, 'StingerAragon26.png', '2017'),
(28, 'Велосипед Black One Ice 24', 4, 9500, 'BlackOneIce24.png', '2017'),
(29, 'Велосипед Stels Navigator 410 V', 4, 10000, 'StelsNavigator410V.png', '2017'),
(30, 'Велосипед Stels Mustang 24 V', 4, 10500, 'StelsMustang24V.png', '2017'),
(31, 'Велосипед Stinger Banzai 24', 4, 11250, 'StingerBanzai24.png', '2016'),
(32, 'Велосипед Dewolf J250 Girl', 4, 12500, 'DewolfJ250Girl.png', '2017'),
(33, 'Велосипед Schwinn Baywood 24', 4, 14000, 'SchwinnBaywood24.png', '2015'),
(34, 'Велосипед Forward Seido 1.0 24', 4, 15000, 'ForwardSeido1024.png', '2017'),
(35, 'Велосипед Cronus Best Mate 26', 4, 15590, 'CronusBestMate26.png', '2016'),
(36, 'Велосипед Author A-Matrix ', 4, 16000, 'AuthorA-Matrix.png', '2017'),
(37, 'Велосипед Stels Pilot 420 ', 5, 4590, 'StelsPilot420.png', '2017'),
(38, 'Велосипед Stels Pilot 710 ', 5, 6590, 'StelsPilot710.png', '2017'),
(39, 'Велосипед Stels Pilot 810', 5, 7000, 'StelsPilot810.png', '2017'),
(40, 'Велосипед Stels Pilot 970 MD 26', 5, 7590, 'StelsPilot970MD26.png', '2017'),
(41, 'Велосипед Cronus Latte 1.0', 5, 7990, 'CronusLatte10.png', '2017'),
(42, 'Велосипед Stark Cobra', 5, 8590, 'StarkCobra.png', '2016'),
(43, 'Велосипед Cronus Soldier 0.5 26', 5, 9200, 'CronusSoldier0526.png', '2017'),
(44, 'Велосипед Cronus High Speed 500', 5, 10000, 'CronusHighSpeed500D.png', '2016'),
(45, 'Велосипед Pegasus Easy Step 3', 5, 11000, 'PegasusEasyStep3.png', '2017'),
(46, 'Крылья 20ʺ VS HN 13-1', 6, 300, 'krilya1.png', ''),
(47, 'Крылья 24-26ʺ VS HN 07', 6, 690, 'krilya2.png', ''),
(48, 'Крылья 24-26ʺ FD-34', 6, 840, 'krilya3.png', ''),
(49, 'Багажник H-AL 15', 7, 1500, 'bagaj1.png', ''),
(50, 'Багажник BLF-H18 20-28ʺ', 7, 2000, 'bagaj2.png', ''),
(51, 'Багажник 24-28ʺ NH-CS512AP', 7, 2500, 'bagaj3.png', ''),
(52, 'Зеркало JY-5', 8, 200, 'zerkalo1.png', ''),
(53, 'Зеркало заднего вида DX-222D', 8, 500, 'zerkalo2.png', ''),
(54, 'Зеркало заднего вида JY-102A', 8, 1000, 'zerkalo3.png', ''),
(55, 'K-Speed KS-261, жесткость 750 LBS', 9, 700, 'amortizator1.png', ''),
(56, 'KS-291, жесткость 850 LBS', 9, 1500, 'amortizator2.png', ''),
(57, 'Обод HJC P-7X 16ʺx28H', 10, 390, 'koleca1.png', ''),
(58, 'Обод 20ʺx36H MD-20', 10, 450, 'koleca2.png', ''),
(59, 'Дополнительные колеса SW-323D', 10, 500, 'koleca3.png', ''),
(60, 'Камера Chao Yang 12 \"1/2 -1.95\"', 11, 200, 'kameri1.png', ''),
(61, 'Камера Stels 14x1.50ʺ/1.75ʺ', 11, 200, 'kameri1.png', ''),
(62, 'Камера Stels 16x1.95ʺ/2.125ʺ A/V', 11, 200, 'kameri1.png', ''),
(63, 'Ось зажима складной рамы Pilot 410', 12, 100, 'rami1.png', ''),
(64, 'Ось зажима складной рамы Pilot 710', 12, 100, 'rami2.png', ''),
(65, 'Зажим складной рамы 6*53мм', 12, 200, 'rami3.png', ''),
(66, 'Тормозные колодки V-Brake Promax 260MW', 13, 150, 'tormoza1.png', ''),
(67, 'Тормоз V-Brake T210 DG', 13, 350, 'tormoza2.png', ''),
(68, 'Тормозные колодки Alligator HK-VX010', 13, 500, 'tormoza3.png', ''),
(69, 'Педали FP-650', 14, 100, 'pedali1.png', ''),
(70, 'Педали LU-955', 14, 300, 'pedali2.png', ''),
(71, 'Педали BBB BPD-16', 14, 700, 'pedali3.png', ''),
(72, 'Цепь KMC Z410 1/2\"x1/8\", 100 зв., 1 ск.', 15, 200, 'cep1.png', ''),
(73, 'Цепь Z72 1/2х3/32ʺ 106 звен. 7-8 ск.\", 100 зв., 1 ск.', 15, 490, 'cep2.png', ''),
(74, 'Цепь SRAM PC 1130 PowerLock 11ск.', 15, 750, 'cep3.png', ''),
(75, 'Велошорты SHT-1900', 16, 3000, 'shortiboy.png', ''),
(76, 'Велошорты STCB019', 16, 3000, 'shortigirl.png', ''),
(77, 'Джерси длин. рукав A.P.G.', 16, 5000, 'kurtka.png', ''),
(78, 'Защита Explore Magnum (колени,ладони)', 17, 700, 'zashita1.png', ''),
(79, 'BHC-4 (локти,колени,ладони)', 17, 1000, 'zashita2.png', ''),
(80, 'Велозащита Polisport Titan 07', 17, 2000, 'zashita3.png', ''),
(81, 'Шлем защитный MV 8', 18, 700, 'shlem1.png', ''),
(82, 'Шлем защитный Explore Cabrio', 18, 1700, 'shlem2.png', ''),
(83, 'Шлем защитный Crazy Safety', 18, 2240, 'shlem3.png', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(1, 'admin', 'admin@mail.ru', '21232f297a57a5a743894a0e4a801fc3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `podcategories`
--
ALTER TABLE `podcategories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `podcategories`
--
ALTER TABLE `podcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
