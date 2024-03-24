-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 08:44 PM
-- Server version: 8.3.0
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_slug`) VALUES
(1, 'Laptop', 'laptop'),
(3, 'Smart Watches', 'smartwatch'),
(4, 'Footware', 'footware'),
(5, 'Clothes', 'clothes'),
(6, 'Bags', 'bags'),
(7, 'Earphones', 'earphones'),
(8, 'Furniture', 'furniture'),
(9, 'Camera', 'camera'),
(10, 'Accessories', 'accessories');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(256) NOT NULL,
  `category_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `product_name`, `price`, `quantity`, `order_date`, `username`, `category_slug`) VALUES
(32, 4, 'T-Shirts', '999', 1, '2024-03-11', 'sagar', '<br />\r\n<b>Warning</b>:  Undefined array key '),
(33, 7, 'Lino Perros', '2999', 1, '2024-03-11', 'sagar', '<br />\r\n<b>Warning</b>:  Undefined array key '),
(34, 2, 'Apple Watch 3', '16999', 1, '2024-03-11', 'sagar', 'smartwatch'),
(35, 2, 'Apple Watch 3', '16999', 1, '2024-03-12', 'sagar', 'smartwatch'),
(36, 2, 'Apple Watch 3', '16999', 1, '2024-03-12', 'sagar', 'smartwatch'),
(37, 11, 'Camera 2K Pro', '9999', 1, '2024-03-12', 'sagar', 'camera'),
(38, 101, 'Apple imac 6', '4000000', 10, '2024-03-13', 'sagar', 'laptop'),
(39, 110, 'Indian Cricket Team jersey', '999', 1, '2024-03-14', 'sagar', 'clothes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_slug`, `product_name`, `price`, `description`, `img`) VALUES
(1, 'laptop', 'Legion 530', '49000', 'They say life is full of compromises. They say you can’t have high performance and long battery life on the same notebook. They say that a high-performance gaming laptop has to be big, bulky, and heavy. They’re wrong. Now you can enjoy elite gaming performance on a thin and light notebook with amazing battery life, thanks to the new AMD Ryzen™ 5000 H-Series Mobile Processors. Never compromise on your gaming laptop again.', 'legion.jpg'),
(2, 'smartwatch', 'Apple Watch 3', '16999', 'Full screen ahead. Buy direct from Apple. 45mm or 41mm case size. Get No Cost EMI for 12 months with qualifying Credit Cards. Services: Shop with Specialists, No-contact free delivery, EMI available, Direct from Apple.', 'apple.jpg'),
(3, 'footware', 'Nike Mens M Zoom Vapor Pro 2 Hc Running Shoe', '7772', 'M NIKE ZOOM VAPOR PRO 2 HC-WHITE WHITE-DR6191-101-5.5UK', 'ft1.jpg'),
(4, 'clothes', 'Puma Men T-Shirt', '1049', 'Add a classic flare to your fashion collection with this Save Our Home Half Sleeve T-Shirt. Pair it with anything from trousers to jeans and enhance your fashion game with elegance.\r\nCounry of Origin : India', 't1.jpg'),
(5, 'clothes', 'Thermal Jacket 500 ', '2999', '\r\nDesigned for playing tennis, and perfectly suitable for badminton, squash and padel in COLD WEATHER.. Specially designed for tennis players to provide maximum warmth.', 't2.jpg'),
(6, 'clothes', 'India Ink Raw Hem Shorts', '799', 'Flaunt your alpha fashion sense with India Ink Raw Hem Men\'s Shorts. Pair these shorts with a T-shirt or a vest and sliders for a perfectly comfy fit.\r\nCountry of Origin : India', 't3.jpg'),
(7, 'bags', 'Lino Perros', '2999', 'Address Of Manufacturer/ Packer/ Importer\r\nPlot No. 324, Phase Iv, Udyog Vihar, Sector 19, Gurugram, Haryana 122016\r\nReturn And Exchange Policy\r\nThis product is eligible for returns or replacement. Please initiate returns or replacements from the \'My Orders\' section in the App within 7 days of delivery. Kindly ensure the product is in its original condition with all tags attached.', '4.jpg'),
(8, 'earphones', 'ZEBRONICS New Launch Boom Wired Headphone', '699', 'Comfortability]: The soft cushioned earcups of the ZEB-Boom wired headphones enhance comfort during prolonged use and contribute to effective passive noise isolation. The adjustable headband provides a customizable and comfortable fit for users of varying head sizes\r\n[Dynamic Audio]: The ZEB-Boom headphones boast powerful 40mm drivers ensuring a rich and immersive audio experience, with a balanced sound profile', 'ep5.jpg'),
(9, 'earphones', 'boAt Rockerz 255 Pro+ Bluetooth in Ear Neckband', '1499', 'Playback- Leave all charging worries at bay as the Rockerz 255 Pro+ comes with a humongous battery back up of 60 Hours\r\nASAP Charge- With a few minutes of ASAP Charge you can get upto 10 hours of audio time by charging them for only 10 mins\r\nDrivers- The unbeatable boAt signature sound shines through no matter what are you playing courtesy its 10mm drivers', 'ep6.jpg'),
(10, 'furniture', 'RHS Sofa With Console', '19999', 'Add Timeless Elegance To Your Living Room With The Alden Leatherette L-Shape Sofa With Console . Available In A Premium Shade Of Tan Brown Colour , This Sofa Has Been Fully Upholstered With Art Leather.', 'sf1.jpg'),
(11, 'camera', 'Camera 2K Pro', '9999', 'Mi 360 Awesome Camera 2K Pro black ', 'cam-1.jpg'),
(12, 'accessories', 'ecobee SmartThermostat ', '4999', 'Save up to 26% annually on heating and cooling costs (compared to a hold of 72°F)\r\nIncluded SmartSensor extends comfort to your most important rooms\r\nComes with Siri and Alexa Built-in for calls, music, and added control (Apple HomePod mini required to enable Siri)', '10.jpg'),
(13, 'laptop', 'Apple 2023 Mac Mini Desktop Computer ', '74490', 'About this item\r\nM2 chip for exceptional speed and performance\r\n8-core CPU packs up to 18 per cent faster performance to fly through everyday tasks\r\n10-core GPU with up to 35 per cent faster performance for graphics-intensive apps and games\r\n16-core Neural Engine for advanced machine learning\r\nFrom 8GB up to 24GB of unified memory, so everything you do is fast and fluid', 'minimac.jpg'),
(15, 'laptop', 'Apple 2023 MacBook Pro ', '189900', 'About this item\r\nSUPERCHARGED BY M3 — With an 8-core CPU and 10-core GPU using hardware-accelerated ray tracing, the Apple M3 chip can help you blaze through everyday multitasking and take on pro projects like editing thousands of photos or 4K video.\r\nfeatures Extreme Dynamic Range; 1,000 nits of sustained brightness for stunning HDR content; up to 600 nits of brightness for SDR content; and pro reference modes for doing your best work on the go.\r\nFULLY COMPATIBLE — All your pro apps run lightning fast — including Adobe Creative Cloud, Apple Xcode, Microsoft 365, Medivis SurgicalAR and many of your favourite iPhone and iPad apps. And with macOS, work and play on your Mac are even more powerful. Elevate your presence on video calls. Access information in all-new ways. And discover even more ways to personalise your Mac.\r\nADVANCED CAMERA AND AUDIO — Look sharp and sound great with a 1080p FaceTime HD camera, a studio-quality three-mic array and a six-speaker sound system with Spatial Audio.\r\nCONNECT IT ALL — This MacBook Pro features a MagSafe charging port, two Thunderbolt / USB 4 ports, an SDXC card slot, an HDMI port and a headphone jack. Enjoy fast wireless connectivity with Wi-Fi 6E and Bluetooth 5.3. Supports one external display.', 'ok1.jpg'),
(16, 'laptop', 'Dell 14 Laptop, 12th Gen Intel Core i5-1235U Processor', '48990', 'Processor: Intel Core i5-1235U (up to 4.40 GHz, 12MB Cache, 10 Cores)\r\nRAM: 16 GB, 2 x 8 GB, DDR4, 2666 MHz // Storage: 512GB SSD\r\nSoftware: Pre-Loaded Windows 11 Home with Lifetime Validity | MS Office Home and Student 2021 with lifetime validity| McAfee Multi Device Security 15-month subscription\r\nDisplay: 14.0\" FHD WVA AG Narrow Border 250 nits // Keyboard: Standard Keyboard\r\nPort: 2 USB 3.2 Gen 1 ports, 1 USB 2.0 port, 1 Headset jack, 1 HDMI 1.4 port*,1 Flip-Down RJ-45 port 10/100/1000 Mbps, 1 SD 3.0 card slot\r\nFeatures- TÜV Rheinland certified Dell ComfortView to reduce Harmful blue light: 15 Months McAfee antivirus subscription: Waves Maxx Audio tuned speakers and microphones optimize audio: Hardware-based TPM 2.0 security chip\r\nBattery: 3-Cell Battery, 41WHr // Power Adaptor: 65 Watt AC Adapter\r\nDimensions H x W x D( in cm): 1.86 to 2.30 X 32.3 X 22.0 // Weight: 1.48kgs', 'ss2.jpg'),
(17, 'smartwatch', 'boAt Ultima Select Smart Watch', '2999', 'AMOLED Display: Immerse yourself in the brilliance of a 2.01\" (5.10 cm) AMOLED display, delivering vibrant visuals and clarity to enhance your smartwatch experience\r\nAdvanced Bluetooth Calling: Stay connected on the go with advanced Bluetooth calling directly from your wrist, ensuring seamless communication wherever you are.\r\nFunctional Crown: Navigate effortlessly through features with the functional crown, adding a touch of sophistication and practicality to your smartwatch interaction.', 'sw2.jpg'),
(18, 'smartwatch', 'Fire-Boltt Phoenix Pro 1.39\" Bluetooth Calling Smartwatch', '1299', '【1.39\" Bigger Round Display】- Comes with a 1.39\" TFT Color Full Touch Screen and a 240*240 Pixel High Resolution this watch is covered to flaunt the sleek looks with a 280 NITS peak brightness\r\nThe watch will work on a single charge for about 7 days (without Bluetooth calling) and about 4 Days with Bluetooth calling.\r\nCharging Specs - The watch needs to be charged for 3 hours to reach 100%. The charger should be a 3.7V to 5V adapter or any laptop output. For a bare minimum of 20% charge the watch needs to be charged for about 30-40 mins', 'sw3.jpg'),
(103, 'laptop', 'ASUS Vivobook 16 (2023), Intel Core i9-13900H 13th Gen, 16\" ', '84990', 'Processor: Intel Core i9-13900H Processor 2.6 GHz (24MB Cache, up to 5.4 GHz, 14 cores, 20 Threads)\r\nMemory: 16GB DDR4 RAM (8GB on board + 8GB SO-DIMM) 3200MHz with | Storage: 512GB M.2 NVMe PCIe 4.0 SSD\r\nGraphics: Integrated Intel Iris Xᵉ Graphics\r\nOperating System: Windows 11 Home with lifetime validity | Software Included: Pre-Installed Office Home and Student 2021 | 1-Year McAfee Anti-Virus\r\nKeyboard: Backlit Chiclet Keyboard with Num-key\r\nDesign: 1.99 ~ 1.99 cm Thin | Thin & Light Laptop | 1.88 kg | 42WHrs Battery Capacity Up to 6 hours Battery life, Note: Battery life depends on conditions of usage', 'ss1.jpg'),
(104, 'smartwatch', 'Fire-Boltt Talk 2 Pro Ultra ', '1699', 'Display Excellence: With a stunning 1.39-inch round display & 500 NITS Brightness, boasting a crisp 240*240 px resolution, this smartwatch is not just a timepiece; it\'s a technological marvel that enhances every aspect of your daily routine\r\nHealth Monitoring- Your health is your wealth, and the Fire-Boltt Talk 2 Pro Ultra ensures you\'re always in the know. With comprehensive health monitoring capabilities, it keeps track of your heart rate, blood oxygen levels, sleep patterns, and more (This is not a medical device).', 'sw4.jpg'),
(105, 'smartwatch', 'Noise Twist Go Round dial Smartwatch', '1299', 'Metal build: Discover the perfect blend of sophistication and innovation featuring a glossy metal build and a sleek dial.\r\n1.39\" display: See every detail come to life on your wrist.\r\nBT Calling: Stay connected on the go making every call effortlessly convenient.\r\nNoiseFit app: Connect with the NoiseFit app where your health data and privacy are always protected. Unlock your peak potential by participating in challenges, track your progress, and keep pushing your limits with a community of fitness enthusiasts.', 'sw5.jpg'),
(106, 'footware', 'Wilson Mens KAOS Comp 3.0Tennis Shoe', '12118', 'Pro Torque Chassis Light uses arch technology built for speed to provide ultimate stability and flexibility\r\nDF2 provides cushioned court feel, yielding compromise between comfort and quick performance (DF2 = HT Drop 9 mm)\r\nRubber Medial Drag Pad supplies added durability and protection when dragging the foot', 'ft2.jpg'),
(107, 'footware', 'Wilson Mens Rush Pro 4.0 Tennis Shoe', '15241', '4D Support Chassis 2.0 splits chassis into two pieces: one running under the foot for forward propulsion, the other running laterally from heel to toe for superior stability and control\r\nEnergy Cell comprises a lightweight EVA foam in the forefoot of the midsole to create softer feel and optimal body weight transfer for explosive acceleration', 'ft3.jpg'),
(108, 'footware', 'Sparx Mens Sx0421gRunning Shoes', '699', 'Allow your pair of shoes to air and de-odorize at regular basis; use shoe bags to prevent any stains or mildew; dust any dry dirt from the surface using a clean cloth; do not use polish or shiner', 'ft4.jpg'),
(109, 'footware', 'Sparx Mens Sd0734g Sneaker', '699', 'Relaxo Footwears Ltd., Relaxo Footwears Ltd.', 'ft5.jpg'),
(110, 'clothes', 'Indian Cricket Team jersey', '999', 'Very comforting\r\nWash:- Gentle Hand Wash, Do Not Bleach, Dry in Shade\r\n100 % polyester', 't4.jpg'),
(111, 'clothes', 'Smart fit Polo for Men', '1999', 'High quality knitted cotton fabric. Matching knitted collar. Solid placket with USI intermingled logo embroidery on chest.\r\nSturdy fabric with immense strength to last long.\r\nUSI Con 11 Polo enables you to wear it for long periods of time it won\'t loose its freshness', 't5.jpg'),
(112, 'bags', 'American Tourister Shaw Large Laptop Bag Travel bag', '1699', '【LARGE CAPACITY & MORE STORAGE】: With Internal Organizer, A separate laptop compact, the maximum can accommodate a 17.3-inch laptop,travel backpack has two mesh compartments suitable for your laptop accessories,multiple compact,allowing your item well\r\n【SUPER COMFORTABLE & STURDY】Laptop bag for men features 2 large zippered compartments, 1 zip pocket at front, 2 side bottle pockets. This is a perfect laptop, office, school, college bag for men, women, boys and girls. Loaded with features like Dobby Polyester, Bottle holder, Multi level', 'b1.jpg'),
(113, 'bags', 'Half Moon 45L Hammer Waterproof Laptop Travelling Rucksack Trekking Backpack', '1299', 'ROOMY ENOUGH BACKPACK FOR MEN: This laptop bag for men is ultra lightweight comes with three main compartments having the capacity of approx 45 Ltr, big enough to carry laptop of all sizes, books, clothes, camping gear; 3 main compartments to store all your essentials and 1 small front pocket to carry small accessories. It also features an Internal Organiser (small pockets inside a office bag for men / office bag for women).', 'b2.jpg'),
(114, 'bags', 'American Tourister Sest+ Polyester 2 Compartment Unisex Backpack', '1499', 'Product Type : Backpacks\r\nMaterial : polyster\r\nCompartment : 2\r\nWarranty : 1 year\r\n', 'b3.jpg'),
(115, 'bags', 'American Tourister Bloom Polyester 45 cm Duffle Bag ', '2099', 'Material: Polyester\r\nCompartment: 2\r\nClosure Type: Zipper\r\nStyle: Luggage', 'b4.jpg'),
(116, 'earphones', 'Apple AirPods Pro (2nd Generation) ​​​​​​​', '21999', 'Active Noise Cancellation reduces unwanted background noise\r\nAdaptive Transparency lets outside sounds in while reducing loud environmental noise\r\nPersonalised Spatial Audio with dynamic head tracking places sound all around you', 'ep4.jpg'),
(117, 'earphones', 'boAt Airdopes 121v2 in-Ear True Wireless Earbuds', '999', 'Playback- Airdopes 121v2 offers a nonstop playback of up to 3.5H with each charge and an additional 10.5H playtime with the included charging case\r\nLightweight- With a dual tone finish on a lightweight ergonomic design weighing just around 4g per earbud, get ready to groove in full flow with Airdopes 121v2v2 TWS earbuds, Frequency - 20Hz-20KHz\r\nDrivers- It possesses powerful 8mm drivers that pump out immersive auditory experience all day long', 'ep7.jpg'),
(118, 'earphones', 'Noise Buds VS104 Truly Wireless Earbuds999', '999', 'Up to 45-hour playtime:- Get set for a day full of music and then some more.\r\nQuad mics with ENC :- Enjoy free-flowing conversation no matter where you are.\r\nInstacharge :- Enjoy 200 minutes of playtime in just 10 minutes of charge.', 'ep8.jpg'),
(119, 'furniture', 'Furniture Cafe Set top Box Stand WiFi Router Holder', '299', 'PLACE ANY DEVICE ON IT: Designed for use with set top box, wifi router DVD players, DVR, HD recorders, Cable boxes, MP3, Speakers, Gaming Consoles (Xbox, PlayStation, Nintendo, etc) and other audio video equipments.', 'sf2.jpg'),
(120, 'furniture', 'Foldable Wooden Dining Table Desk', '2799', 'Product Measurements: Length 60x Width 60 x Height 74cm. This table is only 74cm (L) long and therefore fits into even the smallest of spaces.\r\nPAZANO FOLDING DESK: Easily folds open into a stable position; folds flat for easy portability and space-saving storage', 'sf3.jpg'),
(121, 'furniture', 'Standing Floor 4 Tier Rack Wall Shelf', '1999', 'Quality material: high Quality medium density composite wood and plastic tubes.\r\nEasy no hassle no tools 5-minutes assembly even a kid can accomplish. Sturdy on flat surface ; 3 shelves for ample storage space; Utilise small spaces for better organization and display', 'sf4.jpg'),
(122, 'furniture', 'Dence Store Bench with Storage', '3399', 'The height is perfect for stretching out and relaxing. Beside it could also function as a foot stool for makeup and can easily be tucked away when not in use.\r\nThe sturdy gold metal frame of our tufted dining bench can hold up to 250 pounds.', 'sf5.jpg'),
(123, 'furniture', 'Polypropylene Wall Shelf, Home Decor', '699', 'Techhark Premium Quality -100% Guaranteed / Made in India Product / Factory Price - Own Manufacturer Material: Plastic Fiber Non - Toxic, Color: Black', 'sf6.jpg'),
(124, 'camera', 'Sony Alpha Zv-E10', '52490', 'Interchangeable-lens camera for vlogging\r\nLarge APS-C type 24.2-megapixel28 Exmor CMOS sensor\r\nDirectional 3-Capsule Mic supplied with wind screen\r\nFeatures designed for vloggers—Product Showcase Setting, Bokeh Switch, Still/Movie/S&Q button; Flexible connectivity for easy sharing', 'cam2.jpg'),
(125, 'camera', 'Sony Alpha ILCE 6100L', '66989', 'Real time eye AF for still + Animal Eye AF;Real time tracking\r\nWorld fastest 0.02 Sec AF speed with 425 phase detection and contrast points;24.2MP, EXMOR CMOS sensor with outstanding light sensitivity\r\n11 FPS continuous shooting with AF/AE;180 degree tilt able touch LCD screen\r\nISO sensitivity up to 102400;High resolution, sensitivity and colour reproduction capability;Smooth and stable AF;Country of Origin: China', 'cam3.jpg'),
(126, 'camera', 'insta360 X3 Action Camera', '41990', '1/2” Sensor Capture photos and videos with more detail thanks to a brand-new 1/2” sensor.\r\n5.7K 360° Capture, Capture everything around you with 5.7K 360-degree capture.\r\nThe magic of 360 capture is the ability to choose the best angle after the fact. Easy AI-powered reframing tools in the Insta360 app make it easy to find the perfect, so you’ll never miss a shot again.', 'cam4.jpg'),
(127, 'camera', 'GoPro HERO10 Black', '27490', 'Revolutionary Processor: Faster. Smoother. Better. The powerful new GP2 engine changes the game—snappy performance, responsive touch controls and double the frame rate for amazingly smooth footage. Designed specifically for the demanding nature of the GoPro, the GP2 “system on a chip” is by far our fastest ever.', 'cam5.jpg'),
(128, 'accessories', 'Apple iPhone 14 (128 GB) - Blue', '58999', '5.40 cm (6.1-inch) Super Retina XDR display\r\nAdvanced camera system for better photos in any light\r\nCinematic mode now in 4K Dolby Vision up to 30 fps\r\nAction mode for smooth, steady, handheld videos\r\nVital safety technology — Crash Detection calls for help when you can’t\r\nAll-day battery life and up to 20 hours of video playback\r\nIndustry-leading durability features with Ceramic Shield and water resistance', 'mb1.jpg'),
(129, 'accessories', 'Samsung Galaxy S23 5G', '69999', 'More light for your night - Get ready for a Gallery full of epic night shots everyone will want. Nightography\'s enhanced AI keeps details clear, so low light photos and videos will be bright and colorful from dusk to dawn and back again.\r\nDesigned with the planet in mind - Unbox the change you want to see in the world. Crafted with recycled glass and PET film and colored with natural dyes, each phone is tucked into a box made of recycled paper and paper-based protective film.', 'mb2.jpg'),
(130, 'accessories', 'Samsung Galaxy A15', '19490', 'DISPLAY - 16.39 Centimeters (6.5\"Inch) Super AMOLED Display with 19.5:9 Aspect Ratio, FHD+ Resolution with 1080 x 2340 Pixels , 399 PPI with 16M Colours and 90Hz Refresh Rate, Dragon Trail-Pro Glass Type\r\nCAMERA - 50MP (F1.8) Main Wide Angle Camera + 5MP (F2.2) Ultra Wide Camera + 2MP (F2.4) Macro Camera | 13MP (F2.0) Front Camera | Video Maximum Resolution of Full HD (1920 x 1080) @30fps\r\nINTERFACE & PROCESSOR - Latest Android 14 Operating System having One UI 6.0 platform with MediaTek Dimensity 6100+ | 2.2GHz, 2GHz 6nm Octa-Core Processor', 'mb3.jpg'),
(131, 'accessories', 'OnePlus 11R 5G ', '37999', 'Camera: Sensor: 50MP Main Camera with Sony IMX890 (OIS supported), 8MP Ultrawide Camera (FOV: 120 degree) and Macro Lens; 16MP Front (Selfie) Camera with EIS support\r\nCamera Modes: Nightscape, Ultra HDR, Smart Scene Recognition, Portrait Mode, Pro Mode, Panorama, Tilt-Shift mode, Long Exposure, Dual-View Video, Retouch, Movie Mode, Raw file, Filters, Super Stable, Video Nightscape, Video HDR, Video Portrait, Focus Tracking, Timelapse, Macro mode', 'mb4.jpg'),
(132, 'accessories', 'OnePlus Nord CE 3 Lite 5G', '19999', 'Camera: 108 MP Main Camera with EIS; 2MP Depth-Assist Lens and 2MP Macro Lens; Front (Selfie) Camera: 16MP\r\nRear Camera Mode: Hi-res 108MP mode, 3x Lossles Zoom, Photo, Video, Nightscape, Expert, Panoramic, Portrait, Macro, Time-lapse, Slow-motion, Long exposure, Dual-view video, Text Scanner, 1080p/720p@30fps, Video zoom: 1080P@30fps, 720P@30fps, Slow motion: 720P@120fps, Time-Lapse: 1080P@30fps, Steady Video EIS support\r\nDisplay: 6.72 Inches; 120 Hz Adaptive refresh rate; FHD+(1080×2400), Colors: 16.7 Million colors, 391 ppi, Aspect Ratio: 20:9, Brightness: 550 nits (typical), 680 nits (HBM)\r\nOperating System: Oxygen OS based on Android 13.1\r\nProcessor: Qualcomm Snapdragon 695 5G', 'mb5.jpg'),
(133, 'accessories', 'Iphone Charger', '1999', '20W Fast Charger with Cable: Fast Charger equipped with 20W PD 3.0 USB Type C power delivery with cable, PD 3.0 Quick-Charge USB C port provides Max 20W output power, charge your device up to 3x.', 'mb6.jpg'),
(134, 'accessories', 'Samsung Original 25W Single Port', '1999', '1M Type-C To Type-C Usb Cable\r\nMax 25W Charge For Standard Pd 3.0 Compatible Devices, For Other Devices - Charges At A Speed That The Device Can Handle\r\nWall Charger For Super Fast Charging Up To 25W For Capable Devices', 'mb7.jpg'),
(135, 'accessories', '23w Magnetic MagSafe Charger 3in1 Wireless Charger', '2999', '【3 in 1 wireless charging station compatible with Mag-safe】-The eller santé wireless charging stand designed with the latest Mag-Safe technology has strong magnetic adsorption. It is the best charging assistant for iPhone 15/14/13/12/11 series, iWatch and AirPods 3 generation 2021/2/1/Pro series.\r\n【Widely Compatible】-This Magnetic Wireless Charger is compatible with mobile phones: Phone 15/15 Plus/15 Pro/15 Pro Max, iPhone 14/14 Plus/14 Pro/14 Pro Max, iPhone 13/13 Pro/13 Pro Max/13 Mini/iPhone 12/iPhone 12 Pro/iPhone 12 Pro Max/iPhone 12 mini; compatible with iWatch 1/2/3/4/5/6/7/5/9SE/ Ultra; compatible with Airpods', 'mb8.jpg'),
(136, 'laptop', 'HP Laptop 15, AMD Ryzen 5 7520U', '42990', '【4-core AMD Ryzen 5 7520U】8 threads with up to 4.3 GHz max boost clock and 4MB L3 cache deliver exceptional processing speeds. AMD Radeon graphics help you perform intensive multimedia tasks.\r\n【Micro-edge display】The 15.6-inch, FHD, 250-nit, anti-glare, and micro-edge display lets you dive deep into the details of your projects on a large screen, indoors and outdoors.', 'lp4.jpg'),
(137, 'laptop', 'Apple MacBook Air Laptop M1 chip', '74990', 'All-Day Battery Life – Go longer than ever with up to 18 hours of battery life.\r\nPowerful Performance – Take on everything from professional-quality editing to action-packed gaming with ease. The Apple M1 chip with an 8-core CPU delivers up to 3.5x faster performance than the previous generation while using way less power.', 'lp5.jpg'),
(138, 'laptop', 'Acer One 14 Business Laptop', '26990', 'High Performance : Encounter high speed processing with the AMD Ryzen 3 3250U Processor of 2 cores and up to 3.5GHz of Max Turbo Boost;OS : Windows 11 Home\r\nVarious Connectivity Options : HDMI, USB 3.2, Gen 1, Type A & C ports;Fast connectivity through Gigabit LAN', 'lp6.jpg'),
(139, 'smartwatch', 'Noise Newly Launched ColorFit Pro 5 Max', '5999', '1.96” AMOLED Display: See everything in max clarity with a view that delivers sheer brilliance and impact.\r\nRapid health: Measure your heart rate, SpO2, and stress levels in a single tap, and always be in sync with your wellness.\r\nPost-training recovery analysis, VO2 max & training load insights: See your fitness in a new light and maximise your potential with accuracy.\r\nDIY watch faces: Create your own watch face and let your personality shine with a smartwatch that’s truly yours.', 'sw6.jpg'),
(140, 'smartwatch', 'Fossil Gen 6(44Mm, Brown Color) Mens Smartwatch', '11998', 'Smartwatches powered with Wear OS by Google work with iPhone and Android Phones\r\nExtend your battery life for multiple days with new, smart battery modes; magnetic USB charger included; charge up to 80% in under an hour\r\nHeart Rate & Activity Tracking using, Google Fit; Built-in GPS for distance tracking; Swimproof design 3ATM; responses from Google Assistant - it\'s your own personal Google, always ready to help; Speed through checkout with your watch using Google Pay', 'sw7.jpg'),
(141, 'smartwatch', 'Samsung Galaxy Watch4 Classic', '9999', 'Only compatible with Android Smartphones (Runs on Wear OS Powered by Samsung)\r\nBioelectrical Impedance Analysis Sensor for Body Composition Analysis, Optical Heart Rate Sensor.\r\nHealth Monitoring features such as Advanced Sleep Analysis & Women\'s Health.', 'sw8.jpg'),
(142, 'clothes', 'Indya Women Kurta set', '1700', 'Package Contents: 1 Kurta and 1 Pant\r\nFabric: Cotton\r\nNeck Type: Round Neck\r\nPattern: Floral Print\r\nSleeves: Three-Quarter Sleeves', 't6.jpg'),
(143, 'clothes', 'Women\'s Printed Regular Fit Kurta', '699', 'Printed kurta with gold print and button-down look\r\nStraight Knee Length Kurti\r\n\"For best experience, do not soak the product before wash\"\r\nBanded Collar and Three-Fourth Sleeve\r\n', 't7.jpg'),
(144, 'clothes', 'Track Pant for Men', '499', 'Track Pant for Men || Track Pants || Plain Track Pant\r\nDetails:Pocket, Drawstring\r\nOccasions: Perfect for work, school, outdoor, outgoing, weekend, vocation, trip, daily life, or any casual wear\r\nPlease refer to Size Chart in Product Description as below\r\nComfortable material, suitable for a variety of occasions.', 't8.jpg'),
(145, 'bags', 'Gear Turbo 45L Expandable Water Resistant Antitheft Laptop Bag', '1624', 'Ergonomically Designed : Spacious with Multiple Compartments & Pockets : Expandable StorageIntuitive Access : Cushioned Back Panel & Shoulder Straps : Lightweight\r\nLoad Stabilizing Adjustable Sternum Strap : Bartacked Load Points : Water Resistant Fabric : Heavy Duty Long Lasting Zippers', 'b5.jpg'),
(146, 'bags', '55 LTR Rucksack Travel Backpack ', '999', 'Large sized black and grey colour trekking rucksack for men and women for travel use as well as for trendy college and school students. Huge compartment size that can fit upto several pairs of clothes with ease with separate pocket for shoesMultiple pockets for other accessories and water bottle\r\nExternal clips to hold a yoga mat on the backside available with this rucksack. Also available on both sides of the rucksack are additional clips which can be used to carry camera stands as well as other climbing equipments', 'b6.jpg'),
(147, 'bags', 'Ketmart Waist Pack Travel Handy Bag', '559', 'Chest Bag : 14cm, Height – 33cm, Width – 5cm. Belt Length : 90 cm\r\nThe pouches for men and women,anti-theft with zipper, and Waterproof, keep your belonging in safely.\r\nMulti-purposed: Chest bag for men & women perfectly works as small bag /single strap bag/cross body bag/shoulder bag for men boys women girls ladies.\r\nAn ideal gift for your loved ones, e.g. Lover, girlfriend, fiancee, wife, mother, couple, Valentine or just a friend,etc. It expresses your love to them.', 'b7.jpg'),
(148, 'camera', 'Nikon Digital Camera Z 30 kit', '59990', 'UHD 4K recording up to 30p is supported for crisp, high-resolution video needs. Full HD 120p recording is available, too, for slow-motion playback.\r\nVersatile 20.9MP resolution suits stills needs, too, and means the Z30 is a perfect tool for capturing stills during productions or for photographing higher-resolution thumbnails and promotional images.\r\nPurpose-built for vlogging and content creation, the Z30 incorporates a series of physical touches and operational functions perfect for creators.; Hybrid autofocus system uses both phase-detection and contrast-detection methods to quickly and accurately acquire focus for both stills and video applications.', 'cam6.jpg'),
(149, 'camera', 'Smart Wi-Fi CCTV Home Security Camera ', '1199', '1080P Full HD Video: Designed to represent an enhanced picture quality in full HD video so that every detail can be viewed with vivid clarity and a pixilated video feed can be avoided.\r\n360° View: The camera rotates full 360°, making it convenient for you to view the room from every angle and keep an eye all over the place even when you are away from home.', 'cam7.jpg'),
(150, 'camera', 'Imou 360° 1080P Full HD Security Camera', '1699', '360 Degree Coverage View: With Imou Life App, you can create a panorama and rotate the camera to view every corner, leaving no blind-spots. Video recording frame rate of the camera is up to 25/30fps, making the video more smoothly.;1080P Full HD & Night Vision: 1080p full HD security camera provides crystal clear videos and recordings. Every image of video is clear in details. And quality infrared LEDs extend the range of night vision reach up to 10m/33ft, lets you see everything clearly even in the darkness.', 'cam8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `first_name`, `last_name`, `address`) VALUES
(1, 'sagar', 'okaysagar@gmail.com', '12345678', 'Sagar', 'Shinde', 'Palkar Chawl Room No 08, Mumbai '),
(22, 'pranav', 'ps@gmail.com', '123456789', 'pranav', 'sonawane', 'dhhsdthtsdgngfxgfnzdngzdhff'),
(23, 'panya', 'panya@gmail.com', '12345678', 'Pranav', 'Sonawane', 'whdhi  whwe iiwied'),
(24, 'Aniketk', 'ak@gmail.com', '12345678', 'Aniket', 'Khandare', 'hsfvghdflvkhfhdfhkbkljsdf bfvvdbsdb'),
(25, 'Pranay12', 'pranay@gmail.com', '12345678', 'Pranay', 'Chavan', 'hgduguge gduheudheuh uheidhiedh i'),
(26, 'Om12', 'om@gmail.com', '12345678', 'Om', 'Jadhav', 'dufheuhd uhiehiehi hiieojr'),
(27, 'apeksha11', 'apeksha@gmail.com', '12345678', 'Apeksha', 'Kanthe', 'eihieifj heiiejfiej 8fieieuj'),
(28, 'Shubham15', 'shubh@gmail.com', '12345678', 'Shubham', 'Dhamdhere', 'palkar chwal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
