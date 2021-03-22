-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2019 a las 15:39:18
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador_inventario`
--

CREATE TABLE `administrador_inventario` (
  `id_administrador` int(11) NOT NULL,
  `nombre_admin` varchar(50) NOT NULL,
  `apellido_pat_admin` varchar(50) NOT NULL,
  `apellido_mat_admin` varchar(50) NOT NULL,
  `n_empleado_admin` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador_inventario`
--

INSERT INTO `administrador_inventario` (`id_administrador`, `nombre_admin`, `apellido_pat_admin`, `apellido_mat_admin`, `n_empleado_admin`, `contrasena`) VALUES
(1, 'Jorge', 'Elizalde', 'Salmeron', '01', '1234'),
(2, 'Jose Carlos', 'Nolasco', 'Romero', 'Carlos', '123456'),
(3, 'Ana', 'lopez', 'Romero', 'anita', '2510');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_reticula`
--

CREATE TABLE `alumno_reticula` (
  `matricula` int(11) NOT NULL,
  `ap_p_alum` varchar(20) NOT NULL,
  `ap_m_alum` varchar(20) NOT NULL,
  `nom_alum` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia_control_acceso`
--

CREATE TABLE `asistencia_control_acceso` (
  `id_asistencia` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora_entrada` time NOT NULL,
  `hora_salida` time DEFAULT NULL,
  `observacion` varchar(90) DEFAULT NULL,
  `id_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia_intendencia_sca_tesh`
--

CREATE TABLE `asistencia_intendencia_sca_tesh` (
  `Id_asistencia_intendencia` int(11) NOT NULL,
  `Hora_entrada_intendencia` time DEFAULT NULL,
  `Hora_salida_intendencia` time DEFAULT NULL,
  `Asistencia` varchar(20) NOT NULL,
  `Observaciones_intendencia` varchar(255) DEFAULT NULL,
  `Id_usuario` varchar(30) NOT NULL,
  `Id_personal_intendencia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto_sca_tesh`
--

CREATE TABLE `auto_sca_tesh` (
  `Matricula` varchar(30) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Color` varchar(30) NOT NULL,
  `Id_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_auto_sca_tesh`
--

CREATE TABLE `bitacora_auto_sca_tesh` (
  `Id_bitacora_auto` int(11) NOT NULL,
  `Placa` varchar(30) NOT NULL,
  `Fecha_salida_auto` date NOT NULL,
  `Nombre_responsable_auto` varchar(30) NOT NULL,
  `Apellido_paterno_responsable` varchar(30) NOT NULL,
  `Apellido_materno_responsable` varchar(30) NOT NULL,
  `Unidad` varchar(30) NOT NULL,
  `Hora_salida_auto_bitacora` time NOT NULL,
  `Observaciones_salida_auto_bitacora` varchar(255) DEFAULT NULL,
  `Fecha_llegada_bitacora` date DEFAULT NULL,
  `Hora_llegada_bitacora` time DEFAULT NULL,
  `Observaciones_llegada_bitacora` varchar(255) DEFAULT NULL,
  `Ofcial_bitacora_auto` varchar(50) NOT NULL,
  `Id_usuario` varchar(30) NOT NULL,
  `Matricula` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_visita_sca_tesh`
--

CREATE TABLE `bitacora_visita_sca_tesh` (
  `Id_bitacora_visita` int(11) NOT NULL,
  `Tipo_visita` varchar(30) NOT NULL,
  `Fecha_visita` date NOT NULL,
  `Matricula_alumno` int(11) DEFAULT NULL,
  `Nombre_visitante` varchar(30) NOT NULL,
  `Apellido_paterno_visitante` varchar(30) NOT NULL,
  `Apellido_materno_visitante` varchar(30) NOT NULL,
  `Procedencia_visitante` varchar(40) NOT NULL,
  `Asunto_visita` varchar(50) NOT NULL,
  `Persona_a_vistar_visita` varchar(50) NOT NULL,
  `Edificio_visita` varchar(30) NOT NULL,
  `Dependencia_visitante` varchar(40) NOT NULL,
  `Hora_entrada_visita` time NOT NULL,
  `Hora_salida_visita` time NOT NULL,
  `Oficial_registro_visita` varchar(50) NOT NULL,
  `Id_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera_fotesh`
--

CREATE TABLE `carrera_fotesh` (
  `id_carrera` int(11) NOT NULL,
  `nom_carrera` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera_reticula`
--

CREATE TABLE `carrera_reticula` (
  `clave_c` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crédito_adicional_reticula`
--

CREATE TABLE `crédito_adicional_reticula` (
  `Id_credito` int(11) NOT NULL,
  `Tipo_credito` varchar(40) NOT NULL,
  `Total_credito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_reticula`
--

CREATE TABLE `curso_reticula` (
  `id_cu` int(11) NOT NULL,
  `tipo_c` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento_control_acceso`
--

CREATE TABLE `departamento_control_acceso` (
  `id_departamento` int(11) NOT NULL,
  `departamento` varchar(80) NOT NULL,
  `ubicacion` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_inventario`
--

CREATE TABLE `equipo_inventario` (
  `id_equipo` int(11) NOT NULL,
  `nombre_e` varchar(50) NOT NULL,
  `stock` int(50) NOT NULL,
  `observaciones` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad_reticula`
--

CREATE TABLE `especialidad_reticula` (
  `Id_especialidad` varchar(30) NOT NULL,
  `Nom_especialidad` varchar(30) NOT NULL,
  `Id_carrera` varchar(30) NOT NULL,
  `Fecha_inicial` date NOT NULL,
  `Fecha_final` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotesh_39_fotesh`
--

CREATE TABLE `fotesh_39_fotesh` (
  `id_fotesh_39` int(11) NOT NULL,
  `horas` varchar(10) NOT NULL,
  `turno` varchar(20) NOT NULL,
  `periodo_semestre` varchar(20) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_profesor` varchar(50) NOT NULL,
  `id_laboratorio` int(11) NOT NULL,
  `id_fotesh` int(11) NOT NULL,
  `horario_L` date DEFAULT NULL,
  `horario_M` date DEFAULT NULL,
  `horario_Mier` date DEFAULT NULL,
  `horario_J` date DEFAULT NULL,
  `horario_Vier` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotesh_98_fotesh`
--

CREATE TABLE `fotesh_98_fotesh` (
  `id_fotesh` int(11) NOT NULL,
  `semestre` varchar(20) NOT NULL,
  `nom_practica` varchar(50) NOT NULL,
  `grupo` varchar(50) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `id_profesor` varchar(50) NOT NULL,
  `horario_L` date DEFAULT NULL,
  `horario_M` date DEFAULT NULL,
  `horario_Mier` date DEFAULT NULL,
  `horario_J` date DEFAULT NULL,
  `horario_Vier` date DEFAULT NULL,
  `alumnos` int(11) NOT NULL,
  `ciclo_escolar` varchar(50) DEFAULT NULL,
  `no_practica` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `turno` varchar(50) DEFAULT NULL,
  `fecha_programada` datetime DEFAULT NULL,
  `objetivo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramienta_control_acceso`
--

CREATE TABLE `herramienta_control_acceso` (
  `id_herramienta` int(11) NOT NULL,
  `nombre_herramienta` varchar(45) NOT NULL,
  `placas` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_reticula`
--

CREATE TABLE `historial_reticula` (
  `id_historial` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `id_materia` varchar(20) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio_fotesh`
--

CREATE TABLE `laboratorio_fotesh` (
  `id_laboratorio` int(11) NOT NULL,
  `especialidad` varchar(30) NOT NULL,
  `tipo_laboratorio` varchar(30) NOT NULL,
  `capacidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_fotesh`
--

CREATE TABLE `login_fotesh` (
  `id_Admin` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales_inventario`
--

CREATE TABLE `materiales_inventario` (
  `id_material` int(11) NOT NULL,
  `nombre_m` varchar(50) NOT NULL,
  `producto` int(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `unidad_med` varchar(50) NOT NULL,
  `proveedor` varchar(50) NOT NULL,
  `tipo_material` varchar(50) NOT NULL,
  `activo` char(1) DEFAULT 'A' COMMENT 'A = ACTIVO , I = INACTIVO',
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materiales_inventario`
--

INSERT INTO `materiales_inventario` (`id_material`, `nombre_m`, `producto`, `marca`, `cantidad`, `unidad_med`, `proveedor`, `tipo_material`, `activo`, `fecha`) VALUES
(1, 'tuercas', 1, 'truper', 50, 'media', '', 'Consumible', 'A', '2019-03-02'),
(2, 'manguera', 2, 'truper', 5, 'metros', 'klein', 'Consumible', 'A', '2019-03-02'),
(3, 'desarmadores', 3, 'truper', 10, 'ninguna', 'klein', 'No consumible', 'A', '2019-03-03'),
(4, 'ptr', 0, 'sm', 18, 'metros', 'klein', 'Consumible', 'A', '2019-03-05'),
(5, 'leds', 0, 'truper', 95, 'media', 'klein', 'Consumible', 'A', '2019-03-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_fotesh`
--

CREATE TABLE `materia_fotesh` (
  `id_materia` int(11) NOT NULL,
  `nom_materia` varchar(50) NOT NULL,
  `creditos` int(11) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `calificacion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_reticula`
--

CREATE TABLE `materia_reticula` (
  `Id_materia` varchar(20) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_intendencia_control_acceso`
--

CREATE TABLE `personal_intendencia_control_acceso` (
  `id_trabajador` int(11) NOT NULL,
  `nombre_trabajador` varchar(45) NOT NULL,
  `apellido_pat` varchar(45) NOT NULL,
  `apellido_mat` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(10) NOT NULL,
  `direccion` varchar(90) NOT NULL,
  `nss` varchar(11) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_intendencia_sca_tesh`
--

CREATE TABLE `personal_intendencia_sca_tesh` (
  `Id_personal_intendencia` varchar(30) NOT NULL,
  `Nombre_personal` varchar(30) NOT NULL,
  `Apellido_paterno_personal` varchar(30) NOT NULL,
  `Apellido_materno_personal` varchar(30) NOT NULL,
  `Id_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo_inventario`
--

CREATE TABLE `prestamo_inventario` (
  `id_prestamo` int(11) NOT NULL,
  `id_usuario` varchar(50) NOT NULL,
  `semestre` int(11) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `fecha_pres` date NOT NULL,
  `fecha_dev` date NOT NULL,
  `stock` int(50) NOT NULL,
  `id_material` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestamo_inventario`
--

INSERT INTO `prestamo_inventario` (`id_prestamo`, `id_usuario`, `semestre`, `carrera`, `fecha_pres`, `fecha_dev`, `stock`, `id_material`) VALUES
(1, 'Ana', 1, 'ISC', '2019-06-13', '0000-00-00', 3, 'tuercas'),
(2, 'Ana', 5, 'ISC', '2019-06-13', '0000-00-00', 4, 'tuercas'),
(3, 'Rafel', 6, 'ISC', '2019-06-13', '0000-00-00', 0, 'manguera'),
(4, 'Ana', 4, 'ISC', '2019-06-13', '2019-06-17', 4, 'desarmadores'),
(5, 'Mauricio', 6, 'ISC', '2019-06-13', '2019-06-17', 1, 'manguera'),
(6, 'saira', 1, 'ISC', '2019-06-24', '2019-06-26', 2, 'leds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_fotesh`
--

CREATE TABLE `profesor_fotesh` (
  `id_profesor` varchar(50) NOT NULL,
  `nom_profesor` varchar(50) NOT NULL,
  `ap_p_prof` varchar(50) NOT NULL,
  `ap_m_prof` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_alumno_sca_tesh`
--

CREATE TABLE `reporte_alumno_sca_tesh` (
  `Matricula` int(11) NOT NULL,
  `Ingresos` int(11) NOT NULL,
  `Id_bitacora_visita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_auto_sca_tesh`
--

CREATE TABLE `reporte_auto_sca_tesh` (
  `Id_reporte_auto` int(11) NOT NULL,
  `Fecha_reporte_auto` date NOT NULL,
  `Vehiculo` varchar(30) NOT NULL,
  `Area_asignada` varchar(50) NOT NULL,
  `No_tarjeta` int(11) NOT NULL,
  `Ciudadano` varchar(50) NOT NULL,
  `Comision` varchar(50) NOT NULL,
  `Cumplir_con` varchar(50) NOT NULL,
  `Hora_salida_reporte` time NOT NULL,
  `Numero_licencia` int(11) NOT NULL,
  `Vigencia_licencia` varchar(30) NOT NULL,
  `Tipo_licencia` varchar(10) NOT NULL,
  `Hora_llegada_reporte` time DEFAULT NULL,
  `Observacion_inicial` varchar(255) DEFAULT NULL,
  `Kilometraje_inicial` decimal(15,2) DEFAULT NULL,
  `Kilometraje_final` decimal(15,2) DEFAULT NULL,
  `Medidor_tanque` varchar(10) NOT NULL,
  `Autorizo` varchar(30) NOT NULL,
  `VO_BO` varchar(30) NOT NULL,
  `Recibio` varchar(30) NOT NULL,
  `Gato` varchar(10) DEFAULT NULL,
  `LLanta_refaccion` varchar(10) DEFAULT NULL,
  `LLave_tuercas` varchar(10) DEFAULT NULL,
  `Kit_herramienta` varchar(10) DEFAULT NULL,
  `Cables_corriente` varchar(10) DEFAULT NULL,
  `Extinguidor` varchar(10) DEFAULT NULL,
  `Id_usuario` varchar(30) NOT NULL,
  `Matricula` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reticula_reticula`
--

CREATE TABLE `reticula_reticula` (
  `Id_especialidad` varchar(30) NOT NULL,
  `id_historial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_reticula`
--

CREATE TABLE `user_reticula` (
  `id_user` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_inventario`
--

CREATE TABLE `usuarios_inventario` (
  `matricula` int(11) NOT NULL,
  `ape_pat` varchar(50) NOT NULL,
  `ape_mat` varchar(50) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `contrasena` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_inventario`
--

INSERT INTO `usuarios_inventario` (`matricula`, `ape_pat`, `ape_mat`, `nombre`, `usuario`, `contrasena`) VALUES
(1, 'Francisco', 'Lorenzo', 'Desiderio', 'francisco', 'labindustr'),
(14090239, 'Ana', 'Lopez', 'Reyes', 'anita', 'aduanat'),
(14090342, 'Rafael', 'Carrasco ', 'Flores', 'rafa', '1234'),
(14090345, 'Mauricio', 'Sanchez', 'lopez', 'mau', '2510'),
(145090345, 'Mario', 'Sanchez', 'Serrato ', 'Mario', '123456'),
(16090208, 'Dora', 'Bernal', 'Sanchez ', 'Dorita', 'azulcrema1'),
(16090297, 'Lissandro', 'Sanchez', 'Serrato ', 'Lichi', '123456'),
(14090347, 'lupita', 'perez', 'garcia', 'lupit', '1402');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_control_acceso`
--

CREATE TABLE `usuario_control_acceso` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `clave` varchar(9) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_sca_tesh`
--

CREATE TABLE `usuario_sca_tesh` (
  `Id_usuario` varchar(30) NOT NULL,
  `Tipo_usuario` varchar(30) NOT NULL,
  `Nombre_usuario` varchar(30) NOT NULL,
  `Apellido_paterno_usuario` varchar(30) NOT NULL,
  `Apellido_materno_usuario` varchar(30) NOT NULL,
  `Correo` varchar(40) NOT NULL,
  `Contraseña` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos_comision_control_acceso`
--

CREATE TABLE `vehiculos_comision_control_acceso` (
  `id_vehiculos_comision` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `vigilante_turno` varchar(90) NOT NULL,
  `vehiculo` varchar(45) NOT NULL,
  `area` varchar(45) NOT NULL,
  `tarjeta_efectivale` varchar(45) DEFAULT NULL,
  `conductor` varchar(200) NOT NULL,
  `direccion_comision` varchar(200) NOT NULL,
  `objetivo` varchar(45) NOT NULL,
  `hora_salida` varchar(45) DEFAULT NULL,
  `hora_entrada` varchar(45) DEFAULT NULL,
  `numero_licencia` varchar(45) NOT NULL,
  `vigencia_licencia` varchar(45) NOT NULL,
  `tipo_licencia` varchar(45) NOT NULL,
  `km_salida` varchar(45) DEFAULT NULL,
  `km_final` varchar(45) DEFAULT NULL,
  `gasolina` varchar(5) NOT NULL,
  `c_h1` varchar(45) DEFAULT NULL,
  `c_h2` varchar(45) DEFAULT NULL,
  `c_h3` varchar(45) DEFAULT NULL,
  `c_h4` varchar(45) DEFAULT NULL,
  `c_h5` varchar(45) DEFAULT NULL,
  `c_h6` varchar(45) DEFAULT NULL,
  `id_herramienta` int(11) DEFAULT NULL,
  `placas` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo_control_acceso`
--

CREATE TABLE `vehiculo_control_acceso` (
  `placas` varchar(45) NOT NULL,
  `modelo` int(11) NOT NULL,
  `color` varchar(45) NOT NULL,
  `puertas` int(11) NOT NULL,
  `transmision` varchar(45) NOT NULL,
  `cilindros` int(11) NOT NULL,
  `carro` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitante_control_acceso`
--

CREATE TABLE `visitante_control_acceso` (
  `id_visitante` int(11) NOT NULL,
  `nombre_v` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `clase_visita` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas_control_acceso`
--

CREATE TABLE `visitas_control_acceso` (
  `id_visitas` int(11) NOT NULL,
  `asunto` varchar(45) NOT NULL,
  `procedencia` varchar(50) NOT NULL,
  `persona_visitada` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora_entrada` time DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `observaciones` text,
  `id_visitante` int(11) DEFAULT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita_programada_sca_tesh`
--

CREATE TABLE `visita_programada_sca_tesh` (
  `Id_vista_programada` int(11) NOT NULL,
  `Fecha_programada` date NOT NULL,
  `Nombre_programada` varchar(30) NOT NULL,
  `Apellido_parterno_programada` varchar(30) NOT NULL,
  `Apellido_materno_programada` varchar(30) NOT NULL,
  `Procedencia_programada` varchar(40) NOT NULL,
  `Asunto_programada` varchar(50) NOT NULL,
  `Persona_a_visitar_programada` varchar(50) NOT NULL,
  `Edificio_programada` varchar(30) NOT NULL,
  `Dependencia_programada` varchar(40) NOT NULL,
  `Hora_programada` time NOT NULL,
  `Hora_entrada_programada` time DEFAULT NULL,
  `Hora_salida_programada` time DEFAULT NULL,
  `Asistencia` varchar(20) NOT NULL,
  `Id_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador_inventario`
--
ALTER TABLE `administrador_inventario`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `alumno_reticula`
--
ALTER TABLE `alumno_reticula`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `asistencia_control_acceso`
--
ALTER TABLE `asistencia_control_acceso`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Indices de la tabla `asistencia_intendencia_sca_tesh`
--
ALTER TABLE `asistencia_intendencia_sca_tesh`
  ADD PRIMARY KEY (`Id_asistencia_intendencia`),
  ADD KEY `Id_usuario` (`Id_usuario`),
  ADD KEY `Id_personal_intendencia` (`Id_personal_intendencia`);

--
-- Indices de la tabla `auto_sca_tesh`
--
ALTER TABLE `auto_sca_tesh`
  ADD PRIMARY KEY (`Matricula`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `bitacora_auto_sca_tesh`
--
ALTER TABLE `bitacora_auto_sca_tesh`
  ADD PRIMARY KEY (`Id_bitacora_auto`),
  ADD KEY `Id_usuario` (`Id_usuario`),
  ADD KEY `Matricula` (`Matricula`);

--
-- Indices de la tabla `bitacora_visita_sca_tesh`
--
ALTER TABLE `bitacora_visita_sca_tesh`
  ADD PRIMARY KEY (`Id_bitacora_visita`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `carrera_fotesh`
--
ALTER TABLE `carrera_fotesh`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `carrera_reticula`
--
ALTER TABLE `carrera_reticula`
  ADD PRIMARY KEY (`clave_c`);

--
-- Indices de la tabla `crédito_adicional_reticula`
--
ALTER TABLE `crédito_adicional_reticula`
  ADD PRIMARY KEY (`Id_credito`);

--
-- Indices de la tabla `curso_reticula`
--
ALTER TABLE `curso_reticula`
  ADD PRIMARY KEY (`id_cu`);

--
-- Indices de la tabla `departamento_control_acceso`
--
ALTER TABLE `departamento_control_acceso`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `equipo_inventario`
--
ALTER TABLE `equipo_inventario`
  ADD PRIMARY KEY (`id_equipo`);

--
-- Indices de la tabla `especialidad_reticula`
--
ALTER TABLE `especialidad_reticula`
  ADD PRIMARY KEY (`Id_especialidad`),
  ADD KEY `Id_carrera` (`Id_carrera`);

--
-- Indices de la tabla `fotesh_39_fotesh`
--
ALTER TABLE `fotesh_39_fotesh`
  ADD PRIMARY KEY (`id_fotesh_39`),
  ADD KEY `id_materia` (`id_materia`),
  ADD KEY `id_profesor` (`id_profesor`),
  ADD KEY `id_laboratorio` (`id_laboratorio`),
  ADD KEY `id_fotesh` (`id_fotesh`);

--
-- Indices de la tabla `fotesh_98_fotesh`
--
ALTER TABLE `fotesh_98_fotesh`
  ADD PRIMARY KEY (`id_fotesh`),
  ADD KEY `id_materia` (`id_materia`),
  ADD KEY `id_carrera` (`id_carrera`),
  ADD KEY `id_profesor` (`id_profesor`);

--
-- Indices de la tabla `herramienta_control_acceso`
--
ALTER TABLE `herramienta_control_acceso`
  ADD PRIMARY KEY (`id_herramienta`),
  ADD KEY `placas` (`placas`);

--
-- Indices de la tabla `historial_reticula`
--
ALTER TABLE `historial_reticula`
  ADD PRIMARY KEY (`id_historial`),
  ADD KEY `matricula` (`matricula`),
  ADD KEY `id_materia` (`id_materia`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `laboratorio_fotesh`
--
ALTER TABLE `laboratorio_fotesh`
  ADD PRIMARY KEY (`id_laboratorio`);

--
-- Indices de la tabla `login_fotesh`
--
ALTER TABLE `login_fotesh`
  ADD PRIMARY KEY (`id_Admin`);

--
-- Indices de la tabla `materiales_inventario`
--
ALTER TABLE `materiales_inventario`
  ADD PRIMARY KEY (`id_material`);

--
-- Indices de la tabla `materia_fotesh`
--
ALTER TABLE `materia_fotesh`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `materia_reticula`
--
ALTER TABLE `materia_reticula`
  ADD PRIMARY KEY (`Id_materia`);

--
-- Indices de la tabla `personal_intendencia_control_acceso`
--
ALTER TABLE `personal_intendencia_control_acceso`
  ADD PRIMARY KEY (`id_trabajador`);

--
-- Indices de la tabla `personal_intendencia_sca_tesh`
--
ALTER TABLE `personal_intendencia_sca_tesh`
  ADD PRIMARY KEY (`Id_personal_intendencia`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `prestamo_inventario`
--
ALTER TABLE `prestamo_inventario`
  ADD PRIMARY KEY (`id_prestamo`);

--
-- Indices de la tabla `profesor_fotesh`
--
ALTER TABLE `profesor_fotesh`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `reporte_alumno_sca_tesh`
--
ALTER TABLE `reporte_alumno_sca_tesh`
  ADD PRIMARY KEY (`Matricula`),
  ADD KEY `Id_bitacora_visita` (`Id_bitacora_visita`);

--
-- Indices de la tabla `reporte_auto_sca_tesh`
--
ALTER TABLE `reporte_auto_sca_tesh`
  ADD PRIMARY KEY (`Id_reporte_auto`),
  ADD KEY `Id_usuario` (`Id_usuario`),
  ADD KEY `Matricula` (`Matricula`);

--
-- Indices de la tabla `reticula_reticula`
--
ALTER TABLE `reticula_reticula`
  ADD PRIMARY KEY (`Id_especialidad`),
  ADD KEY `id_historial` (`id_historial`);

--
-- Indices de la tabla `user_reticula`
--
ALTER TABLE `user_reticula`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `matricula` (`matricula`);

--
-- Indices de la tabla `usuario_control_acceso`
--
ALTER TABLE `usuario_control_acceso`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_sca_tesh`
--
ALTER TABLE `usuario_sca_tesh`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- Indices de la tabla `vehiculos_comision_control_acceso`
--
ALTER TABLE `vehiculos_comision_control_acceso`
  ADD PRIMARY KEY (`id_vehiculos_comision`),
  ADD KEY `id_herramienta` (`id_herramienta`),
  ADD KEY `placas` (`placas`);

--
-- Indices de la tabla `vehiculo_control_acceso`
--
ALTER TABLE `vehiculo_control_acceso`
  ADD PRIMARY KEY (`placas`);

--
-- Indices de la tabla `visitante_control_acceso`
--
ALTER TABLE `visitante_control_acceso`
  ADD PRIMARY KEY (`id_visitante`);

--
-- Indices de la tabla `visitas_control_acceso`
--
ALTER TABLE `visitas_control_acceso`
  ADD PRIMARY KEY (`id_visitas`),
  ADD KEY `id_visitante` (`id_visitante`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- Indices de la tabla `visita_programada_sca_tesh`
--
ALTER TABLE `visita_programada_sca_tesh`
  ADD PRIMARY KEY (`Id_vista_programada`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador_inventario`
--
ALTER TABLE `administrador_inventario`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `alumno_reticula`
--
ALTER TABLE `alumno_reticula`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `asistencia_control_acceso`
--
ALTER TABLE `asistencia_control_acceso`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `asistencia_intendencia_sca_tesh`
--
ALTER TABLE `asistencia_intendencia_sca_tesh`
  MODIFY `Id_asistencia_intendencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bitacora_auto_sca_tesh`
--
ALTER TABLE `bitacora_auto_sca_tesh`
  MODIFY `Id_bitacora_auto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bitacora_visita_sca_tesh`
--
ALTER TABLE `bitacora_visita_sca_tesh`
  MODIFY `Id_bitacora_visita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `carrera_fotesh`
--
ALTER TABLE `carrera_fotesh`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `crédito_adicional_reticula`
--
ALTER TABLE `crédito_adicional_reticula`
  MODIFY `Id_credito` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `curso_reticula`
--
ALTER TABLE `curso_reticula`
  MODIFY `id_cu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `departamento_control_acceso`
--
ALTER TABLE `departamento_control_acceso`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `equipo_inventario`
--
ALTER TABLE `equipo_inventario`
  MODIFY `id_equipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fotesh_39_fotesh`
--
ALTER TABLE `fotesh_39_fotesh`
  MODIFY `id_fotesh_39` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fotesh_98_fotesh`
--
ALTER TABLE `fotesh_98_fotesh`
  MODIFY `id_fotesh` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `herramienta_control_acceso`
--
ALTER TABLE `herramienta_control_acceso`
  MODIFY `id_herramienta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `historial_reticula`
--
ALTER TABLE `historial_reticula`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `laboratorio_fotesh`
--
ALTER TABLE `laboratorio_fotesh`
  MODIFY `id_laboratorio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `login_fotesh`
--
ALTER TABLE `login_fotesh`
  MODIFY `id_Admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materia_fotesh`
--
ALTER TABLE `materia_fotesh`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personal_intendencia_control_acceso`
--
ALTER TABLE `personal_intendencia_control_acceso`
  MODIFY `id_trabajador` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `prestamo_inventario`
--
ALTER TABLE `prestamo_inventario`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `reporte_alumno_sca_tesh`
--
ALTER TABLE `reporte_alumno_sca_tesh`
  MODIFY `Matricula` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reporte_auto_sca_tesh`
--
ALTER TABLE `reporte_auto_sca_tesh`
  MODIFY `Id_reporte_auto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user_reticula`
--
ALTER TABLE `user_reticula`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario_control_acceso`
--
ALTER TABLE `usuario_control_acceso`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vehiculos_comision_control_acceso`
--
ALTER TABLE `vehiculos_comision_control_acceso`
  MODIFY `id_vehiculos_comision` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `visitante_control_acceso`
--
ALTER TABLE `visitante_control_acceso`
  MODIFY `id_visitante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `visitas_control_acceso`
--
ALTER TABLE `visitas_control_acceso`
  MODIFY `id_visitas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `visita_programada_sca_tesh`
--
ALTER TABLE `visita_programada_sca_tesh`
  MODIFY `Id_vista_programada` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia_control_acceso`
--
ALTER TABLE `asistencia_control_acceso`
  ADD CONSTRAINT `asistencia_control_acceso_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `personal_intendencia_control_acceso` (`id_trabajador`);

--
-- Filtros para la tabla `asistencia_intendencia_sca_tesh`
--
ALTER TABLE `asistencia_intendencia_sca_tesh`
  ADD CONSTRAINT `asistencia_intendencia_sca_tesh_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario_sca_tesh` (`Id_usuario`),
  ADD CONSTRAINT `asistencia_intendencia_sca_tesh_ibfk_2` FOREIGN KEY (`Id_personal_intendencia`) REFERENCES `personal_intendencia_sca_tesh` (`Id_personal_intendencia`);

--
-- Filtros para la tabla `auto_sca_tesh`
--
ALTER TABLE `auto_sca_tesh`
  ADD CONSTRAINT `auto_sca_tesh_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario_sca_tesh` (`Id_usuario`);

--
-- Filtros para la tabla `bitacora_auto_sca_tesh`
--
ALTER TABLE `bitacora_auto_sca_tesh`
  ADD CONSTRAINT `bitacora_auto_sca_tesh_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario_sca_tesh` (`Id_usuario`),
  ADD CONSTRAINT `bitacora_auto_sca_tesh_ibfk_2` FOREIGN KEY (`Matricula`) REFERENCES `auto_sca_tesh` (`Matricula`);

--
-- Filtros para la tabla `bitacora_visita_sca_tesh`
--
ALTER TABLE `bitacora_visita_sca_tesh`
  ADD CONSTRAINT `bitacora_visita_sca_tesh_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario_sca_tesh` (`Id_usuario`);

--
-- Filtros para la tabla `especialidad_reticula`
--
ALTER TABLE `especialidad_reticula`
  ADD CONSTRAINT `especialidad_reticula_ibfk_1` FOREIGN KEY (`Id_carrera`) REFERENCES `carrera_reticula` (`clave_c`);

--
-- Filtros para la tabla `fotesh_39_fotesh`
--
ALTER TABLE `fotesh_39_fotesh`
  ADD CONSTRAINT `fotesh_39_fotesh_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia_fotesh` (`id_materia`),
  ADD CONSTRAINT `fotesh_39_fotesh_ibfk_2` FOREIGN KEY (`id_profesor`) REFERENCES `profesor_fotesh` (`id_profesor`),
  ADD CONSTRAINT `fotesh_39_fotesh_ibfk_3` FOREIGN KEY (`id_laboratorio`) REFERENCES `laboratorio_fotesh` (`id_laboratorio`),
  ADD CONSTRAINT `fotesh_39_fotesh_ibfk_4` FOREIGN KEY (`id_fotesh`) REFERENCES `fotesh_98_fotesh` (`id_fotesh`);

--
-- Filtros para la tabla `fotesh_98_fotesh`
--
ALTER TABLE `fotesh_98_fotesh`
  ADD CONSTRAINT `fotesh_98_fotesh_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia_fotesh` (`id_materia`),
  ADD CONSTRAINT `fotesh_98_fotesh_ibfk_2` FOREIGN KEY (`id_carrera`) REFERENCES `carrera_fotesh` (`id_carrera`),
  ADD CONSTRAINT `fotesh_98_fotesh_ibfk_3` FOREIGN KEY (`id_profesor`) REFERENCES `profesor_fotesh` (`id_profesor`);

--
-- Filtros para la tabla `herramienta_control_acceso`
--
ALTER TABLE `herramienta_control_acceso`
  ADD CONSTRAINT `herramienta_control_acceso_ibfk_1` FOREIGN KEY (`placas`) REFERENCES `vehiculo_control_acceso` (`placas`);

--
-- Filtros para la tabla `historial_reticula`
--
ALTER TABLE `historial_reticula`
  ADD CONSTRAINT `historial_reticula_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `alumno_reticula` (`matricula`),
  ADD CONSTRAINT `historial_reticula_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materia_reticula` (`Id_materia`),
  ADD CONSTRAINT `historial_reticula_ibfk_3` FOREIGN KEY (`id_curso`) REFERENCES `curso_reticula` (`id_cu`);

--
-- Filtros para la tabla `personal_intendencia_sca_tesh`
--
ALTER TABLE `personal_intendencia_sca_tesh`
  ADD CONSTRAINT `personal_intendencia_sca_tesh_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario_sca_tesh` (`Id_usuario`);

--
-- Filtros para la tabla `reporte_alumno_sca_tesh`
--
ALTER TABLE `reporte_alumno_sca_tesh`
  ADD CONSTRAINT `reporte_alumno_sca_tesh_ibfk_1` FOREIGN KEY (`Id_bitacora_visita`) REFERENCES `bitacora_visita_sca_tesh` (`Id_bitacora_visita`);

--
-- Filtros para la tabla `reporte_auto_sca_tesh`
--
ALTER TABLE `reporte_auto_sca_tesh`
  ADD CONSTRAINT `reporte_auto_sca_tesh_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario_sca_tesh` (`Id_usuario`),
  ADD CONSTRAINT `reporte_auto_sca_tesh_ibfk_2` FOREIGN KEY (`Matricula`) REFERENCES `auto_sca_tesh` (`Matricula`);

--
-- Filtros para la tabla `reticula_reticula`
--
ALTER TABLE `reticula_reticula`
  ADD CONSTRAINT `reticula_reticula_ibfk_1` FOREIGN KEY (`id_historial`) REFERENCES `historial_reticula` (`id_historial`);

--
-- Filtros para la tabla `user_reticula`
--
ALTER TABLE `user_reticula`
  ADD CONSTRAINT `user_reticula_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `alumno_reticula` (`matricula`);

--
-- Filtros para la tabla `vehiculos_comision_control_acceso`
--
ALTER TABLE `vehiculos_comision_control_acceso`
  ADD CONSTRAINT `vehiculos_comision_control_acceso_ibfk_1` FOREIGN KEY (`id_herramienta`) REFERENCES `herramienta_control_acceso` (`id_herramienta`),
  ADD CONSTRAINT `vehiculos_comision_control_acceso_ibfk_2` FOREIGN KEY (`placas`) REFERENCES `vehiculo_control_acceso` (`placas`);

--
-- Filtros para la tabla `visitas_control_acceso`
--
ALTER TABLE `visitas_control_acceso`
  ADD CONSTRAINT `visitas_control_acceso_ibfk_1` FOREIGN KEY (`id_visitante`) REFERENCES `visitante_control_acceso` (`id_visitante`),
  ADD CONSTRAINT `visitas_control_acceso_ibfk_2` FOREIGN KEY (`id_departamento`) REFERENCES `departamento_control_acceso` (`id_departamento`);

--
-- Filtros para la tabla `visita_programada_sca_tesh`
--
ALTER TABLE `visita_programada_sca_tesh`
  ADD CONSTRAINT `visita_programada_sca_tesh_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario_sca_tesh` (`Id_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
