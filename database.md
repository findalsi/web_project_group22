
# table 1 : Madusha Dissanayaka

'''sql

CREATE TABLE `reservations` (
  `reservation_no` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_no` int NOT NULL,
  `email` varchar(320) NOT NULL,
  `no_of_people` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `seating_type` varchar(50) NOT NULL,
  `occasion` varchar(50) NOT NULL,
  `special_request` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

''''

# table 2 : Dalsi Samarathunga

'''sql

CREATE TABLE `gift_cards` (
  `card_id` int NOT NULL,
  `recipient_name` varchar(50) NOT NULL,
  `recipient_email` varchar(50) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `message` text NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


# table 3 : Kasunki Samarasekara

'''sql

CREATE TABLE `Restaurant_week_reservation` (
  `table_no` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `people` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


# table 4 : Haneeta Senadheera

'''sql

CREATE TABLE `Sign Up` (
  `cus_number` int NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
