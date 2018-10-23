<?php
class preparedSQL
{
    const USER1_QUERY_DNI = "SELECT * FROM v_usuarios WHERE dni = ?";
    const INSTRUCTOR_NEW = "INSERT INTO  `usuario`(`dni`, `nombre`, `apellido`, `email`, `cod_rol`, `cod_estado_usuario`) VALUES (?,?,?,?,3,3)"; // 3-> COD INSTRUCTOR, 3 -> INACTIVO
    const GET_ALL_INSTRUCTORES = "SELECT * FROM `v_usuarios` WHERE id_rol = 3";
}


