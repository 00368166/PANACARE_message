
--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int NOT NULL,
  `usuario_nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario_curp` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_clave` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_rolnombre` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);


--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
