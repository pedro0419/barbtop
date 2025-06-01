CREATE TABLE Corte (
    id_corte INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    id_barbeiro INT,
    FOREIGN KEY (id_barbeiro) REFERENCES Barbeiro(id_barbeiro)
);

-- Tabela Equipamentos
CREATE TABLE Equipamento (
    id_equipamento INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    tipo VARCHAR(50),
    id_barbeiro INT,
    FOREIGN KEY (id_barbeiro) REFERENCES Barbeiro(id_barbeiro)
);

-- Tabela Serviço
CREATE TABLE Servico (
    id_servico INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    duracao INT, -- em minutos
    preco DECIMAL(10,2),
    id_corte INT,
    FOREIGN KEY (id_corte) REFERENCES Corte(id_corte)
);

-- Tabela Agendamento
CREATE TABLE Agendamento (
    id_agendamento INT PRIMARY KEY AUTO_INCREMENT,
    data_hora DATETIME NOT NULL,
    status ENUM('Agendado', 'Concluído', 'Cancelado') DEFAULT 'Agendado',
    id_cliente INT NOT NULL,
    id_barbeiro INT NOT NULL,
    id_servico INT NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente),
    FOREIGN KEY (id_barbeiro) REFERENCES Barbeiro(id_barbeiro),
    FOREIGN KEY (id_servico) REFERENCES Servico(id_servico)
);

-- Tabela Lucro
CREATE TABLE Lucro (
    id_lucro INT PRIMARY KEY AUTO_INCREMENT,
    mes INT NOT NULL,
    ano INT NOT NULL,
    valor_total DECIMAL(10,2) NOT NULL
);

-- Tabela Avaliação
CREATE TABLE Avaliacao (
    id_avaliacao INT PRIMARY KEY AUTO_INCREMENT,
    estrelas INT CHECK (estrelas BETWEEN 1 AND 5),
    comentario TEXT,
    id_cliente INT NOT NULL,
    id_barbeiro INT NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES Cliente(id_cliente),
    FOREIGN KEY (id_barbeiro) REFERENCES Barbeiro(id_barbeiro)
);