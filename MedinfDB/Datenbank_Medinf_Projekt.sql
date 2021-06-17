-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema myhealthdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema myhealthdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `myhealthdb` DEFAULT CHARACTER SET utf8 ;
USE `myhealthdb` ;

-- -----------------------------------------------------
-- Table `myhealthdb`.`patients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myhealthdb`.`patients` (
  `idPatients` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `surname` VARCHAR(45) NOT NULL,
  `svn` VARCHAR(10) NULL,
  `birthdate` DATE NOT NULL,
  `sex` CHAR(1) NOT NULL,
  `pronoun` VARCHAR(45) NULL DEFAULT NULL,
  `address` VARCHAR(255) NOT NULL,
  `city` VARCHAR(255) NOT NULL,
  `post_code` VARCHAR(10) NOT NULL,
  `mobilephone` VARCHAR(15) NULL DEFAULT NULL,
  `health_insurance` VARCHAR(45) NULL,
  `email` VARCHAR(90) NULL,
  `title` VARCHAR(100) NULL,
  PRIMARY KEY (`idPatients`),
  UNIQUE INDEX `idpatients_UNIQUE` (`idPatients` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 1001
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `myhealthdb`.`docs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myhealthdb`.`docs` (
  `idDocs` INT(11) NOT NULL AUTO_INCREMENT,
  `fk_patients_id` INT(11) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `therapy` LONGTEXT NULL DEFAULT NULL,
  `documentaion` LONGTEXT NULL DEFAULT NULL,
  `diagnosis` LONGTEXT NULL DEFAULT NULL,
  `medication` LONGTEXT NULL,
  `old_diagnosis` VARCHAR(45) NULL,
  `old_diagnosis_date` DATETIME NULL,
  `allergies` LONGTEXT NULL,
  PRIMARY KEY (`idDocs`),
  UNIQUE INDEX `idVitals_UNIQUE` (`idDocs` ASC) VISIBLE,
  INDEX `fk_idx_patients_id_idx` (`fk_patients_id` ASC) VISIBLE,
  CONSTRAINT `fk_idx_patients_id0`
    FOREIGN KEY (`fk_patients_id`)
    REFERENCES `myhealthdb`.`patients` (`idPatients`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `myhealthdb`.`personal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myhealthdb`.`personal` (
  `idPersonal` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `role` VARCHAR(50) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `surname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPersonal`),
  UNIQUE INDEX `idPersonal_UNIQUE` (`idPersonal` ASC) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `myhealthdb`.`vitals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `myhealthdb`.`vitals` (
  `idVitals` INT(11) NOT NULL AUTO_INCREMENT,
  `fk_patients_id` INT(11) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP(),
  `weight` INT(11) NULL DEFAULT NULL,
  `height` INT(11) NULL DEFAULT NULL,
  `temperature` INT(11) NULL DEFAULT NULL,
  `puls` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idVitals`),
  UNIQUE INDEX `idVitals_UNIQUE` (`idVitals` ASC) ,
  INDEX `fk_idx_patients_id_idx` (`fk_patients_id` ASC) ,
  CONSTRAINT `fk_idx_patients_id`
    FOREIGN KEY (`fk_patients_id`)
    REFERENCES `myhealthdb`.`patients` (`idPatients`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
