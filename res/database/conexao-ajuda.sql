-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 30/03/2021 às 20:06
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

--
-- Despejando dados para a tabela `area_atuacao`
--

INSERT INTO `area_atuacao` (`id`, `nome`, `data_criacao`, `data_atualizacao`) VALUES
(1, 'Infantil', '2021-03-30 01:46:25', '2021-03-30 01:46:25');

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
  `id_area` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `uf` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `eventos`
--

INSERT INTO `eventos` (`id`, `nome`, `descricao`, `data_criacao`, `data_atualizacao`, `id_ong`, `id_area`, `tipo`, `cidade`, `uf`, `data`) VALUES
(1, 'Contação de Histórias', 'Contação de histórias para crianças da comunidade de Santo Amaro, em Recife - PE.', '2021-03-30 01:52:02', '2021-03-30 01:52:02', 1, 1, 'Evento', 'Olinda', 'PE', '2021-12-30'),
(2, 'Contação de Histórias', 'Contação de histórias para crianças da comunidade de Santo Amaro, em Recife - PE.', '2021-03-30 01:52:02', '2021-03-30 01:52:02', 1, 1, 'Evento', 'Recife', 'PE', '2021-12-31'),
(3, 'Contação de Histórias', 'Contação de histórias para crianças da comunidade de Santo Amaro, em Recife - PE.', '2021-03-30 01:52:02', '2021-03-30 01:52:02', 1, 1, 'Evento', 'Nazaré da Mata', 'PE', '2022-01-01'),
(4, 'Contação de Histórias', 'Contação de histórias para crianças da comunidade de Santo Amaro, em Recife - PE.', '2021-03-30 01:52:02', '2021-03-30 01:52:02', 1, 1, 'Evento', 'Caruaru', 'PE', '2022-01-02'),
(5, 'Contação de Histórias', 'Contação de histórias para crianças da comunidade de Santo Amaro, em Recife - PE.', '2021-03-30 01:52:02', '2021-03-30 01:52:02', 1, 1, 'Evento', 'Fortaleza', 'CE', '2022-01-03'),
(6, 'Contação de Histórias', 'Contação de histórias para crianças da comunidade de Santo Amaro, em Recife - PE.', '2021-03-30 01:52:02', '2021-03-30 01:52:02', 1, 1, 'Evento', 'João Pessoa', 'PR', '2022-01-05'),
(7, 'Arrecadação de Livros', 'Estamos arrecadando livros para montar uma biblioteca comunitária a fim de incentivar a leitura por parte das crianças.', '2021-03-30 16:53:40', '2021-03-30 16:53:40', 1, 1, 'Doação', 'Olinda', 'PE', '2022-03-25'),
(8, 'Arrecadação de Livros', 'Estamos arrecadando livros para montar uma biblioteca comunitária a fim de incentivar a leitura por parte das crianças.', '2021-03-30 16:53:40', '2021-03-30 16:53:40', 1, 1, 'Doação', 'Recife', 'PE', '2021-03-25'),
(9, 'Arrecadação de Livros', 'Estamos arrecadando livros para montar uma biblioteca comunitária a fim de incentivar a leitura por parte das crianças.', '2021-03-30 16:53:40', '2021-03-30 16:53:40', 1, 1, 'Doação', 'Garanhuns', 'PE', '2021-03-25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `incentivo`
--

CREATE TABLE `incentivo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `id_parceiro` int(11) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` timestamp NOT NULL DEFAULT current_timestamp()
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

--
-- Despejando dados para a tabela `ong`
--

INSERT INTO `ong` (`id`, `nome`, `cnpj`, `descricao`, `telefone`, `cidade`, `numero`, `cep`, `bairro`, `data_criacao`, `data_atualizacao`, `senha`) VALUES
(1, 'Criança Feliz', '98.765.432/0001-00', 'Instituto Criança Feliz', '(81) 3222-2222', 'Olinda', '25', '53000-000', 'Rio Doce', '2021-03-30 01:50:26', '2021-03-30 01:50:26', '54321');

-- --------------------------------------------------------

--
-- Estrutura para tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cnpj` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` timestamp NOT NULL DEFAULT current_timestamp()
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
-- Índices de tabela `incentivo`
--
ALTER TABLE `incentivo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_parceiros_incentivo` (`id_parceiro`);

--
-- Índices de tabela `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `parceiros`
--
ALTER TABLE `parceiros`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `incentivo`
--
ALTER TABLE `incentivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `parceiros`
--
ALTER TABLE `parceiros`
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

--
-- Restrições para tabelas `incentivo`
--
ALTER TABLE `incentivo`
  ADD CONSTRAINT `fk_parceiros_incentivo` FOREIGN KEY (`id_parceiro`) REFERENCES `parceiros` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
