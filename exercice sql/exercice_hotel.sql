--lot 1--
--1--
SELECT hot_nom, hot_ville from hotel

--2--
SELECT cli_nom, cli_prenom, cli_adresse 
from client
WHERE cli_nom = 'White'

--3--
SELECT sta_nom
from station
WHERE sta_altitude < 1000

--4--
SELECT cha_numero, cha_capacite
from chambre
WHERE cha_capacite >1

--5--
SELECT cli_nom, cli_ville
from client
WHERE cli_ville <> 'Londres'

--6--
SELECT hot_nom, hot_ville, hot_categorie
from hotel
WHERE hot_ville = 'Bretou' AND hot_categorie > 3

--lot 2--
--7--
SELECT hot_nom, hot_categorie, hot_ville, sta_nom
from hotel
join station on hot_sta_id=sta_id

--8--
SELECT hot_nom, hot_categorie, hot_ville, cha_numero
from hotel
join chambre on cha_hot_id = cha_id 

--9--
SELECT hot_nom, hot_categorie, hot_ville, cha_numero, MAX(cha_capacite) 
from hotel
join chambre on cha_hot_id = hot_id 
WHERE hot_ville = 'Bretou'

--10--
SELECT cli_nom, res_date, hot_nom
from client
join reservation on res_cli_id=cli_id
JOIN chambre on cha_id=res_cha_id
JOIN hotel on hot_id=cha_hot_id

--11--
SELECT cha_numero, cha_capacite, hot_nom, sta_nom
from chambre 
join hotel on hot_id=cha_hot_id
JOIN station on sta_id=hot_sta_id

--12--
SELECT cli_nom, res_date_debut, DATEDIFF(res_date_debut ,res_date_fin), hot_nom
from client
join reservation on res_cli_id=cli_id
JOIN chambre on cha_id=res_cha_id
JOIN hotel on hot_id=cha_hot_id

--lot 3--
--13--
SELECT sta_nom, COUNT(*)
from hotel h
JOIN station s on sta_id=hot_sta_id 
group by hot_sta_id

--14--
SELECT sta_nom, COUNT(cha_numero)
from chambre c 
join hotel h on hot_id=cha_hot_id
join station s on sta_id=hot_sta_id
GROUP by sta_id
  
--15--
SELECT sta_nom, COUNT(cha_numero)
from chambre c 
join hotel h on hot_id=cha_hot_id
join station s on sta_id=hot_sta_id
WHERE cha_capacite >1
GROUP by sta_id

--16--
SELECT hot_nom
from client c
join reservation r on res_cli_id=cli_id
join chambre c2 on cha_id=res_cha_id
join hotel h on hot_id=cha_hot_id
where cli_nom = 'Squire'

--17--
SELECT sta_id, AVG(DATEDIFF(res_date_debut, res_date_fin))
from reservation r 
join chambre c on  cha_id=res_cha_id
join hotel h on hot_id=cha_hot_id
join station s on sta_id=hot_sta_id
group by sta_id