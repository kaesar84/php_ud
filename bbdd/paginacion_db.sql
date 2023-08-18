DROP DATABASE IF EXISTS paginacion_db;                   
CREATE DATABASE paginacion_db;
show databases;
USE paginacion_db;

CREATE TABLE articulos(
    id INT AUTO_INCREMENT,
    titulo_articulo VARCHAR(360) NOT NULL, 
    articulo VARCHAR(360) NOT NULL, 
    created_at TIMESTAMP NOT NULL DEFAULT (NOW()), 
    PRIMARY KEY(id)
);



INSERT INTO articulos (titulo_articulo, articulo) VALUES
('Gatos en Huelga exigen más Siestas','En un sorprendente giro felino, los gatos de todo el mundo han decidido hacer una huelga para exigir un aumento en las horas de siesta diarias. Los dueños se encuentran desconcertados por la súbita actividad en el hogar.'),
('Astronauta Pierde Llaves del Cohete en el Espacio','En una hazaña cósmica que desafía la gravedad y la lógica, un astronauta accidentalmente deja caer sus llaves de cohete mientras flotaba en el espacio exterior. Ahora, la búsqueda espacial más importante es la de sus llaves perdidas.'),
('Granja de Robots Produce Leche de Tuercas','La granja del futuro ha llegado, donde las vacas han sido reemplazadas por robots lecheros que producen leche de tuercas y tornillos. Los agricultores están sorprendidos por la calidad "metálicamente deliciosa" de la nueva bebida.'),
('Suegra Robot Nombrada - "Mamá del Año"','En una extraña coincidencia, la suegra de un ingeniero de robótica fue nombrada "Mamá del Año" por su incansable apoyo y asesoramiento en la creación de robots domésticos. Se rumorea que el ingeniero tuvo algo que ver con esto.'),
('Escasez Global de Risas Desencadena "Lluvia de Chistes"','Ante la falta de risas en el mundo, los comediantes se unen para organizar una "lluvia de chistes", donde miles de chistes malos serán lanzados desde aviones en un intento desesperado por generar sonrisas.'),
('Ovejas Aprenden a Contar para Evitar Ser Esquiladas','En una gran victoria ovina, un rebaño de ovejas ha aprendido a contar hasta diez para evitar ser esquiladas. Ahora los agricultores están recurriendo a la negociación para obtener su preciada lana.'),
('Monos Abren Peluquería en la Jungla','Un grupo de monos emprendedores ha decidido abrir una peluquería en la selva, ofreciendo cortes de liana y peinados de hojas. Los clientes humanos están intrigados por la oferta de "estilo salvaje'),
('Científicos Descubren que la Gravedad es una Broma Cósmica','En un giro inesperado, los científicos han revelado que la gravedad es simplemente una broma pesada del universo. Las personas ahora intentan flotar por la vida tomando todo con ligereza.'),
('Perro Traducido al Humanés Exige Más Galletas','Después de años de investigación, un científico afirma haber traducido los ladridos de los perros al "humanés" y descubrió que la mayoría de los perros simplemente están exigiendo más galletas y tiempo de juego.'),
('Abejas Contratan Abogados por Robo de Miel','En un drama judicial inusual, las abejas han contratado a un equipo de abogados para demandar a los osos por el robo continuo de su miel. El caso se ha vuelto tan dulce que ha atraído la atención mundial.'),
('Planta de Interior Gana Premio Nobel de Botánica', 'En un giro inesperado, una modesta planta de interior ha sido galardonada con el Premio Nobel de Botánica por su habilidad para sobrevivir en condiciones de iluminación mínima y ser la mejor confidente de su dueño.'),
('Pájaros Organizan Conferencia Internacional de "Cantar y Volar"', 'Los pájaros de todo el mundo se reúnen para discutir los últimos avances en el arte de cantar y volar. El lema del evento es "¡No más cucarachas aburridas, queremos música y acrobacias aéreas!"'),
('Fantasma Demandado por Asustar sin Licencia', 'Un fantasma travieso es llevado a los tribunales por asustar a los residentes locales sin tener la licencia adecuada para el susto. Los abogados alegan que el susto ilegal ha dejado a muchas personas en estado de sorpresa.'),
('Científicos Crean Agua que Hace Reír al Beberla', 'En un experimento hilarante, científicos logran crear agua que provoca risas incontrolables al beberla. Los participantes de los estudios informan que cada sorbo es como escuchar el mejor chiste del mundo.'),
('Vacas Aprenden a Bailar para Impresionar a los Toros', 'En un intento de ganar el corazón de los toros, un grupo de vacas ha perfeccionado una coreografía de baile bovino. Se espera que los toros se queden boquiabiertos, o más bien, bovino-abiertos.'),
('Pingüinos Abren Spa de Baños Termales en la Antártida', 'Inspirados por el frío extremo, los pingüinos han inaugurado un lujoso spa de baños termales en la Antártida. Los clientes pueden disfrutar de baños de hielo caliente mientras disfrutan de vistas panorámicas de icebergs.'),
('Astrólogo Demandado por Predicciones Erróneas de Selfies Espaciales', 'Un famoso astrólogo espacial enfrenta una demanda colectiva después de que sus predicciones de selfies cósmicos resultaran ser completamente inexactas. Muchos esperaban encontrar vida extraterrestre en sus fotos.'),
('Robot de Limpieza Elegido como Alcalde de Ciudad Futurista', 'En un sorprendente acto de democracia robótica, un robot de limpieza es elegido como alcalde de una ciudad futurista. Sus primeros actos incluyen la implementación de descuentos en aceite de motor y aumentos de voltaje.'),
('Canguros Organizan Torneo Internacional de Salto en Bolsas', 'Los canguros de todo el mundo compiten en un torneo épico de salto en bolsas. El evento se anuncia con el eslogan "¡No somos solo saltos, también somos bolsas de diversión!'),
('Pez Dorado Recibe Beca para Estudiar Psicología Marina', 'Un pez dorado excepcionalmente inteligente ha sido otorgado con una beca para estudiar psicología marina en la Universidad Subacuática. Se espera que el pez brille en la investigación sobre las complejidades emocionales de los habitantes del océano.');