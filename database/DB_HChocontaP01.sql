CREATE DATABASE HChocontaP01; 
USE HChocontaP01; 

CREATE TABLE tipoEntrada
(
    idTipoEntrada INT AUTO_INCREMENT, 
    nombreTipoEntrada VARCHAR(50) NOT NULL,
    descripcionTipoEntrada VARCHAR(50) NOT NULL, 
    urlImagTipoEntrada VARCHAR(50) NOT NULL, 
    PRIMARY KEY (idTipoEntrada)
);  

CREATE TABLE usuarios
(
    id INT AUTO_INCREMENT,
    nombre VARCHAR (120) NOT NULL,
    username VARCHAR (60) NOT NULL,
    password VARCHAR (250) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE entradas
(
    idEntrada INT AUTO_INCREMENT,
    fechaEntrada DATE NOT NULL, 
    tituloEntrada VARCHAR(50) NOT NULL,
    descripcionEntrada VARCHAR(500) NOT NULL, 
    urlImagenEntrada VARCHAR(100) NULL,
    urlDocumentoEntrada VARCHAR(100) NULL,
    estadoEntrada VARCHAR(40) NOT NULL,
    idTipoEntrada INT NOT NULL,
    PRIMARY KEY (idEntrada), 
    FOREIGN KEY (idTipoEntrada) 
    REFERENCES tipoEntrada (idTipoEntrada)
);  

INSERT INTO usuarios VALUES (NULL, 'Diego Andres', 'doviedo0', 'f0315c325f79fd9e007ab900b8fe163b'); -- La Contraseña es oviedo, esta encriptada en md5

INSERT INTO tipoentrada VALUES (NULL,'Entidad','Nos orienta un propósito común','images/entidad.jpg'); 
INSERT INTO tipoentrada VALUES (NULL,'Directorio de Funcionarios','Conoce quienes somos','images/directorioFuncionarios.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Directorio institucional','Encuentra información de entidades y dependencias','images/directorioInstitucional.jpg'); 
INSERT INTO tipoentrada VALUES (NULL,'Procesos y procedimientos','Conoce nuestra forma de actuar','images/procesosProcedimientos.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Noticias','Permanece actualizado con nosotros','images/noticias.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Datos abiertos','Para investigar, usar y crear','images/datosAbiertos.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Convocatorias','Tu talento es útil para nosotros','images/convocatorias.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Preguntas y respuestas','Así respondemos a las preguntas mas frecuentes','images/preguntasRespuestas.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Metas, Objetivos e indicadores','Así avanzamos hacia nuestras metas','images/metas.jpg'); 
INSERT INTO tipoentrada VALUES (NULL,'Ofertas de empleo','Busca oportunidades laborales','images/ofertasEmpleo.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Control','Así evaluamos nuestro trabajo','images/control.jpg'); 
INSERT INTO tipoentrada VALUES (NULL,'Información adicional','Estos datos te pueden interesar','images/informacionAdicional.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Población vulnerable','Su vulnerabilidad requiere nuestra protección','images/poblacionVulnerable.jpg'); 
INSERT INTO tipoentrada VALUES (NULL,'Glosario','Aprende el significado de palabras fundamentales','images/glosario.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Contrataciones','Conoce los contratos de nuestra entidad','images/contrataciones.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Ejecución de contratos','Conoce cómo va la ejecución de los contratos','images/ejecucionContrato.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Informes','Informes ESE Hospital San Martín de de Porres','images/informes.jpg'); 
INSERT INTO tipoentrada VALUES (NULL,'Estudios e investigaciones','Descubre avances y resultados','images/estudiosInvestigacion.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Proyectos en ejecución','Así trabajamos por nuestra comunidad','images/proyectosEjecucion.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Informes de PQRS','Conoce nuestros informes de PQR','images/informePQR.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Normatividad','Estas normas definen nuestro funcionamiento','images/normatividad.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Politicas y lineamientos','Mira nuestras politicas, lineamientos, manuales','images/politicasLineamientos.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Planes','Planeamos la ruta hacia nuestra eficacia','images/planes.jpg'); 
INSERT INTO tipoentrada VALUES (NULL,'Programas','Así organizamos nuestras infancias','images/programas.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Calendario','Enteratè de nuestros proximos eventos','images/calendario.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Niños, Niñas y Adolecentes','Nuestro futuro en acción','images/ninosNinas.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Retos de participación','Aporta tu punto de vista a nuestro desarrollo','images/retos.jpg'); 
INSERT INTO tipoentrada VALUES (NULL,'Encuesta','Tu opiniòn es muy importante','images/encuesta.jpg'); 
INSERT INTO tipoentrada VALUES (NULL,'Instancias de participaciòn','Intégrate a la construcción de nuestra comunidad','images/instanciasParticipacion.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Transparencia y acceso','Transparencia y Acceso a la información publica','images/transparencia.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Trámites y Servicios ','Nuestros procedimientos estan para servirte','images/tramitesServicios.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Mecanismos de contacto','Así puedes contactarnos','images/mecanismos.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Transparencia','Facilitamos el acceso a nuestra iformación','images/transparencia.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Recepcion de solicitudes','Atendemos tus solicitudes ciudadanas','images/recepcionSolicitudes.jpg');
INSERT INTO tipoentrada VALUES (NULL,'Política y protección de datos','Protegemos la información manejada','images/proteccionDatos.jpg');