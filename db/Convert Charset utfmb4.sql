SELECT CONVERT(CAST(CONVERT(LocalName USING latin1) AS BINARY) USING utf8mb4) FROM country;

UPDATE country SET LocalName = CONVERT(cast(CONVERT(LocalName USING latin1) AS BINARY) USING utf8mb4);

SELECT * FROM country