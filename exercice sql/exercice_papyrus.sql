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


--10--
SELECT nomfou,numcom
FROM fournis
JOIN entcom on entcom.numfou = fournis.numfou
GROUP BY numcom

--11--


--12--


--13--


--14--


--15--


--16--


--17--


--18--


--19--