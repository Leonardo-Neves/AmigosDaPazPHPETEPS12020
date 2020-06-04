-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jun-2020 às 03:42
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `orgao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `typeHelp` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `user_id`, `typeHelp`) VALUES
(4, 'Dorimem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven', 3, 'P'),
(5, 'Ameno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven', 3, 'P'),
(6, 'Dorimem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven', 5, 'P'),
(9, 'Dorimem', 'sadsadasdasdas', 8, 'P'),
(10, 'Ameno', 'sadasdasdsad', 8, 'P'),
(11, 'Voluntario ', 'sadasdasda', 8, 'V'),
(16, 'Fralda Geriátrica', 'Tamanho: P, M e G.\r\nEntregar na nossa sede.', 14, 'P'),
(17, 'Voluntários para com os Idosos', 'Ajuda para administrar remédios.', 14, 'P');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `fone` varchar(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `street` varchar(30) NOT NULL,
  `neighborhood` varchar(70) NOT NULL,
  `city` varchar(70) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `ibge` varchar(7) NOT NULL,
  `cnpjAndCpf` varchar(14) NOT NULL,
  `description` text NOT NULL,
  `typeUser` varchar(1) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp(),
  `alteredPassword` varchar(5) NOT NULL,
  `profileImage` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `name`, `fone`, `email`, `password`, `cep`, `street`, `neighborhood`, `city`, `uf`, `ibge`, `cnpjAndCpf`, `description`, `typeUser`, `createdAt`, `alteredPassword`, `profileImage`) VALUES
(9, 'Organ2', '1239343583', 'organ2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '12235560', 'Avenida Fortaleza', 'Parque Industrial', 'São José dos Campos', 'SP', '3549904', '94889075000119', 'Organ', 'O', '2020-05-20', 'false', '5ec5a768b844a.jpg'),
(10, 'Manager', '1239343583', 'manager@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '12235560', 'Avenida Fortaleza', 'Parque Industrial', 'São José dos Campos', 'SP', '3549904', '49438918884', 'asdadad', 'G', '2020-05-20', 'false', ''),
(11, 'User', '1239343583', 'user@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '12235560', 'Avenida Fortaleza', 'Parque Industrial', 'São José dos Campos', 'SP', '3549904', '33117775064', 'sadasdasd', 'U', '2020-05-20', 'false', ''),
(12, 'User3', '1239343583', 'user3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '12235560', 'Avenida Fortaleza', 'Parque Industrial', 'São José dos Campos', 'SP', '3549904', '74914014068', 'asdasdads', 'U', '2020-05-20', 'false', ''),
(13, 'User4', '1239343583', 'user4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '12235560', 'Avenida Fortaleza', 'Parque Industrial', 'São José dos Campos', 'SP', '3549904', '83164055048', 'asdasdasd', 'U', '2020-05-20', 'false', ''),
(14, 'Organ', '1239343583', 'organ@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '12235560', 'Avenida Fortaleza', 'Parque Industrial', 'São José dos Campos', 'SP', '3549904', '62816969000192', 'Sou um usuário.', 'O', '2020-05-20', 'false', '5ed515db9affd.png'),
(18, 'Leonardo ', '99999999999', 'leosn784512@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '12235560', 'Avenida Fortaleza', 'Parque Industrial', 'São José dos Campos', 'SP', '3549904', '30164126082', 'Sou um usuário.', 'U', '2020-06-01', 'false', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
