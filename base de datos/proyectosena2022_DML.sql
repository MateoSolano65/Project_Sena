<--rol_usuario-->

INSERT into rol_usuario(id_Rol_Usuario,descrip_Rol_Usuario,estado_Rol_Usuario)
values ('1', 'administrador','activo');

INSERT into rol_usuario(id_Rol_Usuario,descrip_Rol_Usuario,estado_Rol_Usuario)
values ('2','cliente','activo');

INSERT into rol_usuario(id_Rol_Usuario,descrip_Rol_Usuario,estado_Rol_Usuario)
values ('3', 'domiciliario','activo');



<--usuario-->

INSERT INTO usuario(id_Usuario,tipo_Doc_Usuario,no_Doc_Usuario,nombre_Usuario,apellido_Usuario,direccion_Usuario,telefono_Usuario,correo_Usuario,password_Usuario,foto_Usuario,estado_Usuario,id_Rol_Usuario)
values ( 1,'cedula',34207527,'Diego','molano','cll 132 a 146', 3201897529,'molano@gmail.com','123xxx', 'ninguna','activo',1);

INSERT INTO usuario(id_Usuario,tipo_Doc_Usuario,no_Doc_Usuario,nombre_Usuario,apellido_Usuario,direccion_Usuario,telefono_Usuario,correo_Usuario,password_Usuario,foto_Usuario,estado_Usuario,id_Rol_Usuario)
VALUES ( 2,'cedula',4896849,'Diana','rendon','cll 132 a 146', 3201897529,'rendon@gmail.com','gdlps', 'ninguna','activo',2);

INSERT INTO usuario(id_Usuario,tipo_Doc_Usuario,no_Doc_Usuario,nombre_Usuario,apellido_Usuario,direccion_Usuario,telefono_Usuario,correo_Usuario,password_Usuario,foto_Usuario,estado_Usuario,id_Rol_Usuario)
VALUES ( 3,'cedula',87560490,'Mateo','solano','cll 119 a 153', 4769,'solano@gmail.com','gil122', 'ninguna','activo',3);

INSERT INTO usuario(id_Usuario,tipo_Doc_Usuario,no_Doc_Usuario,nombre_Usuario,apellido_Usuario,direccion_Usuario,telefono_Usuario,correo_Usuario,password_Usuario,foto_Usuario,estado_Usuario,id_Rol_Usuario)
VALUES ( 4,'cedula',478027,'Oscar','mana','cll 110 a 123', 749,'mana@gmail.com','manito785', 'ninguna','activo',1);

INSERT INTO usuario(id_Usuario,tipo_Doc_Usuario,no_Doc_Usuario,nombre_Usuario,apellido_Usuario,direccion_Usuario,telefono_Usuario,correo_Usuario,password_Usuario,foto_Usuario,estado_Usuario,id_Rol_Usuario)
VALUES ( 5,'cedula',478027,'Marta','lares','cll 120 a 173', 2628,'lares@gmail.com','uifhh', 'ninguna','activo',3);

 <--pedido-->

insert into pedido(id_Pedido,fecha_Pedido,hora_Pedido,total_Pedido,estado_Pedido,pedido_Adomicilio,id_Usuario)
values ( 1,'12-1-2000','12:30am',12.000,'activo','si', 1);

insert into pedido(id_Pedido,fecha_Pedido,hora_Pedido,total_Pedido,estado_Pedido,pedido_Adomicilio,id_Usuario)
values ( 2,'48-3-2012','8:30am',7.000,'inactivo','no', 2);

insert into pedido(id_Pedido,fecha_Pedido,hora_Pedido,total_Pedido,estado_Pedido,pedido_Adomicilio,id_Usuario)
values ( 3,'15-6-2076','2:30am',20.000,'inactivo','si', 3);

insert into pedido(id_Pedido,fecha_Pedido,hora_Pedido,total_Pedido,estado_Pedido,pedido_Adomicilio,id_Usuario)
values ( 4,'25-5-2021','5:30am',10.000,'activo','no', 4);

insert into pedido(id_Pedido,fecha_Pedido,hora_Pedido,total_Pedido,estado_Pedido,pedido_Adomicilio,id_Usuario)
values ( 5,'5-25-2021','9:30am',30.000,'activo','si', 5);

<--producto-->

INSERT into producto (id_Producto,descrip_Producto,precio_Producto,categoria_Producto,estado_Producto)
VALUES (1,'pizza',10.000,2,2);

INSERT into producto (id_Producto,descrip_Producto,precio_Producto,categoria_Producto,estado_Producto)
VALUES (2,'pizza',10.000,2,2);

INSERT into producto (id_Producto,descrip_Producto,precio_Producto,categoria_Producto,estado_Producto)
VALUES (3,'marinero',15.000,3,3);

INSERT into producto (id_Producto,descrip_Producto,precio_Producto,categoria_Producto,estado_Producto)
VALUES (4,'carnivoro',18.000,4,4);

INSERT into producto (id_Producto,descrip_Producto,precio_Producto,categoria_Producto,estado_Producto)
VALUES (5,'rey frnaces',25.000,5,5);

<--detalle_pedido-->

INSERT INTO detalle_pedido (id_Detallepedido,id_Producto,cantidad_Producto,precio_Producto,subtotal_Producto,id_Pedido)
VALUES (1,1,50,10.000,100.000,1);

INSERT INTO detalle_pedido (id_Detallepedido,id_Producto,cantidad_Producto,precio_Producto,subtotal_Producto,id_Pedido)
VALUES (2,5,5,10.000,100.000,2);

INSERT INTO detalle_pedido (id_Detallepedido,id_Producto,cantidad_Producto,precio_Producto,subtotal_Producto,id_Pedido)
VALUES (3,4,10,10.000,100.000,3);

INSERT INTO detalle_pedido (id_Detallepedido,id_Producto,cantidad_Producto,precio_Producto,subtotal_Producto,id_Pedido)
VALUES (4,3,60,10.000,100.000,4);

INSERT INTO detalle_pedido (id_Detallepedido,id_Producto,cantidad_Producto,precio_Producto,subtotal_Producto,id_Pedido)
VALUES (5,2,02,10.000,100.000,1);

<--domicilio-->

INSERT into domicilio ( id_Dolmicilio,hora_Domicilio,estado_Domicilio,id_Pedido,id_Domiciliario)
VALUES (1,'12:30','activo',1,1);

INSERT into domicilio ( id_Dolmicilio,hora_Domicilio,estado_Domicilio,id_Pedido,id_Domiciliario)
VALUES (2,'8:30','activo',2,2);

INSERT into domicilio ( id_Dolmicilio,hora_Domicilio,estado_Domicilio,id_Pedido,id_Domiciliario)
VALUES (3,'2:30','inactivo',3,3);

INSERT into domicilio ( id_Dolmicilio,hora_Domicilio,estado_Domicilio,id_Pedido,id_Domiciliario)
VALUES (4,'5:30','activo',4,4);

INSERT into domicilio ( id_Dolmicilio,hora_Domicilio,estado_Domicilio,id_Pedido,id_Domiciliario)
VALUES (5,'9:30','activo',5,5);


