<?php
$link = mysqli_connect("localhost", "root", "");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "CREATE DATABASE gadgetlk";
if(mysqli_query($link, $sql)){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 $link = mysqli_connect("localhost", "root", "", "gadgetlk");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "CREATE TABLE ad_log (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(20) DEFAULT NULL,
  `apwd` varchar(50) DEFAULT NULL,
  `secques` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `aname` (`aname`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1";
if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 $sql = "INSERT INTO ad_log (`id`, `aname`, `apwd`, `secques`) VALUES
(1, 'gadgetlkadmin', '12345678', 'dreaming')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

 
 
 $sql = "
CREATE TABLE brands(
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1";


if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 $sql = "INSERT INTO brands (`brand_id`, `brand_title`) VALUES
(1, 'Apple'),
(2, 'Canon'),
(3, 'DJI'),
(4, 'Google'),
(5, 'Huawei'),
(6, 'OnePlus'),
(7, 'Samsung'),
(8, 'Xiaomi')";
 
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 
 
$sql = "CREATE TABLE cart ( `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(20) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";


if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 
$sql = "INSERT INTO cart (`p_id`, `ip_add`, `qty`) VALUES
(21, '::1', 1)";
 
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 
 


$sql = "CREATE TABLE categories (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
 $sql = "INSERT INTO categories (`cat_id`, `cat_title`) VALUES
(1, 'Camera'),
(2, 'Drones'),
(3, 'Smart Phones'),
(4, 'Tablets'),
(5, 'Wearable'),
(6, 'Other Accessories')";
 
 
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
  
 
 
$sql = "CREATE TABLE products (
  `prd_id` int(100) NOT NULL AUTO_INCREMENT,
  `prd_cat` int(100) NOT NULL,
  `prd_brand` int(100) NOT NULL,
  `prd_title` varchar(255) NOT NULL,
  `prd_price` int(100) NOT NULL,
  `prd_desc` text NOT NULL,
  `prd_img` text NOT NULL,
  `prd_keyword` text NOT NULL,
  PRIMARY KEY (`prd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 $sql = "INSERT INTO products (`prd_id`, `prd_cat`, `prd_brand`, `prd_title`, `prd_price`, `prd_desc`, `prd_img`, `prd_keyword`) VALUES
(25, 6, 8, 'MI Power Bank 20000mAh', 5800, 'A sleek aluminum casing surrounds dual battery cell technology from LG and Samsung.\r\nsupport fast charging.\r\n2 ports.\r\n20000mAh.', '20000mAh-Xiaomi-Mi-Power-Bank.png', 'power bank,power,mi,xiaomi,charger,battery,powerbank'),
(26, 6, 1, 'Apple pencil', 22400, 'The Apple Pencil is a state of the art, battery operated stylus that lets you draw, take notes, annotate photos, mark documents, and do much more with the utmost precision on your iPad Pro.', 'apencil.png', 's pen.apple,pencil,pen,apple pencil,applepencil,stylus pen,stylus'),
(27, 5, 1, 'Apple Watch II', 47600, 'Silver Aluminum Case with Fog Sport Band,\r\nGPS,\r\nHealth Tracking,\r\nCellular', 'apple watch.png', 'Apple,Watch,apple watch,wearable'),
(28, 5, 1, 'Apple AirPods', 25600, 'Just take them out and theyâ€™re ready to use with all your devices. Put them in your ears and they connect instantly. Speak into them and your voice sounds clear. Introducing AirPods. Simplicity and technology, together like never before. The result is completely magical.', 'apple-earbud.png', 'AirPods,handfree,earbuds,earbud,appple,airpod'),
(29, 4, 1, 'Apple ipad pro', 127500, 'Apple iPad Pro 10.5 (2017) tablet. Announced Jun 2017. Features 10.5â€³ LED-backlit IPS LCD display, Apple A10X Fusion chipset, 12 MP primary camera, 7 MP front camera, 8134 mAh battery, 512 GB storage, 4 GB RAM, Scratch-resistant glass.', 'apple-ipad-pro-10-5.png', 'ipad,apple,tablet,pro,ipad pro,i pad'),
(30, 3, 1, 'Apple iphone 7 (RED Product)', 72000, 'Apple iPhone 7 smartphone. Announced Sep 2016. Features 4.7â€³ LED-backlit IPS LCD display, Apple A10 Fusion chipset, 12 MP primary camera, 7 MP front camera, 1960 mAh battery, 256 GB storage, 2 GB RAM, IP67 certified, Ion-strengthened glass.', 'apple-iphone-7.png', 'iphone,apple,7,iphone 7'),
(31, 3, 1, 'Apple iPhone 8', 126000, 'Apple iPhone 8 smartphone. Announced Sep 2017. Features 4.7â€³ LED-backlit IPS LCD display, Apple A11 Bionic chipset, 12 MP primary camera, 7 MP front camera, 1821 mAh battery, 256 GB storage, 2 GB RAM, IP67 certified, Ion-strengthened glass.', 'apple-iphone-8.png', 'apple,iphone,iphone 8,8,i phone'),
(32, 3, 1, 'Apple iPhone X', 187000, 'always been to create an iPhone that is entirely screen. One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. With iPhone X, that vision is now a reality. Say hello to the future.', 'apple-iphone-x.png', 'apple,iphone,x,phone,i phone,iphone x'),
(33, 6, 2, 'Canon EF 100-400mm Lens', 280000, 'EF Mount L-Series Lens/Full-Frame Format\r\nOne Fluorite and One Super UD Element\r\nAir Sphere and Fluorine Lens Coatings\r\nRing-Type USM AF Motor, Internal Focus\r\nOptical Image Stabilizer with 3 Modes\r\nRotating Zoom Ring & Torque Adjustment\r\nWeather-Sealed Design\r\nDetachable, Rotatable Tripod Collar\r\nRounded 9-Blade Diaphragm', 'canon-ef-100-400mm-f4.5-5.6l-is-ii-usm-lens.png', 'canon,lens'),
(34, 1, 2, 'Canon EOS 5D Mark IV', 427800, '30.4MP Full-Frame CMOS Sensor\r\nDIGIC 6+ Image Processor\r\n3.2â€³ 1.62m-Dot Touchscreen LCD Monitor\r\nDCI 4K Video at 30 fps; 8.8MP Still Grab\r\n61-Point High Density Reticular AF\r\nNative ISO 32000, Expanded to ISO 102400\r\nDual Pixel RAW; AF Area Select Button\r\nDual Pixel CMOS AF and Movie Servo AF\r\n7 fps Shooting; CF & SD Card Slots\r\nBuilt-In GPS and Wi-Fi with NFC', 'canon-eos-5d_mark-iv-cameralk_3_.png', 'canon,5d mark,5d,canon 5d,eos,camera,canon camera'),
(35, 1, 2, 'Canon EOS 80D', 143000, '24.2MP APS-C CMOS Sensor\r\nDIGIC 6 Image Processor\r\n3.0â€³ 1.04m-Dot Vari-Angle Touchscreen\r\nFull HD 1080p Video Recording at 60 fps\r\n45-Point All Cross-Type AF System\r\nDual Pixel CMOS AF\r\nExpanded ISO 25600, Up to 7 fps Shooting\r\nBuilt-In Wi-Fi with NFC\r\nRGB+IR 7560-Pixel Metering Sensor\r\nEF-S 18-135mm f/3.5-5.6 IS USM Lens', 'canon-eos-80d-cameralk_3_.png', 'canon,camera,80d,eos,canon camera,canon 80d'),
(36, 1, 2, 'Canon EOS 1300D', 63000, ' 18MP APS-C CMOS Sensor,\r\n DIGIC 4+ Image Processor,\r\n 3.0\" 920k-Dot LCD Monitor,\r\n Full HD 1080p Video Recording at 30 fps,\r\n 9-Point AF with Center Cross-Type Point,\r\n Extended ISO 12800, 3 fps Shooting,\r\n Built-In Wi-Fi with NFC,\r\n Scene Intelligent Auto Mode,\r\n Basic+ and Creative Auto Modes,', 'canon-eos-1300d-with-18-55mm-03.png', 'camera,canon,canon camera,eos,1300d'),
(37, 1, 2, 'Canon PowerShot D Camera', 74500, ' 16GB UHS-I SDHC Memory Card\r\n Camera Pouch', 'canon-powershot-g9-x-digital-camera-03_1.png', 'camera,canon,canon camera'),
(38, 6, 3, 'DJI Folding Propellers', 3800, ' Set of Two,\r\n Folding Design,\r\n Quick Release Attachment', 'dji-8330-quick-release-folding-propellers.png', 'Propellers,dji,drone'),
(39, 2, 3, 'DJI Inspire 2 Quadcopter', 480000, 'Image quality, power and intelligence to meet the needs of professional filmmakers and enterprises around the globe.\r\nmax speed: 95kmh, \r\nFlight time:30 min,\r\nControl range:7km,\r\nVideo resolution:6K/5.2K,\r\nLive view:1080P', 'dji-big-drone.png', 'drones,drone,dji,DJI Inspire,Quadcopter'),
(40, 6, 3, 'DJI Intelligent Battery For Mavic ', 25000, 'Intelligent Power Management,\r\nOvercharge and Low-Voltage Protections,\r\nLow-Temperature Protection', 'dji-intelligent-flight-battery-for-mavic-quadcopter.png', 'mavic,battery,dji,for mavic'),
(41, 2, 3, 'DJI Mavic Air', 167000, 'Capture 4K Video and 12MPnPhotos,\r\n3-Axis Gimbal-Stabilized Camera,\r\nGPS- & Vision Position-Based Navigation,\r\n8GB of Internal Storage,\r\nFlightAutonomy with Obstacle Detection,\r\nTop Speed of 43 mph in Sport Mode,\r\nActiveTrack Subject Tracking Modes,\r\nUp to 21 Minutes of Flight Time,\r\nFoldable, \r\nPortable Body,', 'dji-mavic-air-fly-more-1_1.png', 'drone,dji,mavic,mavic air,air,dji mavic'),
(42, 2, 3, 'DJI Mavic Pro', 245000, 'Integrated 12MP 4K Camera,\r\n3-Axis Gimbal Stabilizes Camera,\r\n4 dB Quieter Than Mavic Pro,\r\nGPS- & Vision Position-Based Navigation,\r\nDJI GO App-Based Control and Monitoring,\r\nTop Speed of 40 mph in Sport Mode,\r\nUp to 30 Minutes Flight Time,\r\nTap- and Gesture-Based Commands,\r\nThree Total Batteries / Charging Hub,\r\nMavic Shoulder Bag', 'dji-mavic-pro-platinum-fly-more-combo1.png', 'mavic,mavic pro,dji,dji mavic'),
(43, 6, 3, 'DJI Osmo 2 Smartphone Gimbal', 26000, 'Capture Stabilized Handheld, Footage,\r\nSupports up to 3.3\" Wide, Smartphones,\r\nSyncs up with Multi-Mode DJI GO App,\r\n15 Hour Run-Time,\r\nTracking Technology Built Into App,\r\nPortrait, Underslung, Flashlight Modes,\r\nOn the Move Time-Lapse Feature,\r\nPanorama Function,\r\n1/4\"-20 Tripod Mount,', 'dji-osmo-mobile-2.png', 'dji,osmo,gimbal,Stabilizer'),
(44, 2, 3, 'DJI Phantom 4 Pro', 382500, 'Integrated 12MP 4K Camera,\r\n3-Axis Gimbal Stabilizes Camera,\r\n4 dB Quieter Than Mavic Pro,\r\nGPS- & Vision Position-Based Navigation,\r\nDJI GO App-Based Control and Monitoring,\r\nTop Speed of 40 mph in Sport Mode,\r\nUp to 30 Minutes Flight Time,\r\nTap- and Gesture-Based Commands', 'dji-phantom-4-pro-quadcopter-02_1.png', 'dji,phantom,phantom 4,drone,drones,phantom pro'),
(45, 2, 3, 'DJI Spark Quadcopter', 83500, '2-Axis Stabilized Gimbal Camera,\r\n12MP Still Photos / 1080p/30 Video,\r\nGesture and TapFly Control,\r\nFlightAutonomy with Obstacle Detection,\r\nSubject Tracking from Various Angles,\r\nGPS- & Vision Position-Based Navigation,\r\nTop Speed of 31 mph in Sport Mode,\r\nUp to 16 Minutes Flying Time,\r\nUp to 1.2 Mile Control Range,\r\nControl, Edit, Share with DJI GO App,', 'dji-spark-quadcopter.png', 'dji,drone,spark,dji spark,Quadcopter'),
(46, 5, 7, 'Samsung Gear icon X', 32500, 'Available Memory :3.4 GB,\r\nSensors:Accelerometer, Proximity Sensor,\r\nEarbud Weight:8g,\r\nBattery Capacity:82 mAh,\r\nAudio Streaming time:Up to 5 Hours', 'gear-iconx.png', 'iconx,icon x,samsung,gear,earbud,icon'),
(47, 6, 4, 'Google Home Mini', 12500, 'The Google Home Mini Smart Assistant has everything a Smart Assistant device requires in a small package. The Mini is a smooth flat disk measuring about 4 inches in length and 1.5 inches in height. The top half is a 360 degree speaker that has hidden LED status lights to help communicate when the Mini is working or listening. The Mini has a single switch that will disable the always-on microphone, and a Micro USB port.', 'ghome-mini.png', 'google,home,mini,home mini,google home,google home mini'),
(48, 3, 4, 'Google pixel 2 XL', 168000, 'Android smartphone. Announced Oct 2017. Features 6.0â€³ P-OLED display, Snapdragon 835 chipset, 12.2 MP primary camera, 8 MP front camera', 'google pixel 2 xl.png', 'google,pixel,pixel 2,xl,google pixel,google pixel xl,phones,phone'),
(49, 6, 4, 'Google Home', 26000, 'Wireless network:\r\n802.11b/g/n/ac (2.4GHz/5Ghz) Wi-Fi for high-performance streaming,\r\nBluetoothÂ® 4.1\r\nSupported bluetooth profiles,\r\nSpeaker:\r\nHigh excursion speaker with 2\" driver + dual 2\",\r\nPower:\r\nRequired 16.5V, 2A included\r\nPower Adapter\r\n100-240V-1.1A 50-60Hz:\r\nPorts & Connectors,\r\nDC power jack:\r\nMicro-USB port (for service only)', 'google_home.png', 'google home,home,google,speaker'),
(50, 6, 4, 'Google Chrome Cast 2', 9200, 'HDMI Streaming Media Player. This player is your premier media streaming device, and can be plugged into the HDMI port on your TV. Now, you can use your smartphone or other such mobile device to cast your favorite TV shows, movies, sports, games, music, and trending videos on the big screen of your TV. ', 'google-chrome-cast.png', 'google,chrome cast,cast,google chrome cast'),
(51, 5, 4, 'Google Pixel Buds', 19200, 'Operating System:\r\nFor Google Pixel Buds as an audio headset,\r\nAndroid 5.0 Lollipop or higher\r\niOS 10.0 or higher,\r\nBattery: 120mAh,\r\nA single charge of Google Pixel Buds gives you up to 5 hours of listening time,\r\nSensors:\r\nMicrophone\r\nAccelerometer\r\nCapacitive touchpad', 'google-earbuds.png', 'pixel,ear buds,google,handsfree,google pixel buds'),
(52, 3, 4, 'Google Pixel', 71000, 'Google Pixel Android smartphone. Announced Oct 2016. Features 5.0â€³ AMOLED display, Snapdragon 821 chipset, 12.3 MP primary camera, 8 MP front camera, 2770 mAh battery, 128 GB storage, 4 GB RAM, Corning Gorilla Glass 4', 'google-google-pixel.png', 'google pixel,pixel,google'),
(53, 3, 4, 'Google Pixel 2', 131000, 'Android smartphone. Announced Oct 2017. Features 5.0â€³ AMOLED display, Snapdragon 835 chipset, 12.2 MP primary camera, 8 MP front camera', 'google-pixel-2.png', 'google,pixel,google pixel 2,pixel 2'),
(54, 6, 4, 'Pixel Book Pen', 17500, 'Buttons: \r\nActivate the Google Assistant on your Pixelbook by pressing and holding the button on your Pixelbook Pen,\r\nWriting features: \r\nVirtually no lag\r\nWacom AES latest technology with tilt support and pressure sensitivity,\r\nWeight:\r\n21.3g (.05 lbs) with battery included,\r\nBattery: \r\nReplaceable AAAA battery\r\n', 'Google-Pixelbook-Pen-02.png', 'pen,spen,s pen,google,pixel pen,google pen'),
(55, 5, 5, 'HUAWEI WATCH 2', 30000, 'Display:1.2-inch AMOLED 390 x 390,\r\nresolution:326ppi 1.2-inch AMOLED, \r\nProcessor:Snapdragon Wear 2100,	\r\nRAM: 768MB	\r\nStorage: 4GB (2.3GB available)', 'HUAWEI_WATCH_W2_BLACK.png', 'watch 2,watch,huawei,smart watch,wearable'),
(56, 3, 5, 'Huawei Nova 2i', 36000, 'smartphone with 5.9-inch 1080x2160 display, powered by 1.7GHz octa-core processor alongside 4GB of RAM and 16-megapixel rear camera,\r\nBattery capacity (mAh)â€Ž: â€Ž3340	Release dateâ€Ž: â€ŽOctober 2017,\r\nDimensions (mm)â€Ž: â€Ž156.20 x 75.00 x 7.50	Weight (g)â€Ž: â€Ž164.00', 'huawei-nova-2i.png', 'huawei,nova,nova 2,nava 2i, huawei nava 2i'),
(57, 3, 5, 'Huawei Nova 3i', 45000, 'Android smartphone. \r\nAnnounced Jul 2018, \r\nFeatures:6.3â€³ IPS LCD display with Nouch, Hisilicon Kirin 710 chipset, Dual: 16 MP (f/2.2, PDAF)\r\n4GB RAM', 'huawei-nova-3.png', 'huawei,nova,nova 3,nova 3i,huawei nova 3i'),
(58, 6, 5, 'Huawei fast Charger', 1200, 'Fast charger,\r\n5V-9V,\r\n1A-4A,\r\nCable length: 1m', 'huawei-nova-fast-charger.png', 'fast charger, huawei, charger'),
(59, 3, 5, 'Huawei P20 PRO', 131000, ' Announced Mar 2018. Features 6.1â€³ AMOLED display, Hisilicon Kirin 970 chipset, Triple: 40 MP (f/1.8, 27mm, 1/1.7â€³) + 20 MP B/W (f/1.6, 27mm) + 8 MP primary camera, 24 MP front camera, 4000 mAh battery, 128 GB storage, 6 GB RAM, IP67 certified', 'huawei-p20-pro.png', 'p 20 pro, p 20,huawei, huawei p20 pro,p20'),
(60, 6, 2, 'Canon EF-S 24mm Lens', 32500, 'EF-S Mount Lens/APS-C Format\r\n38mm (35mm Equivalent)\r\nOne Aspherical Element,\r\nOptimized Lens Coatings,\r\nSTM AF Motor Supports Movie ,Servo AF,\r\nMicro-Stepping Drive Aperture Mechanism,\r\nFull-Time Manual Focus Override,\r\nRounded 7-Blade Diaphragm,\r\nSlim Design Measures Less Than 1\"-Thick.', 'lense-mini.png', 'canon lens,lens'),
(61, 4, 1, 'MacBook Air', 151000, 'Featuring an ultra-thin and slim body, \r\nMacBook is lightweight and portable,\r\nwith a 1.8Ghz Intel i5 Dual-Core processor,\r\n8GB RAM, \r\n128GB SSD, ', 'macbook air.png', 'mac,macbook air,apple,tablet,laptop'),
(62, 2, 8, 'MI Drone', 61500, 'Manufacturer: Xiaomi,\r\nWeight: 1376g,\r\nHovering Accuracy:	Vertical: + / - 0.1m (working in the ultrasonic range), + / - 0.5m Horizontal: + / - 1.5 m\r\nLifting speed	Max climbing speed: 6 m / s (Novice Mode 4 m / s) Lowering speed: 1.5 m / s,\r\nMaximum flight speed: 18 m / S', 'mi_drone.png', 'xiaomi, mi drone, quadcopter'),
(63, 4, 8, 'MI NoteBook Air', 129000, 'Ultra light, ultra thin\r\nFull metal body,\r\n6th gen IntelÂ® Coreâ„¢ \r\ni5 Processor,\r\nDedicated graphics card \r\nNVIDIA GeForce 940MX,\r\n8GB DDR4 RAM \r\n256GB PCle SSD,\r\n9.5-hour \r\nBattery life', 'mi-laptop.png', 'MI NoteBook Air,laptop,tablet'),
(64, 3, 6, 'OnePlus 5', 89000, 'Android smartphone. Announced Jun 2017. Features 5.5â€³ Optic AMOLED display, Snapdragon 835 chipset, Dual: 16 MP (f/1.7, 24mm, 1/2.8â€³, 1.12 Âµm, gyro EIS) + 20 MP primary camera, 16 MP front camera, 3300 mAh battery, 128 GB storage, 8 GB RAM, Corning Gorilla Glass 5.', 'oneplus-5-mobile-phones.png', 'oneplus 5,mobile,smart phone'),
(65, 3, 6, 'OnePlus 5T', 92000, 'Android smartphone. Announced Nov 2017. Features 6.01â€³ Optic AMOLED display, Snapdragon 835 chipset, Dual: 16 MP (f/1.7, 27mm, 1/2.8â€³, 1.12 Âµm, gyro EIS) + 20 MP primary camera, 16 MP front', 'oneplus-5t-mobile-phones.png', 'OnePlus 5T, mobile,phone,smart'),
(66, 3, 6, 'OnePlus 6', 105000, ' features a 6.28\" (15.95 cm) display with a screen resolution of 1080 x 2280 pixels and runs on Android v8.1 (Oreo) operating system. The device is powered by Octa core (2.8 GHz, Quad core, Kryo 385 + 1.8 GHz, Quad core, Kryo 385) processor paired with 6 GB of RAM.', 'oneplus-6-mobile-phones.png', 'OnePlus 6, mobile,smart,phone'),
(67, 6, 6, 'OnePlus Dash Charger', 4200, 'Dash Charger,\r\nCable length 1.5m,\r\n9V~,\r\n4A', 'oneplus-original-dash-charger.png', 'OnePlus Dash Charger'),
(68, 4, 4, 'Google Pixelbook', 123000, 'With a 2,400 x 1,600 pixel display,\r\nDisplay 12.3\",\r\n7th-generation Intel Core i5 and i7 processors,\r\nWeight 1.11 kg (2.45 lbs),\r\nwith stylus pen.', 'pixelbook.png', 'google pixelbook,laptop,tablet'),
(69, 1, 7, 'Samsung Gear 360 Camera', 37400, ' Depth. 2.2 in. Sensor Resolution. 15.0 Megapixel. Optical Sensor Type. Dual CMOS. Optical Sensor Size. 1/2.3\" Image Processor. DRIMeVs. Digital Video Format. H.265. Image Recording Format. JPEG. Max Video Resolution. 3840 x 2160.', 'samsung_gear_360.png', 'Samsung Gear 360 Camera '),
(70, 3, 7, 'Galaxy Note 8', 115000, 'Android smartphone. Announced Aug 2017. Features 6.3â€³ Super AMOLED display, Exynos 8895 Octa chipset, Dual: 12 MP (f/1.7, 26mm, 1/2.5â€³, 1.4 Âµm, Dual Pixel PDAF) + 12MP primary camera, 8 MP front camera, 3300 mAh battery, 256 GB storage, 6 GB RAM, IP68 certified, Corning Gorilla Glass 5', 'samsung-galaxy-note-8.png', 'Samsung Galaxy Note 8'),
(71, 3, 7, 'Samsung Galaxy S8', 90000, ' Android smartphone. Announced Mar 2017. Features 5.8â€³ Super AMOLED display, Exynos 8895 Octa chipset, 12 MP primary camera, 8 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM, IP68 certified, Corning Gorilla Glass 5', 'samsung-galaxy-s8.png', 'Samsung Galaxy S8,phone,mobile,smart'),
(72, 3, 7, 'Samsung Galaxy S9', 110000, 'Android smartphone. Announced Feb 2018. Features 5.8â€³ Super AMOLED display, Exynos 9810 Octa chipset, 12 MP primary camera, 8 MP front camera, 3000 mAh battery, 64 GB storage, 4 GB RAM, IP68 certified, Corning Gorilla Glass 5', 'samsung-galaxy-s9.png', 'Samsung Galaxy S9,mobile,phone,smart'),
(73, 4, 7, 'Samsung Galaxy Tab A', 57400, 'Samsung Galaxy Tab A 9.7 Android tablet. Announced Mar 2015. Features 9.7â€³ TFT display, 5 MP primary camera, 2 MP front camera, 6000 mAh battery, 32 GB storage, 2 GB RAM.', 'samsung-galaxy-tab-a-10-1-s.png', 'Samsung Galaxy Tab A,tablet'),
(74, 4, 7, 'Samsung Galaxy Tab S3', 85500, 'Samsung Galaxy Tab S3 9.7 Android tablet. Announced Feb 2017. Features 9.7â€³ Super AMOLED display, Snapdragon 820 chipset, 13 MP primary camera, 5 MP front camera, 6000 mAh battery, 32 GB storage, 4 GB RAM.', 'samsung-galaxy-tab-s3.png', 'Samsung Galaxy Tab S3,tablet'),
(75, 5, 7, 'Samsung Gear S2 ', 33000, 'Samsung Gear S2 classic watch. Announced Aug 2015. Features 1.2â€³ Super AMOLED display, Exynos 3250 Dual chipset, 250 mAh battery, 4 GB storage, 512 MB RAM, IP68 certified, Corning Gorilla Glass 3.', 'samsung-gear-s2-classic.png', 'Samsung Gear S2 ,smart watch'),
(76, 5, 7, 'Samsung Gear S3', 42000, 'Samsung Gear S3 classic watch. Announced Aug 2016. Features 1.3â€³ Super AMOLED display, Exynos 7270 chipset, 380 mAh battery, 4 GB storage, 768 MB', 'samsung-gear-s3.png', 'Samsung Gear S3,smart watch,wearable'),
(77, 5, 8, 'Xiaomi Amazfit Arc', 11200, 'perfect pick for fitness enthusiasts, With its built-in GPS, you can calculate your pace and distance while running. Moreover, \r\nit features IP67 waterproof rating, you can track your heart rate, pace, calories, speed, altitude, cadence, etc. All the more, it allows you to listen to phone-free music, which you can store in its internal memory. ', 'xiaomi-amazfit-arc.png', 'Xiaomi Amazfit Arc,smart,watch'),
(78, 3, 8, ' Xiaomi Mi 8', 71000, 'Android smartphone. Announced May 2018. Features 6.21â€³ Super AMOLED display, Snapdragon 845 chipset, Dual: 12 MP (f/1.8, 1/2.55â€³, 1.4Âµm', 'xiaomi-mi-8-mobile-phones.png', ' Xiaomi Mi 8,smart,phone,mobile'),
(79, 6, 8, 'MI Power Bank 10000mAh', 3400, 'Fast charging support,\r\nstranded USB port,\r\n5V-12V Charging input,\r\n2A-4A Output ', 'xiaomi-mi-10000mah-power-bank.png', 'MI Power Bank 10000mAh, charger'),
(80, 5, 8, 'Xiaomi Mi Band 2', 4800, 'You will be able to unlock your smartphone in an instant whenever the Xiaomi Mi Band 2 is nearby. Li-battery delivers up to 20 days of battery life. track steps & sleep ', 'xiaomi-mi-band-2-wearables_224_jpg.png', 'Xiaomi Mi Band 2,watch,wearable'),
(81, 6, 8, 'MI TV Box 3', 15000, ' Mi Box 3s that were launched in 2016. The Mi Box 4 is powered by an Amlogic S905L quad-core Cortex-A53 64-bit processor with a 3+2 core Mali-45 GPU. It packs 2GB RAM and 8GB internal storage and gives 4K (3840x2160) HDR output at 60fps', 'xiaomi-mi-box.png', 'MI TV Box 3,'),
(82, 3, 8, 'Xiaomi Redmi Note 4', 49000, 'Android smartphone. Announced Sep 2017. Features 5.5â€³ IPS LCD display, Snapdragon 660 chipset, Dual: 12 MP (f/1.8, 27mm, 4-axis OIS) + 12 MP primary camera, 16 MP front camera, 3500 mAh battery, 128 GB storage, 6 GB RAM, Corning Gorilla Glass 4.', 'xiaomi-mi-note-3.png', 'Xiaomi Redmi Note 4'),
(83, 3, 8, 'Xiaomi Mi Note 3', 56000, 'Android smartphone. Announced Jan 2017. Features 5.5â€³ IPS LCD display, Snapdragon 625 chipset, 13 MP primary camera, 5 MP front camera, 4100 mAh battery, 64 GB storage, 4 GB RAM', 'xiaomi-redmi-note-3.png', 'Xiaomi Mi Note 3,mobile,phome,smart'),
(84, 5, 8, 'Xiaomi Mi VR Play', 3100, ' Elastic band, convenient to wear the 3D glasses on your head- Flip cover design allows the phone to access freely with suction cups- The VR headset is made of ABS and spherical resin lens materials without stimulation plastic sheet that is environmentally friendly, fully enclosed design- Suitable for 4.7-5.7 inches screen mobile phones (IOS and ANDROID) Material: Glass, ABS', 'xiaomi-mi-vr-play-wearables.png', 'Xiaomi Mi VR Play')";
 
 
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
 
mysqli_close($link);
?>