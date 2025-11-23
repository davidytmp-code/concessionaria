-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/11/2025 às 16:42
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(100) NOT NULL,
  `cpf_cliente` char(11) NOT NULL,
  `email_cliente` varchar(100) DEFAULT NULL,
  `dt_nasc_cliente` date DEFAULT NULL,
  `fone_cliente` varchar(20) DEFAULT NULL,
  `endereco_cliente` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `cpf_cliente`, `email_cliente`, `dt_nasc_cliente`, `fone_cliente`, `endereco_cliente`) VALUES
(2, 'Lucas', '25648896522', 'lucas@gmail.com', '0000-00-00', '61987564743', NULL),
(3, 'Douglas', '54621897631', 'douglas@gmail.com', '0000-00-00', '61987564123', ''),
(4, 'Eduarda', '75395126479', 'eduarda@gmail.com', '0000-00-00', '6987545231', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_funcionario` int(11) NOT NULL,
  `nome_funcionario` varchar(100) NOT NULL,
  `email_funcionario` varchar(100) DEFAULT NULL,
  `fone_funcionario` varchar(20) DEFAULT NULL,
  `cpf_funcionario` char(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`id_funcionario`, `nome_funcionario`, `email_funcionario`, `fone_funcionario`, `cpf_funcionario`) VALUES
(2, 'Luiz', 'luiz@gmail.com', '629987465123', '05789425789'),
(3, 'Carlos Henrique', 'carloshenrique@gmail.com', '61987653201', '78563204123'),
(4, 'Marta', 'marta@gmail.com', '9887512305', '99865712345'),
(5, 'Julia', 'julia@gmail.com', '61995957575', '78945625845'),
(6, 'Fernando', 'fernando@gmail.com', '61989875630', '02154698756');

-- --------------------------------------------------------

--
-- Estrutura para tabela `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nome_marca` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `marca`
--

INSERT INTO `marca` (`id_marca`, `nome_marca`) VALUES
(2, 'Fiat'),
(3, 'BMW'),
(4, 'Jeep'),
(8, 'Hyundai');

-- --------------------------------------------------------

--
-- Estrutura para tabela `modelo`
--

CREATE TABLE `modelo` (
  `id_modelo` int(11) NOT NULL,
  `nome_modelo` varchar(45) NOT NULL,
  `placa_modelo` char(7) DEFAULT NULL,
  `cor_modelo` varchar(20) DEFAULT NULL,
  `ano_modelo` year(4) DEFAULT NULL,
  `marca_id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `modelo`
--

INSERT INTO `modelo` (`id_modelo`, `nome_modelo`, `placa_modelo`, `cor_modelo`, `ano_modelo`, `marca_id_marca`) VALUES
(3, 'Renegade', 'JPE3354', 'Prata', '2015', 4),
(4, 'HB20', 'PLS8082', 'Cinza', '2015', 8),
(5, 'Compass', 'GTU7459', 'Vermelho', '2020', 4),
(6, 'Toro', 'AUT7796', 'Preta', '2022', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `venda`
--

CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `data_venda` date NOT NULL,
  `valor_venda` decimal(10,2) DEFAULT NULL,
  `cliente_id_cliente` int(11) NOT NULL,
  `modelo_id_modelo` int(11) NOT NULL,
  `funcionario_id_funcionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `venda`
--

INSERT INTO `venda` (`id_venda`, `data_venda`, `valor_venda`, `cliente_id_cliente`, `modelo_id_modelo`, `funcionario_id_funcionario`) VALUES
(18, '2020-02-15', 160000.00, 4, 3, 4),
(19, '2025-08-01', 220000.00, 3, 6, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_funcionario`);

--
-- Índices de tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Índices de tabela `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id_modelo`),
  ADD KEY `fk_modelo_marca_idx` (`marca_id_marca`);

--
-- Índices de tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_venda`,`funcionario_id_funcionario`),
  ADD KEY `fk_venda_cliente1_idx` (`cliente_id_cliente`),
  ADD KEY `fk_venda_modelo1_idx` (`modelo_id_modelo`),
  ADD KEY `fk_venda_funcionario1_idx` (`funcionario_id_funcionario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id_modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `fk_modelo_marca` FOREIGN KEY (`marca_id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `fk_venda_cliente1` FOREIGN KEY (`cliente_id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venda_funcionario1` FOREIGN KEY (`funcionario_id_funcionario`) REFERENCES `funcionario` (`id_funcionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venda_modelo1` FOREIGN KEY (`modelo_id_modelo`) REFERENCES `modelo` (`id_modelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
