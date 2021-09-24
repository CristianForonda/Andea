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
-- Table `mydb`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`rol` (
  `idrol` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idrol`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`estado` (
  `idestado` INT NOT NULL AUTO_INCREMENT,
  `estado` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idestado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Institucion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Institucion` (
  `idinstitucion` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idinstitucion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`programa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`programa` (
  `idprograma` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idprograma`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`fecha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`fecha` (
  `idfecha` INT NOT NULL AUTO_INCREMENT,
  `fechacreacion` DATETIME NOT NULL,
  PRIMARY KEY (`idfecha`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `rol_idrol` INT NOT NULL,
  `estado_idestado` INT NOT NULL,
  `universidad_iduniversidad` INT NOT NULL,
  `programa_idprograma` INT NOT NULL,
  `fecha_idfecha` INT NOT NULL,
  PRIMARY KEY (`idUsuario`, `rol_idrol`, `estado_idestado`, `universidad_iduniversidad`, `programa_idprograma`, `fecha_idfecha`),
  INDEX `fk_usuario_rol1_idx` (`rol_idrol` ASC),
  INDEX `fk_usuario_estado1_idx` (`estado_idestado` ASC),
  INDEX `fk_usuario_universidad1_idx` (`universidad_iduniversidad` ASC),
  INDEX `fk_usuario_programa1_idx` (`programa_idprograma` ASC),
  INDEX `fk_usuario_fecha1_idx` (`fecha_idfecha` ASC),
  CONSTRAINT `fk_usuario_rol1`
    FOREIGN KEY (`rol_idrol`)
    REFERENCES `mydb`.`rol` (`idrol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_estado1`
    FOREIGN KEY (`estado_idestado`)
    REFERENCES `mydb`.`estado` (`idestado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_universidad1`
    FOREIGN KEY (`universidad_iduniversidad`)
    REFERENCES `mydb`.`Institucion` (`idinstitucion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_programa1`
    FOREIGN KEY (`programa_idprograma`)
    REFERENCES `mydb`.`programa` (`idprograma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_fecha1`
    FOREIGN KEY (`fecha_idfecha`)
    REFERENCES `mydb`.`fecha` (`idfecha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`cusro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cusro` (
  `idcusro` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `Contador` INT NOT NULL,
  `usuario_idUsuario` INT NOT NULL,
  `usuario_rol_idrol` INT NOT NULL,
  `usuario_estado_idestado` INT NOT NULL,
  `usuario_universidad_iduniversidad` INT NOT NULL,
  `usuario_programa_idprograma` INT NOT NULL,
  `usuario_fecha_idfecha` INT NOT NULL,
  PRIMARY KEY (`idcusro`, `usuario_idUsuario`, `usuario_rol_idrol`, `usuario_estado_idestado`, `usuario_universidad_iduniversidad`, `usuario_programa_idprograma`, `usuario_fecha_idfecha`),
  INDEX `fk_cusro_usuario1_idx` (`usuario_idUsuario` ASC, `usuario_rol_idrol` ASC, `usuario_estado_idestado` ASC, `usuario_universidad_iduniversidad` ASC, `usuario_programa_idprograma` ASC, `usuario_fecha_idfecha` ASC),
  CONSTRAINT `fk_cusro_usuario1`
    FOREIGN KEY (`usuario_idUsuario` , `usuario_rol_idrol` , `usuario_estado_idestado` , `usuario_universidad_iduniversidad` , `usuario_programa_idprograma` , `usuario_fecha_idfecha`)
    REFERENCES `mydb`.`usuario` (`idUsuario` , `rol_idrol` , `estado_idestado` , `universidad_iduniversidad` , `programa_idprograma` , `fecha_idfecha`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tema`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tema` (
  `idtema` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `cusro_idcusro` INT NOT NULL,
  PRIMARY KEY (`idtema`, `cusro_idcusro`),
  INDEX `fk_tema_cusro1_idx` (`cusro_idcusro` ASC),
  CONSTRAINT `fk_tema_cusro1`
    FOREIGN KEY (`cusro_idcusro`)
    REFERENCES `mydb`.`cusro` (`idcusro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Institucion_has_programa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Institucion_has_programa` (
  `Institucion_idinstitucion` INT NOT NULL,
  `programa_idprograma` INT NOT NULL,
  PRIMARY KEY (`Institucion_idinstitucion`, `programa_idprograma`),
  INDEX `fk_Institucion_has_programa_programa1_idx` (`programa_idprograma` ASC),
  INDEX `fk_Institucion_has_programa_Institucion1_idx` (`Institucion_idinstitucion` ASC) ,
  CONSTRAINT `fk_Institucion_has_programa_Institucion1`
    FOREIGN KEY (`Institucion_idinstitucion`)
    REFERENCES `mydb`.`Institucion` (`idinstitucion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Institucion_has_programa_programa1`
    FOREIGN KEY (`programa_idprograma`)
    REFERENCES `mydb`.`programa` (`idprograma`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
