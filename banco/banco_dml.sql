insert into roles (nome) values ('ADMIN');
insert into roles (nome) values ('SECRETARIA');
insert into roles (nome) values ('PESQUISADOR');

insert into usuarios (nome, email, senha, cpf, rg, id_role)
values ('Administrador', 'administrador@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '00000000000', '000000000', 5);

insert into usuarios (nome, email, senha, cpf, rg, id_role)
values ('Secretaria', 'secretaria@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '00000000000', '000000000', 15);