
--
-- Estructura de tabla para la tabla `message`
--

CREATE TABLE `message` (
  `message_id` int NOT NULL,
  `message_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `message_telefono` bigint NOT NULL,
  `message_text` text COLLATE utf8_spanish_ci NOT NULL,
  `message_date` date COLLATE utf8_spanish_ci NOT NULL,
  `message_time` time COLLATE utf8_spanish_ci NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);


--
-- AUTO_INCREMENT de la tabla `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
