/*
09/10/2018Afgarcia0479
*/
ALTER TABLE db_schedus.usuario DROP FOREIGN KEY FK_cod_estado_usuario;
ALTER TABLE db_schedus.usuario DROP FOREIGN KEY FK_cod_rol;
ALTER TABLE db_schedus.ficha DROP FOREIGN KEY FK_cod_estado_ficha;
ALTER TABLE db_schedus.ambiente DROP FOREIGN KEY FK_cod_sede;
ALTER TABLE db_schedus.ambiente DROP FOREIGN KEY FK_cod_estado_ambiente;
ALTER TABLE db_schedus.programa_formacion DROP FOREIGN KEY FK_cod_estado_programa_formacion;
ALTER TABLE db_schedus.programa_formacion DROP FOREIGN KEY FK_cod_nivel_programa_formacion;
ALTER TABLE db_schedus.programa_formacion DROP FOREIGN KEY FK_cod_proyecto_programa_formacion;
ALTER TABLE db_schedus.competencia DROP FOREIGN KEY FK_cod_programa_formacion;
ALTER TABLE db_schedus.grupo DROP FOREIGN KEY FK_cod_ficha;
ALTER TABLE db_schedus.grupo DROP FOREIGN KEY FK_cod_ruta_ficha;
ALTER TABLE db_schedus.ruta_ficha DROP FOREIGN KEY FK_cod_jornada;
ALTER TABLE db_schedus.actividad_proyecto DROP FOREIGN KEY FK_cod_fase;
ALTER TABLE db_schedus.actividad_proyecto DROP FOREIGN KEY FK_cod_proyecto_actividad_proyecto;
ALTER TABLE db_schedus.horario_asignada DROP FOREIGN KEY FK_cod_estado_horario_asignado;
ALTER TABLE db_schedus.horario_asignada DROP FOREIGN KEY FK_cod_dias;
ALTER TABLE db_schedus.horario_asignada DROP FOREIGN KEY FK_cod_trimestre;
ALTER TABLE db_schedus.horario_asignada DROP FOREIGN KEY FK_cod_modo;
ALTER TABLE db_schedus.horario_asignada DROP FOREIGN KEY FK_cod_instructor;
ALTER TABLE db_schedus.horario_asignada DROP FOREIGN KEY FK_cod_resultado_aprendizaje;
ALTER TABLE db_schedus.horario_asignada DROP FOREIGN KEY FK_cod_ruta_ficha_horario_asignada;
ALTER TABLE db_schedus.horario_asignada DROP FOREIGN KEY FK_cod_ambiente;
ALTER TABLE db_schedus.ficha DROP FOREIGN KEY FK_cod_programa_formacion_ficha;
ALTER TABLE db_schedus.resultado_aprendizaje DROP FOREIGN KEY FK_cod_competencia;
DROP VIEW IF EXISTS db_schedus.v_ficha_programa;
DROP VIEW IF EXISTS db_schedus.v_horario_asignado;
DROP VIEW IF EXISTS db_schedus.v_ruta_ficha;
DROP VIEW IF EXISTS db_schedus.v_programa_formacion;
DROP VIEW IF EXISTS db_schedus.v_ambientes;
DROP VIEW IF EXISTS db_schedus.v_usuarios;
DROP TABLE IF EXISTS db_schedus.usuario;
DROP TABLE IF EXISTS db_schedus.rol;
DROP TABLE IF EXISTS db_schedus.estado_usuario;
DROP TABLE IF EXISTS db_schedus.ficha;
DROP TABLE IF EXISTS db_schedus.estado_ficha;
DROP TABLE IF EXISTS db_schedus.dias;
DROP TABLE IF EXISTS db_schedus.resultado_aprendizaje;
DROP TABLE IF EXISTS db_schedus.estado_programa_formacion;
DROP TABLE IF EXISTS db_schedus.nivel_programa_formacion;
DROP TABLE IF EXISTS db_schedus.competencia;
DROP TABLE IF EXISTS db_schedus.programa_formacion;
DROP TABLE IF EXISTS db_schedus.modo;
DROP TABLE IF EXISTS db_schedus.grupo;
DROP TABLE IF EXISTS db_schedus.ambiente;
DROP TABLE IF EXISTS db_schedus.sede;
DROP TABLE IF EXISTS db_schedus.estado_ambiente;
DROP TABLE IF EXISTS db_schedus.jornada;
DROP TABLE IF EXISTS db_schedus.ruta_ficha;
DROP TABLE IF EXISTS db_schedus.proyecto;
DROP TABLE IF EXISTS db_schedus.actividad_proyecto;
DROP TABLE IF EXISTS db_schedus.fase;
DROP TABLE IF EXISTS db_schedus.trimestre;
DROP TABLE IF EXISTS db_schedus.horario_asignada;
DROP TABLE IF EXISTS db_schedus.estado_horario_asignada;
CREATE TABLE db_schedus.usuario (
  id_usuario         int(10) NOT NULL AUTO_INCREMENT, 
  documento          varchar(15) UNIQUE, 
  nombre             varchar(60), 
  apellido           varchar(60), 
  email              varchar(60), 
  password           varchar(128), 
  cod_rol            int(10), 
  cod_estado_usuario int(10), 
  version            int(10), 
  create_time        timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time        timestamp NULL, 
  PRIMARY KEY (id_usuario), 
  UNIQUE INDEX (email)) comment='Este tabla del usuario para accede el sistema SCHEDUS';
CREATE TABLE db_schedus.rol (
  id_rol      int(10) NOT NULL AUTO_INCREMENT, 
  name_rol    varchar(100) UNIQUE, 
  create_time timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time timestamp NULL, 
  version     int(10), 
  PRIMARY KEY (id_rol));
CREATE TABLE db_schedus.estado_usuario (
  id_estado_usuario   int(10) NOT NULL AUTO_INCREMENT, 
  name_estado_usuario varchar(100) UNIQUE, 
  create_time         timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time         timestamp NULL, 
  version             int(10), 
  PRIMARY KEY (id_estado_usuario));
CREATE TABLE db_schedus.ficha (
  id_ficha               int(10) NOT NULL AUTO_INCREMENT, 
  num_ficha              varchar(100) UNIQUE, 
  create_time            timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time            timestamp NULL, 
  version                int(10), 
  cod_estado_ficha       int(10), 
  cod_programa_formacion int(10), 
  PRIMARY KEY (id_ficha));
CREATE TABLE db_schedus.estado_ficha (
  id_estado_ficha   int(10) NOT NULL AUTO_INCREMENT, 
  name_estado_ficha varchar(100) UNIQUE, 
  create_time       timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time       timestamp NULL, 
  version           int(10), 
  PRIMARY KEY (id_estado_ficha));
CREATE TABLE db_schedus.dias (
  id_dias   int(10) NOT NULL AUTO_INCREMENT, 
  name_dias varchar(100) UNIQUE, 
  version   int(10), 
  PRIMARY KEY (id_dias));
CREATE TABLE db_schedus.resultado_aprendizaje (
  id_resultado_aprendizaje   int(10) NOT NULL AUTO_INCREMENT, 
  num_resultado_aprendizaje1 varchar(10), 
  num_resultado_aprendizaje2 varchar(10), 
  cod_competencia            int(10), 
  name_resultado_aprendizaje varchar(100) UNIQUE, 
  create_time                timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time                timestamp NULL, 
  version                    int(10), 
  PRIMARY KEY (id_resultado_aprendizaje));
CREATE TABLE db_schedus.estado_programa_formacion (
  id_estado_programa_formacion   int(10) NOT NULL AUTO_INCREMENT, 
  name_estado_programa_formacion varchar(100) UNIQUE, 
  create_time                    timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time                    timestamp NULL, 
  version                        int(10), 
  PRIMARY KEY (id_estado_programa_formacion));
CREATE TABLE db_schedus.nivel_programa_formacion (
  id_nivel_programa_formacion   int(10) NOT NULL AUTO_INCREMENT, 
  name_nivel_programa_formacion varchar(100) UNIQUE, 
  duracion                      varchar(100), 
  create_time                   timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time                   timestamp NULL, 
  version                       int(10), 
  PRIMARY KEY (id_nivel_programa_formacion));
CREATE TABLE db_schedus.competencia (
  id_competencia         int(10) NOT NULL, 
  cod_programa_formacion int(10), 
  codigo_competencia     int(10) NOT NULL, 
  num_competencia2       varchar(20), 
  name_competencia       varchar(100) UNIQUE, 
  create_time            timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time            timestamp NULL, 
  version                int(10), 
  PRIMARY KEY (codigo_competencia));
CREATE TABLE db_schedus.programa_formacion (
  id_programa_formacion         int(10) NOT NULL AUTO_INCREMENT, 
  codigo                        varchar(10), 
  short_name_programa_formacion varchar(5), 
  name_programa_formacion       varchar(200) UNIQUE, 
  version_programa              varchar(10), 
  cod_nivel_programa_formacion  int(10), 
  cod_proyecto                  int(10), 
  cod_estado_programa_formacion int(10), 
  create_time                   timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time                   timestamp NULL, 
  version                       int(10), 
  PRIMARY KEY (id_programa_formacion));
CREATE TABLE db_schedus.modo (
  id_modo     int(10) NOT NULL AUTO_INCREMENT, 
  name_modo   varchar(100) UNIQUE, 
  create_time timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time timestamp NULL, 
  version     int(10), 
  PRIMARY KEY (id_modo));
CREATE TABLE db_schedus.grupo (
  id_grupo       int(10) NOT NULL AUTO_INCREMENT, 
  cod_ficha      int(10), 
  num_grupo      varchar(3), 
  cod_ruta_ficha int(10), 
  create_time    timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time    timestamp NULL, 
  version        int(10), 
  PRIMARY KEY (id_grupo));
CREATE TABLE db_schedus.ambiente (
  id_ambiente         int(10) NOT NULL AUTO_INCREMENT, 
  num_ambiente        varchar(100) UNIQUE, 
  cod_sede            int(10), 
  cod_estado_ambiente int(10), 
  create_time         timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time         timestamp NULL, 
  version             int(10), 
  PRIMARY KEY (id_ambiente));
CREATE TABLE db_schedus.sede (
  id_sede     int(10) NOT NULL AUTO_INCREMENT, 
  name_sede   varchar(100) UNIQUE, 
  direccion   varchar(250), 
  create_time timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time timestamp NULL, 
  version     int(10), 
  PRIMARY KEY (id_sede));
CREATE TABLE db_schedus.estado_ambiente (
  id_estado_ambiente   int(10) NOT NULL AUTO_INCREMENT, 
  name_estado_ambiente varchar(100) UNIQUE, 
  create_time          timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time          timestamp NULL, 
  version              int(10), 
  PRIMARY KEY (id_estado_ambiente));
CREATE TABLE db_schedus.jornada (
  id_jornada   int(10) NOT NULL AUTO_INCREMENT, 
  name_jornada varchar(100) UNIQUE, 
  create_time  timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time  timestamp NULL, 
  version      int(10), 
  PRIMARY KEY (id_jornada));
CREATE TABLE db_schedus.ruta_ficha (
  id_ruta_ficha   int(10) NOT NULL AUTO_INCREMENT, 
  name_ruta_ficha varchar(100) UNIQUE, 
  num_ruta_ficha  varchar(10), 
  cod_jornada     int(10), 
  fecha_inicio    date, 
  fecha_fin       date, 
  observaciones   varchar(250), 
  create_time     timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time     timestamp NULL, 
  version         int(10), 
  PRIMARY KEY (id_ruta_ficha));
CREATE TABLE db_schedus.proyecto (
  id_proyecto   int(10) NOT NULL AUTO_INCREMENT, 
  name_proyecto varchar(250) UNIQUE, 
  create_time   timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time   timestamp NULL, 
  version       int(10), 
  PRIMARY KEY (id_proyecto));
CREATE TABLE db_schedus.actividad_proyecto (
  id_actividad_proyecto   int(10) NOT NULL AUTO_INCREMENT, 
  num_actividad_proyecto  varchar(5), 
  name_actividad_proyecto varchar(100) UNIQUE, 
  cod_proyecto            int(10), 
  cod_fase                int(10), 
  create_time             timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time             timestamp NULL, 
  version                 int(10), 
  PRIMARY KEY (id_actividad_proyecto));
CREATE TABLE db_schedus.fase (
  id_fase     int(10) NOT NULL AUTO_INCREMENT, 
  name_fase   varchar(100) UNIQUE, 
  create_time timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time timestamp NULL, 
  version     int(10), 
  PRIMARY KEY (id_fase));
CREATE TABLE db_schedus.trimestre (
  id_trimestre   int(10) NOT NULL AUTO_INCREMENT, 
  name_trimestre varchar(100) UNIQUE, 
  fecha_inicio   date, 
  fecha_fin      date, 
  create_time    timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time    timestamp NULL, 
  version        int(10), 
  PRIMARY KEY (id_trimestre));
CREATE TABLE db_schedus.horario_asignada (
  id_horas_asignadas        int(10) NOT NULL AUTO_INCREMENT, 
  cod_trimestre_horario     int(10), 
  cod_modo                  int(10), 
  cod_ruta_ficha            int(10), 
  trimestre_ficha           varchar(4), 
  cod_resultado_aprendizaje int(10), 
  cod_instructor            int(10), 
  cod_dias                  int(10), 
  hora_inicio               time, 
  hora_fin                  time, 
  cod_ambiente              int(10), 
  completado                bit(1), 
  cod_estado_horario        int(10), 
  create_time               timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time               timestamp NULL, 
  version                   int(10), 
  PRIMARY KEY (id_horas_asignadas));
CREATE TABLE db_schedus.estado_horario_asignada (
  id_estado_horario_asignada   int(10) NOT NULL AUTO_INCREMENT, 
  name_estado_horario_asignada varchar(100) UNIQUE, 
  create_time                  timestamp DEFAULT CURRENT_TIMESTAMP NULL, 
  update_time                  timestamp NULL, 
  version                      int(10), 
  PRIMARY KEY (id_estado_horario_asignada));
CREATE VIEW db_schedus.v_usuarios AS
SELECT
	db_schedus.usuario.id_usuario,
	db_schedus.usuario.documento,
	db_schedus.usuario.nombre,
	db_schedus.usuario.apellido,
	db_schedus.usuario.email,
	db_schedus.usuario.password,
	db_schedus.rol.id_rol,
	db_schedus.rol.name_rol,
	db_schedus.estado_usuario.id_estado_usuario,
	db_schedus.estado_usuario.name_estado_usuario
FROM
	db_schedus.estado_usuario INNER JOIN
	db_schedus.usuario ON db_schedus.estado_usuario.id_estado_usuario = db_schedus.usuario.cod_estado_usuario INNER JOIN
	db_schedus.rol ON db_schedus.usuario.cod_rol = db_schedus.rol.id_rol;
CREATE VIEW db_schedus.v_ambientes AS
SELECT
	db_schedus.ambiente.id_ambiente,
	db_schedus.ambiente.num_ambiente,
	db_schedus.sede.name_sede,
	db_schedus.sede.direccion,
	db_schedus.estado_ambiente.name_estado_ambiente
FROM
	db_schedus.ambiente INNER JOIN
	db_schedus.sede ON db_schedus.ambiente.cod_sede = db_schedus.sede.id_sede INNER JOIN
	db_schedus.estado_ambiente ON db_schedus.ambiente.cod_estado_ambiente = db_schedus.estado_ambiente.id_estado_ambiente;
CREATE VIEW db_schedus.v_programa_formacion AS
SELECT
	db_schedus.resultado_aprendizaje.id_resultado_aprendizaje,
	db_schedus.resultado_aprendizaje.cod_competencia,
	db_schedus.resultado_aprendizaje.num_resultado_aprendizaje1,
	db_schedus.resultado_aprendizaje.num_resultado_aprendizaje2,
	db_schedus.resultado_aprendizaje.name_resultado_aprendizaje,
	db_schedus.competencia.cod_programa_formacion,
	db_schedus.competencia.codigo_competencia,
	db_schedus.competencia.num_competencia2,
	db_schedus.competencia.name_competencia,
	db_schedus.programa_formacion.id_programa_formacion,
	db_schedus.programa_formacion.codigo,
	db_schedus.programa_formacion.short_name_programa_formacion,
	db_schedus.programa_formacion.name_programa_formacion,
	db_schedus.programa_formacion.version_programa,
	db_schedus.nivel_programa_formacion.id_nivel_programa_formacion,
	db_schedus.nivel_programa_formacion.name_nivel_programa_formacion,
	db_schedus.nivel_programa_formacion.duracion,
	db_schedus.estado_programa_formacion.id_estado_programa_formacion,
	db_schedus.estado_programa_formacion.name_estado_programa_formacion
FROM
	db_schedus.competencia INNER JOIN
	db_schedus.resultado_aprendizaje ON db_schedus.competencia.id_competencia = db_schedus.resultado_aprendizaje.cod_competencia INNER JOIN
	db_schedus.programa_formacion ON db_schedus.competencia.cod_programa_formacion = db_schedus.programa_formacion.id_programa_formacion INNER JOIN
	db_schedus.estado_programa_formacion ON db_schedus.programa_formacion.cod_estado_programa_formacion = db_schedus.estado_programa_formacion.id_estado_programa_formacion INNER JOIN
	db_schedus.nivel_programa_formacion ON db_schedus.programa_formacion.cod_nivel_programa_formacion = db_schedus.nivel_programa_formacion.id_nivel_programa_formacion;
CREATE VIEW db_schedus.v_ruta_ficha AS
SELECT
	db_schedus.ruta_ficha.id_ruta_ficha,
	db_schedus.ruta_ficha.name_ruta_ficha,
	db_schedus.ruta_ficha.num_ruta_ficha,
	db_schedus.ruta_ficha.fecha_inicio,
	db_schedus.ruta_ficha.fecha_fin,
	db_schedus.ruta_ficha.observaciones,
	db_schedus.jornada.id_jornada,
	db_schedus.jornada.name_jornada,
	db_schedus.ficha.id_ficha,
	db_schedus.ficha.num_ficha,
	db_schedus.grupo.num_grupo,
	db_schedus.estado_ficha.id_estado_ficha,
	db_schedus.estado_ficha.name_estado_ficha
FROM
	db_schedus.ficha INNER JOIN
	db_schedus.grupo ON db_schedus.ficha.id_ficha = db_schedus.grupo.cod_ficha INNER JOIN
	db_schedus.estado_ficha ON db_schedus.ficha.cod_estado_ficha = db_schedus.estado_ficha.id_estado_ficha INNER JOIN
	db_schedus.ruta_ficha ON db_schedus.grupo.cod_ruta_ficha = db_schedus.ruta_ficha.id_ruta_ficha INNER JOIN
	db_schedus.jornada ON db_schedus.ruta_ficha.cod_jornada = db_schedus.jornada.id_jornada;
CREATE VIEW db_schedus.v_horario_asignado AS
SELECT
	db_schedus.trimestre.name_trimestre,
	db_schedus.trimestre.fecha_inicio,
	db_schedus.trimestre.fecha_fin,
	db_schedus.ruta_ficha.name_ruta_ficha,
	db_schedus.ruta_ficha.num_ruta_ficha,
	db_schedus.jornada.name_jornada,
	db_schedus.programa_formacion.short_name_programa_formacion,
	db_schedus.programa_formacion.name_programa_formacion,
	db_schedus.ruta_ficha.fecha_inicio AS fecha_inicio2,
	db_schedus.ruta_ficha.fecha_fin AS fecha_fin2,
	db_schedus.resultado_aprendizaje.cod_competencia,
	db_schedus.resultado_aprendizaje.num_resultado_aprendizaje1,
	db_schedus.resultado_aprendizaje.num_resultado_aprendizaje2,
	db_schedus.resultado_aprendizaje.name_resultado_aprendizaje,
	db_schedus.competencia.cod_programa_formacion,
	db_schedus.competencia.codigo_competencia,
	db_schedus.competencia.num_competencia2,
	db_schedus.competencia.name_competencia,
	db_schedus.usuario.nombre,
	db_schedus.usuario.apellido,
	db_schedus.modo.name_modo,
	db_schedus.dias.name_dias,
	db_schedus.horario_asignada.hora_inicio,
	db_schedus.horario_asignada.hora_fin,
	db_schedus.ambiente.num_ambiente,
	db_schedus.sede.name_sede,
	db_schedus.sede.direccion,
	db_schedus.estado_horario_asignada.name_estado_horario_asignada,
	db_schedus.actividad_proyecto.num_actividad_proyecto,
	db_schedus.actividad_proyecto.name_actividad_proyecto,
	db_schedus.ruta_ficha.observaciones,
	db_schedus.fase.name_fase,
	db_schedus.proyecto.name_proyecto,
	db_schedus.nivel_programa_formacion.name_nivel_programa_formacion,
	db_schedus.nivel_programa_formacion.duracion
FROM
	db_schedus.ficha INNER JOIN
	db_schedus.grupo ON db_schedus.ficha.id_ficha = db_schedus.grupo.cod_ficha INNER JOIN
	db_schedus.estado_ficha ON db_schedus.ficha.cod_estado_ficha = db_schedus.estado_ficha.id_estado_ficha INNER JOIN
	db_schedus.ruta_ficha ON db_schedus.grupo.cod_ruta_ficha = db_schedus.ruta_ficha.id_ruta_ficha INNER JOIN
	db_schedus.horario_asignada ON db_schedus.ruta_ficha.id_ruta_ficha = db_schedus.horario_asignada.cod_ruta_ficha INNER JOIN
	db_schedus.jornada ON db_schedus.ruta_ficha.cod_jornada = db_schedus.jornada.id_jornada INNER JOIN
	db_schedus.usuario ON db_schedus.horario_asignada.cod_instructor = db_schedus.usuario.id_usuario INNER JOIN
	db_schedus.dias ON db_schedus.horario_asignada.cod_dias = db_schedus.dias.id_dias INNER JOIN
	db_schedus.modo ON db_schedus.horario_asignada.cod_modo = db_schedus.modo.id_modo INNER JOIN
	db_schedus.ambiente ON db_schedus.horario_asignada.cod_ambiente = db_schedus.ambiente.id_ambiente INNER JOIN
	db_schedus.resultado_aprendizaje ON db_schedus.horario_asignada.cod_resultado_aprendizaje = db_schedus.resultado_aprendizaje.id_resultado_aprendizaje INNER JOIN
	db_schedus.trimestre ON db_schedus.horario_asignada.cod_trimestre_horario = db_schedus.trimestre.id_trimestre INNER JOIN
	db_schedus.estado_horario_asignada ON db_schedus.horario_asignada.cod_estado_horario = db_schedus.estado_horario_asignada.id_estado_horario_asignada INNER JOIN
	db_schedus.sede ON db_schedus.ambiente.cod_sede = db_schedus.sede.id_sede INNER JOIN
	db_schedus.competencia ON db_schedus.resultado_aprendizaje.cod_competencia = db_schedus.competencia.id_competencia INNER JOIN
	db_schedus.programa_formacion ON db_schedus.competencia.cod_programa_formacion = db_schedus.programa_formacion.id_programa_formacion INNER JOIN
	db_schedus.nivel_programa_formacion ON db_schedus.programa_formacion.cod_nivel_programa_formacion = db_schedus.nivel_programa_formacion.id_nivel_programa_formacion INNER JOIN
	db_schedus.proyecto ON db_schedus.programa_formacion.cod_proyecto = db_schedus.proyecto.id_proyecto INNER JOIN
	db_schedus.actividad_proyecto ON db_schedus.proyecto.id_proyecto = db_schedus.actividad_proyecto.cod_proyecto INNER JOIN
	db_schedus.fase ON db_schedus.actividad_proyecto.cod_fase = db_schedus.fase.id_fase;
CREATE VIEW db_schedus.v_ficha_programa AS
SELECT
	db_schedus.ficha.id_ficha,
	db_schedus.ficha.num_ficha,
	db_schedus.grupo.num_grupo,
	db_schedus.programa_formacion.name_programa_formacion,
	db_schedus.nivel_programa_formacion.name_nivel_programa_formacion,
	db_schedus.estado_ficha.name_estado_ficha
FROM
	db_schedus.ficha INNER JOIN
	db_schedus.grupo ON db_schedus.ficha.id_ficha = db_schedus.grupo.cod_ficha INNER JOIN
	db_schedus.estado_ficha ON db_schedus.ficha.cod_estado_ficha = db_schedus.estado_ficha.id_estado_ficha INNER JOIN
	db_schedus.programa_formacion ON db_schedus.ficha.cod_programa_formacion = db_schedus.programa_formacion.id_programa_formacion INNER JOIN
	db_schedus.nivel_programa_formacion ON db_schedus.programa_formacion.cod_nivel_programa_formacion = db_schedus.nivel_programa_formacion.id_nivel_programa_formacion;
CREATE INDEX resultado_aprendizaje 
  ON db_schedus.resultado_aprendizaje (num_resultado_aprendizaje1, num_resultado_aprendizaje2);
CREATE INDEX competencia 
  ON db_schedus.competencia (codigo_competencia);
CREATE INDEX programa_formacion 
  ON db_schedus.programa_formacion (codigo);
CREATE INDEX grupo 
  ON db_schedus.grupo (cod_ficha, num_grupo, cod_ruta_ficha);
CREATE INDEX ambiente 
  ON db_schedus.ambiente (num_ambiente, cod_sede);
CREATE INDEX ruta_ficha 
  ON db_schedus.ruta_ficha (name_ruta_ficha, num_ruta_ficha);
CREATE INDEX actividad_proyecto 
  ON db_schedus.actividad_proyecto (num_actividad_proyecto);
ALTER TABLE db_schedus.usuario ADD CONSTRAINT FK_cod_estado_usuario FOREIGN KEY (cod_estado_usuario) REFERENCES db_schedus.estado_usuario (id_estado_usuario);
ALTER TABLE db_schedus.usuario ADD CONSTRAINT FK_cod_rol FOREIGN KEY (cod_rol) REFERENCES db_schedus.rol (id_rol);
ALTER TABLE db_schedus.ficha ADD CONSTRAINT FK_cod_estado_ficha FOREIGN KEY (cod_estado_ficha) REFERENCES db_schedus.estado_ficha (id_estado_ficha);
ALTER TABLE db_schedus.ambiente ADD CONSTRAINT FK_cod_sede FOREIGN KEY (cod_sede) REFERENCES db_schedus.sede (id_sede);
ALTER TABLE db_schedus.ambiente ADD CONSTRAINT FK_cod_estado_ambiente FOREIGN KEY (cod_estado_ambiente) REFERENCES db_schedus.estado_ambiente (id_estado_ambiente);
ALTER TABLE db_schedus.programa_formacion ADD CONSTRAINT FK_cod_estado_programa_formacion FOREIGN KEY (cod_estado_programa_formacion) REFERENCES db_schedus.estado_programa_formacion (id_estado_programa_formacion);
ALTER TABLE db_schedus.programa_formacion ADD CONSTRAINT FK_cod_nivel_programa_formacion FOREIGN KEY (cod_nivel_programa_formacion) REFERENCES db_schedus.nivel_programa_formacion (id_nivel_programa_formacion);
ALTER TABLE db_schedus.programa_formacion ADD CONSTRAINT FK_cod_proyecto_programa_formacion FOREIGN KEY (cod_proyecto) REFERENCES db_schedus.proyecto (id_proyecto);
ALTER TABLE db_schedus.competencia ADD CONSTRAINT FK_cod_programa_formacion FOREIGN KEY (cod_programa_formacion) REFERENCES db_schedus.programa_formacion (id_programa_formacion);
ALTER TABLE db_schedus.grupo ADD CONSTRAINT FK_cod_ficha FOREIGN KEY (cod_ficha) REFERENCES db_schedus.ficha (id_ficha);
ALTER TABLE db_schedus.grupo ADD CONSTRAINT FK_cod_ruta_ficha FOREIGN KEY (cod_ruta_ficha) REFERENCES db_schedus.ruta_ficha (id_ruta_ficha);
ALTER TABLE db_schedus.ruta_ficha ADD CONSTRAINT FK_cod_jornada FOREIGN KEY (cod_jornada) REFERENCES db_schedus.jornada (id_jornada);
ALTER TABLE db_schedus.actividad_proyecto ADD CONSTRAINT FK_cod_fase FOREIGN KEY (cod_fase) REFERENCES db_schedus.fase (id_fase);
ALTER TABLE db_schedus.actividad_proyecto ADD CONSTRAINT FK_cod_proyecto_actividad_proyecto FOREIGN KEY (cod_proyecto) REFERENCES db_schedus.proyecto (id_proyecto);
ALTER TABLE db_schedus.horario_asignada ADD CONSTRAINT FK_cod_estado_horario_asignado FOREIGN KEY (cod_estado_horario) REFERENCES db_schedus.estado_horario_asignada (id_estado_horario_asignada);
ALTER TABLE db_schedus.horario_asignada ADD CONSTRAINT FK_cod_dias FOREIGN KEY (cod_dias) REFERENCES db_schedus.dias (id_dias);
ALTER TABLE db_schedus.horario_asignada ADD CONSTRAINT FK_cod_trimestre FOREIGN KEY (cod_trimestre_horario) REFERENCES db_schedus.trimestre (id_trimestre);
ALTER TABLE db_schedus.horario_asignada ADD CONSTRAINT FK_cod_modo FOREIGN KEY (cod_modo) REFERENCES db_schedus.modo (id_modo);
ALTER TABLE db_schedus.horario_asignada ADD CONSTRAINT FK_cod_instructor FOREIGN KEY (cod_instructor) REFERENCES db_schedus.usuario (id_usuario);
ALTER TABLE db_schedus.horario_asignada ADD CONSTRAINT FK_cod_resultado_aprendizaje FOREIGN KEY (cod_resultado_aprendizaje) REFERENCES db_schedus.resultado_aprendizaje (id_resultado_aprendizaje);
ALTER TABLE db_schedus.horario_asignada ADD CONSTRAINT FK_cod_ruta_ficha_horario_asignada FOREIGN KEY (cod_ruta_ficha) REFERENCES db_schedus.ruta_ficha (id_ruta_ficha);
ALTER TABLE db_schedus.horario_asignada ADD CONSTRAINT FK_cod_ambiente FOREIGN KEY (cod_ambiente) REFERENCES db_schedus.ambiente (id_ambiente);
ALTER TABLE db_schedus.ficha ADD CONSTRAINT FK_cod_programa_formacion_ficha FOREIGN KEY (cod_programa_formacion) REFERENCES db_schedus.programa_formacion (id_programa_formacion);
ALTER TABLE db_schedus.resultado_aprendizaje ADD CONSTRAINT FK_cod_competencia FOREIGN KEY (cod_competencia) REFERENCES db_schedus.competencia (codigo_competencia);
