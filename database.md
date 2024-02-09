CREATE TABLE `gift_cards` (
  `card_id` int NOT NULL,
  `recipient_name` varchar(50) NOT NULL,
  `recipient_email` varchar(50) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `message` text NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;