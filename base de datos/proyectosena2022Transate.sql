<--PROCEDIMIENTO CONSULTAR PEDIDO-->

DELIMITER %%

CREATE PROCEDURE ConsultarPedido()
BEGIN
    SELECT * FROM Pedido;
END%%

DELIMITER ; 

<--PROCEDIMIENTO CONSULTAR PEDIDO POR ID-->

DELIMITER %%

CREATE PROCEDURE consultarPedidoxid(
    _id_Pedido INT(11)
)
BEGIN
    SELECT * FROM Pedido
    WHERE id_Pedido = _id_Pedido;
END%%

DELIMITER ; 

<--PROCEDIMIENTO INSERTAR PEDIDO-->

DELIMITER %%

CREATE PROCEDURE insertarPedido
(
    _fecha_Pedido DATE,
    _hora_Pedido TIME, 
    _total_Pedido VARCHAR(30), 
    _estado_Pedido VARCHAR(30), 
    _pedido_Adomicilio CHAR(3), 
    _id_Usuario INT(11)
)
BEGIN
    INSERT INTO pedido VALUES (
        NULL,
        _fecha_Pedido,
        _hora_Pedido,
        _total_Pedido,
        _estado_Pedido,
        _pedido_Adomicilio,
        _id_Usuario
    );

END%%

DELIMITER ; 

--ACTUALIZAR PEDIDO

DELIMITER $$
CREATE PROCEDURE actualizarPedido(
    _id_Pedido INT(11),
    _fecha_Pedido DATE,
    _hora_Pedido TIME,
    _total_Pedido INT,
    _estado_Pedido VARCHAR(30),
    _pedido_Adomicilio VARCHAR(3),
    _id_Usuario INT(11)
)
 BEGIN 

      UPDATE pedido SET
        fecha_Pedido = _fecha_Pedido,
        hora_Pedido = _hora_Pedido,
        total_Pedido = _total_Pedido,
        estado_Pedido = _estado_Pedido,
        pedido_Adomicilio = _pedido_Adomicilio,
        id_Usuario = _id_Usuario
      WHERE id_Pedido = _id_Pedido;

      END$$

      DELIMITER ;

      --ELIMINAR PEDIDO
DELIMITER %%
CREATE PROCEDURE eliminarPedido(
          _id_Pedido INT(11)
)
 BEGIN

          DELETE FROM pedido
          WHERE id_Pedido = _id_Pedido;
      
      END%%

      DELIMITER ;
