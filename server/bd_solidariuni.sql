-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2018 às 20:56
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_solidariuni`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `campanhas`
--

CREATE TABLE `campanhas` (
  `idcampanha` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `subtitulo` text NOT NULL,
  `descricao` text NOT NULL,
  `data_inicio_campanha` date NOT NULL,
  `data_final_campanha` date NOT NULL,
  `titular` varchar(50) NOT NULL,
  `foto_campanha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `campanhas`
--

INSERT INTO `campanhas` (`idcampanha`, `titulo`, `subtitulo`, `descricao`, `data_inicio_campanha`, `data_final_campanha`, `titular`, `foto_campanha`) VALUES
(1, 'Campanha do Agasalho', 'DoaÃ§Ã£o de casacos/roupas de frio para pessoas necessitadas.', 'Lorem Ipsum Ã© simplesmente uma simulaÃ§Ã£o de texto da indÃºstria tipogrÃ¡fica e de impressos, e vem sendo utilizado desde o sÃ©culo XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu nÃ£o sÃ³ a cinco sÃ©culos, como tambÃ©m ao salto para a editoraÃ§Ã£o eletrÃ´nica, permanecendo essencialmente inalterado. Se popularizou na dÃ©cada de 60, quando a Letraset lanÃ§ou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoraÃ§Ã£o eletrÃ´nica como Aldus PageMaker.', '2018-11-05', '2019-10-01', 'willian', '5be09d1f36b27.jpg'),
(2, 'Campanha do Agasalho', 'DoaÃ§Ã£o de casacos/roupas de frio para pessoas necessitadas.', 'Lorem Ipsum Ã© simplesmente uma simulaÃ§Ã£o de texto da indÃºstria tipogrÃ¡fica e de impressos, e vem sendo utilizado desde o sÃ©culo XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu nÃ£o sÃ³ a cinco sÃ©culos, como tambÃ©m ao salto para a editoraÃ§Ã£o eletrÃ´nica, permanecendo essencialmente inalterado. Se popularizou na dÃ©cada de 60, quando a Letraset lanÃ§ou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoraÃ§Ã£o eletrÃ´nica como Aldus PageMaker.', '2018-11-05', '2019-10-01', 'willian', '5be09dde04c66.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `primeiro_nome` varchar(50) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `CNPJ` varchar(14) DEFAULT NULL,
  `razao_social` varchar(200) DEFAULT NULL,
  `tipo_pessoa` enum('pessoa-fisica','pessoa-juridica') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `primeiro_nome`, `sobrenome`, `email`, `senha`, `CPF`, `data_nascimento`, `CNPJ`, `razao_social`, `tipo_pessoa`) VALUES
(7, 'willian', 'sales gabriel ', 'williansalesgabriel@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '43593584824', '1996-01-01', NULL, '', 'pessoa-fisica'),
(8, 'Luan', 'Gustavo', 'gamerluan23@gmail.com', '56ae0464c18f19343d6e8a33a8ebed3bf37b4c37', '50317219871', '2001-04-03', NULL, '', 'pessoa-fisica'),
(9, 'Luan', 'D Paula', 'luanzera@gmail.com', '086188df5c1a148d46ca5da05972c3a1846d04d4', '20386375659', '2001-04-03', NULL, '', 'pessoa-fisica'),
(12, 'Mozart ', 'Russoumano ', 'mozart@teste.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '0000-00-00', '4100055544400', 'Brisa Hotel ', 'pessoa-juridica'),
(13, 'Crisina', 'Moreira', 'cmoreiracristina@bol.com.br', 'd6677fedf5cefe1dd1285e5b23fb44a7ccdcdf0c', '56748935465', '2000-04-23', '', '', 'pessoa-fisica'),
(14, 'Crisina', 'Moreira', 'cmoreiracristina@bol.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '0000-00-00', '74048654000155', 'Cachorrinhos a venda LTDA', 'pessoa-juridica');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campanhas`
--
ALTER TABLE `campanhas`
  ADD PRIMARY KEY (`idcampanha`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campanhas`
--
ALTER TABLE `campanhas`
  MODIFY `idcampanha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
