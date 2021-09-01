-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Set-2021 às 02:46
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
(41, 7, '2021-08-12T03:20'),
(42, 9, '2021-08-12T20:58'),
(43, 8, '2021-08-05T20:58'),
(45, 12, '2021-08-25T07:42');

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
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`IdCadastro`, `nomeCad`, `dataN`, `genero`, `cpf`, `cep`, `endereco`, `cidade`, `estado`, `tel1`, `tel2`, `email`, `senha`, `foto`) VALUES
(7, 'Nicolas Hiroki Yonekawa', '2002-12-26', 'Masculino', '151.151.151-15', '15298-272', 'Rua Maria da Piedade Camargo', 'Hortolândia', 'São Paulo', '(19) 98927-3500', '', 'nicolasyonekawa@gmail.com', 'MTIz', 'imagem/Nicolas 17.jpg'),
(8, 'Marcus Vinícius Andrade', '2003-12-25', 'Masculino', '151.151.151-15', '15298-272', 'Rua Maria da Piedade Camargo', 'Hortolândia', 'São Paulo', '', '', 'marcusvinicius@gmail.com', 'MTIz', 'imagem/Marcus.jpg'),
(9, 'Emmanuel Zague de Sá', '2004-07-17', 'Masculino', '151.151.151-15', '15298-272', 'Rua Maria da Piedade Camargo', 'Sumaré', 'São Paulo', '', '', 'emmanuelzague@gmail.com', 'MTIz', 'imagem/Manolo.jpg'),
(10, 'Teste', '2002-12-26', 'Masculino', '151.151.151-15', '15298-272', 'Rua Maria da Piedade Camargo', 'Hortolândia', 'São Paulo', '(19) 98927-3500', '', 'teste@gmail.com', 'MTIz', 'imagem/perfil.jpg'),
(12, 'Wesley', '2002-12-26', 'Masculino', '151.151.151-15', '15298-272', 'Rua Maria da Piedade Camargo', 'Hortolândia', 'São Paulo', '(19) 98927-3500', '', 'wesleydomingues@gmail.com', 'MTIz', 'imagem/perfil.jpg'),
(13, 'Nicolas Hiroki Yonekawa', '2002-12-26', 'Masculino', '151.151.151-15', '15298-272', 'Rua Maria da Piedade Camargo', 'Hortolândia', 'São Paulo', '(19) 98927-3500', '', 'nicolasyonekawa@gmail.com', 'MTIz', 'imagem/perfil.jpg');

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
(6, '98.98.98-98', 'X-MAX', 'Tecnologia', 'Rua Maria da Piedade Camargo', 'Santo André', 'Sumaré', 'São Paulo', 'Não', 7),
(7, '98.98.98-98', 'X-MAX', 'Tecnologia', 'Rua Maria da Piedade Camargo', 'Santo André', 'Sumaré', 'São Paulo', 'Não', 8),
(8, '98.98.98-98', 'UNASP-HT', 'Ecônomica', 'Rua Anônima', 'Santo André', 'Hortolândia', 'São Paulo', 'Não', 7);

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
(94, '2021-08-31 16:39:22', 'INFO', '[2021-08-31 16:39:22] [INFO]: Entrou em login\r\n', 8),
(96, '2021-08-31 16:39:43', 'INFO', '[2021-08-31 16:39:43] [INFO]: Entrou em login\r\n', 9),
(97, '2021-08-31 16:39:54', 'INFO', '[2021-08-31 16:39:54] [INFO]: Entrou em login\r\n', 10),
(98, '2021-08-31 16:40:03', 'INFO', '[2021-08-31 16:40:03] [INFO]: Entrou em login\r\n', 12),
(99, '2021-08-31 16:40:11', 'INFO', '[2021-08-31 16:40:11] [INFO]: Entrou em login\r\n', 10),
(100, '2021-08-31 16:40:27', 'INFO', '[2021-08-31 16:40:27] [INFO]: Entrou em login\r\n', 7),
(102, '2021-08-31 17:23:17', 'INFO', '[2021-08-31 17:23:17] [INFO]: Entrou em login\r\n', 7),
(103, '2021-08-31 17:31:50', 'INFO', '[2021-08-31 17:31:50] [INFO]: Novo usuário\r\n', 7),
(104, '2021-08-31 17:31:54', 'INFO', '[2021-08-31 17:31:54] [INFO]: Entrou em login\r\n', 7),
(105, '2021-08-31 18:04:01', 'INFO', '[2021-08-31 18:04:01] [INFO]: Entrou em login\r\n', 7),
(106, '2021-08-31 19:46:02', 'INFO', '[2021-08-31 19:46:02] [INFO]: Novo empresa\r\n', 7);

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
  `data_pagamento` datetime DEFAULT current_timestamp(),
  `formaPag` varchar(50) NOT NULL,
  `fk_IdPacote` int(11) DEFAULT NULL,
  `fk_IdCadastro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paga_pacote`
--

INSERT INTO `paga_pacote` (`IdPagamento`, `data_pagamento`, `formaPag`, `fk_IdPacote`, `fk_IdCadastro`) VALUES
(16, '2021-08-30 19:50:22', 'Cartão de Crédito', 1, 8),
(18, '2021-08-30 21:27:19', 'Cartão de Crédito', 3, 9),
(20, '2021-08-31 07:46:02', 'Cartão de Crédito', 1, 12),
(21, '2021-08-31 21:39:44', 'Boleto', 1, 7),
(22, '2021-08-31 21:43:09', 'Cartão de Crédito', 2, 7);

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
(2, '2021-08-28 18:39:37', 'Tela azul', 'Meu computador deu tela azul na tela, poderiam resolver esse problema?', 7),
(4, '2021-08-28 21:59:01', 'Tela congelada', 'Meu computador travou, tem como resolver?', 8),
(6, '2021-08-29 23:23:10', 'HD Corrompido', 'Meu HD externo está apresentando falhas, poderiam resolver?', 9),
(7, '2021-08-31 07:37:01', 'Impressora quebrou', 'Minha impressora quevbou', 12);

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
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`IdCadastro`);

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
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `IdAgenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `IdCadastro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `empresa_cliente`
--
ALTER TABLE `empresa_cliente`
  MODIFY `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `logging`
--
ALTER TABLE `logging`
  MODIFY `IdLogging` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de tabela `pacote`
--
ALTER TABLE `pacote`
  MODIFY `IdPacote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `paga_pacote`
--
ALTER TABLE `paga_pacote`
  MODIFY `IdPagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `problema`
--
ALTER TABLE `problema`
  MODIFY `IdProblema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`fk_cadastro`) REFERENCES `cadastro` (`IdCadastro`);

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
