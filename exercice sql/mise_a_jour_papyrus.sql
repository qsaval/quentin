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
UPDATE entcom
join fournis on fournis.numfou = entcom.numfou
set obscom = '*****'
where fournis.satisf < 5;

--4--
DELETE FROM `produit` WHERE codart = 'I110';
DELETE FROM `vente` WHERE codart = 'I110';
DELETE FROM `ligcom` WHERE codart = 'I110';