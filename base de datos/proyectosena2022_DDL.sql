CREATE TABLE Usuario (
    id_Usuario int AUTO_INCREMENT primary key ,
    tipo_Doc_Usuario varchar ( 30) not null ,
    no_Doc_Usuario varchar ( 20 ) not null ,
    nombre_Usuario varchar (50) not null,
    apellido_Usuario varchar (30) not null ,
    direccion_Usuario varchar (30) not null ,
    telefono_Usuario  varchar (30) not null ,
       correo_Usuario varchar (30) not null ,
       password_Usuario varchar (30) not null ,
     foto_Usuario blob,
       estado_Usuario  varchar (30) not null ,
    id_Rol_Usuario int 
    );


CREATE TABLE rol_Usuario ( 
    id_Rol_Usuario int PRIMARY KEY, 
    descrip_Rol_Usuario varchar (30) not null, 
    estado_Rol_Usuario varchar (30) not null );

CREATE TABLE pedido (
    id_Pedido int AUTO_INCREMENT primary key,
fecha_Pedido DATe ,
hora_Pedido time,
total_Pedido double,
estado_Pedido varchar (30) not null,
pedido_Adomicilio char (3) not null ,
id_Usuario INT
    );



CREATE TABLE Producto( 
    id_Producto int AUTO_INCREMENT PRIMARY KEY, 
    descrip_Producto varchar(100) not null, 
    precio_Producto double not null, 
    categoria_Producto varchar(40) not null, 
    estado_Producto varchar(30) not null);


CREATE TABLE detalle_Pedido( 
    id_Detallepedido int AUTO_INCREMENT PRIMARY KEY, 
    id_Producto int not null, 
    cantidad_Producto int not null, 
    precio_Producto double, 
    subtotal_Producto double, 
    id_Pedido int not null);


CREATE TABLE domicilio ( 
    id_Dolmicilio int AUTO_INCREMENT PRIMARY KEY, 
    hora_Domicilio time not null, 
    estado_Domicilio varchar (30) not null, 
    id_Pedido int not null, 
    id_Domiciliario int not null );


// RELACIONES

ALTER TABLE pedido ADD FOREIGN KEY (id_Usuario) REFERENCES usuario (id_Usuario);

ALTER TABLE domicilio ADD FOREIGN KEY (id_Domiciliario) REFERENCES usuario (id_Usuario);

ALTER TABLE detalle_pedido ADD FOREIGN KEY (id_Producto) REFERENCES producto(id_Producto);

ALTER TABLE detalle_pedido ADD FOREIGN KEY (id_Pedido) REFERENCES pedido (id_Pedido);

ALTER TABLE usuario ADD FOREIGN KEY (id_Rol_Usuario) REFERENCES rol_Usuario (id_Rol_Usuario);

ALTER TABLE domicilio ADD FOREIGN KEY (id_Pedido) REFERENCES pedido (id_Pedido);
