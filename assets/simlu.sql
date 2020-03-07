-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2020 at 08:21 AM
-- Server version: 10.1.43-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office_sinuska`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `id_mahasiswa` int(7) NOT NULL,
  `passport` varchar(50) NOT NULL,
  `application_form` varchar(50) NOT NULL,
  `invitation_letter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(2) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama_fakultas`, `username`) VALUES
(1, 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'FMIPA'),
(2, 'Fakultas Kedokteran', 'FK'),
(3, 'Fakultas Ekonomi dan Bisnis', 'FEB'),
(4, 'Fakultas Kedokteran Hewan', 'FKH'),
(5, 'Fakultas Hukum', 'FH'),
(6, 'Fakultas Teknik', 'FT'),
(7, 'Fakultas Pertanian', 'FP'),
(8, 'Fakultas Keguruan dan Ilmu Pendidikan', 'FKIP'),
(9, 'Fakultas Ilmu Sosial dan Ilmu Politik', 'FISIP'),
(10, ' Fakultas Kelautan dan Perikanan', 'FKP'),
(11, 'Fakultas Kedokteran Gigi', 'FKG'),
(12, 'Fakultas Keperawatan', 'Fakultas Keperawatan'),
(13, 'Office of International Affairs', 'OIA'),
(14, 'Pascasarjana', 'Pascasarjana');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_passport` varchar(50) NOT NULL,
  `jurusan_asal` varchar(100) NOT NULL,
  `fakultas_asal` varchar(100) NOT NULL,
  `univ_asal` varchar(100) NOT NULL,
  `jurusan_tujuan` varchar(50) DEFAULT NULL,
  `fakultas_tujuan` varchar(50) DEFAULT NULL,
  `univ_tujuan` varchar(50) NOT NULL,
  `negara_asal` varchar(100) NOT NULL,
  `negara_tujuan` varchar(50) NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `id_program` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nama`, `email`, `no_passport`, `jurusan_asal`, `fakultas_asal`, `univ_asal`, `jurusan_tujuan`, `fakultas_tujuan`, `univ_tujuan`, `negara_asal`, `negara_tujuan`, `dokumen`, `id_program`) VALUES
(55, 'Siti Jaizah Binti Nak Man', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 34),
(56, 'Tuan Muhammad Zulkhairul Bin Tuan Ismail', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 34),
(57, 'Mohd Nadzir Bin A Ghani', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 34),
(58, 'Nor Azwani Fatin Binti Mohd Azizan', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 34),
(59, 'Hani Effa Atira Binti Mohd Subehi', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 34),
(60, 'Riz Akena Alviane Albert', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 34),
(61, 'Muhammad Arifuddin Alias', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(62, 'Bukhari Husain', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(63, 'Razliana Binti Mohd Yusoff', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(64, 'Umi Kalsom Binti Zulkifli', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(65, 'Ruhil Mina Binti Duljan', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(66, 'Aina Saufi Binti Ab Ghafar', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(67, 'Nurul Wazien Binti Mohd Nur Izati Binti Amrin Noor', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(68, 'Nur Izati Binti Amrin Noor', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(70, 'Muhammad Amsyar Bin Abdul Razak', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 36),
(71, 'Nor Asyikin Binti Ariffin', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 36),
(72, 'Thavamalar Varatharajoo', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 36),
(73, 'Muhammad Azizi Bin Azizan', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 36),
(74, 'Naurah Baiti Binti Ahmad Isa', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 36),
(75, 'Nurdiyana Binti Baharin', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 36),
(76, 'Noor Ashikin Binti Zulkifli', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 36),
(77, 'Nur Amalina Anis Binti Zulkefli', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 36),
(78, 'Vickineswaran Mariappan', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(79, 'Nofiya Rahima Binti Zainuddin', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(80, 'Nur Hazimah Binti Mohd Sinu', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(81, 'Salbiah Binti Md. Jisin', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(82, 'Wee Yit Chuen', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(83, 'Shahril Izzat Bin Rosli', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(84, 'Nur Umairah Binti Mohd Adnan', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(85, 'Mohd Zulkifli Azizi Bin Umar', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(86, 'Nur Syahirah Diyana Binti Adnan', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(87, 'Hanani Rafiqah Binti Radzuan', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(88, 'Siti Zunnur Ain Binti Zakaria', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(89, 'Ahmad Luqman Bin Jamaludin', '', '', '', '', 'Universiti Utara Malaysia', NULL, NULL, 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 35),
(90, 'Camille, Marie Tricot', '', '', '', '', 'Sorbonne University', NULL, NULL, 'Universitas Syiah Kuala', 'France', 'Indonesia', '', 38),
(91, 'Sofian Benaodou', '', '', '', '', 'Sorbonne University', NULL, NULL, 'Universitas Syiah Kuala', 'France', 'Indonesia', '', 38),
(101, 'Lisa Rogge', '', '', '', '', 'George-August Gottingen University', 'Keperawatan', '', '', 'Germany', 'Indonesia', '', 42),
(103, 'Vivien Hulsen', '', '', '', '', 'George-August Gottingen University', 'Keperawatan', 'Fakultas Keperawatan', 'Universitas Syiah Kuala', 'Germany', 'Indonesia', '', 44),
(104, 'Mehmet Yelsiz', '', '', '', '', 'Suleyman Demirel University', '', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Universitas Syiah Kuala', 'Turkey', 'Indonesia', '', 45),
(105, 'Anna Reuter', '', '', '', '', 'George-August Gottingen University', 'Keperawatan', 'Fakultas Keperawatan', 'Universitas Syiah Kuala', 'Germany', 'Indonesia', '', 46),
(106, 'Muhammad Harith bin Dzulkiflee', '', '', '', '', 'Universiti Teknologi Mara Malaysia', 'Teknik Kimia', 'Fakultas Teknik', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 47),
(107, 'Muhammad Tarmidzi', '', '', '', '', 'Universiti Teknologi Mara Malaysia', 'Teknik Kimia', 'Fakultas Teknik', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 48),
(108, 'Siti Nadiah binti Redzuan', '', '', '', '', 'Universiti Teknologi Mara Malaysia', 'Teknik Kimia', 'Fakultas Teknik', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 49),
(110, 'Nur Izzatul Aisyah Binti Abd Shukur @ Abdullah', '', '', '', '', 'Universiti Utara Malaysia', 'Ilmu Komunikasi', 'Fakultas Ilmu Sosial dan Ilmu Pemerintahan', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 51),
(114, 'Irin Aqilah Binti Ahmad Kamal', '', '', '', '', 'Universiti Utara Malaysia', 'Ilmu Komunikasi', 'Fakultas Ilmu Sosial dan Ilmu Pemerintahan', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 55),
(115, 'Muhamad Hizairul Azwan Bin Yusop', '', '', '', '', 'Universiti Utara Malaysia\r\n', 'Ilmu Komunikasi', 'Fakultas Ilmu Sosial dan Ilmu Pemerintahan', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 56),
(118, 'Noor Haida Izzati Binti Fadli', '', '', '', '', 'Universiti Utara Malaysia', 'Ilmu Komunikasi', 'Fakultas Ilmu Sosial dan Ilmu Pemerintahan', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 57),
(119, 'Nur Hanina Binti Hassan', '', '', '', '', 'Universiti Utara Malaysia', 'Ilmu Komunikasi', 'Fakultas Ilmu Sosial dan Ilmu Pemerintahan', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 58),
(120, 'Nur Ilyana Husna Binti Mohd Khazeli', '', '', '', '', 'Universiti Utara Malaysia', 'Ilmu Komunikasi', 'Fakultas Ilmu Sosial dan Ilmu Pemerintahan', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 59),
(121, 'Nur Fariha Binti Mohd Zaki', '', '', '', '', 'Universiti Utara Malaysia', 'Matematika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 60),
(124, 'Siti Nur Farahani Binti Hashim', '', '', '', '', 'Universiti Utara Malaysia', 'Akuntansi', 'Fakultas Ekonomi dan Bisnis', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 63),
(125, 'Muhammad Uthman Bin Ariffin', '', '', '', '', 'Universiti Teknologi Mara Malaysia', 'Teknik Kimia', 'Fakultas Teknik', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 64),
(126, 'Nurul Zahirah Binti Zakaria', '', '', '', '', 'Universiti Teknologi Mara Malaysia', 'Teknik Kimia', 'Fakultas Teknik', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 65),
(127, 'Nur Izyani Mohd Dahlan', '', '', '', '', 'Universiti Teknologi Mara Malaysia', 'Teknik Kimia', 'Fakultas Teknik', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 66),
(128, 'Lisa Rogge', '', '', '', '', 'George-August Gottingen University', 'Keperawatan', 'Fakultas Keperawatan', 'Universitas Syiah Kuala', 'Germany', 'Indonesia', '', 67),
(129, 'Sabrina Rhode', '', '', '', '', 'George-August Gottingen University', 'Keperawatan', 'Fakultas Keperawatan', 'Universitas Syiah Kuala', 'Germany', 'Indonesia', '', 68),
(130, 'Anna Reuter', '', '', '', '', 'George-August Gottingen University', 'Keperawatan', 'Fakultas Keperawatan', 'Universitas Syiah Kuala', 'Germany', 'Indonesia', '', 69),
(131, 'Maja-Emilia Marcus', '', '', '', '', 'George-August Gottingen University', 'Keperawatan', 'Fakultas Keperawatan', 'Universitas Syiah Kuala', 'Germany', 'Indonesia', '', 70),
(132, 'Sharul Nizam Bin Ismail', '', '', '', '', 'Universiti Utara Malaysia', 'Statistika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 71),
(133, 'Nurul Shahirah Binti Mohd Noor', '', '', '', '', 'Universiti Utara Malaysia', 'Matematika', 'Fakultas Matematika dan Ilmu Pengetahuan Alam', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 72),
(134, 'Nik Nur Syazwani Natasya Binti Nik Mohd Juzaili', '', '', '', '', 'Universiti Utara Malaysia', 'Matematika', 'Matematika dan Ilmu Pengetahuan Alam', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 73),
(135, 'Siti Aisyah Amna binti Azizan', '', '', '', '', 'Universiti Utara Malaysia', 'Akuntansi', 'Fakultas Ekonomi dan Bisnis', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 74),
(136, 'Farrahniza binti Zainal', '', '', '', '', 'Universiti Utara Malaysia', '', 'Fakultas Ekonomi dan Bisnis', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 75),
(137, 'Fatin Najihah Binti Yahaya', '', '', '', '', 'Universiti Utara Malaysia', '', 'Fakultas Ekonomi dan Bisnis', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 76),
(138, 'Nurul Hazirah Binti A rashid', '', '', '', '', 'Universiti Teknologi Mara Malaysia', 'Teknik Kimia', 'Fakultas Teknik', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 77),
(139, 'Nurul Atikah Binti Abd Jalil', '', '', '', '', 'Universiti Teknologi Mara Malaysia', 'Teknik Kimia', 'Fakultas Teknik', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 78),
(140, 'Nurul Athirah Binti Zawawi', '', '', '', '', 'Universiti Teknologi Mara Malaysia', '', 'Fakultas Teknik', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 79),
(141, 'camille, Marie Tricot', '', '', '', '', 'Universiti Utara Malaysia', '', 'Fakultas Keguruan dan Ilmu Pendidikan', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 80),
(142, 'Aimi Syifa Binti Anuar', '', '', '', '', 'Universiti Utara Malaysia', '', 'Fakultas Keguruan dan Ilmu Pendidikan', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 81),
(143, 'Sumarni Binti Sudi', '', '', '', '', 'Universiti Utara Malaysia', '', 'Fakultas Keguruan dan Ilmu Pendidikan', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 82),
(144, 'Fatin Athirah Binti Zameeran', '', '', '', '', 'Universiti Utara Malaysia', '', 'Fakultas Keguruan dan Ilmu Pendidikan', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 83),
(145, 'Sofea Asmira Binti Mohd Zan', '', '', '', '', 'Universiti Utara Malaysia', '', 'Fakultas Keguruan dan Ilmu Pendidikan', 'Universitas Syiah Kuala', 'Malaysia', 'Indonesia', '', 84),
(146, 'Juliana', '', '', 'Akuntansi', 'Fakultas Ekonomi dan Bisnis', 'Universitas Syiah Kuala', '', '', 'Universiti Utara Malaysia', 'Indonesia', 'Malaysia', '', 85);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_fakultas` int(2) NOT NULL,
  `id_rule` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id`, `email`, `password`, `id_fakultas`, `id_rule`) VALUES
(1, 'mipa@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 1, 0),
(3, 'oia@unsyiah.ac.id', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 13, 1),
(4, 'fk@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id_program` int(7) NOT NULL,
  `jenis_program` varchar(30) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `id_fakultas` int(2) NOT NULL,
  `class` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id_program`, `jenis_program`, `tgl_mulai`, `tgl_akhir`, `id_fakultas`, `class`) VALUES
(34, 'inbound', '0000-00-00', '0000-00-00', 13, 'st'),
(35, 'inbound', '0000-00-00', '0000-00-00', 13, 'st'),
(36, 'inbound', '0000-00-00', '0000-00-00', 13, 'st'),
(37, 'inbound', '0000-00-00', '0000-00-00', 13, 'st'),
(38, 'inbound', '0000-00-00', '0000-00-00', 13, 'st'),
(39, 'inbound', '0000-00-00', '0000-00-00', 13, 'st'),
(42, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(43, 'inbound', '2020-01-29', '2020-01-21', 13, 'se'),
(44, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(45, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(46, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(47, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(48, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(49, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(50, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(51, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(52, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(53, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(54, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(55, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(56, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(57, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(58, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(59, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(60, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(61, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(62, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(63, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(64, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(65, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(66, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(67, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(68, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(69, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(70, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(71, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(72, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(73, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(74, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(75, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(76, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(77, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(78, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(79, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(80, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(81, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(82, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(83, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(84, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(85, 'outbound', '0000-00-00', '0000-00-00', 13, 'se'),
(86, 'outbound', '2020-02-01', '2020-02-06', 13, 'se'),
(87, 'outbound', '2020-02-02', '2020-02-03', 13, 'se'),
(88, 'outbound', '2020-02-01', '2020-02-02', 13, 'se'),
(89, 'outbound', '2020-01-29', '2020-02-01', 13, 'se'),
(90, 'inbound', '2020-01-31', '2020-02-02', 13, 'se'),
(91, 'inbound', '0000-00-00', '0000-00-00', 13, 'se'),
(92, 'outbound', '2020-01-30', '2020-01-30', 13, 'se');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `nama`) VALUES
(1, 'admin OIA'),
(2, 'operator');

-- --------------------------------------------------------

--
-- Table structure for table `short_term`
--

CREATE TABLE `short_term` (
  `id` int(7) NOT NULL,
  `nama_program` varchar(50) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `id_program` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `short_term`
--

INSERT INTO `short_term` (`id`, `nama_program`, `tujuan`, `tahun`, `semester`, `id_program`) VALUES
(24, 'Student Mobility Program I', '', '2014/2015', 'ganjil', 34),
(25, 'Student Mobility Program II', '', '2014/2015', 'genap', 35),
(26, 'Student Mobility Program III', '', '2015/2016', 'ganjil', 36),
(27, 'Student Mobility Program IV', '', '2015/2016', 'genap', 37),
(28, 'Internship Program I', '', '2016/2017', 'genap', 38),
(29, 'Student Exchange I', '', '2016/2017', 'ganjil', 39);

-- --------------------------------------------------------

--
-- Table structure for table `student_exchange`
--

CREATE TABLE `student_exchange` (
  `id` int(7) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `id_program` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_exchange`
--

INSERT INTO `student_exchange` (`id`, `tahun`, `semester`, `id_program`) VALUES
(1, '2016/2017', 'ganjil', 42),
(3, '2016/2017', 'genap', 44),
(4, '2017/2018', 'ganjil', 45),
(5, '2017/2018', 'ganjil', 46),
(6, '2018/2019', 'ganjil', 47),
(7, '2018/2019', 'ganjil', 48),
(8, '2018/2019', 'ganjil', 49),
(9, '2018/2019', 'ganjil', 50),
(10, '2018/2019', 'ganjil', 51),
(11, '2018/2019', 'ganjil', 52),
(12, '2018/2019', 'ganjil', 53),
(13, '2018/2019', 'ganjil', 54),
(14, '2018/2019', 'ganjil', 55),
(15, '2018/2019', 'ganjil', 56),
(18, '2018/2019', 'ganjil', 57),
(19, '2018/2019', 'ganjil', 58),
(20, '2018/2019', 'ganjil', 59),
(21, '2018/2019', 'ganjil', 60),
(22, '2018/2019', 'ganjil', 61),
(23, '2018/2019', 'ganjil', 62),
(24, '2018/2019', 'ganjil', 63),
(25, '2019/2020', 'genap', 64),
(26, '2019/2020', 'genap', 65),
(27, '2019/2020', 'genap', 66),
(28, '2019/2020', 'genap', 67),
(29, '2019/2020', 'genap', 68),
(30, '2020/2021', 'ganjil', 69),
(31, '2020/2021', 'ganjil', 70),
(32, '2018/2019', 'ganjil', 71),
(33, '2018/2019', 'ganjil', 72),
(34, '2018/2019', 'ganjil', 73),
(35, '2018/2019', 'ganjil', 74),
(36, '2020/2021', 'ganjil', 75),
(37, '2020/2021', 'ganjil', 76),
(38, '2020/2021', 'ganjil', 77),
(39, '2020/2021', 'ganjil', 78),
(40, '2020/2021', 'ganjil', 79),
(41, '2020/2021', 'ganjil', 80),
(42, '2020/2021', 'ganjil', 81),
(43, '2020/2021', 'ganjil', 82),
(44, '2020/2021', 'ganjil', 83),
(45, '2020/2021', 'ganjil', 84),
(46, '2019/2020', 'ganjil', 85),
(47, '2016/2017', 'genap', 86);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dokumen_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `fk_mhs_program` (`id_program`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_operator_fakultas` (`id_fakultas`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id_program`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indexes for table `short_term`
--
ALTER TABLE `short_term`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_short_program` (`id_program`);

--
-- Indexes for table `student_exchange`
--
ALTER TABLE `student_exchange`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_exchange_mahasiswa` (`id_program`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id_program` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `short_term`
--
ALTER TABLE `short_term`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `student_exchange`
--
ALTER TABLE `student_exchange`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `fk_dokumen_mahasiswa` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mhs`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_mhs_program` FOREIGN KEY (`id_program`) REFERENCES `program` (`id_program`);

--
-- Constraints for table `operator`
--
ALTER TABLE `operator`
  ADD CONSTRAINT `fk_operator_fakultas` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id`);

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id`);

--
-- Constraints for table `short_term`
--
ALTER TABLE `short_term`
  ADD CONSTRAINT `fk_short_program` FOREIGN KEY (`id_program`) REFERENCES `program` (`id_program`);

--
-- Constraints for table `student_exchange`
--
ALTER TABLE `student_exchange`
  ADD CONSTRAINT `fk_exchange_mahasiswa` FOREIGN KEY (`id_program`) REFERENCES `program` (`id_program`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
