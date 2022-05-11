DROP DATABASE IF EXISTS `UPJ_karya`;
CREATE DATABASE IF NOT EXISTS `UPJ_karya`;
USE `UPJ_karya`;

CREATE TABLE `Author`(
    `id_author` int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `nama_author` varchar(100) COLLATE latin1_general_ci NOT NULL UNIQUE,
    `email_author` varchar(50) COLLATE latin1_general_ci NOT NULL,
    `password_author` varchar(30) COLLATE latin1_general_ci NOT NULL
)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `User`(
    `id_user` int(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `nama_user` varchar(30) COLLATE latin1_general_ci NOT NULL UNIQUE,
    `email_user` varchar(50) COLLATE latin1_general_ci NOT NULL,
    `password_author` varchar(30) COLLATE latin1_general_ci NOT NULL,
    
)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `Kategori`(
    `id_kategori` char(3) NOT NULL PRIMARY KEY,
    `nama_kategori` varchar(30) COLLATE latin1_general_ci NOT NULL
)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `Artikel`(
    `id_artikel` int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_kategori` char(3) COLLATE latin1_general_ci NOT NULL REFERENCES Kategori(id_kategori),
    `judul` text COLLATE latin1_general_ci NOT NULL,
    `thumbnail` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
    `nama_author` char(10) COLLATE latin1_general_ci NOT NULL REFERENCES Author(nama_author),
    `isi_artikel` text COLLATE latin1_general_ci NOT NULL,
    `tanggal_upload` date COLLATE latin1_general_ci NOT NULL,
    `trending` boolean
)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `Komentar`(
    `id_komen` int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `isi_komen` text COLLATE latin1_general_ci NOT NULL,
    `nama_user` varchar(30) COLLATE latin1_general_ci NOT NULL REFERENCES User(nama_user),
    `id_artikel` int(8) NOT NULL REFERENCES Artikel(id_artikel)
)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `Laporan`(
    `id_laporan` int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    `isi_laporan` text COLLATE latin1_general_ci NOT NULL,
    `id_artikel` int(8) NOT NULL REFERENCES Artikel(id_artikel),
    `id_author` int(8) NOT NULL REFERENCES Author(id_author)
)ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

CREATE TABLE `ktgr_artikel`(
    `id` int(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `id_artikel` int(8) NOT NULL REFERENCES Artikel(id_artikel),
    `id_kategori` char(3) COLLATE latin1_general_ci NOT NULL REFERENCES Kategori(id_kategori),
)

INSERT INTO `Author` (`id_author`, `nama_author`, `email_author`, `password`) VALUES
	('', 'Imelda A.', 'imel@gmail.com', '12341234'),
    ('', 'Ruth', 'ruth@gmail.com', '12341234'),
	('', 'Adel', 'adek@gmail.com', '12341234'),
    ('', 'Irvan', 'irvan@gmail.com', '12341234');

INSERT INTO `User` (`id_user`, `nama_user`, `email_user`, `password`) VALUES
	('', 'Averin', 'ave@gmail.com', '12341234');

INSERT INTO `Kategori` (`id_kategori`, `nama_kategori`) VALUES
	('UPJ', 'Tentang UPJ'),
    ('KWU', 'Kewirausahaan'),
    ('DKV', 'Desain Komunikasi Visual'),
    ('DP', 'Desain Produk'),
    ('INF', 'Teknik Informatika'),
    ('SIF', 'Sistem Informasi'),
    ('ARS', 'Arsitektur'),
    ('TSP', 'Teknik Sipil'),
    ('MNJ', 'Manajemen'),
    ('AKT', 'Akuntansi'),
    ('PSI', 'Psikologi'),
    ('KOM', 'Ilmu Komunikasi');

INSERT INTO `Artikel` (`id_artikel`, `id_kategori`, `judul`, `thumbnail`, `nama_author`, `isi_artikel`, `tanggal_upload`, `trending`) VALUES
	('', 'KWU', 'Dari Hobi Kreatif Menjadi Bisnis Unik', 'anting.jpg', 'Imelda A.', 'Apakah kamu suka makan mie instan? Tapi bingung cara mengekspresikan diri? Lihatlah anting para pecinta Indomie ini. Semua mata pasti akan tertuju padamu jika memakai anting unik seperti ini. Ibu Mimi Widjaja adalah pembuat dari produk kerajinan tangan kreatif tersebut. Sekitar tahun 2018, Ibu Mimi memulai bisnis dengan nama Mimicraftstudio. Tak hanya menuangkan kekreativitasannya di produk, tetapi Ibu Mimi juga memikirkan cara kreatif untuk mengembangkan dan mempertahankan bisnis uniknya, lho!
Menurut Clarkl Monstakis, kreatif merupakan pengalaman dalam mengekspresikan dan mengaktualisasikan identitas individu dalam bentuk terpadu antara hubungan diri sendiri, alam, dan orang lain. Dengan sifat kreatifnya, Ibu Mimi bisa mewujudkan identitas dirinya yang hobi membuat produk miniatur dan memadukannya ke bisnis. Produk ini dibuat dari polymer clay, yaitu sejenis tanah liat buatan manusia yang berwarna-warni, bisa dibentuk-bentuk, dan bisa dijadikan bahan kerajinan tangan. Hasil kerajinan tangan yang sudah diperjual-belikan sangatlah unik. Contohnya adalah anting berbentuk boneka salju, buah-buahan, ketupat, bahkan ada yang berbentuk masker medis dan handsanitizer.
Berawal dari hobi
Seperti yang dikatakan oleh Prof. Dr. M. Suyanto, M.M., “Dalam ilmu psychology of success, dari 2000 orang sukses yang diteliti, ternyata 80 persennya adalah orang yang menyukai apa yang dia lakukan.”, bisnis yang berawal dari hobi bisa membawa kesuksesan. Demikian pula dengan hal yang dilakukan Ibu Mimi. Sejak dulu, Ibu Mimi sudah gemar membuat kerajinan tangan. Namun, seiring berjalannya waktu, beliau semakin sibuk bekerja sehingga semakin jarang melakukan hobinya. Sampai akhirnya, di tahun 2018, beliau mulai terpikir untuk melanjutkan hobinya dengan menggunakan bahan polymer clay. Semakin banyak kreasi yang dibuat, lama-kelamaan semakin menumpuk kerajinan tangan buatan beliau. Munculah ide bisnis untuk menjual collectible charms atau yang biasanya disebut bandul/liontin yang bisa dikoleksi. Untuk menunjukkan keunikannya, beliau membuat collectible charms-nya menyerupai bentuk miniature dari produk makanan atau minuman yang terdapat di supermarket, seperti mie instan sehingga sudah diketahui oleh banyak orang. Hobi kerajinan tangan yang dijadikan bisnis juga termasuk hal yang unik karena tidak semua orang bisa membuatnya dan sudah pasti produknya akan berbeda dengan produk yang dijual oleh tokoh lain karena keterampilan tangan setiap orang berbeda. Ditambah lagi, karena ide bisnisnya berasal dari hobi, Ibu Mimi sangat bersemangat untuk mewujudkannya dan mulai mencari cara yang tepat untuk memasarkan produknya tersebut.
Kreatif dalam pemasaran
Keunikan produk akan menjadi sia-sia jika tidak disertai dengan strategi pemasaran yang benar. Strategi pemasaran adalah strategi untuk memperkenalan dan mempromosikan produk supaya produk itu bisa dilihat dan dibeli oleh konsumen sehingga mendapatkan keuntungan. Seperti yang kita ketahui, pemasaran secara online(dalam jaringan) banyak mendapat perhatian sekarang. Oleh karena itu, Ibu Mimi pun juga menjual produknya secara online walaupun pada awalnya beliau tidak langsung berjualan online, melainkan Ibu Mimi aktif berjualan dalam acara penggalangan dana dan bazar. Saat itu, beliau menjual collectible charms dalam bentuk kalung dan gantungan kunci supaya lebih bisa digunakan oleh pembeli.
Setelah melihat potensi bisnisnya, akhirnya beliau memutuskan untuk melakukan pemasaran di media sosial dan mulai mengunggah foto-foto produk di akun instagramnya @mimicraftstudio.online. Ini merupakan langkah yang tepat karena pada saat itu pengguna aktif bulanan Instagram tembus 1 miliar per Juni 2018 menurut situs tekno.kompas.com. Sedikit demi sedikit, Ibu Mimi mulai menambah variasi produknya. Beliau mulai membuat miniature hewan-hewan imut, tokoh-tokoh kartun terkenal, buah-buahan, dan lain-lain. Meskipun Ibu Mimi belum mempunyai pengalaman berjualan online atau berjualan di internet, tapi untuk menjangkau lebih banyak konsumen, beliau yakin inilah strategi pemasaran yang tepat. 
Kemudian, Ibu Mimi mulai menjual di beberapa toko online yang sering dikunjungi pemberi untuk mencari produk yang mereka inginkan. Tidak hanya itu, beliau juga membuat situs jualannya sendiri yang dapat dilihat pada https://www.mimicraftstudio.com/.  Pada situs tersebut, terdapat daftar produk yang dijual, halaman profil, dan halaman testimonia atau halaman penilaian dari konsumen  yang dikemas dengan tampilan situs yang cantik. Tentunya, pembeli akan merasa lebih nyaman saat melihat produk yang tersedia dan merasa aman untuk membelinya secara online karena ada testimoni.  Tak lupa, beliau memikirkan cara kreatif supaya tokonya lebih mudah dicari dibanding toko lainnya. Akhirnya, Ibu Mimi mempelajari SEO (Search Engine Optimization) yaitu cara untuk mengusahakan situs toko online kita menjadi yang paling atas saat pembeli mencari kata kunci tertentu. Cara ini juga bisa digunakan untuk menyusun daftar produk supaya membantu calon pembeli dalam menemukan produk yang dijual
Kreatif dapat memudahkan riset pasar 
Sebagai toko online yang baru buka pada waktu itu, Ibu Mimi terus menerus mempelajari dan menganalisis pasar. Kegiatan ini bisa disebut sebagai riset pasar. Situs infokomputer.grid.id mengatakan bahwa beberapa fungsi dari riset pasar adalah untuk mengetahui lebih dalam target konsumen dari produk, menganalisis strategi penjualan competitor, dan mengetahui kebutuhan konsumen. Hal pertama yang beliau lakukan adalah menentukan bentuk produk yang akan dijualnya misalnya, aksesoris, perhiasan, gantungan kunci dan sebagainya. Setelah itu, beliau melihat bisnis lain yang sudah berjalan untuk mengetahui produk yang diminati masyarakat dan kemudian tinggal digabung dengan konsep dan hobi kreatifnya, yaitu miniatur produk dari polymer clay. Menurutnya, di era digital ini, informasi tersebut tidak sulit didapatkan. Dari hasil analisa tersebut beliau melihat potensi pasar yang lebih besar bila produk dijual sebagai anting.  Sejak saat itu, beliau lebih memfokuskan produknya untuk digunakan sebagai anting. Didukung dengan kecilnya ukuran produk yang memungkinkan ongkos pengiriman lebih murah, toko online-nya pun berhasil mendapatkan banyak orderan secara online.
Sejalan dengan berkembangnya jumlah pelanggan, terjadilah komunikasi antara Ibu Mimi dan pelanggan yang juga membantu riset pasar. Ada beberapa pelanggan yang meminta beliau untuk membuatkan anting yang bisa dibuat sesuai permintaan pembeli atau yang biasanya disebut custom order. Dari situlah Ibu Mimi mulai menerima custom order supaya meningkatkan kepuasan pembeli. Bahkan, ada juga pelanggan yang tertarik untuk menjual kembali (re-seller) anting kreasi beliau dan membeli dalam jumlah banyak.  Sejak itu Ibu Mimi juga mulai melayani penjualan untuk re-seller.
Kreatif dalam menyelesaikan kendala dalam berbisnis
Banyaknya pesaing adalah salah satu kendala berbisnis yang dialami oleh Ibu Mimi. Untuk menghadapi hal ini, beliau memberikan kupon diskon, gratis ongkos kirim, dan lain-lain. Beliau juga meningkatkan kualitas produk dengan membuat produk yang lebih tahan lama. Dengan serangkaian uji coba bahan dan material, beliau akhirnya berhasil meningkatkan daya tahan produk.
Demikianlah kisah bisnis yang berawal dari hobi Ibu Mimi berkreasi dengan polymer clay dan membuat miniature produk makanan, minuman, atau miniature hewan, buah-buahan, dan lain-lain. Hobi yang disesuaikan dengan kebutuhan pasar akan menjadikan hobi itu sebagai bisnis yang menyenangkan dan memiliki konsep unik tertentu. Oleh karena itu jangan ragu untuk mencoba mengubah hobi menjadi bisnis. Kita tidak mau hanya terus menerus mengeluarkan uang demi hobi tanpa adanya pemasukan kembali kan?', '08-04-2022', 'true');