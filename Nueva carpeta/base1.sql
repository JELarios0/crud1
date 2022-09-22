-- Active: 1652579182933@@127.0.0.1@3306
CREATE DATABASE IF NOT EXISTS `Sena_bd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `Sena_bd`;



CREATE TABLE `aprendices` (
  `id_apre` int(10) NOT NULL,
  `apre_idtipo` char(3) NOT NULL,
  `apre_numid` char(20) NOT NULL,
  `apre_nombre` char(60) NOT NULL,
  `apre_apellidos` char(60) NOT NULL,
  `apre_direccion` char(80) NOT NULL,
  `apre_telefono` char(20) NOT NULL,
  `apre_ficha` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `fichas` (
  `id_ficha` int(10) NOT NULL,
  `fichapro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `programa` (
  `id_prog` int(10) NOT NULL,
  `nombrepro` char(20) NOT NULL,
  `progra_tipo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `tiposprograma` (
  `id_tipos` int(10) NOT NULL,
  `tiposp_tipos` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `usuario` (
  `id_usu` int(10) NOT NULL,
  `nombreuser` char(50) DEFAULT NULL,
  `contra` char(80) DEFAULT NULL,
  `usutipo` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;







