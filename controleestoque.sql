-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Out-2021 às 03:03
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `controleestoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `IDproduto` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `IDmarca` int(11) NOT NULL,
  `preco` double NOT NULL,
  `IDcor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`IDproduto`, `codigo`, `descricao`, `IDmarca`, `preco`, `IDcor`) VALUES
(1, 1, 'sukhoi 58', 1, 1, 1),
(2, 2, 'mig21', 2, 25, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor`
--

CREATE TABLE `cor` (
  `ID` int(11) NOT NULL,
  `cor` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cor`
--

INSERT INTO `cor` (`ID`, `cor`) VALUES
(1, 'vermelho'),
(2, 'preto'),
(3, 'verde'),
(4, 'amarelo'),
(5, 'bordo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `ID` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `operacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`ID`, `codigo`, `descricao`, `quantidade`, `data`, `operacao`) VALUES
(1, 1, 'sukhoi 58', 20, '2021-09-08 21:03:52', 'Entrada'),
(2, 1, 'sukhoi 58', 10, '2021-09-08 21:04:16', 'Entrada'),
(3, 2, 'mig21', 15, '2021-09-09 20:00:09', 'Entrada'),
(4, 2, 'mig21', 5, '2021-09-09 20:05:57', 'Entrada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `IDlogin` int(11) NOT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`IDlogin`, `login`, `senha`) VALUES
(1, 'henrique', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `ID` int(11) NOT NULL,
  `marca` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`ID`, `marca`) VALUES
(1, 'muller'),
(2, 'doss haus'),
(3, 'totenkopf'),
(4, 'schutzstaffel');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`IDproduto`),
  ADD KEY `fk_idcor_cnt_tabelaCor` (`IDcor`),
  ADD KEY `fk_idmarca_cnt_tabelaMarca` (`IDmarca`);

--
-- Índices para tabela `cor`
--
ALTER TABLE `cor`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IDlogin`);

--
-- Índices para tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `IDproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cor`
--
ALTER TABLE `cor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `IDlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
