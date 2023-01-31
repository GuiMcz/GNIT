-- MySQL Workbench Synchronization
-- Generated: 2022-12-06 12:59
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: danil

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE TABLE IF NOT EXISTS `gnit`.`Usuário` (
  `cd_usu` INT(11) NOT NULL AUTO_INCREMENT,
  `lg_usu` VARCHAR(50) NOT NULL,
  `sen_usu` VARCHAR(45) NOT NULL,
  `nome_usu` VARCHAR(100) NOT NULL,
  `cpf_usu` VARCHAR(13) NOT NULL,
  `vnc_usu` VARCHAR(45) NOT NULL,
  `tel_usu` VARCHAR(11) NOT NULL,
  `eml_usu` VARCHAR(45) NOT NULL,
  `hor_usu` VARCHAR(45) NOT NULL,
  `end_usu` VARCHAR(45) NOT NULL,
  `dt_cad` DATE NOT NULL,
  `dt_exc` DATE NULL DEFAULT NULL,
  `dt_mod` DATE NULL DEFAULT NULL,
  `sit_usu` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cd_usu`),
  UNIQUE INDEX `cd_usu_UNIQUE` (`cd_usu` ASC) VISIBLE,
  UNIQUE INDEX `cpf_usu_UNIQUE` (`cpf_usu` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `gnit`.`Ordem de Pagamento` (
  `cd_pgt` INT(11) NOT NULL AUTO_INCREMENT,
  `vlr_pgt` DECIMAL(50) NOT NULL,
  `cd_blt` VARCHAR(45) NOT NULL,
  `st_pgt` VARCHAR(45) NOT NULL,
  `cd_pat` INT(11) NOT NULL,
  `Desenho Industrial_numero_pedido` VARCHAR(45) NOT NULL,
  `Programa_Computador_numero_pedido` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cd_pgt`),
  UNIQUE INDEX `cd_pgt_UNIQUE` (`cd_blt` ASC) VISIBLE,
  UNIQUE INDEX `cd_pgt_UNIQUE` (`cd_pgt` ASC) VISIBLE,
  INDEX `fk_Ordem de Pagamento_Patente1_idx` (`cd_pat` ASC) VISIBLE,
  INDEX `fk_Ordem de Pagamento_Desenho Industrial1_idx` (`Desenho Industrial_numero_pedido` ASC) VISIBLE,
  INDEX `fk_Ordem de Pagamento_Programa_Computador1_idx` (`Programa_Computador_numero_pedido` ASC) VISIBLE,
  CONSTRAINT `fk_Ordem de Pagamento_Patente1`
    FOREIGN KEY (`cd_pat`)
    REFERENCES `gnit`.`Patente` (`cd_ptt`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ordem de Pagamento_Desenho Industrial1`
    FOREIGN KEY (`Desenho Industrial_numero_pedido`)
    REFERENCES `gnit`.`Desenho Industrial` (`num_ped`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ordem de Pagamento_Programa_Computador1`
    FOREIGN KEY (`Programa_Computador_numero_pedido`)
    REFERENCES `gnit`.`Programa_Computador` (`cd_pro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `gnit`.`Autor` (
  `cd_aut` INT(11) NOT NULL AUTO_INCREMENT,
  `cpf_aut` VARCHAR(50) NOT NULL,
  `end_aut` VARCHAR(45) NOT NULL,
  `eml_aut` VARCHAR(45) NOT NULL,
  `pais_aut` VARCHAR(45) NOT NULL,
  `nm_aut` VARCHAR(45) NOT NULL,
  `nac_aut` VARCHAR(45) NOT NULL,
  `cep_aut` VARCHAR(45) NOT NULL,
  `cdd_aut` VARCHAR(45) NOT NULL,
  `qlf_aut` VARCHAR(45) NOT NULL,
  `sit_aut` TINYINT(4) NOT NULL,
  `tel_aut` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cd_aut`),
  UNIQUE INDEX `cd_aut_UNIQUE` (`cd_aut` ASC) VISIBLE,
  UNIQUE INDEX `cpf_aut_UNIQUE` (`cpf_aut` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `gnit`.`Patente` (
  `cd_ptt` INT(11) NOT NULL AUTO_INCREMENT,
  `num_ped` VARCHAR(45) NOT NULL,
  `st_ptt` VARCHAR(45) NOT NULL,
  `dt_cad` DATE NOT NULL,
  `dt_exc` DATE NULL DEFAULT NULL,
  `dt_mod` DATE NULL DEFAULT NULL,
  `res_ptt` VARCHAR(400) NULL DEFAULT NULL,
  `rei_ptt` VARCHAR(400) NULL DEFAULT NULL,
  `sit_ptt` TINYINT(4) NULL DEFAULT NULL,
  `qtd_aut` INT(11) NOT NULL,
  `tit_ptt` VARCHAR(45) NOT NULL,
  `rlt_ptt` VARCHAR(400) NULL DEFAULT NULL,
  PRIMARY KEY (`cd_ptt`),
  UNIQUE INDEX `cd_pat_UNIQUE` (`cd_ptt` ASC) VISIBLE,
  UNIQUE INDEX `num_ped_UNIQUE` (`num_ped` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `gnit`.`Autor_Patente` (
  `cd_aut` VARCHAR(50) NOT NULL,
  `cd_ptt` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`cd_aut`, `cd_ptt`),
  INDEX `fk_Autor_has_Patente_Patente1_idx` (`cd_ptt` ASC) VISIBLE,
  INDEX `fk_Autor_has_Patente_Autor1_idx` (`cd_aut` ASC) VISIBLE,
  CONSTRAINT `fk_Autor_has_Patente_Autor1`
    FOREIGN KEY (`cd_aut`)
    REFERENCES `gnit`.`Autor` (`cpf_aut`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Autor_has_Patente_Patente1`
    FOREIGN KEY (`cd_ptt`)
    REFERENCES `gnit`.`Patente` (`num_ped`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `gnit`.`Desenho Industrial` (
  `cd_des` INT(11) NOT NULL AUTO_INCREMENT,
  `num_ped` VARCHAR(45) NOT NULL,
  `st_des` VARCHAR(45) NOT NULL,
  `dt_cad` DATE NOT NULL,
  `dt_exc` DATE NULL DEFAULT NULL,
  `dt_mod` DATE NULL DEFAULT NULL,
  `res_des` VARCHAR(400) NULL DEFAULT NULL,
  `rei_des` VARCHAR(400) NULL DEFAULT NULL,
  `sit_des` TINYINT(4) NULL DEFAULT NULL,
  `qtd_aut` INT(11) NULL DEFAULT NULL,
  `tit_des` VARCHAR(45) NOT NULL,
  `rel_des` VARCHAR(400) NULL DEFAULT NULL,
  `fig_des` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`cd_des`),
  UNIQUE INDEX `cd_des_UNIQUE` (`cd_des` ASC) VISIBLE,
  UNIQUE INDEX `tit_des_UNIQUE` (`tit_des` ASC) VISIBLE,
  UNIQUE INDEX `num_ped_UNIQUE` (`num_ped` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `gnit`.`Autor_Desenho` (
  `cd_aut` INT(11) NOT NULL,
  `cd_des` INT(11) NOT NULL,
  PRIMARY KEY (`cd_aut`, `cd_des`),
  INDEX `fk_Autor_has_Desenho Industrial_Desenho Industrial1_idx` (`cd_des` ASC) VISIBLE,
  INDEX `fk_Autor_has_Desenho Industrial_Autor1_idx` (`cd_aut` ASC) VISIBLE,
  CONSTRAINT `fk_Autor_has_Desenho Industrial_Autor1`
    FOREIGN KEY (`cd_aut`)
    REFERENCES `gnit`.`Autor` (`cpf_aut`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Autor_has_Desenho Industrial_Desenho Industrial1`
    FOREIGN KEY (`cd_des`)
    REFERENCES `gnit`.`Desenho Industrial` (`num_ped`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `gnit`.`Programa_Computador` (
  `cd_pro` INT(11) NOT NULL,
  `num_pedido` VARCHAR(45) NULL DEFAULT NULL,
  `status` VARCHAR(45) NOT NULL,
  `data_cad` DATE NOT NULL,
  `data_exc` DATE NULL DEFAULT NULL,
  `data_mod` DATE NULL DEFAULT NULL,
  `resumo` VARCHAR(400) NULL DEFAULT NULL,
  `ativo` TINYINT(4) NULL DEFAULT NULL,
  `qtd_aut` INT(11) NULL DEFAULT NULL,
  `titulo` VARCHAR(45) NULL DEFAULT NULL,
  `Campo` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`cd_pro`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `gnit`.`Autor_Programa_Computador` (
  `cd_aut` INT(11) NOT NULL,
  `cd_pro` INT(11) NOT NULL,
  PRIMARY KEY (`cd_aut`, `cd_pro`),
  INDEX `fk_Autor_has_Desenho Industrial_copy1_Desenho Industrial_co_idx` (`cd_pro` ASC) VISIBLE,
  INDEX `fk_Autor_has_Desenho Industrial_copy1_Autor1_idx` (`cd_aut` ASC) VISIBLE,
  CONSTRAINT `fk_Autor_has_Desenho Industrial_copy1_Autor1`
    FOREIGN KEY (`cd_aut`)
    REFERENCES `gnit`.`Autor` (`cpf_aut`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Autor_has_Desenho Industrial_copy1_Desenho Industrial_copy11`
    FOREIGN KEY (`cd_pro`)
    REFERENCES `gnit`.`Programa_Computador` (`cd_pro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
