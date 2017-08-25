DROP TABLE IF EXISTS business;

CREATE TABLE `business` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(1000) NOT NULL,
  `name` varchar(45) NOT NULL,
  `des` varchar(3000) NOT NULL,
  `codx` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO business VALUES("1","../up/b2.png","Animal","Dengan menjaga hewan,maka kita turut melindungi alam dan menciptakan harmonisasi di dalam lingkungan alam bersama hewan hewan.","aabvsg5436"),
("2","../up/b4.png","Tarsius","Tarsius adalah hewan yang di lindungi dan sangat di jaga, karena hewan ini adalah hewan yang langka dan habitatnya hampir punah.","bbb5443ytrgs"),
("3","../up/b3.png","Home Stay","Home Stay memudahkan habitat untuk hidup lebih baik dan lebih lama juga menciptakan atmosfer lingkungan yang lebih dinamis","ccfdsag5435"),
("4","../up/b1.png","Alam","Menjaga alam agar habitat mereka selalu aman dan selalu terjaga dari perilaku manusia yang memburu merekai.","ddvfcg542");



DROP TABLE IF EXISTS cashflow;

CREATE TABLE `cashflow` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(35) NOT NULL,
  `trx` enum('in','out') NOT NULL,
  `note` varchar(100) NOT NULL,
  `money` int(15) NOT NULL,
  `dt` varchar(35) NOT NULL,
  `mt` varchar(5) NOT NULL,
  `yr` varchar(5) NOT NULL,
  `codx` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO cashflow VALUES("1","har","2016-08-23","07:39:39","in","tesa","35000","23/08/2016","08","2016","adf34201643ad615b53iefp0823073939amf5d7tw"),
("6","haris","2017-01-05","03:15:37","out","beli bukuk","12000","05/01/2017","01","2017","gafs1093451435gf012017jh455201701gffdas435031537amfds"),
("7","haris","2017-01-05","03:16:11","in","dapat hadiaha","12000","05/01/2017","01","2017","gafs4537661435gf012017jh455201701gffdas435031611amfds");



DROP TABLE IF EXISTS folder;

CREATE TABLE `folder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `baru` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO folder VALUES("1","lolah","up");



DROP TABLE IF EXISTS gallery;

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `name_col` varchar(6) NOT NULL,
  `small_pic` varchar(1000) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `sort` varchar(300) NOT NULL,
  `small_des` varchar(100) NOT NULL,
  `des_color` varchar(6) NOT NULL,
  `page` varchar(200) NOT NULL,
  `wt` varchar(5) NOT NULL,
  `ht` varchar(5) NOT NULL,
  `codx` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO gallery VALUES("21","09/10/2016","Hotline","000000","../up/cs.jpg","../up/cs.jpg","ads","<b>Hub/Sms : 089 649 441 891 </b>","","","150","150","aafd3425rfda"),
("22","09/10/2016","Alamat Sekolah :","","../up/adress.png","../up/adress.png","ads","Jl. Poros Bitung Manado, Girian Indah, Girian, Kota Bitung, Sulawesi Utara","","","75","75","bbbfsdaf35"),
("23","03/01/2017","Perkumpulan","000000","../up/n1.jpg","","news","Perkumpulan yang di adakan di wilayah manado city dengan dihadiri banyak anggota","000000","","100","100","gafs4298101435gf012017jh455201701gffdas435072014amfds"),
("24","03/01/2017","Berkunjung Silaturahmi","000000","../up/n2.jpg","","news","Berkunjung ke tempat anggota dalam acara silaturahmi bersama anggota yang lain.","000000","","","","gafs6634831435gf012017jh455201701gffdas435072503amfds"),
("25","03/01/2017","Bantuan Baksos","000000","../up/n3.jpg","","news","Bantuan Baksos yang dilakukan oleh KDGI Sulut sangat membantu banyak masyarakat sekitar.","000000","","","","gafs1182261435gf012017jh455201701gffdas435072936amfds"),
("26","03/01/2017","Rekreasi Bersama","000000","../up/n4.jpg","","news","Rekreasi bersama Anggota KDGI Sulut sangat menyenangkan dan membahagiakan untuk membina kebersamaan ","000000","","","","gafs9820261435gf012017jh455201701gffdas435073417amfds"),
("27","03/01/2017","Menikmati Malam","000000","../up/n5.jpg","","news","Kebersamaan dalam menikmati indahnya malam bersama KDGI Sulut semakin erat dan solid.","000000","","","","gafs4956061435gf012017jh455201701gffdas435073944amfds"),
("28","03/01/2017","Touring Bersama","000000","../up/n6.jpg","","news","Kegiatan Touring bersama anggota KDGI Sulut di lakukan di Kota Kotamobagu dengan Penuh Antusias.","000000","","","","gafs6040351435gf012017jh455201701gffdas435074444amfds");



DROP TABLE IF EXISTS item;

CREATE TABLE `item` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `foto` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=latin1;

INSERT INTO item VALUES("12","(Draft) Laporan Hasil Survey IKM terhada"),
("13","jurnal cek.png"),
("14","Naskah ibu samsia.docx"),
("15","IWEB.jpg"),
("16","1.jpg"),
("17","config.php"),
("18","isesware.png"),
("19",""),
("20",""),
("21",""),
("22",""),
("23",""),
("24",""),
("25",""),
("26",""),
("27",""),
("28",""),
("29",""),
("30",""),
("31",""),
("32",""),
("33",""),
("34",""),
("35",""),
("36",""),
("37",""),
("38",""),
("39",""),
("40",""),
("41",""),
("42",""),
("43",""),
("44",""),
("45",""),
("46",""),
("47",""),
("48",""),
("49",""),
("50",""),
("51",""),
("52",""),
("53",""),
("54",""),
("55",""),
("56",""),
("57",""),
("58",""),
("59",""),
("60",""),
("61",""),
("62",""),
("63",""),
("64",""),
("65",""),
("66",""),
("67",""),
("68",""),
("69",""),
("70",""),
("71",""),
("72",""),
("73",""),
("74",""),
("75",""),
("76",""),
("77",""),
("78",""),
("79",""),
("80",""),
("81",""),
("82",""),
("83",""),
("84",""),
("85",""),
("86",""),
("87",""),
("88",""),
("89",""),
("90",""),
("91",""),
("92",""),
("93",""),
("94",""),
("95",""),
("96",""),
("97",""),
("98",""),
("99",""),
("100",""),
("101",""),
("102",""),
("103",""),
("104",""),
("105",""),
("106",""),
("107",""),
("108",""),
("109",""),
("110",""),
("111",""),
("112",""),
("113",""),
("114",""),
("115",""),
("116",""),
("117",""),
("118",""),
("119",""),
("120",""),
("121",""),
("122",""),
("123",""),
("124","lpklogo.png"),
("125","lpklogo.png"),
("126","isesware.png"),
("127","banner.jpg"),
("128","logo1.png"),
("129","bed.png"),
("130","eat.png"),
("131","image.png"),
("132","sl1.jpg"),
("133","sl2.jpg"),
("134","sl3.jpg"),
("135","travel.png"),
("136","b1.png"),
("137","b2.png"),
("138","b3.png"),
("139","b4.png"),
("140","logo1.png"),
("141","sl1.jpg"),
("142","sl2.jpg"),
("143","sl3.jpg"),
("144","tree.jpg"),
("145","adress.png"),
("146","ierp1.png"),
("147","ierp2.png"),
("148","ierp3.png"),
("149","wtok.png"),
("150","wtok1.png"),
("151","wtok2.png"),
("152","wtok3.png"),
("153","wtok4.png"),
("154","wtok4.png"),
("155","wtok5.png"),
("156","wtok6.png"),
("157","wtok7.png"),
("158","wtok8.png");



DROP TABLE IF EXISTS page;

CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `name_col` varchar(6) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `tgl` varchar(45) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `width` int(25) NOT NULL,
  `height` int(25) NOT NULL,
  `down` varchar(45) NOT NULL,
  `sdes` varchar(2500) NOT NULL,
  `des` varchar(4000) NOT NULL,
  `des_color` varchar(6) NOT NULL,
  `stat` varchar(35) NOT NULL,
  `sort` varchar(100) NOT NULL,
  `side` varchar(15) NOT NULL,
  `ul` varchar(45) NOT NULL,
  `cm` varchar(15) NOT NULL,
  `codx` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO page VALUES("4","Gallery","000000","Gallery","03/01/2017","","100","100","","","","000000","on","","on","","on","ghfsh4627fhfs"),
("10","Kopi Darat","","Kopi Darat","03/01/2017","","100","100","","","","","on","","on","","on","aaaadf43"),
("12","Komunitas","","Komunitas","03/01/2017","","0","0","","","tes","","on","","on","","on","987jhgwerddsafa"),
("13","About Us","","About Us","03/01/2017","","0","0","","","","","off","","","","on","888777fdsagsdf");



DROP TABLE IF EXISTS pengguna;

CREATE TABLE `pengguna` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `stores` varchar(100) NOT NULL,
  `kas` int(15) NOT NULL,
  `a` int(3) NOT NULL,
  `b` int(3) NOT NULL,
  `c` int(3) NOT NULL,
  `d` int(3) NOT NULL,
  `e` int(3) NOT NULL,
  `f` int(3) NOT NULL,
  `g` int(3) NOT NULL,
  `h` int(3) NOT NULL,
  `i` int(3) NOT NULL,
  `j` int(3) NOT NULL,
  `k` int(3) NOT NULL,
  `l` int(3) NOT NULL,
  `m` int(3) NOT NULL,
  `n` int(3) NOT NULL,
  `o` int(3) NOT NULL,
  `p` int(3) NOT NULL,
  `q` int(3) NOT NULL,
  `r` int(3) NOT NULL,
  `s` int(3) NOT NULL,
  `t` int(3) NOT NULL,
  `u` int(3) NOT NULL,
  `v` int(3) NOT NULL,
  `w` int(3) NOT NULL,
  `codx` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO pengguna VALUES("1","Haris Saktiawan Kasman, S.Kom","haris","harisk","htoko","10000","0","0","0","0","1","1","1","1","1","1","1","1","1","1","1","0","1","1","1","1","1","1","1","gfdsgsd4532536gfdsfa325");



DROP TABLE IF EXISTS post;

CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `name_col` varchar(6) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `tgl` varchar(45) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `width` int(25) NOT NULL,
  `height` int(25) NOT NULL,
  `sdes` varchar(2500) NOT NULL,
  `des` varchar(4000) NOT NULL,
  `des_color` varchar(6) NOT NULL,
  `stat` varchar(35) NOT NULL,
  `sort` varchar(100) NOT NULL,
  `codx` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS product;

CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial` int(10) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `name` varchar(55) NOT NULL,
  `des` varchar(1000) NOT NULL,
  `price` int(100) NOT NULL,
  `qty` int(15) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `profit` int(50) NOT NULL,
  `stores` varchar(100) NOT NULL,
  `page` varchar(100) NOT NULL,
  `onsales` varchar(1000) NOT NULL,
  `sort` varchar(45) NOT NULL,
  `codx` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO product VALUES("2","123","../up/p1.jpg","Disket Baru","","250000","390","Box","15000","htoko","","","","gafs4845891435gf012017jh455201701gffdas435125210pmfds");



DROP TABLE IF EXISTS sales;

CREATE TABLE `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trx` varchar(45) NOT NULL,
  `cashier` varchar(45) NOT NULL,
  `sku` varchar(45) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  `prd` varchar(45) NOT NULL,
  `unit` varchar(45) NOT NULL,
  `qty` int(50) NOT NULL,
  `price` int(50) NOT NULL,
  `profit` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `net_profit` int(100) NOT NULL,
  `stat` varchar(45) NOT NULL,
  `sto` varchar(50) NOT NULL,
  `dt` varchar(45) NOT NULL,
  `mt` int(45) NOT NULL,
  `yr` int(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS sec;

CREATE TABLE `sec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `baru` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO sec VALUES("1","andorami.php","login.php");



DROP TABLE IF EXISTS setting;

CREATE TABLE `setting` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `logo_a` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `logo_width` int(10) NOT NULL,
  `logo_height` int(10) NOT NULL,
  `bg_thumb` varchar(100) NOT NULL,
  `bg_ads` varchar(100) NOT NULL,
  `bg_btn` varchar(100) NOT NULL,
  `indikator` varchar(1000) NOT NULL,
  `slide_stat` varchar(100) NOT NULL,
  `slide_indi` varchar(1000) NOT NULL,
  `slide_width` int(15) NOT NULL,
  `slide_height` int(15) NOT NULL,
  `slide_top_stat` varchar(100) NOT NULL,
  `slide_top_indi` varchar(1000) NOT NULL,
  `slide_top_width` int(15) NOT NULL,
  `slide_top_height` int(15) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `icon_menu` varchar(6) NOT NULL,
  `sis_name` varchar(35) NOT NULL,
  `side_menu` varchar(45) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `facebook` varchar(150) NOT NULL,
  `topic` varchar(150) NOT NULL,
  `footer` varchar(55) NOT NULL,
  `footer_link` varchar(50) NOT NULL,
  `footer_color` varchar(6) NOT NULL,
  `footer_bg` varchar(1000) NOT NULL,
  `theme` varchar(35) NOT NULL,
  `font_menu` varchar(6) NOT NULL,
  `menu_atas_color` varchar(6) NOT NULL,
  `menu_bwh_color` varchar(6) NOT NULL,
  `txt` varchar(20) NOT NULL,
  `txt_run` varchar(1000) NOT NULL,
  `shadow` varchar(6) NOT NULL,
  `shadow_btn` varchar(25) NOT NULL,
  `shadow_box` varchar(25) NOT NULL,
  `shadow_slide` varchar(25) NOT NULL,
  `menu_atas` varchar(1000) NOT NULL,
  `menu_bwh` varchar(1000) NOT NULL,
  `bg_site` varchar(1000) NOT NULL,
  `site` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `rekening` varchar(45) NOT NULL,
  `time_work` varchar(100) NOT NULL,
  `video` varchar(300) NOT NULL,
  `video_des` varchar(45) NOT NULL,
  `preload` varchar(1000) NOT NULL,
  `preload_bg` varchar(6) NOT NULL,
  `mobile_menu` varchar(1000) NOT NULL,
  `mobile_button` varchar(1000) NOT NULL,
  `mobile_font` varchar(6) NOT NULL,
  `seo` varchar(1000) NOT NULL,
  `widget` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO setting VALUES("1","up/logo.png","../up/logo.png","300","250","http://www.w3schools.com/cssref/paper.gif","http://www.w3schools.com/cssref/paper.gif","http://www.w3schools.com/cssref/paper.gif","<ol class=\"carousel-indicators \">\n                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>\n                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>\n                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>\n                            </ol>","thumbnail","<ol class=\"carousel-indicators \">\n                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>\n                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>\n                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>\n                            </ol>","830","330","","","1100","350","../up/favicon.jpg","FFFFFF","KDGI Sulut","Side Menu","KDGI Sulut","100009079255813","KDGI Sulut adalah sebuah wadah Komunitas Datsun Go dan Datsun Go+ untuk bersama menjalin kebersamaan dan suka cita dalam komunitas.","2018 © Isesware Corporation","http://www.isesware.com","FFFFFF","","000000","FFFFFF","","","0000FF","Kebersamaan dalam Datsun Go dan Datsun Go+ di KDGI Sulawesi Utara bersama para anggotanya.","0000FF","000000","000000","888888","../up/banner.jpg","../up/bannerb.jpg","","www.quyunadisa.com","admin@kdgisulut.com","+62 77777","Belum Tersedia","Senin - Sabtu : 7:00 AM - 15:00 PM","","Video Datsun Go","https://s15.postimg.io/ns9kxaz57/Preloader_8.gif","FFFFFF","../up/banner.png","","000000","Datsun Go | Datsun Go+ | Komunitas Datsun","");



DROP TABLE IF EXISTS slide;

CREATE TABLE `slide` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `pic` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_color` varchar(6) NOT NULL,
  `des` varchar(3000) NOT NULL,
  `des_color` varchar(6) NOT NULL,
  `sort` varchar(45) NOT NULL,
  `stat` varchar(15) NOT NULL,
  `codx` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO slide VALUES("1","../up/sl2.jpg","Touring KDGI Sulut","FAFDFA","Touring KDGI Sulut adalah serangkaian perjalanan yang dilakukan oleh KDGI Sulut untuk memupuk rasa persaudaraan dan kebersamaan.","FAFDFA","home","","aagfdag5"),
("2","../up/sl1.jpg","Kebersamaan KDGI Sulut","03FEF1","Kebersamaan yang selalu terjalin dan selalu bersama dalam setiap kegiatan kegiatan yang dilakukan agar tercipta solidaritas bersama.","03FEF1","home","","bbbfdfagg435"),
("3","../up/sl3.jpg","Baksos KDGI Sulut","FFFFFF","Baksos yang di adakan dengan baik oleh KDGI Sulut sangat terbantu bagi masyarakat, terlebih bagi masyarakat yang membutuhkan.","FFFFFF","home","","gafs6071171435gf012017jh455201701gffdas435065407amfds");



DROP TABLE IF EXISTS testi;

CREATE TABLE `testi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `des` varchar(300) NOT NULL,
  `sort` varchar(100) NOT NULL,
  `stat` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO testi VALUES("1","Haris","Kenapa sesuatu terjadi","testimonial","on"),
("2","agung setiano","Percobaan Pertama adalah tentang cara berpikir kritis","testimonial","on"),
("4","sgdsg","hjgfdhjgsgfdsgdsfhd","Testimonial","on");



DROP TABLE IF EXISTS tran;

CREATE TABLE `tran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trx` varchar(45) NOT NULL,
  `cashier` varchar(45) NOT NULL,
  `total` int(45) NOT NULL,
  `net_profit` int(45) NOT NULL,
  `bayar` int(25) NOT NULL,
  `sisa` int(25) NOT NULL,
  `dt` varchar(45) NOT NULL,
  `mt` int(45) NOT NULL,
  `yr` int(45) NOT NULL,
  `stores` varchar(45) NOT NULL,
  `stat` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS up;

CREATE TABLE `up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `baru` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO up VALUES("1","tes.php","up.php");



