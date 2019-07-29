-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jul-2019 às 04:04
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesquisayosoy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `id_pessoa` int(255) NOT NULL,
  `nome` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `pergunta1` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `pergunta2` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `pergunta3` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `pergunta4` varchar(255) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Extraindo dados da tabela `pesquisa`
--

INSERT INTO `pesquisa` (`id_pessoa`, `nome`, `telefone`, `email`, `pergunta1`, `pergunta2`, `pergunta3`, `pergunta4`) VALUES
(1, 'Vagner Ereno Quincozes', '997018411', 'vequincozes@gmail.com', 'nao', 'nao', 'sim', ''),
(2, 'Silvio Ereno Quincozes', '9999999999', 'asduhsd@aisuhd', 'sim', 'nao', 'sim', 'sim'),
(3, 'aiuhau', 'ahuida', 'iuashdiuh2@asd', 'sim', 'sim', 'sim', 'nao'),
(4, 'aiuhau', 'ahuida', 'iuashdiuh2@asd', 'sim', 'sim', 'sim', 'nao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesquisa`
--
ALTER TABLE `pesquisa`
  MODIFY `id_pessoa` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
