/* 1 */
SELECT model, speed, hd FROM PC WHERE price < 500
/* 2 */
SELECT maker FROM Product WHERE type = 'Printer' GROUP BY maker
/* 3 */
SELECT model, ram, screen FROM Laptop WHERE price > 1000
/* 4 */
SELECT * FROM Printer WHERE color = 'y'
/* 5 */
SELECT model, speed, hd FROM PC WHERE (cd = '12x' OR cd = '24x') AND price < 600
/* 6 */
SELECT DISTINCT p.maker, l.speed
FROM laptop l
JOIN product p ON p.model = l.model
WHERE l.hd >= 10
/* 7 */
SELECT product.model, pc.price
FROM Product JOIN pc ON product.model = pc.model WHERE maker = 'B'
UNION
SELECT product.model, laptop.price
FROM product JOIN laptop ON product.model=laptop.model WHERE maker='B'
UNION
SELECT product.model, printer.price
FROM product JOIN printer ON product.model=printer.model WHERE maker='B'
/* 8 */
SELECT DISTINCT maker
FROM product
WHERE type = 'PC'
EXCEPT
SELECT DISTINCT maker
FROM product
WHERE type = 'Laptop'
/* 9 */
SELECT DISTINCT maker
FROM product
JOIN pc ON product.model = pc.model
WHERE pc.speed >= 450
/* 10 */
SELECT model, price
FROM printer
WHERE price = (SELECT MAX(price) FROM printer)
/* 11 */
SELECT AVG(speed)
FROM pc
/* 12 */
SELECT AVG(speed)
FROM laptop
WHERE price > 1000
/* 13 */
SELECT AVG(pc.speed)
FROM pc, product
WHERE pc.model = product.model AND product.maker = 'A'
/* 14 */
SELECT s.class, s.name, c.country
FROM ships s
LEFT JOIN classes c ON s.class = c.class
WHERE c.numGuns >= 10
/* 15 */
SELECT hd
FROM pcex
GROUP BY hd
HAVING COUNT(hd) > 1
/* 16 */
SELECT DISTINCT p1.model, p2.model, p1.speed, p1.ram
FROM pc p1, pc p2
WHERE p1.speed = p2.speed AND p1.ram = p2.ram AND p1.model > p2.model
/* 17 */
SELECT DISTINCT p.type, l.model, l.speed
FROM Product p, Laptop l, PC c
WHERE l.speed < (SELECT MIN (speed) FROM PC) AND p.type = 'laptop'
/* 18 */
SELECT DISTINCT p.maker, pr.price
FROM product p
JOIN printer pr ON p.model = pr.model
WHERE pr.price = (SELECT MIN(price) FROM printer WHERE color = 'y')
  AND pr.color = 'y'
/* 19 */
SELECT p.maker, AVG(l.screen)
FROM product p
JOIN laptop l ON p.model = l.model
GROUP BY p.maker
/* 20 */
SELECT maker, COUNT(model)
FROM product
WHERE type = 'pc'
GROUP BY maker
HAVING COUNT(DISTINCT model) >= 3
/* 21 */
SELECT p.maker, MAX(pc.price)
FROM product p
JOIN pc ON p.model = pc.model
WHERE p.type = 'pc'
GROUP BY p.maker
/* 22 */
SELECT pc.speed, AVG(pc.price)
FROM pc
WHERE pc.speed > 600
GROUP BY pc.speed
/* 23 */
SELECT DISTINCT maker
FROM product
WHERE maker IN (
    SELECT p.maker
    FROM product p
    JOIN pc ON p.model = pc.model
    WHERE pc.speed >= 750
) AND maker IN (
    SELECT p.maker
    FROM product p
    JOIN laptop l ON p.model = l.model
    WHERE l.speed >= 750
)
/* 24 */
SELECT model
FROM (
         SELECT model, price
         FROM pc
         UNION
         SELECT model, price
         FROM Laptop
         UNION
         SELECT model, price
         FROM Printer
     ) t1
WHERE price = (
    SELECT MAX(price)
    FROM (
             SELECT price
             FROM pc
             UNION
             SELECT price
             FROM Laptop
             UNION
             SELECT price
             FROM Printer
         ) t2
);
/* 25 */
SELECT DISTINCT maker
FROM product
WHERE model IN (
    SELECT model
    FROM pc
    WHERE ram = (
        SELECT MIN(ram)
        FROM pc
    )
      AND speed = (
        SELECT MAX(speed)
        FROM pc
        WHERE ram = (
            SELECT MIN(ram)
            FROM pc
        )
    )
)
  AND maker IN (
    SELECT maker
    FROM product
    WHERE type='printer'
)
/* 26 */
SELECT AVG(price)
FROM (
         SELECT price
         FROM pc
         WHERE model IN (
             SELECT model
             FROM product
             WHERE maker='A'
         )
         UNION ALL
         SELECT price
         FROM laptop
         WHERE model IN (
             SELECT model
             FROM product
             WHERE maker='A'
         )
     ) AS avg_price
/* 27 */
SELECT maker, AVG(hd)
FROM product t1 JOIN pc t2 ON t1.model=t2.model
WHERE maker IN (
    SELECT maker
    FROM product
    WHERE type='printer'
)
GROUP BY maker;
/* 28 */
SELECT COUNT(maker)
FROM (
         SELECT maker
         FROM product
         GROUP BY maker
         HAVING COUNT(model) = 1
     ) AS single_model_makers
/* 29 */
SELECT t.point, t.date, SUM(t.inc) AS приход, SUM(t.out) AS расход
FROM (
         SELECT point, date, inc, NULL AS out FROM Income_o
         UNION ALL
         SELECT point, date, NULL AS inc, out FROM Outcome_o
     ) AS t
GROUP BY t.point, t.date
/* 30 */
SELECT
    point,
    date,
    SUM(out) as total_out,
    SUM(inc) as total_inc
FROM
    (
    SELECT point, date, NULL as out, SUM(inc) as inc
    FROM Income
    GROUP BY point, date UNION ALL
    SELECT point, date, SUM(out) as out, NULL as inc
    FROM Outcome
    GROUP BY point, date
    ) as SubQuery
GROUP BY point, date;

