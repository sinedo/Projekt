-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema healthDB
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `healthDB` ;

-- -----------------------------------------------------
-- Schema healthDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `healthDB` DEFAULT CHARACTER SET utf8 ;
USE `healthDB` ;

-- -----------------------------------------------------
-- Table `healthDB`.`Personal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `healthDB`.`Personal` (
  `idPersonal` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `surname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPersonal`),
  UNIQUE INDEX `idPersonal_UNIQUE` (`idPersonal` ASC) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `healthDB`.`Patients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `healthDB`.`Patients` (
  `idPatients` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `surname` VARCHAR(45) NOT NULL,
  `birthdate` DATE NOT NULL,
  `ssn` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idPatients`),
  UNIQUE INDEX `idpatients_UNIQUE` (`idPatients` ASC) ,
  UNIQUE INDEX `ssn_UNIQUE` (`ssn` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `healthDB`.`Vitals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `healthDB`.`Vitals` (
  `idVitals` INT NOT NULL AUTO_INCREMENT,
  `weight` INT NULL,
  `height` INT NULL,
  `fk_patients_id` INT NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`idVitals`),
  UNIQUE INDEX `idVitals_UNIQUE` (`idVitals` ASC) ,
  INDEX `fk_idx_patients_id_idx` (`fk_patients_id` ASC) ,
  CONSTRAINT `fk_idx_patients_id`
    FOREIGN KEY (`fk_patients_id`)
    REFERENCES `healthDB`.`Patients` (`idPatients`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
