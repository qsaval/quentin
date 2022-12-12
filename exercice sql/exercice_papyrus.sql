SELECT numfou, numcom
from entcom e 
WHERE numfou = 9120

SELECT numcom, numfou
from entcom e 



SELECT codart, libart, stkale, qteann 
from produit p 
WHERE stkphy <= stkale and qteann < 1000



SELECT numcom 
from entcom e 
WHERE datcom  = '2018-04-23 15:59:51'

SELECT numcom, datcom
from entcom e 
WHERE obscom <> '';

SELECT numcom
from entcom e 
order by numcom DESC;

