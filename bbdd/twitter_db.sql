DROP DATABASE IF EXISTS twitter_db;                   
CREATE DATABASE twitter_db;
show databases;
USE twitter_db;

CREATE TABLE users(
    user_id INT AUTO_INCREMENT,
    /*alias*/
    user_handle VARCHAR(50) NOT NULL UNIQUE, 
    email_adress VARCHAR(50) NOT NULL UNIQUE,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    phonenumber CHAR(10) NOT NULL UNIQUE,
    follower_count INT DEFAULT 0,
    /*fecha de creacion user*/
    created_at TIMESTAMP NOT NULL DEFAULT (NOW()), 
    PRIMARY KEY(user_id)
);

DESCRIBE users;

INSERT INTO users(user_handle,email_adress,first_name,last_name,phonenumber) VALUES
('kaesar84', 'kaesar84@gmail','César','Fernández','635450972'),
('broofe0', 'broofe0@sciencedaily.com', 'Ban', 'Roofe', '8444005516'),
('fcaldicot1', 'fcaldicot1@eepurl.com', 'Field', 'Caldicot', '9389638284'),
('eadvani2', 'eadvani2@wikia.com', 'Evvy', 'Advani', '5503782613'),
('ppetett3', 'ppetett3@barnesandnoble.com', 'Padget', 'Petett', '3563126722'),
('gtommaseo4', 'gtommaseo4@uiuc.edu', 'Galvan', 'Tommaseo', '2229382885'),
('jgascoyen5', 'jgascoyen5@cnet.com', 'Justin', 'Gascoyen', '2804670970'),
('cpeacop6', 'cpeacop6@webnode.com', 'Cecil', 'Peacop', '2268694014'),
('mhenstone7', 'mhenstone7@umich.edu', 'Marc', 'Henstone', '2481745096'),
('jnials8', 'jnials8@instagram.com', 'Jocko', 'Nials', '6163027895'),
('mdollman9', 'mdollman9@epa.gov', 'Michaella', 'Dollman', '1239358022'),
('aheathcoata', 'aheathcoata@shareasale.com', 'Aubrette', 'Heathcoat', '7173770234'),
('gpulestonb', 'gpulestonb@ox.ac.uk', 'Garry', 'Puleston', '9737972252'),
('dforsydec', 'dforsydec@state.gov', 'Den', 'Forsyde', '3955551725'),
('nmccaughend', 'nmccaughend@google.co.uk', 'Nicoli', 'Mc Caughen', '6445928189'),
('sdollinge', 'sdollinge@ucsd.edu', 'Sampson', 'Dolling', '8953363636'),
('rphinnf', 'rphinnf@ycombinator.com', 'Rosie', 'Phinn', '5047884731'),
('jpictong', 'jpictong@yolasite.com', 'Jen', 'Picton', '9213066431'),
('jousbyk', 'jousbyk@gravatar.com', 'Jsandye', 'Ousby', '6524608842'),
('gkemerl', 'gkemerl@quantcast.com', 'Gwennie', 'Kemer', '2283857215');

SELECT * FROM users;

CREATE TABLE followers (
    /* id del seguidor */
    follower_id INT NOT NULL,
    /* id del que sigues */
    following_id INT NOT NULL,
    FOREIGN KEY(follower_id) REFERENCES users(user_id),
    FOREIGN KEY(following_id) REFERENCES users(user_id),
    PRIMARY KEY(follower_id,following_id)
);

DESCRIBE followers;

/* para evitar que uno se siga a si mismo */
ALTER TABLE followers
ADD CONSTRAINT check_follower_id
CHECK (follower_id != following_id);

/* TRIGGER */
DROP TRIGGER IF EXISTS incremento_followers;
DELIMITER $$
CREATE TRIGGER incremento_followers
AFTER INSERT ON followers
FOR EACH ROW
BEGIN
UPDATE users SET follower_count = follower_count+1
WHERE user_id = NEW.follower_id;
END $$
DELIMITER ;

/* TRIGGER */
DROP TRIGGER IF EXISTS decremento_followers;
DELIMITER $$
CREATE TRIGGER decremento_followers
AFTER DELETE ON followers
FOR EACH ROW
BEGIN
UPDATE users SET follower_count = follower_count-1
WHERE user_id = DELETE.follower_id;
END $$
DELIMITER ;

INSERT INTO followers(follower_id,following_id) VALUES
(1,2),(3,2),(5,2),(1,5),(2,5),(3,1),(8,2),(11,2),(19,18),(5,1),
(3,7),(11,7),(6,7),(7,5),(7,1),(18,7),(9,7),(13,7),(9,5),(6,1);

SELECT * FROM followers;

/* contar el número de followers */
SELECT COUNT(follower_id) AS 'Followers' FROM followers WHERE follower_id=1;

/* Top 3*/
SELECT following_id, COUNT(follower_id) AS 'TOP3'
FROM followers 
GROUP BY following_id
ORDER BY TOP3 DESC
LIMIT 3;


/* Top 3*/
SELECT following_id,users.user_id, users.user_handle, COUNT(follower_id) AS followers
FROM followers
JOIN users ON users.user_id=followers.following_id
GROUP BY following_id
ORDER BY following_id DESC
LIMIT 3;


CREATE TABLE tweets(
    tweet_id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    tweet_text VARCHAR(280) NOT NULL,
    num_likes INT DEFAULT 0,
    num_retweets INT DEFAULT 0,
    num_comments INT DEFAULT 0,
    created_at TIMESTAMP NOT NULL DEFAULT (NOW()),
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    PRIMARY KEY (tweet_id)
);

INSERT INTO tweets(user_id, tweet_text)
VALUES
(1,'Hola soy kaesar84'),
(2,'Primer tweet'),
(5,'Curso MYSQL'),
(1,'Vamos a tope'),
(6,'Equipo'),
(7,'GOAT'),
(2,'GOAL'),
(1,'D10S');

 SELECT * FROM tweets;

  SELECT tweet_id, users.user_handle, tweet_text, num_likes,num_retweets,num_comments 
  FROM tweets
  JOIN users ON users.user_id=tweets.user_id
  ORDER by users.user_handle;

/*  Cuántos twwets ha echo un usuario */
SELECT tweets.user_id, users.user_handle, COUNT(tweet_id)
FROM tweets
JOIN users ON users.user_id=tweets.user_id
GROUP by user_id;

-- Sub consulta
-- Obterner los tweets de los usuarios que tienen más de 2 seguidores
SELECT tweet_id, tweet_text, user_id
FROM tweets
WHERE user_id IN(
    SELECT following_id
    FROM followers
    GROUP BY following_id
    HAVING COUNT(*) >2
)
ORDER BY user_id;

--Update
--añadir comentario
UPDATE tweets SET num_comments = num_comments+1 
WHERE tweet_id=1;

--REEMPLAZAR TEXTO
UPDATE tweets SET tweet_text = REPLACE(tweet_text,'kaesar84','César')
WHERE tweet_text LIKE '%kaesar84%';

CREATE TABLE tweet_likes(
    user_id INT NOT NULL,
    tweet_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (tweet_id) REFERENCES tweets(tweet_id),
    PRIMARY KEY (user_id, tweet_id)
);

INSERT INTO tweet_likes (user_id,tweet_id)
VALUES (1,3),(1,6),(3,6),(5,7),(1,7),(8,1),(7,7),(3,5),(3,7);

-- contar los me gusta de un tweet
SELECT tweet_id,COUNT(tweet_id) AS NUM_LIKES 
FROM tweet_likes
GROUP BY tweet_id
ORDER BY NUM_LIKES DESC ; 

--usuario con más likes
-- SELECT user_id,COUNT(tweet_id) AS USER_LIKES 
-- FROM tweet_likes
-- GROUP BY user_id
-- ORDER BY USER_LIKES DESC; 



