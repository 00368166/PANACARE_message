CREATE TABLE `chatbot` (
  `id` int NOT NULL,
  `queries` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `replies` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `chatbot`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
