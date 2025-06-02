CREATE TABLE Corte (
    id_corte INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL
);

-- Tabela Equipamentos
CREATE TABLE Equipamento (
    id_equipamento INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
	marca VARCHAR(45)
);

-- Tabela Serviço
CREATE TABLE Servico (
    id_servico INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    duracao INT, -- em minutos
    preco INT,
    descricao VARCHAR(45)
);

-- Tabela Agendamento
CREATE TABLE Agendamento (
	id_agendamento INT PRIMARY KEY AUTO_INCREMENT,
    data_	DATETIME,
    horario_de_inicio	DATETIME,
    horario_de_termino	DATETIME,
    status_ VARCHAR(45),
    FOREIGN KEY (id_barbeiro) REFERENCES Barbeiro(id_barbeiro),
	FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente),
    FOREIGN KEY (id_servico) REFERENCES Servico(id_servico)
);

-- Tabela Lucro
CREATE TABLE Lucro (
    id_lucro INT PRIMARY KEY AUTO_INCREMENT,
    mes INT NOT NULL,
    ano INT NOT NULL,
    FOREIGN KEY (corte_id_corte) REFERENCES Corte(id_corte)
);

-- Tabela Avaliação
CREATE TABLE Avaliacao (
    id_avaliacao INT PRIMARY KEY AUTO_INCREMENT,
    estrelas INT CHECK (estrelas BETWEEN 1 AND 5),
    comentario TEXT,
    FOREIGN KEY (corte_id_corte) REFERENCES Corte(id_corte)
);


-- Tabela barbeiro
CREATE TABLE Barbeiro (
    id_barbeiro INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    idade INT,
    endereco VARCHAR(100),
	FOREIGN KEY (equipamento_id_equipamento) REFERENCES Equipamento(id_equipamento),
    FOREIGN KEY (corte_id_corte) REFERENCES Corte(id_corte)
);


-- Tabela cliente
CREATE TABLE Cliente (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    idade INT,
    email VARCHAR(100),
    endereco VARCHAR(255)
);