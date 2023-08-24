-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2021 lúc 04:28 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_kh` varchar(20) NOT NULL,
  `ngay_bl` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(1, 'good', 6, 'ph14', '2021-10-05'),
(2, 'good', 11, 'ph14', '2021-10-25'),
(3, 'good', 10, 'ph15', '2021-10-25'),
(4, 'Sản phẩm tốt', 11, 'ph15', '2021-10-25'),
(5, 'Khi sử dụng camera máy rất nóng. Gọi zalo máy nóng và tụt pin quá nhanh... Chỉ sử dụng cơ bản mà như vậy, thật sự quá thất vọng', 12, 'ph15', '2021-10-25'),
(6, 'Khi sử dụng camera máy rất nóng. Gọi zalo máy nóng và tụt pin quá nhanh... Chỉ sử dụng cơ bản mà như vậy, thật sự quá thất vọng', 15, 'ph15', '2021-10-25'),
(7, 'good', 21, 'ph15', '2021-10-25'),
(8, 'good', 18, 'ph15', '2021-10-25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(50) NOT NULL,
  `don_gia` double NOT NULL,
  `giam_gia` double(10,2) DEFAULT NULL,
  `hinh` varchar(2255) NOT NULL,
  `ngay_nhap` date NOT NULL DEFAULT current_timestamp(),
  `mo_ta` varchar(2000) NOT NULL,
  `dac_biet` tinyint(1) NOT NULL DEFAULT 0,
  `so_luot_xem` int(255) NOT NULL DEFAULT 0,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(10, 'Điện thoại iPhone 13 Pro Max 128GB ', 33000000, 0.10, 'iphone-13-pro-max-sierra-blue-600x600 (1).jpg', '2021-10-21', 'iPhone 13 Pro Max 128GB - siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.\r\nThiết kế đẳng cấp hàng đầu\r\niPhone mới kế thừa thiết kế đặc trưng từ iPhone 12 Pro Max khi sở hữu khung viền vuông vức, mặt lưng kính cùng màn hình tai thỏ tràn viền nằm ở phía trước. Với iPhone 13 Pro Max phần tai thỏ đã được thu gọn lại 20% so với thế hệ trước, không chỉ giải phóng nhiều không gian hiển thị hơn mà còn giúp mặt trước chiếc điện thoại trở nên hấp dẫn hơn mà vẫn đảm bảo được hoạt động của các cảm biến. Điểm thay đổi dễ dàng nhận biết trên iPhone 13 Pro Max chính là kích thước của cảm biến camera sau được làm to hơn và để tăng độ nhận diện cho sản phẩm mới thì Apple cũng đã bổ sung một tùy chọn màu sắc Sierra Blue (màu xanh dương nhạt hơn so với Pacific Blue của iPhone 12 Pro Max).', 1, 3, 1),
(11, 'Điện thoại OPPO Reno6 Pro 5G', 18490000, 0.00, 'oppo-reno6-pro-blue-1-600x600.jpg', '2021-10-15', 'OPPO Reno6 Pro 5G - một sản phẩm thuộc dòng Reno6 của OPPO, thỏa mãn những gì người tiêu dùng đã trông đợi với cấu hình khủng cùng hệ thống camera cực ấn tượng và ngoại hình bắt mắt, thật hào hứng mong chờ để được trải nghiệm.\r\nHiệu năng cực mạnh mẽ với Snapdragon 870\r\nReno6 Pro 5G trang bị bộ vi xử lý mạnh mẽ Snapdragon 870 đến từ Qualcomm, đạt tốc độ xử lý cao trên xung nhịp lên đến 3.2 GHz, hiệu suất CPU tăng lên 12% và GPU 10% so với thế hệ chipset tiền nhiệm, mang đến trải nghiệm ấn tượng trên từng tác vụ giải trí lẫn công việc.\r\nĐồng thời, Snapdragon 870 cũng tỏa nhiệt ít hơn so với Snapdragon 888 nên bạn sẽ cảm thấy điện thoại trong tình trạng mát mẻ hơn khi dùng lâu. Đi theo chipset mạnh mẽ là bộ nhớ RAM 12 GB gia tăng độ mượt và sự ổn định khi sử dụng giữa các tác vụ được mở, cùng dung lượng 256 GB bộ nhớ trong thoải mái lưu trữ các tựa game yêu thích và tạo kho ảnh chụp, video của riêng bạn.\r\nVới cấu hình này, thật đơn giản để chiến các tựa game mobile đình đám như Liên Quân Mobile, PUBG Mobile,... hay thử trải nghiệm các ứng dụng chỉnh sửa ảnh chuyên nghiệp trên smartphone của bạn. Điện thoại thông minh hỗ trợ 5G, công nghệ kết nối siêu tốc cho Reno6 khả năng đăng tải, load thông tin, hình ảnh, video,... cực kỳ nhanh chóng giúp mọi trải nghiệm giải trí trên internet của bạn không có chút trở ngại!\r\n\r\n\r\n\r\n', 1, 4, 22),
(12, 'Điện thoại OPPO Reno6 Z 5G ', 9490000, 0.00, 'oppo-reno6-z-5g-aurora-1-600x600.jpg', '2021-10-15', 'Reno6 Z 5G đến từ nhà OPPO với hàng loạt sự nâng cấp và cải tiến không chỉ ngoại hình bên ngoài mà còn sức mạnh bên trong. Đặc biệt, chiếc điện thoại được hãng đánh giá “chuyên gia chân dung bắt trọn mọi cảm xúc chân thật nhất”, đây chắc chắn sẽ là một “siêu phẩm\" mà bạn không thể bỏ qua.\r\nBộ 3 camera chuyên nghiệp - Mỗi cảm xúc, một chân dung\r\nHệ thống camera sau được trang bị tối tân, trong đó có camera chính 64 MP, camera góc siêu rộng 8 MP và camera macro 2 MP cùng camera trước 32 MP luôn sẵn sàng bắt trọn mọi cảm xúc trong khung hình, giúp người dùng thoải mái ghi lại những khoảnh khắc trong cuộc sống một cách ấn tượng nhất. Camera chính có độ phân giải cao và nhờ thuật toán có thể tăng độ phân giải bức ảnh lên đến 108 MP. Với tính năng này, chúng ta sẽ rất dễ dàng chụp được những bức ảnh đông người hay các cảnh vật ở xa và khi zoom lên các chi tiết vẫn rất rõ nét. Đón đầu xu hướng cùng nhà OPPO với tính năng đột phá “Chân dung Bokeh Flare” không chỉ đơn thuần là xóa phông, mà nó sẽ xử lý chủ thể và hậu cảnh một cách độc lập, từ đó kết hợp cùng công nghệ AI chỉnh ánh sáng phía sau thành phông nền ảo diệu làm cho tổng thể bức ảnh lung linh hơn và nghệ thuật hơn. Tính năng chụp ảnh nhanh SnapShot cho độ phơi sáng lên đến 1/1000 ms ở ngoài trời với ánh sáng tốt. Qua đó, bạn có thể bắt trọn từng chuyển động của đối tượng như trẻ em đang chạy nhảy, các bộ môn thể thao với độ rõ nét tốt hơn.\r\n\r\n\r\n\r\n', 1, 2, 22),
(13, 'Điện thoại iPhone 12 64GB', 20490000, 0.00, 'iphone-12-xanh-la-new-2-600x600.jpg', '2021-10-13', 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.\r\nHiệu năng vượt xa mọi giới hạn\r\nApple đã trang bị con chip mới nhất của hãng (tính đến 11/2020) cho iPhone 12 đó là A14 Bionic, được sản xuất trên tiến trình 5 nm với hiệu suất ổn định hơn so với chip A13 được trang bị trên phiên bản tiền nhiệm iPhone 11. Với CPU Apple A14 Bionic, bạn có thể dễ dàng trải nghiệm mọi tựa game với những pha chuyển cảnh mượt mà hay hàng loạt hiệu ứng đồ họa tuyệt đẹp ở mức đồ họa cao mà không lo tình trạng giật lag. hưa hết, Apple còn gây bất ngờ đến người dùng với hệ thống 5G lần đầu tiên được trang bị trên những chiếc iPhone, cho tốc độ truyền tải dữ liệu nhanh hơn, ổn định hơn.  iPhone 12 sẽ chạy trên hệ điều hành iOS 14 với nhiều tính năng hấp dẫn như hỗ trợ Widget cũng như những nâng cấp tối ưu phần mềm đáng kể mang lại những trải nghiệm thú vị mới lạ đến người dùng.\r\n\r\n', 1, 0, 1),
(14, 'Laptop Dell Gaming G3 15 i7 10750H/16GB/512GB/6GB ', 31490000, 0.00, 'dell-g3-15-i7-p89f002bwh-16-600x600.jpg', '2021-10-16', 'Laptop Dell G3 15 i7 (P89F002BWH) thuộc dòng laptop gaming với cấu hình mạnh mẽ, thiết kế trang nhã và rất sang trọng, dễ lựa chọn cho cả người đi đọc, đi làm, là 1 phiên bản tốt để lựa chọn cho cả nhu cầu làm việc, học tập và chơi game giải trí.\r\nSang trọng, tinh tế, phong cách trẻ trung, hiện đại\r\nĐược đưa vào phân khúc laptop gaming, Dell G3 vì thế trang bị vẻ ngoài cũng mang hơi hướng mạnh mẽ, cá tính, nhưng đủ tinh tế và rất sang trọng để người dùng có thể thoải mái mang theo sử dụng ở mọi nơi.\r\nLớp vỏ nhựa màu trắng hiện đại, các đường vát góc cạnh rất tinh tế, ngoại hình chắc chắn, trọng lượng 2.58 kg, độ dày 30.96 mm không quá nhẹ nhưng cũng không quá khó khăn để mang kèm nó tới văn phòng, lớp học,… Laptop Dell trang bị bàn phím với hành trình phím tốt, cụm phím WASD nổi bật, vùng phím số độc lập giúp thao tác soạn thảo và tính toán cực nhanh nhạy, thêm sự hỗ trợ của đèn nền để thao tác phím chuẩn xác cả trong điều kiện thiếu sáng. Bảo mật tốt hơn nhờ được tích hợp cảm biến vân tay ngay trên nút nguồn, thật nhanh chóng để mở máy và truy cập vào các trình duyệt cá nhân trong 1 chạm, cá nhân hóa tốt quyền riêng tư trên máy tính xách tay của bạn.\r\n\r\n', 1, 0, 2),
(15, 'Laptop MSI Katana Gaming GF66 11UC i7 11800H/8GB/5', 29790000, 0.00, 'msi-gf66-11uc-i7-224vn-600x600.jpg', '2021-10-14', 'Laptop MSI Katana GF66 11UC i7 (224VN) mang vẻ ngoài cơ động cùng cấu hình mạnh mẽ, đẩy nhanh quá trình xử lý mọi tác vụ hay sẵn sàng đồng hành cùng bạn chiến mọi thể loại game đầy kịch tính. \r\nPhát huy sức mạnh hiệu năng với chip Intel Gen 11\r\nHiệu năng được nâng cấp tối đa lên đến 40% so với các thế hệ tiền nhiệm nhờ bộ vi xử lý Intel Core i7 Tiger Lake 11800H sở hữu 8 nhân 16 luồng cùng xung nhịp tốc độ tối đa đến 4.6 GHz phát huy hiệu suất tối ưu trong xử lý công việc hay thoải mái chơi mọi trận game cực chất sau những giờ làm việc căng thẳng.\r\nBộ nhớ RAM 8 GB loại DDR4 2 khe có tốc độ Bus RAM 3200 MHz giúp laptop đa nhiệm mượt mà hơn trong mọi tác vụ, hỗ trợ mở nhiều ứng dụng mà không lo giật lag máy. Đặc biệt, MSI Katana được hỗ trợ 1 khe RAM trống để bạn dễ dàng nâng cấp RAM đến 64 GB mà không phải thay thế thanh RAM cũ đáp ứng thêm nhu cầu của bạn. Khả năng đồ họa vượt bật cùng card rời NVIDIA GeForce RTX 3050 sở hữu bộ nhớ đệm 4 GB, đáp ứng hầu hết các nhu cầu thiết kế 2D, 3D, chỉnh sửa video,... hay thỏa mãn người dùng với các tựa game hấp dẫn như Far Cry 5, Liên Minh Huyền Thoại, FIFA, GTA V, Apex Legends... ở mức cài đặt cao. Tiết kiệm tối đa thời gian mở và vận hành máy nhờ ổ cứng SSD 512 GB NVMe PCle giúp bạn khởi động game một cách nhanh chóng, đồng thời cung cấp không gian đủ lớn để bạn thoải mái lưu trữ các tựa game hay tệp đồ họa nặng. Phiên bản laptop MSI này được thiết kế nắp lưng kim loại bền bỉ với tông màu chủ đạo đen nhám cùng các cạnh có đường cắt nét gọt mạnh mẽ làm tôn lên vẻ cá tính cho người sở hữu.\r\nMáy sở hữu trọng lượng 2.1 kg và dày 24.9 mm đem đến sự tiện lợi trong quá trình di chuyển, thể hiện tính di động đối với một chiếc laptop gaming.', 1, 2, 2),
(16, 'Laptop HP Envy 13 ba1030TU i7 1165G7/8GB/512GB/Off', 30490000, 0.00, 'hp-envy-13-ba1030tu-i7-2k0b6pa-101820-091857-600x600.jpg', '2021-10-16', 'Laptop HP Envy 13 ba1030TU i7 (2K0B6PA) sở hữu thiết kế mỏng nhẹ cùng cấu hình cực mạnh mẽ đáp ứng đa dạng nhu cầu làm việc, giúp bạn đạt được hiệu suất làm việc tốt nhất.\r\nHiệu năng mạnh mẽ cho mọi công việc đạt hiệu suất tối đa\r\nLaptop HP Envy được trang bị bộ xử lý Intel Core i7. Đây là chiếc laptop sở hữu CPU thế hệ 11, lõi tứ 8 luồng cho xung nhịp trung bình 2.80 GHz ở các công việc văn phòng như Word, Excel, Powerpoint và xung nhịp tối đa lên đến 4.7 GHz với các tác vụ hạng nặng như: Photoshop, Adobe Premiere nhờ công nghệ Turbo Boost, mang đến hiệu năng mạnh mẽ đảm bảo xử lý tốt các công việc của bạn.\r\nRAM 8 GB cho khả năng đa nhiệm mượt mà, bạn có thể mở cùng lúc nhiều ứng dụng phục vụ cho công việc của bạn như vừa mở phần mềm thiết kế Adobe Illustrator, vừa mở trình duyệt web để tìm kiếm hình ảnh, nghe nhạc giải trí, lướt mạng xã hội mà laptop của bạn vẫn hoạt động một cách mượt mà và ổn định. Ổ cứng SSD 512 GB trên laptop mang đến cho bạn tốc độ mở máy và vào ứng dụng một cách nhanh chóng chỉ trong vài giây. Dung lượng lên đến 512 GB cho không gian lưu trữ lớn, bạn có thể thả ga lưu lại nhiều dữ liệu, tệp đa phương tiện hơn mà không cần lo lắng sẽ không đủ chỗ. Để đạt tiêu chuẩn nền Intel Evo laptop cần phải trải qua một bài kiểm tra nghiêm ngặt về khả năng ứng dụng thực tế như: tốc độ mở trang Chrome, khả năng xử lý các ứng dụng văn phòng Google G-Suite, Microsoft Office 365, thời lượng pin đạt 9 tiếng hoặc hơn,... Chiếc laptop HP này toát lên nét cực kỳ sang trọng với vỏ được làm từ kim loại sáng bóng bắt mắt, ngoài tăng nét thẩm mỹ cho máy thì lớp vỏ này còn giúp bảo vệ các linh kiện bên trong khi có va đập xảy ra và giúp máy tản nhiệt tốt hơn khi làm việc ở cường độ cao.\r\nTuy có lớp vỏ bằng kim loại nhưng máy lại siêu mỏng nhẹ với độ dày chỉ 16.9 mm và chỉ nặng 1.236 kg bạn có thể dễ dàng mang theo khi đi công tác hay đi gặp khách hàng mà không lo bị vướng víu.', 1, 0, 2),
(17, 'Laptop Lenovo Ideapad Gaming 3 15IMH05 i7 10750H/8', 25990000, 0.00, 'lenovo-ideapad-gaming-3-15imh05-i7-81y4013uvn-600x600.jpg', '2021-10-16', 'Laptop Lenovo Ideapad Gaming 3 15IMH05 i7 (81Y4013UVN) là dòng laptop gaming tầm trung với thiết kế tối giản, vẻ ngoài không quá hầm hố nhưng vẫn sở hữu hiệu năng cao đáp ứng tốt từ nhu cầu làm việc đến giải trí.\r\nThiết kế hiện đại, tối giản \r\nLenovo IdeaPad có thiết kế khá đơn giản, không đem lại cảm giác hầm hố mà vẫn mạnh mẽ đầy thu hút với điểm nhấn là những đường vát chéo ở các góc máy. Máy có độ dày khoảng 24.9 mm cùng trọng lượng 2.2 kg cho bạn thoải mái mang theo hằng ngày đến lớp, quán cà phê mà không sợ nặng hay cồng kềnh. Công tắc khóa camera giúp nâng cao bảo mật cho người dùng giúp che webcam khi không sử dụng, không còn mối lo bị hacker đánh cắp hình ảnh riêng tư.\r\nLaptop Lenovo sở hữu bàn phím full size với các phím bấm lớn, thiết kế lõm công thái học cho cảm giác bấm thoải mái nhất và hành trình phím 1.5 mm nhanh nhậy, chính xác. Bàn phím cũng có đèn nền màu xanh bắt mắt giúp bạn thao tác tốt ở những nơi thiếu sáng. Laptop gaming trang bị cho mình những cổng kết nối thông dụng và cần thiết như USB 3.2, HDMI, cổng mạng LAN (RJ45), USB Type-C để có thể nối máy với chuột, loa rời hay xuất hình sang màn hình chiếu để chơi game “đã” hơn. Laptop hỗ trợ Wi-Fi 6 AX201 với tốc độ truyền tải dữ liệu lên đến hơn 10.000 Mbps cho bạn trải nghiệm sử dụng mạng mượt mà, ổn định hơn.\r\nHiệu năng cao, chơi game, làm đồ họa mượt\r\nLenovo IdeaPad Gaming 3 được trang bị bộ vi xử lí Intel Core i7 Comet Lake dòng 10750H được nâng cấp toàn diện, tăng tốc về hiệu năng, lượng khung hình trên giây, phù hợp với laptop gaming. Chip này có tốc độ xung nhịp cơ bản 2.60 GHz và tối đa 5.0 GHz khi ép xung bằng Turbo Boost.', 1, 0, 2),
(18, 'Tai nghe Bluetooth AirPods 2 Apple MV7N2', 4390000, 0.00, 'bluetooth-airpods-2-apple-mv7n2-imei-ava-600x600.jpg', '2021-10-14', 'Tai nghe Bluetooth AirPods 2 Apple MV7N2 Trắng vẫn giữ cho mình thiết kế hiện đại, cao cấp, hợp thời trang. Tai nghe AirPods 2 trang bị chip H1 giúp tai nghe kết nối ổn định, nhanh chóng và tiết kiệm pin hơn. Hỗ trợ kích hoạt Siri bằng giọng nói \"Hey, Siri\" và thao tác cảm ứng tiện lợi\r\nNgoài ra, tai nghe Bluetooth AirPods 2 còn hỗ trợ nhận cuộc gọi, vì thế bạn có thể nghe hoặc tạm dừng đoạn nhạc đang phát trên điện thoại bằng những thao tác chạm cảm ứng trên tai nghe, cực kỳ tiện lợi cho người dùng khi di chuyển. Kết nối được hầu hết với các thiết bị Apple và cả với các thiết bị hệ điều hành Android, Windows\r\nTai nghe Apple AirPods 2 sử dụng chuẩn kết nối Bluetooth 5.0 được tối ưu cho mọi thiết bị của hãng như iMac, Macbook, Apple Watch, iPhone, iPadvà cả những thiết bị điện thoại, máy tính bảng chạy Android hay laptop, máy tính Windows.Trang bị công nghệ khử tiếng ồn cuộc gọi, đảm bảo chất lượng cuộc đàm thoại tốt nhất\r\nTai nghe Bluetooth Apple AirPods 2 trang bị tính năng khử ồn để tạo điểm nhấn khác biệt so với chiếc AirPods thế hệ đầu, nhằm cho ra chất âm tuyệt vời và cải thiện khoảng cách kết nối giữa các thiết bị.', 1, 2, 23),
(19, 'Pin sạc dự phòng Polymer 10.000 mAh Hydrus PA CK01', 245000, 0.00, 'pin-polymer-10000-mah-hydrus-pa-ck01-ava-600x600.jpg', '2021-10-25', 'Hiệu suất sạc tới 64%, dung lượng sạc dự phòng 10.000 mAh\r\nHydrus PA CK01 có khả năng tương thích cao với nhiều dòng thiết bị di động, dung lượng pin và hiệu suất sạc cao cho phép sản phẩm sạc được nhiều lần cho 1 thiết bị hoặc sạc đa dạng thiết bị, nhờ đó bạn có thể yên tâm trải nghiệm các thiết bị thông minh, nhất là khi đi đến những vùng không có nguồn điện. \r\nHỗ trợ lõi pin Polymer cho dòng xả liên tục giúp cấp nguồn cho thiết bị ổn định, độ bền cao, bảo vệ cho cả người dùng và phụ kiện. Sạc hiệu quả với 2 cổng ra và 1 cổng vào\r\nTrong đó:\r\n- 2 cổng ra USB cho dòng sạc 5V – 2.1A.\r\n- 1 cổng vào Micro USB cho dòng sạc Micro USB: 5V - 2A.\r\nNắm bắt lượng pin hiện tại của sạc dự phòng thuận tiện nhờ dải đèn LED 4 bóng với mỗi bóng thể hiện cho 25% dung lượng pin, dải đèn nằm ở vị trí gần các cổng kết nối rất dễ dàng quan sát. Người dùng có sạc cùng lúc 1 điện thoại và 1 máy tính bảng hay 2 điện thoại, tốc độ nạp pin mạnh mẽ đảm bảo thiết bị được chuẩn bị sẵn sàng cho bạn sử dụng bất cứ khi nào cần. Sạc lại dễ dàng với cổng Micro USB, để bổ sung năng lượng nhanh trong 5 - 6 giờ bạn có thể sử dụng adapter 2A, trường hợp chọn sạc với adapter 1A thì thời gian sẽ kéo dài từ 10 - 11 giờ. ', 1, 0, 23),
(20, 'Tai nghe Bluetooth True Wireless Galaxy Buds Pro B', 3992000, 0.00, 'bluetooth-true-wireless-galaxy-buds-pro-bac-ava-600x600.jpg', '2021-10-21', 'Thiết kế sang trọng, thời thượng cùng hộp sạc đồng nhất màu sắc đi kèm\r\nTai nghe Bluetooth True Wireless Samsung Buds Pro sở hữu vẻ ngoài đẹp mắt thời thượng với hai màu đen và trắng. Thiết kế mới trên hình dạng tai nghe cổ điển, có khả năng làm giảm bớt sự khó chịu khi sử dụng tai nghe trong nhiều giờ và tai nghe cũng nằm chắc chắn phía trong tai khi bạn tập luyện hay vận động. Đồng thời, các lỗ thoát khí giúp cân bằng áp suất trong tai và tăng lưu lượng không khí, tạo cảm giác mềm mại dễ chịu khi sử dụng.\r\nTai nghe có thiết kế nhỏ gọn nên bạn dễ dàng bỏ vào túi xách, balo và mang theo bên mình di chuyển mọi nơi. Ngoài ra, có kèm theo núm tai nghe với ba kích thước cho người dùng dễ thay đổi sao cho phù hợp. Hộp sạc gọn đẹp, phía bên trong tích hợp nam châm giữ củ tai an toàn, hạn chế thất lạc. Nghe rõ bất kỳ đâu cùng công nghệ chống ồn chủ động (ANC)\r\nTai nghe Samsung cho bạn thoải mái gọi điện và trò chuyện với đối tác, bạn bè mà không lo ngại tiếng ồn với công nghệ Active Noise Canceling lọc ấn tượng đến 99% tiếng ồn xung quanh. Bên cạnh đó, bạn có thể chọn các mức ANC để tăng hoặc giảm âm thanh phù hợp theo từng không gian tùy theo mức độ khác nhau. Nhờ đó, mang đến chất lượng cuộc gọi hoàn hảo nhất trên tai nghe không dây và truyền tải rõ ràng giọng nói, ngay cả khi bạn gọi điện ở nhà hay ở bên ngoài. ', 1, 0, 23),
(21, 'Pin sạc dự phòng Polymer 10.000 mAh Type C eSaver ', 600000, 0.00, 'polymer-10000-mah-type-c-esaver-pj-jp106s-avatar-1-1-600x600.jpg', '2021-10-21', 'Pin sạc dự phòng Polymer 10.000 mAh có thiết kế vỏ bằng nhôm chắc chắn\r\nKích thước pin không quá lớn, không gây cồng kềnh hay nặng tay khi sử dụng.\r\nDung lượng pin cao 10.000 mAh cho nhiều lần sạc\r\nSạc được cho điện thoại và máy tính bảng có dung lượng dưới 6.250 mAh, đầy pin nhanh trong 4 - 5 tiếng.\r\nLưu ý: Trong quá trình sạc pin sẽ bị hao hụt khoảng 35% dung lượng. Sạc lại trong 4 tiếng bằng cáp sạc điện thoại hoặc Laptop tùy bạn chọn\r\nBạn có thể dùng Adapter sạc hay dây cáp nối với Laptop để sạc cho pin.', 1, 2, 23),
(22, 'Điện thoại Samsung Galaxy A52s 5G ', 10990000, 0.00, 'samsung-galaxy-a52s-5g-mint-600x600.jpg', '2021-10-21', 'Samsung đã chính thức giới thiệu chiếc điện thoại Galaxy A52s 5G đến người dùng, đây phiên bản nâng cấp của Galaxy A52 5G ra mắt cách đây không lâu, với ngoại hình không đổi nhưng được nâng cấp đáng kể về thông số cấu hình bên trong.\r\nThiết kế đặc trưng Galaxy A\r\nSamsung Galaxy A52s tiếp tục sử dụng ngôn ngữ thiết kế nguyên khối theo phong cách trẻ trung với các tuỳ chọn màu sắc như: Đen, trắng, tím và xanh mint. Máy sử dụng màn hình nốt ruồi Super AMOLED kích thước 6.5 inch, độ phân giải Full HD+ cùng thiết kế tràn viền giúp mở rộng tối đa không gian hiển thị. Từ đó người dùng có thể thoải mái tận hưởng những chương trình giải trí cực kỳ hấp dẫn. Máy hỗ trợ tần số quét 120 Hz cùng tấm nền chất lượng giúp mọi trải nghiệm vuốt chạm trên máy được trở nên mượt mà, giúp mọi hình ảnh, thước phim trên điện thoại đều được hiển thị tươi tắn và vô cùng sắc nét. ', 1, 0, 24),
(23, 'Điện thoại Samsung Galaxy S21 Ultra 5G 128GB ', 25990000, 0.00, 'samsung-galaxy-s21-ultra-bac-600x600-1-600x600.jpg', '2021-10-22', 'Sự đẳng cấp được Samsung gửi gắm thông qua chiếc smartphone Galaxy S21 Ultra 5G với hàng loạt sự nâng cấp và cải tiến không chỉ ngoại hình bên ngoài mà còn sức mạnh bên trong, hứa hẹn đáp ứng trọn vẹn nhu cầu ngày càng cao của người dùng.\r\nĐột phá trong thiết kế thời thượng\r\nKhông chỉ đơn thuần phục vụ giao tiếp và giải trí, Samsung Galaxy S21 Ultra 5G còn chính là món phụ kiện thời trang khẳng định vị thế của người sở hữu. Vẻ ngoài mảnh mai và thon gọn đến bất ngờ chỉ 165.1 x 75.6 x 8.9 mm và trọng lượng 228 g dù phải “vác” một viên pin lớn. Mặt lưng của thiết bị được phủ bởi một lớp nhám mờ, sang trọng bền bỉ vừa hạn chế bám dấu vân tay tối đa vừa tạo nên vẻ ngoài tinh xảo và cuốn hút đến bất ngờ. Ngoài ra, Galaxy S21 Ultra 5G là mẫu flagship S đầu tiên của Samsung hỗ trợ chiếc bút S Pen, một công cụ vốn đã quen thuộc với nhiều người dùng Galaxy Note. Bằng việc sử dụng công nghệ Wacom, chiếc bút mang đến cảm giác cầm thoải mái hơn và thật hơn. Máy có hỗ trợ khả năng kháng nước, kháng bụi theo tiêu chuẩn IP68. Nhờ đó, nó có thể ngâm nước ở độ sâu 1.5 m trong 30 phút.\r\n\r\nThỏa mãn thị giác hơn bao giờ hết\r\nSamsung Galaxy S21 Ultra 5G sở hữu màn hình kích thước lớn lên đến 6.8 inch. Màn hình vô cực “ít cong” hơn và viền bezel mỏng xung quanh, cùng camera selfie đục lỗ Infinity-O khá nhỏ giúp máy đạt tỉ lệ màn hình tới 20:9 đáng mơ ước.\r\n', 1, 0, 24),
(24, 'iPhone 7', 5000000, 0.10, 'iphone-12-xanh-la-new-2-600x600.jpg', '2021-10-15', 'a', 1, 0, 1),
(25, 'iPhone 6', 8000000, 0.00, 'product.png', '0000-00-00', 'aa', 1, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `kich_hoat` tinyint(1) NOT NULL DEFAULT 0,
  `hinh` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vai_tro` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES
('admin', 'admin', 'admin', 1, 'user.png', 'admin1@gmail.com', 1),
('ph12', '1234567', 'Nguyễn Hoàng Nam', 0, 'tải xuống (1).jpg', 'nam@gmail.com', 0),
('ph13', 'admin', 'admin1', 1, 'tải xuống.jpg', 'admin@gmail.com', 1),
('ph14', '1234', 'Nguyễn Thị Thu', 1, 'tải xuống (3).jpg', 'thu@gmail.com', 1),
('ph15', '12345', 'Trần Thị Lệ', 1, 'so-tong-dai.jpg', 'le@gmail.com', 0),
('ph16', '123456', 'Bùi Tuấn Vũ', 0, 'tải xuống (2).jpg', 'vu@gmail.com', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(10) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(1, 'iPhone'),
(2, 'Laptop'),
(22, 'Oppo'),
(23, 'Phụ kiện'),
(24, 'Sam sung');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
