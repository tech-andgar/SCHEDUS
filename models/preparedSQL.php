<?php
class preparedSQL
{
    //
    // ─── USUARIO ────────────────────────────────────────────────────────────────────
    //


    const GET_USER_DNI = "SELECT * FROM v_usuarios WHERE dni = ?";
    const GET_USER_EMAIL = "SELECT * FROM v_usuarios WHERE email = ?";

    //
    // ─── INSTRUCTORES ───────────────────────────────────────────────────────────────
    //


    const GET_INSTRUCTOR = "SELECT * FROM `v_usuarios` WHERE id_usuario=? AND id_rol = 3";
    const GET_ALL_INSTRUCTORES = "SELECT * FROM `v_usuarios` WHERE id_rol = 3";
    const INSTRUCTOR_NEW = "INSERT INTO  `usuario`(`dni`, `nombre`, `apellido`, `email`, `cod_rol`, `cod_estado_usuario`) VALUES (?,?,?,?,3,3)"; // 3-> COD INSTRUCTOR, 3 -> INACTIVO
    const UPDATE_DATA_INSTRUCTOR = "UPDATE `usuario` SET `nombre`= ?, `apellido`= ?,`email`= ? WHERE `dni` = ? ";
    const UPDATE_STATUS_INSTRUCTOR = "UPDATE `usuario` SET `cod_estado_usuario` = ? WHERE `id_usuario` = ?";


    //
    // ─── RUTA DE FICHA ──────────────────────────────────────────────────────────────
    //

    const GET_ALL_RUTA_FICHA_V = "SELECT * FROM `v_ruta_ficha`";
    const GET_ALL_RUTA_FICHA_JORNADA = "SELECT * FROM `ruta_ficha` INNER JOIN jornada on `ruta_ficha`.cod_jornada = `jornada`.id_jornada";

    //
    // ─── GRUPO DE FICHAS EN PROGRAMA DE FORMACION ───────────────────────────────────
    //


    const GET_ALL_FICHAS_GRUPO_PROGRAMA_NIVEL_ESTADO = "SELECT * FROM `v_ficha_grupo_programa_nivel_estado`";
    const GET_FICHA_GRUPO_PROGRAMA_NIVEL_ESTADO_ID = "SELECT * FROM `v_ficha_grupo_programa_nivel_estado` WHERE `id_ficha` = ? ";

    //
    // ─── FICHAS ─────────────────────────────────────────────────────────────────────
    //


    const GET_ALL_FICHAS_PROGRAMA_NIVEL_ESTADO = "SELECT * FROM `v_ficha_programa_nivel_estado`";
    const GET_FICHA_PROGRAMA_NIVEL_ESTADO_ID = "SELECT * FROM `v_ficha_programa_nivel_estado` WHERE `id_ficha` = ? ";
    const INSERT_NEW_FICHA = "INSERT INTO `ficha`(`num_ficha`, `cod_estado_ficha`, `cod_programa_formacion`) VALUES (?,1,?)"; // 1 -> Pendiente Asignado Estado de Ficha
    const UPDATE_DATA_FICHA_ID = "UPDATE `ficha` SET `num_ficha`=?,`cod_estado_ficha`=?,`cod_programa_formacion`=? WHERE `id_ficha`= ?";

    //
    // ─── ESTADO DE FICHAS ───────────────────────────────────────────────────────────
    //


    const GET_ALL_ESTADO_FICHAS = "SELECT `id_estado_ficha`, `name_estado_ficha` FROM `estado_ficha`";
    const GET_ESTADO_FICHA_ID = "SELECT `id_estado_ficha`, `name_estado_ficha` FROM `estado_ficha` WHERE `id_estado_ficha` = ?";
    const GET_ESTADO_FICHA_NAME = "SELECT `name_estado_ficha`, `id_estado_ficha` FROM `estado_ficha` WHERE `name_estado_ficha` LIKE ?";

    //
    // ─── GRUPO ──────────────────────────────────────────────────────────────────────
    //


    const GET_ALL_GRUPO = "SELECT * FROM `v_ruta_ficha`";
    const GET_GRUPO_ID = "SELECT * FROM `grupo` WHERE id_grupo = ?";
    const GET_GRUPO_ID_RUTA_FICHA = "SELECT * FROM `v_grupo_ficha` WHERE id_ruta_ficha = ?";

    //
    // ─── NIVEL FORMACION ────────────────────────────────────────────────────────────
    //

    const GET_ALL_NIVEL_FORMACION = "SELECT * FROM `nivel_programa_formacion`";
    const GET_NIVEL_FORMACION_ID = "SELECT * FROM `nivel_programa_formacion` WHERE `id_nivel_programa_formacion` = ?";
    const GET_NIVEL_FORMACION_NAME = "SELECT `name_nivel_programa_formacion`, `id_nivel_programa_formacion` FROM `nivel_programa_formacion` WHERE `name_nivel_programa_formacion` LIKE ?";
    const INSERT_NIVEL_FORMACION = "INSERT INTO `nivel_programa_formacion`(`name_nivel_programa_formacion`, `duracion`) VALUES (?,?)";
    const UPDATE_DATA_NIVEL_FORMACION = "UPDATE `nivel_programa_formacion` SET `name_nivel_programa_formacion`= ? ,`duracion`= ? WHERE `id_nivel_programa_formacion` = ?";

    //
    // ─── PROGRAMA DE FORMACION ──────────────────────────────────────────────────────
    //


    const GET_ALL_PROGRAMA_FORMACION = "SELECT * FROM `v_programa_formacion`";
    const GET_PROGRAMA_FORMACION_ID = "SELECT * FROM `v_programa_formacion` WHERE `id_programa_formacion` = ?";
    const GET_PROGRAMA_FORMACION_CODIGO = "SELECT * FROM `v_programa_formacion` WHERE `codigo` = ?";
    const GET_PROGRAMA_FORMACION_NAME = "SELECT * FROM `v_programa_formacion` WHERE `name_nivel_programa_formacion` LIKE ?";
    const INSERT_NEW_PROGRAMA_FORMACION = "INSERT INTO  `programa_formacion`(`codigo`, `short_name_programa_formacion`, `name_programa_formacion`, `version_programa`, `cod_nivel_programa_formacion`, `cod_proyecto`, `cod_estado_programa_formacion`) VALUES (?,?,?,?,?,?,1)";  // 1-> ACtIVO
    const UPDATE_DATA_PROGRAMA_FORMACION = "UPDATE `programa_formacion` SET `short_name_programa_formacion`=?, `name_programa_formacion`=?, `version_programa`=?, `cod_nivel_programa_formacion`=?, `cod_proyecto`=? WHERE `id_programa_formacion`=?";
    const UPDATE_STATUS_PROGRAMA_FORMACION = "UPDATE `programa_formacion` SET `cod_estado_programa_formacion` = ? WHERE `id_programa_formacion` = ?";


    //
    // ─── PROYECTO ───────────────────────────────────────────────────────────────────
    //


    const GET_ALL_PROYECTO = "SELECT * FROM `proyecto`";
    const GET_PROYECTO_ID = "SELECT * FROM `proyecto` WHERE `id_proyecto` = ?";
    const GET_PROYECTO_NAME = "SELECT * FROM `proyecto` WHERE `name_proyecto` LIKE ?";
    const INSERT_NEW_PROYECTO = "INSERT INTO `proyecto`(`name_proyecto`) VALUES (?)";
    const UPDATE_DATA_PROYECTO = "UPDATE `proyecto` SET `name_proyecto`= ? WHERE `id_proyecto` = ?";
    //
    // ─── ESTADO PROGRAMA DE FORMACION ───────────────────────────────────────────────
    //


    const GET_ALL_ESTADO_PROGRAMAS_FORMACION = "SELECT `id_estado_programa_formacion`, `name_estado_programa_formacion` FROM `estado_programa_formacion`";
    const GET_ESTADO_PROGRAMA_FORMACION_ID = "SELECT `id_estado_programa_formacion`, `name_estado_programa_formacion` FROM `estado_programa_formacion` WHERE ?";

    //
    // ─── TRIMESTRE ──────────────────────────────────────────────────────────────────
    //


    const GET_ALL_TRIMESTRE = "SELECT `id_trimestre`, `name_trimestre`, `fecha_inicio`, `fecha_fin`FROM `trimestre`";
    const GET_TRIMESTRE_ID = "SELECT `id_trimestre`, `name_trimestre`, `fecha_inicio`, `fecha_fin` FROM `trimestre` WHERE `id_trimestre`=?";
    const GET_TRIMESTRE_NAME = "SELECT * FROM `trimestre` WHERE `name_trimestre` LIKE ?";
    const INSERT_NEW_TRIMESTRE="INSERT INTO `trimestre` (`name_trimestre`, `fecha_inicio`, `fecha_fin`) VALUES (?,?,?);";
    const UPDATE_DATA_TRIMESTRE_ID = "UPDATE `trimestre` SET `name_trimestre`=?,`fecha_inicio`=?,`fecha_fin`=? WHERE `id_trimestre` = ?";

    //
    // ─── COMPETENCIA ────────────────────────────────────────────────────────────────
    //


    const GET_ALL_COMPETENCIA = "SELECT * FROM `competencia` INNER JOIN programa_formacion on `competencia`.cod_programa_formacion = `programa_formacion`.id_programa_formacion";
    const GET_COMPETENCIA_ID = "SELECT * FROM `competencia` WHERE `	id_competencia` = ?";
    const GET_COMPETENCIA_NAME = "SELECT * FROM `competencia` WHERE `name_competencia` LIKE ?";
    const GET_LAST_COMPETENCIA_ID = "SELECT id_competencia FROM `competencia` ORDER BY id_competencia DESC LIMIT 1";
    const INSERT_NEW_COMPETENCIA = "INSERT INTO `competencia`(`id_competencia`,`cod_programa_formacion`, `codigo_competencia`, `num_competencia2`, `name_competencia`) VALUES (?,?,?,?,?)";

    //
    // ─── JORNADA ────────────────────────────────────────────────────────────────────
    //


    const GET_ALL_JORNADA = "SELECT * FROM `jornada`";
    const GET_JORNADA_ID = "SELECT * FROM `jornada` WHERE `id_jornada`= ?";
    const GET_JORNADA_NAME = "SELECT * FROM `jornada` WHERE `name_jornada` LIKE ?";
    const INSERT_NEW_JORNADA = "INSERT INTO `jornada`(`name_jornada`) VALUES (?)";
    const UPDATE_DATA_JORNADA_ID = "UPDATE `jornada` SET `name_jornada`= ? WHERE `id_jornada` = ?";

    //
    // ─── AMBIENTE ───────────────────────────────────────────────────────────────────
    //


    const GET_ALL_AMBIENTE = "SELECT * FROM `v_ambientes`";
    const GET_AMBIENTE_ID = "SELECT * FROM `v_ambientes` WHERE `id_ambiente` = ?";
    const GET_AMBIENTE_NAME = "SELECT * FROM `v_ambientes` WHERE `name_ambiente` LIKE ?";
    const INSERT_NEW_AMBIENTE = "";

    //
    // ─── SEDE ───────────────────────────────────────────────────────────────────
    //

    const GET_ALL_SEDE = "SELECT * FROM `sede`";
    const GET_SEDE_ID = "SELECT * FROM `sede` WHERE `id_sede` = ?";
    const GET_SEDE_NAME = "SELECT * FROM `sede` WHERE `name_sede` LIKE ?";
    const INSERT_NEW_SEDE = "INSERT INTO `sede`(`name_sede`, `direccion`) VALUES (?,?)";
    const UPDATE_DATA_SEDE_ID="UPDATE `sede` SET `name_sede`= ? ,`direccion`= ?  WHERE `id_sede` = ?";

    //
    // ─── ESTADO DE AMBIENTE ───────────────────────────────────────────────────────────────────
    //

    const GET_ALL_ESTADO_AMBIENTE = "SELECT * FROM `estado_ambiente`";
    const GET_ESTADO_AMBIENTE_ID = "SELECT * FROM `estado_ambiente` WHERE `id_estado_ambiente` = ?";
    const GET_ESTADO_AMBIENTE_NAME = "SELECT * FROM `estado_ambiente` WHERE `name_estado_ambiente` LIKE ?";
    const INSERT_NEW_ESTADO_AMBIENTE = "INSERT INTO `estado_ambiente`(`name_estado_ambiente`) VALUES (?)";
    const UPDATE_DATA_ESTADO_AMBIENTE_ID = "UPDATE `estado_ambiente` SET `name_estado_ambiente`= ? WHERE `id_estado_ambiente` = ?";
}


