-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Maio-2021 às 19:17
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acidente`
--

CREATE TABLE `acidente` (
  `idacidente` int(11) NOT NULL,
  `descriçao` varchar(200) NOT NULL,
  `dtacidente` date NOT NULL,
  `idreparo` int(11) NOT NULL,
  `idseguro` int(11) NOT NULL,
  `idseguro_aluger` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluguer`
--

CREATE TABLE `aluguer` (
  `idaluguer` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `valor_total` varchar(200) NOT NULL,
  `valor_troco` varchar(200) NOT NULL,
  `nota_fiscal` varchar(200) NOT NULL,
  `dt_locaçao` date NOT NULL,
  `iddevoluçao` int(11) NOT NULL,
  `valor_pago` int(11) NOT NULL,
  `idfuncionario` int(11) NOT NULL,
  `idseguro_aluger` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `devoluçao`
--

CREATE TABLE `devoluçao` (
  `iddevoluçao` int(11) NOT NULL,
  `idpagamento` int(11) NOT NULL,
  `dt_devoluçao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `idendereco` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `descriçao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemaluger`
--

CREATE TABLE `itemaluger` (
  `iditemaluger` int(11) NOT NULL,
  `idveiculo` int(11) NOT NULL,
  `idaluguer` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preço` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `idmodelo` int(11) NOT NULL,
  `descriçao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `idpagamento` int(11) NOT NULL,
  `preço` varchar(200) NOT NULL,
  `forma_pagamento` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reparo`
--

CREATE TABLE `reparo` (
  `idreparo` int(11) NOT NULL,
  `dtreparo` date NOT NULL,
  `valor` varchar(200) NOT NULL,
  `peça_retificada` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `seguroaluguel`
--

CREATE TABLE `seguroaluguel` (
  `valor` varchar(200) NOT NULL,
  `idseguro_aluger` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `seguro_veiculo`
--

CREATE TABLE `seguro_veiculo` (
  `idseguro` int(11) NOT NULL,
  `valor` varchar(200) NOT NULL,
  `dt_validade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `idtelefone` int(11) NOT NULL,
  `numero` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_veiculo`
--

CREATE TABLE `tipo_veiculo` (
  `idtipo_veiculo` int(11) NOT NULL,
  `descriçao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `idveiculo` int(11) NOT NULL,
  `idtipo_veiculo` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `ano` varchar(200) NOT NULL,
  `cor` varchar(200) NOT NULL,
  `preço` varchar(200) NOT NULL,
  `idmodelo` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `placa` varchar(200) NOT NULL,
  `chassi` varchar(200) NOT NULL,
  `idseguro` int(11) NOT NULL,
  `idacidente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acidente`
--
ALTER TABLE `acidente`
  ADD PRIMARY KEY (`idacidente`),
  ADD KEY `idreparo` (`idreparo`),
  ADD KEY `idseguro` (`idseguro`),
  ADD KEY `idseguro_aluger` (`idseguro_aluger`);

--
-- Indexes for table `aluguer`
--
ALTER TABLE `aluguer`
  ADD PRIMARY KEY (`idaluguer`),
  ADD KEY `iddevoluçao` (`iddevoluçao`),
  ADD KEY `idcliente` (`idcliente`),
  ADD KEY `idfuncionario` (`idfuncionario`),
  ADD KEY `idseguro_aluger` (`idseguro_aluger`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indexes for table `devoluçao`
--
ALTER TABLE `devoluçao`
  ADD PRIMARY KEY (`iddevoluçao`),
  ADD KEY `idpagamento` (`idpagamento`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idendereco`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Indexes for table `itemaluger`
--
ALTER TABLE `itemaluger`
  ADD PRIMARY KEY (`iditemaluger`),
  ADD KEY `idaluguer` (`idaluguer`),
  ADD KEY `idveiculo` (`idveiculo`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`idmodelo`);

--
-- Indexes for table `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`idpagamento`);

--
-- Indexes for table `reparo`
--
ALTER TABLE `reparo`
  ADD PRIMARY KEY (`idreparo`);

--
-- Indexes for table `seguroaluguel`
--
ALTER TABLE `seguroaluguel`
  ADD PRIMARY KEY (`idseguro_aluger`);

--
-- Indexes for table `seguro_veiculo`
--
ALTER TABLE `seguro_veiculo`
  ADD PRIMARY KEY (`idseguro`);

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`idtelefone`);

--
-- Indexes for table `tipo_veiculo`
--
ALTER TABLE `tipo_veiculo`
  ADD PRIMARY KEY (`idtipo_veiculo`);

--
-- Indexes for table `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`idveiculo`),
  ADD KEY `idacidente` (`idacidente`),
  ADD KEY `idmodelo` (`idmodelo`),
  ADD KEY `idseguro` (`idseguro`),
  ADD KEY `idtipo_veiculo` (`idtipo_veiculo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluguer`
--
ALTER TABLE `aluguer`
  MODIFY `idaluguer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `devoluçao`
--
ALTER TABLE `devoluçao`
  MODIFY `iddevoluçao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idendereco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itemaluger`
--
ALTER TABLE `itemaluger`
  MODIFY `iditemaluger` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `idmodelo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pagamento`
--
ALTER TABLE `pagamento`
  MODIFY `idpagamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reparo`
--
ALTER TABLE `reparo`
  MODIFY `idreparo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seguroaluguel`
--
ALTER TABLE `seguroaluguel`
  MODIFY `idseguro_aluger` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seguro_veiculo`
--
ALTER TABLE `seguro_veiculo`
  MODIFY `idseguro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telefone`
--
ALTER TABLE `telefone`
  MODIFY `idtelefone` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_veiculo`
--
ALTER TABLE `tipo_veiculo`
  MODIFY `idtipo_veiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `idveiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `acidente`
--
ALTER TABLE `acidente`
  ADD CONSTRAINT `acidente_ibfk_1` FOREIGN KEY (`idreparo`) REFERENCES `reparo` (`idreparo`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `acidente_ibfk_2` FOREIGN KEY (`idseguro`) REFERENCES `seguro_veiculo` (`idseguro`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `acidente_ibfk_3` FOREIGN KEY (`idseguro_aluger`) REFERENCES `seguroaluguel` (`idseguro_aluger`) ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `aluguer`
--
ALTER TABLE `aluguer`
  ADD CONSTRAINT `aluguer_ibfk_1` FOREIGN KEY (`iddevoluçao`) REFERENCES `devoluçao` (`iddevoluçao`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `aluguer_ibfk_2` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `aluguer_ibfk_3` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionario` (`idfuncionario`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `aluguer_ibfk_4` FOREIGN KEY (`idseguro_aluger`) REFERENCES `seguroaluguel` (`idseguro_aluger`) ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `devoluçao`
--
ALTER TABLE `devoluçao`
  ADD CONSTRAINT `devoluçao_ibfk_1` FOREIGN KEY (`idpagamento`) REFERENCES `pagamento` (`idpagamento`) ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `itemaluger`
--
ALTER TABLE `itemaluger`
  ADD CONSTRAINT `itemaluger_ibfk_1` FOREIGN KEY (`idaluguer`) REFERENCES `aluguer` (`idaluguer`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `itemaluger_ibfk_2` FOREIGN KEY (`idveiculo`) REFERENCES `veiculo` (`idveiculo`) ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `veiculo_ibfk_1` FOREIGN KEY (`idacidente`) REFERENCES `acidente` (`idacidente`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `veiculo_ibfk_2` FOREIGN KEY (`idmodelo`) REFERENCES `modelo` (`idmodelo`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `veiculo_ibfk_3` FOREIGN KEY (`idseguro`) REFERENCES `seguro_veiculo` (`idseguro`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `veiculo_ibfk_4` FOREIGN KEY (`idtipo_veiculo`) REFERENCES `tipo_veiculo` (`idtipo_veiculo`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
