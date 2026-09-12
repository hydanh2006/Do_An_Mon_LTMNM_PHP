CREATE DATABASE IF NOT EXISTS `csdl_noi_that` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `csdl_noi_that`;

-- Tạo bảng Danh mục
CREATE TABLE IF NOT EXISTS `danh_muc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_danh_muc` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `danh_muc` (`id`, `ten_danh_muc`) VALUES
(1, 'Phòng khách'), (2, 'Phòng ngủ'), (3, 'Phòng bếp');

-- Tạo bảng Sản phẩm
CREATE TABLE IF NOT EXISTS `san_pham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_danh_muc` int(11) NOT NULL,
  `ten_san_pham` varchar(200) NOT NULL,
  `gia_ban` decimal(10,2) NOT NULL,
  `chat_lieu` varchar(100) DEFAULT NULL,
  `hinh_anh` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_danh_muc`) REFERENCES `danh_muc`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `san_pham` (`id_danh_muc`, `ten_san_pham`, `gia_ban`, `chat_lieu`, `hinh_anh`) VALUES
(1, 'Sofa Da Cao Cấp', 15000000.00, 'Da thật, khung sồi', 'sofa.jpg'),
(2, 'Giường Ngủ Hiện Đại', 8500000.00, 'Gỗ MDF chống ẩm', 'giuong.jpg');