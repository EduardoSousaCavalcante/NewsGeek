-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Set-2024 às 16:39
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Criação do banco de dados
CREATE DATABASE `bd_produto`;
USE `bd_produto`;

-- Definição de charset e collation
SET NAMES utf8mb4;

--
-- Banco de dados: `bd_produto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `estoque` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `estoque`) VALUES
(1, 'Caneta', 5),
(2, 'Borracha', 50),
(3, 'Grafite', 680),
(4, 'Mochila', 15),
(5, 'Notebook Intel', 8),
(6, 'Garrafa térmica', 40),
(7, 'Ryzen i7 9500X', 1);
-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
	`Nome` varchar(50) NOT NULL,
	`Usuario` varchar(20) NOT NULL,
	`Senha` int NOT NULL,
	`Tipo` int NOT NULL
);

--
-- Extrainda dados da tabela `usuario`
--

INSERT INTO `usuario` (`Nome`, `Usuario`, `Senha`, `Tipo`) VALUES
('Angolado Pacas kapakapa', 'AngolaForEver' ,12345678, 1),
('Eduardo Sousa Cavalcante', 'Edu_Da_Massa13',45678901, 2);
-- --------------------------------------------------------

ALTER TABLE `produtos`
  AUTO_INCREMENT=8;

COMMIT;
