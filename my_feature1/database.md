# table 1 : madusha dissanayaka

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


