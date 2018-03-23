-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 07:05 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `SKU` varchar(14) DEFAULT NULL,
  `P/N Name / Description` varchar(52) DEFAULT NULL,
  `Keywords 1` varchar(20) DEFAULT NULL,
  `Keyword 2` varchar(13) DEFAULT NULL,
  `Newark p/n` varchar(18) DEFAULT NULL,
  `quantity` varchar(8) DEFAULT NULL,
  `price each` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`SKU`, `P/N Name / Description`, `Keywords 1`, `Keyword 2`, `Newark p/n`, `quantity`, `price each`) VALUES
('CAP-107_50V', 'Cap 100000000pf 100 uF 50V Electrolytic', '', 'through hole', '69K7856', '300', '0.063'),
('CAP-107_35V', 'Cap 100000000pf 100uF 107CKE035M @ 35V', '', 'through hole', '69K7903', '800', '0.053'),
('CAP-106_35V', 'Cap 10000000pf 10uF 106RSS035M @ 35V', '', 'through hole', '55M4300', '300', '0.03'),
('CAP-104_50V', 'Cap 100000pf 0.1uf, ± 20%, X7R, 50 V', '', 'through hole', '95C0981', '1500', '0.027'),
('CAP-103_100V', 'Cap 10000pf 0.01 uF 100V Poly Film', '', 'through hole', '07H2781', '100', '0.05'),
('CAP-202_50V', 'Cap 2000pf 0.002 uF 50V Ceramic Disc', '', 'through hole', '97M4056', '100', '0.175'),
('CAP-51_50V', 'Cap 51pf cog', '', 'through hole', '46P6591', '200', '0.06'),
('1n751a', '5.1v Zener Diode, 500 mW, DO-204AH, 5 %,', '', 'through hole', '13T8945', '2500', '0.019'),
('1n4007', 'Diode: 1n4001...1n4007, 1amp', '', 'through hole', '05AC0531', '2500', '0.015'),
('MCP9700', 'Temperature Sensor, to92 -- see data sheet', '', 'to92', '16M5162', '500', '0.196'),
('OPTO-TEPT5600', 'Opto - Transistor NPN Phototransistor, 570 nm T1-3/4', 'TEPT5600 or TEPT5700', 't-1-3/4 (5mm)', '93K0363', '100', '0.396'),
('OPTO-SFH203-FA', 'SFH203-FA DIODE PHOTO 900NM 20 T-1 3/4;', '', 't-1-3/4 (5mm)', '01M8805', '100', '0.318'),
('2N2222A', '2n2222 or PN2222 NPN Transistor, TO-92', '', 'to92', '50H5114', '4000', '0.026'),
('2N2907A', '2n2907 or PN2907 PNP Transistor, TO-92', '', 'to92', '69R5820', '2000', '0.022'),
('2n3904', '2n3904', '', 'to92', '29H2025', '2000', '0.027'),
('2n3906', '2n3906', '', 'to92', '69R6840', '1000', '0.019'),
('bc549', 'bc549 - NPN to92', 'NPN to92', 'to92', '31Y0485', '300', '0.045'),
('k1400e70', 'DIAC / SIDAC, 130 V, 146 V, 10 µA, TO-92, 2 Pins', 'k1400e70', 'to92', '11J9124', '100', ''),
('TIP32', 'TIP32, to220', '', 'to220', '45J2285', '300', '0.21'),
('BT131-600,412', 'Triac BT131-600,412 600V, 5W, TO-92', '', 'to92', '89K1793', '100', '0.233'),
('RQ-1R0', '1 Ohm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38k0255', '200', '0.043'),
('RQ-102', '1.0kOhm 5% MCF 0.25W', '1/4w resistors 5%', 'through hole', '16X9589', '5000', '0.0081'),
('RQ-122', '1.2kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38k0334', '200', '0.029'),
('RQ-152', '1.5kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '58K5015 or 38k0340', '1000', '0.013'),
('RQ-10R', '10 Ohm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38k0398', '200', '0.073'),
('RQ-101', '100 Ohm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '58k5000', '1000', '0.013'),
('RQ-103', '10kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '', '5000', '0.008'),
('RQ-106', '10MOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '26m1133', '500', '0.022'),
('RQ-123', '12kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38k0335', '300', '0.029'),
('RQ-181', '180 Ohm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38k0345', '200', '0.029'),
('RQ-105', '1MOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38K0330', '1500', '0.017'),
('RQ-272', '2.7kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38k0358', '100', '0.029'),
('RQ-203', '20kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '58k5026', '200', '0.005'),
('RQ-223', '22kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38k0351', '100', '0.029'),
('RQ-202', '2kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38k0353', '200', '0.029'),
('RQ-331', '330 Ohm 5% MCF 0.25W', '1/4w resistors 5%', 'through hole', '28x2201', '10000', '0.006'),
('RQ-334', '330kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38K0366', '1000', '0.017'),
('RQ-4R7', '4.7Ohm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38K0377', '200', '0.029'),
('RQ-471', '470 Ohm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '16X9594', '2500', '0.013'),
('RQ-473', '47kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '58K5057', '500', '0.017'),
('RQ-512', '5.1kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '59k8387', '200', '0.005'),
('RQ-562', '5.6kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38k0382', '300', '0.029'),
('RQ-51R', '51 Ohm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '58k3865', '100', '0.007'),
('RQ-563', '56kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38k0383', '200', '0.029'),
('RQ-682', '6.8kOhm 5% MCF 0.25W', '1/4 W Resistor 5%', 'through hole', '38k0388', '200', '0.029'),
('DIPSW04', 'Dip SW-04, Raised, Low Profile Body', 'DIPSW04', 'dip', '68K9398', '1000', '0.45'),
('DIPSW08', 'Dip SW-08, Raised, Low Profile Body', 'DIPSW08', 'dip', '69K7041', '200', '0.8'),
('L293', '600mA quad half h-bridges L293 or sn755410', 'L293', 'dip', '06F9523', '200', '2.46'),
('7400', '74HCT00', '7400', 'dip', '08F6379', '500', '0.12'),
('7408', '74HCT08', '7408', 'dip', '60K6805', '250', '0.146'),
('PIC16F505', 'PIC16f505', 'PIC16F505', 'dip', '96K3869', '300', '0.68'),
('VREG3.3', 'LD1117AV33 3.3v Reg @ 1.2A', 'VREG3.3', 'to220', '26M0152', '200', '0.395'),
('LM358', 'Op-Amp, 2, Dual LM358', 'LM358', 'dip', '67K0318', '1200', '0.13'),
('MSP430-bOARD', 'TI MSP-EXP430G2 TI Launch Pad', 'MSP430-bOARD', '', '77R3863', '200', '10.29'),
('as.bag-8X5', 'antistatic bag - silver bag 100pcs', '8"x5" ZipLock', '', '71P4659', '6', '10.59');

-- --------------------------------------------------------

--
-- Table structure for table `user info`
--

CREATE TABLE `user info` (
  `Name` varchar(9) DEFAULT NULL,
  `znumber` int(6) DEFAULT NULL,
  `class-crn` int(5) DEFAULT NULL,
  `college` varchar(2) DEFAULT NULL,
  `department` varchar(4) DEFAULT NULL,
  `class` varchar(3) DEFAULT NULL,
  `classnumber` varchar(5) DEFAULT NULL,
  `classname` varchar(30) DEFAULT NULL,
  `email` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user info`
--

INSERT INTO `user info` (`Name`, `znumber`, `class-crn`, `college`, `department`, `class`, `classnumber`, `classname`, `email`) VALUES
('asdfggh', 346222, 38172, 'EG', 'EEL', 'EEL', '3118L', 'Electronics Laboratory 1', 'asdfggh@fau.edu'),
('XW2', 353795, 40312, 'EG', 'CSCE', 'COP', '2220', 'Intro to Programming in C', 'XW2@fau.edu'),
('rtera4', 354423, 40962, 'EG', 'CSCE', 'COT', '7980', 'Dissertation-Computer Science', 'rtera4@fau.edu'),
('rtera', 358024, 39149, 'EG', 'DNEG', 'EGN', '1002', 'Fundamentals of Engineering', 'rtera@fau.edu'),
('rtera', 358024, 40562, 'EG', 'DNEG', 'EGN', '1002', 'Fundamentals of Engineering', 'rtera@fau.edu'),
('weorp3', 359839, 37007, 'EG', 'CIVL', 'CEG', '3011C', 'Soil Mechanics', 'weorp3@fau.edu'),
('weorp3', 359839, 37008, 'EG', 'CIVL', 'CES', '4702', 'Reinforced Concrete Design', 'weorp3@fau.edu'),
('weorp3', 359839, 38171, 'EG', 'CIVL', 'CES', '4605', 'Structural Steel Design', 'weorp3@fau.edu'),
('weorp3', 359839, 41930, 'EG', 'ENVE', 'ENV', '3001C', 'Envirnmntl Science/Engineering', 'weorp3@fau.edu'),
('ghearp', 366665, 37039, 'EG', 'CIVL', 'CGN', '4804C', 'Civil, Env & Geo Eng Design 2', 'ghearp@fau.edu'),
('rteret', 369942, 40558, 'EG', 'DNEG', 'EGN', '1002', 'Fundamentals of Engineering', 'rteret@fau.edu'),
('rterettw', 369942, 38526, 'EG', 'DNEG', 'EGN', '1002', 'Fundamentals of Engineering', 'rterettw@fau.edu'),
('zxcvbv', 373763, 38526, 'EG', 'DNEG', 'EGN', '1002', 'Fundamentals of Engineering', 'zxcvbv@fau.edu'),
('zxcvbv', 373763, 40559, 'EG', 'DNEG', 'EGN', '1002', 'Fundamentals of Engineering', 'zxcvbv@fau.edu'),
('dfghd', 374059, 38174, 'EG', 'EEL', 'EEE', '3300', 'Electronics 1', 'dfghd@fau.edu'),
('dfghd', 374059, 38696, 'EG', 'CSCE', 'COP', '3014', 'Foundations of Computer Sci', 'dfghd@fau.edu'),
('dfghd', 374059, 42164, 'EG', 'CSCE', 'CDA', '3331C', 'Intro Microprocessor Systems', 'dfghd@fau.edu'),
('ghkgr', 374542, 37105, 'EG', 'EEL', 'EEL', '3111', 'Circuits 1', 'ghkgr@fau.edu'),
('ghkgr', 374542, 37106, 'EG', 'EEL', 'EEL', '3112', 'Circuits 2', 'ghkgr@fau.edu'),
('ghkgr', 374542, 38174, 'EG', 'EEL', 'EEE', '3300', 'Electronics 1', 'ghkgr@fau.edu'),
('ghkgr', 374542, 38696, 'EG', 'CSCE', 'COP', '3014', 'Foundations of Computer Sci', 'ghkgr@fau.edu'),
('ghkgr', 374542, 42164, 'EG', 'CSCE', 'CDA', '3331C', 'Intro Microprocessor Systems', 'ghkgr@fau.edu'),
('ghkgr', 374542, 42701, 'EG', 'EEL', 'EEL', '3470', 'Electromagnetic Fields & Waves', 'ghkgr@fau.edu'),
('ZZ1', 385432, 42177, 'EG', 'CSCE', 'COP', '3014', 'Foundations of Computer Sci', 'ZZ1@fau.edu'),
('kerqf', 385970, 37103, 'EG', 'CSCE', 'CDA', '3331C', 'Intro Microprocessor Systems', 'kerqf@fau.edu'),
('kerqf', 385970, 38698, 'EG', 'CSCE', 'COP', '3014L', 'Foundation of Computer Sci Lab', 'kerqf@fau.edu'),
('kerqf', 385970, 43204, 'EG', 'CSCE', 'COP', '3014', 'Foundations of Computer Sci', 'kerqf@fau.edu'),
('yuterah', 389747, 37115, 'EG', 'CSCE', 'COP', '3530', 'Data Struct/Algorithm Analysis', 'yuterah@fau.edu'),
('yuterah', 389747, 38552, 'EG', 'CSCE', 'CDA', '3331C', 'Intro Microprocessor Systems', 'yuterah@fau.edu'),
('weorp1', 390950, 40313, 'EG', 'CSCE', 'COP', '2220', 'Intro to Programming in C', 'weorp1@fau.edu'),
('gheart', 392453, 37103, 'EG', 'CSCE', 'CDA', '3331C', 'Intro Microprocessor Systems', 'gheart@fau.edu'),
('gheart', 392453, 38695, 'EG', 'CSCE', 'COP', '3014', 'Foundations of Computer Sci', 'gheart@fau.edu'),
('kerq34er', 396616, 41021, 'EG', 'EEL', 'EEL', '4216', 'Electric Power Systems', 'kerq34er@fau.edu'),
('kerq34er', 396616, 41025, 'EG', 'EEL', 'EEL', '4512L', 'Communications Systems Lab', 'kerq34er@fau.edu'),
('kerqfhgf', 396616, 39426, 'EG', 'EEL', 'EEL', '4512', 'Communication Systems', 'kerqfhgf@fau.edu'),
('ertyiuioa', 396991, 39573, 'EG', 'EEL', 'EEE', '4510', 'Intro to Digital Signal Proces', 'ertyiuioa@fau.edu'),
('kerqfwr', 396991, 40579, 'EG', 'CSCE', 'EGN', '4950C', 'Engineering Design 1', 'kerqfwr@fau.edu'),
('weorp', 398618, 39825, 'EG', 'MECH', 'EGN', '2213', 'Comp Apps in Engineering 1', 'weorp@fau.edu'),
('weorp', 398618, 40358, 'EG', 'CIVL', 'EGN', '3331', 'Strength of Materials', 'weorp@fau.edu'),
('weorp', 398618, 40359, 'EG', 'MECH', 'EGN', '3343', 'Engineering Thermodynamics', 'weorp@fau.edu'),
('weorpb', 407177, 38532, 'EG', 'MECH', 'EML', '3701', 'Fluid Mechanics', 'weorpb@fau.edu'),
('weorpb', 407177, 39634, 'EG', 'MECH', 'EGM', '4045', 'Electro-Mechanical Devices', 'weorpb@fau.edu'),
('weorpb', 407177, 39832, 'EG', 'MECH', 'EGN', '3331', 'Strength of Materials', 'weorpb@fau.edu'),
('fghtue', 412707, 37110, 'EG', 'CSCE', 'COP', '2220', 'Intro to Programming in C', 'fghtue@fau.edu'),
('fghtue', 412707, 39484, 'EG', 'DNEG', 'ETG', '2831', 'Nature: Intersections', 'fghtue@fau.edu'),
('fsdfe', 424699, 41024, 'EG', 'EEL', 'EEL', '4220', 'Electrical Machines', 'fsdfe@fau.edu'),
('ghr123r', 427626, 38172, 'EG', 'EEL', 'EEL', '3118L', 'Electronics Laboratory 1', 'ghr123r@fau.edu'),
('fghtuete', 431939, 40732, 'EG', 'GEOM', 'SUR', '2101L', 'Fundamentals of Surveying Lab', 'fghtuete@fau.edu'),
('fghtuete', 431939, 41037, 'EG', 'GEOM', 'SUR', '2101', 'Fundamentals of Surveying', 'fghtuete@fau.edu'),
('fghtuete', 431939, 41930, 'EG', 'ENVE', 'ENV', '3001C', 'Envirnmntl Science/Engineering', 'fghtuete@fau.edu'),
('dfghda', 434988, 39682, 'EG', 'CSCE', 'CDA', '3201C', 'Introduction To Logic Design', 'dfghda@fau.edu'),
('rteret', 442236, 42195, 'EG', 'CSCE', 'COT', '6930', 'Natural Language Processing', 'rteret@fau.edu'),
('rteret', 442236, 42472, 'EG', 'CSCE', 'CNT', '6528', 'Vehicular Networks', 'rteret@fau.edu'),
('rteret', 442236, 42674, 'EG', 'CSCE', 'CEN', '5035', 'Software Engineering', 'rteret@fau.edu'),
('ee3', 444098, 39736, 'EG', 'MECH', 'EGN', '1111C', 'Engineering Graphics', 'ee3@fau.edu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
