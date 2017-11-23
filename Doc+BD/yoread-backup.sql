-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 23/11/2017 às 18:03
-- Versão do servidor: 5.7.20-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `yoread`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avalia`
--

DROP TABLE IF EXISTS `avalia`;
CREATE TABLE `avalia` (
  `estrelas` int(11) DEFAULT NULL,
  `cod_publicacao` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `comenta`
--

DROP TABLE IF EXISTS `comenta`;
CREATE TABLE `comenta` (
  `data_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `descricao` varchar(2000) DEFAULT NULL,
  `cod_publicacao` int(11) NOT NULL,
  `cod_comentario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `publicacao`
--

DROP TABLE IF EXISTS `publicacao`;
CREATE TABLE `publicacao` (
  `data_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(50) NOT NULL,
  `cod_publicacao` int(11) NOT NULL,
  `sinopse` varchar(5000) DEFAULT NULL,
  `titulo` varchar(80) DEFAULT NULL,
  `link` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `publicacao`
--

INSERT INTO `publicacao` (`data_hora`, `email`, `cod_publicacao`, `sinopse`, `titulo`, `link`) VALUES
('2017-11-23 18:40:14', 'luizcanf@gmail.com', 1, 'Harry Potter é uma criança muito fofínea.', 'Harry Potter e a Pedra Filosofal', 'http://jkrola.uk');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`email`, `username`, `senha`, `nome`, `sobrenome`) VALUES
('john@doe.com', 'random', 'asdf', 'Random', 'Guy'),
('luizcanf@gmail.com', 'geleia', '123', 'Cesar', 'Faria');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `avalia`
--
ALTER TABLE `avalia`
  ADD PRIMARY KEY (`cod_publicacao`,`email`),
  ADD KEY `email_fk2` (`email`);

--
-- Índices de tabela `comenta`
--
ALTER TABLE `comenta`
  ADD PRIMARY KEY (`cod_comentario`),
  ADD KEY `cod_publicacao_fk` (`cod_publicacao`),
  ADD KEY `email_fk3` (`email`);

--
-- Índices de tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`cod_publicacao`),
  ADD KEY `email_fk` (`email`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `comenta`
--
ALTER TABLE `comenta`
  MODIFY `cod_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `cod_publicacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `avalia`
--
ALTER TABLE `avalia`
  ADD CONSTRAINT `cod_publicacao_fk2` FOREIGN KEY (`cod_publicacao`) REFERENCES `publicacao` (`cod_publicacao`),
  ADD CONSTRAINT `email_fk2` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Restrições para tabelas `comenta`
--
ALTER TABLE `comenta`
  ADD CONSTRAINT `cod_publicacao_fk` FOREIGN KEY (`cod_publicacao`) REFERENCES `publicacao` (`cod_publicacao`),
  ADD CONSTRAINT `email_fk3` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Restrições para tabelas `publicacao`
--
ALTER TABLE `publicacao`
  ADD CONSTRAINT `email_fk` FOREIGN KEY (`email`) REFERENCES `users` (`email`);
COMMIT;
