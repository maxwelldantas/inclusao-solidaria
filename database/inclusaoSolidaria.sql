-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jun-2017 às 21:57
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inclusaosolidaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrovoluntario`
--

CREATE TABLE `cadastrovoluntario` (
  `idCadVol` int(11) NOT NULL,
  `nomeVoluntario` varchar(45) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `Curso_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastrovoluntario`
--

INSERT INTO `cadastrovoluntario` (`idCadVol`, `nomeVoluntario`, `cpf`, `email`, `telefone`, `Curso_idCurso`) VALUES
(1, 'Maxwell', '108.255.046-94', 'maxwelluel@gmail.com', '92040640', 2),
(4, 'Cassio', '222.222.222-22', 'cascas@dasda.csa', '1231221', 3),
(5, 'Pedro', '8748372848', 'pedro@hotmail.com', '89786655', 6),
(6, 'João', '8984293849', 'joao@hotmail.com', '34527809', 1),
(7, 'Souza', '23423423', 'souza@hotmail.com', '3345344', 5),
(8, 'Tavares', '23422225523', 'tavares001@gmail.com', '3499203029', 7),
(9, 'Ezequiel', '48234823', 'ezequiel@gmail.com', '43242532', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(11) NOT NULL,
  `nomeCurso` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`idCurso`, `nomeCurso`) VALUES
(3, 'Informática Avançada'),
(1, 'Informática Básica'),
(2, 'Informática Intermediária'),
(9, 'Lógica de Programação'),
(5, 'Montagem e Manutenção'),
(8, 'Photoshop'),
(6, 'Redes'),
(4, 'Técnico em Informática'),
(7, 'Web Design');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastrovoluntario`
--
ALTER TABLE `cadastrovoluntario`
  ADD PRIMARY KEY (`idCadVol`,`Curso_idCurso`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `telefone_UNIQUE` (`telefone`),
  ADD KEY `fk_CadastroVoluntario_Curso_idx` (`Curso_idCurso`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCurso`),
  ADD UNIQUE KEY `nomeCurso_UNIQUE` (`nomeCurso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastrovoluntario`
--
ALTER TABLE `cadastrovoluntario`
  MODIFY `idCadVol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cadastrovoluntario`
--
ALTER TABLE `cadastrovoluntario`
  ADD CONSTRAINT `fk_CadastroVoluntario_Curso` FOREIGN KEY (`Curso_idCurso`) REFERENCES `curso` (`idCurso`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
