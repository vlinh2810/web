-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 08, 2021 lúc 05:18 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlidathang`
--

-- --------------------------------------------------------
CREATE database quanlidathang;
use quanlidathang;
--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` int(11) NOT NULL,
  `MSHH` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaDatHang` int(11) DEFAULT NULL,
  `GiamGia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdathang`
--

INSERT INTO `chitietdathang` (`SoDonDH`, `MSHH`, `SoLuong`, `GiaDatHang`, `GiamGia`) VALUES
(1, 1, 1, 200000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` int(11) NOT NULL,
  `MSKH` int(11) NOT NULL DEFAULT 0,
  `MSNV` int(11) NOT NULL DEFAULT 0,
  `NgayDH` date NOT NULL,
  `NgayGH` date NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`SoDonDH`, `MSKH`, `MSNV`, `NgayDH`, `NgayGH`, `TrangThai`, `DiaChi`) VALUES
(1, 2, 3, '2021-06-08', '2021-06-13', 0, '126 Cần Thơ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachikh`
--

CREATE TABLE `diachikh` (
  `MaDC` int(11) NOT NULL,
  `DiaChi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSKH` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diachikh`
--

INSERT INTO `diachikh` (`MaDC`, `DiaChi`, `MSKH`) VALUES
(1, '126 Cần Thơ', 2),
(2, '48 Hậu Giang', 2),
(3, '98 Hồ Chí Minh', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` int(11) NOT NULL,
  `TenHH` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `DuongDan` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `QuyCach` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `Gia` int(11) NOT NULL DEFAULT 0,
  `SoLuongHang` int(11) NOT NULL DEFAULT 0,
  `MaLoaiHang` int(11) NOT NULL DEFAULT 0,
  `GhiChu` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `DuongDan`, `QuyCach`, `Gia`, `SoLuongHang`, `MaLoaiHang`, `GhiChu`) VALUES
(1, 'Giày Nam 1', './hinh/na1.jpg', 'Giày được thiết kế theo phong cách hiện đại, màu s', 200000, 9, 1, 'Đẹp lắm'),
(2, 'Giày Nam 2', './hinh/na2.jpg', 'Giày được thiết kế theo phong cách hiện đại, màu s', 200000, 10, 1, 'Đẹp lắm'),
(3, 'Giày Nam 3', './hinh/na3.jpg', 'Giày được thiết kế theo phong cách hiện đại, màu s', 200000, 10, 1, 'Đẹp lắm'),
(4, 'Giày Nam 4', './hinh/na4.jpg', 'Giày được thiết kế theo phong cách hiện đại, màu s', 200000, 10, 1, 'Đẹp lắm'),
(5, 'Giày Nam 5', './hinh/na5.jpg', 'Giày được thiết kế theo phong cách hiện đại, màu s', 200000, 10, 1, 'Đẹp lắm'),
(6, 'Giày Nam 6', './hinh/na6.jpg', 'Giày được thiết kế theo phong cách hiện đại, màu s', 200000, 10, 1, 'Đẹp lắm'),
(7, 'Giày Nam 7', './hinh/na7.jpg', 'Giày được thiết kế theo phong cách hiện đại, màu s', 200000, 10, 1, 'Đẹp lắm'),
(8, 'Giày Nam 8', './hinh/na8.jpg', 'Giày được thiết kế theo phong cách hiện đại, màu s', 200000, 10, 1, 'Đẹp lắm'),
(9, 'Giày Nữ 1', './hinh/n1.jpg', 'Giày được thiết kế theo phong cách hiện đại, màu s', 200000, 10, 2, 'Đẹp lắm'),
(10, 'Giày Nữ 2', './hinh/n2.jpg', 'Giày được thiết kế theo phong cách hiện đại, màu s', 200000, 10, 2, 'Đẹp lắm'),
(11, 'Giày Nữ 3', './hinh/n3.jpg', 'Giày được thiết kế theo phong cách hiện đại, màu s', 200000, 10, 2, 'Đẹp lắm'),
(12, 'Giày Nữ 4', './hinh/n4.jpg', 'Giày được thiết kế theo phong cách hiện đại, màu s', 200000, 10, 2, 'Đẹp lắm'),
(13, 'Giày Nũ 5', './hinh/n5.jpg', 'Thiết kế tinh tế', 200000, 10, 2, 'Đẹp lắm'),
(14, 'Giày Nữ 6', './hinh/n6.jpg', 'Thiết kế tinh tế', 200000, 10, 2, 'Đẹp lắm'),
(15, 'Giày Nữ 7', './hinh/n7.jpg', 'Thiết kế tinh tế', 200000, 10, 2, 'Đẹp lắm'),
(16, 'Giày Nữ 8', './hinh/n8.jpg', 'Thiết kế tinh tế', 200000, 10, 2, 'Đẹp lắm'),
(17, 'Túi Đeo 1', './hinh/b1.jpg', 'Thiết kế tinh tế', 150000, 10, 3, 'Đẹp lắm'),
(18, 'Túi Đeo 2', './hinh/b2.jpg', 'Thiết kế tinh tế', 150000, 10, 3, 'Đẹp lắm'),
(19, 'Balo 2', './hinh/b4.jpg', 'Thiết kế tinh tế', 150000, 10, 3, 'Đẹp lắm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` int(11) NOT NULL,
  `HoTenKH` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TenDangNhap` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoDienThoai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `HoTenKH`, `TenDangNhap`, `MatKhau`, `DiaChi`, `SoDienThoai`, `Email`) VALUES
(1, 'Admin', 'Admin@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'Hà Nội', '9999', 'Admin@gmail.com'),
(2, 'Vương Linh', 'nnlinhaaa@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '98 Hồ Chí Minh', '0967494477', 'nnlinhaaa@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihanghoa`
--

CREATE TABLE `loaihanghoa` (
  `MaLoaiHang` int(11) NOT NULL,
  `TenLoaiHang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihanghoa`
--

INSERT INTO `loaihanghoa` (`MaLoaiHang`, `TenLoaiHang`) VALUES
(1, 'NAM'),
(2, 'NỮ'),
(3, 'BALO - TÚI');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` int(11) NOT NULL,
  `HoTenNV` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ChucVu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `NV_SoDienThoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `ChucVu`, `DiaChi`, `NV_SoDienThoai`) VALUES
(1, 'Nguyễn Văn A', 'Quản lý', 'CT', '0909123121'),
(2, 'Trần Thị B', 'Quản lý', 'HG', '0909123122'),
(3, 'Cao Văn C', 'Quan lý', 'ST', '0909123123'),
(4, 'Linh Vương', 'Quản lý', 'CT', '0909123124'),
(5, 'Phạm An', 'Quan lý', 'HG', '0909123125');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`SoDonDH`,`MSHH`),
  ADD KEY `FK_chitietdathang_hanghoa` (`MSHH`),
  ADD KEY `FK_chitietdathang_dathang` (`SoDonDH`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD KEY `FK_dathang_nhanvien` (`MSNV`),
  ADD KEY `FK_dathang_khachhang` (`MSKH`);

--
-- Chỉ mục cho bảng `diachikh`
--
ALTER TABLE `diachikh`
  ADD PRIMARY KEY (`MaDC`),
  ADD KEY `FK_diachikh_khachhang` (`MSKH`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `FK_hanghoa_loaihanghoa` (`MaLoaiHang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`),
  ADD UNIQUE KEY `TenDangNhap` (`TenDangNhap`);

--
-- Chỉ mục cho bảng `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  ADD PRIMARY KEY (`MaLoaiHang`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `SoDonDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `diachikh`
--
ALTER TABLE `diachikh`
  MODIFY `MaDC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `MSHH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MSKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  MODIFY `MaLoaiHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MSNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD CONSTRAINT `FK_chitietdathang_dathang` FOREIGN KEY (`SoDonDH`) REFERENCES `dathang` (`SoDonDH`),
  ADD CONSTRAINT `FK_chitietdathang_hanghoa` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);

--
-- Các ràng buộc cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD CONSTRAINT `FK_dathang_khachhang` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`),
  ADD CONSTRAINT `FK_dathang_nhanvien` FOREIGN KEY (`MSNV`) REFERENCES `nhanvien` (`MSNV`);

--
-- Các ràng buộc cho bảng `diachikh`
--
ALTER TABLE `diachikh`
  ADD CONSTRAINT `FK_diachikh_khachhang` FOREIGN KEY (`MSKH`) REFERENCES `khachhang` (`MSKH`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `FK_hanghoa_loaihanghoa` FOREIGN KEY (`MaLoaiHang`) REFERENCES `loaihanghoa` (`MaLoaiHang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
