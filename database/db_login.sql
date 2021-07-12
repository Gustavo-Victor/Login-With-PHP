-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jul-2021 às 16:33
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_login`
--
CREATE DATABASE IF NOT EXISTS `db_login` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_login`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_user`
--
-- Criação: 12-Jul-2021 às 12:31
-- Última actualização: 12-Jul-2021 às 12:46
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` smallint(6) NOT NULL,
  `user_name` char(60) NOT NULL,
  `user_password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELACIONAMENTOS PARA TABELAS `tbl_user`:
--

--
-- Extraindo dados da tabela `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'usuario1', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'usuario2', 'd93591bdf7860e1e4ee2fca799911215'),
(3, 'usuario3', 'b59c67bf196a4758191e42f76670ceba'),
(4, 'usuario4', '934b535800b1cba8f96a5d72f72f1611'),
(5, 'usuario5', '2be9bd7a3434f7038ca27d1918de58bd');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/*
  user: usuario1 - password: 1234
  user: usuario2 - password: 4321
  user: usuario3 - password: 1111
  user: usuario4 - password: 2222
  user: usuario5 - password: 3333
*/;
