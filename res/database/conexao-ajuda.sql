-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28/03/2021 às 19:39
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `conexao-ajuda`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `area_atuacao`
--

CREATE TABLE `area_atuacao` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_ong` int(11) NOT NULL,
  `id_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ong`
--

CREATE TABLE `ong` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cnpj` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `voluntario`
--

CREATE TABLE `voluntario` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `disponibilidade` varchar(200) NOT NULL,
  `tipo_sanque` varchar(10) NOT NULL,
  `descricao` text NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `complemento` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `volun_atuacao`
--

CREATE TABLE `volun_atuacao` (
  `id_volun` int(11) NOT NULL,
  `id_atuacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `volun_evento`
--

CREATE TABLE `volun_evento` (
  `id_volun` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `area_atuacao`
--
ALTER TABLE `area_atuacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ong_evento` (`id_ong`),
  ADD KEY `id_area_evento` (`id_area`);

--
-- Índices de tabela `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `voluntario`
--
ALTER TABLE `voluntario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `area_atuacao`
--
ALTER TABLE `area_atuacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `voluntario`
--
ALTER TABLE `voluntario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `id_area_evento` FOREIGN KEY (`id_area`) REFERENCES `area_atuacao` (`id`),
  ADD CONSTRAINT `id_ong_evento` FOREIGN KEY (`id_ong`) REFERENCES `ong` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
