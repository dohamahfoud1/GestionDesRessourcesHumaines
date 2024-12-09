-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 09 juin 2023 à 08:20
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ressources_humaines`
--

-- --------------------------------------------------------

--
-- Structure de la table `absences`
--

DROP TABLE IF EXISTS `absences`;
CREATE TABLE IF NOT EXISTS `absences` (
  `idabs` int NOT NULL AUTO_INCREMENT,
  `matricule` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idabs`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `absences`
--

INSERT INTO `absences` (`idabs`, `matricule`, `date`) VALUES
(1, 1234, '2023-05-11');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `motDePasse` varchar(39) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `email`, `motDePasse`) VALUES
(1, 'admin123@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `annoncement`
--

DROP TABLE IF EXISTS `annoncement`;
CREATE TABLE IF NOT EXISTS `annoncement` (
  `idannonce` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`idannonce`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annoncement`
--


DROP TABLE IF EXISTS `annonce_public`;
CREATE TABLE IF NOT EXISTS `annonce_public` (
  `idannonce` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(200) NOT NULL,
  `date_pub` date NOT NULL,
  `résumé` text NOT NULL,
  `description` text NOT NULL,
  `métier` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  PRIMARY KEY (`idannonce`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annonce_public`
--

INSERT INTO `annonce_public` (`idannonce`, `titre`, `date_pub`, `résumé`, `description`, `métier`, `region`) VALUES
(1, 'Développeur Technique Salesforce - Casablanca', '2023-04-03', 'Tu rêves d’intégrer une entreprise de technologie innovante qui imagine et commercialise des solutions digitales ...', '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Tu r&ecirc;ves d&rsquo;int&eacute;grer une entreprise de technologie innovante qui imagine et commercialise des solutions digitales ?<br style=\"box-sizing: border-box;\" />Cette offre est faite pour toi !</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">A propos de ALTADOS Altados est un acteur de la transformation num&eacute;rique.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Avec ses collaborateurs, Altados accompagne la transformation de ses clients au Maroc et en France, depuis la r&eacute;flexion strat&eacute;gique jusqu\'&agrave; l&rsquo;ex&eacute;cution technologique et op&eacute;rationnelle, en faisant appel aux expertises de tous ses experts. Nous cultivons un esprit d&rsquo;&eacute;quipe tr&egrave;s fort autour des valeurs cl&eacute;s telles que le partage et la solidarit&eacute;.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Tu baigneras donc dans un environnement de travail id&eacute;al pour d&eacute;velopper ta cr&eacute;ativit&eacute; et prendre des initiatives.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Tu recherches un challenge passionnant ?<br style=\"box-sizing: border-box;\" />Tu appr&eacute;cies les environnements exigeants, diversifi&eacute;s ?<br style=\"box-sizing: border-box;\" />Tu aimes le mouvement, l&rsquo;action et travailler aupr&egrave;s de personnes passionn&eacute;es ?</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Nous t&rsquo;attendons !</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Dans une optique de renforcement de son &eacute;quipe de d&eacute;veloppeurs, Altados est actuellement &agrave; la recherche d\'un D&eacute;veloppeur Salesforce pour travailler sur les projets d\'un partenaire fran&ccedil;ais (Entreprise innovante et environnement challengeant).</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Au sein d&rsquo;une &eacute;quipe (constitu&eacute;e de 1 Business Analyst, 1 Scrum Master / chef de projet et 4/5 d&eacute;veloppeurs) fonctionnant sur la m&eacute;thodologie Scrum/Agile/SAFE, vous &ecirc;tes le Lead Dev des activit&eacute;s de d&eacute;veloppement concernant la plateforme du client (DIgitalisation de l&rsquo;Acquisition Client) en interaction avec le projet CRM Cards du client.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">L&rsquo;objectif du projet est de mettre &agrave; la disposition des entreprises un espace en ligne leur permettant de souscrire aux services, afin de disposer de cartes Pro utilisables dans les stations du groupe.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">L&rsquo;environnement est interfac&eacute; avec plusieurs syst&egrave;mes internes au projet ou externes :<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Une plateforme d&rsquo;&eacute;dition documentaire via API<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Un autre environnement Salesforce via un bus de donn&eacute;es<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Une plateforme de paiement en ligne<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Une plateforme de signature &eacute;lectronique<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Une plateforme de recherche d&rsquo;entreprises et scoring<br style=\"box-sizing: border-box;\" />Concr&egrave;tement, vous aurez quotidiennement &agrave; intervenir sur les 2 volets du projet men&eacute;s en parall&egrave;le :<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;BUILD (nouveaux parcours ou formulaires pour d&rsquo;&eacute;ventuelles nouvelles filiales)<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Participer aux diff&eacute;rentes instances de conception agile (Grooming, Global Backlog Refinement, Sprint Review/Planning, PI Planning) et de chiffrage (Scoping, Poker planning) li&eacute;es aux t&acirc;ches de d&eacute;veloppements sp&eacute;cifiques sur la plateforme (Apex, LWC, Flow builder)<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Analyse des besoins et des contraintes techniques<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;&Eacute;tude, chiffrage et budg&eacute;tisation du d&eacute;veloppement<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Affecter les User Stories (US) &agrave; l&rsquo;&eacute;quipe dev en fonction de la capacit&eacute; disponible<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Coaching, accompagnement et gestion des savoir-faire des &eacute;quipes techniques<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Prise en charge des phases de d&eacute;veloppement les plus complexes<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Mise en place et r&eacute;alisation si besoin des phases de tests techniques<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;&Ecirc;tre garant de la documentation technique du projet</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\"><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; color: #e03e2d;\">Profil recherch&eacute; :</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Comp&eacute;tences techniques d&eacute;veloppeur Salesforce (2 ans d\'exp&eacute;rience en d&eacute;veloppement Salesforce)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;D&eacute;veloppements en Apex (obligatoire)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Mise en place d&rsquo;API Rest (obligatoire)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Cr&eacute;ation de composants front avec des Lightning Web Component (obligatoire)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Flow (connaissances souhait&eacute;es)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;CommunityCloud (obligatoire)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Git (fortement souhait&eacute;e)<br style=\"box-sizing: border-box;\" />Comp&eacute;tences fonctionnelles et relationnelles :<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Posture et aisance relationnelle client<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Gestion du stress et des priorit&eacute;s</p>', 'Informatique, nouvelles technologies', 'Casablanca-Mohammedia'),
(2, 'Développeur Technique Salesforce - Casablanca', '2023-05-30', 'Tu rêves d’intégrer une entreprise de technologie innovante qui imagine et commercialise des solutions digitales ...', '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Tu r&ecirc;ves d&rsquo;int&eacute;grer une entreprise de technologie innovante qui imagine et commercialise des solutions digitales ?<br style=\"box-sizing: border-box;\" />Cette offre est faite pour toi !</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">A propos de ALTADOS Altados est un acteur de la transformation num&eacute;rique.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Avec ses collaborateurs, Altados accompagne la transformation de ses clients au Maroc et en France, depuis la r&eacute;flexion strat&eacute;gique jusqu\'&agrave; l&rsquo;ex&eacute;cution technologique et op&eacute;rationnelle, en faisant appel aux expertises de tous ses experts. Nous cultivons un esprit d&rsquo;&eacute;quipe tr&egrave;s fort autour des valeurs cl&eacute;s telles que le partage et la solidarit&eacute;.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Tu baigneras donc dans un environnement de travail id&eacute;al pour d&eacute;velopper ta cr&eacute;ativit&eacute; et prendre des initiatives.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Tu recherches un challenge passionnant ?<br style=\"box-sizing: border-box;\" />Tu appr&eacute;cies les environnements exigeants, diversifi&eacute;s ?<br style=\"box-sizing: border-box;\" />Tu aimes le mouvement, l&rsquo;action et travailler aupr&egrave;s de personnes passionn&eacute;es ?</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Nous t&rsquo;attendons !</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Dans une optique de renforcement de son &eacute;quipe de d&eacute;veloppeurs, Altados est actuellement &agrave; la recherche d\'un D&eacute;veloppeur Salesforce pour travailler sur les projets d\'un partenaire fran&ccedil;ais (Entreprise innovante et environnement challengeant).</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Au sein d&rsquo;une &eacute;quipe (constitu&eacute;e de 1 Business Analyst, 1 Scrum Master / chef de projet et 4/5 d&eacute;veloppeurs) fonctionnant sur la m&eacute;thodologie Scrum/Agile/SAFE, vous &ecirc;tes le Lead Dev des activit&eacute;s de d&eacute;veloppement concernant la plateforme du client (DIgitalisation de l&rsquo;Acquisition Client) en interaction avec le projet CRM Cards du client.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">L&rsquo;objectif du projet est de mettre &agrave; la disposition des entreprises un espace en ligne leur permettant de souscrire aux services, afin de disposer de cartes Pro utilisables dans les stations du groupe.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">L&rsquo;environnement est interfac&eacute; avec plusieurs syst&egrave;mes internes au projet ou externes :<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Une plateforme d&rsquo;&eacute;dition documentaire via API<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Un autre environnement Salesforce via un bus de donn&eacute;es<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Une plateforme de paiement en ligne<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Une plateforme de signature &eacute;lectronique<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Une plateforme de recherche d&rsquo;entreprises et scoring<br style=\"box-sizing: border-box;\" />Concr&egrave;tement, vous aurez quotidiennement &agrave; intervenir sur les 2 volets du projet men&eacute;s en parall&egrave;le :<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;BUILD (nouveaux parcours ou formulaires pour d&rsquo;&eacute;ventuelles nouvelles filiales)<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Participer aux diff&eacute;rentes instances de conception agile (Grooming, Global Backlog Refinement, Sprint Review/Planning, PI Planning) et de chiffrage (Scoping, Poker planning) li&eacute;es aux t&acirc;ches de d&eacute;veloppements sp&eacute;cifiques sur la plateforme (Apex, LWC, Flow builder)<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Analyse des besoins et des contraintes techniques<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;&Eacute;tude, chiffrage et budg&eacute;tisation du d&eacute;veloppement<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Affecter les User Stories (US) &agrave; l&rsquo;&eacute;quipe dev en fonction de la capacit&eacute; disponible<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Coaching, accompagnement et gestion des savoir-faire des &eacute;quipes techniques<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Prise en charge des phases de d&eacute;veloppement les plus complexes<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Mise en place et r&eacute;alisation si besoin des phases de tests techniques<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;&Ecirc;tre garant de la documentation technique du projet</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\"><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; color: #e03e2d;\">Profil recherch&eacute; :</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Comp&eacute;tences techniques d&eacute;veloppeur Salesforce (2 ans d\'exp&eacute;rience en d&eacute;veloppement Salesforce)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;D&eacute;veloppements en Apex (obligatoire)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Mise en place d&rsquo;API Rest (obligatoire)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Cr&eacute;ation de composants front avec des Lightning Web Component (obligatoire)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Flow (connaissances souhait&eacute;es)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;CommunityCloud (obligatoire)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Git (fortement souhait&eacute;e)<br style=\"box-sizing: border-box;\" />Comp&eacute;tences fonctionnelles et relationnelles :<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Posture et aisance relationnelle client<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Gestion du stress et des priorit&eacute;s</p>', 'Informatique, nouvelles technologies', 'Rabat-Salé-Kénitra'),
(3, 'Développeur Technique Salesforce - Casablanca', '2024-02-11', 'Tu rêves d’intégrer une entreprise de technologie innovante qui imagine et commercialise des solutions digitales ...', '<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Tu r&ecirc;ves d&rsquo;int&eacute;grer une entreprise de technologie innovante qui imagine et commercialise des solutions digitales ?<br style=\"box-sizing: border-box;\" />Cette offre est faite pour toi !</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">A propos de ALTADOS Altados est un acteur de la transformation num&eacute;rique.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Avec ses collaborateurs, Altados accompagne la transformation de ses clients au Maroc et en France, depuis la r&eacute;flexion strat&eacute;gique jusqu\'&agrave; l&rsquo;ex&eacute;cution technologique et op&eacute;rationnelle, en faisant appel aux expertises de tous ses experts. Nous cultivons un esprit d&rsquo;&eacute;quipe tr&egrave;s fort autour des valeurs cl&eacute;s telles que le partage et la solidarit&eacute;.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Tu baigneras donc dans un environnement de travail id&eacute;al pour d&eacute;velopper ta cr&eacute;ativit&eacute; et prendre des initiatives.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Tu recherches un challenge passionnant ?<br style=\"box-sizing: border-box;\" />Tu appr&eacute;cies les environnements exigeants, diversifi&eacute;s ?<br style=\"box-sizing: border-box;\" />Tu aimes le mouvement, l&rsquo;action et travailler aupr&egrave;s de personnes passionn&eacute;es ?</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Nous t&rsquo;attendons !</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Dans une optique de renforcement de son &eacute;quipe de d&eacute;veloppeurs, Altados est actuellement &agrave; la recherche d\'un D&eacute;veloppeur Salesforce pour travailler sur les projets d\'un partenaire fran&ccedil;ais (Entreprise innovante et environnement challengeant).</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Au sein d&rsquo;une &eacute;quipe (constitu&eacute;e de 1 Business Analyst, 1 Scrum Master / chef de projet et 4/5 d&eacute;veloppeurs) fonctionnant sur la m&eacute;thodologie Scrum/Agile/SAFE, vous &ecirc;tes le Lead Dev des activit&eacute;s de d&eacute;veloppement concernant la plateforme du client (DIgitalisation de l&rsquo;Acquisition Client) en interaction avec le projet CRM Cards du client.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">L&rsquo;objectif du projet est de mettre &agrave; la disposition des entreprises un espace en ligne leur permettant de souscrire aux services, afin de disposer de cartes Pro utilisables dans les stations du groupe.</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">L&rsquo;environnement est interfac&eacute; avec plusieurs syst&egrave;mes internes au projet ou externes :<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Une plateforme d&rsquo;&eacute;dition documentaire via API<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Un autre environnement Salesforce via un bus de donn&eacute;es<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Une plateforme de paiement en ligne<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Une plateforme de signature &eacute;lectronique<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Une plateforme de recherche d&rsquo;entreprises et scoring<br style=\"box-sizing: border-box;\" />Concr&egrave;tement, vous aurez quotidiennement &agrave; intervenir sur les 2 volets du projet men&eacute;s en parall&egrave;le :<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;BUILD (nouveaux parcours ou formulaires pour d&rsquo;&eacute;ventuelles nouvelles filiales)<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Participer aux diff&eacute;rentes instances de conception agile (Grooming, Global Backlog Refinement, Sprint Review/Planning, PI Planning) et de chiffrage (Scoping, Poker planning) li&eacute;es aux t&acirc;ches de d&eacute;veloppements sp&eacute;cifiques sur la plateforme (Apex, LWC, Flow builder)<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Analyse des besoins et des contraintes techniques<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;&Eacute;tude, chiffrage et budg&eacute;tisation du d&eacute;veloppement<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Affecter les User Stories (US) &agrave; l&rsquo;&eacute;quipe dev en fonction de la capacit&eacute; disponible<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Coaching, accompagnement et gestion des savoir-faire des &eacute;quipes techniques<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Prise en charge des phases de d&eacute;veloppement les plus complexes<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;Mise en place et r&eacute;alisation si besoin des phases de tests techniques<br style=\"box-sizing: border-box;\" />o &nbsp; &nbsp;&Ecirc;tre garant de la documentation technique du projet</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\"><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; color: #e03e2d;\">Profil recherch&eacute; :</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 15px; font-size: 16px; color: #676b72; font-family: Lato, sans-serif; letter-spacing: 0.1px; background-color: #ffffff; text-align: justify !important;\">Comp&eacute;tences techniques d&eacute;veloppeur Salesforce (2 ans d\'exp&eacute;rience en d&eacute;veloppement Salesforce)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;D&eacute;veloppements en Apex (obligatoire)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Mise en place d&rsquo;API Rest (obligatoire)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Cr&eacute;ation de composants front avec des Lightning Web Component (obligatoire)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Flow (connaissances souhait&eacute;es)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;CommunityCloud (obligatoire)<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Git (fortement souhait&eacute;e)<br style=\"box-sizing: border-box;\" />Comp&eacute;tences fonctionnelles et relationnelles :<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Posture et aisance relationnelle client<br style=\"box-sizing: border-box;\" />&bull; &nbsp; &nbsp;Gestion du stress et des priorit&eacute;s</p>', 'Informatique, nouvelles technologies', 'Settat'),
(4, 'Développeur Technique Salesforce - Casablanca', '2023-05-17', 'Tu rêves d’intégrer une entreprise de technologie innovante qui imagine et commercialise des solutions digitales ...', '<p>FDFDFDFDFDFDFDFFD</p>', 'Informatique, nouvelles technologies', 'Casablanca-Mohammedia');

-- --------------------------------------------------------

--
-- Structure de la table `avances`
--

DROP TABLE IF EXISTS `avances`;
CREATE TABLE IF NOT EXISTS `avances` (
  `idavance` int NOT NULL,
  `matricule` int NOT NULL,
  `avance` float DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `avances`
--

INSERT INTO `avances` (`idavance`, `matricule`, `avance`, `Date`) VALUES
(0, 1234, 200, '2023-05-13');

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

DROP TABLE IF EXISTS `candidats`;
CREATE TABLE IF NOT EXISTS `candidats` (
  `idcand` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(39) NOT NULL,
  `nom` varchar(39) NOT NULL,
  `dateNaissance` date NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `region` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `situation` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `niveau` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telephone` int NOT NULL,
  `secteur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cv` varchar(255) NOT NULL,
  PRIMARY KEY (`idcand`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `candidats`
--

INSERT INTO `candidats` (`idcand`, `prenom`, `nom`, `dateNaissance`, `email`, `region`, `situation`, `niveau`, `telephone`, `secteur`, `cv`) VALUES
(1, 'Doha', 'Mahfoud', '2003-11-28', 'mahfoud123d@gmail.com', 'Casablanca-Mohammedia', 'Célibataire', 'Bac+2', 700679012, 'Informatique, nouvelles technologies', 'DOHA MAHFOUD CV.pdf'),
(28, 'harimech', 'siham', '2002-02-09', 'dohamahfoud123@gmail.com', 'Béni Mellal-Khénifra', 'Marié(e)', 'Bac+3', 700145990, 'Gestion, comptabilité, finance', 'Compte rendu TP2.pdf'),
(29, 'salma', 'hafidi', '2000-02-11', 'dohamahfoud2003@gmail.com', 'Rabat-Salé-Kénitra', 'Célibataire', 'Bac+5', 601203490, 'RH, formation', 'Chapitre 3.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `conges`
--

DROP TABLE IF EXISTS `conges`;
CREATE TABLE IF NOT EXISTS `conges` (
  `idconge` int NOT NULL AUTO_INCREMENT,
  `datecreation` date NOT NULL,
  `periode` int NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `typeconge` varchar(100) NOT NULL,
  `matricule` int UNSIGNED NOT NULL,
  PRIMARY KEY (`idconge`),
  KEY `conges_ibfk_1` (`matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `conges`
--

INSERT INTO `conges` (`idconge`, `datecreation`, `periode`, `datedebut`, `datefin`, `typeconge`, `matricule`) VALUES
(19, '2023-04-23', 18, '2023-04-30', '2023-05-18', 'congé de formation individuelle', 1234),
(20, '2023-04-24', 5, '2023-06-25', '2023-06-30', 'congé de formation individuelle', 5678);

-- --------------------------------------------------------

--
-- Structure de la table `congesdemandes`
--

DROP TABLE IF EXISTS `congesdemandes`;
CREATE TABLE IF NOT EXISTS `congesdemandes` (
  `idconge` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `datecreation` date NOT NULL,
  `periode` int NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `typeconge` varchar(100) NOT NULL,
  `nom` varchar(39) NOT NULL,
  `idemp` int UNSIGNED NOT NULL,
  PRIMARY KEY (`idconge`),
  KEY `idemp` (`idemp`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `congesdemandes`
--

INSERT INTO `congesdemandes` (`idconge`, `datecreation`, `periode`, `datedebut`, `datefin`, `typeconge`, `nom`, `idemp`) VALUES
(4, '2024-08-25', 6, '2025-09-21', '2025-09-27', 'congé de formation individuelle', 'Doha Mahfoud', 73);

-- --------------------------------------------------------

--
-- Structure de la table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `iddoc` int NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `motif` varchar(100) NOT NULL,
  `Matricule` int NOT NULL,
  PRIMARY KEY (`iddoc`),
  KEY `mat_fk` (`Matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `documents`
--

INSERT INTO `documents` (`iddoc`, `type`, `motif`, `Matricule`) VALUES
(2, 'contrat de travail', 'contrat de travail', 1234);

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `idemp` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Matricule` int NOT NULL,
  `email` varchar(39) NOT NULL,
  `motdepasse` varchar(39) NOT NULL,
  `etat` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`idemp`),
  KEY `Matricule` (`Matricule`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`idemp`, `Matricule`, `email`, `motdepasse`, `etat`) VALUES
(72, 1234, 'employe123@gmail.com', '123456789', 1),
(73, 1245, 'dohamahfoud123@gmail.com', '123456', 0);

-- --------------------------------------------------------

--
-- Structure de la table `employesarchiver`
--

DROP TABLE IF EXISTS `employesarchiver`;
CREATE TABLE IF NOT EXISTS `employesarchiver` (
  `idsalarie` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(39) NOT NULL,
  `prenom` varchar(39) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `genre` varchar(40) NOT NULL,
  `cin` varchar(40) NOT NULL,
  `dateNaissance` date NOT NULL,
  `adresse` varchar(90) NOT NULL,
  `ville` varchar(40) NOT NULL,
  `pays` varchar(40) NOT NULL,
  `situation` varchar(40) NOT NULL,
  `cnss` varchar(40) NOT NULL,
  `modepaiment` varchar(40) NOT NULL,
  `numcompte` int NOT NULL,
  `societe` varchar(70) NOT NULL,
  `salaire` varchar(40) NOT NULL,
  `typepaiment` varchar(50) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `mission` varchar(200) NOT NULL,
  `datedabut` date NOT NULL,
  `datefin` date NOT NULL,
  PRIMARY KEY (`idsalarie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `employesarchiver`
--

INSERT INTO `employesarchiver` (`idsalarie`, `nom`, `prenom`, `email`, `genre`, `cin`, `dateNaissance`, `adresse`, `ville`, `pays`, `situation`, `cnss`, `modepaiment`, `numcompte`, `societe`, `salaire`, `typepaiment`, `fonction`, `mission`, `datedabut`, `datefin`) VALUES
(6, 'Mahfoud', 'Salma', 'salma123mah@gmail.com', 'Femme', '12345678', '1999-05-15', 'hay sedri gr2 R9 ', 'Casablanca', 'Maroc', 'Célibataire', '1235688', '', 1234567890, 'GPI', '10000', '', 'IT', 'développement', '2023-05-02', '2024-05-22');

-- --------------------------------------------------------

--
-- Structure de la table `fiche_salarie`
--

DROP TABLE IF EXISTS `fiche_salarie`;
CREATE TABLE IF NOT EXISTS `fiche_salarie` (
  `idsalarie` int NOT NULL AUTO_INCREMENT,
  `Matricule` int DEFAULT NULL,
  `nom` varchar(39) NOT NULL,
  `prenom` varchar(39) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `genre` varchar(40) NOT NULL,
  `cin` varchar(40) NOT NULL,
  `dateNaissance` date NOT NULL,
  `adresse` varchar(90) NOT NULL,
  `ville` varchar(40) NOT NULL,
  `pays` varchar(40) NOT NULL,
  `situation` varchar(40) NOT NULL,
  `nombreEnfant` int DEFAULT NULL,
  `cnss` varchar(40) NOT NULL,
  `modepaiment` varchar(40) NOT NULL,
  `numcompte` int NOT NULL,
  `societe` varchar(70) NOT NULL,
  `salaire` double NOT NULL,
  `typepaiment` varchar(50) NOT NULL,
  `fonction` varchar(100) NOT NULL,
  `mission` varchar(200) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  PRIMARY KEY (`idsalarie`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fiche_salarie`
--

INSERT INTO `fiche_salarie` (`idsalarie`, `Matricule`, `nom`, `prenom`, `email`, `genre`, `cin`, `dateNaissance`, `adresse`, `ville`, `pays`, `situation`, `nombreEnfant`, `cnss`, `modepaiment`, `numcompte`, `societe`, `salaire`, `typepaiment`, `fonction`, `mission`, `datedebut`, `datefin`) VALUES
(2, 1234, 'Mahfoud', 'Doha', 'mahfoud123d@gmail.com', 'Femme', '123456', '2002-11-28', 'Hay salama Gr2', 'Casablanca', 'Maroc', 'Célibataire', 0, '123456', 'Virement', 2147483647, 'GPI', 10000, 'Mensuel', 'Informatique - Développement Hardware', 'Developpeur', '2020-05-09', '2020-07-09'),
(3, 5678, 'siham', 'harimech', 'dohamahfoud123@gmail.com', 'Femme', '654321', '2023-02-12', 'hey sedri', 'Casablanca', 'Maroc', 'Célibataire', 0, '987654321', 'Virement', 2147483647, 'nap', 5000, 'Horaire', 'Informatique - Développement', 'Developpeur', '2023-11-12', '2024-02-12');

-- --------------------------------------------------------

--
-- Structure de la table `prets`
--

DROP TABLE IF EXISTS `prets`;
CREATE TABLE IF NOT EXISTS `prets` (
  `idpret` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `matricule` int NOT NULL,
  `montant` float DEFAULT NULL,
  `date` date NOT NULL,
  `periode` int NOT NULL,
  PRIMARY KEY (`idpret`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `prets`
--

INSERT INTO `prets` (`idpret`, `matricule`, `montant`, `date`, `periode`) VALUES
(1, 1234, 100, '2023-05-13', 2);

-- --------------------------------------------------------

--
-- Structure de la table `primes`
--

DROP TABLE IF EXISTS `primes`;
CREATE TABLE IF NOT EXISTS `primes` (
  `idprime` int NOT NULL AUTO_INCREMENT,
  `matricule` int NOT NULL,
  `indemnite` varchar(90) NOT NULL,
  `type` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `montant` float NOT NULL,
  PRIMARY KEY (`idprime`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `primes`
--

INSERT INTO `primes` (`idprime`, `matricule`, `indemnite`, `type`, `date`, `montant`) VALUES
(1, 1234, 'réguliére', 'prime d ancienneté', '2023-05-12', 100),
(2, 1245, 'irréguliére', 'prime de performance', '2023-05-12', 100);


DROP TABLE IF EXISTS `reunion`;
CREATE TABLE IF NOT EXISTS `reunion` (
  `idreunion` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `datereunion` date NOT NULL,
  `heurereunion` time(6) NOT NULL,
  PRIMARY KEY (`idreunion`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `reunion`
--

INSERT INTO `reunion` (`idreunion`, `titre`, `type`, `datereunion`, `heurereunion`) VALUES
(82, 'présentation de projet IOT', 'réunion interne', '2023-07-30', '15:59:00.000000'),
(83, 'reunionRH', 'réunion interne', '2023-04-24', '14:50:00.000000');

-- --------------------------------------------------------

--
-- Structure de la table `rh`
--

DROP TABLE IF EXISTS `rh`;
CREATE TABLE IF NOT EXISTS `rh` (
  `idrh` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(40) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `motdepasse` varchar(40) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `poste` varchar(70) NOT NULL,
  `departement` varchar(30) NOT NULL,
  PRIMARY KEY (`idrh`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `rh`
--

INSERT INTO `rh` (`idrh`, `prenom`, `nom`, `email`, `motdepasse`, `photo`, `poste`, `departement`) VALUES
(1, 'Doha', 'Mahfoud', 'mahfoud123d@gmail.com', '123456789', 'doha.jpg', 'Rh', 'ressources humaines'),
(3, 'ahlam', 'hilali', 'ahlamhilali123@gmail.com', '1234', '', 'Rh', 'ressource humaines');

-- --------------------------------------------------------

--
-- Structure de la table `supplemantaire`
--

DROP TABLE IF EXISTS `supplemantaire`;
CREATE TABLE IF NOT EXISTS `supplemantaire` (
  `idsupp` int NOT NULL AUTO_INCREMENT,
  `matricule` int NOT NULL,
  `date` date NOT NULL,
  `jourFerier` text NOT NULL,
  `prixJourFerier` float NOT NULL,
  `heuresSupp` float NOT NULL,
  `prixHeuresSupp` float NOT NULL,
  PRIMARY KEY (`idsupp`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `supplemantaire`
--

INSERT INTO `supplemantaire` (`idsupp`, `matricule`, `date`, `jourFerier`, `prixJourFerier`, `heuresSupp`, `prixHeuresSupp`) VALUES
(2, 1234, '2023-05-11', 'oui', 50, 8, 50),
(3, 5678, '2023-05-12', 'oui', 50, 8, 50),
(4, 1234, '2023-05-12', 'oui', 50, 8, 50);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `congesdemandes`
--
ALTER TABLE `congesdemandes`
  ADD CONSTRAINT `congesdemandes_ibfk_1` FOREIGN KEY (`idemp`) REFERENCES `employes` (`idemp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `mat_fk` FOREIGN KEY (`Matricule`) REFERENCES `employes` (`Matricule`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
