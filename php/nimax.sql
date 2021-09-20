-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2021 às 23:29
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nimax`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `IdAgenda` int(11) NOT NULL,
  `fk_cadastro` int(11) NOT NULL,
  `dataAgenda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`IdAgenda`, `fk_cadastro`, `dataAgenda`) VALUES
(17, 8, '2021-09-30T22:16'),
(18, 9, '2021-09-30T22:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `backup`
--

CREATE TABLE `backup` (
  `IdBackup` int(11) NOT NULL,
  `dataBackup` datetime DEFAULT current_timestamp(),
  `nomeBackup` varchar(100) NOT NULL,
  `arquivoBackup` varchar(100) NOT NULL,
  `fk_IdCadastro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `backup`
--

INSERT INTO `backup` (`IdBackup`, `dataBackup`, `nomeBackup`, `arquivoBackup`, `fk_IdCadastro`) VALUES
(3, '2021-09-08 17:09:28', 'Projeto PHP', 'nuvem/city.sql', NULL),
(9, '2021-09-08 20:22:15', 'Projeto Perna Longa', 'nuvem/pernalonga.jpg', 9),
(10, '2021-09-11 10:24:18', 'Projeto TCC', 'nuvem/tcc.sql', 14),
(14, '2021-09-19 09:02:49', 'Projeto TCC', 'nuvem/relatório_usuário (1).pdf', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `IdCadastro` int(11) NOT NULL,
  `nomeCad` varchar(50) NOT NULL,
  `dataN` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `tel1` varchar(50) NOT NULL,
  `tel2` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `fk_idProfile` int(11) DEFAULT NULL,
  `status_user` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`IdCadastro`, `nomeCad`, `dataN`, `genero`, `cpf`, `cep`, `endereco`, `cidade`, `estado`, `tel1`, `tel2`, `email`, `senha`, `foto`, `fk_idProfile`, `status_user`) VALUES
(7, 'Nicolas Hiroki Yonekawa', '2002-12-26', 'Masculino', '151.151.151-15', '15298-272', 'Rua Maria da Piedade ', 'Hortolândia', 'São Paulo', '(19) 98927-3500', '', 'nicolasyonekawa@gmail.com', 'MTIz', 'imagem/Nicolas 17.jpg', 2, 0),
(8, 'Marcus Vinícius Andrade', '2003-12-25', 'Masculino', '151.151.151-15', '15298-272', 'Rua Maria da Piedade Camargo', 'Hortolândia', 'São Paulo', '', '', 'marcusvinicius@gmail.com', 'MTIz', 'imagem/Marcus.jpg', 2, 0),
(9, 'Emmanuel Zague de Sá', '2004-07-17', 'Masculino', '151.151.151-15', '15298-272', 'Rua Maria da Piedade Camargo', 'Sumaré', 'São Paulo', '(19) 98927-3500', '', 'emmanuelzague@gmail.com', 'MTIz', 'imagem/Manolo.jpg', 2, 1),
(14, 'Administrador ', '2002-12-26', 'Masculino', '999.999.999-99', '99999-99', 'xxxxxxxxxxxxx', 'xxxxxxxx', 'xxxxx', '(99) 99999-9999', '', 'admin@gmail.com', 'MTIz', 'imagem/anonimo.jpg', 1, 0),
(20, 'Wesley Domingues', '2002-12-26', 'Masculino', '151.151.151-15', '15298-272', 'Rua Maria da Piedade Camargo', 'Hortolândia', 'São Paulo', '(19) 98927-3500', '', 'wesleydomingues@gmail.com', 'MTIz', 'imagem/perfil.jpg', 2, 0),
(21, 'Administrador Alciomar', '2002-12-26', 'Masculino', '999.999.999-99', '15298-272', 'xxxxxxxxxxxxx', 'xxxxxxxx', 'xxxxx', '(19) 98927-3500', '', 'adminAlciomar@gmail.com', 'MTIz', 'imagem/perfil.jpg', 1, 0),
(24, 'Administrador 2', '2021-09-16', 'Masculino', '151.151.151-15', '15298-272', 'Rua Maria da Piedade Camargo', 'Hortolândia', 'São Paulo', '(19) 98927-3500', '', 'admin2@gmail.com', 'MTIz', 'imagem/perfil.jpg', 1, 0),
(25, 'Carlos Eduardo', '2004-12-26', 'Masculino', '151.151.151-15', '15298-272', 'Rua Maria da Piedade Camargo', 'Hortolândia', 'São Paulo', '(19) 98927-3500', '', 'carloseduardo@gmail.com', 'MTIz', 'imagem/perfil.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `IdCompra` int(11) NOT NULL,
  `dataCompra` datetime DEFAULT current_timestamp(),
  `fk_IdCadastro` int(11) NOT NULL,
  `fk_IdPagamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`IdCompra`, `dataCompra`, `fk_IdCadastro`, `fk_IdPagamento`) VALUES
(1, '2021-09-04 23:00:09', 8, 2),
(3, '2021-09-05 17:24:02', 9, 5),
(10, '2021-09-19 11:42:00', 7, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa_cliente`
--

CREATE TABLE `empresa_cliente` (
  `IdEmpresa` int(11) NOT NULL,
  `cnpj` varchar(50) NOT NULL,
  `nomeEmpresa` varchar(50) NOT NULL,
  `tservico` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade_empresa` varchar(50) NOT NULL,
  `estado_empresa` varchar(50) NOT NULL,
  `parceria` varchar(50) NOT NULL,
  `fk_IdCadastro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa_cliente`
--

INSERT INTO `empresa_cliente` (`IdEmpresa`, `cnpj`, `nomeEmpresa`, `tservico`, `endereco`, `bairro`, `cidade_empresa`, `estado_empresa`, `parceria`, `fk_IdCadastro`) VALUES
(24, '98.98.98-98', 'Empresa 2', 'Ecônomica', 'xxxxxxxxxxxxx', 'Santo André', 'Hortolândia', 'São Paulo', 'Não', 14),
(25, '98.98.98-98', 'Empresa 1', 'Alimentícia', 'Rua Maria da Piedade ', 'Remanso Campineiro', 'Hortolândia', 'São Paulo', 'Sim', 7),
(26, '98.98.98-98', 'Empresa 2', 'Ecônomica', 'Rua Maria da Piedade Camargo', 'Santo André', 'Hortolândia', 'São Paulo', 'Não', 7),
(28, '98.98.98-98', 'Empresa 3', 'Ecônomica', 'Rua Alda Lourenço Francisco', 'Remanso Campineiro', 'Hortolândia', 'São Paulo', 'Não', 8),
(29, '98.98.98-98', 'Empresa 1', 'Turismo', 'R Alda Lourenço', 'Remanso Campineiro', 'Campinas', 'São Paulo', 'Não', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `logging`
--

CREATE TABLE `logging` (
  `IdLogging` int(11) NOT NULL,
  `dateLogging` datetime DEFAULT current_timestamp(),
  `level` varchar(100) DEFAULT NULL,
  `msg` varchar(100) NOT NULL,
  `fk_cadastro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `logging`
--

INSERT INTO `logging` (`IdLogging`, `dateLogging`, `level`, `msg`, `fk_cadastro`) VALUES
(7, '2021-09-06 16:37:48', 'INFO', '[2021-09-06 16:37:48] [INFO]: Entrou em login\r\n', 7),
(8, '2021-09-06 16:39:26', 'INFO', '[2021-09-06 16:39:26] [INFO]: Novo usuário\r\n', 7),
(10, '2021-09-06 16:45:56', 'INFO', '[2021-09-06 16:45:56] [INFO]: Entrou em login\r\n', 7),
(12, '2021-09-06 16:46:12', 'INFO', '[2021-09-06 16:46:12] [INFO]: Entrou em login\r\n', 8),
(13, '2021-09-06 16:46:21', 'INFO', '[2021-09-06 16:46:21] [INFO]: Entrou em login\r\n', 9),
(19, '2021-09-06 16:58:13', 'INFO', '[2021-09-06 16:58:13] [INFO]: Entrou em login\r\n', 7),
(22, '2021-09-06 17:05:56', 'INFO', '[2021-09-06 17:05:56] [INFO]: Entrou em login\r\n', 7),
(23, '2021-09-06 17:06:55', 'INFO', '[2021-09-06 17:06:55] [INFO]: Novo usuário\r\n', 7),
(26, '2021-09-06 17:10:53', 'INFO', '[2021-09-06 17:10:53] [INFO]: Entrou em login\r\n', 20),
(27, '2021-09-06 17:21:27', 'INFO', '[2021-09-06 17:21:27] [INFO]: Entrou em login\r\n', 7),
(28, '2021-09-06 17:21:37', 'INFO', '[2021-09-06 17:21:37] [INFO]: Entrou em login\r\n', 14),
(29, '2021-09-06 17:42:47', 'INFO', '[2021-09-06 17:42:47] [INFO]: Entrou em login\r\n', 7),
(30, '2021-09-06 17:42:58', 'INFO', '[2021-09-06 17:42:58] [INFO]: Entrou em login\r\n', 7),
(31, '2021-09-06 17:43:08', 'INFO', '[2021-09-06 17:43:08] [INFO]: Entrou em login\r\n', 14),
(32, '2021-09-06 17:45:40', 'INFO', '[2021-09-06 17:45:40] [INFO]: Entrou em login\r\n', 7),
(33, '2021-09-06 17:46:29', 'INFO', '[2021-09-06 17:46:29] [INFO]: Entrou em login\r\n', 14),
(34, '2021-09-06 17:48:15', 'INFO', '[2021-09-06 17:48:15] [INFO]: Novo usuário\r\n', 14),
(35, '2021-09-06 17:48:21', 'INFO', '[2021-09-06 17:48:21] [INFO]: Entrou em login\r\n', 21),
(36, '2021-09-06 18:56:10', 'INFO', '[2021-09-06 18:56:10] [INFO]: Entrou em login\r\n', 7),
(37, '2021-09-06 19:55:55', 'INFO', '[2021-09-06 19:55:55] [INFO]: Entrou em login\r\n', 14),
(38, '2021-09-06 19:59:49', 'INFO', '[2021-09-06 19:59:49] [INFO]: Novo usuário\r\n', 14),
(41, '2021-09-06 20:12:57', 'INFO', '[2021-09-06 20:12:57] [INFO]: Entrou em login\r\n', 7),
(42, '2021-09-06 20:18:55', 'INFO', '[2021-09-06 20:18:55] [INFO]: Entrou em login\r\n', 7),
(43, '2021-09-06 22:57:34', 'INFO', '[2021-09-06 22:57:34] [INFO]: Entrou em login\r\n', 14),
(44, '2021-09-06 23:01:33', 'INFO', '[2021-09-06 23:01:33] [INFO]: Entrou em login\r\n', 7),
(45, '2021-09-07 09:16:33', 'INFO', '[2021-09-07 09:16:33] [INFO]: Entrou em login\r\n', 14),
(46, '2021-09-07 10:17:06', 'INFO', '[2021-09-07 10:17:06] [INFO]: Entrou em login\r\n', 7),
(47, '2021-09-07 10:36:08', 'INFO', '[2021-09-07 10:36:08] [INFO]: Entrou em login\r\n', 20),
(48, '2021-09-07 10:36:19', 'INFO', '[2021-09-07 10:36:19] [INFO]: Entrou em login\r\n', 7),
(49, '2021-09-07 10:46:54', 'INFO', '[2021-09-07 10:46:54] [INFO]: Entrou em login\r\n', 7),
(50, '2021-09-07 12:33:25', 'INFO', '[2021-09-07 12:33:25] [INFO]: Entrou em login\r\n', 14),
(51, '2021-09-07 15:56:47', 'INFO', '[2021-09-07 15:56:47] [INFO]: Entrou em login\r\n', 7),
(52, '2021-09-07 15:58:31', 'INFO', '[2021-09-07 15:58:31] [INFO]: Entrou em login\r\n', 14),
(53, '2021-09-07 16:53:53', 'INFO', '[2021-09-07 16:53:53] [INFO]: Entrou em login\r\n', 7),
(54, '2021-09-07 18:35:03', 'INFO', '[2021-09-07 18:35:03] [INFO]: Entrou em login\r\n', 7),
(55, '2021-09-07 18:45:25', 'INFO', '[2021-09-07 18:45:25] [INFO]: Entrou em login\r\n', 7),
(56, '2021-09-07 20:06:41', 'INFO', '[2021-09-07 20:06:41] [INFO]: Entrou em login\r\n', 14),
(57, '2021-09-07 22:04:09', 'INFO', '[2021-09-07 22:04:09] [INFO]: Entrou em login\r\n', 7),
(58, '2021-09-07 22:04:30', 'INFO', '[2021-09-07 22:04:30] [INFO]: Entrou em login\r\n', 14),
(59, '2021-09-08 08:17:09', 'INFO', '[2021-09-08 08:17:09] [INFO]: Entrou em login\r\n', 7),
(60, '2021-09-08 08:17:35', 'INFO', '[2021-09-08 08:17:35] [INFO]: Entrou em login\r\n', 14),
(61, '2021-09-08 08:19:01', 'INFO', '[2021-09-08 08:19:01] [INFO]: Entrou em login\r\n', 7),
(62, '2021-09-08 09:31:40', 'INFO', '[2021-09-08 09:31:40] [INFO]: Entrou em login\r\n', 14),
(63, '2021-09-08 09:32:14', 'INFO', '[2021-09-08 09:32:14] [INFO]: Entrou em login\r\n', 7),
(64, '2021-09-08 09:32:31', 'INFO', '[2021-09-08 09:32:31] [INFO]: Entrou em login\r\n', 14),
(65, '2021-09-08 10:53:24', 'INFO', '[2021-09-08 10:53:24] [INFO]: Entrou em login\r\n', 7),
(66, '2021-09-08 10:54:23', 'INFO', '[2021-09-08 10:54:23] [INFO]: Entrou em login\r\n', 7),
(67, '2021-09-08 10:54:34', 'INFO', '[2021-09-08 10:54:34] [INFO]: Entrou em login\r\n', 14),
(68, '2021-09-08 13:06:36', 'INFO', '[2021-09-08 13:06:36] [INFO]: Novo empresa\r\n', 14),
(69, '2021-09-08 13:06:57', 'INFO', '[2021-09-08 13:06:57] [INFO]: Novo empresa\r\n', 14),
(70, '2021-09-08 13:18:18', 'INFO', '[2021-09-08 13:18:18] [INFO]: Novo empresa\r\n', 14),
(71, '2021-09-08 13:32:44', 'INFO', '[2021-09-08 13:32:44] [INFO]: Novo empresa\r\n', 14),
(72, '2021-09-08 13:32:58', 'INFO', '[2021-09-08 13:32:58] [INFO]: Entrou em login\r\n', 7),
(73, '2021-09-08 13:40:51', 'INFO', '[2021-09-08 13:40:51] [INFO]: Entrou em login\r\n', 14),
(74, '2021-09-08 16:12:09', 'INFO', '[2021-09-08 16:12:09] [INFO]: Entrou em login\r\n', 14),
(75, '2021-09-08 16:12:32', 'INFO', '[2021-09-08 16:12:32] [INFO]: Entrou em login\r\n', 8),
(76, '2021-09-08 16:16:21', 'INFO', '[2021-09-08 16:16:21] [INFO]: Entrou em login\r\n', 7),
(77, '2021-09-08 16:16:42', 'INFO', '[2021-09-08 16:16:42] [INFO]: Entrou em login\r\n', 14),
(78, '2021-09-08 16:17:05', 'INFO', '[2021-09-08 16:17:05] [INFO]: Entrou em login\r\n', 7),
(79, '2021-09-08 16:51:56', 'INFO', '[2021-09-08 16:51:56] [INFO]: Novo empresa\r\n', 7),
(80, '2021-09-08 17:16:32', 'INFO', '[2021-09-08 17:16:32] [INFO]: Entrou em login\r\n', 7),
(81, '2021-09-08 17:16:42', 'INFO', '[2021-09-08 17:16:42] [INFO]: Entrou em login\r\n', 14),
(82, '2021-09-08 17:40:07', 'INFO', '[2021-09-08 17:40:07] [INFO]: Novo empresa\r\n', 14),
(83, '2021-09-08 18:05:49', 'INFO', '[2021-09-08 18:05:49] [INFO]: Entrou em login\r\n', 7),
(84, '2021-09-08 18:13:10', 'INFO', '[2021-09-08 18:13:10] [INFO]: Entrou em login\r\n', 7),
(85, '2021-09-08 18:14:44', 'INFO', '[2021-09-08 18:14:44] [INFO]: Entrou em login\r\n', 7),
(86, '2021-09-08 18:15:36', 'WARNING', '[2021-09-08 18:15:36] [WARNING]: Um usuário invadiu o sistema\r\n', 7),
(87, '2021-09-08 18:15:41', 'WARNING', '[2021-09-08 18:15:41] [WARNING]: Um usuário invadiu o sistema\r\n', 7),
(88, '2021-09-08 18:19:04', 'WARNING', '[2021-09-08 18:19:04] [WARNING]: Um usuário invadiu o sistema\r\n', 7),
(89, '2021-09-08 18:19:08', 'WARNING', '[2021-09-08 18:19:08] [WARNING]: Um usuário invadiu o sistema\r\n', 7),
(90, '2021-09-08 18:19:12', 'WARNING', '[2021-09-08 18:19:12] [WARNING]: Um usuário invadiu o sistema\r\n', 7),
(91, '2021-09-08 18:21:23', 'WARNING', '[2021-09-08 18:21:23] [WARNING]: Um usuário invadiu o sistema\r\n', 7),
(92, '2021-09-08 18:22:24', 'WARNING', '[2021-09-08 18:22:24] [WARNING]: Um usuário invadiu o sistema\r\n', 7),
(93, '2021-09-08 18:22:34', 'WARNING', '[2021-09-08 18:22:34] [WARNING]: Um usuário invadiu o sistema\r\n', 7),
(94, '2021-09-08 18:22:41', 'WARNING', '[2021-09-08 18:22:41] [WARNING]: Um usuário invadiu o sistema\r\n', 7),
(95, '2021-09-08 18:22:49', 'WARNING', '[2021-09-08 18:22:49] [WARNING]: Um usuário invadiu o sistema\r\n', 7),
(96, '2021-09-08 18:22:52', 'WARNING', '[2021-09-08 18:22:52] [WARNING]: Um usuário invadiu o sistema\r\n', 7),
(97, '2021-09-08 19:57:26', 'INFO', '[2021-09-08 19:57:26] [INFO]: Entrou em login\r\n', 7),
(98, '2021-09-08 19:57:51', 'WARNING', '[2021-09-08 19:57:51] [WARNING]: Um usuário invadiu o sistema\r\n', 7),
(99, '2021-09-08 20:02:56', 'INFO', '[2021-09-08 20:02:56] [INFO]: Entrou em login\r\n', 7),
(100, '2021-09-08 20:21:46', 'INFO', '[2021-09-08 20:21:46] [INFO]: Entrou em login\r\n', 9),
(101, '2021-09-09 06:56:36', 'INFO', '[2021-09-09 06:56:36] [INFO]: Novo usuário\r\n', 14),
(103, '2021-09-09 08:51:12', 'INFO', '[2021-09-09 08:51:12] [INFO]: Entrou em login\r\n', 7),
(104, '2021-09-09 09:51:13', 'INFO', '[2021-09-09 09:51:13] [INFO]: Entrou em login\r\n', 7),
(105, '2021-09-09 11:47:46', 'INFO', '[2021-09-09 11:47:46] [INFO]: Entrou em login\r\n', 7),
(106, '2021-09-09 11:52:42', 'INFO', '[2021-09-09 11:52:42] [INFO]: Novo usuário\r\n', 14),
(107, '2021-09-09 11:54:42', 'INFO', '[2021-09-09 11:54:42] [INFO]: Novo empresa\r\n', 21),
(108, '2021-09-10 13:06:55', 'INFO', '[2021-09-10 13:06:55] [INFO]: Novo empresa\r\n', 14),
(109, '2021-09-10 13:36:05', 'INFO', '[2021-09-10 13:36:05] [INFO]: Entrou em login\r\n', 7),
(110, '2021-09-10 14:20:51', 'INFO', '[2021-09-10 14:20:51] [INFO]: Entrou em login\r\n', 7),
(111, '2021-09-10 14:56:15', 'INFO', '[2021-09-10 14:56:15] [INFO]: Entrou em login\r\n', 7),
(112, '2021-09-10 14:59:00', 'INFO', '[2021-09-10 14:59:00] [INFO]: Entrou em login\r\n', 7),
(113, '2021-09-10 15:01:08', 'INFO', '[2021-09-10 15:01:08] [INFO]: Entrou em login\r\n', 7),
(114, '2021-09-10 15:31:39', 'INFO', '[2021-09-10 15:31:39] [INFO]: Entrou em login\r\n', 9),
(115, '2021-09-10 15:48:59', 'INFO', '[2021-09-10 15:48:59] [INFO]: Entrou em login\r\n', 7),
(116, '2021-09-10 21:58:20', 'INFO', '[2021-09-10 21:58:20] [INFO]: Entrou em login\r\n', 7),
(117, '2021-09-10 22:02:16', 'INFO', '[2021-09-10 22:02:16] [INFO]: Entrou em login\r\n', 7),
(118, '2021-09-11 10:45:01', 'INFO', '[2021-09-11 10:45:01] [INFO]: Entrou em login\r\n', 7),
(119, '2021-09-11 18:34:16', 'INFO', '[2021-09-11 18:34:16] [INFO]: Entrou em login\r\n', 7),
(120, '2021-09-11 22:02:53', 'INFO', '[2021-09-11 22:02:53] [INFO]: Entrou em login\r\n', 7),
(121, '2021-09-12 16:56:52', 'INFO', '[2021-09-12 16:56:52] [INFO]: Novo usuário\r\n', 14),
(122, '2021-09-12 16:56:59', 'INFO', '[2021-09-12 16:56:59] [INFO]: Entrou em login\r\n', 25),
(123, '2021-09-12 21:19:24', 'INFO', '[2021-09-12 21:19:24] [INFO]: Entrou em login\r\n', 7),
(124, '2021-09-13 18:39:34', 'INFO', '[2021-09-13 18:39:34] [INFO]: Entrou em login\r\n', 7),
(125, '2021-09-15 06:53:26', 'INFO', '[2021-09-15 06:53:26] [INFO]: Entrou em login\r\n', 7),
(126, '2021-09-15 10:30:43', 'INFO', '[2021-09-15 10:30:43] [INFO]: Novo empresa\r\n', 14),
(127, '2021-09-17 20:16:19', 'INFO', '[2021-09-17 20:16:19] [INFO]: Entrou em login\r\n', 7),
(128, '2021-09-18 11:17:08', 'INFO', '[2021-09-18 11:17:08] [INFO]: Entrou em login\r\n', 7),
(129, '2021-09-18 14:02:41', 'INFO', '[2021-09-18 14:02:41] [INFO]: Novo empresa\r\n', 7),
(130, '2021-09-18 14:04:52', 'INFO', '[2021-09-18 14:04:52] [INFO]: Novo empresa\r\n', 7),
(131, '2021-09-18 14:09:27', 'INFO', '[2021-09-18 14:09:27] [INFO]: Novo empresa\r\n', 14),
(132, '2021-09-18 14:55:45', 'INFO', '[2021-09-18 14:55:45] [INFO]: Entrou em login\r\n', 7),
(133, '2021-09-18 16:30:13', 'INFO', '[2021-09-18 16:30:13] [INFO]: Entrou em login\r\n', 7),
(134, '2021-09-18 20:58:13', 'INFO', '[2021-09-18 20:58:13] [INFO]: Entrou em login\r\n', 7),
(135, '2021-09-18 20:58:59', 'INFO', '[2021-09-18 20:58:59] [INFO]: Novo empresa\r\n', 7),
(136, '2021-09-18 20:59:26', 'INFO', '[2021-09-18 20:59:26] [INFO]: Novo empresa\r\n', 7),
(137, '2021-09-19 09:17:51', 'INFO', '[2021-09-19 09:17:51] [INFO]: Entrou em login\r\n', 7),
(138, '2021-09-19 11:39:52', 'INFO', '[2021-09-19 11:39:52] [INFO]: Entrou em login\r\n', 7),
(139, '2021-09-19 11:47:38', 'INFO', '[2021-09-19 11:47:38] [INFO]: Novo empresa\r\n', 7),
(140, '2021-09-19 11:56:45', 'INFO', '[2021-09-19 11:56:45] [INFO]: Entrou em login\r\n', 7),
(141, '2021-09-19 14:07:49', 'INFO', '[2021-09-19 14:07:49] [INFO]: Entrou em login\r\n', 7),
(142, '2021-09-19 19:46:58', 'INFO', '[2021-09-19 19:46:58] [INFO]: Entrou em login\r\n', 7),
(143, '2021-09-20 11:41:45', 'INFO', '[2021-09-20 11:41:45] [INFO]: Entrou em login\r\n', 7),
(144, '2021-09-20 12:12:21', 'INFO', '[2021-09-20 12:12:21] [INFO]: Entrou em login\r\n', 7),
(145, '2021-09-20 12:14:09', 'INFO', '[2021-09-20 12:14:09] [INFO]: Entrou em login\r\n', 8),
(146, '2021-09-20 12:14:50', 'INFO', '[2021-09-20 12:14:50] [INFO]: Novo empresa\r\n', 8),
(147, '2021-09-20 12:15:58', 'INFO', '[2021-09-20 12:15:58] [INFO]: Novo empresa\r\n', 8),
(148, '2021-09-20 12:19:48', 'INFO', '[2021-09-20 12:19:48] [INFO]: Entrou em login\r\n', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacote`
--

CREATE TABLE `pacote` (
  `IdPacote` int(11) NOT NULL,
  `nomePacote` varchar(50) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pacote`
--

INSERT INTO `pacote` (`IdPacote`, `nomePacote`, `preco`) VALUES
(1, 'Standart', '60.00'),
(2, 'Prime', '120.00'),
(3, 'Premium', '200.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paga_pacote`
--

CREATE TABLE `paga_pacote` (
  `IdPagamento` int(11) NOT NULL,
  `formaPag` varchar(50) NOT NULL,
  `fk_IdPacote` int(11) DEFAULT NULL,
  `fk_IdCadastro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paga_pacote`
--

INSERT INTO `paga_pacote` (`IdPagamento`, `formaPag`, `fk_IdPacote`, `fk_IdCadastro`) VALUES
(2, 'Pix', 1, 8),
(5, 'Cartão de Crédito', 3, 9),
(9, 'Boleto', 2, 8),
(11, 'Cartão de Crédito', 1, 7),
(12, 'Cartão de Crédito', 1, 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `problema`
--

CREATE TABLE `problema` (
  `IdProblema` int(11) NOT NULL,
  `dataProblema` datetime DEFAULT current_timestamp(),
  `descProblema` varchar(50) NOT NULL,
  `msgProblema` longtext NOT NULL,
  `fk_cadastro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `problema`
--

INSERT INTO `problema` (`IdProblema`, `dataProblema`, `descProblema`, `msgProblema`, `fk_cadastro`) VALUES
(14, '2021-09-03 20:45:09', 'A tela congelada', 'Meu laptop travou!!', 8),
(18, '2021-09-08 20:24:03', 'Meu computador pegou vírus', 'Boa noite, meu computador está com mensagem de vírus, vocês poderia verificar, por favor?', 9),
(23, '2021-09-17 20:24:29', 'Tela azul', 'teste', 14),
(25, '2021-09-19 09:39:31', 'Tela azul', 'Meu computador deu tela azul', 7),
(26, '2021-09-19 11:46:18', 'Tela azul', 'Meu computador deu ruim', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `profile_cad`
--

CREATE TABLE `profile_cad` (
  `idProfile` int(11) NOT NULL,
  `nameProfile` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `profile_cad`
--

INSERT INTO `profile_cad` (`idProfile`, `nameProfile`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`IdAgenda`,`fk_cadastro`),
  ADD KEY `fk_cadastro` (`fk_cadastro`);

--
-- Índices para tabela `backup`
--
ALTER TABLE `backup`
  ADD PRIMARY KEY (`IdBackup`),
  ADD KEY `fk_IdCadastro` (`fk_IdCadastro`);

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`IdCadastro`),
  ADD KEY `fk_idProfile` (`fk_idProfile`);

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`IdCompra`),
  ADD KEY `fk_IdCadastro` (`fk_IdCadastro`),
  ADD KEY `fk_IdPagamento` (`fk_IdPagamento`);

--
-- Índices para tabela `empresa_cliente`
--
ALTER TABLE `empresa_cliente`
  ADD PRIMARY KEY (`IdEmpresa`),
  ADD KEY `fk_IdCadastro` (`fk_IdCadastro`);

--
-- Índices para tabela `logging`
--
ALTER TABLE `logging`
  ADD PRIMARY KEY (`IdLogging`),
  ADD KEY `fk_cadastro` (`fk_cadastro`);

--
-- Índices para tabela `pacote`
--
ALTER TABLE `pacote`
  ADD PRIMARY KEY (`IdPacote`);

--
-- Índices para tabela `paga_pacote`
--
ALTER TABLE `paga_pacote`
  ADD PRIMARY KEY (`IdPagamento`),
  ADD KEY `fk_IdPacote` (`fk_IdPacote`),
  ADD KEY `fk_IdCadastro` (`fk_IdCadastro`);

--
-- Índices para tabela `problema`
--
ALTER TABLE `problema`
  ADD PRIMARY KEY (`IdProblema`),
  ADD KEY `fk_cadastro` (`fk_cadastro`);

--
-- Índices para tabela `profile_cad`
--
ALTER TABLE `profile_cad`
  ADD PRIMARY KEY (`idProfile`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `IdAgenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `backup`
--
ALTER TABLE `backup`
  MODIFY `IdBackup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `IdCadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `IdCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `empresa_cliente`
--
ALTER TABLE `empresa_cliente`
  MODIFY `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `logging`
--
ALTER TABLE `logging`
  MODIFY `IdLogging` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT de tabela `pacote`
--
ALTER TABLE `pacote`
  MODIFY `IdPacote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `paga_pacote`
--
ALTER TABLE `paga_pacote`
  MODIFY `IdPagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `problema`
--
ALTER TABLE `problema`
  MODIFY `IdProblema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `profile_cad`
--
ALTER TABLE `profile_cad`
  MODIFY `idProfile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`fk_cadastro`) REFERENCES `cadastro` (`IdCadastro`);

--
-- Limitadores para a tabela `backup`
--
ALTER TABLE `backup`
  ADD CONSTRAINT `backup_ibfk_1` FOREIGN KEY (`fk_IdCadastro`) REFERENCES `cadastro` (`IdCadastro`);

--
-- Limitadores para a tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`fk_idProfile`) REFERENCES `profile_cad` (`idProfile`);

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`fk_IdCadastro`) REFERENCES `cadastro` (`IdCadastro`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`fk_IdPagamento`) REFERENCES `paga_pacote` (`IdPagamento`);

--
-- Limitadores para a tabela `empresa_cliente`
--
ALTER TABLE `empresa_cliente`
  ADD CONSTRAINT `empresa_cliente_ibfk_1` FOREIGN KEY (`fk_IdCadastro`) REFERENCES `cadastro` (`IdCadastro`);

--
-- Limitadores para a tabela `logging`
--
ALTER TABLE `logging`
  ADD CONSTRAINT `logging_ibfk_1` FOREIGN KEY (`fk_cadastro`) REFERENCES `cadastro` (`IdCadastro`);

--
-- Limitadores para a tabela `paga_pacote`
--
ALTER TABLE `paga_pacote`
  ADD CONSTRAINT `paga_pacote_ibfk_1` FOREIGN KEY (`fk_IdPacote`) REFERENCES `pacote` (`IdPacote`),
  ADD CONSTRAINT `paga_pacote_ibfk_2` FOREIGN KEY (`fk_IdCadastro`) REFERENCES `cadastro` (`IdCadastro`);

--
-- Limitadores para a tabela `problema`
--
ALTER TABLE `problema`
  ADD CONSTRAINT `problema_ibfk_1` FOREIGN KEY (`fk_cadastro`) REFERENCES `cadastro` (`IdCadastro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
