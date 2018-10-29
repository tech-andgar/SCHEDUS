<?php
class preparedSQL
{
    const USER1_QUERY_DNI = "SELECT * FROM v_usuarios WHERE dni = ?";
    const INSTRUCTOR_NEW = "INSERT INTO  `usuario`(`dni`, `nombre`, `apellido`, `email`, `cod_rol`, `cod_estado_usuario`) VALUES (?,?,?,?,3,3)"; // 3-> COD INSTRUCTOR, 3 -> INACTIVO
    const GET_ALL_INSTRUCTORES = "SELECT * FROM `v_usuarios` WHERE id_rol = 3";
    const GET_INSTRUCTOR = "SELECT * FROM `v_usuarios` WHERE id_usuario=? AND id_rol = 3";
    const UPDATE_DATA_INSTRUCTOR = "UPDATE `v_usuarios` SET `nombre`= ?, `apellido`= ?,`email`= ? WHERE `dni` = ? ";
    const UPDATE_STATUS_INSTRUCTOR = "UPDATE `usuario` SET `cod_estado_usuario` = ? WHERE `usuario`.`id_usuario` = ?";
    const FICHA_NEW = "INSERT INTO `v_ficha_programa`(`num_ficha`, `num_grupo`, `name_programa_formacion`, `name_nivel_programa_formacion`) VALUES (?,?,?,?,?,?)";
    const GET_ALL_FICHAS = "SELECT * FROM `v_ficha_programa`";
    const GET_ALL_GRUPO = "SELECT * FROM `grupo`";
    const GET_ALL_NIVEL_FORMACION = "SELECT * FROM `nivel_programa_formacion`";
    const GET_ALL_PROGRAMA_FORMACION = "SELECT * FROM `programa_formacion`"
    ;
}


