-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Nov-2018 às 19:30
-- Versão do servidor: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(200) NOT NULL,
  `nascimento_aluno` date NOT NULL,
  `endereco_aluno` varchar(200) NOT NULL,
  `mae_aluno` varchar(200) NOT NULL,
  `pai_aluno` varchar(200) NOT NULL,
  `contato_aluno` varchar(200) NOT NULL,
  `turma_aluno` varchar(200) NOT NULL,
  `turno_aluno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome_aluno`, `nascimento_aluno`, `endereco_aluno`, `mae_aluno`, `pai_aluno`, `contato_aluno`, `turma_aluno`, `turno_aluno`) VALUES
(3, 'pedro', '2018-11-15', 'rua menos', 'maria', 'jose', '123', 'Maria', 'vespertino'),
(4, 'kauan junior', '2012-02-05', 'rua mais', 'pedra', 'jose', 'nao tem', 'Jose', 'manha'),
(5, 'Aline Barros', '2006-06-06', 'rua de deus', 'aline poeira', 'alan agua', '33558875', 'Maria', 'vespertino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(11) NOT NULL,
  `nome_professor` varchar(200) NOT NULL,
  `endereco_professor` varchar(200) NOT NULL,
  `telefone_professor` varchar(50) NOT NULL,
  `observacao_professor` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `nome_professor`, `endereco_professor`, `telefone_professor`, `observacao_professor`) VALUES
(1, 'Jose', 'casa da mae', '61613355', ''),
(2, 'Maria', 'lago das biqueiras', '6188775421', 'nao trabalha a noite');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
