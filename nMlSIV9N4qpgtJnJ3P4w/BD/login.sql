-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` int NOT NULL,
  `rol_rol` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `rol_rol`) VALUES
(1, 'Administrador'),
(2, 'Colaborador');

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int NOT NULL,
  `usuario_nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_curp` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_clave` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_rolnombre` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_curp`, `usuario_usuario`, `usuario_clave`, `usuario_rolnombre`) VALUES
(1, 'Manuel Flores', 'FOCM010615HOCLRNA0', 'manu_soporte', '15d76d1dddc61c7e897724615065b890', 1);

--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--




-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
