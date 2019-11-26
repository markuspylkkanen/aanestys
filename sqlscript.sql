-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NULL,
  `pw` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`polls`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`polls` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `aihe` VARCHAR(245) NULL,
  `Users_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Users_id`),
 # INDEX `fk_polls_Users_idx` (`Users_id` ASC)  VISIBLE,
  CONSTRAINT `fk_polls_Users`
    FOREIGN KEY (`Users_id`)
    REFERENCES `mydb`.`Users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`choices`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`choices` (
  `id` INT NOT NULL,
  `upvote` VARCHAR(45) NULL,
  `downvote` VARCHAR(45) NULL,
  `polls_id` INT NOT NULL,
  `polls_Users_id` INT NOT NULL,
  PRIMARY KEY (`id`, `polls_id`, `polls_Users_id`),
#  INDEX `fk_choices_polls1_idx` (`polls_id` ASC, `polls_Users_id` ASC)  VISIBLE,
  CONSTRAINT `fk_choices_polls1`
    FOREIGN KEY (`polls_id` , `polls_Users_id`)
    REFERENCES `mydb`.`polls` (`id` , `Users_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
