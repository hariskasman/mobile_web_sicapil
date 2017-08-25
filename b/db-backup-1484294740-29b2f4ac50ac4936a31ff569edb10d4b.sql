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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO gallery VALUES("21","09/10/2016","Haris Saktiawan Kasman","","../up/haris_kasman.jpg","../up/haris_kasman.jpg","ads","HP : 0823 9316 5362 <br/> HP : 0852 403 44441 <br/> BBM : 5B0E035F","","","150","150","aafd3425rfda"),
("22","09/10/2016","Alamat Kantor :","","../up/adress.png","../up/adress.png","ads","Jl.Mangga 2, Depan Balai Yehova Kota Bitung, Sulawesi Utara","","","75","75","bbbfsdaf35");



DROP TABLE IF EXISTS item;

CREATE TABLE `item` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `foto` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=183 DEFAULT CHARSET=latin1;

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
("158","wtok8.png"),
("159","web.png"),
("160","web.png"),
("161",""),
("162",""),
("163","slide 3.png"),
("164","slide3.png"),
("165","slide3.png"),
("166","2.png"),
("167","slide3.png"),
("168","revisi.png"),
("169","revisi.png"),
("170","jurusan.jpg"),
("171","pmb.png"),
("172",""),
("173","Dosen Relawan Mahasiswa part 2.png"),
("174","Dosen.png"),
("175","PMB.png"),
("176","brosur.png"),
("177","Profil.png"),
("178","tarbiyah.png"),
("179","ekonomi.png"),
("180","ekonomi.png"),
("181",""),
("182","ekonomi.png");



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

INSERT INTO page VALUES("4","Pembayaran","008000","Pembayaran","02/01/2017","","100","100","","","","000000","on","","on","","on","ghfsh4627fhfs"),
("10","Portofolio","","Portofolio","02/01/2017","","250","250","","","","","on","","on","","on","aaaadf43"),
("12","Product","","Product","02/01/2017","","0","0","","","tes","","on","","on","","on","987jhgwerddsafa"),
("13","About Us","","About Usb","02/01/2017","","0","0","","","","","on","","","","on","888777fdsagsdf");



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

INSERT INTO pengguna VALUES("1","Haris Saktiawan Kasman, S.Kom","haris","harishanzo","htoko","0","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","1","0","0","0","gfdsgsd4532536gfdsfa325");



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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO product VALUES("1","0","../up/wtok.png","Isesware - Wtok v.1.1","Isesware Wtok V.1.1 adalah sebuah sistem yang di buat oleh isesware yang berfocus pada Toko Online,sehingga toko online anda akan sangat cepat dan baik dengan sistem ini.","955000","0","","0","","","","homes","gafs9534611435gf012017jh455201701gffdas435121428pmfds"),
("2","0","../up/p4.png","Isesware - IS FREE","Isesware IS FREE adalah Pelatihan yang diberikan oleh Isesware yang berfocus kepada IT di bidang Teknologi Informasi. anda bisa mengikuti pelatihan ini dengan Gratis,","0","0","","0","","","","homes","gafs70811435gf012017jh455201701gffdas435122320pmfds"),
("3","0","../up/cus.png","Isesware Icus V.1.0","Isesware Icus adalah sebuah layanan IT dari isesware yang memiliki fungsi untuk pembuatan Website sekaligus sistem sesuai keinginan customer. mulai dari transaksi,sales,accounting,dll sesuai keinginan customer.Waktu Pembuatan 14 Hari ","1999000","0","","0","","","","homes","gafs5234691435gf012017jh455201701gffdas435122514pmfds"),
("4","0","../up/p3.png","Isesware Murp v.2.0","Isesware Murp v.2.0 adalah sebuah program kasir online untuk membantu mengelola toko/usaha anda, bisa memantau keuntungan,stok,sales,penjualan,laba dan rugi dari jarak jauh.cocok untuk toko ritel,cafe,resto,apotik,serta selalu di kembangkan dll.","395000","0","","0","","","","homes","gafs441291435gf012017jh455201701gffdas435122649pmfds"),
("5","0","../up/p2.png","Isesware Ierp v.2.0","Isesware Ierp v.2.0 adalah sebuah program/sistem online dari isesware yang didalamnya terdapat banyak program diantaranya logbook untuk memonitoring pegawai, cashflow untuk keuangan perusahaan dan cloud drive untuk penyimpanan awan.","495000","0","","0","","","","homes","gafs3429881435gf012017jh455201701gffdas435122755pmfds"),
("6","0","../up/p1.png","Isesware Iweb v.2.13","Isesware Iweb v.2.13 adalah sistem website yang cepat,baik,tangguh dan responsive, sangat baik untuk membangun website apapun. cocok untuk website company profile,website toko online, website personal,dll. situs ini pun di bangun dengan isesware Iweb v.2.13.","499900","0","","0","","","","homes","gafs5279551435gf012017jh455201701gffdas435122847pmfds");



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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




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

INSERT INTO setting VALUES("1","up/logo.png","../up/logo.png","300","250","","","","<ol class=\"carousel-indicators \">\n                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>\n                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>\n                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>\n                            </ol>","thumbnail","","900","330","","","1100","350","../up/favicon.png","000000","Isesware","Side Menu","Isesware Corporation","cv.isesware","Perusahaan yang bergerak di bidang perangkat lunak komputer","2018 © Isesware Corporation","http://www.isesware.com","FFFFFF","","000000","000000","","","000000","Perusahaan yang bergerak di bidang perangkat lunak komputer","76FCFA","76FCFA","76FCFA","76FCFA","../up/banner.jpg","../up/banner.jpg","","www.isesware.com","hariskasman@gmail.com","+62 852 403 44441","BCA 0530074102 a/n HARIS SAKTIAWAN KASMAN","Senin - Sabtu : 8:00 AM - 17:00 PM","BxciuIoiF6M","Video Isesware Pertama Kali","https://s15.postimg.io/ns9kxaz57/Preloader_8.gif","FFFFFF","../up/banner.jpg","000000","000000","Program Kasir Manado | Website Manado | Program Kasir | Program Toko |","<!-- Histats.com  START  (standard)-->\n					<script type=\"text/javascript\">document.write(unescape(\"%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E\"));</script>\n					<a href=\"http://www.histats.com\" target=\"_blank\" title=\"free stats\" ><script  type=\"text/javascript\" >\n					try {Histats.start(1,2550833,4,436,112,75,\"00011101\");\n					Histats.track_hits();} catch(err){};\n					</script></a>\n					<noscript><a href=\"http://www.histats.com\" target=\"_blank\"><img  src=\"http://sstatic1.histats.com/0.gif?2550833&101\" alt=\"Hotel di Bitung | Hotel Bitung\" border=\"0\"></a></noscript>\n					<!-- Histats.com  END  -->");



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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO slide VALUES("8","../up/sl2.jpg","sl2","","","","homes","","gafs1747751435gf122016jh455201612gffdas435114416amfds"),
("10","../up/sl1.jpg","sl1","","","","homes","active","gafs3617231435gf122016jh455201612gffdas435120737pmfds"),
("14","../up/sl3.jpg","sl3","","","","homes","","gafs4474541435gf122016jh455201612gffdas435112405pmfds");



DROP TABLE IF EXISTS testi;

CREATE TABLE `testi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `des` varchar(300) NOT NULL,
  `sort` varchar(100) NOT NULL,
  `stat` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO testi VALUES("1","Haris","Kenapa sesuatu terjadi","testimonial","on"),
("2","agung setiano","Percobaan Pertama adalah tentang cara berpikir kritis","testimonial","on"),
("4","sgdsg","hjgfdhjgsgfdsgdsfhd","Testimonial","on"),
("5","haris","ujicoba dulu","About Us","on");



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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS up;

CREATE TABLE `up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `baru` varchar(45) NOT NULL,
  `bk_sebelum` varchar(100) NOT NULL,
  `bk_sesudah` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO up VALUES("1","tes.php","up.php","jahil","b");



