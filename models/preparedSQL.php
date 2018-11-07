<?php
class preparedSQL
{
    // Usuario
    const USER1_QUERY_DNI = "SELECT * FROM v_usuarios WHERE dni = ?";
    const GET_USER_EMAIL = "SELECT * FROM v_usuarios WHERE email = ?";

    //Instructores
    const GET_INSTRUCTOR = "SELECT * FROM `v_usuarios` WHERE id_usuario=? AND id_rol = 3";
    const GET_ALL_INSTRUCTORES = "SELECT * FROM `v_usuarios` WHERE id_rol = 3";
    const INSTRUCTOR_NEW = "INSERT INTO  `usuario`(`dni`, `nombre`, `apellido`, `email`, `cod_rol`, `cod_estado_usuario`) VALUES (?,?,?,?,3,3)"; // 3-> COD INSTRUCTOR, 3 -> INACTIVO
    const UPDATE_DATA_INSTRUCTOR = "UPDATE `v_usuarios` SET `nombre`= ?, `apellido`= ?,`email`= ? WHERE `dni` = ? ";
    const UPDATE_STATUS_INSTRUCTOR = "UPDATE `usuario` SET `cod_estado_usuario` = ? WHERE `usuario`.`id_usuario` = ?";

    //Fichas
    const INSERT_NEW_FICHA = "INSERT INTO `ficha`(`num_ficha`, `cod_estado_ficha`, `cod_programa_formacion`) VALUES (?,1,?)"; // 1 -> Pendiente Asignado Estado de Ficha
    const GET_ALL_FICHAS = "SELECT * FROM `v_ficha_programa`";

    // Grupo
    const GET_ALL_GRUPO = "SELECT * FROM `grupo`";

    //Nivel Formacion
    const GET_ALL_NIVEL_FORMACION = "SELECT * FROM `nivel_programa_formacion`";

    //Programa de formacion
    const GET_ALL_PROGRAMA_FORMACION = "SELECT * FROM `v_programa_formacion`";
}


