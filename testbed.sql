SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `testbed` DEFAULT CHARACTER SET latin1 ;
USE `testbed` ;

-- -----------------------------------------------------
-- Table `testbed`.`ci_sessions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `testbed`.`ci_sessions` (
  `session_id` VARCHAR(40) NOT NULL DEFAULT '0' ,
  `ip_address` VARCHAR(45) NOT NULL DEFAULT '0' ,
  `user_agent` VARCHAR(120) NOT NULL ,
  `last_activity` INT(10) UNSIGNED NOT NULL DEFAULT '0' ,
  `user_data` TEXT NOT NULL ,
  PRIMARY KEY (`session_id`) ,
  INDEX `last_activity_idx` (`last_activity` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `testbed`.`options`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `testbed`.`options` (
  `item` INT(11) NOT NULL ,
  `itemName` VARCHAR(45) NULL DEFAULT NULL ,
  `storage` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`item`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `testbed`.`products`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `testbed`.`products` (
  `id` INT(128) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(128) NOT NULL ,
  `price` VARCHAR(32) NOT NULL ,
  `image` VARCHAR(128) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
AUTO_INCREMENT = 11455
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `testbed`.`storage`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `testbed`.`storage` (
  `datasource` INT(11) NOT NULL ,
  `datasourceName` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`datasource`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
