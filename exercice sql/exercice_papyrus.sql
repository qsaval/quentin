--1--
SELECT numfou, numcom
from entcom e 
WHERE numfou = 9120

--2--
SELECT numcom, numfou
from entcom e 

--3--
SELECT numfou, numcom
FROM entcom

--4--
SELECT codart, libart, stkale, qteann 
from produit p 
WHERE stkphy <= stkale and qteann < 1000

--5--
SELECT posfou, nomfou
from fournis f 
WHERE posfou > 70000 AND !(posfou >80000 AND posfou <90000)

--6--
SELECT numcom 
from entcom e 
WHERE  datcom=
--7--
SELECT numcom, datcom
from entcom e 
WHERE obscom <> '';

--8--
SELECT numcom
from entcom e 
order by numcom DESC;

--9--
SELECT nomcom, qtecde*priuni
FROM `ligcom`
WHERE qtecde < 10000
GROUP BY nomcom, qtecde * priuni > 10000

--10--
SELECT nomfou,numcom
FROM fournis
JOIN entcom on entcom.numfou = fournis.numfou
GROUP BY numcom

--11--
SELECT entcom.numcom,nomfou,libart,qtecde * priuni FROM `entcom`,`fournis`,`ligcom`,`vente`,`produit`
WHERE obscom = 'commande urgente' AND entcom.numfou = fournis.numfou AND entcom.numcom = ligcom.numcom AND produit.codart = ligcom.codart
GROUP BY entcom.numcom,nomfou,libart;

-- 12 --
SELECT nomfou FROM `entcom`,`fournis`,`ligcom`
WHERE entcom.numfou = fournis.numfou and entcom.numcom = ligcom.numcom  AND qteliv >= 1 GROUP BY nomfou;

-- 13 --
SELECT numcom, datcom FROM `entcom` WHERE numfou = (SELECT numfou FROM `entcom` WHERE numcom = 70210);

-- 14 --
SELECT libart,prix1 FROM `vente`,`produit`
WHERE produit.codart = vente.codart AND stkphy > 0 AND 'prix' < (select min(prix1) FROM `vente`,`produit` 
WHERE produit.codart = vente.codart AND libart  LIKE 'R%' )GROUP BY libart,prix1;

-- 15 --
SELECT libart, numfou, nomfou, stkale, stkphy FROM `produit`, `fournis` WHERE stkphy <= (stkale * 1.5);

-- 16 --
SELECT libart, fournis.numfou, nomfou, stkale, stkphy, delliv FROM `produit`, `fournis`, `vente` WHERE stkphy <= (stkale * 1.5) AND delliv < 30;

-- 17 --
SELECT numfou, stkphy FROM `vente`, `produit` WHERE produit.codart = produit.codart GROUP BY numfou ORDER BY 'stock' DESC;

-- 18 --
SELECT libart, qtecde FROM `produit`, `ligcom` WHERE produit.codart = ligcom.codart GROUP BY libart, qteann HAVING qteann * 0.90 < qtecde;

-- 19 --
SELECT numfou, qtecde * priuni * 0.20 FROM `ligcom`, `entcom` WHERE entcom.numcom = ligcom.numcom GROUP BY numfou;