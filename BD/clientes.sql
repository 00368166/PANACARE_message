
--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `clientes_id` int NOT NULL,
  `clientes_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `clientes_telefono` bigint NOT NULL,
  `clientes_direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `clientes_atencion` text COLLATE utf8_spanish_ci NOT NULL,
  `clientes_descripcion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`clientes_id`);


--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `clientes_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
