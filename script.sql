use banco;

CREATE TABLE `clientes` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `instituicao_financeira` (
  `cnpj` varchar(18) NOT NULL,
  `razao_social` varchar(30) NOT NULL,
  `nome_fantasia` varchar(30) NOT NULL,
  `codigo_bancario` varchar(3) NOT NULL,
  `logomarca` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `usuarios` (
  `login` varchar(20) NOT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `entidade` varchar(20) DEFAULT NULL,
  `ativo` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `contas` (
  `id_contas` int(11) NOT NULL,
  `cpf_cliente` varchar(15) DEFAULT NULL,
  `cnpj_instituicaof` varchar(18) DEFAULT NULL,
  `saldo` float DEFAULT NULL,
  `data_abertura` timestamp NOT NULL DEFAULT current_timestamp(),
  `data_encerramento` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `produtos_financeiros` (
  `id_produtos` int(11) NOT NULL,
  `cnpj_instf` varchar(18) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `valor_min` float DEFAULT NULL,
  `taxa_admin` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `contratos` (
  `id_contratos` int(11) NOT NULL,
  `num_conta` int(11) DEFAULT NULL,
  `id_produtof` int(11) DEFAULT NULL,
  `valor_investido` float DEFAULT NULL,
  `taxa_admin` float DEFAULT NULL,
  `data_contratacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `finalizado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `compartilhamentos` (
  `cpf_cliente` varchar(15) NOT NULL,
  `cnpj_origem` varchar(18) DEFAULT NULL,
  `cnpj_destino` varchar(18) DEFAULT NULL,
  `data_aceite` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ainda_vigente` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


SET character_set_client = utf8;
SET character_set_connection = utf8;
SET character_set_results = utf8;
SET collation_connection = utf8_general_ci;


