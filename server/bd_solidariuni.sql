-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2018 às 20:33
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
  `foto_campanha` varchar(50) DEFAULT NULL,
  `telefone_titular` varchar(15) DEFAULT NULL,
  `email_titular` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `campanhas`
--

INSERT INTO `campanhas` (`idcampanha`, `titulo`, `subtitulo`, `descricao`, `data_inicio_campanha`, `data_final_campanha`, `titular`, `foto_campanha`, `telefone_titular`, `email_titular`) VALUES
(12, 'ArrecadaÃ§Ã£o de feijÃ£o.', 'Estamos arrecadando feijÃ£o para doar aos necessitados.', 'OlÃ¡, fazemos parte da ONG sem fome, estamos arrecadando feijÃ£o para doar aos necessitados. VocÃª pode colaborar entrando em contato conosco e buscamos. Ou se quiser, trazer atÃ© nÃ³s, no endereÃ§o:\nRua: Figueira Noventa Silva NÂº78 Porto Novo, Caraguatatuba-SP', '2018-11-27', '2018-12-12', 'Luan', 'feijao.jpg', '(12)99999-9999', 'gamerluan23@gmail.com'),
(14, 'Campanha de agasalho', 'Estamos arrecadando roupas para moradores de rua nessa Ã©poca de frio.', 'OlÃ¡, somos uma ONG que ajuda moradores de rua. Estamos arrecadando roupas para moradores de rua. Ligue para nÃ³s e ajude-nos!', '2018-11-27', '2018-12-12', 'Fernando', '5bfd98b62e793.jpg', '(12) 33242-3452', 'fernando@gmail.com'),
(15, 'ArrecadaÃ§Ã£o de raÃ§Ã£o', 'Somos a ONG ProteÃ§Ã£o Animal e estamos arrecadando raÃ§Ã£o para cÃ£es.', 'OlÃ¡, somos a ONG ProteÃ§Ã£o Animal. Estamos com um projeto de arredaÃ§Ã£o de raÃ§Ã£o para cÃ£es e precisamos de sua colaboraÃ§Ã£o! Na nossa primeira fase arrecadamos 300 quilos! Nosso objetivo agora sÃ£o 500 quilos! Contamos com a sua ajuda!\nRua: Tal Santos de Sousa bairro Tinga, Caraguatatuba-SP', '2018-11-27', '1992-12-12', 'Fernando', '5bfd9af90c772.jpg', '(12) 33242-3452', 'fernando@gmail.com');

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
  `telefone` varchar(15) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `CNPJ` varchar(14) DEFAULT NULL,
  `razao_social` varchar(200) DEFAULT NULL,
  `tipo_pessoa` enum('pessoa-fisica','pessoa-juridica') NOT NULL,
  `foto_perfil` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `primeiro_nome`, `sobrenome`, `email`, `senha`, `CPF`, `telefone`, `data_nascimento`, `CNPJ`, `razao_social`, `tipo_pessoa`, `foto_perfil`) VALUES
(7, 'willian', 'sales gabriel ', 'williansalesgabriel@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '43593584824', '12996417887', '1996-01-01', NULL, '', 'pessoa-fisica', NULL),
(16, 'Luan', 'de Paula', 'gamerluan23@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '239.048.039', '(12)99999-9999', '2001-04-03', '23.423.423/452', '', 'pessoa-fisica', '5bf7076fbc6b5.jpg'),
(18, 'Fernando', 'Maldini', 'fernando@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '503.172.156', '(12) 33242-3452', '1994-08-25', '', '', 'pessoa-fisica', '5bfd9583dc0a8.jpg');

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
  MODIFY `idcampanha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
