/*
SQLyog Ultimate v9.63 
MySQL - 5.5.24-log : Database - notas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`notas` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `notas`;

/*Table structure for table `alumno` */

DROP TABLE IF EXISTS `alumno`;

CREATE TABLE `alumno` (
  `idAlumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idAlumno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `alumno` */

insert  into `alumno`(`idAlumno`,`nombre`,`apellido`) values (1,'MARLO','SARA'),(2,'SALOMON','VALDEZ'),(3,'BRENDA','CALDERON');

/*Table structure for table `nota` */

DROP TABLE IF EXISTS `nota`;

CREATE TABLE `nota` (
  `idNotas` int(11) NOT NULL AUTO_INCREMENT,
  `n1` int(11) DEFAULT NULL,
  `n2` int(11) DEFAULT NULL,
  `n3` int(11) DEFAULT NULL,
  `n4` int(11) DEFAULT NULL,
  `idAlumno` int(11) DEFAULT NULL,
  `idResultado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idNotas`),
  KEY `idAlumno` (`idAlumno`),
  KEY `idResultado` (`idResultado`),
  CONSTRAINT `nota_ibfk_2` FOREIGN KEY (`idResultado`) REFERENCES `resultado` (`idResultado`),
  CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `nota` */

insert  into `nota`(`idNotas`,`n1`,`n2`,`n3`,`n4`,`idAlumno`,`idResultado`) values (1,12,12,12,12,2,1),(2,15,18,19,20,3,2);

/*Table structure for table `resultado` */

DROP TABLE IF EXISTS `resultado`;

CREATE TABLE `resultado` (
  `idResultado` int(11) NOT NULL AUTO_INCREMENT,
  `promedio` int(11) DEFAULT NULL,
  `mayor` int(11) DEFAULT NULL,
  `menor` int(11) DEFAULT NULL,
  `observacion` varchar(30) DEFAULT NULL,
  `adicional` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idResultado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `resultado` */

insert  into `resultado`(`idResultado`,`promedio`,`mayor`,`menor`,`observacion`,`adicional`) values (1,14,12,12,'Aprobado','Si'),(2,20,20,15,'Aprobado','Si');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
