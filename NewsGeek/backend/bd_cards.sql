-- Criação do banco de dados
CREATE DATABASE `bd_melissa`;
USE `bd_melissa`;


CREATE TABLE `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `curtidas` int(7) NOT NULL,
  `views` int(7) NOT NULL,
  PRIMARY KEY (`id`)
)
