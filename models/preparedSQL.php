<?php
class preparedSQL
{
    // Usuario
    const GET_USER_DNI = "SELECT * FROM v_usuarios WHERE dni = ?";
    const GET_USER_EMAIL = "SELECT * FROM v_usuarios WHERE email = ?";

    //Instructores
    const GET_INSTRUCTOR = "SELECT * FROM `v_usuarios` WHERE id_usuario=? AND id_rol = 3";
    const GET_ALL_INSTRUCTORES = "SELECT * FROM `v_usuarios` WHERE id_rol = 3";
    const INSTRUCTOR_NEW = "INSERT INTO  `usuario`(`dni`, `nombre`, `apellido`, `email`, `cod_rol`, `cod_estado_usuario`) VALUES (?,?,?,?,3,3)"; // 3-> COD INSTRUCTOR, 3 -> INACTIVO
    const UPDATE_DATA_INSTRUCTOR = "UPDATE `usuario` SET `nombre`= ?, `apellido`= ?,`email`= ? WHERE `dni` = ? ";
    const UPDATE_STATUS_INSTRUCTOR = "UPDATE `usuario` SET `cod_estado_usuario` = ? WHERE `id_usuario` = ?";

    // Grupo de fichas en Programa de Formacion
    const GET_ALL_FICHAS_GRUPO_PROGRAMA_NIVEL_ESTADO = "SELECT * FROM `v_ficha_grupo_programa_nivel_estado`";
    const GET_FICHA_GRUPO_PROGRAMA_NIVEL_ESTADO_ID = "SELECT * FROM `v_ficha_grupo_programa_nivel_estado` WHERE `id_ficha` = ? ";

    //Fichas
    const GET_ALL_FICHAS_PROGRAMA_NIVEL_ESTADO = "SELECT * FROM `v_ficha_programa_nivel_estado`";
    const GET_FICHA_PROGRAMA_NIVEL_ESTADO_ID = "SELECT * FROM `v_ficha_programa_nivel_estado` WHERE `id_ficha` = ? ";
    const INSERT_NEW_FICHA = "INSERT INTO `ficha`(`num_ficha`, `cod_estado_ficha`, `cod_programa_formacion`) VALUES (?,1,?)"; // 1 -> Pendiente Asignado Estado de Ficha
    const UPDATE_DATA_FICHA_ID = "UPDATE `ficha` SET `num_ficha`=?,`cod_estado_ficha`=?,`cod_programa_formacion`=? WHERE `id_ficha`= ?";

    //Estado de Fichas
    const GET_ALL_ESTADO_FICHAS = "SELECT `id_estado_ficha`, `name_estado_ficha` FROM `estado_ficha`";
    const GET_ESTADO_FICHA_ID = "SELECT `id_estado_ficha`, `name_estado_ficha` FROM `estado_ficha` WHERE `id_estado_ficha` = ?";
    const GET_ESTADO_FICHA_NAME = "SELECT `name_estado_ficha`, `id_estado_ficha` FROM `estado_ficha` WHERE `name_estado_ficha` LIKE ?";

    // Grupo
    const GET_ALL_GRUPO = "SELECT * FROM `grupo`";
    const GET_GRUPO_ID = "SELECT * FROM `grupo` WHERE id_grupo = ?";

    //Nivel Formacion
    const GET_ALL_NIVEL_FORMACION = "SELECT * FROM `nivel_programa_formacion`";
    const GET_NIVEL_FORMACION_ID = "SELECT * FROM `nivel_programa_formacion` WHERE `id_nivel_programa_formacion` = ?";
    const GET_NIVEL_FORMACION_NAME = "SELECT `name_nivel_programa_formacion`, `id_nivel_programa_formacion` FROM `nivel_programa_formacion` WHERE `name_nivel_programa_formacion` LIKE ?";

    //Programa de formacion
    const GET_ALL_PROGRAMA_FORMACION = "SELECT * FROM `v_programa_formacion`";
    const GET_PROGRAMA_FORMACION_ID = "SELECT * FROM `v_programa_formacion` WHERE `id_programa_formacion` = ?";
    const GET_PROGRAMA_FORMACION_CODIGO = "SELECT * FROM `v_programa_formacion` WHERE `codigo` = ?";
    const GET_PROGRAMA_FORMACION_NAME = "SELECT * FROM `v_programa_formacion` WHERE `name_nivel_programa_formacion` LIKE ?";
    const INSERT_NEW_PROGRAMA_FORMACION = "INSERT INTO  `programa_formacion`(`codigo`, `short_name_programa_formacion`, `name_programa_formacion`, `version_programa`, `cod_nivel_programa_formacion`, `cod_proyecto`, `cod_estado_programa_formacion`) VALUES (?,?,?,?,?,?,1)"; // 1-> ACtIVO
    const UPDATE_DATA_PROGRAMA_FORMACION = "UPDATE `programa_formacion` SET `short_name_programa_formacion`= ? , `name_programa_formacion`= ? , `version_programa`= ? , `cod_nivel_programa_formacion`= ? , `cod_proyecto`= ? , `cod_estado_programa_formacion`= 1  WHERE `codigo` = ? ";

    //Proyecto
    const GET_ALL_PROYECTO = "SELECT * FROM `proyecto`";
    const GET_PROYECTO_ID = "SELECT * FROM `proyecto` WHERE `id_proyecto` = ?";
    const GET_PROYECTO_NAME = "SELECT * FROM `proyecto` WHERE `name_proyecto` LIKE ?";
    const INSERT_NEW_PROYECTO = "INSERT INTO `proyecto`(`name_proyecto`) VALUES (?)";

    //Estado Programa de Formacion
    const GET_ALL_ESTADO_PROGRAMAS_FORMACION = "SELECT `id_estado_programa_formacion`, `name_estado_programa_formacion` FROM `estado_programa_formacion`";
    const GET_ESTADO_PROGRAMA_FORMACION_ID = "SELECT `id_estado_programa_formacion`, `name_estado_programa_formacion` FROM `estado_programa_formacion` WHERE ?";

    // Trimestre
    const GET_ALL_TRIMESTRE = "SELECT `id_trimestre`, `name_trimestre`, `fecha_inicio`, `fecha_fin`FROM `trimestre`";
    const GET_TRIMESTRE_ID = "SELECT `id_trimestre`, `name_trimestre`, `fecha_inicio`, `fecha_fin` FROM `trimestre` WHERE `id_trimestre`=?";
    const INSERT_NEW_TRIMESTRE="INSERT INTO `trimestre`(`name_trimestre`, `fecha_inicio`, `fecha_fin`) VALUES (?,?,?)";
    const UPDATE_DATA_TRIMESTRE_ID = "UPDATE `trimestre` SET `name_trimestre`=[value-2],`fecha_inicio`=[value-3],`fecha_fin`=[value-4],`create_time`=[value-5],`update_time`=[value-6],`version`=[value-7] WHERE `id_trimestre`";
}


