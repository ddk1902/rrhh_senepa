DROP TABLE users;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO users VALUES("1","admin","d033e22ae348aeb5660fc2140aec35850c4da997","admin","1");
INSERT INTO users VALUES("3","pabla","d61da73b20c0972372fefd65da6d6e2a0f543058","Pabla Alarcón","2");



DROP TABLE usuario;

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `dni` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nro_ficha` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nro_legajo` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `tipo_vinculo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `rubro` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `dependencia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `seccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado_civil` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `edad` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nacionalidad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `sexo` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ciudad` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `barrio` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `grado_academico` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `titulo` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `universidad` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `profesion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `res_decreto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `horario` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `carga_horaria` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado` int(5) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT INTO usuario VALUES("12","Diego Daniel","Gomez","4348718","0994358724","gomezdiego1902@gmail.com","71","41","Funcionario del SENEPA","Personal Permanente","1987-01-11","Oficina Central","Unidad de Proyectos, Convenios e Investigacion","Soltero","35","Paraguaya","masculino","Gral Aquino 1167","Asuncion","Ciudad Nueva","Universitario(En curso)","ingenieria en Ciencias Informaticas-Universidad Autonoma de Asuncion (En curso)","","Estudiante","2009-08-11","5555","07:00 a 13:00","132 horas","1");
INSERT INTO usuario VALUES("27","Carlos Adrian","Guido Rivas","784647","0981665283","carloguido@hotmail.com","171","222","funcionario del SENEPA","Personal Permanente","1984-05-17"," Oficina Central","Unidad de Proyectos, Convenios e Investigacion","Casado","58","Paraguaya","masculino","Nicolas Avellaneda Nro 61 casi Fernando del Pinedo","San Lorenzo","San Roque","Primario","Licenciatura en Administracion de Empresas","","Jefe de Unidad","2022-07-08","44444","07:00 a 13:00 horas","132 horas","1");
INSERT INTO usuario VALUES("28","Leticia Mariel","Roa Ayala","4009940","0981903587","letiroa.py@gmail.com","120","178","funcionario del SENEPA","Personal Permanente","1983-12-06","Oficina Central","Unidad de Proyectos, Convenios e Investigacion","Soltera","39","Paraguaya","femenino","Sptvo Luque?o casi Quebec","Luque","3er Barrio","Universitario(Concluido)","Licenciatura en Ciencias-Menci?n Biologia  Universidad Nacional de Asuncion","","Biologa","2008-02-26","789949449","07:00 a 13:00","132 horas","1");



