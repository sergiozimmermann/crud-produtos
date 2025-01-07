DROP TABLE IF EXISTS `crud_produtos`;

CREATE TABLE
    `crud_produtos` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `nome` varchar NOT NULL,
        `descricao` varchar NULL,
        `preco` DECIMAL(10, 2) NOT NULL,
        `dt_criacao` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB