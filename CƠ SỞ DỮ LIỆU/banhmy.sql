-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 25, 2020 lúc 10:51 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhmy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(10) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `ten`, `mat_khau`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table_banhmy`
--

CREATE TABLE `table_banhmy` (
  `id` int(10) NOT NULL,
  `thuc_don` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(20) NOT NULL,
  `hinh` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `table_banhmy`
--

INSERT INTO `table_banhmy` (`id`, `thuc_don`, `ten`, `gia`, `hinh`, `mo_ta`) VALUES
(14, '0', 'Red sugar flower', 2, 'banh-mi.jpg', '<p><strong>B&aacute;nh m&igrave; &ndash; thăng trầm c&ugrave;ng S&agrave;i G&ograve;n xưa</strong></p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p>Năm 1859, chiếc b&aacute;nh l&agrave;m từ bột l&uacute;a m&igrave; của phương T&acirc;y đ&atilde; theo ch&acirc;n qu&acirc;n đội Ph&aacute;p tr&agrave;n v&agrave;o th&agrave;nh Gia Định. B&aacute;nh m&igrave; ng&agrave;y ấy vẫn c&ograve;n &ldquo;T&acirc;y&rdquo; lắm, đặc ruột v&agrave; vỏ chưa gi&ograve;n như b&acirc;y giờ. M&atilde;i đến khi ch&iacute;nh quyền quyết định cung cấp khẩu phần ăn ti&ecirc;u chuẩn bao gồm b&aacute;nh m&igrave; v&agrave; sữa tới c&aacute;c trường tiểu học, b&aacute;nh m&igrave; Việt Nam mới c&oacute; bước thay đổi đầu ti&ecirc;n so với c&ocirc;ng thức nguy&ecirc;n mẫu. B&aacute;nh baguette &ndash; mẹ đẻ của b&aacute;nh m&igrave; &ndash; thường được nướng bằng củi v&agrave; mỗi mẻ chỉ c&oacute; khoảng 7-10 c&aacute;i, kh&ocirc;ng đủ để cung cấp số lượng lớn cho c&aacute;c trường học. V&agrave; thế l&agrave; năm 1970, những l&ograve; nướng bằng gạch cao ngất đ&atilde; được nhập về từ Nhật, cho ph&eacute;p nướng một l&uacute;c h&agrave;ng chục chiếc b&aacute;nh m&igrave;. Đ&acirc;y cũng l&agrave; loại l&ograve; m&agrave; hiện nay người ta vẫn thường d&ugrave;ng để nướng b&aacute;nh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://vtcorp.vn/data/mckfinder/hanhvtcorp/images/2016/09/30/3KnNEVwVoNlBgwv.png\" /></p>\r\n\r\n<p><em>&nbsp;L&ograve; củi nướng b&aacute;nh m&igrave;</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kh&aacute;c với vỉ nướng bằng củi, than, l&ograve; gạch l&agrave; loại l&ograve; đ&oacute;ng k&iacute;n, cho ph&eacute;p giữ lại hơi nước khi nướng b&aacute;nh. Ở nhiệt độ cực cao v&agrave; hơi nước cực nhiều, chiếc b&aacute;nh m&igrave; baguette sẽ trở n&ecirc;n rỗng ruột hơn, ruột b&ocirc;ng xốp trong khi vỏ ngo&agrave;i gi&ograve;n rụm. Đ&acirc;y cũng ch&iacute;nh l&agrave; đặc điểm tạo n&ecirc;n bản sắc ri&ecirc;ng của b&aacute;nh m&igrave; Việt Nam so với b&aacute;nh T&acirc;y. Người S&agrave;i G&ograve;n rất chuộng loại b&aacute;nh n&agrave;y v&igrave; n&oacute; kh&ocirc;ng qu&aacute; &ldquo;ngồn ngộn&rdquo; như baguette kiểu Ph&aacute;p. S&agrave;i G&ograve;n xưa kh&ocirc;ng chỉ c&oacute; xe con ong hay &aacute;o d&agrave;i cổ thuyền, m&agrave; c&ograve;n l&agrave; h&igrave;nh ảnh b&aacute;nh m&igrave; được b&agrave;y b&aacute;n khắp c&aacute;c con phố: Tr&ecirc;n xe đạp, xe đẩy, trong những th&uacute;ng nia giản dị đến qu&aacute;n ăn b&igrave;nh d&acirc;n.</p>\r\n'),
(15, '0', 'Bánh mỳ đen bơ tỏi', 1, '388.png', '<h2>&nbsp;</h2>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>M&oacute;n n&agrave;y cũng hơi hơi healthy ?, v&igrave; kết m&oacute;n b&aacute;nh mỳ bơ tỏi của Gival n&ecirc;n mới biến tấu ra m&oacute;n n&agrave;y. Cảm nhận miếng b&aacute;nh gi&ograve;n tan quện vị đậm đậm bơ tỏi v&agrave; v&igrave; b&aacute;nh mỳ đen n&ecirc;n bonus th&ecirc;m t&yacute; nhằng nhặng nhưng rất nh&eacute;. Nh&igrave;n chung l&agrave; ngon, một kiểu snack cho bữa phụ</p>\r\n\r\n<p><a href=\"https://cookpad.com/vn/cong-thuc/12905049-banh-m%E1%BB%B3-den-b%C6%A1-t%E1%BB%8Fi\"><img alt=\"Bánh mỳ đen bơ tỏi\" src=\"https://img-global.cpcdn.com/recipes/e8dafa5f8811767f/136x191cq50/banh-m%E1%BB%B3-den-b%C6%A1-t%E1%BB%8Fi-recipe-main-photo.jpg\" srcset=\"https://img-global.cpcdn.com/recipes/e8dafa5f8811767f/272x382cq50/banh-mỳ-den-bơ-tỏi-recipe-main-photo.jpg 2x\" width=\"136\" /></a></p>\r\n'),
(16, '0', 'Bánh mỳ hoa cúc bằng nồi nướng thuỷ tinh', 2, '2.png', '<h2>&nbsp;</h2>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>Lần đầu ti&ecirc;n chinh phục em hoa c&uacute;c đỏng đảnh.</p>\r\n\r\n<p><img alt=\"Bánh mỳ hoa cúc bằng nồi nướng thuỷ tinh\" src=\"https://img-global.cpcdn.com/recipes/c264d49c779acb06/136x191cq50/banh-m%E1%BB%B3-hoa-cuc-b%E1%BA%B1ng-n%E1%BB%93i-n%C6%B0%E1%BB%9Bng-thu%E1%BB%B7-tinh-recipe-main-photo.jpg\" srcset=\"https://img-global.cpcdn.com/recipes/c264d49c779acb06/272x382cq50/banh-mỳ-hoa-cuc-bằng-nồi-nướng-thuỷ-tinh-recipe-main-photo.jpg 2x\" width=\"136\" /></p>\r\n'),
(17, '0', 'Bánh mỳ Việt Nam bằng nồi thuỷ tinh', 3, '2.png', '<h2>&nbsp;</h2>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>Do kh&ocirc;ng biết tạo h&igrave;nh n&ecirc;n em cứ cuộn đại v&igrave; thế n&ecirc;n h&igrave;nh thức n&oacute; hơi xấu 1 t&iacute; ạ</p>\r\n\r\n<p><img alt=\"Bánh mỳ Việt Nam bằng nồi thuỷ tinh\" src=\"https://img-global.cpcdn.com/recipes/41696d3c0e7ccae3/136x191cq50/banh-m%E1%BB%B3-vi%E1%BB%87t-nam-b%E1%BA%B1ng-n%E1%BB%93i-thu%E1%BB%B7-tinh-recipe-main-photo.jpg\" srcset=\"https://img-global.cpcdn.com/recipes/41696d3c0e7ccae3/272x382cq50/banh-mỳ-việt-nam-bằng-nồi-thuỷ-tinh-recipe-main-photo.jpg 2x\" width=\"136\" /></p>\r\n'),
(18, '0', 'Pizza làm từ bánh mỳ', 5, '388.png', '<h2>&nbsp;</h2>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>Khi bạn muốn ăn pizza m&agrave; kh&ocirc;ng c&oacute; thời gian, k kịp mua đế b&aacute;nh hoặc tiện lợi l&agrave;m cho bữa s&aacute;ng nhanh gọn.</p>\r\n\r\n<p><img alt=\"Pizza làm từ bánh mỳ\" src=\"https://img-global.cpcdn.com/recipes/0ea39b19eb9facb9/136x191cq50/pizza-lam-t%E1%BB%AB-banh-m%E1%BB%B3-recipe-main-photo.jpg\" srcset=\"https://img-global.cpcdn.com/recipes/0ea39b19eb9facb9/272x382cq50/pizza-lam-từ-banh-mỳ-recipe-main-photo.jpg 2x\" width=\"136\" /></p>\r\n'),
(19, '0', 'Bánh mỳ bơ ngọt ', 2, '8.jpg', '<h2>&nbsp;</h2>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>Lần đầu l&agrave;m kh&ocirc;ng biết tạo h&igrave;nh n&ecirc;n m&igrave;nh vo tr&ograve;n như b&aacute;nh bao lu&ocirc;n cho nhanh.</p>\r\n\r\n<p><img alt=\"Bánh mỳ bơ ngọt (nướng bằng nồi nướng thuỷ tinh)\" src=\"https://img-global.cpcdn.com/recipes/85f99a5db016c181/136x191cq50/banh-m%E1%BB%B3-b%C6%A1-ng%E1%BB%8Dt-n%C6%B0%E1%BB%9Bng-b%E1%BA%B1ng-n%E1%BB%93i-n%C6%B0%E1%BB%9Bng-thu%E1%BB%B7-tinh-recipe-main-photo.jpg\" srcset=\"https://img-global.cpcdn.com/recipes/85f99a5db016c181/272x382cq50/banh-mỳ-bơ-ngọt-nướng-bằng-nồi-nướng-thuỷ-tinh-recipe-main-photo.jpg 2x\" width=\"136\" /></p>\r\n'),
(20, '0', 'Bánh mỳ bơ tỏi', 2, '7.png', '<h2>Tự nhi&ecirc;n th&egrave;m c&aacute;i b&aacute;nh mỳ thơm bơ n&ecirc;n m&igrave;nh l&agrave;m lu&ocirc;n! B&aacute;nh thơm ngon đặc biệt do c&ocirc;ng thức đặc biệt ủ bột chua từ h&ocirc;m trước để h&ocirc;m sau ra kết cấu b&aacute;nh mềm, ngon!</h2>\r\n\r\n<p><img alt=\"Bánh mỳ bơ tỏi\" src=\"https://img-global.cpcdn.com/recipes/81cb9f109a4037f2/136x191cq50/banh-m%E1%BB%B3-b%C6%A1-t%E1%BB%8Fi-recipe-main-photo.jpg\" srcset=\"https://img-global.cpcdn.com/recipes/81cb9f109a4037f2/272x382cq50/banh-mỳ-bơ-tỏi-recipe-main-photo.jpg 2x\" width=\"136\" /></p>\r\n'),
(21, '2', 'Cà phê Dalgona', 2, '1-4.jpg', '<h2>&nbsp;</h2>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>Lại l&agrave; tại c&ocirc; Vy nhe =)) L&agrave;m xong th&igrave; cảm gi&aacute;c m&oacute;n n&agrave;y v&ocirc; c&ugrave;ng b&igrave;nh thường, vị th&igrave; giống c&agrave; ph&ecirc; sữa hay bạc xỉu g&igrave; th&ocirc;i nhưng lại theo một h&igrave;nh thức v&agrave; c&aacute;ch trang tr&iacute; kh&aacute;c. Chắc c&oacute; lẽ mấu chốt ở m&oacute;n n&agrave;y l&agrave; m&igrave;nh phải sử dụng c&agrave; ph&ecirc; v&agrave; sữa tươi ngon như b&ecirc;n Hờn Quốc =)) (I think so). D&ugrave; sao th&igrave; ch...</p>\r\n\r\n<p><img alt=\"Cà phê Dalgona\" src=\"https://img-global.cpcdn.com/recipes/76baf8b2ecf5041d/136x191cq50/ca-phe-dalgona-recipe-main-photo.jpg\" srcset=\"https://img-global.cpcdn.com/recipes/76baf8b2ecf5041d/272x382cq50/ca-phe-dalgona-recipe-main-photo.jpg 2x\" width=\"136\" /></p>\r\n'),
(22, '2', 'Cafe Dagonal', 2, '1-5.jpg', '<h2>&nbsp;</h2>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>M&oacute;n n&agrave;y đang hot n&ecirc;n l&agrave;m thử uống nha cả nh&agrave;! Nếu uống được &iacute;t cafe th&igrave; lớp dưới ta l&agrave;m 100% sữa tươi, c&ograve;n muốn đậm vị cafe th&igrave; lớp dưới c&oacute; thể thay bằng cafe sữa tươi nh&eacute;! #BepVang</p>\r\n\r\n<p><img alt=\"Cafe Dagonal\" src=\"https://img-global.cpcdn.com/recipes/85f41621017042a7/136x191cq50/cafe-dagonal-recipe-main-photo.jpg\" srcset=\"https://img-global.cpcdn.com/recipes/85f41621017042a7/272x382cq50/cafe-dagonal-recipe-main-photo.jpg 2x\" width=\"136\" /></p>\r\n'),
(23, '2', 'Coffee latte bọt (món kết hợp)', 2, '1-6.jpg', '<h2>&nbsp;</h2>\r\n\r\n<p>Đang m&ugrave;a dịch r&atilde;nh rỗi + với mấy đứa ch&aacute;u đ&ograve;i l&agrave;m cho tụi n&oacute; v&agrave; cũng sẵn đủ nguy&ecirc;n liệu n&ecirc;n l&agrave;m chia sẻ lu&ocirc;n cho mọi người. Edit th&ecirc;m l&agrave; d&ugrave;ng cf pha phin loại ngon sẽ cho vị tốt hơn l&agrave; loại g&oacute;i, nhưng v&igrave; hết cf n&ecirc;n h&ocirc;m nay sẽ l&agrave;m cf g&oacute;i.</p>\r\n\r\n<p><img alt=\"Coffee latte bọt (món kết hợp)\" src=\"https://img-global.cpcdn.com/recipes/afbd0b570c8b74e6/136x191cq50/coffee-latte-b%E1%BB%8Dt-mon-k%E1%BA%BFt-h%E1%BB%A3p-recipe-main-photo.jpg\" srcset=\"https://img-global.cpcdn.com/recipes/afbd0b570c8b74e6/272x382cq50/coffee-latte-bọt-mon-kết-hợp-recipe-main-photo.jpg 2x\" width=\"136\" /></p>\r\n'),
(24, '0', 'Cafe Bọt Biển Dalgona Hàn Quốc', 2, '1-5.jpg', '<h2>&nbsp;</h2>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>#bepvang trend đ&atilde; l&acirc;u h&ocirc;m nay mới l&agrave;m được th&agrave;nh c&ocirc;ng &aacute; ?. V&igrave; h&ocirc;m nay c&oacute; dịp đi si&ecirc;u thị đi mua c&acirc;y đ&aacute;nh trứng thấy xịn hẳn l&ecirc;n.</p>\r\n\r\n<p><img alt=\"Cafe Bọt Biển Dalgona Hàn Quốc\" src=\"https://img-global.cpcdn.com/recipes/82a55c3025c5d559/136x191cq50/cafe-b%E1%BB%8Dt-bi%E1%BB%83n-dalgona-han-qu%E1%BB%91c-recipe-main-photo.jpg\" srcset=\"https://img-global.cpcdn.com/recipes/82a55c3025c5d559/272x382cq50/cafe-bọt-biển-dalgona-han-quốc-recipe-main-photo.jpg 2x\" width=\"136\" /></p>\r\n');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `table_banhmy`
--
ALTER TABLE `table_banhmy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `table_banhmy`
--
ALTER TABLE `table_banhmy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
