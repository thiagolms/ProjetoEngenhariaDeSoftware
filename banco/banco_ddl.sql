create table roles
(
    id_role int auto_increment
        primary key,
    nome    varchar(30) not null
);

create table usuarios
(
    nome       varchar(100) not null,
    email      varchar(100) not null,
    senha      varchar(300) not null,
    cpf        varchar(11)  null,
    rg         varchar(9)   null,
    id_role    int          not null,
    id_usuario int auto_increment
        primary key,
    constraint roles_fk
        foreign key (id_role) references roles (id_role)
);

create table status
(
    id_status int auto_increment
        primary key,
    descricao varchar(50) null
);

create table protocolo
(
    id_protocolo   int auto_increment
        primary key,
    justificativa  varchar(500) not null,
    resumo_pt      varchar(500) not null,
    resumo_en      varchar(500) not null,
    data_inicio    date         null,
    data_fim       date         not null,
    id_status      int          null,
    id_usuario     int          null,
    especie_animal varchar(50)  null,
    constraint protocolo___fk_id_status_fkey
        foreign key (id_status) references status (id_status),
    constraint protocolo___fk_id_usuario_fkey
        foreign key (id_usuario) references usuarios (id_usuario)
);

