-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 07 月 09 日 10:22
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lab_data`
--

-- --------------------------------------------------------

--
-- 表的结构 `antibodies`
--

CREATE TABLE IF NOT EXISTS `antibodies` (
  `An_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Species` varchar(100) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Company` varchar(100) DEFAULT NULL,
  `Product` varchar(100) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`An_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=163 ;

--
-- 转存表中的数据 `antibodies`
--

INSERT INTO `antibodies` (`An_Id`, `Name`, `Species`, `Location`, `Company`, `Product`, `Website`) VALUES
(1, 'Actin (loading Ctrl)', 'Rabbit (Polyclonal)	', '-20°C	', 'NOVUS Biologicals	', 'ab1801', 'http://www.novusbio.com/Beta-Actin-Antibody_NB600-505.html'),
(2, 'Akt', 'Rabbit (Polyclonal)	', '-20°C	', 'Cell Signaling Tech.	', '9272', 'http://www.cellsignal.com/products/92'),
(3, 'Akt1/PKBα (delta PH, S473D), active', 'Recombinant Enzyme', '-20°C', 'Upstate', '14-453', 'http://www.millipore.com/catalogue/item/14-453'),
(4, 'Phospho-Akt (Ser473)', 'Rabbit', '-20°C', 'Cell Signaling Tech.', '9271', 'http://www.cellsignal.com/products/92'),
(6, 'Anti-Ankyrin B', 'Rabbit (Monoclonal)', '-20°C(long term)', 'Invitrogen', '33-3700', 'http://products.invitrogen.com/ivgn/product/333700?ICID=search-333700'),
(9, 'Anti-Annexin Antibody', 'Goat', '-20°C', 'Origene tech', 'TA305797', 'http://www.origene.com/antibody/ANXA1-TA305797.aspx'),
(10, 'Anti-Annexin A3 Antibody', 'Rabbit (Polyclonal)', '-20°C', 'Abcam', 'Ab33068', 'http://www.abcam.com/Annexin-A3-antibody-ab33068.html'),
(11, 'Ab against Annexin V', 'Rabbit (Monoclonal)', '-20°C', 'Origene tech', 'TA307564', 'http://www.origene.com/antibody/ANXA5-TA307564.aspx'),
(12, 'Anti-alpa1 Antitrypsin antibody G11', 'Mouse (Monoclonal)', '-20°C', 'Abcam', 'Ab9400', 'http://www.abcam.com/alpha-1-antitrypsin-antibody-g11-ab9400.html'),
(13, 'ANXA2', 'Mouse (Monoclonal)', '-20°C', 'Abgent', 'AT1148a', 'http://www.labome.com/product/Abgen'),
(14, 'ANXA6 PolyClonal Antibody', 'Rabbit', '-20°C', 'Ptglab', '12542-1-AP', 'http://www.ptglab.com/Products/ANXA6-Antibody-12542-1-AP.htm'),
(16, 'Anti- APOA1', 'Rabbit (Polyclonal)', '-20°C', 'BioVision', '5695-100', 'http://www.biovision.com/apoa1-antibody-3421.html'),
(17, 'APOA2 (D01P)', 'Rabbbit (Polyclonal)', '-20°C', 'Abnova', 'H00000336-D01P', 'http://www.abnova.com/products/products_detail.asp?Catalog_id=H00000336-D01P'),
(18, 'APOA2 (A01)	', 'Mouse (Monoclonal)', '-20°C', 'Abnova', 'H00000336-A01', 'http://www.abnova.com/products/products_detail.asp?Catalog_id=H00000336-A01'),
(19, 'APOA2', 'Rabbit (Monoclonal)', '-20°C', 'LifeSpan Bio', 'LS-C105656', 'http://www.lsbio.com/antibodies/anti-apoa2-apolipoprotein-a-ii-antibody-ls-c105656/107534'),
(20, 'ARP 2/3', 'Goat (Polyclonal)', '-20°C', 'Novus Biologicals', 'NB300-898', 'http://www.novusbio.com/actin-related-protein-2-3-complex-subunit-1B-Antibody_NB300-898.html'),
(21, 'Caldesmon-1 Antibody', 'Rabbit', '-20°C', 'Cell Signaling Tech.', '2980', 'http://www.cellsignal.com/products/29'),
(22, 'Calmodulin Epitope Tag', 'Rabbit (Polyclonal)', '-20°C', 'Upstate', '07-482', 'http://www.millipore.com/catalogue/item/07-482'),
(23, 'Calreticulin', 'Rabbit (Polyclonal)', '-20°C', 'Abcam', 'ab4', 'http://www.abcam.com/calreticulin-antibody-ab4.html'),
(24, 'B-Catenin', 'Rabbit', '-20°C', 'Sigma-Aldrich', 'C2206', 'http://www.sigmaaldrich.com/catalog/product/sigma/c2206?lang=en&region=CA'),
(25, 'B-Catenin (non-phospho), clone 8E4', 'Mouse (Monoclonal IgG1k)', '-20°C', 'Upstate', '05-601', 'http://www.millipore.com/coa.nsf/a73664f9f981af8c852569b9005b4eee/c4fa0909e39330ab85257498005fa00a/$FILE/05-665.pdf'),
(26, 'B-Catenin(6B3)', 'Rabbit (igG)', '-20°C', 'Cell Signaling Tech.', '9582', 'http://www.cellsignal.com/products/95'),
(27, 'Caveolin', 'Rabbit (Monoclonal)', '-20°C', 'Abcam', 'ab32577', 'http://www.abcam.com/Caveolin-1-antibody-E249-ab32577.html'),
(28, 'Clathrin heavy chain Antibody', 'Rabbit (Polyclonal)', '-20°C', 'Abcam', 'ab21679', 'http://www.abcam.com/Clathrin-heavy-chain-antibody-ab21679.html'),
(29, 'Clathrin light chain Antibody', 'Mouse (Monoclonal)', '-20°C', 'Abcam', 'ab24579', 'http://www.abcam.com/clathrin-light-chain-antibody-con-1-ab24579.html'),
(30, 'CUL-1', 'Mouse (IgG1-kappa)', '-20°C', 'Zymed (Invitrogen)', '32-2400', 'http://www.lifetechnologies.com/order/catalog/product/322400'),
(31, 'E-Cadheri(32A8) mouse mAb	', 'Mouse (igG1k)	', '-20°C	', 'Cell Signaling Tech.	', '5296', 'http://www.cellsignal.com/product/productDetail.jsp?productId=5296'),
(32, 'EHD3 - N- terminal	', 'Rabbit (Polyclonal)	', '-20°C	', 'Abcam	', 'ab84214', 'http://www.abcam.com/EHD3-antibody-N-terminal-ab84214.html'),
(33, 'Anti-EDH4', 'Rabbit (Polyclonal)	', '-20°C	', 'Abcam	', 'ab83859', 'http://www.abcam.com/ehd4-antibody-ab83859.html'),
(34, 'eIF2α', 'Mouse (Monoclonal)', '-20°C    ', 'Cell Signaling Tech.    ', '2103', 'http://www.cellsignal.com/product/productDetail.jsp?productId=2103'),
(35, 'EPB41L3', 'Mouse (Monoclonal)', '-20°C	', 'Abnova	', 'H00023136-M01', 'http://www.abnova.com/products/products_detail.asp?Catalog_id=H00023136-M01'),
(36, 'ERp29', 'Rabbit (Polyclonal)', '-20°C	', 'Abnova	', 'ab40982', 'http://www.abcam.com/ERp29-antibody-ab40982.html'),
(37, 'ERp72', 'Rabbit (Polyclonal)', '-20°C	', 'Abnova	', 'ab109869', 'http://www.abcam.com/ERp72-antibody-ab109869.html'),
(38, 'Estrogen Receptor β Antibody    ', 'Rabbit', '-20°C    ', 'Cell Signaling Tech.    ', '5513', 'http://www.cellsignal.com/pdf/5513.pdf'),
(39, 'Anti-Estrogen Receptor α clone E115', 'Unpurified Rabbit Monoclonal (igG)', '-20°C    ', 'Millipore    ', '04-227    ', 'http://www.millipore.com/catalogue/item/04-227'),
(40, 'Ezrin/Radixin/Moesin Antibody', 'Rabbit', '-20°C	', 'Cell Signaling Tech.	', '3174', 'http://www.cellsignal.com/product/productDetail.jsp?productId=3142'),
(41, 'Purified Mouse Anti-Fibronectin', 'Mouse (igG1)	', '-20°C	', 'BD Biosciences', '610077', 'http://www.bdbiosciences.com/ptProduct.jsp?prodId=28599&key=610077&param=search&mterms=true&from=dTable'),
(42, 'Filamin', 'Mouse (Monoclonal)	', '-20°C	', 'Abcam', 'ab80837', 'http://www.abcam.com/Filamin-A-antibody-FLMN01-BSA-and-Azide-free-ab80837.html'),
(43, 'Filamin A antibody (EP2405Y)	', 'Rabbit (Monoclonal)	', '-20°C	', 'Abcam', 'ab76289', 'http://www.abcam.com/filamin-a-antibody-ep2405y-carboxyterminal-end-ab76289.html'),
(44, 'GAPDH', 'Rabbit (Polyclonal)	', '-20°C	', 'Abcam', 'ab9485', 'http://www.abcam.com/gapdh-antibody-ab9485.html'),
(45, 'αGFP', 'Rabbit (Polyclonal)    ', '-20°C    ', 'Abcam', 'ab290', 'http://www.abcam.com/gfp-antibody-ab290.html'),
(46, 'GLUT4	', 'Rabbit (Polyclonal)	', '-20°C	', 'Abcam', 'ab654', 'http://www.abcam.com/glucose-transporter-glut4-antibody-ab654.html'),
(47, 'GLUT4(mAbcam65267)	', 'Mouse (Monoclonal)', '-20°C	', 'Abcam', 'ab65267', 'http://www.abcam.com/glucose-transporter-glut4-antibody-mabcam65267-ab65267.html'),
(48, 'GSK3 (clone 4G-1E)', 'Mouse (Monoclonal)', '-20°C	', 'Upstate', '05-412', 'http://www.millipore.com/catalogue/item/05-412'),
(49, 'HA HRP	', 'Mouse (Monoclonal)', '-20°C	', 'Roche', '11667475001', '	http://www.roche-applied-science.com/shop/products/anti-ha-peroxidase'),
(50, 'Histone H3', 'Rabbit (Polyclonal)', '-20°C	', 'Abcam', 'ab1791', '	http://www.abcam.com/histone-h3-antibody-chip-grade-ab1791.html'),
(51, 'Anti-His(C-term) Antibody', 'Anti-Mouse (igG)	', '-20°C	', 'Invitrogen', 'R930-25	', '	http://tools.lifetechnologies.com/content/sfs/manuals/antihiscterm_man.pdf'),
(52, 'Anti-His(C-term)- HRP Antibody', 'Mouse (Monoclonal)', '-20°C	', 'Invitrogen', 'R931-25	', 'http://tools.lifetechnologies.com/content/sfs/manuals/antihiscterm_man.pdf'),
(53, 'Dimethyl-Histone H3 (Lys36)	', 'Rabbit', '-20°C	', 'Upstate', '07-274	', 'http://www.millipore.com/catalogue/item/07-274'),
(54, 'Histone Deactelylase 1	', 'Rabbit', '-20°C	', 'Cell Signaling Tech.	', '2062', 'http://www.cellsignal.com/pdf/2062.pdf'),
(55, 'Tri-Methyl Histone (H3)	', 'Rabbit', '-20°C	', 'Cell Signaling Tech.	', 'N/A', 'N/A'),
(56, 'HNF4A alpha	', 'Rabbit (Polyclonal)	', '-20°C	', 'NOVUS Biologicals	', 'NBP1-00876	', 'http://www.novusbio.com/HNF4-alpha-Antibody_NBP1-00876.html'),
(57, 'HRP conj. Trueblot	', 'N/A	', '-20°C	', 'Ebioscience', 'N/A', 'N/A'),
(58, 'c-myc Ab HRP conjugated', 'Mouse (Monoclonal)', '-20°C	', 'Sigma-Aldrich	', 'M4439', 'http://www.sigmaaldrich.com/etc/medialib/docs/Sigma/Datasheet/4/m4439dat.Par.0001.File.tmp/m4439dat.pdf'),
(59, 'Hoechst 33342 (DAPI)	', 'see reference sheet	', '-20°C	', 'Sigma-Aldrich	', 'B2261', 'http://www.sigmaaldrich.com/etc/medialib/docs/Sigma/Product_Information_Sheet/b2261pis.Par.0001.File.tmp/b2261pis.pdf'),
(60, '[S88]to Hsp90', 'Mouse (Monoclonal)', '-20°C	', 'Abcam', 'ab1429', 'http://www.abcam.com/hsp90-antibody-s88-ab1429.html'),
(61, 'Anti-MYLIP/IDOL	', 'Rabbit (Polyclonal)	', '-20°C	', 'Abcam', 'ab74562', 'http://www.abcam.com/mylip-antibody-ab74562.html'),
(62, 'IGF1 Receptor Antibody	', 'Rabbit (Polyclonal)	', '-20°C	', 'Abcam', 'ab39675', 'http://www.abcam.com/igf1-receptor-antibody-ab39675.html'),
(63, 'IGF-I Receptorβ Antibody', 'Rabbit', '-20°C    ', 'Cell Signaling Tech.', '3027', 'http://www.cellsignal.com/pdf/3027.pdf'),
(64, 'IGF-I Receptorβ (111A9)    ', 'Rabbit (igG)    ', '-20°C    ', 'Cell Signaling Tech.', '3018', 'https://www.cellsignal.com/pdf/3018.pdf'),
(65, 'Goat Anti-Rabbit IgG, CY3 conjugated	', 'Goat Anti-Rabbit (IgG)', '-20°C	', 'Chemicon', 'AP132C', 'http://www.millipore.com/catalogue/item/ap132c'),
(66, 'Mouse IgG1 k	', 'see reference sheet	', '-20°C	', 'Sigma-Aldrich	', 'M9269', 'http://www.sigmaaldrich.com/etc/medialib/docs/Sigma/Datasheet/m9269dat.Par.0001.File.tmp/m9269dat.pdf'),
(67, 'Insulin Receptorβ (4B8)    ', 'Rabbit (igG)    ', '-20°C    ', 'Cell Signaling Tech.    ', '3025', 'http://www.cellsignal.com/pdf/3025.pdf'),
(68, 'Intergin Antibody Sampler Kit    ', '', '-20°C    ', 'Cell Signaling Tech.    ', '4749', 'http://www.cellsignal.com/pdf/4749.pdf'),
(69, 'Intergrin αV Antibody', 'Rabbit', '-20°C    ', 'Cell Signaling Tech.    ', '4711', 'http://www.cellsignal.com/products/4711.html'),
(70, 'Integrin β1 Antibody', 'Rabbit', '-20°C    ', 'Cell Signaling Tech.    ', '4706', 'http://www.cellsignal.com/products/4706.html'),
(71, 'Integrin β3 Antibody', 'Rabbit', '-20°C    ', 'Cell Signaling Tech.    ', '4702', 'http://www.cellsignal.com/products/4702.html'),
(72, 'anti-ITIH2 Antibody	', 'Rabbit (Polyclonal)	', '-20°C	', 'Abcam', 'ab118257', 'http://www.abcam.com/ITIH2-antibody-ab118257.html'),
(73, 'Jagged1 (1C4)', 'Rabbit (igG)', '-20°C	', 'Cell Signaling Tech.	', '2155', 'http://www.cellsignal.com/products/2155.html'),
(74, 'Kip1/p27', 'Mouse (IgG1)	', '-20°C	', 'BD Biosciences', '610241', 'http://www.bdbiosciences.com/ptProduct.jsp?prodId=30506'),
(75, 'Lamp1', 'Rabbit (Monoclonal)	', '-20°C	', 'Cell Signaling Tech.	', '3243', 'http://www.cellsignal.com/products/3243.html'),
(76, 'Anti-Human LDL R Antibody	', 'Goat (igG)', '-20°C	', 'R&D Systems	', 'AF2148', 'http://www.rndsystems.com/Products/AF2148'),
(77, 'Mouse LDL R Antibody	', 'Goat (Polyclonal igG)	', '-20°C(see paper)	', 'R&D Systems	', 'AF2255', 'http://www.rndsystems.com/Products/AF2255'),
(78, 'Anti-Low Density LRP Antibody (5A6)	', 'Mouse (Monoclonal)	', '-20°C', 'Abcam	', 'AF2255', 'http://www.abcam.com/lrp1-5a6-antibody-ab28320.html'),
(79, 'LRP1(clone EPR3724)	', 'Rabbit (Monoclonal)		', '-20°C', 'OriGene Tech	', 'TA307451', 'http://www.origene.com/antibody/TA307451.aspx'),
(80, 'LRP5 (D80F2) Rabbit mAb	', 'Rabbit (igG)	', '-20°C', 'Cell Signaling Tech.	', '5731', 'http://www.cellsignal.com/products/5731.html'),
(81, 'LRP6 (C47E12) Rabbit mAb	', 'Rabbit (igG)	', '-20°C', 'Cell Signaling Tech.	', '3395', 'http://www.cellsignal.com/products/3395.html'),
(82, 'Phospho-LRP6 (Ser1490) Antibody	', 'Rabbit', '-20°C', 'Cell Signaling Tech.	', '2568', 'http://www.cellsignal.com/pdf/2568.pdf'),
(83, 'Poly-D-Lysine	', 'Rabbit (Polyclonal)	', '-20°C', 'LifeSpan Bio', 'LOC84570', 'N/A'),
(84, 'Anti-Tri Methyl Lysine', 'Biotin Conjugate	', '-20°C', 'N/A', '72006', 'N/A'),
(85, 'Pan Anti-Methyl Lysine biotin	', 'Rabbit (Polyclonal)		', '-20°C', 'Immunechem', 'ICP0503', 'http://www.immunechem.com/?app=product&act=look&type_id=7&id=156'),
(86, 'Anti-2-Macroglobulin', 'Goat', '-20°C', 'Fitzgerald', 'N/A', 'http://www.fitzgerald-fii.com/alpha-2-macroglobulin-antibody-20r-1357.html'),
(87, 'MAN2A1', 'Mouse (Monoclonal)	', '-20°C', 'Abnova', 'H00004124-M01', 'http://www.abnova.com/products/products_detail.asp?Catalog_id=H00004124-M01'),
(88, 'Anti-Map Kinase', 'Rabbit (Polyclonal)	', '-20°C', 'Calbiochem', '442704', 'http://www.millipore.com/catalogue/item/442704-200ul'),
(89, 'Anti-MAPK1/2 Activated	', 'Mouse', '-20°C', 'Calbiochem', '442706', 'http://www.emdmillipore.com/is-bin/INTERSHOP.enfinity/WFS/Merck-CA-Site/en_CA/-/USD/ViewProductDetail-UserProtocolDataSheet;sid=3Qs3EW0C11MLET8RZ8NbRsXCWogl4Qel5SUpR96v_3-JcuOM8etUu2s8ylC6rEZ7XXgnDW7bIDMeFuTLf4-C-sJI_P8uVaHS7pGPMNUbVwGt9w6o2zUgSuC_?Produc'),
(90, 'p38 MAPK Antibody	', 'Rabbit (Polyclonal)	', '-20°C', 'Cell Signaling Tech.	', '9212S', 'http://www.cellsignal.com/products/9212.html'),
(91, 'MESDC2(C22F5)	', 'Rabbit (igG)	', '-20°C', 'Cell Signaling Tech.	', '2763', 'http://www.cellsignal.com/products/2763.html'),
(92, 'Methylated Lysine(mono,di)	', 'Rabbit (Polyclonal)	', '-20°C', 'Abcam', 'ab23366', 'http://www.abcam.com/methylated-lysine-mono-methyl-di-methyl-antibody-ab23366.html'),
(93, 'Mono Anti Methyl Lysine	', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(94, 'Orexin	', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(95, 'Anti-myc Antibody	', 'Mouse (IgG1)	', '-20°C	', 'Invitrogen	', 'R950-25	', 'http://products.invitrogen.com/ivgn/product/R95025'),
(96, 'Anti-myc-HRP Antibody	', 'Mouse (IgG1)	', '-20°C	', 'Invitrogen	', 'R951-25', 'http://products.invitrogen.com/ivgn/product/R95125'),
(97, 'Myc tag clone9E10	', 'Mouse (Monoclonal)', '-20°C	', 'Upstate', '05-419	', 'http://www.millipore.com/catalogue/item/05-419'),
(98, 'M6PR	', 'Rabbit (Polyclonal)	', '-20°C	', 'Abcam', 'ab32815', 'http://www.abcam.com/mannose-6-phosphate-receptor-cation-independent-antibody-ab32815.html'),
(99, 'RbpAb to NTF97 importin beta		', 'Rabbit (Polyclonal)	', '-20°C(long term)', 'Abcam', 'ab45938', 'http://www.abcam.com/ntf97importin-beta-antibody-ab45938.html'),
(100, 'Rabbit Anti NPY	', 'Human, Rat (IgG)	', '-20°C(long term)', 'Peninsula Laboratories	', 'A00721', 'http://search.cosmobio.co.jp/cosmo_search_p/search_gate2/docs/PLI_/T44530400.20090624.pdf'),
(101, 'GRP170/ORP150	', 'Rabbit (Monoclonal)	', '-20°C', 'Epitomics', 'N/A', 'N/A'),
(102, 'Rabbit Polyclonal to ORP150	', 'Rabbit (Polyclonal)	', '-20°C', 'Abcam', 'ab85233', 'http://www.abcam.com/orp150-antibody-ab85233.html'),
(103, 'Pan Methyl Lysine(methyl K pan)	', 'Rabbit (Polyclonal)	', '-20°C', 'Abcam', 'ab7315', 'http://www.abcam.com/pan-methyl-lysine-antibody-chip-grade-ab7315.html'),
(104, '[E10] to PAPR', 'Rabbit (Monoclonal)', '-20 C', 'Abcam', 'ab32138', 'http://www.abcam.com/parp-antibody-e102-ab32138.html'),
(105, 'PC1/3', 'Rabbit', '-20°C', 'Abcam', 'ab3532', 'http://www.abcam.com/pc1-3-antibody-ab3532.html'),
(106, 'PC5A+B', 'Rabbit (Polyclonal)	', '-20°C', 'Alexis', 'LO846', 'N/A'),
(107, 'Anti Mouse PCSK2	', 'Rabbit', '-20°C', 'Abcam', 'ab3533', 'http://www.abcam.com/prohormone-convertase-2-antibody-ab3533.html'),
(108, 'Anti-Peptide yy', 'Rabbit', '-20°C', 'Peninsula Laboratories', '19338', 'N/A'),
(109, 'PGCIα+beta    ', 'Rabbit (Polyclonal)    ', '-20°C', 'Abcam', 'ab72230', 'http://www.abcam.com/pgc1-alpha--beta-antibody-ab72230.html'),
(110, 'PGRMC1 Antibody	', 'Rabbit 	', '-20°C', 'Cell Signaling Tech.	', '12444', 'http://www.cellsignal.com/pdf/12444.pdf'),
(111, 'Phospholipase A2		', 'Mouse (Monoclonal)', '-20°C', 'Abcam	', 'ab24498100', 'N/A'),
(112, 'Phospho-β-Catenin    ', 'Rabbit (Polyclonal)    ', '-20°C', 'Cell Signaling Tech.', '9561', 'http://www.cellsignal.com/pdf/9561.pdf'),
(113, 'Phospho-GSK3β (Ser9, clone 2D3)    ', 'Mouse (Monoclonal)', '-20°C', 'Upstate.', '05-643    ', 'http://www.millipore.com/coa.nsf/a73664f9f981af8c852569b9005b4eee/1c14fb7f237502348525730600528972/$FILE/05-643-33445.pdf'),
(114, 'Phospho MAP Kinase (ERK1/2)', 'Mouse (Monoclonal)', '-20°C', 'Upstate.', '05-481', 'http://www.millipore.com/coa.nsf/a73664f9f981af8c852569b9005b4eee/3c252e3b0490a8d6852573060051c808/$FILE/05-481-31665.pdf'),
(115, 'Phospho-p38 MAP Kinase(Thr180/Tyr182) antibody	', 'Rabbit', '-20°C', 'Cell Signaling Tech.	', '9211', 'http://www.cellsignal.com/pdf/9211.pdf'),
(116, 'Phospho-MEK1/MEK2', 'Rabbit (Monoclonal IgG)	', '-20°C', 'Upstate', '05-747	', 'http://www.millipore.com/coa.nsf/a73664f9f981af8c852569b9005b4eee/224f1f716cde32eb852573060052defb/$FILE/05-747-29726.pdf'),
(117, 'Phospho-mTOR(Ser2448)', 'Rabbit', '-20°C', 'Cell Signaling Tech.	', '2971	', 'http://www.cellsignal.com/pdf/2971.pdf'),
(118, 'Phospho-Raf-1', 'Mouse (Monoclonal)	', '-20°C', 'Upstate', '05-538		', 'http://www.millipore.com/catalogue/item/05-538'),
(119, 'Anti-phophoserine	', 'Rabbit (Polyclonal)	', '-20°C', 'Chemicon International	', 'Ab1603', 'http://www.millipore.com/catalogue/item/ab1603'),
(120, 'Phosphotyrosine', 'Rabbit', '-20°C', 'BD Biosciences', '610009', 'http://www.bdbiosciences.com/ptProduct.jsp?prodId=33240&key=610009&param=search&mterms=true&from=dTable'),
(121, 'Phospho-tyrosine	', 'Mouse (Monoclonal)	', '-20°C', 'Cell Signaling Tech.	', '9411', 'http://www.cellsignal.com/pdf/9411.pdf'),
(122, 'Immobilized Phospho-Tyrosine	', 'Mouse (IgG1)	', '-20°C', 'Cell Signaling Tech.	', '9419', 'http://www.cellsignal.com/pdf/9419.pdf'),
(123, 'PLXNB2 Polyclonal Antibody (A01)	', 'Mouse (Polyclonal)	', '-20°C', 'Abnova', 'H00023654-A01	', 'http://www.abnova.com/products/products_detail.asp?Catalog_id=H00023654-A01'),
(124, 'Poly(ADP-ribose)Polymer Clone 10H', 'Mouse (Monoclonal)', '-20°C', 'Tulip', '1020	', 'http://www.tulipbiolabs.com/webassets/1020-n0710.pdf'),
(125, 'mono+polybiquitinalated conj	', 'N/A', '-20°C', 'N/A', '8281228', 'N/A'),
(126, 'Progesterone Receptor(6A1)	', 'Mouse (IgG1)	', '-20°C', 'Cell Signaling Tech.	', '3172', 'http://www.cellsignal.com/pdf/3172.pdf'),
(127, 'p38 MAPK Antibody	', 'Rabbit	', '-20°C', 'Cell Signaling Tech.	', '9212', 'http://www.cellsignal.com/products/9212.html'),
(128, 'p45SKP2', 'Mouse (Monoclonal)	', '-20°C', 'Zymed Laboratories	', '32-3300	', 'http://products.invitrogen.com/ivgn/product/323300'),
(129, 'p53', 'Mouse	', '-20°C', 'Calbiochem', 'PAb1801', 'http://www.emdmillipore.com/is-bin/INTERSHOP.enfinity/WFS/Merck-US-Site/en_CA/-/USD/ViewProductDetail-UserProtocolDataSheet?ProductUUID=FAqb.s1O7YYAAAEivRZCeVCl&PortalCatalogUUID=4_6b.s1OricAAAEg3cd6cjOt&SelectedDocumentType=UserProtocolDataSheet'),
(130, 'p62 Ick ligand	', 'Mouse (IgG1)	', '-20°C', 'BD Biosciences	', '610833', 'http://www.bdbiosciences.com/ptProduct.jsp?prodId=32650&key=610833&param=search&mterms=true&from=dTable'),
(131, 'Anti-Rac Clone 23A8 Monoclonal igG', 'mouse monoclonal	', '-20°C', 'Upstate', '27666', 'http://www.millipore.com/coa.nsf/a73664f9f981af8c852569b9005b4eee/721f1b610d2955c28525730600515ede/$FILE/05-389-27666.pdf'),
(132, 'Rif1', 'Rabbit (Polyclonal)	', '-20°C', 'Abcam', 'ab1422', 'N/A'),
(133, 'ROCK1 Antibody (EP786Y)	', 'Rabbit (Monoclonal)	', '-20°C', 'Abcam', 'ab45171', 'http://www.abcam.com/rock1-antibody-ep786y-ab45171.html'),
(134, 'SCD [CD,E10]', 'Mouse (Monoclonal)', '-20°C', 'Abcam', 'ab19862', 'http://www.abcam.com/scd1-antibody-cde10-ab19862.html'),
(135, 'SCD1', 'Rabbit (Polyclonal)', '-20°C', 'Cell Signaling Tech.', '2283', 'http://www.cellsignal.com/pdf/2283.pdf'),
(136, 'Shc Antibody	', 'Rabbit', '-20°C', 'Cell Signaling Tech.', '2432', 'http://www.cellsignal.com/pdf/2432.pdf'),
(137, 'SLC3A2 purified MaxPab(D01P)', 'Rabbit (Polyclonal)', '-20°C', 'Abnova', 'H00006520-D01P', 'http://www.abnova.com/products/products_detail.asp?Catalog_id=H00006520-D01P'),
(138, 'SMYD2', 'Rabbit (Polyclonal)', '-20°C', 'Origene', 'N/A', 'http://www.origene.com/antibody/TA302185.aspx'),
(139, 'SMYD3', 'Rabbit (Polyclonal)', '-20°C', 'Abcam', 'ab16027', 'http://www.abcam.com/smyd3-antibody-chip-grade-ab16027.html'),
(140, 'SNAP29', 'Mouse (Monoclonal)', '-20°C', 'Abcam', 'ab56566', 'http://www.abcam.com/snap29-antibody-ab56566.html'),
(141, 'SNX17', 'Mouse (Polyclonal)', '-20°C', 'Abcam', 'ab67599', 'http://www.abcam.com/snx17-antibody-ab67599.html'),
(142, 'Stat3 Antibody', 'Rabbit', '-20°C', 'Cell Signaling Tech.	', '9132', 'http://www.cellsignal.com/pdf/9132.pdf'),
(143, 'Phospho-Stat3(Tyr705) Antibody', 'Rabbit', '-20°C', 'Cell Signaling Tech.	', '9131', 'http://www.cellsignal.com/pdf/9131.pdf'),
(144, 'Somatostatin-14', 'Rabbit (IgG)	', '-20°C', 'Peninsula Laboratories	', 'T-4102', 'http://www.sceti.co.jp/images/psearch/pdf/BHM_T-4102.0400_p.pdf'),
(145, 'Anti-Human Transferrin Receptor', 'Mouse	', '-20°C(long term)	', 'Invitrogen', '13-6800	', 'https://products.invitrogen.com/ivgn/product/136800?ICID=search-136800'),
(146, 'Trans Golgi Network 46', 'Rabbit (Polyclonal)	', '-20°C', 'Affinity Bioreagents	', 'PA1-1069', 'http://www.pierce-antibodies.com/Trans-Golgi-Network-46-antibody-Polyclonal--PA11069.html'),
(147, '(mAbcam 61357) to ZO1 tight junction protein', 'Mouse (Monoclonal)	', '-20', 'Abcam', 'ab61357', 'http://www.abcam.com/zo1-tight-junction-protein-antibody-mabcam-61357-ab61357.html'),
(148, 'T1TC', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(149, 'Ub (FK1)', 'Mouse (Monoclonal)	', '-20°C	', 'BIOMOL International	', 'PW8805', 'http://www.enzolifesciences.com/BML-PW8805/polyubiquitinylated-conjugates-mab-fk1/'),
(150, 'Mono-and Polyubiquitinylated conjugates,mAb(FK2)	', 'Mouse', '-20°C	', 'Enzo Life Science	', 'BML-PW8810-0500	', 'http://www.enzolifesciences.com/fileadmin/reports/els_a56b40472f.pdf'),
(151, 'UO08', 'Rabbit (Polyclonal)	', '-20°C	', 'Covance', 'N/A	', 'N/A'),
(152, 'Anti-V5 Antibody', 'Rabbit (igG)	', '-20°C(long term)	', 'Sigma-Aldrich	', 'V8137	', 'http://www.sigmaaldrich.com/etc/medialib/docs/Sigma/Datasheet/v8137dat.Par.0001.File.tmp/v8137dat.pdf'),
(153, 'Anti-V5-HRP Antibody	', 'Mouse (Monoclonal)	', '-20°C', 'Invitrogen', 'R961-25', 'https://products.invitrogen.com/ivgn/product/R96125?ICID=search-r96125'),
(154, 'V5 Antibody	', 'Mouse (Monoclonal)	', '-20°C', 'Invitrogen', 'R960-25	', 'http://products.invitrogen.com/ivgn/product/R96025?ICID=search-r96025'),
(155, 'V5 Tag	', 'Mouse (Monoclonal)	', '-20°C', 'Abcam', 'ab53418', 'http://www.abcam.com/v5-tag-antibody-e10-ab53418.html'),
(156, '[5] to VCP', 'Mouse (Monoclonal)	', '-20°C', 'Abcam', 'ab11433', 'http://www.abcam.com/vcp-5-antibody-ab11433.html'),
(157, 'Vimentin (D21H3)XP Rabbit mAb	', 'Rabbit (igG)	', '-20°C', 'Cell Signaling Tech.	', '5741', 'http://www.cellsignal.com/pdf/5741.pdf'),
(158, 'WDR5', 'Mouse (Monoclonal)	', '-20°C', 'Abcam', 'ab56919', 'http://www.abcam.com/wdr5-antibody-chip-grade-ab56919.html'),
(159, 'Wnt-3a	', 'Mouse (Monoclonal)	', '-20°C', 'R&D Systems	', 'MAB1324', 'http://www.rndsystems.com/Products/MAB1324'),
(161, 'Amphiphysin(EP2061Y)', 'Rabbit (Monoclonal)', '-20¡ãC', 'Abcam', 'Ab76124', 'http://www.abcam.com/Amphiphysin-antibody-EP2061Y-ab76124.html'),
(162, '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- 表的结构 `chemical`
--

CREATE TABLE IF NOT EXISTS `chemical` (
  `Ch_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Class` char(4) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Number` varchar(50) DEFAULT NULL,
  `Location` varchar(50) NOT NULL,
  PRIMARY KEY (`Ch_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=201 ;

--
-- 转存表中的数据 `chemical`
--

INSERT INTO `chemical` (`Ch_Id`, `Class`, `Name`, `Number`, `Location`) VALUES
(1, 'A', 'ACRYLAMIDE', '1150', ''),
(2, 'A', 'ACRYLAMIDE, FOR ELECTROPHORESIS, >= 99%	', 'A3553-100G', ''),
(3, 'A', '2-ACRYLOAMIDO-2-METHYL-1-PROPANESULFONIC ACID	', '282731-250G', ''),
(4, 'A', 'ACTIVATED CHARCOAL	', 'C5510-500G', ''),
(5, 'A', 'ADENINE HEMISULFATE SALT, MINIMUM 99%	', 'A9126-25G', ''),
(6, 'A', 'ADENINE HEMISULFATE SALT, MINIMUM 99%	', 'A9126-25G', ''),
(7, 'A', 'AMBERLITE IR-120	', '06428-1KG', ''),
(8, 'A', 'AMMONIUM BICARBONATE 00113164	', '113164', ''),
(9, 'A', 'AMMONIUM FORMATE	', '70221-25G-F', ''),
(10, 'A', 'AMMONIUM HYDROGEN CARBONATE 09830	', '9830', ''),
(11, 'A', 'AMMONIUM NITRATE	', '256064-25G', ''),
(12, 'A', 'AMMONIUM PERSULFATE	', '2310', ''),
(13, 'B', 'BACTO AGAR	', '214010', ''),
(14, 'B', 'BACTO PEPTONE	', 'DF0118170', ''),
(15, 'B', 'BACTO YEAST EXTRACT	', '212750', ''),
(16, 'B', '6-BENZYLAMINOPURINE	', 'B3408-5G', ''),
(17, 'B', 'BES (N,N-BIS[2-HYDROXYETHYL]-2-AMINOETHANESULFONIC ACID)	', 'B-4554', ''),
(18, 'B', 'BETA-ESTRADIOL WATER SOLUABLE	', 'E-4389', ''),
(19, 'B', 'BICINE', 'BIC703.500', ''),
(20, 'B', 'BICINE', 'BIC703.500', ''),
(21, 'B', 'BICINE', 'BIC703.500', ''),
(22, 'B', 'BIS-TRIS	', 'B9754-500G', ''),
(23, 'B', 'BORIC ACID    ', 'BP168-1', ''),
(24, 'B', 'BORIC ACID    ', 'BP168-2', ''),
(25, 'B', 'BRIJ 35    ', 'P124-500G', ''),
(26, 'B', 'BROMOPHENOL BLUE SODIUM SALT    ', '2830', ''),
(27, 'B', '1,4 BUTANEDIOL, REAGENT PLUS, 99%', '493732-1L', 'NA '),
(28, 'C', 'CALCIUM CHLORIDE DESSICANT ANHYDROUS	', 'CX0156-1', ''),
(29, 'C', 'CALCIUM CHLORIDE DIHYDRATE	', '223506-25G', ''),
(30, 'C', 'CALCIUM NITRATE TETRAHYDRATE	', 'C1396-500G', ''),
(31, 'C', 'CALCIUM PHOSPHATE, DIBASIC , DIHYDRATE	', 'CX0282-1', ''),
(32, 'C', 'CESIUM CHLORIDE	', 'BP1595-500', ''),
(33, 'C', 'CESIUM IODIDE	', '21004', ''),
(34, 'C', 'CHAPS    ', 'BP571-5', ''),
(35, 'C', 'CHAPS    ', 'BP571-5', ''),
(36, 'C', 'CHAPS    ', 'BP571-5', ''),
(37, 'C', 'CHLORAMPHENICOL    ', 'C0378-5G', ''),
(38, 'C', '2-CHLOROACETAMIDE    ', '22790-250G', ''),
(39, 'C', 'CITRIC ACID ANHYDROUS	', '27488', ''),
(40, 'C', 'COOMASSIE BRILLIANT BLUE	', '3340', ''),
(41, 'C', 'COPPER (II) ACETATE MONOHYDRATE	', '61148', ''),
(42, 'C', 'COPPER (II) SULFATE	', 'C1297-100G', ''),
(43, 'C', 'CYCLOHEXANOL, REAGENTPLUS, 99%	', '105899', ''),
(44, 'D', 'D-(+)-GALACTOSE, MINIMUM 99%', 'G0750-100G', ''),
(45, 'D', 'D-(+)-RAFFINOSE PENTA-HYDRATE, MINIMUM 98%	', 'R0250-100G', ''),
(46, 'D', 'DODECYLTRIMETHYLAMMONIUM BROMIDE, APPROXIMATELY 99%	', 'D8638-25G', ''),
(47, 'D', 'D-SORBITOL, MINIMUM 98%	', 'S6021-1KG', ''),
(49, 'D', '2,4-DICHLOROPHENOXYACETIC ACID	', 'D7299-100G', ''),
(50, 'D', '2,5- DIHYDROXYLBENZOIC ACID, 98%	', '149357-100G', ''),
(51, 'D', '2,6-DI-TERT-BUTYL-4-METHYLPHENOL	', 'B1378-100G', ''),
(52, 'E', 'EDTA (DISODIUM SALT, DIHYDRATE)    ', 'EDT001.1', ''),
(53, 'E', 'EDTA (ETHYLENEDIAMINETETRA-ACETIC ACID, 99.995%)    ', '4005', ''),
(54, 'E', 'EGTA (ETHYLENE GLYCOL BIS-2-AMINOETHYL ETHER N,N,N'',N''-TETRACETIC ACID	', '4100', ''),
(55, 'E', 'ETHIDIUM BROMIDE	', 'E7637-1G', ''),
(56, 'E', 'ETHYLENE GLYCOL	', 'E178-500', ''),
(57, 'E', 'ETHYLENE GLYCOL-BIS (BETA-AMINO-ETHYLETHER)-N,N,N'',N''-TETRA-ACETIC ACID TETRASODIUM, >=97%', 'E8145-50G', ''),
(58, 'F', '5-FLUOROOROTIC ACID MONOHYDRATE	', 'F0503-100mg', ''),
(59, 'G', 'GLUTATHIONE AGAROSE	', '2/1/4090', ''),
(60, 'G', 'GLYCEROL 2-PHOSPHATE DISODIUM SALT HYDRATE	', 'G9891-25G', ''),
(61, 'G', 'GLYCEROL, ULTRA PURE	', '800687', ''),
(62, 'G', 'GRAPHITE	', '78391-5G', ''),
(63, 'G', 'GRAPHITE POWDER	', '282863-25G', ''),
(64, 'G', 'GUANIDINE HYDROCHLORIDE	', 'G3272-500G', ''),
(65, 'G', 'GUANIDINE HYDROCHLORIDE	', 'G3272-500G', ''),
(66, 'H', 'HEPES', '11344-033', ''),
(67, 'H', 'HEPES SODIUM SALT    ', 'H3784-100G', ''),
(68, 'H', 'HEPES SODIUM SALT    ', 'H7006-100G', ''),
(69, 'H', 'HEXADECYLTRIMETHYLAMMONIUM BROMIDE    ', 'H9151-25G', ''),
(70, 'I', 'IMIDAZOLE	', '5720', ''),
(71, 'I', 'IRON (II) CHLORIDE	', '372870-25G', ''),
(72, 'I', 'IRON (III) CHLORIDE	', 'F7134-100G', ''),
(73, 'I', 'IRON(II) SULFATE HEPTAHYDRATE	', '215422-250G', ''),
(74, 'I', 'IRON(III) CHLORIDE HEXAHYDRATE	', 'F2877-100G', ''),
(75, 'I', 'ISOAMYL ALCOHOL	', 'I-9392', ''),
(76, 'K', 'KASIL', '122109K1624', ''),
(77, 'K', 'KINETIN	', 'K0753-5G', ''),
(78, 'L', 'L-(+)-TARTARIC ACID	', 'A314-500', ''),
(79, 'L', 'LB AGAR	', 'L2897-250G', ''),
(80, 'L', 'LB BROTH	', 'L3022-1KG', ''),
(81, 'L', 'L-CYSTEINE, NON-ANIMAL SOURCE	', 'C7352-25G', ''),
(82, 'L', 'L-GLUTAMIC ACID	', 'G1251-100G', ''),
(83, 'L', 'LITHIUM CHLORIDE	', '5910', ''),
(84, 'L', 'LITHIUM HYDROXIDE MONOHYDRATE	', '199542500', ''),
(85, 'L', 'L-LEUCINE	', 'L8000-25G', ''),
(86, 'L', 'L-METHIONINE, NON-ANIMAL SOURCE	', 'M5308-25G', ''),
(87, 'L', 'L-SERINE	', '84959-25G', ''),
(88, 'L', 'L-TRYPTOPHAN	', 'T0254-5G', ''),
(89, 'M', 'MAGNESIUM ACETATE TETRA-HYDRATE, MIN 99%	', 'M5661-250G', ''),
(90, 'M', 'MAGNESIUM CHLORIDE ANHYDROUS	', 'M8266-100G', ''),
(91, 'M', 'MAGNESIUM CHLORIDE SOLUTION	', 'M1028-10X1ML', ''),
(92, 'M', 'MALONIC ACID	', 'M1296-500G', ''),
(93, 'M', 'MANGANESE (II) CHLORIDE BEADS, 98%	', '328146-500G', ''),
(94, 'M', 'MANGANESE(II) CHLORIDE TETRAHYDRATE	', '230391-25G', ''),
(95, 'M', 'MANGANESE(II) SULFATE MONOHYDRATE	', 'M7634-100G', ''),
(96, 'M', 'MES HYDRATE	', 'M2933-1KG', ''),
(97, 'M', 'METHYL-ALPHA-D MANNO-PHYRANOSIDE, MINIMUM 99% GC	', 'M6882-500G', ''),
(98, 'M', 'METHYL CELLULOSE	', 'M6385-100G', ''),
(99, 'M', '[2-(METHACRYLOYLOXY)ETHYL]-TRIMETHYLAMMONIUM METHYL SULFATE SOLUTION	', '408123-500ML', ''),
(100, 'M', 'METHYLTRIETHOXYSILANE, 99%	', '175579-250G', ''),
(101, 'M', 'MINERAL OIL	', '163-2129', ''),
(102, 'M', 'MOPS', 'M1254-1KG', ''),
(103, 'M', 'MYO-INOSITOL	', 'I5125-100G', ''),
(104, 'N', 'N,N''-METHYLENEBISACRYLAMIDE	', '66667-25G', ''),
(105, 'N', 'NEOMYCIN SULFATE	', '15500900', ''),
(106, 'N', 'NICOTINIC ACID	', 'N0765-100G', ''),
(107, 'N', 'NONIDET P40 NON-IONIC	', '74385', ''),
(108, 'O', 'OCTYL-?-D-GLUCOPYRANOSIDE    ', 'O8001-5G', ''),
(109, 'P', 'PALMITIC ACID	', 'P5585-10G', ''),
(110, 'P', 'PALMITIC ACID	', 'P5585-10G', ''),
(111, 'P', 'PARAFORMALDEHYDE	', 'PX0055-3', ''),
(112, 'P', 'PARAFORMALDEHYDE	', '0172', ''),
(113, 'P', 'PAROMOMYCIN SULFATE	', '15893500', ''),
(114, 'P', 'PHENOL RED	', 'P3532-5G', ''),
(115, 'P', 'PHENYLMETHANESULFONYL FLUORIDE	', 'P7626-5G', ''),
(116, 'P', 'PIPES (PIPERAZINE-N,N''-BIS[2-ETHANESULFONIC ACID])	', 'P-1851', ''),
(117, 'P', 'POLYETHYLENE GLYCOL	', '81221', ''),
(118, 'P', 'POLYETHYLENIMINE, LINEAR	', '23966', ''),
(119, 'P', 'POLYOXYETHYLENE (10) OCTYLPHENYL ETHER	', '9410', ''),
(120, 'P', 'POLYVINYLPYRROLIDONE	', 'PVP40-50G', ''),
(121, 'P', 'PONCEAU S SOLUTION	', 'P7170-1L', ''),
(122, 'P', 'PONCEAU S SOLUTION	', 'P7170-1L', ''),
(123, 'P', 'PONCEAU S SOLUTION	', 'P3504-10G', ''),
(124, 'P', 'POTASSIUM ACETATE	', 'PX1330-1', ''),
(125, 'P', 'POTASSIUM CHLORIDE	', '7300', ''),
(126, 'P', 'POTASSIUM FERRICYANIDE	', 'PX1455-2', ''),
(127, 'P', 'POTASSIUM FLUORIDE	', '60238', ''),
(128, 'P', 'POTASSIUM HYDROXIDE	', 'P-5958', ''),
(129, 'P', 'POTASSIUM PHOSPHATE MONOBASIC	', 'P5655-100G', ''),
(130, 'P', 'POTASSIUM PHOSPHATE, DIBASIC	', 'PX1572-5', ''),
(131, 'P', 'POTASSIUM SULFATE	', 'P0772-250G', ''),
(132, 'P', 'PROPANOIC ANHYDRIDE	', '240311-50G', ''),
(133, 'R', 'RESERPINE', 'R0875-1G', ''),
(134, 'R', 'RESERPINE', 'R0875-1G', ''),
(135, 'R', 'RESERPINE', 'R0875-1G', ''),
(136, 'S', 'SILICAGEL RUBIN	', '85815', ''),
(137, 'S', 'SILVER NITRATE	', '7761-88-8', ''),
(138, 'S', 'SKIM MILK POWDER	', '70166-500G', ''),
(139, 'S', 'SKIM MILK POWDER	', '70166-500G', ''),
(140, 'S', 'SODIUM (META) PERIODATE	', '#30323', ''),
(141, 'S', 'SODIUM ACETATE TRIHYDRATE	', 'B10235-34', ''),
(142, 'S', 'SODIUM ACETATE, ANHYDROUS	', '7510', ''),
(143, 'S', 'SODIUM AZIDE EXTRA PURE	', '0066884R', ''),
(144, 'S', 'SODIUM BICARBONATE	', 'SX0320-3', ''),
(145, 'S', 'SODIUM BORATE DECAHYDRATE	', 'SX0355-1', ''),
(146, 'S', 'SODIUM CARBONATE	', 'SOC512.500', ''),
(147, 'S', 'SODIUM CHLORIDE	', '204439-5G', ''),
(148, 'S', 'SODIUM CITRATE TRIBASIC DIHYDRATE, >= 99.0%	', 'S4641-25G', ''),
(149, 'S', 'SODIUM CYANOBOROHYDRIDE	', '71435-10G', ''),
(150, 'S', 'SODIUM CYANOBOROHYDRIDE	', '156159-10G', ''),
(151, 'S', 'SODIUM DEOXYCHOLATE	', 'SX0480-2', ''),
(152, 'S', 'SODIUM DEOXYCHOLATE	', 'SX0480-2', ''),
(153, 'S', 'SODIUM DODECYL SULFATE	', 'L4509-10G', ''),
(154, 'S', 'SODIUM FLUORIDE	', 'SX0550-1', ''),
(155, 'S', 'SODIUM FORMATE	', 'S648-500', ''),
(156, 'S', 'SODIUM HYDROXIDE	', 'SX0593-1', ''),
(157, 'S', 'SODIUM IODIDE	', 'S324-100', ''),
(158, 'S', 'SODIUM MOLYBDATE DIHYDRATE	', 'M1651-100G', ''),
(159, 'S', 'SODIUM ORTHOVANADATE	', '159664', ''),
(160, 'S', 'SODIUM PHOSPHATE DIBASIC	', 'B10249-34', ''),
(161, 'S', 'SODIUM PHOSPHATE DIBASIC, HEPTAHYDRATE	', '8210', ''),
(162, 'S', 'SODIUM PHOSPHATE DIBASIC, MINIMUM 99.0%	', '87907-100G', ''),
(163, 'S', 'SODIUM PHOSPHATE MONOBASIC	', 'S0751-500G', ''),
(164, 'S', 'SODIUM PYROPHOSPHATE DECAHYDRATE	', 'SX0740-1', ''),
(165, 'S', 'SODIUM PYROPHOSPHATE DECAHYDRATE	', 'SX0740-1', ''),
(166, 'S', 'SODIUM PYRUVATE	', '4/1/3354', ''),
(167, 'S', 'SODIUM SULFATE ANHYDROUS	', 'S0S513', ''),
(168, 'S', 'SODIUM THIOSULFATE, PENTAHYDRATE	', 'SX0815-1', ''),
(169, 'S', 'SUCROSE', '8510', ''),
(170, 'T', 'TAUROCHOLIC ACID SODIUM SALT HYDRATE	', 'T4009-250MG', ''),
(171, 'T', 'TES, MINIMUM 99% TITRATION	', 'T1375-100G', ''),
(172, 'T', 'THIAMINE HYDROCHLORIDE	', 'T1270-25G', ''),
(173, 'T', 'THIDIAZURON', 'P6186-25MG', ''),
(174, 'T', 'THIOUREA, ACS REAGENT	', 'T8656-50G', ''),
(175, 'T', 'THIOUREA, ACS REAGENT	', 'T8656-50G', ''),
(176, 'T', 'TITANIUM (IV) OXIDE 1-325 MESH, 99+%	', '248576-100G', ''),
(177, 'T', 'TITANIUM (IV) OXIDE, POWDER, <5 MICRON, 99.9%+	', '224227-5G', ''),
(178, 'T', 'TITANIUM (IV) SULFATE	', '20044428', ''),
(179, 'T', 'TRICINE', 'TR1001.1', ''),
(180, 'T', 'TRIETHANOLAMINE, MINIMUM 98%	', 'TI377-100ML', ''),
(181, 'T', 'TRIS(2-CARBOXYETHYL)PHOSPHINE HYDROCHLORIDE	', '75259-1G', ''),
(182, 'T', 'TRITON X-100 SURFACTANT (POLYOXYETHYLENE(10) 0CTYLPHENYL ETHER)	', '9410', ''),
(183, 'T', 'TRITON "TM" X-100	', '21568-0010', ''),
(184, 'T', 'TRITON X-100 (ALKYL PHENOXY POLYETHOXY ETHANOL)	', 'NEF-936', ''),
(185, 'T', 'TRITON X-114	', 'X114-100ML', ''),
(186, 'T', 'TRYPTONE	', 'BP1421-500', ''),
(187, 'T', 'TWEEN 40	', 'P1504-500', ''),
(188, 'T', 'TWEEN 20	', 'P5927-500ML', ''),
(189, 'T', 'TWEEN 20	', 'P5927-500ML', ''),
(190, 'U', 'ULTRAPURE AGAROSE	', '16500-500', ''),
(191, 'U', 'ULTRAPURE AGAROSE	', '16500-500', ''),
(192, 'U', 'UREA', 'U5128-1KG', ''),
(193, 'U', 'URIDINE, MINIMUM 99%	', 'U3750-25G', ''),
(194, 'W', 'WATER', '95305', ''),
(195, 'X', 'XYLENE', '9710', ''),
(196, 'Y', 'YPD AGAR	', 'Y1500-250G', ''),
(197, 'Y', 'YPD BROTH	', 'YPD002.1', ''),
(198, 'Z', 'ZINC SULFATE HEPTAHYDRATE	', 'Z0251-100G', ''),
(199, 'Z', 'ZIRCONIUM (IV) SULFATE OXIDE, POWDER, <5 MICRON, 99%	', '230693-100G', ''),
(200, 'Z', 'ZIRCONYL CHLORIDE OCTAHYDRATE, REAGENT GRADE, 98%	', '224316-100G', '');

-- --------------------------------------------------------

--
-- 表的结构 `fridge`
--

CREATE TABLE IF NOT EXISTS `fridge` (
  `F_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(50) NOT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `Grid1` varchar(50) DEFAULT NULL,
  `Grid2` varchar(50) DEFAULT NULL,
  `Grid3` varchar(50) DEFAULT NULL,
  `Grid4` varchar(50) DEFAULT NULL,
  `Grid5` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`F_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- 转存表中的数据 `fridge`
--

INSERT INTO `fridge` (`F_Id`, `Type`, `Position`, `Grid1`, `Grid2`, `Grid3`, `Grid4`, `Grid5`) VALUES
(1, '802', 'top', 'Shelf 1: Zhibin', 'Shelf 1: XU', 'Shelf 1: Alex	', 'Shelf 1: Deeptee	', 'Shelf 1: Janice'),
(2, '802', 'top', 'Shelf 2: Zhibin', 'Shelf 2: XU', 'Shelf 2: Alex	', 'Shelf 2: Deeptee	', 'Shelf 2: Janice'),
(3, '802', 'top', 'Shelf 3: Zhibin', 'Shelf 3: Rui', 'Shelf 3: Alex	', 'Shelf 3: Deeptee	', 'Shelf 3: Janice'),
(4, '802', 'top', 'Shelf 4: Zhibin', 'Shelf 4: Rui', 'Shelf 4: Myriam', 'Shelf 4: Deeptee	', 'Shelf 4: Janice'),
(5, '802', 'top', 'Shelf 5: Zhibin', 'Shelf 5:', 'Shelf 5: Myriam', 'Shelf 5: Deeptee	', 'Shelf 5: Janice'),
(6, '802', 'bottom', 'Shelf 1: Janice', 'Shelf 1: Janice', 'Shelf 1: Janice', 'Shelf 1: Janice', 'Shelf 1: Janice'),
(7, '802', 'bottom', 'Shelf 2: Janice', 'Shelf 2: Janice', 'Shelf 2: Janice', 'Shelf 2: Janice', 'Shelf 2: Janice'),
(8, '802', 'bottom', 'Shelf 3: Janice', 'Shelf 3: Janice', 'Shelf 3: Janice', 'Shelf 3: Janice', 'Shelf 3: Janice'),
(9, '802', 'bottom', 'Shelf 4: Janice', 'Shelf 4: Janice', 'Shelf 4: Janice', 'Shelf 4: Janice', 'Shelf 4: Janice'),
(10, '802', 'bottom', 'Shelf 5: Janice ', 'Shelf 5: Janice', 'Shelf 5: Janice', 'Shelf 5: Janice', 'Shelf 5: Janice'),
(11, '20Hallway', 'bottom', 'Rui', 'Kerwin', 'Omar', 'Janice', NULL),
(12, '20Hallway', 'bottom', 'Ying', 'Danielle', 'Dominic', 'Jasmine', NULL),
(13, '20Hallway', 'bottom', 'Lyugao', 'Bo', 'Dhanu', 'Kiara', ''),
(14, '20Speevac', 'bottom ', 'DNA reagents', 'Amanda', 'Zack', 'Zhibin', NULL),
(15, '20Speevac', 'bottom ', 'RNA reagents	', 'Shelley', 'Alex', 'XU', NULL),
(16, '20Speevac', 'bottom ', 'Q-PCR reagents	', 'Emily', 'Myriam', '', ''),
(17, '801', 'top', '', '', NULL, NULL, NULL),
(20, '801', 'top', NULL, NULL, NULL, NULL, NULL),
(21, '801', 'top', NULL, NULL, '', NULL, NULL),
(22, '801', 'top', NULL, NULL, NULL, '', NULL),
(23, '801', 'top', NULL, NULL, NULL, NULL, NULL),
(24, '801', 'bottom', NULL, NULL, NULL, NULL, NULL),
(25, '801', 'bottom', NULL, NULL, NULL, NULL, NULL),
(26, '801', 'bottom', NULL, NULL, NULL, NULL, NULL),
(27, '801', 'bottom', NULL, NULL, NULL, NULL, NULL),
(28, '801', 'bottom', NULL, NULL, NULL, NULL, NULL),
(29, '4C', 'top', NULL, NULL, NULL, NULL, NULL),
(30, '4C', 'top', NULL, NULL, NULL, NULL, NULL),
(31, '4C', 'top', NULL, NULL, NULL, NULL, NULL),
(32, '4C', 'top', NULL, NULL, NULL, NULL, NULL),
(33, '4C', 'top', NULL, NULL, NULL, NULL, NULL),
(34, '20Chest', 'top', '', NULL, NULL, NULL, NULL),
(35, '20Chest', 'top', NULL, NULL, NULL, NULL, NULL),
(36, '20Chest', 'top', NULL, NULL, NULL, NULL, NULL),
(37, '20Chest', 'top', NULL, NULL, NULL, NULL, NULL),
(38, '20Chest', 'top', NULL, NULL, '', NULL, NULL),
(39, '20Chest', 'bottom', NULL, NULL, NULL, NULL, NULL),
(40, '20Chest', 'bottom', NULL, NULL, NULL, NULL, NULL),
(41, '20Chest', 'bottom', NULL, NULL, NULL, NULL, NULL),
(42, '20Chest', 'bottom', NULL, NULL, NULL, NULL, NULL),
(43, '20Chest', 'bottom', NULL, NULL, NULL, NULL, NULL),
(44, '4C', 'bottom', NULL, NULL, NULL, NULL, NULL),
(45, '4C', 'bottom', NULL, NULL, NULL, NULL, NULL),
(46, '4C', 'bottom', NULL, NULL, NULL, NULL, NULL),
(47, '4C', 'bottom', NULL, NULL, NULL, NULL, NULL),
(48, '4C', 'bottom', NULL, NULL, NULL, NULL, NULL),
(49, '20Hallway', 'bottom', NULL, NULL, NULL, NULL, NULL),
(50, '20Hallway', 'bottom', NULL, NULL, NULL, NULL, NULL),
(51, '20Speevac', 'bottom', NULL, NULL, NULL, NULL, NULL),
(52, '20Speevac', 'bottom', NULL, NULL, NULL, NULL, NULL),
(53, 'tank', 'top', 'test1', NULL, NULL, NULL, NULL),
(54, 'tank', 'top', 'test', NULL, NULL, NULL, NULL),
(55, 'tank', 'top', 'test', NULL, NULL, NULL, NULL),
(56, 'tank', 'top', 'test', '', NULL, NULL, NULL),
(57, 'tank', 'top', 'test', NULL, NULL, NULL, NULL),
(58, 'tank', 'top', 'test', NULL, NULL, NULL, NULL),
(59, 'tank', 'top', 'test', NULL, NULL, NULL, NULL),
(60, 'tank', 'top', 'test', NULL, NULL, NULL, NULL),
(61, 'tank', 'top', 'test', NULL, NULL, NULL, NULL),
(62, 'tank', 'top', 'test', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `labduty`
--

CREATE TABLE IF NOT EXISTS `labduty` (
  `Year` year(4) NOT NULL,
  `Week` varchar(2) NOT NULL,
  `D_From` date NOT NULL,
  `D_To` date NOT NULL,
  `AD_Duty` varchar(20) NOT NULL,
  `AD_Sign` varchar(20) NOT NULL,
  `CB_Duty` varchar(20) NOT NULL,
  `CB_Sign` varchar(20) NOT NULL,
  `RC_Duty` varchar(20) NOT NULL,
  `RC_Sign` varchar(20) NOT NULL,
  `PM_Duty` varchar(20) NOT NULL,
  `PM_Sign` varchar(20) NOT NULL,
  `F_Duty` varchar(20) NOT NULL,
  `F_Sign` varchar(20) NOT NULL,
  `LR_Duty` varchar(20) NOT NULL,
  `LR_Sign` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `labduty`
--

INSERT INTO `labduty` (`Year`, `Week`, `D_From`, `D_To`, `AD_Duty`, `AD_Sign`, `CB_Duty`, `CB_Sign`, `RC_Duty`, `RC_Sign`, `PM_Duty`, `PM_Sign`, `F_Duty`, `F_Sign`, `LR_Duty`, `LR_Sign`) VALUES
(2014, '22', '2014-05-26', '2014-06-01', 'Bo', '', 'Dhanu', '', 'Emily', '', 'Kiara', '', 'Nancy', '', 'Rui', ''),
(2014, '23', '2014-06-02', '2014-06-08', 'Danielle', '', 'Dominic', '', 'Kerwin', '', 'Lyugao', '', 'Omar', '', 'Xu', ''),
(2014, '24', '2014-06-09', '2014-06-15', 'Dhanu', '', 'Emily', '', 'Kiara', '', 'Nancy', '', 'Rui', '', 'Ying', ''),
(2014, '25', '2014-06-16', '2014-06-22', 'Pengyu', 'Pengyu', 'Kerwin', '', 'Lyugao', '', 'Omar', '', 'Xu', '', 'Zack', ''),
(2014, '26', '2014-06-23', '2014-06-29', 'Emily', '', 'Kiara', '', 'Nancy', '', 'Rui', '', 'Ying', '', 'Alex', ''),
(2014, '27', '2014-06-30', '2014-07-06', 'Kerwin', '', 'Lyugao', '', 'Omar', '', 'Xu', 'Xu', 'Zack', '', 'Amanda', 'Amanda'),
(2014, '28', '2014-07-07', '2014-07-13', 'Kiara', '', 'Nancy', '', 'Rui', '', 'Ying', '', 'Alex', '', 'Bo', ''),
(2014, '29', '2014-07-14', '2014-07-20', 'Lyugao', '', 'Omar', '', 'Xu', '', 'Zack', '', 'Amanda', '', 'Danielle', ''),
(2014, '30', '2014-07-21', '2014-07-27', 'Nancy', '', 'Rui', '', 'Ying', '', 'Alex', '', 'Bo', '', 'Dhanu', ''),
(2014, '31', '2014-07-28', '2014-08-03', 'Omar', '', 'Xu', '', 'Zack', '', 'Amanda', '', 'Danielle', '', 'Dominic', ''),
(2014, '32', '2014-08-04', '2014-08-10', 'Rui', '', 'Ying', '', 'Alex', '', 'Bo	', '', 'Dhanu', '', 'Emily', ''),
(2014, '33', '2014-08-11', '2014-08-17', 'Xu', '', 'Zack', '', 'Amanda', '', 'Danielle', '', 'Dominic', '', 'Kerwin', ''),
(2014, '34', '2014-08-18', '2014-08-24', 'Ying', '', 'Alex', '', 'Bo', '', 'Dhanu', '', 'Emily', '', 'Kiara', ''),
(2014, '35', '2014-08-25', '2014-08-31', 'Zack', '', 'Amanda', '', 'Danielle', '', 'Dominic', '', 'Kerwin', '', 'Lyugao', ''),
(2014, '36', '2014-09-01', '2014-09-07', 'Alex', '', 'Bo', '', 'Dhanu', '', 'Emily', '', 'Kiara', '', 'Nancy', ''),
(2014, '37', '2014-09-08', '2014-09-14', 'Amanda', '', 'Danielle', '', 'Dominic', '', 'Kerwin', '', 'Lyugao', '', 'Omar', ''),
(2014, '38', '2014-09-15', '2014-09-21', 'Bo', '', 'Dhanu', '', 'Emily', '', 'Kiara', '', 'Nancy', '', 'Rui', ''),
(2014, '39', '2014-09-22', '2014-09-28', 'Danielle', '', 'Dominic', '', 'Kerwin', '', 'Lyugao', '', 'Omar', '', 'Xu', ''),
(2014, '40', '2014-09-29', '2014-10-05', 'Dhanu', '', 'Emily', '', 'Kiara', '', 'Nancy', '', 'Rui', '', 'Ying', ''),
(2014, '41', '2014-10-06', '2014-10-12', 'Dominic', '', 'Kerwin', '', 'Lyugao', '', 'Omar', '', 'Xu', '', 'Zack', ''),
(2014, '42', '2014-10-13', '2014-10-19', 'Emily', '', 'Kiara', '', 'Nancy', '', 'Rui', '', 'Ying', '', 'Alex', ''),
(2014, '43', '2014-10-20', '2014-10-26', 'Kerwin', '', 'Lyugao', '', 'Omar', '', 'Xu', '', 'Zack', '', 'Amanda', ''),
(2014, '44', '2014-10-27', '2014-11-02', 'Kiara', '', 'Nancy', '', 'Rui', '', 'Ying', '', 'Alex', '', 'Bo', ''),
(2014, '45', '2014-11-03', '2014-11-09', 'Lyugao', '', 'Omar', '', 'Xu', '', 'Zack', '', 'Amanda', '', 'Danielle', ''),
(2014, '46', '2014-11-10', '2014-11-16', 'Nancy', '', 'Rui', '', 'Ying', '', 'Alex', '', 'Bo', '', 'Dhanu', ''),
(2014, '47', '2014-11-17', '2014-11-23', 'Omar', '', 'Xu', '', 'Zack', '', 'Amanda', '', 'Danielle', '', 'Dominic', ''),
(2014, '48', '2014-11-24', '2014-11-30', 'Rui', '', 'Ying', '', 'Alex', '', 'Bo', '', 'Dhanu', '', 'Emily', ''),
(2014, '49', '2014-12-01', '2014-12-07', 'Xu', '', 'Zack', '', 'Amanda', '', 'Danielle', '', 'Dominic', '', 'Kerwin', ''),
(2014, '50', '2014-12-08', '2014-12-14', 'Ying', '', 'Alex', '', 'Bo', '', 'Dhanu', '', 'Emily', '', 'Kiara', ''),
(2014, '51', '2014-12-15', '2014-12-21', 'Zack', '', 'Amanda', '', 'Danielle', '', 'Dominic', '', 'Kerwin', '', 'Lyugao', ''),
(2014, '52', '2014-12-22', '2014-12-28', 'Alex', '', 'Bo', '', 'Dhanu', '', 'Emily', '', 'Kiara', '', 'Nancy', ''),
(2015, '1', '2014-12-29', '2015-01-04', 'Amanda', '', 'Danielle', '', 'Dominic', '', 'Kerwin', '', 'Lyugao', '', 'Omar', '');

-- --------------------------------------------------------

--
-- 表的结构 `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `Id_M` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date DEFAULT NULL,
  `WorkPrst` varchar(100) DEFAULT NULL,
  `JnoPrstWorkshop` varchar(100) DEFAULT NULL,
  `Venue` varchar(30) DEFAULT NULL,
  `StartTime` time DEFAULT NULL,
  `EndTime` time DEFAULT NULL,
  PRIMARY KEY (`Id_M`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- 转存表中的数据 `meeting`
--

INSERT INTO `meeting` (`Id_M`, `Date`, `WorkPrst`, `JnoPrstWorkshop`, `Venue`, `StartTime`, `EndTime`) VALUES
(44, '2014-07-09', 'Fred / Zhibin', 'Dhanu', '4161', '11:00:00', '13:00:00'),
(45, '2014-07-16', 'Kiara / Amanda', 'Fred', '4161', '11:00:00', '13:00:00'),
(46, '2014-07-23', 'Deeptee / Janice', 'Ying', '4161', '11:00:00', '13:00:00'),
(47, '2014-07-30', 'Shelley / Jasmine', 'Danielle', '4161', '11:00:00', '13:00:00'),
(48, '2014-08-06', 'Omar / Emily', 'Zack', '4161', '11:00:00', '13:00:00'),
(49, '2014-08-13', 'Danielle / Dhanu', 'Jasmine', '4161', '11:00:00', '13:00:00'),
(50, '2014-09-10', 'Kerwin / Zack', 'Rui', '4161', '11:00:00', '13:00:00'),
(51, '2014-09-17', 'Lyugao / Kiara', 'Deeptee', '4161', '11:00:00', '13:00:00'),
(52, '2014-09-24', 'Alex / Rui', 'Amanda', '4161', '12:30:00', '14:30:00'),
(53, '2014-10-01', 'Jasmine / Amanda', 'Alex', '4161', '11:00:00', '13:00:00'),
(54, '2014-08-20', 'Dominic / Christine', 'Nancy', '4161', '11:00:00', '13:00:00'),
(55, '2014-08-27', 'Ying / Myriam', 'Nancy', '4161', '11:00:00', '13:00:00'),
(56, '2014-09-03', 'Xu / Stefanie', 'Zhibin', '4161', '11:00:00', '13:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `msstatus`
--

CREATE TABLE IF NOT EXISTS `msstatus` (
  `MS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Time_K` datetime NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Gradient` varchar(30) NOT NULL,
  `Examples` varchar(30) NOT NULL,
  `Species` varchar(30) NOT NULL,
  `Urgent` varchar(50) NOT NULL,
  `Labeling` varchar(100) NOT NULL,
  `Project` varchar(50) NOT NULL,
  `Digestion` varchar(50) NOT NULL,
  `Equipment` varchar(50) NOT NULL,
  `Finished` varchar(10) NOT NULL,
  `Comment` text NOT NULL,
  PRIMARY KEY (`MS_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- 转存表中的数据 `msstatus`
--

INSERT INTO `msstatus` (`MS_ID`, `Time_K`, `Name`, `Gradient`, `Examples`, `Species`, `Urgent`, `Labeling`, `Project`, `Digestion`, `Equipment`, `Finished`, `Comment`) VALUES
(24, '2014-04-10 15:03:56', 'Bo', '120', '144', 'Mouse', 'No hurry', '', 'GRK2 project biological replicate', 'In-solution (urea and desalted)', 'Oribtrap Elite (new one)', 'Analyzing', ''),
(25, '2014-05-10 23:42:52', 'Zhibin', '120', '990', 'Human', 'ASAP', '', 'Synotasome', 'In-solution (urea and desalted)', 'Q-Exactive', 'Waiting', ''),
(26, '2014-06-06 11:44:01', 'Emily', '60', '5', 'Human', 'ASAP', '', 'IBD', 'In-solution (urea and desalted)', 'Q-Exactive', 'Waiting', 'Require sample information asap to proceed with further sample processing'),
(27, '2014-06-11 15:03:15', 'Kiara', '60', '80', 'Human', 'No hurry', '', 'PCSK9 secretome interactome', 'In-gel(comassie blue staining)', 'Q-Exactive', 'Analyzing', ' '),
(28, '2014-06-12 15:48:58', 'Xu', '120', '56', 'Bacteria', 'ASAP', '', 'IBD project', 'In-solution (urea and desalted)', 'Oribtrap Elite (new one)', 'Waiting', ' '),
(29, '2014-06-27 14:01:09', 'Amanda', '120', '48', 'Human', 'ASAP', '', 'IBD', 'FASP', 'Oribtrap Elite (new one)', 'Waiting', ' '),
(30, '2014-07-03 14:17:48', 'Shelley', '120', '60', 'Human', 'ASAP', '', 'IBD intestinal aspirates', 'FASP/SCX/C18    ', 'Oribtrap Elite (new one)', 'Waiting', ' '),
(31, '2014-07-03 19:56:40', 'Ying', '60', '16', 'algae', 'ASAP', '', 'Algae proteomics', 'In-gel(comassie blue staining)', 'Orbitrap XL (old one)', 'Analyzing', 'Running time for each sample may be set as 90 minutes.'),
(32, '2014-07-04 14:20:32', 'Deeptee', '60', '4', 'Human', 'ASAP', '', 'TAILS', 'In-solution (urea and desalted)', 'Orbitrap XL (old one)', 'Waiting', ' '),
(33, '2014-07-07 10:49:14', 'Rui', '120', '6', 'Human', 'ASAP', '', 'glyco', 'In-solution (urea and desalted)', 'Orbitrap XL (old one)', 'Waiting', ' '),
(34, '2014-07-07 16:29:24', 'Amanda', '120', '120', 'Human', 'ASAP', '', 'IBD', 'FASP', 'Oribtrap Elite (new one)', 'Waiting', ' '),
(35, '2014-07-07 21:44:21', 'Bo', '120', '9', 'Human', 'ASAP', '', 'RBBP5', 'In-gel(comassie blue staining)', 'Q-Exactive', 'Waiting', ' ');

-- --------------------------------------------------------

--
-- 表的结构 `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `Id_P` int(11) NOT NULL AUTO_INCREMENT,
  `DateTime` datetime NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Title` varchar(60) NOT NULL,
  `Content` text NOT NULL,
  `Comment` text NOT NULL,
  PRIMARY KEY (`Id_P`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `post`
--

INSERT INTO `post` (`Id_P`, `DateTime`, `Name`, `Title`, `Content`, `Comment`) VALUES
(3, '2014-07-07 16:39:38', 'Admin', 'User ID & Password', 'The default User ID is your First Name, and the Password is 123. Please change your password ASAP. If you have any question, please contact Zhibin directly.', '');

-- --------------------------------------------------------

--
-- 表的结构 `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Year` year(4) NOT NULL,
  `Week` int(2) NOT NULL,
  `Date` date NOT NULL,
  `Review` text,
  `Result` varchar(100) DEFAULT NULL,
  `Discuss` varchar(100) DEFAULT NULL,
  `Plan` text,
  `Feedback` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- 转存表中的数据 `report`
--

INSERT INTO `report` (`ID`, `Name`, `Year`, `Week`, `Date`, `Review`, `Result`, `Discuss`, `Plan`, `Feedback`) VALUES
(22, 'Xu', 2014, 25, '2014-06-19', 'xxxxxxxxxxxxxxxxx', 'Yes, some slides', 'Yes, with Janice', 'xxxxxxxxxxxxx', 'Zhibin: sfkaslfklsafsfafsaf\r\nsdfasfsaf\r\nsfasdfa'),
(24, 'Alex', 2014, 25, '2014-06-19', 'ccccccccccccccccc', 'Yes, some slides', 'Yes, with Janice', 'ssssssssssss', 'Pengyu: safljaslkf''\r\nssfasf\\sdfmalsmdflsdfa'),
(27, 'Kerwin', 2014, 25, '2014-06-19', 'sssssssssss', 'Yes, some slides', 'Yes, with Janice', 'sssssssss', 'Pengyu: ssssssssss'),
(28, 'Kerwin', 2014, 25, '2014-06-19', 'ssssssssssss', 'Yes, some slides', 'Yes, with Janice', 'ddddddddddddddd', 'Pengyu: ssssssssss'),
(29, 'Rui', 2014, 25, '2014-06-19', '1111111111111', 'Yes, some slides', 'Yes, with Janice', '1111111111111', ''),
(31, 'Bo', 2014, 25, '2014-06-19', '&lt;strong&gt; ''''', 'Yes, some slides', 'Yes, with Janice', 'ssss', ''),
(32, 'Pengyu', 2014, 25, '2014-06-19', 'I;''mesf  chen''ssdkf godsd', 'Yes, some slides', 'Yes, with Janice', 'I;''mesf  chen''ssdkf godsd', ''),
(33, 'Pengyu', 2014, 26, '2014-06-23', '11111111111111111111\r\n222222222222222222222\r\n333333333333333333333\r\n4444444444444444444', 'Yes, some slides', 'Yes, with Janice', '11111111111111111111\r\n222222222222222222222\r\n333333333333333333333\r\n4444444444444444444', 'Pengyu: 111111\r\n222222\r\n3333333<br />Pengyu: 4444444\r\n5555555\r\n66666666<br />Zhibin: good 1\r\ngood2<br />Pengyu: ddddddddddd'),
(34, 'Bo', 2014, 26, '2014-06-24', 'ss', 'Yes, some slides', 'Yes, with Janice', 'ss', 'Pengyu: ÊÇ·¨Ê¿´ó·ò<br />Pengyu: sssssssssssss'),
(35, 'Pengyu', 2014, 27, '2014-07-03', 'aaaaaaaaa', 'Yes, some slides', 'Yes, with Janice', 'aaaaaaaaaaa', 'Zhibin: sssssssssss<br />Xu: lkl;skfl;skdlfkslfjlsf\r\n<br />Xu: 1231\r\n131\r\n13213<br />Xu: a'),
(36, 'Xu', 2014, 27, '2014-07-03', 'å•Šå•Šå£«å¤§å¤«', 'Yes, some slides', 'Yes, with Janice', 'æ˜¯å¦æ˜¯', 'Xu: æ­»ä¿©ååŽ†å²è®°å½• ä¸Šå¼€å‘åŽ†å²è®°å½•æ®äº†è§£å¤±è”é£žæœºäº†ç¥žç»åˆ†è£‚æ—¶é—´åˆ°äº†ç¦å»ºçœ<br />Xu: æ˜¯æ˜¯çš„å‘ç”Ÿå‘é€æ‰€å‘ç”Ÿçš„'),
(37, 'Zhibin', 2014, 27, '2014-07-03', 'aaa', 'Yes, some slides', 'Yes, with Janice', 'bbb', 'Test4: Good job<br />Test4: Goskdfe'),
(38, 'Alex', 2014, 27, '2014-07-03', 'c', 'Yes, some slides', 'Yes, with Janice', 'c', ''),
(39, 'Bo', 2014, 27, '2014-07-03', 'a', 'Yes, some slides', 'Yes, with Janice', 'a', ''),
(42, 'Test4', 2014, 27, '2014-07-04', 'Today is 2014-07-04 week 27 (From 2014-06-30 Mon to 2014-07-06 Sun)\r\nToday is 2014-07-04 week 27 (From 2014-06-30 Mon to 2014-07-06 Sun)\r\nToday is 2014-07-04 week 27 (From 2014-06-30 Mon to 2014-07-06 Sun)\r\n', 'Yes, some slides', 'Yes, with Janice', 'Today is 2014-07-04 week 27 (From 2014-06-30 Mon to 2014-07-06 Sun)\r\nToday is 2014-07-04 week 27 (From 2014-06-30 Mon to 2014-07-06 Sun)\r\nToday is 2014-07-04 week 27 (From 2014-06-30 Mon to 2014-07-06 Sun)\r\n', ''),
(43, 'Zhibin', 2014, 28, '2014-07-07', '1111111111111111\r\n2222222222222222\r\n3333333333333333\r\n4444444444444444', 'Yes, some slides', 'Yes, with Janice', '1111111111111111\r\n2222222222222222\r\n3333333333333333\r\n4444444444444444', ''),
(44, 'Xu', 2014, 28, '2014-07-07', '1111111111111<br>\r\n2222222222<br>\r\n333333333333<br>', 'Yes, some slides', 'Yes, with Janice', '1111111111111<br>\r\n2222222222<br>\r\n333333333333<br>', ''),
(48, 'Test1', 2014, 28, '2014-07-07', 'Everybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.\r\nEverybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.\r\nEverybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.\r\nEverybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.\r\nEverybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.\r\n\r\n', 'Yes, some slides', 'Yes, with Janice', 'Everybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.\r\nEverybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.\r\n\r\nEverybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.\r\n\r\n', ''),
(49, 'Test2', 2014, 28, '2014-07-07', 'Everybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.\r\nEverybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.\r\nEverybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.\r\nEverybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.', 'Yes, some slides', 'Yes, with Janice', 'Everybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.<br />Everybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.<br />Everybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.<br />Everybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.<br />Everybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.', ''),
(50, 'Test3', 2014, 28, '2014-07-07', '1<br />2<br />3<br />4', 'Yes, some slides', 'Yes, with Janice', '1<br />2<br />3<br />4', '');

-- --------------------------------------------------------

--
-- 表的结构 `silac`
--

CREATE TABLE IF NOT EXISTS `silac` (
  `Si_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Organism` varchar(100) DEFAULT NULL,
  `Tissue` varchar(100) DEFAULT NULL,
  `Type` varchar(100) DEFAULT NULL,
  `Keeper` varchar(100) DEFAULT NULL,
  `Location` varchar(50) NOT NULL,
  PRIMARY KEY (`Si_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `silac`
--

INSERT INTO `silac` (`Si_Id`, `Name`, `Organism`, `Tissue`, `Type`, `Keeper`, `Location`) VALUES
(1, 'Neuro 2A', 'Mouse', 'Brain', 'neuroblast  ', 'Deeptee, Kerwin', ''),
(2, 'HEPA 1-6', 'Mouse', 'Liver', 'epithelial', 'Deeptee, Kerwin', ''),
(3, 'PEA 13', 'Mouse', 'embryo', 'fibroblast', 'Deeptee, Kerwin', ''),
(4, 'MEF-1', 'Mouse', 'embryo', 'fibroblast', 'Deeptee, Kerwin', ''),
(5, 'ATT-20', 'Mouse', 'pituitary', 'round cells', 'Deeptee, Kerwin', ''),
(6, 'HCT-116', 'Human', 'colon', 'epithelial', 'Deeptee, Kerwin', ''),
(7, 'HuH-7', 'Human', 'liver', 'epithelial-like  ', 'Deeptee, Kerwin', ''),
(8, 'HEK-293', 'Human', 'kidney  ', 'epithelial', 'Deeptee, Kerwin', ''),
(9, 'THP-1', ' Human (male)', 'Blood', 'Leukocyte (non-adherent)/monocyte', 'Amanda', ''),
(10, 'Jurkat-E6', ' Human (male)', 'Blood', ' T-lymphocyte (non-adherent)', 'Amanda', ''),
(11, 'CHO', 'hamster, Chinese', 'ovary', 'epithelial-like', 'Deeptee', ''),
(12, 'N38', 'Mouse (male, embryo)', 'hypothalamus', 'neuroblast', 'Kerwin', ''),
(13, 'CLU-181', 'Mouse (male, adult)', 'hypothalamus', 'neuroblast', 'Kerwin', ''),
(14, 'CLU-188', 'Mouse (male, adult)', 'hypothalamus', 'neuroblast', 'Kerwin', '');

-- --------------------------------------------------------

--
-- 表的结构 `tcduty`
--

CREATE TABLE IF NOT EXISTS `tcduty` (
  `Year` year(4) NOT NULL,
  `Week` int(2) NOT NULL,
  `D_From` date NOT NULL,
  `D_To` date NOT NULL,
  `BB_Duty` varchar(15) NOT NULL,
  `BB_Sign` varchar(15) NOT NULL,
  `SC_Duty` varchar(15) NOT NULL,
  `SC_Sign` varchar(15) NOT NULL,
  `RP_Duty` varchar(15) NOT NULL,
  `RP_Sign` varchar(15) NOT NULL,
  `DA_Duty` varchar(15) NOT NULL,
  `DA_Sign` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `tcduty`
--

INSERT INTO `tcduty` (`Year`, `Week`, `D_From`, `D_To`, `BB_Duty`, `BB_Sign`, `SC_Duty`, `SC_Sign`, `RP_Duty`, `RP_Sign`, `DA_Duty`, `DA_Sign`) VALUES
(2014, 22, '2014-05-26', '2014-06-01', 'Pengyu', '', 'Alex', '', 'Rui', '', 'Lyugao', ''),
(2014, 23, '2014-06-02', '2014-06-08', 'Kerwin', '', 'Amanda', '', 'Xu', '', 'Omar', ''),
(2014, 24, '2014-06-09', '2014-06-15', 'Kiara	', '', 'Bo', '', 'Alex	', '', 'Rui', ''),
(2014, 25, '2014-06-16', '2014-06-22', 'Lyugao', '', 'Kerwin', '', 'Amanda', '', 'Xu', ''),
(2014, 26, '2014-06-23', '2014-06-29', 'Omar', '', 'Kiara', '', 'Bo', 'Bo', 'Alex', ''),
(2014, 27, '2014-06-30', '2014-07-06', 'Rui', 'Rui', 'Lyugao', '', 'Kerwin', '', 'Amanda', 'Amanda'),
(2014, 28, '2014-07-07', '2014-07-13', 'Xu', '', 'Omar', '', 'Kiara', '', 'Bo', ''),
(2014, 29, '2014-07-14', '2014-07-20', 'Alex	', '', 'Rui', '', 'Lyugao', '', 'Kerwin', ''),
(2014, 30, '2014-07-21', '2014-07-27', 'Amanda', '', 'Xu', '', 'Omar', '', 'Kiara', ''),
(2014, 31, '2014-07-28', '2014-08-03', 'Bo', '', 'Alex', '', 'Rui', '', 'Lyugao', ''),
(2014, 32, '2014-08-04', '2014-08-10', 'Kerwin', '', 'Amanda', '', 'Xu', '', 'Omar', ''),
(2014, 33, '2014-08-11', '2014-08-17', 'Kiara', '', 'Bo', '', 'Alex', '', 'Rui', ''),
(2014, 34, '2014-08-18', '2014-08-24', 'Lyugao', '', 'Kerwin', '', 'Amanda', '', 'Xu', ''),
(2014, 35, '2014-08-25', '2014-08-31', 'Omar', '', 'Kiara', '', 'Bo', '', 'Alex', ''),
(2014, 36, '2014-09-01', '2014-09-07', 'Rui', '', 'Lyugao', '', 'Kerwin', '', 'Amanda', ''),
(2014, 37, '2014-09-08', '2014-09-14', 'Xu', '', 'Omar', '', 'Kiara', '', 'Bo', ''),
(2014, 38, '2014-09-15', '2014-09-21', 'Alex', '', 'Rui', '', 'Lyugao', '', 'Kerwin', ''),
(2014, 39, '2014-09-22', '2014-09-28', 'Amanda', '', 'Xu	', '', 'Omar', '', 'Kiara', ''),
(2014, 40, '2014-09-29', '2014-10-05', 'Bo', '', 'Alex', '', 'Rui', '', 'Lyugao', ''),
(2014, 41, '2014-10-06', '2014-10-12', 'Kerwin', '', 'Amanda', '', 'Xu', '', 'Omar', ''),
(2014, 42, '2014-10-13', '2014-10-19', 'Kiara', '', 'Bo', '', 'Alex', '', 'Rui', ''),
(2014, 43, '2014-10-20', '2014-10-26', 'Lyugao', '', 'Kerwin', '', 'Amanda', '', 'Xu', ''),
(2014, 44, '2014-10-27', '2014-11-02', 'Omar', '', 'Kiara	', '', 'Bo', '', 'Alex', ''),
(2014, 45, '2014-11-03', '2014-11-09', 'Rui', '', 'Lyugao', '', 'Kerwin', '', 'Amanda', ''),
(2014, 46, '2014-11-10', '2014-11-16', 'Xu', '', 'Omar', '', 'Kiara', '', 'Bo', ''),
(2014, 47, '2014-11-17', '2014-11-23', 'Alex	', '', 'Rui', '', 'Lyugao', '', 'Kerwin', ''),
(2014, 48, '2014-11-24', '2014-11-30', 'Amanda', '', 'Xu', '', 'Omar', '', 'Kiara	', ''),
(2014, 49, '2014-12-01', '2014-12-07', 'Bo', '', 'Alex', '', 'Rui', '', 'Lyugao', ''),
(2014, 50, '2014-12-08', '2014-12-14', 'Kerwin', '', 'Amanda', '', 'Xu', '', 'Omar', ''),
(2014, 51, '2014-12-15', '2014-12-21', 'Kiara', '', 'Bo', '', 'Alex', '', 'Rui', ''),
(2014, 52, '2014-12-22', '2014-12-28', 'Lyugao', '', 'Kerwin', '', 'Amanda', '', 'Xu', ''),
(2015, 1, '2014-12-29', '2015-01-04', 'Omar', '', 'Kiara', '', 'Bo', '', 'Alex', '');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id_User` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Gender` char(4) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Paswd` varchar(50) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `Meeting` tinyint(1) NOT NULL DEFAULT '0',
  `Recources` tinyint(1) NOT NULL DEFAULT '0',
  `MS` tinyint(1) NOT NULL DEFAULT '0',
  `Report` tinyint(1) NOT NULL DEFAULT '0',
  `Fridge` tinyint(1) NOT NULL DEFAULT '0',
  `Human` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`Id_User`, `Name`, `Gender`, `Email`, `Paswd`, `hash`, `Meeting`, `Recources`, `MS`, `Report`, `Fridge`, `Human`) VALUES
('Admin', 'Admin', 'M', 'pchen036@uottawa.ca', '', '', 1, 1, 1, 1, 1, 1),


-- --------------------------------------------------------

--
-- 表的结构 `vectors`
--

CREATE TABLE IF NOT EXISTS `vectors` (
  `Vec_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Source` varchar(50) DEFAULT NULL,
  `Sequence` varchar(50) DEFAULT NULL,
  `Link` varchar(100) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Vec_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- 转存表中的数据 `vectors`
--

INSERT INTO `vectors` (`Vec_Id`, `Name`, `Source`, `Sequence`, `Link`, `Location`) VALUES
(1, 'N-Term 3X Flag vector	', 'Mac Tyres lab	', 'NA (Obtained from Danielle)	', 'N/A	', 'CHEST FEEZER RACK 9 BOX 1	'),
(2, 'C-Term Flag vector	', 'Mac Tyres lab	', 'NA (Obtained from Danielle)	', 'N/A	', 'CHEST FEEZER RACK 9 BOX 1	'),
(3, 'DRP1 C-Term Flag	', 'In house	', 'NA (Obtained from Danielle)	', 'N/A	', 'CHEST FEEZER RACK 9 BOX 1	'),
(4, 'BNIP3 C-Term Flag	', 'In house	', 'NA (Obtained from Danielle)	', 'N/A	', 'CHEST FEEZER RACK 9 BOX 1	'),
(5, 'MCL1 C-Term Flag	', 'In house	', 'NA (Obtained from Danielle)	', 'N/A	', 'CHEST FEEZER RACK 9 BOX 1	'),
(6, 'Park2 N-Term 3X Flag	', 'In house	', 'NA (Obtained from Danielle)	', 'N/A	', 'CHEST FEEZER RACK 9 BOX 1	'),
(8, 'Myc-DDK-tagged ORF clone of Homo sapiens apolipoprotein E (APOE)	', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_000041/RC200395/APOE.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(9, 'Myc-DDK-tagged ORF clone of Homo sapiens clusterin (CLU), transcript variant 1	', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_001831/RC211875/CLU.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(10, 'Myc-DDK-tagged ORF clone of Homo sapiens clusterin (CLU), transcript variant 2	', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_203339/RC203941/CLU.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(11, 'Myc-DDK-tagged ORF clone of Homo sapiens low density lipoprotein receptor (LDLR), transcript variant', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_000527/RC200006/LDLR.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(12, 'Myc-DDK-tagged ORF clone of Homo sapiens phosphatidylinositol binding clathrin assembly protein (PIC', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_007166/RC213791/PICALM.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(13, 'Myc-DDK-tagged ORF clone of Homo sapiens synuclein, alpha (non A4 component of amyloid precursor) (S', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_000345/RC210606/SNCA.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(14, 'Myc-DDK-tagged ORF clone of Homo sapiens platelet-activating factor receptor (PTAFR), transcript var', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_001164721/RC228830/PTAFR.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(15, 'Myc-DDK-tagged ORF clone of Homo sapiens EH-domain containing 1 (EHD1)	', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_006795/RC211158/EHD1.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(16, 'Myc-DDK-tagged ORF clone of Homo sapiens EH-domain containing 2 (EHD2)	', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_014601/RC204848/EHD2.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(17, 'Myc-DDK-tagged ORF clone of Homo sapiens EH-domain containing 3 (EHD3)	', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_014600/RC214168/EHD3.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(18, 'Myc-DDK-tagged ORF clone of Homo sapiens EH-domain containing 4 (EHD4)	', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_139265/RC202486/EHD4.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(19, 'pCMV6-Entry (C-terminal Myc and DDK Tagged)	', 'Origene', 'A', 'http://www.origene.com/destination_vector/PS100001.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(20, 'Myc-DDK-tagged ORF clone of Homo sapiens leucine-rich repeat kinase 2 (LRRK2) 	', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_198578/RC216373/LRRK2.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(21, 'pCMV2 Flag Smyd2	', 'In house	', 'NA (Mohamed)	', 'N/A', 'N/A'),
(22, 'pCMV2 Flag smyd3	', 'In house	', 'NA (Mohamed)	', 'N/A', 'N/A'),
(23, 'Homo sapiens interleukin 11 (IL11) as transfection-ready DNA NM_000641.2	', 'Origene', 'A', 'http://www.origene.com/human_cdna/NM_000641/SC322493/IL11.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(24, 'Myc-DDK-tagged ORF clone of Homo sapiens interleukin 11 (IL11)	', 'Origene', 'A', 'http://www.origene.com/orf_clone/trueclone/NM_000641/RC204493/IL11.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(25, 'PrecisionShuttle mammalian vector with non-tagged expression	', 'Origene', 'A', 'http://www.origene.com/destination_vector/PS100020.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(26, 'PCSK9-V5 pIRES2 EGFP	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(27, 'hPCSK9 (D374Y) no tag pIRES2 EGFP	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(28, 'hPCSK9(delta 33-46 aa) V5 tag pIRES2 EGFP	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(29, 'pIRES2-EGFP	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(30, 'pIRES2-EGFP Human PCSK7(full length, wild type), no tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(31, 'pIRES2-EGFP Human Furin (full length, wild type)+V5 tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(32, 'pIRES2-EGFP Human BDNF (full Length,wild type)+ V5 tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(33, 'pIRES2-EGFP Human PACE4 (full length,wild type)+V5 tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(34, 'pIRES2-EGFP Mouse PC5A (full length, wild type)+ V5tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(35, 'pIRES2-EGFP Mouse PC5B (full length, wild type)+ V5tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'N/A'),
(36, 'pIRES2-EGFP Human SKI1(full length,wild type)+V5 tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(37, 'pIRES2-EGFP Rat PCSK9-BTMD (SOLUBLE), NO TAG	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(38, 'pCMV6.xI5-Human Transferrin Receptor C	', 'Nabil Seidah	', 'A', 'http://www.origene.com/human_cdna/NM_003234/SC316996/TFRC.aspx', 'CHEST FEEZER RACK 9 BOX 1	'),
(39, 'pIRES2- EGFP Human AnnexinA1 (full length, wild type) + HA tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(40, 'pIRES2- EGFP Human AnnexinA2 (full length, wild type) + HA tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(41, 'pIRES2- EGFP Human AnnexinA2 (delta R1) + HA tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(42, 'pIRES2- EGFP Human AnnexinA2 (delta R2) + HA tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(43, 'pIRES2- EGFP Human AnnexinA2 (delta R3) + HA tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(44, 'pIRES2- EGFP Human AnnexinA2 (delta R4) + HA tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(45, 'pIRES2-EGFP Human PSCK7+ (CT of hFurin), no tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(46, 'pIRES2-EGFP Human PSCK7+ (TM + CT of hFurin), no tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(47, 'pIRES2-EGFP Human FURIN+ (CT of hPSCK7), no tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	'),
(48, 'pIRES2-EGFP Human FURIN+ (TM + CT of hPSCK7), no tag	', 'Nabil Seidah	', 'A (CLONETECH)	', 'http://www.synthesisgene.com/vector/pIRES2-EGFP.pdf', 'CHEST FEEZER RACK 9 BOX 1	');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
