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
FROM pc
GROUP BY hd
HAVING COUNT(hd) > 1
/* 16 */

/* 17 */

/* 18 */

/* 19 */

/* 20 */

/* 21 */

/* 22 */

/* 23 */

/* 24 */

/* 25 */

/* 26 */

/* 27 */

/* 28 */

/* 29 */

/* 30 */

