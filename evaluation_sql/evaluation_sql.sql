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
GROUP by ProductID
ORDER by ProductID;
--a finir--

--4--
SELECT CompanyName as client, COUNT(CompanyName) as 'nbre commandes' 
from orders
join customers on customers.CustomerID = orders.CustomerID
WHERE Country = 'France'
GROUP BY CompanyName ;
--a finir-- 

--5--
SELECT CompanyName as client, SUM(UnitPrice * Quantity) as ca, Country as pays
from `order details` 
join orders  on orders.OrderID = `order details`.OrderID
join customers on customers.CustomerID = orders.CustomerID
group by UnitPrice;
--a finir--

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
GROUP BY UnitPrice 
order by MONTH(OrderDate) ASC 
--a finir--

--9--
SELECT OrderDate as 'date de dernière commande'
FROM orders 
join customers on customers.CustomerID = orders.CustomerID
WHERE CompanyName = 'Du monde entier' AND YEAR(OrderDate) = 1998

--10--
SELECT AVG(DATEDIFF(OrderDate,ShippedDate)) as 'delai moyen de livraison en jours' 
from orders