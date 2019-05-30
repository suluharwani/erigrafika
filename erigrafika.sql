-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 06:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erigrafika`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `isi` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL DEFAULT '0',
  `username` varchar(500) NOT NULL DEFAULT '0',
  `foto` varchar(500) NOT NULL DEFAULT '0',
  `password` varchar(500) NOT NULL DEFAULT '0',
  `level` varchar(500) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `foto`, `password`, `level`) VALUES
(2, 'Suluh Arwani', 'suluh', '0', '$2a$08$IwzjkdF/w5nzP7kcu0fz7OBTxKWzb714gD3GdorsjZIX.8SPCcD4i', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_name` varchar(500) NOT NULL DEFAULT '0',
  `logo` varchar(500) NOT NULL DEFAULT '0',
  `contact` varchar(500) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_admin`
--

CREATE TABLE `contact_admin` (
  `id` int(11) NOT NULL,
  `nomor_telepon` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `id_contact` int(11) NOT NULL DEFAULT '0',
  `alamat` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `telepon` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_pengunjung`
--

CREATE TABLE `email_pengunjung` (
  `id` int(10) NOT NULL,
  `email` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `font_awesome_icon`
--

CREATE TABLE `font_awesome_icon` (
  `icon` varchar(35) NOT NULL,
  `unicode` varchar(4) NOT NULL,
  `html` varchar(58) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `font_awesome_icon`
--

INSERT INTO `font_awesome_icon` (`icon`, `unicode`, `html`) VALUES
('address-book', 'f2b9', '<i class=\'fa far-address-book\'></i>'),
('address-card', 'f2bb', '<i class=\'fa fas-address-card\'></i>'),
('adjust', 'f042', '<i class=\'fa fas-adjust\'></i>'),
('align-center', 'f037', '<i class=\'fa fas-align-center\'></i>'),
('align-justify', 'f039', '<i class=\'fa fas-align-justify\'></i>'),
('align-left', 'f036', '<i class=\'fa fas-align-left\'></i>'),
('align-right', 'f038', '<i class=\'fa fas-align-right\'></i>'),
('allergies', 'f461', '<i class=\'fa fas-allergies\'></i>'),
('ambulance', 'f0f9', '<i class=\'fa fas-ambulance\'></i>'),
('american-sign-language-interpreting', 'f2a3', '<i class=\'fa fas-american-sign-language-interpreting\'></i>'),
('anchor', 'f13d', '<i class=\'fa fas-anchor\'></i>'),
('angle-double-down', 'f103', '<i class=\'fa fas-angle-double-down\'></i>'),
('angle-double-left', 'f100', '<i class=\'fa fas-angle-double-left\'></i>'),
('angle-double-right', 'f101', '<i class=\'fa fas-angle-double-right\'></i>'),
('angle-double-up', 'f102', '<i class=\'fa fas-angle-double-up\'></i>'),
('angle-down', 'f107', '<i class=\'fa fas-angle-down\'></i>'),
('angle-left', 'f104', '<i class=\'fa fas-angle-left\'></i>'),
('angle-right', 'f105', '<i class=\'fa fas-angle-right\'></i>'),
('angle-up', 'f106', '<i class=\'fa fas-angle-up\'></i>'),
('archive', 'f187', '<i class=\'fa fas-archive\'></i>'),
('arrow-alt-circle-down', 'f358', '<i class=\'fa fas-arrow-alt-circle-down\'></i>'),
('arrow-alt-circle-left', 'f359', '<i class=\'fa fas-arrow-alt-circle-left\'></i>'),
('arrow-alt-circle-right', 'f35a', '<i class=\'fa fas-arrow-alt-circle-right\'></i>'),
('arrow-alt-circle-up', 'f35b', '<i class=\'fa fas-arrow-alt-circle-up\'></i>'),
('arrow-circle-down', 'f0ab', '<i class=\'fa fas-arrow-circle-down\'></i>'),
('arrow-circle-left', 'f0a8', '<i class=\'fa fas-arrow-circle-left\'></i>'),
('arrow-circle-right', 'f0a9', '<i class=\'fa fas-arrow-circle-right\'></i>'),
('arrow-circle-up', 'f0aa', '<i class=\'fa fas-arrow-circle-up\'></i>'),
('arrow-down', 'f063', '<i class=\'fa fas-arrow-down\'></i>'),
('arrow-left', 'f060', '<i class=\'fa fas-arrow-left\'></i>'),
('arrow-right', 'f061', '<i class=\'fa fas-arrow-right\'></i>'),
('arrow-up', 'f062', '<i class=\'fa fas-arrow-up\'></i>'),
('arrows-alt', 'f0b2', '<i class=\'fa fas-arrows-alt\'></i>'),
('arrows-alt-h', 'f337', '<i class=\'fa fas-arrows-alt-h\'></i>'),
('arrows-alt-v', 'f338', '<i class=\'fa fas-arrows-alt-v\'></i>'),
('assistive-listening-systems', 'f2a2', '<i class=\'fa fas-assistive-listening-systems\'></i>'),
('asterisk', 'f069', '<i class=\'fa fas-asterisk\'></i>'),
('at', 'f1fa', '<i class=\'fa fas-at\'></i>'),
('audio-description', 'f29e', '<i class=\'fa fas-audio-description\'></i>'),
('backward', 'f04a', '<i class=\'fa fas-backward\'></i>'),
('balance-scale', 'f24e', '<i class=\'fa fas-balance-scale\'></i>'),
('ban', 'f05e', '<i class=\'fa fas-ban\'></i>'),
('band-aid', 'f462', '<i class=\'fa fas-band-aid\'></i>'),
('barcode', 'f02a', '<i class=\'fa fas-barcode\'></i>'),
('bars', 'f0c9', '<i class=\'fa fas-bars\'></i>'),
('baseball-ball', 'f433', '<i class=\'fa fas-baseball-ball\'></i>'),
('basketball-ball', 'f434', '<i class=\'fa fas-basketball-ball\'></i>'),
('bath', 'f2cd', '<i class=\'fa fas-bath\'></i>'),
('battery-empty', 'f244', '<i class=\'fa fas-battery-empty\'></i>'),
('battery-full', 'f240', '<i class=\'fa fas-battery-full\'></i>'),
('battery-half', 'f242', '<i class=\'fa fas-battery-half\'></i>'),
('battery-quarter', 'f243', '<i class=\'fa fas-battery-quarter\'></i>'),
('battery-three-quarters', 'f241', '<i class=\'fa fas-battery-three-quarters\'></i>'),
('bed', 'f236', '<i class=\'fa fas-bed\'></i>'),
('beer', 'f0fc', '<i class=\'fa fas-beer\'></i>'),
('bell', 'f0f3', '<i class=\'fa fas-bell\'></i>'),
('bell-slash', 'f1f6', '<i class=\'fa fas-bell-slash\'></i>'),
('bicycle', 'f206', '<i class=\'fa fas-bicycle\'></i>'),
('binoculars', 'f1e5', '<i class=\'fa fas-binoculars\'></i>'),
('birthday-cake', 'f1fd', '<i class=\'fa fas-birthday-cake\'></i>'),
('blender', 'f517', '<i class=\'fa fas-blender\'></i>'),
('blind', 'f29d', '<i class=\'fa fas-blind\'></i>'),
('bold', 'f032', '<i class=\'fa fas-bold\'></i>'),
('bolt', 'f0e7', '<i class=\'fa fas-bolt\'></i>'),
('bomb', 'f1e2', '<i class=\'fa fas-bomb\'></i>'),
('book', 'f02d', '<i class=\'fa fas-book\'></i>'),
('book-open', 'f518', '<i class=\'fa fas-book-open\'></i>'),
('bookmark', 'f02e', '<i class=\'fa fas-bookmark\'></i>'),
('bowling-ball', 'f436', '<i class=\'fa fas-bowling-ball\'></i>'),
('box', 'f466', '<i class=\'fa fas-box\'></i>'),
('box-open', 'f49e', '<i class=\'fa fas-box-open\'></i>'),
('boxes', 'f468', '<i class=\'fa fas-boxes\'></i>'),
('braille', 'f2a1', '<i class=\'fa fas-braille\'></i>'),
('briefcase', 'f0b1', '<i class=\'fa fas-briefcase\'></i>'),
('briefcase-medical', 'f469', '<i class=\'fa fas-briefcase-medical\'></i>'),
('broadcast-tower', 'f519', '<i class=\'fa fas-broadcast-tower\'></i>'),
('broom', 'f51a', '<i class=\'fa fas-broom\'></i>'),
('bug', 'f188', '<i class=\'fa fas-bug\'></i>'),
('building', 'f1ad', '<i class=\'fa fas-building\'></i>'),
('bullhorn', 'f0a1', '<i class=\'fa fas-bullhorn\'></i>'),
('bullseye', 'f140', '<i class=\'fa fas-bullseye\'></i>'),
('burn', 'f46a', '<i class=\'fa fas-burn\'></i>'),
('bus', 'f207', '<i class=\'fa fas-bus\'></i>'),
('calculator', 'f1ec', '<i class=\'fa fas-calculator\'></i>'),
('calendar', 'f133', '<i class=\'fa fas-calendar\'></i>'),
('calendar-alt', 'f073', '<i class=\'fa fas-calendar-alt\'></i>'),
('calendar-check', 'f274', '<i class=\'fa fas-calendar-check\'></i>'),
('calendar-minus', 'f272', '<i class=\'fa fas-calendar-minus\'></i>'),
('calendar-plus', 'f271', '<i class=\'fa fas-calendar-plus\'></i>'),
('calendar-times', 'f273', '<i class=\'fa fas-calendar-times\'></i>'),
('camera', 'f030', '<i class=\'fa fas-camera\'></i>'),
('camera-retro', 'f083', '<i class=\'fa fas-camera-retro\'></i>'),
('capsules', 'f46b', '<i class=\'fa fas-capsules\'></i>'),
('car', 'f1b9', '<i class=\'fa fas-car\'></i>'),
('caret-down', 'f0d7', '<i class=\'fa fas-caret-down\'></i>'),
('caret-left', 'f0d9', '<i class=\'fa fas-caret-left\'></i>'),
('caret-right', 'f0da', '<i class=\'fa fas-caret-right\'></i>'),
('caret-square-down', 'f150', '<i class=\'fa fas-caret-square-down\'></i>'),
('caret-square-left', 'f191', '<i class=\'fa fas-caret-square-left\'></i>'),
('caret-square-right', 'f152', '<i class=\'fa fas-caret-square-right\'></i>'),
('caret-square-up', 'f151', '<i class=\'fa fas-caret-square-up\'></i>'),
('caret-up', 'f0d8', '<i class=\'fa fas-caret-up\'></i>'),
('cart-arrow-down', 'f218', '<i class=\'fa fas-cart-arrow-down\'></i>'),
('cart-plus', 'f217', '<i class=\'fa fas-cart-plus\'></i>'),
('certificate', 'f0a3', '<i class=\'fa fas-certificate\'></i>'),
('chalkboard', 'f51b', '<i class=\'fa fas-chalkboard\'></i>'),
('chalkboard-teacher', 'f51c', '<i class=\'fa fas-chalkboard-teacher\'></i>'),
('chart-area', 'f1fe', '<i class=\'fa fas-chart-area\'></i>'),
('chart-bar', 'f080', '<i class=\'fa fas-chart-bar\'></i>'),
('chart-line', 'f201', '<i class=\'fa fas-chart-line\'></i>'),
('chart-pie', 'f200', '<i class=\'fa fas-chart-pie\'></i>'),
('check', 'f00c', '<i class=\'fa fas-check\'></i>'),
('check-circle', 'f058', '<i class=\'fa fas-check-circle\'></i>'),
('check-square', 'f14a', '<i class=\'fa fas-check-square\'></i>'),
('chess', 'f439', '<i class=\'fa fas-chess\'></i>'),
('chess-bishop', 'f43a', '<i class=\'fa fas-chess-bishop\'></i>'),
('chess-board', 'f43c', '<i class=\'fa fas-chess-board\'></i>'),
('chess-king', 'f43f', '<i class=\'fa fas-chess-king\'></i>'),
('chess-knight', 'f441', '<i class=\'fa fas-chess-knight\'></i>'),
('chess-pawn', 'f443', '<i class=\'fa fas-chess-pawn\'></i>'),
('chess-queen', 'f445', '<i class=\'fa fas-chess-queen\'></i>'),
('chess-rook', 'f447', '<i class=\'fa fas-chess-rook\'></i>'),
('chevron-circle-down', 'f13a', '<i class=\'fa fas-chevron-circle-down\'></i>'),
('chevron-circle-left', 'f137', '<i class=\'fa fas-chevron-circle-left\'></i>'),
('chevron-circle-right', 'f138', '<i class=\'fa fas-chevron-circle-right\'></i>'),
('chevron-circle-up', 'f139', '<i class=\'fa fas-chevron-circle-up\'></i>'),
('chevron-down', 'f078', '<i class=\'fa fas-chevron-down\'></i>'),
('chevron-left', 'f053', '<i class=\'fa fas-chevron-left\'></i>'),
('chevron-right', 'f054', '<i class=\'fa fas-chevron-right\'></i>'),
('chevron-up', 'f077', '<i class=\'fa fas-chevron-up\'></i>'),
('child', 'f1ae', '<i class=\'fa fas-child\'></i>'),
('church', 'f51d', '<i class=\'fa fas-church\'></i>'),
('circle', 'f111', '<i class=\'fa fas-circle\'></i>'),
('circle-notch', 'f1ce', '<i class=\'fa fas-circle-notch\'></i>'),
('clipboard', 'f328', '<i class=\'fa fas-clipboard\'></i>'),
('clipboard-check', 'f46c', '<i class=\'fa fas-clipboard-check\'></i>'),
('clipboard-list', 'f46d', '<i class=\'fa fas-clipboard-list\'></i>'),
('clock', 'f017', '<i class=\'fa fas-clock\'></i>'),
('clone', 'f24d', '<i class=\'fa fas-clone\'></i>'),
('closed-captioning', 'f20a', '<i class=\'fa fas-closed-captioning\'></i>'),
('cloud', 'f0c2', '<i class=\'fa fas-cloud\'></i>'),
('cloud-download-alt', 'f381', '<i class=\'fa fas-cloud-download-alt\'></i>'),
('cloud-upload-alt', 'f382', '<i class=\'fa fas-cloud-upload-alt\'></i>'),
('code', 'f121', '<i class=\'fa fas-code\'></i>'),
('code-branch', 'f126', '<i class=\'fa fas-code-branch\'></i>'),
('coffee', 'f0f4', '<i class=\'fa fas-coffee\'></i>'),
('cog', 'f013', '<i class=\'fa fas-cog\'></i>'),
('cogs', 'f085', '<i class=\'fa fas-cogs\'></i>'),
('coins', 'f51e', '<i class=\'fa fas-coins\'></i>'),
('columns', 'f0db', '<i class=\'fa fas-columns\'></i>'),
('comment', 'f075', '<i class=\'fa fas-comment\'></i>'),
('comment-alt', 'f27a', '<i class=\'fa fas-comment-alt\'></i>'),
('comment-dots', 'f4ad', '<i class=\'fa fas-comment-dots\'></i>'),
('comment-slash', 'f4b3', '<i class=\'fa fas-comment-slash\'></i>'),
('comments', 'f086', '<i class=\'fa fas-comments\'></i>'),
('compact-disc', 'f51f', '<i class=\'fa fas-compact-disc\'></i>'),
('compass', 'f14e', '<i class=\'fa fas-compass\'></i>'),
('compress', 'f066', '<i class=\'fa fas-compress\'></i>'),
('copy', 'f0c5', '<i class=\'fa fas-copy\'></i>'),
('copyright', 'f1f9', '<i class=\'fa fas-copyright\'></i>'),
('couch', 'f4b8', '<i class=\'fa fas-couch\'></i>'),
('credit-card', 'f09d', '<i class=\'fa fas-credit-card\'></i>'),
('crop', 'f125', '<i class=\'fa fas-crop\'></i>'),
('crosshairs', 'f05b', '<i class=\'fa fas-crosshairs\'></i>'),
('crow', 'f520', '<i class=\'fa fas-crow\'></i>'),
('crown', 'f521', '<i class=\'fa fas-crown\'></i>'),
('cube', 'f1b2', '<i class=\'fa fas-cube\'></i>'),
('cubes', 'f1b3', '<i class=\'fa fas-cubes\'></i>'),
('cut', 'f0c4', '<i class=\'fa fas-cut\'></i>'),
('database', 'f1c0', '<i class=\'fa fas-database\'></i>'),
('deaf', 'f2a4', '<i class=\'fa fas-deaf\'></i>'),
('desktop', 'f108', '<i class=\'fa fas-desktop\'></i>'),
('diagnoses', 'f470', '<i class=\'fa fas-diagnoses\'></i>'),
('dice', 'f522', '<i class=\'fa fas-dice\'></i>'),
('dice-five', 'f523', '<i class=\'fa fas-dice-five\'></i>'),
('dice-four', 'f524', '<i class=\'fa fas-dice-four\'></i>'),
('dice-one', 'f525', '<i class=\'fa fas-dice-one\'></i>'),
('dice-six', 'f526', '<i class=\'fa fas-dice-six\'></i>'),
('dice-three', 'f527', '<i class=\'fa fas-dice-three\'></i>'),
('dice-two', 'f528', '<i class=\'fa fas-dice-two\'></i>'),
('divide', 'f529', '<i class=\'fa fas-divide\'></i>'),
('dna', 'f471', '<i class=\'fa fas-dna\'></i>'),
('dollar-sign', 'f155', '<i class=\'fa fas-dollar-sign\'></i>'),
('dolly', 'f472', '<i class=\'fa fas-dolly\'></i>'),
('dolly-flatbed', 'f474', '<i class=\'fa fas-dolly-flatbed\'></i>'),
('donate', 'f4b9', '<i class=\'fa fas-donate\'></i>'),
('door-closed', 'f52a', '<i class=\'fa fas-door-closed\'></i>'),
('door-open', 'f52b', '<i class=\'fa fas-door-open\'></i>'),
('dot-circle', 'f192', '<i class=\'fa fas-dot-circle\'></i>'),
('dove', 'f4ba', '<i class=\'fa fas-dove\'></i>'),
('download', 'f019', '<i class=\'fa fas-download\'></i>'),
('dumbbell', 'f44b', '<i class=\'fa fas-dumbbell\'></i>'),
('edit', 'f044', '<i class=\'fa fas-edit\'></i>'),
('eject', 'f052', '<i class=\'fa fas-eject\'></i>'),
('ellipsis-h', 'f141', '<i class=\'fa fas-ellipsis-h\'></i>'),
('ellipsis-v', 'f142', '<i class=\'fa fas-ellipsis-v\'></i>'),
('envelope', 'f0e0', '<i class=\'fa fas-envelope\'></i>'),
('envelope-open', 'f2b6', '<i class=\'fa fas-envelope-open\'></i>'),
('envelope-square', 'f199', '<i class=\'fa fas-envelope-square\'></i>'),
('equals', 'f52c', '<i class=\'fa fas-equals\'></i>'),
('eraser', 'f12d', '<i class=\'fa fas-eraser\'></i>'),
('euro-sign', 'f153', '<i class=\'fa fas-euro-sign\'></i>'),
('exchange-alt', 'f362', '<i class=\'fa fas-exchange-alt\'></i>'),
('exclamation', 'f12a', '<i class=\'fa fas-exclamation\'></i>'),
('exclamation-circle', 'f06a', '<i class=\'fa fas-exclamation-circle\'></i>'),
('exclamation-triangle', 'f071', '<i class=\'fa fas-exclamation-triangle\'></i>'),
('expand', 'f065', '<i class=\'fa fas-expand\'></i>'),
('expand-arrows-alt', 'f31e', '<i class=\'fa fas-expand-arrows-alt\'></i>'),
('external-link-alt', 'f35d', '<i class=\'fa fas-external-link-alt\'></i>'),
('external-link-square-alt', 'f360', '<i class=\'fa fas-external-link-square-alt\'></i>'),
('eye', 'f06e', '<i class=\'fa fas-eye\'></i>'),
('eye-dropper', 'f1fb', '<i class=\'fa fas-eye-dropper\'></i>'),
('eye-slash', 'f070', '<i class=\'fa fas-eye-slash\'></i>'),
('fast-backward', 'f049', '<i class=\'fa fas-fast-backward\'></i>'),
('fast-forward', 'f050', '<i class=\'fa fas-fast-forward\'></i>'),
('fax', 'f1ac', '<i class=\'fa fas-fax\'></i>'),
('feather', 'f52d', '<i class=\'fa fas-feather\'></i>'),
('female', 'f182', '<i class=\'fa fas-female\'></i>'),
('fighter-jet', 'f0fb', '<i class=\'fa fas-fighter-jet\'></i>'),
('file', 'f15b', '<i class=\'fa fas-file\'></i>'),
('file-alt', 'f15c', '<i class=\'fa fas-file-alt\'></i>'),
('file-archive', 'f1c6', '<i class=\'fa fas-file-archive\'></i>'),
('file-audio', 'f1c7', '<i class=\'fa fas-file-audio\'></i>'),
('file-code', 'f1c9', '<i class=\'fa fas-file-code\'></i>'),
('file-excel', 'f1c3', '<i class=\'fa fas-file-excel\'></i>'),
('file-image', 'f1c5', '<i class=\'fa fas-file-image\'></i>'),
('file-medical', 'f477', '<i class=\'fa fas-file-medical\'></i>'),
('file-medical-alt', 'f478', '<i class=\'fa fas-file-medical-alt\'></i>'),
('file-pdf', 'f1c1', '<i class=\'fa fas-file-pdf\'></i>'),
('file-powerpoint', 'f1c4', '<i class=\'fa fas-file-powerpoint\'></i>'),
('file-video', 'f1c8', '<i class=\'fa fas-file-video\'></i>'),
('file-word', 'f1c2', '<i class=\'fa fas-file-word\'></i>'),
('film', 'f008', '<i class=\'fa fas-film\'></i>'),
('filter', 'f0b0', '<i class=\'fa fas-filter\'></i>'),
('fire', 'f06d', '<i class=\'fa fas-fire\'></i>'),
('fire-extinguisher', 'f134', '<i class=\'fa fas-fire-extinguisher\'></i>'),
('first-aid', 'f479', '<i class=\'fa fas-first-aid\'></i>'),
('flag', 'f024', '<i class=\'fa fas-flag\'></i>'),
('flag-checkered', 'f11e', '<i class=\'fa fas-flag-checkered\'></i>'),
('flask', 'f0c3', '<i class=\'fa fas-flask\'></i>'),
('folder', 'f07b', '<i class=\'fa fas-folder\'></i>'),
('folder-open', 'f07c', '<i class=\'fa fas-folder-open\'></i>'),
('font', 'f031', '<i class=\'fa fas-font\'></i>'),
('font-awesome-logo-full', 'f4e6', '<i class=\'fa fas-font-awesome-logo-full\'></i>'),
('football-ball', 'f44e', '<i class=\'fa fas-football-ball\'></i>'),
('forward', 'f04e', '<i class=\'fa fas-forward\'></i>'),
('frog', 'f52e', '<i class=\'fa fas-frog\'></i>'),
('frown', 'f119', '<i class=\'fa fas-frown\'></i>'),
('futbol', 'f1e3', '<i class=\'fa fas-futbol\'></i>'),
('gamepad', 'f11b', '<i class=\'fa fas-gamepad\'></i>'),
('gas-pump', 'f52f', '<i class=\'fa fas-gas-pump\'></i>'),
('gavel', 'f0e3', '<i class=\'fa fas-gavel\'></i>'),
('gem', 'f3a5', '<i class=\'fa fas-gem\'></i>'),
('genderless', 'f22d', '<i class=\'fa fas-genderless\'></i>'),
('gift', 'f06b', '<i class=\'fa fas-gift\'></i>'),
('glass-martini', 'f000', '<i class=\'fa fas-glass-martini\'></i>'),
('glasses', 'f530', '<i class=\'fa fas-glasses\'></i>'),
('globe', 'f0ac', '<i class=\'fa fas-globe\'></i>'),
('golf-ball', 'f450', '<i class=\'fa fas-golf-ball\'></i>'),
('graduation-cap', 'f19d', '<i class=\'fa fas-graduation-cap\'></i>'),
('greater-than', 'f531', '<i class=\'fa fas-greater-than\'></i>'),
('greater-than-equal', 'f532', '<i class=\'fa fas-greater-than-equal\'></i>'),
('h-square', 'f0fd', '<i class=\'fa fas-h-square\'></i>'),
('hand-holding', 'f4bd', '<i class=\'fa fas-hand-holding\'></i>'),
('hand-holding-heart', 'f4be', '<i class=\'fa fas-hand-holding-heart\'></i>'),
('hand-holding-usd', 'f4c0', '<i class=\'fa fas-hand-holding-usd\'></i>'),
('hand-lizard', 'f258', '<i class=\'fa fas-hand-lizard\'></i>'),
('hand-paper', 'f256', '<i class=\'fa fas-hand-paper\'></i>'),
('hand-peace', 'f25b', '<i class=\'fa fas-hand-peace\'></i>'),
('hand-point-down', 'f0a7', '<i class=\'fa fas-hand-point-down\'></i>'),
('hand-point-left', 'f0a5', '<i class=\'fa fas-hand-point-left\'></i>'),
('hand-point-right', 'f0a4', '<i class=\'fa fas-hand-point-right\'></i>'),
('hand-point-up', 'f0a6', '<i class=\'fa fas-hand-point-up\'></i>'),
('hand-pointer', 'f25a', '<i class=\'fa fas-hand-pointer\'></i>'),
('hand-rock', 'f255', '<i class=\'fa fas-hand-rock\'></i>'),
('hand-scissors', 'f257', '<i class=\'fa fas-hand-scissors\'></i>'),
('hand-spock', 'f259', '<i class=\'fa fas-hand-spock\'></i>'),
('hands', 'f4c2', '<i class=\'fa fas-hands\'></i>'),
('hands-helping', 'f4c4', '<i class=\'fa fas-hands-helping\'></i>'),
('handshake', 'f2b5', '<i class=\'fa fas-handshake\'></i>'),
('hashtag', 'f292', '<i class=\'fa fas-hashtag\'></i>'),
('hdd', 'f0a0', '<i class=\'fa fas-hdd\'></i>'),
('heading', 'f1dc', '<i class=\'fa fas-heading\'></i>'),
('headphones', 'f025', '<i class=\'fa fas-headphones\'></i>'),
('heart', 'f004', '<i class=\'fa fas-heart\'></i>'),
('heartbeat', 'f21e', '<i class=\'fa fas-heartbeat\'></i>'),
('helicopter', 'f533', '<i class=\'fa fas-helicopter\'></i>'),
('history', 'f1da', '<i class=\'fa fas-history\'></i>'),
('hockey-puck', 'f453', '<i class=\'fa fas-hockey-puck\'></i>'),
('home', 'f015', '<i class=\'fa fas-home\'></i>'),
('hospital', 'f0f8', '<i class=\'fa fas-hospital\'></i>'),
('hospital-alt', 'f47d', '<i class=\'fa fas-hospital-alt\'></i>'),
('hospital-symbol', 'f47e', '<i class=\'fa fas-hospital-symbol\'></i>'),
('hourglass', 'f254', '<i class=\'fa fas-hourglass\'></i>'),
('hourglass-end', 'f253', '<i class=\'fa fas-hourglass-end\'></i>'),
('hourglass-half', 'f252', '<i class=\'fa fas-hourglass-half\'></i>'),
('hourglass-start', 'f251', '<i class=\'fa fas-hourglass-start\'></i>'),
('i-cursor', 'f246', '<i class=\'fa fas-i-cursor\'></i>'),
('id-badge', 'f2c1', '<i class=\'fa fas-id-badge\'></i>'),
('id-card', 'f2c2', '<i class=\'fa fas-id-card\'></i>'),
('id-card-alt', 'f47f', '<i class=\'fa fas-id-card-alt\'></i>'),
('image', 'f03e', '<i class=\'fa fas-image\'></i>'),
('images', 'f302', '<i class=\'fa fas-images\'></i>'),
('inbox', 'f01c', '<i class=\'fa fas-inbox\'></i>'),
('indent', 'f03c', '<i class=\'fa fas-indent\'></i>'),
('industry', 'f275', '<i class=\'fa fas-industry\'></i>'),
('infinity', 'f534', '<i class=\'fa fas-infinity\'></i>'),
('info', 'f129', '<i class=\'fa fas-info\'></i>'),
('info-circle', 'f05a', '<i class=\'fa fas-info-circle\'></i>'),
('italic', 'f033', '<i class=\'fa fas-italic\'></i>'),
('key', 'f084', '<i class=\'fa fas-key\'></i>'),
('keyboard', 'f11c', '<i class=\'fa fas-keyboard\'></i>'),
('kiwi-bird', 'f535', '<i class=\'fa fas-kiwi-bird\'></i>'),
('language', 'f1ab', '<i class=\'fa fas-language\'></i>'),
('laptop', 'f109', '<i class=\'fa fas-laptop\'></i>'),
('leaf', 'f06c', '<i class=\'fa fas-leaf\'></i>'),
('lemon', 'f094', '<i class=\'fa fas-lemon\'></i>'),
('less-than', 'f536', '<i class=\'fa fas-less-than\'></i>'),
('less-than-equal', 'f537', '<i class=\'fa fas-less-than-equal\'></i>'),
('level-down-alt', 'f3be', '<i class=\'fa fas-level-down-alt\'></i>'),
('level-up-alt', 'f3bf', '<i class=\'fa fas-level-up-alt\'></i>'),
('life-ring', 'f1cd', '<i class=\'fa fas-life-ring\'></i>'),
('lightbulb', 'f0eb', '<i class=\'fa fas-lightbulb\'></i>'),
('link', 'f0c1', '<i class=\'fa fas-link\'></i>'),
('lira-sign', 'f195', '<i class=\'fa fas-lira-sign\'></i>'),
('list', 'f03a', '<i class=\'fa fas-list\'></i>'),
('list-alt', 'f022', '<i class=\'fa fas-list-alt\'></i>'),
('list-ol', 'f0cb', '<i class=\'fa fas-list-ol\'></i>'),
('list-ul', 'f0ca', '<i class=\'fa fas-list-ul\'></i>'),
('location-arrow', 'f124', '<i class=\'fa fas-location-arrow\'></i>'),
('lock', 'f023', '<i class=\'fa fas-lock\'></i>'),
('lock-open', 'f3c1', '<i class=\'fa fas-lock-open\'></i>'),
('long-arrow-alt-down', 'f309', '<i class=\'fa fas-long-arrow-alt-down\'></i>'),
('long-arrow-alt-left', 'f30a', '<i class=\'fa fas-long-arrow-alt-left\'></i>'),
('long-arrow-alt-right', 'f30b', '<i class=\'fa fas-long-arrow-alt-right\'></i>'),
('long-arrow-alt-up', 'f30c', '<i class=\'fa fas-long-arrow-alt-up\'></i>'),
('low-vision', 'f2a8', '<i class=\'fa fas-low-vision\'></i>'),
('magic', 'f0d0', '<i class=\'fa fas-magic\'></i>'),
('magnet', 'f076', '<i class=\'fa fas-magnet\'></i>'),
('male', 'f183', '<i class=\'fa fas-male\'></i>'),
('map', 'f279', '<i class=\'fa fas-map\'></i>'),
('map-marker', 'f041', '<i class=\'fa fas-map-marker\'></i>'),
('map-marker-alt', 'f3c5', '<i class=\'fa fas-map-marker-alt\'></i>'),
('map-pin', 'f276', '<i class=\'fa fas-map-pin\'></i>'),
('map-signs', 'f277', '<i class=\'fa fas-map-signs\'></i>'),
('mars', 'f222', '<i class=\'fa fas-mars\'></i>'),
('mars-double', 'f227', '<i class=\'fa fas-mars-double\'></i>'),
('mars-stroke', 'f229', '<i class=\'fa fas-mars-stroke\'></i>'),
('mars-stroke-h', 'f22b', '<i class=\'fa fas-mars-stroke-h\'></i>'),
('mars-stroke-v', 'f22a', '<i class=\'fa fas-mars-stroke-v\'></i>'),
('medkit', 'f0fa', '<i class=\'fa fas-medkit\'></i>'),
('meh', 'f11a', '<i class=\'fa fas-meh\'></i>'),
('memory', 'f538', '<i class=\'fa fas-memory\'></i>'),
('mercury', 'f223', '<i class=\'fa fas-mercury\'></i>'),
('microchip', 'f2db', '<i class=\'fa fas-microchip\'></i>'),
('microphone', 'f130', '<i class=\'fa fas-microphone\'></i>'),
('microphone-alt', 'f3c9', '<i class=\'fa fas-microphone-alt\'></i>'),
('microphone-alt-slash', 'f539', '<i class=\'fa fas-microphone-alt-slash\'></i>'),
('microphone-slash', 'f131', '<i class=\'fa fas-microphone-slash\'></i>'),
('minus', 'f068', '<i class=\'fa fas-minus\'></i>'),
('minus-circle', 'f056', '<i class=\'fa fas-minus-circle\'></i>'),
('minus-square', 'f146', '<i class=\'fa fas-minus-square\'></i>'),
('mobile', 'f10b', '<i class=\'fa fas-mobile\'></i>'),
('mobile-alt', 'f3cd', '<i class=\'fa fas-mobile-alt\'></i>'),
('money-bill', 'f0d6', '<i class=\'fa fas-money-bill\'></i>'),
('money-bill-alt', 'f3d1', '<i class=\'fa fas-money-bill-alt\'></i>'),
('money-bill-wave', 'f53a', '<i class=\'fa fas-money-bill-wave\'></i>'),
('money-bill-wave-alt', 'f53b', '<i class=\'fa fas-money-bill-wave-alt\'></i>'),
('money-check', 'f53c', '<i class=\'fa fas-money-check\'></i>'),
('money-check-alt', 'f53d', '<i class=\'fa fas-money-check-alt\'></i>'),
('moon', 'f186', '<i class=\'fa fas-moon\'></i>'),
('motorcycle', 'f21c', '<i class=\'fa fas-motorcycle\'></i>'),
('mouse-pointer', 'f245', '<i class=\'fa fas-mouse-pointer\'></i>'),
('music', 'f001', '<i class=\'fa fas-music\'></i>'),
('neuter', 'f22c', '<i class=\'fa fas-neuter\'></i>'),
('newspaper', 'f1ea', '<i class=\'fa fas-newspaper\'></i>'),
('not-equal', 'f53e', '<i class=\'fa fas-not-equal\'></i>'),
('notes-medical', 'f481', '<i class=\'fa fas-notes-medical\'></i>'),
('object-group', 'f247', '<i class=\'fa fas-object-group\'></i>'),
('object-ungroup', 'f248', '<i class=\'fa fas-object-ungroup\'></i>'),
('outdent', 'f03b', '<i class=\'fa fas-outdent\'></i>'),
('paint-brush', 'f1fc', '<i class=\'fa fas-paint-brush\'></i>'),
('palette', 'f53f', '<i class=\'fa fas-palette\'></i>'),
('pallet', 'f482', '<i class=\'fa fas-pallet\'></i>'),
('paper-plane', 'f1d8', '<i class=\'fa fas-paper-plane\'></i>'),
('paperclip', 'f0c6', '<i class=\'fa fas-paperclip\'></i>'),
('parachute-box', 'f4cd', '<i class=\'fa fas-parachute-box\'></i>'),
('paragraph', 'f1dd', '<i class=\'fa fas-paragraph\'></i>'),
('parking', 'f540', '<i class=\'fa fas-parking\'></i>'),
('paste', 'f0ea', '<i class=\'fa fas-paste\'></i>'),
('pause', 'f04c', '<i class=\'fa fas-pause\'></i>'),
('pause-circle', 'f28b', '<i class=\'fa fas-pause-circle\'></i>'),
('paw', 'f1b0', '<i class=\'fa fas-paw\'></i>'),
('pen-square', 'f14b', '<i class=\'fa fas-pen-square\'></i>'),
('pencil-alt', 'f303', '<i class=\'fa fas-pencil-alt\'></i>'),
('people-carry', 'f4ce', '<i class=\'fa fas-people-carry\'></i>'),
('percent', 'f295', '<i class=\'fa fas-percent\'></i>'),
('percentage', 'f541', '<i class=\'fa fas-percentage\'></i>'),
('phone', 'f095', '<i class=\'fa fas-phone\'></i>'),
('phone-slash', 'f3dd', '<i class=\'fa fas-phone-slash\'></i>'),
('phone-square', 'f098', '<i class=\'fa fas-phone-square\'></i>'),
('phone-volume', 'f2a0', '<i class=\'fa fas-phone-volume\'></i>'),
('piggy-bank', 'f4d3', '<i class=\'fa fas-piggy-bank\'></i>'),
('pills', 'f484', '<i class=\'fa fas-pills\'></i>'),
('plane', 'f072', '<i class=\'fa fas-plane\'></i>'),
('play', 'f04b', '<i class=\'fa fas-play\'></i>'),
('play-circle', 'f144', '<i class=\'fa fas-play-circle\'></i>'),
('plug', 'f1e6', '<i class=\'fa fas-plug\'></i>'),
('plus', 'f067', '<i class=\'fa fas-plus\'></i>'),
('plus-circle', 'f055', '<i class=\'fa fas-plus-circle\'></i>'),
('plus-square', 'f0fe', '<i class=\'fa fas-plus-square\'></i>'),
('podcast', 'f2ce', '<i class=\'fa fas-podcast\'></i>'),
('poo', 'f2fe', '<i class=\'fa fas-poo\'></i>'),
('portrait', 'f3e0', '<i class=\'fa fas-portrait\'></i>'),
('pound-sign', 'f154', '<i class=\'fa fas-pound-sign\'></i>'),
('power-off', 'f011', '<i class=\'fa fas-power-off\'></i>'),
('prescription-bottle', 'f485', '<i class=\'fa fas-prescription-bottle\'></i>'),
('prescription-bottle-alt', 'f486', '<i class=\'fa fas-prescription-bottle-alt\'></i>'),
('print', 'f02f', '<i class=\'fa fas-print\'></i>'),
('procedures', 'f487', '<i class=\'fa fas-procedures\'></i>'),
('project-diagram', 'f542', '<i class=\'fa fas-project-diagram\'></i>'),
('puzzle-piece', 'f12e', '<i class=\'fa fas-puzzle-piece\'></i>'),
('qrcode', 'f029', '<i class=\'fa fas-qrcode\'></i>'),
('question', 'f128', '<i class=\'fa fas-question\'></i>'),
('question-circle', 'f059', '<i class=\'fa fas-question-circle\'></i>'),
('quidditch', 'f458', '<i class=\'fa fas-quidditch\'></i>'),
('quote-left', 'f10d', '<i class=\'fa fas-quote-left\'></i>'),
('quote-right', 'f10e', '<i class=\'fa fas-quote-right\'></i>'),
('random', 'f074', '<i class=\'fa fas-random\'></i>'),
('receipt', 'f543', '<i class=\'fa fas-receipt\'></i>'),
('recycle', 'f1b8', '<i class=\'fa fas-recycle\'></i>'),
('redo', 'f01e', '<i class=\'fa fas-redo\'></i>'),
('redo-alt', 'f2f9', '<i class=\'fa fas-redo-alt\'></i>'),
('registered', 'f25d', '<i class=\'fa fas-registered\'></i>'),
('reply', 'f3e5', '<i class=\'fa fas-reply\'></i>'),
('reply-all', 'f122', '<i class=\'fa fas-reply-all\'></i>'),
('retweet', 'f079', '<i class=\'fa fas-retweet\'></i>'),
('ribbon', 'f4d6', '<i class=\'fa fas-ribbon\'></i>'),
('road', 'f018', '<i class=\'fa fas-road\'></i>'),
('robot', 'f544', '<i class=\'fa fas-robot\'></i>'),
('rocket', 'f135', '<i class=\'fa fas-rocket\'></i>'),
('rss', 'f09e', '<i class=\'fa fas-rss\'></i>'),
('rss-square', 'f143', '<i class=\'fa fas-rss-square\'></i>'),
('ruble-sign', 'f158', '<i class=\'fa fas-ruble-sign\'></i>'),
('ruler', 'f545', '<i class=\'fa fas-ruler\'></i>'),
('ruler-combined', 'f546', '<i class=\'fa fas-ruler-combined\'></i>'),
('ruler-horizontal', 'f547', '<i class=\'fa fas-ruler-horizontal\'></i>'),
('ruler-vertical', 'f548', '<i class=\'fa fas-ruler-vertical\'></i>'),
('rupee-sign', 'f156', '<i class=\'fa fas-rupee-sign\'></i>'),
('save', 'f0c7', '<i class=\'fa fas-save\'></i>'),
('school', 'f549', '<i class=\'fa fas-school\'></i>'),
('screwdriver', 'f54a', '<i class=\'fa fas-screwdriver\'></i>'),
('search', 'f002', '<i class=\'fa fas-search\'></i>'),
('search-minus', 'f010', '<i class=\'fa fas-search-minus\'></i>'),
('search-plus', 'f00e', '<i class=\'fa fas-search-plus\'></i>'),
('seedling', 'f4d8', '<i class=\'fa fas-seedling\'></i>'),
('server', 'f233', '<i class=\'fa fas-server\'></i>'),
('share', 'f064', '<i class=\'fa fas-share\'></i>'),
('share-alt', 'f1e0', '<i class=\'fa fas-share-alt\'></i>'),
('share-alt-square', 'f1e1', '<i class=\'fa fas-share-alt-square\'></i>'),
('share-square', 'f14d', '<i class=\'fa fas-share-square\'></i>'),
('shekel-sign', 'f20b', '<i class=\'fa fas-shekel-sign\'></i>'),
('shield-alt', 'f3ed', '<i class=\'fa fas-shield-alt\'></i>'),
('ship', 'f21a', '<i class=\'fa fas-ship\'></i>'),
('shipping-fast', 'f48b', '<i class=\'fa fas-shipping-fast\'></i>'),
('shoe-prints', 'f54b', '<i class=\'fa fas-shoe-prints\'></i>'),
('shopping-bag', 'f290', '<i class=\'fa fas-shopping-bag\'></i>'),
('shopping-basket', 'f291', '<i class=\'fa fas-shopping-basket\'></i>'),
('shopping-cart', 'f07a', '<i class=\'fa fas-shopping-cart\'></i>'),
('shower', 'f2cc', '<i class=\'fa fas-shower\'></i>'),
('sign', 'f4d9', '<i class=\'fa fas-sign\'></i>'),
('sign-in-alt', 'f2f6', '<i class=\'fa fas-sign-in-alt\'></i>'),
('sign-language', 'f2a7', '<i class=\'fa fas-sign-language\'></i>'),
('sign-out-alt', 'f2f5', '<i class=\'fa fas-sign-out-alt\'></i>'),
('signal', 'f012', '<i class=\'fa fas-signal\'></i>'),
('sitemap', 'f0e8', '<i class=\'fa fas-sitemap\'></i>'),
('skull', 'f54c', '<i class=\'fa fas-skull\'></i>'),
('sliders-h', 'f1de', '<i class=\'fa fas-sliders-h\'></i>'),
('smile', 'f118', '<i class=\'fa fas-smile\'></i>'),
('smoking', 'f48d', '<i class=\'fa fas-smoking\'></i>'),
('smoking-ban', 'f54d', '<i class=\'fa fas-smoking-ban\'></i>'),
('snowflake', 'f2dc', '<i class=\'fa fas-snowflake\'></i>'),
('sort', 'f0dc', '<i class=\'fa fas-sort\'></i>'),
('sort-alpha-down', 'f15d', '<i class=\'fa fas-sort-alpha-down\'></i>'),
('sort-alpha-up', 'f15e', '<i class=\'fa fas-sort-alpha-up\'></i>'),
('sort-amount-down', 'f160', '<i class=\'fa fas-sort-amount-down\'></i>'),
('sort-amount-up', 'f161', '<i class=\'fa fas-sort-amount-up\'></i>'),
('sort-down', 'f0dd', '<i class=\'fa fas-sort-down\'></i>'),
('sort-numeric-down', 'f162', '<i class=\'fa fas-sort-numeric-down\'></i>'),
('sort-numeric-up', 'f163', '<i class=\'fa fas-sort-numeric-up\'></i>'),
('sort-up', 'f0de', '<i class=\'fa fas-sort-up\'></i>'),
('space-shuttle', 'f197', '<i class=\'fa fas-space-shuttle\'></i>'),
('spinner', 'f110', '<i class=\'fa fas-spinner\'></i>'),
('square', 'f0c8', '<i class=\'fa fas-square\'></i>'),
('square-full', 'f45c', '<i class=\'fa fas-square-full\'></i>'),
('star', 'f005', '<i class=\'fa fas-star\'></i>'),
('star-half', 'f089', '<i class=\'fa fas-star-half\'></i>'),
('step-backward', 'f048', '<i class=\'fa fas-step-backward\'></i>'),
('step-forward', 'f051', '<i class=\'fa fas-step-forward\'></i>'),
('stethoscope', 'f0f1', '<i class=\'fa fas-stethoscope\'></i>'),
('sticky-note', 'f249', '<i class=\'fa fas-sticky-note\'></i>'),
('stop', 'f04d', '<i class=\'fa fas-stop\'></i>'),
('stop-circle', 'f28d', '<i class=\'fa fas-stop-circle\'></i>'),
('stopwatch', 'f2f2', '<i class=\'fa fas-stopwatch\'></i>'),
('store', 'f54e', '<i class=\'fa fas-store\'></i>'),
('store-alt', 'f54f', '<i class=\'fa fas-store-alt\'></i>'),
('stream', 'f550', '<i class=\'fa fas-stream\'></i>'),
('street-view', 'f21d', '<i class=\'fa fas-street-view\'></i>'),
('strikethrough', 'f0cc', '<i class=\'fa fas-strikethrough\'></i>'),
('stroopwafel', 'f551', '<i class=\'fa fas-stroopwafel\'></i>'),
('subscript', 'f12c', '<i class=\'fa fas-subscript\'></i>'),
('subway', 'f239', '<i class=\'fa fas-subway\'></i>'),
('suitcase', 'f0f2', '<i class=\'fa fas-suitcase\'></i>'),
('sun', 'f185', '<i class=\'fa fas-sun\'></i>'),
('superscript', 'f12b', '<i class=\'fa fas-superscript\'></i>'),
('sync', 'f021', '<i class=\'fa fas-sync\'></i>'),
('sync-alt', 'f2f1', '<i class=\'fa fas-sync-alt\'></i>'),
('syringe', 'f48e', '<i class=\'fa fas-syringe\'></i>'),
('table', 'f0ce', '<i class=\'fa fas-table\'></i>'),
('table-tennis', 'f45d', '<i class=\'fa fas-table-tennis\'></i>'),
('tablet', 'f10a', '<i class=\'fa fas-tablet\'></i>'),
('tablet-alt', 'f3fa', '<i class=\'fa fas-tablet-alt\'></i>'),
('tablets', 'f490', '<i class=\'fa fas-tablets\'></i>'),
('tachometer-alt', 'f3fd', '<i class=\'fa fas-tachometer-alt\'></i>'),
('tag', 'f02b', '<i class=\'fa fas-tag\'></i>'),
('tags', 'f02c', '<i class=\'fa fas-tags\'></i>'),
('tape', 'f4db', '<i class=\'fa fas-tape\'></i>'),
('tasks', 'f0ae', '<i class=\'fa fas-tasks\'></i>'),
('taxi', 'f1ba', '<i class=\'fa fas-taxi\'></i>'),
('terminal', 'f120', '<i class=\'fa fas-terminal\'></i>'),
('text-height', 'f034', '<i class=\'fa fas-text-height\'></i>'),
('text-width', 'f035', '<i class=\'fa fas-text-width\'></i>'),
('th', 'f00a', '<i class=\'fa fas-th\'></i>'),
('th-large', 'f009', '<i class=\'fa fas-th-large\'></i>'),
('th-list', 'f00b', '<i class=\'fa fas-th-list\'></i>'),
('thermometer', 'f491', '<i class=\'fa fas-thermometer\'></i>'),
('thermometer-empty', 'f2cb', '<i class=\'fa fas-thermometer-empty\'></i>'),
('thermometer-full', 'f2c7', '<i class=\'fa fas-thermometer-full\'></i>'),
('thermometer-half', 'f2c9', '<i class=\'fa fas-thermometer-half\'></i>'),
('thermometer-quarter', 'f2ca', '<i class=\'fa fas-thermometer-quarter\'></i>'),
('thermometer-three-quarters', 'f2c8', '<i class=\'fa fas-thermometer-three-quarters\'></i>'),
('thumbs-down', 'f165', '<i class=\'fa fas-thumbs-down\'></i>'),
('thumbs-up', 'f164', '<i class=\'fa fas-thumbs-up\'></i>'),
('thumbtack', 'f08d', '<i class=\'fa fas-thumbtack\'></i>'),
('ticket-alt', 'f3ff', '<i class=\'fa fas-ticket-alt\'></i>'),
('times', 'f00d', '<i class=\'fa fas-times\'></i>'),
('times-circle', 'f057', '<i class=\'fa fas-times-circle\'></i>'),
('tint', 'f043', '<i class=\'fa fas-tint\'></i>'),
('toggle-off', 'f204', '<i class=\'fa fas-toggle-off\'></i>'),
('toggle-on', 'f205', '<i class=\'fa fas-toggle-on\'></i>'),
('toolbox', 'f552', '<i class=\'fa fas-toolbox\'></i>'),
('trademark', 'f25c', '<i class=\'fa fas-trademark\'></i>'),
('train', 'f238', '<i class=\'fa fas-train\'></i>'),
('transgender', 'f224', '<i class=\'fa fas-transgender\'></i>'),
('transgender-alt', 'f225', '<i class=\'fa fas-transgender-alt\'></i>'),
('trash', 'f1f8', '<i class=\'fa fas-trash\'></i>'),
('trash-alt', 'f2ed', '<i class=\'fa fas-trash-alt\'></i>'),
('tree', 'f1bb', '<i class=\'fa fas-tree\'></i>'),
('trophy', 'f091', '<i class=\'fa fas-trophy\'></i>'),
('truck', 'f0d1', '<i class=\'fa fas-truck\'></i>'),
('truck-loading', 'f4de', '<i class=\'fa fas-truck-loading\'></i>'),
('truck-moving', 'f4df', '<i class=\'fa fas-truck-moving\'></i>'),
('tshirt', 'f553', '<i class=\'fa fas-tshirt\'></i>'),
('tty', 'f1e4', '<i class=\'fa fas-tty\'></i>'),
('tv', 'f26c', '<i class=\'fa fas-tv\'></i>'),
('umbrella', 'f0e9', '<i class=\'fa fas-umbrella\'></i>'),
('underline', 'f0cd', '<i class=\'fa fas-underline\'></i>'),
('undo', 'f0e2', '<i class=\'fa fas-undo\'></i>'),
('undo-alt', 'f2ea', '<i class=\'fa fas-undo-alt\'></i>'),
('universal-access', 'f29a', '<i class=\'fa fas-universal-access\'></i>'),
('university', 'f19c', '<i class=\'fa fas-university\'></i>'),
('unlink', 'f127', '<i class=\'fa fas-unlink\'></i>'),
('unlock', 'f09c', '<i class=\'fa fas-unlock\'></i>'),
('unlock-alt', 'f13e', '<i class=\'fa fas-unlock-alt\'></i>'),
('upload', 'f093', '<i class=\'fa fas-upload\'></i>'),
('user', 'f007', '<i class=\'fa fas-user\'></i>'),
('user-alt', 'f406', '<i class=\'fa fas-user-alt\'></i>'),
('user-alt-slash', 'f4fa', '<i class=\'fa fas-user-alt-slash\'></i>'),
('user-astronaut', 'f4fb', '<i class=\'fa fas-user-astronaut\'></i>'),
('user-check', 'f4fc', '<i class=\'fa fas-user-check\'></i>'),
('user-circle', 'f2bd', '<i class=\'fa fas-user-circle\'></i>'),
('user-clock', 'f4fd', '<i class=\'fa fas-user-clock\'></i>'),
('user-cog', 'f4fe', '<i class=\'fa fas-user-cog\'></i>'),
('user-edit', 'f4ff', '<i class=\'fa fas-user-edit\'></i>'),
('user-friends', 'f500', '<i class=\'fa fas-user-friends\'></i>'),
('user-graduate', 'f501', '<i class=\'fa fas-user-graduate\'></i>'),
('user-lock', 'f502', '<i class=\'fa fas-user-lock\'></i>'),
('user-md', 'f0f0', '<i class=\'fa fas-user-md\'></i>'),
('user-minus', 'f503', '<i class=\'fa fas-user-minus\'></i>'),
('user-ninja', 'f504', '<i class=\'fa fas-user-ninja\'></i>'),
('user-plus', 'f234', '<i class=\'fa fas-user-plus\'></i>'),
('user-secret', 'f21b', '<i class=\'fa fas-user-secret\'></i>'),
('user-shield', 'f505', '<i class=\'fa fas-user-shield\'></i>'),
('user-slash', 'f506', '<i class=\'fa fas-user-slash\'></i>'),
('user-tag', 'f507', '<i class=\'fa fas-user-tag\'></i>'),
('user-tie', 'f508', '<i class=\'fa fas-user-tie\'></i>'),
('user-times', 'f235', '<i class=\'fa fas-user-times\'></i>'),
('users', 'f0c0', '<i class=\'fa fas-users\'></i>'),
('users-cog', 'f509', '<i class=\'fa fas-users-cog\'></i>'),
('utensil-spoon', 'f2e5', '<i class=\'fa fas-utensil-spoon\'></i>'),
('utensils', 'f2e7', '<i class=\'fa fas-utensils\'></i>'),
('venus', 'f221', '<i class=\'fa fas-venus\'></i>'),
('venus-double', 'f226', '<i class=\'fa fas-venus-double\'></i>'),
('venus-mars', 'f228', '<i class=\'fa fas-venus-mars\'></i>'),
('vial', 'f492', '<i class=\'fa fas-vial\'></i>'),
('vials', 'f493', '<i class=\'fa fas-vials\'></i>'),
('video', 'f03d', '<i class=\'fa fas-video\'></i>'),
('video-slash', 'f4e2', '<i class=\'fa fas-video-slash\'></i>'),
('volleyball-ball', 'f45f', '<i class=\'fa fas-volleyball-ball\'></i>'),
('volume-down', 'f027', '<i class=\'fa fas-volume-down\'></i>'),
('volume-off', 'f026', '<i class=\'fa fas-volume-off\'></i>'),
('volume-up', 'f028', '<i class=\'fa fas-volume-up\'></i>'),
('walking', 'f554', '<i class=\'fa fas-walking\'></i>'),
('wallet', 'f555', '<i class=\'fa fas-wallet\'></i>'),
('warehouse', 'f494', '<i class=\'fa fas-warehouse\'></i>'),
('weight', 'f496', '<i class=\'fa fas-weight\'></i>'),
('wheelchair', 'f193', '<i class=\'fa fas-wheelchair\'></i>'),
('wifi', 'f1eb', '<i class=\'fa fas-wifi\'></i>'),
('window-close', 'f410', '<i class=\'fa fas-window-close\'></i>'),
('window-maximize', 'f2d0', '<i class=\'fa fas-window-maximize\'></i>'),
('window-minimize', 'f2d1', '<i class=\'fa fas-window-minimize\'></i>'),
('window-restore', 'f2d2', '<i class=\'fa fas-window-restore\'></i>'),
('wine-glass', 'f4e3', '<i class=\'fa fas-wine-glass\'></i>'),
('won-sign', 'f159', '<i class=\'fa fas-won-sign\'></i>'),
('wrench', 'f0ad', '<i class=\'fa fas-wrench\'></i>'),
('x-ray', 'f497', '<i class=\'fa fas-x-ray\'></i>'),
('yen-sign', 'f157', '<i class=\'fa fas-yen-sign\'></i>');

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE `icon` (
  `id` int(11) DEFAULT NULL,
  `icons_icon_tags` varchar(25) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icon`
--

INSERT INTO `icon` (`id`, `icons_icon_tags`) VALUES
(359, 'social_youtube_square'),
(358, 'social_youtube_circle'),
(357, 'social_youtube'),
(356, 'social_wordpress_square'),
(355, 'social_wordpress_circle'),
(354, 'social_wordpress'),
(353, 'social_vimeo_square'),
(352, 'social_vimeo_circle'),
(351, 'social_vimeo'),
(350, 'social_twitter_square'),
(349, 'social_twitter_circle'),
(348, 'social_twitter'),
(347, 'social_tumblr_square'),
(346, 'social_tumblr_circle'),
(345, 'social_tumblr'),
(344, 'social_tumbleupon'),
(343, 'social_stumbleupon_square'),
(342, 'social_stumbleupon_circle'),
(341, 'social_spotify_square'),
(340, 'social_spotify_circle'),
(339, 'social_spotify'),
(338, 'social_skype_square'),
(337, 'social_skype_circle'),
(336, 'social_skype'),
(335, 'social_share_square'),
(334, 'social_share_circle'),
(333, 'social_share'),
(332, 'social_rss_square'),
(331, 'social_rss_circle'),
(330, 'social_rss'),
(329, 'social_pinterest_square'),
(328, 'social_pinterest_circle'),
(327, 'social_pinterest'),
(326, 'social_picassa_square'),
(325, 'social_picassa_circle'),
(324, 'social_picassa'),
(323, 'social_myspace_square'),
(322, 'social_myspace_circle'),
(321, 'social_myspace'),
(320, 'social_linkedin_square'),
(319, 'social_linkedin_circle'),
(318, 'social_linkedin'),
(317, 'social_instagram_square'),
(316, 'social_instagram_circle'),
(315, 'social_instagram'),
(314, 'social_googleplus_square'),
(313, 'social_googleplus_circle'),
(312, 'social_googleplus'),
(311, 'social_googledrive_square'),
(310, 'social_googledrive_alt2'),
(309, 'social_googledrive'),
(308, 'social_flickr_square'),
(307, 'social_flickr_circle'),
(306, 'social_flickr'),
(305, 'social_facebook_square'),
(304, 'social_facebook_circle'),
(303, 'social_facebook'),
(302, 'social_dribbble_square'),
(301, 'social_dribbble_circle'),
(300, 'social_dribbble'),
(299, 'social_deviantart_square'),
(298, 'social_deviantart_circle'),
(297, 'social_deviantart'),
(296, 'social_delicious_square'),
(295, 'social_delicious_circle'),
(294, 'social_delicious'),
(293, 'social_blogger_square'),
(292, 'social_blogger_circle'),
(291, 'social_blogger'),
(290, 'icon_upload'),
(289, 'icon_trash'),
(288, 'icon_toolbox'),
(287, 'icon_tags'),
(286, 'icon_tag'),
(285, 'icon_ribbon'),
(284, 'icon_quotations_alt'),
(283, 'icon_pushpin'),
(282, 'icon_profile'),
(281, 'icon_pin'),
(280, 'icon_phone'),
(279, 'icon_pause_alt'),
(278, 'icon_music'),
(277, 'icon_mic'),
(276, 'icon_map'),
(275, 'icon_mail'),
(274, 'icon_lock-open'),
(273, 'icon_lock'),
(272, 'icon_lightbulb'),
(271, 'icon_key'),
(270, 'icon_house'),
(269, 'icon_heart'),
(268, 'icon_group'),
(267, 'icon_grid-3x3'),
(266, 'icon_grid-2x2'),
(265, 'icon_gift'),
(264, 'icon_drawer'),
(263, 'icon_download'),
(262, 'icon_cursor'),
(261, 'icon_contacts'),
(260, 'icon_cone'),
(259, 'icon_compass'),
(258, 'icon_cloud-upload'),
(257, 'icon_cloud-download'),
(256, 'icon_cloud'),
(255, 'icon_clock'),
(254, 'icon_cart'),
(253, 'icon_camera'),
(252, 'icon_book'),
(251, 'icon_bag'),
(250, 'icon_archive'),
(249, 'icon_zoom-out'),
(248, 'icon_zoom-in'),
(247, 'icon_volume-low_alt'),
(246, 'icon_volume-low'),
(245, 'icon_volume-high_alt'),
(244, 'icon_volume-high'),
(243, 'icon_vol-mute_alt'),
(242, 'icon_vol-mute'),
(241, 'icon_trash_alt'),
(240, 'icon_tools'),
(239, 'icon_toolbox_alt'),
(238, 'icon_tool'),
(237, 'icon_tags_alt'),
(236, 'icon_tag_alt'),
(235, 'icon_tablet'),
(234, 'icon_table'),
(233, 'icon_stop_alt'),
(232, 'icon_star-half_alt'),
(231, 'icon_star-half'),
(230, 'icon_star_alt'),
(229, 'icon_star'),
(228, 'icon_ribbon_alt'),
(227, 'icon_refresh'),
(226, 'icon_quotations_alt2'),
(225, 'icon_quotations'),
(224, 'icon_question_alt2'),
(223, 'icon_question_alt'),
(222, 'icon_question'),
(221, 'icon_pushpin_alt'),
(220, 'icon_plus_alt'),
(219, 'icon_pin_alt'),
(218, 'icon_piechart'),
(217, 'icon_pencil_alt'),
(216, 'icon_paperclip'),
(215, 'icon_mobile'),
(214, 'icon_minus_alt'),
(213, 'icon_mic_alt'),
(212, 'icon_menu-square_alt'),
(211, 'icon_menu-circle_alt'),
(210, 'icon_map_alt'),
(209, 'icon_mail_alt'),
(208, 'icon_lock-open_alt'),
(207, 'icon_lock_alt'),
(206, 'icon_loading'),
(205, 'icon_link_alt'),
(204, 'icon_link'),
(203, 'icon_lightbulb_alt'),
(202, 'icon_lifesaver'),
(201, 'icon_laptop'),
(200, 'icon_key_alt'),
(199, 'icon_info'),
(198, 'icon_images'),
(197, 'icon_image'),
(196, 'icon_house_alt'),
(195, 'icon_heart_alt'),
(194, 'icon_headphones'),
(193, 'icon_gift_alt'),
(192, 'icon_genius'),
(191, 'icon_folder-open'),
(190, 'icon_folder-add'),
(189, 'icon_folder_upload'),
(188, 'icon_folder_download'),
(187, 'icon_folder'),
(186, 'icon_film'),
(185, 'icon_error-triangle_alt'),
(184, 'icon_error-triangle'),
(183, 'icon_error-oct'),
(182, 'icon_error-circle'),
(181, 'icon_drawer_alt'),
(180, 'icon_documents'),
(179, 'icon_document'),
(178, 'icon_desktop'),
(177, 'icon_cursor_alt'),
(176, 'icon_creditcard'),
(175, 'icon_contacts_alt'),
(174, 'icon_cone_alt'),
(173, 'icon_compass_alt'),
(172, 'icon_comment_alt'),
(171, 'icon_comment'),
(170, 'icon_cogs'),
(169, 'icon_cog'),
(168, 'icon_cloud-upload_alt'),
(167, 'icon_cloud-download_alt'),
(166, 'icon_cloud_alt'),
(165, 'icon_close_alt'),
(164, 'icon_clock_alt'),
(163, 'icon_check_alt'),
(162, 'icon_chat_alt'),
(161, 'icon_chat'),
(160, 'icon_cart_alt'),
(159, 'icon_camera_alt'),
(158, 'icon_calendar'),
(157, 'icon_book_alt'),
(156, 'icon_blocked'),
(155, 'icon_bag_alt'),
(154, 'icon_archive_alt'),
(153, 'arrow_up_alt'),
(152, 'arrow_triangle-up_alt'),
(151, 'arrow_triangle-right_alt'),
(150, 'arrow_triangle-left_alt'),
(149, 'arrow_triangle-down_alt'),
(148, 'arrow_right-up_alt'),
(147, 'arrow_right-down_alt'),
(146, 'arrow_right_alt'),
(145, 'arrow_left-up_alt'),
(144, 'arrow_left-down_alt'),
(143, 'arrow_left_alt'),
(142, 'arrow_expand_alt3'),
(141, 'arrow_down_alt'),
(140, 'arrow_condense_alt'),
(139, 'arrow_carrot-right_alt'),
(138, 'arrow_carrot-left_alt'),
(137, 'arrow_carrot-down_alt'),
(136, 'arrow_carrot-2up_alt'),
(135, 'arrow_carrot-2right_alt'),
(134, 'arrow_carrot-2left_alt'),
(133, 'arrow_carrot-2dwnn_alt'),
(132, 'arrow_carrot_up_alt'),
(131, 'icon_zoom-out_alt'),
(130, 'icon_zoom-in_alt'),
(129, 'icon_wallet'),
(128, 'icon_ul'),
(127, 'icon_target'),
(126, 'icon_stop_alt2'),
(125, 'icon_stop'),
(124, 'icon_shield'),
(123, 'icon_search2'),
(122, 'icon_search_alt'),
(121, 'icon_search'),
(120, 'icon_rook'),
(119, 'icon_puzzle_alt'),
(118, 'icon_puzzle'),
(117, 'icon_printer-alt'),
(116, 'icon_printer'),
(115, 'icon_plus-box'),
(114, 'icon_plus_alt2'),
(113, 'icon_plus'),
(112, 'icon_percent'),
(111, 'icon_pens'),
(110, 'icon_pencil-edit_alt'),
(109, 'icon_pencil-edit'),
(108, 'icon_pencil'),
(107, 'icon_pause_alt2'),
(106, 'icon_pause'),
(105, 'icon_ol'),
(104, 'icon_mug'),
(103, 'icon_minus-box'),
(102, 'icon_minus-06'),
(101, 'icon_minus_alt2'),
(100, 'icon_menu-square_alt2'),
(99, 'icon_menu-circle_alt2'),
(98, 'icon_menu'),
(97, 'icon_like'),
(96, 'icon_info_alt'),
(95, 'icon_id-2_alt'),
(94, 'icon_id-2'),
(93, 'icon_id_alt'),
(92, 'icon_id'),
(91, 'icon_hourglass'),
(90, 'icon_globe-2'),
(89, 'icon_globe'),
(88, 'icon_folder-open_alt'),
(87, 'icon_folder-alt'),
(86, 'icon_folder-add_alt'),
(85, 'icon_flowchart'),
(84, 'icon_floppy_alt'),
(83, 'icon_floppy'),
(82, 'icon_error-oct_alt'),
(81, 'icon_error-circle_alt'),
(80, 'icon_easel'),
(79, 'icon_drive_alt'),
(78, 'icon_drive'),
(77, 'icon_documents_alt'),
(76, 'icon_document_alt'),
(75, 'icon_dislike_alt'),
(74, 'icon_dislike'),
(73, 'icon_datareport_alt'),
(72, 'icon_datareport'),
(71, 'icon_currency_alt'),
(70, 'icon_currency'),
(69, 'icon_close_alt2'),
(68, 'icon_close'),
(67, 'icon_clipboard'),
(66, 'icon_circle-slelected'),
(65, 'icon_circle-empty'),
(64, 'icon_check_alt2'),
(63, 'icon_check'),
(62, 'icon_calulator'),
(61, 'icon_calculator_alt'),
(60, 'icon_building_alt'),
(59, 'icon_building'),
(58, 'icon_briefcase_alt'),
(57, 'icon_briefcase'),
(56, 'icon_box-selected'),
(55, 'icon_box-empty'),
(54, 'icon_box-checked'),
(53, 'icon_balance'),
(52, 'icon_adjust-vert'),
(51, 'icon_adjust-horiz'),
(50, 'arrow-up-down'),
(49, 'arrow_up-down_alt'),
(48, 'arrow_up'),
(47, 'arrow_triangle-up_alt2'),
(46, 'arrow_triangle-up'),
(45, 'arrow_triangle-right_alt2'),
(44, 'arrow_triangle-right'),
(43, 'arrow_triangle-left_alt2'),
(42, 'arrow_triangle-left'),
(41, 'arrow_triangle-down_alt2'),
(40, 'arrow_triangle-down'),
(39, 'arrow_right-up'),
(38, 'arrow_right-down'),
(37, 'arrow_right'),
(36, 'arrow_move'),
(35, 'arrow_left-up'),
(34, 'arrow_left-right_alt'),
(33, 'arrow_left-right'),
(32, 'arrow_left-down'),
(31, 'arrow_left'),
(30, 'arrow_expand_alt2'),
(29, 'arrow_expand_alt'),
(28, 'arrow_expand'),
(27, 'arrow_down'),
(26, 'arrow_condense'),
(25, 'arrow_carrot-up_alt2'),
(24, 'arrow_carrot-up'),
(23, 'arrow_carrot-right_alt2'),
(22, 'arrow_carrot-right'),
(21, 'arrow_carrot-left_alt2'),
(20, 'arrow_carrot-left'),
(19, 'arrow_carrot-down_alt2'),
(18, 'arrow_carrot-down'),
(17, 'arrow_carrot-2up_alt2'),
(16, 'arrow_carrot-2up'),
(15, 'arrow_carrot-2right_alt2'),
(14, 'arrow_carrot-2right'),
(13, 'arrow_carrot-2left_alt2'),
(12, 'arrow_carrot-2left'),
(11, 'arrow_carrot-2down_alt2'),
(10, 'arrow_carrot-2down'),
(9, 'arrow_back'),
(8, 'icon_wallet_alt'),
(7, 'icon_shield_alt'),
(6, 'icon_percent_alt'),
(5, 'icon_pens_alt'),
(4, 'icon_mug_alt'),
(3, 'icon_like_alt'),
(2, 'icon_globe_alt'),
(1, 'icon_flowchart_alt'),
(0, 'icon_easel_alt');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `thumb` varchar(500) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `thumb`, `title`) VALUES
(1, 'LOGO.png', 'LOGO.png', 'Logo Eri Grafika');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `ip_address`, `tanggal`) VALUES
(1, '::1', '2019-04-27'),
(2, '192.168.1.3', '2019-04-27'),
(3, '::1', '2019-04-28'),
(4, '192.168.1.3', '2019-04-28'),
(5, '656464', '2018-04-28'),
(6, '544456', '2019-05-27'),
(7, '8989484', '2019-06-28'),
(8, '087454', '2019-06-28'),
(9, '192.168.1.3', '2019-04-30'),
(10, '::1', '2019-05-11'),
(11, '::1', '2019-05-12'),
(12, '::1', '2019-05-13'),
(13, '::1', '2019-05-16'),
(14, '::1', '2019-05-17'),
(15, '192.168.1.14', '2019-05-17'),
(16, '::1', '2019-05-18'),
(17, '192.168.1.14', '2019-05-18'),
(18, '192.168.1.14', '2019-05-19'),
(19, '::1', '2019-05-19'),
(20, '::1', '2019-05-20'),
(21, '::1', '2019-05-23'),
(22, '::1', '2019-05-24'),
(23, '::1', '2019-05-25'),
(24, '192.168.1.4', '2019-05-25'),
(25, '::1', '2019-05-29'),
(26, '::1', '2019-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL DEFAULT '0',
  `gambar` varchar(500) NOT NULL DEFAULT '0',
  `thumb` varchar(500) NOT NULL DEFAULT '0',
  `isi` varchar(500) NOT NULL DEFAULT '0',
  `tanggal` varchar(500) NOT NULL DEFAULT '0',
  `id_admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `meta` varchar(500) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `isi` varchar(500) DEFAULT NULL,
  `gambar` varchar(500) DEFAULT NULL,
  `thumb` varchar(500) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL DEFAULT '0',
  `organisasi` varchar(100) NOT NULL DEFAULT '0',
  `review` varchar(500) NOT NULL DEFAULT '0',
  `foto` varchar(500) NOT NULL DEFAULT '0',
  `thumb` varchar(500) NOT NULL DEFAULT '0',
  `star` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video_depan`
--

CREATE TABLE `video_depan` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL DEFAULT '0',
  `foto` varchar(500) NOT NULL DEFAULT '0',
  `link_video` varchar(500) NOT NULL DEFAULT '0',
  `keterangan` varchar(5000) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `web_info`
--

CREATE TABLE `web_info` (
  `id` int(11) NOT NULL,
  `nama_web` varchar(500) NOT NULL DEFAULT '0',
  `alamat` varchar(500) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_info`
--

INSERT INTO `web_info` (`id`, `nama_web`, `alamat`) VALUES
(1, 'Erigrafika', 'Purwodadi');

-- --------------------------------------------------------

--
-- Table structure for table `web_layanan`
--

CREATE TABLE `web_layanan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(5000) NOT NULL,
  `nama` varchar(5000) NOT NULL,
  `url` varchar(5000) NOT NULL,
  `keterangan` varchar(5000) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_layanan`
--

INSERT INTO `web_layanan` (`id`, `gambar`, `nama`, `url`, `keterangan`, `tanggal`, `id_admin`) VALUES
(1, 'Ini_layanan_2.png', 'Ini layanan ', 'Ini_layanan_', 'judul_layananju dul_layananjud ul_layanan', '2019-05-30', 2),
(2, 'banner.png', 'banner', 'banner', 'melayani pembuatan banner dan spanduk', '2019-05-30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `web_slider`
--

CREATE TABLE `web_slider` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `keterangan` varchar(5000) NOT NULL,
  `tanggal` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_slider`
--

INSERT INTO `web_slider` (`id`, `nama`, `gambar`, `thumb`, `keterangan`, `tanggal`, `id_admin`, `url`) VALUES
(7, 'coba slider', 'coba_slider.jpg', 'coba_slider.jpg', 'ini percobaan sllider', '2019-05-16', 1, 'coba_slider');

-- --------------------------------------------------------

--
-- Table structure for table `web_video`
--

CREATE TABLE `web_video` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL DEFAULT '0',
  `keterangan` varchar(500) NOT NULL DEFAULT '0',
  `gambar` varchar(500) NOT NULL DEFAULT '0',
  `link_video` varchar(500) NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_video`
--

INSERT INTO `web_video` (`id`, `judul`, `keterangan`, `gambar`, `link_video`, `status`) VALUES
(2, 'ini video 1', 'hapus_gambar_videohapus_gambar_videohapus_gambar_videohapus_gambar_videohapus_gambar_videohapus_gambar_video', 'ini_video_1.jpg', 'https://www.youtube.com/watch?v=fymkvCSuV1Q', 0),
(3, 'ini video 1', 'hapus_gambar_videohapus_gambar_videohapus_gambar_videohapus_gambar_videohapus_gambar_videohapus_gambar_video', 'ini_video_11.jpg', 'https://www.youtube.com/watch?v=fymkvCSuV1Q', 0),
(4, 'ini video', '$(\"form\").trigger(\"reset\");', 'ini_video.png', 'https://www.youtube.com/watch?v=fymkvCSuV1Q', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_admin`
--
ALTER TABLE `contact_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_pengunjung`
--
ALTER TABLE `email_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `font_awesome_icon`
--
ALTER TABLE `font_awesome_icon`
  ADD PRIMARY KEY (`icon`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_depan`
--
ALTER TABLE `video_depan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_info`
--
ALTER TABLE `web_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_layanan`
--
ALTER TABLE `web_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_slider`
--
ALTER TABLE `web_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_video`
--
ALTER TABLE `web_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_admin`
--
ALTER TABLE `contact_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_pengunjung`
--
ALTER TABLE `email_pengunjung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_depan`
--
ALTER TABLE `video_depan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_info`
--
ALTER TABLE `web_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_layanan`
--
ALTER TABLE `web_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_slider`
--
ALTER TABLE `web_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `web_video`
--
ALTER TABLE `web_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
