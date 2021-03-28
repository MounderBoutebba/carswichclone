CREATE TABLE `cars` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `user_id` int,
  `color_id` int,
  `last_mileage_price_log_id` int,
  `last_inspection_id` int,
  `wilaya_id` int,
  `model_id` int,
  `status` ENUM ('new', 'remind', 'duplicate', 'bad_condition', 'missing_documents', 'not_interested', 'refusal_to_pay_inspection', 'refusal_to_pay_commission', 'unreachable', 'overvalued', 'appointment_taken', 'published', 'already_sold', 'concluded', 'sold_by_v'),
  `seat_number` int,
  `seat` ENUM ('leather_seats', 'fabric_seats'),
  `transmistion` ENUM ('Automatic', 'Manual', 'Tiptronic'),
  `cylindre_number` int,
  `body` ENUM ('sedan', 'suv', 'coupe', 'hatchback', 'convertible', 'wagon', 'pickup', 'minivan', 'van'),
  `year` int,
  `energy` ENUM ('ess', 'diesel', 'hybride'),
  `horse_power` int,
  `number_of_owners` int,
  `license_plat` varchar(255),
  `registration_document_path` varchar(255),
  `control_document_path` varchar(255),
  `vin` varchar(255),
  `torque` varchar(255),
  `document` ENUM ('carte_grise', 'carte_jaune', 'licence'),
  `views` int NOT NULL DEFAULT 0,
  `roof` ENUM ('sunroof', 'sun_and_moonroof', 'moonroof', 'panoramic', 'convertible', 'normal_roof'),
  `used` boolean,
  `specs` ENUM ('GCC', 'european', 'japanese', 'american', 'canadian', 'non_GCC'),
  `tyre` ENUM ('12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22'),
  `drive_type` ENUM ('AWD', '2WD', '4WD'),
  `deal` ENUM ('fantastic_deal', 'from_agency'),
  `phone` varchar(255),
  `featured` boolean,
  `expiry_date` datetime,
  `owner_description` text,
  `car_overview` text,
  `information` text,
  `sold_at` timestamp,
  `created_at` timestamp DEFAULT (now()),
  `updated_at` timestamp DEFAULT (now()),
  `deleted_at` timestamp
);

CREATE TABLE `rdvs` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `car_id` int,
  `admin_id` int,
  `address` varchar(255),
  `garage_id` int,
  `rdv_date` datetime,
  `rdv_time` varchar(255),
  `rdv_type` ENUM ('inspection', 'sale', 'visit', 'unavaibility'),
  `expected_payment` int DEFAULT 0,
  `payment_is_collected` boolean,
  `note` text,
  `created_at` timestamp DEFAULT (now()),
  `updated_at` timestamp DEFAULT (now()),
  `deleted_at` timestamp
);

CREATE TABLE `opening_times` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `morning_opening_time` varchar(255),
  `morning_close_time` varchar(255),
  `afternoon_opening_time` varchar(255),
  `afternoon_close_time` varchar(255)
);

CREATE TABLE `questions` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `question_fr` varchar(255),
  `question_en` varchar(255),
  `question_ar` varchar(255),
  `type` ENUM ('exterior', 'interior', 'engine', 'driving', 'electronic_diagnostic', 'tyre_and_brake', 'scratches', 'document', 'underbody'),
  `created_at` timestamp DEFAULT (now()),
  `updated_at` timestamp DEFAULT (now()),
  `deleted_at` timestamp
);

CREATE TABLE `response_question` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `inspection_id` int,
  `question_id` int,
  `response` ENUM ('yes', 'no', 'n/c', 'n/a'),
  `car_picture_id` int,
  `note` text
);

CREATE TABLE `buyer` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `car_id` int,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `phone` varchar(255),
  `status` ENUM ('new', 'in_progress', 'offer_rejected', 'not_concluded', 'not_interested', 'reserved', 'pipeline', 'concluded', 'sold_by_V'),
  `created_at` timestamp DEFAULT (now()),
  `updated_at` timestamp DEFAULT (now()),
  `deleted_at` timestamp
);

CREATE TABLE `inspections` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `car_id` int,
  `rdv_id` int,
  `admin_id` int,
  `garage_id` int,
  `type` ENUM ('first_level', 'second_level', 'both'),
  `created_at` timestamp DEFAULT (now()),
  `updated_at` timestamp DEFAULT (now()),
  `deleted_at` timestamp
);

CREATE TABLE `garages` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `wilaya_id` int,
  `address` varchar(255),
  `sunday_time` int,
  `monday_time` int,
  `tuesday_time` int,
  `wednesday_time` int,
  `thursday_time` int,
  `friday_time` int,
  `saturday_time` int
);

CREATE TABLE `marques` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `logo` varchar(255)
);

CREATE TABLE `model_car` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `marque_id` int,
  `name` varchar(255)
);

CREATE TABLE `user_like_car` (
  `car_id` int,
  `user_id` int
);

CREATE TABLE `colors` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `hex` varchar(255)
);

CREATE TABLE `mileage_price_log` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `car_id` int,
  `mileage` int,
  `price` float,
  `created_at` timestamp DEFAULT (now()),
  `updated_at` timestamp DEFAULT (now())
);

CREATE TABLE `car_pictures` (
  `id` int UNIQUE PRIMARY KEY,
  `car_id` int,
  `path` varchar(255),
  `created_at` timestamp DEFAULT (now()),
  `updated_at` timestamp DEFAULT (now()),
  `deleted_at` timestamp
);

CREATE TABLE `features` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `name_fr` text,
  `name_en` text,
  `name_ar` text,
  `icon` varchar(255)
);

CREATE TABLE `car_feature` (
  `car_id` int,
  `feature_id` int
);

CREATE TABLE `users` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `phone` varchar(255),
  `birthday` varchar(255),
  `city` varchar(255),
  `address` varchar(255),
  `created_at` timestamp DEFAULT (now()),
  `updated_at` timestamp DEFAULT (now()),
  `deleted_at` timestamp
);

CREATE TABLE `backoffice_users` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `role_id` int,
  `garage_id` int,
  `first_name` varchar(255),
  `last_name` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `phone` varchar(255),
  `picture` varchar(255),
  `birthday` varchar(255),
  `city` varchar(255),
  `address` varchar(255),
  `created_at` timestamp DEFAULT (now()),
  `updated_at` timestamp DEFAULT (now()),
  `deleted_at` timestamp
);

CREATE TABLE `roles` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `created_at` timestamp DEFAULT (now()),
  `updated_at` timestamp DEFAULT (now())
);

CREATE TABLE `wilayas` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `region_id` int,
  `name_fr` varchar(255),
  `name_ar` varchar(255),
  `postal_code` varchar(10)
);

CREATE TABLE `regions` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255)
);

CREATE TABLE `historys` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `admin_id` int NOT NULL,
  `car_id` int NOT NULL,
  `ip` varchar(255),
  `latitude` varchar(255),
  `longitude` varchar(255),
  `country` varchar(255),
  `city` varchar(255),
  `node` varchar(255) NOT NULL,
  `created_at` timestamp DEFAULT (now())
);

CREATE TABLE `authorizations` (
  `id` int UNIQUE PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `level` int NOT NULL DEFAULT 0
);

CREATE TABLE `role_authorization` (
  `role_id` int,
  `authorization_id` int
);

ALTER TABLE `cars` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `cars` ADD FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`);

ALTER TABLE `backoffice_users` ADD FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

ALTER TABLE `role_authorization` ADD FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

ALTER TABLE `role_authorization` ADD FOREIGN KEY (`authorization_id`) REFERENCES `authorizations` (`id`);

ALTER TABLE `wilayas` ADD FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`);

ALTER TABLE `car_pictures` ADD FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);

ALTER TABLE `user_like_car` ADD FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);

ALTER TABLE `user_like_car` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `historys` ADD FOREIGN KEY (`admin_id`) REFERENCES `backoffice_users` (`id`);

ALTER TABLE `historys` ADD FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);

ALTER TABLE `mileage_price_log` ADD FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);

ALTER TABLE `model_car` ADD FOREIGN KEY (`marque_id`) REFERENCES `marques` (`id`);

ALTER TABLE `cars` ADD FOREIGN KEY (`model_id`) REFERENCES `model_car` (`id`);

ALTER TABLE `cars` ADD FOREIGN KEY (`wilaya_id`) REFERENCES `wilayas` (`id`);

ALTER TABLE `response_question` ADD FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

ALTER TABLE `inspections` ADD FOREIGN KEY (`id`) REFERENCES `backoffice_users` (`id`);

ALTER TABLE `inspections` ADD FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);

ALTER TABLE `response_question` ADD FOREIGN KEY (`inspection_id`) REFERENCES `inspections` (`id`);

ALTER TABLE `cars` ADD FOREIGN KEY (`last_inspection_id`) REFERENCES `inspections` (`id`);

ALTER TABLE `cars` ADD FOREIGN KEY (`last_mileage_price_log_id`) REFERENCES `mileage_price_log` (`id`);

ALTER TABLE `inspections` ADD FOREIGN KEY (`garage_id`) REFERENCES `garages` (`id`);

ALTER TABLE `car_feature` ADD FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`);

ALTER TABLE `car_feature` ADD FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);

ALTER TABLE `inspections` ADD FOREIGN KEY (`rdv_id`) REFERENCES `rdvs` (`id`);

ALTER TABLE `rdvs` ADD FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);

ALTER TABLE `rdvs` ADD FOREIGN KEY (`admin_id`) REFERENCES `backoffice_users` (`id`);

ALTER TABLE `rdvs` ADD FOREIGN KEY (`garage_id`) REFERENCES `garages` (`id`);

ALTER TABLE `garages` ADD FOREIGN KEY (`sunday_time`) REFERENCES `opening_times` (`id`);

ALTER TABLE `garages` ADD FOREIGN KEY (`monday_time`) REFERENCES `opening_times` (`id`);

ALTER TABLE `garages` ADD FOREIGN KEY (`tuesday_time`) REFERENCES `opening_times` (`id`);

ALTER TABLE `garages` ADD FOREIGN KEY (`thursday_time`) REFERENCES `opening_times` (`id`);

ALTER TABLE `garages` ADD FOREIGN KEY (`wednesday_time`) REFERENCES `opening_times` (`id`);

ALTER TABLE `garages` ADD FOREIGN KEY (`friday_time`) REFERENCES `opening_times` (`id`);

ALTER TABLE `garages` ADD FOREIGN KEY (`saturday_time`) REFERENCES `opening_times` (`id`);

ALTER TABLE `backoffice_users` ADD FOREIGN KEY (`garage_id`) REFERENCES `garages` (`id`);

ALTER TABLE `inspections` ADD FOREIGN KEY (`admin_id`) REFERENCES `backoffice_users` (`id`);

ALTER TABLE `response_question` ADD FOREIGN KEY (`car_picture_id`) REFERENCES `car_pictures` (`id`);
