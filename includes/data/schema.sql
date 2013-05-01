SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP DATABASE IF EXISTS `TheProcessSocialNetwork`;
CREATE SCHEMA IF NOT EXISTS `TheProcessSocialNetwork` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `TheProcessSocialNetwork` ;

-- -----------------------------------------------------
-- Table `TheProcessSocialNetwork`.`Proces`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `TheProcessSocialNetwork`.`Proces` (
  `idProces` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `description` VARCHAR(45) NOT NULL ,
  `creation_date` TIMESTAMP NOT NULL ,
  `positive_califications` INT NOT NULL ,
  `negative_califications` INT NOT NULL ,
  `estimated_duration` VARCHAR(45) NULL ,
  PRIMARY KEY (`idProces`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TheProcessSocialNetwork`.`User`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `TheProcessSocialNetwork`.`User` (
  `idUser` INT NOT NULL AUTO_INCREMENT ,
  `usermane` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  `name` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `last_name` VARCHAR(45) NULL ,
  `creation_date` VARCHAR(45) NULL ,
  PRIMARY KEY (`idUser`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TheProcessSocialNetwork`.`Activity`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `TheProcessSocialNetwork`.`Activity` (
  `idActivity` INT NOT NULL AUTO_INCREMENT ,
  `description` VARCHAR(45) NOT NULL ,
  `creation_date` TIMESTAMP NOT NULL ,
  `last_modification_date` TIMESTAMP NULL ,
  `estimated_duration` TIME NULL ,
  `Proces_idProces` INT NOT NULL ,
  `requerimiento` VARCHAR(45) NULL ,
  `orden` INT NOT NULL ,
  PRIMARY KEY (`idActivity`) ,
  INDEX `fk_Activity_Proces1_idx` (`Proces_idProces` ASC) ,
  CONSTRAINT `fk_Activity_Proces1`
    FOREIGN KEY (`Proces_idProces` )
    REFERENCES `TheProcessSocialNetwork`.`Proces` (`idProces` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TheProcessSocialNetwork`.`Comments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `TheProcessSocialNetwork`.`Comments` (
  `idComments` INT NOT NULL AUTO_INCREMENT ,
  `User_idUser` INT NOT NULL ,
  `creation_date` TIMESTAMP NULL ,
  `comment` VARCHAR(300) NULL ,
  `likes` INT NULL ,
  `Commentscol` VARCHAR(45) NULL ,
  `Proces_idProces` INT NOT NULL ,
  PRIMARY KEY (`idComments`) ,
  INDEX `fk_Comments_User1_idx` (`User_idUser` ASC) ,
  INDEX `fk_Comments_Proces1_idx` (`Proces_idProces` ASC) ,
  CONSTRAINT `fk_Comments_User1`
    FOREIGN KEY (`User_idUser` )
    REFERENCES `TheProcessSocialNetwork`.`User` (`idUser` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comments_Proces1`
    FOREIGN KEY (`Proces_idProces` )
    REFERENCES `TheProcessSocialNetwork`.`Proces` (`idProces` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TheProcessSocialNetwork`.`Proces_has_User`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `TheProcessSocialNetwork`.`Proces_has_User` (
  `Proces_idProces` INT NOT NULL ,
  `User_idUser` INT NOT NULL ,
  PRIMARY KEY (`Proces_idProces`, `User_idUser`) ,
  INDEX `fk_Proces_has_User_User1_idx` (`User_idUser` ASC) ,
  INDEX `fk_Proces_has_User_Proces_idx` (`Proces_idProces` ASC) ,
  CONSTRAINT `fk_Proces_has_User_Proces`
    FOREIGN KEY (`Proces_idProces` )
    REFERENCES `TheProcessSocialNetwork`.`Proces` (`idProces` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Proces_has_User_User1`
    FOREIGN KEY (`User_idUser` )
    REFERENCES `TheProcessSocialNetwork`.`User` (`idUser` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TheProcessSocialNetwork`.`Activity_has_Comments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `TheProcessSocialNetwork`.`Activity_has_Comments` (
  `Activity_idActivity` INT NOT NULL ,
  `Comments_idComments` INT NOT NULL ,
  PRIMARY KEY (`Activity_idActivity`, `Comments_idComments`) ,
  INDEX `fk_Activity_has_Comments_Comments1_idx` (`Comments_idComments` ASC) ,
  INDEX `fk_Activity_has_Comments_Activity1_idx` (`Activity_idActivity` ASC) ,
  CONSTRAINT `fk_Activity_has_Comments_Activity1`
    FOREIGN KEY (`Activity_idActivity` )
    REFERENCES `TheProcessSocialNetwork`.`Activity` (`idActivity` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Activity_has_Comments_Comments1`
    FOREIGN KEY (`Comments_idComments` )
    REFERENCES `TheProcessSocialNetwork`.`Comments` (`idComments` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TheProcessSocialNetwork`.`tag`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `TheProcessSocialNetwork`.`tag` (
  `idtag` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `creation_date` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idtag`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TheProcessSocialNetwork`.`Proces_has_tag`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `TheProcessSocialNetwork`.`Proces_has_tag` (
  `Proces_idProces` INT NOT NULL ,
  `tag_idtag` INT NOT NULL ,
  PRIMARY KEY (`Proces_idProces`, `tag_idtag`) ,
  INDEX `fk_Proces_has_tag_tag1_idx` (`tag_idtag` ASC) ,
  INDEX `fk_Proces_has_tag_Proces1_idx` (`Proces_idProces` ASC) ,
  CONSTRAINT `fk_Proces_has_tag_Proces1`
    FOREIGN KEY (`Proces_idProces` )
    REFERENCES `TheProcessSocialNetwork`.`Proces` (`idProces` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Proces_has_tag_tag1`
    FOREIGN KEY (`tag_idtag` )
    REFERENCES `TheProcessSocialNetwork`.`tag` (`idtag` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TheProcessSocialNetwork`.`Place`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `TheProcessSocialNetwork`.`Place` (
  `idPlace` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `description` VARCHAR(45) NULL ,
  `address` VARCHAR(45) NULL ,
  `city` VARCHAR(45) NULL ,
  `phone` VARCHAR(45) NULL ,
  PRIMARY KEY (`idPlace`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TheProcessSocialNetwork`.`Activity_has_Place`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `TheProcessSocialNetwork`.`Activity_has_Place` (
  `Activity_idActivity` INT NOT NULL ,
  `Place_idPlace` INT NOT NULL ,
  PRIMARY KEY (`Activity_idActivity`, `Place_idPlace`) ,
  INDEX `fk_Activity_has_Place_Place1_idx` (`Place_idPlace` ASC) ,
  INDEX `fk_Activity_has_Place_Activity1_idx` (`Activity_idActivity` ASC) ,
  CONSTRAINT `fk_Activity_has_Place_Activity1`
    FOREIGN KEY (`Activity_idActivity` )
    REFERENCES `TheProcessSocialNetwork`.`Activity` (`idActivity` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Activity_has_Place_Place1`
    FOREIGN KEY (`Place_idPlace` )
    REFERENCES `TheProcessSocialNetwork`.`Place` (`idPlace` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `TheProcessSocialNetwork` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
