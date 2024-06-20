CREATE VIEW d_reporte1
AS
SELECT usuario.no_Doc_Usuario, usuario.nombre_Usuario, usuario.direccion_Usuario,  usuario.telefono_Usuario, usuario.correo_Usuario,
usuario.estado_Usuario, pedido.id_Usuario, detalle_pedido.subtotal_Producto, detalle_pedido.cantidad_Producto FROM usuario INNER JOIN pedido on usuario.id_Usuario= pedido.id_Usuario
INNER join detalle_pedido on detalle_pedido.id_Pedido = pedido.id_Pedido;