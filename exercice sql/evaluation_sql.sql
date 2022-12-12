--1--
SELECT CompanyName, ContactName, ContactTitle, Phone
from customers c
where Country = 'France';

--2--



--7--
SELECT SUM(UnitPrice * Quantity)
from `order details`