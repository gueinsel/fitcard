-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.26 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para id6586505_fitcard
CREATE DATABASE IF NOT EXISTS `id6586505_fitcard` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `id6586505_fitcard`;

-- Copiando estrutura para tabela id6586505_fitcard.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela id6586505_fitcard.categorias: 5 rows
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `cat_name`) VALUES
	(0, 'Supermercado'),
	(1, 'Restaurante'),
	(2, 'Borracharia'),
	(3, 'Posto'),
	(4, 'Oficina');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Copiando estrutura para tabela id6586505_fitcard.empresas
CREATE TABLE IF NOT EXISTS `empresas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `razaoSoc` varchar(255) NOT NULL,
  `nomeFanta` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `dataCad` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `catID` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `agencia` varchar(50) NOT NULL,
  `conta` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela id6586505_fitcard.empresas: 1 rows
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` (`ID`, `razaoSoc`, `nomeFanta`, `cnpj`, `dataCad`, `email`, `telefone`, `endereco`, `cidade`, `estado`, `catID`, `status`, `agencia`, `conta`) VALUES
	(1, 'Guerric Inselberger 23554639800', 'Viking de Osasco', '3.1755.456/0001-95', '2020-01-11', 'guerric.insel@gmail.com', '(11) 9686-09989', 'Rua Progresso, Jd Boer, 135', 'Americana', 'SP', 2, 0, '000-1', '00.288-2');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
