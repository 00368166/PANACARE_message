
--
-- Estructura de tabla para la tabla `enfermeras`
--

CREATE TABLE `enfermeras` (
  `enfermeras_id` int NOT NULL,
  `enfermeras_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `enfermeras_telefono` bigint NOT NULL,
  `enfermeras_disponibilidad` text COLLATE utf8_spanish_ci NOT NULL,
  `enfermeras_nacimiento` date COLLATE utf8_spanish_ci NOT NULL,
  `enfermeras_general` text COLLATE utf8_spanish_ci NOT NULL,
  `enfermeras_foto` MEDIUMBLOB,
  `enfermeras_tipo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `enfermeras`
--
ALTER TABLE `enfermeras`
  ADD PRIMARY KEY (`enfermeras_id`);


--
-- AUTO_INCREMENT de la tabla `enfermeras`
--
ALTER TABLE `enfermeras`
  MODIFY `enfermeras_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
