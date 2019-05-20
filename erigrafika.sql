-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 06:42 AM
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
(20, '::1', '2019-05-20');

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
(2, 'ini video 1', 'hapus_gambar_videohapus_gambar_videohapus_gambar_videohapus_gambar_videohapus_gambar_videohapus_gambar_video', 'ini_video_1.jpg', 'https://www.youtube.com/watch?v=fymkvCSuV1Q', 1),
(3, 'ini video 1', 'hapus_gambar_videohapus_gambar_videohapus_gambar_videohapus_gambar_videohapus_gambar_videohapus_gambar_video', 'ini_video_11.jpg', 'https://www.youtube.com/watch?v=fymkvCSuV1Q', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- AUTO_INCREMENT for table `web_slider`
--
ALTER TABLE `web_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `web_video`
--
ALTER TABLE `web_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
