-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql:3306
-- Généré le :  mer. 28 fév. 2018 à 15:00
-- Version du serveur :  5.7.21
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(255) NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `message`) VALUES
(136, 'PrÃ©sentation', 'Sans leur reconnaissance comme Ã©crivains singuliers, le groupe en effet quâ€™ils contribuent un peu malgrÃ© eux Ã  fonder passerait inaperÃ§u. Le Â« monstre sacrÃ© Â» est donc efficace dans une dynamique de la contradiction. Il produit le groupe en sâ€™affichant irrÃ©ductible au groupal. Câ€™est par ce qui en lui Ã©chappe le plus au groupe quâ€™il consolide, prÃ©cisÃ©ment, ce groupe. Dans le champ littÃ©raire maghrÃ©bin lâ€™exemple le plus Ã©vident de cette dynamique de la contradiction est sans nul doute le marocain Mohammed KhaÃ¯r-Eddine, Ã  la fois le plus irrÃ©ductible Ã  une quelconque Â« doxa Â» de lâ€™Ã©criture maghrÃ©bine, et Â« monument Â» fÃ©dÃ©rateur le plus efficace de la nouvelle littÃ©rature marocaine qui dÃ©marra avec lâ€™expÃ©rience essentielle de la revue Souffles.\r\n\r\nOr cette irrÃ©ductibilitÃ© du Â« monstre sacrÃ© Â» Ã  une esthÃ©tique groupale, par laquelle paradoxalement le groupe quâ€™il impulse deviendra visible, est cohÃ©rente avec cette esthÃ©tique de la rupture fÃ©conde par laquelle on caractÃ©rise parfois la modernitÃ© des Ã©critures europÃ©ennes depuis la fin du XIXÃ¨me siÃ¨cle. EsthÃ©tique qui rejoint dans une certaine mesure la dynamique de lâ€™Ã©cart par rapport Ã  un horizon dâ€™attente caractÃ©risant la littÃ©raritÃ© selon lâ€™EsthÃ©tique de la rÃ©ception. Les Â« monstres sacrÃ©s Â» que jâ€™Ã©voque ici sont productifs essentiellement par lâ€™Ã©cart, ou encore la rupture que leur Ã©criture dÃ©veloppe, par rapport Ã  une attente de lecture liÃ©e Ã  la perception mÃªme, par le public, du groupe que ces Â« monstres sacrÃ©s Â» ont contribuÃ© Ã  faire connaÃ®tre. La visibilitÃ© dâ€™un groupe littÃ©raire Ã©mergent suppose une attente prÃ©cisÃ©ment ciblÃ©e, de la part des lecteurs potentiels de ses textes. En lâ€™occurrence lâ€™attente de lecture par rapport Ã  un groupe littÃ©raire Ã©mergeant dâ€™un espace culturel nouveau est en gÃ©nÃ©ral celle dâ€™une description de cet espace, si possible rÃ©aliste et Â« authentique Â». Or les Ã©crivains algÃ©riens de la modernitÃ© cassent cette attente. Point de vraies descriptions dans Nedjma de Kateb. Et Boudjedra substitue comme Kateb Ã  cette description attendue des jeux intertextuels inattendus et provocants. Aux contenus rÃ©fÃ©rentiels politiques, exotiques ou sociaux attendus, ces Ã©crivains substituent, par ce jeu intertextuel, une auto-reprÃ©sentation de lâ€™Ã©criture, le plus souvent ludique et parfois ostensiblement gratuite, qui va instaurer le malentendu avec ceux qui attendent quâ€™ils soient les simples porte-paroles du groupe dont ils sont issus.\r\n\r\nLa fÃ©conditÃ© de ces Ã©crivains irrÃ©ductibles au groupal grÃ¢ce Ã  la notoriÃ©tÃ© singuliÃ¨re desquels le groupe Â« littÃ©rature maghrÃ©bine Â» sâ€™est imposÃ©, repose donc sur ce que jâ€™appellerai une Â« esthÃ©tique du malentendu Â», que je considÃ¨re en tout cas comme le ferment essentiel de la modernitÃ© des Ã©critures les plus notoires des annÃ©es 60-70. Et câ€™est en tout cas Ã  partir de ce postulat et dans son cadre, que je vais tenter maintenant de montrer la dynamique de lâ€™intertextuel telle quâ€™elle se manifeste, Ã  trois pÃ©riodes diffÃ©rentes de lâ€™Ã©mergence de cette littÃ©r'),
(138, 'PrÃ©sentation', 'Sans leur reconnaissance comme Ã©crivains singuliers, le groupe en effet quâ€™ils contribuent un peu malgrÃ© eux Ã  fonder passerait inaperÃ§u. Le Â« monstre sacrÃ© Â» est donc efficace dans une dynamique de la contradiction. Il produit le groupe en sâ€™affichant irrÃ©ductible au groupal. Câ€™est par ce qui en lui Ã©chappe le plus au groupe quâ€™il consolide, prÃ©cisÃ©ment, ce groupe. Dans le champ littÃ©raire maghrÃ©bin lâ€™exemple le plus Ã©vident de cette dynamique de la contradiction est sans nul doute le marocain Mohammed KhaÃ¯r-Eddine, Ã  la fois le plus irrÃ©ductible Ã  une quelconque Â« doxa Â» de lâ€™Ã©criture maghrÃ©bine, et Â« monument Â» fÃ©dÃ©rateur le plus efficace de la nouvelle littÃ©rature marocaine qui dÃ©marra avec lâ€™expÃ©rience essentielle de la revue Souffles.\r\n\r\nOr cette irrÃ©ductibilitÃ© du Â« monstre sacrÃ© Â» Ã  une esthÃ©tique groupale, par laquelle paradoxalement le groupe quâ€™il impulse deviendra visible, est cohÃ©rente avec cette esthÃ©tique de la rupture fÃ©conde par laquelle on caractÃ©rise parfois la modernitÃ© des Ã©critures europÃ©ennes depuis la fin du XIXÃ¨me siÃ¨cle. EsthÃ©tique qui rejoint dans une certaine mesure la dynamique de lâ€™Ã©cart par rapport Ã  un horizon dâ€™attente caractÃ©risant la littÃ©raritÃ© selon lâ€™EsthÃ©tique de la rÃ©ception. Les Â« monstres sacrÃ©s Â» que jâ€™Ã©voque ici sont productifs essentiellement par lâ€™Ã©cart, ou encore la rupture que leur Ã©criture dÃ©veloppe, par rapport Ã  une attente de lecture liÃ©e Ã  la perception mÃªme, par le public, du groupe que ces Â« monstres sacrÃ©s Â» ont contribuÃ© Ã  faire connaÃ®tre. La visibilitÃ© dâ€™un groupe littÃ©raire Ã©mergent suppose une attente prÃ©cisÃ©ment ciblÃ©e, de la part des lecteurs potentiels de ses textes. En lâ€™occurrence lâ€™attente de lecture par rapport Ã  un groupe littÃ©raire Ã©mergeant dâ€™un espace culturel nouveau est en gÃ©nÃ©ral celle dâ€™une description de cet espace, si possible rÃ©aliste et Â« authentique Â». Or les Ã©crivains algÃ©riens de la modernitÃ© cassent cette attente. Point de vraies descriptions dans Nedjma de Kateb. Et Boudjedra substitue comme Kateb Ã  cette description attendue des jeux intertextuels inattendus et provocants. Aux contenus rÃ©fÃ©rentiels politiques, exotiques ou sociaux attendus, ces Ã©crivains substituent, par ce jeu intertextuel, une auto-reprÃ©sentation de lâ€™Ã©criture, le plus souvent ludique et parfois ostensiblement gratuite, qui va instaurer le malentendu avec ceux qui attendent quâ€™ils soient les simples porte-paroles du groupe dont ils sont issus.\r\n\r\nLa fÃ©conditÃ© de ces Ã©crivains irrÃ©ductibles au groupal grÃ¢ce Ã  la notoriÃ©tÃ© singuliÃ¨re desquels le groupe Â« littÃ©rature maghrÃ©bine Â» sâ€™est imposÃ©, repose donc sur ce que jâ€™appellerai une Â« esthÃ©tique du malentendu Â», que je considÃ¨re en tout cas comme le ferment essentiel de la modernitÃ© des Ã©critures les plus notoires des annÃ©es 60-70. Et câ€™est en tout cas Ã  partir de ce postulat et dans son cadre, que je vais tenter maintenant de montrer la dynamique de lâ€™intertextuel telle quâ€™elle se manifeste, Ã  trois pÃ©riodes diffÃ©rentes de lâ€™Ã©mergence de cette littÃ©r'),
(139, 'PrÃ©sentation', 'Sans leur reconnaissance comme Ã©crivains singuliers, le groupe en effet quâ€™ils contribuent un peu malgrÃ© eux Ã  fonder passerait inaperÃ§u. Le Â« monstre sacrÃ© Â» est donc efficace dans une dynamique de la contradiction. Il produit le groupe en sâ€™affichant irrÃ©ductible au groupal. Câ€™est par ce qui en lui Ã©chappe le plus au groupe quâ€™il consolide, prÃ©cisÃ©ment, ce groupe. Dans le champ littÃ©raire maghrÃ©bin lâ€™exemple le plus Ã©vident de cette dynamique de la contradiction est sans nul doute le marocain Mohammed KhaÃ¯r-Eddine, Ã  la fois le plus irrÃ©ductible Ã  une quelconque Â« doxa Â» de lâ€™Ã©criture maghrÃ©bine, et Â« monument Â» fÃ©dÃ©rateur le plus efficace de la nouvelle littÃ©rature marocaine qui dÃ©marra avec lâ€™expÃ©rience essentielle de la revue Souffles.\r\n\r\nOr cette irrÃ©ductibilitÃ© du Â« monstre sacrÃ© Â» Ã  une esthÃ©tique groupale, par laquelle paradoxalement le groupe quâ€™il impulse deviendra visible, est cohÃ©rente avec cette esthÃ©tique de la rupture fÃ©conde par laquelle on caractÃ©rise parfois la modernitÃ© des Ã©critures europÃ©ennes depuis la fin du XIXÃ¨me siÃ¨cle. EsthÃ©tique qui rejoint dans une certaine mesure la dynamique de lâ€™Ã©cart par rapport Ã  un horizon dâ€™attente caractÃ©risant la littÃ©raritÃ© selon lâ€™EsthÃ©tique de la rÃ©ception. Les Â« monstres sacrÃ©s Â» que jâ€™Ã©voque ici sont productifs essentiellement par lâ€™Ã©cart, ou encore la rupture que leur Ã©criture dÃ©veloppe, par rapport Ã  une attente de lecture liÃ©e Ã  la perception mÃªme, par le public, du groupe que ces Â« monstres sacrÃ©s Â» ont contribuÃ© Ã  faire connaÃ®tre. La visibilitÃ© dâ€™un groupe littÃ©raire Ã©mergent suppose une attente prÃ©cisÃ©ment ciblÃ©e, de la part des lecteurs potentiels de ses textes. En lâ€™occurrence lâ€™attente de lecture par rapport Ã  un groupe littÃ©raire Ã©mergeant dâ€™un espace culturel nouveau est en gÃ©nÃ©ral celle dâ€™une description de cet espace, si possible rÃ©aliste et Â« authentique Â». Or les Ã©crivains algÃ©riens de la modernitÃ© cassent cette attente. Point de vraies descriptions dans Nedjma de Kateb. Et Boudjedra substitue comme Kateb Ã  cette description attendue des jeux intertextuels inattendus et provocants. Aux contenus rÃ©fÃ©rentiels politiques, exotiques ou sociaux attendus, ces Ã©crivains substituent, par ce jeu intertextuel, une auto-reprÃ©sentation de lâ€™Ã©criture, le plus souvent ludique et parfois ostensiblement gratuite, qui va instaurer le malentendu avec ceux qui attendent quâ€™ils soient les simples porte-paroles du groupe dont ils sont issus.\r\n\r\nLa fÃ©conditÃ© de ces Ã©crivains irrÃ©ductibles au groupal grÃ¢ce Ã  la notoriÃ©tÃ© singuliÃ¨re desquels le groupe Â« littÃ©rature maghrÃ©bine Â» sâ€™est imposÃ©, repose donc sur ce que jâ€™appellerai une Â« esthÃ©tique du malentendu Â», que je considÃ¨re en tout cas comme le ferment essentiel de la modernitÃ© des Ã©critures les plus notoires des annÃ©es 60-70. Et câ€™est en tout cas Ã  partir de ce postulat et dans son cadre, que je vais tenter maintenant de montrer la dynamique de lâ€™intertextuel telle quâ€™elle se manifeste, Ã  trois pÃ©riodes diffÃ©rentes de lâ€™Ã©mergence de cette littÃ©r'),
(140, 'Esquisse dâ€™un cadre de rÃ©flexion', 'Pour une littÃ©rature Ã©mergente, le jeu de rÃ©fÃ©rences intertextuelles est problÃ©matique, parce que son champ littÃ©raire nâ€™existe pas encore, et que dÃ¨s lors lâ€™intertextualitÃ© signalera dâ€™abord lâ€™espace culturel antÃ©rieur par rapport auquel le texte prend son sens, dont il rÃ©clame la caution ou dÃ©stabilise la doxa, comme lâ€™a montrÃ© ici mÃªme Henri Lopes. Lâ€™intertextualitÃ©, alors, dÃ©signe ce que jâ€™ai appelÃ© ailleurs le lieu dâ€™Ã©nonciation du texte Ã©mergent, câ€™est-Ã -dire lâ€™espace littÃ©raire dans lequel ce texte sâ€™Ã©panouit, et en rapport avec lequel il acquiert le maximum de significations.\r\n\r\nDans ces conditions ce nâ€™est que progressivement quâ€™une littÃ©rature Ã©mergente sera perÃ§ue comme un ensemble significatif et autonome. Il faut en effet pour cela quâ€™il y ait dâ€™abord une accumulation suffisante de textes et dâ€™auteurs diffÃ©rents, lus dans leurs similitudes, dont la fonction performative, au sens des linguistes, imposera en quelque sorte le groupe littÃ©raire. Et il faut surtout que cette perception dâ€™un ensemble soit animÃ©e, mise en mouvement par un jeu de rÃ©fÃ©rences intertextuelles internes, de ces auteurs les uns par rapport aux autres. RÃ©fÃ©rences internes qui nâ€™excluent pas, bien sÃ»r, les rÃ©fÃ©rences externes sans lesquelles il nâ€™est pas de littÃ©rature vÃ©ritable, particuliÃ¨rement romanesque. Mais qui font vivre la conscience dâ€™un groupe littÃ©raire.\r\n\r\nPour la littÃ©rature algÃ©rienne de langue franÃ§aise, je propose de dater le dÃ©but de cette prise de conscience dâ€™un groupe littÃ©raire Ã©mergent, mÃªme si des Ã©crivains isolÃ©s existaient dÃ©jÃ  bien plus tÃ´t, du dossier significativement appelÃ© Â« Une nouvelle Ã©cole littÃ©raire Â» Ã©tabli par Pierre Grenaud dans Les Nouvelles littÃ©raires du 15 octobre 1953, et des interviews de Mohammed Dib et Mouloud Feraoun dans le numÃ©ro suivant (22 octobre) de cet hebdomadaire. Les interviews des deux Ã©crivains en particulier sont importantes, parce que ces auteurs y font explicitement rÃ©fÃ©rence Ã  dâ€™autres auteurs algÃ©riens, pour confirmer que naÃ®t effectivement cette Â« nouvelle Ã©cole littÃ©raire Â» dont parle Pierre Grenaud. Pourtant une nouvelle Ã©cole littÃ©raire a besoin pour fonctionner comme telle, de ce que jâ€™appellerai une rupture fondatrice. Rupture idÃ©ologique certes, mais surtout formelle, avec les modÃ¨les gÃ©nÃ©riques hÃ©ritÃ©s. Rupture littÃ©raire qui Ã  la veille du dÃ©clenchement de la guerre dâ€™AlgÃ©rie prend bien sÃ»r aussi une signification politique, mais qui mâ€™intÃ©ressera ici Ã  partir de ce que jâ€™appellerai sa productivitÃ© littÃ©raire double. Dâ€™une part en effet elle affirme le groupe dissident. Mais dâ€™autre part la rupture avec des modÃ¨les littÃ©raires hÃ©ritÃ©s est nÃ©cessairement Ã  chaque fois lâ€™Å“uvre dâ€™Ã©crivains isolÃ©s, de crÃ©ateurs assez sÃ»rs de lâ€™efficacitÃ© esthÃ©tique de lâ€™innovation quâ€™ils apportent parce quâ€™ils se considÃ¨rent, ou sont considÃ©rÃ©s individuellement comme artistes ayant des nouveautÃ©s radicales Ã  apporter. Ce que fait que si le groupe littÃ©raire Ã©mergent apporte une rupture par rapport Ã  la norme communÃ©men'),
(141, 'PrÃ©sentation', 'et quâ€™ils contribuent un peu malgrÃ© eux Ã  fonder passerait inaperÃ§u. Le Â« monstre sacrÃ© Â» est donc efficace dans une dynamique de la contradiction. Il produit le groupe en sâ€™affichant irrÃ©ductible au groupal. Câ€™est par ce qui en lui Ã©chappe le plus au groupe quâ€™il consolide, prÃ©cisÃ©ment, ce groupe. Dans le champ littÃ©raire maghrÃ©bin lâ€™exemple le plus Ã©vident de cette dynamique de la contradiction est sans nul doute le marocain Mohammed KhaÃ¯r-Eddine, Ã  la fois le plus irrÃ©ductible Ã  une quelconque Â« doxa Â» de lâ€™Ã©criture maghrÃ©bine, et Â« monument Â» fÃ©dÃ©rateur le plus efficace de la nouvelle littÃ©rature marocaine qui dÃ©marra avec lâ€™expÃ©rience essentielle de la revue Souffles. Or cette i'),
(143, 'oifjoijfoifjoifjofijofijfoi', 'oidjoidjoidjodijdoijdoidjoidjodijoijoijoijoijoijoijojoi'),
(144, 'sdsdfs', 'sdfsfsnfhf;,hnf;hf;hf;hgd,;hgdchgdc,gd,gfd,gfx,ghxssgdg,fsgffndqwnfd');

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nameblog` varchar(255) CHARACTER SET utf8 NOT NULL,
  `resumeblog` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `person`
--

INSERT INTO `person` (`id`, `name`, `birth_date`, `email`, `password`, `nameblog`, `resumeblog`) VALUES
(14, 'zaim', '2018-02-13', 'zaim@zaim.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'reparation electrique', 'ma description du blog blab blba blba blb ablb a'),
(15, 'zaza', '2018-02-20', 'zaza@zaza.com', 'zaza', 'mon titre de blog', 'ma descritpioin du blog oijdcfoijcfoijcoijcoijc ocij coij coic joc joci ijco jc'),
(16, 'azerty', '2018-02-06', 'zaim@zaim.com', 'zaim', 'azarfefzegf', 'grgerrehtrh'),
(17, 'azerty', '2018-02-06', 'zaim@zaim.com', 'zaim', 'azarfefzegf', 'grgerrehtrh'),
(18, 'dodo', '2018-02-06', 'dodo@dodo.com', 'dodo', 'dodo', 'dodododdo'),
(19, 'sami', '2018-02-13', 'sami@sami.com', 'sami', 'mon titre de blog', 'bla blbna blba bnlba blba blba bnlba'),
(20, 'Alexia', '2018-01-29', 'Alexia@Alexia.com', 'Alexia', 'AlexiaAlexiaAlexia', 'AlexiaAlexiaAlexiaAlexiaAlexiaAlexiaAlexiaAlexiaAlexiaAlexiaAlexiaAlexiaAlexiaAlexia'),
(21, 'max', '2018-02-13', 'max@max.com', 'max', 'maxmaxmax', 'maxmaxmaxmaxmaxmax'),
(22, 'sisi', '2018-02-06', 'sisi@sisi.com', 'sisi', 'sisi', 'sisisisisisisisi'),
(23, 'lili', '2018-02-07', 'lili@lili.com', 'lili', 'lkfejokfeiluh', 'ouedhoieuhfoeiughfeu eiufh oeiufh eoiufh eiuf heof h'),
(24, 'momo', '2018-02-13', 'momo@momo.com', 'momo', 'momo', 'momomomomomomomomo'),
(25, 'zinou', '2018-02-06', 'zinou@zinou.com', 'zinou', 'le blog de zinou', 'llllkdlkjdlkjdlkjfl flkjf lkj flkfj lfkj lfkj lfkjfl k'),
(26, 'tote', '2018-02-15', 'tote@gmail.com', 'tote', 'hello', 'world'),
(27, 'dev', '2018-02-06', 'dev@dev.dev', 'dev', 'dev', 'dev'),
(28, 'aze', '2018-01-31', 'aze@aze.aze', 'aze', 'aze', 'aze'),
(29, 'tttt', '2018-02-08', 'ttt@ttt', 'ttt', 'ttt', 'ttt'),
(30, 'azerrt', '2018-02-06', 'rayou2018@yahoo.com', 'BRUQX9B34hjP02afRRddiY7wUKfNHfdBPiHSGHki', 'rtyrre', 'ertyuui'),
(31, 'azert', '2018-02-14', 'wear25@yahoo.com', 'vq3yywEct3oJvDFfs6lJJ7E8Q8sXJvlBNBR9RHIY', 'ghghghgh', 'hhhhhhhhhhhh'),
(32, 'gg', '2018-02-08', 'g@g.com', '4m8QzYpGIBDas23r1rSNwMYgvPy7kJKrR4XPWmIp', 'ffff', 'ffffffff'),
(38, 'aaaa', '2018-02-06', 'naraouf007@gmail.com', 'izLBm4V7UwmszlqiDQvJ6UIALfqDGMpmrJ9kP6OZ', 'ggg', 'gggg'),
(40, 'ytfytf', '2018-02-07', 'bouaffar.hichem@yahoo.fr', 'aaaaaa', 'retdyg', 'erdtrfgyhghjkokijydfvhbjkuliolkmlug');

-- --------------------------------------------------------

--
-- Structure de la table `table_jointure`
--

CREATE TABLE `table_jointure` (
  `person_id` int(255) NOT NULL,
  `article_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `table_jointure`
--

INSERT INTO `table_jointure` (`person_id`, `article_id`) VALUES
(14, 136),
(14, 138),
(14, 139),
(15, 140),
(14, 141),
(18, 143);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_jointure`
--
ALTER TABLE `table_jointure`
  ADD PRIMARY KEY (`person_id`,`article_id`),
  ADD KEY `person_id` (`person_id`,`article_id`),
  ADD KEY `article_id` (`article_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT pour la table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `table_jointure`
--
ALTER TABLE `table_jointure`
  ADD CONSTRAINT `table_jointure_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `table_jointure_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
