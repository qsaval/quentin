SELECT hot_nom, hot_ville from hotel

SELECT cli_nom, cli_prenom, cli_adresse 
from client
WHERE cli_nom = 'White'

SELECT sta_nom
from station
WHERE sta_altitude < 1000 

SELECT cha_numero, cha_capacite
from chambre
WHERE cha_capacite >1

SELECT cli_nom, cli_ville
from client
WHERE cli_ville <> 'Londres'

SELECT hot_nom, hot_ville, hot_categorie
from hotel
WHERE hot_ville = 'Bretou' AND hot_categorie > 3



SELECT hot_nom, hot_categorie, hot_ville, sta_nom
from hotel
join station on hot_sta_id=sta_id

SELECT hot_nom, hot_categorie, hot_ville, cha_numero
from hotel
join chambre on cha_hot_id =  cha_id 

SELECT hot_nom, hot_categorie, hot_ville, cha_numero, MAX(cha_capacite) 
from hotel
join chambre on cha_hot_id = hot_id 
WHERE hot_ville = 'Bretou'

SELECT cli_nom, res_date, hot_nom
from client
join reservation on res_cli_id=cli_id
JOIN chambre on cha_id=res_cha_id
JOIN hotel on hot_id=cha_hot_id

SELECT cha_numero, cha_capacite, hot_nom, sta_nom
from chambre 
join hotel on hot_id=cha_hot_id
JOIN station on sta_id=hot_sta_id

SELECT cli_nom, res_date_debut, DATEDIFF(res_date_debut ,res_date_fin), hot_nom
from client
join reservation on res_cli_id=cli_id
JOIN chambre on cha_id=res_cha_id
JOIN hotel on hot_id=cha_hot_id