CREATE DATABASE `db_laundry`;

USE `db_laundry`;

CREATE TABLE `customers` (
`customerNumber` INT(11) NOT NULL,
`orderNumber` VARCHAR(25) NOT NULL,
`nama` VARCHAR(100) NOT NULL,
`alamat` VARCHAR(100) NOT NULL,
`service` VARCHAR(25) NOT NULL,
`pembayaran` VARCHAR(25) NOT NULL
);

ALTER TABLE `customers`
ADD PRIMARY KEY (`customerNumber`),
ADD UNIQUE KEY `orderNumber` (`orderNumber`);

ALTER TABLE `customers`
MODIFY `customerNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` VARCHAR(250) NOT NULL
);

ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

