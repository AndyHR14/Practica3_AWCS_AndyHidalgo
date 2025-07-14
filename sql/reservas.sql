--
-- Base de datos: `practica3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensaje` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `reservas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

