-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Out-2021 às 01:37
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimentomedico`
--

CREATE TABLE `atendimentomedico` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `sexo` varchar(25) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atendimentomedico`
--

INSERT INTO `atendimentomedico` (`id`, `nome`, `endereco`, `email`, `sexo`, `telefone`) VALUES
(2, 'Clara', 'Rua Abília Machado', 'nathaliatorres26@hotmail.com', 'F', '1235195705'),
(3, 'Mônica', 'Rua Abília Machado', 'nathaliatorres26@hotmail.com', 'F', '1235195705'),
(4, 'Mônica', 'Rua Abília Machado', 'nathaliatorres26@hotmail.com', 'F', '1235195705'),
(5, 'Paulo', 'Rua Abília Machado', 'nathaliatorres26@hotmail.com', 'M', '1235195705'),
(6, 'Mônica', 'Rua Abília Machado', 'nathaliatorres26@hotmail.com', 'F', '1235195705'),
(7, 'Mônica', 'Rua Abília Machado', 'nathaliatorres26@hotmail.com', 'F', '1235195705'),
(8, 'Mônica', 'Rua Abília Machado', 'nathaliatorres26@hotmail.com', 'F', '1235195705'),
(9, 'Elaine', 'Rua Abília Machado', 'nathaliatorres26@hotmail.com', 'F', '1235195705'),
(12, 'Patricia', 'Rua Abília Machado', 'nathaliatorres26@hotmail.com', 'F', '1235195705'),
(13, 'Mônica', 'Rua Abília Machado', 'nathaliatorres26@hotmail.com', 'F', '1235195705'),
(14, 'Elisa', 'Rua Abília Machado', 'nathaliatorres26@hotmail.com', 'F', '1235195705');

-- --------------------------------------------------------

--
-- Estrutura da tabela `beneficiario`
--

CREATE TABLE `beneficiario` (
  `beneficiarioID` int(11) NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `nome` varchar(11) DEFAULT NULL,
  `sexo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `beneficiario`
--

INSERT INTO `beneficiario` (`beneficiarioID`, `data_nasc`, `nome`, `sexo`) VALUES
(1, '1999-11-26', 'Mônica', 'F'),
(2, '1928-05-20', 'Clara', 'F'),
(3, '1999-11-26', 'Mônica', 'F'),
(4, '1999-11-26', 'Mônica', 'F'),
(5, '1999-11-26', 'Mônica', 'F'),
(6, '1950-12-27', 'Pedro', 'M'),
(7, '1982-05-20', 'Paulo', 'M'),
(8, '1970-09-30', 'José', 'M'),
(9, '1950-05-20', 'Carlos', 'M'),
(10, '1980-06-05', 'Paulo', 'M'),
(11, '1999-11-26', 'Mônica', 'F');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `EspecialidadeID` int(11) NOT NULL,
  `CBOS` varchar(50) DEFAULT NULL,
  `Especialidade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`EspecialidadeID`, `CBOS`, `Especialidade`) VALUES
(1, '5029', 'Ortopedia'),
(2, '76786', 'Dermatologia'),
(3, '3689', 'Psiquiatria'),
(4, '8513', 'Cirurgia Cardiovascular'),
(5, '8216', 'Aparelho Digestivo'),
(6, '3941', 'Homeopatia'),
(7, '6723', 'Mastologia'),
(8, '39547', 'Nutrologia'),
(9, '5473', 'Neurologia'),
(10, '6249', 'Patologia'),
(11, '5224', 'Reumatologia'),
(13, '3614', 'Pediatria'),
(15, '6549', 'Oftamologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `localatendimento`
--

CREATE TABLE `localatendimento` (
  `id` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `especialidade` varchar(50) DEFAULT NULL,
  `local` varchar(50) DEFAULT NULL,
  `medico` varchar(25) DEFAULT NULL,
  `procedimento` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `localatendimento`
--

INSERT INTO `localatendimento` (`id`, `data`, `especialidade`, `local`, `medico`, `procedimento`) VALUES
(1, '2021-10-25', 'Psiquiatria', 'Santa Casa - sjc', 'Mônica', 'Cirurgia'),
(2, '2022-02-06', 'Neurologia', 'Santa Casa - sjc', 'Luis', 'Consulta'),
(3, '1980-05-20', 'Aparelho Digestivo', 'Santa Casa - sjc', 'Clara', 'Consulta médica hospitalar '),
(4, '2022-03-25', 'Reumatologia', 'Santa Casa - sjc', 'Henrique', 'Consulta médica hospitalar '),
(5, '2021-11-20', 'Homeopatia', 'Santa Casa - sjc', 'Debora', 'Broncografia bilateral '),
(6, '2021-10-22', 'Pediatria', 'Santa Casa - sjc', 'Paulo', 'Consulta'),
(8, '2021-10-26', 'Oftamologia', 'Santa Casa - sjc', 'Carlos', 'Consulta médica hospitalar '),
(9, '2021-10-20', 'Homeopatia', 'Santa Casa - sjc', 'Debora', 'Bloqueio de anestesico '),
(10, '2021-10-14', 'Neurologia', 'Santa Casa - sjc', 'Henrique', 'Arteriografia vertebral');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `MedicoID` int(11) NOT NULL,
  `crm` varchar(50) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `nome` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`MedicoID`, `crm`, `data_nasc`, `nome`) VALUES
(2, '88226', '1980-03-28', 'Clara'),
(3, '3556', '1975-10-09', 'Paulo'),
(4, '3265', '1980-06-03', 'Luis'),
(5, '65841', '1990-04-28', 'Carlos'),
(7, '391123', '1997-01-23', 'Carla'),
(8, '3216.2', '1986-07-10', 'Henrique'),
(9, '3556', '1999-11-26', 'Mônica'),
(10, '1598', '1980-05-20', 'Debora');

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimento`
--

CREATE TABLE `procedimento` (
  `ProcedimentoID` int(11) NOT NULL,
  `desc_proc` varchar(200) DEFAULT NULL,
  `tipo_proc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `procedimento`
--

INSERT INTO `procedimento` (`ProcedimentoID`, `desc_proc`, `tipo_proc`) VALUES
(3, 'Consulta médica hospitalar ', 'Em pronto socorro'),
(4, 'Hemodialise por sessão', 'Hemofiltração'),
(5, 'Retirada de cateter', 'Retirada de cateter Tenckhoff'),
(6, 'Bloqueio de anestesico ', 'Bloqueio anestésico de nervos cranianos'),
(7, 'Broncografia bilateral ', 'Planigrafia de tórax, mediastino ou laringe'),
(8, 'Broncografia unilateral', 'Planigrafia de tórax, mediastino ou laringe'),
(9, 'Arteriografia vertebral', 'Angiografia por punção'),
(10, 'Consulta', 'Em consultório (no horário normal ou preestabeleci'),
(11, 'Cirurgia da mão em paciente', 'Cirurgia da mão');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendimentomedico`
--
ALTER TABLE `atendimentomedico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `beneficiario`
--
ALTER TABLE `beneficiario`
  ADD PRIMARY KEY (`beneficiarioID`);

--
-- Índices para tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`EspecialidadeID`);

--
-- Índices para tabela `localatendimento`
--
ALTER TABLE `localatendimento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`MedicoID`);

--
-- Índices para tabela `procedimento`
--
ALTER TABLE `procedimento`
  ADD PRIMARY KEY (`ProcedimentoID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendimentomedico`
--
ALTER TABLE `atendimentomedico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `beneficiario`
--
ALTER TABLE `beneficiario`
  MODIFY `beneficiarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `EspecialidadeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `localatendimento`
--
ALTER TABLE `localatendimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `MedicoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `procedimento`
--
ALTER TABLE `procedimento`
  MODIFY `ProcedimentoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
