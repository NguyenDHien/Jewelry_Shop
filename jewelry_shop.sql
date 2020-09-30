-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 30, 2020 lúc 07:38 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `jewelry_shop`
--
CREATE DATABASE IF NOT EXISTS `jewelry_shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `jewelry_shop`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: OK; 1: hide',
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `slug`, `image`, `parent_id`, `priority`, `created_at`, `updated_at`) VALUES
(30, 'Vòng cổ', 0, 'vong-co', 'vong-co.png', 0, 1, '2020-09-09 12:35:33', '2020-09-20 01:04:19'),
(31, 'Nhẫn', 0, 'nhan', 'nhan.png', 0, 1, '2020-09-09 12:36:25', '2020-09-20 01:04:27'),
(32, 'Khuyên tai', 0, 'khuyen-tai', 'khuyen-tai.png', 0, 1, '2020-09-09 12:36:42', '2020-09-20 01:04:43'),
(33, 'Vòng tay', 0, 'vong-tay', 'vong_tay_1.png', 0, 1, '2020-09-09 12:36:55', '2020-09-20 00:36:38'),
(35, 'Kim cương', 0, 'kim-cuong', 'kim-cuong.png', 0, 1, '2020-09-16 02:32:26', '2020-09-20 01:04:53'),
(37, 'Vòng chân', 0, 'vong-chan', '', 0, 1, '2020-09-29 02:07:57', '2020-09-29 02:07:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hex_color` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id`, `name`, `hex_color`, `created_at`, `updated_at`) VALUES
(15, 'red', '#ff0000', '2020-09-24 10:39:40', '2020-09-24 10:39:40'),
(16, 'blue', '#1753de', '2020-09-24 10:39:49', '2020-09-24 10:39:49'),
(17, 'gold', '#d4af37', '2020-09-24 21:04:54', '2020-09-24 21:04:54'),
(18, 'silver', '#d3d3d3', '2020-09-24 21:05:52', '2020-09-24 21:05:52'),
(19, 'white', '#ffffff', '2020-09-24 21:06:15', '2020-09-24 21:06:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_detail_id` int(11) DEFAULT 0,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0: chưa gửi; 1: đã gửi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT 0,
  `total` float NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'Status xu li order',
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: cod, 1: ck',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `discount` float DEFAULT 0 COMMENT '%',
  `price` bigint(20) NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `sold_count` bigint(11) DEFAULT 0,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `color_id` int(11) NOT NULL,
  `sex` int(11) NOT NULL DEFAULT 0 COMMENT '0: Nam, 1: Nữ',
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_code`, `name`, `discount`, `price`, `status`, `sold_count`, `description`, `image`, `color_id`, `sex`, `category_id`, `created_at`, `updated_at`) VALUES
(27, 'n-1', 'Nhẫn 1', 0, 290000, 0, 2, NULL, 'nhan_1.jpg', 16, 0, 31, '2020-09-24 10:44:19', '2020-09-29 00:25:26'),
(28, 'v-2', 'Vòng cổ 1', 0, 35000, 0, 6, NULL, 'vong_co_1.jpg', 15, 1, 30, '2020-09-24 10:56:49', '2020-09-29 00:34:22'),
(29, 'vc-2', 'Vòng cổ 2', 0, 300000, 0, 1, NULL, 'vong_co_2.jpg', 18, 1, 30, '2020-09-24 21:07:38', '2020-09-29 00:25:26'),
(30, 'vc-3', 'Vòng cổ 3', 0, 150000, 0, 0, NULL, 'vong_co_3.jpg', 18, 0, 30, '2020-09-24 21:08:08', '2020-09-24 21:08:08'),
(31, 'vt-1', 'Vòng tay 1', 0, 120000, 0, 3, NULL, 'vong_tay_1.png', 19, 0, 33, '2020-09-24 21:08:44', '2020-09-29 00:32:25'),
(32, 'n-2', 'Nhẫn 2', 5, 300000, 0, 0, NULL, '2_119a31f2-2054-4483-93a3-841310e6bdfb_grande.jpg', 15, 0, 31, '2020-09-24 21:09:27', '2020-09-24 21:09:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_detail`
--

DROP TABLE IF EXISTS `product_detail`;
CREATE TABLE `product_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: ok, 1: hide, 2: out of stock',
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_detail`
--

INSERT INTO `product_detail` (`id`, `product_id`, `size_id`, `status`, `image`, `created_at`, `updated_at`) VALUES
(14, 27, 4, 0, '5_a774d2ff-edcb-44b7-99e6-4b4b11d6531e_grande.jpg', '2020-09-24 10:44:47', '2020-09-24 21:25:48'),
(15, 28, 18, 0, '', '2020-09-24 21:27:06', '2020-09-24 21:27:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `score` float NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`id`, `user_id`, `product_id`, `score`, `name`, `title`, `content`, `created_at`, `updated_at`) VALUES
(13, 13, 27, 1, 'Admin', 'Tệ', 'Porro quisquam est, qui dolorem ipsum sitet dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora labore et dolore eut aliquam quaeratPorro quisquam est, qui dolorem ipsum sitet dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora labore et dolore eut aliquam quaeratPorro quisquam est, qui dolorem ipsum sitet dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora labore et dolore eut aliquam quaeratPorro quisquam est, qui dolorem ipsum sitet dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora labore et dolore eut aliquam quaeratPorro quisquam est, qui dolorem ipsum sitet dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora labore et dolore eut aliquam quaerat', '2020-09-28 01:59:52', '2020-09-28 02:36:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`permissions`)),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(0, 'User', '[\"account\"]', '2020-09-23 04:09:20', '2020-09-23 14:36:39'),
(11, 'Admin', '[\"account\",\"admin.admin\",\"admin.cate\",\"admin.cate.create\",\"admin.cate.delete\",\"admin.cate.edit\",\"admin.color\",\"admin.color.create\",\"admin.color.delete\",\"admin.color.edit\",\"admin.error\",\"admin.image\",\"admin.image.create\",\"admin.image.delete\",\"admin.image.edit\",\"admin.order\",\"admin.order.create\",\"admin.order.delete\",\"admin.order.edit\",\"admin.product\",\"admin.product.create\",\"admin.product.delete\",\"admin.product.edit\",\"admin.product_detail\",\"admin.product_detail.create\",\"admin.product_detail.delete\",\"admin.product_detail.edit\",\"admin.role\",\"admin.role.create\",\"admin.role.delete\",\"admin.role.edit\",\"admin.size\",\"admin.size.create\",\"admin.size.delete\",\"admin.size.edit\",\"admin.user\",\"admin.user.create\",\"admin.user.delete\",\"admin.user.edit\"]', '2020-09-23 04:11:03', '2020-09-23 04:11:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `param` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Số đo',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `name`, `param`, `created_at`, `updated_at`) VALUES
(4, '6', '14.7 mm', '2020-09-05 12:14:39', '2020-09-24 21:21:08'),
(6, '7', '15 mm', '2020-09-14 23:34:25', '2020-09-24 21:21:20'),
(7, '8', '15.5 mm', '2020-09-14 23:34:33', '2020-09-24 21:21:31'),
(8, '9', '16 mm', '2020-09-24 21:21:51', '2020-09-24 21:21:51'),
(9, '10', '16.5 mm', '2020-09-24 21:21:59', '2020-09-24 21:21:59'),
(10, '11', '16.7 mm', '2020-09-24 21:22:07', '2020-09-24 21:22:07'),
(11, '12', '17 mm', '2020-09-24 21:22:21', '2020-09-24 21:22:21'),
(12, '13', '17.5 mm', '2020-09-24 21:22:37', '2020-09-24 21:22:37'),
(13, '14', '17.7 mm', '2020-09-24 21:22:54', '2020-09-24 21:22:54'),
(14, '15', '18 mm', '2020-09-24 21:23:01', '2020-09-24 21:23:01'),
(15, '16', '18.5 mm', '2020-09-24 21:23:10', '2020-09-24 21:23:10'),
(16, '17', '18.7 mm', '2020-09-24 21:23:18', '2020-09-24 21:23:18'),
(17, '18', '18.8 mm', '2020-09-24 21:23:41', '2020-09-24 21:23:41'),
(18, '19', '19mm', '2020-09-24 21:23:46', '2020-09-24 21:23:46'),
(19, '20', '19.2 mm', '2020-09-24 21:23:56', '2020-09-24 21:23:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT 'Ban: 0; Ok: 1; Warning: 2',
  `remember_token` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `phone`, `status`, `remember_token`, `last_login`, `created_at`, `updated_at`) VALUES
(13, 'Admin', 'admin@gmail.com', '$2y$10$iHjRdUqoPD5h6ubxX0NwVOtmUThlyNgfiqePGkqmr.Buq5BOAptcu', '99 Nguyễn Chí Thanh, Quận Đống Đa, Hà Nội', '+84832210099', 1, 'OOTH9Siu8MbjQ3JrKPdgOdyCJnGNeJRJu49UgU75seQEIdPlPT4LqZblMtoy', '2020-09-20 16:32:53', '2020-09-20 02:32:53', '2020-09-24 22:05:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(13, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wish_list`
--

DROP TABLE IF EXISTS `wish_list`;
CREATE TABLE `wish_list` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `wish_list`
--

INSERT INTO `wish_list` (`id`, `product_id`, `user_id`) VALUES
(2, 27, 13),
(3, 28, 13),
(4, 29, 13);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `color_id` (`color_id`);

--
-- Chỉ mục cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`name`),
  ADD KEY `name` (`name`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`,`phone`);

--
-- Chỉ mục cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Chỉ mục cho bảng `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`);

--
-- Các ràng buộc cho bảng `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`),
  ADD CONSTRAINT `product_detail_ibfk_4` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `user_roles_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `wish_list_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `wish_list_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
