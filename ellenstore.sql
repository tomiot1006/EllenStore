create database ellenstore;

use ellenstore;

create table taikhoan(
	idtaikhoan int not null auto_increment primary key,
    tentaikhoan varchar(40),
    matkhau varchar(40)
);

create table admin(
	id int not null auto_increment primary key,
    hoten nvarchar(40),
    sdt varchar(14),
    email varchar(40),
    diachi nvarchar(140)
);

create table nhanvien(
	id int primary key not null auto_increment,
    hoten nvarchar(40),
    sdt varchar(14),
    email varchar(40),
    diachi nvarchar(140),
    cmnd varchar(40)
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

create table sanpham(
	idsp int not null primary key auto_increment,
    tensanpham nvarchar(40),
    giasp varchar(10),
    size varchar(2),
    mausac nvarchar(10),
    iddanhmuc int not null,
    chitiet nvarchar(500),
    foreign key (iddanhmuc) references danhmuc(iddanhmuc)
);

create table khachhang(
	idkhach int not null auto_increment primary key,
    tenkhach nvarchar(40),
    sdt varchar(14),
    ngaysinh date,
    diachi nvarchar(100),
    email varchar(40),
    gioitinh nvarchar(10),
    cmnd varchar(40)
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
