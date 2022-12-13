--1--
SELECT CompanyName as societe, ContactName as contact, ContactTitle as fonction, Phone as telephone
from customers
where Country = 'France';

--2--
SELECT ProductName as produit, UnitPrice as prix
from products 
join suppliers on suppliers.SupplierID = products.SupplierID 
WHERE CompanyName = 'Exotic Liquide';

--3--
SELECT CompanyName as fournisseur, COUNT(ProductID) as 'nbre produits'
from products
join suppliers on suppliers.SupplierID = products.SupplierID 
where Country = 'France'
GROUP by CompanyName
ORDER by COUNT(ProductID) DESC;

--4--
SELECT CompanyName as client, COUNT(CompanyName) as 'nbre commandes' 
from orders
join customers on customers.CustomerID = orders.CustomerID
WHERE Country = 'France'
GROUP BY CompanyName
HAVING COUNT(CompanyName)>10; 

--5--
SELECT CompanyName as client, SUM(UnitPrice * Quantity) as ca, Country as pays
from `order details` 
join orders  on orders.OrderID = `order details`.OrderID
join customers on customers.CustomerID = orders.CustomerID
group by CompanyName
HAVING SUM(UnitPrice * Quantity) > 30000
ORDER BY SUM(UnitPrice * Quantity) DESC;

--6--
SELECT customers.Country as pays
from customers 
join orders on orders.CustomerID = customers.CustomerID
join `order details` on `order details`.OrderID = orders.OrderID
join products on products.ProductID = `order details`.ProductID
join suppliers on suppliers.SupplierID = products.SupplierID
WHERE suppliers.CompanyName = 'Exotic Liquids'
GROUP BY customers.Country;

--7--
SELECT SUM(UnitPrice * Quantity) as 'montant ventes 97'
from `order details`
join orders on orders.OrderID = `order details`.OrderID 
where YEAR(OrderDate) = 1997;

--8--
SELECT MONTH(OrderDate) as 'mois 97', SUM(UnitPrice * Quantity) as 'montant ventes'
from orders
join `order details` on `order details`.OrderID = orders.OrderID
WHERE YEAR(OrderDate) = 1997
GROUP BY  MONTH(OrderDate)
order by MONTH(OrderDate) ASC; 
--9--
SELECT OrderDate as 'date de dernière commande'
FROM orders 
join customers on customers.CustomerID = orders.CustomerID
WHERE CompanyName = 'Du monde entier' AND YEAR(OrderDate) = 1998;

--10--
SELECT AVG(DATEDIFF(OrderDate,ShippedDate)) as 'delai moyen de livraison en jours' 
from orders;