-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2024 a las 03:49:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id_cuenta` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `tipo_cuenta` varchar(50) DEFAULT NULL,
  `saldo` decimal(15,2) DEFAULT 0.00,
  `fecha_apertura` timestamp NOT NULL DEFAULT current_timestamp(),
  `nombreCuenta` varchar(100) NOT NULL,
  `moneda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id_cuenta`, `id_usuario`, `tipo_cuenta`, `saldo`, `fecha_apertura`, `nombreCuenta`, `moneda`) VALUES
(4, 6, 'Ahorros', 500.00, '2024-08-20 06:12:30', 'Cuenta de Ahorros', 'MXN'),
(18, 7, 'Ahors', 0.00, '2024-08-21 16:18:00', 'Cuenta de Ahorros2', 'EUR'),
(19, 7, 'Emergencia', 0.00, '2024-08-21 16:29:06', 'Cuenta de Emergencias', 'MXN'),
(21, 6, 'Emergencia', 0.00, '2024-08-22 21:32:35', 'Cuenta de Emergencias', 'EUR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transacciones`
--

CREATE TABLE `transacciones` (
  `id_transaccion` int(11) NOT NULL,
  `id_cuenta` int(11) NOT NULL,
  `tipo_transaccion` enum('Deposito','Retiro') NOT NULL,
  `monto` decimal(15,2) NOT NULL,
  `fecha_transaccion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `transacciones`
--

INSERT INTO `transacciones` (`id_transaccion`, `id_cuenta`, `tipo_transaccion`, `monto`, `fecha_transaccion`) VALUES
(3, 4, 'Deposito', 500.00, '2024-08-22 01:45:07'),
(5, 4, 'Retiro', 499.00, '2024-08-22 01:45:59'),
(6, 4, 'Retiro', 1.00, '2024-08-22 01:46:11'),
(7, 4, 'Deposito', 500.00, '2024-08-22 02:23:11');

--
-- Disparadores `transacciones`
--
DELIMITER $$
CREATE TRIGGER `actualizarSaldo` AFTER INSERT ON `transacciones` FOR EACH ROW BEGIN
    IF NEW.tipo_transaccion = 'Deposito' THEN
        UPDATE cuentas SET saldo=saldo+NEW.monto WHERE id_cuenta=NEW.id_cuenta;
     ELSEIF NEW.tipo_transaccion='Retiro' THEN
        IF (SELECT saldo FROM cuentas WHERE id_cuenta=NEW.id_cuenta)<NEW.monto THEN
             SIGNAL SQLSTATE '45000'
             SET MESSAGE_TEXT = 'ERROR AL REALIZAR EL RETIRO,EL SALDO ES INSUFICIENTE';
        ELSE 
             UPDATE cuentas SET saldo=saldo-NEW.monto WHERE id_cuenta=NEW.id_cuenta;
        END IF;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transferencias`
--

CREATE TABLE `transferencias` (
  `id_transferencia` int(11) NOT NULL,
  `id_cuentaOrigen` int(11) NOT NULL,
  `id_cuentaDestino` int(11) NOT NULL,
  `monto` decimal(15,2) NOT NULL,
  `fecha_transferencia` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `apaterno` varchar(100) NOT NULL,
  `amaterno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `contrasena`, `ciudad`, `localidad`, `telefono`, `fecha_creacion`, `apaterno`, `amaterno`) VALUES
(6, 'MOISES', '20230033@uthh.edu.mx', '12345678', 'N/A', 'Mecatlan', '7711813520', '2024-08-20 06:12:02', 'RAMÍREZ', 'MARTÍNEZ'),
(7, 'Juan', 'juanmartinez@gmail.com', '12345678', 'Huejutla', 'Localidad', '7713234566', '2024-08-21 14:17:00', 'Perez', 'Martinez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id_cuenta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  ADD PRIMARY KEY (`id_transaccion`),
  ADD KEY `id_cuenta` (`id_cuenta`);

--
-- Indices de la tabla `transferencias`
--
ALTER TABLE `transferencias`
  ADD PRIMARY KEY (`id_transferencia`),
  ADD KEY `id_cuentaOrigen` (`id_cuentaOrigen`),
  ADD KEY `id_cuentaDestino` (`id_cuentaDestino`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  MODIFY `id_transaccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `transferencias`
--
ALTER TABLE `transferencias`
  MODIFY `id_transferencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD CONSTRAINT `cuentas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `transacciones`
--
ALTER TABLE `transacciones`
  ADD CONSTRAINT `transacciones_ibfk_1` FOREIGN KEY (`id_cuenta`) REFERENCES `cuentas` (`id_cuenta`);

--
-- Filtros para la tabla `transferencias`
--
ALTER TABLE `transferencias`
  ADD CONSTRAINT `transferencias_ibfk_1` FOREIGN KEY (`id_cuentaOrigen`) REFERENCES `cuentas` (`id_cuenta`),
  ADD CONSTRAINT `transferencias_ibfk_2` FOREIGN KEY (`id_cuentaDestino`) REFERENCES `cuentas` (`id_cuenta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
