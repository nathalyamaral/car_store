use car_store;

select * from users;
select * from agencia;
select * from endereco;
select * from  agencia_has_endereco;
select * from telefone;
select * from agencia_has_telefone;
select * from carro;
select * from imagem;
select * from carro_has_imagem;

insert into users(cpf, name, email, password) values('05935208156', 'teste', 'teste@mail.com', '123456');
insert into agencia(cnpj, razao_social, users_cpf) values ('39125484000130', 'Corumba agencia', '05935208156');
insert into endereco(bairro, cep, cidade, estado, numero, logradouro) values ('Centro', '79303060', 'Corumba', 'MS', '55', 'Rua Dom Aquino');
insert into agencia_has_endereco(agencia_cnpj, endereco_idendereco) values('39125484000130', 1);
insert into telefone(numero) values('3232-2061');
insert into agencia_has_telefone(agencia_cnpj, telefone_idtelefone) values('39125484000130', 1);
insert into categoria(nome, descricao) values('Intermediario', '4 portas, Ar-Condionado, Câmbio Manual');
insert into marca(nome) values('FIAT');
insert into imagem(imagem) values('car_thumb_1.jpg');
insert into imagem(imagem) values('car_thumb_2.jpg');
insert into imagem(imagem) values('car_thumb_3.jpg');
insert into imagem(imagem) values('car_thumb_4.jpg');
insert into imagem(imagem) values('car_thumb_5.jpg');

insert into carro(placa, modelo, ano, numero_portas, numero_assento, cor, descricao, km, combustivel, cambio, valor_diaria, status, marca_idmarca, agencia_cnpj, categoria_idcategoria)
	values('KBO-8601', 'Uno', 2015, 4, 4, 'Branco', 'Carro confortável e economico', 10.000, 'FLEX', 'MANUAL', 88.00, 'D', 1, '39125484000130', 1);

insert into carro_has_imagem(carro_placa, imagem_idimagem) values('KBO-8601', 1);
insert into carro_has_imagem(carro_placa, imagem_idimagem) values('KBO-8601', 2);
insert into carro_has_imagem(carro_placa, imagem_idimagem) values('KBO-8601', 3);
insert into carro_has_imagem(carro_placa, imagem_idimagem) values('KBO-8601', 4);
insert into carro_has_imagem(carro_placa, imagem_idimagem) values('KBO-8601', 5);