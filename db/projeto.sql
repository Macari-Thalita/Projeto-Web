-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Maio-2020 às 02:06
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`codigo`, `nome`, `telefone`, `email`) VALUES
(2, 'Exemplo', '654321', 'email@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `logins`
--

INSERT INTO `logins` (`id`, `email`, `login`, `senha`, `tipo`) VALUES
(1, 'thalita.macari@gmail.com', 'Thalita', '2486', 'Administrador'),
(3, 'Carlos@gmai.com', 'Luffy', '1234', 'Usuário'),
(4, 'fulano@gmail.com', 'OtakuRandom', '1234', 'Usuário'),
(5, 'pixelmaker@gmail.com', 'PixelGuy', '1234', 'Usuário'),
(6, 'Nicolas@gmail.com', 'Nicolas', '1234', 'Administrador'),
(7, 'marcelo@gmail.com', 'Marcelo', '1234', 'Administrador'),
(8, 'Maker@gmail.com', 'Maker', '1234', 'Usuário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titulo` varchar(20) CHARACTER SET utf8 NOT NULL,
  `descricao` varchar(200) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(20) CHARACTER SET utf8 NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `descricao`, `usuario`, `img`) VALUES
(33, 'Midoriya Izuku', 'Boku no hero academia', 'Thalita', 'mha.jpg'),
(35, 'Miaruto', 'Vila do Whiskas :3', 'OtakuRandom', '292555.jpg'),
(36, 'Pixel art', 'Goddesses', 'OtakuRandom', '941435.png'),
(37, 'Aesthetic', '(´｡• ω •｡`)', 'Thalita', '962060.png'),
(38, 'Purple Sky', '°˖✧◝( ⁰ ▿ ⁰ )◜✧˖°', 'PixelGuy', '1055726.png'),
(41, 'Gas Station', 'Just another Pixel art', 'Thalita', '1066821.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
