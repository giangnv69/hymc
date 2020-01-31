-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 30, 2020 lúc 01:36 PM
-- Phiên bản máy phục vụ: 10.3.21-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo03gvn_hymc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image`
--

INSERT INTO `image` (`id`, `image`, `name`, `link`, `decs`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'http://test.gcosoftware.vn/gsoftware/uploads/images/themes/113759vccorp-logo-final.png', 'VC Corp', 'https://vccorp.vn/', NULL, 'partner', 1, '2019-12-27 07:32:32', '2020-01-02 01:54:20'),
(2, 'http://test.gcosoftware.vn/gsoftware/uploads/images/themes/dong-a-1-1024x763.png', 'Đống Á Beauty', 'https://benhvienthammydonga.vn/', NULL, 'partner', 1, '2019-12-27 07:32:46', '2020-01-02 01:53:20'),
(3, 'http://test.gcosoftware.vn/gsoftware/uploads/images/themes/logo4.png', 'Khách sạn Long Anh', 'http://longanhhotel.vn/', NULL, 'partner', 1, '2019-12-27 07:32:58', '2020-01-02 01:51:56'),
(4, 'http://test.gcosoftware.vn/gsoftware/uploads/images/themes/Layer%209.png', 'Thông tấn xã Việt Nam', 'https://thethaovanhoa.vn/', NULL, 'partner', 1, '2019-12-27 07:33:13', '2020-01-02 01:50:54'),
(5, 'http://test.gcosoftware.vn/gsoftware/uploads/images/themes/Layer%207.png', 'Tramexco', 'http://tramexco.com.vn/home', NULL, 'partner', 1, '2019-12-27 07:33:55', '2020-01-02 01:48:33'),
(6, 'http://test.gcosoftware.vn/gsoftware/uploads/images/themes/d.png', 'Vincom', 'https://vincom.com.vn/', NULL, 'partner', 1, '2020-01-02 01:55:27', '2020-01-02 01:55:27'),
(7, 'http://test.gcosoftware.vn/gsoftware/uploads/images/themes/Logo_cong_ty_sunhouse.png', 'Sunhouse', 'https://sunhouse.com.vn/', NULL, 'partner', 1, '2020-01-02 01:55:59', '2020-01-02 01:55:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `members`
--

INSERT INTO `members` (`id`, `country`, `email`, `remember_token`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Việt Nam', 'nvtrong1210@gmail.com', 'i80gqDpi5MS5NwZD8G01JPdwjK11Yw8gpgADVPZdPuRGT03baMJiLwfhFtLW', '$2y$10$KLxsRGPOWuCSo/xu/pZd5.D6Il779BHv8mk2vf7/h8TTVpne17Rtm', 1, '2020-01-19 08:11:40', '2020-01-19 08:11:40'),
(2, 'Việt Nam', 'nvtrong111@gmail.com', NULL, '$2y$10$MLpZlO4s5CJMUhco6G2wMeD3uLRAwgmgz6MikXxo8SxQKiKPncS12', 1, '2020-01-19 08:19:37', '2020-01-19 08:19:37'),
(3, 'vietnam', 'ledinhson209@gmail.com', 'KNhA503ZTZu2F0TpIuRH30tQSykBzeSs6spwzC24h91CzEVuyrHWizUDT7FQ', '$2y$10$QfkeOF2nak0WcByoQ6xcHu4eaU9m7UtLe6Qoo3ZiYpqgNeyYy1gOK', 1, '2020-01-20 09:13:04', '2020-01-20 09:13:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title_vi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `class` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `parent_id`, `title_vi`, `title_en`, `url`, `position`, `id_group`, `class`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Trang chủ', 'Home', 'http://test.gcosoftware.vn/hymc-code', '0', 1, NULL, '2020-01-15 16:55:43', '2020-01-20 01:32:02'),
(2, NULL, 'Về chúng tôi', 'About Us', 'http://test.gcosoftware.vn/hymc-code/about', '1', 1, NULL, '2020-01-15 16:56:10', '2020-01-20 09:44:32'),
(3, NULL, 'Giao dịch', 'Trading', 'http://test.gcosoftware.vn/hymc-code/trading', '2', 1, NULL, '2020-01-15 16:56:34', '2020-01-19 15:57:11'),
(4, NULL, 'HÌNH THỨC PHÁP LÝ & TÀI LIỆU', 'LEGAL FORMS & DOCUMENTS', '#', '0', 2, NULL, '2020-01-15 17:02:14', '2020-01-15 17:02:23'),
(5, NULL, 'CẢNH BÁO RỦI RO', 'RISK WARNINGS', '#', '1', 2, NULL, '2020-01-15 17:02:38', '2020-01-15 17:04:45'),
(6, NULL, 'CHÍNH SÁCH COOKIES', 'COOKIES POLICY', '#', '2', 2, NULL, '2020-01-15 17:03:03', '2020-01-15 17:04:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menugroup`
--

CREATE TABLE `menugroup` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menugroup`
--

INSERT INTO `menugroup` (`id`, `title`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Menu đầu trang', 'Đầu Trang', NULL, NULL),
(2, 'Menu chân trang', 'Chân Trang', '2019-12-30 17:00:00', '2019-12-30 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_07_18_075248_menu_group', 2),
(5, '2019_07_18_083635_menu', 3),
(6, '2019_07_23_014904_option', 4),
(13, '2019_07_03_163858_MenuGroup', 9),
(16, '2019_08_23_072121_image', 10),
(17, '2019_08_23_102310_post', 10),
(18, '2019_08_24_021642_product', 11),
(21, '2019_08_24_142846_category', 13),
(23, '2019_08_28_032251_contact', 15),
(24, '2019_08_28_032747_customer', 15),
(32, '2019_08_24_143122_post_category', 23),
(34, '2019_12_27_143814_pages', 24),
(35, '2019_12_30_101833_apply_recruitment', 25),
(36, '2020_01_15_102444_pages_meta', 26),
(37, '2020_01_19_123411_members', 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`id`, `type`, `content`, `created_at`, `updated_at`) VALUES
(1, 'setting', '{\"site_logo\":\"1579058526_logo.png\",\"site_favicon\":\"favicon1579057247-check2.png\",\"site_title\":\"HYMC\",\"site_phone\":\"0123.456.789\",\"site_description\":\"HYMC\",\"site_keyword\":\"HYMC\",\"site_google_analytics\":\"<!-- Global site tag (gtag.js) - Google Analytics -->\\r\\n<script async src=\\\"https:\\/\\/www.googletagmanager.com\\/gtag\\/js?id=UA-149371179-1\\\"><\\/script>\\r\\n<script>\\r\\n  window.dataLayer = window.dataLayer || [];\\r\\n  function gtag(){dataLayer.push(arguments);}\\r\\n  gtag(\'js\', new Date());\\r\\n\\r\\n  gtag(\'config\', \'UA-149371179-1\');\\r\\n<\\/script>\\r\\n\\r\\n<!-- Webmaster Tool -->\\r\\n<meta name=\\\"google-site-verification\\\" content=\\\"OiVmh0Ypou8NWVhZsgb4R_6xGSt9bjeAF0aScBMsAZQ\\\" \\/>\",\"copyright\":\"\\u00a9 GCO GROUP 2017. All rights reserved\",\"codemaps\":\"<iframe src=\\\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3725.7961690802213!2d105.75991191545927!3d20.96069919547301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313452dc57e0b28b%3A0xfc7b6f0b91c538f4!2zQuG6pXQgxJDhu5luZyBT4bqjbiBCRlQgLSBOaMOgIMSQ4bqldCBUaOG7lSBDxrAgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1574740401187!5m2!1svi!2s\\\" width=\\\"600\\\" height=\\\"450\\\" frameborder=\\\"0\\\" style=\\\"border:0;\\\" allowfullscreen=\\\"\\\"><\\/iframe>\",\"office\":{\"address\":\"T\\u1ea7ng 8, T\\u00f2a nh\\u00e0 TOYOTA Thanh Xu\\u00e2n, 315 Tr\\u01b0\\u1eddng Chinh, Thanh Xu\\u00e2n, H\\u00e0 N\\u1ed9i 1\",\"email\":\"info1@gco.vn\",\"phone\":\"024730988851\"},\"showroom\":{\"address\":\"T\\u1ea7ng 8, T\\u00f2a nh\\u00e0 TOYOTA Thanh Xu\\u00e2n, 315 Tr\\u01b0\\u1eddng Chinh, Thanh Xu\\u00e2n, H\\u00e0 N\\u1ed9i 2\",\"email\":\"info2@gco.vn\",\"phone\":\"024730988852\"},\"site_address\":\"T\\u1ea7ng 8, T\\u00f2a nh\\u00e0 TOYOTA Thanh Xu\\u00e2n, 315 Tr\\u01b0\\u1eddng Chinh, Thanh Xu\\u00e2n, H\\u00e0 N\\u1ed9i\",\"site_office\":null,\"site_company\":\"#\",\"site_email\":\"hymc@gmail.com\",\"facebook\":\"<iframe src=\\\"https:\\/\\/www.facebook.com\\/plugins\\/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbftland%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId\\\" width=\\\"340\\\" height=\\\"214\\\" style=\\\"border:none;overflow:hidden\\\" scrolling=\\\"no\\\" frameborder=\\\"0\\\" allowTransparency=\\\"true\\\" allow=\\\"encrypted-media\\\"><\\/iframe>\",\"index_google\":0,\"site_logo_footer\":\"1579057247-logo1.png\",\"time_open\":null,\"banner_product\":null,\"banner_post\":null,\"script\":null,\"site_phone_2\":null,\"site_note\":\"T\\u1ea1i GCO SOFTWARE, ch\\u00fang t\\u00f4i lu\\u00f4n lu\\u00f4n tr\\u00e2n tr\\u1ecdng nh\\u1eefng s\\u1ea3n ph\\u1ea9m m\\u00ecnh l\\u00e0m ra, t\\u00f4n tr\\u1ecdng s\\u1ea3n ph\\u1ea9m c\\u0169ng ch\\u00ednh l\\u00e0 t\\u00f4n tr\\u1ecdng ch\\u00ednh qu\\u00fd kh\\u00e1ch h\\u00e0ng.\",\"site_fax\":null,\"site_h1_note\":\"C\\u00f4ng ty b\\u1ea5t \\u0111\\u1ed9ng s\\u1ea3n BFT\"}', '2019-07-22 20:43:07', '2020-01-15 17:16:13'),
(2, 'other', '{\"email_receive\":\"nvtrong393@gmail.com\"}', NULL, '2020-01-15 03:01:43'),
(3, 'social', '{\"content\":{\"social\":{\"1577431205791\":{\"name\":\"Plane\",\"icon\":\"fa fa-paper-plane\",\"link\":\"#\"},\"1577431206371\":{\"name\":\"Twitter\",\"icon\":\"fa fa-twitter\",\"link\":\"#\"},\"1577431206907\":{\"name\":\"Facebook\",\"icon\":\"fa fa-facebook\",\"link\":\"#\"}}}}', NULL, '2020-01-15 16:49:10'),
(4, 'footer', '{\"en\":{\"sec_frist\":{\"col_first\":{\"title\":\"HIGH RISK INVESTMENT WARRNING\",\"content\":\"<p>FOREXDEMO does not offer Contracts for Difference to residents of certain jurisdictions including the USA, Iran and Canada. With regards to the FSB authorisation, FMKFX provides execution services and enters into principal to principal transactions with its clients on FMKFX&#39;s prices. These transactions are not traded on an exchange. CFDs with FMKFX are not regulated by the FAIS Act and intermediary services are not provided.<\\/p>\"},\"col_second\":{\"title\":\"DISCLAIMER\",\"content\":\"<p>FOREXDEMO does not offer Contracts for Difference to residents of certain jurisdictions including the USA, Iran and Canada. With regards to the FSB authorisation, FMKFX provides execution services and enters into principal to principal transactions with its clients on FMKFX&#39;s prices. These transactions are not traded on an exchange. CFDs with FMKFX are not regulated by the FAIS Act and intermediary services are not provided.<\\/p>\"},\"col_third\":{\"title\":\"REGIONAL RESTRICTIONS\",\"content\":\"<p>FOREXDEMO does not offer Contracts for Difference to residents of certain jurisdictions including the USA, Iran and Canada. With regards to the FSB authorisation, FMKFX provides execution services and enters into principal to principal transactions with its clients on FMKFX&#39;s prices. These transactions are not traded on an exchange. CFDs with FMKFX are not regulated by the FAIS Act and intermediary services are not provided.<\\/p>\"}},\"sec_second\":{\"title\":\"FULLY REGULATED\",\"value\":[{\"logo\":\"\\/hymc-code\\/uploads\\/images\\/logo2.png\",\"name\":\"Company 1\",\"content\":\"Slogan or company infomation\\/possition\"},{\"logo\":\"\\/hymc-code\\/uploads\\/images\\/logo3.png\",\"name\":\"Company 2\",\"content\":\"Slogan or company infomation\\/possition\"},{\"logo\":\"\\/hymc-code\\/uploads\\/images\\/logo4.png\",\"name\":\"Company 3\",\"content\":\"Slogan or company infomation\\/possition\"}]},\"sec_fourth\":{\"content_1\":{\"title\":\"LEGAL INFORMATION\",\"content\":\"<p>HYCM is the trading name of Henyep Capital Markets (UK) Limited, HYCM (Europe) Ltd, HYCM Limited and<br \\/>\\r\\nHenyep Capital Markets (DIFC) Limited for which the Henyep Capital Markets group is holding company and its assets are a controlling equity interest in them.<\\/p>\\r\\n\\r\\n<p>www.hycm.com is operated by HYCM Limited<\\/p>\\r\\n\\r\\n<p>Henyep&rsquo;s journey started since 1977<\\/p>\\r\\n\\r\\n<p>Henyep&rsquo;s journey started since 1977<\\/p>\"},\"content_2\":{\"title\":\"TRADING\",\"content\":\"<ul>\\r\\n\\t<li><a href=\\\"\\\">Account Types<\\/a><\\/li>\\r\\n\\t<li><a href=\\\"\\\">MetaTrade5<\\/a><\\/li>\\r\\n\\t<li><a href=\\\"\\\">Range of markets<\\/a><\\/li>\\r\\n<\\/ul>\"},\"content_3\":{\"title\":\"TRADING\",\"content\":\"<ul>\\r\\n\\t<li><a href=\\\"\\\">Account Types<\\/a><\\/li>\\r\\n\\t<li><a href=\\\"\\\">MetaTrade5<\\/a><\\/li>\\r\\n\\t<li><a href=\\\"\\\">Range of markets<\\/a><\\/li>\\r\\n<\\/ul>\"}}},\"vi\":{\"sec_frist\":{\"col_first\":{\"title\":null,\"content\":null},\"col_second\":{\"title\":null,\"content\":null},\"col_third\":{\"title\":null,\"content\":null}},\"sec_second\":{\"title\":null},\"sec_fourth\":{\"content_1\":{\"title\":null,\"content\":null},\"content_2\":{\"title\":null,\"content\":null},\"content_3\":{\"title\":null,\"content\":null}}},\"orther\":{\"link\":\"#\"}}', '2020-01-14 17:00:00', '2020-01-15 16:44:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_page` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pages`
--

INSERT INTO `pages` (`id`, `type`, `name_page`, `route`, `content`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Trang chủ Tiếng Anh', 'home.index', '{\"sec_first\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/top1.png\",\"title\":\"Trading with HYMC\",\"content\":\"<h3>Start trading today on the world&rsquo;s financial markets with confidence.<\\/h3>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Save time and money<\\/li>\\r\\n\\t<li>Connect with expert support<\\/li>\\r\\n\\t<li>Transparent tick history<\\/li>\\r\\n\\t<li>Access your fund today<\\/li>\\r\\n<\\/ul>\",\"open_cccount\":\"#\",\"learn_more\":\"#\"},\"sec_second\":{\"sec0\":{\"number\":\"900000\",\"symbol\":\"K+\",\"desc\":\"trading accounts opened\"},\"sec1\":{\"number\":\"10000\",\"symbol\":\"K+\",\"desc\":\"transactions in last 24 hours\"},\"sec2\":{\"number\":\"1.0\",\"symbol\":null,\"desc\":\"spread as low as 0.1 pips\"},\"sec3\":{\"number\":\"2500000\",\"symbol\":\"M\",\"desc\":\"\\u20ac2.5 Million coverage\"},\"sec4\":{\"number\":\"10\",\"symbol\":\"%\",\"desc\":\"0% fees on deposits & withdrawals\"}},\"sec_third\":{\"col_first\":{\"title\":\"Demo Account\",\"content\":\"<ul>\\r\\n\\t<li>Free to open<\\/li>\\r\\n\\t<li>Step-by step tutorials &amp; articles<\\/li>\\r\\n\\t<li>Online webinars &amp; local seminars<\\/li>\\r\\n\\t<li>Your own Account Manager<\\/li>\\r\\n<\\/ul>\",\"link\":\"#\"},\"col_second\":{\"title\":\"Live Account\",\"content\":\"<ul>\\r\\n\\t<li>Tight spreads<\\/li>\\r\\n\\t<li>Superfast trade execution<\\/li>\\r\\n\\t<li>Hi-tech forex trading tools<\\/li>\\r\\n\\t<li>Ultimate risk protection &amp; security<\\/li>\\r\\n<\\/ul>\",\"link\":\"#\"},\"col_third\":{\"title\":\"Partnership\",\"content\":\"<ul>\\r\\n\\t<li>No need to be an experienced trader<\\/li>\\r\\n\\t<li>Large number of strategies to follow<\\/li>\\r\\n\\t<li>Profit whenever Strategy Managers earn<\\/li>\\r\\n\\t<li>Full control of your Investment<\\/li>\\r\\n<\\/ul>\",\"link\":\"#\"}},\"sec_fourth\":{\"title_sec\":\"Trading Platfroms\",\"sort_desc\":\"FMKFX provides clients with a wide range of desktop, web and mobile <br>\\r\\ntrading platforms to choose from.\",\"title_line_2\":\"MetaTrader5\",\"image\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/platform.png\",\"content\":\"<h3>MetaTrader5<\\/h3>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Easy to use and fully customisable<\\/li>\\r\\n\\t<li>Superior execution speeds<\\/li>\\r\\n\\t<li>Trader&#39;s calculator, performance statistics, sentiment<\\/li>\\r\\n\\t<li>Charts trading, market order depth<\\/li>\\r\\n<\\/ul>\",\"link\":\"#\"},\"sec_fifth\":{\"title\":\"Professional Services\",\"value\":{\"1579078104562\":{\"icon\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/srv1.png\",\"title\":\"Enjoy Low Transaction Costs\"},\"1579078107212\":{\"icon\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/srv2.png\",\"title\":\"Rely Negative Balance Protection\"},\"1579078109050\":{\"icon\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/srv3.png\",\"title\":\"Visit Upgraded Help Center\"},\"1579078148204\":{\"icon\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/srv4.png\",\"title\":\"Get Fast Order Execution\"}}},\"sec_sixth\":{\"gallery\":[\"\\/hymc-code\\/uploads\\/images\\/themes\\/part1.png\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/part2.png\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/part3.png\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/part4.png\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/part5.png\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/part6.png\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/part7.png\"]}}', NULL, NULL, NULL, NULL, '2020-01-15 03:04:56', '2020-01-22 02:37:36'),
(2, 'home', 'Trang chủ Tiếng Việt', 'home.index', NULL, NULL, NULL, NULL, NULL, '2020-01-15 17:18:04', '2020-01-15 17:18:04'),
(3, 'tranding', 'Pages Trading', 'home.trading', '{\"sec_first\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/trading.gif\",\"title\":\"Trading\",\"content\":\"Experience the global markets by trading CFDs on a wide range of asset classes, including currency pairs, metals, cryptocurrencies, energies and indices. Benefit from reliable order execution and competitive spreads.\",\"links\":\"#\"},\"sec_tab_1\":{\"title\":\"Account types\",\"sort_desc\":\"HYMC provides its Clients with the following account types defined your requirements:\",\"content\":{\"1579444091366\":{\"title\":\"Demo <br> Account\",\"content\":\"<p class=\\\"text-p\\\"><span class=\\\"span-text\\\">Free to open <\\/span><\\/p>\\r\\n\\r\\n<p class=\\\"text-p\\\"><span class=\\\"span-text\\\">Step-by step tutorials &amp; articles <\\/span><\\/p>\\r\\n\\r\\n<p class=\\\"text-p\\\"><span class=\\\"span-text\\\">Online webinars &amp; local seminars <\\/span><\\/p>\\r\\n\\r\\n<p class=\\\"text-p\\\"><span class=\\\"span-text\\\">Your own Account Manager <\\/span><\\/p>\",\"title_links\":\"Open now\",\"links\":\"#\"},\"1579444219870\":{\"title\":\"Live <br>  Account\",\"content\":\"<p class=\\\"text-p\\\"><span class=\\\"span-text\\\">Tight spreads <\\/span><\\/p>\\r\\n\\r\\n<p class=\\\"text-p\\\"><span class=\\\"span-text\\\">Superfast trade execution <\\/span><\\/p>\\r\\n\\r\\n<p class=\\\"text-p\\\"><span class=\\\"span-text\\\">Superfast trade execution <\\/span><\\/p>\\r\\n\\r\\n<p class=\\\"text-p\\\"><span class=\\\"span-text\\\">Ultimate risk protection &amp; security <\\/span><\\/p>\",\"title_links\":\"Open now\",\"links\":\"#\"},\"1579444260831\":{\"title\":\"Partnership\",\"content\":\"<p class=\\\"text-p\\\"><span class=\\\"span-text\\\">No need to be an experienced trader <\\/span><\\/p>\\r\\n\\r\\n<p class=\\\"text-p\\\"><span class=\\\"span-text\\\">Large number of strategies to follow <\\/span><\\/p>\\r\\n\\r\\n<p class=\\\"text-p\\\"><span class=\\\"span-text\\\">Profit whenever Strategy Managers earn <\\/span><\\/p>\\r\\n\\r\\n<p class=\\\"text-p\\\"><span class=\\\"span-text\\\">Full control of your Investment <\\/span><\\/p>\",\"title_links\":\"Start following\",\"links\":\"#\"}}},\"sec_tab_2\":{\"title\":\"MetaTrader 5\",\"title_links_1\":\"Download\",\"links_1\":\"#\",\"title_links_2\":\"USE WEBTERMINAL\",\"links_2\":\"#\",\"content\":\"<p>Discovery the best platform to access exchange markets and Forex at currently. It is a great choice for any trader with 300+ instruments.<\\/p>\\r\\n\\r\\n<p style=\\\"text-align: center;\\\"><img alt=\\\"\\\" src=\\\"\\/hymc-code\\/uploads\\/images\\/rmap.gif\\\" style=\\\"width: 833px; height: 480px;\\\" \\/><\\/p>\",\"list_commit\":{\"1579445609873\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/icon_1.gif\",\"content\":\"Easy to use and <br>  fully customisable\"},\"1579445611895\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/icon_2.gif\",\"content\":\"Superior <br> execution speeds\"},\"1579445661068\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/icon_3.gif\",\"content\":\"Trader\'s calculator, <br> performance statistics, <br> sentiment\"},\"1579445681532\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/icon_4.gif\",\"content\":\"Charts trading, <br> market order depth\"},\"1579445690605\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/icon_5.gif\",\"content\":\"Trading 300+ <br> instruments\"}}},\"sec_tab_3\":{\"title\":\"Range of markets\",\"sort_desc\":\"HYMC carefully selected range of products gives you access to the most popular and liquid markets across the world for the best trading opportunities 24\\/7.\",\"list_content\":{\"1579446611110\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/iconTable_1.gif\",\"title\":\"Indices CFD\",\"content\":\"<p>Gain exposure to the world&rsquo;s largest equity markets through IC Markets&rsquo; offering of global Indices CFDs. With spreads from 0.5 points on 16 Indices, traders can take a wider view of equities markets whilst enjoying commission free and 24\\/5 trading across major markets<\\/p>\"},\"1579446664844\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/iconTable_2.gif\",\"title\":\"Indices CFD\",\"content\":\"<p>Gain exposure to the world&rsquo;s largest equity markets through IC Markets&rsquo; offering of global Indices CFDs. With spreads from 0.5 points on 16 Indices, traders can take a wider view of equities markets whilst enjoying commission free and 24\\/5 trading across major markets<\\/p>\"},\"1579446918655\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/iconTable_3.gif\",\"title\":\"Indices CFD\",\"content\":\"<p>Gain exposure to the world&rsquo;s largest equity markets through IC Markets&rsquo; offering of global Indices CFDs. With spreads from 0.5 points on 16 Indices, traders can take a wider view of equities markets whilst enjoying commission free and 24\\/5 trading across major markets<\\/p>\"},\"1579446927226\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/iconTable_4.gif\",\"title\":\"Indices CFD\",\"content\":\"<p>Gain exposure to the world&rsquo;s largest equity markets through IC Markets&rsquo; offering of global Indices CFDs. With spreads from 0.5 points on 16 Indices, traders can take a wider view of equities markets whilst enjoying commission free and 24\\/5 trading across major markets<\\/p>\"},\"1579446935989\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/iconTable_5.gif\",\"title\":\"Indices CFD\",\"content\":\"<p>Gain exposure to the world&rsquo;s largest equity markets through IC Markets&rsquo; offering of global Indices CFDs. With spreads from 0.5 points on 16 Indices, traders can take a wider view of equities markets whilst enjoying commission free and 24\\/5 trading across major markets<\\/p>\"},\"1579446943485\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/iconTable_6.gif\",\"title\":\"Indices CFD\",\"content\":\"<p>Gain exposure to the world&rsquo;s largest equity markets through IC Markets&rsquo; offering of global Indices CFDs. With spreads from 0.5 points on 16 Indices, traders can take a wider view of equities markets whilst enjoying commission free and 24\\/5 trading across major markets<\\/p>\"},\"1579446951178\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/iconTable_7.gif\",\"title\":\"Indices CFD\",\"content\":\"<p>Gain exposure to the world&rsquo;s largest equity markets through IC Markets&rsquo; offering of global Indices CFDs. With spreads from 0.5 points on 16 Indices, traders can take a wider view of equities markets whilst enjoying commission free and 24\\/5 trading across major markets<\\/p>\"},\"1579446959874\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/iconTable_8.gif\",\"title\":\"Indices CFD\",\"content\":\"<p>Gain exposure to the world&rsquo;s largest equity markets through IC Markets&rsquo; offering of global Indices CFDs. With spreads from 0.5 points on 16 Indices, traders can take a wider view of equities markets whilst enjoying commission free and 24\\/5 trading across major markets<\\/p>\"}}}}', NULL, NULL, NULL, NULL, '2020-01-19 14:02:15', '2020-01-19 15:29:50'),
(4, 'about', 'About', 'home.about', '{\"sec_first\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/about_us.gif\",\"title\":\"About us\",\"content\":\"<p>HYMC LTD. is a licensed and regulated broker. Located in a stable and secure marketplace, HYMC LTD. is an excellent choice to take part in global trading. Opening a live trading account with us is a matter of minutes, and you will get immediate access to real markets.<\\/p>\",\"links\":\"#\"},\"sec_tab_1\":{\"title\":\"Learn more about us\",\"content\":\"<h3>Inception<\\/h3>\\r\\n\\r\\n<p>HYMC LTD. is a licensed and regulated broker. Located in a stable and secure marketplace, HYMC LTD. is an excellent choice to take part in global trading. Opening a live trading account with us is a matter of minutes, and you will get immediate access to real markets.<\\/p>\\r\\n\\r\\n<h3>Leadership<\\/h3>\\r\\n\\r\\n<p>In the past few years, HYMC LTD. has developed at an impressive rate, and is recognized today as an industry leader. By December 2018, our clients&#39; monthly trading volume reached 348.4 billion USD and our active traders around the world surpassed 50,342. Currently HYMC LTD. offers a wide range of financial instruments, including currency pairs, metals, cryptocurrencies, energies, and indices.<\\/p>\\r\\n\\r\\n<h3>Growth<\\/h3>\\r\\n\\r\\n<p>Continuous development, guided primarily by the systematic improvement of trading conditions, is the key to the HYMC LTD. &#39;s long-term success. We run an extremely customer-centric business, therefore, improving the quality of our services is our top priority.<\\/p>\\r\\n\\r\\n<h3>Customer Support<\\/h3>\\r\\n\\r\\n<p>Our customers enjoy the highest level of customer service through our personal and truly international approach. Our official website has been localized into 15 languages and we offer client support in 13 languages, including 24\\/5 support in 11 languages and 24\\/7 support in English and Chinese. We give traders exactly what they seek: constant improvement, new opportunities to explore the financial markets, and the opportunity to work with a recognized leader in the financial industry.<\\/p>\"},\"sec_tab_2\":{\"title\":\"Learn more about us\",\"sort_desc\":\"HYMC LTD.is a limited liability company regulated as a Securities Dealer by the Seychelles Financial Services Authority of Seychelles (\\u201cFSA\\u201d) with license number SD013 to carry out certain categories of financial investment business as permitted under the Seychelles Securities Act 2007.\",\"list_commit\":{\"1579507109762\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/item1.gif\",\"title\":\"Great customer service\",\"content\":\"We hire highly experienced professionals that have shown a history of superior customer service skills and expertise in the financial services industry. Sales and customer service is staffed 24 hours a day, 5 days a week.\"},\"1579507272160\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/item2.gif\",\"title\":\"Regulatory oversight\",\"content\":\"Whether you are a private, professional or institutional investor, GULF BROKERS LTD, as a regulated and authorized broker by Financial Services Authority, offers you the fast execution and high-security regulations with the innovative\"},\"1579507309248\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/item3.gif\",\"title\":\"Fast order execution\",\"content\":\"We continue investing in our technology to provide you with the fastest execution of your orders.\"},\"1579507322280\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/item4.gif\",\"title\":\"Low transaction costs\",\"content\":\"We value our customer\\u2019s trust and remain committed to providing the utmost levels of security. We take every precautionary measure to safeguard our customer\\u2019s information, financial assets, and trading environment.\"},\"1579507335090\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/item5.gif\",\"title\":\"Indemnity Insurance\",\"content\":\"We have Professional Indemnity Insurance in place which covers claims arising as a direct result of any act of negligence, error or omission in the professional conduct of the business activities related to the Seychelles Securities Dealer licensed activities.\"}}},\"sec_tab_3\":{\"title\":\"Regulations and licences\",\"content\":\"<p>HYMC LTD. is a limited liability company regulated as a Securities Dealer by the Seychelles Financial Services Authority of Seychelles (&ldquo;FSA&rdquo;) with license number SD013 to carry out certain categories of financial investment business as permitted under the Seychelles Securities Act 2007.<br \\/>\\r\\nTrading leverage products carry high levels of risk and may not be suitable for all investors. Past performance of an investment is not a guide to its performance in the future.<\\/p>\\r\\n\\r\\n<p>Investments or investment income can fluctuate. You may not necessarily get the amount you invested in the beginning as a return.<br \\/>\\r\\nAll opinions, news, analysis, prices or other information contained on this website are provided as general market commentary and does not constitute investment advice, nor a solicitation or recommendation to buy or sell any financial instruments or other financial products or services.<\\/p>\"},\"sec_tab_4\":{\"title\":\"Deposits and withdrawals\",\"content\":\"Fast and hassle-free deposit and withdrawal transaction with HYMC\",\"icon_1\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/time.gif\",\"title\":\"Fast\",\"content\":\"Transaction speed is almost instant\"},\"icon_2\":{\"image\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/icon.gif\",\"title\":\"Hassle-free\",\"content\":\"Just a few steps to approach your money\"},\"gallery\":[\"\\/hymc-code\\/uploads\\/images\\/themes\\/brand_icon1.gif\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/brand_icon4.gif\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/brand_icon5.gif\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/brand_icon6.gif\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/brand_icon7.gif\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/brand_icon3.gif\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/brand_icon2.gif\",\"\\/hymc-code\\/uploads\\/images\\/themes\\/d_8.gif\"]},\"sec_tab_5\":{\"logo\":\"\\/hymc-code\\/uploads\\/images\\/themes\\/logo_5.gif\",\"email\":\"support@email.com\",\"phone_1\":\"+84.123.456.789\",\"phone_2\":\"1900 8888\"}}', NULL, NULL, NULL, NULL, '2020-01-20 01:39:58', '2020-01-20 08:26:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_name`, `name`, `phone`, `email`, `image`, `level`, `google_id`, `facebook_id`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'gco_admin', 'Administrator', '0987654321', 'gco_admin@gmail.com', 'uploads/user/1566569548-user.png', 1, NULL, NULL, '$2y$10$/Clw.iarA8EAFKL6z1R/XOVcwZMlMHaW8NdSS2d1SqrzwcWZ0TX9m', 1, 'yy6umh8bBukjcxd3NC0dBcu2KeoausqQUEGkznOk83DtLeXiwSt0JE7YcfWP', '2019-07-15 18:13:55', '2020-01-02 06:50:27');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menugroup`
--
ALTER TABLE `menugroup`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `menugroup`
--
ALTER TABLE `menugroup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
