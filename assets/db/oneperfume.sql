-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2024 at 03:32 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oneperfume`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tell` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `tong` varchar(50) NOT NULL,
  `paymethod` tinyint NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` int DEFAULT NULL COMMENT 'Số lượng',
  `status` tinyint(1) DEFAULT '0' COMMENT 'trạng thái'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `name`, `address`, `tell`, `email`, `note`, `tong`, `paymethod`, `created`, `total`, `status`) VALUES
(24, 'sdf', 'sdfsadfsadf', '0321618985', 'thien@gmail.com', '', '3975000', 0, '2024-04-16 23:51:59', 5, 1),
(25, 'sdf', 'sdfsadfsadf', '0321618985', 'thien@gmail.com', '', '55080000', 0, '2024-04-17 07:40:01', 53, 1),
(26, 'sdf', 'sdfsadfsadf', '0321618985', 'thien@gmail.com', '', '3210000', 0, '2024-04-17 08:59:46', 9, 1),
(27, 'sdf', 'sdfsadfsadf', '0321618985', 'thien@gmail.com', '', '1185000', 0, '2024-04-17 09:04:13', 2, 1),
(28, 'sdf', 'sdfsadfsadf', '0321618985', 'thien@gmail.com', '', '6692000', 0, '2024-04-17 09:05:59', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bills_item`
--

CREATE TABLE `bills_item` (
  `id` int NOT NULL,
  `pro_id` varchar(10) NOT NULL,
  `quantity` int NOT NULL,
  `price` text NOT NULL,
  `bill_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bills_item`
--

INSERT INTO `bills_item` (`id`, `pro_id`, `quantity`, `price`, `bill_id`) VALUES
(38, '3', 1, '8.000.000', 20),
(39, '1', 6, '234.322', 21),
(40, '8', 3, '100.000', 21),
(41, '3', 1, '8.000.000', 21),
(42, '1', 6, '234.322', 22),
(43, '8', 3, '100.000', 22),
(44, '3', 1, '8.000.000', 22),
(45, '1', 6, '234.322', 23),
(46, '8', 3, '100.000', 23),
(47, '3', 1, '8.000.000', 23),
(48, '18', 5, '795000', 24),
(49, '22', 52, '1050000', 25),
(50, '24', 1, '480000', 25),
(51, '22', 3, '1050000', 26),
(52, '26', 6, '10000', 26),
(53, '24', 1, '480000', 27),
(54, '12', 1, '705000', 27),
(55, '35', 1, '4892000', 28),
(56, '14', 1, '1800000', 28);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int NOT NULL,
  `logo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `logo`, `name`, `img`) VALUES
(5, 'uploads/brands/1713280205-tommy-hilfiger-tommy-girl-786135-removebg-preview.png', 'Tommy Hilfiger', 'uploads/brands/1713280205-photo-3-1662627697468165649229-1.webp'),
(6, 'uploads/brands/1713280593-flora-gorgeous-preview.png', 'GUCCI', 'uploads/brands/1713280593-flora-gorgeous-preview.png'),
(7, 'uploads/brands/1713280763-mancera-cedrat-boise-6698ab0d070-min-removebg-preview.webp', 'Mancera', 'uploads/brands/1713280763-mancera-cedrat-boise-6698ab0d070-min-removebg-preview.webp'),
(8, 'uploads/brands/1713280866-wisal-dhahab-sprayaa1-min.webp', 'Ajmal', 'uploads/brands/1713280866-wisal-dhahab-sprayaa1-min.webp'),
(10, 'uploads/brands/1713281097-dior-sauvage-eau-de-toilettebox.webp', 'Christian Dior', 'uploads/brands/1713281097-dior-sauvage-eau-de-toilettebox.webp'),
(11, 'uploads/brands/1713281229-acqua-di-gio-edp-ca93ce28e17.webp', 'Giorgio Armani', 'uploads/brands/1713281229-gio-edp-75ml-8ee152daf1d6456ea76.webp'),
(12, 'uploads/brands/1713281479-nuoc-hoa-unisex-creed-millesime-imperial-edp-100ml.webp', 'Creed', 'uploads/brands/1713281479-nuoc-hoa-unisex-creed-millesime-imperial-edp-100ml.webp'),
(13, 'uploads/brands/1713281977-ck-one-gold-9cac464fd12640c28a22-min.webp', 'Calvin Klein', 'uploads/brands/1713281977-ck-one-gold-9cac464fd12640c28a22-min.webp'),
(14, 'uploads/brands/1713282081-le-labo-santal-33-fa66901a85514b-removebg-preview.webp', 'Le labo', 'uploads/brands/1713282081-le-labo-santal-33-fa66901a85514b-removebg-preview.webp'),
(15, 'uploads/brands/1713282252-full-17bcae326b9040c383627b14f7e-removebg-preview.webp', 'Marc Jacobs', 'uploads/brands/1713282252-full-17bcae326b9040c383627b14f7e-removebg-preview.webp'),
(16, 'uploads/brands/1713282377-h24-abf884ca034241b894f24c31c1d2-removebg-preview-min.webp', 'Hermes', 'uploads/brands/1713282377-h24-abf884ca034241b894f24c31c1d2-removebg-preview-min.webp'),
(17, 'uploads/brands/1713282888-evoke-her-14ml-edp-min.webp', 'Evoke', 'uploads/brands/1713282888-evoke-her-14ml-edp-min.webp'),
(18, 'uploads/brands/1713283024-elixir-precious-for-women1.webp', 'Elixir Precious', 'uploads/brands/1713283024-elixir-precious-for-women1.webp');

-- --------------------------------------------------------

--
-- Table structure for table `capacitys`
--

CREATE TABLE `capacitys` (
  `id` int NOT NULL,
  `ml` int NOT NULL,
  `pro_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`) VALUES
(19, 9);

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int NOT NULL,
  `quantity` int NOT NULL,
  `pro_id` int NOT NULL,
  `cart_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int NOT NULL,
  `name` varchar(10) NOT NULL,
  `quantity` int NOT NULL COMMENT 'sô lượng mã ',
  `max_sale` int NOT NULL,
  `price_min` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `florals`
--

CREATE TABLE `florals` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `img_products`
--

CREATE TABLE `img_products` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `origins`
--

CREATE TABLE `origins` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `origins`
--

INSERT INTO `origins` (`id`, `name`) VALUES
(4, 'Anh'),
(5, 'Pháp'),
(6, 'Đức'),
(7, 'Ý'),
(8, 'Mỹ'),
(9, 'Tây Ban Nha');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `content`, `img`) VALUES
(2, '5 Hương Nước Hoa', 'Ai mê mệt hương thơm ngọt ngào của trái cây và hoa cỏ thì lựa chọn 5 chai nước hoa xịn mịn này là đúng chuẩn.  Khác với sự nồng nàn của hương gỗ, nước hoa mang', '5 hương nước hoa ngọt ngào đầy tinh tế, ghi dấu ấn khó phai\r\n 04 tháng 12 2023  Bean Perfume\r\nAi mê mệt hương thơm ngọt ngào của trái cây và hoa cỏ thì lựa chọn 5 chai nước hoa xịn mịn này là đúng chuẩn. \r\n\r\nKhác với sự nồng nàn của hương gỗ, nước hoa mang hương thơm ngọt thường được chiết xuất từ những loại trái cây, hoa cỏ trong thiên nhiên. Do đó, chúng thường mang đến cảm giác dễ chịu, nhẹ nhàng không quá nồng nhưng vẫn đủ sức khiến người khác phải ngất ngây. Nếu bạn đang cần tìm cho mình 1 chai nước hoa thơm ngọt thì 5 gợi ý dưới đây sẽ giúp bạn có được lựa chọn phù hợp nhất cho bản thân.\r\n\r\nMORRA - Harmony Of The Sea\r\n\r\nChai nước hoa được ví như bản giao hưởng ngọt ngào của MORRA - Harmony Of The Sea chính là gợi ý đầu tiên mà bạn nên ghim ngay vào \'\'shopping list\'\' của mình. Sở hữu hương thơm ngọt dịu và phảng phất nét tươi mới, \'\'em\'\' nước hoa này cực kỳ phù hợp cho tiết trời ấm áp hoặc những ngày đổ mưa. Vẻ đẹp của Harmony Of The Sea chính là sự kết hợp hài hòa giữa hương dừa, vanilla, hương sữa ngọt và hương thơm xanh mát mẻ của vùng biển nhiệt đới. \"Em\'\' nước hoa này phù hợp cho cả nam và nữ. Bạn có thể sử dụng sản phẩm vào các buổi sáng, khi đi du lịch hay đi làm đều \'\'okela\'\' vì hương thơm độc đáo trong công thức của Harmony Of The Sea sẽ mang đến sự sảng khoái và mới mẻ vô cùng.\r\n\r\nBanner\r\n\r\nVới giá bán chỉ từ 340k/10ml, bạn đã có thể sở hữu chai nước hoa với vẻ ngoài xinh xắn cùng hương thơm thú vị đủ sức gây ấn tượng với mọi người rồi đó.\r\n\r\nMiss Dior Blooming Bouquet\r\n\r\nHương thơm ngọt ngào của chai nước hoa đình đám đến từ Dior chắc hẳn đã khiến không ít chị em phải mê mẩn ngay từ tầng hương đầu tiên. Hương thơm nữ tính và tươi tắn của chai nước hoa này sẽ mang đến cho bạn những liên tưởng về các cô nàng tiểu thư sang trọng và kiêu kỳ. Đó là hương thơm ngọt thanh của quýt hồng Sicili hòa quyện với hoa mẫu đơn, hồng Đan Mạch và mùi quả mơ, quả dứa. Chai nước hoa này sẽ tỏa ra hương thơm vô cùng dễ chịu và ngọt ngào, được nhiều người ví như cơn gió nhẹ nhàng nhưng đủ khiến bất kỳ ai cũng phải lưu luyến.\r\n\r\nBanner\r\n\r\nMarc Jacobs Daisy Daze Limited Edition Collection\r\n\r\nMùi hương của chai nước hoa đến từ thương hiệu Marc Jacobs là sự kết hợp hoàn hảo giữa hương thơm thanh mát cực thu hút của những trái dâu, trái mơ chín mọng. Cùng với đó, phải kể đến sự góp mặt của hương lá hoa tím, hương gỗ và hoa nhài cực nữ tính và hấp dẫn. \'\'Em\'\' nước hoa này phù hợp với những cô nàng dịu dàng, tươi tắn và có đôi chút năng động, vui vẻ trong tính cách. Mỗi tầng hương sẽ mang đến những cảm nhận khác nhau, giúp bạn \'\'X2\'\' sức hấp dẫn của bản thân với đối phương.\r\n\r\nBanner\r\n\r\nBurberry My Burberry Blush EDP\r\n\r\nMy Burberry Blush là chai nước hoa mang hương thơm ngọt và dịu của hoa hồng và các loại trái cây, vì vậy \'\'em\'\' này cũng được rất nhiều chị em ưa chuộng. Hương thơm của My Burberry Blush sẽ đem đến cho chị em một khí chất thanh lịch, tinh tế và nhẹ nhàng. Không những vậy, mùi hương ngọt mát từ lựu và chanh vàng còn giúp bạn toát lên vẻ đẹp tự tin và tràn đầy sức sống. Không chỉ thơm, chai nước hoa này còn có vẻ ngoài siêu xinh xắn, đảm bảo sẽ khiến hội chị em phải \'\'đổ đứ đừ\'\' ngay từ cái nhìn đầu tiên.\r\n\r\nBanner\r\n\r\nCleopatra Perfume - Anput\r\n\r\nHương thơm từ chai nước hoa Anput là sự ngọt ngào, hấp dẫn đầy đê mê cực kỳ phù hợp với những quý cô kiêu kỳ và gợi cảm. Từ nhẹ nhàng đến cuốn hút, mỗi tầng hương sẽ mang lại những sắc thái khác nhau của vị ngọt. Đầu tiên là mùi hương nhẹ nhàng từ hoa hồng Đan Mạch kết hợp cùng hương vanilla. Sau đó là hương thơm đầy tinh tế và gợi cảm từ hổ phách. Cuối cùng là sự lưu luyến không rời của hương hoa cùng hổ phách. Chai nước hoa này chắc chắn sẽ là trợ thủ vô cùng đắc lực cho chị em khi đi tiệc hay đến những chỗ đông người.\r\n\r\nBanner', 'uploads/products/1713315595-5-huong-nuoc-hoa-ngot-ngao-day-tinh-te.webp');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL COMMENT 'Giá gốc',
  `price_sale` int NOT NULL COMMENT 'Giả giảm',
  `brand_id` int NOT NULL COMMENT 'Thương hiệu',
  `mota` text NOT NULL,
  `so_luong_ban` int NOT NULL,
  `so_luong_kho` int NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type_id` int NOT NULL COMMENT 'Loại sp',
  `origin_id` int NOT NULL COMMENT 'Xuất xứ',
  `img` varchar(255) NOT NULL COMMENT 'ảnh'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `price_sale`, `brand_id`, `mota`, `so_luong_ban`, `so_luong_kho`, `created`, `type_id`, `origin_id`, `img`) VALUES
(12, 'Tommy Hilfiger Tommy Girl', 830000, 705000, 5, 'Có bao giờ bạn tự hỏi một cô gái trẻ năng động và độc lập sẽ được mùi hương miêu tả như thế nào? Nếu chưa thì hãy mở nắp Tommy Hilfiger Tommy Girl, cô gái sẽ tự hiện lên trong tưởng tượng của bạn với một mùi hương thật đẹp.\r\n\r\nTommy Girl khá an toàn nhưng không hề nhàm chán. Với hai tầng hương đầu mang cái nhẹ nhàng của hương hoa trắng, tô điểm thêm nét tinh nghịch, tươi mới của cam chanh và một chút thanh mát của Bạc hà. Đến tầng hương cuối, cá tính của người chủ nhân được mùi hương khắc hoạ rõ nét hơn. Ấm áp, gợi cảm có lẽ là hai từ thích hợp nhất để miêu tả đối với màn kết hợp của nhóm hương Hoa và Gỗ.\"\r\n\r\nTommy Hilfiger Tommy Girl đích thị là chai nước hoa dành cho những cô nàng yêu vận động. Bởi chính bản thân nó đã tự toả ra một năng lượng đặc trưng của các nàng ấy, đó là sự mạnh mẽ, bản lĩnh đầy phóng khoáng.\r\n\r\nBanner\r\n\r\nCách sử dụng đề xuất dành cho bạn:\r\n\r\nNước hoa mang lại mùi hương cho cơ thể bạn thông qua việc tiếp xúc lên da và phản ứng với hơi ấm trên cơ thể của bạn. Việc được tiếp xúc với các bộ phận như cổ tay, khuỷu tay, sau tai, gáy, cổ trước là những vị trí được ưu tiên hàng đầu trong việc sử dụng nước hoa bởi sự kín đáo và thuận lợi trong việc tỏa mùi hương.\r\nSau khi sử dụng, xịt nước hoa lên cơ thể, tránh dùng tay chà xát hoặc làm khô da bằng những vật dụng khác, điều này phá vỡ các tầng hương trong nước hoa, khiến nó có thể thay đổi mùi hương hoặc bay mùi nhanh hơn.\r\nĐể chai nước hoa cách vị trí cần dùng nước hoa trong khoảng 15-20cm và xịt mạnh, dứt khoát để mật đổ phủ của nước hoa được rộng nhất, tăng độ bám tỏa trên da của bạn.\r\nPhần cổ tay được xịt nước hoa thường có nhiều tác động như lúc rửa tay, đeo vòng, đồng hồ, do đó để đảm bảo mùi hương được duy trì, bạn nên sử dụng nước hoa ở cổ tay ở tần suất nhiều hơn lúc cần thiết.\r\nNước hoa có thể bám tốt hay không tốt tùy thuộc vào thời gian, không gian, cơ địa, chế độ sinh hoạt, ăn uống của bạn, việc sử dụng một loại nước hoa trong thời gian dài có thể khiến bạn bị quen mùi, dẫn đến hiện tượng không nhận biết được mùi hương. Mang theo nước hoa bên mình hoặc trang bị những mẫu mini tiện dụng để giúp bản thân luôn tự tin mọi lúc mọi nơi.\r\n \r\n\r\nBảo quản nước hoa:\r\n\r\nNước hoa phổ thông (Designer) thường không có hạn sử dụng, ở một số Quốc gia, việc ghi chú hạn sử dụng là điều bắt buộc để hàng hóa được bán ra trên thị trường. Hạn sử dụng ở một số dòng nước hoa được chú thích từ 24 đến 36 tháng, và tính từ ngày bạn mở sản phẩm và sử dụng lần đầu tiên.\r\nNước hoa là tổng hợp của nhiều thành phần hương liệu tự nhiên và tổng hợp, nên bảo quản nước hoa ở những nơi khô thoáng, mát mẻ, tránh nắng, nóng hoặc quá lạnh, lưu ý không để nước hoa trong cốp xe, những nơi có nhiệt độ nóng lạnh thất thường...', 14, 100, '2024-04-16 22:13:39', 2, 5, 'uploads/products/1713280419-tommy-hilfiger-tommy-girl-786135-removebg-preview.png'),
(13, 'Gucci Flora Gorgeous Gardenia', 2000000, 1830000, 6, 'Gucci là một thương hiệu vốn rất thành công trong mảng nước hoa nữ, bằng những mùi hương khai thác nét đẹp mềm mại, nữ tính của các loại hoa và trái cây. Flora by Gucci cũng là một làn hương nữ tính dễ chịu và đáng yêu dành cho các quý cô, thế nhưng thường xuất hiện khá “le lói” trên thị trường dưới dạng những bản phát hành giới hạn theo từng năm hoặc sẽ dừng sản xuất sau vài năm phát hành trên thị trường. Phải đến năm 2021, Gucci mới cho ra một cái tên với ngoại hình cố định và mới mẻ cho dòng hương này, thay vì sử dụng những chiếc chai đựng được lấy cảm hứng từ kiểu dáng của Flora by Gucci năm 1966, ấy là Gucci Flora Gorgeous Gardenia Eau de Parfum.\r\n\r\nĐựng trong một chiếc chai màu hồng với kiểu dáng như những chiếc lọ trên giá làm việc của một bác sĩ thảo mộc, Gucci Flora Gorgeous Gardenia thật sự sở hữu mùi hương cũng khá “gorgeous” như cái tên và ngoại hình. Với chủ điểm là hoa trắng, Dành dành và Nhài bung tỏa ngay từ những giây phút đầu tiên của mùi hương, được tăng thêm độ ngọt và mọng nước từ Quýt và Quả mọng. Một chút thanh ngọt nịnh mũi của Hoa lê, càng làm tăng thêm nét mịn màng trong từng làn hương hoa trắng trải ra khắp không gian.\r\n\r\nĐược làm ngọt từ Hoa và các thức Trái cây nịnh mũi, nên Gucci Flora Gorgeous Gardenia không phải là một thứ mùi hương ngọt lịm quá trớn, mà thanh thoát, uyển chuyển và đồng thời cũng sở hữu những rung động nữ tính ở mức tinh tế hơn. Khi khô xuống, Gucci Flora Gorgeous Gardenia vẫn tiếp tục duy trì được độ ngọt của mình bằng Đường nâu, nhưng chừng mực và vẫn giữ được khuôn mẫu sang trọng vốn có của mình.\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.', 14, 100, '2024-04-16 22:18:16', 2, 7, 'uploads/products/1713280696-flora-gorgeous-preview.png'),
(14, 'Mancera Cedrat Boise', 1950000, 1800000, 7, 'Bạn tìm đến Mancera Cedrat Boise, chỉ vì nghe được ở đâu đó nói rằng đây là một mùi hương giống với Creed Aventus? Xin lỗi vì đã làm bạn thất vọng, bởi Cedrat Boise có rất ít liên hệ với mùi hương kia, và họa chăng nét tương đồng chỉ là hai mùi hương đi theo cùng một phong cách. Vậy thì Cedrat Boise có gì?\r\n\r\nCedrat Boise trong tiếng Pháp có nghĩa là Gỗ tuyết tùng, và đó cũng là chủ đề chính của mùi hương đến từ Mancera. Gỗ tuyết tùng cùng với Da thuộc, rắn rỏi và mạnh mẽ, được làm cho hài hòa và cân bằng hơn bởi Vanilla và Gỗ đàn hương, tái thiết một bộ khung vững chắc và chặt chẽ cho mùi hương của Cedrat Boise.\r\n\r\nMột chút gợi cảm từ Hoắc hương và Nhài, cùng sự mở màn đầy năng lượng của Trái cây và Gia vị, bổ sung và tô vẽ lên tổng thể của Cedrat Boise thành một mùi hương hoàn chỉnh.\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.', 13, 100, '2024-04-16 22:20:29', 1, 5, 'uploads/products/1713280829-mancera-cedrat-boise-6698ab0d070-min-removebg-preview.webp'),
(15, 'Nước hoa Wisal Dhahab Spray', 1150000, 920000, 8, 'Nước hoa Wisal Dhahab được tạo ra bởi hãng Ajmal, XaXi World nhập khẩu nước hoa, mỹ phẩm Wisal Dhahab từ Mỹ nên chất lượng hương thơm luôn đảm bảo tốt nhất, mọi sản phẩm mua tại XaXi World đều được bảo hành 100% hàng chính hãng với chính sách đổi trả hoàn tiền nếu không đúng cam kết.\r\n\r\nSự hòa quyện của những mùi hương kỳ lạ từ thiên nhiên. Wisal Dhahab là một loại nước hoa dạng xịt phương Đông đầy mê hoặc, mở đầu bằng hương trái cây tươi được tô điểm bằng những điểm nhấn của hoa và hương thơm trang trí công phu của chypre, hoắc hương và xạ hương. Được đúc trong một chiếc chai có viền mạ vàng lộng lẫy, nó được chế tác hoàn hảo dành cho những ai muốn thêm điểm nhấn màu vàng và ánh sáng lung linh cho cá tính của mình.\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.\r\n\r\nDòng nước hoa Ajmal này chủ yếu là các phiên bản dành cho nam giới sử dụng vì nó dịu nhẹ và phù hợp với môi trường văn phòng.', 16, 100, '2024-04-16 22:22:23', 1, 8, 'uploads/products/1713280943-wisal-dhahab-sprayaa1-min.webp'),
(16, 'Dior Sauvage Eau de Toilette', 3200000, 2800000, 10, 'Dior Sauvage đã trở thành một những chai nước hoa nam bám chạy nhất mọi thời đại của thương hiệu Christian Dior nói riêng, và của thị trường nước hoa quốc tế nói chung.\r\n\r\nDior Sauvage được biết đến nhiều nhất với hương thơm tươi mát của cam Bergamot kèm với vị cay nồng của Tiêu. Các nốt hương nổi trội mà mọi người sẽ dễ dàng cảm nhận được ở đây là hoa Oải Hương, Gỗ và Ambroxan. Có thể ấn tượng lần đầu khi ngửi mùi hương này là quen thuộc lắm, không có gì mới lạ. Đúng vậy, mùi hương này thật sự không thực sự không quá đột phá nhưng đồng thời lại được lòng rất nhiều người và ai ngửi thấy cũng sẽ có ấn tượng tốt.\r\n\r\nSau gần 8 năm ra mắt thì cơn sốt mang tên Diro Sauvage dường như vẫn chưa hạ nhiệt tí nào! Ở Việt Nam thì đây có lẽ Dior Sauvage vẫn luôn nằm trong top những chai nước hoa được săn đón và yêu thích nhất với độ đa dụng cao, có thẻ dùng cho mọi dịp, mọi thời tiết!\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.', 27, 100, '2024-04-16 22:26:00', 1, 5, 'uploads/user/1713281751-dior-sauvage-eau-de-toilette-100.webp'),
(17, 'Acqua di Gio Eau de Parfum', 2950000, 2655000, 11, 'Mang trong mình hơi thở Thuỷ sinh, Giorgio Armani Acqua di Gio Eau de Parfum là vẻ đẹp của một người đàn ông cá tính, hiện đại và có đôi phần \"ướt át\". Ra mắt từ năm 2022, ấn phẩm đươc sự đón nhận nồng nhiệt của giới mộ điệu, bởi đây không chỉ là một sự kế thừa và phát huy DNA của Acqua di Gio nguyên bản, mà còn là một phiên bản hoàn chỉnh của sự giao thoa giữa giữa bản gốc và bản Essenza.\r\n\r\nẤn phẩm là sự mô tả về một không gian rộng lớn và vô tận như đang đắm mình vào biển cả, không giới hạn, không chút áp lực và không có sự hạn chế. Hương thơm của Khoáng chất kết hợp cùng Quýt xanh, dịu ngọt nhưng cực tươi mát, lại càng nhấn mạnh vẻ đẹp của biển cả. Càng về sau, hương thơm càng nồng ấm, hoang dại của Xô thơm lẫn trong cái kết cấu phức tạp của Chi Mỏ hạc, tạo nên cái trầm lắng bên trong mỗi quý ông.\r\n\r\nĐể rồi người đàn ông ấy quyến luyến mọi cô gái bằng sự phóng khoáng, lơ đãng của mình. Thoảng hoặc theo đó chút Cỏ Hương bài, chút Hoắc hương nồng đượm hương Gỗ đặc trưng. Những nốt hương trong Giorgio Armani Acqua di Gio EDP đan xen tựa hệt cảm xúc biến chuyển của một gã trai hiện đại, và bên trong họ là những phần tâm hồn tươi tắn, phóng khoáng.\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.', 47, 100, '2024-04-16 22:28:05', 1, 5, 'uploads/products/1713281285-acqua-di-gio-edp-ca93ce28e17.webp'),
(18, 'Nước Hoa Nam Ajmal Grey', 825000, 795000, 8, 'Nước hoa Grey by Ajmal được chế tác tỉ mỉ dành cho những dịp đặc biệt, để lại ấn tượng khó phai dù bạn đến bất cứ nơi đâu. Với sự pha trộn hài hòa giữa các nốt hương thơm, hoa và hổ phách, Grey toát lên sự tinh tế và duyên dáng. Mỗi lần xịt bao bọc bạn trong một đám mây mùi hương quyến rũ, nâng cao sự tự tin và nâng cao sự hiện diện của bạn. Trải nghiệm sự kỳ diệu của Grey và đưa ra một tuyên bố khó quên. Với hiệu quả lưu hương lâu dài và kích thước 100ml tiện lợi, Grey là sự bổ sung không thể thiếu cho bộ sưu tập nước hoa của bạn. Hãy đón nhận sự thanh lịch với Grey ngay hôm nay.\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.\r\n\r\nDòng nước hoa Ajmal này chủ yếu là các phiên bản dành cho nam giới sử dụng vì nó dịu nhẹ và phù hợp với môi trường văn phòng.', 48, 100, '2024-04-16 22:29:31', 1, 8, 'uploads/products/1713281371-gray-for-men-1-min.webp'),
(19, 'Unisex Creed Millesime Imperial', 6500000, 5680000, 12, 'Millesime Imperial của thương hiệu Creed là hương nước hoa dành cho cả nam và nữ với hương thơm nữ giới ấm áp và lãng mạn, gợi lên khung cảnh những hàng cây cam quýt tươi mát và cảnh quan cen biển tuyệt đẹp của vùng Silica đầy nắng.\r\n\r\nMùi hương nước hoa Creed Millesime Imperial\r\n\r\nNhư ánh mặt trời vùng Địa Trung Hải tỏa sáng rực rỡ, Creed Millesime Imperial là sự pha trộn hoàn hảo của vị cam chanh sảng khoái, tươi mát và hương vị quyến rũ của vùng bờ biển Sicili. Hương thơm Creed Millesime Imperial mang đến cho người dùng một cảm giác ấm áp và lãng mạn với những điểm nhấn sống động, hương thơm của những loài hoa danh tiếng cùng một chút mùi vị biển khỏe khoắn.\r\n\r\nBanner\r\n\r\nCách sử dụng đề xuất dành cho bạn:\r\n\r\nNước hoa mang lại mùi hương cho cơ thể bạn thông qua việc tiếp xúc lên da và phản ứng với hơi ấm trên cơ thể của bạn. Việc được tiếp xúc với các bộ phận như cổ tay, khuỷu tay, sau tai, gáy, cổ trước là những vị trí được ưu tiên hàng đầu trong việc sử dụng nước hoa bởi sự kín đáo và thuận lợi trong việc tỏa mùi hương.\r\nSau khi sử dụng, xịt nước hoa lên cơ thể, tránh dùng tay chà xát hoặc làm khô da bằng những vật dụng khác, điều này phá vỡ các tầng hương trong nước hoa, khiến nó có thể thay đổi mùi hương hoặc bay mùi nhanh hơn.\r\nĐể chai nước hoa cách vị trí cần dùng nước hoa trong khoảng 15-20cm và xịt mạnh, dứt khoát để mật đổ phủ của nước hoa được rộng nhất, tăng độ bám tỏa trên da của bạn.\r\nPhần cổ tay được xịt nước hoa thường có nhiều tác động như lúc rửa tay, đeo vòng, đồng hồ, do đó để đảm bảo mùi hương được duy trì, bạn nên sử dụng nước hoa ở cổ tay ở tần suất nhiều hơn lúc cần thiết.\r\nNước hoa có thể bám tốt hay không tốt tùy thuộc vào thời gian, không gian, cơ địa, chế độ sinh hoạt, ăn uống của bạn, việc sử dụng một loại nước hoa trong thời gian dài có thể khiến bạn bị quen mùi, dẫn đến hiện tượng không nhận biết được mùi hương. Mang theo nước hoa bên mình hoặc trang bị những mẫu mini tiện dụng để giúp bản thân luôn tự tin mọi lúc mọi nơi.\r\nBảo quản nước hoa:\r\n\r\nNước hoa phổ thông (Designer) thường không có hạn sử dụng, ở một số Quốc gia, việc ghi chú hạn sử dụng là điều bắt buộc để hàng hóa được bán ra trên thị trường. Hạn sử dụng ở một số dòng nước hoa được chú thích từ 24 đến 36 tháng, và tính từ ngày bạn mở sản phẩm và sử dụng lần đầu tiên.\r\nNước hoa là tổng hợp của nhiều thành phần hương liệu tự nhiên và tổng hợp, nên bảo quản nước hoa ở những nơi khô thoáng, mát mẻ, tránh nắng, nóng hoặc quá lạnh, lưu ý không để nước hoa trong cốp xe, những nơi có nhiệt độ nóng lạnh thất thường...', 36, 100, '2024-04-16 22:32:31', 3, 5, 'uploads/products/1713281551-nuoc-hoa-unisex-creed-millesime-imperial-edp-100ml.webp'),
(20, 'Nước Hoa Unisex Gucci The Virgin Violet', 7900000, 5800000, 6, 'Nước Hoa Unisex Gucci The Virgin Violet là một trong những dòng sản phẩm nước hoa đầu tiên của Gucci. Khu vườn của nhà giả kim mở ra trong một phòng thí nghiệm tưởng tượng chứa đầy những chiếc lọ tò mò và mùi hương mê hoặc. Bộ sưu tập có thể tùy chỉnh được tạo thành từ eau de parfum, dầu thơm và acque profumate (“nước thơm”) được lấy cảm hứng từ nghệ thuật giả kim và tạo mùi thơm.\r\n\r\nMùi hương nước hoa Gucci The Virgin Violet\r\n\r\nĐược lấy cảm hứng từ bộ lông trắng mềm mại của một con thiên nga duyên dáng. Độ tinh khiết của nó được dịch thành một thành phần của xạ hương, lá violet và cánh hoa iris được nhấn mạnh bởi một chút hương vani. Xây dựng một bệ đỡ độc đáo bằng cách xếp lớp eau de parfum này lên một loại dầu hoặc acque từ bộ sưu tập, giống như cách một nhà giả kim sẽ kết hợp các thành phần đơn giản để tạo ra thứ gì đó phi thường.\r\n\r\nBanner\r\n\r\nCách sử dụng đề xuất dành cho bạn:\r\n\r\nNước hoa mang lại mùi hương cho cơ thể bạn thông qua việc tiếp xúc lên da và phản ứng với hơi ấm trên cơ thể của bạn. Việc được tiếp xúc với các bộ phận như cổ tay, khuỷu tay, sau tai, gáy, cổ trước là những vị trí được ưu tiên hàng đầu trong việc sử dụng nước hoa bởi sự kín đáo và thuận lợi trong việc tỏa mùi hương.\r\nSau khi sử dụng, xịt nước hoa lên cơ thể, tránh dùng tay chà xát hoặc làm khô da bằng những vật dụng khác, điều này phá vỡ các tầng hương trong nước hoa, khiến nó có thể thay đổi mùi hương hoặc bay mùi nhanh hơn.\r\nĐể chai nước hoa cách vị trí cần dùng nước hoa trong khoảng 15-20cm và xịt mạnh, dứt khoát để mật đổ phủ của nước hoa được rộng nhất, tăng độ bám tỏa trên da của bạn.\r\nPhần cổ tay được xịt nước hoa thường có nhiều tác động như lúc rửa tay, đeo vòng, đồng hồ, do đó để đảm bảo mùi hương được duy trì, bạn nên sử dụng nước hoa ở cổ tay ở tần suất nhiều hơn lúc cần thiết.\r\nNước hoa có thể bám tốt hay không tốt tùy thuộc vào thời gian, không gian, cơ địa, chế độ sinh hoạt, ăn uống của bạn, việc sử dụng một loại nước hoa trong thời gian dài có thể khiến bạn bị quen mùi, dẫn đến hiện tượng không nhận biết được mùi hương. Mang theo nước hoa bên mình hoặc trang bị những mẫu mini tiện dụng để giúp bản thân luôn tự tin mọi lúc mọi nơi.\r\nBảo quản nước hoa:\r\n\r\nNước hoa phổ thông (Designer) thường không có hạn sử dụng, ở một số Quốc gia, việc ghi chú hạn sử dụng là điều bắt buộc để hàng hóa được bán ra trên thị trường. Hạn sử dụng ở một số dòng nước hoa được chú thích từ 24 đến 36 tháng, và tính từ ngày bạn mở sản phẩm và sử dụng lần đầu tiên.\r\nNước hoa là tổng hợp của nhiều thành phần hương liệu tự nhiên và tổng hợp, nên bảo quản nước hoa ở những nơi khô thoáng, mát mẻ, tránh nắng, nóng hoặc quá lạnh, lưu ý không để nước hoa trong cốp xe, những nơi có nhiệt độ nóng lạnh thất thường...', 48, 100, '2024-04-16 22:37:07', 3, 7, 'uploads/products/1713281827-nuoc-hoa-unisex-gucci-the-virgin-violet-edp-100ml.webp'),
(21, 'Gucci Bloom Ambrosia di Fiori', 3150000, 2560000, 6, 'Nếu bạn là một tín đồ của nước hoa đến từ nhà Gucci, chắc hẳn bạn đã biết tới Gucci Bloom, một dòng hương khai thác các nét đẹp nữ tính của nhóm hoa trắng với tâm điểm luôn là Hoa huệ. Gucci Bloom Ambrosia di Fiori Eau de Parfum là một \"người em\" của Gucci Bloom, tập trung khai thác nét đẹp của Hoa huệ dưới một góc nhìn nữ tính đầy thú vị.\r\n\r\nGucci Bloom Ambrosia di Fiori có điểm khác biệt đáng chú ý với ngoại hình đậm đà, rõ nét hơn bằng màu đỏ trên cả thân chai và nắp, làm nổi bật lên chiếc tem hồng – đen trang nhã sang trọng phía trước. Về mùi hương, Gucci Bloom Ambrosia di Fiori vẫn tập trung khai thác vào sự ngả ngớn quyến rũ của bông Huệ, đậm đà, ngọt và nồng nàn, bên cạnh những nét quyến rũ đằm thắm của Hoa hồng. Huệ và Hồng là hai nhân tố chính trong mùi hương của Gucci Bloom Ambrosia di Fiori, vẽ nên những nét nữ tính với những rung động của sự từng trải, trưởng thành của người phụ nữ, cùng sự sang trọng thường thấy từ những mùi hương mang thương hiệu Gucci.\r\n\r\nBằng sự khởi đầu trang nhã của Nhài và Hoa kim ngân, Gucci Bloom Ambrosia di Fiori hoàn toàn là một mùi hương mang đậm nét nữ tính, mềm mại, quyến rũ một cách tuyệt đối với sắc thái đậm đà, từng trải.\r\n\r\nBanner\r\n\r\nCách sử dụng đề xuất dành cho bạn:\r\n\r\nNước hoa mang lại mùi hương cho cơ thể bạn thông qua việc tiếp xúc lên da và phản ứng với hơi ấm trên cơ thể của bạn. Việc được tiếp xúc với các bộ phận như cổ tay, khuỷu tay, sau tai, gáy, cổ trước là những vị trí được ưu tiên hàng đầu trong việc sử dụng nước hoa bởi sự kín đáo và thuận lợi trong việc tỏa mùi hương.\r\nSau khi sử dụng, xịt nước hoa lên cơ thể, tránh dùng tay chà xát hoặc làm khô da bằng những vật dụng khác, điều này phá vỡ các tầng hương trong nước hoa, khiến nó có thể thay đổi mùi hương hoặc bay mùi nhanh hơn.\r\nĐể chai nước hoa cách vị trí cần dùng nước hoa trong khoảng 15-20cm và xịt mạnh, dứt khoát để mật đổ phủ của nước hoa được rộng nhất, tăng độ bám tỏa trên da của bạn.\r\nPhần cổ tay được xịt nước hoa thường có nhiều tác động như lúc rửa tay, đeo vòng, đồng hồ, do đó để đảm bảo mùi hương được duy trì, bạn nên sử dụng nước hoa ở cổ tay ở tần suất nhiều hơn lúc cần thiết.\r\nNước hoa có thể bám tốt hay không tốt tùy thuộc vào thời gian, không gian, cơ địa, chế độ sinh hoạt, ăn uống của bạn, việc sử dụng một loại nước hoa trong thời gian dài có thể khiến bạn bị quen mùi, dẫn đến hiện tượng không nhận biết được mùi hương. Mang theo nước hoa bên mình hoặc trang bị những mẫu mini tiện dụng để giúp bản thân luôn tự tin mọi lúc mọi nơi.\r\nBảo quản nước hoa:\r\n\r\nNước hoa phổ thông (Designer) thường không có hạn sử dụng, ở một số Quốc gia, việc ghi chú hạn sử dụng là điều bắt buộc để hàng hóa được bán ra trên thị trường. Hạn sử dụng ở một số dòng nước hoa được chú thích từ 24 đến 36 tháng, và tính từ ngày bạn mở sản phẩm và sử dụng lần đầu tiên.\r\nNước hoa là tổng hợp của nhiều thành phần hương liệu tự nhiên và tổng hợp, nên bảo quản nước hoa ở những nơi khô thoáng, mát mẻ, tránh nắng, nóng hoặc quá lạnh, lưu ý không để nước hoa trong cốp xe, những nơi có nhiệt độ nóng lạnh thất thường...', 69, 100, '2024-04-16 22:38:38', 2, 4, 'uploads/products/1713281918-gucci-bloom-ambrosia-di-fiori-ea.webp'),
(22, 'Calvin Klein CK One Gold', 1580000, 1050000, 13, 'Nếu ai đó đã từng là fan trung thành với mùi hương của CK one, hẳn sẽ rất vui mừng khi nhà CK ưu ái cho ra đời một phiên bản mới với cái tên CK one Gold. Hiện đại hơn, cá tính hơn, và phủ lên đó thứ cảm xúc bằng \"Vàng\". Vẫn là mùi hương unisex, được bắt đầu bằng hương cam bergamot \"chín cây\" nhẹ nhàng tươi mát, pha lẫn một chút mùi vị của trái sung để giảm bớt cái gắt của nốt hương đầu tiên. Khi lắng xuống, thoảng hương thơm nhẹ nhàng của hoa cam neroli được quyện lẫn một cách tinh tế với hương thơm đặc trưng của hoa nhài. CK one Gold đưa bạn tới trạm cuối bằng mùi cỏ hương bài, thanh nhẹ nhưng có chút ít ẩm ướt của gỗ guaiac sau một đêm mưa. Trong những ngày đầu hạ nóng ỏi ả như này, khoác lên người mùi hương CK one Gold, hẳn sẽ thấy như đang mặc chiếc áo thun mỏng, đơn giản, phóng khoáng, có gió mát thoảng quá, ưu ái từng bước chân của bạn, như thể mọi thứ bạn bước tới đều có thể hóa thành \"Vàng\".\r\n\r\nBanner\r\n\r\nCách sử dụng đề xuất dành cho bạn:\r\n\r\nNước hoa mang lại mùi hương cho cơ thể bạn thông qua việc tiếp xúc lên da và phản ứng với hơi ấm trên cơ thể của bạn. Việc được tiếp xúc với các bộ phận như cổ tay, khuỷu tay, sau tai, gáy, cổ trước là những vị trí được ưu tiên hàng đầu trong việc sử dụng nước hoa bởi sự kín đáo và thuận lợi trong việc tỏa mùi hương.\r\nSau khi sử dụng, xịt nước hoa lên cơ thể, tránh dùng tay chà xát hoặc làm khô da bằng những vật dụng khác, điều này phá vỡ các tầng hương trong nước hoa, khiến nó có thể thay đổi mùi hương hoặc bay mùi nhanh hơn.\r\nĐể chai nước hoa cách vị trí cần dùng nước hoa trong khoảng 15-20cm và xịt mạnh, dứt khoát để mật đổ phủ của nước hoa được rộng nhất, tăng độ bám tỏa trên da của bạn.\r\nPhần cổ tay được xịt nước hoa thường có nhiều tác động như lúc rửa tay, đeo vòng, đồng hồ, do đó để đảm bảo mùi hương được duy trì, bạn nên sử dụng nước hoa ở cổ tay ở tần suất nhiều hơn lúc cần thiết.\r\nNước hoa có thể bám tốt hay không tốt tùy thuộc vào thời gian, không gian, cơ địa, chế độ sinh hoạt, ăn uống của bạn, việc sử dụng một loại nước hoa trong thời gian dài có thể khiến bạn bị quen mùi, dẫn đến hiện tượng không nhận biết được mùi hương. Mang theo nước hoa bên mình hoặc trang bị những mẫu mini tiện dụng để giúp bản thân luôn tự tin mọi lúc mọi nơi.\r\nBảo quản nước hoa:\r\n\r\nNước hoa phổ thông (Designer) thường không có hạn sử dụng, ở một số Quốc gia, việc ghi chú hạn sử dụng là điều bắt buộc để hàng hóa được bán ra trên thị trường. Hạn sử dụng ở một số dòng nước hoa được chú thích từ 24 đến 36 tháng, và tính từ ngày bạn mở sản phẩm và sử dụng lần đầu tiên.\r\nNước hoa là tổng hợp của nhiều thành phần hương liệu tự nhiên và tổng hợp, nên bảo quản nước hoa ở những nơi khô thoáng, mát mẻ, tránh nắng, nóng hoặc quá lạnh, lưu ý không để nước hoa trong cốp xe, những nơi có nhiệt độ nóng lạnh thất thường...\r\n', 79, 100, '2024-04-16 22:40:28', 3, 5, 'uploads/products/1713282028-ck-one-gold-9cac464fd12640c28a22-min.webp'),
(23, 'Nước hoa Le Labo Santal 33', 3850000, 3500000, 14, 'Santal 33 của Le Labo chắc hẳn là một hiện tượng thú vị trong thập niên 2010s của thế giới mùi hương, thậm chí còn hâm nóng thị trường nước hoa thời điểm ấy một cách cuồng nhiệt bằng sự ảnh hưởng và nổi tiếng của mùi hương này. Vậy Le Labo Santal 33 có gì khác thường mà lại được yêu thích đến vậy?\r\n\r\nĐược ra mắt năm 2011, trong thời điểm sự trở lại của các nhà nước hoa niche đang dần lớn mạnh hơn, những mùi hương độc đáo, thú vị cũng được cộng đồng chào đón, và Santal 33 đã giới thiệu tới cộng đồng yêu hương một sự mới lạ hấp dẫn, ấy là “mùi mạt cưa”. Đúng, Santal 33 cho ta mùi hương giống với không khí trong một xưởng cưa đầy ắp mạt gỗ đàn hương thơm, tươi, ẩm ẩm, kèm chút bụi mang lại cảm giác phấn gỗ rất chân thật, đầy đủ hiệu ứng và cảm xúc.\r\n\r\nCái không khí ấy là sự tổng hòa của rất nhiều các nốt hương được hoàn quyện hài hòa dưới bàn tay của nghệ sỹ điều hương Frank Voelkl, từ chủ điểm Gỗ đàn hương, thêm chút Lá cói để tạo ra hiệu ứng gỗ tươi, cùng Da thuộc để làm đanh cái không khí lại cho giống với một xưởng gỗ và những bụi gỗ được tạo ra từ cảm giác phấn bụi của Diên vĩ và Violet. Mọi thứ được sắp xếp một cách ngăn nắp và ẩn chứa rõ ý đồ trong Santal 33, tạo thành nét ấn tượng đem tới thành công cho mùi hương của Le Labo.\r\n\r\nBanner\r\n\r\nCách sử dụng đề xuất dành cho bạn:\r\n\r\nNước hoa mang lại mùi hương cho cơ thể bạn thông qua việc tiếp xúc lên da và phản ứng với hơi ấm trên cơ thể của bạn. Việc được tiếp xúc với các bộ phận như cổ tay, khuỷu tay, sau tai, gáy, cổ trước là những vị trí được ưu tiên hàng đầu trong việc sử dụng nước hoa bởi sự kín đáo và thuận lợi trong việc tỏa mùi hương.\r\nSau khi sử dụng, xịt nước hoa lên cơ thể, tránh dùng tay chà xát hoặc làm khô da bằng những vật dụng khác, điều này phá vỡ các tầng hương trong nước hoa, khiến nó có thể thay đổi mùi hương hoặc bay mùi nhanh hơn.\r\nĐể chai nước hoa cách vị trí cần dùng nước hoa trong khoảng 15-20cm và xịt mạnh, dứt khoát để mật đổ phủ của nước hoa được rộng nhất, tăng độ bám tỏa trên da của bạn.\r\nPhần cổ tay được xịt nước hoa thường có nhiều tác động như lúc rửa tay, đeo vòng, đồng hồ, do đó để đảm bảo mùi hương được duy trì, bạn nên sử dụng nước hoa ở cổ tay ở tần suất nhiều hơn lúc cần thiết.\r\nNước hoa có thể bám tốt hay không tốt tùy thuộc vào thời gian, không gian, cơ địa, chế độ sinh hoạt, ăn uống của bạn, việc sử dụng một loại nước hoa trong thời gian dài có thể khiến bạn bị quen mùi, dẫn đến hiện tượng không nhận biết được mùi hương. Mang theo nước hoa bên mình hoặc trang bị những mẫu mini tiện dụng để giúp bản thân luôn tự tin mọi lúc mọi nơi.\r\nBảo quản nước hoa:\r\n\r\nNước hoa phổ thông (Designer) thường không có hạn sử dụng, ở một số Quốc gia, việc ghi chú hạn sử dụng là điều bắt buộc để hàng hóa được bán ra trên thị trường. Hạn sử dụng ở một số dòng nước hoa được chú thích từ 24 đến 36 tháng, và tính từ ngày bạn mở sản phẩm và sử dụng lần đầu tiên.\r\nNước hoa là tổng hợp của nhiều thành phần hương liệu tự nhiên và tổng hợp, nên bảo quản nước hoa ở những nơi khô thoáng, mát mẻ, tránh nắng, nóng hoặc quá lạnh, lưu ý không để nước hoa trong cốp xe, những nơi có nhiệt độ nóng lạnh thất thường...', 37, 100, '2024-04-16 22:42:18', 3, 8, 'uploads/products/1713282138-le-labo-santal-33-fa66901a85514b-removebg-preview.webp'),
(24, 'Gucci Bloom For Her Mini Size', 530000, 480000, 6, 'Là một cơn gió mát của mùa xuân, tràn ngập sức sống. Gucci Bloom giống một bông hoa nhỏ bé đang từ từ nở rộ, tràn ngập giữa một vườn hoa trắng muốt đầy trang nhã. Chân thật với hương thơm của lá cây vào buổi sớm mai, chất chứa những giọt sương còn đọng lại vào đêm hôm trước. Gucci Bloom mộc mạc, trần trụi, đem lại cảm giác hồi xuân, mang tôi trở về với quá khứ, vui đùa cùng những cánh hoa trong vườn, nhâm nhi ly nước chanh mát lạnh trong một ngày nắng nóng. Chi ngân, Nhài và Huệ như hoà quyện vào gió, tạo nên một điệu nhảy của cánh hoa , mang đến những khoảnh khắc kì diệu, khác biệt và không hề gây buồn chán. Gỗ đàn hương và Vani hòa quyện với nhau như một cặp đôi đang khiêu vũ, trong veo đầy thơ mộng. Gucci Bloom là một giấc mộng của mùa xuân, mơ màng dưới bóng cây cổ thụ, nhưng biết hé nở và tỏa hương khi cần.\r\n\r\nBanner\r\n\r\n \r\n\r\nCách sử dụng đề xuất dành cho bạn:\r\n\r\nNước hoa mang lại mùi hương cho cơ thể bạn thông qua việc tiếp xúc lên da và phản ứng với hơi ấm trên cơ thể của bạn. Việc được tiếp xúc với các bộ phận như cổ tay, khuỷu tay, sau tai, gáy, cổ trước là những vị trí được ưu tiên hàng đầu trong việc sử dụng nước hoa bởi sự kín đáo và thuận lợi trong việc tỏa mùi hương.\r\nSau khi sử dụng, xịt nước hoa lên cơ thể, tránh dùng tay chà xát hoặc làm khô da bằng những vật dụng khác, điều này phá vỡ các tầng hương trong nước hoa, khiến nó có thể thay đổi mùi hương hoặc bay mùi nhanh hơn.\r\nĐể chai nước hoa cách vị trí cần dùng nước hoa trong khoảng 15-20cm và xịt mạnh, dứt khoát để mật đổ phủ của nước hoa được rộng nhất, tăng độ bám tỏa trên da của bạn.\r\nPhần cổ tay được xịt nước hoa thường có nhiều tác động như lúc rửa tay, đeo vòng, đồng hồ, do đó để đảm bảo mùi hương được duy trì, bạn nên sử dụng nước hoa ở cổ tay ở tần suất nhiều hơn lúc cần thiết.\r\nNước hoa có thể bám tốt hay không tốt tùy thuộc vào thời gian, không gian, cơ địa, chế độ sinh hoạt, ăn uống của bạn, việc sử dụng một loại nước hoa trong thời gian dài có thể khiến bạn bị quen mùi, dẫn đến hiện tượng không nhận biết được mùi hương. Mang theo nước hoa bên mình hoặc trang bị những mẫu mini tiện dụng để giúp bản thân luôn tự tin mọi lúc mọi nơi.\r\nBảo quản nước hoa:\r\n\r\nNước hoa phổ thông (Designer) thường không có hạn sử dụng, ở một số Quốc gia, việc ghi chú hạn sử dụng là điều bắt buộc để hàng hóa được bán ra trên thị trường. Hạn sử dụng ở một số dòng nước hoa được chú thích từ 24 đến 36 tháng, và tính từ ngày bạn mở sản phẩm và sử dụng lần đầu tiên.\r\nNước hoa là tổng hợp của nhiều thành phần hương liệu tự nhiên và tổng hợp, nên bảo quản nước hoa ở những nơi khô thoáng, mát mẻ, tránh nắng, nóng hoặc quá lạnh, lưu ý không để nước hoa trong cốp xe, những nơi có nhiệt độ nóng lạnh thất thường...', 179, 1000, '2024-04-16 22:43:26', 2, 4, 'uploads/products/1713282206-gucci-bloom-02f6ff28224143c6a358.webp'),
(25, 'Marc Jacobs Daisy Dream', 1990000, 1850000, 15, 'Cô ấy, một con người đầy ước mơ và hoài bão. Việc duy trì thứ năng lượng tích cực đó không bao giờ là quá khó khi bạn ở bên cô gái mộng mơ nhưng lại tinh tế một cách đặc biệt.\r\n\r\nMarc Jacobs Daisy Dream là tổ hợp từ các nốt hương hoa cỏ và trái cây, tiêu biểu phải kể đến là nốt Mâm xôi mọng nước kết hợp cùng Quả lê chín từ từ chậm rãi lan tỏa ngay khi vừa chạm mũi. Thời khắc quyết định là lúc hương Hoa tử đằng cùng Hoa nhài bắt đầu tỏa hương, mùi hương không quá nồng nàn mà ngược lại rất ngây thơ và thuần khiết. Ngoài ra, với sự trợ giúp từ hương Vải, khiến cho mùi hương không những mềm mại, nữ tính mà còn rất nhẹ nhàng, bay bổng. Tầng hương cuối khá cân bằng nhờ vào Gỗ trắng và một ít Xạ hương làm cho tổng thể mùi hương của Daisy Dream không quá ngọt nhưng lại khá thú vị và gợi cảm.\r\n\r\nMarc Jacobs Daisy Dream là vậy, tuy vẫn là cô nàng trẻ trung và mộng mơ nhưng lại có thừa bản lĩnh của tuổi trưởng thành.\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.', 48, 100, '2024-04-16 22:45:33', 2, 9, 'uploads/products/1713282333-full-17bcae326b9040c383627b14f7e-removebg-preview.webp'),
(26, 'Hermès H24 Travel Spray - Quà tặng', 1000000, 10000, 16, 'Mùi hương mới của dòng nước hoa nam tính Hermès ra mắt vào tháng 2 năm 2021 với tên gọi Hermès H24. Đây được coi là lần ra mắt lớn đầu tiên thuộc mảng nước hoa nam sau 15 năm, sau Terre d’Hermès, tuyệt tác được tạo ra bởi Jean-Claude Ellena vào năm 2006. Tôi sẽ mô tả đây như một mùi hương thuộc tuýp xanh lục mập mờ và khô ráo - màu xanh lục như trong lá cây và phong rêu, sương mù như trong xạ hương, và chypre như trong khô ráo ấm áp. Những nốt hương đầu tiên vô cùng hấp dẫn, như một bức tranh được phủ bạc với sắc màu của bạch đàn cùng cây xô thơm mịn màng lả lướt. Nốt cây xô thơm hiện diện trong H24 giống như da lộn, sở hữu một độ trong suốt thoáng đãng và hương thảo mộc mềm mượt, tròn trịa, lấp lánh nhưng cũng một chút có hoa lá. Yếu tố hoa đó được làm nổi bật bởi một nốt hoa thủy tiên tinh tế, nhẹ nhàng và trơn tru, nó định hình kết cấu và đặc điểm của mùi hương hơn là hương vị của chính nó, mang lại sự phong phú và nồng nàn sang trọng như bơ, một ít chất sáp và một ít chất trái cây. Và chất trái cây ấy đã mang đến một màn lột xác ngoạn mục của hương xô thơm, đưa cây xô thơm đi xa hơn đến với lãnh địa của mùi hương quả sung hoặc đu đủ.\r\n\r\nBanner\r\n\r\nCách sử dụng được namperfume đề xuất dành cho bạn:\r\n\r\nNước hoa mang lại mùi hương cho cơ thể bạn thông qua việc tiếp xúc lên da và phản ứng với hơi ấm trên cơ thể của bạn. Việc được tiếp xúc với các bộ phận như cổ tay, khuỷu tay, sau tai, gáy, cổ trước là những vị trí được ưu tiên hàng đầu trong việc sử dụng nước hoa bởi sự kín đáo và thuận lợi trong việc tỏa mùi hương.\r\nSau khi sử dụng, xịt nước hoa lên cơ thể, tránh dùng tay chà xát hoặc làm khô da bằng những vật dụng khác, điều này phá vỡ các tầng hương trong nước hoa, khiến nó có thể thay đổi mùi hương hoặc bay mùi nhanh hơn.\r\nĐể chai nước hoa cách vị trí cần dùng nước hoa trong khoảng 15-20cm và xịt mạnh, dứt khoát để mật đổ phủ của nước hoa được rộng nhất, tăng độ bám tỏa trên da của bạn.\r\nPhần cổ tay được xịt nước hoa thường có nhiều tác động như lúc rửa tay, đeo vòng, đồng hồ, do đó để đảm bảo mùi hương được duy trì, bạn nên sử dụng nước hoa ở cổ tay ở tần suất nhiều hơn lúc cần thiết.\r\nNước hoa có thể bám tốt hay không tốt tùy thuộc vào thời gian, không gian, cơ địa, chế độ sinh hoạt, ăn uống của bạn, việc sử dụng một loại nước hoa trong thời gian dài có thể khiến bạn bị quen mùi, dẫn đến hiện tượng không nhận biết được mùi hương. Mang theo nước hoa bên mình hoặc trang bị những mẫu mini tiện dụng để giúp bản thân luôn tự tin mọi lúc mọi nơi.\r\nBảo quản nước hoa:\r\n\r\nNước hoa phổ thông (Designer) thường không có hạn sử dụng, ở một số Quốc gia, việc ghi chú hạn sử dụng là điều bắt buộc để hàng hóa được bán ra trên thị trường. Hạn sử dụng ở một số dòng nước hoa được chú thích từ 24 đến 36 tháng, và tính từ ngày bạn mở sản phẩm và sử dụng lần đầu tiên.\r\nNước hoa là tổng hợp của nhiều thành phần hương liệu tự nhiên và tổng hợp, nên bảo quản nước hoa ở những nơi khô thoáng, mát mẻ, tránh nắng, nóng hoặc quá lạnh, lưu ý không để nước hoa trong cốp xe, những nơi có nhiệt độ nóng lạnh thất thường...', 1000, 10000, '2024-04-16 22:48:22', 3, 5, 'uploads/products/1713282502-h24-abf884ca034241b894f24c31c1d2-removebg-preview-min.webp'),
(28, 'Nước Hoa Nam Ajmal Amaze', 750000, 550000, 8, 'Amaze by Ajmal là một loại nước hoa đầy mê hoặc được thiết kế để nâng cao sự hiện diện của bạn và tạo ấn tượng lâu dài. Với sự pha trộn độc đáo của hương cam quýt, hoa và da thuộc, Amaze làm say đắm các giác quan và để lại dấu ấn khó phai mờ trong mọi dịp. Được chế tác tỉ mỉ đến từng chi tiết, Eau de Parfum này thể hiện sự tinh tế, quyến rũ và quyến rũ. Cho dù bạn đang tham dự một sự kiện đặc biệt, gặp gỡ những người mới hay chỉ đơn giản là muốn nổi bật, Amaze by Ajmal là sự lựa chọn hoàn hảo cho những ai dám gây ấn tượng khó quên. Trải nghiệm sức hấp dẫn quyến rũ của Amaze và để lại ấn tượng lâu dài ở bất cứ nơi đâu bạn đến.\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.\r\n\r\nDòng nước hoa Ajmal này chủ yếu là các phiên bản dành cho nam giới sử dụng vì nó dịu nhẹ và phù hợp với môi trường văn phòng.', 58, 100, '2024-04-16 22:51:21', 1, 5, 'uploads/products/1713282681-amaze-bot-him-web-1-min.webp'),
(29, 'Nước Hoa Nam Ajmal Vision', 750000, 630000, 8, 'Blu by Ajmal giới thiệu một loại nước hoa tinh tế của Pháp, được thiết kế đặc biệt dành cho những chàng trai trẻ năng động và nhiệt huyết ngày nay. Loại Eau de Parfum tươi mát và có mùi nước này đáp ứng thị hiếu đương đại của họ, mang đến một lựa chọn hồi sinh cho những ai yêu thích những cuộc phiêu lưu ngoài trời. Thành phần của nó giới thiệu hương thơm mùa hè thơm nồng, kết hợp khéo léo hương đầu của Cam Bergamot, Hoa oải hương và Dưa hấu với các thành phần tiếp thêm sinh lực như Hoa sen và Hoa nhài ở cốt lõi. Cuối cùng, Blu của Ajmal để lại ấn tượng lâu dài. Nó cộng hưởng với các nốt hương cơ bản của Gỗ đàn hương, Xạ hương và Hổ phách.\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.\r\n\r\nDòng nước hoa Ajmal này chủ yếu là các phiên bản dành cho nam giới sử dụng vì nó dịu nhẹ và phù hợp với môi trường văn phòng.', 37, 100, '2024-04-16 22:52:27', 1, 5, 'uploads/products/1713282747-vision-for-men-1-min.webp'),
(30, 'Nước Hoa Jolie Dion Blue 60ml', 1005000, 1000000, 8, 'Blu by Ajmal giới thiệu một loại nước hoa tinh tế của Pháp, được thiết kế đặc biệt dành cho những chàng trai trẻ năng động và nhiệt huyết ngày nay. Loại Eau de Parfum tươi mát và có mùi nước này đáp ứng thị hiếu đương đại của họ, mang đến một lựa chọn hồi sinh cho những ai yêu thích những cuộc phiêu lưu ngoài trời. Thành phần của nó giới thiệu hương thơm mùa hè thơm nồng, kết hợp khéo léo hương đầu của Cam Bergamot, Hoa oải hương và Dưa hấu với các thành phần tiếp thêm sinh lực như Hoa sen và Hoa nhài ở cốt lõi. Cuối cùng, Blu của Ajmal để lại ấn tượng lâu dài. Nó cộng hưởng với các nốt hương cơ bản của Gỗ đàn hương, Xạ hương và Hổ phách.\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.\r\n\r\nDòng nước hoa Ajmal này chủ yếu là các phiên bản dành cho nam giới sử dụng vì nó dịu nhẹ và phù hợp với môi trường văn phòng.', 27, 100, '2024-04-16 22:54:09', 1, 5, 'uploads/products/1713282849-blu-homme1-2-1-min.webp'),
(31, 'Nước hoa Evoke for Women', 740000, 680000, 17, 'Evoke được thiết kế dành cho những người phụ nữ trẻ quyến rũ, sôi động và tràn đầy sức sống. Sự mở đầu tươi mát và cay nồng của cam Bergamot và tiêu hồng chào đón hương giữa đầy hương hoa bao gồm hoa nhài, hoa hồng và hoa diên vĩ. Hương thơm được ẩn mình trên lớp nền Woody Powdery chắc chắn của hoắc hương, Vani và Rêu mang lại cho hương thơm một cảm giác dễ chịu nhưng đầy khiêu khích.\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.\r\n\r\nDòng nước hoa Evoke này chủ yếu là các phiên bản dành cho nam giới sử dụng vì nó dịu nhẹ và phù hợp với môi trường văn phòng.', 37, 100, '2024-04-16 22:55:38', 2, 8, 'uploads/products/1713282938-evoke-her-14ml-edp-min.webp'),
(32, 'Nước Hoa Entice For Men', 370000, 320000, 8, 'Hương thơm báo trước hương đầu cay tươi và trái tim hoa trái cây được tạo ra với sự kết hợp của cam Bergamot, húng quế, quýt kết hợp với hoa hồng, hoa nhài và cây bách xù. Hương cuối phản ánh cỏ hương bài, hoắc hương và xạ hương trắng, cho phép anh tận hưởng niềm vui đáng nhớ và quý giá đến từ Entice.\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.\r\n\r\nDòng nước hoa Ajmal này chủ yếu là các phiên bản dành cho nam giới sử dụng vì nó dịu nhẹ và phù hợp với môi trường văn phòng.', 38, 100, '2024-04-16 22:56:34', 1, 8, 'uploads/products/1713282994-entice-him-edp-1-min.webp'),
(33, 'Nước Hoa Elixir Precious For Women', 730000, 570000, 18, 'Lấy cảm hứng từ sự bí ẩn của vẻ đẹp bên trong, chúng tôi đã tạo ra một lọ thuốc thần bí cho tình yêu đích thực. Elixir Precious là một vườn hoa rực rỡ trong màu hổ phách đậm đà. Vì vậy, đừng ngần ngại và hãy dành cho mình sự tiếp xúc không thể cưỡng lại được.\r\n\r\nBanner\r\n\r\nNếu cho rằng nước hoa là một loại trang sức thì đây là một loại trang sức kín đáo và thần diệu nhất. Nước hoa tạo thêm sự thanh lịch, thu hút và quyến rũ cho bạn khi giao tiếp, nó có thể tạo nên một ấn tượng khó quên về bạn nơi người khác. Nó là vũ khí quyến rũ hiệu quả nhất và lâu bền bởi nó “đánh” vào giác quan nhạy cảm của con người, khiến người đi rồi mùi hương còn đọng lại mãi và ký ức có thể bùng lên bất kỳ lúc nào khi có mùi hương tương đồng thoảng nhẹ qua.', 47, 100, '2024-04-16 22:57:56', 2, 5, 'uploads/products/1713283076-elixir-precious-for-women1.webp'),
(34, 'NƯỚC HOA GUCCI FLORA GORGEOUS MAGNOLIA EDP', 5050000, 4797000, 6, 'Mùi hương Gucci Flora Gorgeous Magnolia EDP mở đầu đầy tươi mới với sự bùng nổ của hương trái cây. Hương thơm thanh mát của quả mâm xôi mang đến âm hưởng vừa ngọt ngào vừa tươi tắn vô cùng kích thích khứu giác. Kết hợp cùng hương thơm bùi béo của nốt dừa béo ngậy tạo nên cảm giác rất nữ tính và sảng khoái. \r\n\r\nNối tiếp theo ngay sau đó, Gucci Flora Gorgeous Magnolia EDP dẫn dắt đến với cung bậc của tầng hương tiếp theo vô cùng uyển chuyển. Hương thơm của các nốt hương hoa khiến bất cứ ai cũng phải chìm đắm trong sự nồng nàn và nữ tính. Hương thơm hoa nhài thanh thoát, dễ chịu mang đến cảm giác thư thái. Len lỏi theo là làn hương là nốt hương hoa mộc lan mềm mại, thơm ngát. Nhấn nhá thêm chút hương thơm tự nhiên, tươi mát của xô thơm. Chắc chắn khiến các cô nàng phải mê mẩn ngay từ lần chạm mũi đầu tiên.', 59, 100, '2024-04-16 23:01:12', 2, 7, 'uploads/products/1713283272-20231031132611_398682.webp'),
(35, 'Nước hoa Gucci Bloom Intense EDP', 5150000, 4892000, 6, 'Quyến rũ, độc đáo và đầy tinh tế là những mỹ từ dùng để miêu tả hương thơm của nước hoa Gucci Bloom Intense EDP. Mùi hương của Gucci Bloom Intense kết hợp giữa hương thơm nữ tính và sắc sảo của các loại hoa như: hoa huệ, hoa nhài. Hương đầu của nước hoa là sự kết hợp của cam quýt, gừng và hoa cam bergamot, tạo nên một hương thơm tươi mát và sảng khoái. Hương giữa của Gucci Bloom Intense là sự kết hợp của hoa huệ, hoa cam và hoa nhài, mang đến một hương thơm nhẹ nhàng và mềm mại. Hương cuối của nước hoa là sự kết hợp của xạ hương, hoắc hương, rêu và dừa, tạo nên một mùi hương đa chiều và có chiều sâu. Nhìn chung, hương thơm là sự pha trộn hoàn hảo của các hương hoa cỏ, mang đến một mùi hương quyến rũ và độc đáo dành cho những ai yêu thích mùi hương quyến rũ và tràn đầy sự nữ tính.', 69, 100, '2024-04-16 23:03:06', 2, 7, 'uploads/products/1713283386-20230727131355_154044.webp'),
(36, 'Gucci Guilty Elixir De Parfum Pour Femme', 4620000, 4389000, 6, 'Gucci Guilty Elixir De Parfum Pour Femme là một hương thơm đầy quyến rũ và gợi cảm, được tạo ra đặc biệt để phô diễn sự độc đáo và cá tính của phụ nữ hiện đại. Mở đầu, chai nước hoa mang đến sự tươi mát của cam Bergamot và sự quyến rũ độc đáo của quả Mandora. Những nốt hương này tạo nên một mở đầu tươi sáng và đầy sức sống, làm dậy thức giác và tạo nên cảm giác sảng khoái. Tầng hương giữa đem đến sự quyến rũ và nữ tính. Hương hoa tử đằng nồng nàn và tinh tế cùng với sự kiêu sa của hoa hồng, tạo nên một tầng hương trung tâm đầy lôi cuốn. Hoa mộc hương thêm sự ấm áp và mềm mại, tạo nên một tinh thần thật sự gợi cảm.  Và đến cuối cùng, ở tầng hương cuối, Gucci Guilty Elixir De Parfum Pour Femme đem đến sự ấm áp và độc đáo. Hương Vani kết hợp cùng đậu Tonka ngọt ngào và cây hoắc hương bí ẩn, tạo nên một kết thúc đầy sâu lắng và quyến rũ cho mùi hương.', 70, 100, '2024-04-16 23:05:40', 2, 7, 'uploads/products/1713283540-20231115172828_907775.webp'),
(37, 'Gucci Guilty Elixir De Parfum Pour Homme', 4280000, 4066000, 6, 'Hương thơm là sự kết hợp đầy khéo léo của hai nhà sáng tạo nước hoa tài năng là Quentin Bisch và Natalie Gracia-Cetto. Sự sáng tạo và tinh tế của họ đã tạo nên một tác phẩm nghệ thuật hương thơm tinh tế, thể hiện sự kết hợp táo bạo của các hương liệu quý hiếm và độc đáo.\r\n\r\nMở đầu, Gucci Guilty Elixir De Parfum Pour Homme tạo cho người thưởng hương một cảm giác sảng khoái và đầy phấn khích đến từ tinh chất hoa cam và Pimento. Tiếp đó, nhục đậu khấu kết hợp tạo nên một nốt hương độc đáo và bí ẩn, làm cho lớp hương đầu trở nên quyến rũ và đáng nhớ. Tiếp đến, ở tầng hương giữa sự kết hợp của hương bơ cây diên vĩ, tinh chất hoa cam và hoa mộc tê tạo nên một dấu ấn riêng biệt và phá cách. Đến cuối cùng, hương thơm của Guilty Elixir de Parfum Pour Homme trở nên cao trào của sự quyến rũ và ấm áp. Ambrofix cùng với Benzoin Resinoid Lào tạo nên một tầng hương gỗ độc đáo và sâu lắng, đầy phức tạp. Vanillin Ex-rice và dầu hoắc hương không màu mang đến sự ngọt ngào và bền bỉ cho lớp hương cuối, làm cho mùi hương càng trở nên cuốn hút và đậm chất riêng.', 69, 100, '2024-04-16 23:06:49', 1, 7, 'uploads/products/1713283609-20231115172017_926435.webp');

-- --------------------------------------------------------

--
-- Table structure for table `pro_floral`
--

CREATE TABLE `pro_floral` (
  `pro_id` int NOT NULL,
  `loai_huong_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `key` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'ádfasdf', 'ádfasdfasdf'),
(2, 'ádfasdfassddddd', 'dfasdfweqrqewr');

-- --------------------------------------------------------

--
-- Table structure for table `type_pro`
--

CREATE TABLE `type_pro` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `type_pro`
--

INSERT INTO `type_pro` (`id`, `name`) VALUES
(1, 'Nước Hoa Nam'),
(2, 'Nước Hoa Nữ'),
(3, 'Nước Hoa Unisex');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `tell` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `crea` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `img`, `email`, `pass`, `tell`, `address`, `crea`, `role`) VALUES
(8, 'Nguyễn Đức Thiện', 'uploads/user/1712073909-z5265201440802_37ea6031a6964312a8bf7163a32b0f89.jpg', 'thienndph45464@fpt.edu.vn', 'thien21724', '0896947661', 'Hà Nội', '2024-03-19 19:43:38', 1),
(9, 'sdf', 'uploads/user/1710899961-logo5.jpg', 'thien@gmail.com', 'thien123', '0321618985', 'sdfsadfsadf', '2024-03-19 20:05:01', 0),
(11, 'asdfadsf', 'uploads/user/1711516265-hhh.png', 'sdfsdf@gmail.com', 'assdfasdf234ds', '0315756482', 'adsfwerdfs324dfs', '2024-03-27 12:11:05', 0),
(12, 'asdf', 'uploads/user/1711904671-z5265201440802_37ea6031a6964312a8bf7163a32b0f89.jpg', 'client@gmail.com', 'thkdien23442', '0337600216', 'fsfdsddfsd', '2024-04-01 00:04:31', 0),
(14, 'asdf', NULL, 'lasdkjf@gmail.com', 'thien21724', '0248624751', NULL, '2024-04-10 14:37:58', 0),
(15, 'TRƯƠNG THÁI TÚ', 'uploads/user/1713278549-OIP (1).jpg', 'tuttph45304@fpt.edu.vn', '12345678', '1414', 'Khu 10 Đại Phúc, Thành Phố Bắc Ninh, Bắc Ninh', '2024-04-16 21:42:29', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills_item`
--
ALTER TABLE `bills_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capacitys`
--
ALTER TABLE `capacitys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_dt_sp` (`pro_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_cart_sp` (`pro_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `florals`
--
ALTER TABLE `florals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_products`
--
ALTER TABLE `img_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_proimg_sp` (`product_id`);

--
-- Indexes for table `origins`
--
ALTER TABLE `origins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sp_lsp` (`type_id`),
  ADD KEY `lk_sp_xx` (`origin_id`),
  ADD KEY `lk_sp_th` (`brand_id`);

--
-- Indexes for table `pro_floral`
--
ALTER TABLE `pro_floral`
  ADD KEY `lk_proh_sp` (`pro_id`),
  ADD KEY `lk_proh_lh` (`loai_huong_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_pro`
--
ALTER TABLE `type_pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `bills_item`
--
ALTER TABLE `bills_item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `capacitys`
--
ALTER TABLE `capacitys`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `florals`
--
ALTER TABLE `florals`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img_products`
--
ALTER TABLE `img_products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `origins`
--
ALTER TABLE `origins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type_pro`
--
ALTER TABLE `type_pro`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `capacitys`
--
ALTER TABLE `capacitys`
  ADD CONSTRAINT `lk_dt_sp` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `lk_cart_sp` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `img_products`
--
ALTER TABLE `img_products`
  ADD CONSTRAINT `lk_proimg_sp` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `lk_sp_lsp` FOREIGN KEY (`type_id`) REFERENCES `type_pro` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_sp_th` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_sp_xx` FOREIGN KEY (`origin_id`) REFERENCES `origins` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `pro_floral`
--
ALTER TABLE `pro_floral`
  ADD CONSTRAINT `lk_proh_lh` FOREIGN KEY (`loai_huong_id`) REFERENCES `florals` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_proh_sp` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
