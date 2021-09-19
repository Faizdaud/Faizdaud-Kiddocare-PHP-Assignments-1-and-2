# Faizdaud-Kiddocare-PHP-Assignment-

Assignment1 and 2 is incomplete due to me having not much experience in PHP and requiring more time than allowed. **Below are details of what is not completed:**


## Assignment1

1. Try to fix username and password comparison
2. Need to make logout.php tp process logout and redirect to login.php isntead of index.php 


## Assignment2

1. Repair CSS on the Sales Dashboard
2. Fix login and authentication 
3. Do Mysql query for the different Charts, which are:

### Total Orders: </br>
1. Find sum of orders in may 1995 by calculating the sum of orders in the **orders table**

### Total Sales: </br>
1. Have to use relationship of **orders table** relationship and **order_details table** with Order_ID as the key
2. Sales = sum (unit price * quantity)  for may 1995

### Daily Sales:</br>
1. Have to use relationship of **orders table** relationship and **order_details table** with Order_ID as the key
2. Sales for each day = Unit price * quantity for each day


### Sales by Product Categories:</br>
1. Find sales by each product by using relationship between **order_details table** and **products table**
2. Find sum (unit price * quantity) with ProductID number

### Sales by Customers:</br>
1. Use the relationship with **orders table** and **order_details table** with CustomerID as the key
2. Find number of orders of each product by each customer in may 1995 
3. Times the orders with the unit price 

### Sales by Employees:</br>
1. Use the relationship with **orders and order_details table** with EmployeeID as the key
2. Find number of orders of each product by each employee in may 1995
3. Times the orders with the unit price
