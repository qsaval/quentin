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


--5--


--6--


--7--
SELECT SUM(UnitPrice * Quantity)
from `order details`

--8--


--9--


--10--