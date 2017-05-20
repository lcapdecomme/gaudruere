-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Client :  mysql51-60.perso
-- Généré le :  Sam 20 Mai 2017 à 08:44
-- Version du serveur :  5.5.55-0+deb7u1-log
-- Version de PHP :  5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lagaudruere`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `chemin_photo` varchar(200) DEFAULT NULL,
  `ordre` int(11) NOT NULL,
  `tailleImage` varchar(1) NOT NULL,
  `positionImage` varchar(1) NOT NULL,
  `bordureImage` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `menu_id`, `titre`, `description`, `chemin_photo`, `ordre`, `tailleImage`, `positionImage`, `bordureImage`) VALUES
(1, 8, 'Tourisme', '<p>Les &eacute;v&eacute;nements majeurs du d&eacute;partement sont organis&eacute;s par la ville du Mans. Il s''agit bien souvent d''&eacute;v&eacute;nements sportifs automobiles :</p>\r\n<ul>\r\n<li>les 24 Heures du Mans auto, moto, camion (organisateur : ACO),</li>\r\n<li>le Grand Prix de France de Vitesse Moto (organisateur : Dorna).</li>\r\n</ul>\r\n<p>Tous les deux ans, la Sarthe vibre au rythme de [Le Mans Classic] , la r&eacute;tro sportive des 24 Heures du Mans. Mais la ville dispose &eacute;galement d''une &eacute;quipe en Championnat de France de Football de Ligue 2 (Le Mans Football Club). De m&ecirc;me, une &eacute;quipe dispute le Championnat de France de basket-ball Pro A (Le Mans Sarthe Basket).</p>\r\n<p>Les &eacute;v&eacute;nements culturels ne sont pas en reste. <strong>La 25e heure du Livre</strong> (courant Octobre) comme La Nuit des Chim&egrave;res (ao&ucirc;t) ou le Festival de l''&Eacute;pau (Mai) et Europa Jazz Festival (mai) se d&eacute;roulent dans l''ancienne capitale du Maine.<br /><br /><strong>Le Festival Artec</strong> se d&eacute;roule &agrave; la <em>Fert&eacute;-Bernard</em>, fin mai. Il r&eacute;unit des challengers de toute la France pour organiser des tournois de cr&eacute;ations robotiques. Elle est la plus prestigieuse comp&eacute;tition fran&ccedil;aise en la mati&egrave;re. <span style="text-decoration: underline;">De nombreuses &eacute;coles d''ing&eacute;nieurs font le d&eacute;placement chaque ann&eacute;e</span>.<br /><br /><strong>Le Ch&acirc;teau du Lude</strong> est un lieu int&eacute;ressant pour son architecture. Le Val de Loir est reconnu au niveau r&eacute;gional pour ses vins. Les fa&iuml;enceries de Malicorne-sur-Sarthe sont parmi les plus belles de la r&eacute;gion.<br /><br /><strong>Le zoo de La Fl&egrave;che</strong> est reconnu pour poss&eacute;der quelques races d''animaux rares. Il est une attraction au niveau national, ( plus de 300 000 visiteurs par an ), tout comme le zoo de Dou&eacute; en Maine-et-Loire. Le zoo de La Fl&', 'imageSarthe.jpg', 1, 'M', 'D', 'S'),
(2, 9, 'La chambre', '<p>La chambre accueillante offre une vue apaisante sur le parc.</p>', 'DSC06656.jpg', 1, 'G', 'D', 'A'),
(3, 23, 'Tarifs', '<p>Le tarif est&nbsp;&agrave; la nuit&nbsp;:<br />&ndash;2 personnes : 55&euro;<br />&ndash;1 personne : 44&euro;<br />&ndash;enfant : 10&euro;</p>\r\n<p>Ce tarif comprend&nbsp;: <br />&ndash; le petit d&eacute;jeuner<br />&ndash; les draps et linge de maison<br />&ndash; l&rsquo;acc&egrave;s Internet<br />&ndash; l&rsquo;emplacement parking ferm&eacute;</p>\r\n<p>Le mat&eacute;riel de b&eacute;b&eacute; (lit, chaise haute, baignoire) est &agrave; votre disposition &agrave; la demande.</p>\r\n<p>La maison ayant son petit chien et son chat, les animaux ne sont pas accept&eacute;s.</p>\r\n<p><a style="color: #777777; font-weight: bold; text-decoration: none;" href="../../reservation">R&eacute;servation &gt;&gt;&gt;</a></p>', 'images.jpg', 1, 'N', 'G', 'A'),
(4, 21, 'Châteaux de la Loire', '<p>L''expression ch&acirc;teaux de la Loire regroupe sous une m&ecirc;me appellation un ensemble de ch&acirc;teaux fran&ccedil;ais situ&eacute;s dans le val de Loire. Ils ont la particularit&eacute; d''avoir &eacute;t&eacute;, pour la plupart, b&acirc;tis ou fortement remani&eacute;s &agrave; la Renaissance fran&ccedil;aise, &agrave; une &eacute;poque o&ugrave; la cour des rois de France &eacute;tait install&eacute;e dans cette r&eacute;gion. La notion de ch&acirc;teaux de la Loire rev&ecirc;t principalement une acception touristique, li&eacute;e &agrave; cette exceptionnelle densit&eacute; de monuments &agrave; visiter. Il n''existe ainsi aucune liste exhaustive des ch&acirc;teaux dits &laquo; de la Loire &raquo;. Ils sont g&eacute;n&eacute;ralement circonscrits aux anciennes provinces d''Anjou, de Touraine et d''Orl&eacute;anais, mais certains auteurs1 &eacute;tendent le domaine des ch&acirc;teaux de la Loire jusqu''aux portes de Nantes, dans l''ancienne province de Bretagne2, et d''autres jusqu''&agrave; Nevers3.</p>', 'a6c94a92.jpg', 1, 'P', 'D', 'S'),
(5, 20, 'Activités sportives', '<p>Nombreux chemins balis&eacute;s de randonn&eacute;es p&eacute;destres et VTT en for&ecirc;t de Berc&eacute;.</p>\r\n<p>Piscines &agrave; Chateau du Loir et Ecommoy.</p>\r\n<p>Base de loisirs &agrave; Mar&ccedil;on: planche &agrave; voile, cano&euml;, tir &agrave; l''arc, baignade.</p>\r\n<p>Tepacap: parcours dans les branches au Mans</p>', '0-Te4MBCPA-activite-physique-2-roman-milert-fotolia-com-s-.png', 1, 'G', 'G', 'A'),
(6, 15, 'La terrasse', '<p>Vous pourrez prendre un bain de soleil sur la terrasse, avec une belle vue sur le parc et la campagne sarthoise.</p>', 'terrasse.jpg', 1, 'G', 'D', 'A'),
(7, 14, 'La salle de bain', '<p>La salle de bain poss&egrave;de une grande douche. Les toilettes sont s&eacute;par&eacute;es.</p>', 'DSCN3505.JPG', 1, 'G', 'D', 'A'),
(8, 10, 'Le petit salon', '<p>Le petit salon avec son coin lecture o&ugrave; vous pourrez vous d&eacute;tendre. Un plateau de bienvenue est &agrave; votre disposition.</p>', 'DSC06668.jpg', 1, 'G', 'D', 'A'),
(9, 16, 'Le jardin', '<p>Vous pourrez fl&acirc;ner pour vous d&eacute;tendre dans le grand parc de la maison.</p>', 'jardin.jpg', 1, 'G', 'D', 'A'),
(10, 17, 'Petit déjeuner', '<p style="text-align: left;">Des confitures et p&acirc;tisseries maison vous seront propos&eacute;es.</p>', 'DSC08020.JPG', 1, 'G', 'D', 'A'),
(12, 19, 'À voir , à faire', '<p>&nbsp;Jupilles : Mus&eacute;e du bois Carnutta</p>\r\n<p>&nbsp;Le Mans : mus&eacute;e de l''automobile, mus&eacute;e de la Reine B&eacute;rang&egrave;re, mus&eacute;e de Tess&eacute; ..</p>\r\n<p>Chahaignes et Mar&ccedil;on : caves des vignobles des coteaux du Loir</p>\r\n<p>La Fl&egrave;che: zoo</p>\r\n<p>Le Mans: la cath&eacute;drale et la vieille ville</p>', 'le_mans_vieux_mans12.jpg', 1, 'M', 'G', 'S'),
(14, 25, 'contact', '', 'contact.jpg', 1, '', '', ''),
(15, 24, 'acces', '', 'lemans_acces.jpg', 1, '', '', ''),
(16, 22, 'Quelques restaurants près de la Gaudruère', '<p>Vous pourrez trouver des restaurants &agrave; quelques kilom&egrave;tres de la Gaudru&egrave;re. Quelques adresses:</p>\r\n<p>Jupilles : la cr&ecirc;perie Le relais fleuri</p>\r\n<p>Beaumont Pied de Boeuf : Auberge le Relais du Cheval Blanc</p>\r\n<p>Thoir&eacute; sur Dinan : Le Dinan</p>\r\n<p>Chahaignes : Chez Miton</p>\r\n<p>Ch&acirc;teau du Loir : Plusieurs restaurants ...</p>', 'Penguins.jpg', 2, 'N', 'G', 'A'),
(22, 8, 'Nature et Loisirs', '<p>La Sarthe r&eacute;pond imm&eacute;diatement &agrave; votre besoin d&rsquo;&eacute;vasion et d&rsquo;activit&eacute;s de plein air.</p>\r\n<p>V&eacute;ritable &eacute;crin de verdure, la Sarthe est fi&egrave;re d&rsquo;&ecirc;tre la destination la plus bois&eacute;e de l&rsquo;ouest de la France.</p>\r\n<p>Elle poss&egrave;de 5000 km de chemins balis&eacute;s ouverts &agrave; tous les styles de randonn&eacute;es, 4000 km de rivi&egrave;res et ruisseaux pour des loisirs au fil de l&rsquo;eau et des paysages d&rsquo;une grande diversit&eacute; o&ugrave; s&rsquo;&eacute;panouissent toutes les pratiques sportives.</p>\r\n<p>Riche de superbes parcs animaliers et de loisirs, la Sarthe, c&rsquo;est un grand terrain d&rsquo;aventure pour toute la famille, &agrave; d&eacute;couvrir d&rsquo;urgence !</p>', '', 2, 'N', 'G', 'A'),
(23, 16, 'Parc', '<p>Le ruisseau</p>', 'ruisseau.jpg', 2, 'G', 'D', 'A');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `date`, `email`, `message`) VALUES
(8, 'bailleul elisabeth', '2017-04-29 21:08:52', 'babeth.bailleul@orange.fr', 'merci de nous reserver votre chambre pour le 24 mai suite a mon appel de ce soir .salutations'),
(11, 'VINCENT Marie-josé', '2017-05-08 14:46:20', 'jacky.lipovac@wanadoo.fr', 'Bonjour,\r\nJe suis passée par la demande de réservation de votre site, mais ne suis pas sûre que vous l''ayez bien reçue (nuit du 2 au 3/09/2017 pour 2 personnes). Cordialement,\r\nMj Vincent');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `ordre` int(11) NOT NULL,
  `chemin_photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `parent_id`, `titre`, `nom`, `type`, `description`, `ordre`, `chemin_photo`) VALUES
(1, NULL, 'Hébergement', 'hebergement', 'articles', '<p><strong>Bienvenue sur le site officiel de votre chambre d''h&ocirc;tes &agrave;&nbsp;Jupilles dans la Sarthe.</strong> Catherine vous accueille pour votre s&eacute;jour dans sa maison &agrave; la campagne, tout pr&egrave;s du Mans.</p>', 2, ''),
(2, NULL, 'Tourisme', 'tourisme', 'articles', '<p>Aux portes de l''Ouest, entre le Mans et Angers, la Sarthe a donn&eacute; son nom &agrave; une douce vall&eacute;e.</p>\r\n<p>En famille ou entre amis, pour un week-end ou vos prochaines vacances, venez d&eacute;couvrir ce joli coin de nature, ses activit&eacute;s fluviales, ses petits villages, sa gastronomie et son art de vivre.</p>', 3, ''),
(4, NULL, 'Renseignements', 'renseignements', 'articles', NULL, 4, ''),
(5, NULL, 'Réservation', 'reservation', 'reservation', '', 5, ''),
(6, NULL, 'Accueil', 'accueil', 'accueil', NULL, 1, ''),
(8, 2, 'Les environs', 'les-environs', 'article', '', 1, 'IMG_5818.JPG'),
(9, 1, 'La chambre', 'la-chambre', 'article', '', 1, 'DSC06656.jpg'),
(10, 1, 'Le petit salon', 'le-petit-salon', 'article', '', 2, 'DSC06668.jpg'),
(14, 1, 'La salle de bain', 'la-salle-de-bain', 'article', '', 3, 'DSCN3505.JPG'),
(15, 1, 'La terrasse', 'la-terrasse', 'article', '', 6, 'DSCN3478.JPG'),
(16, 1, 'Le jardin', 'le-jardin', 'article', '', 4, 'DSCN3490.JPG'),
(17, 1, 'Petit déjeuner', 'petit-dejeuner', 'article', '', 5, 'DSC08021.JPG'),
(19, 2, 'Musées', 'musees', 'article', '', 3, 'SICU_MUSEE_px_501__w_ouestfrance_.jpg'),
(20, 2, 'Activités sportives', 'activites-sportives', 'article', '', 2, 'imagesport.jpg'),
(21, 2, 'Châteaux de la Loire', 'chateaux-de-la-loire', 'article', '', 4, 'a6c94a92.jpg'),
(22, 2, 'Restaurants', 'restaurants', 'article', '', 6, '2348be8c.jpg'),
(23, 4, 'Tarifs', 'tarifs', 'article', '', 1, 'tarifs-pressing-alsace.jpg'),
(24, 4, 'Accès', 'acces', 'acces', '', 2, 'acces_route.png'),
(25, 4, 'Contact', 'contact', 'contact', '', 3, 'contact.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `parametres`
--

CREATE TABLE IF NOT EXISTS `parametres` (
  `id` int(11) NOT NULL,
  `descriptionContact` longtext NOT NULL,
  `descriptionAcces` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `nbMoisCalendrier` int(11) NOT NULL,
  `phraseBandeau` varchar(255) NOT NULL,
  `phraseRemerciement` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `parametres`
--

INSERT INTO `parametres` (`id`, `descriptionContact`, `descriptionAcces`, `email`, `nbMoisCalendrier`, `phraseBandeau`, `phraseRemerciement`) VALUES
(1, '<p><strong>Catherine Tesson</strong></p>\r\n<p>la Gaudruere</p>\r\n<p>72500 JUPILLES</p>\r\n<p>FRANCE</p>\r\n<p>&nbsp;</p>\r\n<p>T&eacute;l. : 02 43 44 18 61</p>\r\n<p>Mob. : 06 10 14 68 74</p>\r\n<p>&nbsp;</p>', '<p><strong><br /></strong></p>\r\n<p><strong>Catherine Tesson<br />La Gaudruere<br /></strong><strong>72500 Jupilles</strong><br /><strong>Tel. : 02 43 44 18 61<br />M</strong><strong>ob. : 06 10 14 68 74</strong></p>\r\n<p>&nbsp;</p>\r\n<p><span style="text-decoration: underline;">Acc&egrave;s au g&icirc;te</span></p>\r\n<ul>\r\n<li>Par le train : De Paris-Le Mans, gare situ&eacute;e &agrave; 40 km au Nord du g&icirc;te.</li>\r\n</ul>\r\n<ul>\r\n<li>Par l''autoroute A28, en venant de Paris : Prendre la Sortie 25 au rond point prendre &agrave; gauche la D338 sur 6,8 km direction Tours. Au rond point de Saint-Hubert prendre &agrave; gauche la D13 sur 4,8km. Puis tourner &agrave; droite sur une petite route, le g&icirc;te est au bout de cette route.</li>\r\n</ul>\r\n<ul>\r\n<li>Par l''autoroute A28 en venant de Tours : Prendre la sortie <span class="bold">26</span> et continuer sur <span class="bold">D305</span> et continuer sur 846 m. Au rond point, prendre &agrave; gauche la D305 et continuer sur 2,5 km. Au rond point prendre &agrave; gauche et continuer sur 1,3km.(Direction Le Mans). Au rond point prendre &agrave; gauche la D338 et continuer jusqu''au rond point de Saint-Hubert. Au rond point de Saint-Hubert prendre &agrave; droite la D13 sur 4,8km. Puis tourner &agrave; droite sur une petite route, le g&icirc;te est au bout de cette route.</li>\r\n</ul>\r\n<ul>\r\n<li>Coordonn&eacute;es GPS : N 47.78003&deg;&nbsp; E 0.41807&deg;</li>\r\n</ul>', 'contact@lagaudruere.fr', 9, 'Votre chambre d’hôtes en Sarthe', 'Site créé par les amis de DAVID');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `reservationValidee` tinyint(1) NOT NULL,
  `titre` varchar(3) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `rue1` varchar(75) NOT NULL,
  `rue2` varchar(75) NOT NULL,
  `rue3` varchar(75) NOT NULL,
  `codePostal` varchar(20) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `nbAdultes` smallint(6) NOT NULL,
  `nbEnfants` smallint(6) NOT NULL,
  `nbBebes` smallint(6) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `commentaire` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=277 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `dateDebut`, `dateFin`, `reservationValidee`, `titre`, `nom`, `prenom`, `rue1`, `rue2`, `rue3`, `codePostal`, `ville`, `pays`, `nbAdultes`, `nbEnfants`, `nbBebes`, `tel`, `email`, `commentaire`) VALUES
(179, '2017-05-18', '2017-05-21', 1, 'MR', 'LAMBERT', 'Yvan', '', '', '', '88220', 'URIMENIL', '', 2, 0, 0, '0642001512', '', ''),
(180, '2017-06-23', '2017-06-24', 1, 'MR', 'SIAU', 'luc', 'Wichelsesteenweg', '117', '', '09340', 'LEDE (BELGIQUE)', '', 2, 0, 0, '0494 937260', 'lucsiau@hotmail.com', 'réservation 1'),
(181, '2017-07-08', '2017-07-09', 1, 'MR', 'SIAU', 'Luc', 'Wichelsesteenweg', '117', '', '09340', 'LEDE (BELGIQUE)', '', 2, 0, 0, '0494 937260', 'lucsiau@hotmail.com', 'réservation 2'),
(183, '2017-06-16', '2017-06-18', 1, 'MR', 'FLEMAL', 'Christophe', '', '', '', '80000', 'AMIENS', '', 3, 0, 0, '0628844716', '', ''),
(184, '2017-05-15', '2017-05-16', 1, 'MME', 'CEVALEYRE', 'Odile', '1 rue de l''Oradou', '', '', '63000', 'CLERMONT FERRAND', '', 1, 0, 0, '0681476592', 'chevaleyre.odile@orange.fr', ''),
(214, '2017-04-15', '2017-04-17', 1, 'MR', 'CARETTE', 'jean jacques', '31 avenue Foch', '', '', '77500', 'CHELLES', '', 2, 0, 0, '0670579600', '', ''),
(217, '2017-02-25', '2017-02-26', 1, 'MR', 'CHAMBON', 'philippe', '9 rue du bel air', '', '9 rue du bel air', '94170', 'LE PERREUX SUR MARNE', '', 2, 0, 0, '0770425918', 'pat.paris@sfr.fr', ''),
(228, '2017-05-16', '2017-05-17', 1, 'MR', 'GODWIN', 'patrick', '119 rue neuve', '', '', '62100', 'CALAIS', '', 2, 0, 0, '06 15 66 01 04', '', ''),
(229, '2017-08-05', '2017-08-07', 1, 'MR', 'HUGEUX', 'Jean Michel', '8 rue George Sand', '', '', '59320', 'SEQUEDIN', '', 2, 0, 0, '06 58 47 49 22', '', ''),
(230, '2017-04-07', '2017-04-08', 1, 'MR', 'VANGHELUE', 'Bernard', '1 rue principale', '', '', '68470', 'MITZACH', '', 2, 0, 0, '06 87 79 71 27', '', ''),
(250, '2017-08-08', '2017-08-09', 1, 'MME', 'SMITH', 'Sylvia', '', '', '', '603882', 'ISLE OF WIGHT', '', 2, 0, 0, '0793272661', '', ''),
(251, '2017-03-31', '2017-04-02', 1, 'MR', 'ZAWDZKI', 'marc', '98 bd Gallieni', '', '', '92130', 'ISSY LES MOULINEAUX', '', 2, 0, 0, '0684283469', '', ''),
(252, '2017-03-24', '2017-03-26', 1, 'MR', 'BERGER', 'willy', '24 allée des perdrix', '', '', '45290', 'BOISMORAND', '', 2, 0, 0, '0638744660', '', ''),
(253, '2017-06-24', '2017-06-25', 1, 'MR', 'DE PUYBUSQUE', 'PAUL', '20 RUE FONTAINE', '', '', '59110', 'LA MADELEINE', '', 2, 0, 0, '0786521548', '', ''),
(266, '2017-06-03', '2017-06-05', 1, 'MR', 'LE FLOC''H', 'olivier', '17 rue MARGUERON', '', '', '37000', 'TOURS', '', 4, 0, 0, '0236703405', '', ''),
(267, '2017-05-24', '2017-05-25', 1, 'MR', 'BAILLEUL', 'jean_louis', '2 route de saint vigor', '', '', '14700', 'SAINT MARTIN DE MIEUX', '', 2, 0, 0, '0231904394', '', ''),
(268, '2017-09-02', '2017-09-03', 1, 'MME', 'VINCENT', 'MARIE-JOSE', '74 route de Pithiviers', '', '', '45450', 'INGRANNES', '', 2, 0, 0, '02 38 57 12 69', 'jacky.lipovac@wanadoo.fr', ''),
(271, '2017-05-13', '2017-05-14', 1, 'MR', 'METROT', 'Jean Claude', '8 chemin des campanules', '', '', '16430', 'CHAMPNIERS', '', 2, 0, 0, '0545374177', '', ''),
(272, '2017-07-05', '2017-07-06', 1, 'MR', 'PLANCKEEL', 'Jean Claude', '429 boulevard Diderot', '', '', '59240', 'DUNKERQUE', '', 2, 0, 0, '0616211405', '', ''),
(276, '2017-05-25', '2017-05-27', 1, 'MR', 'MARC', 'Didier', '38 rue des leups', '', '', '02270', 'MONCEAU LES LEUPS', '', 2, 0, 0, '0323565477', '', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_23A0E66CCD7E912` (`menu_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7D053A93727ACA70` (`parent_id`);

--
-- Index pour la table `parametres`
--
ALTER TABLE `parametres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `parametres`
--
ALTER TABLE `parametres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=277;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_23A0E66CCD7E912` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

--
-- Contraintes pour la table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `FK_7D053A93727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
