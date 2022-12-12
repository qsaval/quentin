--1--
SELECT CompanyName, ContactName, ContactTitle, Phone
from customers c
where Country = 'France';

--2--
SELECT ProductName, UnitPrice
from products p 
join suppliers s on suppliers.SupplierID = products.SupplierID 
WHERE CompanyName = 'Exotic Liquide';

--3--
SELECT CompanyName, COUNT(*)
from products p 
join suppliers s on suppliers.SupplierID = products.SupplierID 
where Country = 'France'
group by ProductID;

--4--
SELECT CompanyName, COUNT(CustomerID) 
from orders o 
join customers c on customers.CustomerID = orders.CustomerID
WHERE Country = 'France' AND COUNT(CustomerID) > 10; 

--5--
SELECT CompanyName, Country , SUM(UnitPrice * Quantity)
from `order details` od 
join orders o  on orders.OrderID = `order details`.OrderID
join customers c on customers.CustomerID = orders.CustomerID
WHERE SUM(UnitPrice * Quantity)>30000

--6--
SELECT customers.Country
from customers c 
join orders o on orders.CustomerID = customers.CustomerID
join `order details` od on `order details`.OrderID = orders.OrderID
join products p on products.ProductID = `order details`.ProductID
join suppliers s on suppliers.SupplierID = products.SupplierID
WHERE CompanyName = 'Exotic Liquids'

--7--
SELECT SUM(UnitPrice * Quantity)
from `order details`
join orders o on orders.OrderID = `order details`=OrderID 
WHERE Year(OrderDate) = 2007;

--8--
SELECT MONTH(OrderDate), 
from orders o 
join `order details` od on `order details`.OrderID = orders.OrderID 
GROUP BY OrderDate 

--9--
SELECT OrderDate 
FROM orders o 
join customers c on customers.CustomerID = orders.CustomerID
WHERE CompanyName = 'Du monde entier' AND YEAR(OrderDate) = 1998

--10--
SELECT AVG(DATEDIFF(OrderDate,ShippedDate)) 
from orders o 