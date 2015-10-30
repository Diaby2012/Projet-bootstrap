-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 07 Avril 2015 à 21:53
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `memoire2`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE IF NOT EXISTS `connexion` (
  `mot_de_passe` varchar(15) NOT NULL,
  `identifiant` varchar(20) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  PRIMARY KEY (`mot_de_passe`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `connexion`
--

INSERT INTO `connexion` (`mot_de_passe`, `identifiant`, `categorie`) VALUES
('', '', 'entreprise'),
('1000', 'rachid', 'entreprise'),
('12345', 'yan', 'agent'),
('alaincf', 'alain', 'cf'),
('aqwsdfgh', 'lega', 'entreprise'),
('gbeton', 'gbeton', 'entreprise'),
('jean', 'jean', 'entreprise'),
('yvesdg', 'yves', 'directeur');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `nom` varchar(30) NOT NULL,
  `sujet` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`nom`, `sujet`, `phone`, `email`, `message`) VALUES
('tagueule', 'jemenfou', '0549310016', 'dvdfvsvsvs@yahoo.fr', 'fbbvsfvbfsvsfvdvsdvdsvsdvs');

-- --------------------------------------------------------

--
-- Structure de la table `engagement`
--

CREATE TABLE IF NOT EXISTS `engagement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nfich_eng` int(11) NOT NULL,
  `objet_eng` varchar(200) NOT NULL,
  `structure_eng` int(11) NOT NULL,
  `etude` double NOT NULL,
  `batiment` double NOT NULL,
  `travaux_public` double NOT NULL,
  `materiel_equipement_production` double NOT NULL,
  `materiel_transport` double NOT NULL,
  `formation` double NOT NULL,
  `prestation_service_externe` double NOT NULL,
  `autre` double NOT NULL,
  `publication` double NOT NULL,
  `controle_suivi` double NOT NULL,
  `montant_non_ventille` double NOT NULL,
  `total` double NOT NULL,
  `num_proj` varchar(15) NOT NULL,
  `verdict` varchar(20) NOT NULL,
  `date_verdict` varchar(10) NOT NULL,
  `approbation` varchar(20) NOT NULL,
  `id_ent` int(11) NOT NULL,
  `ods` varchar(5) NOT NULL,
  `date_approbation` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `engagement`
--

INSERT INTO `engagement` (`id`, `nfich_eng`, `objet_eng`, `structure_eng`, `etude`, `batiment`, `travaux_public`, `materiel_equipement_production`, `materiel_transport`, `formation`, `prestation_service_externe`, `autre`, `publication`, `controle_suivi`, `montant_non_ventille`, `total`, `num_proj`, `verdict`, `date_verdict`, `approbation`, `id_ent`, `ods`, `date_approbation`) VALUES
(1, 564643, 'THRYRYRYR', 364, 36346, 36436, 436, 3346, 0, 0, 0, 0, 0, 463, 0, 77027, '34553', 'valider', '01/04/2015', 'approuver', 1, 'ok', '01/04/2015'),
(2, 4434, 'REEGTRETTT', 0, 24442, 2424, 0, 0, 244, 4, 0, 0, 0, 0, 0, 27114, '34553', 'valider', '', 'approuver', 1, 'ok', ''),
(3, 42422, 'FRGREZRG', 0, 5345, 0, 0, 0, 235235, 2452, 0, 0, 0, 0, 0, 243032, '44455', 'valider', '', 'approuver', 2, 'ok', ''),
(5, 1, 'a', 1, 111, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 111, '', 'valider', '02/04/2015', 'approuver', 1, '', '02/04/2015'),
(6, 2, 'aqwzsx', 2, 222222, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 222222, '', 'valider', '02/04/2015', 'approuver', 1, '', '02/04/2015'),
(11, 1, 'pmlk', 2, 142, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 142, 'azertyt', 'valider', '01/04/2015', 'approuver', 2, '', '01/04/2015'),
(12, 1, 'dfdvsvsdvdsvsdvdsvsv', 2, 12.12454, 0, 0, 0, 123.1, 0, 456, 5, 0, 0, 5.11, 601.33454, 'nabitatah', 'valider', '01/04/2015', '', 1, '', ''),
(14, 2, 'fdvsv', 2, 2455, 0, 0, 0, 7455, 0, 0, 0, 0, 0, 0, 9910, 'nabitatah', 'valider', '02/04/2015', '', 1, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `num_tel` varchar(20) NOT NULL,
  `num_compte` varchar(20) NOT NULL,
  `responsable` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `adresse`, `num_tel`, `num_compte`, `responsable`) VALUES
(1, 'agitelmol', 'aa', '0455065', '21000660', 'rachid'),
(2, 'dvdvfd', 'aaaah', '0455065', '21000660', 'lega'),
(3, 'stebtp', 'aaaah', '0455065', '21000660', 'jean');

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

CREATE TABLE IF NOT EXISTS `operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_op` varchar(15) NOT NULL,
  `libelle_op` varchar(200) NOT NULL,
  `auto_prog` double NOT NULL,
  `date_insc` varchar(10) NOT NULL,
  `date_dem` varchar(10) NOT NULL,
  `date_ach` varchar(10) NOT NULL,
  `etude` double NOT NULL,
  `batiment` double NOT NULL,
  `travaux_public` double NOT NULL,
  `materiel_equipement_production` double NOT NULL,
  `materiel_transport` double NOT NULL,
  `formation` double NOT NULL,
  `prestation_service_externe` double NOT NULL,
  `autre` double NOT NULL,
  `publication` double NOT NULL,
  `controle_suivi` double NOT NULL,
  `montant_non_ventille` double NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id`,`num_op`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Contenu de la table `operation`
--

INSERT INTO `operation` (`id`, `num_op`, `libelle_op`, `auto_prog`, `date_insc`, `date_dem`, `date_ach`, `etude`, `batiment`, `travaux_public`, `materiel_equipement_production`, `materiel_transport`, `formation`, `prestation_service_externe`, `autre`, `publication`, `controle_suivi`, `montant_non_ventille`, `total`) VALUES
(17, 'DIABLE', 'TTTTTTTTTTT', 0, 'JJ/MM/AAAA', 'JJ/MM/AAAA', 'JJ/MM/AAAA', 46363, 36363, 0, 0, 0, 0, 0, 0, 0, 0, 0, 82726),
(18, 'aqwzsx', 'betbe', 0, 'JJ/MM/AAAA', 'JJ/MM/AAAA', 'JJ/MM/AAAA', 46363, 36363, 0, 0, 0, 0, 0, 0, 0, 0, 0, 82726),
(22, 'QWA', 'rfev', 0, 'JJ/MM/AAAA', 'JJ/MM/AAAA', 'JJ/MM/AAAA', 46363, 36363, 0, 0, 0, 0, 0, 0, 0, 0, 0, 82726),
(29, '998948959', 'hkigkjghjh', 2884840, 'JJ/MM/AAAA', 'JJ/MM/AAAA', 'JJ/MM/AAAA', 655, 0, 0, 0, 844984, 4846, 0, 0, 0, 0, 0, 850485),
(33, 'ddvd', 'dbdrghergerhee', 1454, '01/02/2014', '01/02/2015', '01/02/2015', 0, 1255, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1255),
(34, 'scdc125', 'vdgthhr', 1245, '01/02/2014', '02/02/2014', '02/01/2016', 0, 125454, 0, 0, 0, 0, 0, 0, 0, 0, 0, 125454),
(35, 'coconabile', 'leddcfddszssss', 1457.254, '01/02/2014', '02/02/2014', '01/02/2015', 12345, 0, 0, 1458, 154, 0, 0, 0, 0, 0, 0, 13957),
(36, 'gbtonnito', 'edcffffvvv', 12456.1254, '01/02/2014', '02/02/2014', '02/01/2016', 12345, 0, 0, 1245, 0, 0, 0, 0, 0, 0, 0, 13590),
(37, 'geronimo', 'lablache', 1457.254, '01/02/2014', '02/02/2014', '02/01/2016', 1245.12, 0, 0, 0, 1245.12, 0, 0, 0, 0, 0, 0, 2490.24),
(38, 'babli', 'dcdvd', 485555, '01/02/2014', '02/02/2014', '02/01/2016', 147.125, 0, 0, 1456, 0, 0, 0, 0, 0, 0, 0, 1603.125),
(39, 'azerrftff', 'ezgrzgergreger', 244555, '01/02/2014', '02/02/2014', '02/01/2016', 14557, 0, 0, 0, 0, 0, 175, 0, 0, 0, 0, 14732),
(41, 'ccvvbbnn', 'bbjbbjhjkjkkjk', 12345, '02/12/2015', '08/10/2016', '07/12/2016', 478, 486, 0, 0, 0, 0, 0, 0, 0, 0, 0, 964),
(43, 'zasqqs', 'ali', 1234, '01/02/2014', '02/02/2016', '02/02/2016', 1234, 0, 0, 0, 12345, 0, 0, 0, 0, 0, 0, 13579),
(44, '55533', 'FFDFDFF', 4553355, '11/11/2011', '11/04/2013', '22/11/2015', 55553, 0, 0, 0, 0, 0, 66336, 636, 0, 0, 0, 122525),
(45, 'GH44433', 'gSSDG', 46333, '11/11/2011', '11/04/2013', '12/02/2015', 5533, 0, 0, 0, 0, 0, 5553, 53335, 0, 0, 0, 64421),
(46, 'MOLI', 'LALOI', 6663, '11/11/2011', '11/04/2013', '11/08/2018', 6644, 0, 0, 0, 0, 0, 6664, 664, 0, 0, 0, 13972);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE IF NOT EXISTS `paiement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nfich_paie` int(11) NOT NULL,
  `objet_paie` varchar(200) NOT NULL,
  `structure_paie` int(11) NOT NULL,
  `etude` double NOT NULL,
  `batiment` double NOT NULL,
  `travaux_public` double NOT NULL,
  `materiel_equipement_production` double NOT NULL,
  `materiel_transport` double NOT NULL,
  `formation` double NOT NULL,
  `prestation_service_externe` double NOT NULL,
  `autre` double NOT NULL,
  `publication` double NOT NULL,
  `controle_suivi` double NOT NULL,
  `montant_non_ventille` double NOT NULL,
  `total` double NOT NULL,
  `id_eng` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `paiement`
--

INSERT INTO `paiement` (`id`, `nfich_paie`, `objet_paie`, `structure_paie`, `etude`, `batiment`, `travaux_public`, `materiel_equipement_production`, `materiel_transport`, `formation`, `prestation_service_externe`, `autre`, `publication`, `controle_suivi`, `montant_non_ventille`, `total`, `id_eng`) VALUES
(1, 1, 'gdgd', 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1),
(3, 1, 'fbfbfbf', 2, 1245.12, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0, 1259.12, 3),
(4, 1, 'fbfbfbf', 2, 1245.12, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0, 1259.12, 3),
(5, 1, 'fbfbfbf', 2, 1245.12, 0, 14, 0, 0, 0, 0, 0, 0, 0, 0, 1259.12, 3),
(6, 2, 'foustafousta', 2, 12.12454, 0, 0, 0, 1478.12, 0, 0, 145, 0, 0, 0, 1635.24454, 3),
(8, 1, 'alissabawa', 2, 2225, 0, 0, 0, 0, 0, 0, 5555, 0, 0, 0, 7780, 2),
(9, 1, 'fvfdvfd', 2, 1455, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1455, 2),
(10, 1, 'gdfvdf', 2, 12345, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12345, 2),
(12, 1, 'gnbfgnfnf', 2, 1455, 4785, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6240, 2);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_proj` varchar(15) NOT NULL,
  `libelle_proj` varchar(200) NOT NULL,
  `rub1` varchar(20) NOT NULL,
  `rub2` varchar(20) NOT NULL,
  `mont_projet` double NOT NULL,
  `date_approb` varchar(10) NOT NULL,
  `approb` varchar(15) NOT NULL,
  `date_dem` varchar(10) NOT NULL,
  `date_cf` varchar(10) NOT NULL,
  `obs` text NOT NULL,
  `num_ods` int(11) NOT NULL,
  `date_ach` varchar(10) NOT NULL,
  `verdict_cf` varchar(15) NOT NULL,
  `num_op` varchar(15) NOT NULL,
  `id_ent` int(11) NOT NULL,
  `facture` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`id`, `num_proj`, `libelle_proj`, `rub1`, `rub2`, `mont_projet`, `date_approb`, `approb`, `date_dem`, `date_cf`, `obs`, `num_ods`, `date_ach`, `verdict_cf`, `num_op`, `id_ent`, `facture`) VALUES
(2, '2', 'dvessgrgrb', 'etude', '', 1475.12455, '', '', '01/02/2014', '', 'bvfsbsfb', 0, '02/02/2014', '', 'fbfbbfbf', 2, ''),
(5, '5367Y', 'gfdgdfg', 'dgdfgdfg', 'gdgfgdf', 0, '', '', '', '', 'fdgdfgf', 0, '', '', 'aqwzsfghhhj', 20, ''),
(6, '5367', 'gfdgdfg', 'dgdfgdfg', 'gdgfgdf', 0, '', '', '', '', 'fdgdfgf', 0, '', '', 'aqwzsfghhhj', 20, ''),
(7, '34553', 'FHGGFHDFH', '566465464', '646464', 4634646, '', '', 'JJ/MM/AAAA', '', 'DFHDHFDGH', 0, 'JJ/MM/AAAA', '', 'azerty', 1, ''),
(12, '22882', '54444m', 'edyhdhdh', '', 25592, '', '', '12/02/2015', '', '', 0, '12/02/2016', '', 'byrr', 1, ''),
(17, '22882', 'ooooooooh', 'batiment', '', 14558.154, '', '', '02/02/2014', '', '', 0, '', '', 'aqwzsfghhhj', 2, ''),
(18, 'ali145', 'fgfdgfdgdfgdgdf', 'traveaux_public', '', 14558.154, '', '', '02/02/2014', '', '', 0, '02/01/2016', '', 'coconabileeeeh', 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
