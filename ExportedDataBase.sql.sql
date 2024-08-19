-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: aug. 19, 2024 la 04:24 PM
-- Versiune server: 10.4.28-MariaDB
-- Versiune PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `muzeu`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `collection`
--

CREATE TABLE `collection` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `collection_items` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `collection`
--

INSERT INTO `collection` (`id`, `title`, `description`, `cover_image`, `collection_items`) VALUES
(1, 'Ii Tradiționale', 'Ii-le tradiționale sunt piese vestimentare tradiționale\r\n            românești, cunoscute și sub numele de cămăși sau bluze ie. Ele au o istorie îndelungată și au fost purtate\r\n            în România și în alte țări din zona Balcanilor timp de sute de ani', 'collections_images/II.jpg', '[{\"path\":\"collections_images/II.jpg\",\"description\":\"Iia botosăneasca se remarcă prin folosirea intensivă a culorilor calde.\",\"title\":\"Ie Botosăneană\"},{\"path\":\"collections_images/ie2.jpg\",\"description\":\"Iia maramureșeana impresionează prin finețea detaliilor brodate manual.\",\"title\":\"Ie Maramureșeană\"},{\"path\":\"collections_images/ie3.jpg\",\"description\":\"Iia bucovineana este ca o pagină dintr-o poveste ilustrată, cu modele florale.\",\"title\":\"Ie Bucovineană\"},{\"path\":\"collections_images/ie4.jpeg\",\"description\":\"Iia olteneasca împletește farmecul rustic cu simplitatea elegantă, folosind culori naturale .\",\"title\":\"Ie Oltenescă\"},{\"path\":\"collections_images/ie5.jpg\",\"description\":\"Iia transilvăneana îmbină influențele etnice diverse într-un design echilibrat.\",\"title\":\"Ie Transilvăneană\"},{\"path\":\"collections_images/ie6.jpg\",\"description\":\"Iia moldovenească emană rafinament prin detaliile brodate cu migală și combinațiile subtile de culori.\",\"title\":\"Ie Moldovenească\"}]'),
(2, 'Fuste Tradiționale', 'Fustele tradiționale vechi sunt piese vestimentare cu o istorie bogată, purtate de-a lungul generațiilor în\r\n            diferite culturi din întreaga lume. Aceste fuste se deosebesc în funcție de regiune, tradiții și modul de\r\n            confecționare.', 'collections_images/Fusta.jpg', '[{\"path\":\"collections_images/fusta1.webp\",\"description\":\"Fusta tradițională din Muntenia combină eleganța urbană cu elemente tradiționale.\",\"title\":\"Fusta tradițională din Muntenia\"},{\"path\":\"collections_images/fusta2.jpg\",\"description\":\"Fusta tradițională din Moldova impresionează prin bogăția broderiilor și culorilor vii.\",\"title\":\"Fusta tradițională din Moldova\"},{\"path\":\"collections_images/fusta3.jpg\",\"description\":\"Fusta tradițională din Transilvania păstrează esența medievală, cu motive tradiționale .\",\"title\":\"Fusta tradițională din Transilvania\"},{\"path\":\"collections_images/fusta4.jpg\",\"description\":\"Fusta tradițională din Banat este vibrantă și plină de viață, reflectând spiritul dinamic.\",\"title\":\"Fusta tradițională din Banat\"},{\"path\":\"collections_images/fusta5.jpg\",\"description\":\" Fusta tradițională din Dobrogea împrumută elemente de eleganță orientală, cu linii fluide.\",\"title\":\"Fusta tradițională din Dobrogea\"},{\"path\":\"collections_images\\\\fusta6.jpg\",\"description\":\"Fusta tradițională din Bucovina este o expresie a tradiției înfloritoare, cu modele florale bogate și culori vibrante.\",\"title\":\"Fusta tradițională din Bucovina\"}]'),
(3, 'Costume Tradiționale', 'Costumele bărbătești tradiționale vechi sunt piese vestimentare\r\n            care au fost purtate de-a lungul generațiilor în diverse culturi din întreaga lume. Aceste costume au\r\n            caracteristici distinctive, care variază în funcție de regiune ', 'collections_images/Costum1.png', '[{\"path\":\"collections_images/costum1.jpg\",\"description\":\"Costumele populare din Muntenia reflectă eleganța urbană, cu influențe ale modei contemporane împletite cu tradiția.\",\"title\":\"Costum din Muntenia\"},{\"path\":\"collections_images/costum2.jpg\",\"description\":\"Costumele populare din Moldova încântă prin broderiile lor elaborate și culorile vii, ilustrând bogăția .\",\"title\":\"Costum din Moldova\"},{\"path\":\"collections_images/costum3.jpg\",\"description\":\"Costumele populare din Transilvania păstrează esența medievală, cu motive tradiționale.\",\"title\":\"Costum din Transilvania\"},{\"path\":\"collections_images/costum4.jpg\",\"description\":\"Costumele populare din Banat atrag atenția prin detaliile lor sclipitoare și combinațiile îndrăznețe de culori.\",\"title\":\"Costum din Banat\"},{\"path\":\"collections_images/costum5.png\",\"description\":\"Costumele populare din Dobrogea împrumută influențe orientale, cu linii fluide și culori delicate.\",\"title\":\"Costum din Dobrogea\"},{\"path\":\"collections_images/costum6.png\",\"description\":\"Costumele populare din Bucovina sunt ca tablouri vii, cu motive tradiționale pictate manual.\",\"title\":\"Costum din Bucovina\"}]'),
(4, 'Accesorii Tradiționale', 'Accesoriile tradiționale vechi sunt elemente de îmbrăcăminte și\r\n            bijuterii care au o semnificație culturală și istorică profundă și care au fost purtate de-a lungul\r\n            generațiilor în diverse culturi din întreaga lume. Aceste accesor', 'collections_images/Accesorii.jpg', '[{\"path\":\"collections_images/acc1.jpg\",\"description\":\"Geanta tradițională este o reinterpretare modernă a accesoriului clasic, îmbinând eleganța urbană cu elemente tradiționale.\",\"title\":\"Geanta tradițională\"},{\"path\":\"collections_images/acc2.jpg\",\"description\":\"Braul tradițional este încrustat cu simboluri și modele geometrice, reflectând măiestria artizanală.\",\"title\":\"Braul tradițional\"},{\"path\":\"collections_images/acc3.jpg\",\"description\":\"Colierul tradițional este o capodoperă pictată manual, cu motive florale și simboluri tradiționale, aducând o notă de splendoare.\",\"title\":\"Colier tradițional\"},{\"path\":\"collections_images/acc4.jpg\",\"description\":\"Șalul tradițional este împletit cu măiestrie și încălzește cu farmecul său tradițional, fiind un simbol al căldurii și al tradiției .\",\"title\":\"Șal tradițional \"},{\"path\":\"collections_images/acc5.jpg\",\"description\":\"Acest set tradițional de bijuterii este realizat din aur și este format dintr-un colier cu banuți aurii, o brățară și un inel, ornate cu motive tradiționale și detalii filigranate.\",\"title\":\"Setul tradițional de bijuterii\"},{\"path\":\"collections_images/acc6.jpg\",\"description\":\"Braul tradițional de piele este o combinație de eleganță și durabilitate, reprezentând tradiția și măiestria artizanală a meșteșugarilor locali.\",\"title\":\"Braul tradițional de piele \"}]');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `exhibitions`
--

CREATE TABLE `exhibitions` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `complete_description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `exhibitions`
--

INSERT INTO `exhibitions` (`id`, `date`, `title`, `short_description`, `complete_description`, `images`) VALUES
(1, 'Luni 08.06.2024 ora 11:00', 'Gloria Uniformelor: Expoziția Artefactelor Militare Românești\r\n', 'Vă invităm să faceți o călătorie captivantă în universul uniformelor militare românești, o parte importantă a moștenirii noastre naționale\r\n\r\n', 'Gloria Trecutului Militar: Costumele Militare Tradiționale Românești\r\nVă invităm să călătoriți în timp și să explorați istoria măreței noastre națiuni prin ochii costumelor militare tradiționale românești. Expoziția \"Gloria Trecutului Militar\" vă va purta în lumea eroilor noștri, în perioadele de demnitate și curaj ale istoriei românești.\r\n\r\nAceastă expoziție deosebită vă va dezvălui bogăția detaliilor și simbolismului din spatele costumelor militare, ilustrând tradițiile și evoluția lor de-a lungul secolelor. Veți avea ocazia să admirați exponate rare, cum ar fi uniformele purtate în luptele legendare sau la evenimentele istorice cruciale.\r\n\r\nDescoperiți cum aceste costume mărturisesc istorii de sacrificiu, loialitate și devotament pentru țară, și înțelegeți modul în care ele reprezintă un simbol viu al identității naționale. Așteptăm cu nerăbdare să vă întâmpinăm la această expoziție inedită, unde istoria, tradiția și cultura se împletesc într-un spectacol vizual fascinant al costumelor militare românești tradiționale.', '[\"exhibitions_images/militar1.jpg\",\"exhibitions_images/militar2.jpg\",\"exhibitions_images/militar3.jpg\"]'),
(2, 'Marti 16.06.2024 ora 16:00', 'Eleganță și Istorie: Costumele din Epoca Victoriană', 'Descoperiți fascinația epocii victoriene prin intermediul costumelor sale sofisticate. Expoziția prezintă o colecție de rochii, accesorii și uniforme care reflectă eleganța și stilul secolului al XIX-lea.', 'Modă Prin Timp: O Incursiune în Costumele Istorice\r\nBine ați venit la expoziția \"Modă Prin Timp\" – o călătorie fascinantă în lumea costumelor istorice. Această expoziție vă invită să explorați evoluția și diversitatea modei umane de-a lungul secolelor. \r\nDe la rochiile fastuoase ale epocilor antice, până la uniformele distinctive ale marilor imperii, expoziția dezvăluie poveștile, tehnicile și detaliile care stau în spatele costumelor care au marcat epoci și societăți. Vă așteptăm să descoperiți cum modă și istorie se întrepătrund în această incursiune în trecutul fascinant al costumelor istorice.', '[\"exhibitions_images/ist1.jpg\",\"exhibitions_images/ist2.jpg\",\"exhibitions_images/ist3.jpg\"]'),
(3, 'Vineri 12.06.2024 ora 19:00', 'Flapper Chic: Eleganța și Revoluția în Rochiile Anilor \'20', 'Bucurați-vă de o călătorie fascinantă în timp și descoperiți splendoarea anilor \'20. Expoziția \"Flapper Chic\" vă invită să explorați lumea fermecătoare a rochiilor din anii \'20.', 'Flapper Chic: Eleganța și Revoluția în Rochiile Anilor \'20\r\nPasionații de modă vor avea ocazia să admire rochii fermecătoare care au definit stilul flapper, cu talii căzute, franjuri jucăușe și accesorii care strălucesc. Expoziția evidențiază cum moda din această perioadă a reflectat spiritul de independență al femeilor, exprimându-se printr-un stil care a sfidat normele convenționale.\r\nPrin artefacte unice, fotografii captivante și informații fascinante, \"Flapper Chic\" vă va transporta în atmosfera vibrantă a Jazz Age-ului, evidențiind influențele culturale, muzicale și artistice care au inspirat moda anilor \'20. De la rochiile de seară elegante purtate în cluburile de jazz la rochiile de zi care au adus o schimbare revoluționară în garderoba femeilor, expoziția oferă o privire detaliată asupra diversității și inovațiilor din această perioadă remarcabilă.', '[\"exhibitions_images/Rochie1.jpg\",\"exhibitions_images/Rochie2.webp\",\"exhibitions_images/Rochie3.jpg\"]'),
(4, 'Miercuri 24.06.2024 ora 12:00', 'Glamour și Detaliu: Accesoriile Anilor \'30 în Lumina Art Deco', 'Bucurați-vă de strălucirea și eleganța epocii Art Deco în cadrul expoziției noastre speciale, \"Glamour și Detaliu: Accesoriile Anilor \'30.\"', 'Glamour și Detaliu: Accesoriile Anilor \'30 în Lumina Art Deco.\r\nÎntr-un peisaj în care rafinamentul se întâlnește cu inovația, această expoziție vă transportă în lumea fascinantă a accesoriilor care au definit stilul și eleganța anilor \'30. Descoperiți bijuterii prețioase, pălării sofisticate, mănuși elegante și genți rafinate care au fost purtate cu mândrie în această perioadă plină de farmec. Art Deco, cu liniile sale geometrice și motivele stilizate, a inspirat o varietate de accesorii care au capturat imaginația și stilul distins al vremii. \r\nExpoziția aduce în prim-plan nu doar accesorii, ci și povestea lor, subliniind influențele culturale, tehnologice și sociale care au modelat gusturile și preferințele fashionistei din anii \'30. De la bijuterii cu influențe exotice la accesorii futuriste, \"Glamour și Detaliu\" explorează varietatea bogată a acestui deceniu în materie de accesorii.', ' [\"exhibitions_images/acc1.jpeg\",\"exhibitions_images/acc2.jpeg\",\"exhibitions_images/acc3.jpg\"]');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users_info`
--

CREATE TABLE `users_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone_number` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `users_info`
--

INSERT INTO `users_info` (`ID`, `Name`, `Phone_number`, `Email`, `Password`, `is_admin`) VALUES
(6, 'Admin', 7854555, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(10, 'Dani', 2154512, 'dani@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(13, 'Camelia', 75848845, 'camelia@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(14, 'Maria', 7854852, 'mariacammelia@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(15, 'Alexandra', 778545552, 'allexandra@yahoo.com', '202cb962ac59075b964b07152d234b70', 0),
(16, 'Andreea', 78954652, 'andreea@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `exhibitions`
--
ALTER TABLE `exhibitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pentru tabele `exhibitions`
--
ALTER TABLE `exhibitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pentru tabele `users_info`
--
ALTER TABLE `users_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
