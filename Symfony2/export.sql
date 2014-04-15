-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mer 18 Avril 2012 à 05:20
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `gaudruere`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `chemin_photo` varchar(200) DEFAULT NULL,
  `ordre` int(11) NOT NULL,
  `tailleImage` varchar(1) NOT NULL,
  `positionImage` varchar(1) NOT NULL,
  `bordureImage` varchar(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_23A0E66CCD7E912` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `menu_id`, `titre`, `description`, `chemin_photo`, `ordre`, `tailleImage`, `positionImage`, `bordureImage`) VALUES
(1, 8, 'Tourisme', '<p>Les &eacute;v&eacute;nements majeurs du d&eacute;partement sont organis&eacute;s par la ville du Mans. Il s''agit bien souvent d''&eacute;v&eacute;nements sportifs automobiles :</p>\r\n<ul>\r\n<li>les 24 Heures du Mans auto, moto, camion (organisateur : ACO),</li>\r\n<li>le Grand Prix de France de Vitesse Moto (organisateur : Dorna).</li>\r\n</ul>\r\n<p>Tous les deux ans, la Sarthe vibre au rythme de [Le Mans Classic] , la r&eacute;tro sportive des 24 Heures du Mans. Mais la ville dispose &eacute;galement d''une &eacute;quipe en Championnat de France de Football de Ligue 2 (Le Mans Football Club). De m&ecirc;me, une &eacute;quipe dispute le Championnat de France de basket-ball Pro A (Le Mans Sarthe Basket).</p>\r\n<p>Les &eacute;v&eacute;nements culturels ne sont pas en reste. <strong>La 25e heure du Livre</strong> (courant Octobre) comme La Nuit des Chim&egrave;res (ao&ucirc;t) ou le Festival de l''&Eacute;pau (Mai) et Europa Jazz Festival (mai) se d&eacute;roulent dans l''ancienne capitale du Maine.<br /><br /><strong>Le Festival Artec</strong> se d&eacute;roule &agrave; la <em>Fert&eacute;-Bernard</em>, fin mai. Il r&eacute;unit des challengers de toute la France pour organiser des tournois de cr&eacute;ations robotiques. Elle est la plus prestigieuse comp&eacute;tition fran&ccedil;aise en la mati&egrave;re. <span style="text-decoration: underline;">De nombreuses &eacute;coles d''ing&eacute;nieurs font le d&eacute;placement chaque ann&eacute;e</span>.<br /><br /><strong>Le Ch&acirc;teau du Lude</strong> est un lieu int&eacute;ressant pour son architecture. Le Val de Loir est reconnu au niveau r&eacute;gional pour ses vins. Les fa&iuml;enceries de Malicorne-sur-Sarthe sont parmi les plus belles de la r&eacute;gion.<br /><br /><strong>Le zoo de La Fl&egrave;che</strong> est reconnu pour poss&eacute;der quelques races d''animaux rares. Il est une attraction au niveau national, ( plus de 300 000 visiteurs par an ), tout comme le zoo de Dou&eacute; en Maine-et-Loire. Le zoo de La Fl&', 'imageSarthe.jpg', 1, 'M', 'D', 'S'),
(2, 9, 'La chambre', '<p>Ce g&icirc;te se compose d''un grand living avec coin salle &agrave; manger, Hi-fi, TV, coin cuisine &eacute;quip&eacute;e, 2 chambres avec lavabo, 1 salle de bain (bain et lavabo), 1 salle de douche, 1 WC s&eacute;par&eacute;.<br />Descriptif&nbsp; des chambres :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</p>\r\n<ul>\r\n<li>2 x 1 pers.</li>\r\n<li>2 x 1 pers.</li>\r\n<li>2 fauteuils lits dans le living &nbsp;</li>\r\n<li>1 lit B&eacute;b&eacute;</li>\r\n</ul>', 'DSCN3506.JPG', 1, 'M', 'D', 'A'),
(3, 23, 'Tarifs', '<p style="text-align: center;"><span style="color: #ff0000; background-color: #ffcc00;"><strong>Les tarifs de la saison</strong></span></p>\r\n<ol>\r\n<li>Aliquam et dui n<strong>on velit ultricies rutrum at quis tellus. Aliq</strong>uam</li>\r\n<li>turpis nibh, tincidunt a placerat sed, sollicitudin ac est. Nullam ullamcorper ultrices luctus. Proin at arcu id magna tincidunt co<em>nsectetu</em>r eu id augue. Duis auctor mi ac turpis cursus sed po</li>\r\n<li>rttitor nulla vulputate. Pellentesque a odio urna. Sed consequat arcu eget nibh elementum varius. Fusce pellentesque viverra velit. Proin vehicula tincidunt sapien nec imperdiet. Donec</li>\r\n<li>&nbsp;dapibus, lectus in tempus <span style="text-decoration: underline;">pellentesque</span>, quam nibh blandit purus, a egestas ligula eros luctus dui. Suspendisse magna quam, vulputate non porttitor ut, tristique et nisl.</li>\r\n<li>bim !</li>\r\n<li>sjskl djflsdjflsdjflskdf</li>\r\n</ol>', 'images.jpg', 1, '', '', ''),
(4, 21, 'Châteaux de la Loire', 'L''expression châteaux de la Loire regroupe sous une même appellation un ensemble de châteaux français situés dans le val de Loire. Ils ont la particularité d''avoir été, pour la plupart, bâtis ou fortement remaniés à la Renaissance française, à une époque où la cour des rois de France était installée dans cette région.  La notion de châteaux de la Loire revêt principalement une acception touristique, liée à cette exceptionnelle densité de monuments à visiter. Il n''existe ainsi aucune liste exhaustive des châteaux dits « de la Loire ». Ils sont généralement circonscrits aux anciennes provinces d''Anjou, de Touraine et d''Orléanais, mais certains auteurs1 étendent le domaine des châteaux de la Loire jusqu''aux portes de Nantes, dans l''ancienne province de Bretagne2, et d''autres jusqu''à Nevers3.', 'chateau.jpg', 1, '', '', ''),
(5, 20, 'Activités sportives', 'Nam non elit et nulla ultrices venenatis. Aenean volutpat interdum rutrum. Donec tristique euismod turpis, et egestas risus feugiat eget. Sed mauris mauris, lacinia vel pharetra feugiat, adipiscing ut elit. Maecenas imperdiet dui ut risus venenatis ultrices. Proin condimentum lectus dapibus sem elementum quis euismod neque auctor. Mauris vehicula, neque eget scelerisque ornare, nisi massa luctus sapien, eget viverra quam tortor non enim. Ut molestie volutpat dui, ut fringilla urna eleifend eget. Nulla facilisi. Suspendisse magna dui, ultrices mollis scelerisque eget, pretium nec orci. Proin laoreet, dolor a sodales feugiat, enim sem tempor ante, sit amet egestas ipsum turpis in quam. Praesent ut nibh orci, sit amet porttitor sem. Mauris a sollicitudin purus. Aliquam erat volutpat. Maecenas sed mauris dui, a auctor quam.\n\nInteger non neque ante. Nullam placerat, lacus sit amet eleifend gravida, lorem mi laoreet neque, lobortis auctor augue neque viverra velit. Donec cursus euismod urna vitae tempus. Sed ornare, augue quis sollicitudin convallis, nulla arcu cursus dui, ac rutrum ipsum orci et massa. Integer varius leo eget eros aliquet sed suscipit nunc congue. Praesent mauris mi, blandit sed posuere convallis, pretium eu lectus. Nunc venenatis consectetur nibh, non mattis erat dapibus quis. Quisque quis augue eget turpis luctus rutrum ac et purus. Proin gravida euismod nibh ac eleifend. Quisque nunc urna, volutpat in posuere vitae, facilisis sit amet sem. ', 'sport.jpg', 1, '', '', ''),
(6, 15, 'La terrasse', '<p>Sur la terrasse, il vous sera possible de vous reposer.</p>', 'DSCN2994.JPG', 1, 'P', 'D', 'A'),
(7, 14, 'La salle de bain', '', 'DSCN3505.JPG', 1, 'G', 'D', 'A'),
(8, 10, 'Le petit Salon', '<p>petit salon avec coin lecture o&ugrave; vous pourrez vous d&eacute;tendre. Un plateau de bienvenue est &agrave; votre disposition</p>', 'DSCN3507.JPG', 1, 'G', 'G', 'S'),
(9, 16, 'Le jardin', '', 'jardin1.jpg', 1, '', '', ''),
(10, 17, 'Petit déjeuner en extérieur', 'La salle à manger où vous prendrez votre petit déjeuner. Des confitures et pâtisseries maison vous seront proposées.', 'terrasse2.jpg', 1, '', '', ''),
(11, 18, 'Villes et villages', 'Morbi sodales dui vel massa malesuada pretium dictum non dolor. Nam magna erat, suscipit et auctor at, fermentum tempus est. Vivamus porttitor facilisis felis, a dignissim eros eleifend in. Nunc sit amet velit a tellus eleifend sagittis ut quis turpis. In sagittis ultricies metus at convallis. Nulla eget turpis ligula. Nulla pretium, velit vel ornare pulvinar, dolor lectus ultrices est, auctor porta ante arcu iaculis augue. Cras ultricies, libero convallis lacinia semper, orci sem euismod lacus, nec consequat turpis risus in est. Fusce cursus vehicula turpis sit amet gravida. Fusce arcu mi, accumsan eget lobortis nec, feugiat ac ante. Vivamus hendrerit, neque ac auctor mollis, augue sem ultricies nibh, vel pharetra neque mauris vel tortor. Sed iaculis venenatis nisl, nec rutrum risus molestie eget. Sed lectus sem, adipiscing nec facilisis et, elementum ut ipsum. Aliquam fringilla, lorem nec tempus aliquet, lectus nisi hendrerit orci, vitae mattis nibh leo at magna. Suspendisse vitae eros non urna consequat rutrum. Nulla facilisi.\n\nNullam lacinia sapien vel nisl accumsan a ornare purus condimentum. Morbi id mauris eu lorem vehicula porttitor. Mauris id mi sem, a tempus diam. Suspendisse vulputate, velit id laoreet varius, nibh nunc auctor ante, fringilla tincidunt nulla sem nec eros. Quisque vel bibendum nulla. Vivamus lacinia, nibh in tempus feugiat, lorem arcu rhoncus nisl, at congue mauris erat quis lorem. Nulla lobortis, ipsum at pellentesque porta, ligula lacus pellentesque metus, non posuere sem sem nec dui. Sed malesuada metus vitae augue cursus et condimentum mauris sollicitudin. Sed feugiat, metus eget malesuada tristique, risus erat auctor nisi, euismod posuere mi lectus id sem. Sed vitae libero et lacus varius lobortis. Proin id lacus et diam ornare consequat vitae ac eros. Quisque auctor, metus at fermentum dictum, turpis quam porttitor orci, venenatis mattis orci dolor in urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubi', 'villages.jpg', 1, '', '', ''),
(12, 19, 'Musées à voir', 'Quisque massa diam, tincidunt at bibendum eu, placerat luctus justo. Sed egestas iaculis pulvinar. Cras vel massa at tortor blandit eleifend. Nam leo augue, consequat in varius eget, vehicula nec orci. Nunc eu placerat nulla. Nunc a tortor ipsum, id luctus est. Proin hendrerit tempor felis pulvinar dictum. Nam lobortis lobortis tellus vel auctor. In nec orci eu lorem mollis adipiscing at vel nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;\n\nMaecenas tristique pellentesque congue. In convallis leo sit amet tellus venenatis consectetur. Nam vitae risus venenatis diam sodales tristique. Nullam sit amet quam sit amet mi porttitor porta. Duis mauris ligula, tristique eget luctus a, vehicula sed nisi. Proin facilisis arcu et leo ultrices gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque pretium, neque eget congue pretium, dolor tellus mollis leo, in placerat arcu purus eget dui. Nam volutpat, arcu ut iaculis suscipit, quam augue elementum velit, vitae pulvinar nisl libero quis nisl. Nunc sagittis odio non neque vestibulum ornare. Nunc enim neque, molestie sed tempus sit amet, condimentum vel massa. Etiam vestibulum condimentum magna, quis consectetur massa tempus at. Nunc ut ipsum metus, sed posuere ipsum. Morbi vel lectus a lectus dictum feugiat id quis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n\nAliquam lacinia blandit massa ac consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque placerat fringilla eleifend. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent odio odio, elementum id hendrerit vel, tincidunt quis mauris. Nunc eu arcu ac elit dictum pretium. Etiam ut lorem vel neque ornare dapibus id sit amet arcu. Duis fermentum, mauris ac vehicula scelerisque, lacus quam gra', '24-heures-du-mans-musee.jpg', 1, '', '', ''),
(13, 22, 'Restaurants', 'Donec tempor elit a ligula vestibulum malesuada. Fusce gravida, dui a pellentesque pulvinar, lectus risus tristique sapien, eget pellentesque dui orci id orci. Vestibulum iaculis libero purus. Quisque pulvinar luctus arcu ac auctor. Praesent et mauris mauris, et elementum mauris. Donec varius, elit eget euismod lacinia, lacus dolor molestie mauris, id tincidunt eros magna a tellus. Phasellus mollis nulla sed mauris condimentum vel hendrerit nisi interdum. Maecenas faucibus, lacus dapibus tristique dictum, ante eros fringilla lectus, ac consectetur felis quam eu est. Sed at convallis neque. Pellentesque gravida imperdiet consectetur. Pellentesque vitae tortor sit amet orci adipiscing pharetra nec eget risus. Quisque eget elit lectus, et semper ligula. Aliquam quis tellus nunc, et posuere neque. Nam augue nibh, molestie vel lobortis vel, tempus sit amet nunc. Vivamus mattis, risus non facilisis egestas, felis augue pretium dolor, sit amet facilisis tortor leo vel dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n\r\nProin ut sem quam, sit amet dapibus lectus. Cras vitae orci vel sem ornare laoreet eu a magna. Suspendisse sed sapien metus, quis ornare arcu. Aenean id lobortis justo. Proin sollicitudin turpis ac purus vulputate mollis. Praesent mollis metus vitae nisi sagittis a tristique nunc scelerisque. Proin sit amet arcu vitae mauris accumsan gravida a rutrum metus. Donec ac libero eu mi commodo vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse tempor imperdiet purus, id ullamcorper erat mollis eget. Aenean non dui elit, sed malesuada est.\r\n\r\nCurabitur quis tortor ante, nec ornare urna. Suspendisse nunc orci, elementum id posuere ut, vestibulum ut mauris. Praesent lobortis lacinia justo vitae bibendum. Maecenas sed purus felis. Cras eu lorem dui. Donec eleifend interdum risus, mattis ultrices arcu pulvinar porta. Mauris tempus dictum elit id imperdiet.', '300px-Restaurant.jpg', 1, '', '', ''),
(14, 25, 'contact', '', 'contact.jpg', 1, '', '', ''),
(15, 24, 'acces', '', 'lemans_acces.jpg', 1, '', '', ''),
(16, 22, 'Za un autre resto', '<p style="text-align: center;"><strong>Sur la route des Grands Crus de Bourgogne&hellip;</strong> Au beau milieu des vignes entre Nuits-St-Georges et Gevrey-Chambertin, deux noms qui d&eacute;j&agrave; invite<span style="color: #ff0000;">nt au voyage, un peti</span>t village tout doux et le Restaurant Simon, rendez-vous gastronomique incontournable pour tous les gourmands, gourmets de France et de Navarre !</p>\r\n<ol>\r\n<li>Poussez la porte de cette maison lumineuse,</li>\r\n<li>entrez dans l&rsquo;atmosph&egrave;re chaleureuse de la famille Simon,</li>\r\n<li>d&eacute;couvrez l&rsquo;&eacute;l&eacute;gante salle &agrave; manger,</li>\r\n</ol>\r\n<p>le d&eacute;licieux accueil de Carole et enfin savourez la cuisine de Fran&ccedil;ois Simon ancr&eacute;e dans la tradition&hellip;</p>\r\n<p>une belle cuisine de c&oelig;ur spontan&eacute;e et sinc&egrave;re accompagn&eacute;e d&rsquo;une belle carte des vins o&ugrave; grands crus et c&eacute;pages moins connus se c&ocirc;toient.</p>', '', 2, '', '', ''),
(22, 8, 'Nature et Loisirs', '<p>La Sarthe r&eacute;pond imm&eacute;diatement &agrave; votre besoin d&rsquo;&eacute;vasion et d&rsquo;activit&eacute;s de plein air.</p>\r\n<p>V&eacute;ritable &eacute;crin de verdure, la Sarthe est fi&egrave;re d&rsquo;&ecirc;tre la destination la plus bois&eacute;e de l&rsquo;ouest de la France.</p>\r\n<p>Elle poss&egrave;de 5000 km de chemins balis&eacute;s ouverts &agrave; tous les styles de randonn&eacute;es, 4000 km de rivi&egrave;res et ruisseaux pour des loisirs au fil de l&rsquo;eau et des paysages d&rsquo;une grande diversit&eacute; o&ugrave; s&rsquo;&eacute;panouissent toutes les pratiques sportives.</p>\r\n<p>Riche de superbes parcs animaliers et de loisirs, la Sarthe, c&rsquo;est un grand terrain d&rsquo;aventure pour toute la famille, &agrave; d&eacute;couvrir d&rsquo;urgence !</p>', '', 2, 'N', 'G', 'A');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `date`, `email`, `message`) VALUES
(1, 'test1', '2012-03-31 06:35:54', 'pof@free.fr', 'ezaea'),
(2, 'fggdfg dfg dgd', '2012-03-31 07:58:45', 'derdesder@free.fr', 'hfgh fgh fgh f'),
(3, 'fggdfg dfg dgd', '2012-03-31 07:59:27', 'derdesder@free.fr', 'hfgh fgh fgh f');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `ordre` int(11) NOT NULL,
  `chemin_photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7D053A93727ACA70` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `parent_id`, `titre`, `nom`, `type`, `description`, `ordre`, `chemin_photo`) VALUES
(1, NULL, 'Hébergement', 'hebergement', 'articles', '<p>Bienvenue sur le site officiel de notre g&icirc;te rural de Jupilles dans la Sarthe. Catherine vous accueille pour vos vacances dans son g&icirc;te &agrave; la campagne, tout pr&egrave;s du Mans. Jupilles est le lieu id&eacute;al pour vos locations de vacances. Vous b&eacute;n&eacute;ficiez du confort d''une villa moderne, tout en appr&eacute;ciant l''authenticit&eacute; et le charme des maisons traditionnelles. Nos amis les animaux sont accept&eacute;s et m&ecirc;me les bienvenus !!</p>', 2, ''),
(2, NULL, 'Tourisme', 'tourisme', 'articles', '<p>Aux portes de l''Ouest, entre le Mans et Angers, la Sarthe a donn&eacute; son nom &agrave; une douce vall&eacute;e.</p>\r\n<p>En famille ou entre amis, pour un week-end ou vos prochaines vacances, venez d&eacute;couvrir ce joli coin de nature, ses activit&eacute;s fluviales, ses petits villages, sa gastronomie et son art de vivre.</p>', 3, ''),
(4, NULL, 'Renseignements', 'renseignements', 'articles', 'Les tarifs de location comprennent la fourniture de l''électricité et du chauffage. Le gîte peut accueillir au maximum 4 personnes. Si le nombre de locataires dépasse cette capacité, et sans accord préalable, le propriétaire se réserve le droit de refuser les personnes supplémentaires ou de percevoir une majoration. Une caution vous sera demandée à votre arrivée de 150.00 €. Possibilité d''un forfait nettoyage à régler au propriétaire en fin de séjour : 50.00 €', 4, ''),
(5, NULL, 'Réservation', 'reservation', 'reservation', '', 5, ''),
(6, NULL, 'Accueil', 'accueil', 'accueil', NULL, 1, ''),
(8, 2, 'Les environs', 'les-environs', 'article', '', 1, '5855649.jpg'),
(9, 1, 'La chambre', 'la-chambre', 'article', '', 1, 'DSCN3506.JPG'),
(10, 1, 'Le petit Salon', 'le-petit-salon', 'article', '', 2, 'DSCN3507.JPG'),
(14, 1, 'La salle de bain', 'la-salle-de-bain', 'article', '', 3, 'DSCN3505.JPG'),
(15, 1, 'La terrasse', 'la-terrasse', 'article', '', 6, 'DSCN2994.JPG'),
(16, 1, 'Le jardin', 'le-jardin', 'article', '', 4, 'DSCN3490.JPG'),
(17, 1, 'Petit déjeuner', 'petit-dejeuner', 'article', '', 5, 'DSCN2986.JPG'),
(18, 2, 'Villes et villages', 'villes-et-villages', 'article', '', 2, 'le_mans_vieux_mans12.jpg'),
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descriptionContact` longtext NOT NULL,
  `descriptionAcces` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `nbMoisCalendrier` int(11) NOT NULL,
  `phraseBandeau` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `parametres`
--

INSERT INTO `parametres` (`id`, `descriptionContact`, `descriptionAcces`, `email`, `nbMoisCalendrier`, `phraseBandeau`) VALUES
(1, '<p>page contact !!!</p>\r\n<p>fdsfs fghf</p>\r\n<p>fsdf</p>', '<p>page acces</p>\r\n<p>jfsdkjfsdl</p>', 'pof@free.fr', 12, 'Votre chambre d’hôtes en Sarthe');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `commentaire` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `dateDebut`, `dateFin`, `reservationValidee`, `titre`, `nom`, `prenom`, `rue1`, `rue2`, `rue3`, `codePostal`, `ville`, `pays`, `nbAdultes`, `nbEnfants`, `nbBebes`, `tel`, `email`, `commentaire`) VALUES
(1, '2012-04-16', '2012-04-19', 1, 'mr', 'test', 'paul', 'des oiseaux', '', '', '31000', 'Toulouse', '', 2, 4, 0, '', '', ''),
(2, '2012-06-14', '2012-06-15', 0, 'Mdm', 'Mary', 'Juliette', '', '', '', '31000', 'tlse', '', 0, 0, 0, '', '', '');

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
