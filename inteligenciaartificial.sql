-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Set-2019 às 18:19
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inteligenciaartificial`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresaconhecimento`
--

CREATE TABLE `empresaconhecimento` (
  `id` int(11) NOT NULL,
  `php` varchar(30) NOT NULL,
  `java` varchar(30) NOT NULL,
  `javascript` varchar(30) NOT NULL,
  `csharp` varchar(30) NOT NULL,
  `cplusplus` varchar(30) NOT NULL,
  `ruby` varchar(30) NOT NULL,
  `python` varchar(30) NOT NULL,
  `css` varchar(30) NOT NULL,
  `mysql` varchar(30) NOT NULL,
  `oracle` varchar(30) NOT NULL,
  `sqlite` varchar(30) NOT NULL,
  `nome_empresa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresaconhecimento`
--

INSERT INTO `empresaconhecimento` (`id`, `php`, `java`, `javascript`, `csharp`, `cplusplus`, `ruby`, `python`, `css`, `mysql`, `oracle`, `sqlite`, `nome_empresa`) VALUES
(7, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'JOASSS'),
(8, '3', '2', '2', '2', '2', '2', '2', '2', '1', '1', '1', 'conhecimento 3'),
(26, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '2', 'aHSAAM'),
(27, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '2', 'asdf'),
(28, '1', '3', '3', '3', '3', '3', '3', '3', '3', '3', '2', 'JOASSS'),
(29, '1', '3', '3', '3', '3', '3', '3', '3', '3', '3', '2', 'JOASSS'),
(39, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2', 'JOASSS'),
(40, '1', '1', '0', '0', '0', '1', '0', '0', '0', '0', '0', 'JOASSS'),
(41, '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', 'JOASSS'),
(42, '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', 'c');

-- --------------------------------------------------------

--
-- Estrutura da tabela `userconhecimento`
--

CREATE TABLE `userconhecimento` (
  `id` int(11) NOT NULL,
  `php` varchar(30) NOT NULL,
  `java` varchar(30) NOT NULL,
  `javascript` varchar(30) NOT NULL,
  `csharp` varchar(30) NOT NULL,
  `cplusplus` varchar(30) NOT NULL,
  `ruby` varchar(30) NOT NULL,
  `python` varchar(30) NOT NULL,
  `css` varchar(30) NOT NULL,
  `mysql` varchar(30) NOT NULL,
  `oracle` varchar(30) NOT NULL,
  `sqlite` varchar(30) NOT NULL,
  `nome_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `userconhecimento`
--

INSERT INTO `userconhecimento` (`id`, `php`, `java`, `javascript`, `csharp`, `cplusplus`, `ruby`, `python`, `css`, `mysql`, `oracle`, `sqlite`, `nome_user`) VALUES
(150, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'carlos'),
(151, '0', '1', '0', '0', '2', '2', '0', '0', '0', '0', '0', 'carlos'),
(160, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2', 'carlos'),
(161, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'carlos'),
(162, '1', '1', '0', '0', '0', '1', '0', '0', '0', '0', '0', 'carlos'),
(163, '1', '1', '0', '0', '0', '1', '0', '0', '0', '0', '0', 'carlos'),
(164, '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', 'carlos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `modulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `modulo`) VALUES
(1, 'c', '1', 1),
(2, 'carlos', '2', 2),
(9, 'JOASSS', '1', 1),
(10, 'ca', '1', 2),
(11, 'abc', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresaconhecimento`
--
ALTER TABLE `empresaconhecimento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userconhecimento`
--
ALTER TABLE `userconhecimento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empresaconhecimento`
--
ALTER TABLE `empresaconhecimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `userconhecimento`
--
ALTER TABLE `userconhecimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
