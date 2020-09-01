-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 05:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ana Admin 97', 'ananna150597@gmail.com', '2020-08-06 02:10:28', '$2y$10$mzCWXXayRzJ0JY8YcpPtRuS.Zvr9AgUtZMrQhYXth8/baVKoAYFT.', 'lbpZRJNJf5AERSX3ZfPe7g4LcOYyzrfyDQaH2IjpdPjlmd6cAEcCsbw1dBpG', '2020-08-06 02:10:28', '2020-08-06 22:06:06'),
(2, 'Bahus', 'ana_iancu97@yahoo.com', NULL, '$2y$10$aaEGD.UhL0nJCVxfTvdVLu.J0SRN2tkL6BQI.ewrp09VMu6cqd2hi', NULL, '2020-08-06 21:50:22', '2020-08-06 21:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Animals', 'Portions of these humanoids are clearly not of human make. They may have drastic differences in skin color and eye type and may have scales, fur, claws, and tails. The average person may find them quite unpleasant and untrustworthy because they are not entirely human.', '2020-05-07 21:53:42', '2020-05-07 21:54:09'),
(3, 'Part-humans', 'This category includes those that have human bodies but also parts of animals bodies (wigs, tails, fur, scales, etc.). These can sometimes pass unnoticed in human society if their attributes are small enough to go unnoticed. Their ears may be slightly misshaped, their eyes may not line up, or their height may not measure up, but their difference in appearance can be attributed to genetic mistakes or mutation. Sometimes they live separated from society, live in alternative realities, or appear at night or under specific circumstances.', '2020-05-07 21:53:42', '2020-08-22 22:10:03'),
(4, 'Temporary form humans', 'These are creatures that may temporarily disguise or transform into a human shape, but have entirely different true forms.', '2020-05-07 21:53:42', '2020-05-07 21:54:09'),
(5, 'Objects', 'Items that are used to create magic actions.', '2020-05-07 21:53:42', '2020-08-02 22:35:35'),
(6, 'Places', 'Places that are full of energy and magic. ', '2020-05-07 21:53:42', '2020-05-07 21:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `approved`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'Ana Iancu', 'ananna150597@gmail.com', 'Wow this is amazing!', 1, 2, '2020-07-22 16:10:21', '2020-07-22 16:10:21'),
(3, 'BestDragon', 'ana_iancu97@yahoo.com', 'Great content.. please continue to post... :) .', 1, 2, '2020-07-22 16:12:42', '2020-07-22 16:12:42'),
(4, 'Anna Ana', 'ananna150597@gmail.com', 'Fantastic creature! so majestique...', 1, 1, '2020-07-29 15:10:11', '2020-07-29 15:10:11'),
(5, 'Bobby', 'Bobsb@email.com', 'OMG!!!!! This is really terrifying!!!!.', 1, 24, '2020-08-02 13:51:49', '2020-08-02 13:51:49'),
(6, 'Patrascu Alexandru Mihail', 'alex.patra97@gmail.com', 'Cel putin 10 , ma jur aici, sa moara piticii mei de gradina! <3', 1, 28, '2020-08-02 17:07:42', '2020-08-02 17:07:42'),
(7, 'C.S. Preda', 'catalinap98@yahoo.com', 'Masa de seara <3...', 1, 28, '2020-08-03 18:17:14', '2020-08-03 18:17:14'),
(8, 'Anna Ana', 'anaiancu1505@gmail.com', 'Get the fire on!!!!!!!!!!!!!!!!!', 1, 22, '2020-08-06 20:44:16', '2020-08-06 20:44:16'),
(9, 'Lidia', 'lidia1959@yahoo.com', 'Very useful and interesting posts!', 1, 4, '2020-08-11 05:58:34', '2020-08-11 05:58:34'),
(10, 'Lidia Iancu', 'lidia1959@yahoo.com', 'So strong...!!!', 1, 24, '2020-08-22 22:10:59', '2020-08-22 22:10:59'),
(11, 'Anna Ana', 'ananna150597@gmail.com', 'Foarte frumos', 1, 28, '2020-08-24 13:17:14', '2020-08-24 13:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2020_03_19_024444_create_posts_table', 1),
(7, '2020_04_26_235058_add_slug_to_posts', 1),
(8, '2020_05_07_213241_create_categories_table', 2),
(9, '2020_05_07_213552_add_category_id_to_posts', 2),
(10, '2020_06_18_193906_create_tags_table', 3),
(11, '2020_06_18_195624_create_tags_table', 4),
(12, '2020_06_18_195756_create_tags_table', 5),
(13, '2020_06_18_195904_create_post_tag_table', 6),
(15, '2020_07_22_183934_create_comments_table', 7),
(16, '2020_07_24_200928_add_image_col_to_posts', 8),
(18, '2014_10_12_000000_create_users_table', 9),
(19, '2020_08_05_232444_create_admins_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ana_iancu97@yahoo.com', '$2y$10$/UayttqcNC/XO/FreESKd.PIUt5mhMudezVgsenyr3mIvmee0rmR6', '2020-06-18 19:16:52'),
('ananna150597@gmail.com', '$2y$10$6PZZvF7ABVAAEHzfQx3wWeO1oWJDrK/Yxh48WG94TAxf7x9UN4WLm', '2020-08-09 10:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `slug`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Unicorn', '<p>Unicorn, mythological animal resembling a horse or a kid with a single horn on its forehead. The unicorn appeared in early Mesopotamian artworks, and it also was referred to in the ancient myths of India and China. The earliest description in Greek literature of a single-horned (Greek monokerōs, Latin unicornis) animal was by the historian Ctesias (c. 400 BCE), who related that the Indian wild ass was the size of a horse, with a white body, purple head, and blue eyes, and on its forehead was a cubit-long horn coloured red at the pointed tip, black in the middle, and white at the base. Those who drank from its horn were thought to be protected from stomach trouble, epilepsy, and poison. It was very fleet of foot and difficult to capture. The actual animal behind Ctesias’s description was probably the Indian rhinoceros.</p>', 'unicorn', '1596398084.png', 2, '2020-03-31 21:20:01', '2020-08-02 16:54:45'),
(2, 'Centaur', '<p>Centaur, Greek Kentauros, in Greek mythology, a race of creatures, part horse and part man, dwelling in the mountains of Thessaly and Arcadia. Traditionally they were the offspring of Ixion, king of the neighbouring Lapiths, and were best known for their fight (centauromachy) with the Lapiths, which resulted from their attempt to carry off the bride of Pirithous, son and successor of Ixion. They lost the battle and were driven from Mount Pelion. In later Greek times they were often represented drawing the chariot of the wine god Dionysus or bound and ridden by Eros, the god of love, in allusion to their drunken and amorous habits. Their general character was that of wild, lawless, and inhospitable beings, the slaves of their animal passions. (The Centaur Chiron was not typical in this respect.).</p>', 'centaur', '1596391420.png', 3, '2020-04-09 00:38:07', '2020-08-02 21:35:37'),
(3, 'Pegasus', '<p>Pegasus, in Greek mythology, a winged horse that sprang from the blood of the Gorgon Medusa as she was beheaded by the hero Perseus. With Athena’s (or Poseidon’s) help, another Greek hero, Bellerophon, captured Pegasus and rode him first in his fight with the Chimera and later while he was taking vengeance on Stheneboea (Anteia), who had falsely accused Bellerophon. Subsequently Bellerophon attempted to fly with Pegasus to heaven but was unseated and killed or, by some accounts, lamed. The winged horse became a constellation and the servant of Zeus. The spring Hippocrene on Mount Helicon was believed to have been created when the hoof of Pegasus struck a rock.</p>', 'pegasus', '1596391387.png', 2, '2020-04-26 21:35:44', '2020-08-02 15:03:08'),
(4, 'Griffin', '<p>Griffin, also spelled griffon or gryphon, composite mythological creature with a lion’s body (winged or wingless) and a bird’s head, usually that of an eagle. The griffin was a favourite decorative motif in the ancient Middle Eastern and Mediterranean lands. Probably originating in the Levant in the 2nd millennium BCE, the griffin had spread throughout western Asia and into Greece by the 14th century BCE. The Asiatic griffin had a crested head, whereas the Minoan and Greek griffin usually had a mane of spiral curls. It was shown either recumbent or seated on its haunches, often paired with the sphinx; its function may have been protective.</p>', 'griffin', '1596391111.png', 2, '2020-04-28 20:13:38', '2020-08-02 14:58:31'),
(6, 'Wand', '<p>Wands are associated with the power of the person who is using them. They are associated with the air and fire elements. Wands bring about a transformation. Most wands are made out of wood but some are made of metal or ivory. They are used to subtly and gently direct energy. Wands can be used to draw symbols on the ground and in the air. The wand itself can be used for healing or it can be used to give a plant healing powers.</p>\r\n<p> </p>\r\n<p>Some people choose to inscribe runes onto their wands to bring extra energy. There are many different rune inscriptions including Uruz which brings about fulfillment, good fortune, and happiness. Raidho helps to clear a person’s mind and help them find the truth. Isa promotes inner strength, quiet, stillness, and peace. Sowelu provides guidance, change, and renewal. And the rune Dagaz promotes white light, love, awakening, and attraction.</p>', 'wand', '1597011440.png', 5, '2020-08-09 19:17:20', '2020-08-09 19:17:20'),
(7, 'Asgard', '<p>Asgard, Old Norse Ásgardr, in Norse mythology, the dwelling place of the gods, comparable to the Greek Mount Olympus. Legend divided Asgard into 12 or more realms, including Valhalla, the home of Odin and the abode of heroes slain in earthly battle; Thrudheim, the realm of Thor; and Breidablik, the home of Balder.Each important god had his own palace in Asgard, and many Germanic peoples believed that these mansions were similar in design to those of their own nobility. Asgard could be reached from earth only by the bridge Bifrost (the rainbow).</p>', 'asgard', '1597010452.png', 6, '2020-08-09 21:29:02', '2020-08-09 19:00:53'),
(8, 'Rivendell', '<p>Rivendell, or Imladris, was an Elven town in the Misty Mountains on the eastern edge of Eriador. Because of its location, it was called \"The Last Homely House East of the Sea\" from the point of view of a traveller going to the Misty Mountains and Wilderland; and also the First Homely House from the point of view of someone coming from these lands to the civilised lands of Eriador to the west.</p>', 'rivendell', '1597010481.jpg', 6, '2020-08-09 19:01:21', '2020-08-09 19:01:21'),
(9, 'Shell', '<p>Shells are associated with the water element and the moon. They are considered to be between worlds since they are found on the sand by the ocean. Seashells are associated with the goddess Aphrodite and are used in love spells. Since shells were used as currency in many cultures they are also useful in money spells. Shells hung in a house or around a person’s neck provide protection. Seashells can also be used in divination.</p>\r\n<p> </p>\r\n<p>Depending on the shell, they can be worn as an amulet to produce different results. Clam, oyster, and conch shells are good for love spells. Cone shells are used for protection. Scallops are used for travel spells. Cowries and tooth shells bring financial gain. Whelks will bring positive change. Limpets give power, courage, and strength. Screw shells, augers, and cerith shells are used for male fertility and ailments. Keyhole limpets are good for finding a way out of a situation. Tulip shells are used to find out fate and destiny. Tusk shells bring strength for battle.</p>\r\n<p> </p>\r\n<p>Some witches write spells in the shells and then cast them by the sea. When the tide comes in the shells are carried out into the water and the spell is cast.</p>', 'shell', '1597010508.png', 5, '2020-08-09 19:01:54', '2020-08-09 19:02:13'),
(10, 'Mermaid', '<p>Mermaid, masculine merman, a fabled marine creature with the head and upper body of a human being and the tail of a fish. Similar divine or semidivine beings appear in ancient mythologies (e.g., the Chaldean sea god Ea, or Oannes). In European folklore, mermaids (sometimes called sirens) and mermen were natural beings who, like fairies, had magical and prophetic powers. They loved music and often sang. Though very long-lived, they were mortal and had no souls.</p>', 'mermaid', '1596391071.png', 3, '2020-05-07 22:01:09', '2020-08-02 14:57:51'),
(11, 'Vampire', '<p>Vampire, also spelled vampyre, in popular legend, a creature, often fanged, that preys upon humans, generally by consuming their blood. Vampires have been featured in folklore and fiction of various cultures for hundreds of years, predominantly in Europe, although belief in them has waned in modern times.</p>', 'vampire', '1596390986.png', 4, '2020-05-07 22:01:09', '2020-08-02 14:56:26'),
(12, 'Fairy', '<p>Fairy, also spelled faerie or faery, a mythical being of folklore and romance usually having magic powers and dwelling on earth in close relationship with humans. It can appear as a dwarf creature typically having green clothes and hair, living underground or in stone heaps, and characteristically exercising magic powers to benevolent ends; as a diminutive sprite commonly in the shape of a delicate, beautiful, ageless winged woman dressed in diaphanous white clothing, inhabiting fairyland, but making usually well-intentioned intervention in personal human affairs; or as a tiny, mischievous, and protective creature generally associated with a household hearth.</p>', 'fairy', '1596390950.png', 3, '2020-05-07 22:01:09', '2020-08-02 14:55:50'),
(13, 'Faunus', '<p>A grandson of Saturn, Faunus was typically represented as half man, half goat, in imitation of the Greek Satyr, in the company of similar creatures, known as fauns. Faunus was the father of Latinus, who was king of the Latins when Aeneas arrived in Italy. According to Virgil’s Aeneid, Faunus told Latinus to give his daughter, Lavinia, in marriage to a foreigner—i.e., Aeneas. Like Pan, Faunus was associated with merriment, and his twice-yearly festivals were marked by revelry and abandon. At the Lupercalia, a celebration of fertility held partly in his honour each February in Rome well into the Common Era, youths clothed as goats ran through the streets wielding strips of goatskin.</p>', 'faunus', '1596390876.png', 3, '2020-05-07 22:01:09', '2020-08-02 14:54:36'),
(14, 'Angel', '<p>The term angel, which is derived from the Greek word angelos, is the equivalent of the Hebrew word mal’akh, meaning “messenger.” The literal meaning of the word angel thus points more toward the function or status of such beings in a cosmic hierarchy rather than toward connotations of essence or nature, which have been prominent in popular piety, especially in Western religions. Thus, angels have their significance primarily in what they do rather than in what they are. Whatever essence or inherent nature they possess is in terms of their relationship to their source (God, or the ultimate being). Because of the Western iconography (the system of image symbols) of angels, however, they have been granted essential identities that often surpass their functional relationships to the sacred or holy and their performative relationships to the profane world. In other words, popular piety, feeding on graphic and symbolic representations of angels, has to some extent posited semidivine or even divine status to angelic figures. Though such occurrences are not usually sanctioned doctrinally or theologically, some angelic figures, such as Mithra (a Persian god who in Zoroastrianism became an angelic mediator between heaven and earth and judge and preserver of the created world), have achieved semidivine or divine status with their own cults.</p>', 'angel', '1596390844.png', 3, '2020-05-07 22:01:09', '2020-08-02 14:54:06'),
(15, 'Demon', '<p>The term demon is derived from the Greek word daimōn, which means a “supernatural being” or “spirit.” Though it has commonly been associated with an evil or malevolent spirit, the term originally meant a spiritual being that influenced a person’s character. An agathos daimōn (“good spirit”), for example, was benevolent in its relationship to humans. The Greek philosopher Socrates, for example, spoke of his daimōn as a spirit that inspired him to seek and speak the truth. The term gradually was applied to the lesser spirits of the supernatural realm who exerted pressures on humans to perform actions that were not conducive to their well-being. The dominant interpretation has been weighted in favour of malevolence and that which forbodes evil, misfortune, and mischief.</p>', 'demon', '1596401798.png', 4, '2020-05-07 22:01:09', '2020-08-02 17:56:39'),
(16, 'Werewolf', '<p>Werewolf, in European folklore, a man who turns into a wolf at night and devours animals, people, or corpses but returns to human form by day. Some werewolves change shape at will; others, in whom the condition is hereditary or acquired by having been bitten by a werewolf, change shape involuntarily, under the influence of a full moon. If he is wounded in wolf form, the wounds will show in his human form and may lead to his detection. Belief in werewolves is found throughout the world. The psychiatric condition in which a person believes he is a wolf is called lycanthropy.</p>', 'werewolf', '1596390801.png', 4, '2020-05-07 22:01:09', '2020-08-02 14:53:24'),
(17, 'Elf', '<p>Elf, plural Elves, in Germanic folklore, originally, a spirit of any kind, later specialized into a diminutive creature, usually in tiny human form. In the Prose, or Younger, Edda, elves were classified as light elves (who were fair) and dark elves (who were darker than pitch); these classifications are roughly equivalent to the Scottish seelie court and unseelie court. The notable characteristics of elves were mischief and volatility. They were believed at various times and in various regions to cause diseases in humans and cattle, to sit upon the breast of a sleeper and give him bad dreams (the German word for nightmare is Alpdrücken, or “elf-pressure”), and to steal human children and substitute changelings (deformed or weak elf or fairy children). In the British Isles, flint implements called elf-bolts, elf-arrows, or elf-shot (which are now known to be prehistoric tools used by the aboriginal Irish and the early Scots) were believed to be the weapons with which elves injured cattle. Elves occasionally also were benevolent and helpful. The second edition of Encyclopædia Britannica, which was published in 1777–84, calls the word elf obsolete but reports that belief in such creatures “still subsists in many parts of our own country. . . In the Highlands of Scotland, new-born children are watched till the christening is over, lest they should be stolen or changed by some of these phantastical existences.” In time, elves came to be indistinct from fairies, though both older classics—such as Johann Wolfgang von Goethe’s poem “Der Erlkönig” (“The Elf King”)—and such modern classics as J.R.R. Tolkien’s Lord of the Rings (1954–55) still treat elves as a distinct type.</p>', 'elf', '1596387795.png', 3, '0000-00-00 00:00:00', '2020-08-02 14:03:15'),
(18, 'Magician', '<p>A magician also known as a mage, warlock, witch, wizard/wizardess, enchanter/enchantress, sorcerer/sorceress, or spell caster[2] is someone who uses or practices magic derived from supernatural, occult, or arcane sources. Magicians are common figures in works of fantasy, such as fantasy literature and role-playing games, and enjoy a rich history in mythology, legends, fiction, and folklore.</p>', 'magician', '1596387694.png', 4, '2020-05-07 22:01:09', '2020-08-02 14:01:34'),
(19, 'Ghost', '<p>Ghost, soul or spectre of a dead person, usually believed to inhabit the netherworld and to be capable of returning in some form to the world of the living. According to descriptions or depictions provided by believers, a ghost may appear as a living being or as a nebulous likeness of the deceased or, occasionally, in other forms. Belief in ghosts is based on the ancient notion that a human spirit is separable from the body and may maintain its existence after the body’s death. In many societies, funeral rituals are believed to prevent the ghost from haunting the living.</p>', 'ghost', '1596387642.png', 4, '2020-05-07 22:01:09', '2020-08-02 14:00:43'),
(20, 'Dragon', '<p>A dragon is a large, serpentine legendary creature that appears in the folklore of many cultures around the world. Beliefs about dragons vary drastically by region, but dragons in western cultures since the High Middle Ages have often been depicted as winged, horned, four-legged, and capable of breathing fire. Dragons in eastern cultures are usually depicted as wingless, four-legged, serpentine creatures with above-average intelligence.</p>', 'dragon', '1596387601.png', 2, '2020-05-07 22:01:09', '2020-08-02 14:00:03'),
(21, 'Long', '<p>Long, (Chinese: “dragon”)Wade-Giles romanization lung, in Chinese mythology, a type of majestic beast that dwells in rivers, lakes, and oceans and roams the skies. Originally a rain divinity, the Chinese dragon, unlike its malevolent European counterpart (see dragon), is associated with heavenly beneficence and fecundity. Rain rituals as early as the 6th century BCE involved a dragon image animated by a procession of dancers; similar dances are still practiced in traditional Chinese communities to secure good fortune.</p>', 'long', '1596387581.png', 2, '2020-05-07 22:01:09', '2020-08-02 15:17:59'),
(22, 'Phoenix', '<p>Phoenix, in ancient Egypt and in Classical antiquity, a fabulous bird associated with the worship of the sun. The Egyptian phoenix was said to be as large as an eagle, with brilliant scarlet and gold plumage and a melodious cry. Only one phoenix existed at any time, and it was very long-lived—no ancient authority gave it a life span of less than 500 years. As its end approached, the phoenix fashioned a nest of aromatic boughs and spices, set it on fire, and was consumed in the flames. From the pyre miraculously sprang a new phoenix, which, after embalming its father’s ashes in an egg of myrrh, flew with the ashes to Heliopolis (“City of the Sun”) in Egypt, where it deposited them on the altar in the temple of the Egyptian god of the sun, Re. A variant of the story made the dying phoenix fly to Heliopolis and immolate itself in the altar fire, from which the young phoenix then rose.</p>', 'phoenix', '1596387508.png', 2, '2020-05-07 22:01:09', '2020-08-02 13:58:28'),
(23, 'Dwarf', '<p>In Teutonic and especially Scandinavian mythology and folklore, the term dwarf (Old Norse: dvergr) denoted a species of fairy inhabiting the interiors of mountains and the lower levels of mines. Dwarfs were of various types, all of small stature, some being no more than 18 inches (45 cm) high and others about the height of a two-year-old child. In appearance they were sometimes beautiful, but more usually they resembled grave old men with long beards and, in some cases, humped backs.</p>', 'dwarf', '1596387478.png', 3, '2020-05-07 22:01:09', '2020-08-02 13:57:59'),
(24, 'Minotaur', '<p>Minotaur, Greek Minotauros (“Minos’s Bull”), in Greek mythology, a fabulous monster of Crete that had the body of a man and the head of a bull. It was the offspring of Pasiphae, the wife of Minos, and a snow-white bull sent to Minos by the god Poseidon for sacrifice. Minos, instead of sacrificing it, kept it alive; Poseidon as a punishment made Pasiphae fall in love with it. Her child by the bull was shut up in the Labyrinth created for Minos by Daedalus.</p>', 'minotaur', '1596390911.png', 3, '2020-05-07 22:01:09', '2020-08-02 14:55:11'),
(25, 'Cerberus', '<p>Cerberus, in Greek mythology, the monstrous watchdog of the underworld. He was usually said to have three heads, though the poet Hesiod (flourished 7th century BCE) said he had 50. Heads of snakes grew from his back, and he had a serpent’s tail. He devoured anyone who tried to escape the kingdom of Hades, the lord of the underworld, and he refused entrance to living humans, though the mythic hero Orpheus gained passage by charming him with music. One of the labours of the warrior Heracles was to bring Cerberus up to the land of the living; after succeeding, he returned the creature to Hades.</p>', 'cerberus', '1596386740.png', 2, '2020-05-07 22:01:09', '2020-08-02 13:45:40'),
(26, 'Nymph', '<p>A nymph (Greek: νύμφη, nýmphē; Ancient: [nýmpʰɛː], Modern: [nímfi]) in ancient Greek folklore is a supernatural being associated with many other minor female deities that are often associated with the air, seas, woods, water or particular locations or landforms. Different from Greek goddesses, nymphs are generally regarded as divine spirits who animate or maintain Nature (natural forces reified and considered as a sentient being) for the environments where they live, and are usually depicted as beautiful, young, and graceful maidens. They were not necessarily immortal, but lived many years before they died. They are often divided into various broad subgroups, such as the Meliae (nymphs of ash trees), the Naiads (nymphs of rivers and streams), the Nereids (nymphs of calm seas), and the Oreads (nymphs of mountains). Nymphs often feature in many classic works of art, literature, mythology and in fiction. Since medieval times, nymphs are sometimes popularly associated, or even confused, with the mythical or spiritual fairies.</p>', 'nymph', '1596386723.png', 4, '2020-05-07 22:01:09', '2020-08-02 13:45:24'),
(28, 'Jackalope', '<p>For those who believe, the jackalope is said to be an antlered species of rabbit, sometimes rumored to be extinct. One of the rarest animals in the world, it is a cross between a now extinct pygmy-deer and a species of killer-rabbit. However, occasional sightings of this rare creature continue to occur, with small pockets of jackalope populations persisting in the American West. The antlered species of rabbit are brownish in color, weight between three and five pounds, and move with lightning speeds of up to 90 miles per hour. They are said to be vicious when attacked and use their antlers to fight, thus they are sometimes called the “warrior rabbit.” The jackalope was first encountered by John Colter, one of the first white men to enter what would one day be the State of Wyoming.</p>', 'jackalope', '1598407340.png', 2, '2020-06-19 18:36:12', '2020-08-25 23:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`) VALUES
(1, 28, 1),
(5, 26, 2),
(7, 26, 9),
(8, 24, 3),
(10, 24, 6),
(11, 24, 7),
(14, 25, 6),
(15, 25, 7),
(16, 23, 2),
(17, 23, 9),
(18, 20, 2),
(19, 20, 3),
(21, 20, 6),
(22, 15, 3),
(23, 15, 8),
(24, 15, 9),
(37, 2, 2),
(38, 2, 6),
(39, 1, 1),
(40, 1, 2),
(41, 22, 3),
(42, 22, 6),
(43, 21, 6),
(44, 21, 7),
(45, 19, 8),
(46, 19, 9),
(47, 18, 8),
(48, 18, 9),
(49, 18, 10),
(50, 17, 2),
(51, 17, 6),
(52, 17, 9),
(53, 16, 3),
(54, 16, 7),
(55, 16, 9),
(56, 14, 2),
(57, 14, 6),
(58, 14, 10),
(59, 13, 3),
(60, 13, 6),
(61, 13, 9),
(62, 12, 2),
(63, 12, 9),
(64, 11, 2),
(65, 11, 8),
(66, 11, 9),
(67, 10, 2),
(68, 10, 3),
(69, 10, 6),
(70, 4, 2),
(71, 4, 3),
(72, 4, 7),
(73, 3, 1),
(74, 3, 2),
(75, 3, 3),
(76, 2, 9),
(100, 26, 14),
(118, 7, 6),
(119, 7, 14),
(120, 7, 16),
(121, 7, 18),
(122, 7, 20),
(123, 6, 2),
(124, 6, 14),
(125, 6, 17),
(126, 8, 2),
(127, 8, 14),
(128, 8, 16),
(129, 8, 20),
(130, 9, 14),
(131, 9, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Animal', '2020-06-18 19:20:02', '2020-08-06 21:15:56'),
(2, 'Fantastic', '2020-06-18 19:21:51', '2020-06-18 19:21:51'),
(3, 'Creature', '2020-06-18 19:20:28', '2020-06-18 19:20:28'),
(6, 'Mythological', '2020-06-18 19:21:23', '2020-06-18 19:21:23'),
(7, 'Beast', '2020-06-18 19:21:33', '2020-06-18 19:21:33'),
(8, 'Evil', '2020-06-19 19:18:22', '2020-06-19 19:18:22'),
(9, 'HumanLike', '2020-06-19 18:50:40', '2020-06-19 18:50:40'),
(10, 'Good', '2020-06-19 19:18:26', '2020-06-19 19:18:26'),
(14, 'Magic', '2020-08-06 20:59:17', '2020-08-06 20:59:17'),
(16, 'Place', '2020-08-09 19:10:04', '2020-08-09 19:10:04'),
(17, 'Object', '2020-08-09 19:10:12', '2020-08-09 19:10:12'),
(18, 'Palace', '2020-08-09 19:10:17', '2020-08-09 19:10:17'),
(19, 'Forest', '2020-08-09 19:10:22', '2020-08-09 19:10:22'),
(20, 'Town', '2020-08-09 19:11:04', '2020-08-09 19:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ana Iancu', 'ananna150597@gmail.com', NULL, '$2y$10$zjYFG5AjWccfHsCyzc9XfOzJmwTF95NI/74l.5uyNBaaf5rbjy41a', NULL, '2020-08-05 23:01:19', '2020-08-05 23:01:19'),
(2, 'Anna Ana', 'anaiancu1505@gmail.com', NULL, '$2y$10$NA8OcxiQvK9eIgB7b0LYrelkeJzLL0AHLdSDu/x1C/6OkKmiVWwYC', NULL, '2020-08-06 16:02:51', '2020-08-06 16:02:51'),
(3, 'Lidia Iancu', 'lidia1959@yahoo.com', NULL, '$2y$10$Hyq9sL1lb22rN.sdxt75C.kguaAArtESlFXrnkechLuP/3/qo4SP2', NULL, '2020-08-11 05:41:24', '2020-08-11 05:41:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE SET NULL;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
