CREATE TABLE `Users` (
	`id_user` int(5) NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`mobile_number` tinyint(15) NOT NULL,
	`address` varchar(150) NOT NULL,
	`login` varchar(20) NOT NULL,
	`password` varchar(8) NOT NULL,
	`date_sing_up` DATE(8) NOT NULL,
	`id_profile` DATE(8) NOT NULL,
	PRIMARY KEY (`id_user`)
);

CREATE TABLE `Profile` (
	`id_profile` int(5) NOT NULL AUTO_INCREMENT,
	`description` varchar(13) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id_profile`)
);

CREATE TABLE `Booking` (
	`id_booking` int(5) NOT NULL AUTO_INCREMENT,
	`Id_user` int(5) NOT NULL,
	`id_vehicle` int(5) NOT NULL,
	`date_booking` DATE(8) NOT NULL,
	`comments` varchar(300),
	`id_status_booking` int(5) NOT NULL,
	`time_booking` TIME(10) NOT NULL,
	PRIMARY KEY (`id_booking`,`Id_user`)
);

CREATE TABLE `status_booking` (
	`id_status_booking` int(5) NOT NULL AUTO_INCREMENT,
	`description` varchar(30) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id_status_booking`)
);

CREATE TABLE `Service` (
	`id_service` int(5) NOT NULL AUTO_INCREMENT,
	`Id_type_service` int(5) NOT NULL AUTO_INCREMENT,
	`date_service` DATE(8) NOT NULL,
	`time_service` TIME(20) NOT NULL,
	`id_staff` int(5) NOT NULL,
	PRIMARY KEY (`id_service`)
);

CREATE TABLE `type_service` (
	`id_type_service` int(5) NOT NULL AUTO_INCREMENT,
	`description` varchar(30) NOT NULL,
	`weight_service` int(2) NOT NULL,
	`coast_service` double(7) NOT NULL,
	PRIMARY KEY (`id_type_service`)
);

CREATE TABLE `Staff` (
	`id_staff` int(5) NOT NULL AUTO_INCREMENT,
	`id_staff` varchar(30) NOT NULL,
	PRIMARY KEY (`id_staff`)
);

CREATE TABLE `Booking_Service` (
	`id_booking_service` int(5) NOT NULL AUTO_INCREMENT UNIQUE,
	`id_booking` int(5) NOT NULL,
	`id_service` int(5) NOT NULL,
	PRIMARY KEY (`id_booking_service`)
);

CREATE TABLE `Items` (
	`id_items` int(5) NOT NULL AUTO_INCREMENT,
	`item_description` varchar(50) NOT NULL,
	`price` double(7) NOT NULL,
	PRIMARY KEY (`id_items`)
);

CREATE TABLE `service_items` (
	`id_service_items` int(5) NOT NULL AUTO_INCREMENT UNIQUE,
	`id_items` int(5) NOT NULL AUTO_INCREMENT,
	`id_service` int(5) NOT NULL AUTO_INCREMENT
);

CREATE TABLE `Vehicle` (
	`id_vehicle` int(5) NOT NULL AUTO_INCREMENT,
	`id_type_vehicle` int(5) NOT NULL AUTO_INCREMENT,
	`id_make_vehicle` int(5) NOT NULL AUTO_INCREMENT,
	`id_vehicle_engine` int(5) NOT NULL AUTO_INCREMENT,
	`licence_number` varchar(20) NOT NULL,
	`licence_expired_date` DATE(10) NOT NULL,
	PRIMARY KEY (`id_vehicle`)
);

CREATE TABLE `Type_vehicle` (
	`id_type_vehicle` int(5) NOT NULL AUTO_INCREMENT,
	`description` varchar(30) NOT NULL,
	PRIMARY KEY (`id_type_vehicle`)
);

CREATE TABLE `Make_vehicle` (
	`id_make_vehicle` int(5) NOT NULL AUTO_INCREMENT,
	`description` varchar(30) NOT NULL,
	PRIMARY KEY (`id_make_vehicle`)
);

CREATE TABLE `vehicle_engine` (
	`id_vehicle_engine` int(5) NOT NULL AUTO_INCREMENT,
	`description` varchar(30) NOT NULL,
	PRIMARY KEY (`id_vehicle_engine`)
);

ALTER TABLE `Users` ADD CONSTRAINT `Users_fk0` FOREIGN KEY (`id_profile`) REFERENCES `Profile`(`description`);

ALTER TABLE `Booking` ADD CONSTRAINT `Booking_fk0` FOREIGN KEY (`Id_user`) REFERENCES `Users`(`id_user`);

ALTER TABLE `Booking` ADD CONSTRAINT `Booking_fk1` FOREIGN KEY (`id_vehicle`) REFERENCES `Vehicle`(`id_vehicle`);

ALTER TABLE `Booking` ADD CONSTRAINT `Booking_fk2` FOREIGN KEY (`id_status_booking`) REFERENCES `status_booking`(`id_status_booking`);

ALTER TABLE `Service` ADD CONSTRAINT `Service_fk0` FOREIGN KEY (`Id_type_service`) REFERENCES `type_service`(`id_type_service`);

ALTER TABLE `Service` ADD CONSTRAINT `Service_fk1` FOREIGN KEY (`id_staff`) REFERENCES `Staff`(`id_staff`);

ALTER TABLE `Booking_Service` ADD CONSTRAINT `Booking_Service_fk0` FOREIGN KEY (`id_booking`) REFERENCES `Booking`(`id_booking`);

ALTER TABLE `Booking_Service` ADD CONSTRAINT `Booking_Service_fk1` FOREIGN KEY (`id_service`) REFERENCES `Service`(`id_service`);

ALTER TABLE `service_items` ADD CONSTRAINT `service_items_fk0` FOREIGN KEY (`id_items`) REFERENCES `Items`(`id_items`);

ALTER TABLE `service_items` ADD CONSTRAINT `service_items_fk1` FOREIGN KEY (`id_service`) REFERENCES `Service`(`id_service`);

ALTER TABLE `Vehicle` ADD CONSTRAINT `Vehicle_fk0` FOREIGN KEY (`id_type_vehicle`) REFERENCES `Type_vehicle`(`id_type_vehicle`);

ALTER TABLE `Vehicle` ADD CONSTRAINT `Vehicle_fk1` FOREIGN KEY (`id_make_vehicle`) REFERENCES `Make_vehicle`(`id_make_vehicle`);

ALTER TABLE `Vehicle` ADD CONSTRAINT `Vehicle_fk2` FOREIGN KEY (`id_vehicle_engine`) REFERENCES `vehicle_engine`(`id_vehicle_engine`);

