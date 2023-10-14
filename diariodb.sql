-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2023 a las 19:29:17
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `diariodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `deuda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `telefono`, `email`, `ciudad`, `deuda`) VALUES
(1, 'Nombre', 'Apellido', 'Tel?fono', 'Email', 'Ciudad', 0),
(2, 'Juan', 'P?rez', '555-123-4567', 'juan.perez@example.com', 'Ciudad A', 20656),
(3, 'Mar?a', 'Garc?a', '555-987-6543', 'maria.garcia@example.com', 'Ciudad B', 50113),
(4, 'Pedro', 'L?pez', '555-234-5678', 'pedro.lopez@example.com', 'Ciudad C', 36470),
(5, 'Ana', 'Rodr?guez', '555-876-5432', 'ana.rodriguez@example.com', 'Ciudad D', 38576),
(6, 'Luis', 'Mart?nez', '555-345-6789', 'luis.martinez@example.com', 'Ciudad E', 57519),
(7, 'Laura', 'Hern?ndez', '555-765-4321', 'laura.hernandez@example.com', 'Ciudad F', 78357),
(8, 'Carlos', 'Gonz?lez', '555-456-7890', 'carlos.gonzalez@example.com', 'Ciudad G', 79034),
(9, 'Sofia', 'D?az', '555-654-3210', 'sofia.diaz@example.com', 'Ciudad H', 74590),
(10, 'Andr?s', 'P?rez', '555-987-1234', 'andres.perez@example.com', 'Ciudad I', 17865),
(11, 'Julia', 'Smith', '555-234-5678', 'julia.smith@example.com', 'Ciudad J', 38347),
(12, 'Diego', 'Johnson', '555-876-5432', 'diego.johnson@example.com', 'Ciudad K', 20259),
(13, 'Carla', 'Williams', '555-345-6789', 'carla.williams@example.com', 'Ciudad L', 81273),
(14, 'Miguel', 'Brown', '555-654-3210', 'miguel.brown@example.com', 'Ciudad M', 97926),
(15, 'Marta', 'Davis', '555-987-1234', 'marta.davis@example.com', 'Ciudad N', 56453),
(16, 'Pablo', 'Martinez', '555-234-5678', 'pablo.martinez@example.com', 'Ciudad O', 35045),
(17, 'Elena', 'Johnson', '555-876-5432', 'elena.johnson@example.com', 'Ciudad P', 59769),
(18, 'Sergio', 'Miller', '555-345-6789', 'sergio.miller@example.com', 'Ciudad Q', 28813),
(19, 'Andrea', 'Taylor', '555-654-3210', 'andrea.taylor@example.com', 'Ciudad R', 58186),
(20, 'Ra?l', 'Anderson', '555-987-1234', 'raul.anderson@example.com', 'Ciudad S', 46446),
(21, 'Sof?a', 'Jackson', '555-234-5678', 'sofia.jackson@example.com', 'Ciudad T', 46806),
(22, 'Marcelo', 'White', '555-876-5432', 'marcelo.white@example.com', 'Ciudad U', 39646),
(23, '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `copete` text NOT NULL,
  `cuerpo` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `autor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `id_usuario`, `titulo`, `copete`, `cuerpo`, `imagen`, `fecha`, `categoria`, `autor`) VALUES
(24, 22, 'Córdoba: un motociclista baleó a un chofer de Urbacor en una discusión de tránsito', 'Fue este miércoles por la madrugada en Marqués Anexo. El conductor del camión recolector de residuos fue herido en su mano izquierda.', '<p style=\"padding: 0px 0px 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; min-height: 60px; color: rgb(0, 0, 0);\"><b>El chofer</b> de un camión recolector de basura de la empresa <b>Urbacor</b>, con antecedentes delictivos, resultó herido este miércoles por la madrugada al ser baleado por un motociclista con el mantuvo una discusión por una mala maniobra de tránsito en barrio Marqués Anexo, de la ciudad de Córdoba.</p><p style=\"padding: 1rem 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; color: rgb(0, 0, 0);\">El hecho sucedió cerca de las 2 en Tristán de Tejeda y Ávila y Quirós cuando el chofer (38) manejaba un Iveco en compañía de otros dos compañeros cuando en la intersección sostuvo una pelea verbal con el motociclista de un rodado 110 a raíz de la maniobra, indicaron fuentes policiales.</p> ', '1696427250robo-ringueletjpg.webp', '2023-10-04', 'moda', 'Juan'),
(25, 22, 'Quién es el jugador más rápido en Talleres', 'Según pudo averiguar Mundo D, se trata de alguien que supera a los delanteros que ha probado Gandolfi hasta el momento.', '<p style=\"padding: 0px 0px 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; min-height: 60px; color: rgb(0, 0, 0);\">La afirmación surgía natural. Viendo esos sprint de velocidad -así le dicen ahora a los piques- de Ramón Sosa era lógico que no hubiera dudas sobre quién es el jugador más rápido que tiene Talleres. “Mirá, bien”, le advirtieron a <b style=\"padding: 0px; margin: 0px; font-size: var(--font-size-3); -webkit-font-smoothing: antialiased;\">Mundo D</b>, una fuente directa que tiene que ver con el día a día albiazul.</p><p style=\"padding: 1rem 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; color: rgb(0, 0, 0);\">¿Más que Sosa? ¿Será Gastón Benavídez, quien muchas veces fue reconocido por las marcas que deja en el GPS en prácticas y partidos? ¿Acaso Ulises Ortegoza, definido por el DT Javier Gandolfi como el jugador más desequilibrante en Talleres? ¿Por qué no Luis Miguel Angulo, el pibe colombiano que fue titular en el debut de esta Copa de la Liga Profesional ante Gimnasia y Esgrima La Plata? ¿No talla ese pique que pedó Rodrigo Villagra para cerrar contra la marca de Lucas Passerini, en el clásico ante Belgrano?</p> ', '16964276103RY636MZNFFMBDJOBTVXH3IZUI.avif', '2023-10-04', 'deportes', 'Pepe'),
(26, 22, 'Dólar hoy en Córdoba: el “blue” alcanzó un nuevo máximo este martes 3 de octubre', 'Minuto a minuto, todas las noticias sobre lo que pasa con la divisa informal y los demás dólares financieros, cripto y oficial.', '<p style=\"padding: 0px 0px 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; min-height: 60px; color: rgb(0, 0, 0);\">El<a href=\"https://www.lavoz.com.ar/negocios/dolar-blue-hoy-en-cordoba-fuerte-suba-de-la-divisa-paralela-este-miercoles-27-de-septiembre/\" target=\"_blank\" style=\"padding: 0px; margin: 0px; font-weight: 900;\"><b style=\"padding: 0px; margin: 0px; font-size: var(--font-size-3); -webkit-font-smoothing: antialiased;\"> </b></a><a href=\"https://www.lavoz.com.ar/negocios/dolar-blue-hoy-en-cordoba-tras-un-nuevo-record-historico-a-cuanto-cotiza-este-viernes-29-de-septiembre/\" target=\"_blank\" style=\"padding: 0px; margin: 0px; font-weight: 900;\"><b style=\"padding: 0px; margin: 0px; font-size: var(--font-size-3); -webkit-font-smoothing: antialiased;\">dólar </b><i style=\"padding: 0px; margin: 0px;\"><b style=\"padding: 0px; margin: 0px; font-size: var(--font-size-3); -webkit-font-smoothing: antialiased;\">blue</b></i></a><i style=\"padding: 0px; margin: 0px;\"><b style=\"padding: 0px; margin: 0px; font-size: var(--font-size-3); -webkit-font-smoothing: antialiased;\"> </b></i>cerró este martes a <b style=\"padding: 0px; margin: 0px; font-size: var(--font-size-3); -webkit-font-smoothing: antialiased;\">$ 819 </b>para la venta en Córdoba, 11 pesos por encima del cierre del lunes, alcanzando un nuevo máximo nominal en lo que va de 2023.</p><p style=\"padding: 1rem 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; color: rgb(0, 0, 0);\">En la <i style=\"padding: 0px; margin: 0px;\">city </i>porteña, el dólar <i style=\"padding: 0px; margin: 0px;\">blue </i>mantuvo la misma tendencia y cotizó a $ 810.</p><p style=\"padding: 1rem 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; color: rgb(0, 0, 0);\"><span style=\"font-family: var(--font-guardian-bold); font-size: var(--font-size-4); text-transform: uppercase; background-color: var(--bs-body-bg); text-align: var(--bs-body-text-align);\"><b>VALOR HISTÓRICO DEL DÓLAR BLUE</b></span><br></p><p style=\"padding: 1rem 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; color: rgb(0, 0, 0);\">El viernes 29 de septiembre había alcanzado los 808 pesos para la venta en Córdoba, 800 en Buenos Aires. Pero este martes llegó a los 813 en Córdoba y los 807 en la city porteña.</p><h2 class=\"\" style=\"padding: 2rem 0px 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: var(--font-guardian-bold); font-size: var(--font-size-4); text-transform: uppercase; color: rgb(0, 0, 0);\">COTIZACIÓN DEL DÓLAR <i style=\"padding: 0px; margin: 0px;\">BLUE HOY </i>EN CÓRDOBA</h2><p style=\"padding: 1rem 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; color: rgb(0, 0, 0);\">En Córdoba, el dólar <i style=\"padding: 0px; margin: 0px;\">blue</i> cerró a <b style=\"padding: 0px; margin: 0px; font-size: var(--font-size-3); -webkit-font-smoothing: antialiased;\">$ 807 para la compra y $ 819 para la venta.</b></p> ', '1696427752646KDG7SI5HOZJZ3DB4J35HSDQ.webp', '2023-10-04', 'economia', 'Ruben'),
(27, 22, 'Elecciones 2023: Bullrich cuestionó a Macri por sus dichos sobre una eventual victoria de Milei', '“No es el momento para que plantee temas parlamentarios futuros”, dijo la candidata. El expresidente había dicho que si el libertario es presidente, los legisladores de Juntos por el Cambio debían apoyar sus reformas “razonables”.', '<p style=\"padding: 0px 0px 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; min-height: 60px; color: rgb(0, 0, 0);\">La candidata a presidenta de Juntos por el Cambio, <a href=\"https://www.lavoz.com.ar/temas/patricia-bullrich/?gclid=Cj0KCQjwmvSoBhDOARIsAK6aV7jxQvf7K3IwCssr-zmQwLNA2I8QsSuyqU_oK--b1l-gRF05ctB9G34aAoo-EALw_wcB\" target=\"_blank\" style=\"padding: 0px; margin: 0px; font-weight: 900;\">Patricia Bullrich</a>, cuestionó en las últimas horas al exmandatario <a href=\"https://www.lavoz.com.ar/temas/mauricio-macri/?gclid=Cj0KCQjwmvSoBhDOARIsAK6aV7iNvACQlXy-JuMJuvSuplT75XnVnWq3MpBPNJKR0vtwlBs001P27fMaAlrvEALw_wcB\" target=\"_blank\" style=\"padding: 0px; margin: 0px; font-weight: 900;\">Mauricio Macri</a>, quien había pedido que legisladores de ese partido apoyen eventuales reformas de <a href=\"https://www.lavoz.com.ar/temas/javier-milei/?gclid=Cj0KCQjwmvSoBhDOARIsAK6aV7i-0wsGMvGoPItWV6B3QC2V8j-AJugHVNO4GHlTqwqLOVdWnG5XjYgaAq0sEALw_wcB\" target=\"_blank\" style=\"padding: 0px; margin: 0px; font-weight: 900;\">Javier Milei</a>, el postulante de La Libertad Avanza.</p><p style=\"padding: 1rem 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; color: rgb(0, 0, 0);\">“No es el momento para que plantee temas parlamentarios futuros”, sostuvo Bullrich al referirse a los dichos de Macri.</p><p style=\"padding: 1rem 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; color: rgb(0, 0, 0);\">“Voy a debatir lo que dijo Macri porque no me parece conveniente”, aclaró en diálogo con radio <b style=\"padding: 0px; margin: 0px; font-size: var(--font-size-3); -webkit-font-smoothing: antialiased;\">Urbana Play</b>.</p><h2 class=\"\" style=\"padding: 2rem 0px 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-family: var(--font-guardian-bold); font-size: var(--font-size-4); text-transform: uppercase; color: rgb(0, 0, 0);\">QUÉ DIJO MACRI SOBRE UNA EVENTUAL PRESIDENCIA DE MILEI</h2><p style=\"padding: 1rem 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; color: rgb(0, 0, 0);\">El expresidente Mauricio Macri reiteró este martes su respaldo a la candidata presidencial de Juntos por el Cambio (JxC), Patricia Bullrich, pero dijo que espera que los legisladores de esa coalición “apoyen cualquier reforma razonable” de Javier Milei en el caso de que el postulante de la Libertad Avanza (LLA) gane las elecciones.</p><p style=\"padding: 1rem 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; color: rgb(0, 0, 0);\">Macri señaló que Bullrich “es capaz llevar adelante los cambios profundos que necesita el país” porque es necesario “volver a respetar las reglas para volver a crecer”.</p> ', '1696427974-LF6UL37HVRDSREHOYSLQRTNESE.avif', '2023-10-04', 'economia', 'Leopoldo'),
(28, 22, 'Luisana Lopilato deslumbró en la Semana de la Moda de París junto a grandes celebridades de Hollywood', 'La modelo volvió a las pasarelas en uno de los eventos de moda más importantes del mundo.', '<p style=\"padding: 0px 0px 1rem; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; min-height: 60px; color: rgb(0, 0, 0);\">Estos últimos días se llevó a cabo en Francia uno de los eventos más importantes del mundo de la moda: la París Fashion Week. Allí, muchas celebridades se hicieron presentes, unas como invitadas y otras como protagonistas. El segundo caso es el de <a href=\"https://www.lavoz.com.ar/vos/tv/luisana-lopilato-sobre-incendio-en-la-casa-de-su-hermana-podria-haber-terminado-en-tragedia/\" target=\"_blank\" style=\"padding: 0px; margin: 0px; font-weight: 900;\">Luisana Lopilato</a>.</p><p style=\"padding: 1rem 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-size: var(--font-size-3p); font-family: \"PT Serif\", serif; line-height: 1.8rem; color: rgb(0, 0, 0);\">La reconocida actriz argentina, que encantó al público con su papel de Paola Argento en <b style=\"padding: 0px; margin: 0px; font-size: var(--font-size-3); -webkit-font-smoothing: antialiased;\">Casados con hijos</b>, fue invitada por L’Oréal Paris para ser parte de un evento increíble que se llevó a cabo bajo la Torre Eiffel, que homenajeó el empoderamiento de la mujer. Del mismo también participaron grandes personalidades del mundo de la moda y de Hollywood como: Camila Cabello, Eva Longoria, Andie MacDowell, Elle Fanning, Kendall Jenner, Helen Mirren y Viola Davis.</p> ', '1696427931RJTWEXUHQRHNXEI3KZ46Z2IR2Q.webp', '2023-10-04', 'moda', 'Matias Bulich'),
(29, 22, 'El oficialismo confía en llegar al balotaje, pese a la escalada del dólar y el próximo dato de inflación', 'La suba de la divisa generó revuelo interno pero en el equipo de campaña de Sergio Massa apuntaron contra Javier Milei y los operadores financieros', '<span style=\"color: rgb(31, 31, 31); font-family: Roboto, sans-serif; font-size: 22px;\">El martes fue un día negro para el oficialismo. </span><a rel=\"noopener noreferrer\" href=\"https://www.infobae.com/economia/2023/10/10/dolar-hoy-en-vivo-a-cuanto-operan-todas-las-cotizaciones-minuto-a-minuto-este-martes-10-de-octubre/\" target=\"_blank\" style=\"text-decoration-line: none; color: rgb(11, 87, 208); hyphens: auto; overflow-wrap: break-word; font-style: italic; line-height: 1.6; font-family: Roboto, sans-serif; font-size: 22px;\"><span style=\"font-weight: 700;\">El dólar libre rompió las barreras de los $1000</span></a><span style=\"font-weight: 700; color: rgb(31, 31, 31); font-family: Roboto, sans-serif; font-size: 22px;\"> </span><span style=\"color: rgb(31, 31, 31); font-family: Roboto, sans-serif; font-size: 22px;\">y la inestabilidad cambiaria volvió a sacudir la gestión económica. En el plano político, en el peronismo no se apresuraron a hacer demasiadas cuentas, pero advirtieron, como lo han hecho siempre frente a las corridas cambiarias, que cuando el dólar paralelo sube, las consecuencias se verán en el registro de la inflación del mes siguiente.</span> ', '1697030681YQUKLXGMDFHL5AD5O32ZH6TMCM.avif', '2023-10-11', 'economia', 'Matias Bulich'),
(30, 22, 'Los incendios en Córdoba, en primera persona: la impotencia de perderlo todo', 'Los cronistas de Cadena 3 Fernando Barrionuevo, Abelardo Fonseca y Juan Pablo Viola describieron cómo fue la cobertura que realizaron en Carlos Paz y Cabalango.', '<p style=\"padding: 0.1px; margin: 20px 0px; transition: all 0.3s ease 0s; font-family: Merriweather; color: rgb(0, 0, 0); font-size: 18px; line-height: 26px;\">El incendio forestal que se desarrolló en los últimos días en el Valle de <a href=\"https://www.cadena3.com/pagina/tag/?q=Punilla\" target=\"_blank\" style=\"padding: 0px; margin: 0px; transition: opacity 0.4s ease 0s; text-decoration-line: none; color: rgb(0, 92, 168);\">Punilla</a> de <a href=\"https://www.cadena3.com/pagina/tag/?q=C%C3%B3rdoba\" target=\"_blank\" style=\"padding: 0px; margin: 0px; transition: opacity 0.4s ease 0s; text-decoration-line: none; color: rgb(0, 92, 168);\">Córdoba</a>, y que afectó una gran cantidad de viviendas a su paso, fue controlado esta madrugada del miércoles por bomberos y brigadistas, que contaron también con la ayuda natural de algunas precipitaciones dispersas y una baja en la temperatura.</p><p style=\"padding: 0.1px; margin: 20px 0px; transition: all 0.3s ease 0s; font-family: Merriweather; color: rgb(0, 0, 0); font-size: 18px; line-height: 26px;\">Aún no hay detalle de la cantidad de viviendas que fueron afectadas, y los daños que causó el incendio en cada una de ellas, principalmente en el barrio Las 400 Viviendas de <a href=\"https://www.cadena3.com/pagina/tag/?q=Carlos%20Paz\" target=\"_blank\" style=\"padding: 0px; margin: 0px; transition: opacity 0.4s ease 0s; text-decoration-line: none; color: rgb(0, 92, 168);\">Villa Carlos Paz,</a> sector en donde además se debieron realizar <b style=\"padding: 0px; margin: 0px; transition: all 0.3s ease 0s;\">numerosas evacuaciones y autoevacuaciones</b> ante la intensidad del fuego y el humo que podría afectar vías respiratorias.</p> ', '1697036118ARCHI_1028304.jpg', '2023-10-11', 'economia', 'Juan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `password`) VALUES
(22, 'Matias', 'Bulich', 'matias', 'maVMtaahhs8Xg'),
(26, 'Juan', 'Perez', 'juan', 'juYC7/4mEV4Mg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;
