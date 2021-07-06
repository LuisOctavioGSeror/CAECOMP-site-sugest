-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jul-2021 às 03:40
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
-- Banco de dados: `caecomp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_estudantes`
--

CREATE TABLE `tabela_estudantes` (
  `ID` int(11) NOT NULL,
  `Nome_completo` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `semestre` int(11) NOT NULL,
  `rga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tabela_estudantes`
--

INSERT INTO `tabela_estudantes` (`ID`, `Nome_completo`, `senha`, `data`, `email`, `curso`, `semestre`, `rga`) VALUES
(1, 'Luis Octavio Galesso Seror', 'porradesenha', '2021-05-29 01:25:54', 'luisoctaviogalessoseror@protonmail.com', 'Engenharia da computação', 9, '201621901021'),
(5, 'joao da silva', 'senha123', '2021-05-29 15:00:42', 'joão@email.com', '', 4, '201621901032'),
(6, 'Luisa', '12345', '2021-07-03 23:23:48', 'luisa@hotmail.com', 'Engenharia de Controle e Automação', 4, '2015212121');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tabela_estudantes`
--
ALTER TABLE `tabela_estudantes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela_estudantes`
--
ALTER TABLE `tabela_estudantes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
