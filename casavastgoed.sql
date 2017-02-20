-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 20 feb 2017 om 21:58
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `casavastgoed`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `aanbod`
--

CREATE TABLE IF NOT EXISTS `aanbod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adres` varchar(255) NOT NULL,
  `stad` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `betaalwijze` varchar(10) NOT NULL,
  `prijs` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `labelstatus` varchar(25) NOT NULL,
  `kamers` int(11) NOT NULL,
  `afbeelding` varchar(255) NOT NULL,
  `beschrijving` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden geëxporteerd voor tabel `aanbod`
--

INSERT INTO `aanbod` (`id`, `adres`, `stad`, `type`, `betaalwijze`, `prijs`, `status`, `labelstatus`, `kamers`, `afbeelding`, `beschrijving`) VALUES
(2, 'Nicolaas Anslijnstraat 25', 'Amsterdam', 'Eengezinswoning', 'Huur', '650,-', 'Verhuurd', 'error', 3, 'house1_1.jpg', '<p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>'),
(3, 'Groene Hilledijk 1', 'Rotterdam', 'Appartement', 'Huur', '800,-', 'Te huur', 'success', 3, 'house2_1.png', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>'),
(4, 'Riederlaan 1', 'Rotterdam', 'Winkelpand', 'Koop', '120.000,-', 'Te koop', 'primary', 3, 'house3_2.jpg', '<p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia.</p>'),
(5, 'Rhijnauwensingel 289', 'Rotterdam', 'Eengezinswoning', 'Koopwoning', '200.000,-', 'Te koop', 'primary', 4, 'r289.jpg', '<p style="padding: 0px; margin: 7px 0px; color: #555555; text-align: justify; background-image: inherit; background-position: inherit; background-size: inherit; background-repeat: inherit; background-attachment: inherit; background-origin: inherit; background-clip: inherit; font-family: Verdana, Arial, sans-serif; font-size: 12.8px;">Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi.</p>\r\n<p style="padding: 0px; margin: 7px 0px; color: #555555; text-align: justify; background-image: inherit; background-position: inherit; background-size: inherit; background-repeat: inherit; background-attachment: inherit; background-origin: inherit; background-clip: inherit; font-family: Verdana, Arial, sans-serif; font-size: 12.8px;">Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis.</p>');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(50) NOT NULL,
  `achernaam` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `voornaam`, `achernaam`, `email`, `wachtwoord`) VALUES
(1, 'Richinel', 'Jarbandhan', 'rj_1993@live.nl', 'wachtwoord');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(50) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden geëxporteerd voor tabel `pages`
--

INSERT INTO `pages` (`id`, `titel`, `content`) VALUES
(1, 'Aanbod', '<p><strong>AAN WELKE VOORWAARDEN DIEN IK ALS NIEUWE HUURDER TE VOLDOEN?</strong></p>\r\n<div id="generated_id300_100048737">Om in aanmerking te komen voor een huurwoning dient u rekening te houden met een aantal voorwaarden die door onze opdrachtgevers wordt gehanteerd. Wanneer u nog niet bij ons ingeschreven bent, of al huurder van ons bent en graag opnieuw in aanmerking wenst te komen voor het huren van &eacute;&eacute;n van de woningen in ons beheer, dan zullen wij toetsen of u aan onderstaande voorwaarden kunt voldoen.<br /><br /><strong>Voorwaarden</strong>\r\n<ul>\r\n<li>Het bruto maandinkomen van &eacute;&eacute;n aanvrager dient minimaal&nbsp;3,5&nbsp;x de kale huur&nbsp;te bedragen. Dit is afhankelijk van de opdrachtgever. Vaste toeslagen zoals vakantiegeld en een dertiende maand mogen meegerekend worden</li>\r\n<li>Voor zelfstandigen en gepensioneerden gelden andere uitgangspunten. Deze zullen per aanvraag worden beoordeeld. Zelfstandigen dienen een bankgarantie van drie maanden huur te overleggen</li>\r\n</ul>\r\n<br /><strong>Te ontvangen gegevens</strong></div>\r\n<div>Bij uw aanvraag dienen wij de navolgende gegevens te ontvangen. Na ontvangst van onderstaande gegevens is een inschrijving compleet en zullen wij uw gegevens toetsen en nagaan of wij u een woning kunnen toewijzen.\r\n<ul>\r\n<li>Indien in loondienst: een&nbsp;werkgeversverklaring&nbsp;en recente loonstrook</li>\r\n<li>Bankafschrift van de laatste 3 maanden met bijschrijving inkomen</li>\r\n<li>Indien zelfstandig ondernemer: een beknopte winst/verliesrekening van de afgelopen twee jaar en de inschrijving van de KVK&nbsp;</li>\r\n<li>Indien gepensioneerd: gegevens van uw AOW en/of pensioen</li>\r\n<li>Een&nbsp;verhuurdersverklaring, indien u een huurwoning bewoont. Deze kunt u laten invullen of is verkrijgbaar bij uw huidige verhuurder</li>\r\n<li>Een hypotheekverklaring, indien u een koopwoning bezit. Deze is verkrijgbaar bij uw hypotheekverstrekker. Indien uw woning verkocht is ontvangen wij tevens een kopie van het (voorlopige) koopcontract</li>\r\n</ul>\r\n<strong>Een aanvraag van een huurwoning kan zonder opgaaf van reden worden afgewezen.</strong></div>'),
(2, 'Diensten | Huur', '<p><strong>Casa-vastgoed beschikt over een gevarieerd aanbod aanbod van huurwoningen. Bij het huren van een woning is het van belang een aantal zaken goed te regelen. Zoals juridische aspecten en allerhande praktische zaken. Casa-vastgoed ondersteunt u hierbij en neemt u veel zorg uit handen.</strong></p>\r\n<p>Onze aanpak:</p>\r\n<ul>\r\n<li>Het inventariseren van uw woonwensen en/of het aannemen van uw zoekopdracht.</li>\r\n<li>Het zoeken van een passende huurwoning.</li>\r\n<li>Het regelen van een bezichtiging en het begeleiden van de bezichtiging.</li>\r\n<li>Het opstellen van de huurovereenkomst.</li>\r\n<li>Het innen van de eerste maand huur en de borg.</li>\r\n<li>Het verzorgen van de sleuteloverdracht.</li>\r\n<li>Het opstellen van een check-in rapport.</li>\r\n</ul>\r\n<p>Heeft tijdens de huurperiode vragen, neem gerust contact met ons op. Wij zijn u graag van dienst.</p>\r\n<p>Op onze website vindt u het actuele aanbod van huurwoningen. Wij stellen een aantal voorwaarden voor het huren van een woning. Neem contact met ons op als u interesse heeft in het huren van een woning via Casa-vastgoed. Wij maken graag een vrijblijvende afspraak met u.</p>'),
(3, 'Diensten | Verhuur', '<p><strong>Casa-vastgoed helpt u bij een snelle en veilige verhuur van uw woning. Heeft u een woning in uw eigendom die gedurende een periode van minimaal een half jaar beschikbaar is voor verhuur? Of staat uw woning te koop en wilt u deze tijdelijk verhuren? Neem dan contact met ons op. Wij geven u graag een toelichting op onze dienstverlening.</strong></p>\r\n<p>Onze klantenkring is breed en bestaat uit particulieren en bedrijven. Wij werken samen met meerdere multinationals die voor hun (internationale) medewerkers op zoek zijn naar een (tijdelijke) woning.</p>\r\n<p>Onze aanpak:</p>\r\n<ul>\r\n<li>Het bezichtigen van het de te verhuren woning.</li>\r\n<li>Het bespreken van de verhuurmogelijkheden.</li>\r\n<li>Het voorstellen van een marktconforme huurprijs.</li>\r\n<li>Het maken van foto''s van de woning voor de promotiewerkzaamheden.</li>\r\n<li>Het aanbieden van uw woning voor verhuur.</li>\r\n<li>Het zoeken naar en screenen van huurders.</li>\r\n<li>Het opstellen van een huurovereenkomst.</li>\r\n<li>Het verzorgen van de sleuteloverdracht.</li>\r\n<li>Het maken van een inspectierapport bij aanvang van de huurperiode.</li>\r\n<li>Het incasseren van de eerste eerste huur en van de borgsom.</li>\r\n<li>Het uitvoeren van tussentijdse inspecties.</li>\r\n<li>Het behandelen van eventuele klachten van huurder tijdens de huurperiode.</li>\r\n<li>Het zorgdragen voor een doorlopende bezetting.</li>\r\n</ul>\r\n<p>U bepaalt zelf of u van alle onderdelen van bovenstaande aanpak gebruikt wilt maken of van slechts enkele onderdelen. Als u uw woning wilt verhuren, kunt u het aanvraagformulier invullen. Uiteraard kunt u ook telefonisch contact met ons op nemen. Wij staan u graag te woord.</p>'),
(4, 'Diensten | Koop', '<p><strong>Casa-vastgoed biedt professionele en persoonlijke begeleiding bij de aankoop van uw droomwoning. Tijdens deze zoektocht en het complexe proces dat vooraf gaat aan de uiteindelijke aankoop, staan wij u met raad en daad bij. Als aankoopmakelaar vertegenwoordigen we uw belangen als koper.</strong></p>\r\n<p>Onze aanpak:</p>\r\n<ul>\r\n<li>Het gezamenlijk in kaart brengen van uw woonwensen.</li>\r\n<li>Het zoeken naar uw droomwoning.</li>\r\n<li>Het doen van nader onderzoek naar de bouwkundige staat van de woning.</li>\r\n<li>Het persoonlijk begeleiden van uw bezichtigingen.</li>\r\n<li>Het uitvoeren van een waardebepaling van uw potenti&Atilde;&laquo;le nieuwe woning.</li>\r\n<li>Het voeren van de prijsonderhandelingen.</li>\r\n<li>Het regelen van een afspraak met de notaris.</li>\r\n<li>Het zorgen voor een stipte en goede oplevering.</li>\r\n</ul>\r\n<p>U bepaalt zelf of u van alle onderdelen van bovenstaande aanpak gebruikt wilt maken of van slechts enkele onderdelen. Onze dienstverlening eindigt niet na de oplevering van uw woning. Ook na deze oplevering kun u met vragen en problemen bij ons terecht.</p>\r\n<p>Neem contact met ons op voor meer informatie of het inplannen van een vrijblijvende afspraak.</p>'),
(5, 'qwer', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
