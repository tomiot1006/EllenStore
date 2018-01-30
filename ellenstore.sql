create database ellenstore;

use ellenstore;




create table admin(
	username int not null primary key,
	pass varchar(40)
);


create table danhmuc(
	iddanhmuc int not null auto_increment primary key,
    tendanhmuc nvarchar(40)
);

create table sukien(
	idsukien int not null primary key auto_increment,
    tensukien nvarchar(40),
    noidung text(1000),
    hinhanh varchar(40),
    video varchar(100)
);

create table baiviet(
	idbaiviet int not null primary key auto_increment,
    tieude nvarchar(100),
    noidung text(1000),
    hinhanh varchar(40),
    video varchar(100),
    luotlike int,
    dislike int
);

create table khachhang(
	idkhach int not null auto_increment primary key,
    tenkhach nvarchar(40),
    sdt varchar(14),
    ngaysinh date,
    diachi nvarchar(100),
    email varchar(40),
    gioitinh nvarchar(10),
    cmnd varchar(40),
	tentaikhoan varchar(40),
    matkhau varchar(40)
);

create table sanpham(
	idsp int not null primary key auto_increment,
    tensanpham nvarchar(40),
    giasp int,
	giamgia int,
    size varchar(2),
    mausac nvarchar(10),
	hinhanh varchar(40),
    video varchar(100),
    iddanhmuc int not null,
    chitiet nvarchar(500),
	ngaynhap date,
    foreign key (iddanhmuc) references danhmuc(iddanhmuc)
);


create table hoadon(
	idhoadon int not null primary key auto_increment,
    ngaydathang date,
    ngaygiaohang date,
    idkhachhang int not null,
	foreign key (idkhachhang) references khachhang (idkhach)
);

create table chitiethoadon(
	idinfo int not null primary key auto_increment,
    idhoadon int not null,
    foreign key (idhoadon) references hoadon(idhoadon),
    idsp int not null,
    foreign key (idsp) references sanpham(idsp),
    soluong int,
    tongtien varchar(10)
);

create table giohang(
	idgiohang int not null primary key,
    idkhach int not null,
    foreign key (idkhach) references khachhang(idkhach),
    idsp int not null,
    foreign key (idsp) references sanpham(idsp)
);

INSERT into danhmuc(tendanhmuc) VALUE ("Áo");
INSERT into danhmuc(tendanhmuc) VALUE ("Quần");
INSERT into danhmuc(tendanhmuc) VALUE ("Váy");

INSERT INTO `sanpham` (`idsp`, `tensanpham`, `giasp`, `giamgia`, `size`, `mausac`, `hinhanh`, `video`, `iddanhmuc`, `chitiet`, `ngaynhap`) 
VALUES (NULL, 'Váy ngắn cá tính', 269, 30, 'M', 'Trắng', 'vayngan.jpg', 'https://www.youtube.com/watch?v=vIaH35-MLsk', '3', 'váy rất ngắn', '2018-01-29');

INSERT INTO `sanpham` (`idsp`, `tensanpham`, `giasp`, `giamgia`, `size`, `mausac`, `hinhanh`, `video`, `iddanhmuc`, `chitiet`, `ngaynhap`) 
VALUES (NULL, 'Quần sóc', 369, NULL, 'S', 'Xanh jean', 'quansoc.jpg', 'https://www.youtube.com/watch?v=psuRGfAaju4', '2', 'Là quần sóc. OK!', '2018-01-01');

INSERT INTO `sanpham` (`idsp`, `tensanpham`, `giasp`, `giamgia`, `size`, `mausac`, `hinhanh`, `video`, `iddanhmuc`, `chitiet`, `ngaynhap`) 
VALUES (NULL, 'Áo Avengers', 469, NULL, 'L', 'Nâu', 'aoavengers.jpg', 'https://www.youtube.com/watch?v=psuRGfAaju4', '1', 'áo avengers', '2018-01-10');

INSERT INTO `sanpham` (`idsp`, `tensanpham`, `giasp`, `giamgia`, `size`, `mausac`, `hinhanh`, `video`, `iddanhmuc`, `chitiet`, `ngaynhap`) 
VALUES (NULL, 'Áo rách', 569, NULL, 'M', 'no color', 'aorach.jpg', 'https://www.youtube.com/watch?v=JRfuAukYTKg', '1', 'áo rách', '2017-12-15');


