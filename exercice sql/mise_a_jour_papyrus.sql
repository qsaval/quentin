--1--
UPDATE vente 
set 
prix1 = prix1 *1.04, 
prix2 = prix2 * 1.02
WHERE numfou = 9180;

--2--
UPDATE vente 
set prix2 = 0, prix2 = prix1 

--3--

--4--
DELETE FROM produit 
WHERE 'codart' = 'I110'